<?php
namespace ElementorWidgetMentor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Widget Mentor
 *
 * Elementor widget for widget mentor.
 *
 * @since 1.0.0
 */
class Widget_Mentor extends Widget_Base {

    /**
     * Retrieve the widget name.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'widget-mentor';
    }

    /**
     * Retrieve the widget title.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Widget Mentor', 'widget-mentor' );
    }

    /**
     * Retrieve the widget icon.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-person';
    }

    /**
     * Retrieve the list of categories the widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * Note that currently Elementor supports only one category.
     * When multiple categories passed, Elementor uses the first one.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'general' ];
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
    protected function _register_controls() {
        $this->start_controls_section(
            '_section_index',
            [
                'label' => __( 'Topics', 'widget-mentor' ),
            ]
        );

        $this->add_control(
            'topic',
            [
                'show_label' => false,
                'label_block' => true,
                'type' => Controls_Manager::SELECT,
                'default' => 'zero',
                'options' => [
                    'zero'  => __( 'উইজেট পরিচিতি', 'widget-mentor' ),
                    'one' => __( 'Widget_Base - ডেভেলপমেন্টের শুরু এখানেই', 'widget-mentor' ),
                    'two' => __( 'উইজেট বেসিক কনফিগারেশন', 'widget-mentor' ),
                    'three' => __( 'উইজেট কন্ট্রোল রেজিস্টার করা', 'widget-mentor' ),
                    'four' => __( 'উইজেট কনটেন্ট রেন্ডার করা', 'widget-mentor' ),
                    'five' => __( 'রিফ্রেশলেস কনটেন্ট এডিটিং', 'widget-mentor' ),
                    'six' => __( 'ইনলাইন এডিটিং', 'widget-mentor' ),
                    'seven' => __( 'উইজেট রেজিস্টার করা', 'widget-mentor' ),
                    'eight' => __( 'শ্যাষ, ইলিমেন্টর বহুত ট্যাস', 'widget-mentor' ),
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected static function get_topics_content() {
        $zero = <<<CONTENT
# পরিবেশ পরিচিতি উইজেট ডেভেলপমেন্ট

// চলুন ইলিমেন্টরের উইজেট এবং উইজেট ডেভেলপমেন্ট সম্পর্কে
// বিস্তারিত জ্ঞান লাভ করি, প্রচুর ফায়দা হবে!

&#36;topics = [
    [0] => 'উইজেট পরিচিতি',
    [1] => 'Widget_Base - ডেভেলপমেন্টের শুরু এখানেই',
    [2] => 'উইজেট বেসিক কনফিগারেশন',
    [3] => 'উইজেট কন্ট্রোল রেজিস্টার করা',
    [4] => 'উইজেট কনটেন্ট রেন্ডার করা',
    [5] => 'রিফ্রেশলেস কনটেন্ট এডিটিং',
    [6] => 'ইনলাইন এডিটিং',
    [7] => 'উইজেট রেজিস্টার করা',
    [8] => 'শেষ, তবু শেষ হইয়াও হইলো না শেষ',
];
CONTENT;

        $one = <<<CONTENT
# Widget_Base এখানে হচ্ছেটা কি?

class \ElementorWidgetMentor\Widgets\Widget_Mentor extend \Elementor\Widget_Base {
    ...
}
CONTENT;

        $two = <<<CONTENT
# উইজেট বেসিক কনফিগারেশনটা আবার কি?

// উইজেটের নাম সেট করা
// এটি উইজেটের আইডেন্টিফায়ার
public function get_name() {
    return 'widget-mentor';
}

// উইজেটের টাইটেল সেট করা
public function get_title() {
    return __( 'Widget Mentor', 'widget-mentor' );
}

// উইজেটের আইকন সেট করা
public function get_icon() {
    return 'eicon-person';
}

// উইজেটের ক্যাটেগরি সেট করা
// @see https://developers.elementor.com/widget-categories/
public function get_categories() {
    return [ 'general' ]; // basic, pro-elements, theme-elements, woocommerce-elements, wordpress, pojo
}
CONTENT;

        $three = <<<CONTENT
# উইজেট কন্ট্রোল = উইজেট ডেটা ইনপুট

// উইজেট কন্ট্রোল রেজিস্টার করা
// @see https://developers.elementor.com/elementor-controls/
protected function _register_controls() {
    &#36;this->start_controls_section(
        '_section_index',
        [
            'label' => __( 'Topics', 'widget-mentor' ),
        ]
    );

    &#36;this->add_control(
        'topic',
        [
            'show_label' => false,
            'label_block' => true,
            'type' => Controls_Manager::SELECT,
            'default' => 'zero',
            'options' => [
                'zero'  => __( 'উইজেট পরিচিতি', 'widget-mentor' ),
                'one' => __( 'Widget_Base - ডেভেলপমেন্টের শুরু এখানেই', 'widget-mentor' ),
                'two' => __( 'উইজেট বেসিক কনফিগারেশন', 'widget-mentor' ),
                'three' => __( 'উইজেট কন্ট্রোল রেজিস্টার করা', 'widget-mentor' ),
                'four' => __( 'উইজেট কনটেন্ট রেন্ডার করা', 'widget-mentor' ),
                'five' => __( 'রিফ্রেশলেস কনটেন্ট এডিটিং', 'widget-mentor' ),
                'six' => __( 'ইনলাইন এডিটিং', 'widget-mentor' ),
                'seven' => __( 'উইজেট রেজিস্টার করা', 'widget-mentor' ),
                'eight' => __( 'শ্যাষ, ইলিমেন্টর বহুত ট্যাস', 'widget-mentor' ),
            ],
        ]
    );

    &#36;this->end_controls_section();
}
CONTENT;

        $four = <<<CONTENT
# উইজেটের এইচটিএমএল আউটপুট দেখানো

// এটিই মূলত উইজেটের আউটপুট জেনারেট করে
protected function render() {
    &#36;settings = &#36;this->get_settings_for_display();
    &#36;topics = self::get_topics_content();
    ?&gt;
    &lt;pre&gt;
        &lt;code class="language-php"&gt;
            &lt;?php if ( isset( &#36;topics[ &#36;settings['topic'] ] ) ) :
                echo &#36;topics[ &#36;settings['topic'] ];
            endif; ?&gt;
        &lt;/code&gt;
    &lt;/pre&gt;
    &lt;?php
}
CONTENT;

        $five = <<<CONTENT
# রিফ্রেশলেস কনটেন্ট এডিটিং, সাউন্ডস কুল

// উইজেটের জাভাস্ক্রিপ্ট টেমপ্লেট
// যেটি মূলত underscore.js এর টেমপ্লেট
protected function _content_template() {
    echo '&lt;# var topics = ' . wp_json_encode( self::get_topics_content() ) . ' #&gt;';
    ?>
    &lt;pre&gt;
        &lt;code class="language-php"&gt;
            &lt;#
            if (_.isObject(topics) && !_.isUndefined(topics[settings.topic])) {
                print(topics[settings.topic]);
            }
            #&gt;
        &lt;/code&gt;
    &lt;/pre&gt;
    &lt;?php
}
CONTENT;

        $six = <<<CONTENT
# ইনলাইন এডিটিং, বাইডিরেকশনাল কনটেন্ট এডিটিং

// In PHP
&#36;this->add_inline_editing_attributes( 'title', 'none' ); // none, basic, advanced
?&gt;
&lt;h2 &lt;?php echo &#36;this->get_render_attribute_string( 'title' ); ?&gt;>&lt;?php echo &#36;settings['title']; ?&gt;&lt;/h2&gt;
&lt;?php

// In JS
&lt;# view.addInlineEditingAttributes( 'title', 'none' ); // none, basic, advanced #&gt;

&lt;h2 {{{ view.getRenderAttributeString( 'title' ) }}}&gt;{{{ settings.title }}}&lt;/h2&gt;
CONTENT;

        $seven = <<<CONTENT
# উইজেট তো বানানো হল এবার?

...
add_action( 'elementor/widgets/widgets_registered', [ &#36;this, 'register_widgets' ] );
...

// 'elementor/widgets/widgets_registered' হুকের কলব্যাক মেথড
public function register_widgets() {
    // এটি উইজেটের ফাইল যুক্ত করার পারফেক্ট জায়গা
    require( __DIR__ . '/widgets/widget-mentor.php' );
    
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \ElementorWidgetMentor\Widgets\Widget_Mentor() );
}
CONTENT;

        $eight = <<<CONTENT
# উইজেট বানানো শেষ, লাগছে দারুণ বেশ!

// থাকলে কোন প্রশ্ন
// তাড়াতাড়ি জিজ্ঞেস করুন
// শুনে হই ধন্য

// না হলে আমার কথা শেষ
// নিলাম বিদায়
// আবার হবে দেখা, এ পর্যন্তই শেষ।

// Find me, I know you can :D
// @obiPlabon
// WordPress Developer @ ThemeBucket
CONTENT;

        return [
            'zero' => $zero,
            'one' => $one,
            'two' => $two,
            'three' => $three,
            'four' => $four,
            'five' => $five,
            'six' => $six,
            'seven' => $seven,
            'eight' => $eight,
        ];
    }

    /**
     * Render the widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function render() {
        $settings = $this->get_settings_for_display();
        $topics = self::get_topics_content();
        ?>
        <pre>
            <code class="language-php">
                <?php if ( isset( $topics[ $settings['topic'] ] ) ) :
                    echo $topics[ $settings['topic'] ];
                endif; ?>
            </code>
        </pre>
        <?php
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
    protected function _content_template() {
        echo '<# var topics = ' . wp_json_encode( self::get_topics_content() ) . ' #>';
        ?>
        <pre>
            <code class="language-php">
                <#
                if (_.isObject(topics) && !_.isUndefined(topics[settings.topic])) {
                    print(topics[settings.topic]);
                }
                #>
            </code>
        </pre>
        <?php
    }
}
