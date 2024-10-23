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

// Example functionality for the "Ask a Question" button
document.getElementById('ask-btn').addEventListener('click', function() {
    alert('Feel free to ask your questions here!');
});