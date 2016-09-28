<?php
namespace App\Controller;

use App\Controller\AppController;

class ListController extends AppController
{

  public function initialize()
  {
    parent::initialize();
    //$this->viewBuilder()->layout('list');
    $this->set('title', "音楽");
  }

  public function index(){
  }

}



 ?>
