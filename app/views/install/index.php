
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
                    				<h1 class="h4 text-gray-900 mb-4">Form Isian Install-In (Belum diedit)</h1>
                  				</div>
                  				<form  action="<?= LURL ?>/install/order" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="email" name="email" value="<?=$_SESSION['user'] ?>">
                            <div class="form-group">
        									  	<label>Mau install apa kak?</label>
                              <select class="custom-select" id="barang" name="barang">
        									  		<?php foreach($data['install'] as $install) : ?>
        									  			<option value="<?= $install['id_produk'] ?>"><?= $install['nama']?></option>
        									  		<?php endforeach ?>
        									  	</select>
        									   </div>

          									<div class="form-group">
                        				<select class="custom-select" id="metode" name="metode">
          									    	<option value="1">Ya, Jemput</option>
          									    	<option value="2">Antar Sendiri</option>
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


