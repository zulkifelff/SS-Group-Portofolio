<?php
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';

?>


<footer class="clearfix" id="footer-section">
    <div class="container clearfix">
        <div class="footer-logo-class">
            <img src="assets/images/logo_2.png" alt="SS Group Logo">
            <br>
            <span class="footer-logo-text">S.S. Group</span>
        </div>

        <div class="footer-office-class">
            <h4 class="footer-heading-style">
                Head Office Address
            </h4>
            <p class="footer-text-style">
                2-Tipu Block, Garden Town, Lahore
            </p>

            <p class="footer-text-style">
                Phone: (092-42) 35831991-35831981-35900060
            </p>

            <p class="footer-text-style">
                Fax: (092-42) 35831982
            </p>

            <p class="footer-text-style">
                Email: ssoil.mills@ssgroup.pk
            </p>

        </div>

        <div class="footer-office-class">
            <h4 class="footer-heading-style">
                Vehari Office
            </h4>
            <p class="footer-text-style">
                27-W.B. Luddan Road, Vehari.
            </p>

            <p class="footer-text-style">
                Phone: (092-67) 3028479
            </p>

            <p class="footer-text-style">
                Email: ssoil.mills@ssgroup.pk
            </p>


        </div>


        <div class="footer-office-class">
            <h4 class="footer-heading-style">
                Depalpur Site
            </h4>
            <p class="footer-text-style">
                Moza Jalal Kot,
            </p>

            <p class="footer-text-style">
                Kasur by Pass-Road
            </p>

            <p class="footer-text-style">
                Depalpur
            </p>


        </div>

        <div class="footer-office-class">
            <h4 class="footer-heading-style">
                Contact Us
            </h4>

            <div class="contact-us-form-footer">
                <form action="../contact_mail.php" method="post">

                    <div class="form-group">
                        <input type="text" name="name" id="name-contact-us" class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" id="email-contact-us" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input style="height: 51px" name="message" id="message" type="text" class="form-control"
                               placeholder="Message">
                    </div>


                    <div class="clearfix">
                        <button type="submit" class="submit-contact-form" name="submit" value="Submit">Submit</button>
                        <!--                    <button type="submit"  class="submit-contact-form">Submit</button>-->
                    </div>
                </form>
            </div>

        </div>


    </div>
</footer>


<section class="copyright-section clearfix">
    <div class="container-fluid clearfix row-gutters-void">

        <div class="pull-left copyright-text-style mobile-footer-responsive">
            <span class=""> &#169; Copyrights, <?php echo date("Y"); ?>. </span>

            <span> &#169; All Rights Reserved.</span>
        </div>


        <div class="pull-right mobile-footer-responsive">
<span class="footer-link-sm facebook">
    <a title="Facebook" href="#" target="_blank"></a>
</span>

            <span class="footer-link-sm instagram">
    <a title="Instagram" href="#" target="_blank"></a>
</span>

            <span class="footer-link-sm twitter">
    <a title="Twitter" href="#" target="_blank"></a>
</span>

        </div>
    </div>

</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"
        integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
