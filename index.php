<?php
    include_once "linkedlist.php";
    $s1 = new Linkedlist(4);
    $s1->_add(1,0);
    $s1->_add(2,1);
    $s1->_add(3,2);
    $s1->_add(4,1);
    $s1->_add(6,0);
    $s1->_print();
    echo  "print after remove"."<br>" ;
    $s1->_remove(4);

    $s1->_print();


    //$s1->_print();


?>