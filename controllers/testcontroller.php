<?php
namespace controllers;

use controllers\Controller as Controller;
use model\User as User;
use model\Category as Category;
use helpers\ConverterCase as ConverterCase;
use dao\DefaultDAO as DefaultDAO;

class TestController extends Controller{

  public function index(){
    
  }

  public function uploadFile(){
    $this->render('test/fileHtml');
  }


}
