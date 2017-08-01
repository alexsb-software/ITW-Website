<!-- Footer Wrapper -->
<div id="footer-wrapper">

    <!-- Footer -->
    <section id="footer" class="container">
        <div class="row">
            <div class="4u">
                <section>
                    <header>
                        <h2>Sponsors</h2>
                    </header>
                    <ul class="divided">
                        <li>To Be Announced Soon!</li>
                        <!-- <li><a href=""><img src="images/sponsors/vodafone.png"/></a></li> 
                        <li><a href=""><img src="images/sponsors/itida.png"/></a></li>
                        <li><a href=""><img src="images/sponsors/climax.png"/></a></li>   -->
                    </ul>
                </section>
            </div>

            <div class="4u">
                <section>
                    <header>
                        <!-- <h2 style="text-indent: -9999px;">Sponsors</h2> -->
                    </header>
                    <ul class="divided">
                        <!-- <li><a href=""><img src="images/sponsors/EMC2.png"/></a></li>
                        <li><a href=""><img src="images/sponsors/ntra.png"/></a></li> -->
                    </ul>
                </section>
            </div>

            <div class="4u">
                <!--
            <!- Custom Subscribe JS PART ->
            <script>
                $(document).ready(function() {
                    /*
                    function isValidEmailAddress(emailAddress) {
                        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
                        return pattern.test(emailAddress);
                    };
                    
                    $('#footer_subscribe').submit(function(event){
                        event.preventDefault();
                        var self = this,
                            email_name = $("#footer_subscribe input[type='text']").val();
                        if( isValidEmailAddress( email_name ) ) {
                            // self.submit();
                            
                            jQuery.post('register_user.php', {email_name : email_name}, function (data) {
                                //console.log(data);
                                jQuery('.footer_subscribe .msgSubscribe').html(data).fadeIn();
                                // alert(data);
                            }).error(function() { alert('your error msg here'); });
                            
                        }
                        else{
                            alert("Wrong Email address");
                            return false;
                        }
                    });
                    */                    
                });
            </script>
            <!- Custom Subscribe JS PART END ->
            <section>
                <header>
                    <h2>Subscribe</h2>
                </header>
                <p>
                        Subscribe now to be updated with everything about ITW 16
                </p>
                <footer>
                    <form id="footer_subscribe" class="footer_subscribe" action="" method="POST">
                        <input type="text" placeholder="E-mail" name="email_name" />
                        <input type="submit" class="button" value="Subscribe" disabled />
                        <div class="msgSubscribe"></div>
                    </form>
                </footer>
            </section>
            
                
            <div style="height: 30px;"></div>
            -->
                <section>
                    <header>
                        <h2>Follow Us!</h2>
                    </header>
                    <ul class="social">
                        <li><a class="fa fa-facebook solo" href="https://www.facebook.com/IEEE.AlexSB.ITW" target="_blank"><span>Facebook</span></a></li>
                        <li><a class="fa fa-twitter solo" href="https://twitter.com/IEEEAlexSB" target="_blank"><span>Twitter</span></a></li>
                        <li><a class="fa fa-youtube solo" href="https://www.youtube.com/user/IEEEAlexandriaSB" target="_blank"><span>Youtube</span></a></li>
                        <li><a class="fa fa-instagram solo" href="https://instagram.com/ieeealexsb/" target="_blank"><span>Instagram</span></a></li>
                        <li><a class="fa fa-linkedin solo" href="https://www.linkedin.com/company-beta/10313926/" target="_blank"><span>LinkedIn</span></a></li>
                        <!-- <li><a class="fa fa-dribbble solo" href="#" target="_blank"><span>Dribbble</span></a></li>
                    <li><a class="fa fa-google-plus solo" href="https://plus.google.com/117722635654912525328" target="_blank"><span>Google+</span></a></li> -->
                    </ul>
                    <ul class="contact">
                        <li>
                            <h3>For more information:</h3>
                            <p>info@alexsb.org</p>
                        </li>
                    </ul>
                </section>

            </div>
        </div>
        <div class="row">
            <div class="12u">
                <!-- Copyright -->
                <div id="copyright">
                    <ul class="links">
                        <li>&copy;
                            <a href="http://alexsb.org">
                                <?php echo date("Y"); ?> | IEEE AlexSB Software Development Committee</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>