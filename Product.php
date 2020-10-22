<?php
    class Product
    {
        public $description;
        public $price;

        public function getDetail()
        {
            return "The product {$this->description} costs {$this->price} dollars.";
        }

        public function setDescription($value)
        {
            $this->description = $value;
        }

        public function setPrice($value)
        {
            $this->price = $value;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getPrice()
        {
            return $this->price;
        }
    }

    $desc = new Product;
    $desc->setDescription('Book');
    $desc->setPrice(79);

    echo $desc->getDetail();

?>