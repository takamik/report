<?php
class Controller_Appointment extends Controller_Template
{
	public function before()
	{
		parent::before();
		$this->template->set_global('user_list', array('0' => '選択してください。') +
			Arr::assoc_to_keyval(Model_User::find('all'), 'id', 'name'));
		$this->template->set_global('channel_list', Util_Define::getChannelName());
		$this->template->set_global('product_list', array('0' => '選択してください。') +
			Util_Define::getProductName());
	}

	public function action_index()
	{
		$data['appointments'] = Model_Appointment::find('all');
		$this->template->title = "Appointments";
		$this->template->content = View::forge('appointment/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('appointment');

		if ( ! $data['appointment'] = Model_Appointment::find($id))
		{
			Session::set_flash('error', 'Could not find appointment #'.$id);
			Response::redirect('appointment');
		}

		$this->template->title = "Appointment";
		$this->template->content = View::forge('appointment/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Appointment::validate('create');

			if ($val->run())
			{
				$appointment = Model_Appointment::forge(array(
					'member_id' => Input::post('member_id'),
					'visit_at' => Input::post('visit_at'),
					'channel' => Input::post('channel'),
					'agent' => Input::post('agent'),
					'client' => Input::post('client'),
					'brand' => Input::post('brand'),
					'product' => Input::post('product'),
					'memo' => Input::post('memo'),
				));

				if ($appointment and $appointment->save())
				{
					Session::set_flash('success', 'Added appointment #'.$appointment->id.'.');

					Response::redirect('appointment');
				}

				else
				{
					Session::set_flash('error', 'Could not save appointment.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Appointments";
		$this->template->content = View::forge('appointment/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('appointment');

		if ( ! $appointment = Model_Appointment::find($id))
		{
			Session::set_flash('error', 'Could not find appointment #'.$id);
			Response::redirect('appointment');
		}

		$val = Model_Appointment::validate('edit');

		if ($val->run())
		{
			$appointment->member_id = Input::post('member_id');
			$appointment->visit_at = Input::post('visit_at');
			$appointment->channel = Input::post('channel');
			$appointment->agent = Input::post('agent');
			$appointment->client = Input::post('client');
			$appointment->brand = Input::post('brand');
			$appointment->product = Input::post('product');
			$appointment->memo = Input::post('memo');

			if ($appointment->save())
			{
				Session::set_flash('success', 'Updated appointment #' . $id);

				Response::redirect('appointment');
			}

			else
			{
				Session::set_flash('error', 'Could not update appointment #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$appointment->member_id = $val->validated('member_id');
				$appointment->visit_at = $val->validated('visit_at');
				$appointment->channel = $val->validated('channel');
				$appointment->agent = $val->validated('agent');
				$appointment->client = $val->validated('client');
				$appointment->brand = $val->validated('brand');
				$appointment->product = $val->validated('product');
				$appointment->memo = $val->validated('memo');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('appointment', $appointment, false);
		}

		$this->template->title = "Appointments";
		$this->template->content = View::forge('appointment/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('appointment');

		if ($appointment = Model_Appointment::find($id))
		{
			$appointment->delete();

			Session::set_flash('success', 'Deleted appointment #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete appointment #'.$id);
		}

		Response::redirect('appointment');

	}

}
