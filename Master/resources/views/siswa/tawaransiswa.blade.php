@extends('layout/app')

@section('title','Informasi Siswa')

@section('content')

                    <div class="container" uk-grid>

                    <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-push" style="height: 3em;
                    background-color: #0088FF;width: 8em;border-bottom-right-radius: 23px;border-top-right-radius: 23px;color: white;margin: 3em 0 0 0;"><i class="fas fa-arrow-right"></i></button>

                    <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
                    <div class="uk-offcanvas-bar uk-background-primary">

                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <!-- isi dashboard -->
                    <div class="uk-width-1-4@m uk-background-primary " style="width: 100%;">

                        <h2 class="uk-text-bold uk-text-left uk-margin-medium-left" style="color: white;">Dashboard</h2>
                        <img class="uk-align-center" src="/ICON/information.png" alt="">
                        <h3 class="uk-text-bold uk-text-center" style="color: white;">Annisa Kumalasari</h3>
                        <p class="uk-text-center uk-margin-large-bottom" style="color: white;">0812-3456-789</p>

                        <div class="dashboard-siswa uk-margin-medium-left">

                        <a href="{{ route('siswa.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo1.png" alt="">Information</h4></a>
                        <a href="{{ route('siswafavorite.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo2.png" alt="">Favorite</h4></a>
                        <a href="{{ route('siswatawaran.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left;width:max-content;"><img class="uk-margin-small-right" src="/ICON/infologo3.png" alt="">Pasang Tawaran</h4></a>
                        <a href="{{ route('siswabantuan.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo4.png" alt="">Bantuan</h4></a>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <a onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <button class="uk-button uk-button-text">
                        <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo5.png" alt="">Exit</h4></button></a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>    
                    </div>
                    </div>    
                    </div>



            <div class="uk-width-expand@m uk-padding-large uk-margin-medium-left uk-margin"> 
                <h1 class=" uk-margin-medium-bottom uk-text-bold ">Pasang Tawaran</h1>
                <div class="uk-background-primary uk-width-1-1 uk-text-bold">
                    <p style="color: white;height: 35px;text-align: middle; margin: 2px 0 0 2px;padding: 7px 0 0 9px;">Profil Tawaran</p></div>
                    <p>CODE</p>
                    <form>
                        <div class="uk-grid uk-margin-small-left">
                        <input class="uk-input uk-width-1-6" type="text" placeholder=""><p>Otomatis Terisi</p>
                        </div>
                        <p>Nama Panjang</p>
                        <input class="uk-input uk-width-1-1" style="width: 517px" type="text" placeholder="Masukkan Nama Anda" >
                        <p>No Telepon/No Whatsapp</p>
                        <input class="uk-input uk-width-1-1" style="width: 517px" type="text" placeholder="">
                        <p>Tanggal Lahir</p>

                        <div class="uk-grid uk-margin-small-left ">
                        <select class="uk-select" style="width:49px">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>
                        <select class="uk-select" style="width:70px">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>

                        <select class="uk-select" style="width:61px">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>
                    </div>
                    
                    <p>Jenis Kelamin</p>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio6" checked> Pria</label>
                        <label><input class="uk-radio" type="radio" name="radio6"> Wanita</label>
                    </div>

                    <p>Tinggi Badan</p>
                    <select class="uk-select" style="width:194px">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>

                    <p>Negara</p>
                    <select class="uk-select" style="width:194px">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>

                    <p>Status</p>
                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio7" checked> Belum Menikah</label>
                        <label><input class="uk-radio" type="radio" name="radio7"> Sudah Menikah</label>
                    </div>

                    <p>Pendidikan</p>
                    <select class="uk-select" style="width:194px">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>

                        <p>Foto Anda</p>

                        
                        <p><img id="output" src="/ICON/uploadimage.png" width="140" /></p>
                                <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                                <label for="file" style="cursor: pointer;">Choose File</label>
                                
                                
                                <script>
                                var loadFile = function(event) {
                                var image = document.getElementById('output');
                                image.src = URL.createObjectURL(event.target.files[0]);
                                };
                                </script>

    <p>Video Anda</p>

    <p><img id="output" src="/ICON/uploadvideo.png" width="150" /></p>
    <input type="file"  accept="image/*" name="video" id="file"  onchange="loadFile(event)" style="display: none;">
    <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
    
    
    <script>
    var loadFile = function(event) {
    var video = document.getElementById('output');
    video.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
        
                <div class="uk-background-primary uk-width-1-1 uk-text-bold">
                    <p style="color: white;height: 35px;text-align: middle; margin: 2px 0 0 2px;padding: 7px 0 0 9px;">Profil Kemampuan</p></div>
                

                <p>Pilih Visa</p>
                    <select class="uk-select" style="width:194px">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>

                    <p>Pekerjaan yang Di inginkan</p>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio8" checked> Perawatan</label>
                        <label><input class="uk-radio" type="radio" name="radio8"> Hotel</label>
                        <label><input class="uk-radio" type="radio" name="radio8"> Restoran</label>
                        <label><input class="uk-radio" type="radio" name="radio8"> Penerbangan</label>
                        <label><input class="uk-radio" type="radio" name="radio8"> Perikanan</label>
                    </div>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio8" checked> Kontruksi</label>
                        <label><input class="uk-radio" type="radio" name="radio8"> IT</label>
                        <label><input class="uk-radio" type="radio" name="radio8"> Penerjemah</label>
                        <label><input class="uk-radio" type="radio" name="radio8"> Industri</label>
                        <label><input class="uk-radio" type="radio" name="radio8"> Perawatan</label>
                        <label><input class="uk-radio" type="radio" name="radio8"> Lainnya</label>
                        
                    </div>

                    <p>Kapan anda siap kerja?</p>
                    <select class="uk-select" style="width:194px">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>

                    <p>Anda pernah bekerja di luar negeri?</p>
                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio9" checked> Sudah</label>
                        <label><input class="uk-radio" type="radio" name="radio9">Belum</label>
                    </div> 
                    

                    <p>Pengalaman kerja yang pernah anda kerjakan</p>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio10" checked> Perawatan</label>
                        <label><input class="uk-radio" type="radio" name="radio10"> Hotel</label>
                        <label><input class="uk-radio" type="radio" name="radio10"> Restoran</label>
                        <label><input class="uk-radio" type="radio" name="radio10"> Penerbangan</label>
                        <label><input class="uk-radio" type="radio" name="radio10"> Perikanan</label>
                    </div>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio10" checked> Kontruksi</label>
                        <label><input class="uk-radio" type="radio" name="radio10"> IT</label>
                        <label><input class="uk-radio" type="radio" name="radio10"> Penerjemah</label>
                        <label><input class="uk-radio" type="radio" name="radio10"> Industri</label>
                        <label><input class="uk-radio" type="radio" name="radio10"> Perawatan</label>
                        <label><input class="uk-radio" type="radio" name="radio10"> Lainnya</label>
                        
                    </div>

                    <p>Sertifikat yang anda miliki</p>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio11" checked> Perawatan</label>
                        <label><input class="uk-radio" type="radio" name="radio11"> Hotel</label>
                        <label><input class="uk-radio" type="radio" name="radio11"> Restoran</label>
                        <label><input class="uk-radio" type="radio" name="radio11"> Penerbangan</label>
                        <label><input class="uk-radio" type="radio" name="radio11"> Perikanan</label>
                    </div>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio11" checked> Kontruksi</label>
                        <label><input class="uk-radio" type="radio" name="radio11"> IT</label>
                        <label><input class="uk-radio" type="radio" name="radio11"> Penerjemah</label>
                        <label><input class="uk-radio" type="radio" name="radio11"> Industri</label>
                        <label><input class="uk-radio" type="radio" name="radio11"> Perawatan</label>
                        <label><input class="uk-radio" type="radio" name="radio11"> Lainnya</label>
                        
                    </div>

                    <div class="uk-background-primary uk-width-1-1 uk-text-bold">
                    <p style="color: white;height: 35px;text-align: middle; margin: 2px 0 0 2px;padding: 7px 0 0 9px;">Kemampuan Berbahasa</p></div>
                    <h4 class="uk-margin-medium-top"><strong>Tingkat bicara bahasa inggris anda</strong></h4>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio12" checked> Tidak bisa</label>
                        <label><input class="uk-radio" type="radio" name="radio12"> Rendah</label>
                        <label><input class="uk-radio" type="radio" name="radio12"> Biasa</label>
                        <label><input class="uk-radio" type="radio" name="radio12"> Tinggi</label>
                        
                    </div>

                    <h4 class="uk-margin-medium-top"><strong>Tingkat Penulisan bahasa inggris anda</strong></h4>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio13" checked> Tidak bisa</label>
                        <label><input class="uk-radio" type="radio" name="radio13"> Rendah</label>
                        <label><input class="uk-radio" type="radio" name="radio13"> Biasa</label>
                        <label><input class="uk-radio" type="radio" name="radio13"> Tinggi</label>
                        
                    </div>

                    <h4 class="uk-margin-medium-top"><strong>Tingkat Bacaan bahasa inggris anda</strong></h4>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="radio14" checked> Tidak bisa</label>
                        <label><input class="uk-radio" type="radio" name="radio14"> Rendah</label>
                        <label><input class="uk-radio" type="radio" name="radio14"> Biasa</label>
                        <label><input class="uk-radio" type="radio" name="radio14"> Tinggi</label>
                        
                    </div>
                    
                    </form>
                    <a href="#daftarberhasil" uk-toggle><button class="uk-button uk-border-rounded uk-button-primary uk-align-center uk-margin-large-top">Daftar</button></a>

            </div>
            
        </div>

        <!-- START MODAL DAFTAR -->
        <div id="daftarberhasil" uk-modal>
    <div class="uk-modal-dialog uk-align-center uk-text-center uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <img src="/ICON/ceklist-modal.png" alt="">
        <p>Terima Kasih Telah berpartisipasi, Klik dibawah ini untuk melihat postingan <br>  <a href="">Disini</a></p>
        
    </div>
</div>
        <!-- END MODAL DAFTAR -->

@endsection

@section('footer')

    <div class="uk-container-expand">

    <footer>
        <div class="footer uk-container uk-container-expand">
            <div class="footer-isi uk-child-width-expand@s" uk-grid>
                <div>
                    <ul>
                        <li class="uk-text-bold">Perusahaan</li>
                        <li>Beranda</li>
                        <li>Harga&Paket</li>
                    </ul>
                </div>
                    <div>
                        <ul>
                        <li class="uk-text-bold">Produk dan Layanan</li>
                        <li>Lowongan Kerja</li>
                        <li>Pembelajaran</li>
                        <li>Magang</li>
                    </ul>
                    </div>
                    <div>
                        <ul>
                        <li class="uk-text-bold">Bantuan</li>
                        <li>Hubungi Kami</li>
                        <li>FAQ</li>
                    </ul>
                    </div>
                    <div>
                        <ul>
                        <li class="uk-text-bold">Informasi Lainnya</li>
                        <li>Testimoni</li>
                    </ul>
                    </div>
                    <div>
                        <ul class="uk-align-center">
                        <li class="uk-text-bold">Temukan Kami di</li>
                        
                    </ul>
                        <img src="/ICON/facebook.png" alt="">
                        <img src="/ICON/google.png" alt="">
                        <img src="/ICON/twitter.png" alt="">

                    <form>

                        <div class="bahasa uk-margin">
                                <div  uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        
                                        <option value="1">Indonesia</option>
                                        <option value="2">Inggris</option>
                                        <option value="3">Jepang</option>
                                        <option value="4">Korea</option>
                                    </select>
                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>

                        </form>
                        </div>
            </div>
                </div>

        </footer>
</div>
    
@endsection