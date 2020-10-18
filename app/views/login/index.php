
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
                    <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                  </div>
                  <form class="user" action="<?= LURL ?>/login/masuk" method="post">
                    
                    <div class="form-group">
                      <input type="email" name=email class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>

                    <div class="form-group">
                      <input type="password" name=password class="form-control form-control-user" id="password" placeholder="Password">
                    </div>
                    <button type="submit" name="masuk" class="btn btn-primary btn-user btn-block">Login</button>
                   
                  </form>
                   <hr>
                    <div class="text-center">
                      <a class="small" href="#">Lupa Password?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="<?= LURL ?>/registrasi">Belum punya akun? Daftar!</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>