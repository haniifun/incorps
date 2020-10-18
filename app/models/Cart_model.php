<?php 

class Cart_model extends Controller
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getRental($email)
	{
		$this->db->query("SELECT * FROM trx_rental LEFT JOIN rental ON(rental.id_produk) WHERE rental.id_produk=trx_rental.id_produk and trx_rental.email='$email' and trx_rental.status=0 ORDER BY trx_rental.tgl_peminjaman DESC");
		return $this->db->resultSet();	
	}

	public function getInstall($email)
	{
		$this->db->query("SELECT * FROM trx_install LEFT JOIN install ON(install.id_produk) WHERE install.id_produk=trx_install.id_produk and trx_install.email='$email' and trx_install.status=0 ORDER BY trx_install.tgl_transaksi DESC");
		return $this->db->resultSet();	
	}

	public function getDesain($email)
	{
		$this->db->query("SELECT * FROM trx_desain LEFT JOIN desain ON(desain.id_produk) WHERE desain.id_produk=trx_desain.id_produk and trx_desain.email='$email' and trx_desain.status=0 ORDER BY trx_desain.tgl_pemesanan DESC");
		return $this->db->resultSet();	
	}

	public function getCetak($email)
	{
		$this->db->query("SELECT * FROM trx_cetak LEFT JOIN cetak ON(cetak.id_produk) WHERE cetak.id_produk=trx_cetak.id_produk and trx_cetak.email='$email' and trx_cetak.status=0 ORDER BY trx_cetak.tgl_pemesanan DESC");
		return $this->db->resultSet();	
	}

	public function checkout1(){
		$id = explode('/', $_GET['url']);

		$this->db->query("UPDATE trx_rental SET status=1 WHERE id_trx=$id[2]");
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function batalkan1(){
		$id = explode('/', $_GET['url']);

		$this->db->query("UPDATE trx_rental SET status=4 WHERE id_trx=$id[2]");
		$this->db->execute();

		return $this->db->rowCount();
	}


	public function checkout2(){
		$id = explode('/', $_GET['url']);

		$this->db->query("UPDATE trx_desain SET status=1 WHERE id_trx=$id[2]");
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function batalkan2(){
		$id = explode('/', $_GET['url']);

		$this->db->query("UPDATE trx_desain SET status=4 WHERE id_trx=$id[2]");
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function checkout3(){
		$id = explode('/', $_GET['url']);

		$this->db->query("UPDATE trx_cetak SET status=1 WHERE id_trx=$id[2]");
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function batalkan3(){
		$id = explode('/', $_GET['url']);

		$this->db->query("UPDATE trx_cetak SET status=4 WHERE id_trx=$id[2]");
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function checkout4(){
		$id = explode('/', $_GET['url']);

		$this->db->query("UPDATE trx_install SET status=1 WHERE id_trx=$id[2]");
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function batalkan4(){
		$id = explode('/', $_GET['url']);

		$this->db->query("UPDATE trx_install SET status=4 WHERE id_trx=$id[2]");
		$this->db->execute();

		return $this->db->rowCount();
	}

}