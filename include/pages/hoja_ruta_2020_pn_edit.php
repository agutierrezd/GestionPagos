<?php
			$optionsArray = array( 'details' => array( 'hoja_ruta_2020_files' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
'hoja_ruta_2020_tracking' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'hr_concepto_id',
'id_cont_fk',
'hr_anio',
'hr_nit_contra_ta',
'hr_asunto',
'hr_valor',
'hr_fechaingreso',
'sys_user',
'not_user',
'not_date',
'not_mail',
'not_msg',
'evento_type_id_fk',
'tercero_email_a',
'tercero_email_b',
'last_act_user',
'sys_dep',
'cont_num' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'hr_concepto_id' => array( 'integrated_edit_field' ),
'id_cont_fk' => array( 'integrated_edit_field1' ),
'hr_anio' => array( 'integrated_edit_field2' ),
'hr_nit_contra_ta' => array( 'integrated_edit_field7' ),
'hr_asunto' => array( 'integrated_edit_field8' ),
'hr_valor' => array( 'integrated_edit_field9' ),
'hr_fechaingreso' => array( 'integrated_edit_field10' ),
'sys_user' => array( 'integrated_edit_field17' ),
'not_user' => array( 'integrated_edit_field23' ),
'not_date' => array( 'integrated_edit_field24' ),
'not_mail' => array( 'integrated_edit_field25' ),
'not_msg' => array( 'integrated_edit_field26' ),
'evento_type_id_fk' => array( 'integrated_edit_field28' ),
'tercero_email_a' => array( 'integrated_edit_field30' ),
'tercero_email_b' => array( 'integrated_edit_field35' ),
'last_act_user' => array( 'integrated_edit_field3' ),
'sys_dep' => array( 'integrated_edit_field4' ),
'cont_num' => array( 'integrated_edit_field5' ) ) ),
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
'section' => array( 'integrated_edit_field30',
'integrated_edit_field35',
'integrated_edit_field1',
'integrated_edit_field5',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field17',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field4',
'integrated_edit_field7' ),
'section2' => array( 'details_preview' ),
'section1' => array( 'integrated_edit_field',
'integrated_edit_field3',
'integrated_edit_field24',
'integrated_edit_field10',
'integrated_edit_field23',
'integrated_edit_field2',
'integrated_edit_field28' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_header' => 'top',
'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'tabs' => 'grid',
'integrated_edit_field30' => 'section',
'integrated_edit_field35' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field5' => 'section',
'integrated_edit_field8' => 'section',
'integrated_edit_field9' => 'section',
'integrated_edit_field17' => 'section',
'integrated_edit_field25' => 'section',
'integrated_edit_field26' => 'section',
'integrated_edit_field4' => 'section',
'integrated_edit_field7' => 'section',
'details_preview' => 'section2',
'integrated_edit_field' => 'section1',
'integrated_edit_field3' => 'section1',
'integrated_edit_field24' => 'section1',
'integrated_edit_field10' => 'section1',
'integrated_edit_field23' => 'section1',
'integrated_edit_field2' => 'section1',
'integrated_edit_field28' => 'section1' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c18' ),
'integrated_edit_field30' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field35' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field5' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field9' => array( 'location' => 'section',
'cellId' => 'c5' ),
'integrated_edit_field17' => array( 'location' => 'section',
'cellId' => 'c6' ),
'integrated_edit_field25' => array( 'location' => 'section',
'cellId' => 'c7' ),
'integrated_edit_field26' => array( 'location' => 'section',
'cellId' => 'c8' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c9' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c10' ),
'details_preview' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field3' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field24' => array( 'location' => 'section1',
'cellId' => 'c2' ),
'integrated_edit_field10' => array( 'location' => 'section1',
'cellId' => 'c3' ),
'integrated_edit_field23' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field2' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field28' => array( 'location' => 'section1',
'cellId' => 'c6' ) ),
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
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field17',
'integrated_edit_field23',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field28',
'integrated_edit_field30',
'integrated_edit_field35',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5' ),
'tabs' => array( 'tabs' ),
'details_preview' => array( 'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c18' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'tabs' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c2' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field17' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field25' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0,
1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field26' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field30' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field35' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 6 ),
'section2' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field23' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field24' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field28' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 4 ) ) ),
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c18',
'colspan' => 1 ) ),
'section' => '' ) ),
'cells' => array( 'c18' => array( 'model' => 'c3',
'items' => array( 'tabs' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field30' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field35' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field17' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field25' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field26' ),
'useFullWidth' => true ),
'c9' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c10' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c6' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c7' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field24' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field23' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field28' ) ),
'c7' => array( 'model' => 'c1',
'items' => array(  ) ) ),
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
'integrated_edit_field' => array( 'field' => 'hr_concepto_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'id_cont_fk',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 'hr_anio',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'hr_nit_contra_ta',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'hr_asunto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'hr_valor',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'hr_valor',
'table' => 'hoja_ruta_2020_pn',
'type' => 3 ) ),
'integrated_edit_field10' => array( 'field' => 'hr_fechaingreso',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field17' => array( 'field' => 'sys_user',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field23' => array( 'field' => 'not_user',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field24' => array( 'field' => 'not_date',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field25' => array( 'field' => 'not_mail',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field26' => array( 'field' => 'not_msg',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'not_msg',
'table' => 'hoja_ruta_2020_pn',
'type' => 3 ),
'tooltip' => array( 'field' => 'not_msg',
'table' => null,
'type' => 4 ) ),
'integrated_edit_field28' => array( 'field' => 'evento_type_id_fk',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field30' => array( 'field' => 'tercero_email_a',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field35' => array( 'field' => 'tercero_email_b',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Radicar solicitud de pago',
'type' => 0 ),
array( 'text' => 'Anexos',
'type' => 0 ),
array( 'text' => '',
'type' => 0 ) ),
'locations' => array( 'section',
'section2',
'section1' ) ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'hoja_ruta_2020_files',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'integrated_edit_field3' => array( 'field' => 'last_act_user',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'sys_dep',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'cont_num',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>