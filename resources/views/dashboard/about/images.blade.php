@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <div class="page-inner">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <?php 
                $string = $content;
                $pairs = explode('#x#', $string);
                $slide = [];
                foreach ($pairs as $pair) {
                    list($key, $value) = explode('=#=', $pair);
                    $slide[$key] = $value;
                }
                // print_r($slide);die;
            ?>
        <!-- .page-inner -->
        <form action="{{route('dashboard.about.images.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label >Header</label>
                <input type="text" class="form-control" value="{{$slide['header']}}" name="header" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['wordheader']}}" name="wordheader" >
            </div>
            <a href="{{route('dashboard.images.home')}}" type="button" class="btn btn-success">Go to Images</a>
            
            <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);color:black" class="btn btn-primary">Edit</button>
           

        </form>
        </div>
    </div>
    </div> 
@endsection

