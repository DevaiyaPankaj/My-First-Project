@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Student Details</h2>
        </div>
        <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success" href="{{ url('create') }}"> Create New Student</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>State</th>
        <th>City</th>
        <th>Pin Code</th>
        <th>Gender</th>
        <th>Image</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>

        <td>{{ $product->name }}</td>
        <td>{{ $product->email }}</td>
        <td>{{ $product->mobile }}</td>
        <td>{{ $product->state }}</td>
        <td>{{ $product->city }}</td>
        <td>{{ $product->pin_code }}</td>
        <td>{{ $product->gender }}</td>
        <td><img src="/images/{{ $product->image }}" width="100px"></td>
        <td>
            <form action="{{ route('destroy',$product->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('show',$product->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('edit',$product->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $products->links() !!}

@endsection