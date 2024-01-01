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
        <form action="{{route('dashboard.about.services.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control" name="status"> 
                    <option selected value="appear">appear</option>
                    <option  value="disappear">disappear</option>
                    </select>
            </div>
            <div class="mb-3">
                <label >first title</label> 
                <textarea name="title1" class="form-control" rows="4"></textarea>
            </div>
            <div class="mb-3"> 
                <label >second title</label>
                <textarea name="title2" class="form-control" rows="4"></textarea>
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

