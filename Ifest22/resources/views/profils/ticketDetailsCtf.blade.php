@extends('profils.ticketDetails')

@section('ticket_details_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
@endsection

@section('event_webtitle', 'Capture The Flag')

@section('event_title', 'Capture The Flag')

@section('event_team_data')
<div class="col-6">
    <div class="card ifest-card-details" style="padding:0;">
        <div class="row" align="center" style="background-color:#291647; margin:0; border-radius:3px 3px 0 0; padding: 5px 0 5px 0">
            <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Data Tim</h2>
        </div>
        <div class="row" align="left" style="padding:20px">
            <div class="col">
                <div class="row" style="padding-bottom:7px;">
                    <h5 class="text-details-card-head">Nama Tim</h5>
                    <p class="text-details-card-desc">{{ $ctf->team_name }}</p>
                </div>
                <div class="row" style="padding-bottom:7px">
                    <h5 class="text-details-card-head">Email Tim</h5>
                    <p class="text-details-card-desc">{{ $ctf->email }}</p>
                </div>
                <div class="row">
                    <h5 class="text-details-card-head">Data Ketua Tim</h5>
                    <p class="text-details-card-desc">{{ $ctf->team_leader }} - {{ $ctf->team_leader_institute }}</p>
                </div>
                @if ($ctf->team_member_1 === true)
                    <div class="row">
                        <h5 class="text-details-card-head">Data Anggota Tim</h5>
                        <p class="text-details-card-desc">
                            • {{ $ctf->team_member_1 }} - {{ $ctf->team_member_1_institute }}
                            @if ($ctf->team_member_2 === true)
                                <br>• {{ $ctf->team_member_2 }} - {{ $ctf->team_member_2_institute }}
                            @else
                            @endif
                        </p>
                    </div>
                @else
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('event_progress')
<div class="col-6">
    <div class="card ifest-card-details" style="padding:0;">
        <div class="row" align="center" style="background-color:#291647; margin:0; border-radius:3px 3px 0 0; padding: 5px 0 5px 0">
            <h2 class="text-details-card-title" style="color:white; padding:0; margin:0">Progress Lomba</h2>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-1.svg') }}" alt="1">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Registrasi Tim</h6>
                <!-- BUAT STATUS, CLASS TERGANTUNG STATUS DI DATABASE -->
                <p class="text-tickets-desc">20-25 Agustus 2022<br>Status : 
                    @if ($ctf->status_pembayaran === 1)
                        <span class="text-tickets-status status-orange">Waiting for Confirmation</span>
                    @elseif ($ctf->status_pembayaran === 0)
                        <span class="text-tickets-status status-red">Payment Failed. Please Re-Upload Payment Proof</span>
                    @elseif ($ctf->status_pembayaran === 2)
                        <span class="text-tickets-status status-green">Payment Completed</span>
                    @endif
                </span>
                </p>
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-2.svg') }}" alt="2">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Pelaksanaan Kompetisi</h6>
                <p class="text-tickets-desc">26 Agustus 2022<br>8.00 - 16.00
                </p>
            </div>
        </div>
        <div class="row align-items-center" align="left" style="padding:20px">
            <div class="col-2" style="padding:0 15px 0 8px">
                <img class="circular-number" src="{{ URL::asset('icon/page-details/circle-3.svg') }}" alt="3">
            </div>
            <div class="col-6" align="left" style="padding:0 8px 0 15px">
                <h6 class="text-tickets-head">Pengumpulan Writeup</h6>
                <p class="text-tickets-desc">26-30 Agustus 2022<br>Status : 
                    <!-- @if ($ctf->writeup_link === null)
                        <span class="text-tickets-status status-red">Unsubmitted</span>
                    @elseif ($ctf->writeup_link !== null)
                        <span class="text-tickets-status status-orange">Submitted.</span>
                    @endif -->
                </p>
            </div>
            <div class="col-4" align="center" style="padding:0">
                <!-- @if ($ctf->writeup_link === null)
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="">Submit</a>
                    </button>
                @elseif ($ctf->writeup_link !== null)
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 120px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="">Re-Submit?</a>
                    </button>
                @endif -->
            </div>
        </div>
    </div>
</div>
@endsection