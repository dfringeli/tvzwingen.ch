<?php

function tvz_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url('/') . '" >
        <div class="input-group">
            <input type="text" class="form-control" value="' . get_search_query() . '" placeholder="' . esc_attr__('Search', 'bst') . '..." name="s" id="s" />
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit" id="searchsubmit" value="'. esc_attr__('Search', 'bst') .'" ><i class="glyphicon glyphicon-search"></i></button>
            </span>
        </div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'tvz_search_form' );
