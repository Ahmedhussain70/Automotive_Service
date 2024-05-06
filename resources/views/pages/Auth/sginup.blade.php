@include('../componantes/loading')
@include('../componantes/navbar')
<link rel="stylesheet" href="css/Auth.css">
<div class="container">
      <div class="row d-flex justify-content-center mt-5">
        <div class="col-lg-5 col-md-6 col-sm-12">
      <form action="{{url('sginup')}}" method="post" class="mb-5">
      @csrf
          <div class="login mt-5">
            <h2 class="mb-3 mt-3">Sign Up</h2>
        <div class="mt-5">
            <input
            type="text"
            class="form-control log"
            placeholder="username"
            id="username"
            name="name"
            required
          />
            <input
            type="email"
            class="form-control log"
            placeholder="Email@example"
            id="email"
            name="email"
            required
          />
          <p id="log"></p>
          <input
          class="form-control log"
          type="password"
          id="password"
          name="password"
          placeholder="Password"
          required
          />
          <input
          class="form-control log"
          type="text"
          name="phone_number"
          placeholder="phone number"
          required
          />
          <input
          class="form-control log"
          type="text"
          name="address"
          placeholder="Address"
          required
          />
          <div class="mt-3 d-flex justify-content-center allign-items-center">
              <button class="mt-3" type="submit">
                Sign Up
                </button>
              </div>
        </div>
        </div>
      </div>
    </div>
      </form>