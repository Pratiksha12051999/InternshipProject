<?php

namespace App\Http\Controllers;

use App\Qualitative;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ComprehensionController extends Controller
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
        //return $request->all();
       $rating = Qualitative::firstOrNew(['id' =>'1']);
       $data=input::all('value');
       //$count=1;
       $name=array_keys($data);
       $count=count($name);
      // return $name;
      for($d=1;$d<=$count;$d=$d+1)
      // foreach($name as $n)
       {
             $rating->id= 1;
             $f="COMP_ANS".$name[$d-1];
             $rating->$f = $data[$name[$d-1]];
             //echo $f." ";
             //echo $data[$name[$d-1]];    
        }
       //  $count=$count+1;
        $rating->save();
        $section='Comprehension';
        return view('viewfinal',['section'=>$section]);
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
