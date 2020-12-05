<?php

class database		
{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_telukmart";
	var $koneksi;

	function __construct()
	{
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
	}

	function register($nama, $username, $password){
		$insert = mysqli_query($this->koneksi, "insert into pendaftaran value('','$nama','$username','$password')");
		return $insert;
	}

	function data($id, $dibeli, $tersimpan){
		$insert = mysqli_query($this->koneksi, "insert into databarang value('$id','$dibeli','$tersimpan')");
		return $insert;
	}

	
	function login($username, $password)
	{
		$query = mysqli_query($this->koneksi,  "select * from pendaftaran,databarang where username='$username'");
		$data_user = $query->fetch_array();

		if (isset($data_user)) {
			if (password_verify($password, $data_user['password'])) {
				$_SESSION['username'] = $username;
				$_SESSION['nama'] = $data_user['nama'];
				$_SESSION['dibeli'] = $data_user['dibeli'];
				$_SESSION['tersimpan'] = $data_user['tersimpan'];
				$_SESSION['login'] = true;
				return true;
			}
		}	
	}

	// function tambah($dibeli, $tersimpan){
	// 	$query2 = mysqli_query($this->koneksi, "select * from databarang");
	// 	$data_user2 = $query2->fetch_array();

	// 	$data_user2['dibeli'] = $data_user2['dibeli'];
	// 	$data_user2['tersimpan'] = $data_user2['tersimpan'];

	// 	return true;

	// }

	// function datamasuk($dibeli, $tersimpan){
	// 	$insert = mysqli_query($this->koneksi, "insert into databarang value('',''$dibeli','$tersimpan')");
	// 	return $insert;
	// }

	// function databarang($username, $dibeli, $tersimpan){
	// 	$query = mysqli_query($this->koneksi, "select * from databarang");
	// 	$data_user = $query->fetch_array();

	// 	if(isset($data_user)){
	// 		$_SESSION['dibeli'] = 121;
	// 		$_SERVER['tersimpan'] = 2;
	// 		$_SESSION['login'] = true;
	// 		return true;
	// 	}
	// }
}
