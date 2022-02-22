@extends('layouts.app')

@section('title')
 
 

@endsection

@section('content')
 
<h1 class="text-center">Create Todos</h1>

<div class="row justify-content-center my-5">
    <div class="col-md-8">
       <div class="card card-default">
           <div class="card-header">
               Create New Todo
           </div>

           
           <div class="card-body">
           @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/store-todos" method="POST">
                @csrf
                <div class="form-group my-2">
                    
                    <input type="text" name="name" placeholder="Name" class="form-control">
                
                </div>
                <div class="form-group my-1">
                    
                    <textarea name="description" placeholder="Description" id="" cols="5" rows="5" class="form-control" ></textarea>
                
                </div>
                <div class="form-group text-center">

                  <button type="submit" class="btn btn-info text-center">Create Todo</button>
                
                </div>
            </form>
           </div>
           
       </div>

    </div>

</div>

@endsection