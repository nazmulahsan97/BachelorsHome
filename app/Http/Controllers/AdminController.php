<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\House;
use App\Models\Reservation;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }



    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data=house::find($id); 
    }


   
    public function housemenu()
    {
        $data = house::all();
        return view("admin.housemenu", compact("data"));
    }


    public function upload(Request $request)
    {
      $data = new house;
      
      $image=$request->image;

      $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('houseimage',$imagename);
                $data->image=$imagename;

                $data->title=$request->title;
                $data->price=$request->price;
                $data->description=$request->description;
                $data->save();
                return redirect()->back();


        
    }

    public function reservation(Request $request)
    {
      $data = new reservation;
      
      

                $data->name=$request->name;
                $data->email=$request->email;
                $data->phone=$request->phone;
                $data->save();
                return redirect()->back();


        
    }

    public function viewreservation(Request $request)
    {
        $data= reservation::all();
        return view("admin.adminreservation",compact("data-"));
    }


}