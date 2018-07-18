@extends('layouts.play')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex">
            <nav class="col-md-3 d-none d-md-block bg-light p-0 sidebar">
                <div class="sidebar-stick">
                    <div class="card list-contents">
                        <div class="card-header p-3 bg-light">
                            <p class="mb-3"><a href="{{ url($course->slug) }}" class="text-primary" style="font-size: 14px"><i class="fa fa-arrow-left"></i> Kembali</a></p>
                            <h5 class="m-0 text-dark">{{ $course->title }}</h5>
                        </div>
                        <div class="card-body p-3">
                            @php $i = 1; @endphp
                            @foreach($course->lessons as $lesson)
                                <div class="mb-3">
                                    <h5 class="mb-2 text-dark title-lesson" data-toggle="collapse" data-target="#lesson{{ $i }}">
                                        <i class="fa fa-caret-right mr-1"></i> {{ $lesson->title }}
                                    </h5>
                                    <div id="lesson{{ $i }}" class="collapse show">
                                        @foreach($lesson->videos as $video)
                                            <div class="list-group list-video list-group-flush">
                                                <a href="{{ url('preview/'.$course->slug.'/'.$lesson->slug.'/'.$video->slug) }}" class="list-group-item d-flex justify-content-between border-top-0 px-0 py-2">
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
                                                    <div class="list-video-title d-flex justify-content-between">
                                                        <p class="m-0 text-secondary">{{ $video->title }}</p>
                                                        <span class="text-secondary">{{ $video->duration }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @php $i++; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </nav>
            <main role="main" class="col-md-9 main p-0 ml-auto">
                <!-- header -->
                <div class="card classroom-header rounded-0 border-0" style="padding-left: 335.35px">
                    <div class="card-body py-0 px-4 d-flex align-items-center">
                        <h5 class="m-0 text-primary" style="font-weight: 500">
                            <span class="text-secondary">{{ $lessonPlay->title }}:</span>
                            {{ $videoPlay->title }}
                        </h5>
                    </div>
                </div>
                <!-- header -->
                <!-- content -->
                <div class="classroom-content pb-5">
                    <div class="card mb-4">
                        <div class="card-body video-play-container d-flex justify-content-center align-items-center p-0">
                            {{-- Video --}}
                            @auth
                                @if($course->price > 0)
                                    @if($videoPlay->locked == 1)
                                        <button class="btn btn-primary btn-lg"><i class="fa fa-lock mr-1"></i> Video Locked</button>
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
                                        <button class="btn btn-primary btn-lg"><i class="fa fa-lock mr-1"></i> Video Locked</button>
                                    @else
                                        {!! $videoPlay->video_embed !!}
                                    @endif
                                @endif
                            @endguest
                            {{-- Video --}}
                        </div>
                    </div>
                    <!-- description -->
                    <div class="px-5 mb-4">
                        {!! $videoPlay->description !!}    
                    </div>
                    <div class="px-5 d-flex flex-row justify-content-between">
                        <a href="" class="btn btn-primary">Sebelumnya</a>
                        <a href="" class="btn btn-primary">Selanjutnya</a>
                    </div>
                    <!-- description -->
                </div>
                <!-- content -->
            </main>
        </div>
    </div>
@endsection