<?php 

class Pesanan_model extends Controller
{
	private $table = 'trx';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getData()
	{
		$this->db->query("SELECT * FROM " . $this->table);
		return $this->db->resultSet();	
	}

	// Pesanan dibuat
	public function pesananRental($email)
	{
		$this->db->query("SELECT * FROM trx_rental LEFT JOIN rental ON(rental.id_produk) WHERE rental.id_produk=trx_rental.id_produk and trx_rental.email='$email' and trx_rental.status=1 ORDER BY trx_rental.tgl_peminjaman DESC");
		return $this->db->resultSet();	
	}

	public function pesananInstall($email)
	{
		$this->db->query("SELECT * FROM trx_install LEFT JOIN install ON(install.id_produk) WHERE install.id_produk=trx_install.id_produk and trx_install.email='$email' and trx_install.status=1");
		return $this->db->resultSet();	
	}

	public function pesananDesain($email)
	{
		$this->db->query("SELECT * FROM trx_desain LEFT JOIN desain ON(desain.id_produk) WHERE desain.id_produk=trx_desain.id_produk and trx_desain.email='$email' and trx_desain.status=1");
		return $this->db->resultSet();	
	}

	public function pesananCetak($email)
	{
		$this->db->query("SELECT * FROM trx_cetak LEFT JOIN cetak ON(cetak.id_produk) WHERE cetak.id_produk=trx_cetak.id_produk and trx_cetak.email='$email' and trx_cetak.status=1");
		return $this->db->resultSet();	
	}


	// Pesanan diproses
	public function prosesRental($email)
	{
		$this->db->query("SELECT * FROM trx_rental LEFT JOIN rental ON(rental.id_produk) WHERE rental.id_produk=trx_rental.id_produk and trx_rental.email='$email' and trx_rental.status=2 ORDER BY trx_rental.tgl_peminjaman DESC");
		return $this->db->resultSet();	
	}

	public function prosesInstall($email)
	{
		$this->db->query("SELECT * FROM trx_install LEFT JOIN install ON(install.id_produk) WHERE install.id_produk=trx_install.id_produk and trx_install.email='$email' and trx_install.status=2");
		return $this->db->resultSet();	
	}

	public function prosesDesain($email)
	{
		$this->db->query("SELECT * FROM trx_desain LEFT JOIN desain ON(desain.id_produk) WHERE desain.id_produk=trx_desain.id_produk and trx_desain.email='$email' and trx_desain.status=2");
		return $this->db->resultSet();	
	}

	public function prosesCetak($email)
	{
		$this->db->query("SELECT * FROM trx_cetak LEFT JOIN cetak ON(cetak.id_produk) WHERE cetak.id_produk=trx_cetak.id_produk and trx_cetak.email='$email' and trx_cetak.status=2");
		return $this->db->resultSet();	
	}

	
	// Transaksi selesai
	public function selesaiRental($email)
	{
		$this->db->query("SELECT * FROM trx_rental LEFT JOIN rental ON(rental.id_produk) WHERE rental.id_produk=trx_rental.id_produk and trx_rental.email='$email' and trx_rental.status=3 ORDER BY trx_rental.tgl_peminjaman DESC");
		return $this->db->resultSet();	
	}

	public function selesaiInstall($email)
	{
		$this->db->query("SELECT * FROM trx_install LEFT JOIN install ON(install.id_produk) WHERE install.id_produk=trx_install.id_produk and trx_install.email='$email' and trx_install.status=3");
		return $this->db->resultSet();	
	}

	public function selesaiDesain($email)
	{
		$this->db->query("SELECT * FROM trx_desain LEFT JOIN desain ON(desain.id_produk) WHERE desain.id_produk=trx_desain.id_produk and trx_desain.email='$email' and trx_desain.status=3");
		return $this->db->resultSet();	
	}

	public function selesaiCetak($email)
	{
		$this->db->query("SELECT * FROM trx_cetak LEFT JOIN cetak ON(cetak.id_produk) WHERE cetak.id_produk=trx_cetak.id_produk and trx_cetak.email='$email' and trx_cetak.status=3");
		return $this->db->resultSet();	
	}

	// Pesanan dibatalkan
		public function batalRental($email)
	{
		$this->db->query("SELECT * FROM trx_rental LEFT JOIN rental ON(rental.id_produk) WHERE rental.id_produk=trx_rental.id_produk and trx_rental.email='$email' and trx_rental.status=4 ORDER BY trx_rental.tgl_peminjaman DESC");
		return $this->db->resultSet();	
	}

	public function batalInstall($email)
	{
		$this->db->query("SELECT * FROM trx_install LEFT JOIN install ON(install.id_produk) WHERE install.id_produk=trx_install.id_produk and trx_install.email='$email' and trx_install.status=4");
		return $this->db->resultSet();	
	}

	public function batalDesain($email)
	{
		$this->db->query("SELECT * FROM trx_desain LEFT JOIN desain ON(desain.id_produk) WHERE desain.id_produk=trx_desain.id_produk and trx_desain.email='$email' and trx_desain.status=4");
		return $this->db->resultSet();	
	}

	public function batalCetak($email)
	{
		$this->db->query("SELECT * FROM trx_cetak LEFT JOIN cetak ON(cetak.id_produk) WHERE cetak.id_produk=trx_cetak.id_produk and trx_cetak.email='$email' and trx_cetak.status=4");
		return $this->db->resultSet();	
	}

}