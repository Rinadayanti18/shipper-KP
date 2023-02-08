@extends('layouts.main')
@section('container')
    <br>
    <div class="container" style="padding:2%; margin-bottom: 100px">

        {{-- Informasi Pengirim --}}

        <div class="container">
            <h2>Informasi Pengirim</h2>
            <form action="/action_page.php" style="background-color: #f2f2f2; padding: 1%">
                <div class="row" style="margin-bottom: 50px">
                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Nama</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="Nama Pengirim">
                            </div>
                        </div>
                        {{-- <div class="row">
                <div class="col-25">
                  <label for="lname">Kota Asal</label>
                </div>
                <div class="col-75">
                  <input type="text" id="lname" name="lastname" placeholder="Kota Asal">
                </div>
              </div> --}}
                        <div class="row">
                            <div class="col-25">
                                <label for="country">Kota Asal</label>
                            </div>
                            <div class="col-75">
                                <select id="country" name="country">
                                    <option value="australia">Australia</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="subject">Alamat</label>
                            </div>
                            <div class="col-75">
                                <textarea id="subject" name="subject" placeholder="Alamat lengkap Anda" style="height:100px"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Nomor Telepon</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Kode Pos</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="lname" name="lastname" placeholder="Kode Pos">
                            </div>
                        </div>
                        {{-- <div class="row">
                <div class="col-25">
                  <label for="country">Alamat</label>
                </div>
                <div class="col-75">
                  <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="subject">Alamat</label>
                </div>
                <div class="col-75">
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </div>
              </div>
               --}}
                    </div>

                </div>
            </form>
        </div>
        {{-- Informasi Pengirim End --}}

        {{-- Informasi Penerima --}}


        <div class="container">
            <h2>Informasi Penerima</h2>
            <form action="/action_page.php" style="background-color: #f2f2f2; padding: 1%">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Nama</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="Nama Penerima">
                            </div>
                        </div>
                        {{-- <div class="row">
                <div class="col-25">
                  <label for="lname">Kota Tujuan</label>
                </div>
                <div class="col-75">
                  <input type="text" id="lname" name="lastname" placeholder="Kota Tujuan">
                </div>
              </div> --}}
                        <div class="row">
                            <div class="col-25">
                                <label for="country">Kota Tujuan</label>
                            </div>
                            <div class="col-75">
                                <select id="country" name="country">
                                    <option value="australia">Australia</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="subject">Alamat</label>
                            </div>
                            <div class="col-75">
                                <textarea id="subject" name="subject" placeholder="Alamat lengkap Anda" style="height:100px"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Nomor Telepon</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Kode Pos</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="lname" name="lastname" placeholder="Kode Pos">
                            </div>
                        </div>
                        {{-- <div class="row">
                <div class="col-25">
                  <label for="country">Alamat</label>
                </div>
                <div class="col-75">
                  <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="subject">Alamat</label>
                </div>
                <div class="col-75">
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </div>
              </div>
              <div class="row mt-3">
                <input type="submit" value="Submit">
              </div> --}}
                    </div>
                </div>
            </form>
        </div>
        {{-- Informasi Penerima End --}}

        {{-- Informasi Barang --}}


        <div class="container">
            <h2>Informasi Barang</h2>
            <form action="/action_page.php" style="background-color: #f2f2f2; padding: 1%">

                {{-- Detail Barang --}}
                <div class="row" style="margin-bottom: 20px">
                    <div class="col">

                        <div class="row">
                            <div class="col-25">
                                <label for="country">Jenis Barang</label>
                            </div>
                            <div class="col-75">
                                <select id="country" name="country">
                                    <option value="australia">Australia</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Nama Barang</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Nilai Barang</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="col">

                        <div class="row">
                            <div class="col-25">
                                <label for="country">Jenis Layanan</label>
                            </div>
                            <div class="col-75">
                                <select id="country" name="country">
                                    <option value="australia">Australia</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Jumlah</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="">
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Detail Barang End --}}




                {{-- Dimensi --}}
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Berat</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="gram">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Tinggi</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="cm">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Lebar</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="cm">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Panjang</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="cm">
                            </div>
                        </div>

                    </div>

                </div>
                {{-- Dimensi End --}}




                <div class="col">
                    <div class="row">
                        <div class="col-25">
                            <label for="subject">Keterangan</label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Alamat lengkap Anda" style="height:100px"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col">

                    {{-- <div class="col-25">
            <label for="subject">Keterangan</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="subject" placeholder="Alamat lengkap Anda" style="height:200px"></textarea>
          </div> --}}

                    <table>
                        <tr>
                            <td>Biaya kirim</td>
                            <td>Rp 0</td>
                        </tr>
                        <tr>
                            <td>Asuransi</td>
                            <td>Rp 0</td>
                        </tr>
                        <tr>
                            <td>Total Biaya</td>
                            <td>Rp 0</td>
                        </tr>
                    </table>



                    <input type="submit" value="Submit">
                    <input type="submit" value="Submit" style="margin-right: 30px">


                </div>



            </form>
        </div>

        {{-- Informasi Barang End --}}
    </div>
@endsection
