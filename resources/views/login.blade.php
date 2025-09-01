<!DOCTYPE html>
<html lang="en">
	<head><base href="">
		<title>Sistem Rumah Sakit</title>
		<meta charset="utf-8" />
		<meta name="description" content="Sistem Rumah Sakit" />
		<meta name="keywords" content="Sistem Rumah Sakit" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Sistem Rumah Sakit" />
		<meta property="og:url" content="https://xx.com" />
		<meta property="og:site_name" content="Sistem Rumah Sakit" />
		<link rel="canonical" href="https://xx.com" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	</head>
    <body class="bg-dark">
        <div class="container-sm">
            <div class="p-15">
                <div class="d-flex justify-content-center">
                    <div class="card shadow p-10 w-50">
                        <form action="{{ route('login') }}" class="card-body" method="post">
                            @csrf
                            <div class="text-center mb-20">
                                <h1 class="mt-5">Selamat Datang Di Sistem Rumah Sakit 🙌🏻</h1>
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-label fw-bold">Username</label>
                                <input type="text" name="username" class="form-control form-control-lg" placeholder="Masukkan Username" required/>
                            </div>
                            <div class="form-group my-5">
                                <label for="password" class="form-label fw-bold">Kata Sandi</label>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Masukkan Kata Sandi" required/>
                            </div>
                            <button type="submit" class="btn btn-lg btn-dark text-white mt-10 w-100">Masuk</button>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-5">
                    <span class="text-muted">by NurrahmahJDj </span>
                </div>
            </div>
        </div>
    </body>
</html>