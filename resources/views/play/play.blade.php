@extends('layouts.play')

@section('content')
  <nav class="col-md-3 d-none d-md-block bg-light p-0 sidebar">
    <div class="sidebar-stick">
      <div class="card list-contents">
        <div class="card-header bg-light">
          <a href="/" class="text-info"><i class="fa fa-angle-left"></i> Back to Dashboard</a>
          <h4 class="mb-0 title">
            Membuat Apps dengan React Native &amp; Laravel
          </h4>
        </div>
        <div class="card-body p-0 py-2">
          {{-- Accordion --}}
          <div id="accordion">
            @for ($o = 1; $o < 4; $o++)
            {{-- item --}}
            <div class="card rounded-0 border-1 border-0 pt-2">
              <div class="card-header bg-white rounded-0 border-0 p-0" id="heading" data-toggle="collapse" data-target="#collapse@php echo $o; @endphp" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="text-dark section pl-3">
                    @php echo $o; @endphp. Collapsible Group Item
                </h5>
              </div>
              <div id="collapse@php echo $o; @endphp" class="collapse show" aria-labelledby="heading">
                <div class="card-body p-0">
                  {{-- List Item --}}
                  <div class="list-group list-group-flush p-0" id="list-group">
                    @for ($i = 0; $i < 3; $i++)
                      <a href="" class="list-group-item py-2 px-3 video-item d-flex align-items-start flex-direction-row">
                        <div class="play-icon text-dark" style="width: 30px">
                          <i class="far fa-play-circle" style="font-size: 16px"></i>
                        </div> 
                        <div class="video-title text-dark" style="flex: 1">
                          Dapibus ac facilisis in Dapibus ac facilisis
                        </div>
                        <div class="video-title text-secondary d-flex justify-content-end" style="width: 50px">
                          <span style="font-size: 13px">10.23</span>
                        </div>
                      </a>
                    @endfor
                  </div>
                  {{-- List Item --}}
                </div>
              </div>
            </div>
            {{-- item --}}
            @endfor
          </div>
          {{-- Accordion --}}
        </div>
        {{-- <div class="card-footer bg-white">&copy; @php echo date('Y') @endphp GuruCoding.id</div> --}}
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row d-flex justify-content-end">
      <main role="main" class="col-md-9 main p-0">
        {{-- header --}}
        <div class="card play-header rounded-0 border-0">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-md-3">
                <a href="" class="btn btn-link d-flex justify-content-start align-items-center text-info">
                  <i class="fa fa-arrow-left mr-2"></i> <span>Prev</span>
                </a>
              </div>
              <div class="col-md-6 d-flex justify-content-center align-items-center">
                <p class="play-title m-0">Introduction</p>
              </div>
              <div class="col-md-3">
                <a href="" class="btn btn-link d-flex justify-content-end align-items-center text-info">
                  <span>Next</span> <i class="fa fa-arrow-right ml-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        {{-- header --}}
        {{-- media play --}}
        <div class="card media-play mb-4">
          <div class="card-body d-flex justify-content-center align-items-center p-0">
            {{-- <video  width="90%" height="90%" controls>
              <source src="assets/mov_bbb.mp4" type="video/mp4">
            </video> --}}
            {{-- <iframe frameborder="0" width="90%" height="90%" src="//www.dailymotion.com/embed/video/x6dlvlh" allowfullscreen allow="autoplay" ui-logo="false"></iframe> --}}
            <iframe width="90%" height="90%" src="https://www.youtube.com/embed/pU9Q6oiQNd0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
        {{-- media play --}}
        {{-- comment --}}
        <div class="m-4">
          <div id="disqus_thread"></div>
          <script>
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
            */
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://gurucoding.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          {{-- comment --}}
        </div>
      </main>
    </div>
  </div>
@endsection