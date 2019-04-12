<?php

namespace App\Http\Controllers;
use App\Cuisine_list;
use App\Online_order;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function addFood()
    {
        return view('admin.add_food');
    }

    public function add_food(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|unique:cuisine_lists,name',
            'price' => 'required|integer',
            'type' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $file = $request->file('image');
        $file_name = $file->getClientOriginalName();
        $destination = 'image/';
        $file->move($destination, $file_name);
        $image = $destination . $file_name;

        $cuisine = new Cuisine_list();
        $cuisine->name = $request->input('name');
        $cuisine->price = $request->input('price');
        $cuisine->type = $request->input('type');
        $cuisine->description = $request->input('description');
        $cuisine->image = $image;
        $cuisine->save();
        return redirect()->route('admin.data_table')->with('success', 'Cuisine Added Successfully');
    }

    public function show_data_table()
    {
        $cuisines = Cuisine_list::orderBy('created_at', 'desc')->get();
        return view('admin.dataTable')->with('cuisines', $cuisines);
    }

    public function edit_cuisine($id)
    {
        $cuisine = Cuisine_list::find($id);
        return view('admin.edit_cuisine')->with('cuisine', $cuisine);
    }

    public function cuisine_update(Request $request)
    {
        $id = $request->input('id');
        $cuisine = Cuisine_list::find($id);
        if ($cuisine->name == $request->input('name')) {
            $this->validate($request, [
                'price' => 'required|integer',
                'type' => 'required',
                'description' => 'required',
                'image' => 'required',
            ]);
        } else {
            $this->validate($request, [
                'name' => 'required|unique:cuisine_lists,name|max:255',
                'price' => 'required|integer',
                'type' => 'required',
                'description' => 'required',
                'image' => 'required',
            ]);
        }
        $file = $request->file('image');
        $file_name = $file->getClientOriginalName();
        $destination = 'image/';
        $file->move($destination, $file_name);
        $image = $destination . $file_name;

        $cuisine->price = $request->input('price');
        $cuisine->type = $request->input('type');
        $cuisine->description = $request->input('description');
        $cuisine->image = $image;
        $cuisine->save();
        return redirect()->route('admin.data_table')->with('success', 'Cuisine Updated Successfully');
    }

    public function delete_cuisine($id)
    {
        $cuisine = Cuisine_list::find($id);
        $cuisine->delete();
        return redirect()->route('admin.data_table')->with('success', 'Cuisine Deleted Successfully');
    }
    public function online_order()
    {
        $online_orders=Online_order::all();
        return view('admin.online_order')->with('online_orders',$online_orders);
    }
    public function particular_order($id)
    {
        $orders=Online_order::where('customer_id',$id)->get();
        return view('admin.particular_order')->with('online_orders',$orders);
    }
    public function delete_order($id)
    {
        $cuisine = Online_order::find($id);
        $cuisine->delete();
        return redirect()->route('admin.online_order')->with('success', 'Order Deleted Delivered');
    }
    public function delete_particular_order($id)
    {
        $order=Online_order::where('customer_id',$id);
        $order->delete();
        return redirect()->route('admin.online_order')->with('success', 'Order Deleted Delivered');
    }
    public function total_online_order()
    {

    }
}
