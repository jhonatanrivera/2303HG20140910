<?php
$unidades['ha'] = 'HECTÁREA';
$unidades['m2'] = 'METROS CUADRADOS';
$unidades['kg'] = 'KILOGRAMO';
$unidades['cabeza'] = 'CABEZA';
$unidades['L'] = 'LITRO';
$unidades['doc.'] = 'DOCENA';
/*****************SECCIÓN 2: INFORMACIÓN AGROPECUARIA*********************/

/******************PARTE A: AGRICULTURA *******************************/

$S2_A_NomProd = array(
						'id' => 'S2_A_NomProd',
						'name' => 'S2_A_NomProd',
						'class' => 'form-control rA rNotReq',
						'align' => 'center',
						'maxlength' => '60',
					);

$S2_A_CodInfor = array(
						'id' => 'S2_A_CodInfor',
						'name' => 'S2_A_CodInfor',
						'class' => 'form-control rN rNotReq',
						'align' => 'center',
						'maxlength' => '2',
					);
$S2_A_84 = array(
						'id' => 'S2_A_84',
						'name' => 'S2_A_84',
						'class' => 'form-control rDig1-5 setFlujo',
						'align' => 'center',
						'maxlength' => '1',
					);
					
$S2_A_84_O = array(
						'id' => 'S2_A_84_O',
						'name' => 'S2_A_84_O',
						'class' => 'form-control spec rAN',
						'placeholder' => 'Especifique',
						'align' => 'center',
						'disabled' => 'disabled',
						'maxlength' => '50',
					);
$S2_A_85 = array(
						'id' => 'S2_A_85',
						'name' => 'S2_A_85',
						'class' => 'form-control rDig1-6',
						'align' => 'center',
						'maxlength' => '1',
					);
					
$S2_A_86 = array(
						'id' => 'S2_A_86',
						'name' => 'S2_A_86',
						'class' => 'form-control rDig1-2',
						'align' => 'center',
						'maxlength' => '1',
					);
$S2_A_87_Parc_1_Cant = array(
						'id' => 'S2_A_87_Parc_1_Cant',
						'name' => 'S2_A_87_Parc_1_Cant',
						'class' => 'form-control rN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_87_Parc_1_Unid = array(
						'id' => 'S2_A_87_Parc_1_Unid',
						'name' => 'S2_A_87_Parc_1_Unid',
						'class' => 'form-control rAN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_87_Parc_1_Reg = array(
						'id' => 'S2_A_87_Parc_1_Reg',
						'name' => 'S2_A_87_Parc_1_Reg',
						'class' => 'form-control wd-inner-20 rDig1-5 setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'set',
						'onchange' => 'setEspecificar(this,1,1)',
					);
					
$S2_A_87_Parc_1_Reg_O = array(
						'id' => 'S2_A_87_Parc_1_Reg_O',
						'name' => 'S2_A_87_Parc_1_Reg_O',
						'class' => 'form-control wd-inner-70 rAN spec',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);
$S2_A_87_Parc_1_Adqui = array(
						'id' => 'S2_A_87_Parc_1_Adqui',
						'name' => 'S2_A_87_Parc_1_Adqui',
						'class' => 'form-control rDig1-3 rNotReq',
						'align' => 'center',
						'maxlength' => '1',
					);
					
$S2_A_87_Parc_2_Cant = array(
						'id' => 'S2_A_87_Parc_2_Cant',
						'name' => 'S2_A_87_Parc_2_Cant',
						'class' => 'form-control rN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_87_Parc_2_Unid = array(
						'id' => 'S2_A_87_Parc_2_Unid',
						'name' => 'S2_A_87_Parc_2_Unid',
						'class' => 'form-control rAN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_87_Parc_2_Reg = array(
						'id' => 'S2_A_87_Parc_2_Reg',
						'name' => 'S2_A_87_Parc_2_Reg',
						'class' => 'form-control wd-inner-20 rDig1-5 setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',
					);
$S2_A_87_Parc_2_Reg_O = array(
						'id' => 'S2_A_87_Parc_2_Reg_O',
						'name' => 'S2_A_87_Parc_2_Reg_O',
						'class' => 'form-control wd-inner-70 rAN rNotReq spec',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);
					
$S2_A_87_Parc_2_Adqui = array(
						'id' => 'S2_A_87_Parc_2_Adqui',
						'name' => 'S2_A_87_Parc_2_Adqui',
						'class' => 'form-control rDig1-3 rNotReq',
						'align' => 'center',
						'maxlength' => '1',
					);
$S2_A_87_Parc_3_Cant = array(
						'id' => 'S2_A_87_Parc_3_Cant',
						'name' => 'S2_A_87_Parc_3_Cant',
						'class' => 'form-control rN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_87_Parc_3_Unid = array(
						'id' => 'S2_A_87_Parc_3_Unid',
						'name' => 'S2_A_87_Parc_3_Unid',
						'class' => 'form-control rAN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_87_Parc_3_Reg = array(
						'id' => 'S2_A_87_Parc_3_Reg',
						'name' => 'S2_A_87_Parc_3_Reg',
						'class' => 'form-control wd-inner-20 setEspecificar rDig1-5 rNotReq',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',

					);
					
$S2_A_87_Parc_3_Reg_O = array(
						'id' => 'S2_A_87_Parc_3_Reg_O',
						'name' => 'S2_A_87_Parc_3_Reg_O',
						'class' => 'form-control wd-inner-70 spec rAN',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);
$S2_A_87_Parc_3_Adqui = array(
						'id' => 'S2_A_87_Parc_3_Adqui',
						'name' => 'S2_A_87_Parc_3_Adqui',
						'class' => 'form-control rDig1-3 rNotReq',
						'align' => 'center',
						'maxlength' => '1',
					);
					
$S2_A_87_Parc_4_Cant = array(
						'id' => 'S2_A_87_Parc_4_Cant',
						'name' => 'S2_A_87_Parc_4_Cant',
						'class' => 'form-control rN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_87_Parc_4_Unid = array(
						'id' => 'S2_A_87_Parc_4_Unid',
						'name' => 'S2_A_87_Parc_4_Unid',
						'class' => 'form-control rAN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_87_Parc_4_Reg = array(
						'id' => 'S2_A_87_Parc_4_Reg',
						'name' => 'S2_A_87_Parc_4_Reg',
						'class' => 'form-control wd-inner-20 setEspecificar rDig1-5 rNotReq',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',
					);
$S2_A_87_Parc_4_Reg_O = array(
						'id' => 'S2_A_87_Parc_4_Reg_O',
						'name' => 'S2_A_87_Parc_4_Reg_O',
						'class' => 'form-control wd-inner-70 spec rAN rNotReq',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);
					
$S2_A_87_Parc_4_Adqui = array(
						'id' => 'S2_A_87_Parc_4_Adqui',
						'name' => 'S2_A_87_Parc_4_Adqui',
						'class' => 'form-control rDig1-3 rNotReq',
						'align' => 'center',
						'maxlength' => '1',
					);
$S2_A_87_Parc_5_Cant = array(
						'id' => 'S2_A_87_Parc_5_Cant',
						'name' => 'S2_A_87_Parc_5_Cant',
						'class' => 'form-control rN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_87_Parc_5_Unid = array(
						'id' => 'S2_A_87_Parc_5_Unid',
						'name' => 'S2_A_87_Parc_5_Unid',
						'class' => 'form-control rAN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_87_Parc_5_Reg = array(
						'id' => 'S2_A_87_Parc_5_Reg',
						'name' => 'S2_A_87_Parc_5_Reg',
						'class' => 'form-control wd-inner-20 setEspecificar rDig1-5 rNotReq',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',
					);
					
$S2_A_87_Parc_5_Reg_O = array(
						'id' => 'S2_A_87_Parc_5_Reg_O',
						'name' => 'S2_A_87_Parc_5_Reg_O',
						'class' => 'form-control wd-inner-70 spec rAN rNotReq',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);
$S2_A_87_Parc_5_Adqui = array(
						'id' => 'S2_A_87_Parc_5_Adqui',
						'name' => 'S2_A_87_Parc_5_Adqui rDig1-3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);
					
$S2_A_87_Parc_6_Cant = array(
						'id' => 'S2_A_87_Parc_6_Cant',
						'name' => 'S2_A_87_Parc_6_Cant',
						'class' => 'form-control rN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_87_Parc_6_Unid = array(
						'id' => 'S2_A_87_Parc_6_Unid',
						'name' => 'S2_A_87_Parc_6_Unid',
						'class' => 'form-control rAN rNotReq',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_87_Parc_6_Reg = array(
						'id' => 'S2_A_87_Parc_6_Reg',
						'name' => 'S2_A_87_Parc_6_Reg',
						'class' => 'form-control wd-inner-20 setEspecificar rDig1-5 rNotReq',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',
					);
$S2_A_87_Parc_6_Reg_O = array(
						'id' => 'S2_A_87_Parc_6_Reg_O',
						'name' => 'S2_A_87_Parc_6_Reg_O',
						'class' => 'form-control wd-inner-70 spec rAN rNotReq',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);
					
$S2_A_87_Parc_6_Adqui = array(
						'id' => 'S2_A_87_Parc_6_Adqui',
						'name' => 'S2_A_87_Parc_6_Adqui',
						'class' => 'form-control rDig1-3 rNotReq',
						'align' => 'center',
						'maxlength' => '1',
					);
$S2_A_OBS_1 = array(
						'id' => 'S2_A_OBS_1',
						'name' => 'S2_A_OBS_1',
						'class' => 'form-control spec rAN rNotReq',
						'align' => 'center',
						'maxlength' => '500',
						'placeholder' => 'OBSERVACIONES:',
						'rows' => '2',
					);
					
$S2_A_88_TipCulti_Parc1_1 = array(
						'id' => 'S2_A_88_TipCulti_Parc1_1',
						'name' => 'S2_A_88_TipCulti_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);
$S2_A_88_SS_Cant_Parc1_1 = array(
						'id' => 'S2_A_88_SS_Cant_Parc1_1',
						'name' => 'S2_A_88_SS_Cant_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_SS_Unid_Parc1_1 = array(
						'id' => 'S2_A_88_SS_Unid_Parc1_1',
						'name' => 'S2_A_88_SS_Unid_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_SC_Cant_Parc1_1 = array(
						'id' => 'S2_A_88_SC_Cant_Parc1_1',
						'name' => 'S2_A_88_SC_Cant_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_SC_Unid_Parc1_1 = array(
						'id' => 'S2_A_88_SC_Unid_Parc1_1',
						'name' => 'S2_A_88_SC_Unid_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_Prod_Ca_Parc1_1 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc1_1',
						'name' => 'S2_A_88_Prod_Ca_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_Prod_Unid_Parc1_1 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc1_1',
						'name' => 'S2_A_88_Prod_Unid_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_Desti_Parc1_1 = array(
						'id' => 'S2_A_88_Desti_Parc1_1',
						'name' => 'S2_A_88_Desti_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);
					
$S2_A_88_PreChac_Parc1_1 = array(
						'id' => 'S2_A_88_PreChac_Parc1_1',
						'name' => 'S2_A_88_PreChac_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);
$S2_A_88_PreCha_Uni_Parc1_1 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc1_1',
						'name' => 'S2_A_88_PreCha_Uni_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_PreComp_Parc1_1 = array(
						'id' => 'S2_A_88_PreComp_Parc1_1',
						'name' => 'S2_A_88_PreComp_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);
$S2_A_88_PreCom_Uni_Parc1_1 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc1_1',
						'name' => 'S2_A_88_PreCom_Uni_Parc1_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_TipCulti_Parc1_2 = array(
						'id' => 'S2_A_88_TipCulti_Parc1_2',
						'name' => 'S2_A_88_TipCulti_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',


					);
$S2_A_88_SS_Cant_Parc1_2 = array(
						'id' => 'S2_A_88_SS_Cant_Parc1_2',
						'name' => 'S2_A_88_SS_Cant_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',


					);
					
$S2_A_88_SS_Unid_Parc1_2 = array(
						'id' => 'S2_A_88_SS_Unid_Parc1_2',
						'name' => 'S2_A_88_SS_Unid_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',


					);
$S2_A_88_SC_Cant_Parc1_2 = array(
						'id' => 'S2_A_88_SC_Cant_Parc1_2',
						'name' => 'S2_A_88_SC_Cant_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',


					);
					
$S2_A_88_SC_Unid_Parc1_2 = array(
						'id' => 'S2_A_88_SC_Unid_Parc1_2',
						'name' => 'S2_A_88_SC_Unid_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',


					);
$S2_A_88_Prod_Ca_Parc1_2 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc1_2',
						'name' => 'S2_A_88_Prod_Ca_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',


					);
					
$S2_A_88_Prod_Unid_Parc1_2 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc1_2',
						'name' => 'S2_A_88_Prod_Unid_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',


					);
$S2_A_88_Desti_Parc1_2 = array(
						'id' => 'S2_A_88_Desti_Parc1_2',
						'name' => 'S2_A_88_Desti_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',


					);
					
$S2_A_88_PreChac_Parc1_2 = array(
						'id' => 'S2_A_88_PreChac_Parc1_2',
						'name' => 'S2_A_88_PreChac_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',


					);
$S2_A_88_PreCha_Uni_Parc1_2 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc1_2',
						'name' => 'S2_A_88_PreCha_Uni_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',


					);
					
$S2_A_88_PreComp_Parc1_2 = array(
						'id' => 'S2_A_88_PreComp_Parc1_2',
						'name' => 'S2_A_88_PreComp_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',


					);
$S2_A_88_PreCom_Uni_Parc1_2 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc1_2',
						'name' => 'S2_A_88_PreCom_Uni_Parc1_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',


					);
					
$S2_A_88_TipCulti_Parc1_3 = array(
						'id' => 'S2_A_88_TipCulti_Parc1_3',
						'name' => 'S2_A_88_TipCulti_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',

					);
$S2_A_88_SS_Cant_Parc1_3 = array(
						'id' => 'S2_A_88_SS_Cant_Parc1_3',
						'name' => 'S2_A_88_SS_Cant_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_SS_Unid_Parc1_3 = array(
						'id' => 'S2_A_88_SS_Unid_Parc1_3',
						'name' => 'S2_A_88_SS_Unid_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_SC_Cant_Parc1_3 = array(
						'id' => 'S2_A_88_SC_Cant_Parc1_3',
						'name' => 'S2_A_88_SC_Cant_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_SC_Unid_Parc1_3 = array(
						'id' => 'S2_A_88_SC_Unid_Parc1_3',
						'name' => 'S2_A_88_SC_Unid_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_Prod_Ca_Parc1_3 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc1_3',
						'name' => 'S2_A_88_Prod_Ca_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_Prod_Unid_Parc1_3 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc1_3',
						'name' => 'S2_A_88_Prod_Unid_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_Desti_Parc1_3 = array(
						'id' => 'S2_A_88_Desti_Parc1_3',
						'name' => 'S2_A_88_Desti_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);
					
$S2_A_88_PreChac_Parc1_3 = array(
						'id' => 'S2_A_88_PreChac_Parc1_3',
						'name' => 'S2_A_88_PreChac_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);
$S2_A_88_PreCha_Uni_Parc1_3 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc1_3',
						'name' => 'S2_A_88_PreCha_Uni_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_PreComp_Parc1_3 = array(
						'id' => 'S2_A_88_PreComp_Parc1_3',
						'name' => 'S2_A_88_PreComp_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);
$S2_A_88_PreCom_Uni_Parc1_3 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc1_3',
						'name' => 'S2_A_88_PreCom_Uni_Parc1_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_TipCulti_Parc1_4 = array(
						'id' => 'S2_A_88_TipCulti_Parc1_4',
						'name' => 'S2_A_88_TipCulti_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);
$S2_A_88_SS_Cant_Parc1_4 = array(
						'id' => 'S2_A_88_SS_Cant_Parc1_4',
						'name' => 'S2_A_88_SS_Cant_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_SS_Unid_Parc1_4 = array(
						'id' => 'S2_A_88_SS_Unid_Parc1_4',
						'name' => 'S2_A_88_SS_Unid_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_SC_Ca_Parc1_4 = array(
						'id' => 'S2_A_88_SC_Ca_Parc1_4',
						'name' => 'S2_A_88_SC_Ca_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_SC_Unid_Parc1_4 = array(
						'id' => 'S2_A_88_SC_Unid_Parc1_4',
						'name' => 'S2_A_88_SC_Unid_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_Prod_Ca_Parc1_4 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc1_4',
						'name' => 'S2_A_88_Prod_Ca_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
					
$S2_A_88_Prod_Unid_Parc1_4 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc1_4',
						'name' => 'S2_A_88_Prod_Unid_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc1_4 = array(
						'id' => 'S2_A_88_Desti_Parc1_4',
						'name' => 'S2_A_88_Desti_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc1_4 = array(
						'id' => 'S2_A_88_PreChac_Parc1_4',
						'name' => 'S2_A_88_PreChac_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc1_4 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc1_4',
						'name' => 'S2_A_88_PreCha_Uni_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc1_4 = array(
						'id' => 'S2_A_88_PreComp_Parc1_4',
						'name' => 'S2_A_88_PreComp_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc1_4 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc1_4',
						'name' => 'S2_A_88_PreCom_Uni_Parc1_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc2_1 = array(
						'id' => 'S2_A_88_TipCulti_Parc2_1',
						'name' => 'S2_A_88_TipCulti_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc2_1 = array(
						'id' => 'S2_A_88_SS_Cant_Parc2_1',
						'name' => 'S2_A_88_SS_Cant_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc2_1 = array(
						'id' => 'S2_A_88_SS_Unid_Parc2_1',
						'name' => 'S2_A_88_SS_Unid_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc2_1 = array(
						'id' => 'S2_A_88_SC_Cant_Parc2_1',
						'name' => 'S2_A_88_SC_Cant_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc2_1 = array(
						'id' => 'S2_A_88_SC_Unid_Parc2_1',
						'name' => 'S2_A_88_SC_Unid_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc2_1 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc2_1',
						'name' => 'S2_A_88_Prod_Ca_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc2_1 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc2_1',
						'name' => 'S2_A_88_Prod_Unid_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc2_1 = array(
						'id' => 'S2_A_88_Desti_Parc2_1',
						'name' => 'S2_A_88_Desti_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc2_1 = array(
						'id' => 'S2_A_88_PreChac_Parc2_1',
						'name' => 'S2_A_88_PreChac_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc2_1 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc2_1',
						'name' => 'S2_A_88_PreCha_Uni_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc2_1 = array(
						'id' => 'S2_A_88_PreComp_Parc2_1',
						'name' => 'S2_A_88_PreComp_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc2_1 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc2_1',
						'name' => 'S2_A_88_PreCom_Uni_Parc2_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc2_2 = array(
						'id' => 'S2_A_88_TipCulti_Parc2_2',
						'name' => 'S2_A_88_TipCulti_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc2_2 = array(
						'id' => 'S2_A_88_SS_Cant_Parc2_2',
						'name' => 'S2_A_88_SS_Cant_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc2_2 = array(
						'id' => 'S2_A_88_SS_Unid_Parc2_2',
						'name' => 'S2_A_88_SS_Unid_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc2_2 = array(
						'id' => 'S2_A_88_SC_Cant_Parc2_2',
						'name' => 'S2_A_88_SC_Cant_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc2_2 = array(
						'id' => 'S2_A_88_SC_Unid_Parc2_2',
						'name' => 'S2_A_88_SC_Unid_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc2_2 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc2_2',
						'name' => 'S2_A_88_Prod_Ca_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc2_2 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc2_2',
						'name' => 'S2_A_88_Prod_Unid_Parc2_2',
						'class' => 'form-control',
						'maxlength' => '6',
						'align' => 'center',
					);

$S2_A_88_Desti_Parc2_2 = array(
						'id' => 'S2_A_88_Desti_Parc2_2',
						'name' => 'S2_A_88_Desti_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc2_2 = array(
						'id' => 'S2_A_88_PreChac_Parc2_2',
						'name' => 'S2_A_88_PreChac_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc2_2 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc2_2',
						'name' => 'S2_A_88_PreCha_Uni_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc2_2 = array(
						'id' => 'S2_A_88_PreComp_Parc2_2',
						'name' => 'S2_A_88_PreComp_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc2_2 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc2_2',
						'name' => 'S2_A_88_PreCom_Uni_Parc2_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc2_3 = array(
						'id' => 'S2_A_88_TipCulti_Parc2_3',
						'name' => 'S2_A_88_TipCulti_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc2_3 = array(
						'id' => 'S2_A_88_SS_Cant_Parc2_3',
						'name' => 'S2_A_88_SS_Cant_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc2_3 = array(
						'id' => 'S2_A_88_SS_Unid_Parc2_3',
						'name' => 'S2_A_88_SS_Unid_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc2_3 = array(
						'id' => 'S2_A_88_SC_Cant_Parc2_3',
						'name' => 'S2_A_88_SC_Cant_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc2_3 = array(
						'id' => 'S2_A_88_SC_Unid_Parc2_3',
						'name' => 'S2_A_88_SC_Unid_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc2_3 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc2_3',
						'name' => 'S2_A_88_Prod_Ca_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc2_3 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc2_3',
						'name' => 'S2_A_88_Prod_Unid_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc2_3 = array(
						'id' => 'S2_A_88_Desti_Parc2_3',
						'name' => 'S2_A_88_Desti_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc2_3 = array(
						'id' => 'S2_A_88_PreChac_Parc2_3',
						'name' => 'S2_A_88_PreChac_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc2_3 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc2_3',
						'name' => 'S2_A_88_PreCha_Uni_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc2_3 = array(
						'id' => 'S2_A_88_PreComp_Parc2_3',
						'name' => 'S2_A_88_PreComp_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc2_3 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc2_3',
						'name' => 'S2_A_88_PreCom_Uni_Parc2_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc2_4 = array(
						'id' => 'S2_A_88_TipCulti_Parc2_4',
						'name' => 'S2_A_88_TipCulti_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc2_4 = array(
						'id' => 'S2_A_88_SS_Cant_Parc2_4',
						'name' => 'S2_A_88_SS_Cant_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc2_4 = array(
						'id' => 'S2_A_88_SS_Unid_Parc2_4',
						'name' => 'S2_A_88_SS_Unid_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Ca_Parc2_4 = array(
						'id' => 'S2_A_88_SC_Ca_Parc2_4',
						'name' => 'S2_A_88_SC_Ca_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc2_4 = array(
						'id' => 'S2_A_88_SC_Unid_Parc2_4',
						'name' => 'S2_A_88_SC_Unid_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc2_4 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc2_4',
						'name' => 'S2_A_88_Prod_Ca_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc2_4 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc2_4',
						'name' => 'S2_A_88_Prod_Unid_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc2_4 = array(
						'id' => 'S2_A_88_Desti_Parc2_4',
						'name' => 'S2_A_88_Desti_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc2_4 = array(
						'id' => 'S2_A_88_PreChac_Parc2_4',
						'name' => 'S2_A_88_PreChac_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc2_4 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc2_4',
						'name' => 'S2_A_88_PreCha_Uni_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc2_4 = array(
						'id' => 'S2_A_88_PreComp_Parc2_4',
						'name' => 'S2_A_88_PreComp_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc2_4 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc2_4',
						'name' => 'S2_A_88_PreCom_Uni_Parc2_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);


$S2_A_88_TipCulti_Parc3_1 = array(
						'id' => 'S2_A_88_TipCulti_Parc3_1',
						'name' => 'S2_A_88_TipCulti_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc3_1 = array(
						'id' => 'S2_A_88_SS_Cant_Parc3_1',
						'name' => 'S2_A_88_SS_Cant_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc3_1 = array(
						'id' => 'S2_A_88_SS_Unid_Parc3_1',
						'name' => 'S2_A_88_SS_Unid_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc3_1 = array(
						'id' => 'S2_A_88_SC_Cant_Parc3_1',
						'name' => 'S2_A_88_SC_Cant_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc3_1 = array(
						'id' => 'S2_A_88_SC_Unid_Parc3_1',
						'name' => 'S2_A_88_SC_Unid_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc3_1 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc3_1',
						'name' => 'S2_A_88_Prod_Ca_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc3_1 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc3_1',
						'name' => 'S2_A_88_Prod_Unid_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc3_1 = array(
						'id' => 'S2_A_88_Desti_Parc3_1',
						'name' => 'S2_A_88_Desti_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc3_1 = array(
						'id' => 'S2_A_88_PreChac_Parc3_1',
						'name' => 'S2_A_88_PreChac_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc3_1 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc3_1',
						'name' => 'S2_A_88_PreCha_Uni_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc3_1 = array(
						'id' => 'S2_A_88_PreComp_Parc3_1',
						'name' => 'S2_A_88_PreComp_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc3_1 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc3_1',
						'name' => 'S2_A_88_PreCom_Uni_Parc3_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc3_2 = array(
						'id' => 'S2_A_88_TipCulti_Parc3_2',
						'name' => 'S2_A_88_TipCulti_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc3_2 = array(
						'id' => 'S2_A_88_SS_Cant_Parc3_2',
						'name' => 'S2_A_88_SS_Cant_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc3_2 = array(
						'id' => 'S2_A_88_SS_Unid_Parc3_2',
						'name' => 'S2_A_88_SS_Unid_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc3_2 = array(
						'id' => 'S2_A_88_SC_Cant_Parc3_2',
						'name' => 'S2_A_88_SC_Cant_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc3_2 = array(
						'id' => 'S2_A_88_SC_Unid_Parc3_2',
						'name' => 'S2_A_88_SC_Unid_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);


$S2_A_88_Prod_Ca_Parc3_2 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc3_2',
						'name' => 'S2_A_88_Prod_Ca_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc3_2 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc3_2',
						'name' => 'S2_A_88_Prod_Unid_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc3_2 = array(
						'id' => 'S2_A_88_Desti_Parc3_2',
						'name' => 'S2_A_88_Desti_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);
$S2_A_88_PreChac_Parc3_2 = array(
						'id' => 'S2_A_88_PreChac_Parc3_2',
						'name' => 'S2_A_88_PreChac_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);
$S2_A_88_PreCha_Uni_Parc3_2 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc3_2',
						'name' => 'S2_A_88_PreCha_Uni_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_PreComp_Parc3_2 = array(
						'id' => 'S2_A_88_PreComp_Parc3_2',
						'name' => 'S2_A_88_PreComp_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);


$S2_A_88_PreCom_Uni_Parc3_2 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc3_2',
						'name' => 'S2_A_88_PreCom_Uni_Parc3_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc3_3 = array(
						'id' => 'S2_A_88_TipCulti_Parc3_3',
						'name' => 'S2_A_88_TipCulti_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc3_3 = array(
						'id' => 'S2_A_88_SS_Cant_Parc3_3',
						'name' => 'S2_A_88_SS_Cant_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc3_3 = array(
						'id' => 'S2_A_88_SS_Unid_Parc3_3',
						'name' => 'S2_A_88_SS_Unid_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc3_3 = array(
						'id' => 'S2_A_88_SC_Cant_Parc3_3',
						'name' => 'S2_A_88_SC_Cant_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc3_3 = array(
						'id' => 'S2_A_88_SC_Unid_Parc3_3',
						'name' => 'S2_A_88_SC_Unid_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc3_3 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc3_3',
						'name' => 'S2_A_88_Prod_Ca_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc3_3 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc3_3',
						'name' => 'S2_A_88_Prod_Unid_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc3_3 = array(
						'id' => 'S2_A_88_Desti_Parc3_3',
						'name' => 'S2_A_88_Desti_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc3_3 = array(
						'id' => 'S2_A_88_PreChac_Parc3_3',
						'name' => 'S2_A_88_PreChac_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc3_3 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc3_3',
						'name' => 'S2_A_88_PreCha_Uni_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc3_3 = array(
						'id' => 'S2_A_88_PreComp_Parc3_3',
						'name' => 'S2_A_88_PreComp_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc3_3 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc3_3',
						'name' => 'S2_A_88_PreCom_Uni_Parc3_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc3_4 = array(
						'id' => 'S2_A_88_TipCulti_Parc3_4',
						'name' => 'S2_A_88_TipCulti_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc3_4 = array(
						'id' => 'S2_A_88_SS_Cant_Parc3_4',
						'name' => 'S2_A_88_SS_Cant_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc3_4 = array(
						'id' => 'S2_A_88_SS_Unid_Parc3_4',
						'name' => 'S2_A_88_SS_Unid_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Ca_Parc3_4 = array(
						'id' => 'S2_A_88_SC_Ca_Parc3_4',
						'name' => 'S2_A_88_SC_Ca_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc3_4 = array(
						'id' => 'S2_A_88_SC_Unid_Parc3_4',
						'name' => 'S2_A_88_SC_Unid_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc3_4 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc3_4',
						'name' => 'S2_A_88_Prod_Ca_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc3_4 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc3_4',
						'name' => 'S2_A_88_Prod_Unid_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc3_4 = array(
						'id' => 'S2_A_88_Desti_Parc3_4',
						'name' => 'S2_A_88_Desti_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc3_4 = array(
						'id' => 'S2_A_88_PreChac_Parc3_4',
						'name' => 'S2_A_88_PreChac_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc3_4 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc3_4',
						'name' => 'S2_A_88_PreCha_Uni_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc3_4 = array(
						'id' => 'S2_A_88_PreComp_Parc3_4',
						'name' => 'S2_A_88_PreComp_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc3_4 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc3_4',
						'name' => 'S2_A_88_PreCom_Uni_Parc3_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc4_1 = array(
						'id' => 'S2_A_88_TipCulti_Parc4_1',
						'name' => 'S2_A_88_TipCulti_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc4_1 = array(
						'id' => 'S2_A_88_SS_Cant_Parc4_1',
						'name' => 'S2_A_88_SS_Cant_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc4_1 = array(
						'id' => 'S2_A_88_SS_Unid_Parc4_1',
						'name' => 'S2_A_88_SS_Unid_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc4_1 = array(
						'id' => 'S2_A_88_SC_Cant_Parc4_1',
						'name' => 'S2_A_88_SC_Cant_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc4_1 = array(
						'id' => 'S2_A_88_SC_Unid_Parc4_1',
						'name' => 'S2_A_88_SC_Unid_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc4_1 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc4_1',
						'name' => 'S2_A_88_Prod_Ca_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc4_1 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc4_1',
						'name' => 'S2_A_88_Prod_Unid_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc4_1 = array(
						'id' => 'S2_A_88_Desti_Parc4_1',
						'name' => 'S2_A_88_Desti_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc4_1 = array(
						'id' => 'S2_A_88_PreChac_Parc4_1',
						'name' => 'S2_A_88_PreChac_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc4_1 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc4_1',
						'name' => 'S2_A_88_PreCha_Uni_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc4_1 = array(
						'id' => 'S2_A_88_PreComp_Parc4_1',
						'name' => 'S2_A_88_PreComp_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc4_1 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc4_1',
						'name' => 'S2_A_88_PreCom_Uni_Parc4_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc4_2 = array(
						'id' => 'S2_A_88_TipCulti_Parc4_2',
						'name' => 'S2_A_88_TipCulti_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc4_2 = array(
						'id' => 'S2_A_88_SS_Cant_Parc4_2',
						'name' => 'S2_A_88_SS_Cant_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);


$S2_A_88_SS_Unid_Parc4_2 = array(
						'id' => 'S2_A_88_SS_Unid_Parc4_2',
						'name' => 'S2_A_88_SS_Unid_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc4_2 = array(
						'id' => 'S2_A_88_SC_Cant_Parc4_2',
						'name' => 'S2_A_88_SC_Cant_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc4_2 = array(
						'id' => 'S2_A_88_SC_Unid_Parc4_2',
						'name' => 'S2_A_88_SC_Unid_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc4_2 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc4_2',
						'name' => 'S2_A_88_Prod_Ca_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc4_2 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc4_2',
						'name' => 'S2_A_88_Prod_Unid_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc4_2 = array(
						'id' => 'S2_A_88_Desti_Parc4_2',
						'name' => 'S2_A_88_Desti_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc4_2 = array(
						'id' => 'S2_A_88_PreChac_Parc4_2',
						'name' => 'S2_A_88_PreChac_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc4_2 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc4_2',
						'name' => 'S2_A_88_PreCha_Uni_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc4_2 = array(
						'id' => 'S2_A_88_PreComp_Parc4_2',
						'name' => 'S2_A_88_PreComp_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc4_2 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc4_2',
						'name' => 'S2_A_88_PreCom_Uni_Parc4_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc4_3 = array(
						'id' => 'S2_A_88_TipCulti_Parc4_3',
						'name' => 'S2_A_88_TipCulti_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);
$S2_A_88_SS_Cant_Parc4_3 = array(
						'id' => 'S2_A_88_SS_Cant_Parc4_3',
						'name' => 'S2_A_88_SS_Cant_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc4_3 = array(
						'id' => 'S2_A_88_SS_Unid_Parc4_3',
						'name' => 'S2_A_88_SS_Unid_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc4_3 = array(
						'id' => 'S2_A_88_SC_Cant_Parc4_3',
						'name' => 'S2_A_88_SC_Cant_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc4_3 = array(
						'id' => 'S2_A_88_SC_Unid_Parc4_3',
						'name' => 'S2_A_88_SC_Unid_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc4_3 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc4_3',
						'name' => 'S2_A_88_Prod_Ca_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc4_3 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc4_3',
						'name' => 'S2_A_88_Prod_Unid_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc4_3 = array(
						'id' => 'S2_A_88_Desti_Parc4_3',
						'name' => 'S2_A_88_Desti_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc4_3 = array(
						'id' => 'S2_A_88_PreChac_Parc4_3',
						'name' => 'S2_A_88_PreChac_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc4_3 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc4_3',
						'name' => 'S2_A_88_PreCha_Uni_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc4_3 = array(
						'id' => 'S2_A_88_PreComp_Parc4_3',
						'name' => 'S2_A_88_PreComp_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc4_3 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc4_3',
						'name' => 'S2_A_88_PreCom_Uni_Parc4_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc4_4 = array(
						'id' => 'S2_A_88_TipCulti_Parc4_4',
						'name' => 'S2_A_88_TipCulti_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',

					);

$S2_A_88_SS_Cant_Parc4_4 = array(
						'id' => 'S2_A_88_SS_Cant_Parc4_4',
						'name' => 'S2_A_88_SS_Cant_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',

					);

$S2_A_88_SS_Unid_Parc4_4 = array(
						'id' => 'S2_A_88_SS_Unid_Parc4_4',
						'name' => 'S2_A_88_SS_Unid_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',

					);

$S2_A_88_SC_Ca_Parc4_4 = array(
						'id' => 'S2_A_88_SC_Ca_Parc4_4',
						'name' => 'S2_A_88_SC_Ca_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',

					);

$S2_A_88_SC_Unid_Parc4_4 = array(
						'id' => 'S2_A_88_SC_Unid_Parc4_4',
						'name' => 'S2_A_88_SC_Unid_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',

					);

$S2_A_88_Prod_Ca_Parc4_4 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc4_4',
						'name' => 'S2_A_88_Prod_Ca_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',

					);

$S2_A_88_Prod_Unid_Parc4_4 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc4_4',
						'name' => 'S2_A_88_Prod_Unid_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',

					);
$S2_A_88_Desti_Parc4_4 = array(
						'id' => 'S2_A_88_Desti_Parc4_4',
						'name' => 'S2_A_88_Desti_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',

					);

$S2_A_88_PreChac_Parc4_4 = array(
						'id' => 'S2_A_88_PreChac_Parc4_4',
						'name' => 'S2_A_88_PreChac_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',

					);

$S2_A_88_PreCha_Uni_Parc4_4 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc4_4',
						'name' => 'S2_A_88_PreCha_Uni_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',

					);

$S2_A_88_PreComp_Parc4_4 = array(
						'id' => 'S2_A_88_PreComp_Parc4_4',
						'name' => 'S2_A_88_PreComp_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',

					);

$S2_A_88_PreCom_Uni_Parc4_4 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc4_4',
						'name' => 'S2_A_88_PreCom_Uni_Parc4_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',

					);

$S2_A_88_TipCulti_Parc5_1 = array(
						'id' => 'S2_A_88_TipCulti_Parc5_1',
						'name' => 'S2_A_88_TipCulti_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',

					);

$S2_A_88_SS_Cant_Parc5_1 = array(
						'id' => 'S2_A_88_SS_Cant_Parc5_1',
						'name' => 'S2_A_88_SS_Cant_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',

					);


$S2_A_88_SS_Unid_Parc5_1 = array(
						'id' => 'S2_A_88_SS_Unid_Parc5_1',
						'name' => 'S2_A_88_SS_Unid_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc5_1 = array(
						'id' => 'S2_A_88_SC_Cant_Parc5_1',
						'name' => 'S2_A_88_SC_Cant_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc5_1 = array(
						'id' => 'S2_A_88_SC_Unid_Parc5_1',
						'name' => 'S2_A_88_SC_Unid_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc5_1 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc5_1',
						'name' => 'S2_A_88_Prod_Ca_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc5_1 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc5_1',
						'name' => 'S2_A_88_Prod_Unid_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc5_1 = array(
						'id' => 'S2_A_88_Desti_Parc5_1',
						'name' => 'S2_A_88_Desti_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc5_1 = array(
						'id' => 'S2_A_88_PreChac_Parc5_1',
						'name' => 'S2_A_88_PreChac_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc5_1 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc5_1',
						'name' => 'S2_A_88_PreCha_Uni_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc5_1 = array(
						'id' => 'S2_A_88_PreComp_Parc5_1',
						'name' => 'S2_A_88_PreComp_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc5_1 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc5_1',
						'name' => 'S2_A_88_PreCom_Uni_Parc5_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc5_2 = array(
						'id' => 'S2_A_88_TipCulti_Parc5_2',
						'name' => 'S2_A_88_TipCulti_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);
$S2_A_88_SS_Cant_Parc5_2 = array(
						'id' => 'S2_A_88_SS_Cant_Parc5_2',
						'name' => 'S2_A_88_SS_Cant_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc5_2 = array(
						'id' => 'S2_A_88_SS_Unid_Parc5_2',
						'name' => 'S2_A_88_SS_Unid_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc5_2 = array(
						'id' => 'S2_A_88_SC_Cant_Parc5_2',
						'name' => 'S2_A_88_SC_Cant_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc5_2 = array(
						'id' => 'S2_A_88_SC_Unid_Parc5_2',
						'name' => 'S2_A_88_SC_Unid_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc5_2 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc5_2',
						'name' => 'S2_A_88_Prod_Ca_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc5_2 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc5_2',
						'name' => 'S2_A_88_Prod_Unid_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc5_2 = array(
						'id' => 'S2_A_88_Desti_Parc5_2',
						'name' => 'S2_A_88_Desti_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc5_2 = array(
						'id' => 'S2_A_88_PreChac_Parc5_2',
						'name' => 'S2_A_88_PreChac_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc5_2 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc5_2',
						'name' => 'S2_A_88_PreCha_Uni_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc5_2 = array(
						'id' => 'S2_A_88_PreComp_Parc5_2',
						'name' => 'S2_A_88_PreComp_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc5_2 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc5_2',
						'name' => 'S2_A_88_PreCom_Uni_Parc5_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc5_3 = array(
						'id' => 'S2_A_88_TipCulti_Parc5_3',
						'name' => 'S2_A_88_TipCulti_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc5_3 = array(
						'id' => 'S2_A_88_SS_Cant_Parc5_3',
						'name' => 'S2_A_88_SS_Cant_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc5_3 = array(
						'id' => 'S2_A_88_SS_Unid_Parc5_3',
						'name' => 'S2_A_88_SS_Unid_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc5_3 = array(
						'id' => 'S2_A_88_SC_Cant_Parc5_3',
						'name' => 'S2_A_88_SC_Cant_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc5_3 = array(
						'id' => 'S2_A_88_SC_Unid_Parc5_3',
						'name' => 'S2_A_88_SC_Unid_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc5_3 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc5_3',
						'name' => 'S2_A_88_Prod_Ca_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc5_3 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc5_3',
						'name' => 'S2_A_88_Prod_Unid_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_Desti_Parc5_3 = array(
						'id' => 'S2_A_88_Desti_Parc5_3',
						'name' => 'S2_A_88_Desti_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc5_3 = array(
						'id' => 'S2_A_88_PreChac_Parc5_3',
						'name' => 'S2_A_88_PreChac_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc5_3 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc5_3',
						'name' => 'S2_A_88_PreCha_Uni_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc5_3 = array(
						'id' => 'S2_A_88_PreComp_Parc5_3',
						'name' => 'S2_A_88_PreComp_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc5_3 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc5_3',
						'name' => 'S2_A_88_PreCom_Uni_Parc5_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc5_4 = array(
						'id' => 'S2_A_88_TipCulti_Parc5_4',
						'name' => 'S2_A_88_TipCulti_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc5_4 = array(
						'id' => 'S2_A_88_SS_Cant_Parc5_4',
						'name' => 'S2_A_88_SS_Cant_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc5_4 = array(
						'id' => 'S2_A_88_SS_Unid_Parc5_4',
						'name' => 'S2_A_88_SS_Unid_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Ca_Parc5_4 = array(
						'id' => 'S2_A_88_SC_Ca_Parc5_4',
						'name' => 'S2_A_88_SC_Ca_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc5_4 = array(
						'id' => 'S2_A_88_SC_Unid_Parc5_4',
						'name' => 'S2_A_88_SC_Unid_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc5_4 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc5_4',
						'name' => 'S2_A_88_Prod_Ca_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc5_4 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc5_4',
						'name' => 'S2_A_88_Prod_Unid_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc5_4 = array(
						'id' => 'S2_A_88_Desti_Parc5_4',
						'name' => 'S2_A_88_Desti_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc5_4 = array(
						'id' => 'S2_A_88_PreChac_Parc5_4',
						'name' => 'S2_A_88_PreChac_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc5_4 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc5_4',
						'name' => 'S2_A_88_PreCha_Uni_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc5_4 = array(
						'id' => 'S2_A_88_PreComp_Parc5_4',
						'name' => 'S2_A_88_PreComp_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc5_4 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc5_4',
						'name' => 'S2_A_88_PreCom_Uni_Parc5_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc6_1 = array(
						'id' => 'S2_A_88_TipCulti_Parc6_1',
						'name' => 'S2_A_88_TipCulti_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);
$S2_A_88_SS_Cant_Parc6_1 = array(
						'id' => 'S2_A_88_SS_Cant_Parc6_1',
						'name' => 'S2_A_88_SS_Cant_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc6_1 = array(
						'id' => 'S2_A_88_SS_Unid_Parc6_1',
						'name' => 'S2_A_88_SS_Unid_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc6_1 = array(
						'id' => 'S2_A_88_SC_Cant_Parc6_1',
						'name' => 'S2_A_88_SC_Cant_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc6_1 = array(
						'id' => 'S2_A_88_SC_Unid_Parc6_1',
						'name' => 'S2_A_88_SC_Unid_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc6_1 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc6_1',
						'name' => 'S2_A_88_Prod_Ca_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc6_1 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc6_1',
						'name' => 'S2_A_88_Prod_Unid_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc6_1 = array(
						'id' => 'S2_A_88_Desti_Parc6_1',
						'name' => 'S2_A_88_Desti_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc6_1 = array(
						'id' => 'S2_A_88_PreChac_Parc6_1',
						'name' => 'S2_A_88_PreChac_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc6_1 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc6_1',
						'name' => 'S2_A_88_PreCha_Uni_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc6_1 = array(
						'id' => 'S2_A_88_PreComp_Parc6_1',
						'name' => 'S2_A_88_PreComp_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc6_1 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc6_1',
						'name' => 'S2_A_88_PreCom_Uni_Parc6_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc6_2 = array(
						'id' => 'S2_A_88_TipCulti_Parc6_2',
						'name' => 'S2_A_88_TipCulti_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc6_2 = array(
						'id' => 'S2_A_88_SS_Cant_Parc6_2',
						'name' => 'S2_A_88_SS_Cant_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc6_2 = array(
						'id' => 'S2_A_88_SS_Unid_Parc6_2',
						'name' => 'S2_A_88_SS_Unid_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc6_2 = array(
						'id' => 'S2_A_88_SC_Cant_Parc6_2',
						'name' => 'S2_A_88_SC_Cant_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc6_2 = array(
						'id' => 'S2_A_88_SC_Unid_Parc6_2',
						'name' => 'S2_A_88_SC_Unid_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc6_2 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc6_2',
						'name' => 'S2_A_88_Prod_Ca_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc6_2 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc6_2',
						'name' => 'S2_A_88_Prod_Unid_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);
$S2_A_88_Desti_Parc6_2 = array(
						'id' => 'S2_A_88_Desti_Parc6_2',
						'name' => 'S2_A_88_Desti_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc6_2 = array(
						'id' => 'S2_A_88_PreChac_Parc6_2',
						'name' => 'S2_A_88_PreChac_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc6_2 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc6_2',
						'name' => 'S2_A_88_PreCha_Uni_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc6_2 = array(
						'id' => 'S2_A_88_PreComp_Parc6_2',
						'name' => 'S2_A_88_PreComp_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc6_2 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc6_2',
						'name' => 'S2_A_88_PreCom_Uni_Parc6_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc6_3 = array(
						'id' => 'S2_A_88_TipCulti_Parc6_3',
						'name' => 'S2_A_88_TipCulti_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);

$S2_A_88_SS_Cant_Parc6_3 = array(
						'id' => 'S2_A_88_SS_Cant_Parc6_3',
						'name' => 'S2_A_88_SS_Cant_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc6_3 = array(
						'id' => 'S2_A_88_SS_Unid_Parc6_3',
						'name' => 'S2_A_88_SS_Unid_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Cant_Parc6_3 = array(
						'id' => 'S2_A_88_SC_Cant_Parc6_3',
						'name' => 'S2_A_88_SC_Cant_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc6_3 = array(
						'id' => 'S2_A_88_SC_Unid_Parc6_3',
						'name' => 'S2_A_88_SC_Unid_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc6_3 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc6_3',
						'name' => 'S2_A_88_Prod_Ca_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc6_3 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc6_3',
						'name' => 'S2_A_88_Prod_Unid_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc6_3 = array(
						'id' => 'S2_A_88_Desti_Parc6_3',
						'name' => 'S2_A_88_Desti_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc6_3 = array(
						'id' => 'S2_A_88_PreChac_Parc6_3',
						'name' => 'S2_A_88_PreChac_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc6_3 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc6_3',
						'name' => 'S2_A_88_PreCha_Uni_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc6_3 = array(
						'id' => 'S2_A_88_PreComp_Parc6_3',
						'name' => 'S2_A_88_PreComp_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc6_3 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc6_3',
						'name' => 'S2_A_88_PreCom_Uni_Parc6_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_TipCulti_Parc6_4 = array(
						'id' => 'S2_A_88_TipCulti_Parc6_4',
						'name' => 'S2_A_88_TipCulti_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '20',
					);
$S2_A_88_SS_Cant_Parc6_4 = array(
						'id' => 'S2_A_88_SS_Cant_Parc6_4',
						'name' => 'S2_A_88_SS_Cant_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SS_Unid_Parc6_4 = array(
						'id' => 'S2_A_88_SS_Unid_Parc6_4',
						'name' => 'S2_A_88_SS_Unid_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Ca_Parc6_4 = array(
						'id' => 'S2_A_88_SC_Ca_Parc6_4',
						'name' => 'S2_A_88_SC_Ca_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_SC_Unid_Parc6_4 = array(
						'id' => 'S2_A_88_SC_Unid_Parc6_4',
						'name' => 'S2_A_88_SC_Unid_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Ca_Parc6_4 = array(
						'id' => 'S2_A_88_Prod_Ca_Parc6_4',
						'name' => 'S2_A_88_Prod_Ca_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Prod_Unid_Parc6_4 = array(
						'id' => 'S2_A_88_Prod_Unid_Parc6_4',
						'name' => 'S2_A_88_Prod_Unid_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_Desti_Parc6_4 = array(
						'id' => 'S2_A_88_Desti_Parc6_4',
						'name' => 'S2_A_88_Desti_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_88_PreChac_Parc6_4 = array(
						'id' => 'S2_A_88_PreChac_Parc6_4',
						'name' => 'S2_A_88_PreChac_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCha_Uni_Parc6_4 = array(
						'id' => 'S2_A_88_PreCha_Uni_Parc6_4',
						'name' => 'S2_A_88_PreCha_Uni_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

$S2_A_88_PreComp_Parc6_4 = array(
						'id' => 'S2_A_88_PreComp_Parc6_4',
						'name' => 'S2_A_88_PreComp_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '10',
					);

$S2_A_88_PreCom_Uni_Parc6_4 = array(
						'id' => 'S2_A_88_PreCom_Uni_Parc6_4',
						'name' => 'S2_A_88_PreCom_Uni_Parc6_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '6',
					);

// FIN DE PARCELAS

$S2_A_89 = array(
						'id' => 'S2_A_89',
						'name' => 'S2_A_89',
						'class' => 'form-control setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,4,1)',

					);

$S2_A_89_O = array(
						'id' => 'S2_A_89_O',
						'name' => 'S2_A_89_O',
						'class' => 'form-control spec',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especificar',
						'disabled' => 'disabled',
					);

$S2_A_90 = array(
						'id' => 'S2_A_90',
						'name' => 'S2_A_90',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_91 = array(
						'id' => 'S2_A_91',
						'name' => 'S2_A_91',
						'class' => 'form-control setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_91A = array(
						'id' => 'S2_A_91A',
						'name' => 'S2_A_91A',
						'class' => 'form-control spec',
						'align' => 'center',
						'maxlength' => '1',
						'disabled' => 'disabled',

					);

$S2_A_92_1 = array(
						'id' => 'S2_A_92_1',
						'name' => 'S2_A_92_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_92_2 = array(
						'id' => 'S2_A_92_2',
						'name' => 'S2_A_92_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);
$S2_A_92_3 = array(
						'id' => 'S2_A_92_3',
						'name' => 'S2_A_92_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_92_4 = array(
						'id' => 'S2_A_92_4',
						'name' => 'S2_A_92_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_92_5 = array(
						'id' => 'S2_A_92_5',
						'name' => 'S2_A_92_5',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_92_5_O = array(
						'id' => 'S2_A_92_5_O',
						'name' => 'S2_A_92_5_O',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);

$S2_A_93 = array(
						'id' => 'S2_A_93',
						'name' => 'S2_A_93',
						'class' => 'form-control setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,5,1)',
					);

$S2_A_93_O = array(
						'id' => 'S2_A_93_O',
						'name' => 'S2_A_93_O',
						'class' => 'form-control spec',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);

$S2_A_94 = array(
						'id' => 'S2_A_94',
						'name' => 'S2_A_94',
						'class' => 'form-control setFlujo',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setFlujo(this,2,9)',
					);

$S2_A_95_1 = array(
						'id' => 'S2_A_95_1',
						'name' => 'S2_A_95_1',
						'class' => 'form-control setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_95_2 = array(
						'id' => 'S2_A_95_2',
						'name' => 'S2_A_95_2',
						'class' => 'form-control setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_95_3 = array(
						'id' => 'S2_A_95_3',
						'name' => 'S2_A_95_3',
						'class' => 'form-control setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_95_4 = array(
						'id' => 'S2_A_95_4',
						'name' => 'S2_A_95_4',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,2)',
					);

$S2_A_95_4_O = array(
						'id' => 'S2_A_95_4_O',
						'name' => 'S2_A_95_4_O',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);

$S2_A_95A_1 = array(
						'id' => 'S2_A_95A_1',
						'name' => 'S2_A_95A_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '100',
						'disabled' => 'disabled',
					);

$S2_A_95A_2 = array(
						'id' => 'S2_A_95A_2',
						'name' => 'S2_A_95A_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '100',
						'disabled' => 'disabled',
					);

$S2_A_95A_3 = array(
						'id' => 'S2_A_95A_3',
						'name' => 'S2_A_95A_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '100',
						'disabled' => 'disabled',
					);

$S2_A_95A_4 = array(
						'id' => 'S2_A_95A_4',
						'name' => 'S2_A_95A_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '100',
						'disabled' => 'disabled',
					);

$S2_A_96_1 = array(
						'id' => 'S2_A_96_1',
						'name' => 'S2_A_96_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_96_2 = array(
						'id' => 'S2_A_96_2',
						'name' => 'S2_A_96_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);
$S2_A_96_3 = array(
						'id' => 'S2_A_96_3',
						'name' => 'S2_A_96_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_96_4 = array(
						'id' => 'S2_A_96_4',
						'name' => 'S2_A_96_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '1',
					);

$S2_A_96_5 = array(
						'id' => 'S2_A_96_5',
						'name' => 'S2_A_96_5',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '1',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_96_5_O = array(
						'id' => 'S2_A_96_5_O',
						'name' => 'S2_A_96_5_O',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '50',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);

$S2_A_97_TipoCult_1 = array(
						'id' => 'S2_A_97_TipoCult_1',
						'name' => 'S2_A_97_TipoCult_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '50',
					);


$S2_A_97_ManOb_1 = array(
						'id' => 'S2_A_97_ManOb_1',
						'name' => 'S2_A_97_ManOb_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Alqui_1 = array(
						'id' => 'S2_A_97_Alqui_1',
						'name' => 'S2_A_97_Alqui_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Semill_1 = array(
						'id' => 'S2_A_97_Semill_1',
						'name' => 'S2_A_97_Semill_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Envase_1 = array(
						'id' => 'S2_A_97_Envase_1',
						'name' => 'S2_A_97_Envase_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Transp_1 = array(
						'id' => 'S2_A_97_Transp_1',
						'name' => 'S2_A_97_Transp_1',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Otro_1 = array(
						'id' => 'S2_A_97_Otro_1',
						'name' => 'S2_A_97_Otro_1',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '50',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_97_Otro_Esp_1 = array(
						'id' => 'S2_A_97_Otro_Esp_1',
						'name' => 'S2_A_97_Otro_Esp_1',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '8',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);

$S2_A_97_TipoCult_2 = array(
						'id' => 'S2_A_97_TipoCult_2',
						'name' => 'S2_A_97_TipoCult_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '50',
					);

$S2_A_97_ManOb_2 = array(
						'id' => 'S2_A_97_ManOb_2',
						'name' => 'S2_A_97_ManOb_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Alqui_2 = array(
						'id' => 'S2_A_97_Alqui_2',
						'name' => 'S2_A_97_Alqui_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Semill_2 = array(
						'id' => 'S2_A_97_Semill_2',
						'name' => 'S2_A_97_Semill_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Envase_2 = array(
						'id' => 'S2_A_97_Envase_2',
						'name' => 'S2_A_97_Envase_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Transp_2 = array(
						'id' => 'S2_A_97_Transp_2',
						'name' => 'S2_A_97_Transp_2',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);
$S2_A_97_Otro_2 = array(
						'id' => 'S2_A_97_Otro_2',
						'name' => 'S2_A_97_Otro_2',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '50',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_97_Otro_Esp_2 = array(
						'id' => 'S2_A_97_Otro_Esp_2',
						'name' => 'S2_A_97_Otro_Esp_2',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '8',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);

$S2_A_97_TipoCult_3 = array(
						'id' => 'S2_A_97_TipoCult_3',
						'name' => 'S2_A_97_TipoCult_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '50',
					);

$S2_A_97_ManOb_3 = array(
						'id' => 'S2_A_97_ManOb_3',
						'name' => 'S2_A_97_ManOb_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Alqui_3 = array(
						'id' => 'S2_A_97_Alqui_3',
						'name' => 'S2_A_97_Alqui_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Semill_3 = array(
						'id' => 'S2_A_97_Semill_3',
						'name' => 'S2_A_97_Semill_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Envase_3 = array(
						'id' => 'S2_A_97_Envase_3',
						'name' => 'S2_A_97_Envase_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Transp_3 = array(
						'id' => 'S2_A_97_Transp_3',
						'name' => 'S2_A_97_Transp_3',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Otro_3 = array(
						'id' => 'S2_A_97_Otro_3',
						'name' => 'S2_A_97_Otro_3',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '50',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_97_Otro_Esp_3 = array(
						'id' => 'S2_A_97_Otro_Esp_3',
						'name' => 'S2_A_97_Otro_Esp_3',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '8',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);

$S2_A_97_TipoCult_4 = array(
						'id' => 'S2_A_97_TipoCult_4',
						'name' => 'S2_A_97_TipoCult_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '50',
					);

$S2_A_97_ManOb_4 = array(
						'id' => 'S2_A_97_ManOb_4',
						'name' => 'S2_A_97_ManOb_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Alqui_4 = array(
						'id' => 'S2_A_97_Alqui_4',
						'name' => 'S2_A_97_Alqui_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Semill_4 = array(
						'id' => 'S2_A_97_Semill_4',
						'name' => 'S2_A_97_Semill_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Envase_4 = array(
						'id' => 'S2_A_97_Envase_4',
						'name' => 'S2_A_97_Envase_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Transp_4 = array(
						'id' => 'S2_A_97_Transp_4',
						'name' => 'S2_A_97_Transp_4',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Otro_4 = array(
						'id' => 'S2_A_97_Otro_4',
						'name' => 'S2_A_97_Otro_4',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '50',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_97_Otro_Esp_4 = array(
						'id' => 'S2_A_97_Otro_Esp_4',
						'name' => 'S2_A_97_Otro_Esp_4',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '8',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);
$S2_A_97_TipoCult_5 = array(
						'id' => 'S2_A_97_TipoCult_5',
						'name' => 'S2_A_97_TipoCult_5',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '50',
					);

$S2_A_97_ManOb_5 = array(
						'id' => 'S2_A_97_ManOb_5',
						'name' => 'S2_A_97_ManOb_5',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Alqui_5 = array(
						'id' => 'S2_A_97_Alqui_5',
						'name' => 'S2_A_97_Alqui_5',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Semill_5 = array(
						'id' => 'S2_A_97_Semill_5',
						'name' => 'S2_A_97_Semill_5',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Envase_5 = array(
						'id' => 'S2_A_97_Envase_5',
						'name' => 'S2_A_97_Envase_5',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Transp_5 = array(
						'id' => 'S2_A_97_Transp_5',
						'name' => 'S2_A_97_Transp_5',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Otro_5 = array(
						'id' => 'S2_A_97_Otro_5',
						'name' => 'S2_A_97_Otro_5',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '50',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_97_Otro_Esp_5 = array(
						'id' => 'S2_A_97_Otro_Esp_5',
						'name' => 'S2_A_97_Otro_Esp_5',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '8',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);

$S2_A_97_TipoCult_6 = array(
						'id' => 'S2_A_97_TipoCult_6',
						'name' => 'S2_A_97_TipoCult_6',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '50',
					);

$S2_A_97_ManOb_6 = array(
						'id' => 'S2_A_97_ManOb_6',
						'name' => 'S2_A_97_ManOb_6',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Alqui_6 = array(
						'id' => 'S2_A_97_Alqui_6',
						'name' => 'S2_A_97_Alqui_6',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Semill_6 = array(
						'id' => 'S2_A_97_Semill_6',
						'name' => 'S2_A_97_Semill_6',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Envase_6 = array(
						'id' => 'S2_A_97_Envase_6',
						'name' => 'S2_A_97_Envase_6',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Transp_6 = array(
						'id' => 'S2_A_97_Transp_6',
						'name' => 'S2_A_97_Transp_6',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Otro_6 = array(
						'id' => 'S2_A_97_Otro_6',
						'name' => 'S2_A_97_Otro_6',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '50',
						'onchange' => 'setEspecificar(this,1,1)',
					);

$S2_A_97_Otro_Esp_6 = array(
						'id' => 'S2_A_97_Otro_Esp_6',
						'name' => 'S2_A_97_Otro_Esp_6',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '8',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);

$S2_A_97_TipoCult_7 = array(
						'id' => 'S2_A_97_TipoCult_7',
						'name' => 'S2_A_97_TipoCult_7',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '50',
					);

$S2_A_97_ManOb_7 = array(
						'id' => 'S2_A_97_ManOb_7',
						'name' => 'S2_A_97_ManOb_7',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);
$S2_A_97_Alqui_7 = array(
						'id' => 'S2_A_97_Alqui_7',
						'name' => 'S2_A_97_Alqui_7',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Semill_7 = array(
						'id' => 'S2_A_97_Semill_7',
						'name' => 'S2_A_97_Semill_7',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Envase_7 = array(
						'id' => 'S2_A_97_Envase_7',
						'name' => 'S2_A_97_Envase_7',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Transp_7 = array(
						'id' => 'S2_A_97_Transp_7',
						'name' => 'S2_A_97_Transp_7',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);

$S2_A_97_Otro_7 = array(
						'id' => 'S2_A_97_Otro_7',
						'name' => 'S2_A_97_Otro_7',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '50',
						'onchange' => 'setEspecificar(this,1,1)',
					);


$S2_A_97_Otro_Esp_7 = array(
						'id' => 'S2_A_97_Otro_Esp_7',
						'name' => 'S2_A_97_Otro_Esp_7',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '8',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);

$S2_A_97_TipoCult_8 = array(
						'id' => 'S2_A_97_TipoCult_8',
						'name' => 'S2_A_97_TipoCult_8',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '50',
					);


$S2_A_97_ManOb_8 = array(
						'id' => 'S2_A_97_ManOb_8',
						'name' => 'S2_A_97_ManOb_8',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);


$S2_A_97_Alqui_8 = array(
						'id' => 'S2_A_97_Alqui_8',
						'name' => 'S2_A_97_Alqui_8',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);


$S2_A_97_Semill_8 = array(
						'id' => 'S2_A_97_Semill_8',
						'name' => 'S2_A_97_Semill_8',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);


$S2_A_97_Envase_8 = array(
						'id' => 'S2_A_97_Envase_8',
						'name' => 'S2_A_97_Envase_8',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);


$S2_A_97_Transp_8 = array(
						'id' => 'S2_A_97_Transp_8',
						'name' => 'S2_A_97_Transp_8',
						'class' => 'form-control',
						'align' => 'center',
						'maxlength' => '8',
					);
$S2_A_97_Otro_8 = array(
						'id' => 'S2_A_97_Otro_8',
						'name' => 'S2_A_97_Otro_8',
						'class' => 'form-control wd-inner-20 setEspecificar',
						'align' => 'center',
						'maxlength' => '50',
						'onchange' => 'setEspecificar(this,1,1)',
					);


$S2_A_97_Otro_Esp_8 = array(
						'id' => 'S2_A_97_Otro_Esp_8',
						'name' => 'S2_A_97_Otro_Esp_8',
						'class' => 'form-control wd-inner-70 spec',
						'align' => 'center',
						'maxlength' => '8',
						'placeholder' => 'Especifique',
						'disabled' => 'disabled',
					);


$S2_A_Especificar = array(
						'id' => 'S2_A_Especificar',
						'name' => 'S2_A_Especificar',
						'class' => 'form-control spec',
						'align' => 'center',
						'maxlength' => '100',
						'placeholder' => 'ESPECIFICAR OTROS GASTOS:',
					);


$S2_A_OBS = array(
						'id' => 'S2_A_OBS',
						'name' => 'S2_A_OBS',
						'class' => 'form-control spec',
						'align' => 'center',
						'maxlength' => '500',
						'placeholder' => 'OBSERVACIONES:',
						'rows'=> '2',

					);


// if (isset($hg3_seccion2a)) {
// 	foreach ($hg3_seccion2a as $key => $value) {
// 		${$key}['value'] = $value;
// 	}
// }

?>



<!-- Body -->
<?php echo form_open('','id="frmTab4"'); ?>

<!-- **************************************************** Section 02***********************************************************  -->
<table class="table table-bordered">
	<tr>
		<th class="hgCenter hgTitle" colspan="4"><h1>SECCIÓN 2: INFORMACIÓN AGROPECUARIA</h1></th>
	</tr>
	<tr>
		<th colspan="4">PARTE A: AGRICULTURA</th>
	</tr>
	<tr>
		<th>Nombre del productor</th>
		<td><?php echo form_input($S2_A_NomProd); ?></td>
		<th>Código del informante</th>
		<td><?php echo form_input($S2_A_CodInfor); ?></td>
	</tr>
</table>

<table class="table table-bordered" id="tb84">
	<tr>
		<td> <!-- Left -->
			<table class="table table-bordered">
				<tr>
					<th class="hgCenter hgTitle" colspan="2">84</th>
				</tr>
				<tr>
					<th>¿A qué se dedica como productor?</th>
					<td><?php echo form_input($S2_A_84); ?></td>
				</tr>
				<tr>
					<td>Otro</td>
					<td><?php echo form_input($S2_A_84_O); ?></td>
				</tr>

			</table>

		</td>

		<td> <!-- center -->
			<table class="table table-bordered" id="tab85-86">
				<tr>
					<th class="hgCenter hgTitle" colspan="2">85</th>
				</tr>
				<tr>
					<th>¿Con cuántas parcelas en este distrito cuenta para realizar la actividad?</th>
					<td><?php echo form_input($S2_A_85); ?></td>
				</tr>
				<tr>
					<th class="hgCenter hgTitle" colspan="2">86</th>
				</tr>
				<tr>
					<th colspan="2">¿Vive Ud. en alguna de las parcelas que tiene en este distrito?</th>
				</tr>
				<tr>
					<th>SI / NO</th>
					<td><?php echo form_input($S2_A_86); ?> </td>
				</tr>
			</table>

		</td>

		<td> <!-- Rigth  -->
			<table class="table table-bordered" id="tab87">
				<tr>
					<th class="hgCenter hgTitle" colspan="6">87</th>
				</tr>
				<tr>
					<th colspan="6">¿En este distrito, cual es la extensión del total de sus parcelas, cuál es su régimen de tenencua y cómo la adquirió?</th>
				</tr>
				<tr class="hgCenter">
					<td rowspan="2">N°</td>
					<td colspan="2">Superficie</td>
					<td rowspan="2" colspan="2"> Régimen de Tenencia</td>
					<td rowspan="2"> Adquisición de la Parcela</td>
				</tr>
				<tr class="hgCenter">
					<td>Cantidad</td>
					<td>Und. de Medida</td>
				</tr>
				<tr>
					<td>1</td>
					<td><?php echo form_input($S2_A_87_Parc_1_Cant); ?> </td>
					<td><?php echo form_dropdown('S2_A_87_Parc_1_Unid',$unidades,null,'id="S2_A_87_Parc_1_Unid" class="form-control"'); ?> </td>
					<td colspan="2"><?php echo form_input($S2_A_87_Parc_1_Reg); ?> <?php echo form_input($S2_A_87_Parc_1_Reg_O); ?> </td>
					<!--<td><?php //echo form_input($S2_A_87_Parc_1_Reg_O); ?> </td> -->
					<td><?php echo form_input($S2_A_87_Parc_1_Adqui); ?> </td>
				</tr>
				<tr>
					<td>2</td>
					<td><?php echo form_input($S2_A_87_Parc_2_Cant); ?> </td>
					<td><?php echo form_dropdown('S2_A_87_Parc_2_Unid',$unidades,null,'id="S2_A_87_Parc_2_Unid" class="form-control"'); ?> </td>
					<td colspan="2"><?php echo form_input($S2_A_87_Parc_2_Reg); ?> <?php echo form_input($S2_A_87_Parc_2_Reg_O); ?></td>
					<!--<td><?php // echo form_input($S2_A_87_Parc_2_Reg_O); ?> </td>-->
					<td><?php echo form_input($S2_A_87_Parc_2_Adqui); ?> </td>
				</tr>
				<tr>
					<td>3</td>
					<td><?php echo form_input($S2_A_87_Parc_3_Cant); ?> </td>
					<td><?php echo form_dropdown('S2_A_87_Parc_3_Unid',$unidades,null,'id="S2_A_87_Parc_3_Unid" class="form-control"'); ?> </td>
					<td colspan="2"><?php echo form_input($S2_A_87_Parc_3_Reg); ?> <?php echo form_input($S2_A_87_Parc_3_Reg_O); ?></td>
					<!--<td><?php // echo form_input($S2_A_87_Parc_3_Reg_O); ?> </td>-->
					<td><?php echo form_input($S2_A_87_Parc_3_Adqui); ?> </td>
				</tr>
				<tr>
					<td>4</td>
					<td><?php echo form_input($S2_A_87_Parc_4_Cant); ?> </td>
					<td><?php echo form_dropdown('S2_A_87_Parc_4_Unid',$unidades,null,'id="S2_A_87_Parc_4_Unid" class="form-control"'); ?> </td>
					<td colspan="2"><?php echo form_input($S2_A_87_Parc_4_Reg); ?> <?php echo form_input($S2_A_87_Parc_4_Reg_O); ?></td>
					<!--<td><?php // echo form_input($S2_A_87_Parc_4_Reg_O); ?> </td>-->
					<td><?php echo form_input($S2_A_87_Parc_4_Adqui); ?> </td>
				</tr>
				<tr>
					<td>5</td>
					<td><?php echo form_input($S2_A_87_Parc_5_Cant); ?> </td>
					<td><?php echo form_dropdown('S2_A_87_Parc_5_Unid',$unidades,null,'id="S2_A_87_Parc_5_Unid" class="form-control"'); ?> </td>
					<td colspan="2"><?php echo form_input($S2_A_87_Parc_5_Reg); ?> <?php echo form_input($S2_A_87_Parc_5_Reg_O); ?></td>
					<!--<td><?php // echo form_input($S2_A_87_Parc_5_Reg_O); ?> </td>-->
					<td><?php echo form_input($S2_A_87_Parc_5_Adqui); ?> </td>
				</tr>
				<tr>
					<td>6</td>
					<td><?php echo form_input($S2_A_87_Parc_6_Cant); ?> </td>
					<td><?php echo form_dropdown('S2_A_87_Parc_6_Unid',$unidades,null,'id="S2_A_87_Parc_6_Unid" class="form-control"'); ?> </td>
					<td colspan="2"><?php echo form_input($S2_A_87_Parc_6_Reg); ?> <?php echo form_input($S2_A_87_Parc_6_Reg_O); ?></td>
					<!--<td><?php // echo form_input($S2_A_87_Parc_6_Reg_O); ?> </td>-->
					<td colspan="2"><?php echo form_input($S2_A_87_Parc_6_Adqui); ?> </td>
				</tr>
			</table>

		</td>

	</tr>
	<tr>
		<td colspan="3"><?php echo form_textarea($S2_A_OBS_1); ?> </td> 
	</tr>

</table>

<table class="table table-bordered" id="tab88">
	<tr>
		<th class="hgCenter hgTitle" colspan="13">88</th>
	</tr>
	<tr>
		<th colspan="13">Responder con respecto a cada una de sus parcelas en la zona de cajamarquilla y sobre la producción en el año 2013</th>
	</tr>
	<tr>
		<th class="hgTitle" colspan="13">PARCELA 01</th>
	</tr>
	<tr class="hgCenter">
		<td rowspan="3" colspan="2">Tipo de cultivos</td>
		<td colspan="2">Superficie sembrada</td>
		<td colspan="2">Superficie cocechada</td>
		<td colspan="2">Producción</td>
		<td rowspan="2">¿Cuál es el destino principal de la producción?</td>
		<td colspan="4">Solo si respondió venta</td>
	</tr>
	<tr class="hgCenter">
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio en chacra (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio al comprador final (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
	</tr>
	<tr class="hgCenter">
		<td>Venta / Autoconsumo</td>
	</tr>
		<td>a</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc1_1); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc1_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc1_1',$unidades,null,'id="S2_A_88_SS_Unid_Parc1_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc1_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc1_1',$unidades,null,'id="S2_A_88_SC_Unid_Parc1_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc1_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc1_1',$unidades,null,'id="S2_A_88_Prod_Unid_Parc1_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc1_1); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc1_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc1_1',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc1_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc1_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc1_1',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc1_1" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>c</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc1_2); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc1_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc1_2',$unidades,null,'id="S2_A_88_SS_Unid_Parc1_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc1_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc1_2',$unidades,null,'id="S2_A_88_SC_Unid_Parc1_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc1_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc1_2',$unidades,null,'id="S2_A_88_Prod_Unid_Parc1_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc1_2); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc1_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc1_2',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc1_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc1_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc1_2',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc1_2" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>b</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc1_3); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc1_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc1_3',$unidades,null,'id="S2_A_88_SS_Unid_Parc1_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc1_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc1_3',$unidades,null,'id="S2_A_88_SC_Unid_Parc1_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc1_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc1_3',$unidades,null,'id="S2_A_88_Prod_Unid_Parc1_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc1_3); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc1_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc1_3',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc1_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc1_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc1_3',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc1_3" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>d</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc1_4); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc1_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc1_4',$unidades,null,'id="S2_A_88_SS_Unid_Parc1_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Ca_Parc1_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc1_4',$unidades,null,'id="S2_A_88_SC_Unid_Parc1_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc1_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc1_4',$unidades,null,'id="S2_A_88_Prod_Unid_Parc1_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc1_4); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc1_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc1_4',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc1_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc1_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc1_4',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc1_4" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<th class="hgTitle" colspan="13">PARCELA 02</th>
	</tr>
	<tr class="hgCenter">
		<td rowspan="3" colspan="2">Tipo de cultivos</td>
		<td colspan="2">Superficie sembrada</td>
		<td colspan="2">Superficie cocechada</td>
		<td colspan="2">Producción</td>
		<td rowspan="2">¿Cuál es el destino principal de la producción?</td>
		<td colspan="4">Solo si respondió venta</td>
	</tr>
	<tr class="hgCenter">
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio en chacra (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio al comprador final (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
	</tr>
	<tr class="hgCenter">
		<td>Venta / Autoconsumo</td>
	</tr>
	<tr>
		<td>a</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc2_1); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc2_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc2_1',$unidades,null,'id="S2_A_88_SS_Unid_Parc2_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc2_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc2_1',$unidades,null,'id="S2_A_88_SC_Unid_Parc2_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc2_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc2_1',$unidades,null,'id="S2_A_88_Prod_Unid_Parc2_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc2_1); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc2_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc2_1',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc2_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc2_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc2_1',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc2_1" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>c</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc2_2); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc2_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc2_2',$unidades,null,'id="S2_A_88_SS_Unid_Parc2_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc2_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc2_2',$unidades,null,'id="S2_A_88_SC_Unid_Parc2_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc2_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc2_2',$unidades,null,'id="S2_A_88_Prod_Unid_Parc2_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc2_2); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc2_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc2_2',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc2_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc2_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc2_2',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc2_2" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>b</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc2_3); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc2_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc2_3',$unidades,null,'id="S2_A_88_SS_Unid_Parc2_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc2_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc2_3',$unidades,null,'id="S2_A_88_SC_Unid_Parc2_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc2_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc2_3',$unidades,null,'id="S2_A_88_Prod_Unid_Parc2_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc2_3); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc2_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc2_3',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc2_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc2_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc2_3',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc2_3" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>d</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc2_4); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc2_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc2_4',$unidades,null,'id="S2_A_88_SS_Unid_Parc2_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Ca_Parc2_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc2_4',$unidades,null,'id="S2_A_88_SC_Unid_Parc2_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc2_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc2_4',$unidades,null,'id="S2_A_88_Prod_Unid_Parc2_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc2_4); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc2_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc2_4',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc2_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc2_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc2_4',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc2_4" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<th class="hgTitle" colspan="13">PARCELA 03</th>
	</tr>
	<tr class="hgCenter">
		<td rowspan="3" colspan="2">Tipo de cultivos</td>
		<td colspan="2">Superficie sembrada</td>
		<td colspan="2">Superficie cocechada</td>
		<td colspan="2">Producción</td>
		<td rowspan="2">¿Cuál es el destino principal de la producción?</td>
		<td colspan="4">Solo si respondió venta</td>
	</tr>
	<tr class="hgCenter">
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio en chacra (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio al comprador final (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
	</tr>
	<tr class="hgCenter">
		<td>Venta / Autoconsumo</td>
	</tr>
	<tr>
		<td>a</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc3_1); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc3_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc3_1',$unidades,null,'id="S2_A_88_SS_Unid_Parc3_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc3_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc3_1',$unidades,null,'id="S2_A_88_SC_Unid_Parc3_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc3_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc3_1',$unidades,null,'id="S2_A_88_Prod_Unid_Parc3_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc3_1); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc3_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc3_1',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc3_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc3_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc3_1',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc3_1" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>c</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc3_2); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc3_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc3_2',$unidades,null,'id="S2_A_88_SS_Unid_Parc3_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc3_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc3_2',$unidades,null,'id="S2_A_88_SC_Unid_Parc3_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc3_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc3_2',$unidades,null,'id="S2_A_88_Prod_Unid_Parc3_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc3_2); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc3_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc3_2',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc3_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc3_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc3_2',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc3_2" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>b</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc3_3); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc3_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc3_3',$unidades,null,'id="S2_A_88_SS_Unid_Parc3_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc3_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc3_3',$unidades,null,'id="S2_A_88_SC_Unid_Parc3_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc3_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc3_3',$unidades,null,'id="S2_A_88_Prod_Unid_Parc3_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc3_3); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc3_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc3_3',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc3_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc3_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc3_3',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc3_3" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>d</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc3_4); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc3_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc3_4',$unidades,null,'id="S2_A_88_SS_Unid_Parc3_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Ca_Parc3_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc3_4',$unidades,null,'id="S2_A_88_SC_Unid_Parc3_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc3_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc3_4',$unidades,null,'id="S2_A_88_Prod_Unid_Parc3_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc3_4); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc3_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc3_4',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc3_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc3_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc3_4',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc3_4" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<th class="hgTitle" colspan="13">PARCELA 04</th>
	</tr>
	<tr class="hgCenter">
		<td rowspan="3" colspan="2">Tipo de cultivos</td>
		<td colspan="2">Superficie sembrada</td>
		<td colspan="2">Superficie cocechada</td>
		<td colspan="2">Producción</td>
		<td rowspan="2">¿Cuál es el destino principal de la producción?</td>
		<td colspan="4">Solo si respondió venta</td>
	</tr>
	<tr class="hgCenter">
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio en chacra (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio al comprador final (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
	</tr>
	<tr>
		<td class="hgCenter">Venta / Autoconumo</td>
	</tr>
	<tr>
		<td>a</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc4_1); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc4_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc4_1',$unidades,null,'id="S2_A_88_SS_Unid_Parc4_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc4_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc4_1',$unidades,null,'id="S2_A_88_SC_Unid_Parc4_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc4_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc4_1',$unidades,null,'id="S2_A_88_Prod_Unid_Parc4_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc4_1); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc4_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc4_1',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc4_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc4_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc4_1',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc4_1" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>c</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc4_2); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc4_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc4_2',$unidades,null,'id="S2_A_88_SS_Unid_Parc4_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc4_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc4_2',$unidades,null,'id="S2_A_88_SC_Unid_Parc4_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc4_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc4_2',$unidades,null,'id="S2_A_88_Prod_Unid_Parc4_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc4_2); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc4_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc4_2',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc4_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc4_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc4_2',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc4_2" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>b</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc4_3); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc4_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc4_3',$unidades,null,'id="S2_A_88_SS_Unid_Parc4_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc4_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc4_3',$unidades,null,'id="S2_A_88_SC_Unid_Parc4_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc4_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc4_3',$unidades,null,'id="S2_A_88_Prod_Unid_Parc4_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc4_3); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc4_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc4_3',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc4_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc4_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc4_3',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc4_3" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>d</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc4_4); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc4_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc4_4',$unidades,null,'id="S2_A_88_SS_Unid_Parc4_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Ca_Parc4_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc4_4',$unidades,null,'id="S2_A_88_SC_Unid_Parc4_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc4_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc4_4',$unidades,null,'id="S2_A_88_Prod_Unid_Parc4_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc4_4); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc4_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc4_4',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc4_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc4_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc4_4',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc4_4" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<th class="hgTitle" colspan="13">PARCELA 05</th>
	</tr>
	<tr class="hgCenter">
		<td rowspan="3" colspan="2">Tipo de cultivos</td>
		<td colspan="2">Superficie sembrada</td>
		<td colspan="2">Superficie cocechada</td>
		<td colspan="2">Producción</td>
		<td rowspan="2">¿Cuál es el destino principal de la producción?</td>
		<td colspan="4">Solo si respondió venta</td>
	</tr>
	<tr class="hgCenter">
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio en chacra (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio al comprador final (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
	</tr>
	<tr class="hgCenter">
		<td>Venta / Autoconsumo</td>
	</tr>
	<tr>
		<td>a</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc5_1); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc5_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc5_1',$unidades,null,'id="S2_A_88_SS_Unid_Parc5_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc5_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc5_1',$unidades,null,'id="S2_A_88_SC_Unid_Parc5_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc5_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc5_1',$unidades,null,'id="S2_A_88_Prod_Unid_Parc5_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc5_1); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc5_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc5_1',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc5_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc5_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc5_1',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc5_1" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>c</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc5_2); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc5_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc5_2',$unidades,null,'id="S2_A_88_SS_Unid_Parc5_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc5_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc5_2',$unidades,null,'id="S2_A_88_SC_Unid_Parc5_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc5_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc5_2',$unidades,null,'id="S2_A_88_Prod_Unid_Parc5_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc5_2); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc5_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc5_2',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc5_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc5_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc5_2',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc5_2" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>b</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc5_3); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc5_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc5_3',$unidades,null,'id="S2_A_88_SS_Unid_Parc5_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc5_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc5_3',$unidades,null,'id="S2_A_88_SC_Unid_Parc5_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc5_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc5_3',$unidades,null,'id="S2_A_88_Prod_Unid_Parc5_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc5_3); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc5_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc5_3',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc5_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc5_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc5_3',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc5_3" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>d</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc5_4); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc5_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc5_4',$unidades,null,'id="S2_A_88_SS_Unid_Parc5_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Ca_Parc5_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc5_4',$unidades,null,'id="S2_A_88_SC_Unid_Parc5_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc5_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc5_4',$unidades,null,'id="S2_A_88_Prod_Unid_Parc5_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc5_4); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc5_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc5_4',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc5_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc5_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc5_4',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc5_4" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<th class="hgTitle" colspan="13">PARCELA 06</th>
	</tr>
	<tr class="hgCenter">
		<td rowspan="3" colspan="2">Tipo de cultivos</td>
		<td colspan="2">Superficie sembrada</td>
		<td colspan="2">Superficie cocechada</td>
		<td colspan="2">Producción</td>
		<td rowspan="2">¿Cuál es el destino principal de la producción?</td>
		<td colspan="4">Solo si respondió venta</td>
	</tr>
	<tr class="hgCenter">
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Cantidad</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio en chacra (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
		<td rowspan="2">Precio al comprador final (S/.)</td>
		<td rowspan="2">Und. de Medida</td>
	</tr>
	<tr class="hgCenter">
		<td>Venta / Autoconsumo</td>
	</tr>
	<tr>
		<td>a</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc6_1); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc6_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc6_1',$unidades,null,'id="S2_A_88_SS_Unid_Parc6_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc6_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc6_1',$unidades,null,'id="S2_A_88_SC_Unid_Parc6_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc6_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc6_1',$unidades,null,'id="S2_A_88_Prod_Unid_Parc6_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc6_1); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc6_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc6_1',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc6_1" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc6_1); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc6_1',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc6_1" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>c</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc6_2); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc6_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc6_2',$unidades,null,'id="S2_A_88_SS_Unid_Parc6_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc6_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc6_2',$unidades,null,'id="S2_A_88_SC_Unid_Parc6_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc6_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc6_2',$unidades,null,'id="S2_A_88_Prod_Unid_Parc6_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc6_2); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc6_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc6_2',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc6_2" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc6_2); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc6_2',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc6_2" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>b</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc6_3); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc6_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc6_3',$unidades,null,'id="S2_A_88_SS_Unid_Parc6_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Cant_Parc6_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc6_3',$unidades,null,'id="S2_A_88_SC_Unid_Parc6_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc6_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc6_3',$unidades,null,'id="S2_A_88_Prod_Unid_Parc6_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc6_3); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc6_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc6_3',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc6_3" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc6_3); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc6_3',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc6_3" class="form-control"'); ?> </td>
	</tr>
	<tr>
		<td>d</td>
		<td><?php echo form_input($S2_A_88_TipCulti_Parc6_4); ?> </td>
		<td><?php echo form_input($S2_A_88_SS_Cant_Parc6_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SS_Unid_Parc6_4',$unidades,null,'id="S2_A_88_SS_Unid_Parc6_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_SC_Ca_Parc6_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_SC_Unid_Parc6_4',$unidades,null,'id="S2_A_88_SC_Unid_Parc6_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Prod_Ca_Parc6_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_Prod_Unid_Parc6_4',$unidades,null,'id="S2_A_88_Prod_Unid_Parc6_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_Desti_Parc6_4); ?> </td>
		<td><?php echo form_input($S2_A_88_PreChac_Parc6_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCha_Uni_Parc6_4',$unidades,null,'id="S2_A_88_PreCha_Uni_Parc6_4" class="form-control"'); ?> </td>
		<td><?php echo form_input($S2_A_88_PreComp_Parc6_4); ?> </td>
		<td><?php echo form_dropdown('S2_A_88_PreCom_Uni_Parc6_4',$unidades,null,'id="S2_A_88_PreCom_Uni_Parc6_4" class="form-control"'); ?> </td>
	</tr>
</table>

<table class="table table-bordered" id="tab89-90">
	<tr>
		<td> <!-- Left -->
			
			<table class="table table-bordered">
				<tr>
					<th class="hgCenter hgTitle" colspan="2">89</th>
				</tr>
				<tr>
					<th>¿De dónde proviene el agua para su actividad?</th>
					<td><?php echo form_input($S2_A_89); ?> </td>
				</tr>
				<tr>
					<td align="center">Otro</td>
					<td><?php echo form_input($S2_A_89_O); ?></td>
				</tr>
				<tr>
					<th class="hgCenter hgTitle" colspan="2">90</th>
				</tr>
				<tr>
					<th colspan="2">Solo si el encuestado pertenece a la Lotización de Cajamarquilla</th>
				</tr>
				<tr>
					<th colspan="2">El agua que proviene de la poza de regantes es utilizada para regar sus sembríos?</th>
				</tr>
				<tr>
					<td align="center">SI / NO</td>
					<td><?php echo form_input($S2_A_90); ?></td>
				</tr>
			</table>

		</td>

		<td> <!-- Center -->

			<table class="table table-bordered">
				<tr>
					<th class="hgCenter hgTitle" colspan="2">91</th>
				</tr>
				<tr>
					<th colspan="2">Está afiliado a algún comité de regantes?</th>
				</tr>
				<tr>
					<td align="center">SI / NO</td>
					<td><?php echo form_input($S2_A_91); ?></td>
				</tr>
				<tr>
					<th class="hgCenter hgTitle" colspan="2">91A</th>
				</tr>
				<tr>
					<th>Solo si respondió SI, Cuál es el nombre de este comité o junta?</th>
					<td><?php echo form_input($S2_A_91A); ?></td>
				</tr>
				<tr>
					<th class="hgCenter hgTitle" colspan="2">92</th>
				</tr>
				<tr>
					<th colspan="2">Qué prácticas realiza? (multiple)</th>
				</tr>
				<tr>
					<td>Utiliza maquinarias?</td>
					<td><?php echo form_input($S2_A_92_1); ?></td>
				</tr>
				<tr>
					<td>Utiliza yunta?</td>
					<td><?php echo form_input($S2_A_92_2); ?></td>
				</tr>
				<tr>
					<td>Utiliza fertilizantes químicos?</td>
					<td><?php echo form_input($S2_A_92_3); ?></td>
				</tr>
				<tr>
					<td>Utiliza fertilizantes naturales?</td>
					<td><?php echo form_input($S2_A_92_4); ?></td>
				</tr>
				<tr>
					<td>Otro</td>
					<td><?php echo form_input($S2_A_92_5); ?> <?php echo form_input($S2_A_92_5_O); ?></td>
				</tr>
			</table>

		</td>

		<td> <!-- Rigth -->
			
			<table class="table table-bordered">
				
					<tr>
						<th class="hgCenter hgTitle" colspan="2">93</th>
					</tr>
					<tr>
						<th>¿Cómo financia la actividad agrícola?</th>
						<td><?php echo form_input($S2_A_93); ?> </td>
					</tr>
					<tr>
						<td align="center">Otro</td>
						<td><?php echo form_input($S2_A_93_O); ?></td>
					</tr>
					<tr>
						<th class="hgCenter hgTitle" colspan="2">94</th>
					</tr>
					<tr>
						<th colspan="2">¿Recibe apoyo de alguna institución para el desarrollo de su actividad agrícola?</th>
					</tr>
					<tr>
						<td align="center">SI / NO</td>
						<td><?php echo form_input($S2_A_94); ?></td>
					</tr>
					<tr>
						<th colspan="2">Si marcó NO, pasar a la pregunta 96.</th>
					</tr>

			</table>

		</td>

	</tr>

	<tr>
		<td colspan="2">
			<table class="table table-bordered" > <!-- Left -->
				<tr>
					<th class="hgCenter hgTitle" colspan="2">95</th>
					<th class="hgCenter hgTitle">95-A</th>
				</tr>
				<tr>
					<td colspan="2">Qué entidad los apoya? (multiple)</td>
					<td colspan="2">Cómo  los apoya? (multiple)</td>
				</tr>
				<tr>
					<td>1. Municipalidad</td>
					<td><?php echo form_input($S2_A_95_1); ?></td>
					<td><?php echo form_input($S2_A_95A_1); ?></td>
				</tr>
				<tr>
					<td>2. ONG</td>
					<td><?php echo form_input($S2_A_95_2); ?></td>
					<td><?php echo form_input($S2_A_95A_2); ?></td>
				</tr>
				<tr>
					<td>3. Ministerio de Agricultura</td>
					<td><?php echo form_input($S2_A_95_3); ?></td>
					<td><?php echo form_input($S2_A_95A_3); ?></td>
				</tr>
				<tr>
					<td>4. Otro </td>
					<td><?php echo form_input($S2_A_95_4); ?> <?php echo form_input($S2_A_95_4_O); ?></td>
					<td><?php echo form_input($S2_A_95A_4); ?></td>
				</tr>

			</table>
		</td>
		<td> <!-- Rigth -->
			<table class="table table-bordered">
				<tr>
					<th class="hgCenter hgTitle" colspan="2">96</th>
				</tr>
				<tr>
					<td colspan="2">Utiliza la siguiente tecnología? (múltiple)</td>
				</tr>
				<tr>
					<td>1. Riego por aspersión</td>
					<td><?php echo form_input($S2_A_96_1); ?></td>
				</tr>
				<tr>
					<td>2. Sistema de riego por goteo</td>
					<td><?php echo form_input($S2_A_96_2); ?></td>
				</tr>
				<tr>
					<td>3. Tractor agrícola para preparación de suelo</td>
					<td><?php echo form_input($S2_A_96_3); ?></td>
				</tr>
				<tr>
					<td>4. Maquinaria para cosecha</td>
					<td><?php echo form_input($S2_A_96_4); ?></td>
				</tr>
				<tr>
					<td>5. Otra Tecnologia</td>
					<td><?php echo form_input($S2_A_96_5); ?> <?php echo form_input($S2_A_96_5_O); ?></td>
				</tr>

			</table>

		</td>
	</tr>

</table>

<table class="table table-bordered" id="97">
	<tr>
		<th class="hgCenter hgTitle" colspan="8">97</th>
	</tr>
	<tr>
		<th colspan="8">Cuáles son los costos de producción en su actividad agrícola?</th>
	</tr>
	<tr class="hgCenter">
		<td rowspan="2"> Tipo de cultivo</td>
		<td colspan="7">Nuevos soles (S/.)</td>
	</tr>
	<tr class="hgCenter">
		<td>Mano de obra</td>
		<td>Alquiler de maquinaria</td>
		<td>Semillas</td>
		<td>Envases</td>
		<td>Transporte</td>
		<td colspan="2">Otro</td>
	</tr>
	<tr>
		<td><?php echo form_input($S2_A_97_TipoCult_1); ?></td>
		<td><?php echo form_input($S2_A_97_ManOb_1); ?></td>
		<td><?php echo form_input($S2_A_97_Alqui_1); ?></td>
		<td><?php echo form_input($S2_A_97_Semill_1); ?></td>
		<td><?php echo form_input($S2_A_97_Envase_1); ?></td>
		<td><?php echo form_input($S2_A_97_Transp_1); ?></td>
		<td><?php echo form_input($S2_A_97_Otro_1); ?> <?php echo form_input($S2_A_97_Otro_Esp_1); ?></td>
		<!--<td><?php //echo form_input($S2_A_97_Otro_Esp_1); ?></td>-->
	</tr>
	<tr>
		<td><?php echo form_input($S2_A_97_TipoCult_2); ?></td>
		<td><?php echo form_input($S2_A_97_ManOb_2); ?></td>
		<td><?php echo form_input($S2_A_97_Alqui_2); ?></td>
		<td><?php echo form_input($S2_A_97_Semill_2); ?></td>
		<td><?php echo form_input($S2_A_97_Envase_2); ?></td>
		<td><?php echo form_input($S2_A_97_Transp_2); ?></td>
		<td><?php echo form_input($S2_A_97_Otro_2); ?> <?php echo form_input($S2_A_97_Otro_Esp_2); ?></td>
		<!--<td><?php //echo form_input($S2_A_97_Otro_Esp_2); ?></td>-->
	</tr>
	<tr>
		<td><?php echo form_input($S2_A_97_TipoCult_3); ?></td>
		<td><?php echo form_input($S2_A_97_ManOb_3); ?></td>
		<td><?php echo form_input($S2_A_97_Alqui_3); ?></td>
		<td><?php echo form_input($S2_A_97_Semill_3); ?></td>
		<td><?php echo form_input($S2_A_97_Envase_3); ?></td>
		<td><?php echo form_input($S2_A_97_Transp_3); ?></td>
		<td><?php echo form_input($S2_A_97_Otro_3); ?> <?php echo form_input($S2_A_97_Otro_Esp_3); ?></td>
		<!--<td><?php //echo form_input($S2_A_97_Otro_Esp_3); ?></td>-->
	</tr>
	<tr>
		<td><?php echo form_input($S2_A_97_TipoCult_4); ?></td>
		<td><?php echo form_input($S2_A_97_ManOb_4); ?></td>
		<td><?php echo form_input($S2_A_97_Alqui_4); ?></td>
		<td><?php echo form_input($S2_A_97_Semill_4); ?></td>
		<td><?php echo form_input($S2_A_97_Envase_4); ?></td>
		<td><?php echo form_input($S2_A_97_Transp_4); ?></td>
		<td><?php echo form_input($S2_A_97_Otro_4); ?> <?php echo form_input($S2_A_97_Otro_Esp_4); ?></td>
		<!--<td><?php// echo form_input($S2_A_97_Otro_Esp_4); ?></td>-->
	</tr>
	<tr>
		<td><?php echo form_input($S2_A_97_TipoCult_5); ?></td>
		<td><?php echo form_input($S2_A_97_ManOb_5); ?></td>
		<td><?php echo form_input($S2_A_97_Alqui_5); ?></td>
		<td><?php echo form_input($S2_A_97_Semill_5); ?></td>
		<td><?php echo form_input($S2_A_97_Envase_5); ?></td>
		<td><?php echo form_input($S2_A_97_Transp_5); ?></td>
		<td><?php echo form_input($S2_A_97_Otro_5); ?> <?php echo form_input($S2_A_97_Otro_Esp_5); ?></td>
		<!--<td><?php// echo form_input($S2_A_97_Otro_Esp_5); ?></td>-->
	</tr>
	<tr>
		<td><?php echo form_input($S2_A_97_TipoCult_6); ?></td>
		<td><?php echo form_input($S2_A_97_ManOb_6); ?></td>
		<td><?php echo form_input($S2_A_97_Alqui_6); ?></td>
		<td><?php echo form_input($S2_A_97_Semill_6); ?></td>
		<td><?php echo form_input($S2_A_97_Envase_6); ?></td>
		<td><?php echo form_input($S2_A_97_Transp_6); ?></td>
		<td><?php echo form_input($S2_A_97_Otro_6); ?> <?php echo form_input($S2_A_97_Otro_Esp_6); ?></td>
		<!--<td><?php// echo form_input($S2_A_97_Otro_Esp_6); ?></td>-->
	</tr>
	<tr>
		<td><?php echo form_input($S2_A_97_TipoCult_7); ?></td>
		<td><?php echo form_input($S2_A_97_ManOb_7); ?></td>
		<td><?php echo form_input($S2_A_97_Alqui_7); ?></td>
		<td><?php echo form_input($S2_A_97_Semill_7); ?></td>
		<td><?php echo form_input($S2_A_97_Envase_7); ?></td>
		<td><?php echo form_input($S2_A_97_Transp_7); ?></td>
		<td><?php echo form_input($S2_A_97_Otro_7); ?> <?php echo form_input($S2_A_97_Otro_Esp_7); ?></td>
		<!--<td><?php //echo form_input($S2_A_97_Otro_Esp_7); ?></td>-->
	</tr>
	<tr>
		<td><?php echo form_input($S2_A_97_TipoCult_8); ?></td>
		<td><?php echo form_input($S2_A_97_ManOb_8); ?></td>
		<td><?php echo form_input($S2_A_97_Alqui_8); ?></td>
		<td><?php echo form_input($S2_A_97_Semill_8); ?></td>
		<td><?php echo form_input($S2_A_97_Envase_8); ?></td>
		<td><?php echo form_input($S2_A_97_Transp_8); ?></td>
		<td><?php echo form_input($S2_A_97_Otro_8); ?> <?php echo form_input($S2_A_97_Otro_Esp_8); ?></td>
		<!--<td><?php// echo form_input($S2_A_97_Otro_Esp_8); ?></td>-->
	</tr>
	<tr>
		<td colspan="8"><?php echo form_textarea($S2_A_Especificar); ?></td>
	</tr>
	<tr>
		<td colspan="8"><?php echo form_textarea($S2_A_OBS); ?></td>
	</tr>

</table>

<div class="col-md-offset-11">
		<?php echo form_submit('btnTab4','Guardar','id="btnTab4" class="btn btn-primary" style="width:100%"'); ?>		
</div>

<?php echo form_close() ?>

<script class="text/javascript">




	
$('#S2_A_84').change(function  (event) {
			var objVal = $('#S2_A_84').val(); 				
				if (objVal == '2') 
				{
					$('#frmTab4 input:text:not(#S2_A_NomProd, #S2_A_CodInfor, #S2_A_84),#S2_A_OBS_1,#S2_A_Especificar,#S2_A_OBS,#frmTab4 select').attr('disabled', 'disabled');
					$('#frmTab5 input:text,#S2_B_108_EspeGast,#frmTab5 select').removeAttr('disabled', 'disabled');
				}
				else if ((objVal == '1') || (objVal == '3'))
					{
						$('#frmTab4 input:text:not(.spec,#S2_A_84_O),#S2_A_OBS_1,#S2_A_Especificar,#S2_A_OBS,#frmTab4 select').removeAttr('disabled');$('#S2_A_84_O').attr('disabled', 'disabled');
						$('#frmTab4 input:text:not(#S2_A_84)').trigger('change');
						$('#frmTab5 input:text,#S2_B_108_EspeGast,#frmTab5 select').removeAttr('disabled', 'disabled');
					}
					else if (objVal == '4')
					{
						$('#frmTab4 input:text:not(.spec),#S2_A_OBS_1,#S2_A_Especificar,#S2_A_OBS,#S2_A_84_O,#frmTab4 select').removeAttr('disabled');
						$('#frmTab4 input:text:not(#S2_A_84)').trigger('change');
						$('#frmTab5 input:text,#S2_B_108_EspeGast,#frmTab5 select').removeAttr('disabled', 'disabled');
					}
					else if (objVal == '5')
					 {

					 	$('#frmTab4 input:text:not(#S2_A_NomProd, #S2_A_CodInfor, #S2_A_84),#S2_A_OBS_1,#S2_A_Especificar,#S2_A_OBS,#frmTab5 input:text,#S2_B_108_EspeGast,#frmTab4 select,#frmTab5 select').attr('disabled', 'disabled')
					 }

						 else
						{
							$('#S2_A_84_O').attr('disabled', 'disabled');
							$('#frmTab5 input:text,#S2_B_108_EspeGast,#frmTab5 select').removeAttr('disabled', 'disabled');
						}
				});

</script>



















