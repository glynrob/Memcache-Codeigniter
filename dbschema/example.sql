
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL auto_increment,
  `address` text,
  `userid` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `addresses` */

insert  into `addresses`(`id`,`address`,`userid`) values (1,'Street 1',1);
insert  into `addresses`(`id`,`address`,`userid`) values (2,'Street 2',2);
insert  into `addresses`(`id`,`address`,`userid`) values (3,'Street 3',3);
insert  into `addresses`(`id`,`address`,`userid`) values (4,'Street 4',4);
insert  into `addresses`(`id`,`address`,`userid`) values (5,'Street 5',5);
insert  into `addresses`(`id`,`address`,`userid`) values (6,'Street 6',6);
insert  into `addresses`(`id`,`address`,`userid`) values (7,'Street 7',7);
insert  into `addresses`(`id`,`address`,`userid`) values (8,'Street 8',8);
insert  into `addresses`(`id`,`address`,`userid`) values (9,'Street 9',9);
insert  into `addresses`(`id`,`address`,`userid`) values (10,'Street 10',10);

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`name`) values (1,'test');
insert  into `users`(`id`,`name`) values (2,'test2');
insert  into `users`(`id`,`name`) values (3,'test3');
insert  into `users`(`id`,`name`) values (4,'test4');
insert  into `users`(`id`,`name`) values (5,'test5');
insert  into `users`(`id`,`name`) values (6,'test6');
insert  into `users`(`id`,`name`) values (7,'test7');
insert  into `users`(`id`,`name`) values (8,'test8');
insert  into `users`(`id`,`name`) values (9,'test9');
insert  into `users`(`id`,`name`) values (10,'test10');
