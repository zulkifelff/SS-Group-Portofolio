<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/site.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap"
          rel="stylesheet">


    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">

    <title>SS Group</title>

</head>
<body>
<?php
$ceo_message = "Our continued augmentation and success depends not only on the work we do but how we do. By carrying the ritual of team work with faith and modernism that is embedded in our success to face new challenges. Trust and professional excellence shall always remain hallmark of our business.  ";
$director1_message = "We need to accept that we won’t always make the right decisions, that we’ll screw up royally sometimes – understanding that failure is not the opposite of success, it’s part of success.";
$director2_message = "I always did something I was a little not ready to do. I think that’s how you grow. When there’s that moment of ‘Wow, I’m not really sure I can do this,’ and you push through those moments, that’s when you have a breakthrough.";
?>
<?php include 'shared/header_new.php'; ?>
<section class="container-fluid row-gutters-void banner-index-page">
    <div class="container  page-banner-container">
        <h2 class="banner-heading-style animate__fadeInUpBig  wow " data-wow-duration="3s">
            <span
                    class="true-color ">Whatever</span></h2>
        <h2 class="banner-heading-style animate__fadeInUpBig  wow" data-wow-duration="3s">It Takes
        </h2>

        <button onclick="seeCompanies()" class="see-product-btn mt-15 wow animate__slideInUp" data-wow-duration="4s">See
            Companies
        </button>
    </div>
</section>
<!---->
<!--<section class="container-fluid row-gutters-void">-->
<!--    <img src="assets/images/process-ss-group.png" class="img-fluid">-->
<!--</section>-->

<section class="container-fluid row-gutters-void index-section-content">

    <!--    Stats and Shit-->
    <div class="container  index-section-content-positioning">
        <div class="row row-gutters-void">
            <div class="col-sm-12 col-md-12 col-lg-12  trivia-section">

                <div class="media">
                    <img loading="lazy" class="mr-3 animate__zoomIn wow " data-wow-duration="2s"
                         src="assets/images/Icon%20material-group.svg" alt="Dynamic Employee">
                    <div class="media-body text-center animate__zoomIn wow" data-wow-duration="2s">
                        <span><strong>2,200</strong> Dynamic Employees</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 trivia-section">
                <div class="media">

                    <div class="media-body text-center animate__zoomIn wow" data-wow-duration="3s"
                         style="">
                        <span class="count">400,000 Ton<br><strong>Raw Material Processed</strong>
    Annually</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 trivia-section">
                <div class="media">
                    <img loading="lazy" class="mr-3 animate__zoomIn wow" data-wow-duration="2s"
                         src="assets/images/Icon%20awesome-money-bill-alt.svg" alt="Material Turnover">
                    <div class="media-body text-center  animate__zoomIn wow" data-wow-duration="2s">
                        <span>PKR <strong>22 Billion</strong> Turnover</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 trivia-section">
                <div class="media">

                    <div class="media-body text-center animate__zoomIn wow" data-wow-duration="3s"
                         style="">
                        <span>1000 kW<br><strong>Renewable Energy</strong> Produced</span>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--    Our Companies-->
    <div id="our-companies" class="our-companies our-companies-bg container-fluid">

        <div class="container clearfix">
            <div class=" clearfix positioning-text-our-company">
                <h3 class="overall-content-heading">
                    Our Companies
                </h3>

                <p class="overall-content-paragraph mt-15">
                    Our mission statement and vision move across our all companies. No compromise on quality of
                    products.
                </p>
            </div>

            <div class="mt-40 clearfix all-companies-profile row">
                <div onclick="redirectTo('company-detail.php')"
                     class=" col-md-4 each-company-shit row-gutters-void wow animate__fadeIn" data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/industry-1.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text-company-shit wow animate__fadeIn" data-wow-duration="3s">SS Oil
                    </div>
                </div>
                <div onclick="redirectTo('company-detail.php')"
                     class=" pointer col-md-4 each-company-shit row-gutters-void wow animate__fadeIn"
                     data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/f.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text-company-shit wow animate__fadeIn" data-wow-duration="3s">SS Feed
                    </div>
                </div>
                <div onclick="redirectTo('ss-mills.php')"
                     class="pointer col-md-4 each-company-shit row-gutters-void wow animate__fadeIn"
                     data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/cmill.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text text-company-shit wow animate__fadeIn" data-wow-duration="3s">
                        Standard Spinning Mills
                    </div>
                </div>
                <div onclick="redirectTo('ss-agriculture.php')"
                     class="pointer col-md-4 each-company-shit row-gutters-void wow animate__fadeIn"
                     data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/farm.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text-company-shit wow animate__fadeIn" data-wow-duration="3s">SS
                        Agricultural Farm
                    </div>
                </div>
                <div onclick="redirectTo('ss-oil.php')"
                     class="pointer col-md-4 each-company-shit row-gutters-void wow animate__fadeIn"
                     data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/eoil.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text-company-shit wow animate__fadeIn" data-wow-duration="3s">SS Edible
                        Oil
                    </div>
                </div>
                <div onclick="redirectTo('sikandar-commo.php')"
                     class="pointer col-md-4 each-company-shit row-gutters-void wow animate__fadeIn"
                     data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/industry-3.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text-company-shit wow animate__fadeIn" data-wow-duration="3s">Sikandar
                        Commodities
                    </div>
                </div>

            </div>


        </div>

    </div>

    <!--    CEO Message-->
    <div class="container-fluid ceo-message-crap pb-60 pt-60">

        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-md-12 text-section">

                    <h3 class="message-heading">
                        CEO's Message
                    </h3>

                    <p class="message-punctuation text-left">&#34;</p>
                    <p class="message-text animate__fadeInLeft wow" data-wow-duration="2s">
                        <?php
                        echo $ceo_message
                        ?>
                    </p>
                    <p class="message-punctuation text-right">&#34;</p>


                </div>

                <div class="col-sm-12 col-md-4 offset-md-2 border-style-partial-images-ceo" style="display:none">
                <span class="left">
                    <span class="top">
                        <span class="right">
                            <span class="bottom">
                                <img loading="lazy"
                                     src="assets/images/people/ceo-man.png" alt="CEO Message 1 Avatar"
                                     class="img-fluid wow animate__fadeInDown" data-wow-duration="3s">
                            </span>
                        </span>
                    </span>
                </span>
                </div>

            </div>

        </div>


    </div>

    <!--    Our Customer-->
    <div id="our-customer-section" class="our-companies our-customer-bg container-fluid">

        <div class="container clearfix text-center">
            <div class="mt-60 clearfix positioning-text-our-customer text-center">
                <h3 class="overall-content-heading text-center">
                    Our Valued Customers
                </h3>


            </div>

            <div class="mt-40 clearfix all-customer-profile row wow animate__fadeIn" data-wow-duration="4s"
            ">

            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/us-denim-logo.png" alt="US Denim"
                     style="width:100%;">
                <div class=" text-customer-shit">US Denim</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/Sapphire.png" alt="Sapphire" style="width:100%;">
                <div class=" text-customer-shit">Sapphire Industries</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/master-paint.png" alt="Master Paint"
                     style="width:100%;">
                <div class=" text-customer-shit">Master Paint</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/nishat.png" alt="Nishat" style="width:100%;">
                <div class=" text-customer-shit">Nishat</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/kamal.png" alt="Kamal Industries"
                     style="width:100%;">
                <div class=" text-customer-shit">Kamal Industries</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/season-group.png" alt="Season Group"
                     style="width:100%;">
                <div class=" text-customer-shit">Season Group</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/united.png" alt="Industry 1" style="width:100%;">
                <div class=" text-customer-shit">United Industries Limited</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/friesland-campana.png" alt="Friesland Campina"
                     style="width:100%;">
                <div class=" text-customer-shit">Friesland Campina</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/all-noor.png" alt="Al Noor Farm"
                     style="width:100%;">
                <div class="text-customer-shit">Al Noor Farm</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/Azgard9.png" alt="Azgard9"
                     style="width:100%;height:168px;">
                <div class=" text-customer-shit">Azgard9</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/mekotex.jpg" alt="Mekotex"
                     style="width:100%;height:168px;">
                <div class=" text-customer-shit">Mekotex</div>
            </div>
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/fazal_cloth.png" alt="Fazal Cloth"
                     style="width:100%;">
                <div class=" text-customer-shit">Fazal Cloth Ltd.</div>
            </div>

            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/hi-tech.png" alt="Hi Tech Group of Companies"
                     style="width:100%;">
                <div class=" text-customer-shit">Hi Tech Group</div>
            </div>

            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/ibrahim.png" alt="Industry 1" style="width:100%;">
                <div class=" text-customer-shit">Ibrahim Industries</div>
            </div>


            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/reliance.png" alt="Reliance" style="width:100%;">
                <div class=" text-customer-shit">Reliance Weaving Group</div>
            </div>


            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/shahtaj.png" alt="Industry 1" style="width:100%;">
                <div class=" text-customer-shit">Shahtaj Textile</div>
            </div>


        </div>


    </div>

    </div>


</section>

<?php include 'shared/footer.php'; ?>
<script src="assets/scripts/site.js">

</script>
<script>
</script>
</body>
</html>
