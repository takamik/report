<?php
class Controller_Appointment extends Controller_Template
{

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
					'user_id' => Input::post('user_id'),
					'visit_at' => Input::post('visit_at'),
					'channel_01' => Input::post('channel_01'),
					'agent_01' => Input::post('agent_01'),
					'client_01' => Input::post('client_01'),
					'brand_01' => Input::post('brand_01'),
					'product_01' => Input::post('product_01'),
					'memo_01' => Input::post('memo_01'),
					'channel_02' => Input::post('channel_02'),
					'agent_02' => Input::post('agent_02'),
					'client_02' => Input::post('client_02'),
					'brand_02' => Input::post('brand_02'),
					'product_02' => Input::post('product_02'),
					'memo_02' => Input::post('memo_02'),
					'channel_03' => Input::post('channel_03'),
					'agent_03' => Input::post('agent_03'),
					'client_03' => Input::post('client_03'),
					'brand_03' => Input::post('brand_03'),
					'product_03' => Input::post('product_03'),
					'memo_03' => Input::post('memo_03'),
					'channel_04' => Input::post('channel_04'),
					'agent_04' => Input::post('agent_04'),
					'client_04' => Input::post('client_04'),
					'brand_04' => Input::post('brand_04'),
					'product_04' => Input::post('product_04'),
					'memo_04' => Input::post('memo_04'),
					'channel_05' => Input::post('channel_05'),
					'agent_05' => Input::post('agent_05'),
					'client_05' => Input::post('client_05'),
					'brand_05' => Input::post('brand_05'),
					'product_05' => Input::post('product_05'),
					'memo_05' => Input::post('memo_05'),
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
			$appointment->user_id = Input::post('user_id');
			$appointment->visit_at = Input::post('visit_at');
			$appointment->channel_01 = Input::post('channel_01');
			$appointment->agent_01 = Input::post('agent_01');
			$appointment->client_01 = Input::post('client_01');
			$appointment->brand_01 = Input::post('brand_01');
			$appointment->product_01 = Input::post('product_01');
			$appointment->memo_01 = Input::post('memo_01');
			$appointment->channel_02 = Input::post('channel_02');
			$appointment->agent_02 = Input::post('agent_02');
			$appointment->client_02 = Input::post('client_02');
			$appointment->brand_02 = Input::post('brand_02');
			$appointment->product_02 = Input::post('product_02');
			$appointment->memo_02 = Input::post('memo_02');
			$appointment->channel_03 = Input::post('channel_03');
			$appointment->agent_03 = Input::post('agent_03');
			$appointment->client_03 = Input::post('client_03');
			$appointment->brand_03 = Input::post('brand_03');
			$appointment->product_03 = Input::post('product_03');
			$appointment->memo_03 = Input::post('memo_03');
			$appointment->channel_04 = Input::post('channel_04');
			$appointment->agent_04 = Input::post('agent_04');
			$appointment->client_04 = Input::post('client_04');
			$appointment->brand_04 = Input::post('brand_04');
			$appointment->product_04 = Input::post('product_04');
			$appointment->memo_04 = Input::post('memo_04');
			$appointment->channel_05 = Input::post('channel_05');
			$appointment->agent_05 = Input::post('agent_05');
			$appointment->client_05 = Input::post('client_05');
			$appointment->brand_05 = Input::post('brand_05');
			$appointment->product_05 = Input::post('product_05');
			$appointment->memo_05 = Input::post('memo_05');

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
				$appointment->user_id = $val->validated('user_id');
				$appointment->visit_at = $val->validated('visit_at');
				$appointment->channel_01 = $val->validated('channel_01');
				$appointment->agent_01 = $val->validated('agent_01');
				$appointment->client_01 = $val->validated('client_01');
				$appointment->brand_01 = $val->validated('brand_01');
				$appointment->product_01 = $val->validated('product_01');
				$appointment->memo_01 = $val->validated('memo_01');
				$appointment->channel_02 = $val->validated('channel_02');
				$appointment->agent_02 = $val->validated('agent_02');
				$appointment->client_02 = $val->validated('client_02');
				$appointment->brand_02 = $val->validated('brand_02');
				$appointment->product_02 = $val->validated('product_02');
				$appointment->memo_02 = $val->validated('memo_02');
				$appointment->channel_03 = $val->validated('channel_03');
				$appointment->agent_03 = $val->validated('agent_03');
				$appointment->client_03 = $val->validated('client_03');
				$appointment->brand_03 = $val->validated('brand_03');
				$appointment->product_03 = $val->validated('product_03');
				$appointment->memo_03 = $val->validated('memo_03');
				$appointment->channel_04 = $val->validated('channel_04');
				$appointment->agent_04 = $val->validated('agent_04');
				$appointment->client_04 = $val->validated('client_04');
				$appointment->brand_04 = $val->validated('brand_04');
				$appointment->product_04 = $val->validated('product_04');
				$appointment->memo_04 = $val->validated('memo_04');
				$appointment->channel_05 = $val->validated('channel_05');
				$appointment->agent_05 = $val->validated('agent_05');
				$appointment->client_05 = $val->validated('client_05');
				$appointment->brand_05 = $val->validated('brand_05');
				$appointment->product_05 = $val->validated('product_05');
				$appointment->memo_05 = $val->validated('memo_05');

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
