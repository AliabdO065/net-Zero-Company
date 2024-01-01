@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <!-- .page-inner -->
        <div class="page-inner">
            <a href="{{route('dashboard.footer.add')}}" type="button" class="btn btn-success">Add Branch</a> <hr>
                        <table class="table  table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
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
                                <td>{{$slide['name']}}</td>
                                <td>{{$slide['phone']}}</td>
                                <td>{{$slide['email']}}</td>
                                <td style="font-size: 11px;">{{$slide['address']}}</td>
                                <td>{{$slide['status']}}</td>
                                <td style="display: flex;">
                                    <a style="border-radius: 40%;  font-size: 14px;"  href="{{route('dashboard.footer.edit',  $i )}}" class="btn btn-primary">Edit</a> 
                                    <a style="border-radius: 40%;  font-size: 14px;" href="{{route('dashboard.footer.delete',  $i )}}" class="btn btn-danger">Delete</a>
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
@endsection