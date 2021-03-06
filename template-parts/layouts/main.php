<?php 
if(have_rows('block_editor') ) : ?>
    <?php while(have_rows('block_editor') ) : the_row(); ?>

        <?php if(get_row_layout() == 'content_block' ) : ?>

            <?php get_template_part( 'template-parts/modules/entry-content_layout' ); ?>

        <?php endif; ?>

        <?php if(get_row_layout() == 'team' ) : ?>

            <?php get_template_part( 'template-parts/modules/team' ); ?>

        <?php endif; ?>

        <?php if(get_row_layout() == 'cta' ) : ?>

            <?php get_template_part( 'template-parts/modules/cta' ); ?>

        <?php endif; ?>

        <?php if(get_row_layout() == 'two-column_content' ) : ?>

            <?php get_template_part( 'template-parts/modules/switchbox_layout' ); ?>
     
        <?php endif; ?>

        <?php if(get_row_layout() == 'hover_box' ) : ?>

            <?php get_template_part( 'template-parts/modules/scrapbook_layout' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'hover_card' ) : ?>

            <?php get_template_part( 'template-parts/modules/card_layout' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'icon_group' ) : ?>

            <?php get_template_part( 'template-parts/modules/icon-list_layout' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'contact' ) : ?>

            <?php get_template_part( 'template-parts/modules/contact_layout' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'carousel' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_carousel' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'global_carousel' ) : ?>

            <?php get_template_part( 'template-parts/modules/carousel' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'counterup' ) : ?>

            <?php get_template_part( 'template-parts/modules/counterup' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'faq' ) : ?>

            <?php get_template_part( 'template-parts/modules/faq' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'process' ) : ?>

            <?php get_template_part( 'template-parts/modules/process' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'about' ) : ?>

            <?php get_template_part( 'template-parts/modules/about-feature' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'box_group' ) : ?>

            <?php get_template_part( 'template-parts/modules/switchbox' ); ?>
    
        <?php endif; ?>

        <?php if(get_row_layout() == 'hero' ) : ?>

            <?php get_template_part( 'template-parts/modules/layout_hero' ); ?>
    
        <?php endif; ?>

    <?php endwhile; ?>
    
<?php endif; ?>