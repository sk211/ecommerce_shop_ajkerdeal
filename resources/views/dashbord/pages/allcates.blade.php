
@extends('dashbord.master')

@section('title')
   | All Category
@endsection


@section('content')
   <!-- Left side column. contains the logo and sidebar -->
 

    <!-- Main content -->

    <div class="container" id="order_list">
      <button type="button" class="btn btn-primary btn-lg mb-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Category +</button>
          <div class="row">
            
            <div class="col-md-10 offset-1 mt-5 pt-5">
              <table class="table">
                <thead style="background:#FC4A9E; color:aliceblue;">
                  <tr>
                    <th scope="col">sl no</th>
                    <th scope="col">Cats Name</th>
                    <th scope="col">Sub-cats</th>
                    <th scope="col">Sub-cate-2</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $value)
                      
                 
                  <tr>
                  <th scope="row">{{ $value->id}}</th>
                    <td>{{ $value->cates}}</td>
                    <td>{{ $value->sub_1}}</td>
                    <td>{{ $value->subcats2}}</td>
                   
                    <td>
                      <button type="button" class="btn btn-warning">Edit </button>
                      <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                  </tr>
                  @endforeach
                
  
  
                </tbody>
              </table>
            </div>
          </div>
        </div>
  
    
  
  
  
@endsection


  