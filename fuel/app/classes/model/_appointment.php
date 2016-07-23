<?php
use Orm\Model;

class Model_Appointment extends Model
{
	protected static $_properties = array(
		'id',
		'member_id',
		'visit_at',
		'channel',
		'agent',
		'client',
		'brand',
		'product',
		'memo',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
//			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
//			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('member_id', 'Member Id', 'required|valid_string[numeric]');
		$val->add_field('visit_at', 'Visit At', 'required');
		$val->add_field('channel', 'Channel', 'required|valid_string[numeric]');
		$val->add_field('agent', 'Agent', 'required|max_length[255]');
		$val->add_field('client', 'Client', 'required|max_length[255]');
		$val->add_field('brand', 'Brand', 'required|max_length[255]');
		$val->add_field('product', 'Product', 'required|valid_string[numeric]');
		$val->add_field('memo', 'Memo', 'required');

		return $val;
	}

}
