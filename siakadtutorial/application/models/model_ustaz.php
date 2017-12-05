<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ustaz extends CI_model {

	
	public function getdata($key)
	{
		$this-> db->where('id_ustaz',$key);
		$hasil = $this->db->get('ustaz');
		return $hasil;
	}

	public function getupdate($key, $data)
	{
		$this->db->where('id_ustaz',$key);
		$this->db->update('ustaz',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('ustaz',$data);
	
	}

	public function getdatakajian($key,$kol)
	{
		$data= "SELECT $kol FROM `ustaz` WHERE `id_ustaz`=$key";
		$hasil = $this->db->query($data);
		return $hasil;
	}
	
	public function getdatakol($key,$kol)
	{
		$data= "SELECT $kol FROM `ustaz` WHERE `id_ustaz`=$key";
		$hasil = $this->db->query($data);
		return $hasil;
	}

	public function getdelete($key)
	{
		$this->db->where('id_ustaz',$key);
		return $this->db->delete('ustaz');
	}
}