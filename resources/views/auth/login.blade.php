<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #ffffff;
            font-family: 'Karla', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        .login-section {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2rem;
        }

        .form-title {
            text-align: center;
            font-size: 3rem;
            font-family: "Caveat", cursive;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

        .form-label {
            font-size: 1.125rem;
        }

        .form-input {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e0;
            border-radius: 0.375rem;
            width: 100%;
            padding: 0.5rem 0.75rem;
            color: #4a5568;
            margin-top: 0.25rem;
            outline: none;
            transition: box-shadow 0.2s ease-in-out;
        }

        .form-input:focus {
            box-shadow: 0 0 10px rgba(180, 142, 64, 0.5);
        }

        .submit-button {
            background-color: #000000;
            color: #ffffff;
            font-weight: bold;
            font-size: 1.125rem;
            padding: 0.5rem;
            margin-top: 1rem;
            transition: background-color 0.2s ease-in-out;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .submit-button:hover {
            background-color: #B48E40;
        }

        .login-link-container {
            text-align: center;
            padding-top: 2rem;
        }

        .login-link {
            text-decoration: underline;
            font-weight: 600;
            color: #B48E40;
        }

        .text-danger {
            color: red;
            padding: 5px;
        }

        .image-section {
            width: 50%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

        .background-image {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 768px) {
            .login-section, .image-section {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Login Section -->
        <div class="login-section">
            <p class="form-title">Login</p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" placeholder="your@email.com" class="form-input" required />
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" class="form-input" required />
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <input type="submit" value="Login" class="submit-button" />
            </form>

            <div class="login-link-container">
                <p>Don't have an account? <a href="/register" class="login-link">Register here.</a></p>
            </div>
        </div>

        <!-- Image Section -->
        <div class="image-section">
            <img class="background-image" src="{{ asset('assets/images/image-45.jpg') }}" alt="Background" />
        </div>
    </div>

    <!-- Load jQuery and Bootstrap in correct order to avoid issues -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
