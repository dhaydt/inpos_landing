<section id="faq">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-title">Pertanyaan Umum</h2>
            <p class="section-text">
                Ingin tahu lebih lanjut tentang aplikasi Sipos? Temukan disini
            </p>
        </div>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ 1 -->
            @foreach ($faqs as $key => $faq)
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne{{ $key }}" aria-expanded="true" aria-controls="collapseOne">
                        {{ $faq->judul }}
                    </button>
                </h2>
                <div id="collapseOne{{ $key }}" class="accordion-collapse collapse @if ($key == 0) show @endif"
                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        {!! $faq->jawaban !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>