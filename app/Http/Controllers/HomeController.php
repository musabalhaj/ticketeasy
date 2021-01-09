<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $EventSum = DB::table('events')->count('id');
        $OrgnaizerSum = DB::table('users')->where('role',2)->count('id');
        $UserSum = DB::table('users')->where('role',3)->count('id');
        switch (Auth()->user()->role) {
            case '1':
                return view('Admin.Dashboard')
                ->with('Event',$EventSum)
                ->with('Orgnaizer',$OrgnaizerSum)
                ->with('User',$UserSum);
                break;
            case '2':
                return view('Organizer.Dashboard');
                break;
            case '3':
                return view('User.Dashboard');
                break;
            default:
                return view('home');
                break;
        }
        
    }

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
