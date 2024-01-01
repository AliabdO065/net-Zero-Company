@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <div class="page-inner">
        <!-- .page-inner -->
        <form action="{{route('dashboard.about.history.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            
            <div class="mb-3">
              <label >Header</label>  @error('header')<div class="alert alert-danger">{{ $message }}</div>@enderror
              <input type="text" class="form-control" name="header" class="@error('header') is-invalid @enderror">
            </div>
            <div class="mb-3"> 
                @error('wordheader')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <textarea name="wordheader" class="form-control" cols="30" rows="3" class="@error('wordheader') is-invalid @enderror"></textarea>
            </div>
            <div class="mb-3">
                <label >Date</label>  @error('date')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <input type="text" class="form-control" name="date" class="@error('date') is-invalid @enderror">
              </div>
            <div class="mb-3"> @error('img')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <label  >The Image</label>
                <input  class="form-control" type="file" name="img" class="@error('img') is-invalid @enderror">
            </div>
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control" name="status"> 
                    <option selected value="appear">appear</option>
                    <option  value="disappear">disappear</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
    </div>
@endsection

