@include('../componantes/loading')
@include('../componantes/navbar')
<link rel="stylesheet" href="css/Auth.css">
<div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-5 col-md-6 col-sm-12 mb-5">
            <form action="" method="post">
                <div class="login">
                  <h2 class=" mb-3 mt-3">Sign In</h2>
                  <div class="mt-5">
                  <input
                  type="email"
                  class="form-control log"
                  placeholder="Enter email@example"
                  id="email"
                  name="email"
                  required
                />
                <p id="log"></p>
              </div>
                <input
                  class="form-control log"
                  type="password"
                  id="password"
                  name="password"
                  placeholder="Password"
                  required
                />
              <div class="mt-4 d-flex justify-content-center allign-items-center btn-login">
                <!-- <button onclick="document.location='index.html'" type="submit" id="submit"> -->
                  <button type="submit" id="submit">
                  Login
                </button>
              </div>
              <hr class="hrr mt-0">
              <div class="d-flex justify-content-center allign-items-center">
                <button onclick="document.location='sginup'" type="submit" id="submit">
                  Register
                </button>
            </form>
          </div>
        </div>
      </div>
    </div>