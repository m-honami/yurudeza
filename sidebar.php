        <div id="sidebar1" class="m-all t-1of3 d-2of7 last-col cf" role="complementary">
          <section class="l-section-container">
            <div class="section-base">

              <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

                <?php dynamic_sidebar( 'sidebar1' ); ?>

              <?php else : ?>

                <?php
                  /*
                   * This content shows up if there are no widgets defined in the backend.
                  */
                ?>

                <div class="no-widgets">
                  <p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
                </div>

              <?php endif; ?>
            </div>
          </section>
          <section class="l-section-container">
            <div class="heading-sub-title">プロフィール</div>
            <div class="section-inner clearfix">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/yuru-p.png" alt="公式キャラクターのゆるっぴー" class="section-img l-left">
              </figure>
              <div>
                <p>当サイトを運営しているマツです。自己紹介のテキストが入ります。自己紹介のテキストが入ります。</p>
              </div>
            </div>
          </section>

        </div>
