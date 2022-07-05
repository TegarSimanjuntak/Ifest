@extends('events.events')

@section('event_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/events.css') }}">
@endsection

@section('event_webtitle', 'Technopreneur')

@section('event_title', 'Technopreneur')

@section('event_theme')
<div style="padding-top: 10px;padding-bottom: 10px;">
    <h2 class="text-theme">"Innovative Digital Startup For Youngpreneurs"</h2>
</div>
@endsection

@section('event_desc')
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
@endsection

<!-- SPEAKERS -->
@section('techno_speakers_1')
<div class="col-4">
    <div class="card ifest-photo-card" style="border: 0; width:max-content">
        <img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Speakers-1">
        <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
            <div class="col-7" style="line-height: 5px;">
                <h5 class="text-photo-card-name">Wortel1</h5>
                <p class="text-photo-card-position">Pejabat</p>
            </div>
            <div class="col-3">
                <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('techno_speakers_2')
<div class="col-4">
    <div class="card ifest-photo-card" style="border: 0; width:max-content">
        <img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Speakers-1">
        <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
            <div class="col-7" style="line-height: 5px;">
                <h5 class="text-photo-card-name">Wortel2</h5>
                <p class="text-photo-card-position">Pejabat</p>
            </div>
            <div class="col-3">
                <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- MENTORS -->
@section('techno_mentor_1')
<div class="col-4">
    <div class="card ifest-photo-card" style="border: 0; width:max-content">
        <img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Speakers-1">
        <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
            <div class="col-7" style="line-height: 5px;">
                <h5 class="text-photo-card-name">Wortel3</h5>
                <p class="text-photo-card-position">Pejabat</p>
            </div>
            <div class="col-3">
                <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('techno_mentor_2')
<div class="col-4">
    <div class="card ifest-photo-card" style="border: 0; width:max-content">
        <img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Speakers-1">
        <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
            <div class="col-7" style="line-height: 5px;">
                <h5 class="text-photo-card-name">Wortel4</h5>
                <p class="text-photo-card-position">Pejabat</p>
            </div>
            <div class="col-3">
                <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('techno_mentor_3')
<div class="col-4">
    <div class="card ifest-photo-card" style="border: 0; width:max-content">
        <img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Speakers-1">
        <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
            <div class="col-7" style="line-height: 5px;">
                <h5 class="text-photo-card-name">Wortel5</h5>
                <p class="text-photo-card-position">Pejabat</p>
            </div>
            <div class="col-3">
                <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('techno_mentor_4')
<div class="col-4">
    <div class="card ifest-photo-card" style="border: 0; width:max-content">
        <img class="card-img-top" style="width:100%;height:350px;" src="https://cf.shopee.co.id/file/e0d319d464c87407718586d008a144b7" alt="Speakers-1">
        <div class="row card-body justify-content-center align-items-center" style="padding: 20px 0 20px 0;">
            <div class="col-7" style="line-height: 5px;">
                <h5 class="text-photo-card-name">Wortel6</h5>
                <p class="text-photo-card-position">Pejabat</p>
            </div>
            <div class="col-3">
                <a href=""><img class="logo-linkedin" src="{{ URL::asset('icon/linkedin.svg') }}" alt="linkedin"></a>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- FAQ -->
@section('faq_techno_1')
<summary>Pertanyaan 1</summary>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting
    industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
    unknown</p>
@endsection

@section('faq_techno_2')
<summary>Pertanyaan 2</summary>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting
    industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
    unknown</p>
@endsection

@section('faq_techno_3')
<summary>Pertanyaan 3</summary>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting
    industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
    unknown</p>
@endsection

@section('faq_techno_4')
<summary>Pertanyaan 4</summary>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting
    industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
    unknown</p>
@endsection

<!-- TEMPLATE BODY -->
@section('event_detail')
<div data-aos="fade-down" data-aos-duration="1000" class="row align-items-center" align="center" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Our Seminar Speakers</h1>
    <div id="technoSpeakers" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    @yield('techno_speakers_1')
                    @yield('techno_speakers_2')
                </div>
            </div>
            <!-- <div class="carousel-item">
                <div class="row justify-content-center">
                    @yield('techno_speakers_3')
                    @yield('techno_speakers_4')
                </div>
            </div> -->
        </div>
    </div>
    <!-- <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#technoSpeakers" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#technoSpeakers" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> -->
</div>
<div data-aos="fade-down" data-aos-duration="1000" class="row align-items-center" align="center"style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-event-sub-title">Our Workshop Mentors</h1>
    <div id="technoMentor" class="row justify-content-center carousel slide" data-ride="carousel" style="padding-top: 30px; position:relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    @yield('techno_mentor_1')
                    @yield('techno_mentor_2')
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    @yield('techno_mentor_3')
                    @yield('techno_mentor_4')
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;">
        <div class="col-1">
            <a class="carousel-control-prev" href="#technoMentor" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#technoMentor" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div data-aos="fade-up" data-aos-duration="1000" class="row" align="center" id="eventTimeline" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Timeline</h1>
    <section class="ps-timeline-sec">
        <div class="container">
            <ol class="ps-timeline">
                <li>
                    <div class="ps-bot">
                        <p>Timeline 1</p>
                    </div>
                    <span class="ps-sp"></span>
                </li>
                <li>
                    <div class="ps-bot">
                        <p>Timeline 2</p>
                    </div>
                    <span class="ps-sp"></span>
                </li>
                <li>
                    <div class="ps-bot">
                        <p>Timeline 3</p>
                    </div>
                    <span class="ps-sp"></span>
                </li>
                <li>
                    <div class="ps-bot">
                        <p>Timeline 4</p>
                    </div>
                    <span class="ps-sp"></span>
                </li>
            </ol>
        </div>
    </section>
</div>
@endsection

@section('event_detail2')
<!-- INI NANTI BISA PAKE LOOPING AJA -->
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-between" align="left" id="technoCards1" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-sm-6">
        <div class="card" style="border: 0; width:90%" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/platform.png') }}" alt="Platform">
                </div>
                <div class="col-6" style="line-height: 5px;">
                    <h5 style="color:black;">Zoom Meetings</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card" style="border: 0; width:90%" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/seminar.png') }}" alt="Seminar">
                </div>
                <div class="col-5" style="line-height: 5px;">
                    <h5 style="color:black">Seminar</h5>
                    <p style="color:black">Free</p>
                </div>
                <div class="col-2" style="padding-left:45px">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                        @guest
                        @if(Route::has('login'))
                        <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Buy Ticket</a>
                        @endif
                        @else
                        <a class="ifest-btn-primary-dark-bg-text" href="">Register</a>
                        @endguest
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-up" data-aos-duration="1000" class="row align-items-center justify-content-between" align="left" id="technoCards2" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="col-sm-6">
        <div class="card" style="border: 0; width:90%" id="cardTimeline">
            <div class="row align-items-center justify-content-start" style="padding:15px;">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/guidebook.png') }}" alt="Guidebook">
                </div>
                <div class="col-5" style="line-height: 5px;">
                    <h5 style="color:black">Workshop Guidebook</h5>
                </div>
                <div class="col-2" style="padding-left:45px">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                        <a class="ifest-btn-primary-dark-bg-text" href="">Download</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card" style="border: 0; width:90%" id="cardTicket">
            <div class="row align-items-center" style="padding:15px">
                <div class="col-2">
                    <img class="events-card-logo" src="{{ URL::asset('icon/workshop.png') }}" alt="Workshop">
                </div>
                <div class="col-5" style="line-height: 5px;">
                    <h5 style="color:black">Workshop</h5>
                    <p style="color:black">Including Seminar</p>
                </div>
                <div class="col-2" style="padding-left:45px">
                    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
                        @guest
                        @if(Route::has('login'))
                        <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register</a>
                        @endif
                        @else
                        <a class="ifest-btn-primary-dark-bg-text" href="{{route('technoWorkshop.registration.view')}}">Register</a>
                        @endguest
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-up" data-aos-duration="1000" class="row justify-content-center align-items-center" align="center" id="eventFAQ" style="padding-top: 30px;padding-bottom: 30px;">
    <h1 class="text-sub-title">Frequently Asked Question (FAQ)</h1>
    <div class="row" style="padding-top: 30px;">
        <div class="card-faq text-left">
            <details>
                @yield('faq_techno_1')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_techno_2')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_techno_3')
            </details>
        </div>
        <div class="card-faq text-left">
            <details>
                @yield('faq_techno_4')
            </details>
        </div>
    </div>
</div>
@endsection

<!-- @section('competition_button')
<div class="col-2">
    <button type="button" class="btn btn-outline-primary ifest-btn-outline-primary-dark-bg" style="width: 147px;height: 48px;">Guidebook</button>
</div>
<div class="col-2">
    <button type="button" class="btn btn-primary ifest-btn-primary-dark-bg" style="width: 147px;height: 48px;">
        @guest
        @if(Route::has('login'))
        <a class="ifest-btn-primary-dark-bg-text" href="{{route('login')}}">Register Now</a>
        @endif
        @else
        <a class="ifest-btn-primary-dark-bg-text" href="{{route('intention.registration.view')}}">Register Now</a>
        @endguest
    </button>
</div>
@endsection -->

@section('cp1_wa', '6287720201166')
@section('cp1_name', 'Jarwo 1')
@section('cp2_wa', '6287720201177')
@section('cp2_name', 'Jarwo 2')