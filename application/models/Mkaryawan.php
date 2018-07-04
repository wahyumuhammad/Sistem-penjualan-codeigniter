<?php 
	/**
	* 
	*/
	class Mkaryawan extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function input_data($data)
		{
			$this->db->insert('data_karyawan',$data);
		}

		public function get_all()
		{
			$this->db->select('*');
			$this->db->from('data_karyawan');

			return $this->db->get();
		}

		public function update($id_data,$data)
		{
			$this->db->where('id',$id_data);
			$this->db->update('data_karyawan',$data);
		}

		public function delete($id_data)
		{
			$this->db->where('id',$id_data);
			$this->db->delete('data_karyawan');

			return TRUE;
		}

		public function select_tanggal($tanggal)
		{
			$this->db->select('*');
			$this->db->from('data_karyawan');
			$this->db->where('tanggal',$tanggal);

			return $this->db->get();
		}

		public function select_kopi($id)
		{
			$this->db->select('*');
			$this->db->from('data_karyawan');
			$this->db->where('id',$id);

			return $this->db->get();
		}
		function search($keyword)
    	{
	        $this->db->like('id',$keyword);
	        $query  =  $this->db->get('data_karyawan');
	        return $query->result();
    	}

    	public function viewByid($id){    

    	  	$this->db->where('id', $id);    
    	  	$result = $this->db->get('data_karyawan')->row(); // Tampilkan data siswa berdasarkan NIS        return $result;   }
    	}

    	public function ambil_id($id)
		{
			$this->db->select('*');
			$this->db->from('data_karyawan');
			$this->db->where('id',$id);

			return $this->db->get();
		}

		public function total_penjualan()
		{
			$this->db->from('data_karyawan');
			
			return $this->db->count_all_results();
		}

		public function jumlah_untung()
		{	
			$this->db->select('SUM(untung) as total');
			$this->db->from('data_karyawan');
			return $this->db->get()->row()->total;
		}

		function getkodeunik() { 

			$table = 'data_karyawan';
	        $q = $this->db->query("SELECT MAX(RIGHT(id,4)) AS idmax FROM ".$table);
	        $kd = ""; 
	        if($q->num_rows()>0){ 
	            foreach($q->result() as $k){
	                $tmp = ((int)$k->idmax)+1; 
	                $kd = sprintf("%04s", $tmp); 
	            }
	        }else{ 
	            $kd = "00001";
	        }
	        $kar = "DISPORAPAR."; 
	        return $kar.$kd;
   		}  

	

		
		
	}