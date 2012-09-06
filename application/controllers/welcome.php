<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// manual connection to Mamcache
		$memcache = new Memcache;
		$memcache->connect("localhost",11211);
	
		echo "Server's version: " . $memcache->getVersion() . "<br />\n";
	
		$data = 'This is working';
	
		$memcache->set("key",$data,false,10);
		echo "cache expires in 10 seconds<br />\n";
	
		echo "Data from the cache:<br />\n";
		var_dump($memcache->get("key"));
		echo 'If this is all working, <a href="/welcome/go">click here</a> view comparisions';
		
	}
	
	public function go()
	{
		$cachetime = 10; // number of seconds to cache for
		$data = array();
		$data['cachereset'] = 0;
		
		// cache calls
		$startTime = microtime(true);
		$this->load->driver('cache');
		$cache = $this->cache->memcached->get('alluserscount');
		if (!$cache){
		  $data['cachereset'] = 1;
		  $this->load->model('Users','',TRUE);
		  $cache = $this->Users->getAll(); 
		  $this->cache->memcached->save('alluserscount',$cache, $cachetime);
		}  
		$data['cache_result'] = $cache;
		$data['cache_time'] = microtime(true)-$startTime;
		
		// normal query calls
		$startTime = microtime(true);
		$this->load->model('Users','',TRUE);
		$data['normal_result'] = $this->Users->getAll(); 
		$data['normal_time'] = microtime(true)-$startTime;
		
		$this->load->view('comparision',$data);
		//var_dump($this->cache->memcached->cache_info());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */