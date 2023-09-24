document.addEventListener("DOMContentLoaded", function() {
    const openLoginCardButton = document.getElementById('show-login');
    const overlay = document.getElementById('overlay');
    const loginCard = document.getElementById('loginCard');

    // Function to open the login card
    function openLoginCard() {
        overlay.style.display = 'block';
        loginCard.style.display = 'block';
    }

    // Function to close the login card
    function closeLoginCard() {
        overlay.style.display = 'none';
        loginCard.style.display = 'none';
    }

    // Attach event listener to open the login card
    openLoginCardButton.addEventListener('click', openLoginCard);

    // Attach event listener to close the login card when clicking outside
    overlay.addEventListener('click', closeLoginCard);
});