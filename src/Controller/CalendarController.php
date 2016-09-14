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

}



 ?>
