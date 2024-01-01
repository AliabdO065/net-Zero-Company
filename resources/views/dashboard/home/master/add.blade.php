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
        <form action="{{route('dashboard.master.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label >Name</label> 
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3"> 
                <label >position</label>
                <input type="text" class="form-control" name="position"> 
            </div>
            
            <label >Social Media</label> 
            <div class="mb-3 pb-1 form-inline">
                <label >Facebook</label> 
                <input value="#" style="position: relative;left: 2%;width: 66%;" type="text" class="form-control" name="facebook">
            </div>
            <div class="mb-3 pb-1 form-inline"> 
                <label >Twitter</label> 
                <input type="text" value="#" class="form-control" style="position: relative;left: 2%;width: 66%;" name="twitter"> 
            </div>
            <div class="mb-3 pb-1  form-inline">
                <label >Social Media</label> 
                <input type="text" class="form-control" value="#" style="position: relative;left: 2%;width: 66%;" name="insta">
            </div>
            <div class="mb-3 pb-1  form-inline"> 
                <label >Social Media</label> 
                <input type="text" class="form-control" value="#" style="position: relative;left: 2%;width: 66%;" name="gmail"> 
            </div>
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control" name="status" class="@error('status') is-invalid @enderror"> 
                    @error('status')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    <option selected value="appear">appear</option>
                    <option value="disappear">disappear</option>
                </select>
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

