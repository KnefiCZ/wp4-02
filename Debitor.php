<?php

    class Debitor 
    {
        private $id;
        private $firstname;
        private $lastname;
        private $description;
        private $amount;
        private $deadline;

            public function __construct($id, $firstname, $lastname, $description, $amount, $deadline) {
               
                $this->id = $id;
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->description = $description;
                $this->amount = $amount;
                $this->deadline = $deadline;
            
            }

            public function getId()
            {
                return $this->id;
            }

            public function getFirstName()
            {
                return $this->firstname;
            }

            public function getLastName()
            {
                return $this->lastname;
            }

            public function getDescription()
            {
                return $this->description;
            }

            public function getAmount()
            {
                return $this->amount;
            }

            public function getDeadline()
            {
                return $this->deadline;
            }
    }
 