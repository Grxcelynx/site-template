<?php
/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/
register_block_pattern_category(
    'Custom Patterns',
    array(
        'label'     => __( 'Custom Patterns', 'flower-queen-template' )
    )
);
function custom_block_pattern_universal() {
    register_block_pattern(
        'flower-queen-template/pattern1',
        array(
            'title'       => __( 'Pattern One ', 'flower-queen-template' ),
            'description' => _x( 'Description here', 'flower-queen-template' ),
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"img-txt-container\"} -->\r\n<div class=\"wp-block-column img-txt-container\"><!-- wp:media-text {\"className\":\"img-txt\"} -->\r\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile img-txt\"><figure class=\"wp-block-media-text__media\"></figure><div class=\"wp-block-media-text__content\"><!-- wp:heading {\"level\":3,\"style\":{\"color\":{\"text\":\"#9c2851\"}}} -->\r\n<h3 class=\"has-text-color\" style=\"color:#9c2851\">Heading or title</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#2b2118\"}}} -->\r\n<p class=\"has-text-color\" style=\"color:#2b2118\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultricies felis elit, ac molestie sapien cursus quis. Aenean vel dolor eu turpis sodales aliquet. Mauris urna lectus, consequat quis nibh a, laoreet tempor tellus. Suspendisse fringilla lacus eget auctor ullamcorper. Mauris quis lacus a arcu tristique bibendum ut pretium turpis. Sed volutpat pharetra nisi, eu elementum eros venenatis eu. Proin tellus orci, iaculis et cursus id, porta eget felis.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:spacer {\"height\":\"30px\",\"className\":\"spacer-colored\"} -->\r\n<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer spacer-colored\"></div>\r\n<!-- /wp:spacer --></div></div>\r\n<!-- /wp:media-text --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

    register_block_pattern(
        'flower-queen-template/pattern2',
        array(
            'title'       => __( 'Pattern Two ', 'flower-queen-template' ),
            'description' => _x( 'Description here', 'flower-queen-template' ),
            'content'     => "<!-- wp:group {\"align\":\"full\",\"style\":{\"color\":{\"gradient\":\"linear-gradient(135deg,rgb(43,33,24) 0%,rgb(156,40,81) 100%)\"}},\"className\":\"text-snip-container\"} -->\r\n<div class=\"wp-block-group alignfull text-snip-container has-background\" style=\"background:linear-gradient(135deg,rgb(43,33,24) 0%,rgb(156,40,81) 100%)\"><!-- wp:spacer {\"height\":\"70px\"} -->\r\n<div style=\"height:70px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer -->\r\n\r\n<!-- wp:columns {\"verticalAlignment\":\"center\",\"align\":\"wide\"} -->\r\n<div class=\"wp-block-columns alignwide are-vertically-aligned-center\"><!-- wp:column {\"width\":\"50%\"} -->\r\n<div class=\"wp-block-column\" style=\"flex-basis:50%\"><!-- wp:heading {\"style\":{\"color\":{\"text\":\"#ffc7ce\"},\"typography\":{\"fontSize\":\"40px\"}}} -->\r\n<h2 class=\"has-text-color\" style=\"color:#ffc7ce;font-size:40px\">Floral Inspiration</h2>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"width\":\"50%\",\"className\":\"thin-line\"} -->\r\n<div class=\"wp-block-column thin-line\" style=\"flex-basis:50%\"><!-- wp:separator {\"style\":{\"color\":{\"background\":\"#ffc7ce\"}},\"className\":\"is-style-wide\"} -->\r\n<hr class=\"wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide\" style=\"background-color:#ffc7ce;color:#ffc7ce\"/>\r\n<!-- /wp:separator --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:columns {\"align\":\"wide\"} -->\r\n<div class=\"wp-block-columns alignwide\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#ffc7ce\"}}} -->\r\n<p class=\"has-text-color\" style=\"color:#ffc7ce\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida, lacus et luctus molestie, sapien arcu laoreet massa, vel dignissim quam metus eu erat. Praesent lobortis sapien et elit ornare ultrices. Vestibulum suscipit placerat dolor, a rhoncus lacus dictum nec. Cras sit amet dictum metus, in ultricies enim. Nunc nibh ipsum, porttitor non rutrum in, dignissim vel justo. Quisque interdum justo sed odio efficitur, semper volutpat metus sollicitudin. Donec urna metus, aliquam a ipsum quis, auctor tempus dui. </p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#ffc7ce\"}},\"fontSize\":\"extra-small\"} -->\r\n<p class=\"has-text-color has-extra-small-font-size\" style=\"color:#ffc7ce\">Cras a augue vel magna tincidunt vehicula. Morbi vehicula, est sed ultricies faucibus, nulla ex feugiat massa, non ullamcorper mi lorem non velit. Vestibulum vel sagittis risus. Quisque bibendum faucibus sem, nec dignissim diam dictum vitae. Duis fringilla aliquam lacus ut dictum. Praesent placerat maximus massa sit amet eleifend. Pellentesque tristique metus iaculis neque elementum eleifend.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:spacer {\"height\":\"40px\"} -->\r\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

    register_block_pattern(
        'flower-queen-template/pattern3',
        array(
            'title'       => __( 'Footer - Pattern Three ', 'flower-queen-template' ),
            'description' => _x( 'Description here', 'flower-queen-template' ),
            'content'     => "<!-- wp:group {\"align\":\"full\",\"style\":{\"spacing\":{\"padding\":{\"top\":\"4em\",\"bottom\":\"2em\"}},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|white\"}}},\"color\":{\"gradient\":\"linear-gradient(180deg,rgb(255,199,206) 53%,rgba(255,199,205,0.11) 100%)\"}},\"textColor\":\"white\",\"className\":\"footer-block\",\"layout\":{\"type\":\"default\"}} -->\r\n<div class=\"wp-block-group alignfull footer-block has-white-color has-text-color has-background has-link-color\" style=\"background:linear-gradient(180deg,rgb(255,199,206) 53%,rgba(255,199,205,0.11) 100%);padding-top:4em;padding-bottom:2em\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"50%\"} -->\r\n<div class=\"wp-block-column\" style=\"flex-basis:50%\"><!-- wp:site-title {\"level\":2,\"fontSize\":\"large\"} /-->\r\n\r\n<!-- wp:site-tagline {\"style\":{\"color\":{\"text\":\"#9c2851\"}},\"fontSize\":\"medium\"} /--></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#b34705\"}}} -->\r\n<p class=\"has-text-color\" style=\"color:#b34705\"><strong>Social Media</strong></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p><a href=\"#\">Facebook</a><br><a href=\"#\">Instagram</a><br><a href=\"#\">Twitter</a></p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#b34705\"}}} -->\r\n<p class=\"has-text-color\" style=\"color:#b34705\"><strong>Where We Are</strong></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>2020 Some Blvd, <br>Somewhere, CA 90101<br>United States</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:spacer {\"height\":\"50px\"} -->\r\n<div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );
}


add_action( 'init', 'custom_block_pattern_universal' );