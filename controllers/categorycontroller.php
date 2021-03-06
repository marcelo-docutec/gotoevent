<?php

namespace controllers;

use model\Category as Category;
use dao\CategoryDAO as CategoryDAO;
use controllers\Controller as Controller;
use interfaces\IAlmr as IAlmr;

class CategoryController extends Controller implements IAlmr
{
  private $controllerDao;

  function __construct()
  {
    parent::__construct();
    $this->controllerDao = CategoryDAO::getInstance();
  }

  public function index()
  {
    $this->list();
  }

  public function add ($data = []) {
    //create -> La llave es el campo en la base de dato y el valor es el valor a guardar en la base de dato
    $this->controllerDao->create([
      "name_category" => $data["name_category"]
    ]);

    $this->redirect("/category/");

    return;
  }

  public function list () {
    if ( ! $this->isLogged()) {
      $this->redirect('/default/login');
    }
    else {

      $items = $this->controllerDao->readAll();

      $items = $this->controllerDao->mapMethodCollection($items);

      $this->render("viewCategory/categories",[
        'items' => $items
      ]);
    }
  }

  public function remove($data = []) {

    $this->controllerDao->delete([
      "id_category" => $data['id']
    ]);

    $this->redirect("/category/");
  }

  public function viewEdit ($id) {

    $searchedItem = $this->controllerDao->read([
      "id_category" => $id
    ]);

    $searchedItem = $this->controllerDao->mapMethod($searchedItem);

    $this->render('viewCategory/updateCategory',[
      'searchedItem' => $searchedItem
    ]);
  }

  public function modify($data = [])
  {
    if ( ! $this->isMethod("POST")) $this->redirect("/default/");
    if (empty($data)) $this->redirect("/default/");

    try
    {
      $this->controllerDao->update([
        "name_category" => $data["name_category"]
      ],[
        "id_category" => $data["id"]
      ]);
    }
    catch(\PDOException $e)
    {
      echo $e->getMessage();
    }
    catch(\Exception $e){
      echo $e->getMessage();
    }

    $this->redirect('/category/');

  }
}
