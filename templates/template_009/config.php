<?php
function registerTemplate() {
    $config['pagination'] = array(
        'per_page'             => 15,
        'num_links'            => 3,
        'query_string_segment' => 'page',
        'use_page_numbers'     => true,
        'page_query_string'    => true,
        'full_tag_open'        => '<nav aria-label="Page navigation" class="page"><ul class="pagination">',
        'full_tag_close'       => '</ul></nav>',
        'first_link'           => '<a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>',
        'first_tag_open'       => '',
        'first_tag_close'      => '',
        'last_link'            => '<span aria-hidden="true">&raquo;</span>',
        'last_tag_open'        => '<li>',
        'last_tag_close'       => '</li>',
        'next_link'            => '...',
        'next_tag_open'        => '<li>',
        'next_tag_close'       => '</li>',
        'prev_link'            => '<span aria-hidden="true">«</span>',
        'prev_tag_open'        => '<li>',
        'prev_tag_close'       => '</li>',
        'cur_tag_open'         => ' <li><a>',
        'cur_tag_close'        => '</a></li>',
        'num_tag_open'         => '<li>',
        'num_tag_close'        => '</li>',
    );
    return $config;
}

