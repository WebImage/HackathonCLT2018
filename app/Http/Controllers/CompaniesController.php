<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
	public function index()
	{
		return view('companies/index');
    }

	public function register()
	{
		return view('companies/register');
	}

	public function listTrips()
	{
		$days = $this->getCalendarDays();
		return view('companies/list', array('days' => $days));
	}

	public function createTrip()
	{
		return view('companies/createtrip');
	}

	public function createTripSchedule()
	{
		$days = $this->getCalendarDays();
		return view('companies/createtripschedule', array('days' => $days));
	}

	public function welcome()
	{
		return view('companies/welcome');
	}
}
