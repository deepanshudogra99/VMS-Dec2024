<x-starthtml></x-starthtml>
<x-header></x-header>
<div class="container-fluid p-4" style="background-color: #008080;">
  <div class="row">
    {{-- <div class="col-md-3">
      <a href="" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm text-white">Login</a>
    </div> --}}
  </div>
</div>
<!-- <div class="text-center mt-2">
  <h3>Register</h3>
</div> -->
<div>
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-danger text-white text-center p-3">
        <h5>Register New User</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row g-3">
            <!-- State Name -->
            <div class="col-md-3">
              <label for="stateName" class="form-label"><b>State Name</b></label>
              <select id="stateName" name="statecode" class="form-select" required>
                <option selected disabled>Select State</option>
                <!-- Add options dynamically -->
                @foreach ($states as $s)
          <option value="{{ $s->statecode }} ">{{ $s->statename }} </option>
        @endforeach

              </select>
            </div>

            <!-- District Name -->
            <div class=" col-md-3">
              <label for="districtName" class="form-label"><b>District Name</b></label>
              <select id="districtname" name="districtcode" class="form-select" required>
                <option selected disabled>Select District</option>
                <!-- Add options dynamically -->
              </select>
            </div>

            <!-- Office Name -->
            <div class="col-md-3">
              <label for="officeName" class="form-label"><b>Office Name</b></label>
              <select id="officename" name="officecode" class="form-select" required>
                <option selected disabled>Select Office</option>
                <!-- Add options dynamically -->
              </select>
            </div>

            <!-- User Type -->
            <div class="col-md-3">
              <label for="userType" class="form-label"><b>User Type</b></label>
              <select id="userType" class="form-select" required>
                <option selected disabled>Select User Type</option>
                <!-- Add options dynamically -->
              </select>
            </div>
          </div>

          <div class="row g-3 mt-3">
            <!-- Name -->
            <div class="col-md-3">
              <label for="name" class="form-label"><b>Name</b></label>
              <input type="text" id="name" class="form-control" placeholder="Name" required>
            </div>

            <!-- Email -->
            <div class="col-md-3">
              <label for="email" class="form-label"><b>Email address</b></label>
              <input type="email" id="email" class="form-control" placeholder="Email" required>
            </div>

            <!-- Password -->
            <div class="col-md-3">
              <label for="password" class="form-label"><b>Password</b></label>
              <input type="password" id="password" class="form-control" placeholder="Password" required>
            </div>

            <!-- Confirm Password -->
            <div class="col-md-3">
              <label for="confirmPassword" class="form-label"><b>Confirm Password</b></label>
              <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password" required>
            </div>
          </div>

          <div class="text-center mt-4">
            <button type="submit" class="btn btn-lg btn-danger">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<x-footer></x-footer>

<x-endhtml></x-endhtml>