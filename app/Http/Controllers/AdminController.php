<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\District;
use App\Taluka;
use App\Area;
use App\Land;
use App\User;
use App\Location;
use App\Crop;

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
            $land->users_id=$user->id;
            $land->areas_id=$request->input('area');
            $land->save();
            for($i=0 ; $i<count($request->input("latitude"));$i++){
                $locs=new Location;
                $locs->lat=$request->input("latitude")[$i];
                $locs->long=$request->input("longitude")[$i];
                $locs->land_id=$land->id;
                $locs->save();
            }
            return redirect('/index');
     }

     public function showDist($state_id){
        $dists=District::whereStatesId($state_id)->with("taluk")->get();
        return view("admin.showDist")->with("dists",$dists)->with("state_id",$state_id);
     }

     public function showTaluk($state_id,$dist_id){
        $taluks=Taluka::whereDistrictsId("$dist_id")->with("area")->get();
        return view("admin.showTaluk")->with("taluks",$taluks)->with("state_id",$state_id)->with("dist_id",$dist_id);
     }

     public function showArea($state_id,$dist_id,$taluk_id){
        $areas=Area::whereTalukasId("$taluk_id")->with("land")->get();
        return view("admin.showArea")->with("areas",$areas)->with("state_id",$state_id)->with("dist_id",$dist_id)->with("taluk_id",$taluk_id);
     }


     public function showLand($state_id,$dist_id,$taluk_id,$area_id){
         $lands=Land::whereAreasId("$area_id")->with("owner")->with("imageSingle")->get();
        //  return ($lands);
         return view("admin.showLand")->with("lands",$lands)->with("state_id",$state_id)->with("dist_id",$dist_id)->with("taluk_id",$taluk_id)->with("area_id",$area_id);
     }

     public function editArea($area_id){
        $area=Area::find($area_id);
        return view("admin.editArea")->with("area",$area);
     }

     public function updateArea(Request $request,$area_id){
        $area=Area::find($area_id);
        $area->soil=$request->input("soil");
        $area->ground_water=$request->input("ground_water");
        $area->fertility=$request->input("fertility");
        $area->save();
        return redirect()->back();
     }

     public function editLand($land_id){
        $land=Land::whereId("$land_id")->with("owner")->get()->first();
        return view("admin.editLand")->with("land",$land);
     }

     public function updateLand(Request $request,$land_id){
        $user=User::whereEmail($request->input("email"))->get()->first();
        if($user==null){
            $user=new User;
            $user->name=$request->input("name");
            $user->email=$request->input("email");
            $user->password=Hash::make("1234");
            $user->save();
        }
        $land=Land::find($land_id);
        $land->name=$user->name;
        $land->reg_no=$request->input("reg_no");
        $land->users_id=$user->id;
        $land->save();
        return redirect()->back();
     }

     public function landuser($land_id,$user_id){
        $crop=Crop::whereLandsId("$land_id")->get();
        $loc=Location::whereLandId("$land_id")->get();
        $user=User::find($user_id);
        return view("admin.landUser")->with('crops',$crop)->with('locs',$loc)->with('user',$user);
     }

}
