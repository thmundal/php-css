<?php

Class Css {
	private $files = [];
	private $data;
	public function __construct() {
	}

	public function add($file) {
		$this->files[] = $file;
		return $this;
	}

	public function compile() {
		$this->data = "";
		foreach($this->files as $file) {
			$this->data .= file_get_contents($file);
		}

		return $this;
	}

	public function save() {
		if($this->data === NULL)
			throw new Exception("No CSS data to save");

        if(session_status() == PHP_SESSION_NONE)
            session_start();

        $_SESSION["CSS_DATA"] = $this->data;
		return $this;
	}

	public function load() {
        if(session_status() == PHP_SESSION_NONE)
            session_start();

		$this->data = $_SESSION["CSS_DATA"];
		return $this;
	}

	public function dump() {
		echo $this->data;
		return $this;
	}
}

?>