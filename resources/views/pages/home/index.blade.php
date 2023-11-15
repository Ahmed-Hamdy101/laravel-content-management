@extends('layouts.default')

@section('content')
    <div class="container-fluid p-5 vh-100 angel">

        <div class="row d-flex">
            <div class=" col-6 text-start align-self-center mt-5 tex-sm-text text-start angel-text ">
                <small class="text-light ">Welcome in </small>
                <h1 class=" lh-sm ">Izac show</h1>
                <p class="text-light"> </p>
                <div class="d-grid gap-2 col-sm-12 col-lg-8  float-left">

                    <a href="" class=" btn btn-block rounded-9 btn-light btn-sm-dark py-3  shadow-4 fs-6"> <i
                            class=" fs-6 bi bi-chevron-right text-primary"></i> <strong
                            class="text-primary">case</strong></a>

                </div>
            </div>
            <div class="col-6 img-fluid" id="female">
                {{-- here animation female json --}}
            </div>
        </div>
        <!-- Background image -->

    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-6 ps-5">
                <img src="{{ asset('./img/frame.svg') }}" width="400" class=" img-fluid">
            </div>

            <div class="col-6 align-self-center text-justify lh-lg">

                <h1 class="ps-3  ptext-primary fw-bold "> About <span class=" mb-5 text-primary "> <i
                            class="bi bi-chevron-right"></i> US</span> </h1>
                <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, tempore
                    repellendus. Expedita, dignissimos praesentium voluptas voluptate quas saepe ab numquam quos
                    perspiciatis! Eum nulla eos fuga, aspernatur aut quisquam assumenda.</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row ">
                <div class="col-6 align-self-center text-justify lh-lg ps-5">
                    <h1 class="ps-3  ptext-primary fw-bold "> Why <span class=" mb-5 text-primary "> <i
                                class="bi bi-chevron-right"></i> Laravel</span> </h1>
                    <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, tempore
                        repellendus. Expedita, dignissimos praesentium voluptas voluptate quas saepe ab numquam quos
                        perspiciatis! Eum nulla eos fuga, aspernatur aut quisquam assumenda.</p>
                </div>

                <div class="col-6 d-flex justify-content-end">
                    <img src="{{ asset('./img/tech.svg') }}" width="400" class=" img-fluid">
                </div>
            </div>

            <div class="p-5 mt-5" id="badge">
                <h1 class="w-50 text-dark  ms-auto text-breakd"> Read More </h1>
                <p class="w-50 text-dark  ms-auto text-break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                    nemo eum neque. Sequi incidunt odio obcaecati earum tempora quasi explicabo architecto. Nulla cum
                    debitis dicta deleniti, ducimus at odio explicabo.</p>

                <div class="row ">
                    <div class="col-6 ms-auto">
                        <a href="" class="btn btn-primary rounded-7 w-25 text-capitalize">Explore More</a>
                    </div>
                </div>

            </div>


            <div class="container-fluid  my-5 py-5">

                <h1 class="ps-3  ptext-primary fw-bold " id="jobs">Jobs</h1>
                <h4 class="ps-5 mb-5 text-primary "> functions <i class="bi bi-chevron-right "></i></h4>
                <section class="text-center row ">

                    <div class="col-lg-6 col-sm-4 mb-5 mb-md-5 mb-lg-0 position-relative">
                        <img src="{{ asset('/img/add_files.svg') }}" alt="" class=" mb-5 w-25">
                        <br>
                        <a class="fw-bold mb-0 mt-5 btn btn-primary" href="catagory/">Catagory <i
                                class="bi bi-plus-circle"></i></a>
                    </div>
                    <div class="col-lg-6 col-sm-4 mb-5 mb-md-5 mb-lg-0 position-relative">
                        <img src="{{ asset('/img/blog_post.svg') }}" alt="" class="img-fluid mb-5 w-25">
                        <br>
                        <a class="fw-bold mb-0 mt-5 btn btn-primary" href="/posts/create">Post <i
                                class="bi bi-plus-circle"></i></a>
                    </div>

                </section>
            </div>
            
            <div class="container-fluid">
                <div class="row pt-3 ">
                    <h1 class="ps-3  ptext-primary fw-bold " id="jobs">Last Posts</h1>
                    @foreach ($posts as $post)
                        <div class="col-sm-4 col-md-6  col-md-4 col-lg-3  h-25 ">

                            <div class="card mb-1 text-dark text-center ">
   
                                    <div class="card-body">
                                        <img src="{{ asset('storage/' . $post->image) }}" height="150" class="rounded ripple"> <br>
                                    <p class="badge badge-danger m-3 "> {{ $post->catagory?->name }} </p><br>
                                    <h2 class="card-title text-center fs-3"> {{ $post->title }}
                                    </h2>
                                    <br>                   
                                    <a href="posts/{{ $post->id }}"
                                        class="card-link btn btn-sm btn-info mt-5 d-flex justify-content-center"
                                        style="border-radius: 7px ;">View Post</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @stop
