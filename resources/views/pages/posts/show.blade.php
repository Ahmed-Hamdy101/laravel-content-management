@extends('layouts.default')

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col-6 m-auto p-5 rounded border shadow">

                <h1 class="text-center"> <a class="text-decoration-none " href=""> {{ $post->title }} <i class="bi bi-journal"></i> </a>
                </h1>

                <p > <p class=" p-3 rounded text-success bg-dark"> {{ $post->content }}</p></p>

                <div class="col-sm-4 mb-5 p-3 m-auto">

                    <a href="{{ $post->id }}/edit" class="btn btn-block btn-danger "> update </a>

                </div>

            </div>
        </div>
    </div>
@endsection
