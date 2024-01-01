@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <style>
            .over_flow{
                overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    width: 100%;
            }
        </style>
        <!-- .page-inner -->
        <div class="page-inner">
            <a href="{{route('dashboard.services.add')}}" type="button" class="btn btn-success">Add Services</a> <hr>
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
                            <p class="card-tex mt-2" style="font-size:20px">{{$slide['header']}} </p>
                            <p class="card-text">{{$slide['status']}} </p>
                            <img src="{{asset($slide['img'])}}" class="card-img-top" style="height: 270px" alt="...">
                            <div class="card-body over_flow">
                                <h5 class="card-title" >{{$slide['title1']}}</h5>
                                <p class="card-text over_flow" style="width: max-content;font-size:smaller">{{$slide['contenttitle1']}}</p>
                                <h5 class="card-title">{{$slide['title2']}}</h5>
                                <p class="card-text over_flow" style="width: max-content;font-size:smaller">{{$slide['contenttitle2']}}</p>
                                <h5 class="card-title">{{$slide['title3']}}</h5>
                                <p class="card-text over_flow" style="width: max-content;font-size:smaller">{{$slide['contenttitle3']}}</p>
                                <a href="{{route('dashboard.services.edit',  $i )}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('dashboard.services.delete',  $i )}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    @endforeach                        
                @endif
        </div>
    </div>
    </div>
@endsection