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
<?php include 'shared/header.php'; ?>
<section class="container-fluid row-gutters-void banner-index-page">
    <div class="container  page-banner-container">
        <h2 class="banner-heading-style animate__fadeInUp animate__slow wow" data-wow-duration="3s">Building <span
                    class="true-color">Values</span></h2>
        <h2 class="banner-heading-style animate__fadeInUp animate__slow wow" data-wow-duration="3s">Strengthen <span
                    class="true-color">Community</span></h2>

        <button onclick="seeCompanies()" class="see-product-btn mt-15">See Companies</button>
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
                    <img loading="lazy" class="mr-5 animate__flipInX animate__slow wow " data-wow-duration="2s"
                         src="assets/images/Icon%20material-group.svg" alt="Dynamic Employee">
                    <div class="media-body text-center animate__fadeInUp animate__slow wow" data-wow-duration="4s">
                        <span><strong>2,200</strong> Dynamic Employees</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 trivia-section">
                <div class="media">
                    <img loading="lazy" class="mr-5 animate__flipInX animate__slow wow" data-wow-duration="2s"
                         src="assets/images/Icon%20awesome-money-bill-alt.svg" alt="Material Turnover">
                    <div class="media-body text-center animate__fadeInUp animate__slow wow" data-wow-duration="4s">
                        <span>PKR <strong>22 Billion</strong> Turnover</span>
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
                <div class=" col-md-4 each-company-shit row-gutters-void wow animate__fadeIn" data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/industry-1.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text-company-shit">SS Oil</div>
                </div>
                <div onclick="redirectTo('company-detail.php')"
                     class=" pointer col-md-4 each-company-shit row-gutters-void wow animate__fadeIn"
                     data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/industry-2.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text-company-shit">SS Feed</div>
                </div>
                <div class=" col-md-4 each-company-shit row-gutters-void wow animate__fadeIn" data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/industry-3.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text text-company-shit">Spinning</div>
                </div>
                <div class=" col-md-4 each-company-shit row-gutters-void wow animate__fadeIn" data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/industry-1.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text-company-shit">Agricultural Farm</div>
                </div>
                <div class=" col-md-4 each-company-shit row-gutters-void wow animate__fadeIn" data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/industry-2.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text-company-shit">Cooking Oil</div>
                </div>
                <div class=" col-md-4 each-company-shit row-gutters-void wow animate__fadeIn" data-wow-duration="2s">
                    <img loading="lazy" src="assets/images/industry-3.png" alt="Industry 1" style="width:100%;">
                    <div class="centered bottom text-company-shit">Sikandar Commodities</div>
                </div>

            </div>


        </div>

    </div>

    <!--    CEO Message-->
    <div class="container-fluid ceo-message-crap pb-60 pt-60">

        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-md-6 text-section">

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

                <div class="col-sm-12 col-md-4 offset-md-2 border-style-partial-images-ceo">
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

<!--            Director -->
            <div class="row mt-100 d-none d-sm-block">

                <div class="col-sm-12 col-md-4  border-style-partial-images-ceo">
                <span class="left">
                    <span class="top">
                        <span class="right">
                            <span class="bottom">
                                <img loading="lazy" src="assets/images/people/director-man.png" alt="Director Avatar"
                                     class="img-fluid wow animate__fadeInDown" data-wow-duration="3s">
                            </span>
                        </span>
                    </span>
                </span>
                </div>

                <div class="col-sm-12 col-md-6 offset-md-2 text-section right-sided">

                    <h3 class="message-heading">
                        Director's Message
                    </h3>

                    <p class="message-punctuation text-left">&#34;</p>
                    <p class="message-text animate__fadeInLeft wow" data-wow-duration="2s">
                        <?php
                        echo $director1_message
                        ?>
                    </p>
                    <p class="message-punctuation text-right">&#34;</p>


                </div>

            </div>
            <div class="row mt-100 d-block d-sm-none">
                <div class="col-sm-12 col-md-6 text-section">

                    <h3 class="message-heading director-position">
                        Directors's Message
                    </h3>

                    <p class="message-punctuation text-left">&#34;</p>
                    <p class="message-text animate__fadeInLeft wow" data-wow-duration="2s">
                        <?php
                        print_r($director1_message)
                        ?>
                    </p>
                    <p class="message-punctuation text-right">&#34;</p>


                </div>

                <div class="col-sm-12 col-md-4 offset-md-2 border-style-partial-images-ceo">
                <span class="left">
                    <span class="top">
                        <span class="right">
                            <span class="bottom">
                                <img loading="lazy" src="assets/images/people/director-man.png" alt="Director 2 Avatar"
                                     class="img-fluid wow animate__fadeInDown" data-wow-duration="3s">
                            </span>
                        </span>
                    </span>
                </span>
                </div>

            </div>

<!--            Director 2-->
            <div class="row mt-100">
                <div class="col-sm-12 col-md-6 text-section">

                    <h3 class="message-heading director-position">
                        Directors's Message
                    </h3>

                    <p class="message-punctuation text-left">&#34;</p>
                    <p class="message-text animate__fadeInLeft wow" data-wow-duration="2s">
                        <?php
                        print_r($director2_message)
                        ?>
                    </p>
                    <p class="message-punctuation text-right">&#34;</p>


                </div>

                <div class="col-sm-12 col-md-4 offset-md-2 border-style-partial-images-ceo">
                <span class="left">
                    <span class="top">
                        <span class="right">
                            <span class="bottom">
                                <img loading="lazy" src="assets/images/people/director2-man.png" alt="Director 2 Avatar"
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
    <div class="our-companies our-customer-bg container-fluid">

        <div class="container clearfix text-center">
            <div class="mt-60 clearfix positioning-text-our-customer text-center">
                <h3 class="overall-content-heading text-center">
                    Our Valued Customers
                </h3>


            </div>

            <div class="mt-40 clearfix all-customer-profile row wow animate__fadeIn" data-wow-duration="4s"
            ">
            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/all-noor.png" alt="Al Noor Farm"
                     style="width:100%;">
                <div class="text-customer-shit">Al Noor Farm</div>
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
                <img loading="lazy" src="assets/images/all-customer/kamal.png" alt="Kamal Industries"
                     style="width:100%;">
                <div class=" text-customer-shit">Kamal Industries</div>
            </div>

            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/nishat.png" alt="Nishat" style="width:100%;">
                <div class=" text-customer-shit">Nishat</div>
            </div>

            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/reliance.png" alt="Reliance" style="width:100%;">
                <div class=" text-customer-shit">Reliance Weaving Group</div>
            </div>

            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/Sapphire.png" alt="Sapphire" style="width:100%;">
                <div class=" text-customer-shit">Sapphire Industries</div>
            </div>

            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/season-group.png" alt="Season Group"
                     style="width:100%;">
                <div class=" text-customer-shit">Season Group</div>
            </div>

            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/shahtaj.png" alt="Industry 1" style="width:100%;">
                <div class=" text-customer-shit">Shahtaj Textile</div>
            </div>

            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/united.png" alt="Industry 1" style="width:100%;">
                <div class=" text-customer-shit">United Industries Limited</div>
            </div>

            <div class="col-md-2 each-customer-shit row-gutters-void">
                <img loading="lazy" src="assets/images/all-customer/zubair.png" alt="Industry 1" style="width:100%;">
                <div class=" text-customer-shit">Zubair Feed</div>
            </div>

            <!--                <div class="col-md-2 each-customer-shit row-gutters-void">-->
            <!--                    <img loading="lazy" src="assets/images/customer-8/free-logos-png-1-Transparent-Images.png" alt="Industry 1" style="width:100%;">-->
            <!--                    <div class=" text-customer-shit">Al Noor Poultry Services</div>-->
            <!--                </div>-->

            <!--                <div class="col-md-2 each-customer-shit row-gutters-void">-->
            <!--                    <img loading="lazy" src="assets/images/customer-6/travels-logo-png-for-business-design-template-03d1ab18244e3126af5a7b41554e7c99_screen.png" alt="Industry 1" style="width:100%;">-->
            <!--                    <div class=" text-customer-shit">Zubair Feeds Mills Pvt. Ltd.</div>-->
            <!--                </div>-->

            <!--                <div class="col-md-2 each-customer-shit row-gutters-void">-->
            <!--                    <img loading="lazy" src="assets/images/customer-7/google-stadia-logo-hd4.png" alt="Industry 1" style="width:100%;">-->
            <!--                    <div class=" text-customer-shit">Hi-Tech Feeds Mills Pvt. Ltd.</div>-->
            <!--                </div>-->


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
