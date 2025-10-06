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
            background-color: #1a001f;
            color: #fff;
            font-family: 'Inter', sans-serif; 
        }
        .card {
            background-color: #2b0033; 
            border: none;
        }
        h3 {
            color: #fff;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .form-label {
            color: #ddd;
            font-weight: 500;
        }
        .form-control {
            background-color: #1a001f;
            border: 1px solid #4b004b;
            color: #fff;
        }
        .form-control:focus {
            background-color: #1a001f;
            color: #fff;
            border-color: #800080;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #510151; 
            border: none;
            transition: background-color 0.3s ease;
            font-weight: 500;
        }
        .btn-primary:hover {
            background-color: #410741; 
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
