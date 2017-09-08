<?php get_header(); ?>

      <div id="content">

        <div class="wrap cf">

          <main id="main" class="m-all t-2of3 d-5of7 cf l-bottom-large" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <?php
                /*
                 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
                 *
                 * So this function will bring in the needed template file depending on what the post
                 * format is. The different post formats are located in the post-formats folder.
                 *
                 *
                 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
                 * A SPECIFIC POST FORMAT.
                 *
                 * If you want to remove post formats, just delete the post-formats folder and
                 * replace the function below with the contents of the "format.php" file.
                */
                get_template_part( 'post-formats/format', get_post_format() );
              ?>

            <?php endwhile; ?>

            <?php else : ?>

              <article id="post-not-found" class="hentry cf">
                  <header class="article-heading-title">
                    <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                  </header>
                  <section class="entry-content">
                    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                  </section>
                  <footer class="article-footer">
                      <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                  </footer>
              </article>

            <?php endif; ?>

         
              <div class="socialIcon l-bottom-medium section-container">
                <ul>
                  <li class="twitter">
                    <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span class="ssdesc">ツイート</span></a>
                  </li>
                  <li class="facebook">
                    <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span class="ssdesc">シェア</span></a>
                  </li>
                  <li class="hatena">
                    <a href="#" target="_blank"><i>B!</i><span class="ssdesc"> はてブ</span></a>
                  </li>
                  <li class="pocket">
                    <a href="#" target="_blank"><i class="fa fa-get-pocket" aria-hidden="true"></i><span class="ssdesc"> Pocket</span></a>
                  </li>
                </ul>
              </div>

          </main>

          <?php get_sidebar(); ?>

        </div>

      </div>

<?php get_footer(); ?>
