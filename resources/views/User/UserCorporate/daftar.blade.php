<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/MasukDaftar.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>GOPress | {{ $title }}</title>

</head>

<body>
    <div>

        <nav class="navbar navbar-expand-sm fixed-top"  style="background-color: var(--transparantRina);">
            <div class="container-fluid">
              <a class="navbar-brand " href="/">
                <img src="/image/GoPress.png" alt="" width="100" height="60">
                <small>Home</small>
                </a>
            </div>
        </nav>

        <div class="slider-home container-fluid content mb-5" style="padding-right:0px ; padding-left:0px;">
            <img class="imageSlider img-fluid" src="/image/Banner-Login.png" alt="Order GOPress" style="width: 100%">
        </div>
    

    <div class="row justify-content-center mb-5 mt-5">
        <div class="col-sm-5 shadow p-4" style="border-radius: 20px">
            <main class="form-registrasi">
                <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
                <form action="/daftar" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top 
                            @error('name') is-invalid @enderror"
                            id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name </label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control
                        @error('username') is-invalid @enderror"
                        id="username"placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username </label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control
                        @error('email') is-invalid @enderror" 
                        id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom
                        @error('password') is-invalid @enderror"
                        id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Sudah terdaftar ? <a href="/masuk">Login</a></small>
            </main>

        </div>
    </div>

</div>


</body>

</html>
