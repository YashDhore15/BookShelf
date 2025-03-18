<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            width: 100%;
            margin: auto;
            background: white;
            padding: 40px;
            box-sizing: border-box;
            flex-grow: 1;
        }
        .book-header {
            display: flex;
            gap: 80px;
            align-items: center;
            justify-content: flex-start;
            text-align: left;
            width: 100%;
            padding-left: 30px;
        }
        .book-header img {
            width: 300px;
            height: auto;
            border-radius: 8px;
        }
        .book-info {
            flex-grow: 1;
            max-width: 600px;
        }
        .book-info h1 {
            margin: 0;
            font-size: 3em;
        }
        .book-info p {
            color: #555;
            font-size: 1.5em;
        }
        .rating {
            font-size: 1.8em;
            color: #f39c12;
            margin-top: 10px;
        }
        .price {
            font-size: 2.5em;
            color: #e44d26;
            font-weight: bold;
        }
        .buy-btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 20px 40px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.5em;
            margin-top: 20px;
        }
        .description, .reviews, .product-details {
            margin-top: 60px;
            text-align: center;
            width: 100%;
        }
        .separator {
            width: 80%;
            height: 2px;
            background: #ddd;
            margin: 40px auto;
        }
        h2 {
            text-align: center;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #333;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <?php include '../partials/header.php'; ?>
    <div class="container">
        <div class="book-header">
            <img src="https://prodimage.images-bn.com/pimages/9781612681122_p0_v1_s600x595.jpg
" alt="Book Cover">
            <div class="book-info">
                <h1>Rich Dad Poor Dad</h1>
                <p>by <strong>Robert T. Kiyosaki </strong></p>
                <p class="rating">★★★★☆ (4.5/5)</p>
                <p>ISBN: 123-4567890123</p>
                <p class="price">$19.99</p>
                <a href="#" class="buy-btn">Buy Now</a>
            </div>
        </div>
        <div class="separator"></div>
        <div class="description">
            <h2>Book Description</h2>
            <p>April of 2022 marks a 25-year milestone for the personal finance classic Rich Dad Poor Dad that still ranks as the #1 Personal Finance book of all time. And although 25 years have passed since Rich Dad Poor Dad was first published, readers will find that very little in the book itself has changed — and for good reason. While so much in our world is changing a high speed, the lessons about money and the principles of Rich Dad Poor Dad haven’t changed. Today, as money continues to play a key role in our daily lives, the messages in Robert Kiyosaki’s international bestseller are more timely and more important than ever.

Milestones 

While there is a milestone  to commemorate — and a new section in the book on Why Milestones Are Important — preserving the integrity of the original content is testimony to the fact that this book has truly stood the test of time. The sidebars throughout the book (that were updated for the 20-year anniversary edition) have been updated again, but the core principles that parents and grandparents — those who embraced Robert’s story and messages 25 years ago — are sharing them with new generations who have found that its timeless wisdom and no-nonsense lessons can be applied to anyone’s life and their vision for a future that includes taking control of their finances.


People of all cultures and countries celebrate milestones. We use them to measure time, mark progress, reflect on the lessons we’ve learned, and celebrate accomplishments… and they give meaning to our life’s journey. They are a way that we integrate past, present, and future… looking back at where we started, where we are today… and the promise of all that the future can hold.

In the quarter century that has passed since Rich Dad Poor Dad was first published — 25 years since April 8, 1997 — so many things in our world have changed. But the one thing that has not changed is the pressing need for and the power of financial education. Money is still a mainstay of our lives, like it or not, and technology has brought both speed and innovations to the world of money. In an ever-changing world, we can all still get smarter when it comes to money… and learn as much as we can to secure our future.

Still the One… #1 

Today Rich Dad Poor Dad consistently ranks among bestsellers around the world in the categories of Personal Finance, Parenting, and Investing, has been translated into 38 languages, and has sold more than 40 million copies worldwide.


Rich Dad Poor Dad is Robert's story of growing up with two dads — his real father and the father of his best friend, his rich dad — and the ways in which both men shaped his thoughts about money and investing. The book explodes the myth that you need to earn a high income to be rich and explains the difference between working for money and having your money work for you.

In many ways, the messages of Rich Dad Poor Dad, messages that were challenged and criticized 25 ago, are more meaningful, relevant, and important today than ever.</p>
        </div>
        
        <div class="separator"></div>
        <div class="about-author">
            <div class="section-wrapper">
                <span class="section-title"> <h2>About the Author</h2></span>
            </div>
            <p>Robert T. Kiyosaki is an entrepreneur, educator, and investor who believes that each of us has the power to take control of our financial future. He is best known as the author of "Rich Dad Poor Dad"—the #1 personal finance book of all time. Through his books and teachings, he has helped millions of people understand the importance of financial literacy and smart investing.</p>
        </div>

        <div class="separator"></div>
        <div class="product-details">
            <h2>Product Details</h2>
            <p><strong>ISBN-13:</strong> 9781612681122</p>
            <p><strong>Publisher:</strong> <span style="color: green;">Plata Publishing, LLC.</span></p>
            <p><strong>Publication date:</strong> 04/05/2022</p>
            <p><strong>Edition description:</strong> 25th Anniversary Edition</p>
            <p><strong>Pages:</strong> 336</p>
            <p><strong>Sales rank:</strong> 619</p>
            <p><strong>Product dimensions:</strong> 6.00(w) x 8.80(h) x 0.90(d)</p>
        </div>
        <div class="separator"></div>
        <div class="reviews">
            <h2>Customer Reviews</h2>
            <p><strong>John Doe:</strong> "Great book! Highly recommend."</p>
            <p><strong>Jane Smith:</strong> "Very informative and well-written."</p>
        </div>
    </div>
    <?php include '../partials/footer.php'; ?>
</body>
</html>
