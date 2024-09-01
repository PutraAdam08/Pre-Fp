<?php
    abstract class smartphone{
        private string $brand;
        private string $name;
        private int $stock;
        private int $price;
        
        public function __construct(string $brand, string $name, int $stock, int $price){
            $this->brand = $brand;
            $this->name = $name;
            $this->stock = $stock;
            $this->price = $price;
        }

        public function getBrand() : string {
            return $this->brand;
        }

        public function getName() : string {
            return $this->name;
        }

        public function getPrice() : int {
            return $this->price;
        }

        public function getStock() : int {
            return $this->stock;
        }
    }
?>