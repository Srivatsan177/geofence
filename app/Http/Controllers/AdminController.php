<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\District;
use App\Taluka;
use App\Area;
use App\Land;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $states=State::with("dist")->get();
        // dd($states);
        return view("admin.index")->with("states",$states);
    }

    public function create(){
        $states=State::all();
        return view("admin.create")->with('states',$states);
    }

    public function getDist(Request $request){
        $dists=District::whereStatesId($request->input("state"))->get();
        $html="";
        foreach($dists as $dist){
            $html.="<option value=$dist->id>$dist->district</option>";
        }
        return $html;
    }

    public function getTaluka(Request $request){
        $taluks=Taluka::whereDistrictsId($request->input('state'))->get();
        $html="";
        foreach($taluks as $taluk){
            $html.="<option value=$taluk->id>$taluk->name</option>";
        }
        return $html;
    }

    public function getArea(Request $request){
        $areas=Area::whereTalukasId($request->input("state"))->get();
        $html="";
        foreach($areas as $taluk){
            $html.="<option value=$taluk->id>$taluk->name</option>";
        }
        return $html;
    }

    public function store(Request $request){

            $user=User::whereEmail($request->input('email'))->get()->first();
            if ($user==null){
                $user=new User;
                $user->name=$request->input('name');
                $user->email=$request->input('email');
                $user->password=Hash::make('1234');
                $user->save();
            }

            $land=new Land;
            $land->name=$request->input('name');
            $land->reg_no=$request->input('reg');
            $land->lat=$request->input('latitude');
            $land->long=$request->input('longitude');
            $land->users_id=$user->id;
            $land->areas_id=$request->input('area');
            $land->save();
            return redirect('/index');
     }

     public function showDist($state_id){
        $dists=District::with("taluk")->get();
        return view("admin.showDist")->with("dists",$dists) ;
     }
}
