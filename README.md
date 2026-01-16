## URL nasazeného webu
cerveny.infinityfree.me

# Osobní portfolio – Petr Červený

Tento projekt je osobní webové portfolio vytvořené jako pololetní práce.  
Obsahuje přehled mých projektů z předmětů **WWW (webové projekty)** a **DIM (grafická a video tvorba)**.  
Web je postavený čistě pomocí HTML, CSS a menšího množství JavaScriptu + PHP (počítadlo návštěvnosti).

---

## Struktura webu

Web obsahuje 3 stránky:

- **index.html** – homepage + informace o mně + kontakty
- **www.html** – projekty z předmětu WWW (náhledy + popis + odkaz)
- **dim.html** – práce z předmětu DIM (loga, thumbnail, leták, video)

## Použité technologie

- HTML5
- CSS3 (Flexbox + Grid)
- JavaScript (načítání počítadla návštěvnosti)
- PHP (ukládání počtu návštěv do souboru)

## Funkční požadavky (splněno)

Responzivita pomocí CSS Grid/Flexbox  
Navigace + aktivní stav v menu  
„Back to top“ tlačítko na delších stránkách  
Optimalizace obrázků + alt popisky  
Semantické HTML značky (`header`, `main`, `section`, `footer`)  
SEO základy (`title`, `meta description`)  
Lazy loading u náhledů (loading="lazy")  
Návštěvnost – počítadlo zobrazení stránky

## Návštěvnost

Použil jsem variantu **B – čistě PHP** (počítadlo návštěv).

Fungování:
- PHP skript `counter.php` ukládá počet návštěv do souboru `counter.txt`
- Na každé stránce se pak pomocí JavaScriptu (`js/counter.js`) načte číslo a zobrazí ve footeru jako „Návštěvy: X“

**Ukládaná data:**
- pouze číslo návštěv (bez osobních údajů)

## Postup nasazení (InfinityFree)

1. Přihlásil jsem se do InfinityFree a vytvořil hosting + doménu (subdoménu)
2. Otevřel jsem **File Manager**
3. Nahrál jsem celý projekt do složky:
   - `htdocs/`
4. Ujistil jsem se, že jsou nahrané i soubory:
   - `counter.php`
   - `counter.txt`
   - `js/counter.js`
5. Otevřel jsem web přes přidělenou doménu

Poznámka: Po nahrání souborů může aktualizace chvíli trvat (většinou pár minut).

## Licence / použité zdroje

Všechny obrázky a ukázky v projektech jsou buď:
- moje vlastní tvorba (WWW projekty, DIM grafika, thumbnails, loga, leták)
- nebo screenshoty mých vlastních webů

Ikony na homepage:
- Instagram / GitHub / E-mail – použité jako obrázky v projektu (`img/home/`)

Fonty:
- Google Fonts (Inter) – použit pouze na stránce WWW:
  https://fonts.google.com/specimen/Inter

YouTube videa:
- Video v DIM sekci je moje vlastní nahrávka nebo obsah z mého kanálu (embed / odkaz)