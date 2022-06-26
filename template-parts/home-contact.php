<?php
/**
 * Template part for displaying contact form
 * 
 * @package CT_Custom
 */
?>
    <section class="home-contact">
        <div class="section-heading">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id blanditiis eaque libero necessitatibus explicabo iusto maiores alias sequi ab repellendus quidem culpa veritatis omnis rem ducimus sit odit, maxime minus odio consequatur dolorum. Ad, voluptatibus ipsam! Vero deserunt nostrum harum quisquam voluptatibus, sed quaerat corporis porro asperiores odit possimus facere.</p>
        </div>
        <div class="section-body">
            <div class="contact-form">
                <h3 class="block-heading">Contact Us</h3>
                <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
            </div>
            <div class="contact-detail">
                <h3 class="block-heading">Reach Us</h3>
                <div class="address">
                    <p class="company">Coalition Skills Test</p>
                    <p class="street"><?php echo get_option( 'address_information' ); ?></p>
                </div>
                <div class="contact">
                    <p class="phone">Phone: <?php echo get_option( 'phone_number' ); ?></p>
                    <p class="fax">Fax: <?php echo get_option( 'fax_number' ); ?></p>
                </div>
                <div class="social-links">
                    <ul>
                        <?php if ( get_option( 'facebook_link' ) ) : ?>
                            <a href="<?php echo get_option( 'facebook_link' ); ?>">
                                <li>
                                    <i class="bi bi-facebook"></i>
                                </li>
                            </a>
                        <?php endif; ?>
                        <?php if ( get_option( 'instagram_link' ) ) : ?>
                            <a href="<?php echo get_option( 'instagram_link' ); ?>">
                                <li>
                                    <i class="bi bi-instagram"></i>
                                </li>
                            </a>
                        <?php endif; ?>
                        <?php if ( get_option( 'youtube_link' ) ) : ?>
                            <a href="<?php echo get_option( 'youtube_link' ); ?>">
                                <li>
                                    <i class="bi bi-youtube"></i>
                                </li>
                            </a>
                        <?php endif; ?>
                        <?php if ( get_option( 'linkedin_link' ) ) : ?>
                            <a href="<?php echo get_option( 'linkedin_link' ); ?>">
                                <li>
                                    <i class="bi bi-linkedin"></i>
                                </li>
                            </a>
                        <?php endif; ?>
                        <?php if ( get_option( 'twitter_link' ) ) : ?>
                            <a href="<?php echo get_option( 'twitter_link' ); ?>">
                                <li>
                                    <i class="bi bi-twitter"></i>
                                </li>
                            </a>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    

