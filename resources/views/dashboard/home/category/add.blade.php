@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <div class="page-inner">
        <!-- .page-inner -->
        <form action="{{route('dashboard.category.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label >Title</label>  @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
              <input type="text" class="form-control" name="title" class="@error('title') is-invalid @enderror">
            </div>
            <div class="mb-3"> 
                <label >Details</label> @error('details')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <input type="text" class="form-control" name="details" class="@error('details') is-invalid @enderror"> 
            </div>
            <div class="mb-3"> 
                <label >Icons</label> @error('icons')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <input type="text" style="width: 50%;display: inline-block;" class="form-control" name="icon" class="@error('icons') is-invalid @enderror"> 
                <a target="_blank" style="display: inline-block" class="btn btn-success btn-lg" href="https://fontawesome.com/v4/icons/">Icons</a>
                <b><--write the class of icon , like :</b>
                <b style="color: yellow;">fa fa-spoon</b>
            </div>
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control" name="status" class="@error('status') is-invalid @enderror"> 
                    @error('status')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    <option selected value="appear">appear</option>
                    <option value="disappear">disappear</option>
                  </select>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
    </div>
@endsection

