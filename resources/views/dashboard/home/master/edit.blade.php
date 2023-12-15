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
        <form action="{{route('dashboard.master.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="hidden" name="old" value="{{$old}}">
            <input type="hidden" name="image"  value="{{$slide['img']}}">
            <div class="mb-3">
                <label >Name</label> 
                <input type="text"  value="{{$slide['name']}}" class="form-control" name="name">
            </div>
            <div class="mb-3"> 
                <label >position</label>
                <input type="text"  value="{{$slide['position']}}" class="form-control" name="position"> 
            </div>
            
            <label >Social Media</label> 
            <div class="mb-3 pb-1 form-inline">
                <label >Facebook</label> 
                <input  value="{{$slide['facebook']}}" style="position: relative;left: 2%;width: 66%;" type="text" class="form-control" name="facebook">
            </div>
            <div class="mb-3 pb-1 form-inline"> 
                <label >Twitter</label> 
                <input type="text"  value="{{$slide['twitter']}}" class="form-control" style="position: relative;left: 2%;width: 66%;" name="twitter"> 
            </div>
            <div class="mb-3 pb-1  form-inline">
                <label >Social Media</label> 
                <input type="text" class="form-control"  value="{{$slide['insta']}}" style="position: relative;left: 2%;width: 66%;" name="insta">
            </div>
            <div class="mb-3 pb-1  form-inline"> 
                <label >Social Media</label> 
                <input type="text" class="form-control"  value="{{$slide['gmail']}}" style="position: relative;left: 2%;width: 66%;" name="gmail"> 
            </div>
            <div class="mb-3"> 
                <label  >The Image</label>
                <img src="{{asset($slide['img'])}}" class="card-img-top mb-3" style ="width:200px;float:right"  alt="...">
                <input  class="form-control" type="file" name="img">
            </div>
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control" name="status"> 
                    <option <?php if($slide['status']=='appear') echo'selected' ?> value="appear">appear</option>
                    <option <?php if($slide['status']=='disappear') echo'selected'?> value="disappear">disappear</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

