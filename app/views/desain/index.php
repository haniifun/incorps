
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
                    				<h1 class="h4 text-gray-900 mb-4">Form Pemesanan Desain-In</h1>
                  				</div>
                  				<form  action="<?= LURL ?>/desain/order" method="post" enctype="multipart/form-data">
                  					<input type="hidden" id="email" name="email" value="<?=$_SESSION['user'] ?>">
                            <div class="form-group">
                              <label for="barang">Mau desain apa kak?</label>
        								      <select class="custom-select" id="barang" name="barang">
        									     <?php foreach($data['desain'] as $desain) : ?>
        							  			  <option value="<?= $desain['id_produk'] ?>"><?= $desain['nama']." (".$desain['harga'].")"?></option>
        							  		   <?php endforeach ?>
        							  	    </select>
        							       </div>

                          	<div class="form-group">
                              <label >Waktu pembuatan</label>
                  						<select class="custom-select" id="deadline" name="deadline">
                                <option value="4">5 hari (Normal)</option>
        									    	<option value="1">1 hari (+Rp40.000)</option>
        									    	<option value="2">2 hari (+Rp30.000)</option>
        									    	<option value="3">3 hari (+Rp15.000)</option>
        									      
                              </select>
                    				</div>

                    				<div class="input-group mb-3">
        									  	<div class="custom-file">
        									    	<input type="file" class="custom-file-input" id="file" name="file">
        									    	<label class="custom-file-label" for="file">deskripsi desain</label>
        									  	</div>
        									 </div>

				                    <button type="submit" name="desain" class="btn btn-primary btn-user btn-block">Pesan</button>
                  				</form>

                  				<div class="sop">
          									<p>* File diarsipkan dalam bentuk .rar atau .zip (jika ada).</p>
          									<p>* Proses pembuatan dimulai sejak customer melakukan DP minimal 50%.</p>
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


