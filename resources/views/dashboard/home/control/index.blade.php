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
        <form action="{{route('dashboard.control.update')}}" method="POST">
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
                <label >Header of Projects Srction</label>
                <input type="text" style="width: 30%" class="form-control" value="{{$slide['headerprojects']}}" name="headerprojects" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['wordheaderprojects']}}" name="wordheaderprojects" >
            </div> <hr>
            <a href="{{route('dashboard.projects')}}" type="button" class="btn btn-success">Go to Projects</a>
            <button type="submit" class="btn btn-primary">Edit</button>
            <hr>
            <hr>
            <div class="mb-3">
                <label >Header of news Srction</label>
                <input type="text" style="width: 30%" class="form-control" value="{{$slide['headernews']}}" name="headernews" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['wordheadernews']}}" name="wordheadernews" >
            </div>
            <a href="{{route('dashboard.news')}}" type="button" class="btn btn-success">Go to News</a>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

