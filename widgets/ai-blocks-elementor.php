<?php
namespace FlexContent\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Text_Shadow;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



class ai_blocks_elementor extends \Elementor\Widget_Base {

	public function get_name() {
		return 'ai-blocks-elementor';
	}

	public function get_title() {
		return __( 'AI Blocks Elementor', 'ai-blocks-elementor' );
	}

	public function get_icon() {
		return 'eicon-post-content';
	}

	public function get_categories() {
		return [ 'web-devs-category' ];
	}

	protected function _register_controls() {




		// MAIN SETTINGS
		$this->start_controls_section(
			'main_section',
			[
				'label' => __( 'Main', 'ai-blocks-elementor' ),
			]
		);
			$this->add_responsive_control(
				'block_space',
				[
					'label' => __( 'Space', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'default' => [
						'size' => 5,
					],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .ai_block' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();



		// VIDEO BLOCK
		$this->start_controls_section(
			'video_block_section',
			[
				'label' => __( 'Video block', 'ai-blocks-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_responsive_control(
				'video_block_margin',
				[
					'label' => __( 'Margin', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .ai_block_container' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_responsive_control(
				'video_block_padding',
				[
					'label' => __( 'Padding', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .ai_block_container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();














		// TEXT BLOCK
		$this->start_controls_section(
			'text_block_section',
			[
				'label' => __( 'Text block', 'ai-blocks-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			// text block heading
			$this->add_control( // text block heading label
				'text_block_heading_options',
				[
					'label' => __( 'Text block heading', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::HEADING,
					
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'text_block_heading_typography',
					'label' => __( 'Typography', 'elementor' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .ai_text_block .ai_text_title',
				]
			);
			$this->add_control(
				'text_block_heading_color',
				[
					'label' => __( 'Color', 'elementor' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ai_text_block .ai_text_title' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_responsive_control(
				'text_block_heading_text_align',
				[
					'label' => __( 'Alignment', 'elementor' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => __( 'Left', 'elementor' ),
							'icon' => 'fa fa-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'elementor' ),
							'icon' => 'fa fa-align-center',
						],
						'right' => [
							'title' => __( 'Right', 'elementor' ),
							'icon' => 'fa fa-align-right',
						],
						'justify' => [
							'title' => __( 'Justified', 'elementor' ),
							'icon' => 'fa fa-align-justify',
						],
					],
					'selectors' => [
						'{{WRAPPER}} .ai_text_block .ai_text_title' => 'text-align: {{VALUE}};',
					],
					'default' => 'left',
					'toggle' => false,
				]
			);
			$this->add_responsive_control(
				'text_block_heading_space',
				[
					'label' => __( 'Space', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'default' => [
						'size' => 5,
					],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 50,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .ai_text_block .ai_text_title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);


			$this->add_control( // image block text label
				'text_block_hr1',
				[
					'type' => Controls_Manager::DIVIDER,
				]
			);
			$this->add_control( // text block text label
				'text_block_text_options',
				[
					'label' => __( 'Text block text', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'text_block_text_typography',
					'label' => __( 'Typography', 'elementor' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_3,
					'selector' => '{{WRAPPER}} .ai_text_block .ai_text_content',
				]
			);
			$this->add_control(
				'text_block_text_color',
				[
					'label' => __( 'Color', 'elementor' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ai_text_block .ai_text_content' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_responsive_control(
				'text_block_text_text_align',
				[
					'label' => __( 'Alignment', 'elementor' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => __( 'Left', 'elementor' ),
							'icon' => 'fa fa-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'elementor' ),
							'icon' => 'fa fa-align-center',
						],
						'right' => [
							'title' => __( 'Right', 'elementor' ),
							'icon' => 'fa fa-align-right',
						],
						'justify' => [
							'title' => __( 'Justified', 'elementor' ),
							'icon' => 'fa fa-align-justify',
						],
					],
					'selectors' => [
						'{{WRAPPER}} .ai_text_block .ai_text_content' => 'text-align: {{VALUE}};',
					],
					'default' => 'left',
					'toggle' => false,
				]
			);

		$this->end_controls_section();











		// QUOTE BLOCK
		$this->start_controls_section(
			'quote_block_section',
			[
				'label' => __( 'Quote block', 'ai-blocks-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			// quote block heading
			$this->add_control( // quote block heading label
				'quote_block_general_options',
				[
					'label' => __( 'Quote block general settings', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::HEADING,
				]
			);
			$this->add_responsive_control(
				'quote_block_padding',
				[
					'label' => __( 'Padding', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .ai_quote_block_wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'quote_block_hr1',
				[
					'type' => \Elementor\Controls_Manager::DIVIDER,
				]
			);
			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'quote_block_border',
					'label' => __( 'Border', 'elementor' ),
					'selector' => '{{WRAPPER}} .ai_quote_block_wrapper',
				]
			);
			$this->add_control(
				'quote_block_hr2',
				[
					'type' => \Elementor\Controls_Manager::DIVIDER,
				]
			);
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'quote_block_background',
					'label' => __( 'Background', 'elementor' ),
					'types' => [ 'classic', 'gradient', 'video' ],
					'selector' => '{{WRAPPER}} .ai_quote_block_wrapper',
				]
			);


			$this->add_control( // image block text label
				'quote_block_hr3',
				[
					'type' => Controls_Manager::DIVIDER,
				]
			);
			$this->add_control( // quote block heading label
				'quote_block_heading_options',
				[
					'label' => __( 'Quote block heading', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'quote_block_heading_placement',
				[
					'label' => __( 'Heading alignment', 'elementor' ),
					'type' => Controls_Manager::SELECT,
					'options' => [
						'column' => __( 'Top', 'elementor' ),
						'column-reverse' => __( 'Bottom', 'elementor' ),
					],
					'default' => 'column',
					'selectors' => [
						'{{WRAPPER}} .ai_quote_block .ai_quote_block_wrapper' => 'flex-direction: {{VALUE}}; display: flex;',
					],

				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'quote_block_heading_typography',
					'label' => __( 'Typography', 'elementor' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .ai_quote_block .ai_quote_title',
				]
			);
			$this->add_control(
				'quote_block_heading_color',
				[
					'label' => __( 'Color', 'elementor' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ai_quote_block .ai_quote_title' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_responsive_control(
				'quote_block_heading_text_align',
				[
					'label' => __( 'Alignment', 'elementor' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => __( 'Left', 'elementor' ),
							'icon' => 'fa fa-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'elementor' ),
							'icon' => 'fa fa-align-center',
						],
						'right' => [
							'title' => __( 'Right', 'elementor' ),
							'icon' => 'fa fa-align-right',
						],
						'justify' => [
							'title' => __( 'Justified', 'elementor' ),
							'icon' => 'fa fa-align-justify',
						],
					],
					'selectors' => [
						'{{WRAPPER}} .ai_quote_block .ai_quote_title' => 'text-align: {{VALUE}};',
					],
					'default' => 'left',
					'toggle' => false,
				]
			);
			$this->add_control(
				'quote_block_hr4',
				[
					'type' => \Elementor\Controls_Manager::DIVIDER,
				]
			);		





			$this->add_responsive_control(
				'quote_block_space1',
				[
					'label' => __( 'Space', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::SLIDER,
					'default' => [
						'size' => 5,
					],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 50,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .ai_quote_block .ai_quote_title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'quote_block_heading_placement' => 'column',
					],
				]
			);
			$this->add_responsive_control(
				'quote_block_space2',
				[
					'label' => __( 'Space', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::SLIDER,
					'default' => [
						'size' => 5,
					],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 50,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .ai_quote_block .ai_quote_content' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'quote_block_heading_placement' => 'column-reverse',
					],
				]
			);		


			$this->add_control( // image block text label
				'quote_block_hr5',
				[
					'type' => Controls_Manager::DIVIDER,
				]
			);
			$this->add_control( // quote block text label
				'quote_block_text_options',
				[
					'label' => __( 'Quote block text', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'quote_block_text_typography',
					'label' => __( 'Typography', 'elementor' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_3,
					'selector' => '{{WRAPPER}} .ai_quote_block .ai_quote_content',
				]
			);
			$this->add_control(
				'quote_block_text_color',
				[
					'label' => __( 'Color', 'elementor' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ai_quote_block .ai_quote_content' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_responsive_control(
				'quote_block_text_text_align',
				[
					'label' => __( 'Alignment', 'elementor' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => __( 'Left', 'elementor' ),
							'icon' => 'fa fa-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'elementor' ),
							'icon' => 'fa fa-align-center',
						],
						'right' => [
							'title' => __( 'Right', 'elementor' ),
							'icon' => 'fa fa-align-right',
						],
						'justify' => [
							'title' => __( 'Justified', 'elementor' ),
							'icon' => 'fa fa-align-justify',
						],
					],
					'selectors' => [
						'{{WRAPPER}} .ai_quote_block .ai_quote_content' => 'text-align: {{VALUE}};',
					],
					'default' => 'left',
					'toggle' => false,
				]
			);

		$this->end_controls_section();

		


		// IMAGE BLOCK
		$this->start_controls_section(
			'image_block_section',
			[
				'label' => __( 'Image block', 'ai-blocks-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control( // image block text label
				'image_block_options',
				[
					'label' => __( 'Image block', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::HEADING,
				]
			);
			$this->add_responsive_control(
				'image_block_padding',
				[
					'label' => __( 'Padding', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .ai_image_block .ai_image_block_wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'image_block_background',
					'label' => __( 'Background', 'elementor' ),
					'types' => [ 'classic', 'gradient', 'video' ],
					'selector' => '{{WRAPPER}} .ai_image_block .ai_image_block_wrapper',
				]
			);
			$this->add_control(
				'image_block_hr1',
				[
					'type' => \Elementor\Controls_Manager::DIVIDER,
				]
			);
			$this->add_control( // image block text label
				'image_block_text_options',
				[
					'label' => __( 'Image block description', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'image_block_text_typography',
					'label' => __( 'Typography', 'elementor' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_3,
					'selector' => '{{WRAPPER}} .ai_image_block .ai_image_description',
				]
			);
			$this->add_control(
				'image_block_text_color',
				[
					'label' => __( 'Color', 'elementor' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ai_image_block .ai_image_description' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_responsive_control(
				'image_block_text_text_align',
				[
					'label' => __( 'Alignment', 'elementor' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => __( 'Left', 'elementor' ),
							'icon' => 'fa fa-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'elementor' ),
							'icon' => 'fa fa-align-center',
						],
						'right' => [
							'title' => __( 'Right', 'elementor' ),
							'icon' => 'fa fa-align-right',
						],
						'justify' => [
							'title' => __( 'Justified', 'elementor' ),
							'icon' => 'fa fa-align-justify',
						],
					],
					'selectors' => [
						'{{WRAPPER}} .ai_image_block .ai_image_description' => 'text-align: {{VALUE}};',
					],
					'default' => 'left',
					'toggle' => false,
				]
			);
		$this->end_controls_section();



		// GALLERY BLOCK
		$this->start_controls_section(
			'gallery_block_section',
			[
				'label' => __( 'Gallery block', 'ai-blocks-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control( // quote block text label
				'gallery_block_items_options',
				[
					'label' => __( 'Gallery items', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::HEADING,
				]
			);














			$this->add_responsive_control(
				'gallery_block_columns',
				[
					'label' => __( 'Gallery block columns', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::SELECT,
					'options' => [
						'100%' => '1',
						'50%' => '2',
						'33.333%' => '3',
						'25%' => '4',
						'20%' => '5',
					],
					'default' => '33.333%', // use key, not value
					'tablet_default' => '50%',
					'mobile_default' => '100%',
					'selectors' => [
						'{{WRAPPER}} .ai_image_gallery_block .msnry_item' => 'width: {{VALUE}};',
					],
					'render_type' => 'template',
				]
			);













			$this->add_control(
				'gallery_block_items_gap',
				[
					'label' => __( 'Columns gap', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 20,
						],
					],
					'default' => [
						'unit' => 'px',
						'size' => 2,
					],
					'selectors' => [
						'{{WRAPPER}} .msnry_item' => 'padding: {{SIZE}}{{UNIT}} !important;',
						'{{WRAPPER}} .ai_block_gallery' => 'margin-left: -{{SIZE}}{{UNIT}} !important; margin-right: -{{SIZE}}{{UNIT}} !important;',
						'{{WRAPPER}} .msnry_item a:before' => 'top: {{SIZE}}{{UNIT}}; left: {{SIZE}}{{UNIT}}; bottom: {{SIZE}}{{UNIT}}; right: {{SIZE}}{{UNIT}};',
					],
					'render_type' => 'template',
				]
			);
			$this->add_control(
				'gallery_block_items_border_radius',
				[
					'label' => __( 'Border radius', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 20,
						],
					],
					'default' => [
						'unit' => 'px',
						'size' => 2,
					],
					'selectors' => [
						'{{WRAPPER}} .msnry_item img' => 'border-radius: {{SIZE}}{{UNIT}}',
						'{{WRAPPER}} .msnry_item a:before' => 'border-radius: {{SIZE}}{{UNIT}}',
					],
				]
			);



			$this->add_control( // image block text label
				'gallery_block_hr1',
				[
					'type' => Controls_Manager::DIVIDER,
				]
			);
			$this->add_control(
				'gallery_block_overlay_options',
				[
					'label' => __( 'Gallery item overlay', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'gallery_block_items_overlay_color',
				[
					'label' => __( 'Background color', 'ai-blocks-elementor' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .msnry_item a:before' => 'background: {{VALUE}}',
					],
				]
			);



			$this->add_control(
				'gallery_block_hr2',
				[
					'type' => \Elementor\Controls_Manager::DIVIDER,
				]
			);
			$this->add_control(
				'gallery_block_items_overlay_icon',
				[
					'label' => __( 'icon', 'ai-blocks-elementor' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'' => [
							'icon' => 'eicon-plus-square',
						],
						'' => [
							'icon' => 'eicon-plus',
						],
						'' => [
							'icon' => 'eicon-plus-circle',
						],	
						'' => [
							'icon' => 'eicon-eye',
						],
						'' => [
							'icon' => 'eicon-zoom-in-bold',
						],		
						'' => [
							'icon' => 'eicon-zoom-in',
						],	
					],
					'default' => '',
					'toggle' => false,
					'selectors' => [
						'{{WRAPPER}} .msnry_item a:after' => 'content: "{{VALUE}}"',
					],
				]
			);
			$this->add_control(
				'gallery_block_items_overlay_icon_size',
				[
					'label' => __( 'Icon size', 'ai-blocks-elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 10,
							'max' => 50,
						],
					],
					'default' => [
						'unit' => 'px',
						'size' => 24,
					],
					'selectors' => [
						'{{WRAPPER}} .msnry_item a:after' => 'font-size: {{SIZE}}{{UNIT}}',
					],
				]
			);
			$this->add_control(
				'gallery_block_items_overlay_icon_color',
				[
					'label' => __( 'Icon color', 'ai-blocks-elementor' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .msnry_item a:after' => 'color: {{VALUE}}',
					],
				]
			);			
			$this->add_group_control(
				Group_Control_Text_Shadow::get_type(),
				[
					'name' => 'gallery_block_items_overlay_icon_shadow',
					'label' => __( 'Overlay icon shadow', 'ai-blocks-elementor' ),
					'selector' => '{{WRAPPER}} .msnry_item a:after',
				]
			);
	
			$this->end_controls_section();			
		$this->end_controls_section();







	}

	protected function render() { // php template
		the_content();
	}
	
}