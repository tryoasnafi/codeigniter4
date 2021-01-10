<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		// echo view('templates/head');
		echo view('dashboard/index');
		// echo view('templates/footer');
	}

	public function harga($request)
	{
		echo view("dashboard/harga/${request}");
	}

	public function profil()
	{
		echo view('dashboard/profil');
	}

	public function gunakanjasa()
	{
		echo view('dashboard/gunakanjasa');
	}

	public function pembayaran()
	{
		echo view('dashboard/pembayaran');
	}

	public function review()
	{
		echo view('dashboard/review');
	}

	public function tugas()
	{
		echo view('dashboard/tugas');
	}
}
