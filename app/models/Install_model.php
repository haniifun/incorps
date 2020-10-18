<?php 

class Install_model extends Controller
{
	private $table = 'install';
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
	public function orderInstall($install)
	{	
		$email = $install['email'];	
		$barang = $install['barang'];
		// waktu pemesanan
		date_default_timezone_set('Asia/Jakarta');
		$date = date('YmdHis');

		// waktu selesai
		$selesai =	date_add(date_create($date), date_interval_create_from_date_string('3 days'));	
		$selesai = date_format($selesai, 'YmdHis');

		
		// membuat nomor transaksi
		$id_trx = $this->db->kdTrxGenerator($barang,$date);

		// Total biaya
		$this->db->query("SELECT harga FROM install where id_produk=$barang");
		$harga = $this->db->single();	

		$this->db->query("INSERT INTO trx_install VALUES ('$id_trx', '$date', '$selesai','$harga','$email','$barang',0)");
		$this->db->execute();

		return $this->db->rowCount();

	}


	public function biayaTambahan($deadline)
	{
		switch ($deadline) {
			case '1':
				$biaya = 40000;
				break;
			case '2':
				$biaya = 30000;
				break;
			case '3':
				$biaya = 15000;
				break;
			
			default:
				$biaya=0;
				break;
		}
		return $biaya;
	}

	public function tglManipulator($tgl, $deadline)
	{
		$date = date_create($tgl);
		if ($deadline == '1') {
			date_add($date, date_interval_create_from_date_string('1 days'));
		} elseif ($deadline == '2') {
			date_add($date, date_interval_create_from_date_string('2 days'));
		} elseif ($deadline == '3') {
			date_add($date, date_interval_create_from_date_string('3 days'));
		} else {
			date_add($date, date_interval_create_from_date_string('5 days'));
		}

		return date_format($date, 'YmdHis');
	}

	private function upload()
	{

		$namafile = $_FILES['file']['name'];
		$ukuran = $_FILES['file']['size'];
		$error = $_FILES['file']['error'];
		$tmpname = $_FILES['file']['tmp_name'];

		// cek yang diupload gambar atau bukan
		$extvalid = ['rar','zip'];
		$ext = explode('.',$namafile);
		$ext = strtolower(end($ext));
		if (in_array($ext, $extvalid)) {
			$uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/phpmvc/app/asset/file/desain/'.$namafile;
			move_uploaded_file($tmpname, $uploadfile);
			 
			return $namafile;
		}
	}
}
