<?php

    interface BaseHuman{
        public function eat();
        public function walk();
        public function read();
    }
    interface Job{
        public function getJob();
    }
    class Human implements BaseHuman, Job{
        public function eat(){
            echo "We can eating";
        }
        public function walk(){

        }
        public function read(){

        }
        public function getJob(){
            echo "Hey, I get a new Job";
        }
    }
    interface BaseAnimal extends BaseHuman{
        function write();
    }
    class Animal implements BaseAnimal{
        public function eat(){
            echo "We can eating";
        }
        public function walk(){

        }
        public function read(){

        }
        function write(){
            
        }
    }
    $A = new Animal();
    $human = new Human();
    $human->getJob();
