<?php
			$optionsArray = array( 'totals' => array( 'hist_hr_id' => array( 'totalsType' => '' ),
'hr_id_fk' => array( 'totalsType' => '' ),
'hr_asunto' => array( 'totalsType' => '' ),
'hr_valor' => array( 'totalsType' => '' ),
'hr_fechaingreso' => array( 'totalsType' => '' ),
'sys_user' => array( 'totalsType' => '' ),
'sysdate' => array( 'totalsType' => '' ),
'not_user' => array( 'totalsType' => '' ),
'not_date' => array( 'totalsType' => '' ),
'not_mail' => array( 'totalsType' => '' ),
'not_msg' => array( 'totalsType' => '' ),
'evento_type_id_fk' => array( 'totalsType' => '' ),
'user_from' => array( 'totalsType' => '' ),
'last_act_user' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'hr_id_fk',
'hr_asunto',
'hr_valor',
'hr_fechaingreso',
'sys_user',
'sysdate',
'not_user',
'not_date',
'not_mail',
'not_msg',
'evento_type_id_fk',
'user_from',
'last_act_user' ),
'exportFields' => array( 'hr_id_fk',
'hr_asunto',
'hr_valor',
'hr_fechaingreso',
'sys_user',
'sysdate',
'not_user',
'not_date',
'not_mail',
'not_msg',
'evento_type_id_fk',
'user_from',
'last_act_user' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'hr_id_fk' => array( 'export_field1' ),
'hr_asunto' => array( 'export_field2' ),
'hr_valor' => array( 'export_field3' ),
'hr_fechaingreso' => array( 'export_field4' ),
'sys_user' => array( 'export_field5' ),
'sysdate' => array( 'export_field6' ),
'not_user' => array( 'export_field7' ),
'not_date' => array( 'export_field8' ),
'not_mail' => array( 'export_field9' ),
'not_msg' => array( 'export_field10' ),
'evento_type_id_fk' => array( 'export_field11' ),
'user_from' => array( 'export_field12' ),
'last_act_user' => array( 'export_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field1' => array( 'field' => 'hr_id_fk',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'hr_asunto',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'hr_valor',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'hr_fechaingreso',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'sys_user',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'sysdate',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'not_user',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'not_date',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'not_mail',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'not_msg',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'evento_type_id_fk',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'user_from',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'last_act_user',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>