<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eagle I Group | Security & Cleaner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Eagle I Security, Eagle I Cleaner, security services, cleaning services, CCTV installation, 
    residential security, commercial cleaning, surveillance, janitorial, home security, office cleaning, professional cleaners">
    <meta name="description" content="Eagle I Security and Eagle I Cleaner provide top-tier security and professional cleaning services. 
    Your trusted partner in safety and cleanliness for homes and businesses.">
    <meta name="author" content="Eagle I Group">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0B3D91">
    <link rel="icon" type="image/avif" href="../img/favicon.avif">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon.avif">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.avif">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon.avif">
    <link rel="manifest" href="../site.webmanifest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.eagleigroup.com/">
    <meta property="og:title" content="Eagle I Security & Eagle I Cleaner">
    <meta property="og:description" content="Top-tier security and cleaning services for homes and businesses.">
    <meta property="og:image" content="./img/favicon.avif">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.eagleigroup.com/">
    <meta name="twitter:title" content="Eagle I Security & Eagle I Cleaner">
    <meta name="twitter:description" content="Top-tier security and cleaning services for homes and businesses.">
    <meta name="twitter:image" content="../img/favicon.avif">
    <link href="../assets/css/bootstrap-min.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <title>Staff Scroll | Realtime Staff Events Timeline</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupAlert').hide();
        });
    </script>
    <?php include('processing-signin.php'); ?>
    <?php include('processing-signup.php'); ?>
</head>

<body>
    <div class="container-fluid">
        <div class="w-100 h-auto p-2">
            <?php include_once('sub-header.php'); ?>
        </div>
        <div class="wrapper">
            <div class="login-box">
                <h4>Forget password</h4>
                <hr>
                <form method="post" action="./processing-signin" id="login-form" name="login-form" enctype="multipart/form-data" autocomplete="off" novalidate>
                    <div class="form-box">
                        <label for="User password">Password</label>
                        <input form="login-form" type="password" name="txtPassword" class="form-control" required placeholder="Enter password" id="loginForm">
                    </div>
                    <div class="form-box">
                        <input form="login-form" type="submit" id="btnLogin" name="btnLogin" value="Reset" class="btn btn-primary">
                    </div>
                    <div class="form-box">
                        <span style="float: left;"><input type="checkbox" name="txtRemember"> <label for="Remember me">Remember me</label></span>
                        <span style="float: right; color:#000;"><a style="color:#000;" href="./forget-password">Forget password?</a></span>
                        <br><br>
                        <span><a style="color:#000;" href="./signup">Don't have an account?</a></span>
                    </div>
                </form>
            </div>

            <div style="margin-top: 200px;"></div>

            <script src="../assets/js/bootstrap-min.js" type="text/javascript" crossorigin="anonymous"></script>
            <script src="../assets/js/popper.min.js" type="text/javascript" crossorigin="anonymous"></script>
            <link href="../assets/css/bootstrap.bundle.min.js" rel="stylesheet" type="text/javascript" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>