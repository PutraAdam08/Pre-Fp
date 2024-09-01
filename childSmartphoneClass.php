<?php
    include 'smartphoneClass.php';

    abstract class xiomay extends smartphone {
        private string $name;
        private int $stock;
        private int $price;
        public function __construct() {
            parent::__construct('xiomay', '', 0, 0);
            parent::__construct('xiomay', $name, $price, $stock);
        }

        public function setName($name) : string {
            $this->name;
        }

        public function setPrice($price) : int {
            $this->price;
        }

        public function setStock($stock) : int {
            $this->stock;
        }
    }

    class remi extends smartphone{
        public function __construct() {
            parent::__construct('xiomay', 'remi', 0, 0);
        }
        
    }
?>