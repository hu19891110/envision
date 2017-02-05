<?php

$scheme[ cloudfw_id_for_sequence( $scheme, $number ) ] = array(
	'type'			=>	'section',
	'title'			=>	__('Navigation','cloudfw'),
	'data'			=>	array(


		array(
			'type'		=>	'module-set',
			'title'		=>	__('Layout','cloudfw'),
			'closable'	=>	true,
			'state'		=>	'opened',
			'data'		=>	array(
		
				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION GAP',
					'title'		=>	__('Horizontal Gap for the Top Level Navigation Items','cloudfw'),
					'data'		=>	array( 
							
						array(
							'type'		=>	'text',
							'title'		=>	__('Large devices (desktops)','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_paddings_wide','padding-horizontal'),
							'value'		=>	$data['navigation_level_0_paddings_wide']['padding-horizontal'],
							'width'		=>	50,
							'holder'	=>	20,
							'unit'		=>	'px',
						),

						array(
							'type'		=>	'text',
							'title'		=>	__('Medium devices (desktops)','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_paddings_standard','padding-horizontal'),
							'value'		=>	$data['navigation_level_0_paddings_standard']['padding-horizontal'],
							'width'		=>	50,
							'holder'	=>	20,
							'unit'		=>	'px',
						),

						array(
							'type'		=>	'text',
							'title'		=>	__('Small devices (tablets)','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_paddings_tablet','padding-horizontal'),
							'value'		=>	$data['navigation_level_0_paddings_tablet']['padding-horizontal'],
							'width'		=>	50,
							'holder'	=>	20,
							'unit'		=>	'px',
						),

					)
					
				),
				
		
			)
		
		),
		

		array(
			'type'		=>	'module-set',
			'title'		=>	__('First Level','cloudfw'),
			'closable'	=>	true,
			'state'		=>	'opened',
			'data'		=>	array(

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK',
					'title'		=>	__('Menu Item Background (Normal)','cloudfw'),
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0','gradient'),
							'value'		=>	$data['navigation_level_0']['gradient'],
						),

					)

				),

				## Module Item
				array(
					'type'		=>	'text-shadow-kit',
					'merge'		=>	'module',
					'title'		=>	__('Menu Item Texts (Normal)','cloudfw'),
					'id'		=>	cloudfw_sanitize('navigation_level_0'),
					'value'		=>	$data['navigation_level_0'],
					'ucode'		=>	'NAVIGATION LINK',
				),

				## Module Item
				array(
					'type'		=>	'border-radius-kit',
					'merge'		=>	'module',
					'title'		=>	__('Menu Item Border Radius (Normal)','cloudfw'),
					'id'		=>	cloudfw_sanitize('navigation_level_0_border_radius'),
					'value'		=>	$data['navigation_level_0_border_radius'],
					'ucode'		=>	'NAVIGATION BORDER RADIUS',
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK',
					'title'		=>	__('Menu Item Background (Hover)','cloudfw'),
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_hover2','gradient'),
							'value'		=>	$data['navigation_level_0_hover2']['gradient'],
						),

					)

				),

				## Module Item
				array(
					'type'		=>	'text-shadow-kit',
					'merge'		=>	'module',
					'title'		=>	__('Menu Item Texts (Hover)','cloudfw'),
					'id'		=>	cloudfw_sanitize('navigation_level_0_hover2'),
					'value'		=>	$data['navigation_level_0_hover2'],
					'ucode'		=>	'NAVIGATION LINK',
				),


				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK LINE',
					'title'		=>	__('Menu Item Bottom Border','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('navigation_level_0_active_border','border-color'),
							'value'		=>	$data['navigation_level_0_active_border']['border-color'],
						),


					)
					
				),

				## Module Item
				/*array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK',
					'title'		=>	__('Current Menu Item','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Normal','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_current_item','color'),
							'value'		=>	$data['navigation_level_0_current_item']['color'],
						),
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Hover Color','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_current_item_hover','color'),
							'value'		=>	$data['navigation_level_0_current_item_hover']['color'],
						),

					)
					
				),*/

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK',
					'title'		=>	__('Menu Item Background (Current Item)','cloudfw'),
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_current_item','gradient'),
							'value'		=>	$data['navigation_level_0_current_item']['gradient'],
						),

					)

				),

				## Module Item
				array(
					'type'		=>	'text-shadow-kit',
					'merge'		=>	'module',
					'title'		=>	__('Menu Item Texts (Current Item)','cloudfw'),
					'id'		=>	cloudfw_sanitize('navigation_level_0_current_item'),
					'value'		=>	$data['navigation_level_0_current_item'],
					'ucode'		=>	'NAVIGATION LINK',
				),

				## Module Item
				/*array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK ACTIVE',
					'title'		=>	__('Active Menu Item (Sub Menu Opened State)','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_opened','gradient'),
							'value'		=>	$data['navigation_level_0_opened']['gradient'],
						),

						## Element
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Color','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_opened','color'),
							'value'		=>	$data['navigation_level_0_opened']['color'],

						),

						## Element
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Shadow','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_opened','text-shadow color'),
							'value'		=>	$data['navigation_level_0_opened']['text-shadow']['color'],

						),

						## Element
						array(
							'type'		=>	'select',
							'style'		=>	'horizontal',
							'title'		=>	__('Shadow Direction','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_opened','text-shadow direction'),
							'value'		=>	$data['navigation_level_0_opened']['text-shadow']['direction'],
							'source'	=>	array(
								'-1'		=>	__('Top','cloudfw'),
								'1'			=>	__('Bottom','cloudfw'),
							),
							'width'		=>	120

						),

					)

				),*/

			)

		), 


		array(
			'type'		=>	'module-set',
			'title'		=>	__('First Level in Sticky Mode','cloudfw'),
			'closable'	=>	true,
			'state'		=>	'opened',
			'data'		=>	array(

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK',
					'title'		=>	__('Header Background in Sticky Mode','cloudfw'),
					'data'		=>	array(

						array(
							'type'		=>	'grid',
							'data'		=>	array(
								
								array(
									'type'		=>	'gradient',
									'title'		=>	__('Background-Color','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_sticky','gradient'),
									'value'		=>	$data['navigation_sticky']['gradient'],
								),
								array(
									'type'		=>	'bg-set',
									'id'		=>	'navigation_sticky',
									'id:pattern'=>	'navigation_sticky',
									'value'		=>	$data,
									'attachment'=>	false
								)
							
							)
							
						),

					)

				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK',
					'title'		=>	__('Menu Item Background (Normal) in Sticky Mode','cloudfw'),
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_sticky','gradient'),
							'value'		=>	$data['navigation_level_0_sticky']['gradient'],
						),

					)

				),

				## Module Item
				array(
					'type'		=>	'text-shadow-kit',
					'merge'		=>	'module',
					'title'		=>	__('Menu Item Texts (Normal) in Sticky Mode','cloudfw'),
					'id'		=>	cloudfw_sanitize('navigation_level_0_sticky'),
					'value'		=>	$data['navigation_level_0_sticky'],
					'ucode'		=>	'NAVIGATION LINK',
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK',
					'title'		=>	__('Menu Item Background (Hover) in Sticky Mode','cloudfw'),
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_sticky_hover','gradient'),
							'value'		=>	$data['navigation_level_0_sticky_hover']['gradient'],
						),

					)

				),

				## Module Item
				array(
					'type'		=>	'text-shadow-kit',
					'merge'		=>	'module',
					'title'		=>	__('Menu Item Texts (Hover) in Sticky Mode','cloudfw'),
					'id'		=>	cloudfw_sanitize('navigation_level_0_sticky_hover'),
					'value'		=>	$data['navigation_level_0_sticky_hover'],
					'ucode'		=>	'NAVIGATION LINK',
				),

			)

		), 


		array(
			'type'		=>	'module-set',
			'title'		=>	__('First Level in Overlap Mode','cloudfw'),
			'closable'	=>	true,
			'state'		=>	'opened',
			'data'		=>	array(

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION',
					'title'		=>	__('Header Background in Overlap Mode','cloudfw'),
					'data'		=>	array(

						array(
							'type'		=>	'grid',
							'data'		=>	array(
								
								array(
									'type'		=>	'gradient',
									'title'		=>	__('Background-Color','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_overlapping_background','gradient'),
									'value'		=>	$data['navigation_overlapping_background']['gradient'],
								),
								array(
									'type'		=>	'bg-set',
									'id'		=>	'navigation_overlapping_background',
									'id:pattern'=>	'navigation_overlapping_background',
									'value'		=>	$data,
									'attachment'=>	false
								)
							
							)
							
						),

					)

				),

				array(
					'type'      =>  'module',
					'ucode'     =>  'NAVIGATION',
					'title'     =>  __('Header Background Opacity in Overlap Mode','cloudfw'),
					'data'      =>  array(

						array(
							'type'      =>  'slider',
							'id'		=>	cloudfw_sanitize('navigation_overlapping','opacity'),
							'value'		=>	$data['navigation_overlapping']['opacity'],
							'min'       =>  0,
							'max'       =>  100,
							'step'      =>  5,
							'width'     =>  250,
							'unit'		=>	'%',
						),

					)

				),				

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK',
					'title'		=>	__('Menu Item Background (Normal) in Overlap Mode','cloudfw'),
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_overlapping','gradient'),
							'value'		=>	$data['navigation_level_0_overlapping']['gradient'],
						),

					)

				),

				## Module Item
				array(
					'type'		=>	'text-shadow-kit',
					'merge'		=>	'module',
					'title'		=>	__('Menu Item Texts (Normal) in Overlap Mode','cloudfw'),
					'id'		=>	cloudfw_sanitize('navigation_level_0_overlapping'),
					'value'		=>	$data['navigation_level_0_overlapping'],
					'ucode'		=>	'NAVIGATION LINK',
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION LINK',
					'title'		=>	__('Menu Item Background (Hover) in Overlap Mode','cloudfw'),
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_level_0_overlapping_hover','gradient'),
							'value'		=>	$data['navigation_level_0_overlapping_hover']['gradient'],
						),

					)

				),

				## Module Item
				array(
					'type'		=>	'text-shadow-kit',
					'merge'		=>	'module',
					'title'		=>	__('Menu Item Texts (Hover) in Overlap Mode','cloudfw'),
					'id'		=>	cloudfw_sanitize('navigation_level_0_overlapping_hover'),
					'value'		=>	$data['navigation_level_0_overlapping_hover'],
					'ucode'		=>	'NAVIGATION LINK',
				),

			)

		), 

		array(
			'type'		=>	'module-set',
			'title'		=>	__('Header Style #2 Options','cloudfw'),
			'closable'	=>	true,
			'state'		=>	'opened',
			'data'		=>	array(


				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'HEADER STYLE 2',
					'title'		=>	__('Menu Container Background','cloudfw'),
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'gradient',
							'id'		=>	cloudfw_sanitize('header_style_2_background','gradient'),
							'value'		=>	$data['header_style_2_background']['gradient'],
						),

					)

				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'HEADER STYLE 2',
					'title'		=>	__('Border Color','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('header_style_2_border','border-color'),
							'value'		=>	$data['header_style_2_border']['border-color'],
						),
					)
					
				),


			)
		),

		array(
			'type'		=>	'module-set',
			'title'		=>	__('Sub Levels','cloudfw'),
			'closable'	=>	true,
			'state'		=>	'opened',
			'data'		=>	array(

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION SUB BORDER',
					'title'		=>	__('Sub Level Menu Border','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('navigation_fallout_border','border-color'),
							'value'		=>	$data['navigation_fallout_border']['border-color'],
						),

					)
					
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION SUB LINK',
					'title'		=>	__('Link Colors','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_link','gradient'),
							'value'		=>	$data['navigation_fallout_link']['gradient'],
						),

						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Color','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_link','color'),
							'value'		=>	$data['navigation_fallout_link']['color'],
						),

						## Element
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Shadow','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_link','text-shadow color'),
							'value'		=>	$data['navigation_fallout_link']['text-shadow']['color'],

						),

						## Element
						array(
							'type'		=>	'select',
							'style'		=>	'horizontal',
							'title'		=>	__('Shadow Direction','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_link','text-shadow direction'),
							'value'		=>	$data['navigation_fallout_link']['text-shadow']['direction'],
							'source'	=>	array(
								'-1'		=>	__('Top','cloudfw'),
								'1'			=>	__('Bottom','cloudfw'),
							),
							'width'		=>	120

						),


					)
					
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION SUB LINK',
					'title'		=>	__('Link Colors Hover','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_link_hover','gradient'),
							'value'		=>	$data['navigation_fallout_link_hover']['gradient'],
						),

						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Color','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_link_hover','color'),
							'value'		=>	$data['navigation_fallout_link_hover']['color'],
						),

						## Element
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Shadow','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_link_hover','text-shadow color'),
							'value'		=>	$data['navigation_fallout_link_hover']['text-shadow']['color'],

						),

						## Element
						array(
							'type'		=>	'select',
							'style'		=>	'horizontal',
							'title'		=>	__('Shadow Direction','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_link_hover','text-shadow direction'),
							'value'		=>	$data['navigation_fallout_link_hover']['text-shadow']['direction'],
							'source'	=>	array(
								'-1'		=>	__('Top','cloudfw'),
								'1'			=>	__('Bottom','cloudfw'),
							),
							'width'		=>	120

						),


					)
					
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION SUB LINK',
					'title'		=>	__('Separator Color','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 

						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('navigation_fallout_link','border-color'),
							'value'		=>	$data['navigation_fallout_link']['border-color'],
						),
							
					)
					
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION CURRENT SUB LINK',
					'title'		=>	__('Current Sub Item Color','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_current_sub','gradient'),
							'value'		=>	$data['navigation_fallout_current_sub']['gradient'],
						),

						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Color','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_current_sub','color'),
							'value'		=>	$data['navigation_fallout_current_sub']['color'],
						),

						## Element
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Shadow','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_current_sub','text-shadow color'),
							'value'		=>	$data['navigation_fallout_current_sub']['text-shadow']['color'],

						),

						## Element
						array(
							'type'		=>	'select',
							'style'		=>	'horizontal',
							'title'		=>	__('Shadow Direction','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_current_sub','text-shadow direction'),
							'value'		=>	$data['navigation_fallout_current_sub']['text-shadow']['direction'],
							'source'	=>	array(
								'-1'		=>	__('Top','cloudfw'),
								'1'			=>	__('Bottom','cloudfw'),
							),
							'width'		=>	120

						),


					)
					
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION CURRENT SUB LINK',
					'title'		=>	__('Current Sub Item Hover Color','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_current_sub_hover','gradient'),
							'value'		=>	$data['navigation_fallout_current_sub_hover']['gradient'],
						),

						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Color','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_current_sub_hover','color'),
							'value'		=>	$data['navigation_fallout_current_sub_hover']['color'],
						),

						## Element
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Shadow','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_current_sub_hover','text-shadow color'),
							'value'		=>	$data['navigation_fallout_current_sub_hover']['text-shadow']['color'],

						),

						## Element
						array(
							'type'		=>	'select',
							'style'		=>	'horizontal',
							'title'		=>	__('Shadow Direction','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_fallout_current_sub','text-shadow direction'),
							'value'		=>	$data['navigation_fallout_current_sub']['text-shadow']['direction'],
							'source'	=>	array(
								'-1'		=>	__('Top','cloudfw'),
								'1'			=>	__('Bottom','cloudfw'),
							),
							'width'		=>	120

						),


					)
					
				),


			)

		),

		array(
			'type'		=>	'module-set',
			'title'		=>	__('Mega Menu','cloudfw'),
			'closable'	=>	true,
			'state'		=>	'opened',
			'data'		=>	array(

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION MEGAMENU BACKGROUND',
					'title'		=>	__('Mega Menu Background','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('navigation_megamenu_background','background-color'),
							'value'		=>	$data['navigation_megamenu_background']['background-color'],
						),

					)
					
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION MEGAMENU BACKGROUND',
					'title'		=>	__('Mega Menu Border','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('navigation_megamenu_background','border-color'),
							'value'		=>	$data['navigation_megamenu_background']['border-color'],
						),

					)
					
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION MEGAMENU SEPERATOR',
					'title'		=>	__('Mega Menu Seperator Lines','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('navigation_megamenu_seperator','border-color'),
							'value'		=>	$data['navigation_megamenu_seperator']['border-color'],
						),

					)
					
				),


				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION MEGAMENU LINK',
					'title'		=>	__('Text Color','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array( 
							
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('navigation_megamenu','color'),
							'value'		=>	$data['navigation_megamenu']['color'],
						),

					)
					
				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION MEGAMENU LINK',
					'title'		=>	array(__('Link Color','cloudfw'), __('Link Hover Color','cloudfw')),
					'layout'	=>	'split',
					'data'		=>	array( 
							
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('navigation_megamenu_link','color'),
							'value'		=>	$data['navigation_megamenu_link']['color'],
						),

						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('navigation_megamenu_link_hover','color'),
							'value'		=>	$data['navigation_megamenu_link_hover']['color'],
						),

					)
					
				),

				## Module Item
				array(
					'type'		=>	'mini-section',
					'title'		=>	__('Mega Menu Item Style: Standard','cloudfw'),				
					'data'		=>	array(

						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MEGAMENU STANDARD',
							'title'		=>	__('Standard','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array( 
									
								array(
									'type'		=>	'gradient',
									'title'		=>	__('Background Gradient','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_link','gradient'),
									'value'		=>	$data['navigation_megamenu_standard_link']['gradient'],
								),

								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Color','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_link','color'),
									'value'		=>	$data['navigation_megamenu_standard_link']['color'],
								),

								## Element
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Shadow','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_link','text-shadow color'),
									'value'		=>	$data['navigation_megamenu_standard_link']['text-shadow']['color'],

								),

								## Element
								array(
									'type'		=>	'select',
									'style'		=>	'horizontal',
									'title'		=>	__('Shadow Direction','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_link','text-shadow direction'),
									'value'		=>	$data['navigation_megamenu_standard_link']['text-shadow']['direction'],
									'source'	=>	array(
										'-1'		=>	__('Top','cloudfw'),
										'1'			=>	__('Bottom','cloudfw'),
									),
									'width'		=>	120

								),


							)
							
						),

						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MEGAMENU STANDARD SEPERATOR',
							'title'		=>	__('Standard Border Bottom','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array( 
									
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_link','border-color'),
									'value'		=>	$data['navigation_megamenu_standard_link']['border-color'],
								),

							)
							
						),

						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MEGAMENU STANDARD',
							'title'		=>	__('Standard Hover','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array( 
									
								array(
									'type'		=>	'gradient',
									'title'		=>	__('Background Gradient','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_link_hover','gradient'),
									'value'		=>	$data['navigation_megamenu_standard_link_hover']['gradient'],
								),

								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Color','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_link_hover','color'),
									'value'		=>	$data['navigation_megamenu_standard_link_hover']['color'],
								),

								## Element
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Shadow','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_link_hover','text-shadow color'),
									'value'		=>	$data['navigation_megamenu_standard_link_hover']['text-shadow']['color'],

								),

								## Element
								array(
									'type'		=>	'select',
									'style'		=>	'horizontal',
									'title'		=>	__('Shadow Direction','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_link_hover','text-shadow direction'),
									'value'		=>	$data['navigation_megamenu_standard_link_hover']['text-shadow']['direction'],
									'source'	=>	array(
										'-1'		=>	__('Top','cloudfw'),
										'1'			=>	__('Bottom','cloudfw'),
									),
									'width'		=>	120

								),


							)
							
						),

						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MEGAMENU STANDARD',
							'title'		=>	__('Standard (Current Item)','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array( 
									
								array(
									'type'		=>	'gradient',
									'title'		=>	__('Background Gradient','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_current_link','gradient'),
									'value'		=>	$data['navigation_megamenu_standard_current_link']['gradient'],
								),

								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Color','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_current_link','color'),
									'value'		=>	$data['navigation_megamenu_standard_current_link']['color'],
								),

								## Element
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Shadow','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_current_link','text-shadow color'),
									'value'		=>	$data['navigation_megamenu_standard_current_link']['text-shadow']['color'],

								),

								## Element
								array(
									'type'		=>	'select',
									'style'		=>	'horizontal',
									'title'		=>	__('Shadow Direction','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_current_link','text-shadow direction'),
									'value'		=>	$data['navigation_megamenu_standard_current_link']['text-shadow']['direction'],
									'source'	=>	array(
										'-1'		=>	__('Top','cloudfw'),
										'1'			=>	__('Bottom','cloudfw'),
									),
									'width'		=>	120

								),


							)
							
						),


						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MEGAMENU STANDARD',
							'title'		=>	__('Standard (Current Item) Hover','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array( 
									
								array(
									'type'		=>	'gradient',
									'title'		=>	__('Background Gradient','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_current_link_hover','gradient'),
									'value'		=>	$data['navigation_megamenu_standard_current_link_hover']['gradient'],
								),

								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Color','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_current_link_hover','color'),
									'value'		=>	$data['navigation_megamenu_standard_current_link_hover']['color'],
								),

								## Element
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Shadow','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_current_link_hover','text-shadow color'),
									'value'		=>	$data['navigation_megamenu_standard_current_link_hover']['text-shadow']['color'],

								),

								## Element
								array(
									'type'		=>	'select',
									'style'		=>	'horizontal',
									'title'		=>	__('Shadow Direction','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_standard_current_link_hover','text-shadow direction'),
									'value'		=>	$data['navigation_megamenu_standard_current_link_hover']['text-shadow']['direction'],
									'source'	=>	array(
										'-1'		=>	__('Top','cloudfw'),
										'1'			=>	__('Bottom','cloudfw'),
									),
									'width'		=>	120

								),


							)
							
						),

					)

				),

				## Module Item
				array(
					'type'		=>	'mini-section',
					'title'		=>	__('Mega Menu Item Style: Big Titles','cloudfw'),				
					'data'		=>	array(

						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MEGAMENU BIG TITLE',
							'title'		=>	__('Big Titles','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array( 
									
								array(
									'type'		=>	'gradient',
									'title'		=>	__('Background Gradient','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_big_title','gradient'),
									'value'		=>	$data['navigation_megamenu_big_title']['gradient'],
								),

								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Color','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_big_title','color'),
									'value'		=>	$data['navigation_megamenu_big_title']['color'],
								),

								## Element
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Shadow','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_big_title','text-shadow color'),
									'value'		=>	$data['navigation_megamenu_big_title']['text-shadow']['color'],

								),

								## Element
								array(
									'type'		=>	'select',
									'style'		=>	'horizontal',
									'title'		=>	__('Shadow Direction','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_big_title','text-shadow direction'),
									'value'		=>	$data['navigation_megamenu_big_title']['text-shadow']['direction'],
									'source'	=>	array(
										'-1'		=>	__('Top','cloudfw'),
										'1'			=>	__('Bottom','cloudfw'),
									),
									'width'		=>	120

								),


							)
							
						),

						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MEGAMENU BIG TITLE SEPERATOR',
							'title'		=>	__('Big Titles Border Bottom','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array( 
									
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'id'		=>	cloudfw_sanitize('navigation_megamenu_big_title','border-color'),
									'value'		=>	$data['navigation_megamenu_big_title']['border-color'],
								),

							)
							
						),

						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MEGAMENU BIG TITLE',
							'title'		=>	__('Big Titles Hover','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array( 
									
								array(
									'type'		=>	'gradient',
									'title'		=>	__('Background Gradient','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_big_title_hover','gradient'),
									'value'		=>	$data['navigation_megamenu_big_title_hover']['gradient'],
								),

								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Color','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_big_title_hover','color'),
									'value'		=>	$data['navigation_megamenu_big_title_hover']['color'],
								),

								## Element
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Shadow','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_big_title_hover','text-shadow color'),
									'value'		=>	$data['navigation_megamenu_big_title_hover']['text-shadow']['color'],

								),

								## Element
								array(
									'type'		=>	'select',
									'style'		=>	'horizontal',
									'title'		=>	__('Shadow Direction','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_megamenu_big_title_hover','text-shadow direction'),
									'value'		=>	$data['navigation_megamenu_big_title_hover']['text-shadow']['direction'],
									'source'	=>	array(
										'-1'		=>	__('Top','cloudfw'),
										'1'			=>	__('Bottom','cloudfw'),
									),
									'width'		=>	120

								),


							)
							
						),

					)

				),

			)

		), 

		array(
			'type'		=>	'module-set',
			'title'		=>	__('Mobile Menu','cloudfw'),
			'closable'	=>	true,
			'state'		=>	'opened',
			'data'		=>	array(


				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION MOBILE TOGGLE',
					'title'		=>	__('Toggle Colors','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'gradient',
							'title'		=>	__('Background Gradient','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_mobile_toggle','gradient'),
							'value'		=>	$data['navigation_mobile_toggle']['gradient'],
						),

						## Element
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Color','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_mobile_toggle','color'),
							'value'		=>	$data['navigation_mobile_toggle']['color'],

						),

						## Element
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'title'		=>	__('Text Shadow','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_mobile_toggle','text-shadow color'),
							'value'		=>	$data['navigation_mobile_toggle']['text-shadow']['color'],

						),

						## Element
						array(
							'type'		=>	'select',
							'style'		=>	'horizontal',
							'title'		=>	__('Shadow Direction','cloudfw'),
							'id'		=>	cloudfw_sanitize('navigation_mobile_toggle','text-shadow direction'),
							'value'		=>	$data['navigation_mobile_toggle']['text-shadow']['direction'],
							'source'	=>	array(
								'-1'		=>	__('Top','cloudfw'),
								'1'			=>	__('Bottom','cloudfw'),
							),
							'width'		=>	120

						),

					)

				),

				## Module Item
				array(
					'type'		=>	'module',
					'ucode'		=>	'NAVIGATION MOBILE TOGGLE',
					'title'		=>	__('Toggle Button Border','cloudfw'),
					'layout'	=>	'float',
					'data'		=>	array(
						## Element
						array(
							'type'		=>	'color',
							'style'		=>	'horizontal',
							'id'		=>	cloudfw_sanitize('navigation_mobile_toggle','border-color'),
							'value'		=>	$data['navigation_mobile_toggle']['border-color'],
						),


					)

				),

				## Module Item
				array(
					'type'		=>	'mini-section',
					'title'		=>	__('Mobile Menu Toogle Hover','cloudfw'),				
					'data'		=>	array(

						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MOBILE TOGGLE',
							'title'		=>	__('Toggle Hover Colors','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array(
								## Element
								array(
									'type'		=>	'gradient',
									'title'		=>	__('Background Gradient','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_mobile_toggle_hover','gradient'),
									'value'		=>	$data['navigation_mobile_toggle_hover']['gradient'],
								),

								## Element
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Color','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_mobile_toggle_hover','color'),
									'value'		=>	$data['navigation_mobile_toggle_hover']['color'],

								),

								## Element
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'title'		=>	__('Text Shadow','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_mobile_toggle_hover','text-shadow color'),
									'value'		=>	$data['navigation_mobile_toggle_hover']['text-shadow']['color'],

								),

								## Element
								array(
									'type'		=>	'select',
									'style'		=>	'horizontal',
									'title'		=>	__('Shadow Direction','cloudfw'),
									'id'		=>	cloudfw_sanitize('navigation_mobile_toggle_hover','text-shadow direction'),
									'value'		=>	$data['navigation_mobile_toggle_hover']['text-shadow']['direction'],
									'source'	=>	array(
										'-1'		=>	__('Top','cloudfw'),
										'1'			=>	__('Bottom','cloudfw'),
									),
									'width'		=>	120

								),

							)

						),

						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MOBILE TOGGLE',
							'title'		=>	__('Toggle Hover Border','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array(
								## Element
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'id'		=>	cloudfw_sanitize('navigation_mobile_toggle_hover','border-color'),
									'value'		=>	$data['navigation_mobile_toggle_hover']['border-color'],
								),


							)

						),


					)

				),


				## Module Item
				array(
					'type'		=>	'mini-section',
					'title'		=>	__('Mobile Menu Items','cloudfw'),				
					'data'		=>	array(


						## Module Item
						array(
							'type'		=>	'module',
							'ucode'		=>	'NAVIGATION MOBILE TOGGLE',
							'title'		=>	__('Separator Line for Menu Items','cloudfw'),
							'layout'	=>	'float',
							'data'		=>	array(
								## Element
								array(
									'type'		=>	'color',
									'style'		=>	'horizontal',
									'id'		=>	cloudfw_sanitize('navigation_mobile_toggle_border','border-color'),
									'value'		=>	$data['navigation_mobile_toggle_border']['border-color'],
								),


							)

						),

					)

				),


			)

		), 

	) 

);