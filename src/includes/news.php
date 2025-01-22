<?php

require_once __DIR__ . '/../database.php';

$results = getNews();

if (empty($results)) {
    echo '<p>No news found</p>';
    exit;
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

        <?php
            foreach ($results as $result) {

                // Set default values if the data is empty
                $result['author_name'] = $result['author_name'] ?? 'Netmatters';
                $result['author_image'] = $result['author_image'] ?? 'netmatters-ltd-VXAv.webp';
                $result['description'] = $result['description'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.';

                // Sanitize all fields
                $result['id'] = htmlspecialchars($result['id']);
                $result['category_name'] = htmlspecialchars($result['category_name']);
                $result['category_color'] = htmlspecialchars($result['category_color']); 
                $result['title'] = htmlspecialchars($result['title']);
                $result['description'] = htmlspecialchars($result['description']);
                $result['image'] = htmlspecialchars($result['image']);
                $result['author_name'] = htmlspecialchars($result['author_name']);
                $result['author_image'] = htmlspecialchars($result['author_image']);
                $result['date'] = htmlspecialchars($result['date']);
                ?>

                <div class="news-card__container-item">
                    <div class="news-card"<?= $result['id'] == 3 ? 'id="news-hide"' : '' ?>>
                        <div id='news-card<?= $result['id'] ?>'>

                            <a href="#" class="art-link"></a>

                            <!-- Image Container -->
                            <div class="news-card-block1">
                                <a class="news-card-block1__category card<?= $result['id'] ?>cat" href="#">
                                    <?= $result['category_name'] ?>
                                </a>
                                <picture class="news-card-block1__image">
                                    <img src="images/<?= $result['image'] ?>" alt="<?= $result['title'] ?>">
                                </picture>
                            </div>

                            <!-- Detail Container -->
                            <div class="news-card-block2">
                                <h3 class="news-card-block2__title card<?= $result['id'] ?>tit">
                                    <?= $result['title'] ?>
                                </h3>
                                <p class="news-card-block2__title-readtime"> - 5 minute read</p>
                                <p class="news-card-block2__description">
                                    <?= $result['description'] ?>
                                </p>
                                <a class="button news-card-block2__button card<?= $result['id'] ?>cat" href="#">
                                    Read More
                                </a>
                                <!-- User Container -->
                                <div class="news-card-block2__author">
                                    <img class="news-card-block2__author-image" src="images/<?= $result['author_image'] ?>" alt="<?= $result['author_name'] ?>">
                                    <div class="news-card-block2__author-text">
                                        <h5 class="news-card-block2__author-text-name">
                                            Posted by
                                            <br>
                                            <?= $result['author_name'] ?>
                                        </h5>
                                        <p class="news-card-block2__author-text-date">
                                            <?= date('jS F Y', strtotime($result['date'])) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>


    </div>

    <footer>
        <h3>
            <a href="#" id="news__viewmore-bottom">
                View All
                <span class="icon-arrow-right2"></span> </a>
        </h3>
    </footer>

</section>
