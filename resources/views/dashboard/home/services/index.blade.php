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
        <form action="{{route('dashboard.services.home.update')}}" method="POST">
            @csrf
            @method('POST')
            <?php 
                    $string = $content;
                    $pairs = explode('#x#', $string);
                    $slide = [];
                    foreach ($pairs as $pair) {
                        list($key, $value) = explode('=#=', $pair);
                        $slide[$key] = $value;
                    }
                    // print_r($slide);die;
            ?>
            {{-- <input type="hidden" name="old" value="{{$old}}"> --}}
            <div class="mb-3">
                <label >Header</label>
                <input type="text" class="form-control" value="{{$slide['header']}}" name="header" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['wordheader']}}" name="wordheader" >
            </div>
            
            <div class="mb-3  form-inline">
                <label >Clients</label>
                <input type="text" style="margin-left: 21px;" class="form-control pr-6"  value="{{$slide['titleclients']}}" name="titleclients" >
                <input type="text" style="margin-left: 27px;"   class="form-control" value="{{$slide['numberclients']}}" name="numberclients" >
            </div>
            <div class="mb-3  form-inline">
                <label >Projects</label>
                <input type="text" style="margin-left: 21px;"  class="form-control" value="{{$slide['titleprojects']}}" name="titleprojects" >
                <input type="text" style="margin-left: 100px;"  class="form-control" value="{{$slide['numberprojects']}}" name="numberprojects" >
            </div>
            <div class="mb-3 form-inline">
                <label >Sq-Feet</label>
                <input type="text" style="margin-left: 21px;"  class="form-control pr-6" value="{{$slide['titlefeet']}}" name="titlefeet" >
                <input type="text" style="margin-left: 21px;"  class="form-control" value="{{$slide['numberfeet']}}" name="numberfeet" >
            </div>
    <hr style="background-color: yellow; height: 20px;">
    <label >animated Section </label>
        <input type="text" class="form-control mb-1" value="{{$slide['title1']}}" name="title1" >
        <input type="text" class="form-control mb-1" value="{{$slide['title2']}}" name="title2" >
        <input type="text" class="form-control mb-1" value="{{$slide['title3']}}" name="title3" >
        <input type="text" class="form-control mb-1" value="{{$slide['title4']}}" name="title4" >
    </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

