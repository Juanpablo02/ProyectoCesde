<?php

namespace App\Controllers;
use App\Models\ApartModel;
use CodeIgniter\HTTP\Request;

class ApartController extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		if($session->get('username') == ""){
			echo "No tiene permisos para acceder";
		} else {
			$apart = new ApartModel();
			$resultApart = $apart -> readAparts();
			$rol = $session->get('rol');
			$data = [
				"aparts" => $resultApart
					];
			$dataRol = [
				"rol" => $rol
			];
			echo view('layouts/header', $dataRol);
			echo view('apart_view', $data,$dataRol);
			echo view('layouts/footer');
		}
		
	}

	public function deleteApart(){
		$request = \Config\Services::request();
		$apartModel = new ApartModel();
		$id = $request->getGet('id');
		$apartModel -> deleteAparts($id);
		return redirect()->to('/aparts')->with('status','El Apartamento se Elimino Correctamente');
	}
}