@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">

    <div class="form-group">
        <strong>Name:</strong>
        {{ $product->name }}
    </div>

    <div class="form-group">
        <strong>Email:</strong>
        {{ $product->email }}
    </div>

    <div class="form-group">
        <strong>Mobile:</strong>
        {{ $product->mobile }}
    </div>

    <div class="form-group">
        <strong>State:</strong>
        {{ $product->state }}
    </div>

    <div class="form-group">
        <strong>City:</strong>
        {{ $product->city }}
    </div>

    <div class="form-group">
        <strong>Pin Code:</strong>
        {{ $product->pin_code }}
    </div>

    <div class="form-group">
        <strong>Gender:</strong>
        {{ $product->gender }}
    </div>

    <div class="form-group">
        <strong>Image:</strong>
        <img src="/images/{{ $product->image }}" width="400px">
    </div>
</div>
</div>
@endsection