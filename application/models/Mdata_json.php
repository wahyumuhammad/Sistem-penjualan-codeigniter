<?php 
	/**
	* 
	*/
	class Mdata_json extends CI_Model {

	  public function getCountMahasiswa()
	  {
	      return $this->db->count_all_results('data_barang', FALSE);
	  }

	  public function getMahasiswa($page, $size)
	  {
	      return $this->db->get('data_barang', $size, $page);
	  }

	  // public function insertMahasiswa($dataMahasiswa)
	  // {
	  //     $val = array(
	  //       'npm' => $dataMahasiswa['npm'],
	  //       'nama' => $dataMahasiswa['nama'],
	  //       'kelas' => $dataMahasiswa['kelas'],
	  //       'tanggalLahir' => $dataMahasiswa['tanggalLahir']
	  //     );
	  //     $this->db->insert('data_barang', $val);
	  // }

	  // public function updateMahasiswa($dataMahasiswa, $npm)
	  // {
	  //   $val = array(
	  //     'nama' => $dataMahasiswa['nama'],
	  //     'kelas' => $dataMahasiswa['kelas'],
	  //     'tanggalLahir' => $dataMahasiswa['tanggalLahir']
	  //   );
	  //   $this->db->where('npm', $npm);
	  //   $this->db->update('data_barang', $val);
	  // }

	  // public function deleteMahasiswa($npm)
	  // {
	  //   $val = array(
	  //     'npm' => $npm
	  //   );
	  //   $this->db->delete('data_barang', $val);
	  // }

}





		// function getkodeunik() { 

		// 	$table = 'data_barang';
	 //        $q = $this->db->query("SELECT MAX(RIGHT(kd_karung,4)) AS idmax FROM ".$table);
	 //        $kd = ""; //kode awal
	 //        if($q->num_rows()>0){ //jika data ada
	 //            foreach($q->result() as $k){
	 //                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
	 //                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
	 //            }
	 //        }else{ //jika data kosong diset ke kode awal
	 //            $kd = "0001";
	 //        }
	 //        $kar = "ARB."; //karakter depan kodenya
	 //        //gabungkan string dengan kode yang telah dibuat tadi
	 //        return $kar.$kd;
  //  }  
		
	