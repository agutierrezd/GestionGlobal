<?php
			$optionsArray = array( 'details' => array( 'funcionario_SJ' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contractor_master_SJ' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'id',
'nombre',
'estado' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'integrated_edit_field' ),
'nombre' => array( 'integrated_edit_field1' ),
'estado' => array( 'integrated_edit_field2' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'add_header' ),
'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field1' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_header' => 'top',
'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field1' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c6' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c6' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array(  ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c7' => array( 'model' => 'c3',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'integrated_edit_field' => array( 'field' => 'id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'nombre',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'estado',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>