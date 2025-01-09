<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:rgb(19,23,24);
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 100%;
      max-width: 400px;
      background:hsla(240, 37%, 89%, 0.075);
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px  hsl(34, 30.40%, 95.50%)
    }

    .form-box {
      width: 90%;
      max-width: 450px;
      min-width: 300px;
      background: white;
      padding: 55px;
      text-align: center;
      border-radius: 10px;
      box-shadow: -2px 2px 15px rgba(0, 0, 0, 0.5);
    }

    .form-box h1 {
      font-size: 25px;
      color: green;
    }

    .form-box h1:hover {
      color: rgb(75, 176, 212);
      transition: 1s;
    }

    .form-box .underline {
      width: 100px;
      height: 3px;
      background-color: green;
      margin: 1px auto 40px auto;
      border-radius: 50px;
      transition: transform 0.5s;
    }

    .form-box .underline:hover {
      background-color: red;
      transition: 0.1s;
    }

    .input-field {
      background: #eaeaea;
      margin: 15px 0;
      border-radius: 10px;
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    .input-field input {
      width: 100%;
      background: transparent;
      border: 0;
      outline: 0;
      padding: 10px 15px;
    }

    form p {
      text-align: left;
      font-size: 15px;
      margin: 10px 0;
    }

    form p a {
      color: green;
    }

    .btn-field {
      width: 100%;
      display: flex;
      justify-content: center;
      margin-top: 5px;
    }

    .btn-field button {
      width: 45%;
      background: green;
      color: white;
      height: 40px;
      border-radius: 20px;
      border: 0;
      outline: 0;
      cursor: pointer;
    }

    p {
      display: flex;
      justify-content: center;
    }

    p span {
      font-size: 12px;
    }

    span {
      height: 2rem;
      padding: 0.125vh;
      font-size: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-box">
      <h1 class="title">Sign Up</h1>
      <div class="underline"></div>
      <form action="register.php" method="post" onsubmit="return form_validate()">
        <div class="input-field" id="fname-field">
          <input type="text" name="fname" id="fname" placeholder="First name" required />
          <span id="fname_msg"></span>
        </div>
        <!-- <div class="input-field" id="mname-field">
          <input type="text" name="mname" id="mname" placeholder="Middle name" />
          <span id="mname_msg"></span>
        </div> -->
        <div class="input-field" id="lname-field">
          <input type="text" name="lname" id="lname" placeholder="Last name" required />
          <span id="lname_msg"></span>
        </div>
        <div class="input-field" id="email-field">
          <input type="email" name="email" id="email" placeholder="Email" required />
          <span id="email_msg"></span>
        </div>
        <div class="input-field" id="phone-field">
          <input type="text" name="phone" id="phone" placeholder="Phone" required />
          <span id="phone_msg"></span>
        </div>
        <div class="input-field" id="dob-field">
          <input type="date" id="date" name="dob" placeholder="Date of Birth" />
        </div>
        <div class="input-field" id="password-field">
          <input type="password" name="password" id="password" placeholder="Password" required />
          <span id="password_msg"></span>
        </div>
        <div class="input-field" id="cpassword-field">
          <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required />
          <span id="cpassword_msg"></span>
        </div>
        <p>
          <span>Already have an account? <a href="signin.php">Click Here</a></span>
        </p>
        <div class="btn-field">
          <button type="submit" id="signUpBtn" name="signUp">
            <span>Sign Up</span>
          </button>
        </div>
      </form>
    </div>
  </div>
  <script src="./signUpscript.js"></script>
</body>
</html>
