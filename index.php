<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="site">
            <header id="site-header">
                <div class="layout">
                    <div id="site-brand">
                    <?php if (is_user_logged_in()): ?>
                        <?php $user = wp_get_current_user(); ?>
                        <p>Vous etes connecté en tant que : <strong><?= $user->display_name; ?></strong> - <a href="<?= wp_logout_url(site_url()); ?>">quitter</a></p>
                    <?php else: ?>
                        <p>Vous etes un invité</p>
                    <?php endif; ?>                              
                    </div>
                    
                    <div id="site-menu">
                        <?php wp_nav_menu(['theme_location' => 'primary']); ?>
                    </div>
                </div>
            </header>
            <section id="site-content">
                <div class="layout">
                <?php if (have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <article <?php post_class(); ?>>
                            <header>
                                <?php the_title('<h1>', '</h1>'); ?>
                            </header>
                            <section class="post-content">
                                <?php the_content(); ?>
                            </section>
                        </article>
                    <?php endwhile; ?>
                <?php else: ?>
                    <h1>404 Not Found</h1>
                    <p>L'URL demandé n'est pas disponible. </p>
                <?php endif; ?>                        
                </div>
            </section>        
        </div>
        
        <?php wp_footer(); ?>
    </body>
</html>