/* Show Logout Modal
function showLogoutModal() {
    document.getElementById("logout-modal").style.display = "flex";
}

// Handle Logout Confirmation
document.getElementById("confirm-logout").onclick = function () {
    window.location.href = "/Bookshelf/controller/logout_controller.php";  // Redirect to logout
};

// Handle Cancel Logout
document.getElementById("cancel-logout").onclick = function () {
    document.getElementById("logout-modal").style.display = "none";
};
*/
function logout()
{
    let status = confirm("Are you sure you want to log out?");

    if(status)
        window.location.href = "/Bookshelf/controller/logout_controller.php";
}