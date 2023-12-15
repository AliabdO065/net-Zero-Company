@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <div class="page-inner">
        <!-- .page-inner -->
        <form action="{{route('dashboard.footer.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label >Name</label>  @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
              <input type="text" class="form-control" name="name" class="@error('name') is-invalid @enderror">
            </div>
            <div class="mb-3"> 
                <label >Phone</label> @error('phone')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <input type="text" class="form-control" name="phone" class="@error('phone') is-invalid @enderror"> 
            </div>
            <div class="mb-3"> 
                <label >Email</label> @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <input type="text" class="form-control" name="email" class="@error('email') is-invalid @enderror"> 
            </div>
            <div class="mb-3"> 
                <label >Address</label> @error('address')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <input type="text" class="form-control" name="address" class="@error('address') is-invalid @enderror"> 
            </div>
            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control" name="status" class="@error('status') is-invalid @enderror"> 
                    @error('status')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    <option selected value="appear">appear</option>
                    <option value="disappear">disappear</option>
                  </select>
            </div>
          
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
    </div>
@endsection

