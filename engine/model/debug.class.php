<?php

/**
 * debug short summary.
 *
 * debug description.
 *
 * @version 1.0
 * @author Diego
 */
 
class debug
{
 
    public $option;
    
    function debug ($debug = false) {
        $this->option = $debug;
    }

    function start() {
        if($this->option)
            return var_dump(debug_backtrace());
        else
            return false;
    }
    
    function all() {
        if($this->option)
            return debug_print_backtrace();
        else
            return false;
    }
}
