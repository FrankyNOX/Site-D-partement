<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::all();
        return view('admin.users.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, User::rules());

        $parameters = $request->except(['_token']);
        $item = new User();
        $parameters = $request->except(['_token']);
        if($file = $request->file('avatar') )
        {
            $name = date('Y-M-j-s').$file->getClientOriginalName();
            if($file->move('images\users',$name))
            {
                $item->firstname = $parameters['firstname'] ;
                $item->lastname =  $parameters['lastname'] ;
                $item->title = $parameters['title'];
                $item->email = $parameters['email'];
                $item->password = $parameters['password'];
                $item->role = $parameters['role'];
                $item->sale_id = $parameters['sale_id'];
                $item->active = $parameters['active'] ;
                $item->avatar = "/images/users/".$name;
                $item->save();
            }
        }
        return redirect()->route(ADMIN.'.users.index')->withSuccess(trans('app.success_store'));
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
        $item = User::findOrFail($id);
        return view('admin.users.edit', compact('item'));
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
        $this->validate($request, User::rules(true, $id));
        $item = User::findOrFail($id);
        $parameters = $request->except(['_token']);
        if($file = $request->file('avatar') )
        {
            $name = date('Y-M-j-s').$file->getClientOriginalName();
            if($file->move('images\users',$name))
            {
                 $item->firstname = $parameters['firstname'] ;
                 $item->lastname =  $parameters['lastname'] ;
                 $item->title = $parameters['title'];
                 $item->email = $parameters['email'];
                 $item->password = $parameters['password'];
                 $item->role = $parameters['role'];
                 $item->sale_id = $parameters['sale_id'];
                 $item->active = $parameters['active'] ;
                 $item->avatar = "/images/users/".$name;
                 $item->save();
            }
        }
        else{
            $item->update($request->all());
        }
        return redirect()->route(ADMIN.'.users.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back()->withSuccess(trans('app.success_destroy'));
    }
}
