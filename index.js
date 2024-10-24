// Responsive Hamburger
document.getElementById("menu-icon").addEventListener("click", function() {
    const navMenu = document.getElementById("nav-menu");
    navMenu.classList.toggle("show-menu");
});


// "Search Bar and no results" 

function searchRecipes() {
    const input = document.getElementById('search-bar').value.toLowerCase();
    const recipes = document.querySelectorAll('.recipe-card');
    let hasResults = false;

    recipes.forEach(recipe => {
        const title = recipe.querySelector('h3').textContent.toLowerCase();
        if (title.includes(input)) {
            recipe.style.display = 'block';
            hasResults = true;
        } else {
            recipe.style.display = 'none';
        }
    });

    const noResultsMessage = document.getElementById('no-results');
    if (hasResults) {
        noResultsMessage.style.display = 'none';
    } else {
        noResultsMessage.style.display = 'block';
    }
}

// "Ask a Question" 
document.getElementById('ask-btn').addEventListener('click', function() {
    alert('Use the search bar to type in the name of an ingredient, cuisine, or recipe name or browse through our navigation menu to find what you are looking for!');
});

