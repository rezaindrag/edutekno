@extends('layouts.main')

@section('header')
	<div class="container-fluid py-4 bg-secondary">
		<div class="container">
			<h3 class="text-light m-0">Teknodegree Programs</h3>
		</div>
	</div>
@endsection

@section('content')
	<div class="container-fluid py-4 content">
		<div class="container pages">
            {{-- Start Container --}}
            <div class="py-3">
                <p class="m-0" style="font-size: 18px">Master in-demand skills. Build and design amazing projects. Earn a valued credential. Launch your career in Data Science, Machine Learning, Android, iOS, and more. Be in demand.</p>
            </div>
            <div class="row">
                <div class="col-md-12 m-auto d-flex flex-wrap flex-row justify-content-between py-3">
                    <div class="card mb-5" style="width: 335px;">
                        <img class="card-img-top" src="https://via.placeholder.com/350x220/0296C7" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Front-End Web Developer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-success btn-block" style="border-radius: 100px">Lihat Detail &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5" style="width: 335px;">
                        <img class="card-img-top" src="https://via.placeholder.com/350x220/FFB45C" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Back-End Developer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-success btn-block" style="border-radius: 100px">Lihat Detail &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5" style="width: 335px;">
                        <img class="card-img-top" src="https://via.placeholder.com/350x220/A25FDD" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Full Stack Web Developer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-success btn-block" style="border-radius: 100px">Lihat Detail &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5" style="width: 335px;">
                        <img class="card-img-top" src="https://via.placeholder.com/350x220/A25FDD" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mobile Apps Developer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-success btn-block" style="border-radius: 100px">Lihat Detail &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5" style="width: 335px;">
                        <img class="card-img-top" src="https://via.placeholder.com/350x220/FFB45C" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">UI &amp; UX Developer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-success btn-block" style="border-radius: 100px">Lihat Detail &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5" style="width: 335px;">
                        <img class="card-img-top" src="https://via.placeholder.com/350x220/0296C7" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Machine Learning</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-success btn-block" style="border-radius: 100px">Lihat Detail &rarr;</a>
                            </div>
                        </div>
                    </div>
                    {{-- Balancer --}}
                    <div style="width: 335px;"></div>
                    <div style="width: 335px;"></div>
                    {{-- Balancer --}}
                </div>
            </div>
            {{-- Start Container --}}
        </div>
    </div>
@endsection