<?php

namespace App\Controllers;
use App\Models\UserModel;

class RegisterController extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		$rol = $session->get('rol');
		$dataRol = [
			"rol" => $rol
		];
		echo view('layouts/header',$dataRol);
		echo view('register_view');
		echo view('layouts/footer');
	}

	public function addUser(){

		$request = \Config\Services::request();
		$userModel = new UserModel();
		
		$name = $request->getPost('name');
		$email = $request->getPost('email');
		$country = $request->getPost('country');
		$city = $request->getPost('city');
		$phone = $request->getPost('phone');
		$password = $request->getPost('password');
		$passwordConfirm = $request->getPost('confirmPassword');
		$rol = $request->getPost('rol');

		if(strlen($name) > 30 || strlen($name) < 5){
			return redirect()->to(base_url().'/register');
		} else if(strlen($email) > 100 || strlen($email) < 5){
			return redirect()->to(base_url().'/register');
		} else if(strlen($country) > 30 || strlen($country) < 4){
			return redirect()->to(base_url().'/register');
		} else if(strlen($city) > 30 || strlen($city) < 4){
			return redirect()->to(base_url().'/register');
		} else if(strlen($phone) > 10 || strlen($phone) < 7){
			return redirect()->to(base_url().'/register');
		} else if(strlen($password) > 15 || strlen($password) < 5){
			return redirect()->to(base_url().'/register');
		} else if($passwordConfirm != $password){
			return redirect()->to(base_url().'/register');
		} else if($rol == ""){
			return redirect()->to(base_url().'/register');
		} else {
			$userModel -> addUser($name,$email,$country,$city,$phone,$password,$rol);
			return redirect()->to(base_url().'/login')->with('status','Registro Exitoso');
		}
	}
}