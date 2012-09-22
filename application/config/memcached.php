<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 $config= array(
    'default' => array(
        'host' => '127.0.0.1',
        'port'        => 11211,
        'weight'    => 80
    ),
    'server_1' => array(
        'host' => '127.0.0.2',
        'port'        => 11211,
        'weight'    => 50
    ),
    'server_2' => array(
        'host' => '127.0.0.3',
        'port'        => 11211,
        'weight'    => 10
    )
);  

/* End of file memcached.php */
/* Location: ./application/config/memcached.php */