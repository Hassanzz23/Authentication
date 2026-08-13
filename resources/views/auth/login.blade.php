@extends('layout.master')

@section('content')
    <div class="col-12 col-md-6">
        <div class="card">
            <h5 class="card-header">Login</h5>
            <div class="card-body">
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">

                        <div class="form-text text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">

                        <div class="form-text text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <button type="submit" class="btn btn-dark">
                            Submit
                        </button>

                        <a href="{{ route('forget.password') }}">
                            Forget password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
