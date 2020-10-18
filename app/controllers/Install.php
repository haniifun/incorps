<?php 

 class Install extends Controller{
 	public function index()
 	{
 		if (!isset($_SESSION["login"])) {
			header ('Location:'.LURL.'/login');
			exit;
		}

 		$data['judul'] = 'Install-In';
 		$data['install'] = $this->model('Install_model')->getData();
 		$this->view('templates/header', $data);
 		$this->view('install/index',$data);
 		$this->view('templates/script');
 		
 	}

 	public function order()
 	{
 		if($this->model('Install_model')->orderInstall($_POST) > 0 ) {
 			header('Location: '. LURL . '/cart');
 			exit;
 		}
 	}
 }