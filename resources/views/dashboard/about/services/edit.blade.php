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
        <form action="{{route('dashboard.about.services.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="hidden" name="old" value="{{$old}}">
            <input type="hidden" name="image"  value="{{$slide['img']}}">
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control" name="status"> 
                    <option <?php if($slide['status']=='appear') echo'selected' ?> value="appear">appear</option>
                    <option <?php if($slide['status']=='disappear') echo'selected'?> value="disappear">disappear</option>
                    </select>
            </div>
            <div class="mb-3">
                <label >first title</label> 
                <textarea name="title1" class="form-control" rows="4">{{$slide['title1']}}</textarea>
            </div>
            <div class="mb-3"> 
                <label >second title</label>
                <textarea name="title2" class="form-control" rows="4">"{{$slide['title2']}}</textarea>
            </div>
            <div class="mb-3"> 
                <label  >The Image</label>
                <img src="{{asset($slide['img'])}}" class="card-img-top mb-3" style ="width:200px;float:right"  alt="...">
                <input  class="form-control" type="file" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

