@extends('layouts.app')
<title>{{ $title }}</title>
@section('content')
    <div class="text-center align-middle mt-5">
        <h1>Submitted Successfully</h1>
        <p class="blockquote mx-auto" style="width: 80%;">
            you request has been send to admin for review it, be ready!
        </p>
        <a class="btn btn-primary" href="/">Back to Home</a>
    </div>

@endsection
