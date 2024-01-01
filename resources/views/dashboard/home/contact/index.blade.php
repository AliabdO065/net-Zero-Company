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
        <!-- .page-inner -->
        <form action="{{route('dashboard.contact.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
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
            {{-- <input type="hidden" name="old" value="{{$old}}"> --}}
            <div class="mb-3">
                <label >directMail</label>
                <input type="text" class="form-control" value="{{$slide['directMail']}}" name="directmail" >
            </div>
            <div class="mb-3">
                <label >directPhone</label>
                <input type="text" class="form-control" value="{{$slide['directPhone']}}" name="directphone" >
            </div>
<hr>
            <div class="mb-3 form-inline">
                <label  >Image</label>
                <input type="hidden" name="image"  value="{{$slide['img']}}">
                <input style="width:30%" class="form-control" type="file" name="img">
                <img src="{{asset($slide['img'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>

            <div class="mb-3">
                <label >Header</label>
                <input type="text" class="form-control" value="{{$slide['header']}}" name="header" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['wordheader']}}" name="wordheader" >
            </div>
            <div class="mb-3">
                <label >Title</label>
                <input type="text" class="form-control" value="{{$slide['title']}}" name="title" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['wordtitle']}}" name="wordtitle" >
            </div>
            <div class="mb-3">
                <label >Welcome words</label>
                <input type="text" class="form-control" value="{{$slide['words']}}" name="words" >
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

