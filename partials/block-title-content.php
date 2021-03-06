<?php

    if (
        get_field('block_title_content__title_g') ||
        get_field('block_title_content__content_g')
    ) {

        echo '<section class="block-title-content">';

            if ( get_field('block_title_content__title_g') ) {

                $title_g        = get_field('block_title_content__title_g');
                $type           = $title_g['block_title_content__title_g__type'];
                $title          = $title_g['block_title_content__title_g__title'];
                $alignment      = $title_g['block_title_content__title_g__alignment'];
                $underline      = $title_g['block_title_content__title_g__underline'];

                echo '<div class="block-title-content__title">
                        <'.$type.' class="'.$alignment.' '.$underline.'">
                            '.$title.'
                        </'.$type.'>
                    </div>';

            }

            if ( get_field('block_title_content__content_g') ) {

                $content_g      = get_field('block_title_content__content_g');
                $text           = $content_g['block_title_content__content_g__text'];

                echo '<div class="block-title-content__content">
                        '.$text.'
                    </div>';

            }

        echo '</section>'; // .block-title-content

    }

?>
