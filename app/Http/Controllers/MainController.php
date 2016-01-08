<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Validator;
use Input;
use Illuminate\Database\Query\Builder;
use DB;
use Sentinel;
use Hash;

class MainController extends Controller
{

    public function index(){
        return view('pages.login');
    }

    // public function login(){
    //     return view('pages.login');
    // }

    public function home(){
        return view('app');
    }

    // public function register(){
    //     return view('pages.signup');
    // }

    public function notifications(){
        return view('pages.notifs');
    }

    public function load(){
        return view('pages.load');
    }

    public function transactions(){
        return view('pages.transactions');
    }

    public function unknownusers(){
        return view('pages.unknownusers');
    }

    public function gettransactions(){
        return view('pages.gettransactions');
    }

    public function logout(){
        return view('pages.login');
    }
}

?>