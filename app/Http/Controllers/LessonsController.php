<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Lesson;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 1) {
            $subjects = Subject::with('user','sale')->where('user_id',Auth::id())->pluck('id')->toArray();
            $chapters = Chapter::with('subject')->whereIn('subject_id',$subjects)->pluck('id')->toArray();
            $items = Lesson::with('chapter')->whereIn('chapter_id',$chapters)->get();
        }
        else{
            $items = Lesson::with('chapter')->get();
           
        }
        return view('admin.lessons.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lessons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Lesson();
        $parameters = $request->except(['_token']);
        if($file = $request->file('picture') )
        {
            $name = date('Y-M-j-s').$file->getClientOriginalName();
            if($file->move('images\lecons',$name))
            {
                $item->chapter_id = $parameters['chapter_id'] ;
                $item->name =  $parameters['name'] ;
                $item->content =  $parameters['content'] ;
                $item->description = $parameters['description'] ;
                $item-> picture = "/images/lecons/".$name;
                $item->save();
            }
        }
        return redirect()->route(ADMIN.'.lessons.index')->withSuccess(trans('app.success_store'));


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
        $item = Lesson::findOrFail($id);

        return view('admin.lessons.edit', compact('item'));
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
        $item = Lesson::findOrFail($id);
        $parameters = $request->except(['_token']);
        if($file = $request->file('picture') )
        {
            $name = date('Y-M-j-s').$file->getClientOriginalName();
            if($file->move('images\lecons',$name))
            {
                $item->chapter_id = $parameters['chapter_id'] ;
                $item->name =  $parameters['name'] ;
                $item->content =  $parameters['content'] ;
                $item->description = $parameters['description'] ;
                $item-> picture = "/images/lecons/".$name;
                $item->save();
            }
        }
        else
            {
                $item->update($request->all());
            }
        return redirect()->route(ADMIN.'.lessons.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lesson::destroy($id);
        return back()->withSuccess(trans('app.success_destroy'));
    }
}
