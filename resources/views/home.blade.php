@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Festival Pekan Informasi dan Teknologi (P!NGFEST) adalah salah satu acara tahunan yang diadakan oleh Himpunan Mahasiswa Informatika (HIMASTER) Universitas Sebelas Maret (UNS). Tahun ini, P!NGFEST mengangkat tema “Tech No Limit” dengan serangkaian acara: IT⁠-⁠Venture, IT⁠-⁠Workshop: Dig⁠-⁠Up, dan Seminar Nasional: Creativation Talk.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
