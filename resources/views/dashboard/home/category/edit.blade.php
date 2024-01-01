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
        <form action="{{route('dashboard.category.update')}}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="old" value="{{$old}}">
            <div class="mb-3">
              <label >Title</label>
              <input type="text" class="form-control" value="{{$slide['title']}}" name="title" >
            </div>
            <div class="mb-3">
              <label> Details</label>
              <input type="text" class="form-control" value="{{$slide['details']}}" name="details" >
            </div>
            <div class="mb-3"> 
                <label >Icons</label>
                <input type="text" style="width: 50%;display: inline-block;" class="form-control" name="icon"> 
                <a target="_blank" style="display: inline-block" class="btn btn-success btn-lg" href="https://fontawesome.com/v4/icons/">Change </a>
                <i style="font-size: 90px;float: right;" class="{{$slide['icon']}}" aria-hidden="true"></i>
            </div>
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control" name="status"> 
                    <option <?php if($slide['status']=='appear') echo'selected' ?> value="appear">appear</option>
                    <option <?php if($slide['status']=='disappear') echo'selected'?> value="disappear">disappear</option>
                  </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

