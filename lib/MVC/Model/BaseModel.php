<?php

namespace lib\MVC\Model;

abstract class BaseModel {
    public static function getDB() {
        return new \PDO("mysql:host=localhost;dbname=framework", "userframework", "password");
    }
    public function save(){
        
    }
    
    public function selectAll(){
        
    }
    
    public function selectOne(){
       echo 'fuck you';
    }
    
    public function selectByPk(){
        
    }
}