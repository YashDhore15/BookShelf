function fetchBook(event) {
    event.preventDefault(); // Prevents default form submission

    let query = document.getElementById("search-box").value.trim();

    if (query === "") {
        alert("Please enter a search term!");
        return;
    }

    /*
    fetch('/Bookshelf/controller/search_controller.php', {
        method: 'GET',  
        body: new URLSearchParams({ 'query': query }) 
    })*/
    fetch(`/Bookshelf/controller/search_controller.php?query=${encodeURIComponent(query)}`, {
        method: "GET"
    })
    .then(response => response.text()) 
    .then(data => {
        console.log("Search Results:", data);

        if (data.trim() === "no results") {
            alert("No books found for: " + query);
        } else {
            // Here you can update the UI with the fetched books
            document.getElementById("search-result").innerHTML = data; 
            console.log(data);
        }
    })
    .catch(error => console.error("Error fetching books:", error));
}
/*


document.getElementById("search-form").onsubmit = function(event) {
    event.preventDefault(); // Prevents default form submission

    console.log("I'm in search books");

    let query = document.getElementById("search-box").value.trim();

    if (query === "") {
        alert("Please enter a search term!");
        return;
    }

    fetch('/Bookshelf/controller/search_controller.php', {
        method: 'GET',  
        body: new URLSearchParams({ 'query': query }) 
    })
    fetch(`/Bookshelf/controller/search_controller.php?query=${encodeURIComponent(query)}`, {
        method: "GET"
    })
    .then(response => response.text()) 
    .then(data => {
        console.log("Search Results:", data);

        if (data.trim() === "no results") {
            alert("No books found for: " + query);
        } else {
            // Here you can update the UI with the fetched books
            document.getElementById("search-result").innerHTML = data; 
            console.log(data);
        }
    })
    .catch(error => console.error("Error fetching books:", error));
}
*/