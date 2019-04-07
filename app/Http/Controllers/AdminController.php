<?php

namespace App\Http\Controllers;

use App\CuisineList;
use Illuminate\Http\Request;
use Session;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function addFood()
    {
       return view('admin.add_food');
    }
    public function admin_login()
    {
        return view('admin.admin_login');
    }
    public function add_food(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255|unique:cuisine_lists,name',
            'price'=>'required|integer',
            'type'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);
        $file=$request->file('image');
        $file_name=$file->getClientOriginalName();
        $destination='image/';
        $file->move($destination,$file_name);
        $image=$destination.$file_name;

        $cuisine=new CuisineList();
         $cuisine->name=$request->input('name');
         $cuisine->price=$request->input('price');
         $cuisine->type=$request->input('type');
         $cuisine->description=$request->input('description');
         $cuisine->image=$image;
         $cuisine->save();
         return redirect()->route('admin.data_table')->with('success','Cuisine Added Successfully');
    }
    public function show_data_table()
    {
        $cuisines=CuisineList::orderBy('created_at','desc')->get();
        return view('admin.dataTable')->with('cuisines',$cuisines);
    }
    public function edit_cuisine($id)
    {
        $cuisine=CuisineList::find($id);
        return view('admin.edit_cuisine')->with('cuisine',$cuisine);
    }
    public function cuisine_update(Request $request)
    {
        $id=$request->input('id');
        $cuisine=CuisineList::find($id);
        if($cuisine->name==$request->input('name'))
        {
            $this->validate($request,[
                'price'=>'required|integer',
                'type'=>'required',
                'description'=>'required',
                'image'=>'required',
            ]);
        }
        else{
            $this->validate($request,[
                'name'=>'required|unique:cuisine_lists,name|max:255',
                'price'=>'required|integer',
                'type'=>'required',
                'description'=>'required',
                'image'=>'required',
            ]);
        }
        $file=$request->file('image');
        $file_name=$file->getClientOriginalName();
        $destination='image/';
        $file->move($destination,$file_name);
        $image=$destination.$file_name;

        $cuisine->price=$request->input('price');
        $cuisine->type=$request->input('type');
        $cuisine->description=$request->input('description');
        $cuisine->image=$image;
        $cuisine->save();
        return redirect()->route('admin.data_table')->with('success','Cuisine Updated Successfully');
    }
    public function delete_cuisine($id)
    {
        $cuisine=CuisineList::find($id);
        $cuisine->delete();
        return redirect()->route('admin.data_table')->with('success','Cuisine Deleted Successfully');
    }
}
