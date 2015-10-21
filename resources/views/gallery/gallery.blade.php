@extends('layouts.master')


@section('title_name')

    Gallery Section

@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Galleries</h1>
        </div>
    </div>

    <div class="row">

        <div class="col-md-8">

            <table class="table table-striped table-bordered table-responsive table-hover">
                <thead>
                <tr>
                    <th colspan="2">Gallery Type</th>


                </tr>
                </thead>
                <tbody>
                @foreach($gallery as $gallery)
                    <tr>
                        <td>{{ $gallery->name }}</td>
                        <td><a href="{{ url('gallery/view/'.$gallery->id) }}">View</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>



        </div> {{--col-md-8--}}


        <div class="col-md-4">

            @if($errors->any())
                <ul class="alert alert-danger" style="list-style: none">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <form class="form" method="post" action="{{ url('gallery/save') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                    <input type="text"
                           name="gallery_name"
                           id="gallery_name"
                           class="form-control"
                           value= "{{ old('gallery_name')}}"
                           title=""
                           placeholder="Gallery Name"
                           required="required" />

                </div>

                <button type="submit" class="btn btn-primary btn-raised">Save</button>


            </form>

        </div> {{--col-md-4--}}


    </div>

@endsection