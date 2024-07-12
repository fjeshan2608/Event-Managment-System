<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index(){
        return view('back.form');
    }

    public function indexshow(){
        $show=Event::all();
        return view('back.table',compact('show'));
    }

    public function submit(Request $req){
        $store=new Event();
        $store->name=$req->name;
        $store->email =$req->email;
        $store->phone=$req->phone;
        $store->guest=$req->nog;
        $store->event=$req->event;
        $store->time=$req->time;
        $store->date=$req->date;
        $store->save();
        return redirect()->back();
    }
    public function reservation(Request $req){
        $store=new Event();
        $store->name=$req->name;
        $store->email =$req->email;
        $store->phone=$req->phone;
        $store->guest=$req->nog;
        $store->event=$req->event;
        $store->time=$req->time;
        $store->date=$req->date;
        $store->save();
        return redirect()->to('Event-Table');
    }

    public function editevent($id){
        $check=Event::find($id);
        return view('back.edit',compact('check'));
    }
    public function update(Request $req){
        
        $store= Event::find($req->id);
        $store->name=$req->name;
        $store->email=$req->email;
        $store->phone=$req->phone;
        $store->guest=$req->nog;
        $store->event=$req->event;
        $store->time=$req->time;
        $store->date=$req->date;
        $store->save();
        return redirect()->to('Event-Table');
        
    }

    public function delevent($id){
        $show=Event::find($id);
        $show->delete();
        return redirect()->back();
    }
}
