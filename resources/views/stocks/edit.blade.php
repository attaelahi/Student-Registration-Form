@extends('stocks.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Edit Student Details</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('stocks.index') }}"> Back to Main Page</a>
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

<form action="{{ route('stocks.update',$stock->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Name:</strong>
                <input type="text" name="student_name" value="{{ $stock->student_name }}" class="form-control" placeholder="Student Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Degree:</strong>
                <input type="text" name="student_degree" value="{{ $stock->student_degree }}" class="form-control" placeholder="Student Degree">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email Address:</strong>
                <input type="email" name="student_email" class="form-control" value="{{ $stock->student_email }}" placeholder="Email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input type="number" name="phone_number" class="form-control" value="{{ $stock->phone_number }}" placeholder="Phone Number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Details:</strong>
                <textarea class="form-control" name="student_details" placeholder="Students Details">{{ $stock->student_details }}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Births:</strong>
                <input type="date" name="date_of_birth" class="form-control" value="{{ $stock->date_of_birth }}" placeholder="Date of Birth">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Present Address:</strong>
                <textarea class="form-control" name="present_address" style="height: 150px;" placeholder="Students Presents Address">{{ $stock->present_address }}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permanent Address:</strong>
                <textarea class="form-control" name="permanent_address" style="height: 150px;" placeholder="Students Permanent Address">{{ $stock->permanent_address }}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Emergency Contact Number:</strong>
                <input type="number" name="emergency_number" class="form-control" value="{{ $stock->emergency_number }}" placeholder="Emergency Phone Number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update Changes</button>
        </div>
    </div>

</form>
@endsection