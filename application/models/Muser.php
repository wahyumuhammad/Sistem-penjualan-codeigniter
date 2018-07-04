<?php 
	/**
	* 
	*/
	class Muser extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function input_data($data)
		{
			$this->db->insert('data_user',$data);
		}

		public function get_all()
		{
			$this->db->select('*');
			$this->db->from('data_user');

			return $this->db->get();
		}

		public function updateID($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('data_user',$data);
		}
		public function update($nama,$data)
		{
			$this->db->where('nama',$nama);
			$this->db->update('data_user',$data);
		}

		public function delete($id_data)
		{
			$this->db->where('id_user',$id_data);
			$this->db->delete('data_user');

			return TRUE;
		}

		function search($keyword)
    	{
	        $this->db->like('id',$keyword);
	        $query  =  $this->db->get('data_user');
	        return $query->result();
    	}


		function getkodeunik() { 

			$table = 'data_user';
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

   		function cek_login($where){		
			return $this->db->get_where('data_user',$where);
		}	

		function is_admin($username){

			$this->db->select('status');
			$this->db->where('username',$username);
			$this->db->from('data_user');

			return $this->db->get()->result();
		}
		
	}