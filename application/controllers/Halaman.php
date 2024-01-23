<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Halaman extends CI_Controller {


	public function detail(){
		$query = $this->model_utama->view_join_one('halamanstatis','users','username',array('judul_seo' => $this->uri->segment(3)),'id_halaman','DESC',0,1);
		// var_dump($query->row_array());die;
		if ($query->num_rows()<=0){
			redirect('main');
		}elseif($query->row_array()['judul_seo'] == 'sejarah-perusahaan'){
			$data['title'] 			= 'Sejarah Perusahaan';
			$data['description']	= 'This is Company Profile Page';
			$data['keywords'] 		= cetak(str_replace(' ',', ',$data['description']));
			$this->template->load(template().'/template',template().'/detailSejarahView',$data);
		}elseif($query->row_array()['judul_seo'] == 'visi-dan-misi-perusahaan'){
			$data['title'] 			= 'Visi Misi Perusahaan';
			$data['description']	= 'This is Company Profile Page';
			$data['keywords'] 		= cetak(str_replace(' ',', ',$data['description']));
			$this->template->load(template().'/template',template().'/visiMisiView',$data);
		}elseif($query->row_array()['judul_seo'] == 'bbm-retail'){
			$data['title'] 			= 'Outsourcing';
			$data['description']	= 'This is Outsourcing Page';
			$data['keywords'] 		= cetak(str_replace(' ',', ',$data['description']));
			$this->template->load(template().'/template',template().'/osViews',$data);
		}else{
			$row = $query->row_array();
			$data['title'] = cetak($row['judul']);
			$data['description'] = cetak($row['isi_halaman']);
			$data['keywords'] = cetak(str_replace(' ',', ',$row['judul']));
			$data['rows'] = $row;

			$dataa = array('dibaca'=>$row['dibaca']+1);
			$where = array('id_halaman' => $row['id_halaman']);
			$this->model_utama->update('halamanstatis', $dataa, $where);
			$this->template->load(template().'/template',template().'/detailhalaman',$data);
		}
	}

	public function detailBisnis(){

	}
	
	public function detailKarir()
	{
		$query = $this->model_utama->getKarir()->row_array();
		$data['title'] 			= 'Career Page';
		$data['description']	= 'This is Karir Page';
		$data['keywords'] 		= cetak(str_replace(' ',', ',$query['karir_name']));
		if($query == null){
			$this->template->load(template().'/template',template().'/blankPage',$data);
		}else{
			
	
			$this->template->load(template().'/template',template().'/detailKarirView',$data);

		}

	}

	public function detailMitra()
	{
		$query = $this->model_utama->getMitra()->row_array();
		$data['title'] 			= 'Mitra Page';
		$data['description']	= 'This is Mitra Page';
		$data['keywords'] 		= cetak(str_replace(' ',', ',$query['mitra_name']));
		if($query == null){
			$this->template->load(template().'/template',template().'/blankPage',$data);
		}else{
			
	
			$this->template->load(template().'/template',template().'/detailMitraView',$data);

		}

	}

	public function detailKub(){

		$data['title'] 			= 'Detail KUB';
		$data['description']	= 'This is KUB Page';
		$data['keywords'] 		= cetak(str_replace(' ',', ',$data['description']));
		$this->template->load(template().'/template',template().'/detailKUBView',$data);

	}

	public function detailManagement(){

		$data['title'] 			= 'Detail Management';
		$data['description']	= 'This is Management Page';
		$data['keywords'] 		= cetak(str_replace(' ',', ',$data['description']));
		$this->template->load(template().'/template',template().'/detailManagementViews',$data);

	}
}
