<?php
/**
 * Created by PhpStorm.
 * User: a.kader
 * Date: 08-Nov-18
 * Time: 3:39 PM
 */

class Clients_events extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }

    //load calendar view
    function index($encrypted_event_id = "")
    {
        //$this->check_module_availability("module_event");
        $view_data['encrypted_event_id'] = $encrypted_event_id;

        $this->template->rander("clients_event/index", $view_data);
    }

}