<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make( 'theme_options', 'Настройки темы' )
		->set_icon( 'dashicons-carrot' )
 
		->add_tab( __( 'Шапка' ), array(
			Field::make( 'select', 'est_header_logic', 'Будет ли использоваться логотип?' )
			->add_options( array(
				'yes' => 'Да, буду использовать логотип.',
				'no' => 'Нет, буду использовать текст.',
			) ),
			Field::make( 'image', 'est_header_logo', __( 'Логотип' ) )
			->set_conditional_logic( array(
				'relation' => 'AND', // Optional, defaults to "AND"
				array(
					 'field' => 'est_header_logic',
					 'value' => 'yes', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					 'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				)
		  	) ),
			Field::make( 'text', 'est_header_site_name', __( 'Название сайта' ) )
			->set_conditional_logic( array(
				'relation' => 'AND', // Optional, defaults to "AND"
				array(
					 'field' => 'est_header_logic',
					 'value' => 'no', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					 'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				)
			  ) )
			->set_default_value(get_bloginfo('name')),
			Field::make( 'text', 'est_header_site_desc', __( 'Описание сайта' ) ) 
			->set_conditional_logic( array(
				'relation' => 'AND', // Optional, defaults to "AND"
				array(
					 'field' => 'est_header_logic',
					 'value' => 'no', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					 'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				)
			  ) )
			->set_default_value(get_bloginfo('description')),
		) )
		->add_tab( __( 'Подвал' ), array(
			Field::make( 'text', 'est_footer_copy', __( 'Текст копирайта' ) )
			->set_default_value('Все права защищены')
			->set_width( 33 ),
			Field::make( 'radio', 'est_footer_newsletter', __( 'Показывать блок "подписаться"?' ) )
			->add_options( array(
				'show' =>'Показать',
				'hide' =>'Скрыть'
				)
			)
			->set_width( 33 ),
			Field::make( 'radio', 'est_footer_widg', __( 'Показывать блок виджетов?' ) )
			->add_options( array(
				'show' =>'Показать',
				'hide' =>'Скрыть'
				)
			)
			->set_width( 33 ),

		) );

 
 

