<?php

    class table {
        private $tr = array();
        private $td = array();
        private $class;

        public function __construct($tr, $td, $class) {
            $this->tr = $tr;
            $this->td = $td;
            $this->class = $class;
        }

        
    }