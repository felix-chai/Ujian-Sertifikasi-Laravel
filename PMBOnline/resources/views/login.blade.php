@extends('master')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-2-strong" style="border-radius: 1rem;">
        <div class="card-body p-5 text-center">
            <h3 class="mb-5">Sign in</h3>
            
            <form method="post" action="{{ route('login') }}">
                @csrf
                
                <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Email</label>
                </div>
                
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Password</label>
                </div>
                
                <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
  </section>
@endsection('content')