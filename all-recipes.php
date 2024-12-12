<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Recipes</title>
    <link rel="stylesheet" href="all-recipes.css">
    <script src="https://kit.fontawesome.com/f4cf6f4ce3.js" crossorigin="anonymous"></script>
</head>


<body>

    <header>
        <!-- nav bar -->
        <nav class="navbar">
            <a href="https://idm-232-yy559.netlify.app/" class="logo">
                <img src="media/simmer-altlogo.png" alt="Simmer Logo 2"/>
            </a>
            <div class="menu-icon" id="menu-icon">
                <i class="fas fa-bars"></i>
            </div>
            <ul id="nav-menu">
                <li><a href="https://idm-232-yy559.netlify.app/">Home</a></li>
                <li><a href="https://idm-232-yy559.netlify.app/all-recipes">Recipes</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <script>
            document.getElementById("menu-icon").addEventListener("click", function() {
            const navMenu = document.getElementById("nav-menu");
            navMenu.classList.toggle("show-menu");
        });
        </script>
    </header>

    <!-- all recipes -->

    <section id="recipes" class="recipes-section">

        <h2>All Recipes</h2>   
        <div class="recipe-grid" id="recipe-grid">
            <div class="recipe-card">
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <img src="media/steak-fries.jpg" alt="Recipe Image">
                </a>
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <h3>Recipe Header 1</h3>
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="recipe-card">
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <img src="media/steak-fries.jpg" alt="Recipe Image">
                </a>
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <h3>Recipe Header 2</h3>
                </a>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
            </div>
            <div class="recipe-card">
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <img src="media/steak-fries.jpg" alt="Recipe Image">
                </a>
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <h3>Recipe Header 3</h3>
                </a>
                <p>Cras et neque vel nunc vehicula efficitur.</p>
            </div>
            <div class="recipe-card">
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <img src="media/steak-fries.jpg" alt="Recipe Image">
                </a>
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <h3>Recipe Header 1</h3>
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="recipe-card">
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <img src="media/steak-fries.jpg" alt="Recipe Image">
                </a>
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <h3>Recipe Header 2</h3>
                </a>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
            </div>
            <div class="recipe-card">
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <img src="media/steak-fries.jpg" alt="Recipe Image">
                </a>
                <a href="https://idm-232-yy559.netlify.app/recipe-1">
                    <h3>Recipe Header 3</h3>
                </a>
                <p>Cras et neque vel nunc vehicula efficitur.</p>
            </div>
        </div>

    </section>

    <!-- Ask Button -->
    <div class="ask-button">
        <button id="ask-btn">?</button>
    </div>

    <!-- footer -->
    <footer>
        <p>&copy; 2024 Simmer. All Rights Reserved.</p>
    </footer>

    <script src="index.js"></script>
</body>
</html>