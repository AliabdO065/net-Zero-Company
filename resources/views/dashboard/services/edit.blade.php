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
        <form action="{{route('dashboard.services.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="hidden" name="old" value="{{$old}}">
            <input type="hidden" name="image"  value="{{$slide['img']}}">
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control"> 
                    <option <?php if($slide['status']=='appear') echo'selected' ?> value="appear">appear</option>
                    <option <?php if($slide['status']=='disappear') echo'selected'?> value="disappear">disappear</option>
                  </select>
            </div>
            <div class="mb-3">
                <label >Header</label> 
                <input type="text" class="form-control" value="{{$slide['header']}}" name="header">
            </div>
            <div class="mb-3">
                <label >Service 1</label>
                <input type="text" class="form-control mb-2" value="{{$slide['title1']}}" name="title1" >
                <textarea name="contenttitle1" class="form-control" rows="4">{{$slide['contenttitle1']}}</textarea>
            </div>   
            <div class="mb-3">
                <label >Service 2</label>
                <input type="text" class="form-control mb-2" value="{{$slide['title2']}}" name="title2" >
                <textarea name="contenttitle2" class="form-control" rows="4">{{$slide['contenttitle2']}}</textarea>
            </div>   
            <div class="mb-3">
                <label >Service 3</label>
                <input type="text" class="form-control mb-2" value="{{$slide['title3']}}" name="title3" >
                <textarea name="contenttitle3" class="form-control" rows="4">{{$slide['contenttitle3']}}</textarea>
            </div>   

            <div class="mb-3 form-inline">
                <label  >The Image</label>
                <input style="width:50% "  class="form-control" type="file" name="img">
                <img src="{{asset($slide['img'])}}" class="card-img-top" style ="width:100px;"  alt="...">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

