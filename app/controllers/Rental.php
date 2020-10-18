<?php 

 class Rental extends Controller{
 	public function index()
 	{
 		if (!isset($_SESSION["login"])) {
			header ('Location:'.LURL.'/login');
			exit;
		}

 		$data['judul'] = 'Rental-In';
 		$data['rental'] = $this->model('Rental_model')->getData();
 		$this->view('templates/header', $data);
 		$this->view('rental/index', $data);
 		$this->view('templates/script');
 		
 	}

 	public function order()
 	{
 		if($this->model('Rental_model')->orderRental($_POST) > 0 ) {
 			header('Location: '. LURL . '/cart');
 			exit;
 		}
 	}
 }
