<div class="container-fluid content bg-white py-5">
    <div class="container home">
        <div class="d-flex flex-column align-items-start mb-3">
            <h4 class="mb-3 section-header text-secondary" id="top-courses">Software &amp; Tools</h4>
            <p class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nesciunt exercitationem quisquam minus.</p>
        </div>
        <div class="row mb-4">
            <div class="col-md-12 d-flex flex-row justify-content-start">
                @foreach ($softwares as $software)
                    <h3><a href="" class="badge badge-pill badge-lg badge-secondary mr-2">{{ $software->name }}</a></h3>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <a href="/?page=courses" class="btn btn-outline-primary rounded px-4">Lihat Semua</a>
        </div>
    </div>
</div>