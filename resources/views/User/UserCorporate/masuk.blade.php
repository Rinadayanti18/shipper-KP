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
    

    <div class="row justify-content-center">
        <div class="col-sm-3 shadow p-4" style="border-radius: 20px">

            @if (session()->has('succes'))
                <div class="alert alert-succes alert-dismissible fade show" role="alert">
                    {{ session('succes') }}
                    <button type="button" class="btn-close" data-bs-dismis="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- Ini untuk semisal user gagal login , maka akan memberikan pesan
                yang terdapat dalam loginError --}}
            @if (session()->has('loginError'))
                <div class="alert alert-succes alert-danger fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismis="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Log in</h1>
                <form action="/masuk" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email"
                            class="form-control 
                        @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" autofocus required
                            value="{{ old('email') }}">
                        <label for="email">Email/username </label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    {{-- <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div> --}}
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                </form>
                <small class="d-block text-center mt-3">Belum memiliki akun ? <a href="/daftar">Daftar
                        disini</a></small>
            </main>

        </div>
    </div>

</div>


</body>

</html>
