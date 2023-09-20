@extends('stocks.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Fill Student Form</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('stocks.index') }}"> Back to Main Page</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Oops!</strong> Please Fill all the requirements.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('stocks.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Name:</strong>
                <input type="text" name="student_name" class="form-control" placeholder="Student Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Degree:</strong>
                <input type="text" name="student_degree" class="form-control" placeholder="Student Degree">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Email:</strong>
                <input type="email" name="student_email" class="form-control" placeholder="Student Email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input type="number" name="phone_number" class="form-control" placeholder="Phone Number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Details:</strong>
                <textarea class="form-control" style="height:150px" name="student_details" placeholder="Student Details"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Birth:</strong>
                <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Present Address:</strong>
                <textarea class="form-control" style="height:150px" name="present_address" placeholder="Student Present Address"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permanent Address:</strong>
                <textarea class="form-control" style="height:150px" name="permanent_address" placeholder="Student Permanent Address"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Emergency Contact Number:</strong>
                <input type="number" name="emergency_number" class="form-control" placeholder="Emergency Contact Number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit Form</button>
        </div>
    </div>

</form>
@endsection