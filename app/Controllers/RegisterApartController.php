<?php

namespace App\Controllers;
use App\Models\ApartModel;
use CodeIgniter\Exceptions\AlertError;

class RegisterApartController extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		$session = \Config\Services::session();
		$rol = $session->get('rol');
		if($session->get('username') == "" || $rol == "Invitado"){
			echo "No tiene permisos para acceder";
		} else {
			$dataRol = [
				"rol" => $rol
			];
			echo view('layouts/header', $dataRol);
			echo view('register_apart_view');
			echo view('layouts/footer');
		}
	}

	public function addApart(){
		
		$apartModel = new ApartModel();
		$request = \Config\Services::request();
		
		$city = $request->getPost('cityApart');
		$country = $request->getPost ('countryApart');
		$address = $request->getPost('address');
		$ubication = $request->getPost('ubication');
		$rooms = $request->getPost('rooms');
		$value = $request->getPost('value');
		$image = $request->getFile('image');
		$featured = $request->getFile('featured');
		$review = $request->getPost('review');
		$imageRandom = $image->getRandomName(); 
		$featuredRandom = $featured->getRandomName();
		$imageUrl = ""; 
		$featuredUrl = "";

		if(strlen($city) > 30 || strlen($city) < 3){
			return redirect()->to(base_url().'/registerApart');
		} else if(strlen($country) > 30 || strlen($country) < 3) {
			return redirect()->to(base_url().'/registerApart');
		} else if(strlen($address) > 50 || strlen($address) < 4){
			return redirect()->to(base_url().'/registerApart');
		} else if(strlen($ubication) > 30 || strlen($ubication) < 4){
			return redirect()->to(base_url().'/registerApart');
		} else if(strlen($rooms) > 3 || strlen($rooms) < 1){
			return redirect()->to(base_url().'/registerApart');
		} else if(strlen($value) > 15 || strlen($value) < 3){
			return redirect()->to(base_url().'/registerApart');
		} else if(strlen($review) > 200 || strlen($review) < 5){
			return redirect()->to(base_url().'/registerApart');
		} else if(($image->isValid() && !$image->hasMoved()) && ($featured->isValid() && !$featured->hasMoved())){
			$image->move('./uploads/images/',$imageRandom);
			$featured->move('./uploads/images/',$featuredRandom);
			$imageUrl = base_url()."/uploads/images/".$imageRandom;
			$featuredUrl = base_url()."/uploads/images/".$featuredRandom;
			$apartModel->addAparts($city, $country, $address, $ubication, $rooms, $value, $imageUrl, $featuredUrl, $review);
			return redirect()->to(base_url().'/aparts')->with('status','Apartamento Registrado Exitosamente');
		} else {
			return redirect()->to(base_url().'/registerApart');
		}
	}
}