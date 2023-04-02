<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataSave;
use Image;
use DB;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class DataSaveController extends Controller
{
    // insert
    public function insert(Request $request){
        if( $request->file('img_logo')){

          

            $file= $request->file('img_logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/brand'), $filename);
    




        
            dataSave::insert([
                'fullName' => $request->fullName,
                'email' => $request->email,
                'company' => $request->company,
                'phone' => $request->phone,
                'address' => $request->address,
                'shirtType' => $request->shirtType,
                'shirtColor' => $request->shirtColor,
                'xl' => $request->xl,
                'l' => $request->l,
                'm' => $request->m,
                's' => $request->s,
                'xs' => $request->xs,
                
                'price' => $request->price,
                'quantity' => $request->quantity,
                'photo' => $filename,
                
                
                'created_at' => Carbon::now(),
            ]);

            $fullName = $request->fullName;
            $email= $request->email;
            $company = $request->company;
            $phone = $request->phone;
            $address = $request->address;
            $shirtType = $request->shirtType;
            $shirtColor = $request->shirtColor;
            $xl = $request->xl;
            $l = $request->l;
            $m = $request->m;
            $s = $request->s;
            $xs = $request->xs;
            $quantity = $request->quantity;
            $price = $request->price;


           

            Mail::send('emailTemplate.message', 
            [
                'fullName'=>$fullName,
                'email'=>$email,
                
                'company'=>$company,
                'phone'=>$phone,
                
                'address'=>$address,
                'shirtType'=>$shirtType,
                
                'shirtColor'=>$shirtColor,
                'xl'=>$xl,
                
                'l'=>$l,
    
                'm'=>$m,
                's'=>$s,
                'xs'=>$xs,
                'quantity'=>$quantity,
                'price'=>$price,
            ], 
            function($message1) use ($fullName) {
                $message1->to('ahsansallem509@gmail.com')->subject('IronDex');
            });


            $notification = array(
                'message' => 'Order has been send !',
                'alert_type' => 'success'
            );
            return Redirect('/success')->with($notification);
        }
        else{
            
            dataSave::insert([
                'fullName' => $request->fullName,
                'email' => $request->email,
                'company' => $request->company,
                'phone' => $request->phone,
                'address' => $request->address,
                'shirtType' => $request->shirtType,
                'shirtColor' => $request->shirtColor,
                'xl' => $request->xl,
                'l' => $request->l,
                'm' => $request->m,
                's' => $request->s,
                'xs' => $request->xs,
                
                'price' => $request->price,
                'quantity' => $request->quantity,
                
                
                'created_at' => Carbon::now(),
            ]);

        
            $fullName = $request->fullName;
            $email= $request->email;
            $company = $request->company;
            $phone = $request->phone;
            $address = $request->address;
            $shirtType = $request->shirtType;
            $shirtColor = $request->shirtColor;
            $xl = $request->xl;
            $l = $request->l;
            $m = $request->m;
            $s = $request->s;
            $xs = $request->xs;
            $quantity = $request->quantity;
            $price = $request->price;

           

            Mail::send('emailTemplate.message', 
            [
                'fullName'=>$fullName,
                'email'=>$email,
                
                'company'=>$company,
                'phone'=>$phone,
                
                'address'=>$address,
                'shirtType'=>$shirtType,
                
                'shirtColor'=>$shirtColor,
                'xl'=>$xl,
                
                'l'=>$l,
    
                'm'=>$m,
                's'=>$s,
                'xs'=>$xs,
                'quantity'=>$quantity,
                'price'=>$price,
            ], 
            function($message1) use ($fullName) {
                $message1->to('ahsansallem509@gmail.com')->subject('IronDex');
            });



            
            $notification = array(
                'message' => 'Order has been send !',
                'alert_type' => 'success'
            );
            return Redirect('/success')->with($notification);
        }
    }

    public function success(){
        return view('success');
    }

    // public function email(){
    //     return view('emailTemplate.message');
    // }

    public function data(){
        $data = dataSave::orderBy('id','DESC')->paginate(10);
        return view('data',compact('data'));
    }

    
}
