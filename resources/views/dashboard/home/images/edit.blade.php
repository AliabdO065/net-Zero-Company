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
        <form action="{{route('dashboard.images.home.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="hidden" name="old" value="{{$old}}">

            <div class="mb-3 form-inline">
                <label  >Image</label>
                <input type="hidden" name="image"  value="{{$slide['img']}}">
                <input style="width:30%" class="form-control" type="file" name="img">
                <img src="{{asset($slide['img'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>

            <hr style="background-color: yellow; height: 2px;">
            <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);" class="btn btn-primary">Edit</button>
            <hr style="background-color: yellow; height: 2px;">

        </form>
        </div>
    </div>
    </div> 
@endsection

