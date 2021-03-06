
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="p-5">
                   <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Daftar Sekarang!</h1>
                  </div>
                  <form class="user" action="<?= LURL ?>/registrasi/daftar" method="post">
                    <div class="form-group">
                      <input type="text" name=nama class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                    </div>

                    <div class="form-group">
                      <input type="email" name=email class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                      <input type="password" name=password1 class="form-control form-control-user" id="password1">
                    </div>


                    <div class="form-group">
                      <input type="password" name=password2 class="form-control form-control-user" id="password2">
                    </div>


                    <button type="submit" name="daftar" class="btn btn-primary btn-user btn-block">Daftar</button>
                  </form>

                  <hr>

                    <div class="text-center">
                      <a class="small" href="<?= LURL ?>/login">Sudah punya akun? Login!</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>