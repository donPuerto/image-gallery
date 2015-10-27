@extends('layouts.master')


@section('title_name')

    Gallery View

@endsection

<style>
    #gallery-images img{
        width: 222px;
        height: 160px;
        border: 2px solid black;
        margin-bottom: 10px;

    }

    #gallery-images ul {
        margin: 0;
        padding: 0;

    }

    #gallery-images li {
        margin: 0;
        padding: 0;
        list-style: none;
        float: left;
        padding-left: 10px;

    }

</style>

<div class="container">
    <div class="row" style="margin: 0; padding: 0;margin-top: 20px">
        <h1 style="line-height: 15px;">{{ $gallery->name }}</h1>
        <a href="{{ url('gallery/list') }}" class="btn btn-primary">Back</a>


    </div>

</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('image/do-upload') }}"
                  class="dropzone"
                  id="addImages">
                    {{ csrf_field() }}
                <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">

            </form>
        </div>
    </div>

</div>


<div class="container">
   <div class="row">
        <div class="col-md-12">
            <div id="gallery-images">
                <ul>
                    @foreach($gallery->images as $image)
                        <li>
                            <a href="{{ url($image->file_path) }}" data-lightbox="mygallery">
                                <img src="{{ url('/gallery/images/thumbs/' . $image->file_name) }}" >
                            </a>
                        </li>
                    @endforeach

                </ul>


            </div>
        </div>

   </div>


</div>






