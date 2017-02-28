        <?php if ($page->intendedTemplate() !== 'contact') : ?>

            <section class="section section--sub section--contact-footer">

                <div class="contain">
                    <header class="section-header contain">
                        <h2 class="title-section"><?php echo $site->contact_title()->html() ?></h2>
                        <img class="title-underline" src="<?php echo $site->url(); ?>/assets/img/headers/header-03.svg" alt="">
                    </header>

                    <section class="splitboxes">

                        <div class="splitbox splitbox--image">
                            <figure class="figure figure--svg">
                                <img src="<?php echo $page->contact_image()->url() ?>" alt="<?php echo $page->contact_image()->name() ?>">
                            </figure>
                        </div>

                        <div class="splitbox u-textcenter">
                            <h3 class="title-section">
                                <a class="contact-email" href="mailto:<?php echo $site->email() ?>"><?php echo $site->email_text()->html() ?></a> <br>
                                <?php if (!$site->phone()->empty() && !$site->phone_text()->empty()) : ?>
                                    <a class="contact-phone" href="tel:<?php echo $site->phone() ?>"><?php echo $site->phone_text()->html() ?></a>
                                <?php endif; ?>
                            </h3>
                            <footer class="contact-description">
                                <?php echo $site->contact_text()->html() ?>
                            </footer>
                        </div>

                    </section>
                </div>

            </section>

        <?php endif; ?>

        </section>

    </section>

    <footer class="footer">

        <div class="footer-inner contain contain--footer">
            <aside>
                <?php echo $site->copyright()->kirbytext(); ?>
            </aside>
        </div>

    </footer>

    <div id="scripts">
        <?php echo js('assets/js/script.min.js'); ?>
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
