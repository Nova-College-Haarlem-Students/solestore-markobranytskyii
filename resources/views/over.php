<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Over ons – SoleStore</title>
  <style>
    /* ===== SoleStore – CSS ===== */
    :root {
      --zwart: #111111;
      --wit: #ffffff;
      --grijs: #f3f3f1;
      --tekst-licht: #6b6b6b;
      --accent: #ff4d1a;
      --rand: #e2e2de;
      --radius: 14px;
    }
 
    * { box-sizing: border-box; margin: 0; padding: 0; }
 
    body {
      font-family: "Helvetica Neue", Arial, sans-serif;
      color: var(--zwart);
      background: var(--wit);
      line-height: 1.6;
    }
 
    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }
 
    .container { width: min(1100px, 92%); margin: 0 auto; }
 
    /* ===== Header / navigatie ===== */
    header {
      border-bottom: 1px solid var(--rand);
      position: sticky;
      top: 0;
      background: var(--wit);
      z-index: 10;
    }
    .nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 70px;
    }
    .logo {
      font-size: 1.5rem;
      font-weight: 900;
      letter-spacing: -0.5px;
    }
    .logo span { color: var(--accent); }
    .nav ul { display: flex; gap: 28px; list-style: none; }
    .nav ul a { font-weight: 600; padding: 6px 0; border-bottom: 2px solid transparent; }
    .nav ul a:hover,
    .nav ul a.actief { border-bottom-color: var(--accent); }
    .nav-knoppen { display: flex; gap: 10px; }
 
    /* ===== Knoppen ===== */
    .knop {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 999px;
      font-weight: 700;
      border: 2px solid var(--zwart);
      background: var(--zwart);
      color: var(--wit);
      cursor: pointer;
      font-size: 0.95rem;
      transition: background .2s, color .2s;
    }
    .knop:hover { background: var(--accent); border-color: var(--accent); }
    .knop.leeg { background: transparent; color: var(--zwart); }
    .knop.leeg:hover { background: var(--zwart); color: var(--wit); border-color: var(--zwart); }
 
    /* ===== Secties ===== */
    section { padding: 70px 0; }
    .sectie-titel {
      display: flex;
      justify-content: space-between;
      align-items: end;
      margin-bottom: 30px;
    }
    .sectie-titel h2 { font-size: 2rem; font-weight: 900; letter-spacing: -0.5px; }
    .sectie-titel a { font-weight: 700; color: var(--accent); }
 
    /* ===== Over-pagina ===== */
    .twee-kolommen {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 50px;
      align-items: center;
    }
    .twee-kolommen h2 { font-size: 2rem; font-weight: 900; margin-bottom: 15px; }
    .twee-kolommen p { color: var(--tekst-licht); margin-bottom: 14px; }
    .blok-beeld {
      background: var(--zwart);
      color: var(--wit);
      border-radius: var(--radius);
      aspect-ratio: 4 / 3;
      display: grid;
      place-items: center;
      font-size: 6rem;
    }
    .cijfers {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      text-align: center;
    }
    .cijfer { padding: 30px 10px; border: 1px solid var(--rand); border-radius: var(--radius); }
    .cijfer strong { display: block; font-size: 2.4rem; font-weight: 900; color: var(--accent); }
    .cijfer span { color: var(--tekst-licht); font-size: .9rem; }
 
    .waarden { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
    .waarde { background: var(--grijs); border-radius: var(--radius); padding: 28px; }
    .waarde .icoon { font-size: 2rem; }
    .waarde h3 { margin: 10px 0 6px; }
    .waarde p { color: var(--tekst-licht); font-size: .95rem; }
 
    .team { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; }
    .lid { text-align: center; }
    .lid .avatar {
      width: 120px; height: 120px; border-radius: 50%;
      background: var(--accent); color: var(--wit);
      display: grid; place-items: center;
      font-size: 2.4rem; font-weight: 900;
      margin: 0 auto 14px;
    }
    .lid span { color: var(--tekst-licht); font-size: .9rem; }
 
    /* ===== Contact-pagina ===== */
    .contact-raster {
      display: grid;
      grid-template-columns: 1fr 1.4fr;
      gap: 40px;
    }
    .contact-info { display: flex; flex-direction: column; gap: 16px; }
    .info-kaart { background: var(--grijs); border-radius: var(--radius); padding: 22px; }
    .info-kaart h3 { font-size: 1rem; margin-bottom: 4px; }
    .info-kaart p { color: var(--tekst-licht); font-size: .95rem; }
    .openingstijden { width: 100%; font-size: .9rem; color: var(--tekst-licht); border-collapse: collapse; }
    .openingstijden td { padding: 3px 0; }
    .openingstijden td:last-child { text-align: right; color: var(--zwart); font-weight: 600; }
 
    form {
      border: 1px solid var(--rand);
      border-radius: var(--radius);
      padding: 30px;
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    form h2 { font-size: 1.5rem; font-weight: 900; }
    .rij { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
    label { font-weight: 700; font-size: .9rem; display: block; margin-bottom: 6px; }
    input, select, textarea {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid var(--rand);
      border-radius: 10px;
      font: inherit;
      background: var(--wit);
    }
    input:focus, select:focus, textarea:focus { outline: 2px solid var(--accent); border-color: transparent; }
    textarea { min-height: 140px; resize: vertical; }
    .checkbox { display: flex; gap: 10px; align-items: center; font-size: .9rem; color: var(--tekst-licht); }
    .checkbox input { width: auto; }
 
    .faq details {
      border-bottom: 1px solid var(--rand);
      padding: 18px 0;
    }
    .faq summary { font-weight: 700; cursor: pointer; }
    .faq details p { color: var(--tekst-licht); margin-top: 10px; }
 
    /* ===== Footer ===== */
    footer { background: var(--zwart); color: #bdbdbd; padding: 50px 0 25px; margin-top: 40px; }
    .footer-raster { display: grid; grid-template-columns: 2fr 1fr; gap: 30px; }
    footer .logo { color: var(--wit); margin-bottom: 10px; display: inline-block; }
    footer h4 { color: var(--wit); margin-bottom: 12px; }
    footer ul { list-style: none; display: flex; flex-direction: column; gap: 6px; }
    footer a:hover { color: var(--accent); }
    .copyright { border-top: 1px solid #2a2a2a; margin-top: 35px; padding-top: 20px; font-size: .85rem; text-align: center; }
 
    /* ===== Responsief ===== */
    @media (max-width: 800px) {
      .nav ul { gap: 18px; }
      .twee-kolommen, .contact-raster { grid-template-columns: 1fr; }
      .cijfers { grid-template-columns: repeat(2, 1fr); }
      .waarden { grid-template-columns: 1fr; }
      .footer-raster { grid-template-columns: 1fr 1fr; }
      .rij { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
 
  <header>
    <nav class="container nav">
      <a href="over.html" class="logo">Sole<span>Store</span></a>
      <ul>
        <li><a href="over.html" class="actief">Over ons</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>
 
  <main>
    <div class="pagina-kop">
      <div class="container">
        <h1>Over SoleStore</h1>
        <p>Van sneakerliefhebbers, voor sneakerliefhebbers.</p>
      </div>
    </div>
 
    <!-- Ons verhaal -->
    <section>
      <div class="container twee-kolommen">
        <div>
          <h2>Ons verhaal</h2>
          <p>SoleStore is opgericht door Jayden Mulder, die al van jongs af aan sneakers verzamelt. Wat begon als een hobby groeide uit tot een webshop waar je de mooiste modellen van Nike, Adidas, New Balance, Asics en kleinere merken op één plek vindt.</p>
          <p>Bij ons zie je van elke sneaker het merk, de kleurstelling, het jaar waarin hij uitkwam en een duidelijke beschrijving. Zo weet je precies wat je koopt.</p>
          <p>We vinden eerlijkheid belangrijk. Daarom laten we bij elke prijs zien vanaf wanneer die geldt, en in je bestelgeschiedenis zie je altijd wat je destijds betaald hebt.</p>
        </div>
        <div class="blok-beeld">👟</div>
      </div>
    </section>
 
    <!-- Cijfers -->
    <section style="padding-top: 0;">
      <div class="container cijfers">
        <div class="cijfer"><strong>5+</strong><span>Merken</span></div>
        <div class="cijfer"><strong>250+</strong><span>Sneakers</span></div>
        <div class="cijfer"><strong>4,7</strong><span>Gemiddelde review</span></div>
        <div class="cijfer"><strong>10k</strong><span>Tevreden klanten</span></div>
      </div>
    </section>
 
    <!-- Waarden -->
    <section style="background: var(--grijs);">
      <div class="container">
        <div class="sectie-titel">
          <h2>Waar we voor staan</h2>
        </div>
        <div class="waarden">
          <article class="waarde">
            <div class="icoon">✅</div>
            <h3>100% origineel</h3>
            <p>We kopen rechtstreeks in bij de merken en erkende leveranciers. Geen namaak.</p>
          </article>
          <article class="waarde">
            <div class="icoon">💶</div>
            <h3>Transparante prijzen</h3>
            <p>Je ziet altijd vanaf wanneer een prijs geldt. Wat je betaald hebt, blijft in je bestelling staan.</p>
          </article>
          <article class="waarde">
            <div class="icoon">⭐</div>
            <h3>Echte reviews</h3>
            <p>Alleen klanten met een account kunnen een review schrijven, met een cijfer van 1 tot 5.</p>
          </article>
        </div>
      </div>
    </section>
 
    <!-- Team -->
    <section>
      <div class="container">
        <div class="sectie-titel">
          <h2>Het team</h2>
        </div>
        <div class="team">
          <div class="lid">
            <div class="avatar">JM</div>
            <h3>Jayden Mulder</h3>
            <span>Eigenaar &amp; oprichter</span>
          </div>
          <div class="lid">
            <div class="avatar">EV</div>
            <h3>Emma Visser</h3>
            <span>Inkoop &amp; assortiment</span>
          </div>
          <div class="lid">
            <div class="avatar">NS</div>
            <h3>Noah Smit</h3>
            <span>Klantenservice</span>
          </div>
          <div class="lid">
            <div class="avatar">FK</div>
            <h3>Fleur Kok</h3>
            <span>Webshopbeheer</span>
          </div>
        </div>
      </div>
    </section>
  </main>
 
  <footer>
    <div class="container">
      <div class="footer-raster">
        <div>
          <a href="over.html" class="logo">Sole<span>Store</span></a>
          <p>Jouw sneakerwinkel voor topmerken en eerlijke prijzen.</p>
        </div>
        <div>
          <h4>SoleStore</h4>
          <ul>
            <li><a href="over.html">Over ons</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
      <p class="copyright">© 2026 SoleStore – Alle rechten voorbehouden</p>
    </div>
  </footer>
 
</body>
</html>