<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","incorpsc_hanif","pass_incorps","incorpsc_incorps");

function query ($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
} 

function hapus($id) {
	global $conn;
	mysqli_query($conn, "UPDATE transaksi SET status=2 WHERE id_transaksi=$id");
	return mysqli_affected_rows($conn);
}



 ?>