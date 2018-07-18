@extends('layouts.main')

@section('content')
    <div class="container-fluid p-0">
        <!-- video -->
        <div class="video-play-container d-flex justify-content-center align-items-center p-0">
            {{-- Video --}}
            @auth
                @if($course->price > 0)
                    @if($videoPlay->locked == 1)
                        <a href="{{ url('login') }}" class="btn btn-primary btn-lg"><i class="fa fa-lock mr-1"></i> Please Log In</a>
                    @else
                        {!! $videoPlay->video_embed !!}
                    @endif
                @else
                    {!! $videoPlay->video_embed !!}
                @endif
            @endauth
            @guest
                @if($course->price > 0)
                    @if($videoPlay->locked == 1)
                        <a href="{{ url('login') }}" class="btn btn-primary btn-lg"><i class="fa fa-lock mr-1"></i> Please Log In</a>
                    @else
                        {!! $videoPlay->video_embed !!}
                    @endif
                @else
                    <a href="{{ url('login') }}" class="btn btn-primary btn-lg"><i class="fa fa-lock mr-1"></i> Please Log In</a>
                @endif
            @endguest
            {{-- Video --}}
        </div>
        <!-- video -->
    </div>
    <div class="container-fluid p-0 bg-lighte">
        <div class="container py-3 d-flex flex-row align-items-center">
            <!-- header -->
            <div style="flex: 1">
                <h5 class="m-0 text-primary">
                    <span class="text-secondary">{{ $lessonPlay->title }}:</span>
                    {{ $videoPlay->title }}
                </h5>
            </div>
            <div class="pl-2">
                <div class="d-flex flex-row justify-content-between">
                    <a href="#" class="btn btn-outline-secondary mr-2">Next</a>
                    <a href="#" class="btn btn-outline-secondary">Prev</a>
                </div>
            </div>
            <!-- header -->
        </div>
    </div>
    <div class="container-fluid bg-white pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="mb-4">
                        {!! $videoPlay->description !!}    
                    </div>
                </div>
                <div class="col-md-5">
                    {{-- Course Materials --}}
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Course Materials</h5>
                        </div>
                        <div class="card-body bg-light" style="height: 500px;overflow: auto">
                            @php $i = 1 @endphp
                            @foreach($course->lessons as $lesson)
                                <div class="mb-2">
                                    <h5 class="mb-1 text-dark" data-toggle="collapse" data-target="#lesson{{ $i }}">
                                        {{ $lesson->title }}
                                    </h5>
                                    <div id="lesson{{ $i }}" class="collapse show">
                                        @foreach($lesson->videos as $video)
                                            <div class="list-group list-video list-group-flush">
                                                <a href="{{ url('play/'.$course->slug.'/'.$lesson->slug.'/'.$video->slug) }}" class="list-group-item d-flex justify-content-between border-0 px-0 py-2 bg-light">
                                                    <div class="list-video-icon">
                                                        @auth
                                                            @if($course->price > 0)
                                                                @if($video->locked == 1)
                                                                    <i class="fa fa-lock mr-2 text-secondary"></i>
                                                                @else
                                                                    <i class="fa fa-play-circle mr-2 text-secondary"></i>
                                                                @endif
                                                            @else
                                                                <i class="fa fa-play-circle mr-2 text-secondary"></i>
                                                            @endif
                                                        @endauth
                                                        @guest
                                                            @if($video->locked == 1)
                                                                <i class="fa fa-lock mr-2 text-secondary"></i>
                                                            @else
                                                                <i class="fa fa-play-circle mr-2 text-secondary"></i>
                                                            @endif
                                                        @endguest
                                                    </div>
                                                    <div class="list-video-title d-flex flex-row" style="flex: 1">
                                                        <div style="flex: 1">
                                                            <p class="m-0 text-dark">{{ $video->title }}</p>
                                                            <span class="text-muted">{{ $video->duration }}</span>
                                                        </div>
                                                        <div class="d-flex justify-content-center" style="width: 25px"><i class="fa fa-check text-success"></i></div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @php $i++ @endphp
                            @endforeach
                        </div>
                    </div>
                    {{-- Course Materials --}}
                </div>
            </div>
        </div>
    </div>
@endsection