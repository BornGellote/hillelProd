<?php

namespace Hillel\Models;
use \Hillel\Models\Model();

final class User extends Model()
{
    protected $id;
    protected $name;
    protected $email;

    public function __construct($id, $name, $email) 
    {
        $this->id = $id;   
        $this->name = $name;
        $this->email = $email;   
    }

    
}


// $user = User::find(1);
// var_dump($user); // SELECT * FROM user WHERE id = :id

// $user->name = 'John';
// $result = $user->save();
// var_dump($result); // UPDATE user SET name = :name, email = 'email' WHERE id = :id 

// $result = $user->delete();
// var_dump($result); // DELETE user WHERE id = :id

// $user = new User;
// $user->name = 'John';
// $user->email = 'some@gmail.com';
// $result = $user->save();
// var_dump($result); // INSERT INTO user (id, name, email) VALUES (:id, :name, :email)