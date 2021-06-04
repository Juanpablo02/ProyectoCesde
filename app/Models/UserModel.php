<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function addUser($name,$email,$country,$city,$phone,$password,$rol){
        $sentenceSql = $this->db->query("INSERT INTO user (name,email,country,city,phone,password,rol) 
                                        VALUE ('$name','$email','$country','$city','$phone','$password','$rol')");
    }

    public function validationUser($email, $password){
        $user = $this->db->query("SELECT * FROM user WHERE email='$email' AND password='$password'");
        return $user->getResult();
    }
}