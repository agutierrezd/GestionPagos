
Runner.pages.PageSettings.addPageEvent('hoja_ruta_2020_pn',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){this.on('beforeSave',function(formObj,fieldControlsArr,pageObj){var details=pageObj.getDetailsPage('hoja_ruta_2020_files');allRecords=details.getAllRecords();if(allRecords.length<=2){alert('Pestaña anexos: Adjunte documentos soporte requeridos para iniciar el trámite para pago, mínimo 3 documentos ejemplo: (INFORME DE ACTIVIDADES,CERTIFICACIÓN DE SUPERVISIÓN PARA PAGO,LISTA DE CHEQUEO RADICACIÓN DE CUENTAS)');Runner.delDisabledClass(pageObj.saveButton);return false;}
else{return true;}});});