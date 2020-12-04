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

	function register($nama, $username, $password)
	{
		$insert = mysqli_query($this->koneksi, "insert into pendaftaran value('$nama','$username','$password')");
		return $insert;
	}

	function login($username, $password)
	{
		$query = mysqli_query($this->koneksi,  "select * from pendaftaran where username='$username'");
		$data_user = $query->fetch_array();

		if (isset($data_user)) {
			if (password_verify($password, $data_user['password'])) {
				$_SESSION['username'] = $username;
				$_SESSION['nama'] = $data_user['nama'];
				$_SESSION['login'] = true;
				return true;
			}
		}
	}

	function panggil($nama, $username, $password){
		$query = mysqli_query($this->koneksi,  "select * from pendaftaran");
		$data_user = $query->fetch_array();
		$no = 0;
		while($data = mysqli_fetch_array($query)){
			$nama = $data['nama'];
			$username = $data['username'];
			$password = $data['password'];
			$no++;
		}
	}
}
