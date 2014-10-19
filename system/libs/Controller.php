<?php
/**
 * Description of Controller
 *
 * @author Adem
 */
class Controller {
    protected $load = array();

    public function __construct() {
        $this->load = new load();
    }
}
