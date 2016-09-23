<?php
namespace App\Controller;

use App\Controller\AppController;

class CalendarController extends AppController
{

  public function initialize()
  {
    parent::initialize();
    $this->viewBuilder()->layout('app');
    $this->set('title', "カレンダー");
  }

  public function index(){
  }

  public function event(){
    $this->autoRender = false;

    $events = array();
    $events[] = array(
      'title' => 'Events',
      'start' => '2016-09-10',
      'end' => '2016-09-16'
    );

    echo json_encode($events);
  }

}



 ?>
