

    <?php

        $args= array(
            'class_submit' =>'btn py-3 px-4 btn-primary'
        );

        comment_form($args);
    ?>

    <h3 class="text-center pt-5">Comentarios</h3>

    <ul class="list-comments">

        <?php
            $args =array(
                'post_id' => $post->ID,
                'status' => 'approve'
            );

            $comments =get_comments($args );

            $args2 = array(
                'per_page'=>10,
                'reverse_top_level'=>false
            );

            wp_list_comments($args2, $comments);

        ?>

    </ul>

