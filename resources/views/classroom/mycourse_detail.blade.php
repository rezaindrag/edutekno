@extends('layouts.classroom')

@section('content')
    <!-- header -->
    <div class="card classroom-header rounded-0 border-0" style="padding-left: 228.35px">
        <div class="card-body py-0 px-4 d-flex align-items-center">
            My Courses
        </div>
    </div>
    <!-- header -->
    <!-- content -->
    <div class="card classroom-content rounded-0 border-0 bg-light">
        <div class="card-body p-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="m-0">Belajar NodeJS Basic</h3>
                </div>
                <div class="card-body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div>
                        <span class="text-secondary">Aktivitas Terakhir</span>
                        <h3>NodeJS Basic: Porta ac consectetur ac</h3>
                        <a href="{{ url('classroom/play') }}" class="btn btn-outline-info">Lanjutkan Pembelajaran</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h5 class="m-0">Silabus</h5>
                    <div class="mt-1">
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
                            <div class="card mb-2">
                                <div class="card-body">
                                    <h5 class="mb-2" style="font-weight: 100">{{$title[$i]}}</h5>
                                    <p class="mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <ul class="list-group list-group-flush">
                                        <li href="" class="list-group-item border-0 px-0 pt-0 pb-1 d-flex flex-row">
                                            <div class="d-flex justify-content-center align-items-center" style="width: 30px">
                                                <i class="fa fa-play-circle text-info mr-2"></i>
                                            </div>
                                            <div style="flex: 1">
                                                <span class="text-secondary">Cras justo odio</span>
                                            </div>
                                        </li>
                                        <li href="" class="list-group-item border-0 px-0 pt-0 pb-1 d-flex flex-row">
                                            <div class="d-flex justify-content-center align-items-center" style="width: 30px">
                                                <i class="fa fa-play-circle text-info mr-2"></i>
                                            </div>
                                            <div style="flex: 1">
                                                <span class="text-secondary">Dapibus ac facilisis in</span>
                                            </div>
                                        </li>
                                        <li href="" class="list-group-item border-0 px-0 pt-0 pb-1 d-flex flex-row">
                                            <div class="d-flex justify-content-center align-items-center" style="width: 30px">
                                                <i class="fa fa-play-circle text-info mr-2"></i>
                                            </div>
                                            <div style="flex: 1">
                                                <span class="text-secondary">Morbi leo risus</span>
                                            </div>
                                        </li>
                                        <li href="" class="list-group-item border-0 px-0 pt-0 pb-1 d-flex flex-row">
                                            <div class="d-flex justify-content-center align-items-center" style="width: 30px">
                                                <i class="fa fa-play-circle text-info mr-2"></i>
                                            </div>
                                            <div style="flex: 1">
                                                <span class="text-secondary">Porta ac consectetur ac</span>
                                            </div>
                                        </li>
                                        <li href="" class="list-group-item border-0 px-0 pt-0 pb-1 d-flex flex-row">
                                            <div class="d-flex justify-content-center align-items-center" style="width: 30px">
                                                <i class="fa fa-file-alt text-info mr-2"></i>
                                            </div>
                                            <div style="flex: 1">
                                                <span class="text-secondary">Vestibulum at eros</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-4">
                        <h5 class="m-0">Q&amp;A</h5>
                        <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="" class="btn btn-info">Posting pertanyaanmu!</a>
                    </div>
                    <div>
                        <h5 class="m-0">Profil Intruktur</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>      
                    <div>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
@endsection