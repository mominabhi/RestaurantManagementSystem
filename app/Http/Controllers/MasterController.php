<?php

namespace App\Http\Controllers;

use App\CuisineList;
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
        $cuisine = CuisineList::all();
        return view('pages.cuisine')
            ->with('cuisines', $cuisine);
    }

    public function cuisine_order(Request $request)
    {
        $online_order = new Online_order();
        $online_order->cuisineList_id = $request->input('cuisineList_id');
        $online_order->quantity = $request->input('quantity');
        $online_order->save();
        return redirect()->route('cuisine')->with('success', 'Successfully Ordered');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function registration()
    {
        return view('pages.registration');
    }

    public function customer_login(Request $request)
    {
        $id = Session::get('cuisine_id_lulu');
        $password = $request->input('password');
        $email = $request->input('email');
        $customer = Customer::where('password', $password)
            ->where('email', $email)->first();
        if ($customer) {
            Session::put('customer_id', $customer->id);
            Session::put('customer_email', $customer->email);
            return Redirect::intended('cuisine_detail/' . $id);
        } else {
            return redirect()->route('user.login')->with('error', 'not loggedin');
        }
    }


    public function customer_registration(Request $request)
    {
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
        Session::put('customer_id', $customer->id);
        Session::put('customer_email', $customer->email);
        return redirect()->intended('cuisine_detail/{id}');
    }
    public function cuisine_detail($id)
    {

        if (Session::has('customer_email')) {
            Session::forget('cuisine_id_lulu');
            Session::flush();
            $cuisine = CuisineList::find($id);
            Session::put('cuisine_id', $id);
            return view('pages.cuisine_detail')->with('cuisine', $cuisine);
        } else {
            return redirect()->route('user.login');
        }

    }
    public function customer_logout()
    {
        Session::forget('customer_email');
        Session::flush();
        return redirect()->route('cuisine');
    }
}
