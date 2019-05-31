<?php
add_filter( 'woocommerce_product_tabs', 'wpb_tabela_product_tab' );
function wpb_tabela_product_tab( $tabs ) { 
    // adding a new tab
    $tabs['tab'] = array(
        'title'       => __( 'Your-Name', 'text-domain' ),
        'priority'    => 50,
        'callback'    => 'wpb_tabela_product_tab_content'
    );
    return $tabs;
}

function wpb_tabela_product_tab_content() {
    // tab content
    
	$id = ID_PAGE;
$p = get_page($id);
echo apply_filters('the_content', $p->post_content);
	}
?>
