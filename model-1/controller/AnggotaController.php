<?php

	require 'Controller.php';

	class AnggotaController extends Controller {

		public function actionIndex() {
			$this->render('index');
		}

		public function actionTambah() {
			if($_SERVER['REQUEST_METHOD']==='POST') {
				$anggota = new Anggota();
				$anggota->load($_POST);
				$anggota->save();
				header("Location: home.php\n\n");
			}	
			$this->render('form_anggota');
		}
	}


?>