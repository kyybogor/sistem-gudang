<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        background: linear-gradient(135deg, #667eea, #764ba2); 
        color: #fff;
        font-family: 'Inter', sans-serif; 
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card {
        background: #1e1e2f;
        border: none;
        border-radius: 12px;
        padding: 30px;
        width: 100%;
        max-width: 400px;
        box-shadow: 0px 8px 20px rgba(0,0,0,0.5);
    }
    .form-control {
        background-color: #2a2a40; 
        border: 1px solid #444;
        color: #fff;
        border-radius: 8px;
    }
    .form-control:focus {
        background-color: #2a2a40;
        color: #fff;
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102,126,234,0.25);
    }
    .form-control::placeholder {
        color: #aaa;   
        opacity: 1;    
    }
    .btn-primary {
        background-color: #667eea;
        border: none;
        font-weight: 500;
        border-radius: 8px;
        transition: background-color 0.3s ease;
        width: 100%;
    }
    .btn-primary:hover {
        background-color: #5a6fd6;
    }
    h3 {
        text-align: center;
        margin-bottom: 20px;
        font-weight: 600;
        color: #fff;
    }
    </style>
</head>
<body>

    <div class="card">
        <h3>Verifikasi OTP</h3>

        <!-- Tampilkan error OTP -->
        @if ($errors->has('otp'))
            <div class="alert alert-danger">
                {{ $errors->first('otp') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.verify') }}">
            @csrf
            <input type="hidden" name="email" value="{{ request('email') }}">
            <input type="text" class="form-control mb-3" name="otp" placeholder="Masukkan OTP" required>
            <button type="submit" class="btn btn-primary">Verifikasi</button>
        </form>
    </div>

</body>
</html>
