<?php
			$optionsArray = array( 'details' => array( 'global_users' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'idEvaluador',
'apellidos',
'cedula',
'lugarExpedicion',
'fechaIngreso',
'nombre',
'ubicacionFisica',
'idCargo',
'idDependencia',
'idNombramiento',
'estado_funcionario',
'signpad',
'sueldo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'idEvaluador' => array( 'integrated_edit_field' ),
'apellidos' => array( 'integrated_edit_field1' ),
'cedula' => array( 'integrated_edit_field2' ),
'lugarExpedicion' => array( 'integrated_edit_field3' ),
'fechaIngreso' => array( 'integrated_edit_field5' ),
'nombre' => array( 'integrated_edit_field6' ),
'ubicacionFisica' => array( 'integrated_edit_field7' ),
'idCargo' => array( 'integrated_edit_field8' ),
'idDependencia' => array( 'integrated_edit_field9' ),
'idNombramiento' => array( 'integrated_edit_field11' ),
'estado_funcionario' => array( 'integrated_edit_field13' ),
'signpad' => array( 'integrated_edit_field4' ),
'sueldo' => array( 'integrated_edit_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'edit_header' ),
'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close',
'hamburger' ),
'grid' => array( 'tabs' ),
'section' => array( 'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field5',
'integrated_edit_field10',
'integrated_edit_field6',
'integrated_edit_field1',
'integrated_edit_field13' ),
'section1' => array( 'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field',
'integrated_edit_field11',
'integrated_edit_field7' ),
'section2' => array( 'integrated_edit_field4' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_header' => 'top',
'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'tabs' => 'grid',
'integrated_edit_field2' => 'section',
'integrated_edit_field3' => 'section',
'integrated_edit_field5' => 'section',
'integrated_edit_field10' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field13' => 'section',
'integrated_edit_field8' => 'section1',
'integrated_edit_field9' => 'section1',
'integrated_edit_field' => 'section1',
'integrated_edit_field11' => 'section1',
'integrated_edit_field7' => 'section1',
'integrated_edit_field4' => 'section2' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field3' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field5' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field10' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c5' ),
'integrated_edit_field13' => array( 'location' => 'section',
'cellId' => 'c6' ),
'integrated_edit_field8' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field9' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field' => array( 'location' => 'section1',
'cellId' => 'c2' ),
'integrated_edit_field11' => array( 'location' => 'section1',
'cellId' => 'c3' ),
'integrated_edit_field7' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field4' => array( 'location' => 'section2',
'cellId' => 'c1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'edit_view' => array( 'edit_view' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field13',
'integrated_edit_field4',
'integrated_edit_field10' ),
'tabs' => array( 'tabs' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'tabs' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 4 ),
'section1' => array( 'cells' => array( 'c5' => array( 'cols' => array( 0,
1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ),
'section2' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list',
'edit_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 1 ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'tabs' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field13' ) ),
'c7' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c5',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field11' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'useFullWidth' => true ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'edit_view' => array( 'type' => 'edit_view' ),
'integrated_edit_field' => array( 'field' => 'idEvaluador',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'apellidos',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'cedula',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'lugarExpedicion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'fechaIngreso',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'nombre',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'ubicacionFisica',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'idCargo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'idDependencia',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'idNombramiento',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'estado_funcionario',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'signpad',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Inf. personal',
'type' => 0 ),
array( 'text' => 'Ubicación',
'type' => 0 ),
array( 'text' => 'Firma',
'type' => 0 ) ),
'locations' => array( 'section',
'section1',
'section2' ) ),
'integrated_edit_field10' => array( 'field' => 'sueldo',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>