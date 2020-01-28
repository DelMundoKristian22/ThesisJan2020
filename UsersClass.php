<?php

require_once "./vendor/autoload.php";

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class UsersClass {

    protected $database;
    protected $dbname = 'thesisjan2020';

    public function __construct(){
 
        $acc = ServiceAccount::fromJsonFile('C:\SourceCodeJan2020\db\thesisjan2020-659d5293495d.json');
        $firebase = (new Factory)->withServiceAccount($acc)->create();
        
        $this->database = $firebase->getDatabase();

    }

    public function get(int $userID){

        if(empty($userID) || !isset($userID)){
            return FALSE;
        }
        if($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
        }
        else{
            return FALSE;

        }

    }

    public function insert(array $data){

        if(empty($data) || !isset($data)){
            return FALSE;
        }

        foreach($data as $key -> $value){
            $this->database-getReference($this->dbname)->getChild($this->dbname)->getChild($key)->set($value);
        }

        return TRUE;


    }

    public function delete(int $userID){

        if(empty($userID) || !isset($userID)){
            return FALSE;
        }

        if($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            $this->database->getReference($this->dbname)->getChild($userID)->remove();
            return TRUE;
        }
        else{
            return FALSE;

        }

      
    }

}

    $users = new UsersClass();

    var_dump($users->insert([

        '1' => 'jj',
        '2' => 'tho',
        '3' => 'big'
    ]));





?>