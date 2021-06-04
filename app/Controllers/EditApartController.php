<?php

namespace App\Controllers;
use App\Models\ApartModel;
use CodeIgniter\HTTP\Request;

class EditApartController extends BaseController
{
	public function editApart()
	{
		$request = \Config\Services::request();
		$session = \Config\Services::session();
		$rol = $session->get('rol');
		if($session->get('username') == "" || $rol == "Invitado"){
			echo "No tiene permisos para acceder";
		} else {
			$apartModel = new ApartModel();
			$id = $request->getGet('id');
			$resultApart = $apartModel->readApart($id);
			$data = [
				"aparts" => $resultApart
			];
			$dataRol = [
				"rol" => $rol
			];
			echo view('layouts/header', $dataRol);
			echo view('edit_apart_view', $data);
			echo view('layouts/footer');
		}
    }

    public function updateApart(){

		$request = \Config\Services::request();
		$apartModel = new ApartModel();

		$id = $request->getGet('id');
		$city = $request->getPost('cityApart');
		$country = $request->getPost('countryApart');
		$address = $request->getPost('address');
		$ubication = $request->getPost('ubication');
		$rooms = $request->getPost('rooms');
		$value = $request->getPost('value');
		$image = $request->getFile('image');
		$featured = $request->getFile('featured');
		$review = $request->getPost('review');
		$imageUrl = ""; 
		$featuredUrl = "";

		if(strlen($city) > 30 || strlen($city) < 3){
			return redirect()->to(base_url().'/aparts')->with('error','El Apartamento no se Actualizo Correctamente');
		} else if(strlen($country) > 30 || strlen($country) < 3) {
			return redirect()->to(base_url().'/aparts')->with('error','El Apartamento no se Actualizo Correctamente');
		} else if(strlen($address) > 50 || strlen($address) < 4){
			return redirect()->to(base_url().'/aparts')->with('error','El Apartamento no se Actualizo Correctamente');
		} else if(strlen($ubication) > 30 || strlen($ubication) < 4){
			return redirect()->to(base_url().'/aparts')->with('error','El Apartamento no se Actualizo Correctamente');
		} else if(strlen($rooms) > 3 || strlen($rooms) < 1){
			return redirect()->to(base_url().'/aparts')->with('error','El Apartamento no se Actualizo Correctamente');
		} else if(strlen($value) > 15 || strlen($value) < 3){
			return redirect()->to(base_url().'/aparts')->with('error','El Apartamento no se Actualizo Correctamente');
		} else if(strlen($review) > 200 || strlen($review) < 5){
			return redirect()->to(base_url().'/aparts')->with('error','El Apartamento no se Actualizo Correctamente');
		} else if($image->isValid() && !$image->hasMoved()){
			if($featured->isValid() && !$featured->hasMoved()){
				$imageRandom = $image->getRandomName(); 
				$featuredRandom = $featured->getRandomName();
				$image->move('./uploads/images/',$imageRandom);
				$featured->move('./uploads/images/',$featuredRandom);
				$imageUrl = base_url()."/uploads/images/".$imageRandom;
				$featuredUrl = base_url()."/uploads/images/".$featuredRandom;
				$apartModel -> updateApartImg($id,$city, $country, $address, $ubication, $rooms, $value, $imageUrl, $featuredUrl, $review);
				return redirect()->to('/aparts')->with('status','El Apartamento se Actualizo Correctamente');
			} else {
				$imageRandom = $image->getRandomName(); 
				$image->move('./uploads/images/',$imageRandom);
				$imageUrl = base_url()."/uploads/images/".$imageRandom;
				$apartModel -> updateApartImage($id,$city, $country, $address, $ubication, $rooms, $value, $imageUrl, $review);
				return redirect()->to('/aparts')->with('status','El Apartamento se Actualizo Correctamente');
			}
		} else if($featured->isValid() && !$featured->hasMoved()){
			if($image->isValid() && !$image->hasMoved()){
				$imageRandom = $image->getRandomName(); 
				$featuredRandom = $featured->getRandomName();
				$image->move('./uploads/images/',$imageRandom);
				$featured->move('./uploads/images/',$featuredRandom);
				$imageUrl = base_url()."/uploads/images/".$imageRandom;
				$featuredUrl = base_url()."/uploads/images/".$featuredRandom;
				$apartModel -> updateApartImg($id,$city, $country, $address, $ubication, $rooms, $value, $imageUrl, $featuredUrl, $review);
				return redirect()->to('/aparts')->with('status','El Apartamento se Actualizo Correctamente');
			} else {
				$featuredRandom = $featured->getRandomName(); 
				$featured->move('./uploads/images/',$featuredRandom);
				$featuredUrl = base_url()."/uploads/images/".$featuredRandom;
				$apartModel -> updateApartFeatured($id,$city, $country, $address, $ubication, $rooms, $value, $featuredUrl, $review);
				return redirect()->to('/aparts')->with('status','El Apartamento se Actualizo Correctamente');
			}
		} else {
			$apartModel -> updateApart($id,$city, $country, $address, $ubication, $rooms, $value, $review);
			return redirect()->to('/aparts')->with('status','El Apartamento se Actualizo Correctamente');
		}
	}
}