<?php

namespace controllers;

use model\EventArea as EventArea;
use dao\EventAreaDAO as EventAreaDAO;
use controllers\Controller as Controller;
use interfaces\IAlmr as IAlmr;

class EventAreaController extends Controller implements IAlmr
{
    private $controllerDao;

    public function __construct () {
        parent::__construct();
        $this->controllerDao = EventAreaDAO::getInstance();
    }

    public function index () {
        $this->list();
    }

    public function add ($data = []) {
        //create -> La llave es el campo en la base de dato y el valor es el valor a guardar en la base de dato
        $this->controllerDao->create([
          "id_type_area" => $data["idTypeArea"],
          "id_calendar" => $data["idCalendar"],
          "quantity_avaliable" => $data["quantityAvaliable"],
          "price" => $data["price"],
          "remainder" => $data["remainder"]
        ]);

        $this->redirect("/eventArea/");

        return;
    }

    public function list () {
		if ( ! $this->isLogged()) {
			$this->redirect('/default/login');
		}
		else {

			$items = $this->controllerDao->readAll();

      $items = $this->controllerDao->mapMethodCollection($items);

			$this->render("viewEventArea/EventsAreas",[
				'items' => $items
			]);
		}
    }

    public function remove($data = []) {

		$this->controllerDao->delete([
      "id_event_area" => $data['idEventArea']
    ]);

		$this->redirect("/eventArea/");
	}

	public function viewEdit ($id) {

		$searchedItem = $this->controllerDao->read([
      "id_event_area" => $id
    ]);

    $searchedItem = $this->controllerDao->mapMethod($searchedItem);

		$this->render('viewEventArea/updateEventArea',[
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
        "id_type_area" => $data["idTypeArea"],
        "id_calendar" => $data["idCalendar"],
        "quantity_avaliable" => $data["quantityAvaliable"],
        "price" => $data["price"],
        "remainder" => $data["remainder"]
      ],[
        "id_event_area" => $data["idEventArea"]
      ]);
		}
		catch(\PDOException $e)
		{
			echo $e->getMessage();
		}
		catch(\Exception $e){
			echo $e->getMessage();
		}

		$this->redirect('/eventArea/');

	}

} // <----- end CLASS
