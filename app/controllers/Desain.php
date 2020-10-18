<?php 

 class Desain extends Controller{
 	public function index()
 	{
 		if (!isset($_SESSION["login"])) {
			header ('Location:'.LURL.'/login');
			exit;
		}

 		$data['judul'] = 'Desain-In';
 		$data['desain'] = $this->model('Desain_model')->getData();
 		$this->view('templates/header', $data);
 		$this->view('desain/index',$data);
 		$this->view('templates/script');
 		
 	}

 	public function order()
 	{
 		if($this->model('Desain_model')->orderDesain($_POST) > 0 ) {
 			header('Location: '. LURL . '/cart');
 			exit;
 		}
 	}
 }