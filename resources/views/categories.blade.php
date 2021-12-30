@extends('layout.main')

@section('container')

    <h1 class="mt-4 mb-5">Post Categories</h1>

    @if ($categories->count())

        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4 align-items-stretch">
                        <a href="/posts?category={{ $category->slug }}">
                            <div class="card bg-dark text-white h-100">
                                <img src="https://source.unsplash.com/500x400/?{{ $category->name }}" class="card-img-top" alt="{{ $category->name }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach 
            </div>
        </div>

    @else 
        <p class="text-center fs-4">Not Category Found</p>
    @endif

@endsection