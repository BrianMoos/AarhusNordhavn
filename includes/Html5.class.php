<?php

class Html5 {
	const DOCT   	= '<!DOCTYPE html>';
	const HTML      = '<html lang="%s" xml:lang="%s">';
	const CHARSET   = '<meta charset="utf-8" />';
	const VIEWPORT  = '<meta name="viewport" content="width=device-width" />';
        const NOINDEX  = '<meta name="robots" content="nofollow, noindex" />';
	const NECK      = "    </head>\n    <body>\n";
	const FOOT      = "    </body>\n</html>\n";
	const LINK      = '        <link rel="stylesheet" href="%s" />';
	const SCRIPT    = '        <script src="%s"></script>';

	private $title; 
	private $lang;
	private $top;

	public function __construct($title, $lang='da') {
		$this->title = $title;
		$this->lang = $lang;
		$this->createTop();
	}

	private function createTop() {
		$this->top  = "";
		$this->top .= self::DOCT . PHP_EOL;
		$this->top .= self::HTML . PHP_EOL;
		$this->top .= "    <head>" . PHP_EOL;
		$this->top .= "        ".self::CHARSET. PHP_EOL; 
		$this->top .= "        ".self::VIEWPORT. PHP_EOL;
		$this->top .= "        <title>%s</title>" . PHP_EOL;
		$this->top = sprintf($this->top , $this->lang, $this->lang, $this->title);
	}
	
	function getFoot() {
		return self::FOOT;
	}
	
	function getNeck() {
		return self::NECK;
	}
	
	public function getTop() {
		return $this->top;
	}
	
	public function getTitle() {
		return $this->title;
	}
        
        public function noIndex(){
            print(self::NOINDEX.PHP_EOL);
        }
	
	public function getLink($l) {
		$link = sprintf(self::LINK.PHP_EOL, $l);
                return $link;
	}
	
	public function getScript($s) {
		$script = sprintf(self::SCRIPT.PHP_EOL, $s);
                return $script;
	}
        
	public function prtScript($s) {
		printf(self::SCRIPT.PHP_EOL, $s);
	}        
	
}


