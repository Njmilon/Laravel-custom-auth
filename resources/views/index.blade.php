@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
            {{--  <br><br><br><br>  --}}
            <h2 style="text-align: center" class="mt-4">CUSTOM AUTHENTICATION</h2>
           <h3 style="text-align: center">Go Into<br><br>
             
            <form action="{{ route('login.index') }}">
                <button class="btn btn-primary">Login</button>
            </form> 
            
            <form action="{{ route('registration.index') }}">
                <button class="btn btn-primary">Registration</button>
            </form> 
         
            </h3>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>

@endsection