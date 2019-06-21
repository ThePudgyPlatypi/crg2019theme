<div class="story-container overflow">
    <?php 
        // $top_top_left = "top top left";
        // $top_top_right = [
        //     "top top right 1",
        //     "top top right 2"
        // ];
        // $top_bottom_right = "top bottom right";
        // $bottom_left = [
        //     "bottom left 1",
        //     "bottom left 2",
        //     "bottom left 3",
        //     "bottom left 4",
        //     "bottom left 5"

        // ];
        // $divider = "divider";

        // $about_one = 259;
        // $about_two = 261;

        // $quote_one = 264;
        // $quote_two = 266;
        // not used currently
        // $args = array(
        //     'tax_query' => array(
        //         array(
        //             'taxonomy' => 'post_tag',
        //             'field' => 'slug',
        //             'terms' => 'story'
        //         )
        //     )
        // );
        // $postslist = get_posts( $args );
    ?>

    <div class="first-container content-large">
            <div class="under-400">
                <blockquote>
                    <?php 
                        $content_quote1 = get_post_field('post_content', $quote_one); 
                        echo $content_quote1;
                    ?>
                </blockquote>
            </div>

        <div class="divTable">

            <div class="divTableBody">

                <div class="divTableRow">

                    <div class="divTableCell top-left">
                        <?php get_image($top_top_left, "large"); ?>
                    </div>
                    <div class="divTableCell top-right">
                        <div class="top-right-images">
                            <?php get_image($top_top_right[0], "medium"); ?>
                            <?php get_image($top_top_right[1], "medium"); ?>
                        </div>
                        <blockquote class="quote2 yellow-line yellow-line-abs animation-element slide-right">
                            <?php 
                                $content_quote2 = get_post_field('post_content', $quote_two); 
                                echo $content_quote2;
                            ?>
                        </blockquote>
                    </div>

                </div>

                <div class="divTableRow">

                    <div class="divTableCell lower-left">
                        <p class="align-right animation-element slide-left">
                            <?php 
                                $content_story1 = get_post_field('post_content', $about_one); 
                                echo $content_story1;
                            ?>
                        </p>
                    </div>

                    <div class="divTableCell lower-right">
                        <?php get_image($top_bottom_right, "large"); ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- <div class="divider">
        <img src="../wp-content/uploads/2018/04/Full-color-No-header-No-text.png" alt="Critical Response Group Logo"> 
    </div> -->

    <div class="second-container content-large">

        <div class="divTable">

            <div class="divTableBody">

                <div class="divTableRow">

                    <div class="divTableCell lower-lower-left">
                        <?php get_image($bottom_left[0], "medium"); ?>
                        <?php get_image($bottom_left[1], "medium"); ?>
                        <?php get_image($bottom_left[2], "medium"); ?>
                        <?php get_image($bottom_left[3], "medium"); ?>
                        <?php get_image($bottom_left[4], "medium"); ?>
                    </div>
                    <div class="divTableCell lower-lower-right">
                        <p class="align-left animation-element slide-right">
                            <?php 
                                $content_story2 = get_post_field('post_content', $about_two); 
                                echo $content_story2;
                            ?>
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>