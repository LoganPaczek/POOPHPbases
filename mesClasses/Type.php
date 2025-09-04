<?php

class Type{
        // Attributs
        private int $id;
        private string $name;

        // Constructeur
        public function __construct(){
                $this->id = $id;
                $this->name = $name;
            }

        // Accesseur
        public function getName(){
            return $this->name;
        }

        public function getId(){
            return $this->id;
        }

        // Modificateur
        public function setName(string $newName){
            $this->name = $newName;
        }

        public function setId(string $newId){
            $this->id = $newId;
        }
    }
?>
