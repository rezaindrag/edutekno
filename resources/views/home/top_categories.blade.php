<div class="container-fluid content bg-white py-5">
    <div class="container home">
        <div class="d-flex flex-column align-items-start mb-3">
            <h4 class="section-header text-secondary" id="top-courses">Topik &amp; Kategori</h4>
            <p class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nesciunt exercitationem quisquam minus.</p>
        </div>
        <div class="row mb-3">
            <div class="col-md-12 d-flex flex-wrap flex-row justify-content-between">
                @foreach ($topics as $topic)
                    <div class="card post-container mb-3 bg-secondary" style="width: 266px;height: 100px;">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center px-3 py-0">
                            <h5 class="category-name text-center text-light m-0">{{ $topic->name }}</h5>
                        </div>
                    </div>
                @endforeach
                <div style="width: 266px"></div>
                <div style="width: 266px"></div>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <a href="/?page=courses" class="btn btn-outline-primary rounded px-4">Lihat Semua</a>
        </div>
    </div>
</div>

    