<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop | TurfZone</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
  <div class="container">
    <div class="menu-icon" onclick="openSidebar()">&#9776;</div>
    <div class="logo">TurfZone</div>

    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="turfs.php">Turfs</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="index.php#about">About Us</a></li>
      <li><a href="contact.php">Contact</a></li>
      <?php if(isset($_SESSION['user_email'])) { ?>
        <li><a href="profile.php">My Profile</a></li>
      <?php } else { ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php" class="register-btn">Register</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>

<div id="sidebar" class="sidebar">
  <div class="sidebar-header">
    <h2>TurfZone</h2>
    <span class="close-btn" onclick="closeSidebar()">&times;</span>
  </div>

  <a href="index.php">Home</a>
  <a href="index.php#about">About Us</a>
  <a href="turfs.php">Turfs</a>
  <a href="events.php">Events</a>
  <a href="shop.php">Shop</a>
  <a href="index.php#facilities">Our Facilities</a>
  <a href="index.php#gallery">Turf Gallery</a>
  <a href="index.php#sports">Choose Sport</a>
  <a href="contact.php">Contact</a>
</div>

<div id="overlay" class="overlay" onclick="closeSidebar()"></div>

<section class="shop-hero">
  <h1>Sports Shop</h1>
  <p>Buy or Rent sports equipment for your game</p>
</section>

<section class="shop-section">
  <h2>Football Equipments</h2>

  <div class="shop-container">
    <div class="shop-card">
      <img src="turf/football.jpeg" alt="Professional Football">
      <h3>Professional Football</h3>
      <p>₹900</p>
      <a href="https://in.puma.com/in/en/pd/future-2-football/054760?size=0140&swatch=03&utm_source=BING-DDA&utm_medium=DSP&utm_campaign=DSP_BING_DDA_IN_PMAX_agency_1000067495857508873&msclkid=53c733d0631f1f51f2765a00ae0f2ef9" target="_blank" class="buy-btn">Buy</a>
    </div>

    <div class="shop-card">
      <img src="turf/shin_guard.jpeg" alt="Shin Guards">
      <h3>Shin Guards</h3>
      <p>₹600</p>
      <a href="https://in.puma.com/in/en/pd/neymar-jr--ultra-light-football-strap-shinguards/030993?size=0140&swatch=01&utm_source=BING-DDA&utm_medium=DSP&utm_campaign=DSP_BING_DDA_IN_PMAX_agency_1000067495857508873&msclkid=37d58382b85b19e79839ea5268a89ea5" target="_blank" class="buy-btn">Buy</a>
    </div>

    <div class="shop-card">
      <img src="turf/socks.jpeg" alt="Football Socks">
      <h3>Football Socks</h3>
      <p>₹600</p>
      <a href="https://www.amazon.in/adidas-Unisex-Polyester-Football-Regular/dp/B0B1JC3FYJ/ref=sr_1_6?dib=eyJ2IjoiMSJ9.i6IskFkPf4cvbpzEFZjFk6nGsOw2-wfTNjh6bCdfg4XtvhjMoE0n-EIE6zIcPnr69Esa4I6nTY_wd3KBQTiEMVLdrIn-ON7uUd5QcVREpe4ai1lqMoPc17G6z9BedW9ZuxvZ7T2uEm2Hhk4vkokhydbZQgfiy4ay0CRsCnZ3ZHYHfFzCQtV4MhPy7asqXov2NtOmlCVmos_ffVYHFGG-TWs5YO2EZBFKfZzWZMIXGbhl6pUOoSwgEicHI29Iu-97GfgZ3h0B26RfRUUrd5HSBxaq2ADnQ7f9Yh4QLN9XLEI.gBkSVHDj04DXEIM0tRnnzX95TULtLjy-FhkmSwQ3L4Y&dib_tag=se&keywords=football+socks&qid=1775292969&sr=8-6" target="_blank" class="buy-btn">Buy</a>
    </div>

    <div class="shop-card">
      <img src="turf/shoes.jpeg" alt="Football Shoes">
      <h3>Football Shoes</h3>
      <p>₹1000</p>
      <a href="https://in.puma.com/in/en/pd/attacanto-ii-fg-ag-youth-football-boots/108496?size=0270&swatch=08&utm_source=BING-DDA&utm_medium=DSP&utm_campaign=DSP_BING_DDA_IN_PMAX_agency_1000067495857508873&msclkid=439081254d0b1e43c63fe8f59f775474" target="_blank" class="buy-btn">Buy</a>
    </div>
  </div>
</section>

<section class="shop-section">
  <h2>Cricket Equipments</h2>

  <div class="shop-container">
    <div class="shop-card">
      <img src="turf/bat.jpeg" alt="Cricket Bat">
      <h3>Cricket Bat</h3>
      <p>₹2500</p>
      <a href="https://www.amazon.in/English-Cricket-Professional-Natural-Leather/dp/B0GQZYRFRM/ref=sr_1_1?dib=eyJ2IjoiMSJ9.GHKjFmrnrUKsBJ3Q_DGaIFuhvJ00pdwNrkPrdURUCofYXgiulI6X1jfNzAkX25b5JlcF0XSEMdruV7OEZjmW3aEgsOUe8BcpP6266JUUbjgvyPFAeru1LohqycVn29j_Z9dtIwGiIVEip49cZg64taGQziJkMMxBwttqxIHGsujx1nJQ4phm2Ym-YByE-Wfoh2rj9SG6XttCSE02qW95WW2hQVVDht9k3fyxDAQG4VeLT_MDuvca_IuR94e3oKGcxD2-zuFSrRZFCYceFMFcbPXUwKKiLp7GTCAAGwrI4pc.78KzNEO07wl6sAoeHq1jsA92KfB5OYWuHG1raVHJImc&dib_tag=se&qid=1775293179&refinements=p_36%3A200000-499900&s=sports&sr=1-1" target="_blank" class="buy-btn">Buy</a>
    </div>

    <div class="shop-card">
      <img src="turf/ball.jpeg" alt="Cricket Ball">
      <h3>Cricket Ball</h3>
      <p>₹300</p>
      <a href="https://www.amazon.in/SG-Club-Leather-Balls-Pack/dp/B0037I84XW/ref=sr_1_1?dib=eyJ2IjoiMSJ9.ud2q11VDaE3O8If5uI0zJOQDEUsQujpkzSR953tHhTx0u8V2QmN8Bw56RfNwTztj4rjK4E1KOtSTKRtDZUD9aoUQeiau6hl6LhcCX2GJejHA8CABdsEIlkF1tw67hhfwChAq1p_hi3yXZarHC2UznMnHDStX-KbM_BDIssMdG8AikboBRYMblA-IHxQr9WXRBPzxOyluyZ00kFE8U-BwUs9yvWzcdKTIXh4UKosNYK2WeI-2iXtxG-ePCZaEpJhpTxaH3Uimpb_MruaBUrvheT2PzvvN2MKqnEAiDf4pyYw.39LPfY2Vpt48QbVQS9zUVwims-7W3m6oYdDHLdGeQVE&dib_tag=se&qid=1775293307&refinements=p_36%3A1318506031&s=sports&sr=1-1" target="_blank" class="buy-btn">Buy</a>
    </div>

    <div class="shop-card">
      <img src="turf/wicket.jpeg" alt="Wickets">
      <h3>Wickets</h3>
      <p>₹500</p>
      <a href="https://www.amazon.in/Lifelong-Protective-Standard-Professional-Training/dp/B0DYF1TCLQ/ref=sr_1_3?crid=38ZL29A9D3V42&dib=eyJ2IjoiMSJ9.s872IuQvvLhuaSvSo_xPCNrPKAkmLscsI1CNwI0yeqlJw82GObogX2prHzDrHL2JBJQPcRK7tn2ZhjCKBPpaDFX2W6Ihc0trGOfOb4aDNxQphdK8DZePXxo0gLEYLv-Pf3TSeb-rCp3-ioq7RnYA0-fK1Ejh5z6KZRo21biFneU_nQSb9jn1tmjARQWKJsdYgwSzXyEa26QJmqfOBCg3djYfntiPNC4_b6lOEuYoeiiaUfoEtrJluuNqbcd4928VLfmlmgNVmLWJmTzGpkPX-_Vanwj5eosv2tQDlunOy3I.3tk940sOEX0V5FpcYGqY6xEHhrP-hDOKU8zryFhbIzo&dib_tag=se&keywords=wickets+profesional+wood&qid=1775293399&s=sports&sprefix=wickets+profesional+woo%2Csporting%2C356&sr=1-3" target="_blank" class="buy-btn">Buy</a>
    </div>

    <div class="shop-card">
      <img src="turf/kitbag.jpeg" alt="Kit Bag">
      <h3>Kit Bag</h3>
      <p>₹1500</p>
      <a href="https://www.amazon.in/WHACKK-Condor-Cricket-Backpack-Compartment/dp/B0F94658L9/ref=sxin_14_pa_sp_search_thematic_sspa?content-id=amzn1.sym.7e2c8ac4-9f12-4bcd-9497-a8ae54bc8764%3Aamzn1.sym.7e2c8ac4-9f12-4bcd-9497-a8ae54bc8764&crid=16B6EUJVM0BWG&cv_ct_cx=kit%2Bbag%2Bcricket&keywords=kit%2Bbag%2Bcricket&pd_rd_i=B0F94658L9&pd_rd_r=9a3c499e-184d-44b2-931e-6150ccd9cc11&pd_rd_w=s570l&pd_rd_wg=jwWiM&pf_rd_p=7e2c8ac4-9f12-4bcd-9497-a8ae54bc8764&pf_rd_r=H8F13Q6HF04AT3MWP5RN&qid=1775293458&s=sports&sbo=RZvfv%2F%2FHxDF%2BO5021pAnSA%3D%3D&sprefix=kit%2Bbag%2Bcricket%2Csporting%2C396&sr=1-3-66673dcf-083f-43ba-b782-d4a436cc5cfb-spons&aref=Fh9Plw8FVX&sp_csd=d2lkZ2V0TmFtZT1zcF9zZWFyY2hfdGhlbWF0aWM&th=1" target="_blank" class="buy-btn">Buy</a>
    </div>
  </div>
</section>

<script>
function openSidebar() {
  document.getElementById("sidebar").style.left = "0";
  document.getElementById("overlay").style.display = "block";
  document.body.style.overflow = "hidden";
}

function closeSidebar() {
  document.getElementById("sidebar").style.left = "-340px";
  document.getElementById("overlay").style.display = "none";
  document.body.style.overflow = "auto";
}
</script>

</body>
</html>