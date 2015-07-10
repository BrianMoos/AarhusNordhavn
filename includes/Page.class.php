<?php

require_once 'Html5.class.php';
class Page extends Html5 {
	
	const MAILJS = "./script/email.js";
	const COMMONJS = "./script/common.js";
	const GALLERIJS = "./script/galleri.js";
        const JQUERY = "./script/jquery-2.1.4.min.js";
	const COMMONCSS = "./style/common.css";
        const BOOTSTRAPCSS = "./bootstrap/css/bootstrap.min.css";
        const BOOTSTRAPJS = "./bootstrap/js/bootstrap.min.js";
        const FORMSCSS = "./style/forms.css";
        const MENU = "menu.php";

	public function __construct($title, $lang = 'da') {
		parent::__construct($title, $lang);
	}
	
	public function getTop() {
		$this->pageName = pathinfo($_SERVER['PHP_SELF']);
		$this->pageStyle = sprintf("	<style> #%s {color: #0bb9ff;}</style>%s", $this->pageName['filename'], PHP_EOL);
		$this->top = parent::getTop();
                $this->top .= parent::getLink($this::COMMONCSS);
                $this->top .= parent::getLink($this::BOOTSTRAPCSS);
                $this->top .= parent::getScript($this::COMMONJS);
                //$this->top .= parent::getScript($this::JQUERY);
                //$this->top .= parent::getScript($this::BOOTSTRAPJS);
		$this->top .= $this->pageStyle;
                $this->top .= "         <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>".PHP_EOL;
                
		return $this->top;
	}
        
        public function addToIncludePath($path){
            $newIncludePath = sprintf("%s%s%s", get_include_path(), PATH_SEPARATOR, $path);
            return set_include_path($newIncludePath);
        }
	
}
