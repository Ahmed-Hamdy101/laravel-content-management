@extends('layouts.default')

@section('content')
    <div class="container pb-5 mb-5 ">

        <form action="/catagory/store" class="form pt-5 mt-5 " method="POST">
            @csrf
            <fieldset class="fieldset">

                <legend class="text-primary">
                    <h1> Create Post </h1>
                </legend>
                <div class="form-group">
                    <Label class="form-label text-primary" for="title">name </Label>
                    <input type="text" name="catagory" class="form-control" id="title">
                </div>


                <br>
                <button class="btn btn-sm btn-primary" type="submit"> create catagory <i style="font-size:16px;"
                        class='bi bi-journal-text'> </i> </button>
            </fieldset>

        </form>
    </div>
@endsection
