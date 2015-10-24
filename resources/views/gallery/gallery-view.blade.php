@extends('layouts.master')


@section('title_name')

    Gallery View

@endsection



<div class="container">
    <dive class="row">
        <div class="col-md-12">
            <form action="{{ url('image/do-upload') }}"
                  class="dropzone"
                  id="addImage">
                    {{ csrf_field() }}
                <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">

            </form>
        </div>
    </dive>

</div>


<div class="container">
   <div class="row">
        <div class="col-md-12">
            <div id="gallery-images">
                <ul>
                    @foreach($gallery->images as $image)
                        <li>
                            <a href="{{ url($image->file_path) }}" target="_blank">
                                <img src="{{ url($image->file_path) }}" >
                            </a>
                        </li>
                    @endforeach

                </ul>


            </div>
        </div>

   </div>


</div>






@section('content')
   <div class="row">
       <div class="col-md-12">
           <h1>{{ $gallery->name }}</h1>
       </div>
   </div>

   <div class="row">
       <div class="col-md-12">
           <a href="{{ url('gallery/list') }}" class="btn btn-primary">Back</a>
       </div>
   </div>
@endsection