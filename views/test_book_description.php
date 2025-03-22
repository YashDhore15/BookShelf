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
            width: 100%; /* Full width */
            margin: 0 auto; /* Centered */
            background: white;
            padding: 40px;
            box-sizing: border-box;
            flex-grow: 1;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Book Header Section */
        .book-header {
            display: flex;
            gap: 60px; /* Increased space between image and book info */
            align-items: flex-start;
            text-align: left;
            width: 100%;
            margin-bottom: 40px;
        }

        .book-header img {
            width: 300px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .book-info {
            flex-grow: 1;
            max-width: 600px;
        }

        .book-info h1 {
            margin: 0;
            font-family: 'Merriweather', serif; /* Stylish heading font */
            font-size: 4.5em; /* Bigger font size */
            color: #2c3e50;
            line-height: 1.2;
        }

        .book-info p {
            color: #555;
            font-size: 2em; /* Bigger font size */
            margin: 15px 0; /* Increased spacing */
        }

        .rating {
            font-size: 2.2em; /* Bigger font size */
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
            font-size: 3.5em; /* Bigger font size */
            color: #e44d26;
            font-weight: bold;
            margin: 20px 0;
        }

        .quantity {
            margin: 20px 0;
        }

        .quantity label {
            font-size: 2em; /* Bigger font size */
            color: #555;
        }

        .quantity select {
            font-size: 1.8em;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .add-to-cart-btn {
            display: inline-block;
            background: #27ae60; /* Orange color */
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.8em;
            margin-top: 20px;
            transition: background 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .add-to-cart-btn:hover {
            background: #219150; /* Darker orange on hover */
        }

        /* Separator */
        .separator {
            width: 80%;
            height: 1px;
            background: #ddd;
            margin: 40px auto;
        }

        /* Description Section */
        .description {
            margin-top: 40px;
            text-align: left;
        }

        .description h2 {
            font-family: 'Merriweather', serif; /* Stylish heading font */
            font-size: 3.5em; /* Bigger font size */
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .description p {
            font-size: 2em; /* Bigger font size */
            line-height: 1.8;
            color: #555;
        }

        /* About the Author Section */
        .about-author {
            margin-top: 40px;
            text-align: left;
        }

        .about-author h2 {
            font-family: 'Merriweather', serif; /* Stylish heading font */
            font-size: 3.5em; /* Bigger font size */
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .about-author p {
            font-size: 2em; /* Bigger font size */
            line-height: 1.8;
            color: #555;
        }

        /* Product Details Section */
        .product-details {
            margin-top: 40px;
            text-align: left;
        }

        .product-details h2 {
            font-family: 'Merriweather', serif; /* Stylish heading font */
            font-size: 3.5em; /* Bigger font size */
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .product-details p {
            font-size: 2em; /* Bigger font size */
            line-height: 1.8;
            color: #555;
        }

        .product-details strong {
            color: #333;
        }

        /* Reviews Section */
        .reviews {
            margin-top: 40px;
            text-align: left;
        }

        .reviews h2 {
            font-family: 'Merriweather', serif; /* Stylish heading font */
            font-size: 3.5em; /* Bigger font size */
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .reviews p {
            font-size: 2em; /* Bigger font size */
            line-height: 1.8;
            color: #555;
            margin: 10px 0;
        }

        .reviews strong {
            color: #333;
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
    <?php include '../partials/header.php'; ?>
    <div class="container">
        <!-- Book Header -->
        <div class="book-header">
            <img src="https://prodimage.images-bn.com/pimages/9781612681122_p0_v1_s600x595.jpg" alt="Book Cover">
            <div class="book-info">
                <h1>Rich Dad Poor Dad</h1>
                <p>by <strong>Robert T. Kiyosaki</strong></p>
                <p class="rating">
                    <span class="star-filled">★★★★</span><span class="star-empty">☆</span> (4.5/5)
                </p>
                <p>ISBN: 123-4567890123</p>
                <p class="price">$19.99</p>
                <!-- Quantity Dropdown -->
                <div class="quantity">
                    <label for="quantity">Quantity:</label>
                    <select id="quantity" name="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <!-- Add to Cart Button -->
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
        </div>

        <!-- Separator -->
        <div class="separator"></div>

        <!-- Description -->
        <div class="description">
            <h2>Book Description</h2>
            <p>April of 2022 marks a 25-year milestone for the personal finance classic Rich Dad Poor Dad that still ranks as the #1 Personal Finance book of all time. And although 25 years have passed since Rich Dad Poor Dad was first published, readers will find that very little in the book itself has changed — and for good reason. While so much in our world is changing a high speed, the lessons about money and the principles of Rich Dad Poor Dad haven’t changed. Today, as money continues to play a key role in our daily lives, the messages in Robert Kiyosaki’s international bestseller are more timely and more important than ever.</p>
        </div>

        <!-- Separator -->
        <div class="separator"></div>

        <!-- About the Author -->
        <div class="about-author">
            <h2>About the Author</h2>
            <p>Robert T. Kiyosaki is an entrepreneur, educator, and investor who believes that each of us has the power to take control of our financial future. He is best known as the author of "Rich Dad Poor Dad"—the #1 personal finance book of all time. Through his books and teachings, he has helped millions of people understand the importance of financial literacy and smart investing.</p>
        </div>

        <!-- Separator -->
        <div class="separator"></div>

        <!-- Product Details -->
        <div class="product-details">
            <h2>Product Details</h2>
            <p><strong>ISBN-13:</strong> 9781612681122</p>
            <p><strong>Author:</strong> Robert t . Kiyosaki</p>
            <p><strong>Publisher:</strong> <span style="color: green;">Plata Publishing, LLC.</span></p>
            <p><strong>Publication date:</strong> 04/05/2022</p>
            <p><strong>Binding:</strong> PaperBack</p>
            <p><strong>Pages:</strong> 336</p>
            <p><strong>Gener:</strong> Economics </p>
            <p><strong>In Stock:</strong> 20 </p>
        </div>

        <!-- Separator -->
        <div class="separator"></div>

        <!-- Reviews -->
        <div class="reviews">
            <h2>Customer Reviews</h2>
            <p><strong>John Doe:</strong> "Great book! Highly recommend."</p>
            <p><strong>Jane Smith:</strong> "Very informative and well-written."</p>
        </div>
    </div>
    <?php include '../partials/footer.php'; ?>
</body>
</html>