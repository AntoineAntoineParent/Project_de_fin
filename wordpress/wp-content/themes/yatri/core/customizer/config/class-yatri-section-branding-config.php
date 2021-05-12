<?phpclass Yatri_Section_Branding_Config{    public static function get_design_style_config($id, $parent_selector)    {        return array(            'tabs' => array(                $id . '_color' => esc_html__('Colors', 'yatri'),                $id . '_spacing' => esc_html__('Spacing', 'yatri'),            ),            $id . '_color_fields' => array(                array(                    'name' => $id . '_title_text_color',                    'type' => 'color',                    'label' => esc_html__('Title Text Color', 'yatri'),                    'description' => '',                    'default' => '#c1c1c1',                    'selector' => "{$parent_selector} .yatri-section-site-branding .site-title a",                    'css_property' => 'color:{{value}};'                ),                array(                    'name' => $id . '_title_text_hover_color',                    'type' => 'color',                    'label' => esc_html__('Title Text Hover Color', 'yatri'),                    'description' => '',                    'default' => '#c1c1c1',                    'selector' => "{$parent_selector} .yatri-section-site-branding .site-title:hover a",                    'css_property' => 'color:{{value}};'                ),                array(                    'name' => $id . '_tagline_text_color',                    'type' => 'color',                    'label' => esc_html__('Tagline Text Color', 'yatri'),                    'description' => '',                    'default' => '#c1c1c1',                    'selector' => "{$parent_selector} .yatri-section-site-branding .site-description",                    'css_property' => 'color:{{value}};'                ),            ),            $id . '_spacing_fields' =>                array(                    array(                        'name' => $id . '_alignment',                        'type' => 'alignment',                        'label' => esc_html__('Alignment', 'yatri'),                        'description' => '',                        'default' => array(                            'desktop' => '',                            'tablet' => '',                            'mobile' => ''                        ),                        'device_settings' => true,                        'devices' => array('desktop', 'tablet', 'mobile'),                        'options' => array(                            '' => array(                                'title' => '',                                'icon' => '',                            ),                            'left' => array(                                'title' => esc_html__('Left', 'yatri'),                                'icon' => 'dashicons dashicons-editor-alignleft',                            ),                            'center' => array(                                'title' => esc_html__('Center', 'yatri'),                                'icon' => 'dashicons dashicons-editor-aligncenter',                            ),                            'right' => array(                                'title' => esc_html__('Right', 'yatri'),                                'icon' => 'dashicons dashicons-editor-alignright',                            )                        ),                        'selector' => "{$parent_selector} .yatri-section-container.site_branding-container",                        'css_property' => 'text-align:{{value}};'                    ),                    array(                        'name' => $id . '_spacing_logo_width',                        'device_settings' => true,                        'devices' => array('desktop', 'tablet', 'mobile'),                        'type' => 'range',                        'label' => esc_html__('Logo Width', 'yatri'),                        'attrs' => array(                            'max' => 1000,                            'min' => 1,                            'step' => 1                        ),                        'default' => array(),                        'css_units' => Mantrabrain_Theme_Helper::css_units(),                        'selector' => "{$parent_selector} .yatri-section-site-branding .custom-logo-link img",                        'css_property' => 'width:{{value}}{{unit}};max-width:100%;'                    ),                    array(                        'name' => $id . '_spacing_logo_margin',                        'type' => 'margin',                        'label' => esc_html__('Logo Margin', 'yatri'),                        'description' => '',                        'selector' => "{$parent_selector} .yatri-section-site-branding .custom-logo-link img",                    ),                    array(                        'name' => $id . '_spacing_title_margin',                        'type' => 'margin',                        'label' => esc_html__('Title Margin', 'yatri'),                        'description' => '',                        'selector' => "{$parent_selector} .yatri-section-container .yatri-section-site-branding .title-tagline-wrap .site-title",                    ),                    array(                        'name' => $id . '_spacing_tagline_margin',                        'type' => 'margin',                        'label' => esc_html__('Tagline Margin', 'yatri'),                        'description' => '',                        'selector' => "{$parent_selector} .yatri-section-container .yatri-section-site-branding .title-tagline-wrap .site-description",                    ),                ),        );    }}