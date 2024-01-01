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
        <form action="{{route('dashboard.news.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            
            <input type="hidden" name="old" value="{{$old}}">
            <input type="hidden" name="image"  value="{{$slide['img']}}">
            <input type="hidden" name="bimage1"  value="{{$slide['bimg1']}}">
            <input type="hidden" name="bimage2"  value="{{$slide['bimg2']}}">
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control"> 
                    <option <?php if($slide['status']=='appear') echo'selected' ?> value="appear">appear</option>
                    <option <?php if($slide['status']=='disappear') echo'selected'?> value="disappear">disappear</option>
                  </select>
            </div>
        <div class="mb-3">
            <label >Date</label>
            <input type="text" class="form-control" value="{{$slide['date']}}" name="date" >
        </div>
        <div class="mb-3"> 
            <label >category</label>
            <select  name="category"class="form-control"> 
                <option <?php if($slide['category']=='News') echo'selected' ?> value="News">News</option>
                <option <?php if($slide['category']=='INSIGHTS') echo'selected'?> value="INSIGHTS">INSIGHTS</option>
              </select>
        </div>
        <div class="mb-3">
            <label >title</label>
            <input type="text" class="form-control" value="{{$slide['title']}}" name="title" >
        </div>
        <div class="mb-3">
            <label >wordtitle</label>
            <textarea name="wordtitle" class="form-control" rows="4">{{$slide['wordtitle']}}</textarea>
        </div>      
        <div class="mb-3 form-inline">
            <label  > The Main Image</label>
            <input  class="form-control" type="file" name="img">
            <img src="{{asset($slide['img'])}}" class="card-img-top" style ="width:100px;"  alt="...">
        </div>        
        <div class="mb-3">
            <label >title1</label>
            <input type="text" class="form-control mb-2"  value="{{$slide['subtitle1']}}" name="subtitle1" >
            <input style="width:50%;display:inline-block;" class="form-control" type="file" name="bimg1">
            <img src="{{asset($slide['bimg1'])}}" class="card-img-top mb-2" style ="width:100px;"  alt="...">
            <textarea name="contentsubtitle1" class="form-control" rows="4">{{$slide['contentsubtitle1']}}</textarea>
        </div>                
        <div class="mb-3">
            <label >title2</label>
            <input type="text" class="form-control mb-2" value="{{$slide['subtitle2']}}" name="subtitle2" >
            <input style="width:50%;display:inline-block;" class="form-control" type="file" name="bimg2">
            <img src="{{asset($slide['bimg2'])}}" class="card-img-top mb-2" style ="width:100px;"  alt="...">
            <textarea name="contentsubtitle2" class="form-control" rows="4">{{$slide['contentsubtitle2']}}</textarea>
        </div>                
        <div class="mb-3">
            <label >title3</label>
            <input type="text" class="form-control mb-2" value="{{$slide['subtitle3']}}" name="subtitle3" >
            <textarea name="contentsubtitle3" class="form-control" rows="4">{{$slide['contentsubtitle3']}}</textarea>
        </div>   
        <div class="mb-3">
            <label >contentend</label>
            <textarea name="contentend" class="form-control mb-2" rows="4">{{$slide['contentend']}}</textarea>
        </div>   
        <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);position: fixed;bottom: 10%;left: 10%;" class="btn btn-primary">Edit</button>

        </form>
        </div>
    </div>
    </div> 
@endsection

