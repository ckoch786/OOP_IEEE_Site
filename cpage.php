<?php
    class cpage {
        private $title;
        private $content;
        
        public function __construct() {
            $this->title = $title;
        }
        
        public function __destruct() {
            //clean up here;
        }
        
        public function render() {
            echo "<H1>{$this->title}</H1>";
            echo $this->content;
        } 
        
        public function setContent($content) {
            $this->content = $content;
        }
    }
?>