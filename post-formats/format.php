
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

             
              <div class="section-base l-bottom-small">
                <article id="post-<?php the_ID(); ?>" <?php post_class('cf') ; ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
                  <?php 
                    $cat = get_the_category();
                    $cat_slug = $cat[0]->slug;
                    $cat_name = $cat[0]->name;
                  ?>
                  <div id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                    <div class="card l-bottom-small eyecatch">
                      <div class="card-inner">
                        <figure class="card-thumbnail">
                          <?php the_post_thumbnail('list-thumbnail'); ?>
                          <div class="card-label <?php echo $cat_slug; ?>">
                            <span class="card-label-design"><?php echo $cat_name; ?></span>
                          </div>
                        </figure>
                        <h1 class="eyecatch-title"><?php the_title(); ?></h1>
                        <p class="card-date l-right-small"><?php the_time('Y/m/d'); ?></p>
                      </div>
                    </div>
                  </div>

                  <section class="entry-content cf <?php echo $cat_slug; ?>" itemprop="articleBody">
<!--                    <div class="panel">
                      <p class="contents-title">目次</p>
                      <ul class="contents-list">
                        <li><a href="#i-1">屋久島旅行のルートとプランについて</a></li>
                        <li><a href="#i-2">屋久島旅行のダイジェスト</a></li>
                          <ul class="l-left-small">
                            <li><a href="#i-3">&nbsp;&nbsp;1日目：名古屋→鹿児島</a></li>
                            <li><a href="#i-4">&nbsp;&nbsp;2日目：鹿児島→屋久島</a></li>
                            <li><a href="#i-5">&nbsp;&nbsp;3日目：屋久島</a></li>
                            <li><a href="#i-6">&nbsp;&nbsp;4日目：屋久島→鹿児島→名古屋</a></li>
                          </ul>
                        <li><a href="#i-7">屋久島旅行にかかった旅費・費用まとめ</a></li>
                        <li><a href="#i-8">まとめ</a></li>
                      </ul>
                    </div>
                   
                    <h2 id="i-1" class="article-title">屋久島旅行のルートとプランについて</h2>
                      <p>
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                      <h3 class="article-sub-title">h３が入りますよ。</h3>
                      <p>
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                      <h2 id="i-2" class="article-title">屋久島旅行のダイジェスト</h2>
                      <p>
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                      
                      <h3 id="i-3" class="article-sub-title">1日目：名古屋→鹿児島</h3>
                      <p>
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                      
                      <h3 id="i-4" class="article-sub-title">2日目：鹿児島→屋久島</h3>
                      <p>
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                      
                      <h3 id="i-5" class="article-sub-title">3日目：屋久島</h3>
                      <p>
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                      
                      <h3 id="i-6" class="article-sub-title">4日目：屋久島→鹿児島→名古屋</h3>
                      <p>
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                      <h2 id="i-7" class="article-title">屋久島旅行にかかった旅費・費用まとめ</h2>
                      <p>
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                      <h2 id="i-8" class="article-title">まとめ</h2>
                      <p>
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                       テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>-->
                    <?php
                      // the content (pretty self explanatory huh)
                      the_content();

                      /*
                       * Link Pages is used in case you have posts that are set to break into
                       * multiple pages. You can remove this if you don't plan on doing that.
                       *
                       * Also, breaking content up into multiple pages is a horrible experience,
                       * so don't do it. While there are SOME edge cases where this is useful, it's
                       * mostly used for people to get more ad views. It's up to you but if you want
                       * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                       *
                       * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                       *
                      */
                      wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                      ) );
                    ?>
                  </section> <?php // end article section ?>

                  <div class="article-footer l-text-right section-container">

                    <?php printf( __( '#', 'bonestheme' ).' %1$s', get_the_category_list(', ') ); ?>

                    <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                  </div> <?php // end article footer ?>

                  <?php //comments_template(); ?>

                </article> <?php // end article ?>
              </div>
