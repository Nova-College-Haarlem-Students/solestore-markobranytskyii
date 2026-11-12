<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact – SoleStore</title>
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
        <li><a href="over.html">Over ons</a></li>
        <li><a href="contact.html" class="actief">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="pagina-kop">
      <div class="container">
        <h1>Contact</h1>
        <p>Vragen over een sneaker, je bestelling of een annulering? We helpen je graag.</p>
      </div>
    </div>

    <section>
      <div class="container contact-raster">

        <!-- Contactgegevens -->
        <div class="contact-info">
          <div class="info-kaart">
            <h3>📍 Adres</h3>
            <p>Sneakerstraat 12<br>1012 AB Amsterdam</p>
          </div>
          <div class="info-kaart">
            <h3>✉️ E-mail</h3>
            <p><a href="mailto:info@solestore.nl">info@solestore.nl</a></p>
          </div>
          <div class="info-kaart">
            <h3>📞 Telefoon</h3>
            <p><a href="tel:+31201234567">020 – 123 45 67</a></p>
          </div>
          <div class="info-kaart">
            <h3>🕒 Openingstijden klantenservice</h3>
            <table class="openingstijden">
              <tr><td>Maandag – vrijdag</td><td>09:00 – 17:30</td></tr>
              <tr><td>Zaterdag</td><td>10:00 – 16:00</td></tr>
              <tr><td>Zondag</td><td>Gesloten</td></tr>
            </table>
          </div>
        </div>

        <!-- Contactformulier -->
        <form action="#" method="post">
          <h2>Stuur ons een bericht</h2>
          <div class="rij">
            <div>
              <label for="naam">Naam</label>
              <input type="text" id="naam" name="naam" placeholder="Je naam" required>
            </div>
            <div>
              <label for="email">E-mailadres</label>
              <input type="email" id="email" name="email" placeholder="jij@voorbeeld.nl" required>
            </div>
          </div>
          <div class="rij">
            <div>
              <label for="onderwerp">Onderwerp</label>
              <select id="onderwerp" name="onderwerp">
                <option>Vraag over een sneaker</option>
                <option>Mijn bestelling</option>
                <option>Bestelling annuleren</option>
                <option>Account &amp; reviews</option>
                <option>Iets anders</option>
              </select>
            </div>
            <div>
              <label for="bestelnummer">Bestelnummer (optioneel)</label>
              <input type="text" id="bestelnummer" name="bestelnummer" placeholder="Bijv. SS-10234">
            </div>
          </div>
          <div>
            <label for="bericht">Bericht</label>
            <textarea id="bericht" name="bericht" placeholder="Waar kunnen we je mee helpen?" required></textarea>
          </div>
          <label class="checkbox">
            <input type="checkbox" name="akkoord" required>
            Ik ga akkoord met de verwerking van mijn gegevens.
          </label>
          <button type="submit" class="knop">Verstuur bericht</button>
        </form>

      </div>
    </section>

    <!-- Veelgestelde vragen -->
    <section style="background: var(--grijs);">
      <div class="container faq">
        <div class="sectie-titel">
          <h2>Veelgestelde vragen</h2>
        </div>
        <details>
          <summary>Hoe annuleer ik mijn bestelling?</summary>
          <p>Log in op je account, ga naar "Mijn bestellingen" en klik bij de bestelling op "Annuleren".</p>
        </details>
        <details>
          <summary>De prijs is verlaagd nadat ik bestelde. Wat nu?</summary>
          <p>In je bestelling blijft altijd de prijs staan die je op dat moment betaald hebt. Neem gerust contact op, dan kijken we wat we voor je kunnen doen.</p>
        </details>
        <details>
          <summary>Hoe schrijf of verwijder ik een review?</summary>
          <p>Met een account kun je bij elke sneaker een review plaatsen met een cijfer van 1 tot 5. Je kunt alleen je eigen reviews verwijderen, via "Mijn reviews".</p>
        </details>
        <details>
          <summary>Zijn alle sneakers origineel?</summary>
          <p>Ja. We kopen alleen in bij de merken zelf en bij erkende leveranciers.</p>
        </details>
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