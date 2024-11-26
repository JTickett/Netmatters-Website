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

        <div class="breadcrumb">
            <ul>
                <li>Home<a href="index.php">Home</a></li>
                <li>Our Offices</li>
            </ul>
        </div>

        <section id="offices" class="reusable-container section">
            <div class="section-header">
                <h2>Our Offices</h2>
            </div>

            <div class="section-content">

                <div class="office-card">
                    <a href="#"><img src="images/cambridge.jpg" alt="Cambridge Office"></a>
                    <a href="#"><h3 class="office-title">Cambridge Office</h3></a>
                    <p class="office-address">
                        Unit 1.31,
                        <br>St John's Innovation Centre,
                        <br>Cowley Road, Milton,
                        <br>Cambridge,
                        <br>CB4 0WS
                    </p>
                    <a class="office-phone" href="tel:01223375772">01223 37 57 72</a>
                    <a class="button service-color-webdesign" href="#">View More</a>
                </div>

                <div class="office-card">
                    <a href="#"><img src="images/wymondham.jpg" alt="Wymondham Office"></a>
                    <a href="#"><h3 class="office-title">Wymondham Office</h3></a>
                    <p class="office-address">
                        Unit 15,
                        <br>Penfold Drive,
                        <br>Gateway 11 Business Park,
                        <br>Wymondham, Norfolk,
                        <br>NR18 0WZ
                    </p>
                    <a class="office-phone" href="tel:01603704020">01603 70 40 20</a>
                    <a class="button service-color-webdesign" href="#">View More</a>
                </div>

                <div class="office-card">
                    <a href="#"><img src="images/yarmouth-2.jpg" alt="Yarmouth Office"></a>
                    <a href="#"><h3 class="office-title">Yarmouth Office</h3></a>
                    <p class="office-address">
                        Suite F23,
                        <br>Beacon Innovation Centre,
                        <br>Beacon Park, Gorleston,
                        <br>Great Yarmouth, Norfolk,
                        <br>NR31 7RA
                    </p>
                    <a class="office-phone" href="tel:01493603204">01493 60 32 04</a>
                    <a class="button service-color-webdesign" href="#">View More</a>
                </div>

            </div>


        </section>

        <section id="contact" class="reusable-container section">
            
        </section>

        </main>

        <?php
            include('src/footer.php');
        ?>


    <!-- Javascript Stuff relocated from the HEAD -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/stickyhead.js"></script>
    <script src="js/cookie.js"></script>


</body>

</html>