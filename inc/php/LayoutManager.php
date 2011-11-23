<?php
class LayoutManager {
	public $Pages = Array(
			"" => "home.html",
			"home" => "home.html"
	);
	public $PageVars = Array();
	private function ParseHTML($contents) {
		foreach ($PageVars as $key => $value) {
			$contents = str_replace('{$' . $key . '$}', $value, $contents);
		}
		return $contents;
	}

	public function RegisterPageVar($key, $value) {
		$PageVars[$key] = $value;
	}

	public function GeneratePage($Page) {
		$this -> PageVars = $Config -> Values['PageVariables'];
		$themeDir = "inc/theme/" . $Config -> Values['Theme'];
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