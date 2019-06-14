<?php
class Pages extends CI_Controller {

	public function index(){
		$this->load->view('pages/fooldal');
	}

	public function kereso()
	{
		$this->load->view('lista/index');
	}

	public function kosar(){
		$this->load->view("kosar/index");
	}

	public function naptar(){
		$this->load->view('naptar/index');
	}

	public function insert(){
		$data = json_decode(file_get_contents("php://input"));
		$datumk = $data->datum_kezdo;
		if($data->datum_vege){
			$datumv = $data->datum_vege;
		}else{
			$datumv = '0000-00-00 00:00:00';
		}
		
		$jel = $data->jelzo;
		$cim = $data->cim;
		$leiras = $data->leiras;

		$status = $this->Naptar_model->insert_esemeny($datumk, $datumv, $jel, $cim, $leiras);
	}

	public function select(){
		$data = array();
		$data = $this->Naptar_model->select_esemeny();
		
		echo json_encode($data);
	}

	public function delete(){
		$data = json_decode(file_get_contents("php://input"));
		$id = $data->esemeny_id;
		$this->Naptar_model->delete_esemeny($id);
	}
}
