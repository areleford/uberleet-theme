<?php get_header(); ?>

<div class="container" data-padding="1">
    <div class="row">
        <div class="column">
            <h1>Buttons</h1>
            <a href="#" class="uber button" data-options="inverted">Inverted</a>
        </div>
    </div>
</div>

<div class="container" data-padding="medium" data-color="yellow">
    <div class="row">
        <div class="column">
            <h2>Contact Us</h2>
        </div>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1" html_class="my-contact-form"]'); ?>
</div>

<?php get_footer(); ?>