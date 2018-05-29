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
            <div class="row mb-4">
                <div class="col-md-12 d-flex flex-row justify-content-between">
                    <div class="dropdown mr-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown mr-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Urut Berdasarkan
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="col-5"></div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari" aria-label="Cari" aria-describedby="basic-addon2" style="font-size: 14px">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-wrap flex-row justify-content-between">
                        @for($i = 0; $i < 8; $i++)
                            <div onclick="window.location.href='{{ url('classroom/mycourses/p') }}'" class="card post-container mb-3" style="width: 260px">
                                <img class="post-thumb" src="https://via.placeholder.com/258x124" alt="">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <a href="" class="course-title text-dark mb-2">Belajar NodeJS Basic</a>
                                    <p class="post-attrs mb-2">
                                        <span class="mr-2">5 Lessons</span>
                                        <span>45mm</span>
                                    </p>
                                </div>
                            </div>
                        @endfor
                        <div style="width: 245px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
@endsection