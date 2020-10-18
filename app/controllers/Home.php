<?php 

 class Home extends Controller{
 	public function index()
 	{
 		$data['dropdown'] = $this->dropdown();
 		$data['judul'] = 'Home';
 		$data['nama'] = $this->model('User_model')->getUser();
 		$this->view('templates/header', $data);
 		$this->view('templates/banner',$data);
 		$this->view('home/index', $data);
 		$this->view('templates/footer');
 	}
}