<?php get_header(); ?>

<main>
        <section class="lets-work-together-section section--standard-height">
            <div class="lets-heading--container">
                <h2 class="section--heading">Let's Work Together...</h2><img src="<?php echo get_theme_file_uri('') . '/assets/images/page_6_doodle-removebg-preview.png' ?>" class="squiggly"></img>
            </div>
            <div class="contact--container">
                <div class="contact-form--container-left dashed-top-and-bot">Want to partner or collaborate creatively? <span class="smol">Send me a message here </span><span class="right-arrow"></span></div>
                <form class="contact-form">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Your name">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Your email">
                    <label for="message">Message:</label>
                    <input type="text" name="message" id="message" placeholder="Your message">
                    <button type="submit">Send</button>
                </form>
            </div>
        </section>
        <section class="style-bundle-section section--standard-height">
            <h2 class="section--heading">Style Bundle Or Styling Inquiries...</h2>
            <div class="contact--container">
                <div class="dashed-top-and-bot contact--bundle__left">Fill out this request form to be considered for a style bundle <span class="curly-heart"></span></div>
                <div class="contact--bundle__right">Placeholder for survey monkey</div>
            </div>
        </section>
        <section class="find-me-section">
            <h2 class="section--heading">Find me online...</h2>
            <a href="" class="find--row find--insta">
                <img src="" class="find--pic find--insta__pic"></img>
                <div class="find--insta__handle">@MARIAHTHEMYSTIC</div>
            </a>
            <a href="" class="find--row find--tik-tok">
                <img src="<?php echo get_theme_file_uri('') . '/assets/images/tiktok-removebg-preview.png' ?>" class="find--pic find--tik-tok__pic"></img>
                <div class="find--tik-tok__handle">@MARIAHTHEMYSTIC</div>
            </a>
            <a href="" class="find--row find--linkedin">
                <img src="<?php echo get_theme_file_uri('') . '/assets/images/linkedin-removebg-preview.png' ?>" class="find--pic find--linkedin__pic"></img>
                <div class="find--linkedin__name">Mariah Neumaier</div>
            </a>
            <a href="" class="find--row find--spotify">
                <img src="<?php echo get_theme_file_uri('') . '/assets/images/spotify-removebg-preview.png' ?>" class="find--pic find--spotify__pic"></img>
                <div class="find--spotify__name">Mariah Neumaier</div>
            </a>
        </section>
    </main>

    <?php get_footer() ?>
