<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index')->with('categories', $categories); 
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

    public function ajaxStore(Request $request)
    {
        $this->validate($request, array(
                'category_name' => 'required|string|max:20'
            ));

        $category = Category::where('category_name', $request->category_name)->first();

        if ($category) {
            $notification = array(
                'message' => $request->category_name. ' already exists.', 
                'alert-type' => 'error'
            );

            return array('status' => 'ERROR', 'notification' => $notification);
        } else {
            $category = New Category;
            
            $category->category_name = $request->category_name;
            $category->save();

            $notification = array(
                'message' => $request->category_name. ' successfully saved!', 
                'alert-type' => 'success'
            );

            return array('status' => 'OK', 'result' => $category, 'notification' => $notification);
        }
    }

    public function ajaxShow(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        return array('status' => 'OK', 'result' => $category);
    }

    public function ajaxUpdate(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        $notification = array(
            'message' => 'Category was successfully updated!', 
            'alert-type' => 'success'
        );

        return array('status' => 'OK', 'result' => $category, 'notification' => $notification);
    }

    public function ajaxDestroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category) {
            $category->delete();
        
            $notification = array(
                'message' => $category->category_name. ' category successfully deleted!', 
                'alert-type' => 'success'
            );

            return array('status' => 'OK', 'notification' => $notification);
        }
    }
}