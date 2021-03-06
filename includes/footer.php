<div class="wrapper row5">
    <footer id="footer" class="clear">
        <div class="one_quarter first">
            <h6 class="title">Physical Address</h6>
            <address class="btmspace-2">
                INGENUITY WORKS LTD<br>
                P.O.BOX 70812 ,<br>
                Dar Es Salaam<br>
                Tanzania
            </address>
            <ul class="nospace">
                <li class="btmspace-1"><span class="fa fa-phone"></span> +255 (682) 444 324</li>
                <li class="btmspace-1"><span class="fa fa-phone"></span> +255 (078) 521 9004</li>
                <li style="font-size: 13px;"><span class="fa fa-envelope-o"></span> Ingenuityworksltd@gmail.com</li>
            </ul>
        </div>
        <div class="one_quarter">
            <h6 class="title">Quick Links</h6>
            <ul class="nospace linklist">
                <li><a href="#">Intro</a></li>
                <li><a href="#">Our Works</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="one_quarter">
            <h6 class="title">Head Office</h6>
            <article>
                <p>Ubungo Plaza, 10th Floor<br>Yards are in: Chanika and Temeke</p>
            </article>
        </div>
        <div class="one_quarter">
            <h6 class="title">Grab Our Newsletter</h6>
            <form method="post" action="#">
                <fieldset>
                    <legend>Newsletter:</legend>
                    <input class="btmspace-15" type="text" value="" placeholder="Name">
                    <input class="btmspace-15" type="text" value="" placeholder="Email">
                    <button type="submit" value="submit">Submit</button>
                </fieldset>
            </form>
        </div>

    </footer>
</div>

<div class="wrapper row6">
    <div id="copyright" class="clear">

        <p class="fl_left"><?php
            $date = new DateTime();
            echo "&copy;".$date->format('Y')." <strong>Ingenuity Works</strong> All rights reserved<b> a Yoteyote experiment ,  Cute design* </b>";
            ?><a href="#">www.Ingenuityworks.com</a>

    </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/wow.min.js"></script>
<script type="text/javascript">
    wow = new WOW(
        {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true        // act on asynchronously loaded content (default is true)
        }
    );
    wow.init();
</script>
</body>
</html>