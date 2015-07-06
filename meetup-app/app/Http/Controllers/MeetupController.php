<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use \Cache;
use \Queue;

use Illuminate\Http\Request;

class MeetupController extends Controller
{

	public function meetup()
	{
		$curtidas = Cache::get('curtidas', 0);
		return view('meetup.index')
			->with('curtidas', $curtidas)
			->with('container', gethostname())
			->with('serverip', $_SERVER['SERVER_ADDR']);
	}

	public function curtir()
	{
		Queue::pushOn('curtida', 'nova curtida');
		Cache::increment('curtidas');
		return redirect('meetup')->with('message', 'Curtida Ok!');
	}

}
