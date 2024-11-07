<section class="section section-1">
    <div class="container">
        <div class="row align-items-center flex-column flex-md-row g-5">
            <div class="col-md-6">
                <div class="mb-3 position-relative">
                    {{-- <img id="thumbnail" src="assets/images/thumb-video.png" alt="Video Thumbnail"
                        class="img-fluid w-100 rounded-4" /> --}}
                    {{-- <div id="play" class="position-absolute top-50 start-50 translate-middle">
                        <img src="assets/images/icons/play.svg" alt="play" />
                    </div> --}}
                    <iframe width="450" height="315" src="{{ $layanan['url'] }}">
                    </iframe>
                </div>
                {{-- <video id="indexVideo" controls width="100%">
                    <source id="videoSource" src="{{ $layanan['url'] }}" type="video/mp4" />
                    Your browser does not support the video tag.
                </video> --}}
            </div>
            <div class="col-md-5">
                <div class="border-bottom border-black pb-3">
                    <h2 class="section-title mt-2">{{ $layanan['judul'] }}</h2>
                    <p class="section-text">
                        {{ $layanan['konten'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>