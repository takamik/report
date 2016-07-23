<?php
use Orm\Model;

class Model_User extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'mail',
		'sort',
		'deliver_flag',
		'delete_flag',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('mail', 'Mail', 'required|max_length[255]');
		$val->add_field('sort', 'Sort', 'required|valid_string[numeric]');
		$val->add_field('deliver_flag', 'Deliver Flag', 'required|valid_string[numeric]');
		$val->add_field('delete_flag', 'Delete Flag', 'required|valid_string[numeric]');

		return $val;
	}

}
