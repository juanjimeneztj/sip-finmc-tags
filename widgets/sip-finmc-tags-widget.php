<?php
namespace JuanJimenezTJFinMCTags\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class sip_finmc_tags extends Widget_Base {

	public function get_name() {
		return 'sip-finmc-tags';
	}

	public function get_title() {
		return __( 'Juan Jimenez Tags', 'sip-finmc-tags' );
	}

	public function get_icon() {
		return 'eicon-tags';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_script_depends() {
		return [ 'sip-finmc-tags' ];
	}

	protected function _register_controls() {
		//Empieza primera seccion del content
        $this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'sip-finmc-tags' ),
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title:', 'sip-finmc-tags' ),
				'type' => Controls_Manager::TEXT,
                'placeholder' => 'Tags'
			]
		);

		$this->end_controls_section();
        //termina primera seccion del content

		$this->start_controls_section(
			'section_style_text',
			[
				'label' => __( 'Title Tag', 'sip-finmc-tags' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_tag_typography',
                'label' => 'Font Family',
				'selector' => '{{WRAPPER}} .juanjimeneztj_tags_title',
			]
		);
        
        $this->add_control(
			'text_color',
			[
				'label' => __( 'Text Color', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#BA9B60',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj_tags_title' => 'color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'alignment',
			[
				'label' => __( 'Alignment', 'sip-finmc-tags' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'left',
                'selectors' => [
					'{{WRAPPER}} .juanjimeneztj_tags_title' => 'text-align: {{VALUE}};',
				],
			]
		);
        
        $this->end_controls_section();
        
        $this->start_controls_section(
			'section_style_links',
			[
				'label' => __( 'Links Tags', 'sip-finmc-tags' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_tag_links_typography',
                'label' => 'Font Family',
				'selector' => '{{WRAPPER}} .juanjimeneztj_tags_item',
			]
		);
        
        $this->add_control(
			'text_color_link',
			[
				'label' => __( 'Link Color', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#BA9B60',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj_tags_item' => 'color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'text_color_link_hover',
			[
				'label' => __( 'Link Color Hover', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ffffff',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj_tags_item_group:hover .juanjimeneztj_tags_item' => 'color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'alignment_link',
			[
				'label' => __( 'Alignment', 'sip-finmc-tags' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
                'selectors' => [
					'{{WRAPPER}} .juanjimeneztj_tags_item' => 'text-align: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'margin_link',
			[
				'label' => __( 'Margin Item', 'sip-finmc-tags' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj_tags_item_group' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->add_control(
			'padding_link',
			[
				'label' => __( 'Padding Item', 'sip-finmc-tags' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '10',
                    'right' => '15',
                    'bottom' => '10',
                    'left' => '15',
                    'unit' => 'px',
                    'isLinked' => '',
                ],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj_tags_item_group' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->add_control(
			'bg_color_link',
			[
				'label' => __( 'Background Color Item', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ffffff',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj_tags_item_group' => 'background-color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'bg_color_link_hover',
			[
				'label' => __( 'Background Color Item Hover', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#BA9B60',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj_tags_item_group:hover' => 'background-color: {{VALUE}};',
                ]
			]
		);
        
        $this->end_controls_section();
        
        $this->start_controls_section(
			'section_style_articles',
			[
				'label' => __( 'Title Articles', 'sip-finmc-tags' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
                'label' => 'Font Family',
				'selector' => '{{WRAPPER}} .juanjimeneztj-articles-content article > a',
			]
		);
        
        $this->add_control(
			'text_color_title_article',
			[
				'label' => __( 'Titles Color', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#BA9B60',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-articles-content article > a' => 'color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'text_color_title_article_hover',
			[
				'label' => __( 'Titles Color Hover', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#BA9B60',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-articles-content article > a:hover' => 'color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'alignment_title_article',
			[
				'label' => __( 'Alignment', 'sip-finmc-tags' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'left',
                'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-articles-content article > a' => 'text-align: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'margin_bottom_title',
			[
				'label' => __( 'Space bottom', 'sip-finmc-tags' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 5,
				],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-articles-content article > a' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        $this->end_controls_section();
        
        $this->start_controls_section(
			'section_style_articles_meta',
			[
				'label' => __( 'Meta Articles', 'sip-finmc-tags' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'article_meta_typography',
                'label' => 'Font Family',
				'selector' => '{{WRAPPER}} .juanjimeneztj-articles-content article > p',
			]
		);
        
        $this->add_control(
			'text_color_meta_article',
			[
				'label' => __( 'Meta Color', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#cecece',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-articles-content article > p' => 'color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'alignment_meta_article',
			[
				'label' => __( 'Alignment', 'sip-finmc-tags' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'left',
                'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-articles-content article > p' => 'text-align: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'padding_bottom_meta',
			[
				'label' => __( 'Space bottom', 'sip-finmc-tags' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-articles-content article > p' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
               
        $this->end_controls_section();
        
        /*tags in articles*/
        $this->start_controls_section(
			'section_style_articles_tags',
			[
				'label' => __( 'Tags Articles', 'sip-finmc-tags' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'article_tags_typography',
                'label' => 'Font Family',
				'selector' => '{{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-tags > a, {{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-tags',
			]
		);
        
        $this->add_control(
			'text_color_tags_article',
			[
				'label' => __( 'Tags Color', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#BA9B60',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-tags > a, {{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-tags > a:visited, {{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-tags > a:hover' => 'color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'alignment_tags_article',
			[
				'label' => __( 'Alignment', 'sip-finmc-tags' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'left',
                'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-tags' => 'text-align: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'padding_bottom_tags_articles',
			[
				'label' => __( 'Space bottom', 'sip-finmc-tags' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-tags' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
               
        $this->end_controls_section();
        /*End tags in articles*/
        
        /*description in articles*/
        $this->start_controls_section(
			'section_style_articles_description',
			[
				'label' => __( 'Articles Description', 'sip-finmc-tags' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'article_paragraph_typography',
                'label' => 'Font Family',
				'selector' => '{{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-description > p',
			]
		);
        
        $this->add_control(
			'text_color_paragraph_article',
			[
				'label' => __( 'Paragraph Color', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#000000',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-description > p' => 'color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'alignment_paragraph_article',
			[
				'label' => __( 'Alignment', 'sip-finmc-tags' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sip-finmc-tags' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'left',
                'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-description > p' => 'text-align: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'padding_bottom_description_articles',
			[
				'label' => __( 'Space bottom', 'sip-finmc-tags' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-articles-content article .juanjimeneztj-finmc-post-description' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
               
        $this->end_controls_section();
        /*End description in articles*/
        
        $this->start_controls_section(
			'section_style_background',
			[
				'label' => __( 'Background', 'sip-finmc-tags' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_control(
			'bg_color',
			[
				'label' => __( 'Background Color', 'sip-finmc-tags' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ffffff',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj_wrapper' => 'background-color: {{VALUE}};',
                ]
			]
		);
        
        $this->end_controls_section();
        
        $this->start_controls_section(
			'section_style_dimensions',
			[
				'label' => __( 'Dimensions', 'sip-finmc-tags' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_control(
			'margin',
			[
				'label' => __( 'Margin', 'sip-finmc-tags' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj_wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'sip-finmc-tags' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '40',
                    'right' => '40',
                    'bottom' => '40',
                    'left' => '40',
                    'unit' => 'px',
                    'isLinked' => '',
                ],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj_wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->end_controls_section();
        
        $this->start_controls_section(
			'section_style_dimensions_articles',
			[
				'label' => __( 'Articles Dimensions', 'sip-finmc-tags' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_control(
			'margin_article',
			[
				'label' => __( 'Margin', 'sip-finmc-tags' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj_wrapper article' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->add_control(
			'padding_article',
			[
				'label' => __( 'Padding', 'sip-finmc-tags' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj_wrapper article' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->end_controls_section();
	}
    
    protected function render_juanjimeneztj(){
        $tags = get_tags();
        $html='<div class="juanjimeneztj_tags_content_item">';
        foreach ( $tags as $tag ) {
            $tag_link = get_tag_link( $tag->term_id );
            $html .= "<div class='juanjimeneztj_tags_item_group'><input type='checkbox' name='input_{$tag->name}' id='{$tag->name}' /><label title='{$tag->name} Tag' class='juanjimeneztj_tags_item {$tag->slug}' style='font-family: {{ settings.font_family_link }};'>";
            $html .= "{$tag->name}</label></div>";
        }
        $html .= '</div>';
        return $html;
    }
    
    public function get_tags_post($id){
        $output=null;
        $post_tags = get_the_tags($id);
        $separator = ' | ';
        if (!empty($post_tags)) {
            foreach ($post_tags as $tag) {
                $output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
            }
            return trim($output, $separator);
        }
    }
    
    protected function get_posts_by_tags($tags = null){
        $settings = $this->get_settings_for_display();
        
        if($tags != null){
            query_posts( array( 'tag' => $tags, 'category_name' => 'Email Archive' ) );
        }else{
            query_posts( array( 'order' => 'asc', 'category_name' => 'Email Archive' ) );
        }
        
        // The Loop
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                echo '<article>';
                the_title('<a href="'.get_permalink().'" target="_blank">','</a>');
                the_date('','<p>','</p>');
                echo '<div class="juanjimeneztj-finmc-post-tags">';
                echo self::get_tags_post(get_the_ID());
                echo '</div><div class="juanjimeneztj-finmc-post-description">';
                the_excerpt();
                echo '</div></article>';
            }
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_query();
    }
    
    protected function get_posts_by_tags_template($tags = null){
        if($tags != null){
            query_posts( array( 'tag' => $tags, 'category_name' => 'Email Archive' ) );
        }else{
            query_posts( array( 'order' => 'asc', 'category_name' => 'Email Archive') );
        }
        
        // The Loop
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                echo '<article>';
                the_title('<a href="'.get_permalink().'" target="_blank">','</a>');
                the_date('','<p>','</p>');
                echo '<div class="juanjimeneztj-finmc-post-tags">';
                echo self::get_tags_post(get_the_ID());
                echo '</div><div class="juanjimeneztj-finmc-post-description">';
                the_excerpt();
                echo '</div></article>';
            }
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_query();
    }
    
    protected function set_parameters($args = null){
        $defaults = array(
            'numberposts'      => 5,
            'category'         => 0,
            'orderby'          => 'date',
            'order'            => 'ASC',
            'include'          => array(),
            'exclude'          => array(),
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'post',
            'suppress_filters' => true,
        );

        $parsed_args = wp_parse_args( $args, $defaults );
        if ( empty( $parsed_args['post_status'] ) ) {
            $parsed_args['post_status'] = ( 'attachment' == $parsed_args['post_type'] ) ? 'inherit' : 'publish';
        }
        if ( ! empty( $parsed_args['numberposts'] ) && empty( $parsed_args['posts_per_page'] ) ) {
            $parsed_args['posts_per_page'] = $parsed_args['numberposts'];
        }
        if ( ! empty( $parsed_args['category'] ) ) {
            $parsed_args['cat'] = $parsed_args['category'];
        }
        if ( ! empty( $parsed_args['include'] ) ) {
            $incposts                      = wp_parse_id_list( $parsed_args['include'] );
            $parsed_args['posts_per_page'] = count( $incposts );  // Only the number of posts included.
            $parsed_args['post__in']       = $incposts;
        } elseif ( ! empty( $parsed_args['exclude'] ) ) {
            $parsed_args['post__not_in'] = wp_parse_id_list( $parsed_args['exclude'] );
        }

        $parsed_args['ignore_sticky_posts'] = true;
        $parsed_args['no_found_rows']       = true;
        
        return $parsed_args;
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
        
        $tags = get_tags();
        $html = '<div class="juanjimeneztj_wrapper"><div class="juanjimeneztj_tags_content">';
        if($settings['title'] != ''){
            $html .= '<h1 class="juanjimeneztj_tags_title">'.$settings['title'].'</h1>';
        }
        $html .= '<div class="juanjimeneztj_tags_content_item">';
        foreach ( $tags as $tag ) {
            $tag_link = get_tag_link( $tag->term_id );
            $html .= "<div class='juanjimeneztj_tags_item_group'><input type='checkbox' name='input_{$tag->name}' id='{$tag->name}' /><label title='{$tag->name} Tag' class='juanjimeneztj_tags_item {$tag->slug}'>";
            $html .= "{$tag->name}</label></div>";
        }
        $html .= '</div></div>';
        echo $html;
        echo '<div class="juanjimeneztj-articles-content">';
        self::get_posts_by_tags();
        echo '</div></div>';
        
        echo "
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script>
        let sql_data = '';
        $('.juanjimeneztj_tags_item_group input').click(function(){
            sql_data = '';
            $('input').each(function(){
                if ($(this).is(':checked') ) {
                    if(sql_data==''){
                        sql_data = $(this).attr('id');
                    }else{
                        sql_data = sql_data + ',' + $(this).attr('id');
                    }
                }
            });
            $.ajax({
                type: 'POST',
                url: '".admin_url("admin-ajax.php")."',
                dataType: 'html', // add data type
                data: { action : 'juanjimeneztj_get_ajax_posts', sql_d: sql_data },
                success: function( response ) {
                    $( '.juanjimeneztj-articles-content' ).html( response ); 
                }
            });
        });
        </script>";
	}

	protected function _content_template() {
        ?>
        <div class="juanjimeneztj_wrapper">
            <div class="juanjimeneztj_tags_content">
		        <div class="juanjimeneztj_tags_content">
                    <#
                        if(settings.title){
                        #>
                            <h1 class="juanjimeneztj_tags_title">
                                {{{ settings.title }}}
                            </h1>
                        <#
                        }
                    #>
                    <?php 
                        echo self::render_juanjimeneztj();
                    ?>
		        </div>
		  </div>
          <div class="juanjimeneztj-articles-content">
            <?php self::get_posts_by_tags_template(); ?>
		  </div>
        </div>
		<?php
	}
}