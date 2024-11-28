<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar | Web Galeri Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background-color: #0066cc; /* Biru sebagai latar belakang */
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff; /* Putih untuk card */
        }
        .btn-primary {
            padding: 10px 30px;
            border-radius: 25px;
            font-weight: 500;
            background-color: #ffcc00; /* Kuning untuk tombol */
            border-color: #ffcc00;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #e6b800;
            border-color: #e6b800;
            transform: translateY(-2px);
        }
        .form-control {
            border-radius: 8px;
            padding: 10px 15px;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 102, 204, 0.25);
            border-color: #0066cc;
        }
        .input-group-text {
            background-color: #f8f9fa;
            border-right: none;
        }
        .form-control {
            border-left: none;
        }
        .input-group-text i {
            color: #0066cc;
        }
        .alert {
            border-radius: 10px;
        }
        .form-label {
            font-weight: 500;
            color: #495057;
        }
        .card-body {
            padding: 3rem !important;
        }
        @media (max-width: 768px) {
            .card-body {
                padding: 2rem !important;
            }
        }
        .text-primary {
            color: #ffcc00 !important; /* Kuning pada teks */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="w-50 d-block mx-auto" style="min-width: 300px; max-width: 450px;">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4 fw-bold text-primary">Daftar Akun</h2>
                    <p class="text-center text-muted mb-4">Buat akun baru Anda</p>

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form action="{{ url('/register') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" value="{{ old('name') }}" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Alamat Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi kata sandi" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary d-block w-100">
                            <i class="fas fa-user-plus me-2"></i>Daftar
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <p class="mb-0">Sudah punya akun? 
                            <a href="{{ url('/login') }}" class="text-primary fw-bold">Masuk disini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
