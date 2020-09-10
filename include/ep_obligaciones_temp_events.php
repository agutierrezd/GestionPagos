<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_ep_obligaciones_temp  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterImport"]=true;

		$this->events["BeforeImport"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After Import Finished
function AfterImport($count, $skipCount, &$pageObject)
{

		$sql = DB::prepareSQL("UPDATE
sep2.ep_obligaciones_temp
SET
sep2.ep_obligaciones_temp.`Valor Actual` = REPLACE(sep2.ep_obligaciones_temp.`Valor Actual`,',',''),
sep2.ep_obligaciones_temp.`Valor Deducciones` = REPLACE(sep2.ep_obligaciones_temp.`Valor Deducciones`,',',''),
sep2.ep_obligaciones_temp.`Valor Oblig no Orden` = REPLACE(sep2.ep_obligaciones_temp.`Valor Oblig no Orden`,',',''),
sep2.ep_obligaciones_temp.`Valor Inicial`= REPLACE(sep2.ep_obligaciones_temp.`Valor Inicial`,',',''),
sep2.ep_obligaciones_temp.`Valor Operaciones` = REPLACE(sep2.ep_obligaciones_temp.`Valor Operaciones`,',',''),
sep2.ep_obligaciones_temp.`Valor Actual1` = REPLACE(sep2.ep_obligaciones_temp.`Valor Actual1`,',',''),
sep2.ep_obligaciones_temp.`Saldo por Utilizar` = REPLACE(sep2.ep_obligaciones_temp.`Saldo por Utilizar`,',','');");
DB::Exec( $sql );

$sql = DB::prepareSQL("INSERT IGNORE INTO sep2.ep_obligaciones (
	sep2.ep_obligaciones.`Numero Documento`,
	sep2.ep_obligaciones.`Fecha de Registro`,
	sep2.ep_obligaciones.`Fecha de Creacion`,
	sep2.ep_obligaciones.Estado,
	sep2.ep_obligaciones.`Valor Actual`,
	sep2.ep_obligaciones.`Valor Deducciones`,
	sep2.ep_obligaciones.`Valor Oblig NO Orden`,
	sep2.ep_obligaciones.`Tipo Identificacion`,
	sep2.ep_obligaciones.Identificacion,
	sep2.ep_obligaciones.`Nombre Razon Social`,
	sep2.ep_obligaciones.`Medio de Pago`,
	sep2.ep_obligaciones.`Tipo Cuenta`,
	sep2.ep_obligaciones.`Numero Cuenta`,
	sep2.ep_obligaciones.`Estado Cuenta`,
	sep2.ep_obligaciones.`Entidad Nit`,
	sep2.ep_obligaciones.`Entidad Descripcion`,
	sep2.ep_obligaciones.Dependencia,
	sep2.ep_obligaciones.`Dependencia Descripcion`,
	sep2.ep_obligaciones.Rubro,
	sep2.ep_obligaciones.Descripcion,
	sep2.ep_obligaciones.`Valor Inicial`,
	sep2.ep_obligaciones.`Valor Operaciones`,
	sep2.ep_obligaciones.`Valor Actual1`,
	sep2.ep_obligaciones.`Saldo por Utilizar`,
	sep2.ep_obligaciones.Fuente,
	sep2.ep_obligaciones.Situacion,
	sep2.ep_obligaciones.Recurso,
	sep2.ep_obligaciones.Concepto,
	sep2.ep_obligaciones.`Solicitud CDP`,
	sep2.ep_obligaciones.CDP,
	sep2.ep_obligaciones.Compromisos,
	sep2.ep_obligaciones.`Cuentas por Pagar`,
	sep2.ep_obligaciones.`Fecha Cuentas por Pagar`,
	sep2.ep_obligaciones.Obligaciones,
	sep2.ep_obligaciones.`Ordenes de Pago`,
	sep2.ep_obligaciones.Reintegros,
	sep2.ep_obligaciones.`Fecha Doc Soporte Compromiso`,
	sep2.ep_obligaciones.`Tipo Doc Soporte Compromiso`,
	sep2.ep_obligaciones.`Num Doc Soporte Compromiso`,
	sep2.ep_obligaciones.`Objeto del Compromiso` 
) SELECT
sep2.ep_obligaciones_temp.`Numero Documento`,
sep2.ep_obligaciones_temp.`Fecha de Registro`,
sep2.ep_obligaciones_temp.`Fecha de Creacion`,
sep2.ep_obligaciones_temp.Estado,
sep2.ep_obligaciones_temp.`Valor Actual`,
sep2.ep_obligaciones_temp.`Valor Deducciones`,
sep2.ep_obligaciones_temp.`Valor Oblig NO Orden`,
sep2.ep_obligaciones_temp.`Tipo Identificacion`,
sep2.ep_obligaciones_temp.Identificacion,
sep2.ep_obligaciones_temp.`Nombre Razon Social`,
sep2.ep_obligaciones_temp.`Medio de Pago`,
sep2.ep_obligaciones_temp.`Tipo Cuenta`,
sep2.ep_obligaciones_temp.`Numero Cuenta`,
sep2.ep_obligaciones_temp.`Estado Cuenta`,
sep2.ep_obligaciones_temp.`Entidad Nit`,
sep2.ep_obligaciones_temp.`Entidad Descripcion`,
sep2.ep_obligaciones_temp.Dependencia,
sep2.ep_obligaciones_temp.`Dependencia Descripcion`,
sep2.ep_obligaciones_temp.Rubro,
sep2.ep_obligaciones_temp.Descripcion,
sep2.ep_obligaciones_temp.`Valor Inicial`,
sep2.ep_obligaciones_temp.`Valor Operaciones`,
sep2.ep_obligaciones_temp.`Valor Actual1`,
sep2.ep_obligaciones_temp.`Saldo por Utilizar`,
sep2.ep_obligaciones_temp.Fuente,
sep2.ep_obligaciones_temp.Situacion,
sep2.ep_obligaciones_temp.Recurso,
sep2.ep_obligaciones_temp.Concepto,
sep2.ep_obligaciones_temp.`Solicitud CDP`,
sep2.ep_obligaciones_temp.CDP,
sep2.ep_obligaciones_temp.Compromisos,
sep2.ep_obligaciones_temp.`Cuentas por Pagar`,
sep2.ep_obligaciones_temp.`Fecha Cuentas por Pagar`,
sep2.ep_obligaciones_temp.Obligaciones,
sep2.ep_obligaciones_temp.`Ordenes de Pago`,
sep2.ep_obligaciones_temp.Reintegros,
sep2.ep_obligaciones_temp.`Fecha Doc Soporte Compromiso`,
sep2.ep_obligaciones_temp.`Tipo Doc Soporte Compromiso`,
sep2.ep_obligaciones_temp.`Num Doc Soporte Compromiso`,
sep2.ep_obligaciones_temp.`Objeto del Compromiso` 
FROM
	sep2.ep_obligaciones_temp;");
DB::Exec( $sql );
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterImport

		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Import Started
function BeforeImport(&$pageObject, &$message)
{

		$sql = DB::prepareSQL("TRUNCATE TABLE sep2.ep_obligaciones_temp;");
DB::Exec( $sql );

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeImport

		
		
		
		
		
		



}
?>
