<?php
namespace ElementorFoodota\Widgets;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly
class Restaurantcounters2 extends Widget_Base
{
    public function get_name()
    {
        return 'restaurant-counters2';
    }

    public function get_title()
    {
        return __('Restaurant Counters2', 'foodota-framework');
    }

    public function get_icon()
    {
        return 'eicon-gallery-grid';
    }

    public function get_categories()
    {
        return ['foodota'];
    }

    public function get_script_depends()
    {
        return [''];
    }

    /**
     * Register the widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function register_controls()
    {
        /* for About Us tab */
        $this->start_controls_section(
            'restaurant-counter2',
            [
                'label' => __('Restaurant Counter Tab', 'foodota-framework'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'food-heading-Scheme',
            [
                'label' => __('Foodota Color Heading Scheme', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'white-section',
                'options' => [
                    'white-section' => __('White Section Heading Scheme', 'foodota-framework'),
                    'dark-section' => __('Dark Section Heading Scheme', 'foodota-framework'),
                ],
            ]
        );


        $this->add_control(
            'counter-tb-bg',
            [
                'label' => __('Counter Tab Background', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                    'id' => ''
                ],
            ]
        );

        $this->add_control(
            'counte-bg',
            [
                'label' => __('Counter Background', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                    'id' => ''
                ],
            ]
        );


        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'counter_icon',
            [
                'label' => __('Counter Image', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                    'id' => ''
                ],
            ]
        );


        $repeater->add_control(
            'counter_description',
            [
                'label' => __('Counter Description', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Restaurant', 'foodota-framework'),
                'placeholder' => __('Type your Counter Title!', 'foodota-framework'),
            ]
        );


        $repeater->add_control(
            'restaurants-in-numbers',
            [
                'label' => __('Number of Restaurants', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 5000,
                'step' => 1,
                'default' => 250,
            ]
        );


        $this->add_control(
            'restaurant_counter_repeater',
            [
                'label' => __('Repeater Images', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_icon' => '',
                        'counter_description' => '',
                        'restaurants-in-numbers' => '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'restaurant-experience-senses',
            [
                'label' => __('Restaurant Experience Tab', 'foodota-framework'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'experience-top-heading',
            [
                'label' => __('Experience Top Heading', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Our Best About Us', 'foodota-framework'),
                'placeholder' => __('Type Your Top Heading!', 'foodota-framework'),
            ]
        );
        $this->add_control(
            'experience-bottom-heading',
            [
                'label' => __('Experience bottom Heading', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('An Experience For Your Senses', 'foodota-framework'),
                'placeholder' => __('Type Your bottom Heading!', 'foodota-framework'),
            ]
        );

        $this->add_control(
            'experience-heading-description',
            [
                'label' => __('Experience Heading Description', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 3,
                'default' => __('Over 19 years of proving the very best vegan and plant based food to london', 'foodota-framework'),
                'placeholder' => __('Type your Heading Description here', 'foodota-framework'),
            ]
        );

        $this->add_control(
            'experience-description',
            [
                'label' => __('Experience Description', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 3,
                'default' => __('por incididunt ut labore et dolore mabore et dolore magna aliqua. Quis ipsum suspeisse ultrices gravida. Risus comabore et dolore ma', 'foodota-framework'),
                'placeholder' => __('Type your Description here', 'foodota-framework'),
            ]
        );
        $this->add_control(
            'experience-btn-title',
            [
                'label' => __('View All', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Button title here', 'foodota-framework'),
                'default' => __('View More Food', 'foodota-framework'),
                'label_block' => true
            ]
        );
        $this->add_control(
            'experience-btn-link',
            [
                'label' => __('View All Button Link', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'foodota-framework'),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );


        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'check-icon',
            [
                'label' => __('Class For Check Status', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('fa fa-check', 'foodota-framework'),
                'placeholder' => __('fa fa-check', 'foodota-framework'),
            ]
        );
        $repeater->add_control(
            'check-description',
            [
                'label' => __('Describe Check Status', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 4,
                'default' => __('Lorem Ipsum is simply', 'foodota-framework'),
                'placeholder' => __('Type your check status text', 'foodota-framework'),
            ]
        );

        $this->add_control(
            'check-status-repeater',
            [
                'label' => __('Repeater Testimonial Slider', 'foodota-framework'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'check-icon' => '',
                        'check-description' => '',
                    ],
                ],
            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {
        // get our input from the widget settings.
        $settings = $this->get_settings_for_display();
        $params['food-heading-Scheme'] = $settings['food-heading-Scheme'] ? $settings['food-heading-Scheme'] : '';
        $params['counter-tb-bg'] = $settings['counter-tb-bg']['id'] ? $settings['counter-tb-bg']['id'] : '';
        $params['counte-bg'] = $settings['counte-bg']['id'] ? $settings['counte-bg']['id'] : '';
        $params['restaurant_counter_repeater'] = $settings['restaurant_counter_repeater'] ? $settings['restaurant_counter_repeater'] : array();
        $params['experience-top-heading'] = $settings['experience-top-heading'] ? $settings['experience-top-heading'] : '';
        $params['experience-bottom-heading'] = $settings['experience-bottom-heading'] ? $settings['experience-bottom-heading'] : '';
        $params['experience-heading-description'] = $settings['experience-heading-description'] ? $settings['experience-heading-description'] : '';
        $params['experience-description'] = $settings['experience-description'] ? $settings['experience-description'] : '';
        $params['experience-btn-title'] = $settings['experience-btn-title'] ? $settings['experience-btn-title'] : '';
        $params['experience-btn-link'] = $settings['experience-btn-link']['url'] ? $settings['experience-btn-link']['url'] : '';

        $params['check-status-repeater'] = $settings['check-status-repeater'] ? $settings['check-status-repeater'] : array();


        echo $this->foodota_restaurants_counters($params);
    }

    /**
     * Render the widget output in the editor.
     *
     * Written as a Backbone JavaScript template and used to generate the live preview.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function content_template()
    {

    }


    public function foodota_restaurants_counters($params)
    {
        $foodota_text_color = $params['food-heading-Scheme'];
        $counter_tab_background = $params['counter-tb-bg'];
        $counter_background_tab = foodota_get_attch_url($counter_tab_background, 'foodota-counter2-tab-bg');
        $counter_background = $params['counte-bg'];
        $counter_background_image = foodota_get_attch_url($counter_background, 'foodota-counter2-bg');
        $restaurant_counter_repeater = $params['restaurant_counter_repeater'];
        $exp_top_heading = $params['experience-top-heading'];
        $exp_bottom_heading = $params['experience-bottom-heading'];
        $exp_heading_des = $params['experience-heading-description'];
        $exp_description = $params['experience-description'];
        $view_btn_title = $params['experience-btn-title'];
        $view_btn_link = $params['experience-btn-link'];
        $target_one = isset($params['target_one']) ? $params['target_one'] : '';
        $nofollow_one = isset($params['nofollow_one']) ? $params['nofollow_one'] : '';
        if ($view_btn_title != '' && $view_btn_link != '') {
            $button_modren = foodota_elementor_button_link($target_one, $nofollow_one, $view_btn_title, $view_btn_link, 'btn btn-theme', '');
        }


        $counter_html = '';

        if ($restaurant_counter_repeater) {
            foreach ($restaurant_counter_repeater as $item) {
                $counter_icon = foodota_get_attch_url($item['counter_icon']['id'], 'foodota-counter-images-cion');
                $counter_number = $item['restaurants-in-numbers'];
                $counter_description = $item['counter_description'];

                if ($counter_icon != '') {
                    $counter_html .= '<li>
                                    <div class="res-logo-d-box"> <img src="' . $counter_icon . '" alt="' . esc_attr__('icon', 'foodota-framework') . '" class="img-fluid"> </div>
                                    <div class="res-logo-d-count"> <span class="count">' . $counter_number . '</span>
                                      <p>' . $counter_description . '</p>
                                    </div>
                                  </li>';
                }
            }
        }

        $check_repeater = $params['check-status-repeater'];

        $check_html = '';
        if ($check_repeater != '') {
            foreach ($check_repeater as $item) {
                $check_html .= '<li>
                                    <p><i class="' . $item['check-icon'] . '"></i>' . $item['check-description'] . '</p>
                                    </li>';
            }
        }


        return '<section class="res-exp section-padding ' . $foodota_text_color . '">
                  <div class="container">
                    <div class="row">
                      <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="res-main-d-content">
                          <div class="res-exp-img"> <img src="' . $counter_background_tab . '" alt="' . esc_attr__('tab-background', 'foodota-framework') . '" class="img-fluid"> </div>
                          <div class="res-exp-assets" style="background-image: url(' . $counter_background_image . ')">
                            <ul>
                            ' . $counter_html . '
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-6 col-xl-6 col-lg-12 align-self-center col-md-12 col-sm-12">
                        <div class="res-exp-detail">
                          <div class="res-exp-text">
                           <div class="sub-title">' . $exp_top_heading . '</div>
                            <h2>' . $exp_bottom_heading . '</h2>
                            <div class="bottom-dots  clearfix">
                                                <span class="dot line-dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                </div>
                            <p class="style-p">' . $exp_heading_des . '</p>
                            <p>' . $exp_description . '</p>
                          </div>
                          <div class="res-exp-content">
                            <ul>
                             ' . $check_html . '
                            </ul>
                            ' . $button_modren . ' </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </section>';
    }
}