@extends('layouts.play')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex">
            <nav class="col-md-3 d-none d-md-block bg-light p-0 sidebar">
                <div class="sidebar-stick">
                    <div class="card list-contents">
                        <div class="card-header bg-light">
                            <p class="mb-2"><a href="{{ url('quas-incidunt-exercitationem-distinctio-at') }}" class="text-info">&larr; Kembali</a></p>
                            <p class="mb-0" style="font-weight: 500">Membuat Apps dengan React Native &amp; Laravel</p>
                        </div>
                        <div class="card-body p-0 pt-3 pb-2">
                            @php
                                $title = [
                                    1 => 'Introduction',
                                    2 => 'NodeJS Basic',
                                    3 => 'Installation Software',
                                    4 => 'First Web App',
                                    5 => 'RESTful API',
                                ];
                            @endphp
                            @for($i = 1; $i <= 5; $i++)
                            <div class="mb-2">
                                <h4 class="title-lesson mb-0 px-3">
                                    <span class="text-info" style="font-style: 14px">Lesson {{$i}}:</span> <br>
                                    {{$title[$i]}}
                                </h4>
                                <div class="list-group list-video list-group-flush">
                                    <a href="" class="list-group-item d-flex justify-content-between py-2">
                                        <div class="list-video-icon"><i class="fa fa-play-circle mr-2 text-secondary"></i></div>
                                        <div class="list-video-title text-dark">Cras justo odio</div>
                                    </a>
                                    <a href="" class="list-group-item d-flex justify-content-between py-2">
                                        <div class="list-video-icon"><i class="fa fa-lock mr-2 text-secondary"></i></div>
                                        <div class="list-video-title text-dark">Dapibus ac facilisis in</div>
                                    </a>
                                    <a href="" class="list-group-item d-flex justify-content-between py-2">
                                        <div class="list-video-icon"><i class="fa fa-lock mr-2 text-secondary"></i></div>
                                        <div class="list-video-title text-dark">Morbi leo risus</div>
                                    </a>
                                    <a href="" class="list-group-item d-flex justify-content-between py-2">
                                        <div class="list-video-icon"><i class="fa fa-lock mr-2 text-secondary"></i></div>
                                        <div class="list-video-title text-dark">Porta ac consectetur ac some borders and rounded corners</div>
                                    </a>
                                    <a href="" class="list-group-item d-flex justify-content-between py-2">
                                        <div class="list-video-icon"><i class="fa fa-lock mr-2 text-secondary"></i></div> 
                                        <div class="list-video-title text-dark">Vestibulum at eros</div>
                                    </a>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </nav>
            <main role="main" class="col-md-9 main p-0 ml-auto">
                <!-- header -->
                <div class="card classroom-header rounded-0 border-0" style="padding-left: 335.35px">
                    <div class="card-body py-0 px-4 d-flex align-items-center">
                        <p class="play-title m-0">Morbi leo risus</p>
                    </div>
                </div>
                <!-- header -->
                <!-- content -->
                <div class="classroom-content">
                    <div class="card mb-5">
                        <div class="card-body d-flex justify-content-center align-items-center p-0">
                            {{-- Video --}}
                            <iframe id="vzvd-14747722" name="vzvd-14747722" title="vzaar video player" class="vzaar-video-player" type="text/html" width="100%" height="520" frameborder="0" allowFullScreen allowTransparency="true" mozallowfullscreen webkitAllowFullScreen src="//view.vzaar.com/14747722/player"></iframe>
                            {{-- Video --}}
                        </div>
                    </div>
                    <!-- description -->
                    <div class="px-5 pt-1 pb-5">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> 
                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    </div>
                    <!-- description -->
                </div>
                <!-- content -->
            </main>
        </div>
    </div>
@endsection