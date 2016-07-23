<?php
use Orm\Model;

class Model_Appointment extends Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'visit_at',
		'channel_01',
		'agent_01',
		'client_01',
		'brand_01',
		'product_01',
		'memo_01',
		'channel_02',
		'agent_02',
		'client_02',
		'brand_02',
		'product_02',
		'memo_02',
		'channel_03',
		'agent_03',
		'client_03',
		'brand_03',
		'product_03',
		'memo_03',
		'channel_04',
		'agent_04',
		'client_04',
		'brand_04',
		'product_04',
		'memo_04',
		'channel_05',
		'agent_05',
		'client_05',
		'brand_05',
		'product_05',
		'memo_05',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('user_id', 'User Id', 'required|valid_string[numeric]');
		$val->add_field('visit_at', 'Visit At', 'required');
		$val->add_field('channel_01', 'Channel 01', 'required|valid_string[numeric]');
		$val->add_field('agent_01', 'Agent 01', 'required|max_length[255]');
		$val->add_field('client_01', 'Client 01', 'required|max_length[255]');
		$val->add_field('brand_01', 'Brand 01', 'required|max_length[255]');
		$val->add_field('product_01', 'Product 01', 'required|valid_string[numeric]');
		$val->add_field('memo_01', 'Memo 01', 'required');
		$val->add_field('channel_02', 'Channel 02', 'required|valid_string[numeric]');
		$val->add_field('agent_02', 'Agent 02', 'required|max_length[255]');
		$val->add_field('client_02', 'Client 02', 'required|max_length[255]');
		$val->add_field('brand_02', 'Brand 02', 'required|max_length[255]');
		$val->add_field('product_02', 'Product 02', 'required|valid_string[numeric]');
		$val->add_field('memo_02', 'Memo 02', 'required');
		$val->add_field('channel_03', 'Channel 03', 'required|valid_string[numeric]');
		$val->add_field('agent_03', 'Agent 03', 'required|max_length[255]');
		$val->add_field('client_03', 'Client 03', 'required|max_length[255]');
		$val->add_field('brand_03', 'Brand 03', 'required|max_length[255]');
		$val->add_field('product_03', 'Product 03', 'required|valid_string[numeric]');
		$val->add_field('memo_03', 'Memo 03', 'required');
		$val->add_field('channel_04', 'Channel 04', 'required|valid_string[numeric]');
		$val->add_field('agent_04', 'Agent 04', 'required|max_length[255]');
		$val->add_field('client_04', 'Client 04', 'required|max_length[255]');
		$val->add_field('brand_04', 'Brand 04', 'required|max_length[255]');
		$val->add_field('product_04', 'Product 04', 'required|valid_string[numeric]');
		$val->add_field('memo_04', 'Memo 04', 'required');
		$val->add_field('channel_05', 'Channel 05', 'required|valid_string[numeric]');
		$val->add_field('agent_05', 'Agent 05', 'required|max_length[255]');
		$val->add_field('client_05', 'Client 05', 'required|max_length[255]');
		$val->add_field('brand_05', 'Brand 05', 'required|max_length[255]');
		$val->add_field('product_05', 'Product 05', 'required|valid_string[numeric]');
		$val->add_field('memo_05', 'Memo 05', 'required');

		return $val;
	}


// add
	public static function getCsvData()
	{
		return DB::query('
select appointments.visit_at, users.name, users.mail
 ,c1.name, appointments.agent_01, appointments.client_01, appointments.brand_01, p1.name, appointments.memo_01
 ,c2.name, appointments.agent_02, appointments.client_02, appointments.brand_02, p2.name, appointments.memo_02
 ,c3.name, appointments.agent_03, appointments.client_03, appointments.brand_03, p3.name, appointments.memo_03
 ,c4.name, appointments.agent_04, appointments.client_04, appointments.brand_04, p4.name, appointments.memo_04
 ,c5.name, appointments.agent_05, appointments.client_05, appointments.brand_05, p5.name, appointments.memo_05
 from appointments
 join users on appointments.user_id = users.id
 left join channels c1 on appointments.channel_01 = c1.id
 left join channels c2 on appointments.channel_02 = c2.id
 left join channels c3 on appointments.channel_03 = c3.id
 left join channels c4 on appointments.channel_04 = c4.id
 left join channels c5 on appointments.channel_05 = c5.id
 left join products p1 on appointments.product_01 = p1.id
 left join products p2 on appointments.product_02 = p2.id
 left join products p3 on appointments.product_03 = p3.id
 left join products p4 on appointments.product_04 = p4.id
 left join products p5 on appointments.product_05 = p5.id')
				->execute()->as_array();

	}






}
