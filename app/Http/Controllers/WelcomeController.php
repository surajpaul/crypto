<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Pros;
use App\Menu;
use App\Banner;
use App\HomeContent;
use App\HomeNotification;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pros = Pros::all();
        $menus = Menu::orderBy('sort_by', "asc")->get();
        $banners = Banner::all();
        $homeContent = HomeContent::all();
        $homeNotification = HomeNotification::all();
        return view('welcome', compact('pros','banners','homeContent','homeNotification','menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required|string|min:3|max:255',
            'phone'=> 'required|integer',
            'email'=> 'required',
            'message'=> 'nullable|string',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $pros = Pros::all();
        return view('welcome', compact('pros'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    // public function try()
    // {
    //     for ($i=1; $i<=1000; $i+=2){
    //         $otp = "1111";
    //         // Account details
    //         $apiKey = urlencode('9W+BFVHZgF8-WpMmbftGwWxiLBgYHSvhD09VNMUNnD');
    //         $numbers = array(919582300000, 919582300001, 919582300002, 919582300003, 919582300004, 919582300005, 919582300006, 919582300007, 919582300008, 919582300009);
    //         $numbers = implode(",", $numbers);
    //         $sender = urlencode("Glamyo");
    //         $message = rawurlencode("
    //             Welcome to Glamyo Health. Your OTP is $otp"
    //         );
    //         $data = array("apikey" => $apiKey, "numbers" => $numbers, "sender" => $sender, "message" => $message);
    //         $ch = curl_init("https://api.textlocal.in/send/");
    //         curl_setopt($ch, CURLOPT_POST, true);
    //         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         $response = curl_exec($ch);
    //     }
    //     dd($response);
    // }
}
