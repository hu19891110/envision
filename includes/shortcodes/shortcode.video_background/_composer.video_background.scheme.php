<?php

return array(
	array(
		'type'		=> 'module',
		'condition'	=> !$that->is_composer,
		'title'		=> __('Content','cloudfw'),
		'data'		=> array(

			## Element
			array(
				'type'		=>	'textarea',
				'id'		=>	'content',
				'value'		=>	$that->get_value('content'),
			), // #### element: 0

		)

	),

	array(
		'type'		=> 'module',
		'title'		=> __('Visibility','cloudfw'),
		'data'		=> array(

			## Element
			array(
				'type'		=>	'select',
				'id'		=>	'the_device',
				'value'		=>	$that->get_value('the_device'),
	            'source'	=>	array(
	            	'type'		=>	'function',
	            	'function'	=>	'cloudfw_admin_get_visibility_options'
	            ),
				'width'		=>	250,
			), // #### element: 0

		)

	),


	array(
		'type'		=>	'mini-section',
		'title'		=>	__('Background Video','cloudfw'),
		'data'		=>	array(

			array(
				'type'		=> 'module',
				'title'		=> __('Video Type','cloudfw'),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'select',
						'id'		=>	'video_type',
						'value'		=>	$that->get_value('video_type'),
						'source'	=>	array(
							'NULL' 		=>  __('Self-Hosted Video','cloudfw'),
							'youtube'	=>  __('Youtube Video','cloudfw'),
							'vimeo'	    =>  __('Vimeo Video','cloudfw'),
						),
						'width'		=>	400,
					), // #### element: 0

				)

			),

			array(
				'type'		=> 'group',
				'related'	=> 'videoBGOptions videoBGOptions-Selfhosted',
				'data'		=> array(
					array(
						'type'		=> 'module',
						'title'		=> __('Video Source (m4v Format)','cloudfw'),
						'data'		=> array(

							## Element
							array(
								'type'		=>	'text',
								'id'		=>	'video_source_m4v',
								'value'		=>	$that->get_value('video_source_m4v'),
								'width'		=>	400,
								'holder'	=>	'http://',
							), // #### element: 0

						)

					),

					array(
						'type'		=> 'module',
						'title'		=> __('Video Source (ogv Format)','cloudfw'),
						'data'		=> array(

							## Element
							array(
								'type'		=>	'text',
								'id'		=>	'video_source_ogv',
								'value'		=>	$that->get_value('video_source_ogv'),
								'width'		=>	400,
								'holder'	=>	'http://',
							), // #### element: 0

						)

					),

					array(
						'type'		=> 'module',
						'title'		=> __('Video Source (webmv Format)','cloudfw'),
						'data'		=> array(

							## Element
							array(
								'type'		=>	'text',
								'id'		=>	'video_source_webmv',
								'value'		=>	$that->get_value('video_source_webmv'),
								'width'		=>	400,
								'holder'	=>	'http://',
							), // #### element: 0

						)

					),

				)

			),

			array(
				'type'		=> 'group',
				'related'	=> 'videoBGOptions videoBGOptions-Youtube',
				'data'		=> array(
					array(
						'type'		=> 'module',
						'title'		=> __('Youtube Video Source','cloudfw'),
						'data'		=> array(

							## Element
							array(
								'type'		=>	'text',
								'id'		=>	'video_source_youtube',
								'value'		=>	$that->get_value('video_source_youtube'),
								'width'		=>	400,
								'holder'	=>	__('Insert a video ID or URL','cloudfw'),
								'desc'		=>	__('Any advertising on youtube videos is added by YouTube themselves and, unfortunately, we have no control over it.<br/>If the video is one of your own then you have the option to switch it off within the settings of the YouTube site.','cloudfw')
											.	'<br/>Please check the link for more info about <a href="https://support.google.com/youtube/answer/94522?hl=en" target="_blank">' . __('how to disable ads on your own youtube videos','cloudfw'). '</a>.'
								,
							), // #### element: 0

						)

					),
				)
			),

			array(
				'type'		=> 'group',
				'related'	=> 'videoBGOptions videoBGOptions-Vimeo',
				'data'		=> array(
					array(
						'type'		=> 'module',
						'title'		=> __('Vimeo Video Source','cloudfw'),
						'data'		=> array(

							## Element
							array(
								'type'		=>	'text',
								'id'		=>	'video_source_vimeo',
								'value'		=>	$that->get_value('video_source_vimeo'),
								'width'		=>	400,
								'holder'	=>	__('Insert a video ID or URL','cloudfw'),
							), // #### element: 0

						)

					),
				)
			),

			array(
				'type'		=> 'module',
				'title'		=> __('Loop Video','cloudfw'),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'onoff',
						'id'		=>	'video_loop',
						'value'		=>	$that->get_value('video_loop', true),
					), // #### element: 0

				)

			),


			array(
				'type'		=> 'module',
				'title'		=> array(__('Video Width','cloudfw'), __('Video Height','cloudfw')),
				'layout'	=> 'split',
				'data'		=> array(

					## Element
					array(
						'type'		=>	'text',
						'id'		=>	'video_width',
						'value'		=>	$that->get_value('video_width', '640'),
						'width'		=>	50,
						'unit'		=>	__('px','cloudfw')
					), // #### element: 0

					## Element
					array(
						'type'		=>	'text',
						'id'		=>	'video_height',
						'value'		=>	$that->get_value('video_height', '360'),
						'width'		=>	50,
						'unit'		=>	__('px','cloudfw')
					), // #### element: 0

				)

			),

		)

	),

	array(
		'type'		=>	'mini-section',
		'title'		=>	__('Background Image','cloudfw'),
		'data'		=>	array(

			array(
				'type'		=> 'module',
				'title'		=> __('Background Image (Poster Image)','cloudfw'),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'upload',
						'id'		=>	'video_poster',
						'value'		=>	$that->get_value('video_poster'),
						'store'		=>	true,
						'library'	=>	true,
						'removable'	=>	true,
					), // #### element: 0

				)

			),

			array(
				'type'		=> 'module',
				'title'		=> __('Background Style','cloudfw'),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'select',
						'id'		=>	'video_poster_style',
						'value'		=>	$that->get_value('video_poster_style', 'cover'),
						'source'	=>	array(
							'type'		=>	'function',
							'function'	=>	'cloudfw_admin_array_bg_styles',
						),
						'width'		=>	250
					), // #### element: 0

				)

			),


		)

	),


	array(
		'type'		=> 'mini-section',
		'title'		=> __('Overlay','cloudfw'),
		'data'		=> array(

			array(
				'type'		=> 'module',
				'title'		=> __('Overlay Color','cloudfw'),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'gradient',
						'id'		=>	'box_gradient',
						'value'		=>	array( $that->get_value('box_gradient_0'), $that->get_value('box_gradient_1') ),
					), // #### element: 0

				)

			),

			array(
				'type'		=> 'module',
				'title'		=> __('Opactiy','cloudfw'),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'slider',
						'id'		=>	'box_opacity',
						'value'		=>	$that->get_value('box_opacity', 90),
						'class'		=>	'input_250',
						'min'		=>	0,
						'max'		=>	99,
						'step'		=>	1,
						'unit'		=>	'',
					), // #### element: 0

				)

			),

		)

	),

	array(
		'type'		=> 'mini-section',
		'title'		=> __('Colors','cloudfw'),
		'data'		=> array(

			array(
				'type'		=> 'module',
				'title'		=> __('Text Color','cloudfw'),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'color',
						'style'		=>	'horizontal',
						'id'		=>	'box_color',
						'value'		=>	$that->get_value('box_color'),
					), // #### element: 0

				)

			),

			array(
				'type'		=> 'module',
				'layout'	=> 'split',
				'title'		=> array(__('Link Color','cloudfw'), __('Link Hover Color','cloudfw')),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'color',
						'style'		=>	'horizontal',
						'id'		=>	'box_link_color',
						'value'		=>	$that->get_value('box_link_color'),
					), // #### element: 0

					## Element
					array(
						'type'		=>	'color',
						'style'		=>	'horizontal',
						'id'		=>	'box_link_hover_color',
						'value'		=>	$that->get_value('box_link_hover_color'),
					), // #### element: 0

				)

			),

		)

	),

	array(
		'type'		=> 'mini-section',
		'title'		=> __('Layout','cloudfw'),
		'data'		=> array(

			array(
				'type'		=> 'module',
				'title'		=> __('Full Height Layout?','cloudfw'),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'onoff',
						'id'		=>	'full_height',
						'value'		=>	$that->get_value('full_height', 'FALSE'),
					), // #### element: 0

				)

			),

			array(
				'type'		=> 'module',
				'title'		=> __('Enable Parallax Effect?','cloudfw'),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'onoff',
						'id'		=>	'parallax',
						'value'		=>	$that->get_value('parallax', 'FALSE'),
					), // #### element: 0

				)

			),

			array(
				'type'		=>	'global-scheme',
				'scheme'	=>	'margins',
				'this'		=>	$that
			),

			array(
				'type'		=>	'global-scheme',
				'scheme'	=>	'paddings',
				'this'		=>	$that
			),

		)

	),

	array(
		'type'		=> 'mini-section',
		'title'		=> __('Others','cloudfw'),
		'data'		=> array(

			array(
				'type'		=> 'module',
				'layout'	=> 'split',
				'title'		=> array(__('Custom ID','cloudfw'), __('Custom Class','cloudfw')),
				'data'		=> array(

					## Element
					array(
						'type'		=>	'text',
						'id'		=>	'custom_id',
						'value'		=>	$that->get_value('custom_id'),
						'width'		=>	150,
					), // #### element: 0

					## Element
					array(
						'type'		=>	'text',
						'id'		=>	'custom_class',
						'value'		=>	$that->get_value('custom_class'),
						'width'		=>	150,
					), // #### element: 0

				)

			),

		)

	),

);