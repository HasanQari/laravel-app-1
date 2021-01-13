@extends('layouts.app')
<title>{{ $title }}</title>
@section('content')
    <section class="container">
        <br>
        <!-- Form Name -->
        <legend>
            <center>
                <h2><b>Registration Form</b></h2>
                <p>Register in Virtual University Registration System</p>

            </center>
        </legend>
        {{-- {!! Form::open(['action'] => 'PostsController@store', 'method' => 'POST') !!} --}}
        <form class="" action="RegReq" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="Fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="Fname" name="Fname" required>
                    <label for="National" class="form-label mt-4">National</label>
                    <input type="text" class="form-control" id="National" name="National" required>
                    <label for="DOB" class="form-label mt-4">Birth Date</label>
                    <input type="date" class="form-control" id="DOB" name="DOB" required>

                </div>
                <div class="col">
                    <label for="Mname" class="form-label">Middel Nmae</label>
                    <input type="text" class="form-control" id="Mname" name="Mname" required>
                    <label for="city" class="form-label mt-4">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                    <label for="address" class="form-label mt-4">Address Line</label>
                    <input type="text" class="form-control" id="address" name="address" required>

                </div>
                <div class="col">
                    <label for="Lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="Lname" name="Lname" required>
                    <label for="phone" class="form-label mt-4">Mobile Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                    <label for="mail" class="form-label mt-4">Email address</label>
                    <input type="email" class="form-control" id="mail" name="mail" required>

                </div>
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Submit" />
        </form>
        {{-- {!! Form::close() !!} --}}
        </div>
    </section>

@endsection



{{-- <div style="width: 50%; margin: 10px">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
    </div>
</div>
<div style="width: 50%; margin: 10px">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
    </div>
</div> --}}
