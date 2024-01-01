@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <!-- .page-inner -->
        <div class="page-inner">
            <form action="{{route('dashboard.master.updateHeader')}}" method="POST">
                @csrf
                @method('POST')
                <?php 
                        $string = $header;
                        $pairs = explode('#x#', $string);
                        $slide = [];
                        foreach ($pairs as $pair) {
                            list($key, $value) = explode('=#=', $pair);
                            $slide[$key] = $value;
                        }
                ?>
            <input type="hidden" name="old" value="{{$header}}">
                <div class="mb-3">
                    <label >Header</label>
                    <input type="text" class="form-control" value="{{$slide['header']}}" name="header" >
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" value="{{$slide['wordheader']}}" name="wordheader" >
                </div>
            <button type="submit" class="btn btn-primary">Edit</button>

            </form>
            <hr><a href="{{route('dashboard.master.add')}}" type="button" class="btn btn-success">Add Slide</a> <hr>
            <div style="display: flex;flex-wrap: wrap;justify-content: space-between;">
                @if (!empty($content[0]))
                <?php // print_r($content);  die; ?>
                        @foreach ($content as $i => $slides)
                        <?php  
                                if($i == 0 ) continue;
                                $string = $slides;
                                $pairs = explode('#x#', $string);
                                $slide = [];
                                foreach ($pairs as $pair) {
                                    list($key, $value) = explode('=#=', $pair);
                                    $slide[$key] = $value;
                                }
                        ?>
                        <div class="card" style="width: calc(50% - 50px);display: flex;">
                            <img src="{{asset($slide['img'])}}" class="card-img-top" style="height: 170px;width:50%;float:right;position: inherit;
                            left:40%;top:4%;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$slide['name']}}</h5>
                                <p class="card-text">{{$slide['position']}}</p>
                                <p class="card-text">{{$slide['status']}}</p>
                                <a href="{{route('dashboard.master.edit',  $i )}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('dashboard.master.delete',  $i )}}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    @endforeach    
                    @else 
                
                @endif
        </div>
    </div>
    </div>
@endsection