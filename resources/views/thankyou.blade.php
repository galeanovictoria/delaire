@extends('layouts.adminlayout') @section('content')

<div class="container" id="thankyouwrapper">
    <div class="row padd">
        <div class="col-sm-10 col-sm-offset-1" style="padding-top:150px;">

            <h2>Thank you, {{ $name }}!</h2>
            <p style="padding-top:50px;">We will get back to you soon!</p>
            <p>Del Aire Team</p>

        </div>
    </div>
</div>

@endsection
