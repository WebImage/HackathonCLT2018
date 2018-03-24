<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolsController extends Controller
{
	public function index()
	{
		return view('schools/index');
	}

	public function register()
	{
		return view('schools/register');
	}

	public function listTrips()
	{
		$days = $this->getCalendarDays();
		return view('schools/teachertrips', array('days' => $days));
	}

	public function scheduleTrip()
	{
		$days = $this->getCalendarDays();
		return view('schools/scheduletrip', array('days' => $days));
	}
}