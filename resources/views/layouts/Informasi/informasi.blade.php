

<div class="slider-home container-fluid content" style="padding-right:0px ; padding-left:0px;">
    <img class="imageSlider img-fluid" src="/image/Banner-Informasi.png" alt="Informasi GOPress" style="width: 100%">
</div>

    <div class="navbar_display" style="{{ $title === 'Panduan' || 
                                        $title === 'Barang Berbahaya' || 
                                        $title === 'Larangan'
                                        ? 'display : block' : '' }}">
        @include('layouts.Informasi.navbarInformasiPaket')
    </div>

    <div class="navbar_display" style="{{ $title === 'SK Pengiriman' || 
                                        $title === 'SK' || 
                                        $title === 'Kebijakan Privasi' ||
                                        $title === 'Kebijakan Cookies'
                                        ? 'display : block' : '' }}">
        @include('layouts.Informasi.navbarKetentuan')
    </div>
