<?php

class Arme{
        // Attributs
        private int $id;
        private string $name;
        private string $image;
        private string $description;


        // Constructeur
        public function __construct(){
            $num_args = func_num_args();
            echo $num_args;
            switch ($num_args){
                case 0:
                    break;
                case 3:
                    $this->name = func_get_arg(0);
                    $this->image = func_get_arg(1);
                    $this->description = func_get_arg(2);
                    break;
                case 4:
                    $this->id = func_get_arg(0);
                    $this->name = func_get_arg(1);
                    $this->image = func_get_arg(2);
                    $this->description = func_get_arg(3);
                    break;
            }
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
