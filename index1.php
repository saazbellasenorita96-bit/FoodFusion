<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodFusion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>welcome to FoodFusion</h1>
    </header>
    
    
 <nav class="navbar"> 
        <!-- The Hamburger Button for Mobile -->
       <a href="index1.php">
    <img src="japanese.jpg"
         alt="Japanese cuisine"
         style="width: 100px; height: 70px; object-fit: cover;">
</a>

<button class="hamburger" id="hamburger-btn" aria-label="Toggle navigation">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
</button>

        <!-- Navigation Links List -->
        <ul class="nav_links" id="nav-links">
            <li><a href="index1.php">Home</a></li> 
            <li><a href="foodfusion.php">FoodFusion</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="recipe.php">Recipe</a></li>
            <li><a href="community.php">Community</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="culinary.php">Culinary</a></li>
			<li><a href="educational.php">Educational</a></li>
            <li><a href="registration.php">Registration</a></li>
			<li><a href="login.php">login</a></li>
        </ul>
    </nav>
	
	

			
<div class="content">
<h3>Welcome to Saazia</h3>
<img src="2f40a1b5921.jpg" alt="FoodFusion japanese cuisine" style="width: 900px; height: 300px;">
<p>FoodFusion performs the demonstration of Japanese cuisine. 
The team has the potential to share their experiences to help enhance the food&beverages industry. 
One of the best things FoodFusion can do is to give appropriate recipes and accurate information.
</p>
</div>
	
   <script>
   document.getElementById("contactForm").addEventListener("submit", function(event) { 
   
   event.preventDefault(); 
   
   document.getElementById("successMessage").textContent =
   "Thank you! Your message has been sent successfully.";
   
   this.reset();
   });
   </script>
	
	<!-- Cookie Consent -->
<div class="cookie-consent" id="cookieConsent">
    <div class="cookie-content">
        <p>
            We use cookies to improve your experience on FoodFusion.
            By continuing to use our website, you agree to our use of cookies.
        </p>

        <div class="cookie-buttons">
            <button id="acceptCookies">Accept</button>
            <button id="rejectCookies">Reject</button>
        </div>
    </div>
</div>

<script>
const cookieConsent = document.getElementById("cookieConsent");
const acceptCookies = document.getElementById("acceptCookies");
const rejectCookies = document.getElementById("rejectCookies");

if (
    localStorage.getItem("cookieConsent") === "accepted" ||
    localStorage.getItem("cookieConsent") === "rejected"
) {
    cookieConsent.style.display = "none";
}

acceptCookies.addEventListener("click", function() {
    localStorage.setItem("cookieConsent", "accepted");
    cookieConsent.style.display = "none";
});

rejectCookies.addEventListener("click", function() {
    localStorage.setItem("cookieConsent", "rejected");
    cookieConsent.style.display = "none";
});

 
	 <script>
const hamburgerBtn = document.getElementById("hamburger-btn");
const navLinks = document.getElementById("nav-links");

hamburgerBtn.addEventListener("click", function() {
    navLinks.classList.toggle("active");
});
</script>

		
	<footer class="site-footer">
  <div class="container footer-grid">
    <div>
 
      <h2 class="footer-title">Legal</h2>
      <ul class="plain">
           <a href="privacy.html">Privacy Policy</a>
        <li><a href="cookies.php">Cookie Information</a></li>
      </ul>
    </div>

	<ul class="social">
    <li>
        <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
            <img src="insta.png" alt="Instagram" style="width: 50px; height: 50px;">
        </a>
    </li>

    <li>
        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
            <img src="fb11.png" alt="Facebook" style="width: 50px; height: 50px;">
        </a>
    </li>

    <li>
        <a href="https://www.twitter.com/" target="_blank" rel="noopener noreferrer">
            <img src="57766.png" alt="Twitter" style="width: 50px; height: 50px;">
        </a>
    </li>

    <li>
        <a href="https://www.pinterest.com/" target="_blank" rel="noopener noreferrer">
            <img src="Pinterest-logo.png" alt="Pinterest" style="width: 50px; height: 50px;">
        </a>
    </li>

    <li>
        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer">
            <img src="778866.jpg" alt="YouTube" style="width: 50px; height: 50px;">
        </a>
    </li>
</ul>
	
	<p>&copy; 2026 FoodFusion. All rights reserved.</p>
 <p>

    </footer>
</body>
</html>
