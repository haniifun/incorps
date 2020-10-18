<?php 

session_start();

 class Controller{
 	
 	public function view($view, $data=[])
 		{
 			require_once '../app/views/' .$view. '.php';
 		}

 	public function model($model)
 	{
 		require_once '../app/models/' . $model . '.php';
 		return new $model;
 	}

 	public function dropdown()
 	{
 		if (isset($_SESSION["login"])) {
			$dropdown = " <li>
							<div class='dropdown'>
                                <button class='dropbtn' href='javascript:void(0)'>".$_SESSION['nama']."</button>
                                <div class='dropdown-content'>
                                   <a href='".LURL."/profil'>Profil</a>
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
 }