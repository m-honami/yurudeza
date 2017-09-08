<?php get_header(); ?>

      <div id="content">
        <div id="inner-content" class="wrap cf">

            <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

              <?php
              the_archive_title( '<h1 class="heading-title l-bottom-large">', '</h1>' );
              the_archive_description( '<div class="taxonomy-description">', '</div>' );
              ?>
              
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              
              
              
                <?php 
                  $cat = get_the_category();
                  $cat_slug = $cat[0]->slug;
                  $cat_name = $cat[0]->name;
                ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                  <div class="card l-bottom-small">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="card-anchor">
                      <div class="card-design card-flex-row">
                        <figure class="card-thumbnail">
                          <?php the_post_thumbnail('list-thumbnail'); ?>
                          <div class="card-label <?php echo $cat_slug; ?>">
                            <span class="card-label-design"><?php echo $cat_name; ?></span>
                          </div>
                        </figure>
                        <div class="card-flex-row-text">
                          <h3 class="card-title"><?php the_title(); ?></h3>
                          <p class="card-date"><?php the_time('Y/m/d'); ?></p>
                        </div>
                      </div>
                    </a>
                  </div>
                </article>
              
              
              

 
              <?php endwhile; ?>

                  <?php bones_page_navi(); ?>

              <?php else : ?>

                  <article id="post-not-found" class="hentry cf">
                    <header class="article-header">
                      <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                    </header>
                    <section class="entry-content">
                      <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
                    <footer class="article-footer">
                        <p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
                    </footer>
                  </article>

              <?php endif; ?>

            </main>

          <?php get_sidebar(); ?>

        </div>

      </div>

<?php get_footer(); ?>
