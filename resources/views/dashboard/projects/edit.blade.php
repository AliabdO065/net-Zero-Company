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
        <form action="{{route('dashboard.project.update')}}" method="POST" enctype="multipart/form-data">
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
            <label >name</label>
            <input type="text" class="form-control" value="{{$slide['name']}}" name="name" >
        </div>
        <div class="mb-3">
            <label >category</label>
            <input type="text" class="form-control" value="{{$slide['category']}}" name="category" >
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
            <textarea name="contentsubtitle1" class="form-control" rows="4">{{$slide['contentsubtitle1']}}</textarea>
        </div>                
        <div class="mb-3">
            <label >title2</label>
            <input type="text" class="form-control mb-2" value="{{$slide['subtitle2']}}" name="subtitle2" >
            <textarea name="contentsubtitle2" class="form-control" rows="4">{{$slide['contentsubtitle2']}}</textarea>
        </div>                
        <div class="mb-3">
            <label >title3</label>
            <input type="text" class="form-control mb-2" value="{{$slide['subtitle3']}}" name="subtitle3" >
            <textarea name="contentsubtitle3" class="form-control" rows="4">{{$slide['contentsubtitle3']}}</textarea>
        </div>  
        <div class="mb-3">
            <label >header 1</label>
            <input type="text" class="form-control mb-2" value="{{$slide['subheader1']}}" name="subheader1" >
            <textarea name="contentsubheader1" class="form-control" rows="4">{{$slide['contentsubheader1']}}</textarea>
        </div>                
        <div class="mb-3">
            <label >header 2</label>
            <input type="text" class="form-control mb-2" value="{{$slide['subheader2']}}" name="subheader2" >
            <textarea name="contentsubheader2" class="form-control mb-2" rows="4">{{$slide['contentsubheader2']}}</textarea>
          <div>
            <input style="width:30%" class="form-inline" type="file" name="bimg1">
            <img style="width:30%;height:120px;    padding: 0 44px;" src="{{asset($slide['bimg1'])}}" class="card-img-top pl-3" style ="width:100px;"  alt="...">
          </div>

        </div>  
        <div class="mb-3">
            <label >contentend</label>
            <textarea name="contentend" class="form-control mb-2" rows="4">{{$slide['contentend']}}</textarea>
            <div>
            <input style="width:30%" class="form-inline" type="file" name="bimg2">
            <img  style="width:30%;height:120px;    padding: 0 44px;" src="{{asset($slide['bimg2'])}}" class="card-img-top" style ="width:100px;"  alt="...">
            </div> 
        </div>   
        <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);position: fixed;bottom: 10%;left: 10%;" class="btn btn-primary">Edit</button>

        </form>
        </div> 
    </div>
    </div> 
@endsection

