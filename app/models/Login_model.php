<?php 

class Login_model extends Controller
{

	public function __construct()
	{
		$this->db = new Database;
	}


	public function masuk($data)
	{
		$email = $data['email'];
		$password = $data['password'];

	    $this->db->query("SELECT * FROM customer WHERE email = '$email'");
        $result = $this->db->resultSet();
        
			// cek username
			if (!is_null($result[0])) {
				//cek password
				if (password_verify($password, $result[0]['password'])) {
					// set session
		      		$_SESSION["user"] = $email;
		      		$nama = explode(" ", $result[0]['nama']);
		      		$_SESSION['nama'] = $nama[0];
					$_SESSION["login"] = true;
					header("location: ".LURL);
					exit;
				} else {
					$_SESSION['error'] = [
						'email' => 'email salah!',
						'password' => 'password salah!'
					];
				}

			}
	}
}