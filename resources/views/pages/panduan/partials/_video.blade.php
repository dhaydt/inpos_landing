<section id="video">
    <div class="container">
        <h3 class="fs-5">Tonton video tutorial</h3>

        <div class="row mt-4 g-4">
            <!-- Bagian Kiri: Video Player dan Deskripsi -->
            <div class="col-md-7">
                <div class="mb-3">
                    <div class="mb-3 position-relative">
                        <iframe width="450" height="315" src="{{ $highlight_video['video'] }}">
                        </iframe>
                    </div>
                    {{-- <video id="mainVideo" controls width="100%">
                        <source id="videoSource" src="video1.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video> --}}
                </div>
                <div>
                    <h5 id="videoTitle">
                        {{ $highlight_video->judul }}
                    </h5>
                    <p>{{ App\CPU\Helpers::getHari($highlight_video['tanggal_upload']) }}</p>
                    <p class="truncate-multiline">
                        {!! $highlight_video['deskripsi'] !!}
                    </p>
                </div>
            </div>

            <!-- Bagian Kanan: List Video -->
            <div class="col-md-5">
                <ul class="d-flex flex-column gap-3">
                    @foreach ($other_videos as $key => $video)
                    <li class="video-item" data-title="{{ $video->judul }}"
                        data-desc="{{ App\CPU\Helpers::getCharStripTags($video->konten, 50) }}" data-src="video1.mp4">
                        <div class="row g-4">
                            <div class="col-3 col-md-4">
                                <?php
                                    $video_url = explode('/', $video->video);
                                    $video_id = end($video_url);
                                ?>
                                <img src="https://img.youtube.com/vi/{{ $video_id }}/sddefault.jpg" alt="Thumbnail 1"
                                    class="rounded-2 me-2 img-fluid" />
                            </div>
                            <div class="col-9 col-md-8">
                                <p class="mb-3 fw-medium">
                                    {{ $video->judul }}
                                </p>
                                <p>{{ App\CPU\Helpers::getHari($video->tanggal_upload) }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>