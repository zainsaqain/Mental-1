<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Now</title>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <style>

@import url("{{asset('assets/img/bg/login-bg.jpg')}}");

        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Quicksand", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: black;
            padding: 40px 20px;
        }

        /* Snow */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        main {
            display: grid;
            grid-template-columns: 45% 55%;
            place-items: center;
            background: #f6f6f6;
            width: min(700px, 95%);
            border-radius: 20px;
        }

        /* Left Side */
        .left-side {
            height: 100%;
            width: 100%;
            background-image: url({{ asset('assets/img/bg/login-bg.jpg') }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            pointer-events: none;
            border-radius: 20px 0 0 20px;
        }

        /* Right Side - Centering Content */
        .right-side {
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
        }

        /* Form Container Centering */
        form {
            width: 100%;
            max-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Logo Container */
        .logo-container {
            display: flex;
            justify-content: center;
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        /* Logo Image */
        .logo {
            color: #ffffff;
            font-weight: bold;
            font-size: 1.25rem;
            padding: 1rem;
            text-decoration: none;
        }
        
        .logo img {
            width: 8rem; /* Adjust as needed for responsiveness */
            max-width: 100%;
            height: auto;
        }

        /* Button Group */
        .btn-group {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            gap: 5px;
            margin-bottom: 32px;
        }

        .btn-group .btn {
            display: flex;
            align-items: center;
            column-gap: 4px;
            width: max-content;
            font-size: 0.8rem;
            font-weight: 500;
            padding: 8px 6px;
            border: 2px solid #6b7280;
            border-radius: 5px;
            background-color: #f6f6f6;
            transform: scale(1);
            cursor: pointer;
            transition: transform 0.1s ease, background-color 0.5s, color 0.5s;
        }

        .btn-group .btn:focus {
            transform: scale(0.97);
        }

        .btn-group .btn:hover {
            background-color: #000;
            color: #eee;
        }

        .btn img {
            width: 16px;
            height: 16px;
        }

        /* OR */
        .or {
            position: relative;
            text-align: center;
            margin-bottom: 24px;
            font-size: 1rem;
            font-weight: 600;
        }

        .or::before, .or::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: #000;
        }

        .or::before {
            left: 0;
        }

        .or::after {
            right: 0;
        }

        /* Inputs and Labels */
        input {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid #ccc;
            outline: 0;
            border-radius: 5px;
            background-color: transparent;
            margin: 4px 0 18px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.5s;
        }

        input:focus {
            border: 2px solid #000;
        }

        input:-webkit-autofill, input:-webkit-autofill:hover, input:-webkit-autofill:focus, input:-webkit-autofill:active {
            -webkit-background-clip: text;
            -webkit-text-fill-color: #000;
            transition: background-color 5000s ease-in-out 0s;
        }

        label {
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* Login Button */
        .login-btn {
            width: 100%;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 8px 24px;
            margin: 12px 0 24px;
            border: 2px solid #6b7280;
            border-radius: 5px;
            background-color: #f6f6f6;
            cursor: pointer;
            transition: all 0.5s;
        }

        .login-btn:hover {
            background-color: #000;
            color: #eee;
        }

        /* Links */
        .links {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        a {
            color: #000;
            font-size: 0.88rem;
            font-weight: 600;
            letter-spacing: -1px;
            transition: all 0.4s ease;
            text-decoration: none;
        }

        a:hover {
            color: #B48E40;
        }

        @media (max-width: 768px) {
            main {
                grid-template-columns: 100%;
            }

            .left-side {
                display: none;
            }

            .right-side {
                padding: 40px 20px;
            }
        }
    </style>
</head>
<body>
<div id="particles-js" class="snow"></div>

<main>
    <div class="left-side"></div>
    <div class="right-side">
        <form method="post" action="{{ route('login') }}">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="logo-container">
                <a href="/" class="logo">
                    <img src="{{ asset('assets/images/21477.jpg') }}" alt="Logo">
                </a>
            </div>

            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" name="email" required />

            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name="password" required />

            <button type="submit" class="login-btn">Sign in</button>
            <div class="links">
                <a href="#">Forgot password?</a>
                <a href="/register">Do not have an account?</a>
            </div>
        </form>
    </div>
</main>

<script>
    particlesJS("particles-js", {
        particles: {
            number: {
                value: 310,
                density: { enable: true, value_area: 800 },
            },
            color: { value: "#fff" },
            shape: { type: "circle", polygon: { nb_sides: 5 } },
            opacity: { value: 1 },
            size: { value: 3, random: true },
            line_linked: { enable: false },
            move: { enable: true, speed: 2, direction: "bottom", out_mode: "out" },
        },
        retina_detect: true,
    });
</script>
</body>
</html>
