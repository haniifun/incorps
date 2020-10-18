
<section id=form>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      	<div class="col-xl-10 col-lg-12 col-md-9">
        	<div class="card o-hidden border-0 shadow-lg my-5">
          		<div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            		<div class="row justify-content-center">
              			<div class="col-lg-8">
                			<div class="p-5">
                   				<div class="text-center">
                    				<h1 class="h4 text-gray-900 mb-4">Form Pemesanan Cetak-In</h1>
                  				</div>
                  				<form  action="<?= LURL ?>/cetak/order" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="email" name="email" value="<?=$_SESSION['user'] ?>">
                            <div class="form-group">
                              <label for="barang">Mau Cetak apa kak?</label>
                              <select class="custom-select" id="barang" name="barang">
                               <?php foreach($data['cetak'] as $cetak) : ?>
                                <option value="<?= $cetak['id_produk'] ?>"><?= $cetak['nama']." (".$cetak['harga'].")"?></option>
                               <?php endforeach ?>
                              </select>
                             </div>

                             <div class="form-group">
                              <label for="jumlah">Jumlah</label>
                              <input class="form-control" type="number" id="jumlah" name="jumlah">
                             </div>

                            <div class="input-group mb-3">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="file">
                                <label class="custom-file-label" for="file">file cetak</label>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="metode">Mau kami antar?</label>
                              <select class="custom-select" id="metode" name="metode" required>
                                <option value="1">Ya, Antar</option>
                                <option value="2">Ambil Sendiri</option>
                              </select>
                            </div>

                            <button type="submit" name="desain" class="btn btn-primary btn-user btn-block">Pesan</button>
                          </form>


                          <div class="sop">
                            <p>* Minimal pemesanan untuk Blocknote 100 buah dan co-card 50 buah.</p>
                            <p>* File diarsipkan dalam bentuk .rar atau .zip dengan ukuran maksimal 1mb.</p>
                            <p>* waktu pembuatan paling cepat 3 hari.</p>
                          </div>
                			</div>
              			</div>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>
</div>
</section>


