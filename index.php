<?php
// BoldJacketWay - Main Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BoldJacketWay — Outerwear Tailoring, Leather Biker Jackets & Overcoats Journal</title>
  <meta name="description" content="BoldJacketWay explores full-grain steerhide biker jackets, double-breasted trench coats, 800g Melton wool overcoats, and technical waterproof membranes.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Syne:wght@700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-jacket {
      background: var(--accent-ochre) !important;
      color: #121214 !important;
      border-color: var(--accent-ochre) !important;
    }
  </style>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Bold<span>JacketWay</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Outerwear Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Heavyweight Tailoring & Weather Armor</span>
        <h1 class="hero-title">Master the Architecture of Bold Outerwear</h1>
        <p class="hero-desc">Discover the synthesis of 1.4mm full-grain steerhide, 800g Melton wool, double-breasted trench gabardine, and YKK heavy brass zips.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-ochre">Explore Outerwear Essays</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Atelier Studio</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Outerwear Craftsmanship & Weather Armor Pillars Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Tailoring Standards</span>
        <h2 class="section-title">The Four Pillars of Outerwear Armor</h2>
      </div>
      <div class="grid-4">
        <div class="jacket-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🧥</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-ochre); margin-bottom: 0.75rem;">1.4mm Full Steerhide</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Uncorrected heavy bull hide providing unmatched abrasion resistance and lifetime patina.</p>
        </div>
        <div class="jacket-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🧶</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-ochre); margin-bottom: 0.75rem;">800g Melton Wool</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Dense felted wool weave shielding against freezing sub-zero gales and wind chill.</p>
        </div>
        <div class="jacket-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🌧️</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-ochre); margin-bottom: 0.75rem;">Gabardine Waterproofing</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">High-density twill weave trench fabric with 20,000mm hydrostatic water column protection.</p>
        </div>
        <div class="jacket-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">🔩</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-ochre); margin-bottom: 0.75rem;">No. 10 Heavy Zippers</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Solid antique brass YKK zippers and hand-riveted belt buckles built for severe stress.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Jacket Silhouette & Outerwear Textile Selector Explorer -->
  <section class="section" id="jacket-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Silhouette Selector</span>
        <h2 class="section-title">The Outerwear Architecture Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select an outerwear silhouette profile to inspect its textile density, hardware, and armor rating:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark jacket-btn active-jacket" data-jacket="Asymmetric Leather Biker Jacket" data-desc="1.4mm full-grain steerhide with lapel snap studs, bi-swing back action pleats, and zippered cuffs." data-durability="9.9/10 Road-Tested Abrasion Armor">Leather Biker Jacket</button>
          <button class="btn btn-outline-dark jacket-btn" data-jacket="Double-Breasted Military Trench" data-desc="100% cotton storm gabardine with gun flap, storm collar latch, D-ring belt, and horn buttons." data-durability="9.8/10 Heavy Rain & Monsoon Defense">Military Trench Coat</button>
          <button class="btn btn-outline-dark jacket-btn" data-jacket="800g Melton Wool Greatcoat" data-desc="Full canvas chest construction, oversized peak lapels, deep welt pockets, and satin lining." data-durability="9.7/10 Sub-Zero Winter Thermal Protection">Melton Wool Greatcoat</button>
          <button class="btn btn-outline-dark jacket-btn" data-jacket="B-3 Shearling Aviator Flight Jacket" data-desc="Heavyweight sheepskin lining with dual throat latch straps, brass side waist adjusters, and thick wool collar." data-durability="9.9/10 Arctic Expedition Warmth">Shearling Aviator Jacket</button>
        </div>
        <div id="jacket-detail">
          <div class="jacket-card" style="border-left: 4px solid var(--accent-ochre);">
            <h3 style="color: var(--accent-ochre); font-size: 1.5rem; margin-bottom: 0.5rem;">Asymmetric Leather Biker Jacket Atelier Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">1.4mm full-grain steerhide with lapel snap studs, bi-swing back action pleats, and zippered cuffs.</p>
            <strong style="color: var(--accent-rust); font-size: 0.95rem;">Empirical Outerwear Armor Rating: 9.9/10 Road-Tested Abrasion Armor</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Full-Grain Steerhide & Heavyweight Melton Wool Spotlight -->
  <section class="section" id="steerhide-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Atelier Metallurgy</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Chest Canvas Structure & Edge Seam Reinforcement</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            The difference between cheap fashion store jackets and heirloom outerwear lies in canvas chest interlinings, heavy-duty thread tensile strength, and YKK brass hardware weight. At BoldJacketWay, we test leather tear resistance and waterproof water column ratings.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🛡️ <strong style="color:var(--text-primary);">Horsehair Canvas Interlining:</strong> Molding to body contours through body heat over 50 wears.</li>
            <li style="margin-bottom: 0.75rem;">🧵 <strong style="color:var(--text-primary);">T-70 Heavy Nylon Thread:</strong> Quadruple-stitched stress seams resisting 120 lbs of direct tension.</li>
            <li style="margin-bottom: 0.75rem;">🧥 <strong style="color:var(--text-primary);">Bi-Swing Back Action Pleats:</strong> Providing 30 degrees of shoulder arm mobility without jacket lifting.</li>
          </ul>
          <a href="about.html" class="btn btn-ochre">Our Outerwear Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?auto=format&fit=crop&w=800&q=80" alt="Heavyweight Leather Biker Jacket Display" style="border-radius: 0px; border: 2px solid var(--border-color); box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Jacket Matcher & Climate Diagnostic Quiz -->
  <section class="section" id="climate-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Climate Diagnostic</span>
        <h2 class="section-title">Outerwear Silhouette Matcher Quiz</h2>
      </div>
      <div class="jacket-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-ochre); margin-bottom: 1rem;">What Is Your Primary Weather Condition & Style Requirement?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="climate-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="1.4mm Asymmetric Leather Biker Jacket: Heavy steerhide + bi-swing back + brass hardware.">
            A. Rugged Wind Protection, Urban Edge & Heavy Leather Road Armor
          </button>
          <button class="climate-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Double-Breasted Storm Gabardine Trench: 20,000mm water column + D-ring belt + storm collar.">
            B. Torrential Downpours, Monsoon Seasons & Formal Business Commuting
          </button>
          <button class="climate-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="800g Melton Wool Greatcoat: Full canvas chest + thermal fleece lining + peak lapels.">
            C. Sub-Zero Winter Blizzards & Heavyweight Tailored Formal Layering
          </button>
        </div>
        <div id="climate-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Water Column Rating & Tensile Tear Resistance Benchmarks Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Outerwear Benchmarks</span>
        <h2 class="section-title">Bold Jacket Way Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="jacket-card" style="text-align: center;">
          <h3 class="metric-number text-ochre" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="jacket-card" style="text-align: center;">
          <h3 class="metric-number text-ochre" data-target="20000" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">mm Hydrostatic Rating</p>
        </div>
        <div class="jacket-card" style="text-align: center;">
          <h3 class="metric-number text-ochre" data-target="800" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Grams Wool Melton</p>
        </div>
        <div class="jacket-card" style="text-align: center;">
          <h3 class="metric-number text-ochre" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Outerwear Tailors & Leather Artisans Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Tailoring Acclaim</span>
        <h2 class="section-title">Endorsements From Master Tailors & Leather Artisans</h2>
      </div>
      <div class="grid-3">
        <div class="jacket-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "BoldJacketWay provides the definitive guide for understanding steerhide tanning, trench gabardine weave density, and jacket shoulder drape."
          </p>
          <strong style="color: var(--accent-ochre); display: block;">— Master Tailor Alistair Vance</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Savile Row Outerwear Cutter, London</span>
        </div>
        <div class="jacket-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their research on Melton wool weight, bi-swing back action pleats, and YKK zipper tension sets a new bar for outerwear journalism."
          </p>
          <strong style="color: var(--accent-ochre); display: block;">— Marcus Thorne</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Leather Garment Artisan, Chicago</span>
        </div>
        <div class="jacket-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital journal for understanding waxed cotton re-waxing, shearling aviator insulation, and four-season capsule tailoring."
          </p>
          <strong style="color: var(--accent-ochre); display: block;">— Elena Rostova</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Apparel Materials Technologist, Berlin</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Outerwear Dispatches & Article Grid -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Outerwear Dispatches</span>
        <h2 class="section-title">Latest Outerwear Essays</h2>
      </div>
      <div class="grid-3">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?auto=format&fit=crop&w=800&q=80" alt="Leather Biker Jacket Anatomy">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Leather Armor</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-anatomy-of-the-leather-biker-jacket-asymmetric-zips-and-steerhide.html">Anatomy of the Leather Biker Jacket</a></h3>
            <p class="blog-excerpt">1.4mm steerhide, asymmetric zip placement, lapel snaps, and action back pleats.</p>
            <a href="blog/the-anatomy-of-the-leather-biker-jacket-asymmetric-zips-and-steerhide.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1544441893-675973e31985?auto=format&fit=crop&w=800&q=80" alt="Double-Breasted Trench Coat">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Trench Coats</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/mastering-the-double-breasted-trench-coat-gabardine-and-epaulettes.html">Mastering the Double-Breasted Trench</a></h3>
            <p class="blog-excerpt">Gabardine weave history, storm flaps, D-ring belts, and weatherproofing.</p>
            <a href="blog/mastering-the-double-breasted-trench-coat-gabardine-and-epaulettes.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1539533018447-63fcce2678e3?auto=format&fit=crop&w=800&q=80" alt="Heavyweight Wool Overcoats">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Wool Overcoats</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/heavyweight-wool-overcoats-melton-vs-cashmere-blend-warmth.html">Heavyweight Wool Overcoats</a></h3>
            <p class="blog-excerpt">800g Melton wool vs cashmere blends, canvas chest construction, and drape.</p>
            <a href="blog/heavyweight-wool-overcoats-melton-vs-cashmere-blend-warmth.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: VIP Outerwear Gazette Newsletter & Footer CTA -->
  <section class="section" id="newsletter" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="jacket-card" style="text-align: center; max-width: 800px; margin: 0 auto; border-color: var(--accent-ochre);">
        <span class="section-subtitle">Outerwear Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem;">Subscribe to The Bold Outerwear Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of leather jacket conditioning, trench coat waterproofing, and tailoring guides.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to BoldJacketWay Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 0px;">
          <button type="submit" class="btn btn-ochre">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Bold<span>JacketWay</span></a>
          <p>BoldJacketWay is a premier editorial platform dedicated to outerwear tailoring, leather biker jackets, heavyweight wool overcoats, and trench coat architecture.</p>
          <p style="margin-top: 1rem; color: var(--accent-ochre);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Outerwear Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Outerwear Focus</h4>
          <p>Deconstructing full-grain steerhide, double-breasted gabardine, Melton wool, waxed cotton re-waxing, and heavy zipper hardware globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 BoldJacketWay. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Outerwear Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
