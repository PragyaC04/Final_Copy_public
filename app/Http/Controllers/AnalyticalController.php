<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualitative;
use Illuminate\Support\Facades\Input;
use App\User;

class AnalyticalController extends Controller
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
        $rating = Qualitative::firstOrNew(['id' =>auth()->user()->id]);
        $data= $request->all();
        //$count=1;
        $name=array_keys($data);
        $count=count($name);
        $k=$request->input('pagesfield');
     //   echo $k;  
       // return $name;
       //return $data;
      // $v=$name[$count];
       //echo $v;
       for($d=2;$d<=$count-1;$d=$d+1)
       // foreach($name as $n)
        {
              $rating->id= auth()->user()->id;
              $f="ANA_ANS".$name[$d-1];
              $rating->$f = $data[$name[$d-1]];
              //echo " <br> ".$f." ";
              //echo $data[$name[$d-1]];    
         }
         $rating->save();
      //   $section='Analytical';
      //return view('viewfinal',['section'=>$section]);
      if($k=="0")
      {
        return redirect()->route('final');
      }
      else{
        return redirect('qualitative');
      }
        
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
