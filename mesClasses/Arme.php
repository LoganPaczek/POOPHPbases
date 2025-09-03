<?php

class Arme{
        // Attributs
        private string $name;
        private string $image;
        private string $description;


        // Constructeur
        public function __construct(string $name, string $image, string $description){
            $this->name = $name;
            $this->image = $image;
            $this->description = $description;
        }


        // Accesseur
        public function getName(){
            return $this->name;
        }

        public function getImage(){
            return $this->image;
        }

        public function getDescription(){
            return $this->description;
        }
    }


    
    


?>
