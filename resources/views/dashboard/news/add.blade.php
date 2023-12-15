@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <div class="page-inner">
        <!-- .page-inner -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
            @endif
            <form action="{{route('dashboard.news.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                    <div class="mb-3"> 
                        <label >Status</label>
                        <select name="status" class="form-control"> 
                            <option selected value="appear">appear</option>
                            <option value="disappear">disappear</option>
                        </select>
                    </div>
            <hr style="background-color: yellow; height: 2px;">
                <div class="mb-3">
                    <label >Date</label>
                    <input type="text" class="form-control" name="date" >
                </div>
                <div class="mb-3"> 
                    <label >category</label>
                    <select  name="category"class="form-control"> 
                        <option value="NEWS">News</option>
                        <option value="INSIGHTS">INSIGHTS</option>
                      </select>
                </div>        
                <div class="mb-3">
                    <label >title</label>
                    <input type="text" class="form-control"  name="title" >
                </div>
                <div class="mb-3">
                    <label >wordtitle</label>
                    <textarea name="wordtitle" class="form-control" rows="4"></textarea>
                </div>      
                <div class="mb-3 form-inline">
                    <label  > The Main Image</label>
                    <input  class="form-control" type="file" name="img">
                </div>        
                <div class="mb-3">
                    <label >title1</label>
                    <input type="text" class="form-control mb-2" name="subtitle1" >
                    <input style="width:30%" class="form-inline mb-2" type="file" name="bimg1">
                    <textarea name="contentsubtitle1" class="form-control" rows="4"></textarea>
                </div>                
                <div class="mb-3">
                    <label >title2</label>
                    <input type="text" class="form-control mb-2" name="subtitle2" >
                    <input style="width:30%" class="form-inline mb-2" type="file" name="bimg2">
                    <textarea name="contentsubtitle2" class="form-control" rows="4"></textarea>
                </div>                
                <div class="mb-3">
                    <label >title3</label>
                    <input type="text" class="form-control mb-2" name="subtitle3" >
                    <textarea name="contentsubtitle3" class="form-control" rows="4"></textarea>
                </div>  
            <hr style="background-color: yellow; height: 2px;">
                <div class="mb-3">
                    <label >contentend</label>
                    <textarea name="contentend" class="form-control mb-2" rows="4"></textarea>
                </div>   
                <hr style="background-color: yellow; height: 20px;">
                <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);" class="btn btn-primary">Add New</button>
                <hr style="background-color: yellow; height: 2px;">
    
            </form>
        </div>
    </div>
    </div>
@endsection

