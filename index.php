<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Safe Path | General Destination &amp; Route Information</title>
      <meta name="description" content="Safe Path provides general destination outlines and geographic context for informational purposes.">
      <meta name="keywords" content="destination information, route context, geographic background, travel considerations">
      <meta name="robots" content="index, follow">
      <meta name="author" content="Safe Path">
      <style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');
:root {
--leather: #7C2D12;
--oasis: #0284C7;
--hero-start: #FEF08A;
--hero-end: #F97316;
--dune: #FFF7ED;
--rug: #FACC15;
--night: #1C1917;
--henna: #DC2626;
--text-main: #292524;
}

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	scroll-behavior: smooth;
}

body {
	font-family: 'DM Sans', sans-serif;
	background-color: var(--dune);
	color: var(--text-main);
	line-height: 1.6;
	overflow-x: hidden;
}

/* Canvas Swaying Animation */
@keyframes sway {
	0% {
		transform: rotate(0.2deg) translateY(0);
	}

	50% {
		transform: rotate(-0.2deg) translateY(2px);
	}

	100% {
		transform: rotate(0.2deg) translateY(0);
	}
}

.sway-container {
	animation: sway 8s ease-in-out infinite;
}

/* Navigation */
nav {
	position: sticky;
	top: 0;
	z-index: 1000;
	background: var(--leather);
	padding: 1rem 2rem;
	display: flex;
	justify-content: space-between;
	align-items: center;
	box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
	border-bottom: 3px solid var(--henna);
}

.logo {
	font-size: 1.5rem;
	font-weight: 700;
	color: #ffffff;
	text-decoration: none;
	letter-spacing: 1px;
}

.nav-links {
	display: flex;
	gap: 1.5rem;
}

.nav-links a {
	color: #ffffff;
	text-decoration: none;
	font-size: 0.95rem;
	font-weight: 500;
	transition: color 0.3s;
}

.nav-links a:hover {
	color: var(--oasis);
}

/* Canvas Tension Curves */
.curve-top {
	position: relative;
	height: 100px;
	width: 100%;
	background: transparent;
	margin-bottom: -1px;
}

.curve-bottom {
	position: relative;
	height: 100px;
	width: 100%;
	background: transparent;
	margin-top: -1px;
}

/* Hero Section */
#home {
	background: linear-gradient(135deg, var(--hero-start), var(--hero-end));
	padding: 100px 2rem;
	text-align: center;
	position: relative;
}

#home h1 {
	font-size: 2.5rem;
	margin-bottom: 1rem;
	color: var(--night);
}

#home p {
	max-width: 800px;
	margin: 0 auto 2rem;
	font-size: 1.15rem;
	color: var(--night);
}

.cta-button {
	display: inline-block;
	background: var(--leather);
	color: white;
	padding: 0.8rem 2rem;
	text-decoration: none;
	border-radius: 4px;
	font-weight: 600;
	transition: transform 0.2s;
}

.cta-button:hover {
	transform: translateY(-2px);
}

.disclosure-tag {
	display: block;
	margin-top: 2rem;
	font-size: 0.85rem;
	font-style: italic;
	opacity: 0.8;
}

/* Packages Section */
#packages {
	padding: 4rem 2rem;
	background: var(--rug);
	position: relative;
}

.section-heading {
	text-align: center;
	font-size: 2rem;
	margin-bottom: 3rem;
	color: var(--night);
}

.grid-container {
	max-width: 1200px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
	gap: 2rem;
}

.card {
	background: white;
	border-radius: 8px;
	overflow: hidden;
	box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
	transition: transform 0.3s;
	display: flex;
	flex-direction: column;
}

.card:hover {
	transform: scale(1.02);
}

.card img {
	width: 100%;
	height: 200px;
	object-fit: cover;
}

.card-content {
	padding: 1.5rem;
	flex-grow: 1;
}

.card-category {
	font-size: 0.75rem;
	text-transform: uppercase;
	color: var(--oasis);
	font-weight: 700;
	margin-bottom: 0.5rem;
}

.card-title {
	font-size: 1.25rem;
	margin-bottom: 0.5rem;
	color: var(--night);
}

.card-duration {
	font-size: 0.85rem;
	color: #666;
	margin-bottom: 1rem;
}

.card-desc {
	font-size: 0.95rem;
	margin-bottom: 1.5rem;
}

.card-btn {
	display: inline-block;
	text-align: center;
	background: var(--henna);
	color: white;
	text-decoration: none;
	padding: 0.6rem 1rem;
	border-radius: 4px;
	font-weight: 500;
	margin-top: auto;
}

/* About Us Section */
#about-us {
	padding: 6rem 2rem;
	max-width: 800px;
	margin: 0 auto;
	text-align: justify;
}

#about-us p {
	margin-bottom: 1.5rem;
}

/* Contact Section */
#contact-us {
	background: white;
	padding: 6rem 2rem;
}

.contact-container {
	max-width: 600px;
	margin: 0 auto;
}

.form-group {
	margin-bottom: 1.5rem;
}

label {
	display: block;
	margin-bottom: 0.5rem;
	font-weight: 600;
}

input,
textarea {
	width: 100%;
	padding: 0.8rem;
	border: 1px solid #ddd;
	border-radius: 4px;
	font-family: inherit;
}

.submit-btn {
	background: var(--leather);
	color: white;
	border: none;
	padding: 1rem 2rem;
	cursor: pointer;
	width: 100%;
	font-weight: 700;
	border-radius: 4px;
}

.contact-disclaimer {
	margin-top: 1.5rem;
	font-size: 0.85rem;
	color: #666;
	text-align: center;
}

/* Privacy Policy */
#privacy-policy {
	padding: 6rem 2rem;
	background: #f9f9f9;
}

.privacy-content {
	max-width: 900px;
	margin: 0 auto;
}

.privacy-content h3 {
	margin: 2rem 0 1rem;
}

/* Footer */
footer {
	background: var(--night);
	color: #ffffff;
	padding: 4rem 2rem;
	text-align: center;
}

.footer-disclaimer {
	max-width: 700px;
	margin: 0 auto 2rem;
	font-size: 0.85rem;
	opacity: 0.8;
}

.footer-links {
	margin-bottom: 2rem;
}

.footer-links a {
	color: var(--hero-start);
	text-decoration: none;
	margin: 0 10px;
}

/* Mobile Adjustments */
@media (max-width: 768px) {
	.nav-links {
		display: none;
	}

	#home h1 {
		font-size: 2rem;
	}
} </style>
   </head>
   <body>
      <nav>
         <a href="#home" class="logo">Safe Path</a>
         <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about-us">About Us</a>
            <a href="#packages">Packages</a>
            <a href="#contact-us">Contact Us</a>
            <a href="#privacy-policy">Privacy Policy</a>
         </div>
      </nav>
      <section id="home">
         <div class="sway-container">
            <h1>Safe Path</h1>
            <p>
               Safe Path serves as an independent informational platform providing general destination and route context to support geographic awareness and understanding only.
            </p>
            <a href="#packages" class="cta-button">View Destination Listings</a>
            <span class="disclosure-tag">Safe Path is an independent informational platform providing general destination and route reference content only.</span>
         </div>
      </section>
      <!-- Canvas Curve Divider -->
      <svg class="curve-top" viewBox="0 0 1440 100" preserveAspectRatio="none" style="fill: var(--rug);">
         <path d="M0,100 C480,0 960,0 1440,100 L1440,100 L0,100 Z"></path>
      </svg>
      <section id="packages">
         <h2 class="section-heading">Destination Outlines</h2>
         <div class="grid-container">
            <!-- Card 1 -->
            <div class="card">
               <img src="https://yonderpath.site/media/3.jpg" alt="">
               <div class="card-content">
                  <div class="card-category">Europe</div>
                  <h3 class="card-title">Helsinki</h3>
                  <p class="card-duration">Typical Duration: 3-5 Days</p>
                  <p class="card-desc">An overview of the maritime context and urban geographic layout of this Nordic coastal hub, highlighting historical context and seasonal light variations.</p>
                  <a href="#contact-us" class="card-btn">Contact Us</a>
               </div>
            </div>
            <!-- Card 2 -->
            <div class="card">
               <img src="https://yonderpath.site/media/5.jpg" alt="">
               <div class="card-content">
                  <div class="card-category">East Asia</div>
                  <h3 class="card-title">Busan</h3>
                  <p class="card-duration">Typical Duration: 4-6 Days</p>
                  <p class="card-desc">General information regarding the mountainous coastal terrain and port history of South Korea's second-largest metropolitan area.</p>
                  <a href="#contact-us" class="card-btn">Contact Us</a>
               </div>
            </div>
            <!-- Card 3 -->
            <div class="card">
               <img src="https://yonderpath.site/media/4.jpg" alt="">
               <div class="card-content">
                  <div class="card-category">Middle East</div>
                  <h3 class="card-title">Salalah</h3>
                  <p class="card-duration">Typical Duration: 3-5 Days</p>
                  <p class="card-desc">Geographic background on the Dhofar region, known for its unique monsoon-influenced landscape and ancient frankincense trade history.</p>
                  <a href="#contact-us" class="card-btn">Contact Us</a>
               </div>
            </div>
            <!-- Card 4 -->
            <div class="card">
               <img src="https://yonderpath.site/media/6.jpg" alt="">
               <div class="card-content">
                  <div class="card-category">Latin America</div>
                  <h3 class="card-title">Valparaíso</h3>
                  <p class="card-duration">Typical Duration: 2-4 Days</p>
                  <p class="card-desc">Route context concerning the steep funicular systems and colorful hillside architecture typical of this historic Chilean port city.</p>
                  <a href="#contact-us" class="card-btn">Contact Us</a>
               </div>
            </div>
            <!-- Card 5 -->
            <div class="card">
               <img src="https://yonderpath.site/media/1.jpg" alt="">
               <div class="card-content">
                  <div class="card-category">North America</div>
                  <h3 class="card-title">Minneapolis</h3>
                  <p class="card-duration">Typical Duration: 3-5 Days</p>
                  <p class="card-desc">A destination outline focusing on the Mississippi River connections and the extensive chain of lakes within the urban geographic framework.</p>
                  <a href="#contact-us" class="card-btn">Contact Us</a>
               </div>
            </div>
            <!-- Card 6 -->
            <div class="card">
               <img src="https://yonderpath.site/media/2.jpg" alt="">
               <div class="card-content">
                  <div class="card-category">Africa</div>
                  <h3 class="card-title">Gaborone</h3>
                  <p class="card-duration">Typical Duration: 2-4 Days</p>
                  <p class="card-desc">Historical context of the capital of Botswana providing a general overview of its development and proximity to diverse wildlife habitats.</p>
                  <a href="#contact-us" class="card-btn">Contact Us</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Canvas Curve Divider -->
      <svg class="curve-bottom" viewBox="0 0 1440 100" preserveAspectRatio="none" style="fill: var(--rug); transform: rotate(180deg);">
         <path d="M0,100 C480,0 960,0 1440,100 L1440,100 L0,100 Z"></path>
      </svg>
      <section id="about-us">
         <h2 class="section-heading">About Us</h2>
         <div class="sway-container">
           <p>
   Safe Path is an informational platform created to provide clear and neutral insights about destinations around the world. Our goal is to help readers understand the geographic background and cultural context of different locations through simple and accessible reference content.
</p>
<p>
   As an independent platform, we focus on general information and commonly known routes for educational and awareness purposes. Safe Path does not offer advice, recommendations, or travel services. All content is presented from a neutral and non-commercial perspective, with an emphasis on factual and descriptive information.
</p>
<p>
   All information provided is general in nature and intended for reference purposes only. We encourage you to explore our destination overviews to gain a broader understanding of the diverse regions across the world.
</p>
         </div>
      </section>
      <section id="contact-us">
         <div class="contact-container">
            <h2 class="section-heading">Contact Us</h2>
            <form id="contactForm">
               <div class="form-group">
                  <label>Name</label>
                  <input type="text" required="">
               </div>
               <div class="form-group">
                  <label>Email</label>
                  <input type="email" required="">
               </div>
               <div class="form-group">
                  <label>Preferred Destination</label>
                  <input type="text">
               </div>
               <div class="form-group">
                  <label>Message</label>
                  <textarea rows="5" required=""></textarea>
               </div>
               <button type="submit" class="submit-btn">Send Inquiry</button>
            </form>
            <div id="formSuccess" style="display:none; text-align:center; margin-top:1rem; font-weight:700;">
               Thank you! We’ll be in touch soon.
            </div>
            <p class="contact-disclaimer">
               Messages are reviewed for informational inquiries only. Requests related to bookings, pricing, or availability are not supported. Contact: <a href="mailto:support@yonderpath.site">support@yonderpath.site</a>
            </p>
         </div>
      </section>
      <section id="privacy-policy">
         <div class="privacy-content">
         <h2 class="section-heading">Privacy Policy</h2>
<p>Safe Path respects your privacy and is committed to maintaining a simple, non-commercial informational platform. We do not use personal data for advertising, remarketing, profiling, or behavioral tracking.</p>

<h3>Introduction</h3>
<p>This Privacy Policy explains how Safe Path collects and handles information through our informational website. Our goal is to provide a safe and neutral environment for visitors seeking general destination knowledge.</p>

<h3>Information We Collect</h3>
<p>We only collect information that users voluntarily provide through our contact form, such as names and email addresses. This information is collected solely for the purpose of responding to inquiries.</p>

<h3>How We Use Information</h3>
<p>The information you provide is used only to respond to your messages or questions. We do not sell, rent, or share your personal information with third parties for commercial purposes.</p>

<h3>Data Protection &amp; Security</h3>
<p>We apply reasonable security measures to help protect the information submitted to our website from unauthorized access or misuse.</p>

<h3>Cookies &amp; Tracking</h3>
<p>Safe Path does not use cookies or similar technologies for tracking user behavior or advertising purposes.</p>

<h3>Third-Party Services</h3>
<p>Our website does not include third-party advertising or tracking services. We aim to keep the platform simple and free from commercial integrations.</p>

<h3>User Rights</h3>
<p>You have the right to request the removal of any personal information you have shared with us through our contact form.</p>

<h3>External Links</h3>
<p>Our website may contain links to external sites for general reference. We are not responsible for the privacy practices or content of those external websites.</p>

<h3>Children’s Privacy</h3>
<p>Safe Path is intended for a general audience. We do not knowingly collect personal information from children.</p>

<h3>Policy Updates</h3>
<p>We may update this Privacy Policy from time to time to reflect changes in our practices or content.</p>

<p><strong>Last updated: <span id="currentDate">February 2026</span></strong></p>
         </div>
      </section>
      <footer>
         <div class="footer-disclaimer">

Safe Path is an independent informational platform. We do not sell, arrange, recommend, or facilitate any travel services, accommodations, transportation, or experiences. All content provided on this website is intended for general geographic and cultural reference purposes only.
         </div>
         <div class="footer-links">
            <a href="mailto:support@yonderpath.site">support@yonderpath.site</a> | 
            <a href="#privacy-policy">Privacy Policy</a>
         </div>
         <div class="copyright">
            © <span id="year">2026</span> — Safe Path
         </div>
      </footer>
      <script>
         // Smooth scrolling for navigation
         document.querySelectorAll('a[href^="#"]').forEach(anchor => {
             anchor.addEventListener('click', function (e) {
                 e.preventDefault();
                 document.querySelector(this.getAttribute('href')).scrollIntoView({
                     behavior: 'smooth'
                 });
             });
         });
         
         // Contact form handling
         document.getElementById('contactForm').addEventListener('submit', function(e) {
             e.preventDefault();
             this.style.display = 'none';
             document.getElementById('formSuccess').style.display = 'block';
         });
         
         // Dynamic Year and Date
         const now = new Date();
         document.getElementById('year').textContent = now.getFullYear();
         
         const monthNames = ["January", "February", "March", "April", "May", "June",
           "July", "August", "September", "October", "November", "December"
         ];
         document.getElementById('currentDate').textContent = `${monthNames[now.getMonth()]} ${now.getFullYear()}`;
      </script>
   </body>
   tawk to: <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69a14dbe7fa0b81c34870128/1jif1fcln';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--> 
</html>