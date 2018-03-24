<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCalendarDays() {
    	$start = new \DateTime();
    	$start->modify('first day of next month');

    	$less_days = $start->format('w');
    	$start->modify('-' . $less_days . ' days');
//		$days_in_month = $start->format('j');

    	$days = array();

    	$end = clone $start;
    	$end->modify('last day of this month');
    	$end->modify('+' . (6-$end->format('w')) . ' days');

	    $cursor = clone $start;
	    do {
	    	$d = clone $cursor;
	    	$days[] = array(
	    		'date' => $d,
			    'events' => array()
		    );

	    	$cursor->modify('+1 day');
	    } while ($cursor->getTimestamp() <= $end->getTimestamp());

	    foreach(array(
	    	array('name' => 'Duke Energy', 'logo' => '/logos/dukeenergy.png', 'title' => 'Duke Energy'),
	    	array('name' => 'Bank of America', 'logo' => '/logos/bofa.jpg', 'title' => 'Bank of America'),
	    	array('name' => 'City of Charlotte', 'logo' => '/logos/clt.jpg', 'title' => 'City of Charlotte'),
	    	array('name' => 'Wells Fargo', 'logo' => '/logos/wellsfargo.png', 'title' => 'Wells Fargo'),
	    	array('name' => 'Charlotte Water', 'logo' => '/logos/charlottewater.jpg', 'title' => 'Charlotte Water'),

        ) as $data) {
	    	while (true) {
			    $ix = rand(0, count($days) - 1);
			    if (count($days[$ix]['events']) == 0 && $days[$ix]['date']->format('w') != 0 && $days[$ix]['date']->format('w') != 6) {
				    $days[$ix]['events'][] = $data;
				    break;
			    }
		    }
	    }

    	return $days;
    }
}
