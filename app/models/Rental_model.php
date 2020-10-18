<?php 

class Rental_model extends Controller
{
	private $table = 'rental';
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

	private function upload()
	{

		$namafile = $_FILES['identitas']['name'];
		$ukuran = $_FILES['identitas']['size'];
		$error = $_FILES['identitas']['error'];
		$tmpname = $_FILES['identitas']['tmp_name'];

		// cek appakah ada identitas yg diupload
		if ($error === 4) {
			echo "<script>
					alert('Harus kirim foto kartu identitas dulu!');
				  </script>";
			return false;
		}

		// cek yang diupload gambar atau bukan
		$gambarvalid = ['jpg','jpeg','png'];
		$extgambar = explode('.',$namafile);
		$extgambar = strtolower(end($extgambar));
		if (!in_array($extgambar, $gambarvalid)) {
			echo "<script>
						alert('Format gambar harus jpg, jpeg, atau png');
					  </script>";
			return false;		  
				
		}

		// cek ukuran file
		if ($ukuran > 5000000) {
			echo "<script>
							alert('Ukuran gambar terlalu besar');
						  </script>";
			return false;
		}

		// lolos pengecekan
		// generate nama gambar baru
		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $extgambar;
		$uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/phpmvc/app/asset/file/rental/'.$namafilebaru;
		move_uploaded_file($tmpname, $uploadfile);
		
		return $namafilebaru;
	}

	public function tglManipulator($tgl, $waktu)
	{
		$date = date_create($tgl);
		if ($waktu == '1') {
			date_add($date, date_interval_create_from_date_string('6 hours'));
		} elseif ($waktu == '2') {
			date_add($date, date_interval_create_from_date_string('12 hours'));
		} elseif ($waktu == '3') {
			date_add($date, date_interval_create_from_date_string('42 days'));
		} else {
			date_add($date, date_interval_create_from_date_string($waktu.' days'));
		}

		return date_format($date, 'YmdHis');
	}

	public function biaya($id, $lama)
	{
		if ($id == '101') {
			switch ($lama) {
				case '1':
					$biaya = 70000;
					break;
				case '2':
					$biaya = 100000;
					break;
				case '3':
					$biaya = 900000;
					break;
				case '4':
					$biaya = 140000;
					break;
				default:
					$biaya = 0;
					break;
			}
		} elseif ($id == '102') {
			switch($lama) {
				case '1':
					$biaya = 30000;
					break;
				case '2':
					$biaya = 50000;
					break;
				case '3':
					$biaya = 800000;
					break;
				case '4':
					$biaya = 75000;
					break;
				default:
					$biaya = 0;
					break;
			}
		} elseif ($id == '103') {
			$biaya = 40000;
		} elseif ($id == '104') {
			$biaya = 15000;
		} elseif ($id == '105') {
			$biaya = 10000;
		}

		return $biaya;
	}

	public function orderRental($rental) 
	{
		$date = date_create($rental['tglpinjam']);
		
		// tanggal pinjam
		$tgl = date_format($date, 'YmdHis');
		
		// tanggal kembali 
		// $kembali = $this->tglManipulator($date, $rental['lamapinjam']);
		$kembali = date_add($date, date_interval_create_from_date_string('6 hours'));
		
		$kembali = date_format($kembali, 'YmdHis');

		// membuat nomor transaksi
		$id_trx = $this->db->kdTrxGenerator($rental['barang'],$tgl);

		// upload foto
		$identitas = $this->upload();

		// Total biaya
		$biaya = $rental['jumlah'] * $this->biaya($rental['barang'],$rental['lamapinjam']);

		$query = "INSERT INTO trx_rental VALUES ('$id_trx','$tgl','$kembali', :jumlah ,$biaya,:email,:barang,'$identitas',:organisasi,:metode,0)";

		// // $query = "INSERT INTO trx_rental VALUES (:notrx, :tglpinjam, :tglkembali, :jumlah, :harga, :email , :barang, :foto, :organisasi, :pengiriman, :status)";

		
		$this->db->query($query);
		
		$this->db->bind('jumlah', $rental['jumlah']);
		$this->db->bind('barang', $rental['barang']);
		$this->db->bind('organisasi', $rental['organisasi']);
		$this->db->bind('metode', $rental['metode']);
		$this->db->bind('email', $rental['email']);
		// // $this->db->bind('tglpinjam', $rental['tglpinjam']);
		// // $this->db->bind('tglpinjam', $rental['tglpinjam']);
		// // $this->db->bind('tglpinjam', $rental['tglpinjam']);
		// // $this->db->bind('tglpinjam', $rental['tglpinjam']);

		$this->db->execute();

		return $this->db->rowCount();
	}
}