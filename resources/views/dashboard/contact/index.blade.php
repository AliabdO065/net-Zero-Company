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
        <form action="{{route('dashboard.contact.contact.update')}}" method="POST">
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
            <div class="mb-3">
                <label >Phoe</label>
                <input type="text" class="form-control" value="{{$slide['phone']}}" name="phone" >
            </div>
            <div class="mb-3">
                <label >Facebook</label>
                <input type="text" class="form-control" value="{{$slide['facebook']}}" name="facebook" >
            </div>
            <div class="mb-3">
                <label >Twitter</label>
                <input type="text" class="form-control" value="{{$slide['twitter']}}" name="twitter" >
            </div>
            <div class="mb-3">
                <label >Youtube</label>
                <input type="text" class="form-control" value="{{$slide['youtube']}}" name="youtube" >
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

