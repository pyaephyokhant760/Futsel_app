<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mt-5">
          <h1>Futsel Login Page</h1>
        </div>
      </div>
      <div class="offset-4 col-4">
        <form action="{{ route('login.post')}}" method="post">
          @csrf
          <div class="mb-3 mt-5">
            <label for="gmail">Gmail</label>
            <input type="gmail" class="form-control" name="email" id="gmail" placeholder="Enter your Gmail" required>
          </div>
          <div class="mb-2 mt-5">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
          </div>
          <button type="submit" class="btn btn-primary mt-5">Login</button>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
  </body>
</html>