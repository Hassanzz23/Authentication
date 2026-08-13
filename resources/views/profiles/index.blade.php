@extends('layout.master')

@section('content')
    @foreach ($profiles as $profile)
        <div class="col-12 col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $profile->title }}</h5>
                    <p class="card-text">{{ $profile->body }}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection
