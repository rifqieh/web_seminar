@extends('layouts.app')

@section('title')
    Jadwal
@endsection

@section('content')
<div class="container">
    <div class="card-deck justify-content-center">

        {{-- <div class="col-md-3"> --}}
            <div class="card">
                <div class="card-header text-center">IT-Venture</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    IT⁠-⁠Venture adalah suatu perlombaan untuk kalangan pelajar SMA, SMK, atau sederajat se-Indonesia. Tema “Penjelajah Teknologi Masa Depan” yang diusung mengajak para peserta lomba untuk siap dalam menjelajahi teknologi yang akan datang.
                </div>
            </div>
        {{-- </div> --}}

        {{-- <div class="col-md-3"> --}}
            <div class="card">
                <div class="card-header text-center">Creativation Talk</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Seminar Nasional: Creativation Talk adalah suatu seminar seputar hal kekinian dalam era digital. Tema “Unbox That Craziest Thought” yang diusung mengajak para peserta seminar untuk berani mengeluarkan ide-ide "gila" sehingga menghasilkan sesuatu yang baru.
                </div>
            </div>
        {{-- </div> --}}

        {{-- <div class="col-md-3"> --}}
            <div class="card">
                <div class="card-header text-center">Dig-Up</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    IT⁠-⁠Workshop: Dig⁠-⁠Up adalah lokakarya (workshop) yang menjadi media untuk mendapat wawasan tentang materi yang akan disampaikan oleh pengajar yang ahli di bidangnya. Tema “Turn into Your Own Crescent” yang diusung mengajak para peserta untuk merealisasikan mimpi masing-masing.
                </div>
            </div>
        {{-- </div> --}}

    </div>
</div>
@endsection
