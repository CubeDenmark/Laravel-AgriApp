<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="../stylings/SignUp.css" />
    <!-- Boostrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!--Main Div-->
    <main class="container-md my-auto bg-body-tertiary pb-3 pt-5">
      <div class="row row-cols-2">
        <!--Image Container-->
        <div class="col mt-auto d-none d-lg-block my-auto">
          <img
            class="img-fluid pt-3"
            src="../assets/signUp2.svg"
            id="signUpVect"
          />
        </div>
        <!--Image Container-->

        <!--Form Container-->
        <div class="col col-12 col-lg-6">
          <div class="row mt-sm-5">
            <h1 class="text-wrap">Account Details</h1>
            <small class="mb-2">Personal Information</small>
          </div>

          <!---Form here--->
          <form onsubmit="signUp()" class="form" id="form-true" action="{{ route('register-user')}}" method="post">
          @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('failed'))
          <div class="alert alert-danger">{{Session::get('failed')}}</div>
          @endif
          @csrf
            <div class="row row-cols-1 row-cols-md-2 name_row">
              <div class="col mb-2">
                <div class="form-floating">

                  <!---first name here--->
                  <input
                    type="text"
                    class="form-control"
                    id="fname"
                    value="{{old('fname')}}"
                    name="fname"
                    placeholder="Put First Name Here"

                  />
                  <span class="text-danger">@error('fname') {{$message}} @enderror</span>
                  <label for="fname">First Name</label>
                </div>
              </div>
              <div class="col mb-2">
                <div class="form-floating">

                  <!---Last name here--->
                  <input
                    type="text"
                    class="form-control"
                    id="lname"
                    value="{{old('lname')}}"
                    name="lname"
                    placeholder="Put Last Name Here"

                  />
                  <span class="text-danger">@error('lname') {{$message}} @enderror</span>
                  <label for="fname">Last Name</label>
                </div>
              </div>
            </div>
            <div class="row email_row">
              <div class="col mb-2">
                <div class="form-floating">

                <!---email here--->
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    value="{{old('email')}}"
                    name="email"
                    placeholder="Put Email Here"
                  />
                  <span class="text-danger">@error('email') {{$message}} @enderror</span>
                  <label for="email">Email</label>
                </div>
              </div>
            </div>
            <div class="row password_row">
              <div class="col mb-2">
                <div class="form-floating">

                  <!---Password here--->
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    value="{{old('pass')}}"
                    name="pass"
                    onchange=""
                    placeholder="Put Password Here"
                    onchange=""
                  />
                  <span class="text-danger">@error('pass') {{$message}} @enderror</span>
                  <label for="password">Password</label>
                </div>
              </div>
            </div>
            <div class="row conf_password_row">
              <div class="col mb-2" id="conf_password_row">
                <div class="form-floating">

                <!---Confirm password here--->
                  <input
                    type="password"
                    class="form-control"
                    id="conf-password"
                    value="{{old('conpass')}}"
                    name="conpass"
                    onchange="passCheck()"
                    placeholder="Confirm Password Here"
                  />
                  <span class="text-danger">@error('conpass') {{$message}} @enderror</span>

                  <div class="invalid-feedback">Password Do not match</div>
                  <label for="conf-password">Confirm Password</label>
                </div>
              </div>
            </div>
            <div class="row phone_number_row">
              <div class="col mb-2">
                <div class="form-floating">

                <!---Phone number here--->
                  <input
                    type="number"
                    class="form-control"
                    id="phone-number"
                    value="{{old('phonenum')}}"
                    name="phonenum"
                    placeholder="Put Phone Number Here"
                    onchange="phoneCheck()"
                  />
                  <span class="text-danger">@error('phonenum') {{$message}} @enderror</span>
                  <div class="invalid-feedback">Invalid Phone Number</div>
                  <label for="phone-number">Phone Number</label>
                </div>
              </div>
            </div>
            <div class="row address_row">
              <div class="col mb-2">
                <div class="form-floating">

                <!---Address here--->
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    value="{{old('address')}}"
                    name="address"
                    placeholder="Put Address Here"
                  />
                  <span class="text-danger">@error('address') {{$message}} @enderror</span>
                  <label for="address">Address</label>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="form-label">Select Account Type: </label>
              <div class="col mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="acc-type"
                    id="farmer-type"
                    onchange="radioChange('farmer')"

                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    Farmer
                  </label>
                </div>
              </div>
              <div class="col">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="acc-type"
                    id="consumer-type"
                    onchange="radioChange('consumer')"
         
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    Consumer
                  </label>
                </div>
              </div>
            </div>
            <div class="row file_row">
              <div class="col mb-3">
                <label
                  for="credentials"
                  class="form-label"
                  id="credentials-label"
                  >Upload File:
                </label>
                <input
                  type="file"
                  class="form-control"
                  id="credentials"
       
                />
              </div>
            </div>
            <div class="row pic_row">
              <div class="col mb-3">
                <label
                  for="credentials"
                  class="form-label"
                  id="credentials-label"
                  >Upload Profile Picture:
                </label>
                <input
                  type="file"
                  class="form-control"
                  id="pic-sign-up"
                  accept="image/png, image/jpeg"
     
                />
              </div>
            </div>
            <div class="row submit_row">
              <div class="col mb-2">
                <button
                  type="submit"
                  class="btn btn-success w-100 fs-5"
                  id="form-submit"
                >
                  Sign Up
                </button>
              </div>
            </div>
          </form>
          <!---Form end here--->
          <div class="row mb-3">
            <div class="col text-center">
              <small class="text-center"
                >By clicking Sign Up, you agree to our
                <a href="">Terms and Conditions</a></small
              >
            </div>
          </div>
          <small
            >Already have an account? <a href="login">Log In</a></small
          >
        </div>
        <!--Form Container-->
      </div>
    </main>
    <!--Main Div-->
    <script src="../signUp.js"></script>
  </body>
</html>
