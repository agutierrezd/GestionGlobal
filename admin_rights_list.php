<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "dependencias_001";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dependencias_001", " " . "Dependencias 001");
$table = "dependencia";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dependencia", " " . "Dependencia");
$table = "tparam_estados";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tparam_estados", " " . "Tparam Estados");
$table = "cargo";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("cargo", " " . "Cargo");
$table = "tparam_sn";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tparam_sn", " " . "Tparam Sn");
$table = "funcionario";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("funcionario", " " . "Funcionario");
$table = "nombramiento";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("nombramiento", " " . "Nombramiento");
$table = "contrato";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("contrato", " " . "Contrato");
$table = "perfil";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("perfil", " " . "Perfil");
$table = "contrato_attached_type";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("contrato_attached_type", " " . "Contrato Attached Type");
$table = "tparam_tipo_ct_000";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tparam_tipo_ct_000", " " . "Tipo");
$table = "tparam_tipo_ct_001";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tparam_tipo_ct_001", " " . "Modalidad");
$table = "tparam_tipo_ct_002";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tparam_tipo_ct_002", " " . "Causal");
$table = "contrato_estados";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("contrato_estados", " " . "Contrato Estados");
$table = "contrato_forma_pago";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("contrato_forma_pago", " " . "Contrato Forma Pago");
$table = "contrato_natjuridica";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("contrato_natjuridica", " " . "Contrato Natjuridica");
$table = "contrato_otrosi_type";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("contrato_otrosi_type", " " . "Contrato Otrosi Type");
$table = "contrato_pre";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("contrato_pre", " " . "Contrato Pre");
$table = "contrato_tipo";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("contrato_tipo", " " . "Contrato Tipo");
$table = "contrato_tipo_unidad";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("contrato_tipo_unidad", " " . "Contrato Tipo Unidad");
$table = "global_month";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("global_month", " " . "Global Month");
$table = "interventor_periodos";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("interventor_periodos", " " . "Interventor Periodos");
$table = "polizas_aseguradoras";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("polizas_aseguradoras", " " . "Polizas Aseguradoras");
$table = "polizas_tipo";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("polizas_tipo", " " . "Polizas Tipo");
$table = "tipo_banco";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tipo_banco", " " . "Tipo Banco");
$table = "tipo_cta_banco";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tipo_cta_banco", " " . "Tipo Cta Banco");
$table = "tipo_docidentidad";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tipo_docidentidad", " " . "Tipo Docidentidad");
$table = "tipo_liquidacion";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tipo_liquidacion", " " . "Tipo Liquidacion");
$table = "vigencia";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("vigencia", " " . "Vigencia");
$table = "divipola";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("divipola", " " . "Divipola");
$table = "global_ejecucion";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("global_ejecucion", " " . "Global Ejecucion");
$table = "global_ejecucion_desagregada";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("global_ejecucion_desagregada", " " . "Global Ejecucion Desagregada");
$table = "global_ejecucion_actividades_spi";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("global_ejecucion_actividades_spi", " " . "Global Ejecucion Actividades Spi");
$table = "rep_prg001_catalogopresupuestal";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("rep_prg001_catalogopresupuestal", " " . "Rep Prg001 Catalogopresupuestal");
$table = "global_users";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("global_users", " " . "Global Users");
$table = "global_rol_almacen";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("global_rol_almacen", " " . "Global Rol Almacen");
$table = "global_rol_c";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("global_rol_c", " " . "Global Rol C");
$table = "ep_compromisos";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ep_compromisos", " " . "Ep Compromisos");
$table = "ep_obligaciones";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ep_obligaciones", " " . "Ep Obligaciones");
$table = "ep_agregada";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ep_agregada", " " . "Ep Agregada");
$table = "q_graph_001 Chart";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("q_graph_001_chart", " " . "::");
$table = "q_graph_002 Chart";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("q_graph_002_chart", " " . "::");
$table = "q_graph_001";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("q_graph_001", " " . "::");
$table = "q_graph_002";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("q_graph_002", " " . "::");
$table = "Dashboard";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dashboard", " " . "Tablero de mando");
$table = "tparam_tiporubro";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tparam_tiporubro", " " . "Tparam Tiporubro");

require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = "admin_rights_list";
$options["pageTable"] = GLOBAL_PAGES;
$options["id"] = postvalue_number("id") ? postvalue_number("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('data'));
	$pageObject->saveRights( $modifiedRights );
	return;
}


// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();



?>