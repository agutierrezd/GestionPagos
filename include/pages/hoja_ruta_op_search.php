<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'ctrlpagos_id',
'hr_id_fk',
'id_cont_fk',
'op_num',
'op_fecha',
'op_anexo',
'op_user',
'op_fechauser',
'tercero_email_a',
'tercero_email_b' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ctrlpagos_id' => array( 'integrated_search_field' ),
'hr_id_fk' => array( 'integrated_search_field1' ),
'id_cont_fk' => array( 'integrated_search_field2' ),
'op_num' => array( 'integrated_search_field3' ),
'op_fecha' => array( 'integrated_search_field4' ),
'op_anexo' => array( 'integrated_search_field5' ),
'op_user' => array( 'integrated_search_field6' ),
'op_fechauser' => array( 'integrated_search_field7' ),
'tercero_email_a' => array( 'integrated_search_field8' ),
'tercero_email_b' => array( 'integrated_search_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'search_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'search_search',
'search_reset',
'search_back_list',
'search_cancel' ),
'grid' => array( 'integrated_search_field',
'integrated_search_field1',
'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field6',
'integrated_search_field7',
'integrated_search_field8',
'integrated_search_field9' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'search_header' => 'top',
'search_search' => 'below-grid',
'search_reset' => 'below-grid',
'search_back_list' => 'below-grid',
'search_cancel' => 'below-grid',
'integrated_search_field' => 'grid',
'integrated_search_field1' => 'grid',
'integrated_search_field2' => 'grid',
'integrated_search_field3' => 'grid',
'integrated_search_field4' => 'grid',
'integrated_search_field5' => 'grid',
'integrated_search_field6' => 'grid',
'integrated_search_field7' => 'grid',
'integrated_search_field8' => 'grid',
'integrated_search_field9' => 'grid' ),
'itemLocations' => array( 'integrated_search_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'search_header' => array( 'search_header' ),
'search_reset' => array( 'search_reset' ),
'search_back_list' => array( 'search_back_list' ),
'search_search' => array( 'search_search' ),
'search_cancel' => array( 'search_cancel' ),
'integrated_search_field' => array( 'integrated_search_field',
'integrated_search_field1',
'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field6',
'integrated_search_field7',
'integrated_search_field8',
'integrated_search_field9' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_search_field',
'integrated_search_field1',
'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field6',
'integrated_search_field7',
'integrated_search_field8',
'integrated_search_field9' ),
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
'misc' => array( 'type' => 'search',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'search',
'type' => 'search',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'search-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'search-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'search-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_search',
'search_reset',
'search_back_list',
'search_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-search',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_search_field',
'integrated_search_field1',
'integrated_search_field2',
'integrated_search_field3',
'integrated_search_field4',
'integrated_search_field5',
'integrated_search_field6',
'integrated_search_field7',
'integrated_search_field8',
'integrated_search_field9' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'separateLabels' => false ) ),
'items' => array( 'search_header' => array( 'type' => 'search_header' ),
'search_reset' => array( 'type' => 'search_reset' ),
'search_back_list' => array( 'type' => 'search_back_list' ),
'search_search' => array( 'type' => 'search_search' ),
'search_cancel' => array( 'type' => 'search_cancel' ),
'integrated_search_field' => array( 'field' => 'ctrlpagos_id',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field1' => array( 'field' => 'hr_id_fk',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field2' => array( 'field' => 'id_cont_fk',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field3' => array( 'field' => 'op_num',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field4' => array( 'field' => 'op_fecha',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field5' => array( 'field' => 'op_anexo',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field6' => array( 'field' => 'op_user',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field7' => array( 'field' => 'op_fechauser',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field8' => array( 'field' => 'tercero_email_a',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field9' => array( 'field' => 'tercero_email_b',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>