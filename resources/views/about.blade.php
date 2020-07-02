@extends('layouts.app')

@section('title')
    About Us
@endsection

@section('content')
<div class="container">
    <div class="card-deck justify-content-center">

            <div class="card">
                <div class="card-header text-center">Marshal</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{asset('storage/images/zamil.jpg')}}" alt="" width=100%>
                </div>
            </div>

            <div class="card">
                <div class="card-header text-center">Huda</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{asset('storage/images/zamil.jpg')}}" alt="" width=100%>
                </div>
            </div>

            <div class="card">
                <div class="card-header text-center">Anggie</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{asset('storage/images/zamil.jpg')}}" alt="" width=100%>
                </div>
            </div>

    </div>
</div>
@endsection
