<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clients_events extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
    function index($encrypted_event_id = "")
    {
        //$this->check_module_availability("module_event");
        $view_data['encrypted_event_id'] = $encrypted_event_id;

        $this->template->rander("clients_event/index", $view_data);
    }

    function calendar_events()
    {
          $list_data_of_events = $this->Clients_model->get_details(null)->result();
           foreach ($list_data_of_events as $data) {
        //check if this recurring event, generate recurring evernts based on the condition
            $data->cycle = 0; //it's required to calculate the recurring events
            $result[] = $this->_make_calendar_event($data); //add regular event

        }
        echo  json_encode($result);
    }

    //load calendar view

    private function _make_calendar_event($data) {
        if(isset($data->date_of_birth)){
            $month=substr($data->date_of_birth,5,2);
            $date = date("Y-m-d");
            $current_month=substr($date,5,2);
            if($current_month == $month)
            return array(
                "title" => $data->client_name,
                "start" => $data->date_of_birth
            );
        }
    }

}