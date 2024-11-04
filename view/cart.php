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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/product.css">
    <link rel="stylesheet" href="../assets/css/cart.css  ">
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
                                    <a href="./cart.php" class="navbar__link">
                                        <i class="fa-solid fa-cart-shopping navbar__link-icon"></i>
                                        <span class="navbar__link-text">
                                            Cart
                                        </span>
                                    </a>
                                </li>
                                <li class="navbar__item">
                                    <a href="./contact.php" class="navbar__link navbar__link--special btn">Contact</a>
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
        <!-- Cart -->
        <section class="cart">
            <div class="container">
                <table class="table cart__table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="cart__product">
                                    <figure class="cart__img-wrap">
                                        <img src="../assets/img/thuyNga.jpg" alt="" class="cart__img">
                                    </figure>
                                    <h3 class="cart__product-title">Thúy Nga</h3>
                                </div>
                            </td>
                            <td>$ Vô giá</td>
                            <td>
                                <div class="cart__number-box form-group">
                                    <button class="cart__btn cart__btn--plus">
                                        -
                                    </button>
                                    <input type="text" class="form-control text-center cart__number" value="1">
                                    <button class="cart__btn cart__btn--minus">
                                        +
                                    </button>
                                </div>
                            </td>
                            <td>$1100</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart__product">
                                    <figure class="cart__img-wrap">
                                        <img src="../assets/img/thuyNga.jpg" alt="" class="cart__img">
                                    </figure>
                                    <h3 class="cart__product-title">Thúy Nga</h3>
                                </div>
                            </td>
                            <td>$ Vô giá</td>
                            <td>
                                <div class="cart__number-box form-group">
                                    <button class="cart__btn cart__btn--plus">
                                        -
                                    </button>
                                    <input type="text" class="form-control text-center cart__number" value="1">
                                    <button class="cart__btn cart__btn--minus">
                                        +
                                    </button>
                                </div>
                            </td>
                            <td>$1100</td>
                        </tr>
                    </tbody>
                </table>
                <div class="cart__action">
                    <button class="btn btn-2">Return To Shop</button>
                    <button class="btn btn-2">Update Cart</button>
                </div>
                <div class="cart__summary">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="cart__coupon input-group">
                                <input type="text" class="form-control" placeholder="Coupon Code">
                                <button class="btn btn-2">Apply Coupon</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="summary__box">
                                <h4 class="summary__box-title">Cart Total</h4>
                                <div class="summary__item">
                                    <span class="summary__item-text">Subtotal:</span>
                                    <span class="summary__item-text summary__item-text--small">$1750</span>
                                </div>
                                <div class="summary__item">
                                    <span class="summary__item-text">Shipping:</span>
                                    <span class="summary__item-text summary__item-text--small">Free</span>
                                </div>
                                <div class="summary__item summary__item--bold">
                                    <span class="summary__item-text">Total:</span>
                                    <span class="summary__item-text summary__item-text--small">$1750</span>
                                </div>
                                <div class="summary__action">
                                    <button class="btn btn-2">Proceed to checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Emd Main -->
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