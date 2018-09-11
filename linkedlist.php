<?php
    include_once "node.php";
?>
<?php
    class Linkedlist
    {
        private $tail = null;

        public function _add($val, $index)
        {
            $newNode = new Node($val);
            if ($index == 0) {
                $newNode->next = $this->tail;
                $this->tail = $newNode;
            } else {
                $i = $this->tail;
                for ($count = 0; $count < $index - 1; $count++) {
                    $i = $i->next;
                }
                $newNode->next = $i->next;
                $i->next = $newNode;
            }
        }

        public function _print()
        {
            $i = $this->tail;
            while ($i != null) {
                echo $i->value;
                echo '<br>' ;
                $i = $i->next;
            }
        }

        public function _remove($index)
        {
            $i = $this->tail;
            $x = $this->tail;
            if ($index == 0) {
                $this->tail = $i->next;
            } else {
                for ($count = 0; $count < $index - 1; $count++) {
                    $i = $i->next;
                }

                $x = $i->next;
                $i->next = $x->next;
            }

        }
    }
?>