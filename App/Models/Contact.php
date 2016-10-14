<?php
namespace ModelsDB;
use Illuminate\Database\Eloquent\Model as Eloquent ;
class Contact extends Eloquent
{
		protected $table = 'contacts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['first_name', 'last_name', 'email', 'phone'];
		/*
		* make sure you have make table contact if not
		* create with this sql
		*
		CREATE TABLE IF NOT EXISTS `contacts` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `first_name` varchar(200) NOT NULL,
		  `last_name` varchar(200) NOT NULL,
		  `email` varchar(200) NOT NULL,
		  `phone` varchar(200) NOT NULL,
		  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
		*/
}
