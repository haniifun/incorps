<div class="text-center mt-4">
  <h3>Pesanan Saya</h3>
</div>

<div class="container mt-3"> 
    <hr>
    <ul class="nav nav-tabs" id="myTab" role="tablist" style=" width: 100%">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#order" role="tab" aria-controls="home" aria-selected="true">Pesanan Dibuat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#proses" role="tab" aria-controls="profile" aria-selected="false">Diproses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#selesai" role="tab" aria-controls="contact" aria-selected="false">Selesai</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#batal" role="tab" aria-controls="contact" aria-selected="false">Dibatalkan</a>
      </li>
    </ul>
    <div class="tab-content mt-3" id="myTabContent">
      <div class="tab-pane fade show active" id="order" role="tabpanel" aria-labelledby="home-tab">
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Rental</h4></div>
            <?php foreach ($data['rental'] as $rental) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $rental['nama']." ". $rental['detail']?><span class="badge badge-success float-right">Pesanan dibuat</span></h5> 
                  <p class="card-text">Tanggal Pinjam: <?php $date = date_create($rental['tgl_peminjaman']); echo date_format($date, 'Y-m-d H:i') ?></p>
                  <p class="card-text">Tanggal Kembali: <?php $date = date_create($rental['tgl_pengembalian']); echo date_format($date, 'Y-m-d H:i') ?></p>
                  <p class="card-text">Jumlah: <?= $rental['jumlah'] ?></p>
                  <p class="card-text">Total Biaya: <?= $rental['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Desain</h4></div>
            <?php foreach ($data['desain'] as $desain) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $desain['nama']?><span class="badge badge-success float-right">Pesanan dibuat</span></h5>
                  <p class="card-text">Tanggal Selesai: <?php $date = date_create($desain['tgl_selesai']); echo date_format($date, 'Y-m-d H:i') ?></p>
                  <p class="card-text">Total Biaya: <?= $desain['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Cetak</h4></div>
            <?php foreach ($data['cetak'] as $cetak) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $cetak['nama']?><span class="badge badge-success float-right">Pesanan dibuat</span></h5>
                  <p class="card-text">Selesai : <?php $date = date_create($cetak['tgl_selesai']); echo date_format($date, 'Y-m-d H:i') ?></p>
                  <p class="card-text">Jumlah : <?= $cetak['jumlah'] ?></p>
                  <p class="card-text">Total Biaya: <?= $cetak['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Install</h4></div>
            <?php foreach ($data['install'] as $install) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $install['nama']?><span class="badge badge-success float-right">Pesanan dibuat</span></h5>
                  <p class="card-text">Selesai: <?php $date = date_create($install['tgl_selesai']); echo date_format($date, 'Y-m-d H:i') ?></p>
                  <p class="card-text">Total Biaya: <?= $install['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="tab-pane fade" id="proses" role="tabpanel" aria-labelledby="profile-tab">
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Rental</h4></div>
            <?php foreach ($data['prosesrental'] as $prosesrental) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $prosesrental['nama']." ". $prosesrental['detail']?><span class="badge badge-primary float-right">Diproses</span></h5>
                  <p class="card-text">Tanggal Pinjam: <?php $date = date_create($prosesrental['tgl_peminjaman']); echo date_format($date, 'Y-m-d H:i') ?></p>
                  <p class="card-text">Tanggal Kembali: <?php $date = date_create($prosesrental['tgl_pengembalian']); echo date_format($date, 'Y-m-d H:i') ?></p>
                  <p class="card-text">Jumlah: <?= $prosesrental['jumlah'] ?></p>
                  <p class="card-text">Total Biaya: <?= $prosesrental['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Desain</h4></div>
            <?php foreach ($data['prosesdesain'] as $prosesdesain) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $prosesdesain['nama']?><span class="badge badge-primary float-right">Diproses</span></h5>
                  <p class="card-text">Tanggal Selesai: <?php $date = date_create($prosesdesain['tgl_selesai']); echo date_format($date, 'Y-m-d H:i') ?></p>
                  <p class="card-text">Total Biaya: <?= $prosesdesain['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Cetak</h4></div>
            <?php foreach ($data['prosescetak'] as $prosescetak) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $prosescetak['nama']?><span class="badge badge-primary float-right">Diproses</span></h5>
                  <p class="card-text">Selesai: <?php $date = date_create($prosescetak['tgl_selesai']); echo date_format($date, 'Y-m-d H:i') ?></p>
                  <p class="card-text">Jumlah: <?= $prosescetak['jumlah'] ?></p>
                  <p class="card-text">Total Biaya: <?= $prosescetak['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Install</h4></div>
            <?php foreach ($data['prosesinstall'] as $prosesinstall) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $prosesinstall['nama']?><span class="badge badge-primary float-right">Diproses</span></h5>
                  <p class="card-text">Selesai : <?php $date = date_create($prosesinstall['tgl_selesai']); echo date_format($date, 'Y-m-d H:i') ?></p>
                  <p class="card-text">Total Biaya: <?= $prosesinstall['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
      </div>


      <div class="tab-pane fade" id="selesai" role="tabpanel" aria-labelledby="contact-tab">
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Rental</h4></div>
            <?php foreach ($data['selesairental'] as $selesairental) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $selesairental['nama']." ". $selesairental['detail']?><span class="badge badge-success float-right">Selesai</span></h5>
                  <p class="card-text">Jumlah: <?= $selesairental['jumlah'] ?></p>
                  <p class="card-text">Total Biaya: <?= $selesairental['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Desain</h4></div>
            <?php foreach ($data['selesaidesain'] as $selesaidesain) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $selesaidesain['nama']?><span class="badge badge-success float-right">Selesai</span></h5>
                  <p class="card-text">Total Biaya: <?= $selesaidesain['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Cetak</h4></div>
            <?php foreach ($data['selesaicetak'] as $selesaicetak) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $selesaicetak['nama']?><span class="badge badge-success float-right">Selesai</span></h5>
                  <p class="card-text">Jumlah: <?= $selesaicetak['jumlah'] ?></p>
                  <p class="card-text">Total Biaya: <?= $selesaicetak['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Install</h4></div>
            <?php foreach ($data['selesaiinstall'] as $selesaiinstall) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $selesaiinstall['nama']?><span class="badge badge-success float-right">Selesai</span></h5>
                  <p class="card-text">Total Biaya: <?= $selesaiinstall['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="tab-pane fade" id="batal" role="tabpanel" aria-labelledby="contact-tab">
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Rental</h4></div>
            <?php foreach ($data['batalrental'] as $batalrental) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $batalrental['nama']." ". $batalrental['detail']?><span class="badge badge-danger float-right">Dibatalkan</span></h5>
                  <p class="card-text">Jumlah: <?= $batalrental['jumlah'] ?></p>
                  <p class="card-text">Total Biaya: <?= $batalrental['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Desain</h4></div>
            <?php foreach ($data['bataldesain'] as $bataldesain) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $bataldesain['nama']?><span class="badge badge-danger float-right">Dibatalkan</span></h5>
                  <p class="card-text">Total Biaya: <?= $bataldesain['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Cetak</h4></div>
            <?php foreach ($data['batalcetak'] as $batalcetak) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $batalcetak['nama']?><span class="badge badge-danger float-right">Dibatalkan</span></h5>
                  <p class="card-text">Jumlah: <?= $batalcetak['jumlah'] ?></p>
                  <p class="card-text">Total Biaya: <?= $batalcetak['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
          <div class="card-header"><h4>Install</h4></div>
            <?php foreach ($data['batalinstall'] as $batalinstall) : ?>
              <div class="card mt-2 mb-2 ml-2 mr-2">
                <div class="card-body">
                  <h5 class="card-title "><?= $batalinstall['nama']?><span class="badge badge-danger float-right">Dibatalkan</span></h5>
                  <p class="card-text">Total Biaya: <?= $batalinstall['harga'] ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
      </div>
    
</div>