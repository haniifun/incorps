<?php 

 class Registrasi extends Controller{
 	public function index()
 	{
 		if (isset($_SESSION["login"])) {
			header ('Location:'.LURL);
			exit;
		}
 		$data['judul'] = 'Registrasi';
 		$this->view('templates/header', $data);
 		$this->view('templates/navbar',$data);
 		$this->view('registrasi/index',$data);
 	}

 	public function daftar()
 	{
 		if($this->model('Registrasi_model')->regis($_POST)>0 ) {
 			header('Location: '.LURL.'/login' );
 			exit;
 		} else {
 			header('Location: '.LURL.'/registrasi' );
 			exit;
 		}

 	}
 }