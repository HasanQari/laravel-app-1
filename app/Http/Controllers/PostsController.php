<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.registerReq');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'Fname' => 'required',
        //     'Mname' => 'required',
        //     'Lname' => 'required',
        //     'National' => 'required',
        //     'DOB' => 'required',
        //     'phone' => 'required',
        //     'mail' => 'required',
        //     'city' => 'required',
        //     'address' => 'required',
        // ]);
        // return $request->all();

        $data = new Post;
        $data->fname = request('Fname');
        $data->mname = request('Mname');
        $data->lname = request('Lname');
        $data->nationality = request('National');
        $data->DOB = request('DOB');
        $data->city = request('city');
        $data->address = request('address');
        $data->phone = request('phone');
        $data->email = request('mail');

        $data->save();

        return redirect('/formSubmit');
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
}
