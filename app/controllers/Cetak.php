<?php 

 class Cetak extends Controller{
 	public function index()
 	{
 		if (!isset($_SESSION["login"])) {
			header ('Location:'.LURL.'/login');
			exit;
		}

 		$data['judul'] = 'Cetak-In';
 		$data['cetak'] = $this->model('Cetak_model')->getData();
 		$this->view('templates/header', $data);
 		$this->view('cetak/index',$data);
 		$this->view('templates/script');
 		
 	}

 	public function order()
 	{
 		if($this->model('Cetak_model')->orderCetak($_POST) > 0 ) {
 			header('Location: '. LURL . '/cart');
 			exit;
 		}
 	}

 }