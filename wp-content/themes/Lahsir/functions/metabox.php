<?php 



function my_product() {
    $labels = array(
        'name'               => _x( 'Товары', 'post type general name' ),
        'singular_name'      => _x( 'Запись в товарах', 'post type singular name' ),
        'add_new'            => __( 'Добавить новую запись' ),
        'add_new_item'       => __( 'Добавить новую запись' ),
        'edit_item'          => __( 'Редактировать запись' ),
        'new_item'           => __( 'Новая запись' ),
        'all_items'          => __( 'Все записи' ),
        'view_item'          => __( 'Просмотр' ),
        'search_items'       => __( 'Поиск' ),
        'not_found'          => __( 'Ничего не найдено' ),
        'not_found_in_trash' => __( 'Корзина пуста' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Товары'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title','thumbnail'),
        'has_archive'   => true,
    );
    register_post_type( 'product', $args );    
}
add_action( 'init', 'my_product' );



add_image_size( 'product-thumb', 400, 400, true  );








function product_meta_box() {  
    add_meta_box(  
        'product_meta_box',
        'Данные о товаре',
        'show_product_metabox',
        'product',
        'normal',
        'high');
}  
add_action('add_meta_boxes', 'product_meta_box');

$meta_fields = array(  
    array(  
        'label' => 'Стоимость',  
        'desc'  => 'Без пробелов!!! Только числа!',  
        'id'    => 'pri',
        'type'  => 'text'  
    ),
    array(  
        'label' => 'Описание',  
        'desc'  => '',  
        'id'    => 'des',  
        'type'  => 'textarea'  
    )
);

function show_product_metabox() {  
global $meta_fields;
global $post;
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
 
   
    echo '<table class="form-table">';  
    foreach ($meta_fields as $field) {  
       
        $meta = get_post_meta($post->ID, $field['id'], true);  
       
        echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';  
                switch($field['type']) {  
                    
    
                case 'text':  
                    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
                        <br /><span class="description">'.$field['desc'].'</span>';  
                break;
                
                case 'textarea':  
                    echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea>
                        <br /><span class="description">'.$field['desc'].'</span>';  
                break;
        
            
                }
        echo '</td></tr>';  
    }  
    echo '</table>';
}







function save_product_meta_fields($post_id) {  
    global $meta_fields;  
 
    
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))   
        return $post_id;  
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
     
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
 
   
    foreach ($meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true); 
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old); 
        }  
    } 
}  
add_action('save_post', 'save_product_meta_fields'); 



?>