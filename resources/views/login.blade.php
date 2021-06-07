@extends('master')
@section('content')
<div class="container" style="height: 500px;padding-top:100px;">
    <div class="row">
        <div class="col-lg-5 col-md-6 mx-auto">
            <form action="/login" method="post">
              @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
    
</div>    
@endsection
