<?php

    if ( get_field('block_title_content__title_g') ) {

        $title_content  = get_field('block_title_content__title_g');
        $type           = $title_content['block_title_content__title_g__type'];
        $title          = $title_content['block_title_content__title_g__title'];
        $alignment      = $title_content['block_title_content__title_g__alignment'];
        $underline      = $title_content['block_title_content__title_g__underline'];

        echo '<div class="block-title-content">
                <'.$type.' class="'.$alignment.' '.$underline.'">
                    '.$title.'
                </'.$type.'>
            </div>';

    }

?>