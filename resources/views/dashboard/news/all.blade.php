@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <!-- .page-inner -->
        <div class="page-inner">
                        <table class="table  table-hover">
                            <thead>
                            <tr>
                                <th scope="col">title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if (!empty($content[0]))
                                <?php //print_r($content);  die; ?>
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
                                <tr>
                                <td>{{$slide['title']}}</td>
                                <td>
                                    <img  src="{{asset($slide['img'])}}" class="card-img-top" style="height: 69px;width: 136px;" alt="...">
                                </td>
                                <td>{{$slide['category']}}</td>
                                <td>{{$slide['status']}}</td>
                                <td style="display: flex;height: 99px;">
                                    <a style="border-radius: 40%;  font-size: 14px;"  href="{{route('dashboard.news.edit',  $i )}}" class="btn btn-primary">Edit</a> 
                                    <a style="border-radius: 40%;  font-size: 14px;" onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('dashboard.news.delete', $i )}}" class="btn btn-danger">Delete</a>


                                </td>
                                </tr>
                            @endforeach  
                            @else
                            
                            <tr>
                                <td colspan="5" >No Data ...................</td>
                            </tr>

                        @endif
                    </tbody>
                </table>
        </div>
    </div>
    </div>
@endsection