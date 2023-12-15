@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <!-- .page-inner -->
        <div class="page-inner">
            <a href="{{route('dashboard.about.history.add')}}" type="button" class="btn btn-success">Add One</a> <hr>
            <div style="display: flex;flex-wrap: wrap;justify-content: space-between;">
                @if (!empty($content[0]))
                <?php// print_r($content);  die; ?>
                        @foreach ($content as $i => $slides)
                        <?php 
                                $string = $slides;
                                $pairs = explode('#x#', $string);
                                $slide = [];
                                foreach ($pairs as $pair) {
                                    list($key, $value) = explode('=#=', $pair);
                                    $slide[$key] = $value;
                                }
                        ?>
                        <div class="card" style="width: calc(50% - 50px);display: flex;">
                            <h5 class="card-title">{{$slide['status']}}</h5>
                            <img src="{{asset($slide['img'])}}" class="card-img-top" style="height: 270px" alt="...">
                            <div class="card-body">
                                <p class="card-text">{{$slide['header']}}</p>
                                <p class="card-text" style="font-size: smaller">{{$slide['wordheader']}}</p>
                                <p class="card-text">{{$slide['date']}}</p>
                                <a href="{{route('dashboard.about.history.edit',  $i )}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('dashboard.about.history.delete',  $i )}}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    @endforeach                        
                @endif
        </div>
    </div>
    </div>
@endsection