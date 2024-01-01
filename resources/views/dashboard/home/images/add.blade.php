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
        <form action="{{route('dashboard.images.home.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
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

