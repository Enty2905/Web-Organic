<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon -->

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/product.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
</head>

<body>
   <!-- Header -->
   <header class="header">
        <div class="header__inner">
            <!-- Header top -->
            <div class="header__top">
                <div class="container">
                    <div class="header__top-inner">
                        <!-- Logo -->
                        <img src="../assets/img/logo.png" alt="" class="logo">
                        <!-- Navbar -->
                        <nav class="navbar">
                            <ul class="navbar__list">
                                <li class="navbar__item">
                                    <a href="../" class="navbar__link">Home</a>
                                </li>
                                <li class="navbar__item">
                                    <a href="./about.php" class="navbar__link">About</a>
                                </li>
                                <li class="navbar__item">
                                    <a href="./product.php" class="navbar__link">Product</a>
                                </li>
                                <li class="navbar__item">
                                    <a href="../cart.php" class="navbar__link">
                                        <i class="fa-solid fa-cart-shopping navbar__link-icon"></i>
                                        <span class="navbar__link-text">
                                            Cart
                                        </span>
                                    </a>
                                </li>
                                <li class="navbar__item">
                                    <a href="../contact.php" class="navbar__link navbar__link--special btn">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- Main -->
    <main class="main">
        <!-- Contact Form -->
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-sm-12">
                        <div class="inner-contact">
                            <div class="contact__info">
                                <div class="contact__top">
                                    <p class="contact__desc section-desc-heading">
                                        Would like to talk?
                                    </p>
                                    <h3 class="contact__title section-title">
                                        Contact Details
                                    </h3>
                                </div>
                                <p class="contact__desc-main">
                                    If you have a story to share or a question that has not been answered on our website, please get in touch with us via contact details listed below or fill in the form on the right.
                                </p>
                                <ul class="contact__list">
                                    <li class="contact__item">
                                        <div class="contact__icon-wrap">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <p class="contact__text">
                                            <span>Email</span> : <a class="contact__link" href="mailto:contact@tnna.vn">contact@tnna.vn</a>
                                        </p>
                                    </li>
                                    <li class="contact__item">
                                        <div class="contact__icon-wrap">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <p class="contact__text">
                                            <span>Email</span> : <a class="contact__link" href="mailto:contact@tnna.vn">contact@tnna.vn</a>
                                        </p>
                                    </li>
                                    <li class="contact__item">
                                        <div class="contact__icon-wrap">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <p class="contact__text">
                                            <span>Email</span> : <a class="contact__link" href="mailto:contact@tnna.vn">contact@tnna.vn</a>
                                        </p>
                                    </li>
                                </ul>
                                <div class="contact__social">
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://www.tiktok.com/@ndt02092005?lang=vi-VN"><i class="fa-brands fa-tiktok"></i></i></a>
                                    <a href="https://www.instagram.com/entyyy_29/"><i class="fa-brands fa-instagram"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-sm-12">
                        <div class="contact-form">
                            <div class="contact__top">
                                <p class="contact__desc section-desc-heading">
                                    Would like to talk?
                                </p>
                                <h3 class="contact__title section-title">
                                    Contact Details
                                </h3>
                            </div>
                            <form action="" method="post" autocomplete="on">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="content" class="form-control" id="content" placeholder="Nội dung" rows="8" maxlength="600" required></textarea>
                                </div>
                                <div class="form-group" style="text-align: center;">
                                    <button type="submit" class="contact__btn btn btn-2">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <iframe class="contact__map" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d11144.790398555191!2d108.24555237925955!3d15.994775983622931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d15.9909237!2d108.2441499!5e0!3m2!1sen!2s!4v1730477141680!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    <!-- End Main -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="row">
                    <div class="col-3">
                        <div class="footer__site-map">
                            <h3 class="footer__title section-title">
                                Site Map
                            </h3>
                            <ul class="footer__list">
                                <li class="footer__item">
                                    <a href="" class="footer__link">Home</a>
                                </li>
                                <li class="footer__item">
                                    <a href="" class="footer__link">About</a>
                                </li>
                                <li class="footer__item">
                                    <a href="" class="footer__link">Product</a>
                                </li>
                                <li class="footer__item">
                                    <a href="" class="footer__link">Food</a>
                                </li>
                                <li class="footer__item">
                                    <a href="" class="footer__link">Cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-5">
                        <figure class="footer__logo-wrap">
                            <img src="../assets/img/footer-logo.png" alt="" class="footer__logo">
                        </figure>
                    </div>
                    <div class="col-4">
                        <div class="footer__form">
                            <h3 class="footer__title section-title">
                                Contact us here
                            </h3>
                            <form action="" class="footer__form">
                                <div class="footer__form-group form-group">
                                    <label for="email" class="footer__form-label">Email</label>
                                    <input type="email" id="email" class="form-control footer__form-input"
                                        placeholder="Enter your email" required>
                                </div>
                                <div class="footer__form-group form-group">
                                    <label for="mess" class="footer__form-label">Message</label>
                                    <textarea name="mess" id="mess" class="form-control footer__form-mess"
                                        placeholder="Enter your message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-2">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="../assets/js/app.js"></script>
</body>

</html>