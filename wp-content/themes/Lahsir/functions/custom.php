<?php



add_action('customize_register', function($customizer){
    $customizer->add_section(
        'section_one',
        array(
            'title' => 'Информация',
            'priority' => 1,
        )
    );   
	$customizer->add_section(
        'section_two',
        array(
            'title' => 'Изображения',
            'priority' => 2,
        )
    );    


	
	$customizer->add_setting(
    'textinfo',
    array('default' => '')
	);
	$customizer->add_control(
    'textinfo',
    array(
        'label' => 'Информация',
        'description' => 'Для переноса строки используеться &#60;br>, а для синего цвета в заголовке &#60;span>текст&#60;/span>',
        'section' => 'section_one',
        'type' => 'hidden',
    )
	);	
	$customizer->add_setting(
    'text1',
    array('default' => '')
	);
	$customizer->add_control(
    'text1',
    array(
        'label' => 'Заголовок',
        'description' => 'Если поле пусто - отображается основной заголовок!',
        'section' => 'section_one',
        'type' => 'textarea',
    )
	);	
	
	
	$customizer->add_setting(
    'textbox_1',
    array('default' => '+7 (495) 407-06-22')
	);
	$customizer->add_control(
    'textbox_1',
    array(
        'label' => 'Номер телефона',
        'section' => 'section_one',
        'type' => 'text',
    )
	);	
	
	$customizer->add_setting(
    'textbox_2',
    array('default' => 'Есть вопросы? Звоните - поможем')
	);
	$customizer->add_control(
    'textbox_2',
    array(
        'label' => 'Надпись над телефоном',
        'section' => 'section_one',
        'type' => 'text',
    )
	);

	
	$customizer->add_setting(
    'textbox_3',
    array('default' => 'incor@certage.ru')
	);
	$customizer->add_control(
    'textbox_3',
    array(
        'label' => 'Email',
        'section' => 'section_one',
        'type' => 'textarea',
    )
	);
	$customizer->add_setting(
    'textbox_4',
    array('default' => '127018 г. Москва,<br>3й проезд Марьиной Рощи,<br>д.40, стр.1, офис 606')
	);
	$customizer->add_control(
    'textbox_4',
    array(
        'label' => 'Адрес',
        'section' => 'section_one',
        'type' => 'textarea',
    )
	);	
	
	$customizer->add_setting(
    'textbox_5',
    array('default' => '
	ИНН 447353483<br>
	КПП 782934236<br>
	ОГРН 32426374610<br>
	ОКПО 23489203409<br>
	ОКАТО 92348238716<br>
	ОКФС 16<br>
	ОКОПФ 65<br><br>
	 
	р/с 34572835638757283587<br>
	в ОАО АКБ "АВАНГАРД" г. Москва<br>
	к/с 27492000000000000231<br>
	БИК 82374192
	')

	);
	$customizer->add_control(
    'textbox_5',
    array(
        'label' => 'Информация ООО',
        'section' => 'section_one',
        'type' => 'textarea',
    )
	);
	
	
	$customizer->add_setting('1-upload');
	$customizer->add_control(
		new WP_Customize_Image_Control(
			$customizer,
			'1-upload',
			array(
				'label' => 'Аттестат аккредитации',
				'section' => 'section_two',
				'settings' => '1-upload'
			)
		)
	);	
	
	
	$customizer->add_setting('2_1-upload');
	$customizer->add_control(
		new WP_Customize_Image_Control(
			$customizer,
			'2_1-upload',
			array(
				'label' => 'Диплом 1',
				'section' => 'section_two',
				'settings' => '2_1-upload'
			)
		)
	);	
	$customizer->add_setting('2_2-upload');
	$customizer->add_control(
		new WP_Customize_Image_Control(
			$customizer,
			'2_2-upload',
			array(
				'label' => 'Диплом 2',
				'section' => 'section_two',
				'settings' => '2_2-upload'
			)
		)
	);	
	$customizer->add_setting('2_3-upload');
	$customizer->add_control(
		new WP_Customize_Image_Control(
			$customizer,
			'2_3-upload',
			array(
				'label' => 'Диплом 3',
				'section' => 'section_two',
				'settings' => '2_3-upload'
			)
		)
	);	
	$customizer->add_setting('2_4-upload');
	$customizer->add_control(
		new WP_Customize_Image_Control(
			$customizer,
			'2_4-upload',
			array(
				'label' => 'Диплом 4',
				'section' => 'section_two',
				'settings' => '2_4-upload'
			)
		)
	);	
	
	
	
	
	
	
	
	
	
	
	
	

	

});







function hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr);
    $rgbArray = array();
    if (strlen($hexStr) == 6) { 
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { 
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; 
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; 
} 




//echo hex2RGB(get_theme_mod('color-logo', '#fff'), true);
//echo get_theme_mod('img-upload');
//echo get_theme_mod('textbox', '');
//
//
//
//
//
//
//

?>
