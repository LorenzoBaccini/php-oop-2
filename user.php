<?php

    require_once "creditCard.php";

    class User {
        public int $id;
        public string $name;
        public string $surname;
        public int $age;

        function __construct($_id, $_name, $_surname, $_age) {
            $this->id = $_id;
            $this->name = $_name;
            $this->surname = $_surname;
            $this->age = $_age;
        }

        function setId($_id) {
            $this->id = $_id;
        }

        function getId() {
            return $this->id;
        }

        function setName($_name) {
            $this->name = $_name;
        }

        function getName() {
            return $this->name;
        }

        function setSurname($_surname) {
            $this->surname = $_surname;
        }

        function getSurname() {
            return $this->surname;
        }

        function setAge($_age) {
            $this->age = $_age;
        }

        function getAge() {
            return $this->age;
        }
    }

    class UserPremium extends User {
        public $creditCard;
        public $level = 1;
        public $discount;

        public function setLevel($_level) {
            $this->level = $_level;
        }

        public function getLevel() {
            return $this->level;
        }

        public function setSconto() {
            if ($this->level = 1) {
                $this->discount = 20;
            }
            else {
                $this->discount = 0;
            }
        }

        public function insertCreditCard(CreditCard $card) {
            if ($card->dataScadenza < new DateTime()) {
                throw new Exception ("La carta è scaduta");
            }
            else {
                $this->creditCard = $card;
            }
        }
    }
