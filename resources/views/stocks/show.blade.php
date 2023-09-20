@extends('stocks.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Show The Student Details</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('stocks.index') }}"> Back to Main Page</a>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Name: </strong>
            {{ $stock->student_name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Degree Program: </strong>
            {{ $stock->student_degree }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Email: </strong>
            {{ $stock->student_email }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Phone Number: </strong>
            {{ $stock->phone_number }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Details: </strong>
            {{ $stock->student_details }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Date of Birth: </strong>
            {{ $stock->date_of_birth }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Present Address: </strong>
            {{ $stock->present_address }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Permanent Address: </strong>
            {{ $stock->permanent_address }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Emergency Contact: </strong>
            {{ $stock->emergency_number }}
        </div>
    </div>

</div>
@endsection