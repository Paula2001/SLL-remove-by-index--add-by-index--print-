<?php
    include_once "node.php";
?>
<?php
    class Linkedlist{
        private $head = null ;
        public function _add($v){
            $this->head = new Node($v ,$this->head);
        }
        public function _print(){
            $init = $this->head ;
            while($init != null){
                echo $init->value ;
                $init = $init->next ;
            }
        }
    }

?>