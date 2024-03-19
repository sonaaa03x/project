<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop Home Page</title>
    
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body background="back1.jpg" height="1000" width="1000">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SHOPIFY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
		aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="a1.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart1.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">Welcome to Our Online Vegetable Shop</h1>
            <p class="lead">We provide all types of vegetables here.</p>
            <a class="btn btn-primary btn-lg" href="registration.php" role="button">Register</a><br><br>
			<font color="grey">Do you have an account?</font><br>
		<a  href="login2.php" role="button">Log in</a>
        </div>
    </header>

    <!-- Featured Section -->
    <section class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="tokri.jpg" class="card-img-top" alt="..." height="300" width="250">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="third.jpg" class="card-img-top" alt="..." height="300" width="250">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="second.jfif" class="card-img-top" alt="..." height="300" width="250">
                    </div>
                </div>
            </div>
			<footer style="margin-top:10px;">
           <p style="text-align:center; font-size:1 em;">&copy; Shopify. All Rights Reserved.</p>
        </footer>
			</body>
			</html>
			