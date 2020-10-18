<?php 

class Login extends Controller
{
	public function index()
	{

		if (isset($_SESSION["login"])) {
			header ('Location:'.LURL);
			exit;
		}
		
		$data['judul'] = 'Login';
		$this->view('templates/header',$data);
		$this->view('login/index');
	}

	public function masuk()
 	{
 		if($this->model('Login_model')->masuk($_POST)>0 ) {
 			header('Location: '.LURL );
 			exit;
 		} else {
 			header('Location: '.LURL.'/login');
 		}


 	}
}

 ?>