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

    $events[] = array(
      'title' => 'Meeting',
      'start' => '2016-09-12T10:30:00',
      'end' => '2016-09-12T12:30:00'
    );

    echo json_encode($events);
  }

}



 ?>
