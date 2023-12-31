@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $posts->image) }}" class="card-img-top" alt="" width="600px">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $posts->title }}</h5>
                        <p class="card-text"> {{ $posts->content }}</p>
                        <p class="card-text"> {{ $posts->slug }}</p>
                        <a href="{{ Route('admin.posts.index') }}" class="btn btn-primary">Back Home</a>
                        <p class="card-text"> {{ $posts->category->name }} </p>
                        <div class="col-12">
                            <strong>Tecnologie:</strong>
                            @if ($posts->technologies)
                                @foreach ($posts->technologies as $technology)
                                    <a href="" class="btn btn-sm btn-primary">{{ $technology->name }}</a>
                                @endforeach
                            @else
                                Non sono presenti tecnologie associate al progetto
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
