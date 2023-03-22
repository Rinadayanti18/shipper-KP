@extends('layouts.main')
@section('container')

      <div class="container col-sm-9 mt-4" style="position: static">
        <div>
          <h3 style="padding: 20px; text-align: center;">FAQ</h3>
        </div>
        
        <div class="accordion" id="accordionExample">
          <div class="accordion-item"> <!--Pertanyaan1-->
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Apa keunggulan GOPress?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Melalui aplikasi dan website, Anda dapat dengan mudah mencari tahu tarif pengiriman, dan mengecek drop point (kantor cabang) terdekat dari lokasi Anda.</p>
              <p>Fasilitas <i>trace and tracking system</i> untuk mempermudah Anda melacak keberadaan paket selama proses pengiriman. </p>
              <p>Drop point  beroperasional setiap hari tanpa libur (termasuk akhir pekan, dan Hari Libur Nasional).</p>
            </div>
           </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan2-->
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Bagaimana sistem pembayaran GOPress?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Untuk pelanggan non corporate, pembayaran dapat dilakukan secara tunai ketika paket diserahkan ke drop point.</p>  
                <p>Bagi pelanggan corporate, sistem pembayaran dapat dilakukan dengan syarat dan ketentuan khusus.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan3--> <!--Harus diedit nanti sesuai link web-->
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Bagaimana cara melakukan pengecekan pada Resi GOPress?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Anda dapat melakukan pengecekan No. Resi GOPress secara mandiri pada www.gopress.co.id atau melalui aplikasi GOPress.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan4-->
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Bagaimana dan kapan Anda mendapatkan Resi ?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <p>Untuk nomor Resi akan diberikan langsung oleh pihak GOPress pada saat paket dikirimkan melalui drop point.</p>
            </div>
          </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan5-->
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Bagaimana cara melakukan klaim?
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Untuk melakukan prosedural klaim, Anda dapat menghubungi call center GOPress di Hotline 0812-2887-1875. 
                    Kemudian Anda dapat mengambil formulir klaim asuransi di drop point terdekat dan melengkapi seluruh persyaratan yang dibutuhkan.</p>
               </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan6-->
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Bagaimana mengirim paket dengan asuransi?
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Anda dapat memberi tahu kepada admin drop point GOPress bahwa anda ingin mengasuransikan paket kiriman anda. Selanjutnya pihak 
                   GOPress akan melakukan perhitungan biaya asuransi paket anda dengan perhitungan 0.2% dari harga invoice barang yang dikirimkan.</p>
               </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan7-->
            <h2 class="accordion-header" id="headingSeven">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Bagaimana jika terdapat kerusakan dan kehilangan paket saat pengiriman?
              </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <p>Jika Anda telah melakukan pembayaran asuransi dan melengkapi semua dokumen klaim, maka pihak GOPress akan melakukan 
                pembayaran klaim sesuai dengan nominal barang yang dikirimkan, maksimal Rp. 20.000.000,- (Dua Puluh Juta Rupiah)</p> <br>
                <p>Jika Anda tidak menggunakan asuransi pengiriman, maka klaim akan dibayarkan 10x dari biaya pengiriman paket, 
                    maksimal Rp. 1.000.000,- (Satu Juta Rupiah).</p>
            </div>
          </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan8-->
            <h2 class="accordion-header" id="headingEight">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                Apa yang terjadi jika customer mengirimkan paket yang berisikan barang berbahaya (Dangerous Goods)?
              </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Bagi customer yang dengan sengaja mengirimkan barang yang dilarang atau barang berbahaya maka berdasarkan Pasal 47 UU No. 38 Th. 2009, 
                    customer akan dipidana dengan hukuman penjara paling lama 5 (lima) tahun atau denda paling banyak Rp. 1.000.000.000,- 
                    (Satu Miliar Rupiah) dan pihak penyedia jasa pengiriman (GOPress) tidak bisa dikenakan pertanggungjawaban atas kejadian tersebut.</p>
               </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan9-->
            <h2 class="accordion-header" id="headingNine">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                Bagaimana cara untuk melaporkan keluhan dan saran?
              </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Anda dapat menghubungi customer service 24 jam di 0812-2887-1875.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan10-->
            <h2 class="accordion-header" id="headingTen">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                Bagaimana jika ingin mengganti alamat ketika paket telah dikirimkan?
              </button>
            </h2>
            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Untuk penggantian alamat ketika paket telah dikirim, Anda dapat langsung menghubungi call center GOPress di 0812-2887-1875 untuk bantuan lebih lanjut.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan11-->
            <h2 class="accordion-header" id="headingEleven">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                Bagaimana perhitungan paket dengan berat volumetrik?
              </button>
            </h2>
            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>(Panjang x Lebar x Tinggi) X 1 Kg / 6000</p>
              </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan12-->
            <h2 class="accordion-header" id="headingTwelve">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                Bagaimana perhitungan paket dengan packing kayu?
              </button>
            </h2>
            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Perhitungan biaya pengiriman dengan packing kayu adalah Berat Aktual + (30% x Berat Aktual)</p>
                <p>Apabila 30% x berat aktual kurang dari 3Kg, maka akan dibulatkan menjadi 3Kg.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan13-->
            <h2 class="accordion-header" id="headingThirteen">
              <button  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                Bagaimana melakukan pengiriman benda cair melalui GOPress?
              </button>
            </h2>
            <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Untuk pengiriman benda cair hanya dapat dilakukan via jalur darat saja. Saat ini GOPress belum dapat melayani pengiriman benda cair antar pulau.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan14-->
            <h2 class="accordion-header" id="Fourteen">
              <button  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                Apakah ongkos kirim Layanan GOPress International Standard termasuk biaya bea masuk/keluar, pajak, dan cukai?
              </button>
            </h2>
            <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Total biaya pengiriman tidak termasuk biaya bea masuk/keluar, pajak, dan cukai. Biaya bea cukai baru bisa dikonfirmasi ketika paket 
                    sampai ke negara tujuan dan akan dibayar oleh pihak penerima. Pengurusan dokumen lainnya (apabila dibutuhkan) untuk proses clearance 
                    bukan tanggung jawab pihak GOPress.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item"> <!--Pertanyaan15-->
            <h2 class="accordion-header" id="Fifteen">
              <button  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                Bagaimana jika paket gagal terkirim karena penerima menolak membayar pajak bea masuk atau menolak menerima barang?
              </button>
            </h2>
            <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Jika paket gagal terkirim dikarenakan penerima menolak membayar pajak bea masuk atau menolak menerima barang karena alasan pribadi, 
                    maka biaya bea cukai paket akan ditanggung oleh pengirim. Namun, jika pengirim tidak bersedia membayar dan tidak memberikan jawaban 
                    dalam waktu 15 hari, maka GOPress berhak mengambil tindakan atas paket tersebut.</p>
              </div>
            </div>
          </div>

        </div> <br><br><br><br>
      </div>
      @endsection
      
      
     