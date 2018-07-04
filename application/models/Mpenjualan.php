<?php 
	/**
	* 
	*/
	class Mpenjualan extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function input_data($data)
		{
			$this->db->insert('data_penjualan',$data);
		}

		public function get_all()
		{
			$this->db->select('*');
			$this->db->from('data_penjualan');

			return $this->db->get();
		}

		public function update1($id_data,$data)
		{
			$this->db->where('id',$id_data);
			$this->db->update('data_penjualan',$data);
		}

		public function delete($id_data)
		{
			$this->db->where('id',$id_data);
			$this->db->delete('data_penjualan');

			return TRUE;
		}

		public function select_tanggal($tanggal)
		{
			$this->db->select('*');
			$this->db->from('data_penjualan');
			$this->db->where('tanggal',$tanggal);

			return $this->db->get();
		}

		public function select_kopi($id)
		{
			$this->db->select('*');
			$this->db->from('data_penjualan');
			$this->db->where('id',$id);

			return $this->db->get();
		}
		function search($keyword)
    	{
	        $this->db->like('id',$keyword);
	        $query  =  $this->db->get('data_penjualan');
	        return $query->result();
    	}

    	public function viewByid($id){    

    	  	$this->db->where('id', $id);    
    	  	$result = $this->db->get('data_penjualan')->row(); // Tampilkan data siswa berdasarkan NIS        return $result;   }
    	}

    	public function barang_habis()
		{
			$this->db->select('*');
			$this->db->from('data_penjualan');
			$this->db->where('status','kosong');

			return $this->db->get();
		}

		public function total_penjualan()
		{
			$this->db->from('data_penjualan');
			
			return $this->db->count_all_results();
		}

		public function jumlah_untung()
		{	
			$this->db->select('SUM(untung) as total');
			$this->db->from('data_penjualan');
			return $this->db->get()->row()->total;
		}

		function getkodeunik() { 

			$table = 'data_penjualan';
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
	        $kar = "KPRT."; //karakter depan kodenya
	        //gabungkan string dengan kode yang telah dibuat tadi
	        return $kar.$kd;
   		}  

	

		
		
	}