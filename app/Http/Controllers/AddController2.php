<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AddController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashbord.pages.addcates');
      return redirect(route('allcates'));
      
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
        $data =  [
            'cates'=> $request->input('cates'),
            'subcats'=> $request->input('sub_1'),
            'subcats2'=> $request->input('manu')
               
             
        ];
        DB::table('addcatagory')->insert($data); 
        
        echo "<div className='alert alert-success' role='alert'>
        <h2>Data create Successfully</h2>
      </div>";
        

        // return redirect('front/pages/addcates');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data'] = DB::table('addcatagory')->get();
        if(count($data[0] )> 0)
        {
            return view('inertForm', $data);
        }
        else
        {
            return view('insertForm');
        }
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
        
    }
}
