@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <!-- .page-inner -->
        <div class="page-inner">
            <a href="{{route('dashboard.category.add')}}" type="button" class="btn btn-success">Add Category</a> <hr>
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
                            <i style="font-size: 70px;margin-left:70%;margin-top:7%;" class="{{$slide['icon']}}" aria-hidden="true"></i>
                            <div class="card-body">
                                <h5 class="card-title">{{$slide['title']}}</h5>
                                <p class="card-text">{{$slide['details']}}</p>
                                <p class="card-text">{{$slide['status']}}</p>
                                <a href="{{route('dashboard.category.edit',  $i )}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('dashboard.category.delete',  $i )}}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    @endforeach                        
                @endif
        </div>
    </div>
    </div>
@endsection