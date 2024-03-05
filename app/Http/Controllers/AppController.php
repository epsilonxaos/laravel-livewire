<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
	public function DataTableView()
	{
		return view('pages.datatable');
	}

	public function CounterView()
	{
		return view('pages.counter');
	}
}
