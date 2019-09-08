<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AddController extends Controller
{
   public function index(){
  }
  public function store(Request $request){  

      $data =  [
          'cates'=> $request->input('cates'),
          'subcats'=> $request->input('manu_1'),
          'subcats2'=> $request->input('manu'),
             
           
      ];
      DB::table('addcatagory')->insert($data); 

    //   $categories = new Add_Category ;
    //   $categories-> catsname= $ruquest->cates;
    //   $categories-> sub_cates= $ruquest->subcates;
    //   $categories-> manu= $ruquest->sub_cates_2;
    //   $categories->save();
  }
}
