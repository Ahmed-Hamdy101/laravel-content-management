@extends('layouts.default')

@section('content')
    <div class="container mt-5 pt-5 ">

        <div class="row mt-5 pt-5">
            <div class="col-sm-4 mb-5 p-5 m-auto ">
                <a href="/posts/create/" class="btn btn-block btn-info"> <i class="bi bi-journal-plus"></i> Create Post</a>
            </div>
        </div>
        <div class="row">
        @foreach ($posts as $post)
            <div class="col-sm-4 col-md-6  col-md-4 col-lg-3">

                <div class="card mb-1  text-dark  ">
                    <div class="card-body  ">
                        </i>
                        <h1 class="card-title text-center"> {{ $post->title }} <i class="bi bi-journal-text text-info"></i>
                        </h1>
                        <p class="card-subtitle">{{ $post->category->name }} </p>
                        <p class="card-text mt-1 p-1"> {{ $post->content }} </p>
                        <a href="posts/{{ $post->id }}"
                            class="card-link btn btn-sm btn-info mt-5 d-flex justify-content-center"
                            style="border-radius: 7px ;">View Post</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
        @overwrite
