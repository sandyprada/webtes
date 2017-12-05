<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustaz extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['content'] = 'ustaz/tampil_dataustaz';
		$isi['judul'] = 'Master';
		$isi['sub_judul'] = 'Data Ustaz';
		$isi['data']= $this->db->get('ustaz');
		$this->load->view('tampilan_home',$isi);
	}

	public function input(){
		$this->model_squrity->getsqurity();
		$isi['content'] = 'ustaz/form_input_ustaz';
		$isi['judul'] = 'Master';
		$isi['sub_judul'] = 'tambah data Ustaz';
				$isi['kd_ustaz'] 	='';
				$isi['namaustaz'] 	='';
				$isi['lembaga'] 	='';
				$isi['nohp'] 		='';
				$isi['status'] 		='';
				$isi['domisili']	='';
				$isi['kajian']		='';
				$isi['materi']		='';
				$isi['kelebihan'] 	='';
				$isi['kekurangan'] 	='';
				$isi['tgl_insert'] 	=date("Y-m-d");
				$isi['tgl_update'] 	=date("Y-m-d");

		$isi['kajian'] = $this->db->get('kajian');
		$isi['kafaah'] = $this->db->get('kafaah');
		$isi['reset'] = 'true';
			
		// if($querykajian->num_rows()>0)
		// {
		// 	foreach ($querykajian -> result() as $rowkajian) {
		// 		$isi['namakajian'] = $rowkajian->nama_kajian;
		// 		$isi['singkat'] = $rowkajian ->singkatan;
		// 	}
		// }

		$this->load->view('tampilan_home',$isi);
	}

	public function delete()
	{
		$this->model_squrity->getsqurity();
		$isi['content'] = 'ustaz/form_input_ustaz';
		$isi['judul'] = 'Master';
		$isi['sub_judul'] = 'edit data Ustaz';
		$isi['kajian'] = $this->db->get('kajian');
		$isi['kafaah'] = $this->db->get('kafaah');
		$key=$this->uri->segment(3);
		$this->load->model('model_ustaz');
		$this->model_ustaz->getdelete($key);
		$this->session->set_flashdata('info','data sukses diupdate');
		redirect('ustaz');
	}

	public function edit(){
		$this->model_squrity->getsqurity();
		$isi['content'] = 'ustaz/form_input_ustaz';
		$isi['judul'] = 'Master';
		$isi['sub_judul'] = 'edit data Ustaz';
		$isi['kajian'] = $this->db->get('kajian');
		$isi['kafaah'] = $this->db->get('kafaah');
		$kajian= $this->db->get('kajian');
		$kafaah= $this->db->get('kafaah');
		$querykajian= $this->db->get('kajian');
		$key=$this->uri->segment(3);
		$this->db->where('id_ustaz',$key);
		$this->load->model('model_ustaz');
		$query = $this->db->get('ustaz');
				
		if($query->num_rows()>0){
			foreach ($query -> result() as $row) {
				$isi['kd_ustaz'] = $row->id_ustaz;
				$isi['namaustaz'] = $row->nama;
				$isi['lembaga'] = $row->lembaga;
				$isi['nohp'] = $row->phone;
				$isi['status'] = $row->status_kontak;
				$isi['domisili'] = $row->domisili;
				// $isi['kajian'] = $row->kajian;
				// $isi['kismis']		= $row->kismis;
				// $isi['kafi']		= $row->kafi;
				// $isi['tc']		= $row->tc;
				// $isi['kis']		= $row->kis;
				// $isi['fisi']		= $row->fisi;
				// $isi['ismi']		= $row->ismi;
				// $isi['tarhib']		= $row->tarhib;
				// $isi['umum']		= $row->umum;
				// $isi['ddfdm']		= $row->ddfdm;
				// $isi['mmd']		= $row->mmd;
				// $isi['mmdl']		= $row->mmdl;
				// $isi['data']		= $row->data;
				// $isi['darep']		= $row->darep;
				// $isi['dr']		= $row->dr;
				foreach ($kajian->result() as $rowkaj) {
				$kd_kajian= $rowkaj->kolom;
				$isi[$kd_kajian]= $row->$kd_kajian;
				}

				foreach ($kafaah->result() as $rowkaf) {
				$kd_kaf= $rowkaf->kol_kaf;
				$isi[$kd_kaf]= $row->$kd_kaf;
				}

				$isi['materi'] = $row->materi;
				$isi['kelebihan'] = $row->kelebihan;
				$isi['kekurangan'] = $row->kekurangan;
				$isi['tgl_insert'] = $row->tanggal_insert;
				$isi['tgl_update'] = date("Y-m-d");
				
				$isi['reset'] = 'false';
			}
		}
		else
		{
				$isi['reset']='true';
				$isi['kd_ustaz'] 	='';
				$isi['namaustaz'] 	='';
				$isi['lembaga'] 	='';
				$isi['nohp'] 		='';
				$isi['status'] 		='';
				$isi['domisili']	='';
				// $isi['kajian']		='';
				

				
				// $isi['kismis']		='';
				// $isi['kafi']		='';
				// $isi['tc']		= '';
				// $isi['kis']		= '';
				// $isi['fisi']		='';
				// $isi['ismi']		='';
				// $isi['tarhib']		='';
				// $isi['umum']		='';
				// $isi['ddfdm']		='';
				// $isi['mmd']		='';
				// $isi['mmdl']		= '';
				// $isi['data']		= '';
				// $isi['darep']		= '';
				// $isi['dr']		= '';

				$isi['materi']		='';
				$isi['kelebihan'] 	='';
				$isi['kekurangan'] 	='';
				$isi['tgl_insert'] 	='';
				$isi['tgl_update'] 	='';
		}

		
		
		$this->load->view('tampilan_home',$isi);
	}

	public function simpan()
	{
		$this->model_squrity->getsqurity();
		$kajian = $this->db->get('kajian');
		$kafaah = $this->db->get('kafaah');
		$key= $this->input->post('kd_ustaz');
		
		$data['nama']		= $this->input->post('namaustaz');
		$data['lembaga']		= $this->input->post('lembaga');
		$data['phone']		= $this->input->post('nohp');
		$data['status_kontak']		= $this->input->post('status');
		$data['domisili']		= $this->input->post('domisili');
		// $data['kajian']		= $this->input->post('kajian');
		foreach ($kajian->result() as $rowkaj) {
			$kd_kajian= $rowkaj->kolom;
			$setzero = $this->input->post($kd_kajian);
			if(is_null($setzero)){
			$data[$kd_kajian]='0';
			}
			else{
				$data[$kd_kajian]= $this->input->post($kd_kajian);
			}
			
		}
		
		foreach ($kafaah->result() as $rowkaf) {
			$kd_kaf= $rowkaf->kol_kaf;
			$setzerokaf = $this->input->post($kd_kaf);
			if(is_null($setzerokaf)){
			$data[$kd_kaf]='0';
			}
			else{
				$data[$kd_kaf]= $this->input->post($kd_kaf);
			}
			
		}

		$data['materi']		= $this->input->post('materi');
		$data['kelebihan']		= $this->input->post('kelebihan');
		$data['kekurangan']		= $this->input->post('kekurangan');
		$data['tanggal_insert']		= $this->input->post('tgl_insert');
		$data['tanggal_update']		= $data['tanggal_insert'];

		$this ->load->model('model_ustaz');
		$query = $this->model_ustaz->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_ustaz->getupdate($key,$data);
			$this->session->set_flashdata('info','data sukses diupdate');
			redirect('ustaz');
			
		} else
		{
			$this->model_ustaz->getinsert($data);
			$this->session->set_flashdata('info','data sukses ditambahkan');
			redirect('ustaz/input');
		}

		

	// 	$query = $this->model_ustaz->getdata($key);
	// 	if($query->num_rows()>0)
	// 	{
	// 		$this->model_ustaz->getupdate($key,$data);
	// 	} else
	// 	{
	// 		$this->model_ustaz->getinsert($data);
	// 	}

		
	 }
}
