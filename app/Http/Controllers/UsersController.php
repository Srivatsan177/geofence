<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Crop;
use App\Land;
use App\Location;
use Auth;

class UsersController extends Controller
{
    public function index($id){
        $user=User::find($id);
        $land=Land::whereUsers_id($id)->get();
        return view('user.view')->with('user',$user)->with('lands',$land);
    }

    public function showcrop($land_id){
        $crop=Crop::whereLands_id($land_id)->get();
        $user=Auth::user();
        $land=Land::whereUsersId($user->id)->get()->first();
        $loc=Location::whereLandId($land->id)->get()->first();
        if (count($crop)==0){
            return view('user.create');
        }
        // return $crop;
        return view("user.crop")->with("crops",$crop)->with('loc',$loc);
    }
    public function create(){
        return view('user.create');
    }

    public function store(Request $request)
    {
        $crop=new Crop;
        $crop->year=$request->input('year');
        $crop->quarter_num=$request->input('quarter_num');
        $crop->crop_name=$request->input('crop_name');
        $id=Auth::user()->id;
        $land=Land::whereUsers_id($id)->get()->first();
        // dd($land);
        $crop->lands_id=$land->id;
        $crop->save();
        return redirect("user/view/$id");
    }
}


