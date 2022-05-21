<section id="agenda-section">
    <div class="container">
        <h1 class="warna-01 text-center">AGENDA</h1>
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid px-5" src="<?= base_url() ?>/assets/img/agenda.png" alt="agenda">
            </div>
            <div class="col-md-8">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <h2 class="warna-01">Nama Kegiatan</h2>
                        <p>16 Januari 2022</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus vel ipsum scelerisque eget senectus sed in at. At tristique tristique dignissim tellus sit ut rhoncus. Gravida lacus, eu posuere id nibh et placerat justo ullamcorper. Fermentum massa lacus ut a hendrerit. Morbi felis at viverra quis nibh facilisis mi amet, egestas. Molestie turpis neque metus convallis aliquet gravida natoque cursus eleifend.
                        </p>
                    </div>
                    <div class="item">
                        <h2 class="warna-01">Nama Kegiatan</h2>
                        <p>16 Januari 2022</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus vel ipsum scelerisque eget senectus sed in at. At tristique tristique dignissim tellus sit ut rhoncus. Gravida lacus, eu posuere id nibh et placerat justo ullamcorper. Fermentum massa lacus ut a hendrerit. Morbi felis at viverra quis nibh facilisis mi amet, egestas. Molestie turpis neque metus convallis aliquet gravida natoque cursus eleifend.
                        </p>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="" class="read-more">lihat semua agenda</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        smartSpeed: 2000,
    })
</script>