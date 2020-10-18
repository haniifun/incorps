<?php 

class Desain_model extends Controller
{
	private $table = 'desain';
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

	public function orderDesain($desain)
	{		
		$email = $desain['email'];
		$barang = $desain['barang'];
		$deadline = $desain['deadline'];
		// waktu pemesanan
		date_default_timezone_set('Asia/Jakarta');
		$date = date('YmdHis');

		// waktu selesai
		$selesai = $this->tglManipulator($date, $desain['deadline']);

		// membuat nomor transaksi
		$id_trx = $this->db->kdTrxGenerator($barang,$date);

		// upload file
		$file = $this->upload();

		// Total biaya
		$this->db->query("SELECT harga FROM desain where id_produk=$barang");
		$harga = $this->db->single();	

		$biaya = $harga['harga'] + $this->biayaTambahan($deadline);


		$this->db->query("INSERT INTO trx_desain VALUES ('$id_trx', '$date', '$selesai','$biaya','$email','$barang','$file',0)");
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