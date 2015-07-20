<?php

require_once 'Html5.class.php';
class Page extends Html5 {
	
	const COMMONJS = "./script/common.js";
	const GALLERIJS = "./script/galleri.js";
        const JQUERY = "./script/jquery-2.1.4.min.js";
	const COMMONCSS = "./style/common.css";
        const BOOTSTRAPCSS = "./bootstrap/css/bootstrap.min.css";
        const BOOTSTRAPJS = "./bootstrap/js/bootstrap.min.js";
        const MENU = "menu.php";

	public function __construct($title, $lang = 'da') {
		parent::__construct($title, $lang);
	}
	
	public function getTop() {
		$this->top = parent::getTop();
                $this->top .= parent::getLink($this::BOOTSTRAPCSS);
                $this->top .= parent::getLink($this::COMMONCSS);
                //$this->top .= parent::getScript($this::JQUERY);
                //$this->top .= parent::getScript($this::BOOTSTRAPJS);
                //$this->top .= parent::getScript($this::COMMONJS);
                $this->top .= "         <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>".PHP_EOL;
                
		return $this->top;
	}
        
        public function getNeck() {
            $this->neck = parent::getNeck();
            $this->neck .= '<div class="container">';
            $this->neck .= '<div class="row">';
            $this->neck .= '<div class="col-md-10 col-md-offset-1">';
            return $this->neck;
            
        }

        public function getFoot() {
            $this->foot = "</div></div></div>";
            $this->foot .= parent::getFoot();
            return $this->foot;
        }
        
        public function addToIncludePath($path){
            $newIncludePath = sprintf("%s%s%s", get_include_path(), PATH_SEPARATOR, $path);
            return set_include_path($newIncludePath);
        }
        
        public function prtCommonScripts(){
            parent::prtScript($this::JQUERY);
            parent::prtScript($this::BOOTSTRAPJS);
            parent::prtScript($this::COMMONJS);
        }
	
}
