<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../stylings/Login.css" />
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
    <main class="container bg-body-tertiary p-5 login_cont">
      <!--Image Container-->
      <div class="row">
        <div class="col d-none d-lg-block my-auto">
          <img
            class="img-fluid"
            src="../assets/login2.svg"
            alt="Login Pic"
            lazy
          />
        </div>
        <!--Form Container-->
        <div class="col mx-auto">
          <h1 class="form-label text-center">Login</h1>
          <form class="" onsubmit="signUp()">
            <div class="form-floating">
              <input
                type="email"
                class="form-control mb-3"
                id="email-inp"
                value=""
                name="email"
                placeholder="Enter Email here"
              />
              <label for="email-inp">Email</label>
            </div>
            <div class="form-floating">
              <input
                type="password"
                class="form-control mb-3"
                id="pass-inp"
                value=""
                name="password"
                placeholder="Enter Password here"
              />
              <label for="pass-inp">Password</label>
            </div>
            <button type="submit" class="btn btn-success w-100 mb-3">
              Submit
            </button>
          </form>
          <small>Don't have an account? <a href="signup">Sign Up</a></small
          >
        </div>
        <!--Form Container-->
      </div>
    </main>
    <script src="../index.js"></script>
  </body>
</html>
