@extends('layout.master')
 
@section('title', 'Login')
 
@section('content')
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin: 20px">
                <h4>Login</h4>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="name">Email</label>                        
                        <input for="text" class="form-control" placeholder="Enter Email" name="email" value="">
                    </div>
        
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input for="text" class="form-control" placeholder="Enter Password" name="Password" value="">
                    </div>
        
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="Submit">Login</button>
                    </div>
                    <br>
                    <a href="registration">New User !! Register Here</a>
                </form>
            </div>
        </div>
        

@stop