        </section>

    </section>

    <footer class="footer">

        <div class="footer-inner contain">
            <nav class="nav nav--footer f-futura">
                <?php snippet('nav-internal'); ?>
                <?php snippet('nav-external'); ?>
            </nav>

            <aside>
                <?php echo $site->copyright()->kirbytext(); ?>
            </aside>
        </div>

    </footer>

    <div id="scripts">
        <?php echo js('assets/js/script.min.js') ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', '<?php echo $site->analytics(); ?>');
            ga('send', 'pageview');
        </script>
    </div>

</body>
</html>
