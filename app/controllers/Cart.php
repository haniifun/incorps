<?php 

 class Cart extends Controller{
 
 	public function index()
 	{
 		if (!isset($_SESSION["login"])) {
			header ('Location:'.LURL.'/login');
			exit;
		}

		$email = $this->email();
		$data['dropdown'] = $this->dropdown();
 		$data['judul'] = 'Keranjang';
 		$data['rental'] = $this->model('Cart_model')->getRental($email);
 		$data['install'] = $this->model('Cart_model')->getInstall($email);
 		$data['desain'] = $this->model('Cart_model')->getDesain($email);
 		$data['cetak'] = $this->model('Cart_model')->getCetak($email);
 		$this->view('templates/header', $data);
 		$this->view('templates/navbar',$data);
 		$this->view('cart/index', $data);
 		$this->view('templates/footer');
 	}

 	public function dropdown()
 	{
 		if (isset($_SESSION["login"])) {
			$dropdown = " <li>
							<div class='dropdown'>
                                <button class='dropbtn' href='javascript:void(0)'>".$_SESSION['nama']."</button>
                                <div class='dropdown-content'>
                                   <a href='".LURL."'>Profil</a>
                                   <a href='".LURL."/cart'>Keranjang</a>
                                   <a href='".LURL."/pesanan'>Pesanan</a>
                                   <a href='".LURL."/logout'>Logout</a>
                                </div>
                            </div>
                         </li>";
		} else {
			$dropdown = "<li><a class='nav-link' href='".LURL."/login'>Login</a></li>
         				<li><a class='nav-link' href='".LURL."/registrasi'>Daftar</a></li>";
         }
         return $dropdown;
 	}

 	public function email(){
		return $_SESSION['user'];
	}

 	public function checkout1()
 	{
 		if($this->model('Cart_model')->checkout1($_GET) > 0 ) {
 			header('Location: '. LURL . '/pesanan');
 			exit;
 		}
 	}

 	public function batalkan1()
 	{
 		if($this->model('Cart_model')->batalkan1($_GET) > 0 ) {
 			header('Location: '. LURL . '/cart');
 			exit;
 		}
 	}

 	public function checkout2()
 	{
 		if($this->model('Cart_model')->checkout2($_GET) > 0 ) {
 			header('Location: '. LURL . '/pesanan');
 			exit;
 		}
 	}

 	public function batalkan2()
 	{
 		if($this->model('Cart_model')->batalkan2($_GET) > 0 ) {
 			header('Location: '. LURL . '/cart');
 			exit;
 		}
 	}

 	public function checkout3()
 	{
 		if($this->model('Cart_model')->checkout3($_GET) > 0 ) {
 			header('Location: '. LURL . '/pesanan');
 			exit;
 		}
 	}

 	public function batalkan3()
 	{
 		if($this->model('Cart_model')->batalkan3($_GET) > 0 ) {
 			header('Location: '. LURL . '/cart');
 			exit;
 		}
 	}

 	public function checkout4()
 	{
 		if($this->model('Cart_model')->checkout4($_GET) > 0 ) {
 			header('Location: '. LURL . '/pesanan');
 			exit;
 		}
 	}

 	public function batalkan4()
 	{
 		if($this->model('Cart_model')->batalkan4($_GET) > 0 ) {
 			header('Location: '. LURL . '/cart');
 			exit;
 		}
 	}
 }