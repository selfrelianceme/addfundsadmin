<?php

namespace Selfreliance\AddFundsAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shares;
use PaymentSystem;
use App\User;
use Balance;
class AddFundsAdminController extends Controller
{
	public function index(){
		$shares = Balance::history_add_funds();
		// dd($shares);
		return view('addfundsadmin::table')->with(compact('shares'));
	}
}