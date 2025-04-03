<?php
        session_start();
        include "../includes/db.php";
        include "../controller/product_controller.php";
        $query = trim($_SESSION['query']);
        $_SESSION['book_id'] = $_GET['book_id'];
        $html = product_view($con);
        include "../partials/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details - Rich Dad Poor Dad</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
        }

        .container {
            width: 90%; /* Adjusted width for better centering */
            max-width: 1200px; /* Maximum width for larger screens */
            margin: 0 auto; /* Centered */
            background: white;
            padding: 40px;
            box-sizing: border-box;
            flex-grow: 1;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Top Section: Image and Details */
        .top-section {
            display: flex;
            gap: 80px; /* Increased gap between image and details */
            margin-bottom: 40px; /* Gap between top and bottom sections */
        }

        /* Left Container: Book Image */
        .book-image-container {
            flex: 1;
            text-align: center; /* Center-align the image */
        }

        .book-image-container img {
            width: 100%; /* Responsive image */
            max-width: 550px; /* Increased image size */
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* Right Container: Book Details */
        .book-details-container {
            flex: 2;
            text-align: left; /* Align text to the left */
        }

        .book-details-container h1 {
            margin: 0;
            font-family: 'Merriweather', serif; /* Stylish heading font */
            font-size: 3.5em; /* Adjusted font size */
            color: #2c3e50;
            line-height: 1.2;
        }

        .book-details-container p {
            color: #555;
            font-size: 1.8em; /* Adjusted font size */
            margin: 15px 0; /* Increased spacing */
        }

        .rating {
            font-size: 1.8em; /* Adjusted font size */
            color: #f39c12; /* Yellow color for filled stars */
            margin-top: 10px;
        }

        .rating .star-filled {
            color: #f39c12; /* Yellow color for filled stars */
        }

        .rating .star-empty {
            color: #ddd; /* Light gray for empty stars */
        }

        .price {
            font-size: 2.5em; /* Adjusted font size */
            color: #e44d26;
            font-weight: bold;
            margin: 20px 0;
        }

        .quantity {
            margin: 20px 0;
        }

        .quantity label {
            font-size: 1.5em; /* Adjusted font size */
            color: #555;
        }

        .quantity select {
            font-size: 1.5em;
            padding: 12px; /* Increased padding */
            border-radius: 8px; /* Rounded corners */
            border: 1px solid #ddd;
            background-color: #f9f9f9; /* Light background */
            cursor: pointer;
            transition: border-color 0.3s ease;
            width: 100%; /* Full width */
            max-width: 200px; /* Limit width */
        }

        .quantity select:hover {
            border-color: #3498db; /* Highlight on hover */
        }

        .add-to-cart-btn, .add-to-wishlist-btn {
            display: inline-block;
            background: #27ae60; /* Green color */
            color: white;
            padding: 12px 24px; /* Slightly larger padding */
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.5em; /* Adjusted font size */
            margin-top: 20px;
            transition: background 0.3s ease;
            border: none;
            cursor: pointer;
            margin-right: 10px; /* Space between buttons */
        }

        .add-to-wishlist-btn {
            background: #3498db; /* Blue color for wishlist button */
        }

        .add-to-cart-btn:hover {
            background: #219150; /* Darker green on hover */
        }

        .add-to-wishlist-btn:hover {
            background: #2980b9; /* Darker blue on hover */
        }

        .category {
            font-size: 1.5em;
            color: #555;
            margin-top: 10px;
        }

        /* Bottom Container: Book Description and Author */
        .book-info-container {
            margin-top: 40px; /* Gap between top and bottom sections */
            text-align: left;
        }

        .book-info-container h2 {
            font-family: 'Merriweather', serif; /* Stylish heading font */
            font-size: 2.5em; /* Adjusted font size */
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .book-info-container p {
            font-size: 1.5em; /* Adjusted font size */
            line-height: 1.8;
            color: #555;
        }

        /* Separator */
        .separator {
            width: 100%;
            height: 1px;
            background: #ddd;
            margin: 40px 0;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background: #2c3e50;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    
    

    <div class="container">
        <!-- Top Section: Image and Details -->
        <?= $html ?>
    </div>
    <?php include '../partials/footer.php'; ?>
</body>
</html>