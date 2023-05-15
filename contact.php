<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/recipe logo.png" alt="Recipe Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="category.php">Category</a>
                    </li>
                    <li>
                        <a href="recipes.php">Recipes</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->




<!--contact page starts here -->

<div style="max-width: 500px; margin: 20px auto; padding: 20px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 5px;">
    <h1 style="text-align: center; margin-bottom: 20px;">Contact Us</h1>
    <form>
      <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px;">Name:</label>
      <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; resize: vertical;">

      <label for="email" style="display: block; font-weight: bold; margin-bottom: 5px;">Email:</label>
      <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; resize: vertical;">

      <label for="message" style="display: block; font-weight: bold; margin-bottom: 5px;">Message:</label>
      <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; resize: vertical;"></textarea>

      <input type="submit" value="Submit" style="width: 100%; padding: 10px; background-color: #4caf50; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
    </form>
  </div>






<!-- social Section Starts Here -->
<section class="social">
    <div class="container text-center">
        <ul>
            <li>
                <a href="https://www.linkedin.com/in/hansu-malviya-021a6823a/"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
            </li>
            <li>
                <a href="https://www.instagram.com/its_hansu03/"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
            </li>
            <li>
                <a href="https://twitter.com/HansuMalviya03"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
            </li>
        </ul>
    </div>
</section>
<!-- social Section Ends Here -->

<!-- footer Section Starts Here -->
<section class="footer">
    <div class="container text-center">
        <p>All rights reserved. Designed By <a href="#">Hansu Malviya</a></p>
    </div>
</section>
<!-- footer Section Ends Here -->

</body>
</html>