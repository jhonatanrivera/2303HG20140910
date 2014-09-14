<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hogar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->model('hogar_model');
		//$this->load->library('session');
	}	
	public function index()
	{
		$this->form_validation->set_rules('nro_vivienda', 'Numero de vivienda', 'trim|required|xss_clean|integer');
		$btnConsulta = $this->input->post('btnConsulta');
		if ($this->form_validation->run()) {
			$NUM_VIV = $this->input->post('nro_vivienda');
			$exits = $this->consulta('hg1_localizacion',array('NUM_VIV' => $NUM_VIV));
			if($btnConsulta == 'Nuevo'){
				if($exits){ 
					$this->session->set_flashdata('msg','Existe codigo de vivienda registrada');
					redirect('hogar');
				}else{
					$this->session->set_flashdata('NUM_VIV_new',$NUM_VIV);
					redirect('hogar/'.$NUM_VIV); 
				}
			}else if($btnConsulta == 'Buscar'){
				if($exits){ 
					redirect('hogar/'.$NUM_VIV); 
				}else{
					$this->session->set_flashdata('msg','No existe codigo de vivienda registrada');
					redirect('hogar'); 
				}				
			}
		}else{
			$this->title = "Hogar";
			$data['main_content'] = 'hogar/v_consulta';
			$this->load->view('_template/main',$data);
		}
	}


	private function consulta($table = NULL,$where = NULL,$num_row = 1)
	{
		if(!is_null($table) && is_array($where)){
			return $this->hogar_model->checkExistRow($table,$where);
		}
	}
	function miembros()
	{
		if ($this->input->is_ajax_request()) {
			echo count($this->hogar_model->selectRows('hg2_seccion1_1',array('NUM_VIV'),array('NUM_VIV'=>$this->input->post('NUM_VIV'))));

		}
	}

	public function vivienda($nro_vivienda = NULL)
	{
		if (!is_null($nro_vivienda)) {
			$dataWhere = array('NUM_VIV'=>$nro_vivienda);
			$exits = $this->consulta('hg1_localizacion',$dataWhere);
			if($exits){
				$data['hg1_localizacion'] 	= $this->hogar_model->selectRows('hg1_localizacion',null,$dataWhere);
				$data['hg2_seccion1_1'] 	= $this->hogar_model->selectRows('hg2_seccion1_1',null,$dataWhere);
				$data['hg2_seccion1_2'] 	= $this->hogar_model->selectRows('hg2_seccion1_2',null,$dataWhere);
				$data['hg3_seccion2a'] 	= $this->hogar_model->selectRows('hg3_seccion2a',null,$dataWhere);
				$data['hg3_seccion2b'] 	= $this->hogar_model->selectRows('hg3_seccion2b',null,$dataWhere);
			}else $data['NUM_VIV_nuevo'] = $nro_vivienda;
			$dataWhere = array('NUM_VIV'=>$nro_vivienda);
			$this->title = "Hogar | ".$nro_vivienda;
			
			$data['main_content'] = 'hogar/v_hogar';
			$this->load->view('_template/main',$data);				
		}else redirect('hogar');

	}

	public function guardar($NUM_VIV=0)
	{
		if ($this->input->is_ajax_request() && $NUM_VIV>0 ) {
			if ($NUM_VIV == 1) {
				$tableLocal = 'hg1_localizacion';
				$fieldNames = $this->hogar_model->getFieldsName($tableLocal);
				foreach ($fieldNames as $value) {
					if(!in_array($value, array('USER_ID','FECHA_CREACION','USER_ID_MOD','FECHA_MODIFICACION','S1_A_1','S1_A_OBS','S1_B_OBS','S1_C_OBS','S1_D_OBS','S1_E_OBS')))
					$dataModel[$value] = ($this->input->post($value) != "") ? ($this->input->post($value)) : NULL;
				}
				$dataWhere = array('NUM_VIV'=>$dataModel['NUM_VIV']);
				$existeRow = $this->consulta($tableLocal,$dataWhere);
				if ($existeRow) {
					$dataModel = array_diff_assoc($dataModel,$dataWhere);
					$dataModel['USER_ID_MOD'] = $this->tank_auth->get_user_id();
					$dataModel['FECHA_MODIFICACION'] = date('Y-m-d H:i:s');
					$afectados = $this->hogar_model->updateRow($tableLocal,$dataModel,$dataWhere);
					if ($afectados == 1) { echo json_encode(array('response'=>'update','msg' =>'Éxito: Se actualizó satisfactoriamente' )) ;}
				}else{
					$dataModel['USER_ID'] = $this->tank_auth->get_user_id();
					$afectados = $this->hogar_model->insertRow($tableLocal,$dataModel);
					if ($afectados == 1) {echo json_encode(array('response'=>'insert','msg' =>'Éxito: Se insertó satisfactoriamente' ));}
					else {echo json_encode(array('response'=>'error','msg' =>'Error: Al mommento de insertar' ));}
				}				
			}else if ($NUM_VIV == 2) {
					/* OBSERACIONES */
					foreach (array('S1_A_1','S1_A_OBS','S1_B_OBS','S1_C_OBS','S1_D_OBS','S1_E_OBS') as $value) {/* OBS son guardadas en [hg1_localizacion]*/
						$dataOBS[$value] = ($this->input->post($value)!="") ? $this->input->post($value) : NULL;
					}
					$this->hogar_model->updateRow('hg1_localizacion',$dataOBS,array('NUM_VIV'=>$this->input->post('NUM_VIV')));
					/* OBSERACIONES */					
					$tableLocal = 'hg2_seccion1_1';
					$fieldNames = $this->hogar_model->getFieldsName($tableLocal);
					$cant = count($this->input->post('COD_IDENT')); $reg = 0;
					foreach ($this->input->post('COD_IDENT') as $i => $nItem) {
						foreach ($fieldNames as $value) {
							if(!in_array($value, array('NUM_VIV','USER_ID','FECHA_CREACION','USER_ID_MOD','FECHA_MODIFICACION'))){
								$field = ($this->input->post($value)) ? $this->input->post($value) : NULL;
								$dataModel[$value] = (isset($field[$nItem])) ? ($field[$nItem] != "") ? $field[$nItem] : NULL : NULL;
							}
						}
						$dataModel['NUM_VIV'] = $this->input->post('NUM_VIV');
						$dataWhere = array('NUM_VIV'=>$dataModel['NUM_VIV'],'COD_IDENT'=>$dataModel['COD_IDENT']);
						$existeRow = $this->consulta($tableLocal,$dataWhere);
						if ($existeRow) {
							$dataModel = array_diff_assoc($dataModel,$dataWhere);
							$dataModel['USER_ID_MOD'] = $this->tank_auth->get_user_id();
							$dataModel['FECHA_MODIFICACION'] = date('Y-m-d H:i:s');
							$afectados = $this->hogar_model->updateRow($tableLocal,$dataModel,$dataWhere);
							if ($afectados == 1) { $reg++; }
						}else{
							$dataModel['USER_ID'] = $this->tank_auth->get_user_id();
							$afectados = $this->hogar_model->insertRow($tableLocal,$dataModel);
							if ($afectados == 1) { $reg++; }
						}
					};	
					if ($cant == $reg) {
						echo json_encode(array('response'=>'insert','msg' =>'Éxito: Se insertó satisfactoriamente' ));
					}
			}else if ($NUM_VIV == 3) {
				$tableLocal = 'hg2_seccion1_2';
				$fieldNames = $this->hogar_model->getFieldsName($tableLocal);
				foreach ($fieldNames as $value) {
					if(!in_array($value, array('USER_ID','FECHA_CREACION','USER_ID_MOD','FECHA_MODIFICACION')))
					$dataModel[$value] = ($this->input->post($value) != "") ? ($this->input->post($value)) : NULL;
				}
				$dataWhere = array('NUM_VIV'=>$dataModel['NUM_VIV']);
				$existeRow = $this->consulta($tableLocal,$dataWhere);
				if ($existeRow) {
					$dataModel = array_diff_assoc($dataModel,$dataWhere);
					$dataModel['USER_ID_MOD'] = $this->tank_auth->get_user_id();
					$dataModel['FECHA_MODIFICACION'] = date('Y-m-d H:i:s');
					$afectados = $this->hogar_model->updateRow($tableLocal,$dataModel,$dataWhere);
					if ($afectados == 1) { echo json_encode(array('response'=>'update','msg' =>'Éxito: Se actualizó satisfactoriamente' )) ;}
				}else{
					$dataModel['USER_ID'] = $this->tank_auth->get_user_id();
					$afectados = $this->hogar_model->insertRow($tableLocal,$dataModel);
					if ($afectados == 1) {echo json_encode(array('response'=>'insert','msg' =>'Éxito: Se insertó satisfactoriamente' ));}
					else {echo json_encode(array('response'=>'error','msg' =>'Error: Al mommento de insertar' ));}
				}				
			}else if ($NUM_VIV == 4) {
				$tableLocal = 'hg3_seccion2a';
				$fieldNames = $this->hogar_model->getFieldsName($tableLocal);
				foreach ($fieldNames as $value) {
					if(!in_array($value, array('USER_ID','FECHA_CREACION','USER_ID_MOD','FECHA_MODIFICACION')))
					$dataModel[$value] = ($this->input->post($value) != "") ? ($this->input->post($value)) : NULL;
				}
				$dataWhere = array('NUM_VIV'=>$dataModel['NUM_VIV']);
				$existeRow = $this->consulta($tableLocal,$dataWhere);
				if ($existeRow) {
					$dataModel = array_diff_assoc($dataModel,$dataWhere);
					$dataModel['USER_ID_MOD'] = $this->tank_auth->get_user_id();
					$dataModel['FECHA_MODIFICACION'] = date('Y-m-d H:i:s');
					$afectados = $this->hogar_model->updateRow($tableLocal,$dataModel,$dataWhere);
					if ($afectados == 1) { echo json_encode(array('response'=>'update','msg' =>'Éxito: Se actualizó satisfactoriamente' )) ;}
				}else{
					$dataModel['USER_ID'] = $this->tank_auth->get_user_id();
					$afectados = $this->hogar_model->insertRow($tableLocal,$dataModel);
					if ($afectados == 1) {echo json_encode(array('response'=>'insert','msg' =>'Éxito: Se insertó satisfactoriamente' ));}
					else {echo json_encode(array('response'=>'error','msg' =>'Error: Al mommento de insertar' ));}
				}

			}else if ($NUM_VIV == 5) {
				$tableLocal = 'hg3_seccion2b';
				$fieldNames = $this->hogar_model->getFieldsName($tableLocal);
				foreach ($fieldNames as $value) {
					if(!in_array($value, array('USER_ID','FECHA_CREACION','USER_ID_MOD','FECHA_MODIFICACION')))
					$dataModel[$value] = ($this->input->post($value) != "") ? ($this->input->post($value)) : NULL;
				}
				$dataWhere = array('NUM_VIV'=>$dataModel['NUM_VIV']);
				$existeRow = $this->consulta($tableLocal,$dataWhere);
				if ($existeRow) {
					$dataModel = array_diff_assoc($dataModel,$dataWhere);
					$dataModel['USER_ID_MOD'] = $this->tank_auth->get_user_id();
					$dataModel['FECHA_MODIFICACION'] = date('Y-m-d H:i:s');
					$afectados = $this->hogar_model->updateRow($tableLocal,$dataModel,$dataWhere);
					if ($afectados == 1) { echo json_encode(array('response'=>'update','msg' =>'Éxito: Se actualizó satisfactoriamente' )) ;}
				}else{
					$dataModel['USER_ID'] = $this->tank_auth->get_user_id();
					$afectados = $this->hogar_model->insertRow($tableLocal,$dataModel);
					if ($afectados == 1) {echo json_encode(array('response'=>'insert','msg' =>'Éxito: Se insertó satisfactoriamente' ));}
					else {echo json_encode(array('response'=>'error','msg' =>'Error: Al mommento de insertar' ));}
				}

			}
		}else
			show_error("No tiene acceso" , 403 ); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */