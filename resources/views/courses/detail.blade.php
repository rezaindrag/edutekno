@extends('layouts.main')

@section('breadcrumb')
	@include('partials.breadcrumb')
@endsection

@section('content')
    @php
        setlocale(LC_ALL, 'IND')
    @endphp
    <div class="container-fluid bg-dark">
        <div class="container" style="position: relative">
            <div class="row">
                <div class="col-md-8 py-5">
                    <h1 class="mb-2 text-light">{{ $course->title }}</h1>
                    <p class="m-0 text-light" style="font-size: 15px">
                        <span class="text-light">Instruktur:</span> <a href="" class="text-info">{{ $course->instructor->name }}</a></span>
                        <span class="mx-1"></span>
                        <span class="text-light">Diperbarui:</span> <span class="text-light">{{ strftime('%B %Y', strtotime($course->updated_at)) }}</span>
                        <span class="mx-1"></span>
                        <span class="text-light">Level:</span> <span class="text-light">{{ ucfirst($course->level) }}</span>
                    </p>
                </div>
                <div class="col-md-4" style="position: absolute;top: 48px;right: 0;z-index: 99">
                    <div class="d-flex flex-column mb-2">
                        <a href="{{ url('preview/android-basic/introduction/overview.html') }}" class="card card-group-top">
                            <img class="card-img card-group-top" src="http://via.placeholder.com/300x180" alt="">
                            <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                                <i class="fa fa-play-circle text-light" style="font-size:80px"></i>
                                <h5 class="text-light" style="text-decoration: none">Preview</h5>
                            </div>
                        </a>
                        <div class="card card-group-bottom">
                            <div class="card-body bg-light">
                                @if($course->price == 0)
                                    <h5 class="text-center text-danger pt-2 pb-3">Free</h5>
                                    <a href="" class="btn btn-info btn-block btn-lg">Enroll</a>
                                @else
                                    <h5 class="text-center text-danger pt-2 pb-3">IDR {{ number_format($course->price, 0, ",", ".") }}</h5>
                                    <a href="" class="btn btn-info btn-block btn-lg">Buy Now</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bg-light">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0 p-0 bg-light">
                                    <i class="fa fa-check text-info mr-1"></i> 
                                    Total durasi 1.5h
                                </li>
                                <li class="list-group-item border-0 p-0 bg-light">
                                    <i class="fa fa-check text-info mr-1"></i> 
                                    56 HD video
                                </li>
                                <li class="list-group-item border-0 p-0 bg-light">
                                    <i class="fa fa-check text-info mr-1"></i> 
                                    7 artikel
                                </li>
                                <li class="list-group-item border-0 p-0 bg-light">
                                    <i class="fa fa-check text-info mr-1"></i> 
                                    Akses selamanya
                                </li>
                                <li class="list-group-item border-0 p-0 bg-light">
                                    <i class="fa fa-check text-info mr-1"></i> 
                                    Akses via web
                                </li>
                                <li class="list-group-item border-0 p-0 bg-light">
                                    <i class="fa fa-check text-info mr-1"></i> 
                                    23 kuis &amp; 12 tugas
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 content bg-white">
		<div class="container pages">
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <div class="mb-3">
                            <h5 class="mb-2">Deskripsi</h5>
                            {{ $course->description }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <h5 class="mb-2">Apa yang dipelajari?</h5>
                            <ul class="list-group list-group-flush d-flex flex-row flex-wrap justify-content-between">
                                @foreach($course->subjects as $subject)
                                    <li class="list-group-item col-6 border-0 px-0 pt-0 pb-1">
                                        <span><i class="fa fa-check text-info mr-2"></i> {{ $subject }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5 class="mb-2">Silabus</h5>
                        @foreach($course->lessons as $lesson)
                            <div class="card mb-2">
                                <div class="card-body">
                                    <h5 class="mb-2 text-secondary">{{ $lesson->name }}</h5>
                                    <p class="mb-2">{{ $lesson->description }}</p>
                                    @foreach($lesson->videos as $video)
                                        <ul class="list-group list-group-flush">
                                            <li href="" class="list-group-item border-top-0 px-0 py-1 d-flex flex-row">
                                                <div class="d-flex justify-content-center align-items-center" style="width: 30px">
                                                    <i class="fa fa-play-circle text-secondary mr-2"></i>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center" style="flex: 1">
                                                    <span class="text-dark">{{ $video->title }}</span>
                                                    <span class="text-secondary">{{ $video->duration }}</span>
                                                </div>
                                            </li>
                                        </ul>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <h5 class="mb-2">Tentang Instruktur</h5>
                        <div class="row mt-3">
                            <div class="col-md-3 d-flex flex-column align-items-center">
                                <img class="rounded-circle" src="https://randomuser.me/api/portraits/men/49.jpg" alt="">
                                <a href="" class="text-secondary text-center"><strong>{{ $course->instructor->name }}</strong></a>
                            </div>
                            <div class="col-md-9">
                                <p>{{ $course->instructor->biodata }}</p>
                                @if ($course->instructor->web)
                                    <p class="mb-0"><a href="" class="text-info"><i class="fa fa-link"></i> {{ $course->instructor->web }}</a></p>
                                @endif
                                @if ($course->instructor->facebook)
                                    <p class="mb-0"><a href="" class="text-info"><i class="fab fa-facebook"></i> {{ $course->instructor->facebook }}</a></p>
                                @endif
                                @if ($course->instructor->twitter)
                                    <p class="mb-0"><a href="" class="text-info"><i class="fab fa-twitter"></i> {{ $course->instructor->twitter }}</a></p>
                                @endif
                                @if ($course->instructor->linkedin)
                                    <p class="mb-0"><a href="" class="text-info"><i class="fab fa-linkedin"></i> {{ $course->instructor->linkedin }}</a></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
@endsection
