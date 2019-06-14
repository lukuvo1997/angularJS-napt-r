<?php
	class Naptar_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function insert_esemeny($datumk, $datumv, $jel, $cim, $leiras){
			$data = array(
				'esemeny_id' => NULL,
				'esemeny_kezdes' => $datumk,
				'esemeny_vege' => $datumv,
				'esemeny_jelzo' => $jel,
				'esemeny_cim' => $cim,
				'esemeny_leiras' => $leiras
			);

			return $this->db->insert('esemenyek',$data);
		}

		public function select_esemeny(){
			$query = $this->db->get('esemenyek');
			return $query->result_array();
		}

		public function delete_esemeny($id){
			return $this->db->delete('esemenyek',array('esemeny_id' => $id));
		}
	}