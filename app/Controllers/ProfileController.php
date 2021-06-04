<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		if($session->get('username') == ""){
			echo "No tiene permisos para acceder";
		} else {
			$name = $session->get('username');
			$email = $session->get('email');
			$phone = $session->get('phone');
			$city = $session->get('city');
			$country = $session->get('country');
			$rol = $session->get('rol');
			$data = [
				"name" => $name,
				"email" => $email,
				"phone" => $phone,
				"city" => $city,
				"country" => $country,
				"rol" => $rol
			];
			echo view('layouts/header',$data);
			echo view('profile_view',$data);
			echo view('layouts/footer');
		}
	}

	public function signOut(){
		$session = \Config\Services::session();
		$session->destroy();
		return redirect()->to(base_url().'/login');
	}
}