@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" required>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$product->email}}" required>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="tel" class="form-control" id="mobile" name="mobile" value="{{$product->mobile}}" required>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option>Select a state</option>
                <option>Gujarat</option>
                <option>Maharashtra</option>
                <option>West Bengal</option>
                <option>Uttar Pradesh</option>
                <option>Madhya Pradesh</option>
            </select>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$product->city}}" required>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="pin_code" class="form-label">Pin Code</label>
            <input type="text" class="form-control" id="pin_code" name="pin_code" value="{{$product->pin_code}}" required>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="gender" class="form-label">Gender:</label>
            <input type="radio" name="gender" value="male">
            Male
            <input type="radio" name="gender" value="female">
            Female
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
            <img src="/images/{{ $product->image }}" width="300px">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form>



@endsection