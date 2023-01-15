<?php
/**
 * Adds Foo_Widget widget.
 */
class Food_Filter_Widget extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        $widget_options = array(
            'classname' => 'res-sidebar-box',
            'description' => __('A Food Filters Widget', 'foodota-framework'),
        );
        parent::__construct('food_filter_widget', 'Restaurant:Food Filter', $widget_options);

    }

    /**
     * Front-end display of widget.
     *
     * @param array $args Widget arguments.
     * @param array $instance Saved values from database.
     * @see WP_Widget::widget()
     *
     */
    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        echo $before_widget;
        if (!empty($title)) {
            echo '<div class="heading-panel-simple">';
            echo $before_title . $title . $after_title;
            echo '<div class="res-sidebar-style" id="reloader-fun"><span><i class="fa fa-refresh"></i>' . esc_html__('Refresh', 'foodota-framework') . '</span></div>';
            echo '<div class="bottom-dots  clearfix">
                    <span class="dot line-dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    </div> </div>';
        }
        echo __('', 'foodota-framework');
        ?>
        <div class=" res-sidebar-box3 ">

            <ul class="list-group near-btn-ul">
                <li class="near-btn-li">
                    <label class="switch" id="near-by">
                        <input type="checkbox"  id="near-input" class="default">
                        <span class="slider"></span>
                    </label>
                    <span class="text-data-style"> <?php echo esc_html__('Near By Me', 'foodota-framework') ?> </span>
                </li>
            </ul>


            <ul>
                <li>
                    <div class="pretty p-switch p-fill" id="check-delivery"><input type="radio" id="delivery"
                                                                                   name="checkmate" value="delivery">
                        <div class="state"><label></label></div>
                    </div>
                    <span class="text-data-style"> <?php echo esc_html__('Delivery', 'foodota-framework') ?></span>
                </li>
                <li>
                    <div class="pretty p-switch p-fill" id="check-pickup"><input type="radio" id="pickup"
                                                                                 name="checkmate" value="pickup">
                        <div class="state"><label></label></div>
                    </div>
                    <span class="text-data-style"><?php echo esc_html__('Pickup', 'foodota-framework') ?></span>
                </li>
            </ul>
        </div>
        <?php
        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @param array $instance Previously saved values from database.
     * @see WP_Widget::form()
     *
     */
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'foodota-framework');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     * @see WP_Widget::update()
     *
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }


} // class Foo_Widget
if (in_array('wc-multivendor-marketplace/wc-multivendor-marketplace.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    add_action('widgets_init', 'register_food_filters');
}
if (!function_exists('register_food_filters')) {
    function register_food_filters()
    {
        register_widget('Food_Filter_Widget');
    }
}