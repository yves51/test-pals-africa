<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>TEST</title>
</head>
<body>
    <div class="container">
        <form action="{{route('register')}}" method="post">
          @csrf
            <div class="card">
                <h2 class="heading">Incription</h2>
                <div class="form">
                    <div class="input-group">
                        <label for="username" class="input-label">Nom</label>
                        <input type="text" name="name" id="name" required class="input-box">
                    </div>
                    <div class="input-group">
                        <label for="email" class="input-label">Email</label>
                      <input type="email" name="email" id="email" required class="input-box">
                    </div>
                    <div class="input-group">
                      <label for="password" class="input-label">Mot de passe</label>
                      <input type="password" required name="password" id="password" class="input-box">
                  </div>
                  <div class="input-group">
                      <label for="password" class="input-label">Confirmer mot de passe</label>
                      <input type="password" required name="password_confirmation" id="password" class="input-box">
                  </div>
                </div>
                <p class="text-center">
                    <button class="btn" type="submit">Connexion</button>
                </p>
            </div>
        </form>
    </div>
</body>
</html>