@extends('layout')

@section('content')
<form method="post" action="{{route('admin.login')}}" class="container py-5 h-100">
    @csrf
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">

                        <h2 class="fw-bold mb-2 text-uppercase text-white">Login</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>

                        <div class="form-outline form-white mb-4">
                            <label class="form-label" for="typeEmailX">Email</label>
                            <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline form-white mb-4">
                            <label class="form-label" for="typePasswordX">Password</label>
                            <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                        </div>

                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
