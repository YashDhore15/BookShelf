<?php

    

    function product_view($con)
    {
        $book_id = $_SESSION['book_id'];
        $html = '';
        
        if(false)
            $html = "no results";

        else
        {
            $stmt = $con->prepare("SELECT * from books where book_id = :book_id");

            $stmt->execute(["book_id"=>"$book_id"]);

            $book = $stmt->fetch(PDO::FETCH_ASSOC);

            if(empty($book))
                $html = $html."no results";
            else
            {   
                /*$html .= var_dump($book);
                return $html;*/
                
                
                $html = $html.
                    '<div class="top-section">
                    <!-- Left Container: Book Image -->
                    <div class="book-image-container">
                        <img src="' . $book['book_cover'] . '" alt="Book Cover">
                    </div>
        
                    <!-- Right Container: Book Details -->
                    <div class="book-details-container">
                        <h1> '. $book['title'] .' </h1>
                        <p>by <strong> '. $book['author'] .' </strong></p>
                        <p class="rating">
                            <span class="star-filled">★★★★</span><span class="star-empty">☆</span> '. $book['rating'] .'
                        </p>
                        <p>'. $book['isbn_13'] .'</p>
                        <p class="price">'. $book['price'] .'</p>
                        <p class="category">Category: <strong>'. $book['category'] .'</strong></p>
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
                        <!-- Add to Cart and Add to Wishlist Buttons -->
                        <button class="add-to-cart-btn">Add to Cart</button>
                        <button class="add-to-wishlist-btn">Add to Wishlist</button>
                    </div>
                </div>
        
                <!-- Bottom Container: Book Description and Author -->
                <div class="book-info-container">
                    <h2>Book Description</h2>
                    <p> '. $book['description'] .' </p>
        
                    <!-- Separator -->
                    <div class="separator"></div>
        
                    <h2>About the Author</h2>
                    <p> '. $book['about_author'] .'</p>
        
                    <!-- Separator -->
                    <div class="separator"></div>
        
                    <h2>Product Details</h2>
                    <p><strong>ISBN-13:</strong> '. $book['isbn_13'] .' </p>
                    <p><strong>Author:</strong> '. $book['author'] .' </p>
                    <p><strong>Publisher:</strong> <span style="color: green;"> '. $book['publisher'] .' </span></p>
                    <p><strong>Publication date:</strong> '. $book['published_date'] .' </p>
                    <p><strong>Binding:</strong> '. $book['binding'] .' </p>
                    <p><strong>Pages:</strong> '. $book['pages'] .' </p>
                </div>';
            }

            return $html;
        }
    }
    /*
    if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        fetchBooks($con, $html);
        echo $html;
        //include "../views/search.php";
    }
    */

?>