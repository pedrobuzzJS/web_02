<?php

    class body {

        private $array_tags = array();

        public function __construct($lang) {
            $this->lang = $lang;
        }

        public function arrayElements($array) {
            $this->array_tags[] = $array;
        }

        public function __toString() {

            $body = '<body class="'.$this->class.'">';

            foreach ($this->liarray_tags as $tags) {
                $body .= $tags;
            }
            
            $body .= "</body>";

            return $body;
        }
    }