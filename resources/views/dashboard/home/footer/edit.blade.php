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
        <form action="{{route('dashboard.footer.update')}}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="old" value="{{$old}}">
            <div class="mb-3">
              <label >Name</label>
              <input type="text" class="form-control" value="{{$slide['name']}}" name="name" >
            </div>
            <div class="mb-3">
              <label> Phone</label>
              <input type="text" class="form-control" value="{{$slide['phone']}}" name="phone" >
            </div>
            <div class="mb-3">
              <label >Email</label>
              <input type="text" class="form-control" value="{{$slide['email']}}" name="email" >
            </div>
            <div class="mb-3">
                <label >Address</label>
                <input type="text" class="form-control" value="{{$slide['address']}}" name="address" >
                <input type="text" class="form-control" value="{{$slide['googleMaps']}}" name="googleMaps" >
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

