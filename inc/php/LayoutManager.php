<?php
class LayoutManager {
	public $Pages = Array(
			"" => "home.html",
			"home" => "home.html"
	);
	public $PageVars = Array();
	private function ParseHTML($contents) {
		foreach ($this->PageVars as $key => $value) {
			$contents = str_replace('{$' . $key . '$}', $value, $contents);
		}
		return $contents;
	}

	public function RegisterPageVar($key, $value) {
		$PageVars[$key] = $value;
	}

	public function GeneratePage($Contents, $Config, $PageVariables) {
		$this -> PageVars = $PageVariables;
		$themeDir = "inc/theme/" . $Config["Theme"];
		$this -> PageVars['PageContents'] = $Contents;
		$layout = file_get_contents($themeDir . "/layout.html");
		$layout = $this -> ParseHTML($layout);
		echo $layout;
	}

}

function SetLayout() {
	global $Layout;
	$Layout = new LayoutManager();
}

SetLayout();
?>