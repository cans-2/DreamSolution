<?php get_header() ?>
<main>
    <div class="column-page">
        <div class="column-page__inner">
            <h1>コラム</h1>
            <div class="column__items">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'column', // カテゴリースラッグを指定
                    'posts_per_page' => 20, // 表示件数を指定
                    'paged' => $paged // ページ番号を指定
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>
                        <?php
                        // 投稿の最初の画像をアイキャッチ画像として取得する
                        $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        // 画像が存在しない場合に、デフォルトの画像を使用する
                        if (!$image) {
                            $image = get_template_directory_uri() . '/assets/image/dammy.jpg';
                        }
                        ?>
                        <div class="column__item">
                            <a href="<?php the_permalink(); ?>">

                                <div class="column__item_img"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"></div>
                                <div class="column__item_inner">
                                    <div class="datecate">
                                        <p class="date"><?php the_time('Y/m/d'); ?></p>
                                        <p class="cate"><?php the_category(', '); ?></p>
                                    </div>
                                    <div class="column__item_title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata(); // ループ後にリセットする
                ?>
            </div>
            <div class="pagenation">
                <div class="pagenation">
                    <?php
                    // ページネーションを表示する
                    $big = 999999999;
                    $current_page = max(1, get_query_var('paged'));
                    $total_pages = $query->max_num_pages;
                    $prev_page = $current_page - 1;
                    $next_page = $current_page + 1;
                    $range = 1; // 省略するページ数の範囲
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                        'mid_size' => $range,
                        'end_size' => $range,
                    ));
                    ?>
                </div>

            </div>

        </div>
    </div>
</main>
<?php get_footer() ?>