<html>
    <head>
    <link rel="stylesheet" href="{{ asset('CSS/form1.css') }}">
        <title>Home</title>
    
    </head>
<body>

@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
            
                    <div class="sdr">
                        <div class="contact-box">
                            <div class="left"></div>
                            <div class="right">
                                <div class="jumbotron text-center">
                                    <h2>University of Ruhuna Online Payments</h2>
                                    <h5>Payment Types</h5>
                                    <a class="btn btn-success" href="{{ url('/money_transfer/form1') }}">Repeat fees</a>
                                        <br><br>
                                    <a class="btn btn-success">Registartion fees</a>
                                    <br><br>
                                    <a class="btn btn-success">Hostal fees</a>
                                </div>
                            </div>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<body>
</html>