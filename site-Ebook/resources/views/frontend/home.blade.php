


    @extends('layouts.master')
    @section('content')
    @include('layouts.navbars.guest.navbar') <!-- Optional navigation -->

    <main>
        <article>

            <!--
            - #HERO
          -->

            <section class="section hero" id="home" aria-label="home">
                <div class="container">

                    <div class="hero-content">

                        <p class="section-subtitle">Faisons le meilleur investissement</p>

                        <h1 class="h1 hero-title">Lisez davantage et faites du succès le résultat de la perfection.</h1>

                        <p class="section-text">
                            Plongez dans un monde d'imagination, de connaissances et d'aventure avec notre vaste
                            collection de livres électroniques pour chaque lecteur.
                        </p>

                    </div>

                    <div class="hero-banner has-before">
                        <img src="{{ asset('frontend/assets/img/hero-banner.png') }}" width="431" height="596">


                        <button class="play-btn" aria-label="play video">
                            <ion-icon name="play-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </div>

                </div>
            </section>





            <!--
            - #BENEFITS
          -->

            <section class="section benefits" id="benefits" aria-label="benefits">
                <div class="container">

                    <div class="grid-list">

                        <li class="benefits-content">
                            <h2 class="h2 section-title">Ce que vous accomplirez grâce à ce livre</h2>

                            <p class="section-text">Pourqoui acheter vos E-book chez nous ?</p>
                        </li>

                        <li>
                            <div class="benefits-card has-before has-after">

                                <div class="card-icon">
                                    <img src="{{ asset('frontend/assets/img/benefits-1.svg') }}" width="40"
                                        height="40">
                                </div>

                                <h3 class="h3 card-title">Experience</h3>

                                <p class="card-text"><b>Portabilité </b> : Emportez des centaines de livres sur un seul appareil
                                    (smartphone, tablette, liseuse).
                                </p>

                                <a href="#" class="btn-link">
                                    <span class="span">Read more</span>

                                    <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="benefits-card has-before has-after">

                                <div class="card-icon">
                                    <img src="{{ asset('frontend/assets/img/benefits-2.svg') }}" width="40"
                                        height="40" loading="lazy" alt="Motivation">
                                </div>

                                <h3 class="h3 card-title">Motivation</h3>

                                <p class="card-text">
                                    🔥 <b>Inspiration rapide </b> : Trouvez des conseils motivants en quelques clics
                                    (développement personnel, réussite, etc.).
                                </p>

                                <a href="#" class="btn-link">
                                    <span class="span">En savoir plus</span>

                                    <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="benefits-card has-before has-after">

                                <div class="card-icon">
                                    <img src="{{ asset('frontend/assets/img/benefits-3.svg') }}" width="40"
                                        height="40" loading="lazy" alt="Goals">
                                </div>

                                <h3 class="h3 card-title">Objectifs</h3>

                                <p class="card-text">
                                    🎯 <b>Apprentissage ciblé </b> : Choisissez des e-books alignés sur vos buts
                                    (professionnels, santé, finances, etc.).
                                </p>

                                <a href="#" class="btn-link">
                                    <span class="span">En Savoir plus</span>

                                    <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="benefits-card has-before has-after">

                                <div class="card-icon">
                                    <img src="{{ asset('frontend/assets/img/benefits-4.svg') }}" width="40"
                                        height="40" loading="lazy" alt="Vision">
                                </div>

                                <h3 class="h3 card-title">Vision</h3>

                                <p class="card-text">
                                    🌍 <b>Élargissement des perspectives </b>: Accédez à des idées innovantes et des
                                    auteurs du monde entier.
                                </p>

                                <a href="#" class="btn-link">
                                    <span class="span">En Savoir plus</span>

                                    <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="benefits-card has-before has-after">

                                <div class="card-icon">
                                    <img src="{{ asset('frontend/assets/img/benefits-5.svg') }}" width="40"
                                        height="40" loading="lazy" alt="Mission">
                                </div>

                                <h3 class="h3 card-title">Mission</h3>

                                <p class="card-text">
                                    📚 <b>Accessibilité </b> : Permet aux personnes handicapées d’utiliser des outils de
                                    lecture adaptés (synthèse vocale, polices spéciales).
                                </p>

                                <a href="#" class="btn-link">
                                    <span class="span">En Savoir plus</span>

                                    <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="benefits-card has-before has-after">

                                <div class="card-icon">
                                    <img src="{{ asset('frontend/assets/img/benefits-6.svg') }}" width="40"
                                        height="40" loading="lazy" alt="Strategy">
                                </div>

                                <h3 class="h3 card-title">Strategie</h3>

                                <p class="card-text">
                                    🔄 <b>Flexibilité</b> Achetez un chapitre ou un résumé si vous ne voulez pas le
                                    livre entier
                                </p>

                                <a href="#" class="btn-link">
                                    <span class="span">En Savoir plus</span>

                                    <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>
                        </li>

                    </div>

                </div>
            </section>





            <!--
            - #CHAPTERS
          -->

            <section class="section chapters" id="chapters">
                <div class="container">

                    <p class="section-subtitle">Nos E-Book</p>

                    <h2 class="h2 section-title has-underline">
                        Decouvrez les livres disponibles
                        <span class="span has-before"></span>
                    </h2>

                    <ul class="grid-list">

                        <li>
                            <div class="chapter-card">

                                <p class="card-subtitle"> </p>

                                <h3 class="h3 card-title">L'Art subtil de s'en foutre</h3>

                                <p class="card-text">
                                    Version française du best-seller mondial ! Manson propose une approche brutale mais
                                    libératrice pour prioriser ce qui compte vraiment et ignorer le reste.
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="chapter-card">

                                <p class="card-subtitle"></p>

                                <h3 class="h3 card-title">Le Miracle Morning</h3>

                                <p class="card-text">
                                    Découvrez la routine matinale qui a changé des millions de vies : méditation,
                                    affirmation, exercice et lecture pour booster productivité et bien-être.
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="chapter-card">

                                <p class="card-subtitle"></p>

                                <h3 class="h3 card-title">Les quatre accords toltèques</h3>

                                <p class="card-text">
                                    4 principes simples (comme "Ne pas faire de suppositions") pour se libérer des
                                    croyances limitantes et vivre en paix.
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="chapter-card">

                                <p class="card-subtitle"></p>

                                <h3 class="h3 card-title">La nuit a dévoré le monde</h3>

                                <p class="card-text">
                                    Dans un Paris apocalyptique, un homme se réveille seul parmi les morts-vivants. Une
                                    réflexion angoissante sur l'isolement et la survie.
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="chapter-card">

                                <p class="card-subtitle"></p>

                                <h3 class="h3 card-title">Tout le monde n'a pas eu la chance de rater ses études</h3>

                                <p class="card-text">
                                    Le blogueur français prouve que l'école n'est pas l'unique voie vers la réussite,
                                    avec des stratégies pour créer sa liberté financière.
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="chapter-card">

                                <p class="card-subtitle"></p>

                                <h3 class="h3 card-title">Le pouvoir du moment présent</h3>

                                <p class="card-text">
                                    Un guide pour échapper aux regrets du passé et aux angoisses du futur en vivant
                                    pleinement l'instant présent.
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="chapter-card">

                                <p class="card-subtitle"></p>

                                <h3 class="h3 card-title">Changer : Éthique du hacker</h3>

                                <p class="card-text">
                                    Une analyse stimulante sur comment les valeurs des hackers (collaboration,
                                    transparence) peuvent transformer notre monde.
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="chapter-card">

                                <p class="card-subtitle"></p>

                                <h3 class="h3 card-title">La tresse</h3>

                                <p class="card-text">
                                    Trois femmes (en Inde, Sicile et Canada) voient leurs destins liés par une métaphore
                                    filée. Un hymne à la solidarité féminine.
                                </p>

                            </div>
                        </li>

                        <li>
                            <div class="chapter-card">

                                <p class="card-subtitle"></p>

                                <h3 class="h3 card-title">Ta deuxième vie commence quand tu comprends que tu n'en as
                                    qu'une</h3>

                                <p class="card-text">
                                    Camille, en crise existentielle, rencontre un "routinologue" qui l'aide à retrouver
                                    joie de vivre. Léger et profond à la fois.
                                </p>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>
             <!--
            - #CATEGORIES LIVRES
          -->

          <section class="section achievement" id="achievements" aria-label="achievement">
            <div class="container">

                <p class="section-subtitle">Livres</p>

                <h2 class="h2 section-title has-underline">
                    Categories De Livres
                    <span class="span has-before"></span>
                </h2>

                <<ul class="grid-list">

            <li>
              <div class="achievement-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 300;">
                  <img src="{{ asset ('frontend/assets/img/literature.jpg') }}" width="450" height="300" loading="lazy" alt="Nominated"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <!-- <img src="./assets/images/award.svg" width="80" height="80" loading="lazy" alt="trophy"
                    class="abs-img"> -->

                  <h3 class="h3 card-title">Literature Classique</h3>

                  <p class="card-text">
                    Decouvrez des livres tel que des Romans francais , literature mondial  classique du XIX siecle
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="achievement-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 300;">
                  <img src="{{ asset('frontend/assets/img/science.jpg') }}" width="450" height="300" loading="lazy" alt="Winner"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <!-- <img src="./assets/images/award.svg" width="80" height="80" loading="lazy" alt="trophy"
                    class="abs-img"> -->

                  <h3 class="h3 card-title">Science Fiction & Fantasie</h3>

                  <p class="card-text">
                    Plongez dans des oeuvres fascinant tel que Cyberpunk , Heroic Fantasy et Space Opera
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="achievement-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 300;">
                  <img src="{{ asset ('frontend/assets/img/horreur.jpg')}}" width="450" height="300" loading="lazy"
                    alt="Guest of Honor" class="img-cover">
                </figure>

                <a href="{{ route('horreur') }}" class="card content">
                <div class="card-content">

                  <!-- <img src="./assets/images/award.svg" width="80" height="80" loading="lazy" alt="trophy"
                    class="abs-img"> -->

                  <h3 class="h3 card-title">Horreur & Surnaturel</h3>

                  <p class="card-text">
                    Frissoner face a des livres d'horreur et de surnaturel tel que stephen king et lovercraft
                  </p>

                </div>
                </a>

              </div>
            </li>

            <li>
              <div class="achievement-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 300;">
                  <img src="{{ asset('frontend/assets/img/development.jpg') }}" width="450" height="300" loading="lazy" alt="Finalist"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <!-- <img src="./assets/images/award.svg" width="80" height="80" loading="lazy" alt="trophy"
                    class="abs-img"> -->

                  <h3 class="h3 card-title">Development Personnel</h3>

                  <p class="card-text">
                    Aprendre a Avoir le controle sur la gestion du temps , leadership et Mindset avec cette game de livres
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="achievement-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 300;">
                  <img src="{{ asset('frontend/assets/img/science.jpg')}}" width="450" height="300" loading="lazy" alt="Winner"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <!--<img src="./assets/images/award.svg" width="80" height="80" loading="lazy" alt="trophy"
                    class="abs-img"> -->

                  <h3 class="h3 card-title">Sciences</h3>

                  <p class="card-text">
                    Oh la science un aspect incontournable dans cette generation , prenez du parfums dans des domaines divers
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="achievement-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 300;">
                  <img src="{{ asset('frontend/assets/img/bible.jpg')}}" width="450" height="300" loading="lazy" alt="Nominated"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <!--img src="./assets/images/award.svg" width="80" height="80" loading="lazy" alt="trophy"
                    class="abs-img"> -->

                  <h3 class="h3 card-title">Religion</h3>

                  <p class="card-text">
                    Illuminez vos ideer a travers diverse religion tel que le christianisme , islam , bouddhisme
                  </p>

                </div>

              </div>
            </li>

          </ul> -->

            </div>
        </section>







            <!--
            - #PREVIEW
          -->

            <section class="section preview" aria-label="preview">
                <div class="container">

                    <p class="section-subtitle">Aperçu du chapitre</p>

                    <h2 class="h2 section-title has-underline">
                        Lire quelques chapitres gratuitement
                        <span class="span has-before"></span>
                    </h2>

                    <ul class="tab-list">

                        <li>
                            <div class="tab-card active" data-tab-card>
                                <h3 class="h3 tab-text">Chapitre 1</h3>

                                <img src="{{ asset('frontend/assets/img/preview-1.png') }}" width="820"
                                    height="630" loading="lazy" alt="Chapter 1" class="w-100">
                            </div>
                        </li>

                        <li>
                            <div class="tab-card" data-tab-card>
                                <h3 class="h3 tab-text">Chapitre 2</h3>

                                <img src="{{ asset('frontend/assets/img/preview-2.png') }}
                    "
                                    width="820" height="630" loading="lazy" alt="Chapter 2" class="w-100">
                            </div>
                        </li>

                        <li>
                            <div class="tab-card" data-tab-card>
                                <h3 class="h3 tab-text">Chapitre 3</h3>

                                <img src="{{ asset('frontend/assets/img/preview-3.png') }}
                    "
                                    width="820" height="630" loading="lazy" alt="Chapter 3" class="w-100">
                            </div>
                        </li>

                        <li>
                            <div class="tab-card" data-tab-card>
                                <h3 class="h3 tab-text">Chapitre 4</h3>

                                <img src="{{ asset('frontend/assets/img/preview-4.png') }}
                    "
                                    width="820" height="630" loading="lazy" alt="Chapter 4" class="w-100">
                            </div>
                        </li>

                        <li>
                            <div class="tab-card" data-tab-card>
                                <h3 class="h3 tab-text">Chapitre 5</h3>

                                <img src="{{ asset('frontend/assets/img/preview-5.png') }}
                    "
                                    width="820" height="630" loading="lazy" alt="Chapter 5" class="w-100">
                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!--
            - #PRICING
          -->

            <section class="section pricing" id="pricing" aria-label="pricing">
                <div class="container">

                    <p class="section-subtitle">Tarifs</p>

                    <h2 class="h2 section-title has-underline">
                        Tarification en fonction de leur version
                        <span class="span has-before"></span>
                    </h2>

                    <ul class="grid-list">

                        <li>
                            <div class="pricing-card">

                                <h3 class="h3 card-title">E-Book</h3>

                                <data class="price" value="5">$05</data>

                                <ul class="pricing-card-list">

                                    <li class="card-item">
                                        <p class="card-text">PDF et EPUB</p>
                                    </li>

                                    <li class="card-item">
                                        <p class="card-text">Acces au telechargements</p>
                                    </li>

                                    <li class="card-item">
                                        <p class="card-text">-</p>
                                    </li>

                                    <li class="card-item">
                                        <p class="card-text">-</p>
                                    </li>

                                </ul>

                                <button class="btn btn-primary">ACHETEZ MAINTENANT</button>

                            </div>
                        </li>

                        <li>
                            <div class="pricing-card bundle">

                                <h3 class="h3 card-title">Paquet</h3>

                                <data class="price" value="15">$15</data>

                                <ul class="pricing-card-list">

                                    <li class="card-item">
                                        <p class="card-text">PDF et EPUB</p>
                                    </li>

                                    <li class="card-item">
                                        <p class="card-text">Acces au telechargements</p>
                                    </li>

                                    <li class="card-item">
                                        <p class="card-text">Livre relié</p>
                                    </li>

                                    <li class="card-item">
                                        <p class="card-text">-</p>
                                    </li>

                                </ul>

                                <button class="btn btn-primary">ACHETEZ MAINTENANT</button>

                            </div>
                        </li>

                        <li>
                            <div class="pricing-card">

                                <h3 class="h3 card-title">Relié</h3>

                                <data class="price" value="10">$25</data>

                                <ul class="pricing-card-list">

                                    <li class="card-item">
                                        <p class="card-text">PDF et EPUB</p>
                                    </li>

                                    <li class="card-item">
                                        <p class="card-text">Acces au telechargements</p>
                                    </li>

                                    <li class="card-item">
                                        <p class="card-text">livre relié</p>
                                    </li>

                                    <li class="card-item">
                                        <p class="card-text">relié</p>
                                    </li>

                                </ul>

                                <button class="btn btn-primary">ACHETEZ MAINTENANT</button>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!--
            - #AUTHOR
          -->

            <section class="section author" id="author">
                <div class="container">

                    <figure class="author-banner img-holder" style="--width: 700; --height: 720;">
                        <img src="{{ asset('frontend/assets/img/author-banner.jpg') }}
                "
                            width="700" height="720" loading="lazy" alt="Martin Jenny" class="img-cover">
                    </figure>

                    <div class="author-content">

                        <p class="section-subtitle">Autheur</p>

                        <h2 class="h2 section-title">Beatrice IG</h2>

                        <p class="author-name">Style: Art, Fiction</p>

                        <div class="section-text">
                            Je m'appele <b>Beatrice</b>, une autrice vibrante et rafraîchissante de la littérature
                            camerounaise !

                            Jeune autrice dynamique, pleine de créativité et d’audace, je marie avec talent les
                            richesses de sa culture africaine à une écriture moderne et universelle.

                            Mon style ?
                            ✔ Énergique et imagé – mes mots dansent entre poésie et spontanéité.
                            ✔ Engagé et inspirant – j'aborde des thèmes forts (émancipation, traditions, avenir) avec
                            une touche d’humour et d’émotion.
                            ✔ Résolument connectée – Mon écriture résonne avec la jeunesse africaine et au-delà !
                        </div>

                    </div>

                </div>
            </section>


            <!--
            - #CONTACT
          -->

            <section class="section contact" id="contact" aria-label="contact">
                <div class="container">

                    <p class="section-subtitle">Contact</p>

                    <h2 class="h2 section-title has-underline">
                        Écris-moi n'importe quoi
                        <span class="span has-before"></span>
                    </h2>

                    <div class="wrapper">

                        <form action="" class="contact-form">

                            <input type="text" name="name" placeholder="Ton Nom" required class="input-field">

                            <input type="email" name="email_address" placeholder="Ton Email" required
                                class="input-field">

                            <input type="text" name="subject" placeholder="Sujet" required class="input-field">

                            <textarea name="message" placeholder="Ton Message" class="input-field"></textarea>

                            <button type="submit" class="btn btn-primary">Envoyer Maitenant</button>

                        </form>

                        <ul class="contact-card">

                            <li>
                                <p class="card-title">Address:</p>

                                <address class="address">
                                    16, Lankaway <br>
                                    Florida, USA 99544
                                </address>
                            </li>

                            <li>
                                <p class="card-title">Telephone:</p>

                                <a href="tel:1234567890" class="card-link">+237 678128452</a>
                            </li>

                            <li>
                                <p class="card-title">Email:</p>

                                <a href="mailto:support@support.com" class="card-link">support@support.com</a>
                            </li>

                            <li>
                                <p class="social-list-title h3">Connectez les réseaux sociaux du livre</p>

                                <ul class="social-list">

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-facebook"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-twitter"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-linkedin"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-youtube"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-whatsapp"></ion-icon>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                        </ul>

                    </div>

                </div>

            </section>

        </article>
    </main>

    @include('layouts.footers.guest.footer') <!-- Optional footer -->

