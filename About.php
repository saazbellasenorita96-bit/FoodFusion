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
        <h1>Welcome to FoodFusion</h1>
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
	
<section class="japanese-philosophy">

    <h2>Philosophy of Japanese</h2>

    <div class="japanese-philosophy-grid">

        <article class="japanese-philosophy-card">
            <img src="img_126.jpg" alt="Japanese food">
            <div class="japanese-philosophy-text">
                <h3>Philosophy</h3>
                <p>We will get the opportunity to learn new Japanese dishes in the evolving world.</p>
                <p>The Japanese menu is healthy and also inspires us with a balanced diet.</p>
            </div>
        </article>

        <article class="japanese-philosophy-card">
            <img src="history-japanbfood-cuisine.jpg" alt="Japanese cuisine">
            <div class="japanese-philosophy-text">
                <h3>Philosophy</h3>
                <p>At FoodFusion, we appreciate the philosophy behind Japanese cuisine, which focuses on freshness, quality, simplicity, and careful preparation.</p>
                <p>Japanese food is enjoyed around the world for its delicate flavours, fresh ingredients, and beautiful presentation.</p>
            </div>
        </article>

        <article class="japanese-philosophy-card">
            <img src="foodi.jpg" alt="Japanese food">
            <div class="japanese-philosophy-text">
                <h3>Philosophy</h3>
                <p>The traditional menu of Japanese cuisine brings harmony.</p>
            </div>
        </article>

        <article class="japanese-philosophy-card">
            <img src="history.jpg" alt="Japanese history">
            <div class="japanese-philosophy-text">
                <h3>Philosophy</h3>
                <p>The Japanese prefer sushi, and it is the origin of their culture.</p>
            </div>
        </article>

        <article class="japanese-philosophy-card">
            <img src="1.jpg" alt="Japanese culture">
            <div class="japanese-philosophy-text">
                <h3>Philosophy</h3>
                <p>The Japanese prepare food with harmony.</p>
            </div>
        </article>

        <article class="japanese-philosophy-card">
            <img src="images333.jpg" alt="Wabi-sabi culture">
            <div class="japanese-philosophy-text">
                <h3>Wabi-sabi</h3>
                <p>This menu is different in the Japanese tradition.</p>
            </div>
        </article>

        <article class="japanese-philosophy-card">
            <img src="Kiyomi.jpg" alt="Stylish dinner Japanese">
            <div class="japanese-philosophy-text">
                <h3>Stylish dinner</h3>
                <p>A large variety of Japanese menus are available.</p>
            </div>
        </article>

    </div>

</section>

<!-- Value Section -->
<section class="Value">
	<h3>Values of Japanese</h3>

    <div class="Value-carousel">

    <div class="Value-slide">
    <img src="about.p.jpg"alt="Value of Japanese food" style="width: 900px; height: 400px; object-fit: cover;">
    <h3>Values</h3>
    <p>The Japanese use traditional ingredients to enhance the quality of food by adding different flavours.</p>
	 </div>
	 
	  <div class="Value-slide">
    <img src="1-1-1024x576.jpg"alt="Harmony comes first" style="width: 900px; height: 400px; object-fit: cover;">
    <h3>Values</h3>
    <p>The chef strives to bring something of quality for the culinary lover,and also feels proud of their innovation of new food and beverages.</p>
	 </div>
	 
	  <div class="Value-slide">
    <img src="images222.jpg"alt="simplicity is the key" style="width: 900px; height: 400px; object-fit: cover;">
    <h3>Values</h3>
    <p>The Japanese focus on improving their food, and what matters the most is the customer experience.</p>
	 </div>
	 
	 <div class="Value-slide">
    <img src="meal_a.jpg"alt="tradition Japanese" style="width: 900px; height: 400px; object-fit: cover;">
    <h3>Values</h3>
    <p>The Japanese valorise seafood for its flavours.</p>
	 </div>
	 
	 <div class="Value-slide">
    <img src="2222222.jpg"alt="tradition Japanese" style="width: 900px; height: 400px; object-fit: cover;">
    <h3>Values</h3>
    <p>Sushi is very common in the Japanese tradition.</p>
	 </div>
	 
	  <div class="Value-slide">
    <img src="Kiyom.jpg"alt="Seafood Japanese" style="width: 900px; height: 400px; object-fit: cover;">
    <h3>Seafood</h3>
    <p>One of the best menu for the Japanese origin.</p>
	 </div>
	 
	  <button class="prev value-prev" aria-label="Previous Value">
    ❮
      </button>

      <button class="next value-next" aria-label="Next Value">
    ❯
      </button>

    </div>
</section>

<script> 
document.addEventListener("DOMContentLoaded", function () {
	
	// Select the carousel elements 
	const slides = document.querySelectorAll(".Value-slide"); 
	const previousButton = document.querySelector(".value-prev"); 
	const nextButton = document.querySelector(".value-next"); 
	
	let currentSlide = 0; 
	
	// Function to display the selected slide
	function showSlide(index) { 
	slides.forEach((slide, i) => { 
	slide.style.display = i === index ? "block" : "none";
	});
	}
	
	// Next button
	nextButton.addEventListener("click", function () { 
	currentSlide++;
	if (currentSlide >= slides.length) {
		currentSlide = 0; 
		} 
		showSlide(currentSlide); 
		}); 
		// Previous button
		previousButton.addEventListener("click", function () {
			currentSlide--; 
			if (currentSlide < 0) {
				currentSlide = slides.length - 1; 
				}
				showSlide(currentSlide); 
				});
				// Display the first slide when the page loads 
				showSlide(currentSlide); }); 
			</script>


<!-- Team Section -->
<section class="team">
    <h2>Team Work</h2>

    <div class="team-carousel">

        <div class="team-slide">
        <img src="tm1.jpg" alt="Culinary activities" style="width: 900px; height: 400px; object-fit: cover;">
        <h3>Culinary Activities</h3>
        <p>We have the opportunity to learn new Japanese dishes and develop our culinary skills.</p>
        </div>

        <div class="team-slide">
        <img src="tm2.jpg" alt="Team working" style="width: 900px; height: 400px; object-fit: cover;">
        <h3>Teamwork</h3>
        <p>Our team works together to share ideas and createnew culinary experiences.</p>
        </div>
        
		<div class="team-slide">
        <img src="img01.jpg" alt="learning together" style="width: 900px; height: 400px; object-fit: cover;">
        <h3>learning</h3>
        <p>The collaboration of team is effective for performing well.</p>
        </div>
		
		<div class="team-slide">
        <img src="mmmm.jpg" alt="Help the team" style="width: 900px; height: 400px; object-fit: cover;">
        <h3>helping</h3>
        <p>The chef in FoodFusion prepare amazing food based on their skills.</p>
        </div>
		
		<div class="team-slide">
        <img src="Irina-.jpg" alt="sharing expertise" style="width: 900px; height: 400px; object-fit: cover;">
        <h3>sharing</h3>
        <p>The team learn with each other for becoming successful.</p>
        </div>
		
		<div class="team-slide">
        <img src="lesson.jpg" alt="culinary session" style="width: 900px; height: 400px; object-fit: cover;">
        <h3>culinary</h3>
        <p>It is wonderful to prepare food in teams.</p>
        </div>
		
		<div class="team-slide">
        <img src="istockpho.jpg" alt="Topping session" style="width: 900px; height: 400px; object-fit: cover;">
        <h3>Topping</h3>
        <p>The decoration enhances the quality of the food.</p>
        </div>
		
        <button class="prev team-prev" aria-label="Previous team">
            ❮
        </button>

        <button class="next team-next" aria-label="Next team">
            ❯
        </button>

    </div>
</section>





<script>
/* ============================
   TEAM CAROUSEL
   ============================ */

const teamSlides = document.querySelectorAll(".team-slide");
const teamPrev = document.querySelector(".team-prev");
const teamNext = document.querySelector(".team-next");

let teamCurrent = 0;

function showTeamSlide(index) {
    teamSlides.forEach((slide, i) => {
        slide.style.display = i === index ? "block" : "none";
    });
}

teamNext.addEventListener("click", function () {
    teamCurrent++;

    if (teamCurrent >= teamSlides.length) {
        teamCurrent = 0;
    }

    showTeamSlide(teamCurrent);
});

teamPrev.addEventListener("click", function () {
    teamCurrent--;

    if (teamCurrent < 0) {
        teamCurrent = teamSlides.length - 1;
    }

    showTeamSlide(teamCurrent);
});

showTeamSlide(teamCurrent);
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
</script>

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
        <li><a href="privacy.php">Privacy Policy</a></li>
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

		