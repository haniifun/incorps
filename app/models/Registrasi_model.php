<?php 

class Registrasi_model extends Controller
{

	public function __construct()
	{
		$this->db = new Database;
	}
 
	public function regis($data){
        $nama = htmlspecialchars($data['nama']);
        $email = htmlspecialchars(strtolower($data['email']));
        $password1 = $data['password1'];
        $password2 = $data['password1'];

        // cek usernmae sudah ada belum
        $this->db->query("SELECT email FROM customer WHERE email = '$email'");
        $result = $this->db->single();

      	if (!($result)) {
            if ($password1==$password2) {
                // enkripsi password
                $password1 = password_hash($password1, PASSWORD_DEFAULT);

                // insert ke database
                $this->db->query("INSERT INTO customer VALUES ('$nama','$email','','','$password1','default.png')");
                $this->db->execute();

                return $this->db->rowCount();  

            } else {
                $error = [
                    'password' => 'password tidak cocok'
                ];
                return $error;
            }
        } else {
            $error = [
                'username' => 'email ini sudah terpakai'
            ];
            return $error;
        }
    }

}