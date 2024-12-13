<!DOCTYPE html>
<html lang="en">

<?php
    include('src/head.php');
?>

<body>

    <?php
        include('src/cookies.php');
        include('src/sidebar.php');
    ?>

    <div id="page-wrapper">

        <?php
            include('src/header.php');
        ?>

        <!-- Main Section -->
        <main id="page-main" class="">

            <!-- Carousel Banner -->
            <section class="centered banner-carousel" id="banner">
                <div class="carousel-slider">
                    <div class="banner banner-large">
                        <div class="banner-image-container">
                            <img src="images/home-YLei.webp" alt="Netmatters Building">
                        </div>
                        <div class="reusable-container banner-text-wrapper">
                            <h1>The East of England's Leading Technology Company</h1>
                            <p>Performance-driven digital and technology services with complete transparency.</p>
                            <a class="button service-color-webdesign" href="#">
                                Why Choose Us?
                                <span class="icon-arrow-right2"></span>
                            </a>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="banner-image-container">
                            <img src="images/home-O67Y.webp" alt="Netmatters Building">
                        </div>
                        <div class="reusable-container banner-text-wrapper">
                            <h1>Bespoke Software</h1>
                            <p>Delivering expert bespoke software<br>solutions across a range of industries.</p>
                            <a class="button service-color-newsoftware" href="#">
                                Why Choose Us?
                                <span class="icon-arrow-right2"></span>
                            </a>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="banner-image-container">
                            <img src="images/home-gay8.webp" alt="Netmatters Building">
                        </div>
                        <div class="reusable-container banner-text-wrapper">
                            <h1>IT Support</h1>
                            <p>Fast and cost-effective IT support<br>services for your business.</p>
                            <a class="button service-color-it" href="#">
                                Why Choose Us?
                                <span class="icon-arrow-right2"></span>
                            </a>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="banner-image-container">
                            <img src="images/home-6yTp.webp" alt="Netmatters Building">
                        </div>
                        <div class="reusable-container banner-text-wrapper">
                            <h1>Digital Marketing</h1>
                            <p>Performance-driven digital and technology services with complete transparency.</p>
                            <a class="button service-color-marketing" href="#">
                                Why Choose Us?
                                <span class="icon-arrow-right2"></span>
                            </a>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="banner-image-container">
                            <img src="images/home-J8Xx.webp" alt="Netmatters Building">
                        </div>
                        <div class="reusable-container banner-text-wrapper">
                            <h1>Telecoms Services</h1>
                            <p>Performance-driven digital and technology services with complete transparency.</p>
                            <a class="button service-color-telecoms" href="#">
                                Why Choose Us?
                                <span class="icon-arrow-right2"></span>
                            </a>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="banner-image-container">
                            <img src="images/home-K0pn.webp" alt="Netmatters Building">
                        </div>
                        <div class="reusable-container banner-text-wrapper">
                            <h1>Web Design</h1>
                            <p>Performance-driven digital and technology services with complete transparency.</p>
                            <a class="button service-color-webdesign" href="#">
                                Why Choose Us?
                                <span class="icon-arrow-right2"></span>
                            </a>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="banner-image-container">
                            <img src="images/home-MSxH.webp" alt="Netmatters Building">
                        </div>
                        <div class="reusable-container banner-text-wrapper">
                            <h1>Cyber Security</h1>
                            <p>Performance-driven digital and technology services with complete transparency.</p>
                            <a class="button service-color-cybersec" href="#">
                                Why Choose Us?
                                <span class="icon-arrow-right2"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Services (Cards) -->
            <section id="services" class="reusable-container section">

                <header>
                    <h2 id="services-header">Our Services</h2>

                    <h3>
                        <a href="#" class="services__viewmore-top">
                            View Our Work
                            <span class="icon-arrow-right2"></span> </a>
                    </h3>
                </header>
                <!-- Wrapper for Cards -->
                <div id="services-card-wrapper" class="service-card__wrapper">

                    <div class="service-card1" id="card1">
                        <a href="#">
                            <span class="service-card__icon">
                                <span class="icon-laptop service-color-software"></span>
                            </span>

                            <h3 class="service-card__title">Bespoke Software</h3>
                            <p class="service-card__text">
                                Bespoke software solutions for all your business needs including integrations and
                                reporting.
                            </p>
                            <span class="service-card__button service-color-newsoftware">
                                Read More
                            </span>

                        </a>
                    </div>
                    <div class="service-card2" id="card2">
                        <a href="#">

                            <span class="service-card__icon">
                                <span class="icon-display service-color-it"></span>
                            </span>

                            <h3 class="service-card__title">IT Support</h3>
                            <p class="service-card__text">
                                Fully managed IT support and consultancy packages tailored to meet your exact business
                                needs.
                            </p>
                            <span class="service-card__button service-color-it">
                                Read More
                            </span>
                        </a>
                    </div>
                    <div class="service-card3" id="card3">
                        <a href="#">

                            <span class="service-card__icon">
                                <span class="icon-bar-graph service-color-marketing"></span>
                            </span>

                            <h3 class="service-card__title">Digital Marketing</h3>
                            <p class="service-card__text">
                                Driven brand awareness & ROI through creative digital marketing campaigns.
                            </p>
                            <span class="service-card__button service-color-marketing">
                                Read More
                            </span>
                        </a>
                    </div>
                    <div class="service-card4" id="card4">
                        <a href="#">

                            <span class="service-card__icon">
                                <span class="icon-phone_in_talk service-color-telecoms"></span>
                            </span>

                            <h3 class="service-card__title">Telecoms Services</h3>
                            <p class="service-card__text">
                                Business telephony solutions including mobile & connectivity solutions.
                            </p>
                            <span class="service-card__button service-color-telecoms">
                                Read More
                            </span>
                        </a>
                    </div>
                    <div class="service-card5" id="card5">
                        <a href="#">

                            <span class="service-card__icon">
                                <span class="icon-embed2 service-color-webdesign"></span>
                            </span>

                            <h3 class="service-card__title">Web Design</h3>
                            <p class="service-card__text">
                                User-centric design for businesses looking to make a lasting impression.
                            </p>
                            <span class="service-card__button service-color-webdesign">
                                Read More
                            </span>
                        </a>
                    </div>
                    <div class="service-card6" id="card6">
                        <a href="#">

                            <span class="service-card__icon">
                                <span class="icon-security service-color-cybersec"></span>
                            </span>

                            <h3 class="service-card__title">Cyber Security</h3>
                            <p class="service-card__text">
                                Prevention, testing, consultancy & breach management services.
                            </p>
                            <span class="service-card__button service-color-cybersec">
                                Read More
                            </span>
                        </a>
                    </div>
                    <div class="service-card7" id="card7">
                        <a href="#">

                            <span class="service-card__icon">
                                <span class="icon-graduation-cap service-color-training"></span>
                            </span>

                            <h3 class="service-card__title">Developer Training</h3>
                            <p class="service-card__text">
                                Web design & software training courses designed to secure a job in tech.
                            </p>
                            <span class="service-card__button service-color-training">
                                Read More
                            </span>
                        </a>
                    </div>

                </div>

                <footer>
                    <!-- "View Our Work" Link that only displays in Mobile View -->
                    <h3>
                        <a class="services__viewmore-bottom" href="#">
                            View Our Work
                            <span class="icon-arrow-right2"></span>
                        </a>
                    </h3>
                </footer>
            </section>

            <!-- Logo Roller -->
            <section>
                <h1 class="hidden">HIDDEN</h1>
                <div class="certcarousel" id="cert-logo-roller">
                    <div class="logowrapper">

                        <div class="cert">
                            <img class="cert__logo" src="images/awards/Google-partner.png" alt="Google Partner">
                        </div>
                        <div class="cert">
                            <img class="cert__logo" src="images/awards/Living-wage-employer.png"
                                alt="We Are A Living Wage Employer">
                        </div>
                        <div class="cert">
                            <img class="cert__logo" src="images/awards/Norfolk-ProHelp.png"
                                alt="Norfolk Pro Help Logo - Creating Business and Community Partnerships">
                        </div>
                        <div class="cert">
                            <img class="cert__logo" src="images/awards/Investing-in-future-growth.png"
                                alt="Barclays Business Awards - Investing in Future Growth Winner">
                        </div>
                        <div class="cert">
                            <img class="cert__logo" src="images/awards/norfolk-carbon-charter.png"
                                alt="Norfolk Carbon Charter Gold (2021)">
                        </div>
                        <div class="cert">
                            <img class="cert__logo" src="images/awards/prompt-payment-code.png"
                                alt="Prompt Payment Code">
                        </div>
                        <div class="cert">
                            <img class="cert__logo" src="images/awards/princess-royal-training-award-20.png"
                                alt="Princess Royal Training Award">
                        </div>
                        <div class="cert">
                            <img class="cert__logo" src="images/awards/future-50.png" alt="Future 50 Member">
                        </div>
                        <div class="cert">
                            <img class="cert__logo" src="images/awards/Citation-ISO-Certification-9001-2015.png"
                                alt="ISO Certification 9001 (2015)">
                        </div>
                        <div class="cert">
                            <img class="cert__logo" src="images/awards/Citation-ISO-Certification-27001-2013.png"
                                alt="ISO Certification 27001 (2013)">
                        </div>
                        <div class="cert">
                            <img class="cert__logo" src="images/awards/skills-of-tomorrow.png" alt="Skills of Tomorrow">
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Us -->
            <div id="about-section-background">
                <section id="about-section" class="about reusable-container section">
                    <div id="about1">
                        <h2>Welcome To Netmatters</h2>
                        <p id="about-bold">
                            Netmatters is a leading
                            <a href="#">Bespoke Software</a>
                            ,
                            <a href="#">IT Support</a>
                            , and
                            <a href="#">Digital Marketing</a>
                            company based in the East of England with offices in
                            <a href="#">London</a>
                            ,
                            <a href="#">Cambridge</a>
                            ,
                            <a href="#">Wymondham</a>
                            , and
                            <a href="#">Great Yarmouth</a>.
                        </p>

                        <p>We aren't tied into contracts with third-party providers, so you know that our
                            recommendations for your business are based purely with one benefit in mind: to help improve
                            your business with the most appropriate solutions.</p>
                        <p>We pride ourselves on being an ethical business and have a unique business offering and cost
                            model that ensures you get the most from our relationship in an upfront manner.</p>
                        <div class="about-button-wrapper">
                            <a id="about__darkbutton1" class="about__darkbutton" href="#">Why Choose Us? <span
                                    class="icon-arrow-right2"></span></a>
                            <a id="about__darkbutton2" class="about__darkbutton" href="#">Our Culture <span
                                    class="icon-arrow-right2"></span></a>
                        </div>
                    </div>

                    <div id="about2">
                        <h2>What Our Clients Think</h2>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <blockquote class="about__quote">
                            Netmatters stood out from the start. Great guys and very easy to work with. Both the build
                            and digital marketing teams are clearly skilled -they know their stuff! They delivered a
                            website to our (high!) expectations and went over and above to ensure we were satisfied
                            clients - and we are!
                            <footer>

                                <cite>
                                    Eleanor Bishop, Head of Marketing -
                                    <a href="#">Ashcroft Partnership LLP</a>
                                </cite>
                            </footer>
                        </blockquote>
                        <div class="about-button-wrapper">
                            <a class="about__googlebutton" href="#">
                                Google Reviews
                                <span class="icon-arrow-right2"></span>
                            </a>
                            <a class="about__tpbutton" href="#">
                                Trustpilot Reviews
                                <span class="icon-arrow-right2"></span>
                            </a>
                        </div>
                    </div>

                </section>
            </div>

            <?php
                include('src/news.php');
            ?>

            <!-- Logo Roller -->
            <section>
                <h1 class="hidden">OUR CLIENTS</h1>
                <div class="clientcarousel" id="client-logo-roller">
                    <div class="logowrapper">
                        <div class="client">
                            <img class="client__logo" src="images/clients/ashcroft.png"
                                alt="Ashcroft Partnership LLP Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">Ashcroft Partnership LLP</h3>
                                    <p class="client__bubble-text">
                                        Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership
                                        LLP in 2020 and
                                        are one of the top chartered accountancy firms in Cambridge, advising
                                        entrepreneurs and
                                        families.
                                    </p>
                                    <a href="#" class="client__bubble-link--webdesign">
                                        View Our Case Study
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <img class="client__logo" src="images/clients/one-traveller.png" alt="One Traveller Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">One Traveller</h3>
                                    <p class="client__bubble-text">
                                        <a href="https://www.onetraveller.co.uk/" target="_blank"
                                            rel="noopener noreferrer">
                                            One Traveller
                                        </a>
                                        , founded in 2007, is a leading provider of solo holidays for over 50s.
                                    </p>
                                    <a href="#" class="client__bubble-link--webdesign">
                                        View Our Case Study
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <img class="client__logo" src="images/clients/searles.png"
                                alt="Searles Leisure Resort Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">Searles Leisure Resort</h3>
                                    <p class="client__bubble-text">
                                        Searles Leisure Resort, on the beautiful
                                        North Norfolk coast, is an award-winning
                                        UK holiday resort for families.
                                    </p>
                                    <a href="#" class="client__bubble-link--marketing">
                                        View Our Case Study
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <img class="client__logo" src="images/clients/busseys.png" alt="Busseys Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">Busseys</h3>
                                    <p class="client__bubble-text">
                                        One of the UK's leading Ford dealerships.
                                    </p>

                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <img class="client__logo" src="images/clients/crane.png" alt="Crane Garden Buildings Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">Crane Garden Buildings</h3>
                                    <p class="client__bubble-text">
                                        Leading manufacturer and supplier of high-end garden rooms,
                                        summerhouses, workshops and sheds in the UK.
                                    </p>

                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <img class="client__logo" src="images/clients/black-swan.png"
                                alt="Black Swan Care Group Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">Black Swan Care Group</h3>
                                    <p class="client__bubble-text">
                                        Black Swan Care Group own and manage 21 high-quality care
                                        and residential homes with a focus on putting the needs of
                                        their residents first.
                                    </p>
                                    <a href="#" class="client__bubble-link--software">
                                        View Our Case Study
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <img class="client__logo" src="images/clients/xupes.png" alt="Xupes Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">Xupes</h3>
                                    <p class="client__bubble-text"></p>
                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <img class="client__logo" src="images/clients/beat.png" alt="BEAT Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">BEAT</h3>
                                    <p class="client__bubble-text">
                                        The UK's eating disorder charity founded in 1989.
                                    </p>

                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="client">
                            <img class="client__logo" src="images/clients/survey-solutions.png" alt="Survey Solutions Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">Survey Solutions</h3>
                                    <p class="client__bubble-text"></p>
                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>

                        <div class="client">
                            <img class="client__logo" src="images/clients/girlguiding-anglia.png"
                                alt="Girl Guiding Anglia Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">Girl Guiding Anglia</h3>
                                    <p class="client__bubble-text">
                                        Girl Guiding Anglia is part of Girlguiding,
                                        the UK's leading charity for girls and young
                                        women in the UK.
                                    </p>
                                    <a href="#" class="client__bubble-link--it">
                                        View Our Case Study
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <img class="client__logo" src="images/clients/sweetzy.png" alt="Sweetzy Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">Sweetzy</h3>
                                    <p class="client__bubble-text">
                                        Sweetzy are an online sweets retailer, based in Wymondham.
                                    </p>
                                    <a href="#" class="client__bubble-link--marketing">
                                        View Our Case Study
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <img class="client__logo" src="images/clients/howes-percival.png" alt="Howes Percival Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">Howes Percival</h3>
                                    <p class="client__bubble-text">
                                        <!-- No Text, only Title -->
                                    </p>

                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <img class="client__logo" src="images/clients/girls-day-school-trust.png" alt="GDST Logo">
                            <div class="client__bubblebox">
                                <div class="client__bubble">
                                    <h3 class="client__bubble-header">GDST</h3>
                                    <p class="client__bubble-text">
                                        The <a href="https://www.gdst.net/">Girls' Day School Trust (GDST)</a>
                                        is the UK's leading family of 25 independent girls' schools.
                                    </p>
                                    <a href="#" class="client__bubble-link--marketing">
                                        View Our Case Study
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                    <div class="client__bubble-triangle"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Email Newsletter -->
            <div id="email-section-background">
                <section id="email" class="email reusable-container section">
                    <div class="email-form__wrap">
                        <form class="email-form">
                            <!-- Header -->
                            <div>
                                <h2 class="email__header">Email Newsletter Sign-Up</h2>
                            </div>

                            <div class="email-form__input-wrapper">

                                <!-- Name Input Box -->
                                <div class="email-form__input-group">
                                    <label class="email-form__label" for="newsletter_name">
                                        Your Name
                                    </label>
                                    <input class="email-form__input" name="name" type="text" id="newsletter_name">
                                </div>

                                <!-- Email Input Box -->
                                <div class="email-form__input-group">
                                    <label class="email-form__label" for="newsletter_email">
                                        Your Email
                                    </label>
                                    <input class="email-form__input" name="email" type="email" id="newsletter_email">
                                </div>

                            </div>

                            <!-- Checkbox and Privacy Policy -->
                            <div class="email-form__checkbox-wrap">


                                <label class="email-form__checkbox-label" for="email_checkbox">
                                    <input class="email-form__checkbox" type="checkbox" id="email_checkbox"
                                        name="marketing">
                                    <span class="email-form__checkbox-box"></span>
                                    Please tick this box if you wish to receive marketing information from us. Please
                                    see our
                                    <a class="email-form__privacy" href="#"> Privacy Policy </a>
                                    for more information on how we keep your data safe
                                </label>
                            </div>

                            <!-- Subscribe Button -->
                            <div>
                                <input class="email-form__button" type="submit" value="Subscribe">
                            </div>

                        </form>
                    </div>
                </section>
            </div>

        </main>
        <?php
            include('src/footer.php');
            include('src/scripts.php');
        ?>
    </div>
</body>
</html>