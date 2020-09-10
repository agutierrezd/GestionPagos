<?php
class ViewUserControl extends ViewControl
{
	/**
	 * Set to true, if it is custom user control
	 * @var boolean
	 */
	public $userControl;
	
	public function initUserControl()
	{		
	}
	
	/**
	 * Control settings filling
	 */
	public function init()
	{
		$this->userControl = true;
		
		// We need to add this dependencies ViewControl.js - for debug.
		// For build we need to add RunnerAll.js
		//$this->AddJSFile("include/runnerJS/controls/".$this->viewFormat.".js", 'include/runnerJS/viewControls/ViewControl.js');
		
					if($this->container->tName=="hoja_ruta_2020_pn1" && $this->field=="hr_id_qr" && $this->container->pageType=="print")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="hoja_ruta_2020_pn2" && $this->field=="hr_id_qr" && $this->container->pageType=="print")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
		if($this->viewFormat == "ViewQRCode")
		{
			$this->AddJSFile("include/runnerJS/controls/ViewQRCode.js", 'include/runnerJS/viewControls/ViewControl.js');
			$this->getJSControl();
			foreach ($this->settings as $settingName => $settingValue)
				$this->addJSControlSetting($settingName, $settingValue);
		}
	}

	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "")
	{
		return $data[ $this->field ];
	}
	
	/**
	 * Check for need to load the javascript files.
	 * Javascript files for user controls are always loaded.
	 * @return boolean
	 */
	public function neededLoadJSFiles() 
	{
		return true;
	}
	public function getPdfValue(&$data, $keylink = "")
	{
		return "''";
	}

}
?>