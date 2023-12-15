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
        <form action="{{route('dashboard.services.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control"> 
                    <option selected value="appear">appear</option>
                    <option  value="disappear">disappear</option>
                  </select>
            </div>
            <div class="mb-3">
                <label >Header</label> 
                <input type="text" class="form-control" name="header">
            </div>
            <div class="mb-3">
                <label >Service 1</label>
                <input type="text" class="form-control mb-2" name="title1" >
                <textarea name="contenttitle1" class="form-control" rows="4"></textarea>
            </div>   
            <div class="mb-3">
                <label >Service 2</label>
                <input type="text" class="form-control mb-2" name="title2" >
                <textarea name="contenttitle2" class="form-control" rows="4"></textarea>
            </div>   
            <div class="mb-3">
                <label >Service 3</label>
                <input type="text" class="form-control mb-2" name="title3" >
                <textarea name="contenttitle3" class="form-control" rows="4"></textarea>
            </div>   
            <div class="mb-3"> 
                <label  >The Image</label>
                <input  class="form-control" type="file" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
    </div>
@endsection

