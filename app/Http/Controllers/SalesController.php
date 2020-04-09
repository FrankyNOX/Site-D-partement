<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Sale::all();
        return view('admin.sales.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $item = new Sale();
        $parameters = $request->except(['_token']);
        if($file = $request->file('picture') )
        {
            $name = date('Y-M-j-s').$file->getClientOriginalName();
            if($file->move('images\avartar',$name))
            {
                $item->name = $parameters['name'] ;
                $item->students =  $parameters['students'];
                $item->subjects =  $parameters['subjects'] ;
                $item-> picture = "/images/avartar/".$name;
                $item->save();
            }
        }
        return redirect()->route(ADMIN.'.sales.index')->withSuccess(trans('app.success_store'));

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
        $item = Sale::findOrFail($id);

        return view('admin.sales.edit', compact('item'));
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
        $item = Sale::findOrFail($id);
        $parameters = $request->except(['_token']);
        if($file = $request->file('picture') )
        {
            $name = date('Y-M-j-s').$file->getClientOriginalName();
            if($file->move('images\avartar',$name))
            {
                $item->name = $parameters['name'] ;
                $item->students =  $parameters['students'];
                $item->subjects =  $parameters['subjects'] ;
                $item-> picture = "/images/avartar/".$name;
                $item->save();
            }
        }
        else
            {
                $item->update($request->all());
            }
        return redirect()->route(ADMIN.'.sales.index')->withSuccess(trans('app.success_update'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sale::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}
