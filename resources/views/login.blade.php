<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="login-form-container">  
        <form action="">
          <h3>login</h3>
          <label for="email">Email Address</label>
          <input type="email"  class="box" placeholder="enter your email">
          <label for="password">Password</label>
          <input type="password"  class="box" placeholder="enter your password">
          <input type="submit"  value="login now" class="btn">
        </form>
      </div>
</body>
</html>