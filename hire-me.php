<?php
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hire me</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/atom.ico">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="index.html">Thaian Ramalho</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" href="hire-me.html">Hire me</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>Hire Me</h2>
                </div>
                <form action="./php/enviar_email.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="subject">Subject</label><select class="form-select" id="subject" name="subject">
                            <optgroup label="Select the subject">
                                <option value="12" selected="">Website creation</option>
                                <option value="13">Software creation</option>
                                <option value="14">Another service</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label><input class="form-control" type="text" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label><textarea class="form-control" id="message" name="message"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6 col-xl-12 button"><button class="btn btn-primary d-block w-100" type="submit">Send</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="projects.html">Projects</a><a href="contact.html">Contact me</a><a href="hire-me.html">Hire me</a></div>
            <div class="social-icons"><a href="https://www.facebook.com/thaian.ramalho/"><i class="icon ion-social-facebook"></i></a><a href="https://www.instagram.com/thaianramalho/"><i class="icon ion-social-instagram-outline"></i></a><a href="https://github.com/thaianramalho"><i class="icon ion-social-github"></i></a></div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>