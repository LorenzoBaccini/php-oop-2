<?php 

    class Product {
        public $code;
        public $name;
        public $description;
        public $price;
        public $type;

        function __construct($_code, $_name, $_description, $_price, $_type) {
            $this->code = $_code;
            $this->name = $_name;
            $this->description= $_description;
            $this->price = $_price;
            $this->type = $_type;
        }

        function setaCode($_code) {
            $this->code = $_code;
        }

        function getCode() {
            return $this->code;
        }

        function setName($_name) {
            $this->name = $_name;
        }

        function getName() {
            return $this->name;
        }

        function setDescription($_description) {
            $this->description = $_description;
        }

        function getDescription() {
            return $this->description;
        }

        function setPrice($_price) {
            $this->price = $_price;
        }

        function getPrice() {
            return $this->price;
        }

        function setType($_type) {
            $this->type = $_type;
        }

        function getType() {
            return $this->type;
        }
    }