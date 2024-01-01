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
        <hr><a href="{{route('dashboard.images.home.add')}}" type="button" class="btn btn-success">Add image</a> <hr>
        <div style="display: flex;flex-wrap: wrap;justify-content: space-between;">
            @if (!empty($content[0]))
            <?php /// print_r($content);  die; ?>
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
                    <div class="card" style="width: calc(30%);display: flex;">
                        <div class="card-body">
                            <img src="{{asset($slide['img'])}}" class="card-img-top" style="height: 170px;width:100%;float:right;position: inherit;
                            left:40%;top:4%;" alt="...">    
                            <p class="card-text">{{$i+1}}</p>
                            <a href="{{route('dashboard.images.home.edit',  $i )}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('dashboard.images.home.delete',  $i )}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach    
                @else 
            
            @endif
    </div>
        </div>
    </div>
    </div> 
@endsection

