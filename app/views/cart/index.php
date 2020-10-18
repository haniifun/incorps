<div class=" mt-4 text-center">
	<h3>Keranjang</h3>
</div>

<div class="container mt-3">	
	<div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Rental</h4></div>
          <?php foreach ($data['rental'] as $rental) : ?>
          		<div class="card mt-2 mb-2 ml-2 mr-2">
          			<div class="card-body">
			            <h5 class="card-title "><?= $rental['nama']." ". $rental['detail']?></h5>
			            <p class="card-text">Tanggal Pinjam: <?php $date = date_create($rental['tgl_peminjaman']); echo date_format($date, 'Y-m-d H:i') ?></p>
			            <p class="card-text">Tanggal Kembali: <?php $date = date_create($rental['tgl_pengembalian']); echo date_format($date, 'Y-m-d H:i') ?></p>
			            <p class="card-text">Jumlah: <?= $rental['jumlah'] ?></p>
			            <p class="card-text">Total Biaya: <?= $rental['harga'] ?></p>
			            <button type="button" class="btn btn-outline-info btn-sm mt-1">Rincian</button>
			            <a href="<?= LURL ?>/cart/checkout1/<?= $rental['id_trx'] ?>"><button type="button" class="btn btn-success btn-sm ml-2 mt-1" style="float: right;">Checkout</button></a>
			            <a href="<?= LURL ?>/cart/batalkan1/<?= $rental['id_trx'] ?>"><button type="button" class="btn btn-danger btn-sm ml-2 mt-1" style="float : right">Batalkan</button></a>
		            </div>
          		</div>
      	<?php endforeach; ?>
    </div>


	<div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Desain</h4></div>
          <?php foreach ($data['desain'] as $desain) : ?>
          		<div class="card mt-2 mb-2 ml-2 mr-2">
          			<div class="card-body">
			            <h5 class="card-title "><?= $desain['nama'] ?></h5>
			            <p class="card-text">Selesai : <?php $date = date_create($desain['tgl_selesai']); echo date_format($date, 'Y-m-d H:i') ?></p>
			            <p class="card-text">Total Biaya: <?= $desain['total'] ?></p>
			            <a href="<?= LURL ?>/cart/checkout2/<?= $desain['id_trx'] ?>"><button type="button" class="btn btn-success btn-sm ml-2 mt-1" style="float: right;">Checkout</button></a>
			            <a href="<?= LURL ?>/cart/batalkan2/<?= $desain['id_trx'] ?>"><button type="button" class="btn btn-danger btn-sm ml-2 mt-1" style="float : right">Batalkan</button></a>
		            </div>
          		</div>
      	<?php endforeach; ?>
    </div>

	<div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Cetak</h4></div>
          <?php foreach ($data['cetak'] as $cetak) : ?>
          		<div class="card mt-2 mb-2 ml-2 mr-2">
          			<div class="card-body">
			            <h5 class="card-title "><?= $cetak['nama'] ?></h5>
			            <p class="card-text">Selesai : <?php $date = date_create($cetak['tgl_selesai']); echo date_format($date, 'Y-m-d H:i') ?></p>
			            <p class="card-text">Jumlah <?= $cetak['jumlah'] ?></p>
			            <p class="card-text">Total Biaya: <?= $cetak['total'] ?></p>
			           <a href="<?= LURL ?>/cart/checkout3/<?= $cetak['id_trx'] ?>"><button type="button" class="btn btn-success btn-sm ml-2 mt-1" style="float: right;">Checkout</button></a>
			            <a href="<?= LURL ?>/cart/batalkan3/<?= $cetak['id_trx'] ?>"><button type="button" class="btn btn-danger btn-sm ml-2 mt-1" style="float : right">Batalkan</button></a>
		             </div>
          		</div>
      	<?php endforeach; ?>
    </div>

	<div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Install</h4></div>
          <?php foreach ($data['install'] as $install) : ?>
          		<div class="card mt-2 mb-2 ml-2 mr-2">
          			<div class="card-body">
			            <h5 class="card-title "><?= $install['nama'] ?></h5>
			            <p class="card-text">Selesai : <?php $date = date_create($install['tgl_selesai']); echo date_format($date, 'Y-m-d H:i') ?></p>
			            <p class="card-text">Total Biaya: <?= $install['harga'] ?></p>
	    				<a href="<?= LURL ?>/cart/checkout4/<?= $install['id_trx'] ?>"><button type="button" class="btn btn-success btn-sm ml-2 mt-1" style="float: right;">Checkout</button></a>
			            <a href="<?= LURL ?>/cart/batalkan4/<?= $install['id_trx'] ?>"><button type="button" class="btn btn-danger btn-sm ml-2 mt-1" style="float : right">Batalkan</button></a>
		            </div>
          		</div>
      	<?php endforeach; ?>
    </div>

</div>