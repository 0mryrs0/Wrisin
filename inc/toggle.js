const toggleBar = document.getElementById("toggle-bar");
const dropdown = document.getElementById("dropdown");

toggleBar.addEventListener("click", function() {
    if (dropdown.style.display === 'none' || dropdown.style.display === '') {
        dropdown.style.display = 'block';
    } else {
        dropdown.style.display = 'none';
    }
});