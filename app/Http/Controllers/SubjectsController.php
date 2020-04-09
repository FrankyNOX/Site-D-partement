<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 1) {
            $items = Subject::with('user','sale')->where('user_id',Auth::id())->get();
        }
        else{
            $items = Subject::with('user','sale')->get();
        }
        return view('admin.subjects.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new subject();
        $parameters = $request->except(['_token']);
        if($file = $request->file('picture') )
        {
            $name = date('Y-M-j-s').$file->getClientOriginalName();
            if($file->move('images\matieres',$name))
            {
                $item->user_id = $parameters['user_id'] ;
                $item->sale_id =  $parameters['sale_id'];
                $item->name =  $parameters['name'] ;
                $item->description = $parameters['description'] ;
                $item-> picture = "/images/matieres/".$name;
                $item->save();
            }
        }
        return redirect()->route(ADMIN.'.subjects.index')->withSuccess(trans('app.success_store'));
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
        $item = Subject::findOrFail($id);

        return view('admin.subjects.edit', compact('item'));
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
        $item = Subject::findOrFail($id);
        $parameters = $request->except(['_token']);
        if($file = $request->file('picture') )
        {
            $name = date('Y-M-j-s').$file->getClientOriginalName();
            if($file->move('images\chapitres',$name))
            {
                $item->user_id = $parameters['user_id'] ;
                $item->sale_id =  $parameters['sale_id'];
                $item->name =  $parameters['name'] ;
                $item->description = $parameters['description'] ;
                $item-> picture = "/images/chapitres/".$name;
                $item->save();
            }
        }
        else
        {
            $item->update($request->all());
        }
        return redirect()->route(ADMIN.'.subjects.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subject::destroy($id);
        return back()->withSuccess(trans('app.success_destroy'));
    }
}
