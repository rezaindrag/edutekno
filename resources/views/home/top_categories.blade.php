<div class="container-fluid content bg-white py-4">
    <div class="container home">
        <h4 class="mb-4 section-header text-secondary" id="top-courses">Topik &amp; Kategori</h4>
        <div class="row">
            <div class="col-md-12 d-flex flex-wrap flex-row justify-content-between">
                @foreach ($categories as $category)
                    <div class="card post-container mb-3" style="width: 260px;height: 80px;background: {{ $category->color }}">
                        <div class="card-body d-flex flex-row justify-content-center align-items-center px-3 py-0">
                            <h4 href="" class="category-name text-light text-center m-0">{{ $category->name }}</h4>
                        </div>
                    </div>
                @endforeach
                <div style="width: 260px"></div>
                <div style="width: 260px"></div>
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-start">
            <a href="/?page=courses" class="text-success">Lihat Semua Kategori <i class="fa fa-angle-right" style="font-size: 13px"></i></a>
        </div>
    </div>
</div>

    