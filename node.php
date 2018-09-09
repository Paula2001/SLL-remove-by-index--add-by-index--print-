<?php
    class Node{
        public $next = null ;
        public $value  ;

        public function __construct($val,$n)
        {
            $this->next = $n ;
            $this->value = $val ;
        }

    }


?>