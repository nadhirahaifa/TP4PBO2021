<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// memasukkan data
	function insert($data){
		// menampung data
		$tname = $data['tname']; 
		$tdetails = $data['tdetails'];
		$tsubject = $data['tsubject'];
		$tpriority = $data['tpriority'];
		$tdeadline = $data['tdeadline'];

		// memasukkan data tampungan ke dalam database
		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td) VALUES ('$tname', '$tdetails', '$tsubject', '$tpriority',  '$tdeadline', 'Belum')";
		
		// mengeksekusi query
		return $this->execute($query);
   }

	// method untuk menghapus data
   function delete($data){
		// menampung data
	   $id = $data['id_hapus'];

		//    menghapus data dari database
	   $query = "DELETE FROM tb_to_do WHERE id=$id";
	   
		// mengeksekusi query
	   return $this->execute($query);
   }

	//    method yang digunakan untuk mengupdate status 
   function update(){
		//    menampung data
	   $id = $_GET['id_status'];
	
		//    melakukan pembaruan pada database
	   $query = "UPDATE tb_to_do SET status_td='Sudah' WHERE id=$id";
	
	   // mengeksekusi query 
	   return $this->execute($query);
   }

}



?>
