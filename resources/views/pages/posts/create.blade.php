@extends('layouts.default')

@section('content')

    <div class="container pt-5">

        <form action="/posts/store" class="form" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset class="fieldset">

                <legend class="text-primary">
                    <h1> Create Post </h1>
                </legend>
                <hr>
                <div class="form-group">
                    <Label class="form-label text-primary" for="title">Title </Label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                
                <div class="form-group mt-2">
                  <Label class="form-label text-primary" for="texthere">Content </Label>
                  <textarea name="content" class="form-control" placeholder="hold on type it ...." style="resize: none" cols="10"
                  rows="5" id="texthere"> </textarea>
                </div>
                <div class="form-group mt-2 mb-4">
                    <Label class="form-label text-primary" for="image">Image </Label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>



                <div class="form-group">
                    <label class="form-label text-primary" for="content">Catagory</label>
                    <select name="catagory_id" id="content" class="form-control">
                        @foreach ($catagory as $c)
                            <option value="{{ $c->id }}"> {{ $c->name }}</option>
                        @endforeach

                    </select>
                </div>

                <br>
                <button class="btn btn-sm btn-primary" type="submit"> Add Post <i style="font-size:16px;"
                        class='bi bi-journal-text'> </i> </button>
            </fieldset>

        </form>
    </div>
@endsection