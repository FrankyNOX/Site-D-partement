<?php

namespace App\Http\Controllers;

use App\Forum;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Forum::with('subject')->get();
        return view('admin.forums.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Forum();
        $parameters = $request->except(['_token']);
        if($file = $request->file('picture') )
        {
            $name = date('Y-M-j-s').$file->getClientOriginalName();
            if($file->move('images\forums',$name))
            {
                $item->subject_id = $parameters['subject_id'] ;
                $item->name =  $parameters['name'] ;
                $item->description = $parameters['description'] ;
                $item-> picture = "/images/forums/".$name;
                $item->save();
            }
        }
        return redirect()->route(ADMIN.'.forums.index')->withSuccess(trans('app.success_store'));
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
        $item = Forum::findOrFail($id);

        return view('admin.forums.edit', compact('item'));
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
        $item = Forum::findOrFail($id);
        $parameters = $request->except(['_token']);
        if($file = $request->file('picture') )
        {
            $name = date('Y-M-j-s').$file->getClientOriginalName();
            if($file->move('images\forums',$name))
            {
                $item->subject_id = $parameters['subject_id'] ;
                $item->name =  $parameters['name'] ;
                $item->description = $parameters['description'] ;
                $item-> picture = "/images/forums/".$name;
                $item->save();
            }
        }
        else {
            $item->update($request->all());
        }
        return redirect()->route(ADMIN.'.forums.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Forum::destroy($id);
        return back()->withSuccess(trans('app.success_destroy'));
    }
}
