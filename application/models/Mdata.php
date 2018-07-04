<?php 
	/**
	* 
	*/
	class Mdata extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function input_data($data)
		{
			$this->db->insert('data_barang',$data);
		}

		public function get_all()
		{
			$this->db->select('*');
			$this->db->from('data_barang');

			return $this->db->get();
		}

		public function updateID($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('data_barang',$data);
		}
		public function update($nama,$data)
		{
			$this->db->where('nama',$nama);
			$this->db->update('data_barang',$data);
		}

		public function delete($id_data)
		{
			$this->db->where('id',$id_data);
			$this->db->delete('data_barang');

			return TRUE;
		}

		public function select_tanggal($tanggal)
		{
			$this->db->select('*');
			$this->db->from('data_barang');
			$this->db->where('tanggal',$tanggal);

			return $this->db->get();
		}

		public function select_kopi($id)
		{
			$this->db->select('*');
			$this->db->from('data_barang');
			$this->db->where('kd_karung',$id);

			return $this->db->get();
		}
		function search($keyword)
    	{
	        $this->db->like('id',$keyword);
	        $query  =  $this->db->get('data_barang');
	        return $query->result();
    	}

    	public function viewByid($id){    

    	  	$this->db->where('id', $id);    
    	  	$result = $this->db->get('data_barang')->row(); // Tampilkan data siswa berdasarkan NIS        return $result;   }
    	}

    	public function barang_habis()
		{
			$this->db->select('*');
			$this->db->from('data_barang');
			$this->db->where('jumlah','0');

			return $this->db->get();
		}

		public function ambil_barang($nama)
		{
			
			$this->db->select('*');
			$this->db->from('data_barang');
			$this->db->where('nama',$nama);
			return $this->db->get();

		}

		public function total_barang()
		{
			
			$this->db->from('data_barang');
			
			return $this->db->count_all_results();
		}

		public function total_barang_kosong()
		{
			
			$this->db->from('data_barang');
			$this->db->where('jumlah','0');
			
			return $this->db->count_all_results();
		}



		function getkodeunik() { 

			$table = 'data_barang';
	        $q = $this->db->query("SELECT MAX(RIGHT(id,4)) AS idmax FROM ".$table);
	        $kd = ""; //kode awal
	        if($q->num_rows()>0){ //jika data ada
	            foreach($q->result() as $k){
	                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
	                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
	            }
	        }else{ //jika data kosong diset ke kode awal
	            $kd = "0001";
	        }
	        $kar = "ID."; //karakter depan kodenya
	        //gabungkan string dengan kode yang telah dibuat tadi
	        return $kar.$kd;
   		}  





		
	}