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
            <form action="{{route('dashboard.projects.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                    <div class="mb-3"> 
                        <label >Status</label>
                        <select name="status" class="form-control"> 
                            <option selected value="appear">appear</option>
                            <option value="disappear">disappear</option>
                        </select>
                    </div>
                <div class="mb-3">
                    <label >name</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="mb-3">
                    <label >category</label>
                    <input type="text" class="form-control"  name="category" >
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
                    <textarea name="contentsubtitle1" class="form-control" rows="4"></textarea>
                </div>                
                <div class="mb-3">
                    <label >title2</label>
                    <input type="text" class="form-control mb-2" name="subtitle2" >
                    <textarea name="contentsubtitle2" class="form-control" rows="4"></textarea>
                </div>                
                <div class="mb-3">
                    <label >title3</label>
                    <input type="text" class="form-control mb-2" name="subtitle3" >
                    <textarea name="contentsubtitle3" class="form-control" rows="4"></textarea>
                </div>  
                <div class="mb-3">
                    <label >header 1</label>
                    <input type="text" class="form-control mb-2" name="subheader1" >
                    <textarea name="contentsubheader1" class="form-control" rows="4"></textarea>
                </div>                
                <div class="mb-3">
                    <label >header 2</label>
                    <input type="text" class="form-control mb-2" name="subheader2" >
                    <textarea name="contentsubheader2" class="form-control mb-2" rows="4"></textarea>
                    <input style="width:30%" class="form-inline" type="file" name="bimg1">
                </div>  
                <div class="mb-3">
                    <label >contentend</label>
                    <textarea name="contentend" class="form-control mb-2" rows="4"></textarea>
                    <input style="width:30%" class="form-inline" type="file" name="bimg2">                    
                </div>   
                <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);" class="btn btn-primary">Add project</button>
    
            </form>
        </div>
    </div>
    </div>
@endsection

