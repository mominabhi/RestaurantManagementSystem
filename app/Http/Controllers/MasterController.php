<?php

namespace App\Http\Controllers;

use App\Cuisine_list;
use App\Customer;
use App\Online_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class MasterController extends Controller
{
    public function index()
    {
        $slider = view('pages.slider');
        $wrap = view('pages.wrap');

        $wrapper = view('pages.wrapper');
        return view('index')
            ->with('slider', $slider)
            ->with('wrap', $wrap)
            ->with('wrapper', $wrapper);
    }

    public function showCuisine()
    {
        $cuisine = Cuisine_list::all();
        return view('pages.cuisine')
            ->with('cuisines', $cuisine);
    }
    public function cuisine_detail($id)
    {
        if (Session::has('customer_email')) {
            $cuisine = Cuisine_list::find($id);
            Session::put('cuisine_id', $id);
            return view('pages.cuisine_detail')->with('cuisine', $cuisine);
        } else {
            return Redirect::intended('user/login/'.$id);
        }

    }

    public function login($id)
    {
        if(Session::has('customer_email'))
        {
            return Redirect::intended('cuisine_detail/' .$id);
        }
        else{
            Session::put('food_id',$id);
            return view('pages.login');
        }
    }

    public function customer_login(Request $request)
    {
        $get_id=Session::get('food_id');
        $password = $request->input('password');
        $email = $request->input('email');
        $customer = Customer::where('password', $password)
            ->where('email', $email)->first();
        if ($customer) {
            Session::put('customer_id', $customer->id);
            Session::put('customer_email', $customer->email);
            return Redirect::intended('cuisine_detail/' .$get_id);
        } else {
            return Redirect::to('user/login/' .$get_id);
        }
    }
    public function customer_registration(Request $request)
    {
        $get_id=Session::get('food_id');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:customers,email',
            'password' => 'required|confirmed',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->password = $request->input('password');
        $customer->password_confirmation = $request->input('password_confirmation');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->save();
        if ($customer) {
            Session::put('customer_id', $customer->id);
            Session::put('customer_email', $customer->email);
            return Redirect::intended('cuisine_detail/' .$get_id);
        } else {
            return Redirect::to('user/login/' .$get_id);
        }
    }

    public function customer_logout()
    {
        Session::forget('customer_email');
        Session::flush();
        return redirect()->route('cuisine');
    }
    public function cuisine_order(Request $request)
    {
        $online_order = new Online_order();
        $online_order->quantity = $request->input('quantity');
        $online_order->customer_id = $request->input('customer_id');
        $online_order->cuisine_list_id = $request->input('cuisine_list_id');
        $online_order->save();
        return redirect()->route('cuisine')->with('success', 'Successfully Ordered');
    }
}
