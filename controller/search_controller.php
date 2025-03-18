<?php

    

    function fetchBooks($con)
    {
        $query = $_SESSION['query'];
        $html = '';
        
        if(empty($query))
            $html = "no results";

        else
        {
            $stmt = $con->prepare("SELECT book_cover, title, author, price FROM books 
            WHERE title ILIKE :query 
            OR author ILIKE :query 
            OR category ILIKE :query
            OR isbn_13 ILIKE :query");

            $stmt->execute(["query"=>"%$query%"]);

            $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(empty($books))
                $html = $html."no results";
            else
            {   
                foreach($books as $book)
                {
                    $html = $html.'<div class="book-card">
                    <img src="' . $book['book_cover'] . '" alt="Book Cover">
                    <h3>' . $book['title'] . '</h3>
                    <p>' . $book['author'] . '</p>
                    <p class="price"> ₹' . $book['price'] . ' </p>
                    <button>Add to Cart</button>
                </div>';

                }
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