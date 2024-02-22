<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/0fcaa0e277.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/footer.css">

</head>
<body>
<div class="container container-first">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom border-2">
            <a href="../index.html"
                class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="../images/logo.png" class="ms-3 img-fluid " alt="" style="height: 50px; width: 50px;">
            </a>
            <div class="navbar navbar-expand-lg">
                <div class="container-fluid ">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <div style="margin-left: -200px; margin-right: 250px;" class="text-start">
                            <ul class="navbar-nav px-3 text-uppercase ">
                                <li class="nav-item">
                                    <a class="nav-link px-4" href="../index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4" href="./skincare.html">SkinCare</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4" href="./products.html">Products</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        About
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item " href="../pages/aboutUs.html">About Us</a>
                                        </li>
                                        <li><a class="dropdown-item active " href="./service.php">Service</a></li>
                                        <li><a class="dropdown-item" href="./blogs.html">Blogs</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4" href="#">Shop</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <a class="wishlist" href="./pages/wishlist.html"><i
                                    class="fa-regular fa-heart me-4"></i></a>
                            <a href="signUp.html"><button type="button" class="btn btn-primary">Sign-up</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


<!--table with data-->
    <div class="container">
        <h1>Service Page</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = '';
                $database = "project";

                $conn = new mysqli($servername, $username, $password, $database);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data from service table
                $sql = "SELECT service.id, service.name, service.description, service.date_created, category.cat_name
                        FROM service
                        INNER JOIN category ON service.category_id = category.category_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["description"] . "</td>";
                        echo "<td>" . $row["date_created"] . "</td>";
                        echo "<td>" . $row["cat_name"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No services found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <!--footer-->
    <footer class="footer flex-shrink-0 ">
        <div class="container">
            <div class="row ">
                <div class="footer-col col-xl-3 col-md-6 col-sm-12">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col col-xl-3 col-md-6 col-sm-12">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col col-xl-3 col-md-6 col-sm-12">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">ordinary</a></li>
                        <li><a href="#">ceraVe</a></li>
                        <li><a href="#">la roche-posay</a></li>
                        <li><a href="#">cetaphil</a></li>
                    </ul>
                </div>
                <div class="footer-col col-xl-3 col-md-6 col-sm-12">
                    <h4>follow-us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
