<?php
    include_once "node.php";
?>
<?php
    class Linkedlist  {
        private $tail = null ;

        public function _add($val,$index){
            $newNode = new Node($val);
            if($index == 0 ){
                $newNode->next = $this->tail ;
                $this->tail = $newNode;
            }else {
                $i = $this->tail;
                for($count = 0;$count < $index - 1;$count++){
                    $i = $i->next ;
                }
                $newNode->next = $i->next ;
                $i->next = $newNode ;

            }


        }
        public function _print(){
            $print_v = $this->tail ;
            while($print_v != null){
                echo $print_v->value ;
                $print_v = $print_v->next ;
            }
        }

    }

?>