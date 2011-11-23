<?php
class ConfigManager {

	public $Values = Array(
			"Theme" => "basic",
		//Page variables {$SiteName$} and etc.
			"PageVariables" => Array(
					"SiteName" => "Idocio.us",
					"PageTitle" => "Home"
			)
	);
	public function Register($key, $value) {
		$this -> Values[$key] = $value;
	}

}

function SetConfig() {
	global $Config;
	$Config = new ConfigManager();
}

SetConfig();
?>