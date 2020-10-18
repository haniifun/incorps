
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
                    				<h1 class="h4 text-gray-900 mb-4">Form Pemesanan Rental-In</h1>
                  				</div>

                  				<form  action="<?= LURL ?>/rental/order" method="post" enctype="multipart/form-data">
                  					<input type="hidden" id="email" name="email" value="<?=$_SESSION['user'] ?>">
                            <div class="form-group">
        									  	<label for="barang">Butuh barang apa hari ini?</label>
                              <select class="custom-select" id="barang" name="barang" required>
        									  		<?php foreach($data['rental'] as $rental) : ?>
        									  			<option value="<?= $rental['id_produk'] ?>"><?= $rental['nama']." ".$rental['detail'] ?></option>
        									  		<?php endforeach ?>
        									  	</select>
        									   </div>
                  				
                          	<div class="form-group">
          								      <label for="jumlah">Jumlah</label>
                      					<input type="number" name=jumlah class="form-control" id="jumlah" required>
                    			  </div>

				                    <div class="form-group">
                								<div>
                									<label for="tglpinjam">Tanggal Peminjaman</label>
                								</div>
                								<div class="input-group date form_datetime" data-date="2019-01-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="tglpinjam">
  						                    <input class="form-control" type="text" value="" readonly required>
  						                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
  						                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
  						                  </div>
  						                  <input type="hidden" id="tglpinjam" name="tglpinjam" value="" />
                    			  </div>

                    				<div class="form-group">
              								<label for="lamapinjam">Waktu Peminjaman</label>
                          			<select class="custom-select" id="lamapinjam" name="lamapinjam">
          									    	<option value="1">6 Jam</option>
          									    	<option value="2">12 Jam</option>
          									    	<option value="4">Harian</option>
          									    	<option value="3">paket KKN</option>
          									  	</select>
                    				</div>
                    			
                          	<div class="input-group mb-3">
        									  	<div class="custom-file">
        									     <label for="identitas">Kartu identitas (.jpg .png)</label>
                              	<input type="file" id="identitas" name="identitas">
        									   </div>
        									  </div>

                            <div class="form-group">
                                <label for="organisasi">Organisasi</label>
                                <input type="text" name=organisasi class="form-control" id="organisasi" required>
                            </div>

									          <div class="form-group">
              								<label for="metode">Mau kami antar?</label>
                        			<select class="custom-select" id="metode" name="metode" required>
        									     	<option value="1">Ya, Antar</option>
        									    	<option value="2">Ambil Sendiri</option>
        									  	</select>
                    			  </div>
                            
                            <button type="submit" name="rental" class="btn btn-primary btn-user btn-block">Pesan</button>
                  				</form>
                			</div>
              			</div>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>
</div>
</section>


