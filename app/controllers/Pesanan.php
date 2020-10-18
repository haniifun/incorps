<?php 

 class Pesanan extends Controller{
 	public function index()
 	{
 		if (!isset($_SESSION["login"])) {
			header ('Location:'.LURL.'/login');
			exit;
		}

		$email = $this->email();
 		$data['judul'] = 'Pesanan Saya';
 		$data['rental'] = $this->model('Pesanan_model')->pesananRental($email);
 		$data['desain'] = $this->model('Pesanan_model')->pesananDesain($email);
 		$data['install'] = $this->model('Pesanan_model')->pesananInstall($email);
 		$data['cetak'] = $this->model('Pesanan_model')->pesananCetak($email);
 		
 		$data['prosesrental'] = $this->model('Pesanan_model')->prosesRental($email);
 		$data['prosesdesain'] = $this->model('Pesanan_model')->prosesDesain($email);
 		$data['prosesinstall'] = $this->model('Pesanan_model')->prosesInstall($email);
 		$data['prosescetak'] = $this->model('Pesanan_model')->prosesCetak($email);
 		
 		$data['selesairental'] = $this->model('Pesanan_model')->selesaiRental($email);
 		$data['selesaidesain'] = $this->model('Pesanan_model')->selesaiDesain($email);
 		$data['selesaiinstall'] = $this->model('Pesanan_model')->selesaiInstall($email);
 		$data['selesaicetak'] = $this->model('Pesanan_model')->selesaiCetak($email);
 		
 		$data['batalrental'] = $this->model('Pesanan_model')->batalRental($email);
 		$data['bataldesain'] = $this->model('Pesanan_model')->batalDesain($email);
 		$data['batalinstall'] = $this->model('Pesanan_model')->batalInstall($email);
 		$data['batalcetak'] = $this->model('Pesanan_model')->batalCetak($email);
 		
 		$data['dropdown'] = $this->dropdown();
 		$this->view('templates/header', $data);
 		$this->view('templates/navbar',$data);
 		$this->view('pesanan/index', $data);
 		$this->view('templates/footer');
 	}

 	public function email()
 	{
 		return $_SESSION['user'];
 	}
 }