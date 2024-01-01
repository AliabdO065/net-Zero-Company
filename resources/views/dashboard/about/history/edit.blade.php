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
        <form action="{{route('dashboard.about.history.update')}}" method="POST" enctype="multipart/form-data">
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
                <label>Header</label>
                <input type="text" class="form-control mb-2"value="{{$slide['header']}}" name="header" >
                <textarea name="wordheader" class="form-control" cols="30" rows="3">{{$slide['wordheader']}}</textarea>
            </div>

            <div class="mb-3">
                <label>Date</label>
                <input type="text" class="form-control" value="{{$slide['date']}}" name="date" >
            </div>

            <div class="mb-3">
                <div class="form-inline">
                    <input style="width:30%" class="form-control" type="file" name="img">
                    <img src="{{asset($slide['img'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
                </div>
            </div>

            <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);" class="btn btn-primary">Edit</button>

        </form>            
        </div>
    </div>
</div> 
@endsection

