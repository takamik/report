<?php
class Controller_Reporting extends Controller_Rest
{
    public function get_list($id = null)
    {
		$obj = Model_Appointment::getCsvData();
		return $this->response($obj);

	}

}
