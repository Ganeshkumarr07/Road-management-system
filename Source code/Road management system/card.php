<html>
<head>
    <title>Road management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: rgb(92, 92, 92);
            background-image: linear-gradient(to right, #333333 0%, #333333 20%, #666666 50%, #333333 80%, #333333 100%);
            background-size: 800% 100%;
            animation: gradient 10s ease infinite;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 0%;
            }
            100% {
                background-position: 0% 0%;
            }
        }
        .card {
            width: 50rem;
            margin: auto;
            margin-top: 10%;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
        }
        .card-title {
            text-align: center;
        }
        .btn-primary-spacing {
            margin-left: 0px;
        }
        .btn-success-spacing {
            margin-left: 200px;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="road.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">Road management system</h2>
            <a href="signup.html"  class="btn btn-primary btn-success-spacing">Signup</a>
            <a href="ilogin.html" class="btn btn-success btn-warning">Road Inspector Login</a>
            <a href="login.html" class="btn btn-success btn-primary-spacing">Login</a>
        </div>
    </div>
</body>
</html>
