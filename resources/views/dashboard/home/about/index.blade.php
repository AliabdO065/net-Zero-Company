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
        <form action="{{route('dashboard.about.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label >Header</label>
                <input type="text" class="form-control" value="{{$slide['header']}}" name="header" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['wordheader']}}" name="wordheader" >
            </div>
            
            <div class="mb-3">
                <label >History</label>
                <input type="text" class="form-control" value="{{$slide['thistory']}}" name="thistory" >
                <textarea name="history" class="form-control" rows="4">{{$slide['history']}}</textarea>
            </div>
            <div class="mb-3">
                <label >Mission</label>
                <input type="text" class="form-control" value="{{$slide['tmission']}}" name="tmission" >
                <textarea name="mission" class="form-control" rows="4">{{$slide['mission']}}</textarea>
            </div>
            <div class="mb-3">
                <label >Vision</label>
                <input type="text" class="form-control" value="{{$slide['tvision']}}" name="tvision" >
                <textarea name="vision" class="form-control" rows="4">{{$slide['vision']}}</textarea>
            </div>

            <label >Percentages</label>
            <div class="mb-3  form-inline">
                <input type="text" style="width:70%"  class="form-control pr-6"  value="{{$slide['row1']}}" name="row1" >
                <input type="text" style="width:20%" class="form-control" value="{{$slide['p1']}}" name="p1" >
            </div>
            <div class="mb-3  form-inline">
                <input type="text" style="width:70%" class="form-control pr-6"  value="{{$slide['row2']}}" name="row2" >
                <input type="text" style="width:20%" class="form-control" value="{{$slide['p2']}}" name="p2" >
            </div>
            <div class="mb-3  form-inline">
                <input type="text" style="width:70%" class="form-control pr-6"  value="{{$slide['row3']}}" name="row3" >
                <input type="text"  style="width:20%" class="form-control" value="{{$slide['p3']}}" name="p3" >
            </div>

            <div class="mb-3 form-inline">
                <label  >Image 1</label>
                <input type="hidden" name="image1"  value="{{$slide['img1']}}">
                <input style="width:30%" class="form-control" type="file" name="img1">
                <img src="{{asset($slide['img1'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>

            <div class="mb-3 form-inline">
                <label  >Image 2</label>
                <input type="hidden" name="image2"  value="{{$slide['img2']}}">
                <input style="width:30%" class="form-control" type="file" name="img2">
                <img src="{{asset($slide['img2'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>

            <div class="mb-3 form-inline">
                <label  >Image 3</label>
                <input type="hidden" name="image3"  value="{{$slide['img3']}}">
                <input   style="width:30%"  class="form-control" type="file" name="img3">
                <img src="{{asset($slide['img3'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>


            <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);" class="btn btn-primary">Edit</button>

        </form>
        </div>
    </div>
    </div> 
@endsection

