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


        // Modificateur
        public function setName(string $newName){
            $this->name = $newName;
        }

        public function setImage(string $newImage){
            $this->image = $newImage;
        }

        public function setDescription(string $newDescription){
            $this->description = $newDescription;
        }



        // Méthode toString
        public function toString(){
            echo "Name : " . $this->getName() . "\n";
            echo "Image : " . $this->getImage() . "\n";
            echo "Description : " . $this->getDescription();
        }
    }


    
    


?>
