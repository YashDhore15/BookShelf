function fetchBooks(event) {
    event.preventDefault(); // Prevents default form submission

    let query = document.getElementById("search-box").value.trim();

    if (query === "") {
        alert("Please enter a search term!");
        return;
    }

    fetch('/Bookshelf/views/search.php', {
        method: 'GET',  
        body: new URLSearchParams({ 'query': query }) 
    })
    .then(response => response.text()) 
    .then(data => {
        console.log("Search Results:", data);

        if (data.trim() === "no results") {
            alert("No books found for: " + query);
        } else {
            // Here you can update the UI with the fetched books
            document.getElementById("search-results").innerHTML = data; 
        }
    })
    .catch(error => console.error("Error fetching books:", error));
}
