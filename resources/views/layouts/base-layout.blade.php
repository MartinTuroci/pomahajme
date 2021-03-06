<!DOCTYPE html>
<html lang="sk">

<head>
  <script>
    window.ga = window.ga || function () {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-151593080-1', 'auto');
        ga('send', 'pageview');
  </script>
  <script async src='https://www.google-analytics.com/analytics.js'></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Stránka zameraná na zbierku peňazí pre rodiny s chorými deťmi, ktoré majú finančné ťažkosti.">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @stack('meta')
  <title>Pomahajme.sk</title>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" as="style"
    onload="this.onload=null;this.rel='stylesheet'" />
  @stack('styles')
  @stack('scripts')
</head>

<body>
  <header>
    @include('icons.menu')
    <a href='/' class="title">pomahajme.sk</a>
    <nav id='nav' class='nav'>
      <ul class='nav__list'>
        <li>
          <a href="/pribehy">Príbehy</a>
          <a href="/euro-nadeje">Euro nádeje</a>
          <a href="/kontakt">Kontakt</a>
          {{-- <a href="/statistika">Štatistika</a> --}}
        </li>
      </ul>
    </nav>
    <a href="https://www.facebook.com/pomahajme.sk/" target="_blank" rel="noopener" class="fb"
      aria-label="odkaz na facebookovú stránku">
      @include('icons.fb')
    </a>
  </header>
  <main>@yield('content')</main>
  <footer class="footer">
    @php
    $sponsors = [
    (object) ['url' => 'https://www.mynidum.sk/', 'logo' => 'nidum.svg'],
    (object) ['url' => 'https://pajko.sk/', 'logo' => 'pajko.png'],
    (object) ['url' => 'https://insempre.sk/', 'logo' => 'insempre.png'],
    (object) ['url' => 'https://www.mojadm.sk/', 'logo' => 'dm.png'],
    ];
    $partners = [
    (object) ['url' => 'https://delfinoterapiask.eu/', 'logo' => 'delfinoterapia.png'],
    (object) ['url' => 'https://eshop.rdmgaraz.sk/', 'logo' => 'rdm.png'],
    (object) ['url' => 'https://www.macosro.sk/', 'logo' => 'maco.png'],
    (object) ['url' => 'http://pkauto.sk/', 'logo' => 'pkauto.svg'],
    (object) ['url' => 'https://vysokofrekvencnaterapia.zombeek.sk', 'logo' => 'vysokofrekvencnaterapia.png'],
    (object) ['url' => 'https://www.facebook.com/progress.truskavets', 'logo' => 'progress.png'],
    ];
    @endphp
    <section class="footer__main">
      <div class="pl-2">
        <h3 class="p-2 text-center">KONTAKTY</h3>
        <p>Tomáš Berka zakladateľ a predseda o.z.</p>
        <p>info@pomahajme.sk</p>
        <p>0949 01 22 02</p>
        <a href="https://ib.fio.sk/ib/transparent?a=2201942423" target="_blank" rel="noopener">SK41 8330 0000 0022
          0194
          2423 (transparentný účet)</a>
      </div>
      <div class="pl-2">
        <h3 class="p-2 text-center">REKLAMNÍ PARTNERI</h3>
        <div class="partners">
          @foreach ($partners as $p)
          <a href={{ $p->url }} target="_blank" rel="noopener">
            <img src={{ asset('img/'.$p->logo) }} alt={{ $p->url }} />
          </a>
          @endforeach
        </div>
      </div>
      <div class="pl-2 pr-2">
        <h3 class="p-2 text-center">SPONZORI</h3>
        <div class="partners">
          @foreach ($sponsors as $s)
          <a href={{ $s->url }} target="_blank" rel="noopener">
            <img src={{ asset('img/'.$s->logo) }} alt={{ $s->url }} />
          </a>
          @endforeach
        </div>
      </div>
    </section>
    <section class="text-center p-2 font-w7">2020 © pomahajme.sk / Všetky práva vyhradené.</section>
  </footer>
  <script>
    document.getElementById('menu').onclick = onMenuClick
    let isMenuOpen = false;

    function onMenuClick() {
        isMenuOpen = !isMenuOpen
        const nav = document.getElementById('nav');
        if (isMenuOpen) {
            nav.classList.add('open')
            nav.classList.remove('closed')
        } else {
            nav.classList.add('closed')
            nav.classList.remove('open')
        }
    }
  </script>
</body>

</html>