
    
     <div class="container">
        <div class="row mx-4 my-4">
                <div class="col-lg-6 col-md-10 shadow-sm p-3 mb-5 bg-body rounded">
                    <form action="<?= BASEURL; ?>/hasil" class="container" method="post">
                        <h1 class="text-center">#Hitung Kalori</h1>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control"name="nama" id="nama" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur</label>
                            <input type="text" class="form-control"name="umur" id="umur"placeholder="Masukkan Umur Anda">
                        </div>
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat (kg)</label>
                            <input type="text" class="form-control"name="berat" id="berat"placeholder="Masukkan Berat Anda">
                        </div>
                        <div class="mb-3">
                            <label for="tinggi" class="form-label">Tinggi (cm)</label>
                            <input type="text" class="form-control"name="tinggi" id="tinggi"placeholder="Masukkan Tinggi Badan Anda">
                        </div>
                        <div class="mb-3">
                            <label for="kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select"name="kelamin" aria-label="Default select example">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="aktivitas" class="form-label">Jenis Aktivitas</label>
                            <select class="form-select"name="aktivitas" aria-label="Default select example">
                                <option value="Tidak Aktif">Tidak Aktif</option>
                                <option value="Sedikit Aktif">Sedikit Aktif</option>
                                <option value="Cukup Aktif">Cukup Aktif</option>
                                <option value="Sangat Aktif">Sangat Aktif</option>
                                <option value="Ekstra Aktif">Ekstra Aktif</option>                               
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Hitung</button>
                    </form>
                </div>

    
                
                <div class="col-lg-6 col-md-10  mb-5 px-5 shadow-sm bg-body rounded">
                    <div>
                        <h2>#Perhitungan Kalori Kebutuhan</h2>

                        <ol>
                            <li>Untuk orang yang tidak aktif (tidak pernah atau sangat jarang berolahraga):<b> 1,2 </b></li>
                            <li>Untuk orang sedikit aktif (berolahraga ringan 1-3 hari seminggu): <b>1,375</b></li>
                            <li> Untuk orang cukup aktif (berolahraga intensitas sedang 3-5 hari seminggu): <b>1,55</b></li>
                            <li>Untuk orang yang sangat aktif (berolahraga intensitas berat 6-7 hari seminggu):<b> 1,725</b></li>
                            <li>Untuk orang yang ekstra aktif (berolahraga intensitas sangat berat 6-7 hari seminggu atau bekerja di bidang yang membutuhkan stamina dan fisik yang kuat):<b> 1,9</b></li>
                        </ol>
                    </div>
                </div>
        </div>
     </div>
    