<?php require_once('../config.php'); ?>
<!DOCTYPE html>
<html lang="en" style="height: auto;">
    <?php require_once('inc/header.php'); ?>

    <head>
        <style>
            body {
    background: linear-gradient(45deg, #ff6b6b, #ff9e2c, #f0a500);
    background-size: 400% 400%;
    animation: gradientAnimation 8s ease infinite;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Roboto', sans-serif;
    overflow: hidden;
    margin: 0;
}

@keyframes gradientAnimation {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.login-box {
    background: rgba(255, 255, 255, 0.15);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(15px);
    width: 350px;
    text-align: center;
    animation: float 3s ease-in-out infinite;
}

h2 {
    font-size: 2.8rem;
    color: #fff;
    text-transform: uppercase;
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8), 0 0 10px rgba(255, 255, 255, 0.6), 0 0 15px rgba(255, 255, 255, 0.4);
    margin-bottom: 20px;
    letter-spacing: 2px;
    font-family: 'Poppins', sans-serif; /* Change font to Poppins */
    animation: shine 3s infinite; /* Add shining animation */
}

.login-box-msg {
    font-family: 'Playfair Display', serif; /* Elegant and classy font */
    font-size: 1.8rem; /* Slightly larger for prominence */
    color: #000; /* Solid black for bold appearance */
    font-weight: 600; /* Semi-bold for elegance */
    margin-bottom: 25px;
    letter-spacing: 0.5px; /* Subtle letter-spacing for refinement */
    text-transform: none; /* Keeps natural text styling */
    text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Very light shadow for depth */
}


.input-group {
    margin-bottom: 20px;
    animation: fadeInUp 1.2s ease-out;
}

.form-control {
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    border: 2px solid #ff9e2c;
    border-radius: 10px;
    padding: 15px;
    font-size: 1.2rem;
    transition: all 0.3s ease;
}

.form-control:focus {
    background-color: #fff;
    color: #222;
    border-color: #ff6b6b;
    box-shadow: 0 0 15px rgba(255, 107, 107, 0.7);
}

.input-group-text {
    background-color: #ff6b6b;
    color: #fff;
    border: none;
    font-size: 1.5rem;
    padding: 0 15px;
    border-radius: 0 10px 10px 0;
    transition: all 0.3s ease;
}

.input-group-text:hover {
    background-color: #f0a500;
    transform: scale(1.1);
}

.btn-primary {
    background-color: #ff9e2c;
    color: #fff;
    border-radius: 25px;
    padding: 15px 20px;
    width: 100%;
    font-size: 1.4rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

.btn-primary:hover {
    background-color: #f13c3c;
    transform: scale(1.05);
    box-shadow: 0 15px 30px rgba(241, 47, 47, 0.6);
}

.btn-primary:active {
    transform: scale(1);
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

#smiley {
    position: absolute;
    font-size: 40px;
    color: #ff9e2c;
    pointer-events: none;
    visibility: hidden;
    opacity: 0;
    transition: transform 0.2s ease, opacity 0.4s ease;
}

#smiley.visible {
    visibility: visible;
    opacity: 1;
    transform: scale(1.8);
}

@media (max-width: 768px) {
    .login-box {
        width: 90%;
        padding: 20px;
    }

    h2 {
        font-size: 2rem;
    }
    @keyframes shine {
    0% {
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.8), 0 0 10px rgba(255, 255, 255, 0.6), 0 0 15px rgba(255, 255, 255, 0.4);
    }
    50% {
        text-shadow: 0 0 20px rgba(255, 255, 255, 1), 0 0 30px rgba(255, 255, 255, 0.8), 0 0 40px rgba(255, 255, 255, 0.6);
    }
    100% {
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.8), 0 0 10px rgba(255, 255, 255, 0.6), 0 0 15px rgba(255, 255, 255, 0.4);
    }
}
    .form-control, .btn-primary {
        font-size: 1.1rem;
    }
}

</style>
</head>

    <body class="hold-transition login-page bg-navy">
        <script>
            start_loader();
        </script>

        <h2 class="text-center mb-4 pb-3"><?php echo $_settings->info('name'); ?></h2>
        
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-body">
                    <p class="login-box-msg text-dark">Sign in to start your session</p>

                    <form id="login-frm" action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Smiley face element -->
        <div id="smiley">💸</div>

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>

        <script>
            $(document).ready(function() {
                end_loader();
            });

            // Add mousemove event listener
            document.addEventListener('mousemove', function(event) {
                var smiley = document.getElementById('smiley');
                smiley.style.left = event.pageX + 'px';
                smiley.style.top = event.pageY + 'px';
                smiley.style.visibility = 'visible';

                // Animate the smiley face
                smiley.style.transform = 'scale(2)';
                setTimeout(function() {
                    smiley.style.transform = 'scale(1)';
                }, 100);
            });
        </script>
    </body>
</html>
