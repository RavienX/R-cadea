<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rcadea Printing Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .top-bar {
            background-color: #f8f9fa;
            padding: 5px 0;
        }
        .logo {
            width: 60px;
            height: 60px;
        }
        .nav-link {
            color: #000;
        }
        .nav-link.active {
            color: #000;
            border-bottom: 3px solid #4169E1;
        }
        .hero {
            background-image: url('https://source.unsplash.com/random/1200x600?office');
            background-size: cover;
            background-position: center;
            height: 80vh;
            position: relative;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(65, 105, 225, 0.7);
        }
        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
        }
        .btn-learn-more {
            background-color: #FFD700;
            color: #000;
        }
        .btn-pricing {
            background-color: transparent;
            color: white;
            border: 1px solid white;
        }
        .about-header {
            background-color: #f8f9fa;
            padding: 60px 0;
        }
        .about-content {
            padding: 60px 0;
        }
        .image-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .image-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .btn-see-more {
            background-color: #4169E1;
            color: white;
            padding: 10px 30px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        .btn-see-more:hover {
            background-color: #3255b2;
        }
        .service-icon {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }
        .service-icon:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .service-icon img {
            width: 100%;
            max-width: 100px;
            margin-bottom: 10px;
        }
        .service-icon {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }
        .service-icon:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .service-icon img {
            width: 100%;
            max-width: 100px;
            margin-bottom: 10px;
        }
        #orderForm {
            display: none;
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 100px;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }
        .blog-banner {
            background: linear-gradient(to right, #4169E1, #9400D3);
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
        .blog-images {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        .blog-images img {
            width: 32%;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
        }
        .blog-content {
            padding: 20px;
        }
        .blog-company {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 10px;
        }
        .blog-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 30px;
            cursor: pointer;
            margin-top: 20px;
            margin-left: 10px;
        }
        .blog-post-dropdown {
            display: none;
            padding: 20px;
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
        }
        .blog-post-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Styles for login form */
        .login-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        .login-form {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            max-width: 400px;
            width: 90%;
        }
        .login-icon {
            background-color: #6c63ff;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            font-size: 24px;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .login-form button {
            background-color: #6c63ff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        .login-form button:hover {
            background-color: #5a52d5;
        }

        /* Styles for user profile */
        .user-profile {
            display: none;
            align-items: center;
            margin-left: 15px;
        }
        .user-profile img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>
<body>
   
   <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://via.placeholder.com/60x60?text=RCD" alt="RCD Logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
            </ul>
            <div class="user-profile" id="userProfile">
                <img src="https://via.placeholder.com/30x30" alt="User Profile">
                <span id="userEmail"></span>
            </div>
        </div>
    </div>
</nav>

    <!-- Login Form -->
    <div class="login-container" id="loginContainer">
        <div class="login-form">
            <div class="login-icon">👤</div>
            <h2>LOG IN</h2>
            <form id="loginForm">
                <input type="email" id="loginEmail" placeholder="E-Mail" required>
                <input type="password" id="loginPassword" placeholder="Password" required>
                <div class="mb-3">
                    <input type="checkbox" id="recaptcha" required>
                    <label for="recaptcha">I'm not a robot</label>
                </div>
                <button type="submit">LOG IN</button>
            </form>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 hero-content text-center">
                    <h2 class="display-4 fw-bold mb-3">Your Single Source Of</h2>
                    <h1 class="display-2 fw-bold mb-4">Full Printing Services</h1>
                    <p class="lead mb-5">We specialize in commercial offset printing and digital printing services to cover all your needs.</p>
                    <a href="#about" class="btn btn-learn-more btn-lg me-3">Learn more</a>
                    <a href="#services" class="btn btn-pricing btn-lg">OUR PRICING <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="about-header">
        <main class="about-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="image-grid">
                            <img src="https://source.unsplash.com/random/400x300?printing" alt="Printing Service 1">
                            <img src="https://source.unsplash.com/random/400x300?design" alt="Printing Service 2">
                            <img src="https://source.unsplash.com/random/400x300?office" alt="Printing Service 3">
                            <img src="https://source.unsplash.com/random/400x300?technology" alt="Printing Service 4">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-4">Transforming Your Creative Ideas into Reality</h2>
                        <p class="lead mb-4">At Rcadea, we are passionate about transforming your creative ideas into high-quality printed materials. Founded with the belief that every project deserves careful attention and professional expertise, our company has grown to become a trusted name in the printing industry.</p>
                        <p class="mb-4">From individuals seeking custom prints to businesses requiring large-scale promotional materials, we are committed to delivering exceptional results with precision and care.</p>
                        <h3 class="h4 mb-3">Our Mission</h3>
                        <p class="mb-4">To provide top-notch printing solutions that meet the diverse needs of our customers. We understand the importance of detail, speed, and consistency in every project we undertake, whether it's a simple document or an intricate design.</p>
                        <a href="#" class="btn btn-see-more">See More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <!-- Services Section -->
    <div id="services" class="container my-5">
        <h1 class="text-center mb-5">We Offer a Wide Variety of IT Services</h1>
        
        <div class="row g-4">
            <?php
            $services = [
                'Printing', 'Scanning', 'Copying', 'Binding',
                'Laminating', 'Design', 'Large Format', 'Mailing'
            ];
            foreach ($services as $service) {
                echo '<div class="col-md-3 col-sm-6">
                    <div class="service-icon">
                        <img src="https://via.placeholder.com/100x100?text=Printer" alt="' . $service . '">
                        <h5>' . $service . '</h5>
                    </div>
                </div>';
            }
            ?>
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-primary" onclick="toggleOrderForm()">Place Order</button>
        </div>

        <div id="orderForm">
            <h3 class="text-center mb-4">Place Your Order</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="service" class="form-label">Service</label>
                    <select class="form-select" id="service" name="service" required>
                        <option value="">Select a service</option>
                        <?php
                        foreach ($services as $service) {
                            echo '<option value="' . $service . '">' . $service . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="pickup-date" class="form-label">Pickup  Date</label>
                    <input type="date" class="form-control" id="pickup-date" name="pickup_date" required>
                </div>
                <div class="mb-3">
                    <label for="pickup-time" class="form-label">Pickup Time</label>
                    <input type="time" class="form-control" id="pickup-time" name="pickup_time" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Upload File</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <button type="submit" class="btn btn-primary">Submit Order</button>
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $service = $_POST['service'];
        $email = $_POST['email'];
        $pickup_date = $_POST['pickup_date'];
        $pickup_time = $_POST['pickup_time'];
        $quantity = $_POST['quantity'];

        // File upload handling
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $upload_dir = "uploads/";
        $file_path = $upload_dir . $file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {
            // File uploaded successfully
            // Here you would typically save the order details to a database
            // For this example, we'll just echo a success message
            echo "<script>
                alert('Order placed successfully! Service: $service, Email: $email, Pickup: $pickup_date $pickup_time, Quantity: $quantity, File: $file_name');
            </script>";
        } else {
            echo "<script>alert('There was an error uploading your file.');</script>";
        }
    }
    ?>

    <main class="container">
        <div class="blog-grid">
            <?php
            // First set of blog posts
            $blog_posts_first = [
                [
                    'title' => 'Essential Tips for Designing Print-Ready Files',
                    'image' => 'happy.png',
                    'content' => 'Designing print-ready files is crucial for ensuring high-quality printed materials. Here are some essential tips:
                        <ul>
                            <li>Use high-resolution images (at least 300 DPI)</li>
                            <li>Convert all text to outlines or embed fonts</li>
                            <li>Use CMYK color mode for accurate color reproduction</li>
                            <li>Include bleed area (usually 3-5mm) for edge-to-edge printing</li>
                            <li>Save files in appropriate formats (PDF, TIFF, or EPS)</li>
                        </ul>'
                ],
            ];

            // Render first set of blog posts
            foreach ($blog_posts_first as $index => $post) {
                echo '<div class="blog-post">';
                echo '<img src="' . $post['image'] . '" alt="' . $post['title'] . '" class="blog-post-image" onclick="toggleDropdown(event, ' . $index . ')">';
                echo '<div class="blog-post-content">';
                echo '<h2 class="blog-title" onclick="toggleDropdown(event, ' . $index . ')">' . $post['title'] . '</h2>';
                echo '</div>';
                echo '<div class="blog-post-dropdown" id="dropdown-' . $index . '" style="display: none;">'; // Initially hidden
                echo $post['content'];
                echo '</div>';
                echo '</div>';
            }

            // Second set of blog posts
            $blog_posts_second = [
                [
                    'title' => 'Another Blog Post Title',
                    'image' => 'happy.png',
                    'content' => 'Here are some other useful tips for design:
                        <ul>
                            <li>Keep text legible and readable</li>
                            <li>Use consistent typography</li>
                            <li>Ensure proper alignment and spacing</li>
                        </ul>'
                ],
            ];

            // Render second set of blog posts
            foreach ($blog_posts_second as $index => $post) {
                $adjustedIndex = $index + count($blog_posts_first); // Adjust the index for unique ID
                echo '<div class="blog-post">';
                echo '<img src="' . $post['image'] . '" alt="' . $post['title'] . '" class="blog-post-image" onclick="toggleDropdown(event, ' . $adjustedIndex . ')">';
                echo '<div class="blog-post-content">';
                echo '<h2 class="blog-title" onclick="toggleDropdown(event, ' . $adjustedIndex . ')">' . $post['title'] . '</h2>';
                echo '</div>';
                echo '<div class="blog-post-dropdown" id="dropdown-' . $adjustedIndex . '" style="display: none;">'; // Initially hidden
                echo $post['content'];
                echo '</div>';
                echo '</div>';
            }

            // Third set of blog posts
            $blog_posts_third = [
                [
                    'title' => 'Third Blog Post Title',
                    'image' => 'happy.png',
                    'content' => 'More tips and tricks for designing:
                        <ul>
                            <li>Keep design elements balanced</li>
                            <li>Use contrasting colors for emphasis</li>
                            <li>Ensure readability in all formats</li>
                        </ul>'
                ],
            ];

            // Render third set of blog posts
            foreach ($blog_posts_third as $index => $post) {
                $adjustedIndex = $index + count($blog_posts_first) + count($blog_posts_second); // Adjust index for unique ID
                echo '<div class="blog-post">';
                echo '<img src="' . $post['image'] . '" alt="' . $post['title'] . '" class="blog-post-image" onclick="toggleDropdown(event, ' . $adjustedIndex . ')">';
                echo '<div class="blog-post-content">';
                echo '<h2 class="blog-title" onclick="toggleDropdown(event, ' . $adjustedIndex . ')">' . $post['title'] . '</h2>';
                echo '</div>';
                echo '<div class="blog-post-dropdown" id="dropdown-' . $adjustedIndex . '" style="display: none;">'; // Initially hidden
                echo $post['content'];
                echo '</div>';
                echo '</div>';
            }

            // Fourth set of blog posts
            $blog_posts_fourth = [
                [
                    'title' => 'Fourth Blog Post Title',
                    'image' => 'happy.png',
                    'content' => 'More design tips:
                        <ul>
                            <li>Ensure images are high-quality</li>
                            <li>Choose appropriate fonts for your content</li>
                        </ul>'
                ],
            ];

            // Render fourth set of blog posts
            foreach ($blog_posts_fourth as $index => $post) {
                $adjustedIndex = $index + count($blog_posts_first) + count($blog_posts_second) + count($blog_posts_third); // Adjust index for unique ID
                echo '<div class="blog-post">';
                echo '<img src="' . $post['image'] . '" alt="' . $post['title'] . '" class="blog-post-image" onclick="toggleDropdown(event, ' . $adjustedIndex . ')">';
                echo '<div class="blog-post-content">';
                echo '<h2 class="blog-title" onclick="toggleDropdown(event, ' . $adjustedIndex . ')">' . $post['title'] . '</h2>';
                echo '</div>';
                echo '<div class="blog-post-dropdown" id="dropdown-' . $adjustedIndex . '" style="display: none;">'; // Initially hidden
                echo $post['content'];
                echo '</div>';
                echo '</div>';
            }

            // Fifth set of blog posts
            $blog_posts_fifth = [
                [
                    'title' => 'Fifth Blog Post Title',
                    'image' => 'happy.png',
                    'content' => 'Design principles to consider:
                        <ul>
                            <li>Use a clean, minimal design</li>
                            <li>Consider the user experience</li>
                        </ul>'
                ],
            ];

            // Render fifth set of blog posts
            foreach ($blog_posts_fifth as $index => $post) {
                $adjustedIndex = $index + count($blog_posts_first) + count($blog_posts_second) + count($blog_posts_third) + count($blog_posts_fourth); // Adjust index for unique ID
                echo '<div class="blog-post">';
                echo '<img src="' . $post['image'] . '" alt="' . $post['title'] . '" class="blog-post-image" onclick="toggleDropdown(event, ' . $adjustedIndex . ')">';
                echo '<div class="blog-post-content">';
                echo '<h2 class="blog-title" onclick="toggleDropdown(event, ' . $adjustedIndex . ')">' . $post['title'] . '</h2>';
                echo '</div>';
                echo '<div class="blog-post-dropdown" id="dropdown-' . $adjustedIndex . '" style="display: none;">'; // Initially hidden
                echo $post['content'];
                echo '</div>';
                echo '</div>';
            }

            // Sixth set of blog posts
            $blog_posts_sixth = [
                [
                    'title' => 'Sixth Blog Post Title',
                    'image' => 'happy.png',
                    'content' => 'Final set of design tips:
                        <ul>
                            <li>Ensure accessibility for all users</li>
                            <li>Test designs on multiple devices</li>
                        </ul>'
                ],
            ];

            // Render sixth set of blog posts
            foreach ($blog_posts_sixth as $index => $post) {
                $adjustedIndex = $index + count($blog_posts_first) + count($blog_posts_second) + count($blog_posts_third) + count($blog_posts_fourth) + count($blog_posts_fifth); // Adjust index for unique ID
                echo '<div class="blog-post">';
                echo '<img src="' . $post['image'] . '" alt="' . $post['title'] . '" class="blog-post-image" onclick="toggleDropdown(event, ' . $adjustedIndex . ')">';
                echo '<div class="blog-post-content">';
                echo '<h2 class="blog-title" onclick="toggleDropdown(event, ' . $adjustedIndex . ')">' . $post['title'] . '</h2>';
                echo '</div>';
                echo '<div class="blog-post-dropdown" id="dropdown-' . $adjustedIndex . '" style="display: none;">'; // Initially hidden
                echo $post['content'];
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let isLoggedIn = false;
        let userEmail = '';

        function showLoginForm() {
            document.getElementById('loginContainer').style.display = 'flex';
        }

        function hideLoginForm() {
            document.getElementById('loginContainer').style.display = 'none';
        }

        function login(event) {
            event.preventDefault();
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            
            // Here you would typically validate the login credentials with a server
            // For this example, we'll just set isLoggedIn to true if both fields are filled
            if (email && password) {
                isLoggedIn = true;
                userEmail = email;
                hideLoginForm();
                updateUserProfile();
                alert('You are now logged in!');
            } else {
                alert('Please enter both email and password.');
            }
        }

        function updateUserProfile() {
            const userProfile = document.getElementById('userProfile');
            const userEmailSpan = document.getElementById('userEmail');
            
            if (isLoggedIn) {
                userEmailSpan.textContent = userEmail;
                userProfile.style.display = 'flex';
            } else {
                userProfile.style.display = 'none';
            }
        }

        function checkLogin() {
            if (!isLoggedIn) {
                showLoginForm();
                return false;
            }
            return true;
        }

        document.getElementById('loginForm').addEventListener('submit', login);

        function toggleOrderForm() {
            if (checkLogin()) {
                var form = document.getElementById('orderForm');
                if (form.style.display === 'none' || form.style.display === '') {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            }
        }

        function toggleDropdown(event, index) {
            if (checkLogin()) {
                event.stopPropagation();
                const dropdown = document.getElementById('dropdown-' + index);
                const allDropdowns = document.getElementsByClassName('blog-post-dropdown');
                
                for (let i = 0; i < allDropdowns.length; i++) {
                    if (allDropdowns[i] !== dropdown) {
                        allDropdowns[i].style.display = 'none';
                    }
                }
                
                dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
            }
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function() {
            if (isLoggedIn) {
                const allDropdowns = document.getElementsByClassName('blog-post-dropdown');
                for (let i = 0; i < allDropdowns.length; i++) {
                    allDropdowns[i].style.display = 'none';
                }
            }
        });

        // Add login check to all clickable elements
        document.addEventListener('DOMContentLoaded', function() {
            const clickableElements = document.querySelectorAll('a, button, [onclick]');
            clickableElements.forEach(element => {
                if (!element.classList.contains('navbar-toggler') && !element.closest('#loginForm')) {
                    const originalOnClick = element.onclick;
                    element.onclick = function(event) {
                        if (checkLogin()) {
                            if (originalOnClick) {
                                return originalOnClick.call(this, event);
                            }
                        } else {
                            event.preventDefault();
                        }
                    };
                }
            });

            // Initialize user profile
            updateUserProfile();
        });
    </script>
</body>
</html>