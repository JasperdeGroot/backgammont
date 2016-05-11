<?php

/**
 * Description of Voorbeeld.
 * CamelCase conventie: naam van Class (blauwdruk van object) begint met hoofdletter
 *
 * @author beheerder
 */
class Voorbeeld {

    public $waarde;
    public $a;

    public function __construct() {
        $this->waarde = 0;
        $this->a = array();
        return $this;   // this object, (new Voorbeeld())->add(...)
    }

    public function add($w) {
        $this->a[] = $w;
        return $this;
    }

    public function get($nr) {
        try {   // oei, wat als je nu een foute index geeft?
            return $this->a[$nr];
        } catch (Exception $e) {
            $mx = count($this->a) - 1;
            throw new Exception("$nr out of bounds, max : $mx");
        }
    }

    /**
     * 
     * @param mixed  $v : indien waarde, store
     * @return mixed    : altijd wordt de waarde geretourneerd.
     */
    public function waarde($v = null) {
        if ($v != null) { // waarde dus veranderen
            $this->waarde = $v;
        }
        return $this->waarde;   // altijd waarde
    }

}
