<?php




function human_IT_customize_register( $wp_customize ) {

    $wp_customize->add_setting( 'top_slogan' , array(
	    'default'   => __('SKLEP INTERNETOWY', 'human_IT'),
	    'transport' => 'refresh',
	));	 

	$wp_customize->add_section( 'top_slogan_section' , array(
    	'title'      => __( 'Top slogan', 'human_IT' ),                // top_slogan black
   		'priority'   => 1,
	));

    
    $wp_customize->add_control(
		'top_slogan',
		array(
			'label'      => __( 'Top section black', 'human_IT' ),
			'section'    => 'top_slogan_section',
			'settings'   => 'top_slogan',
			'type' 		 =>	'text',
		)
    );

    $wp_customize->add_setting( 'top_slogan_orange' , array(
        'default'   => __('SZYTY NA MIARĘ', 'human_IT'),
        'transport' => 'refresh',
    ));	                                                                   // top_slogan_orange

    $wp_customize->add_control(
        'top_slogan_orange',
        array(
            'label'      => __( 'Top section orange', 'human_IT' ),
            'section'    => 'top_slogan_section',
            'settings'   => 'top_slogan_orange',
            'type' 		 =>	'text',
        )
    );




    $wp_customize->add_setting( 'name_of_category' , array(
	    'default'   => __('Sprzedajesz to, co chcesz i jak chcesz', 'human_IT'),
	    'transport' => 'refresh',
	));	 

	$wp_customize->add_section( 'name_of_category_section' , array(
    	'title'      => __( 'Name of categories', 'human_IT' ),                // 1 name_of_category 
   		'priority'   => 2,
	));

    
    $wp_customize->add_control(
		'name_of_category',
		array(
			'label'      => __( '1 Name of categories', 'human_IT' ),
			'section'    => 'name_of_category_section',
			'settings'   => 'name_of_category',
			'type' 		 =>	'text',
		)
    );

    $wp_customize->add_setting( 'name_of_category_2' , array(
	    'default'   => __('Twój wymarzony wygląd sklepu', 'human_IT'),
	    'transport' => 'refresh',
    ));	
    $wp_customize->add_control(
		'name_of_category_2',                                                     // 2 name_of_category 
		array(
			'label'      => __( '2 Name of categories', 'human_IT' ),
			'section'    => 'name_of_category_section',
			'settings'   => 'name_of_category_2',
			'type' 		 =>	'text',
		)
    );
    $wp_customize->add_setting( 'name_of_category_3' , array(
	    'default'   => __('Bramka płatnicza usprawni zakupy w Twoim sklepie', 'human_IT'),
	    'transport' => 'refresh',
    ));	
    $wp_customize->add_control(                                                                    // 3 name_of_category 
		'name_of_category_3',
		array(
			'label'      => __( '3 Name of categories', 'human_IT' ),
			'section'    => 'name_of_category_section',
			'settings'   => 'name_of_category_3',
			'type' 		 =>	'text',
		)
    );
    $wp_customize->add_setting( 'name_of_category_4' , array(
	    'default'   => __('Pomożemy Ci się rozwijać', 'human_IT'),
	    'transport' => 'refresh',
    ));	
    $wp_customize->add_control(                                                 // 4 name_of_category 
		'name_of_category_4',
		array(
			'label'      => __( '4 Name of categories', 'human_IT' ),
			'section'    => 'name_of_category_section',
			'settings'   => 'name_of_category_4',
			'type' 		 =>	'text',
		)
    );
    $wp_customize->add_setting( 'name_of_category_5' , array(
	    'default'   => __('Pobierz darmowy ebook', 'human_IT'),
	    'transport' => 'refresh',
    ));	
    $wp_customize->add_control(
		'name_of_category_5',                                                   // 5 name_of_category 
		array(
			'label'      => __( '5 Name of categories', 'human_IT' ),
			'section'    => 'name_of_category_section',
			'settings'   => 'name_of_category_5',
			'type' 		 =>	'text',
		)
    );
    $wp_customize->add_setting( 'name_of_category_6' , array(
	    'default'   => __('Z poradnika dowiesz się:', 'human_IT'),
	    'transport' => 'refresh',
    ));	
    $wp_customize->add_control(                                             // 6 name_of_category 
		'name_of_category_6',
		array(
			'label'      => __( '6 Name of categories', 'human_IT' ),
			'section'    => 'name_of_category_section',
			'settings'   => 'name_of_category_6',
			'type' 		 =>	'text',
		)
    );
    $wp_customize->add_setting( 'name_of_category_7' , array(
	    'default'   => __('Zaprogramujemy', 'human_IT'),
	    'transport' => 'refresh',
    ));	
    $wp_customize->add_control(                                                 // 7 Black name_of_category 
		'name_of_category_7',
		array(
			'label'      => __( '7 Name of categories Black', 'human_IT' ),
			'section'    => 'name_of_category_section',
			'settings'   => 'name_of_category_7',
			'type' 		 =>	'text',
		)
    );
    $wp_customize->add_setting( 'name_of_category_8' , array(
	    'default'   => __('Twój sukces!', 'human_IT'),
	    'transport' => 'refresh',
    ));	
    $wp_customize->add_control(                                                 // 8 Orange name_of_category 
		'name_of_category_8',
		array(
			'label'      => __( '8 Name of categories Orange', 'human_IT' ),
			'section'    => 'name_of_category_section',
			'settings'   => 'name_of_category_8',
			'type' 		 =>	'text',
		)
    );




    $wp_customize->add_setting( 'text_of_category' , array(
	    'default'   => __('Sklep internetowy, który zaprojektujemy i stworzymy', 'human_IT'),
	    'transport' => 'refresh',
	));	 

	$wp_customize->add_section( 'text_of_category_section' , array(
    	'title'      => __( 'Text of categories', 'human_IT' ),                // 1 text_of_category 
   		'priority'   => 3,
	));

    
    $wp_customize->add_control(
		'text_of_category',
		array(
			'label'      => __( 'Sprzedaż 1 text of categories ', 'human_IT' ),
			'section'    => 'text_of_category_section',
			'settings'   => 'text_of_category',
			'type' 		 =>	'text',
		)
    );
    $wp_customize->add_setting( 'text_of_category_2' , array(
	    'default'   => __('specjalnie dla Ciebie', 'human_IT'),
	    'transport' => 'refresh',
	));	

    $wp_customize->add_control(
		'text_of_category_2',
		array(
			'label'      => __( 'Sprzedaż bolt text of categories', 'human_IT' ),
			'section'    => 'text_of_category_section',
			'settings'   => 'text_of_category_2',
			'type' 		 =>	'text',
		)
    );
    $wp_customize->add_setting( 'text_of_category_3' , array(
	    'default'   => __('będzie zaopatrzony w panel administratora. 
        Po zalogowaniu do niego, można umieszczać w sklepie produkty ze zdjęciami, opisami i cenami oraz podzielić je na kategorie, czy 
        też tworzyć promocje według własnego uznania.', 'human_IT'),
	    'transport' => 'refresh',
	));	

    $wp_customize->add_control(
		'text_of_category_3',
		array(
			'label'      => __( 'Sprzedaż 3 text of categories', 'human_IT' ),
			'section'    => 'text_of_category_section',
			'settings'   => 'text_of_category_3',
			'type' 		 =>	'text',
		)
    );

    $wp_customize->add_setting( 'text_of_category_4' , array(
	    'default'   => __('W tym miejscu oraz na skrzynce mailowej będziesz otrzymywać również informacje o wszystkich zamówieniach Twoich klientów.', 'human_IT'),
	    'transport' => 'refresh',
	));	

    $wp_customize->add_control(
		'text_of_category_4',
		array(
			'label'      => __( 'Sprzedaż 4 text of categories', 'human_IT' ),
			'section'    => 'text_of_category_section',
			'settings'   => 'text_of_category_4',
			'type' 		 =>	'text',
		)
        );


        
    $wp_customize->add_setting( 'text_of_category_5' , array(
            'default'   => __('Doskonale wiemy, że', 'human_IT'),
            'transport' => 'refresh',
        ));	
    
    $wp_customize->add_control(
            'text_of_category_5',
            array(
                'label'      => __( 'Wygląd 1 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_5',
                'type' 		 =>	'text',
            )
            );
 $wp_customize->add_setting( 'text_of_category_5' , array(
            'default'   => __('Doskonale wiemy, że', 'human_IT'),
            'transport' => 'refresh',
        ));	
    
    $wp_customize->add_control(
            'text_of_category_5',
            array(
                'label'      => __( 'Wygląd 1 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_5',
                'type' 		 =>	'text',
            )
            );
    $wp_customize->add_setting( 'text_of_category_6' , array(
        'default'   => __('estetyczne aspekty', 'human_IT'),
        'transport' => 'refresh',
    ));	
        
    $wp_customize->add_control(
        'text_of_category_6',
        array(
            'label'      => __( 'Wygląd bolt 2 Text of categories ', 'human_IT' ),
            'section'    => 'text_of_category_section',
            'settings'   => 'text_of_category_6',
            'type' 		 =>	'text',
        )
        );
    $wp_customize->add_setting( 'text_of_category_7' , array(
        'default'   => __('sklepu są dla Ciebie bardzo istotne. Opowiedz nam, jak wyobrażasz 
        sobie swój', 'human_IT'),
        'transport' => 'refresh',
    ));	
            
    $wp_customize->add_control(
        'text_of_category_7',
        array(
            'label'      => __( 'Wygląd 3 text of categories', 'human_IT' ),
            'section'    => 'text_of_category_section',
            'settings'   => 'text_of_category_7',
            'type' 		 =>	'text',
    )
    );
    $wp_customize->add_setting( 'text_of_category_8' , array(
        'default'   => __('wymarzony sklep', 'human_IT'),
        'transport' => 'refresh',
    ));	
        
    $wp_customize->add_control(
        'text_of_category_8',
        array(
            'label'      => __( 'Wygląd bolt 4 text of categories ', 'human_IT' ),
            'section'    => 'text_of_category_section',
            'settings'   => 'text_of_category_8',
            'type' 		 =>	'text',
        )
        );

        $wp_customize->add_setting( 'text_of_category_9' , array(
            'default'   => __(', a my sprawimy, że stanie on przed Twoimi oczami właśnie w takiej formie.', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_9',
            array(
                'label'      => __( 'Wygląd 5 text of categories  ', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_9',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_10' , array(
            'default'   => __('Odpowiednie i niepowtarzalne szata graficzna oraz paleta barw będą', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_10',
            array(
                'label'      => __( 'Wygląd 6 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_10',
                'type' 		 =>	'text',
        )
        );

        $wp_customize->add_setting( 'text_of_category_11' , array(
            'default'   => __('dostosowane do Twojej marki.', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_11',
            array(
                'label'      => __( 'Wygląd 7 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_11',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_12' , array(
            'default'   => __('Dzięki bramce płatniczej założonej na stronie sklepu, klienci będą mogli cieszyć się z', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_12',
            array(
                'label'      => __( 'Bramka 1 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_12',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_13' , array(
            'default'   => __('szybkich i  komfortowych zakupów', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_13',
            array(
                'label'      => __( 'Bramka 2 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_13',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_14' , array(
            'default'   => __('z możliwością dokonania płatności przez Internet na kilka ', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_14',
            array(
                'label'      => __( 'Bramka 3 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_14',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_15' , array(
            'default'   => __('różnych i bezpiecznych sposobów.', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_15',
            array(
                'label'      => __( 'Bramka 4 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_15',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_16' , array(
            'default'   => __('Samo zbudowanie Twojego sklepu internetowego to nie wszystko, na co możesz liczyć z naszej strony. W przypadku sklepu internetowego niezbędny jest rozwój technologiczny. Jeśli potrzebna Ci będzie aktualizacja lub jakiekolwiek wsparcie,', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_16',
            array(
                'label'      => __( 'Pomożemy 1 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_16',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_17' , array(
            'default'   => __('zawsze jesteśmy do Twojej dyspozycji.', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_17',
            array(
                'label'      => __( 'Pomożemy bolt 2 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_17',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_18' , array(
            'default'   => __('Z treści ebooka', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_18',
            array(
                'label'      => __( 'Pobierz 1 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_18',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_19' , array(
            'default'   => __(' „10 porad na rozwój marki w Internecie”', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_19',
            array(
                'label'      => __( 'Pobierz bolt 2 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_19',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_21' , array(
            'default'   => __('się, jakie kwestie mają największe znaczenie przy prowadzeniu sklepu internetowego.', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_21',
            array(
                'label'      => __( 'Pobierz 3 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_21',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_20' , array(
            'default'   => __('Pobierz darmowego ebooka i zaproś klientów do swojego', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_20',
            array(
                'label'      => __( 'Pobierz 4 text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_20',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_22' , array(
            'default'   => __('wymarzonego sklepu internetowego.', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_22',
            array(
                'label'      => __( 'Pobierz 5 bolt text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_22',
                'type' 		 =>	'text',
        )
        );
        $wp_customize->add_setting( 'text_of_category_23' , array(
            'default'   => __('Aby otrzymać więcej porad i poznać więcej szczegółów na temat rozwoju swojego biznesu w Internecie, możesz zapisać się do newslettera Human IT. Dzięki któremu z czasem poznasz wszystkie tajemnice świata E-commerce.', 'human_IT'),
            'transport' => 'refresh',
        ));	
                
        $wp_customize->add_control(
            'text_of_category_23',
            array(
                'label'      => __( 'Pobierz 6 bolt text of categories', 'human_IT' ),
                'section'    => 'text_of_category_section',
                'settings'   => 'text_of_category_23',
                'type' 		 =>	'text',
        )
        );

        $wp_customize->add_setting( 'numbers' , array(
            'default'   => __('Skontaktuj się z nami lub pozostaw dane kontaktowe.', 'human_IT'),
            'transport' => 'refresh',
        ));	 
    
        $wp_customize->add_section( 'numbers_section' , array(
            'title'      => __( 'Numbers text', 'human_IT' ),                // numbers black
               'priority'   => 4,
        ));
    
        
        $wp_customize->add_control(
            'numbers',
            array(
                'label'      => __( '01', 'human_IT' ),
                'section'    => 'numbers_section',
                'settings'   => 'numbers',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'numbers02' , array(
            'default'   => __('Opowiedz, jaki sklep internetowy chcesz prowadzić.', 'human_IT'),
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(
            'numbers02',
            array(
                'label'      => __( '02', 'human_IT' ),
                'section'    => 'numbers_section',
                'settings'   => 'numbers02',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'numbers03' , array(
            'default'   => __('Przygotujemy dla Ciebie projekt sklepu.', 'human_IT'),
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(
            'numbers03',
            array(
                'label'      => __( '03', 'human_IT' ),
                'section'    => 'numbers_section',
                'settings'   => 'numbers03',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'numbers04' , array(
            'default'   => __('W razie potrzeby, dokonamy zmian, które zasugerujesz.', 'human_IT'),
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(
            'numbers04',
            array(
                'label'      => __( '04', 'human_IT' ),
                'section'    => 'numbers_section',
                'settings'   => 'numbers04',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'numbers05' , array(
            'default'   => __('Po Twojej akceptacji projektu zmaterializujemy Twój sklep.', 'human_IT'),
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(
            'numbers05',
            array(
                'label'      => __( '05', 'human_IT' ),
                'section'    => 'numbers_section',
                'settings'   => 'numbers05',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'numbers06' , array(
            'default'   => __('Zaczynasz sprzedawać!', 'human_IT'),
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(
            'numbers06',
            array(
                'label'      => __( '06', 'human_IT' ),
                'section'    => 'numbers_section',
                'settings'   => 'numbers06',
                'type' 		 =>	'text',
            )
        );



        $wp_customize->add_setting( 'black_text_list' , array(
            'default'   => __('Jak zwiększyć', 'human_IT'),
            'transport' => 'refresh',
        ));	 
    
        $wp_customize->add_section( 'list_section' , array(
            'title'      => __( 'list text', 'human_IT' ),                // list section
               'priority'   => 4,
        ));
    
        $wp_customize->add_control(
            'black_text_list',
            array(
                'label'      => __( 'List text 1 black', 'human_IT' ),
                'section'    => 'list_section',
                'settings'   => 'black_text_list',
                'type' 		 =>	'text',
            )
        );

        $wp_customize->add_setting( 'oramge_text_list' , array(
            'default'   => __(' rozpoznawalność', 'human_IT'),
            'transport' => 'refresh',
        ));	 
        $wp_customize->add_control(
            'oramge_text_list',
            array(
                'label'      => __( 'List text 2 orange', 'human_IT' ),
                'section'    => 'list_section',
                'settings'   => 'oramge_text_list',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'black_text_list_2' , array(
            'default'   => __('Twojego sklepu.', 'human_IT'),
            'transport' => 'refresh',
        ));	 
        $wp_customize->add_control(
            'black_text_list_2',
            array(
                'label'      => __( 'List text 3 black', 'human_IT' ),
                'section'    => 'list_section',
                'settings'   => 'black_text_list_2',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'black_text_list_4' , array(
            'default'   => __('Jak utrzymać', 'human_IT'),
            'transport' => 'refresh',
        ));	 
        $wp_customize->add_control(
            'black_text_list_4',
            array(
                'label'      => __( 'List text 4 black', 'human_IT' ),
                'section'    => 'list_section',
                'settings'   => 'black_text_list_4',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'oramge_text_list_5' , array(
            'default'   => __('dobre relacje', 'human_IT'),
            'transport' => 'refresh',
        ));	 
        $wp_customize->add_control(
            'oramge_text_list_5',
            array(
                'label'      => __( 'List text 5 orange', 'human_IT' ),
                'section'    => 'list_section',
                'settings'   => 'oramge_text_list_5',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'black_text_list_6' , array(
            'default'   => __('z klientami.', 'human_IT'),
            'transport' => 'refresh',
        ));	 
        $wp_customize->add_control(
            'black_text_list_6',
            array(
                'label'      => __( 'List text 6 black', 'human_IT' ),
                'section'    => 'list_section',
                'settings'   => 'black_text_list_6',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'black_text_list_7' , array(
            'default'   => __('Jakie techniki pomogą Ci osiągnąć', 'human_IT'),
            'transport' => 'refresh',
        ));	 
        $wp_customize->add_control(
            'black_text_list_7',
            array(
                'label'      => __( 'List text 7 black', 'human_IT' ),
                'section'    => 'list_section',
                'settings'   => 'black_text_list_7',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'oramge_text_list_8' , array(
            'default'   => __('lepszą sprzedaż.', 'human_IT'),
            'transport' => 'refresh',
        ));	 
        $wp_customize->add_control(
            'oramge_text_list_8',
            array(
                'label'      => __( 'List text 8 orange', 'human_IT' ),
                'section'    => 'list_section',
                'settings'   => 'oramge_text_list_8',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'black_text_list_9' , array(
            'default'   => __('Jak wykorzystać potencjał Internetu do', 'human_IT'),
            'transport' => 'refresh',
        ));	 
        $wp_customize->add_control(
            'black_text_list_9',
            array(
                'label'      => __( 'List text 9 black', 'human_IT' ),
                'section'    => 'list_section',
                'settings'   => 'black_text_list_9',
                'type' 		 =>	'text',
            )
        );
        $wp_customize->add_setting( 'oramge_text_list_10' , array(
            'default'   => __('rozwijania marki.', 'human_IT'),
            'transport' => 'refresh',
        ));	 
        $wp_customize->add_control(
            'oramge_text_list_10',
            array(
                'label'      => __( 'List text 10 orange', 'human_IT' ),
                'section'    => 'list_section',
                'settings'   => 'oramge_text_list_10',
                'type' 		 =>	'text',
            )
        );





} 

add_action( 'customize_register', 'human_IT_customize_register' );








function human_IT_scripts() {
	wp_enqueue_style('style-css', get_stylesheet_uri());
	//wp_enqueue_script('script-name', get_template_directory_uri() ) . '/js/exameple.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('kontakt', get_template_directory_uri() . '/js/script.js');
}



add_action ('wp_enqueue_scripts', 'human_IT_scripts')

?>