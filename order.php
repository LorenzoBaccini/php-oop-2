<?php

    class Order
    {
        public $address;
        public $date;
        public $quantity;
        protected $price;

        function __construct($_address, $_date, $_quantity, $_price)
        {
            $this->address = $_address;
            $this->date = $_date;
            $this->quantity = $_quantity;
            $this->price = $_price;
        }
    }