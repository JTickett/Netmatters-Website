<?php
require_once 'database.php';

// Get PDO connection 
$pdo = getPDO();

// Prepare SQL statement
$query = $pdo->prepare("SELECT * FROM news ORDER BY date DESC LIMIT 3");

// Execute the statement
$query->execute();

// Fetch all results
$results = $query->fetchAll();

// Print the results
//print_r($results);

// Loop through the results
foreach ($results as $result) {
    
}

?>


<!-- Latest News -->
<section id="news" class="news reusable-container section">

    <header>
        <h2><strong>Latest News</strong></h2>
        <h3 id="news-viewall">
            <a href="#" id="news__viewmore-top">
                View All
                <span class="icon-arrow-right2"></span> </a>
        </h3>
    </header>

    <!-- Container for Cards -->
    <div class="news-card__container">
        <!-- 1st Job Card Container -->
            <div class="news-card__container-item">
            <div class="news-card">
                <div id="news-card1">

                    <a href="#" class="art-link"></a>

                    <!-- Image Container -->
                    <div class="news-card-block1">
                        <a class="news-card-block1__category card1cat" href="#">
                            Insights
                        </a>
                        <picture class="news-card-block1__image">
                            <img src="images/what-is-digital-dPNq.webp" alt="Digital Marketing Concept">
                        </picture>
                    </div>

                    <!-- Detail Container -->
                    <div class="news-card-block2">
                        <h3 class="news-card-block2__title card1tit">
                            What is Digital Marketing and How Can It Help...
                        </h3>
                        <p class="news-card-block2__title-readtime"> - 5 minute read</p>
                        <p class="news-card-block2__description">
                            If you own a business, it's likely you either already have an online presence or are
                            considering hav...
                        </p>
                        <a class="button news-card-block2__button card1cat" href="#">
                            Read More
                        </a>
                        <!-- User Container -->
                        <div class="news-card-block2__author">
                            <img class="news-card-block2__author-image" src="images/netmatters-ltd-VXAv.webp"
                                alt="Netmatters Ltd logo">
                            <div class="news-card-block2__author-text">
                                <h5 class="news-card-block2__author-text-name">
                                    Posted by
                                    <br>
                                    Netmatters
                                </h5>
                                <p class="news-card-block2__author-text-date">
                                    5th April 2024
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="news-card__container-item">
            <div class="news-card">
                <div id="news-card2">

                    <a href="#" class="art-link"></a>

                    <!-- Image Container -->
                    <div class="news-card-block1">
                        <a class="news-card-block1__category card2cat" href="#">
                            News
                        </a>
                        <picture class="news-card-block1__image">
                            <img src="images/march-notables-2024-37Z5.png" alt="March Notables 2024">
                        </picture>
                    </div>

                    <!-- Detail Container -->
                    <div class="news-card-block2">
                        <h3 class="news-card-block2__title card2tit">
                            March Notables 2024 - Celebrating Our Team
                        </h3>
                        <p class="news-card-block2__title-readtime"> - 5 minute read</p>
                        <p class="news-card-block2__description">
                            March Notables 2024 Celebrating the achievements and dedication of our staff, at
                            Netmatters, we put...
                        </p>
                        <a class="card2but button news-card-block2__button" href="#">
                            Read More
                        </a>
                        <!-- User Container -->
                        <div class="news-card-block2__author">
                            <img class="news-card-block2__author-image" src="images/netmatters-ltd-VXAv.webp"
                                alt="Netmatters Ltd logo">
                            <div class="news-card-block2__author-text">
                                <h5 class="news-card-block2__author-text-name">
                                    Posted by
                                    <br>
                                    Netmatters
                                </h5>
                                <p class="news-card-block2__author-text-date">
                                    5th April 2024
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="news-card__container-item">
            <div class="news-card" id="news-hide">
                <div id="news-card3">

                    <a href="#" class="art-link"></a>

                    <!-- Image Container -->
                    <div class="news-card-block1">
                        <a class="news-card-block1__category card3cat" href="#">
                            Careers
                        </a>
                        <picture class="news-card-block1__image">
                            <img src="images/1st-line-technician-PiSq.webp" alt="tech">
                        </picture>
                    </div>

                    <!-- Detail Container -->
                    <div class="news-card-block2">
                        <h3 class="news-card-block2__title card3tit">
                            1st Line Technician
                        </h3>
                        <p class="news-card-block2__title-readtime"> - 5 minute read</p>
                        <p class="news-card-block2__description">
                            Salary Range £25k-£29k + Bonuses + Pension Hours 40 hours per week, Monday - Friday
                            Location Wymondh...
                        </p>
                        <a class="button news-card-block2__button card3but" href="#">
                            Read More
                        </a>
                        <!-- User Container -->
                        <div class="news-card-block2__author">
                            <img class="news-card-block2__author-image"
                                src="images/bethany-shakespeare-F6Iu.webp"
                                alt="Bethany Shakespeare's profile picture">
                            <div class="news-card-block2__author-text">
                                <h5 class="news-card-block2__author-text-name">
                                    Posted by
                                    <br>
                                    Bethany Shakespeare
                                </h5>
                                <p class="news-card-block2__author-text-date">
                                    28th March 2024
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <!-- <h3>
        <a class="services__viewmore" href="">
            View All
            <span class="icon-arrow-right2"></span>
        </a>
    </h3> -->
        <h3>
            <a href="#" id="news__viewmore-bottom">
                View All
                <span class="icon-arrow-right2"></span> </a>
        </h3>

    </footer>

</section>
