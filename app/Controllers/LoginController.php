<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class LoginController extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		$rol = $session->get('rol');
		$dataRol = [
			"rol" => $rol
		];
		echo view('layouts/header',$dataRol);
		echo view('login_view');
		echo view('layouts/footer');
	}

	public function signIn(){
		$request = \Config\Services::request();
		$session = \Config\Services::session();
		$userModel = new UserModel();
		$email = $request->getPost('email');
		$password = $request->getPost('password');
		$user = $userModel->validationUser($email,$password);
		if(count($user) > 0){
			foreach($user as $dato){
				$newdata = [
					'username'  => $dato->name,
					'email'     => $dato->email,
					'phone'     => $dato->phone,
					'country'   => $dato->country,
					'city'      => $dato->city,
					'rol'       => $dato->rol,
					'logged_in' => TRUE
			
				];
			}
		$session->set($newdata);
		return redirect()->to(base_url().'/aparts');
		} else {
			return redirect()->to(base_url().'/login')->with('error','Verifique que el email o la contraseña sean correctos');
		}
	}
}
