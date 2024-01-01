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
            
            <div class="mb-3">
                <label >Header of Projects Page</label>
                <input type="text" style="width: 30%" class="form-control" value="{{$slide['projects']}}" name="projects" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['descprojects']}}" name="descprojects" >
            </div>

            <a href="{{route('dashboard.projects')}}" type="button" class="btn btn-success">Go to Projects</a>
            <button type="submit" class="btn btn-primary">Edit</button>
            <hr>
            <div class="mb-3">
                <label >Header of News Srction</label>
                <input type="text" style="width: 30%" class="form-control" value="{{$slide['headernews']}}" name="headernews" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['wordheadernews']}}" name="wordheadernews" >
            </div><hr>
            <div class="mb-3">
                <label >Header of News Page</label>
                <input type="text" style="width: 30%" class="form-control" value="{{$slide['news']}}" name="news" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['descnews']}}" name="descnews" >
            </div>
            <div class="mb-3">
                <label >Header of Insights Page</label>
                <input type="text" style="width: 30%" class="form-control" value="{{$slide['insights']}}" name="insights" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['descinsights']}}" name="descinsights" >
            </div>

            <a href="{{route('dashboard.news')}}" type="button" class="btn btn-success">Go to News</a>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

