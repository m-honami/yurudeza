<?php get_header(); ?>

      <div id="content">
        <div id="inner-content" class="wrap cf">
            <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
              <!-- ページ分岐 -->
              <?php if (is_home() && !is_paged()) : // 1ページ目 HOME ?>
              <section class="l-bottom-large">
                <h2 class="heading-title l-bottom-small">
                  <div>人気の記事<br>
                    <span class="text-xsmall">RANKING</span>
                  </div>
                </h2>
                <div class="card-container l-harf">
                  <div class="card">
                    <a href="http://yurudeza.com/2017/09/05/about-design/" class="card-anchor">
                      <article class="card-design">
                        <figure>
                          <img src="http://creator.dwango.co.jp/wp-content/uploads/2017/02/top-1.jpg" alt="" class="card-thumbnail">
                          <div class="card-label design">
                            <span class="card-label-design">デザイン</span>
                          </div>
                        </figure>
                        <h3 class="card-title">デザインの投稿をします。</h3>
                      </article>
                    </a>
                  </div>
                  <div class="card">
                    <a href="http://yurudeza.com/2017/09/05/about-life/" class="card-anchor">
                      <article class="card-design">
                        <figure>
                          <img src="<?php echo get_template_directory_uri(); ?>/library/images/sample.jpg" alt="" class="card-thumbnail">
                          <div class="card-label life">
                            <span class="card-label-design">暮らし</span>
                          </div>
                        </figure>
                        <h3 class="card-title">暮らしに関する投稿をします。</h3>
                      </article>
                    </a>
                  </div>
                  <div class="card">
                    <a href="http://yurudeza.com/2017/09/04/about-trip/" class="card-anchor">
                      <article class="card-design">
                        <figure>
                          <img src="<?php echo get_template_directory_uri(); ?>/library/images/sample.jpg" alt="" class="card-thumbnail">
                          <div class="card-label trip">
                            <span class="card-label-design">旅行</span>
                          </div>
                        </figure>
                        <h3 class="card-title">旅行に関する投稿をします。</h3>
                      </article>
                    </a>
                  </div>
                  <div class="card">
                    <a href="http://yurudeza.com/2017/09/05/about-monologue/" class="card-anchor">
                      <article class="card-design">
                        <figure>
                          <img src="<?php echo get_template_directory_uri(); ?>/library/images/sample.jpg" alt="" class="card-thumbnail">
                          <div class="card-label monologue">
                            <span class="card-label-design monologue">ひとりごと</span>
                          </div>
                        </figure>
                        <h3 class="card-title">ひとりごとを投稿します。</h3>
                      </article>
                    </a>
                  </div>
                </div>
<!--                <div class="article-container">
                  <article class="article">
                    <a class="design" href="#">
                      <figure class="thumbBox">
                        <img src="http://creator.dwango.co.jp/wp-content/uploads/2017/02/top-1.jpg" alt="" class="thumbImg">
                        <div class="thumbLabel">
                          <span class="labelName">デザイン</span>
                        </div>
                      </figure>
                      <section class="articleInfo">
                        <h2>水彩画風の画像を作る方法</h2>
                        <p class="articleDate">
                          <span class=""><?php the_time('Y/m/d'); ?></span>
                        </p>
                      </section>
                    </a>
                  </article>
                  <article class="article">
                    <a class="life">
                      <figure class="thumbBox">
                        <img src="http://creator.dwango.co.jp/wp-content/uploads/2017/02/top-1.jpg" alt="" class="thumbImg">
                        <div class="thumbLabel">
                          <span class="labelName">暮らし</span>
                        </div>
                      </figure>
                      <section class="articleInfo">
                        <h2>野菜の冷凍方法は？</h2>
                        <p class="articleDate">
                          <span class=""><?php the_time('Y/m/d'); ?></span>
                        </p>
                      </section>
                    </a>
                  </article>
                  <article class="article">
                    <a class="trip">
                      <figure class="thumbBox">
                        <img src="http://creator.dwango.co.jp/wp-content/uploads/2017/02/top-1.jpg" alt="" class="thumbImg">
                        <div class="thumbLabel">
                          <span class="labelName">旅行</span>
                        </div>
                      </figure>
                      <section class="articleInfo">
                        <h2>屋久島おすすめルート!</h2>
                        <p class="articleDate">
                          <span class=""><?php the_time('Y/m/d'); ?></span>
                        </p>
                      </section>
                    </a>
                  </article>
                  <article class="article">
                    <a class="monologue">
                      <figure class="thumbBox">
                        <img src="http://creator.dwango.co.jp/wp-content/uploads/2017/02/top-1.jpg" alt="" class="thumbImg">
                        <div class="thumbLabel">
                          <span class="labelName">ひとりごと</span>
                        </div>
                      </figure>
                      <section class="articleInfo">
                        <h2>水彩画風の画像を作る方法</h2>
                        <p class="articleDate">
                          <span class=""><?php the_time('Y/m/d'); ?></span>
                        </p>
                      </section>
                    </a>
                  </article>
                </div>-->
              </section>
              
              <?php else : // 2ページ目以降 ?>
              <?php endif; ?>
              
              
              
              
              
              
              
              <section class="l-bottom-small">
                <h2 class="heading-title l-bottom-small">
                  <div>新着記事<br>
                    <span class="text-xsmall">NEW POSTS</span>
                  </div>
                </h2>
                
                <div class="article-container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php 
                  $cat = get_the_category();
                  $cat_slug = $cat[0]->slug;
                  $cat_name = $cat[0]->name;
                ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                  <div class="card l-bottom-medium">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="card-anchor">
                      <div class="card-design">
                        <figure class="card-thumbnail">
                          <?php the_post_thumbnail('list-thumbnail'); ?>
                          <div class="card-label <?php echo $cat_slug; ?>">
                            <span class="card-label-design"><?php echo $cat_name; ?></span>
                          </div>
                        </figure>
                        <h3 class="card-title"><?php the_title(); ?></h3>
                        <p class="card-date"><?php the_time('Y/m/d'); ?></p>
                      </div>
                    </a>
                  </div>
                </article>
                
                
<!--                <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                  <div class="article-header">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="design">
                    <figure class="thumbBox">
                      <?php the_post_thumbnail('list-thumbnail'); ?>
                        <div class="thumbLabel">
                          <span class="labelName">デザイン</span>
                        </div>
                    </figure>
                      <h1 class="h2 entry-title"><?php the_title(); ?></h1>
                      <div class="articleDate">
                        <span><?php the_time('Y/m/d'); ?></span>
                      </div>
                    </a>
                  </div>-->
                  
  <!--                <section class="entry-content cf">
                    <?php the_content(); ?>
                  </section>-->

  <!--                <footer class="article-footer cf">
                    <p class="footer-comment-count">
                      <?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
                    </p>


                     <?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                    <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
                  </footer>-->

                </article>


              <?php endwhile; ?>

                  <?php bones_page_navi(); ?>

              <?php else : ?>

                <article id="post-not-found" class="cf">
                  <div class="article-header">
                    <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                  </div>
                  <div class="entry-content">
                    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                  </div>
                  <footer class="article-footer">
                      <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
                  </footer>
                </article>

              <?php endif; ?>
              </section>
              <div class="socialIcon l-bottom-large">
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
