<?php snippet('header') ?>

    <article class="section">

        <header class="section-header contain">
            <h1 class="title-section title--major">
                <a class="contact-email" href="mailto:<?php echo $site->email() ?>"><?php echo $page->email_text()->html() ?></a> <br>
                <?php if (!$site->phone()->empty() && !$page->phone_text()->empty()) : ?>
                    <a class="contact-phone" href="tel:<?php echo $site->phone() ?>"><?php echo $page->phone_text()->html() ?></a>
                <?php endif; ?>
            </h1>
            <img class="title-underline" src="<?php echo $site->url(); ?>/assets/img/headers/header-08.svg" alt="">
        </header>

        <section class="contain contain--minute">
            <?php echo markdown($page->text()) ?>
        </section>

        <div class="u-flex u-flex--row u-flex--center-v contain contain--social">
            <?php $social_links = $page->get_social_links(); ?>
            <?php foreach($social_links as $social_link) : ?>
                <div class="btn-group btn-group--svgicon u-textcenter">
                    <a target="_blank" href="<?php echo $social_link['url'] ?>">
                        <?php snippet('svgants', array('type' => strtolower($social_link['title']))); ?>
                        <div class="btn-group--svgicon-content">
                            <div class="icon icon--block icon--large icon--bravo">
                                <?php echo snippet('icons/' . strtolower($social_link['title'])) ?>
                            </div>
                            <span class="icon-label icon-label--social"><?php echo $social_link['title'] ?></span>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </article>

<?php snippet('footer') ?>
