<?php 

 class About extends Controller {
 	
 	public function index($nama = 'Hanif Ramadhani', $pekerjaan = 'Programmer')
 	{
 		$data['nama'] = $nama;
 		$data['pekerjaan'] = $pekerjaan;
 		$data['judul'] = 'About';
 		$this->view('templates/header',$data);
 		$this->view('templates/navbar',$data);
 		$this->view('about/index', $data);
 		$this->view('templates/footer');
 	}

 	public function page()
 	{
 		$data['judul'] = 'Page';
 		$data['rental'] = $this->model('Rental_model')->getData();
 		$this->view('templates/header',$data);
 		$this->view('templates/navbar',$data);
 		$this->view('about/page', $data);
 		$this->view('templates/script');
 		$this->view('templates/footer');
 	}

 }