<?php

namespace App\Models;

use CodeIgniter\Model;

class ApartModel extends Model
{
    function addAparts($city, $country, $address, $ubication, $rooms, $value, $image, $featured, $review){
        $sentenceSql = $this -> db -> query("INSERT INTO apart (city,country,address,ubication,rooms,value,image,featured,review)
        VALUE ('$city','$country', '$address', '$ubication', '$rooms', '$value', '$image', '$featured', '$review')");
    } 
    
    function readAparts(){
        $sentenceSql = $this -> db -> query("SELECT * FROM apart");
        return $sentenceSql->getResult();
    }

    function readApart($id){
        $sentenceSql= $this -> db -> query("SELECT * FROM apart WHERE id=$id");
        return $sentenceSql->getResult();
    }

    function deleteAparts($id){
        $sentenceSql = $this -> db -> query("DELETE FROM apart WHERE id=$id");
    }

    function updateApartImg($id,$city, $country, $address, $ubication, $rooms, $value, $image, $featured, $review){
        $sentenceSql = $this->db->query("UPDATE apart SET city='$city', country='$country', address='$address', ubication='$ubication',
                rooms='$rooms', value='$value', image='$image', featured='$featured', review='$review' WHERE id = $id");
    }

    function updateApart($id,$city, $country, $address, $ubication, $rooms, $value, $review){
        $sentenceSql = $this->db->query("UPDATE apart SET city='$city', country='$country', address='$address', ubication='$ubication',
                rooms='$rooms', value='$value', review='$review' WHERE id = $id");
    }

    function updateApartImage($id,$city, $country, $address, $ubication, $rooms, $value, $image, $review){
        $sentenceSql = $this->db->query("UPDATE apart SET city='$city', country='$country', address='$address', ubication='$ubication',
                rooms='$rooms', value='$value', image='$image', review='$review' WHERE id = $id");
    }

    function updateApartFeatured($id,$city, $country, $address, $ubication, $rooms, $value, $featured, $review){
        $sentenceSql = $this->db->query("UPDATE apart SET city='$city', country='$country', address='$address', ubication='$ubication',
                rooms='$rooms', value='$value', featured='$featured', review='$review' WHERE id = $id");
    }

}