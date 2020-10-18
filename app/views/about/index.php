<?php 

	var_dump($data['rental'][0]['id_produk'])
 ?>
<div class="container mt-5 mb-5">	
	<form action="<?= LURL ?>/rental/order" method="post"> 
		<div class="form-group">
	        <select class="custom-select" id="barang" name="barang">
			<option selected>-- Butuh barang apa hari ini? --</option>
	      	<?php foreach($data['rental'] as $rental) : ?>
	        	<option value="<?= $rental['id_produk'] ?>"><?= $rental['nama']." ".$rental['detail'] ?></option>
	        	
	       	<?php endforeach ?>
	    </div>
	    
				                    <div class="form-group">
                								<div>
                									<label for="tglpinjam">Tanggal Peminjaman</label>
                								</div>
                								<div class="input-group date form_datetime" data-date="2019-01-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="tglpinjam">
  						                    <input class="form-control" type="text" value="" readonly>
  						                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
  						                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
  						                  </div>
  						                  <input type="hidden" id="tglpinjam" name="tglpinjam" value="" />
                    			  </div>
	 	<div class="form-group">
	         <label for="jumlah">Jumlah</label>
			<input type="number" name=jumlah class="form-control" id="jumlah">
      	</div>

		<button type="submit" name="rental" class="btn btn-primary btn-user btn-block">Pesan</button>
	
	</form>
	
</div>