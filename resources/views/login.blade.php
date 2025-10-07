<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
body {
    background: linear-gradient(135deg, #667eea, #764ba2); 
    color: #fff;
    font-family: 'Inter', sans-serif; 
}
.card {
    background: #1e1e2f;
    border: none;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
}
h3 {
    color: #fff;
    font-weight: 600;
    letter-spacing: 0.5px;
}
.form-label {
    color: #ccc;
    font-weight: 500;
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
.btn-primary {
    background-color: #667eea;
    border: none;
    font-weight: 500;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}
.btn-primary:hover {
    background-color: #5a6fd6;
}
#alert-message {
    transition: opacity 0.5s ease;
}
</style>

</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 350px;">
            <h3 class="text-center mb-4">Login</h3>

            @if(session('error'))
                <div class="alert alert-danger" id="alert-message">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="mb-3">
                    <label for="nm_user" class="form-label">Username</label>
                    <input type="text" class="form-control" id="nm_user" name="nm_user" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>

                <div class="d-flex justify-content-end mt-2">
    <a href="{{ route('password.request') }}" class="text-decoration-none text-light" style="font-size: 14px;">
        Lupa Password?
    </a>
</div>
            </form>
        </div>
    </div>

    <script>
        setTimeout(() => {
            let alert = document.getElementById('alert-message');
            if (alert) {
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500);
            }
        }, 3000);
    </script>
</body>
</html>
