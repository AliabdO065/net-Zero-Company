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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Comment</th>
                                <th scope="col">URL</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if (!empty($content[0]))
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
                                <td>{{$slide['author']}}</td>
                                <td>{{$slide['email']}}</td>
                                <td>{{$slide['comment']}}</td>
                                <td>{{$slide['url']}}</td>
                                <td style="display:revert;">
                                    <a style="border-radius: 40%;  font-size: 14px;" href="{{route('dashboard.news.allcomments.delete',  $i )}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a>
                                </td>
                                </tr>
                            @endforeach  
                            @else
                            
                            <tr>
                                <td colspan="5" >No Comments ...................</td>
                            </tr>

                        @endif
                    </tbody>
                </table>
        </div>
    </div>
@endsection