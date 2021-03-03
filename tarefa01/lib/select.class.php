<?php

class select {

    private $for;
    private $id;
    private $name;
    private $value;
    private $class;

    public function __construct($for, $id, $name, $value, $class) {
        $this->for = $for;
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->class = $class;
    }

    public function __toString() {
        $select = '<select name="'.$this->name.'" id="'.$this->id.'" class="'.$this->class.'">';

        foreach ($this->value as $campo) {
            $select .= '<option value="'.$campo.'">'.$campo.'</option>';
        }

        $select .= '</select>';

        return $select;
    }

}