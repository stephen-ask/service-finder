/*    



 ==========================



 	Theme Name: Service Finder



 	Theme URI: http://aonetheme.com/demo/



 	Description: Service Finder Theme by aonetheme



 	Version: 3.5.1



    Tested up to: 5.5



	Requires PHP: 7.4



 	Author: Aonetheme Team



 	Author URI: http://themeforest.net/user/aonetheme



     Text Domain: service-finder



 	Tags: two-columns, three-columns, left-sidebar, right-sidebar, custom-menu, editor-style, featured-images, sticky-post, theme-options, translation-ready



 	License: 



 	License URI: 



 ==========================



 */



 /*



 ======================================



   || CSS TABLE CONTENT ||  



 ======================================



 ---------------------------------------------------------------



 1. GENERAL 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 2. HEADING & TITLE 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 3. TITLE SEPARATOR LINE 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 4. TEXT & PARAGRAPH 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 5. LISTING STYLES 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 6. BOX SPACING (inner & outer spacing)



 	>padding



 	>marging



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 7. POSITIONS css ( absolute & relative & statice)



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 8. COLOR (text & background) 



 	>text color



 	>background color



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 9. OVERLAY ( transparient background )



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 10. BOXES CSS 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 11. IMAGES EFFECTS (overly animation)  



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 12. CUSTOM ELEMENTS 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 13. TRANSITION (Slow animateion speed) 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 14. BUTTONS STYLE 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 15. FORM  ELEMENTS



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 16. TABLES 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 17. WP DEFAULT 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 18. BLOG



 	>blog post listing



 	>side bar



 	>single blog



 	>comment listing



 	>comment form  



 --------------------------------------------------------------- 



 ---------------------------------------------------------------



 19. HRADER (top part of page)



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 20. PAGE TOP BAR (left & right content)



 	>eamil-phone



 	>social-links



 	>language



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 21. LOGO ( company identify  symbol )



 	>logo for header



 	>logo for footer



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 22. MAIN BAR ( place logo & main-navigation )



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 23. NAVIGATIONS 



 	>mena-menu



 	>mobile-menu



 	>footer-menu



 --------------------------------------------------------------- 



 ---------------------------------------------------------------



 24. BANNER



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 25. SLIDER



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 26. PAGINATION 



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 27. FOOTER



 --------------------------------------------------------------- 



 ---------------------------------------------------------------



 28. PAGE-CONTENT



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 29. INNER-CONTENT



 ---------------------------------------------------------------



 ---------------------------------------------------------------



 30. AFTER-LOGIN-CONTENT



 ---------------------------------------------------------------



 End Content



 */



 /*---------------------------------------------------------------



 1. GENERAL 



 ---------------------------------------------------------------*/



 body {



     background-color: #fff;



     font-family: Poppins;



     font-size: 14px;



 	 line-height:1.8;



     font-weight:400;



     color: #767676;



     padding: 0;



     margin: 0;



     overflow-x: hidden;



 }



 a {



     color: #767676;



     outline: 0 none;



     text-decoration: none;



 }



 a:hover,



 a:focus {



     text-decoration: none;



     outline: 0 none;



 }



 a:active,



 a:hover {



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 p a {



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 img {



     border-style: none;



     height: auto;



     max-width: 100%;



     vertical-align: middle;



 }



 section,



 article,



 aside,



 details,



 figcaption,



 figure,



 footer,



 header,



 hgroup,



 main,



 menu,



 nav,



 summary {



     display: block;



 }



 address {



     font-style: italic;



 }



 table {



     background-color: transparent;



     width: 100%;



 }



 table thead th {



     color: #333;



 }



 table th,



 table td {



     padding: 10px;



 }



 p,



 address,



 pre,



 hr,



 ul,



 ol,



 dl,



 dd,



 table {



     margin-bottom: 24px;



 }



 .clear {



     clear: both;



 }



 .pull-none {



     float: none;



 }



 ::-moz-selection {



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     color: #fff;



 }



 ::selection {



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     color: #fff;



 }



 /*---------------------------------------------------------------



 2. HEADING & TITLE 



 ---------------------------------------------------------------*/



 h1,



 h2,



 h3,



 h4,



 h5,



 h6 {



     margin-bottom: 24px;



 }



 h1 {<?php 



 	echo (service_finder_theme_get_data($data['h1-size'],'font-family') != '') ? 'font-family:'.service_finder_theme_get_data($data['h1-size'],'font-family').'; ' : '';



 	echo (service_finder_theme_get_data($data['h1-size'],'font-weight') != '') ? 'font-weight:'.service_finder_theme_get_data($data['h1-size'],'font-weight').'; ' : '';



 	echo (service_finder_theme_get_data($data['h1-size'],'font-size') != '') ? 'font-size:'.service_finder_theme_get_data($data['h1-size'],'font-size').'; ' : '';



 	echo (service_finder_theme_get_data($data['h1-size'],'line-height') != '') ? 'line-height:'.service_finder_theme_get_data($data['h1-size'],'line-height').'; ' : '';



 	echo (service_finder_theme_get_data($data['h1-size'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['h1-size'],'color').'; ' : '';



 	echo (service_finder_theme_get_data($data['h1-size'],'text-transform') != '') ? 'text-transform:'.service_finder_theme_get_data($data['h1-size'],'text-transform').'; '  : '';



 	 ?>}



 h2 {<?php 



 	echo (service_finder_theme_get_data($data['h2-size'],'font-family') != '') ? 'font-family:'.service_finder_theme_get_data($data['h2-size'],'font-family').'; ' : '';



 	echo (service_finder_theme_get_data($data['h2-size'],'font-weight') != '') ? 'font-weight:'.service_finder_theme_get_data($data['h2-size'],'font-weight').'; ' : '';



 	echo (service_finder_theme_get_data($data['h2-size'],'font-size') != '') ? 'font-size:'.service_finder_theme_get_data($data['h2-size'],'font-size').'; ' : '';



 	echo (service_finder_theme_get_data($data['h2-size'],'line-height') != '') ? 'line-height:'.service_finder_theme_get_data($data['h2-size'],'line-height').'; ' : '';



 	echo (service_finder_theme_get_data($data['h2-size'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['h2-size'],'color').'; ' : '';



 	echo (service_finder_theme_get_data($data['h2-size'],'text-transform') != '') ? 'text-transform:'.service_finder_theme_get_data($data['h2-size'],'text-transform').'; '  : '';



 	 ?>} 



          



 h3 {<?php 



 	echo (service_finder_theme_get_data($data['h3-size'],'font-family') != '') ? 'font-family:'.service_finder_theme_get_data($data['h3-size'],'font-family').'; ' : '';



 	echo (service_finder_theme_get_data($data['h3-size'],'font-weight') != '') ? 'font-weight:'.service_finder_theme_get_data($data['h3-size'],'font-weight').'; ' : '';



 	echo (service_finder_theme_get_data($data['h3-size'],'font-size') != '') ? 'font-size:'.service_finder_theme_get_data($data['h3-size'],'font-size').'; ' : '';



 	echo (service_finder_theme_get_data($data['h3-size'],'line-height') != '') ? 'line-height:'.service_finder_theme_get_data($data['h3-size'],'line-height').'; ' : '';



 	echo (service_finder_theme_get_data($data['h3-size'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['h3-size'],'color').'; ' : '';



 	echo (service_finder_theme_get_data($data['h3-size'],'text-transform') != '') ? 'text-transform:'.service_finder_theme_get_data($data['h3-size'],'text-transform').'; '  : '';



 	 ?>} 



      



 h4 {<?php 



 	echo (service_finder_theme_get_data($data['h4-size'],'font-family') != '') ? 'font-family:'.service_finder_theme_get_data($data['h4-size'],'font-family').'; ' : '';



 	echo (service_finder_theme_get_data($data['h4-size'],'font-weight') != '') ? 'font-weight:'.service_finder_theme_get_data($data['h4-size'],'font-weight').'; ' : '';



 	echo (service_finder_theme_get_data($data['h4-size'],'font-size') != '') ? 'font-size:'.service_finder_theme_get_data($data['h4-size'],'font-size').'; ' : '';



 	echo (service_finder_theme_get_data($data['h4-size'],'line-height') != '') ? 'line-height:'.service_finder_theme_get_data($data['h4-size'],'line-height').'; ' : '';



 	echo (service_finder_theme_get_data($data['h4-size'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['h4-size'],'color').'; ' : '';



 	echo (service_finder_theme_get_data($data['h4-size'],'text-transform') != '') ? 'text-transform:'.service_finder_theme_get_data($data['h4-size'],'text-transform').'; '  : '';



 	 ?>} 



      



 h5 {<?php 



 	echo (service_finder_theme_get_data($data['h5-size'],'font-family') != '') ? 'font-family:'.service_finder_theme_get_data($data['h5-size'],'font-family').'; ' : '';



 	echo (service_finder_theme_get_data($data['h5-size'],'font-weight') != '') ? 'font-weight:'.service_finder_theme_get_data($data['h5-size'],'font-weight').'; ' : '';



 	echo (service_finder_theme_get_data($data['h5-size'],'font-size') != '') ? 'font-size:'.service_finder_theme_get_data($data['h5-size'],'font-size').'; ' : '';



 	echo (service_finder_theme_get_data($data['h5-size'],'line-height') != '') ? 'line-height:'.service_finder_theme_get_data($data['h5-size'],'line-height').'; ' : '';



 	echo (service_finder_theme_get_data($data['h5-size'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['h5-size'],'color').'; ' : '';



 	echo (service_finder_theme_get_data($data['h5-size'],'text-transform') != '') ? 'text-transform:'.service_finder_theme_get_data($data['h5-size'],'text-transform').'; '  : '';



 	 ?>} 



      



 h6 {<?php 



 	echo (service_finder_theme_get_data($data['h6-size'],'font-family') != '') ? 'font-family:'.service_finder_theme_get_data($data['h6-size'],'font-family').'; ' : '';



 	echo (service_finder_theme_get_data($data['h6-size'],'font-weight') != '') ? 'font-weight:'.service_finder_theme_get_data($data['h6-size'],'font-weight').'; ' : '';



 	echo (service_finder_theme_get_data($data['h6-size'],'font-size') != '') ? 'font-size:'.service_finder_theme_get_data($data['h6-size'],'font-size').'; ' : '';



 	echo (service_finder_theme_get_data($data['h6-size'],'line-height') != '') ? 'line-height:'.service_finder_theme_get_data($data['h6-size'],'line-height').'; ' : '';



 	echo (service_finder_theme_get_data($data['h6-size'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['h6-size'],'color').'; ' : '';



 	echo (service_finder_theme_get_data($data['h6-size'],'text-transform') != '') ? 'text-transform:'.service_finder_theme_get_data($data['h6-size'],'text-transform').'; '  : '';



 	 ?>}               



 /*---------------------------------------------------------------



 3. TITLE SEPARATOR LINE 



 ---------------------------------------------------------------*/



 .after-titile-line {



     <?php



     echo (service_finder_theme_get_data($data['icon-between-devider'],'url') != '') ? 'background-image:'.service_finder_theme_get_data($data['icon-between-devider'],'url').'; ' : '';



 	?>



     background-position: center;



     background-size: cover;



     width: 26px;



     height: 26px;



     margin: 0 auto 10px;



     display: block;



     position: relative;



 }



 .title-line-left,



 .title-line-right {



     width: 50px;



     height: 2px;



     background: #a7a7a7;



     position: absolute;



     top: 10px;



 }



 .title-line-left {



     left:-55px;



 }



 .title-line-right {



     right:-55px;



 }



 .line {



     position: relative;



 }



 .line:after {



     <?php



     echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	?>



     content: "";



     width: 80px;



     height: 2px;



     display: inline-block;



     margin: 0px 0 30px;



 }



 /*---------------------------------------------------------------



 4. TEXT & PARAGRAPH 



 ---------------------------------------------------------------*/



 p {



     line-height: 24px;



     margin-bottom: 24px;



 }



 strong {



     font-weight: 600;



 }



 /*text align*/



 .text-left {



     text-align: left;



 }



 .text-center {



     text-align: center;



 }



 .text-right {



     text-align: right;



 }



 .text-justify {



     text-align: justify



 }



 /*text vertical align*/



 .v-align-t {



     vertical-align: top;



 }



 .v-align-m {



     vertical-align: middle;



 }



 .v-align-b {



     vertical-align: bottom;



 }



 /*text no line brack*/



 .text-nowrap {



     white-space: nowrap



 }



 /*text transform*/



 .text-lowercase {



     text-transform: lowercase



 }



 .text-uppercase {



     text-transform: uppercase



 }



 .text-capitalize {



     text-transform: capitalize



 }



 /*text size*/



 .font-size-14 {



     font-size: 14px;



 }



 .font-size-16 {



     font-size: 16px;



 }



 .font-size-18 {



     font-size: 18px;



 }



 .font-size-20 {



     font-size: 20px;



 }



 /*text size*/



 .font-weight-300 {



     font-weight: 300;



 }



 .font-weight-400 {



     font-weight: 400;



 }



 .font-weight-500 {



     font-weight: 500;



 }



 .font-weight-600 {



     font-weight: 600;



 }



 .font-weight-700 {



     font-weight: 700;



 }



 .font-weight-800 {



     font-weight: 800;



 }



 .font-weight-900 {



     font-weight: 900;



 }



 /*---------------------------------------------------------------



 5. LISTING STYLES 



 ---------------------------------------------------------------*/



 dl,



 ul,



 ol {



     list-style-position: outside;



     padding: 0;



 }



 ul,



 ol {



     margin-left: 20px;



     margin-bottom: 24px;



 }



 ul li,



 ol li {



     padding: 0;



 }



 dl {



     margin-left: 0;



     margin-bottom: 30px;



 }



 dl dd {



     margin-bottom: 10px;



 }



 .list-arrow,



 .list-checked {



     margin: 0 0 20px 15px;



     list-style: none;



 }



 .list-arrow li,



 .list-checked li {



     padding: 5px 5px 5px 20px;



     position: relative;



 }



 .list-arrow li:before,



 .list-checked li:before {



     position: absolute;



     left: 0;



     top: 5px;



     display: block;



     font-family: "FontAwesome";



 }



 .list-arrow li:before {



     content: "\f0da";



 }



 .list-checked li:before {



     content: "\f046";



 }



 .page-content .list-arrow,



 .page-content .list-checked {



     margin: 0 0 20px 15px;



     list-style: none;



 }



 .page-content .list-arrow li,



 .page-content .list-checked li {



     padding: 5px 5px 5px 20px;



     position: relative;



 }



 .page-content dl.no-margin,



 .page-content ul.no-margin,



 .page-content ol.no-margin {



     margin: 0 0 0 0 !important;



     list-style: none;



 }



 /*---------------------------------------------------------------



 6. BOX SPACING (inner & outer)



 ---------------------------------------------------------------*/



 /*== >padding (around) ======*/



 .padding-0 {



     padding: 0;



 }



 .padding-5 {



     padding: 5px;



 }



 .padding-10 {



     padding: 10px;



 }



 .padding-20 {



     padding: 20px;



 }



 .padding-30 {



     padding: 30px;



 }



 .padding-40 {



     padding: 40px;



 }



 .padding-50 {



     padding: 50px;



 }



 /*== >Padding (top) ==*/



 .padding-t-0 {



     padding-top: 0;



 }



 .padding-t-5 {



     padding-top: 5px;



 }



 .padding-t-10 {



     padding-top: 10px;



 }



 .padding-t-20 {



     padding-top: 20px;



 }



 .padding-t-30 {



     padding-top: 30px;



 }



 .padding-t-40 {



     padding-top: 40px;



 }



 .padding-t-50 {



     padding-top: 50px;



 }



 .padding-t-60 {



     padding-top: 60px;



 }



 .padding-t-70 {



     padding-top: 70px;



 }



 .padding-t-80 {



     padding-top: 80px;



 }



 .padding-t-90 {



     padding-top: 90px;



 }



 .padding-t-100 {



     padding-top: 100px;



 }



 /*== >Padding (bottom) ==*/



 .padding-b-0 {



     padding-bottom: 0;



 }



 .padding-b-5 {



     padding-bottom: 5px;



 }



 .padding-b-10 {



     padding-bottom: 10px;



 }



 .padding-b-20 {



     padding-bottom: 20px;



 }



 .padding-b-30 {



     padding-bottom: 30px;



 }



 .padding-b-40 {



     padding-bottom: 40px;



 }



 .padding-b-50 {



     padding-bottom: 50px;



 }



 .padding-b-60 {



     padding-bottom: 60px;



 }



 .padding-b-70 {



     padding-bottom: 70px;



 }



 .padding-b-80 {



     padding-bottom: 80px;



 }



 .padding-b-90 {



     padding-bottom: 90px;



 }



 .padding-b-100 {



     padding-bottom: 100px;



 }



 /*== >Padding (left) ==*/



 .padding-l-0 {



     padding-left: 0;



 }



 .padding-l-5 {



     padding-left: 5px;



 }



 .padding-l-10 {



     padding-left: 10px;



 }



 .padding-l-20 {



     padding-left: 20px;



 }



 .padding-l-30 {



     padding-left: 30px;



 }



 .padding-l-40 {



     padding-left: 40px;



 }



 .padding-l-50 {



     padding-left: 50px;



 }



 /*== >Padding (right) ==*/



 .padding-r-0 {



     padding-right: 0;



 }



 .padding-r-5 {



     padding-right: 5px;



 }



 .padding-r-10 {



     padding-right: 10px;



 }



 .padding-r-20 {



     padding-right: 20px;



 }



 .padding-r-30 {



     padding-right: 30px;



 }



 .padding-r-40 {



     padding-right: 40px;



 }



 .padding-r-50 {



     padding-right: 50px;



 }



 /*== >Padding (left right) ==*/



 .padding-lr-0 {



     padding-left: 0;



     padding-right: 0;



 }



 .padding-lr-5 {



     padding-left: 5px;



     padding-right: 5px;



 }



 .padding-lr-10 {



     padding-left: 10px;



     padding-right: 10px;



 }



 .padding-lr-20 {



     padding-left: 20px;



     padding-right: 20px;



 }



 .padding-lr-30 {



     padding-left: 30px;



     padding-right: 30px;



 }



 .padding-lr-40 {



     padding-left: 40px;



     padding-right: 40px;



 }



 .padding-lr-50 {



     padding-left: 50px;



     padding-right: 50px;



 }



 /*== >Padding (top bottom) ==*/



 .padding-tb-0 {



     padding-bottom: 0;



     padding-top: 0;



 }



 .padding-tb-5 {



     padding-bottom: 5px;



     padding-top: 5px;



 }



 .padding-tb-10 {



     padding-bottom: 10px;



     padding-top: 10px;



 }



 .padding-tb-20 {



     padding-bottom: 20px;



     padding-top: 20px;



 }



 .padding-tb-30 {



     padding-bottom: 30px;



     padding-top: 30px;



 }



 .padding-tb-40 {



     padding-bottom: 40px;



     padding-top: 40px;



 }



 .padding-tb-50 {



     padding-bottom: 50px;



     padding-top: 50px;



 }



 .padding-tb-60 {



     padding-bottom: 60px;



     padding-top: 60px;



 }



 .padding-tb-70 {



     padding-bottom: 70px;



     padding-top: 70px;



 }



 .padding-tb-80 {



     padding-bottom: 80px;



     padding-top: 80px;



 }



 .padding-tb-90 {



     padding-bottom: 90px;



     padding-top: 90px;



 }



 .padding-tb-100 {



     padding-bottom: 100px;



     padding-top: 100px;



 }



 /*== >margin (around) ======*/



 .margin-0 {



     margin: 0;



 }



 .margin-5 {



     margin: 5px;



 }



 .margin-10 {



     margin: 10px;



 }



 .margin-20 {



     margin: 20px;



 }



 .margin-30 {



     margin: 30px;



 }



 .margin-40 {



     margin: 40px;



 }



 .margin-50 {



     margin: 50px;



 }



 /*== >marging (top) ==*/



 .margin-t-0 {



     margin-top: 0;



 }



 .margin-t-5 {



     margin-top: 5px;



 }



 .margin-t-10 {



     margin-top: 10px;



 }



 .margin-t-20 {



     margin-top: 20px;



 }



 .margin-t-30 {



     margin-top: 30px;



 }



 .margin-t-40 {



     margin-top: 40px;



 }



 .margin-t-50 {



     margin-top: 50px;



 }



 /*== >marging (bottom) ==*/



 .margin-b-0 {



     margin-bottom: 0;



 }



 .margin-b-5 {



     margin-bottom: 5px;



 }



 .margin-b-10 {



     margin-bottom: 10px;



 }



 .margin-b-20 {



     margin-bottom: 20px;



 }



 .margin-b-30 {



     margin-bottom: 30px;



 }



 .margin-b-40 {



     margin-bottom: 40px;



 }



 .margin-b-50 {



     margin-bottom: 50px;



 }



 /*== >marging (left) ==*/



 .margin-l-0 {



     margin-left: 0;



 }



 .margin-l-5 {



     margin-left: 5px;



 }



 .margin-l-10 {



     margin-left: 10px;



 }



 .margin-l-20 {



     margin-left: 20px;



 }



 .margin-l-30 {



     margin-left: 30px;



 }



 .margin-l-40 {



     margin-left: 40px;



 }



 .margin-l-50 {



     margin-left: 50px;



 }



 /*== >marging (right) ==*/



 .margin-r-0 {



     margin-right: 0;



 }



 .margin-r-5 {



     margin-right: 5px;



 }



 .margin-r-10 {



     margin-right: 10px;



 }



 .margin-r-20 {



     margin-right: 20px;



 }



 .margin-r-30 {



     margin-right: 30px;



 }



 .margin-r-40 {



     margin-right: 40px;



 }



 .margin-r-50 {



     margin-right: 50px;



 }



 /*== >marging (left right) ==*/



 .margin-lr-0 {



     margin-left: 0;



     margin-right: 0;



 }



 .margin-lr-5 {



     margin-left: 5px;



     margin-right: 5px;



 }



 .margin-lr-10 {



     margin-left: 10px;



     margin-right: 10px;



 }



 .margin-lr-20 {



     margin-left: 20px;



     margin-right: 20px;



 }



 .margin-lr-30 {



     margin-left: 30px;



     margin-right: 30px;



 }



 .margin-lr-40 {



     margin-left: 40px;



     margin-right: 40px;



 }



 .margin-lr-50 {



     margin-left: 50px;



     margin-right: 50px;



 }



 /*== >marging (top bottom) ==*/



 .margin-tb-0 {



     margin-bottom: 0;



     margin-top: 0;



 }



 .margin-tb-5 {



     margin-bottom: 5px;



     margin-top: 5px;



 }



 .margin-tb-10 {



     margin-bottom: 10px;



     margin-top: 10px;



 }



 .margin-tb-20 {



     margin-bottom: 20px;



     margin-top: 20px;



 }



 .margin-tb-30 {



     margin-bottom: 30px;



     margin-top: 30px;



 }



 .margin-tb-40 {



     margin-bottom: 40px;



     margin-top: 40px;



 }



 .margin-tb-50 {



     margin-bottom: 50px;



     margin-top: 50px;



 }



 /*---------------------------------------------------------------



 7. POSITIONS css ( absolute & relative & statice & z-index )



 ---------------------------------------------------------------*/



 .absolute {



     position: absolute;



 }



 .relative {



     position: relative;



 }



 .static {



     position: static;



 }



 .z-index1 {



     z-index: 1;



 }



 .z-index2 {



     z-index: 2;



 }



 .z-index3 {



     z-index: 3;



 }



 .z-index4 {



     z-index: 4;



 }



 .z-index5 {



     z-index: 5;



 }



 .z-index6 {



     z-index: 6;



 }



 .z-index7 {



     z-index: 7;



 }



 .z-index8 {



     z-index: 8;



 }



 .z-index9 {



     z-index: 9;



 }



 .z-index10 {



     z-index: 10;



 }



 .z-index100 {



     z-index: 100;



 }



 .z-index999 {



     z-index: 999;



 }



 /*---------------------------------------------------------------



 8. COLOR (text & background)



 ---------------------------------------------------------------*/



 /*=== >text ===*/



 .text-white {



     color: #fff;



 }



 .text-primary {



     <?php



     echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	?>



 }



 .text-black {



     color: #000;



 }



 .text-gray {



     color: #666;



 }



 .text-red {



     color: #F00;



 }



 .text-green {



     color: #090;



 }



 .text-yellow {



     color: #FF0;



 }



 /*=== >background ===*/



 .bg-transparent {



     background-color: transparent;



 }



.bg-primary {



<?php



	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



?>



}



 .bg-secondary {



     background-color:#62b815; 



 }



 .bg-white {



     background-color: #FFF;



 }



 .bg-black {



     background-color: #000;



 }



 .bg-gray {



     background-color: #f7f8fa;



 }



 .bg-red {



     background-color: #FF4045;



 }



 .bg-green {



     background-color: #38E225;



 }



 .bg-yellow {



     background-color: #F0F52E;



 }



 /*---------------------------------------------------------------



 9. OVERLAY ( transparient box style  )



 ---------------------------------------------------------------*/



 .sf-overlay-wrapper {



     position: relative;



 }



 .sf-overlay-wrapper > .container {



     position: relative;



     z-index: 1;



 }



 .sf-overlay-main {



     position: absolute;



     top: 0;



     left: 0;



     width: 100%;



     height: 100%;



 }



 /*use for section*/



 .overlay-black-light,



 .overlay-black-middle,



 .overlay-black-dark,



 .overlay-white-light,



 .overlay-white-middle,



 .overlay-white-dark {



     position: relative;



 }



 .overlay-black-light:after,



 .overlay-black-middle:after,



 .overlay-black-dark:after,



 .overlay-white-light:after,



 .overlay-white-middle:after,



 .overlay-white-dark:after {



     content: "";



     position: absolute;



     left: 0;



     top: 0;



     width: 100%;



     height: 100%;



 }



 .overlay-black-light:after,



 .overlay-black-middle:after,



 .overlay-black-dark:after {



     background: #000;



 }



 .overlay-white-light:after,



 .overlay-white-middle:after,



 .overlay-white-dark:after {



     background: #FFF;



 }



 .overlay-black-light:after {



     opacity: 0.3;



 }



 .overlay-black-middle:after {



     opacity: 0.5;



 }



 .overlay-black-dark:after {



     opacity: 0.8;



 }



 .overlay-white-light:after {



     opacity: 0.3;



 }



 .overlay-white-middle:after {



     opacity: 0.5;



 }



 .overlay-white-dark:after {



     opacity: 0.8;



 }



 .overlay-black-light .container,



 .overlay-black-middle .container,



 .overlay-black-dark .container,



 .overlay-white-light .container,



 .overlay-white-middle .container,



 .overlay-white-dark .container {



     position: relative;



     z-index: 1;



 }



 /*use for box*/



 .overlay-bx {



     position: absolute;



     left: 0;



     bottom: 0;



     width: 100%;



     height: 100%;



     text-align: center;



     z-index: 1;



     opacity: 0;



     visibility: hidden;



 }



 .overlay-icon {



     list-style: none;



     width: 160px;



     height: 40px;



     position: absolute;



     left: 50%;



     top: 50%;



     margin: -20px -75px;



 }



 .overlay-icon a {



     display: inline-block;



     padding: 0;



     margin: 0 2px;



 }



 .overlay-icon a i {



     -moz-transform: translatey(80%);



     -webkit-transform: translatey(80%);



     -o-transform: translatey(80%);



     -ms-transform: translatey(80%);



     transform: translatey(80%);



 }



 .overlay-bx:hover a > i,



 .sf-thum-bx:hover .overlay-bx a > i,



 .sf-element-bx:hover .overlay-bx a > i {



     opacity: 1;



     visibility: visible;



     -moz-transform: translatey(0);



     -webkit-transform: translatey(0);



     -o-transform: translatey(0);



     -ms-transform: translatey(0);



     transform: translatey(0);



     -webkit-transition-delay: 0.1s;



     -moz-transition-delay: 0.1s;



     -o-transition-delay: 0.1s;



     transition-delay: 0.1s;



 }



 .overlay-bx:hover,



 .sf-thum-bx:hover .overlay-bx,



 .sf-element-bx:hover .overlay-bx {



     opacity: 1;



     visibility: visible;



 }



 /* show for text */



 .overlay-text {



     width: 100%;



     position: absolute;



     padding: 20px;



     color: #FFF;



     left: 0;



     bottom: 20px;



 }



 .sf-address-bx {



     display: table;



     text-align: left;



     padding: 20px 20px 20px 25px;



     width: 100%;



     height: 100%;



     position: relative;



     font-size: 13px;



     vertical-align: middle;



     font-weight: 600;



 }



 .sf-address-bx .fa {



     position: absolute;



     top: 22px;



     left: 5px;



     font-size: 22px;



 }



 .col-md-3 .overlay-text {



     padding: 5px;



 }



 .col-md-4 .overlay-text {



     padding: 20px;



 }



 .sf-address2-bx {



     display: table;



     background: #eaeaea;



     padding: 5px 10px;



     margin-bottom: 10px



 }



 /*---------------------------------------------------------------



 10. BOXES CSS 



 ---------------------------------------------------------------*/



 .rounded-bx,



 .sf-element-bx,



 .icon-bx,



 .icon-bx-small,



 .sf-thum-bx,



 .post-thum-bx {



     position: relative;



 }



 .rounded-bx {



     -webkit-border-radius: 100%;



     -moz-border-radius: 100%;



     border-radius: 100%;



 }



 .section-head {



     margin-bottom: 0;



 }



 .section-head h1,



 .section-head h2,



 .section-head h3 {



     margin-top: 0;



 }



 .section-head p {



     font-size: 14px;



     color: #939393;



     max-width: 700px;



     margin: auto;



 }



 .section-head .sf-tagile-outer {



     max-width: 700px;



     margin: auto;



 	font-size: 14px;



 	color: #939393;



 }



 .section-head .sf-tagile-outer p {



     font-size: 14px;



 	color:inherit;



 }



 .section-content {



     margin-top: 50px;



 }



 .w-t-element {



     color: #FFF;



 }



 .w-t-element h1,



 .w-t-element h2,



 .w-t-element h3,



 .w-t-element h4,



 .w-t-element h5,



 .w-t-element h6,



 .w-t-element p {



     color: #FFF;



 }



 .w-t-element .after-titile-line:before,



 .w-t-element .after-titile-line:after {



     background: #FFF;



 }



 /*==box content==*/



 .sf-element-bx {



     margin-bottom: 30px;



 }



 /*==for icons==*/



 .icon-bx-xl,



 .icon-bx-lg,



 .icon-bx-md,



 .icon-bx-sm,



 .icon-bx-xs {



     background-color: #f2f2f2;



     <?php



     echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	?>



     display: inline-block;



     margin: auto;



     text-align: center;



 }



 .icon-bx-xl {



     width: 160px;



     height: 160px;



     line-height: 160px;



 }



 .icon-bx-lg {



     width: 130px;



     height: 130px;



     line-height: 130px;



 }



 .icon-bx-md {



     width: 100px;



     height: 100px;



     line-height: 100px;



 }



 .icon-bx-sm {



     width: 80px;



     height: 80px;



     line-height: 80px;



 }



 .icon-bx-xs {



     width: 40px;



     height: 40px;



     line-height: 40px;



 }



 .icon-bx-xl i .icon-bx-lg i,



 .icon-bx-md i,



 .icon-bx-sm i,



 .icon-bx-xs i {



     vertical-align: middle;



 }



 .icon-bx-xls i {



     font-size: 80px;



 }



 .icon-bx-lg i {



     font-size: 60px;



 }



 .icon-bx-md i {



     font-size: 45px;



 }



 .icon-bx-sm i {



     font-size: 30px;



 }



 .icon-bx-xs i {



     font-size: 20px;



 }



 .icon-bx-xl img,



 .icon-bx-lg img,



 .icon-bx-md img,



 .icon-bx-sm img,



 .icon-bx-xs img {



     vertical-align: middle;



     max-width: 100%;



     width: auto;



 }



 .icon-bx-lg img {



     height: 80px;



 }



 .icon-bx-lg img {



     height: 60px;



 }



 .icon-bx-md img {



     height: 40px;



 }



 .icon-bx-sm img {



     height: 30px;



 }



 .icon-bx-xs img {



     height: 20px;



 }



 /*==for images==*/



 .sf-thum-bx {



     background-color: #fff;



 }



 .sf-thum-bx img,



 .post-thum-bx img,



 .post-thum img {



     width: 100%;



     height: auto;



 }



 /*---------------------------------------------------------------



 11. IMAGES EFFECTS (overly animation)  



 ---------------------------------------------------------------*/



 .img-effect1,



 .img-effect2,



 .img-effect3,



 .img-effect4,



 .img-effect5,



 .img-effect6,



 .img-effect7,



 .img-effect8,



 .img-effect9 {



     position: relative;



 }



 .img-effect1:before,



 .img-effect1:after,



 .img-effect2:before,



 .img-effect2:after,



 .img-effect3:before,



 .img-effect3:after,



 .img-effect4:before,



 .img-effect4:after,



 .img-effect5:before,



 .img-effect5:after,



 .img-effect6:before,



 .img-effect6:after,



 .img-effect7:before,



 .img-effect7:after,



 .img-effect8:before,



 .img-effect8:after,



 .img-effect9:before,



 .img-effect9:after {



     content: "";



     background: #000;



     position: absolute;



     left: 0;



     top: 0;



     width: 0;



     height: 0;



     opacity: 0.5;



     -webkit-transition: all 0.3s linear;



     -moz-transition: all 0.3s linear;



     -ms-transition: all 0.3s linear;



     -o-transition: all 0.3s linear;



     transition: all 0.3s linear;



 }



 .img-effect1:hover:before,



 .img-effect1:hover:after,



 .img-effect2:hover:before,



 .img-effect2:hover:after,



 .img-effect3:hover:before,



 .img-effect3:hover:after,



 .img-effect4:hover:before,



 .img-effect4:hover:after,



 .img-effect5:hover:before,



 .img-effect5:hover:after,



 .img-effect6:hover:before,



 .img-effect6:hover:after,



 .img-effect7:hover:before,



 .img-effect7:hover:after,



 .img-effect8:hover:before,



 .img-effect8:hover:after,



 .img-effect9:hover:before,



 .img-effect9:hover:after {



     -webkit-transition: all 0.3s ease-in-out;



     -moz-transition: all 0.3s ease-in-out;



     -o-transition: all 0.3s ease-in-out;



     transition: all 0.3s ease-in-out;



 }



 /*effect 1*/



 .img-effect1:before {



     width: 100%;



     height: 100%;



     opacity: 0;



 }



 .img-effect1:hover:before,



 .sf-element-bx:hover .img-effect1:before {



     opacity: 0.5;



 }



 /*effect 2*/



 .img-effect2:before {



     left: 50%;



     top: 50%;



 }



 .img-effect2:hover:before,



 .sf-element-bx:hover .img-effect2:before {



     width: 100%;



     height: 100%;



     top: 0;



     left: 0;



 }



 /*effect 3*/



 .img-effect3:before {



     left: 50%;



     top: 0;



     height: 100%;



 }



 .img-effect3:hover:before,



 .sf-element-bx:hover .img-effect3:before {



     width: 100%;



     left: 0;



 }



 /*effect 4*/



 .img-effect4:before {



     left: 0;



     top: 50%;



     width: 100%;



 }



 .img-effect4:hover:before,



 .sf-element-bx:hover .img-effect4:before {



     height: 100%;



     top: 0;



 }



 /*effect 5*/



 .img-effect5:before {



     left: 0;



     top: auto;



     bottom: 0;



     width: 100%;



 }



 .img-effect5:hover:before,



 .sf-element-bx:hover .img-effect5:before {



     height: 100%;



 }



 /*effect 6*/



 .img-effect6:before,



 .img-effect6:after {



     height: 100%;



 }



 .img-effect6:after {



     left: auto;



     right: 0;



 }



 .img-effect6:hover:before,



 .img-effect6:hover:after,



 .sf-element-bx:hover .img-effect6:before,



 .sf-element-bx:hover .img-effect6:after {



     width: 50%;



 }



 /*effect 7*/



 .img-effect7:before,



 .img-effect7:after {



     height: 100%;



 }



 .img-effect7:after {



     left: auto;



     right: 0;



 }



 .img-effect7:hover:before,



 .img-effect7:hover:after,



 .sf-element-bx:hover .img-effect7:before,



 .sf-element-bx:hover .img-effect7:after {



     width: 100%;



     opacity: 0.3;



 }



 /*effect 8*/



 .img-effect8:before,



 .img-effect8:after {} .img-effect8:after {



     left: auto;



     right: 0;



     top: auto;



     bottom: 0;



 }



 .img-effect8:hover:before,



 .img-effect8:hover:after,



 .sf-element-bx:hover .img-effect8:before,



 .sf-element-bx:hover .img-effect8:after {



     width: 100%;



     height: 100%;



     opacity: 0.3;



 }



 /*effect 9*/



 .img-effect9:before,



 .img-effect9:after {



     width: 100%;



     height: 100%;



     opacity: 0;



 }



 .img-effect9:hover:before,



 .sf-element-bx:hover .img-effect9:before {



     opacity: 0.5;



 }



 .img-effect9:hover:after,



 .sf-element-bx:hover .img-effect9:after {



     width: 90%;



     height: 80%;



     left: 5%;



     top: 10%;



     opacity: 0.5;



     background: none;



     border: 1px dashed #FFFFFF;



 }



 /*---------------------------------------------------------------



 12. CUSTOM ELEMENTS ( tabs & accordian & modal pop )



 ---------------------------------------------------------------*/



 /*no-radius*/



 .btn,



 .panel,



 .form-control,



 .img-thumbnail,



 .panel-heading,



 .dropdown-menu,



 .panel-group .panel,



 .nav-tabs > li > a,



 .modal-content,



 .navbar-toggle,



 .nav-pills > li > a,



 .pager li > a,



 .pager li > span,



 .well,



 .alert {



     -webkit-border-radius: 0;



     -moz-border-radius: 0;



     border-radius: 0;



 }



 /*no-box-shadow*/



 .panel,



 .well {



     box-shadow: none;



     -webkit-box-shadow: none;



 }



 .panel-group .panel + .panel {



     margin: -1px 0 0;



 }



 /*accodian style 1*/



 .accodian-style1 .panel-heading {



     position: relative;



 }



 .accodian-style1 .panel-heading a {



     display: block;



     position: relative;



     z-index: 1;



 }



 .accodian-style1 .indicator {



     font-size: 12px;



     color: #9b9b9b;



     position: absolute;



     right: -1px;



     top: -1px;



     padding: 18px;



     text-align: center;



     border: 1px solid #e1e1e1;



 }



 /*accodian style 2*/



 .accodian-style2 .indicator {



     border: 1px solid #e1e1e1;



 }



 /*tabs style 1*/



 .tabbable .nav-tabs {



     margin: 0;



 }



 .tabbable .nav-tabs li {



     padding: 0;



     margin-right: 10px;



 }



 .tabbable .nav-tabs li a {



     border-width: 1px;



     border-color: #e1e1e1 #e1e1e1;



     border-style: solid;



     background: #f6f6f6;



     color: #555555;



     margin: 0;



     text-transform: uppercase;



     font-size: 13px;



     font-weight: 600;



     padding: 13px 20px;



 }



 @media only screen and (max-width: 767px) {



 .tabbable .nav-tabs li {



     margin-right:5px;



 	margin-bottom:5px;



 }	



 .tabbable .nav-tabs li a {



     font-size: 12px;



     padding:10px 8px;



 }



 } 



 .tabbable .nav-tabs li.active a,



 .tabbable .nav-tabs li:hover a,



 .tabbable .nav-tabs li:focus a {



     background: #FFFFFF;



     border-bottom-color: #FFF;



     color: #555555;



 }



 .tabbable .tab-content {



     border-width: 0 1px 1px;



     border-color: #e1e1e1;



     border-style: solid;



     background: #FFF;



 }



 .tabbable .tab-pane {



     padding: 30px;



 }



 /*tabs left style*/



 .tabbable.tabs-left .nav-tabs li,



 .tabbable.tabs-right .nav-tabs li {



     float: none;



     margin: 0 0 10px;



 }



 .tabbable.tabs-left .nav-tabs li:last-child,



 .tabbable.tabs-right .nav-tabs lilast-child {



     margin-bottom: 0;



 }



 .tabbable.tabs-left .nav-tabs,



 .tabbable.tabs-right .nav-tabs {



     border-bottom: none;



 }



 .tabbable.tabs-left .nav-tabs {



     border-right: 1px solid #ddd;



     position: relative;



     z-index: 1;



 }



 .tabbable.tabs-left .nav-tabs li {



     margin-right: -1px;



 }



 @media only screen and (max-width: 767px) {



     .tabbable.tabs-left .nav-tabs li {



         margin-right: -1px;



         width: 14.111%;



         float: left;



         overflow: hidden;



     }



     .tabbable.tabs-left .nav-tabs li a {



         font-size: 11px;



         padding: 13px 10px;



     }



 }



 .tabbable.tabs-left .nav-tabs li.active a,



 .tabbable.tabs-left .nav-tabs li:hover a,



 .tabbable.tabs-left .nav-tabs li:focus a {



     border-right-color: #FFF;



     border-bottom-color: #e1e1e1;



 }



 .tabbable.tabs-left .tab-content,



 .tabbable.tabs-right .tab-content {



     min-height: 300px;



 }



 .tabbable.tabs-left .tab-content,



 .tabbable.tabs-right .tab-content {



     border-width: 1px;



     border-color: #e1e1e1;



     border-style: solid;



 }



 .tabbable.tabs-left .tab-content {



     margin-left: -1px;



 }



 /*======================



 	Modal pop 



 ======================*/



 input { -webkit-user-select: text; /* Chrome, Opera, Safari */ -moz-user-select: text; /* Firefox 2+ */ -ms-user-select: text; /* IE 10+ */ user-select: text; /* Standard syntax */ }   



 .city-autocomplete {



     width: 100% !important;



     position: absolute;



     left: 0 !important;



     top: auto !important;



     z-index: 10000;



     background: #fff;



     border: 1px solid #c3cacf;



     display: none;



     font-family: Arial, sans-serif;



     -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);



     -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);



     box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);



     -webkit-border-bottom-right-radius: 5px;



     -moz-border-radius-bottomright: 5px;



     border-bottom-right-radius: 5px;



     -webkit-border-bottom-left-radius: 5px;



     -moz-border-radius-bottomleft: 5px;



     border-bottom-left-radius: 5px;



 }



 .city-autocomplete > div {



     font-size: 13px;



     padding: 5px 10px;



     cursor: pointer;



 }



 .city-autocomplete > div:hover {



     background: #c3cacf;



 }



 .pac-container {



     background-color: #FFF;



     z-index: 100;



     position: fixed;



     display: inline-block;



     float: left;



 }



 /*.modal {



     z-index: 100;



 }*/



 /*.modal-backdrop {



     z-index: 50;



 }*/



 .modal {} .modal-header {



     <?php



     echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	?>



     padding: 15px 25px;



 }



 .modal-header .modal-title {



     color: #fff;



 }



 .modal .modal-body {



     padding: 25px;



 }



 @media only screen and (max-width: 767px) {



 .modal .modal-body { padding:15px;}



 }



 .modal-xlg {



     width: 1000px;



 }



 .provider_registration .bootstrap-select div.dropdown-menu ul li a,



 .provider_registration_page .bootstrap-select div.dropdown-menu ul li a {



     font-weight: 600;



 }



 .provider_registration .bootstrap-select div.dropdown-menu ul li a span.childcat,



 .provider_registration_page .bootstrap-select div.dropdown-menu ul li a span.childcat {



     font-weight: 400;



     color: #7c7c7c;



 }



 @media only screen and (max-width: 1024px) {



     .modal-xlg {



         width: auto;



         margin-left: 15px;



         margin-right: 15px;



     }



 }



 /* Data tables */



 div.dataTables_filter,



 div.dataTables_length,



 div.dataTables_paginate,



 div.dataTables_info {



     margin: 0 -15px;



 }



 div.dataTables_filter input {



     margin-left: 0;



     margin-right: 5px;



 }



 @media only screen and (max-width: 767px) {



     div.dataTables_filter,



     div.dataTables_length,



     div.dataTables_paginate,



     div.dataTables_info {



         margin: 0;



     }



     div.dataTables_paginate,



     div.dataTables_info {



         text-align: left;



     }



     div.dataTables_filter,



     div.dataTables_length {



         display: table;



     }



 }



 /*== > PRICING BOX CSS START ==*/



 .pricingtable-row [class*=" col-"] {



     margin-bottom: 30px;



 }



 .pricingtable-inner {



     text-align: center;



 }



 .pricingtable-price {



     padding: 20px 20px;



     background-color: #F4F7F8;



     border: 1px solid #E9E9E9;



 }



 .pricingtable-bx {



     font-size: 50px;



     font-family: Arial;



     color: #666666;



 }



 .pricingtable-type {



     font-size: 20px;



     text-transform: uppercase;



     font-size: 16px;



 }



 .pricingtable-type:before {



     content: "/";



     margin-right: 3px;



 }



 .pricingtable-title {



     background-color: #1BBCE8;



     padding: 20px;



     text-transform: uppercase;



     overflow-wrap: break-word;



 }



 .pricingtable-title * {



     margin: 0;



     color: #fff;



     font-weight: 800;



 }



 .pricingtable-features {



     margin: 0;



     padding: 0;



     list-style: none;



     border: 1px solid #E9E9E9;



 	background-color:#fff;



 }



 .pricingtable-features li {



     padding: 12px;



     border-bottom: 1px solid #E9E9E9;



 }



 .pricingtable-features li i {



     margin: 0 3px;



 }



 .pricingtable-features li:nth-child(even) {



     background-color: #F4F7F8;



 }



 .pricingtable-features li:last-child {



     border-bottom: none;



 }



 .pricingtable-footer {



     margin-top: -1px;



     padding: 20px;



     background-color: #F4F7F8;



     border: 1px solid #E9E9E9;



 }



 .sf-pricing-highlight {



     margin-top: -20px;



     -webkit-box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.2);



     box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.2);



     position: relative;



     z-index: 99;



 }



 .sf-pricing-highlight .pricingtable-price {



     padding: 30px 20px;



 }



 .sf-pricing-highlight .pricingtable-footer {



     padding: 30px 20px;



 }



 .no-col-gap .pricingtable-wrapper {



     margin-left: -1px;



 }



 @media only screen and (max-width: 991px) {



     .sf-pricing-highlight {



         margin-top: 0;



     }



     .sf-pricing-highlight .pricingtable-price {



         padding: 20px;



     }



     .sf-pricing-highlight .pricingtable-footer {



         padding: 20px;



     }



 }



 /* PRICING BOX COL CSS */



 #sf-pricingtable-wrap {



     margin-left: -15px;



     margin-right: -15px;



 }



 #sf-pricingtable-wrap.three .pricingtable-cell {



     width: 33.333%;



 }



 #sf-pricingtable-wrap.two .pricingtable-cell {



     width: 50%;



 }



 #sf-pricingtable-wrap.one .pricingtable-cell {



     width: 100%;



 }



 @media only screen and (max-width: 991px) {



     #sf-pricingtable-wrap.three .pricingtable-cell {



         width: 100%;



     }



 }



 @media only screen and (max-width: 767px) {



     #sf-pricingtable-wrap.two .pricingtable-cell {



         width: 100%;



     }



 #sf-pricingtable-wrap.four [class*="col-md-"]	{ margin-bottom:30px; }



 }



 /*== > PRICING BOX - 2 CSS START ==*/



 .sf-pricing-box-new .pricingtable-price,



 .sf-pricing-box-new .pricingtable-footer,



 .sf-pricing-box-new .pricingtable-title {



     background-color: #444a4e;



     border: none;



 }



 .sf-pricing-box-new .pricingtable-price,



 .sf-pricing-box-new .pricingtable-bx {



     color: #fff;



 }



 .sf-pricing-box-new .pricingtable-price {



     padding-bottom: 0;



 }



 .sf-pricing-box-new .pricingtable-title {



     padding-top: 0;



 }



 .sf-pricing-box-new .pricingtable-bx {



     font-weight: 800;



 }



 .sf-pricing-box-new .pricingtable-features li {



     border-bottom: none;



     padding: 15px 12px;



 }



 .sf-pricing-box-new .pricingtable-features li.sf-featued-no-provide {



     color: #CCC;



 }



 .sf-pricing-box-new.sf-pricing-highlight .pricingtable-price,



 .sf-pricing-box-new.sf-pricing-highlight .pricingtable-title,



 .sf-pricing-box-new.sf-pricing-highlight .pricingtable-footer {



     <?php



     echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	?>



 }



 /*---------------------------------------------------------------



 13. TRANSITION (Slow animateion speed) 



 ---------------------------------------------------------------*/



 a,



 .btn,



 .form-control,



 .overlay-bx,



 ul.overlay-icon li a i,



 .icon-bx-xl,



 .icon-bx-lg,



 .icon-bx-md,



 .icon-bx-sm,



 .icon-bx-xs,



 ul.share-social-bx li,



 .indicator,



 .profile-menu ul li,



 .staff-member .member-done,



 .how-sf-work .sf-element-bx .shadow-bx img,



 .how-sf-work .sf-element-bx .step-no-bx {



     -webkit-transition: all 0.2s linear;



     -moz-transition: all 0.2s linear;



     -ms-transition: all 0.2s linear;



     -o-transition: all 0.2s linear;



     transition: all 0.2s linear;



 }



 .animate-slow {



     -webkit-transition: all 0.3s ease-out;



     -moz-transition: all 0.3s ease-out;



     -o-transition: all 0.3s ease-out;



     -ms-transition: all 0.3s ease-out;



     transition: all 0.3s ease-out;



 }



 .animate-mid {



     -webkit-transition: all 0.5s ease-out;



     -moz-transition: all 0.5s ease-out;



     -o-transition: all 0.5s ease-out;



     -ms-transition: all 0.5s ease-out;



     transition: all 0.5s ease-out;



 }



 .animate-fast {



     -webkit-transition: all 0.8s ease-out;



     -moz-transition: all 0.8s ease-out;



     -o-transition: all 0.8s ease-out;



     -ms-transition: all 0.8s ease-out;



     transition: all 0.8s ease-out;



 }



 .admin-bar #header-part.fix-map-header .main-bar {



     top: 28px;



 }



 /*---------------------------------------------------------------



 14. BUTTON STYLE 



 ---------------------------------------------------------------*/



 .btn { border: none; box-shadow: none !important; font-weight: normal; outline: 0 none !important; padding: 10px 20px; text-decoration: none;}



 .btn-lg,



 .btn-group-lg > .btn {  padding: 15px 30px; }



 .btn-sm,



 .btn-group-sm > .btn {



     padding: 5px 10px;



 }



 .btn-xs,



 .btn-group-xs > .btn {



     padding: 1px 5px;



 }



 .btn-linking {



 	<?php



     echo (service_finder_theme_get_data($data,'link-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'link-scheme').'!important; ' : '';



 	?>



 	font-weight:bold;}



 .btn-linking:hover,



 .btn-linking:active,



 .btn-linking:focus {text-decoration:underline; <?php echo (service_finder_theme_get_data($data,'link-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'link-hover-color').'!important; ' : ''; ?>}



 .btn-default {



     background-color: #f0f0f0;



 }



a.btn.btn-primary,

.btn-primary,

.owl-prev,

.owl-next {



    <?php



    echo (service_finder_theme_get_data($data,'button-primary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-background-color').'; ' : '';



    echo (service_finder_theme_get_data($data,'button-primary-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-primary-border-color').'; ' : '';



    echo (service_finder_theme_get_data($data,'button-primary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-color').'; ' : '';



    ?>



 }



 a.btn.btn-primary:hover,

 a.btn.btn-primary.focus,

 a.btn.btn-primary:focus,



 .btn-primary:hover,

 .btn-primary.focus,

 .btn-primary:focus,



 .btn-primary.active,

 .btn-primary:active,

 .open > .dropdown-toggle.btn-primary,



 .btn-primary[disabled],



 .btn-primary[disabled]:focus,



 .owl-prev:hover,



 .owl-prev:active,



 .owl-prev:focus,



 .owl-next:hover,



 .owl-next:active,



 .owl-next:focus {



     <?php



     echo (service_finder_theme_get_data($data,'button-primary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-hover-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-hover-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-primary-hover-border-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-hover-color').'; ' : '';



 	?>



 }



 .btn-primary.active.focus,



 .btn-primary.active:focus,



 .btn-primary.active:hover,



 .btn-primary.focus:active,



 .btn-primary:active:focus,



 .btn-primary:active:hover,



 .open > .dropdown-toggle.btn-primary.focus,



 .open > .dropdown-toggle.btn-primary:focus,



 .open > .dropdown-toggle.btn-primary:hover {



     <?php



     echo (service_finder_theme_get_data($data,'button-primary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-hover-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-hover-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-primary-hover-border-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-hover-color').'!important; ' : '';



 	?>



 }



 .btn-custom {



     



	<?php



		echo (service_finder_theme_get_data($data,'button-secondary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-secondary-background-color').'; ' : '';



		echo (service_finder_theme_get_data($data,'button-secondary-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-secondary-border-color').'; ' : '';



		echo (service_finder_theme_get_data($data,'button-secondary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-secondary-color').'!important; ' : '';



    ?>



 }



 .btn-custom:hover,



 .btn-custom.focus,



 .btn-custom:focus,



 .btn-custom.active,



 .btn-custom:active,



 .open > .dropdown-toggle.btn-custom {



     



     <?php



     echo (service_finder_theme_get_data($data,'button-secondary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-secondary-hover-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-secondary-hover-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-secondary-hover-border-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-secondary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-secondary-hover-color').'!important; ' : '';



 	?>



 }



 .btn-border {



     background: #FFF;



     border: 1px solid #e1e1e1;



     color: #767676;



 }



 a.btn.btn-border {



     color: #767676;



 }



 a.btn.btn-border:hover,



 a.btn.btn-border:focus,



 a.btn.btn-border:active {



     color: #767676;



 }



 .btn-border:hover,



 .btn-border.focus,



 .btn-border:focus,



 .btn-border.active,



 .btn-border:active,



 .open > .dropdown-toggle.btn-border {



     background-color: #F5F5F5;



 }



 .btn-icon {



     padding: 9px 10px;



 }



 .btn .fa {



     margin: 0 3px;



 }



 .fileinput-remove-button {



     background-color: #d9534f;



     border-color: #d43f3a;



     color: #fff;



 }



 .fileinput-remove-button:hover,



 .fileinput-remove-button.focus,



 .fileinput-remove-button:focus,



 .fileinput-remove-button.active,



 .fileinput-remove-button:active {



     background-color: #d43f3a;



     border-color: #ac2925;



     color: #fff;



 }



 /*error for select box*/



 .has-error .bootstrap-select .dropdown-toggle,



 .has-error .bootstrap-select .dropdown-toggle:hover,



 .has-error .bootstrap-select .dropdown-toggle:focus {



     border-color: #a94442 !important;



 }



 /*succes for select box*/



 .has-success .bootstrap-select .dropdown-toggle,



 .has-success .bootstrap-select .dropdown-toggle:hover,



 .has-success .bootstrap-select .dropdown-toggle:focus {



     border-color: #3c763d !important;



 }



 /*---------------------------------------------------------------



 15. FORM  ELEMENTS 



 ---------------------------------------------------------------*/



 label {



     font-weight: 600;



     margin-bottom: 10px;



 }



 .form-control {



     border: 1px solid #e1e1e1;



     box-shadow: none;



     height: 40px;



     font-size: 13px;



     line-height: 20px;



     padding: 9px 12px;



 }



 .form-control:focus {



     border-color: #e1e1e1;



     outline: 0;



 }



 .form-control:focus,



 .has-error .form-control:focus {



     -webkit-box-shadow: none;



     box-shadow: none;



 }



 .form-control.kv-fileinput-caption {



     height: 39px;



 }



 .form-group.form-inline .radio,



 .form-group.form-inline .checkbox {



     margin-right: 15px;



 }



 /*input group*/



 .input-group {



     width: 100%;



 }



 .input-group .form-control,



 .input-group-addon,



 .input-group .fa,



 .input-group-btn {



     display: table-cell;



 }



 .input-group-addon {



     border-radius: 0;



     -webkit-border-radius: 0;



     background: #fff;



     border-color: #e1e1e1;



     padding: 6px 14px;



     font-size: 16px;



 }



 .input-group-addon.font-size-20 {



     font-size: 20px;



 }



 .input-group-addon.fixed-w {



     text-align: center;



     padding: 6px 0;



     width: 40px;



 }



 .input-group-addon.v-align-t {



     line-height: 30px;



 }



 /*select box*/



 .dropdown-menu {



     font-size: 13px;



 }



 .bootstrap-select {



     width: 100%;



 }



 .bootstrap-select .dropdown-toggle {



     border: 1px solid #e1e1e1 !important;



     background-color: #fff !important;



     height: 40px;



     font-size: 13px;



     color: #999;



 }



 .bootstrap-select .dropdown-toggle:after {



     display: none;



 }



 .bootstrap-select .dropdown-toggle:active,



 .bootstrap-select .dropdown-toggle:focus,



 .bootstrap-select .dropdown-toggle:hover {



     background-color: #fff !important;



     border: 1px solid #e9e9e9 !important;



     box-shadow: none !important;



     outline: 0px !important;



 }



 .bootstrap-select:active,



 .bootstrap-select:focus {



     border: 0px !important;



     box-shadow: none !important;



     outline: 0px !important;



 }



 .bootstrap-select.open {



     box-shadow: none !important;



     outline: 0px !important;



 }



 .bootstrap-select.open .dropdown-toggle {



     box-shadow: none !important;



     outline: 0px !important;



 }



 .bootstrap-select div.dropdown-menu {



     border: 1px solid #e9e9e9;



     border-radius: 0;



     box-shadow: none;



     margin-top: -1px;



     padding: 0;



     font-size: 13px;



 }



 .bootstrap-select div.dropdown-menu ul li {



     padding: 0;



 }



 .bootstrap-select div.dropdown-menu ul li a {



     padding: 5px 15px;



 }



 .bootstrap-select div.dropdown-menu ul li a img {



     border-radius: 100%;



     -webkit-border-radius: 100%;



     margin-right: 5px;



 }



 .bootstrap-select .bs-searchbox .form-control {



     padding: 5px 10px;



     height: 30px;



 }



 /*touchspin input type number*/



 .bootstrap-touchspin .input-group-btn-vertical {



     position: relative;



     white-space: nowrap;



     width: 1%;



     vertical-align: middle;



     display: table-cell;



 }



 .bootstrap-touchspin .input-group-btn-vertical > .btn {



     display: block;



     float: none;



     width: 100%;



     max-width: 100%;



     padding: 10px 10px 9px;



     margin-left: -1px;



     position: relative;



     border-width: 1px;



     border-style: solid;



     border-color: #e1e1e1;



     background: #FFF;



 }



 .bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-up {



     border-radius: 0;



     border-top-right-radius: 0;



 }



 .bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-down {



     margin-top: -2px;



     border-radius: 0;



     border-bottom-right-radius: 0;



 }



 .bootstrap-touchspin .input-group-btn-vertical i {



     position: absolute;



     top: 4px;



     left: 5px;



     font-size: 9px;



     font-weight: normal;



     color: #9fa0a1;



 }



 /*rating star*/



 .input-rating input[type=radio] {



     display: none;



 }



 .input-rating input[type=radio] + label {



     display: inline-block;



     margin-left: -4px;



     padding-left: 0px !important;



     padding-right: 0px;



     width: 24px;



 }



 .input-rating input[type=radio] + label:first-of-type {



     margin-left: 0px;



 }



 .input-rating input[type=radio] + label:before {



     background-color: transparent;



     border: none;



     color: #ffd925;



     content: "\f006";



     display: inline-block;



     font-family: FontAwesome;



     font-size: 20px;



     -webkit-font-smoothing: antialiased;



     height: 14px;



     line-height: 1;



     margin-left: 0px;



     position: static;



     text-align: center;



     top: 2px;



     transition: none;



     width: 14px;



 }



 .input-rating input[type=radio]:checked + label:before,



 .input-rating input[type=radio] + label.marked:before,



 .input-rating input[type=radio] + label.filled:before,



 .input-rating input[type=radio] + label.hovered.filled:before {



     content: "\f005";



 }



 .input-rating input[type=radio] + label.hovered:before {



     content: "\f006";



 }



 /*simple rating list*/



 .rating-bx {



     color: #ffd925;



     font-size: 14px;



 }



 .rating-bx i {



     margin: 0 2px;



 }



 .rating-container .rating-stars::before { 



     text-shadow: none;



 }



 .rating-container {



     color: #c8c8c8;



 }



 .rating-container .rating-stars {



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 /*validation symbol*/



 .has-feedback label ~ .form-control-feedback {



     top: 31px;



 }



 /*loading*/



 .loading-box {



     width: 100%;



     height: 100%;



     background-color: #FFF;



     position: fixed;



     left: 0;



     top: 0;



     opacity: 0.7;



     z-index: 9999;



 }



 .loading-pic {



     width: 70px;



     height: 70px;



     background: url(inc/images/loading.GIF) center no-repeat;



     position: fixed;



     left: 50%;



     top: 50%;



     margin: -35px;



     z-index: 99999;



 }



 /*loading - 2*/



 .loading-cover,



 .loading-srh-bar,



 .loading-map {



     background: rgba(255, 255, 255, 0.8);



     position: absolute;



     left: 0;



     top: 0;



     width: 100%;



     height: 100%;



     z-index: 2;



 }



 .loading-cover .fa-spinner,



 .loading-srh-bar .fa-spinner,



 .loading-map .fa-spinner {



     position: absolute;



     left: 50%;



     top: 50%;



     margin: -10px;



     font-size: 25px;



     color: #333;



 }



 .sf-banner-outer {



     margin-bottom: 0;



 }



 .sf-success-top,



 .sf-error-top {



     margin-bottom: 0;



 }



 .alert-bx.alert-info {



     padding: 15px;



     border: 1px solid #bce8f1;



 }



 /*---------------------------------------------------------------



 16. TABLES 



 ---------------------------------------------------------------*/



 .table > tbody > tr > td,



 .table > tbody > tr > th,



 .table > tfoot > tr > td,



 .table > tfoot > tr > th,



 .table > thead > tr > td,



 .table > thead > tr > th {



     padding: 10px;



 }



 .table.borderless > tbody > tr > td,



 .table.borderless > tbody > tr > th {



     border: none;



 }



 /*data table*/



 .dataTable .sorting_asc .checkbox {



     margin-right: 0;



 }



 /*---------------------------------------------------------------



 17. WP DEFAULT  



 ---------------------------------------------------------------*/



 .alignnone {



     margin: 0;



 }



 .aligncenter,



 div.aligncenter {



     display: block;



     margin: 5px auto 15px;



 }



 .alignright {



     float: right;



     margin: 5px 0 25px 25px;



 }



 .alignleft {



     float: left;



     margin: 5px 25px 25px 0;



 }



 a img.alignright {



     float: right;



     margin: 5px 0 25px 25px;



 }



 a img.alignnone {



     margin: 5px 0 25px 0;



 }



 a img.alignleft {



     float: left;



     margin: 5px 25px 25px 0;



 }



 a img.aligncenter {



     display: block;



     margin: 5px auto 15px;



 }



 .wp-caption {



     max-width: 100%;



     text-align: center;



 }



 .wp-caption img[class*="wp-image-"] {



     display: block;



     margin: 0;



 }



 .wp-caption.alignnone {



     margin: 5px 0 25px 0;



 }



 .wp-caption.alignleft {



     margin: 5px 25px 25px 0;



 }



 .wp-caption.alignright {



     margin: 5px 0 25px 25px;



 }



 .wp-caption img {



     border: 0 none;



     height: auto;



     margin: 0;



     max-width: 100%;



     padding: 0;



     width: auto;



 }



 .wp-caption p.wp-caption-text {



     color: #9d9d9d;



     font-size: 13px;



     line-height: 18px;



     margin: 0;



     padding: 10px 0;



     text-align: left;



 }



 blockquote {



     padding: 16px 20px 16px 80px;



     font-size: 18px;



     color: #555555;



     margin: 40px 0;



     border-left: none;



     line-height: 30px;



     position: relative;



     background: #f6f6f6;



     clear: both;



 }



 blockquote p {



     font-size: 18px;



     color: #555555;



     line-height: 30px;



     margin-bottom: 0px;



 }



 blockquote:before {



     content: '\f10d';



     font-family: "FontAwesome";



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     font-size: 35px;



     position: absolute;



     left: 20px;



     top: 20px;



     font-style: normal;



 }



 .size-auto,



 .size-full,



 .size-large,



 .size-medium,



 .size-thumbnail {



     max-width: 100%;



     height: auto;



 }



 /*---------------------------------------------------------------



 18. BLOG  



 ---------------------------------------------------------------*/



 /*blog post listing 1*/



 .blog-post .post-info {



     margin-bottom: 40px;



 }



 .blog-post .post-info {



     background: #FFF;



     padding: 30px 30px 0;



 }



 .blog-post .post-date {



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     text-align: center;



     width: 80px;



     color: #FFF;



     margin: 0 30px 30px 0;



     



     display:table;



 }



 .blog-post .post-date strong,



 .blog-post .post-date span {



     display: table-cell;



 	



 	vertical-align:middle;



 }



 .blog-post .post-date strong a,



 .blog-post .post-date strong a:active,



 .blog-post .post-date strong a:focus,



 .blog-post .post-date strong a:hover {



     color: #fff;



 }



 .blog-post .post-title {



     margin-top: 0;



     word-break: break-all;



 }



 .blog-post .post-date strong {



     padding: 5px;



     font-size: 30px;



     font-weight: 800;



 }



 .blog-post .post-date span {



     background: <?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;



     padding: 5px;



     font-size: 13px;



 }



 .blog-post .post-meta {



     clear:both;



     



     padding: 22px 30px;



     margin: 0 -30px;



     border-top: 1px solid #e3e3e3;



     border-bottom: 2px solid #e3e3e3;



 }



 .blog-post .post-meta ul {



     margin: 0 -4px;



     float: right;



 }



 .blog-post .post-meta ul li {



     display: inline-block;



     padding: 0;



     color: #a9a9a9;



 }



 .blog-post .post-meta ul li i {



     color: #7b7b7b;



     margin: 0 5px;



 }



 .blog-post .read-more {



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     text-transform: uppercase;



     font-weight: 600;



     margin-right: 5px;



 }



 .blog-post .read-more:after {



     content: "\f101";



     font-family: "FontAwesome";



     margin-left: 5px;



     font-size: 15px;



 }



 @media only screen and (max-width: 767px) {



     .blog-post .post-meta ul {



         float: none;



         margin-bottom: 10px;



         margin-left: -5px;



     }



 }



 /*if no image with blog post*/



 .blog-post.no-img-post .post-date {



     position: static;



 }



 .blog-post.no-img-post .post-thum {



     display: none;



 }



 /*blog post listing 2*/



 .blog-md.blog-post .post-thum {



     width: 350px;



     float: left;



     margin-right: 30px;



 }



 .blog-md.blog-post .post-date {



     position: absolute;



 }



 .blog-md.blog-post.no-img-post .post-date {



     position: static;



 }



 .blog-md.blog-post .post-meta {



     clear: both;



 }



 @media only screen and (max-width: 640px) {



     .blog-md.blog-post .post-thum {



         float: none;



         margin: 0 0 10px;



         width: auto;



     }



     .blog-md.blog-post .post-date {



         position: static;



     }



 }



 /*blog post Grid*/



 .blog-grid.blog-post .post-info {



     margin-bottom: 0;



 }



 .blog-grid.blog-post .post-meta ul {



     float: none;



 }



 .blog-grid.blog-post .read-more {



     margin-top: 15px;



     display: inline-block;



 }



 .blog-grid.blog-post .post-date {



     width: 60px;



     margin: 0 20px 5px 0;



 }



 .blog-grid.blog-post .post-date strong {



     font-size: 25px;



 }



 /*blog post Grid*/



 .card-container {



     margin-bottom: 30px;



 }



 /*blog page pagination main*/



 .nav-links:after {



     clear: both;



     content: "";



     display: table;



 }



 .screen-reader-text {



     clip: rect(1px, 1px, 1px, 1px);



     height: 1px;



     overflow: hidden;



     position: absolute !important;



     width: 1px;



 }



 .pagination .page-numbers {



     background-color: #fff;



     border: 1px solid #e0e0e0;



     color: #767676;



     padding: 9px 15px;



     font-weight: 600;



     font-size: 12px;



     display: block;



     float: left;



     margin-left: -1px;



 }



 .pagination .page-numbers.current,



 .pagination a.page-numbers:hover {



     <?php



     echo (service_finder_theme_get_data($data,'button-secondary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-secondary-hover-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-secondary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-secondary-hover-color').'!important; ' : '';



 	?>



 }



 /*blog page pagination */



 .pagination-blog {



     list-style: none;



     margin: 0 0 50px;



     padding: 0 0;



 }



 .pagination-blog:after {



     content: ".";



     display: block;



     clear: both;



     visibility: hidden;



     line-height: 0;



     height: 0;



 }



 .pagination-blog li {



     display: inline;



     margin: 0;



     padding: 0;



 }



 .pagination-blog a,



 .pagination-blog span {



     background-color: #fff;



     border: 1px solid #e0e0e0;



     color: #767676;



     padding: 9px 15px;



     font-weight: 600;



     font-size: 12px;



     display: block;



     float: left;



     margin-left: -1px;



 }



 .pagination-blog a span {



     padding: 0



 }



 .pagination-blog a:hover,



 .pagination-blog a.current,



 .pagination-blog a.current:hover,



 .pagination-blog span:hover,



 .pagination-blog span.current,



 .pagination-blog span.current:hover {



     color: #fff;



     background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     text-decoration: none;



     border: 1px solid <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .pagination-blog:hover {



     text-decoration: none



 }



 /*blog page link css*/



 .page-links {



     clear: both;



     font-family: "Noto Sans", sans-serif;



     margin-bottom: 1.3333em;



 }



 .page-links a,



 .page-links > span {



     border: 1px solid #eaeaea;



     border: 1px solid rgba(51, 51, 51, 0.1);



     display: inline-block;



     font-size: 12px;



     font-size: 1.2rem;



     height: 2em;



     line-height: 2;



     margin: 0 0.3333em 0.3333em 0;



     text-align: center;



     width: 2em;



 }



 .page-links a {



     -webkit-tap-highlight-color: rgba(255, 255, 255, 0.3);



     background-color: #333;



     border-color: #333;



     color: #fff;



 }



 .page-links a:hover,



 .page-links a:focus {



     background-color: #707070;



     background-color: rgba(51, 51, 51, 0.7);



     border-color: transparent;



     color: #fff;



 }



 .page-links > .page-links-title {



     border: 0;



     color: #707070;



     color: rgba(51, 51, 51, 0.7);



     height: auto;



     margin: 0;



     padding-right: 0.5em;



     width: auto;



 }



 /*blog paginated css*/



 .nav-links .nav-next,



 .nav-links .nav-previous {



     display: inline;



 }



 .nav-links .nav-previous a,



 .nav-links .nav-next a {



     display: inline-block;



     color: #3396d1;



     font-weight: 600;



     margin-bottom: 20px;



     outline: none !important;



     text-transform: uppercase;



 }



 .nav-links .nav-next a {



     float: right;



 }



 .nav-links .nav-previous a:hover,



 .nav-links .nav-next a:hover {



     color: #0099CC;



 }



 .nav-links .nav-previous a:after,



 .nav-links .nav-next a:after {



     content: "\f105";



     font-family: "FontAwesome";



     vertical-align: middle;



     margin-left: 2px;



     color: #333;



     font-size: 17px;



     display: inline-block;



     position: relative;



     top: -2px;



 }



 /*post navigation*/



 .post-navigation {



     background-color: #fff;



     padding: 30px;



     border-bottom: 2px solid #e3e3e3;



 }



 .post-navigation .screen-reader-text {



     margin-top: 0;



 }



 .post-navigation .nav-previous,



 .post-navigation .nav-next {



     display: inline-block;



     width: 50%;



 }



 .post-navigation .nav-next {



     text-align: right;



 }



 .post-navigation .nav-previous a:after,



 .post-navigation .nav-next a:after {



     display: none;



 }



 .post-navigation .nav-previous .post-title,



 .post-navigation .nav-next .post-title {



     display: block;



     font-size: 15px;



     color: #777777;



     margin-top: 10px;



 }



 /*post panging*/



 .sf-link-pages {



     padding: 20px 0 30px;



     



     clear: both;



 }



 .sf-link-pages a {



     color: #fff;



     padding: 2px 6px;



     font-size: 12px;



     font-weight: 600;



     background-color: #CCC;



     margin: 0 2px;



 }



 /*Sticky Post*/



 .sticky-post {



     position: absolute;



     right: 15px;



     top: 0;



     background: #77c04b;



     color: #FFF;



     padding: 5px 15px;



     text-transform: uppercase;



     font-weight: 600;



 }



 /*Post password form*/



 .post-password-form {



     position: relative;



     clear: both;



 }



 .post-password-form input[type="password"] {



     width: 100%;



     border: 1px solid #ddd;



     padding: 10px 100px 10px 15px;



     height: 40px;



 }



 .post-password-form label {



     display: block;



 }



 .post-password-form input[type="submit"] {



     <?php



     echo (service_finder_theme_get_data($data,'button-primary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-color').'; ' : '';



 	?>



     



     position: absolute;



     bottom: 0;



     right: 0;



     padding: 10px 20px;



     border: none;



     height: 40px;



     text-transform: uppercase;



     font-weight: 600;



 }



 /*gallery css for blog post*/



 .format-gallery [class*="galleryid-"] {



     clear: both;



     margin: 0 auto;



     overflow: hidden



 }



 .gallery .gallery-item {



     float: left;



     list-style: none;



     margin: 0px 0 0;



     overflow: hidden;



     padding: 0px 0px 5px 15px;



     text-align: center



 }



 .gallery .gallery-caption {



     padding-top: 10px;



     font-size: 13px;



 }



 .gallery .gallery-item img {



     float: left;



     padding: 0 0px;



     width: 100%;



     border: none !important;



 }



 .gallery-columns-2 .gallery-item {



     max-width: 50%;



 }



 .gallery-columns-3 .gallery-item {



     max-width: 33.33%;



 }



 .gallery-columns-4 .gallery-item {



     max-width: 25%;



 }



 .gallery-columns-5 .gallery-item {



     max-width: 20%;



 }



 .gallery-columns-6 .gallery-item {



     max-width: 16.66%;



 }



 .gallery-columns-7 .gallery-item {



     max-width: 14.28%;



 }



 .gallery-columns-8 .gallery-item {



     max-width: 12.5%;



 }



 .gallery-columns-9 .gallery-item {



     max-width: 11.11%;



 }



 .gallery-icon img {



     margin: 0 auto;



 }



 .gallery-caption {



     color: #707070;



     color: rgba(51, 51, 51, 0.7);



     display: block;



     font-family: "Noto Sans", sans-serif;



     font-size: 12px;



     font-size: 1.2rem;



     line-height: 1.5;



     padding: 0.5em 0;



 }



 .gallery-columns-6 .gallery-caption,



 .gallery-columns-7 .gallery-caption,



 .gallery-columns-8 .gallery-caption,



 .gallery-columns-9 .gallery-caption {



     display: none;



 }



 /*side bar*/



 .side-bar .widget {



     margin-bottom: 30px;



 }



 @media only screen and (max-width: 991px) {



     .side-bar {



         margin-bottom: 40px;



     }



 }



 .side-bar .widget-title {



     padding-bottom: 15px;



     position: relative;



     border-bottom: 1px solid #e1e1e1;



     margin-bottom: 30px;



 }



 .side-bar .widget-title:after {



     position: absolute;



     bottom: -2px;



     content: "";



     height: 3px;



     margin: 0 0 0;



     width: 70px;



 }



 .side-bar .widget .widget-title,



 .side-bar .widget .post-title {



     text-transform: none;



 }



 .side-bar .recent-posts-entry ul,



 .side-bar .category-entry ul {



     margin: 0;



     list-style: none;



     padding: 0;



 }



 /*Search-box*/



 .side-bar .search-bx .btn {



     border-left-color: #FFF;



     padding: 9px 10px;



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 /*Search-box sidebar default*/



 .widget_search .screen-reader-text {



     display: block;



 }



 .searchform {



     position: relative;



 }



 .searchform input[type="text"] {



     width: 100%;



     height: 40px;



     padding: 10px 90px 10px 15px;



     border: 1px solid #e1e1e1;



 }



 .searchform input[type="submit"] {



     height: 40px;



     padding: 7px 15px;



     background-color: <?php echo (!empty($data['button-primary-background-color'])) ? esc_html($data['button-primary-background-color']): ''; ?>;



     position: absolute;



     right: 0;



     bottom: 0;



     color: <?php echo (!empty($data['button-primary-color'])) ? esc_html($data['button-primary-color']).'!important': ''; ?>;



     border-left: none;



     border-right: none;



     border-top: none;



     border-width: 2px;



     border-bottom-color: <?php echo (!empty($data['button-primary-border-color'])) ? esc_html($data['button-primary-border-color']): ''; ?>;



 }



 .searchform input[type="submit"]:hover,



 .searchform input[type="submit"]:focus,



 .searchform input[type="submit"]:active {



     background-color: <?php echo (!empty($data['button-primary-hover-background-color'])) ? esc_html($data['button-primary-hover-background-color']): ''; ?>;



     color: <?php echo (!empty($data['button-primary-hover-color'])) ? esc_html($data['button-primary-hover-color']).'!important': ''; ?>;



     border-bottom-color: <?php echo (!empty($data['button-primary-hover-border-color'])) ? esc_html($data['button-primary-hover-border-color']): ''; ?>;



 }



 /*Recent-posts*/



 .side-bar .recent-posts-entry .post-date,



 .side-bar .tweets-feed-entry .tweet-date {



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     font-style: normal;



 }



 .side-bar .widget .post-title {



     font-size: 13px;



     line-height: 16px;



     margin-bottom: 8x;



 }



 .side-bar .recent-posts-entry ul li {



     padding: 0;



     border-bottom: 1px solid #e1e1e1;



     min-height: 85px;



     margin-bottom: 10px;



 }



 .side-bar .recent-posts-entry ul li:last-child {



     border-bottom: none;



 }



 .side-bar .recent-posts-entry ul li .post-thum-bx {



     margin-top: 2px;



     border: none;



 }



 .side-bar .recent-posts-entry .post-meta span {



     margin-right: 10px;



 }



 /* side bar listing-wedget*/



 .side-bar .widget_categories ul,



 .side-bar .widget_archive ul,



 .side-bar .widget_meta ul,



 .side-bar .widget_pages ul,



 .side-bar .widget_recent_comments ul,



 .side-bar .widget_nav_menu ul,



 .side-bar .widget_rss ul,



 .side-bar .widget_recent_entries ul {



     list-style: none;



     margin: 0;



 }



 .side-bar .widget_categories ul li,



 .side-bar .widget_archive ul li,



 .side-bar .widget_meta ul li,



 .side-bar .widget_pages ul li,



 .side-bar .widget_recent_comments ul li,



 .side-bar .widget_nav_menu li,



 .side-bar .widget_recent_entries ul li {



     padding-bottom: 18px;



     margin-bottom: 13px;



     border-bottom: 1px solid #e1e1e1;



     position: relative;



     padding: 10px 10px 10px 20px;



     margin-bottom: 0;



     line-height: 20px;



 }



 .side-bar .widget_categories ul li:before,



 .side-bar .widget_archive ul li:before,



 .side-bar .widget_meta ul li:before,



 .side-bar .widget_pages ul li:before,



 .side-bar .widget_recent_comments ul li:before,



 .side-bar .widget_nav_menu ul li:before,



 .side-bar .widget_recent_entries ul li:before {



     content: "\f046";



     position: absolute;



     left: 0;



     top: 10px;



     display: block;



     font-family: "FontAwesome";



 }



 .side-bar .widget_categories ul li li,



 .side-bar .widget_archive ul li li,



 .side-bar .widget_meta ul li li,



 .side-bar .widget_pages ul li li,



 .side-bar .widget_recent_comments ul li li,



 .side-bar .widget_nav_menu li li {



     border-bottom: none;



     padding-left: 7px;



     padding-right: 5px;



     padding-top: 0;



     padding-bottom: 0;



     line-height: 28px;



 }



 .side-bar .widget_categories ul li li:before,



 .side-bar .widget_archive ul li li:before,



 .side-bar .widget_meta ul li li:before,



 .side-bar .widget_pages ul li li:before,



 .side-bar .widget_recent_comments ul li li:before,



 .side-bar .widget_nav_menu li li:before {



     top: 0;



     left: -12px;



 }



 /* side bar widget_meta*/



 .side-bar .widget_meta ul li a abbr[title] {



     color: #333;



     border-bottom: none;



 }



 /*sidebar calender*/



 .widget_calendar caption::after {



     color: #707070;



     content: ">";



     font-family: "FontAwesome";



     margin: 0 0 0 5px;



 }



 .widget_calendar table {



     border-collapse: separate;



     border-spacing: 2px;



     width: 100%;



 }



 .widget_calendar thead {



     background-color: #999999



 }



 .widget_calendar tfoot tr td {



     border: none;



     padding: 0px



 }



 .widget_calendar tfoot tr td a {



     background-color: #fff;



     padding: 4px 10px



 }



 .widget_calendar table thead tr th {



     font-size: 11px;



     padding: 5px;



     text-align: center;



     border: none;



     color: #fff;



     background-color: #3396d1;



 }



 .widget_calendar table tbody td {



     font-size: 13px;



     padding: 6px 5px;



     text-align: center;



     background-color: #fff;



     border: none;



     color: #444;



 }



 .widget_calendar table tbody td#today {



     background-color: <?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;



     color: #FFF;



 }



 .widget_calendar table tbody td#today a {



     color: #FFF;



 }



 /*tags-list*/



 .side-bar .widget_tag_cloud a {



     padding: 8px 10px;



     background-color: #e6e6e6;



     font-size: 12px;



     display: inline-block;



     margin: 0 0 5px;



     color: #555555;



 }



 .side-bar .widget_tag_cloud a:hover {



     background-color: #CCCCCC;



 }



 /*widget archive*/



 .widget_archive select {



     width: 100%;



     padding: 5px;



     border: 1px solid #CCC;



 }



 /*widget text*/



 .widget_text select {



     width: 100%;



     padding: 5px;



     border: 1px solid #CCC;



 }



 .widget_text select option {



     width: 100%;



 }



 /*widget categories*/



 .widget_categories select {



     width: 100%;



     padding: 5px;



     border: 1px solid #CCC;



 }



 /*widget RSS*/



 .widget_rss ul {



     margin: 0;



     line-height: 20px;



 }



 .widget_rss ul li {



     line-height: 20px;



     margin-bottom: 15px;



 }



 .widget_rss ul .rsswidget {



     color: #333;



 }



 .widget_rss ul .rss-date {



     color: #3396D1;



 }



 .widget_rss ul .rssSummary {



     padding: 5px 0;



 }



 .widget_rss ul cite {



     color: #333;



     font-weight: 600;



 }



 /*Search form*/



 .widget_provider_search_form [class*="col-"] {



     float: none;



     width: 100%;



     padding: 0;



     margin-bottom: 10px;



 }



 .widget_provider_search_form .btn-advace-wrap .btn-advace-search {



     background-color: #62a643;



     margin-left: 15px;



 }



 .widget_provider_search_form .btn-advace-wrap .btn-advace-search:after {



     display: none;



 }



 .widget_provider_search_form .slider-track {



     background-image: linear-gradient(to bottom, #ddd 0px, #ddd 100%);



 }



 .widget_provider_search_form .sf-advace-search {



     padding: 10px;



 }



 .widget_provider_search_form .sf-advace-search .sf-tilte {



     font-size: 15px;



     font-weight: 700;



 }



 .widget_provider_search_form .sf-advace-search b,



 .widget_provider_search_form .sf-advace-search .sf-tilte {



     color: #777;



 }



 /*Company info*/



 .widget_company_info {



     text-align: center;



 }



 /*single blog*/



 .blog-content .blog-detail .post-info {



     padding-top: 0;



     padding-bottom: 25px;



 }



 .blog-content .post-info .post-meta {



     margin-bottom: 30px;



 }



 .blog-detail .post-info {



     padding-top: 25px;



     border-bottom: 2px solid #e3e3e3;



 }



 .blog-detail.no-img-post .post-thum {



     display: none;



 }



 .blog-detail .post-meta {



     border-bottom: 1px solid #e3e3e3;



     margin-bottom: 0;



 }



 .blog-detail .post-meta ul {



     float: none;



 }



 /*= comment list = */



 .comments-area {



     padding: 0;



 	clear:both;



 }



 .comments-area .comments-title {



     text-transform: uppercase;



     font-size: 20px;



 }



 ol.comment-list {



     list-style: none;



     margin: 0;



 }



 ol.comment-list li.comment {



     position: relative;



     padding: 0;



 }



 ol.comment-list li.comment .comment-body {



     position: relative;



     padding: 15px 20px;



     margin-bottom: 40px;



     margin-left: 80px;



     position: relative;



     border: 1px solid #e9e9e9;



 }



 ol.comment-list li.comment .comment-body:before,



 ol.comment-list li.comment .comment-body:after {



     content: '';



     position: absolute;



     top: 20px;



     width: 0;



     height: 0;



     border-width: 10px 12px 10px 0;



     border-style: solid;



 }



 ol.comment-list li.comment .comment-body:before {



     border-color: transparent #fff transparent #fff;



     z-index: 1;



     left: -12px;



     top: 22px;



 }



 ol.comment-list li.comment .comment-body:after {



     border-color: transparent #e9e9e9 transparent #e9e9e9;



     border-width: 12px 14px 12px 0;



     left: -14px;



 }



 ol.comment-list li.comment .comment-author {



     display: block;



     margin-bottom: 5px;



 }



 ol.comment-list li.comment .comment-author .avatar {



     position: absolute;



     top: 0;



     left: -80px;



     width: 56px;



     height: 56px;



     border-radius: 100%;



     -webkit-border-radius: 100%;



     border: 2px solid #FFF;



 }



 ol.comment-list li.comment .comment-author .fn {



     display: inline-block;



     color: #555555;



     font-size: 14px;



     text-transform: uppercase;



     font-weight: 600;



     font-style: normal;



 }



 ol.comment-list li.comment .comment-author .says {



     display: none;



     color: #999999;



     font-weight: 600;



 }



 ol.comment-list li.comment .comment-meta {



     color: #8d8d8d;



     text-transform: uppercase;



     margin-bottom: 10px;



 }



 ol.comment-list li.comment .comment-meta:before,



 ol.comment-list li.comment .reply a:before {



     font-family: "FontAwesome";



     font-size: 11px;



     vertical-align: top;



 }



 ol.comment-list li.comment .comment-meta:before {



     content: "\f133";



 }



 ol.comment-list li.comment .reply a:before {



     content: "\f064";



     font-weight: normal;



     color: #555555;



     margin-right: 5px;



     vertical-align: middle;



 }



 ol.comment-list li.comment p {



     line-height: 18px;



     margin: 0 0 5px;



 }



 ol.comment-list li.comment .reply a {



     position: absolute;



     top: 50px;



     right: 30px;



     margin-top: -5px;



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     font-weight: 600;



 }



 ol.comment-list li .children {



     list-style: none;



     margin-left: 80px;



 }



 ol.comment-list li .children li {



     padding: 0;



 }



 @media only screen and (max-width: 767px) {



     .comments-area .padding-30 {



         padding: 15px;



     }



     ol.comment-list li.comment .comment-body {



         margin-bottom: 30px;



         margin-left: 70px;



     }



     ol.comment-list li.comment .comment-author .avatar {



         left: -75px;



         height: 60px;



         width: 60px;



     }



     ol.comment-list li .children {



         margin-left: 20px;



     }



     ol.comment-list li.comment .reply a {



         position: static;



     }



 }



 @media only screen and (max-width: 480px) {



     ol.comment-list li.comment .comment-body {



         margin-left: 52px;



     }



     ol.comment-list li.comment .comment-author .avatar {



         left: -55px;



         top: 12px;



         width: 40px;



         height: 40px;



     }



 }



 /*= comment form = */



 .comment-respond {



     padding: 30px 30px;



     border: 1px solid #e9e9e9;



 }



 .comment-respond .comment-reply-title {



     text-transform: uppercase;



     font-size: 20px;



 }



 .comment-respond .comment-reply-title {



     font-size: 16px;



     font-weight: 600;



 }



 .comments-area .comment-form {



     margin: 0 -15px;



 }



 .comments-area .comment-form .comment-notes {



     display: none;



 }



 .comments-area .comment-form p {



     width: 33.333%;



     float: left;



     padding: 0 15px;



     margin-bottom: 30px;



     position: relative;



 }



 .comments-area .comment-form p.form-allowed-tags {



     width: 100%;



 }



 ol.comment-list li.comment .comment-respond .comment-form p {



     padding: 0 15px !important;



 }



 .comments-area .comment-form p label {



     display: none;



     line-height: 18px;



     margin-bottom: 10px;



 }



 .comments-area p:before {



     font-family: "FontAwesome";



     display: inline-block;



     position: absolute;



     left: 15px;



     top: 0;



     font-size: 16px;



     color: #ccc;



     width: 40px;



     height: 40px;



     line-height: 40px;



     border: 1px solid #e1e1e1;



     text-align: center;



 }



 .comments-area p.comment-form-author:before {



     content: "\f007";



 }



 .comments-area p.comment-form-email:before {



     content: "\f0e0";



 }



 .comments-area p.comment-form-url:before {



     content: "\f0ac";



 }



 .comments-area p.comment-form-comment:before {



     content: "\f040";



 }



 .comments-area .comment-form p input[type="text"],



 .comments-area .comment-form p textarea {



     width: 100%;



     height: 40px;



     line-height: 6px 12px;



     padding: 10px 10px 10px 50px;



     border: 1px solid #e1e1e1;



 }



 .comments-area .comment-form p.comment-form-comment {



     width: 100%;



     display: block;



     clear: both;



 }



 .comments-area .comment-form p textarea {



     height: 120px;



 }



 .comments-area .comment-form p.form-submit {



     clear: both;



     float: none;



     width: 100%;



     margin: 0;



 }



 .comments-area .comment-form p input[type="submit"] {



     background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     border-color: #1f82bd;



     border-width: 0;



     border-bottom-width: 3px;



     border-style: solid;



     color: #fff;



     padding: 9px 20px;



     line-height: 1.42857;



     text-transform: uppercase;



 }



 .comments-area .comment-form p input[type="submit"]:hover,



 .comments-area .comment-form p input[type="submit"]:focus,



 .comments-area .comment-form p input[type="submit"]:active {



     background-color: #1f82bd;



     border-color: #0c6faa;



     color: #fff;



 }



 @media only screen and (max-width: 767px) {



     .comments-area .comment-form p {



         width: 100%;



         float: none;



         margin-bottom: 20px;



     }



     .comment-respond {



         padding: 20px;



     }



 }



 /*---------------------------------------------------------------



 19. HEADER (top part of page)



 ---------------------------------------------------------------*/



 #header-part {



     position: relative;



     z-index: 99;



     background: #FFF;



     height: auto;



 }



 /*without top bar*/



 .extra-nav {



     float: right;



     padding: 25px 0;



     margin-right: 15px;



    -webkit-transition: all 0.2s ease;



    -moz-transition: all 0.2s ease;



    -ms-transition: all 0.2s ease;



    -o-transition: all 0.2s ease;



    transition: all 0.2s ease;



 }



 .extra-nav .extra-cell {



     display: inline-block;



     position: relative;



 }



 .extra-nav .btn-sm {



     margin: 5px 0;



 }



 @media only screen and (max-width: 767px) {



 .extra-nav {



     margin-right: 15px;



 }



 }



 @media only screen and (max-width: 480px) {



 .extra-nav {



     width: 100%;



     clear: both;



     margin: 0;



     padding:0 0 5px;



     text-align: right;



 }



 }



 /* map page header*/



 #header-part.fix-map-header {



     height: 90px;



 }



 #header-part.fix-map-header .main-bar {



     position: fixed;



     top: 0;



     left: 0;



     z-index: 1;



     box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);



     -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);



 }



 @media only screen and (max-width: 480px) {



     #header-part.fix-map-header {



         height: 160px;



     }



 }



 /*---------------------------------------------------------------



 20. PAGE TOP BAR (left & right content)



 ---------------------------------------------------------------*/



 .top-bar {



     background: <?php echo (!empty($data['top-bar-bg-color'])) ? esc_html($data['top-bar-bg-color']): ''; ?>;



     color: <?php echo (!empty($data['top-bar-text-color'])) ? esc_html($data['top-bar-text-color']): ''; ?>;



     padding: 10px 0;



 }



 .top-bar ul,



 .top-bar ol {



     margin-bottom: 0;



 }



 @media only screen and (max-width: 767px) {



     .top-bar ul,



     .top-bar ol {



         margin-top: 5px;



         margin-bottom: 5px;



     }



     .top-bar {



         padding: 0;



     }



     .top-bar [class*="col-"] {



         width: 100%;



         text-align: right;



         padding: 10px 15px;



         border-bottom: 1px solid #45A8E3;



     }



     .top-bar [class*="col-"]:last-child {



         border-bottom: none;



     }



 }



 /*=== >eamil-phone (left) ===*/



 .e-p-bx {



     margin-left: 0;



 }



 .e-p-bx li {



     display: inline-block;



     font-size: 12px;



     padding-right: 10px;



 }



 .e-p-bx li a {



     color: #FFF;



 }



 .e-p-bx li i {



     margin-right: 10px;



     vertical-align: middle;



 }



 /*=== >social-links (right) ===*/



 .social-bx,



 .login-bx {



     margin: 0 0 0 15px;



     float: right;



 }



 .social-bx li,



 .login-bx li {



     font-size: 12px;



     margin: 0;



     position: relative;



 }



 .social-bx li a,



 .login-bx li a {



     color: <?php echo (!empty($data['top-bar-text-color'])) ? esc_html($data['top-bar-text-color']): ''; ?>;



     font-size: <?php echo (!empty($data['header-top-bar-fontsize'])) ? esc_html($data['header-top-bar-fontsize']).'px': ''; ?>;



 }



 .social-bx li i,



 .login-bx li i {



     vertical-align: baseline;



     margin: 0 5px 0 0;



 }



 .social-bx li span,



 .login-bx li span {



     vertical-align: baseline;



     margin: 0 2px 0;



     font-size: 8px;



 }



 .login-bx .sf-notification-list,



 .sf-notopbar-notification .sf-notifications {	width: 250px;     top: 32px;    left: auto;    right: -20px;    border: none;    padding: 0;}



 .login-bx .sf-notification-list li,



 .sf-notopbar-notification .sf-notifications li{    border-bottom: 1px solid #F7F7F7;}



 .login-bx .sf-notification-list li:last-child,



 .sf-notopbar-notification .sf-notifications li:last-child{    border-bottom:none;}



 .login-bx .sf-notification-list li a,



 .sf-notopbar-notification .sf-notifications li a {   color: #767676;    padding: 9px 15px; white-space: normal;}



 .login-bx .sf-notification-list.arrow-up:after,



 .sf-notopbar-notification .sf-notifications.arrow-up:after {content:""; position:absolute; top: -6px; right:30px; border-right: 6px solid transparent; border-bottom: 6px solid #ffffff; border-left: 6px solid transparent;}



 .login-bx .sf-notification-list li a:first-child,



 .sf-notopbar-notification .sf-notifications.arrow-up  li a:first-child{border-top-left-radius: 5px;	border-top-right-radius: 5px;	-webkit-border-top-left-radius: 5px;	-webkit-border-top-right-radius: 5px;}



 .login-bx .sf-notification-list li a:last-child,



 sf-notopbar-notification .sf-notifications.arrow-up li a:last-child {border-bottom-left-radius: 5px;	border-bottom-right-radius: 5px;	-webkit-border-bottom-left-radius: 5px;	-webkit-border-bottom-right-radius: 5px;}



 @media only screen and (max-width: 991px) { 



 .sf-notopbar-notification .sf-notifications {	right: -120px; }



 .sf-notopbar-notification .sf-notifications.arrow-up:after { right:188px;}



 }



 @media only screen and (max-width: 650px) { 



 .sf-notopbar-notification .sf-notifications {	right:-150px; }



 .sf-notopbar-notification .sf-notifications.arrow-up:after { right:215px;}



 }



 @media only screen and (max-width: 480px) { 



 .sf-notopbar-notification .sf-notifications {	right:-176px; }



 .login-bx .sf-notification-list {	right: -150px; }



 .login-bx .sf-notification-list.arrow-up:after { right:160px; }



 }



 @media only screen and (max-width:360px) { 



 .sf-notopbar-notification .sf-notifications {	right:-190px; }



 }



 /*=== >language-list () ===*/



 .language-bx li {



     display: inline;



     margin: 0 10px;



 }



 /*=== > Notifications ===*/



 .sf-notifications span {



     display: inline-block;



     min-width: 18px;



     height: 18px;



     line-height: 18px;



     vertical-align: middle;



     padding: 0 2px;



     background-color: #FF2D32;



     color: #FFF;



     font-size: 10px !important;



     font-weight: 700;



     text-align: center;



     -webkit-border-radius: 50px;



     border-radius: 50px;



 }



 .fs-customer-status2:hover .dropdown-menu {



     display: block;



 }



 /*---------------------------------------------------------------



 21. LOGO ( company identify  symbol )



 ---------------------------------------------------------------*/



 /*=== >logo for header ===*/



 .logo-header {



     float: left;



     vertical-align: middle;



     padding: 0;



     <?php



     echo (service_finder_theme_get_data($data,'header-logo-title-fontsize') != '') ? 'font-size:'.service_finder_theme_get_data($data,'header-logo-title-fontsize').'px!important; ' : '';



 	



 	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	



 	echo (service_finder_theme_get_data($data['logo-margin'],'margin-top') != '') ? 'margin-top:'.service_finder_theme_get_data($data['logo-margin'],'margin-top').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin'],'margin-bottom') != '') ? 'margin-bottom:'.service_finder_theme_get_data($data['logo-margin'],'margin-bottom').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin'],'margin-left') != '') ? 'margin-left:'.service_finder_theme_get_data($data['logo-margin'],'margin-left').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin'],'margin-right') != '') ? 'margin-right:'.service_finder_theme_get_data($data['logo-margin'],'margin-right').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-dimensions'],'width') != '') ? 'width:'.service_finder_theme_get_data($data['logo-dimensions'],'width').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-dimensions'],'height') != '') ? 'height:'.service_finder_theme_get_data($data['logo-dimensions'],'height').'; ' : '';



 	?>



 }

 

 .logo-footer {



     float: left;



     vertical-align: middle;



     padding: 0;



     <?php



 	echo (service_finder_theme_get_data($data['footer-logo-margin'],'margin-top') != '') ? 'margin-top:'.service_finder_theme_get_data($data['footer-logo-margin'],'margin-top').'; ' : '';



 	echo (service_finder_theme_get_data($data['footer-logo-margin'],'margin-bottom') != '') ? 'margin-bottom:'.service_finder_theme_get_data($data['footer-logo-margin'],'margin-bottom').'; ' : '';



 	echo (service_finder_theme_get_data($data['footer-logo-margin'],'margin-left') != '') ? 'margin-left:'.service_finder_theme_get_data($data['footer-logo-margin'],'margin-left').'; ' : '';



 	echo (service_finder_theme_get_data($data['footer-logo-margin'],'margin-right') != '') ? 'margin-right:'.service_finder_theme_get_data($data['footer-logo-margin'],'margin-right').'; ' : '';



 	echo (service_finder_theme_get_data($data['footer-logo-dimensions'],'width') != '') ? 'width:'.service_finder_theme_get_data($data['footer-logo-dimensions'],'width').'; ' : '';



 	echo (service_finder_theme_get_data($data['footer-logo-dimensions'],'height') != '') ? 'height:'.service_finder_theme_get_data($data['footer-logo-dimensions'],'height').'; ' : '';



 	?>



 }

 

 



 .logo-header-inr {



 	display:table;



 	width:100%; 



 	height:100%;



 }



 .logo-header-inr a {



 	display:table-cell;



 }



 .logo-footer {



     float: left;



     vertical-align: middle;



     padding: 0;



     <?php



     echo (service_finder_theme_get_data($data,'footer-logo-title-fontsize') != '') ? 'font-size:'.service_finder_theme_get_data($data,'footer-logo-title-fontsize').'px!important; ' : '';



 	



 	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	



 	echo (service_finder_theme_get_data($data['logo-margin'],'margin-top') != '') ? 'margin-top:'.service_finder_theme_get_data($data['logo-margin'],'margin-top').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin'],'margin-bottom') != '') ? 'margin-bottom:'.service_finder_theme_get_data($data['logo-margin'],'margin-bottom').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin'],'margin-left') != '') ? 'margin-left:'.service_finder_theme_get_data($data['logo-margin'],'margin-left').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin'],'margin-right') != '') ? 'margin-right:'.service_finder_theme_get_data($data['logo-margin'],'margin-right').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-dimensions'],'width') != '') ? 'width:'.service_finder_theme_get_data($data['logo-dimensions'],'width').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-dimensions'],'height') != '') ? 'height:'.service_finder_theme_get_data($data['logo-dimensions'],'height').'; ' : '';



 	?>



 }



 @media only screen and (max-width: 767px) {



 .logo-header {



     float: left;



     vertical-align: middle;



     padding: 0;



     <?php



     echo (service_finder_theme_get_data($data,'header-logo-title-fontsize-mobile') != '') ? 'font-size:'.service_finder_theme_get_data($data,'header-logo-title-fontsize-mobile').'px!important; ' : '';



 	



 	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	



 	echo (service_finder_theme_get_data($data['logo-margin-mobile'],'margin-top') != '') ? 'margin-top:'.service_finder_theme_get_data($data['logo-margin-mobile'],'margin-top').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin-mobile'],'margin-bottom') != '') ? 'margin-bottom:'.service_finder_theme_get_data($data['logo-margin-mobile'],'margin-bottom').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin-mobile'],'margin-left') != '') ? 'margin-left:'.service_finder_theme_get_data($data['logo-margin-mobile'],'margin-left').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin-mobile'],'margin-right') != '') ? 'margin-right:'.service_finder_theme_get_data($data['logo-margin-mobile'],'margin-right').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-dimensions-mobile'],'width') != '') ? 'width:'.service_finder_theme_get_data($data['logo-dimensions-mobile'],'width').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-dimensions-mobile'],'height') != '') ? 'height:'.service_finder_theme_get_data($data['logo-dimensions-mobile'],'height').'; ' : '';



 	?>



 }



 .logo-footer {



     float: left;



     vertical-align: middle;



     padding: 0;



    <?php



     echo (service_finder_theme_get_data($data,'footer-logo-title-fontsize-mobile') != '') ? 'font-size:'.service_finder_theme_get_data($data,'footer-logo-title-fontsize-mobile').'px!important; ' : '';



 	



 	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	



 	echo (service_finder_theme_get_data($data['logo-margin-mobile'],'margin-top') != '') ? 'margin-top:'.service_finder_theme_get_data($data['logo-margin-mobile'],'margin-top').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin-mobile'],'margin-bottom') != '') ? 'margin-bottom:'.service_finder_theme_get_data($data['logo-margin-mobile'],'margin-bottom').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin-mobile'],'margin-left') != '') ? 'margin-left:'.service_finder_theme_get_data($data['logo-margin-mobile'],'margin-left').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-margin-mobile'],'margin-right') != '') ? 'margin-right:'.service_finder_theme_get_data($data['logo-margin-mobile'],'margin-right').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-dimensions-mobile'],'width') != '') ? 'width:'.service_finder_theme_get_data($data['logo-dimensions-mobile'],'width').'; ' : '';



 	echo (service_finder_theme_get_data($data['logo-dimensions-mobile'],'height') != '') ? 'height:'.service_finder_theme_get_data($data['logo-dimensions-mobile'],'height').'; ' : '';



 	?>



    



 }



 }



 .logo-header a,



 .logo-footer a {



     vertical-align: middle;



 }



 .logo-header a {



     color: <?php echo (!empty($data['header-logo-text-color'])) ? esc_html($data['header-logo-text-color']): ''; ?>;



 }



 .logo-footer a {



     color: <?php echo (!empty($data['footer-logo-text-color'])) ? esc_html($data['footer-logo-text-color']): ''; ?>;



 }



 .logo-header.center-block {



     margin-left: auto;



     margin-right: auto;



     float: none;



 }



 .logo-header img,



 .logo-footer img {



     max-width: 100%;



     height: auto;



     vertical-align: middle;



 }



 .logo-header span,



 .logo-footer span {



     font-size: 20px;



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     letter-spacing: 20px;



 }



 /*---------------------------------------------------------------



 22. MAIN BAR ( place logo & main-navigation )



 ---------------------------------------------------------------*/



 .main-bar {



 	background: #ffffff;



     width: 100%;



     transition: 0.8s top ease-in;



     -webkit-transition: 0.8s top ease-in;



     -moz-transition: 0.8s top ease-in;



     -ms-transition: 0.8s top ease-in;



     -o-transition: 0.8s top ease-in;



 }



 .sf-header-home  > .main-bar {



     background: <?php echo (!empty($data['navigation-bg-color'])) ? esc_html($data['navigation-bg-color']): ''; ?>;



 } 



 



 /*---------------------------------------------------------------



 23. NAVIGATIONS 



 	>mena-menu



 	>mobile-menu



 	>footer-menu



 ---------------------------------------------------------------*/



 /*== >mena-menu ==*/



 #header-part .navbar-toggle {



     border:none;



     margin: 24px 0;



     padding: 12px 10px;



 }



 #header-part .navbar-toggle span {



    <?php  echo (service_finder_theme_get_data($data,'mobile-menu-button-color') != '') ? 'background:'.service_finder_theme_get_data($data,'mobile-menu-button-color').'!important; ' : '';	?>



 	height:3px;



 }



 #header-part.is-sticky .navbar-toggle span {



    <?php  echo (service_finder_theme_get_data($data,'mobile-menu-button-color-sticky') != '') ? 'background:'.service_finder_theme_get_data($data,'mobile-menu-button-color-sticky').'!important; ' : '';	?>



 	height:3px;



 } 



 



 .header-nav {



     position: static;



     padding: 0;



 }



 .header-nav .nav {



     float: right;



 }



 .header-nav .nav i {



     font-size: 8px;



     margin-left: 3px;



     vertical-align: middle;



 }



 .header-nav .nav > li {



     margin: 0px;



     font-weight: 400;



     text-transform: uppercase;



     position: relative;



     font-weight: <?php echo (!empty($data['parent-navigation-menu-fontweight'])) ? esc_html($data['parent-navigation-menu-fontweight']): ''; ?>;



 }



 .header-nav .nav > li > a {



     border-radius: 0px;



     <?php



     echo (service_finder_theme_get_data($data,'navigation-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'navigation-text-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'parent-navigation-menu-fontsize') != '') ? 'font-size:'.service_finder_theme_get_data($data,'parent-navigation-menu-fontsize').'px; ' : '12px';



 	?>



     padding: 35px 15px;



     cursor: pointer;



 }



 .header-nav .nav > li > a:hover {



     background-color: transparent;



     <?php



     echo (service_finder_theme_get_data($data,'navigation-text-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'navigation-text-hover-color').'; ' : '';



 	?>



 }



 .header-nav .nav > li > a:active,



 .header-nav .nav > li > a:focus {



     background-color: transparent;



 }



 .header-nav .nav > li.active > a,



 .header-nav .nav > li.current-menu-item > a {



     background-color: transparent;



     <?php



     echo (service_finder_theme_get_data($data,'navigation-text-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'navigation-text-hover-color').'; ' : '';



 	?>



 }



 .header-nav .nav > li:hover > a {



     <?php



     echo (service_finder_theme_get_data($data,'navigation-text-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'navigation-text-hover-color').'!important; ' : '';



 	?>



 }



 .header-nav .nav > li:hover > .sub-menu,



 .header-nav .nav > li:hover > .mega-menu {



     opacity: 1;



     visibility: visible;



     -webkit-transition: opacity 0.s linear;



     -moz-transition: opacity 0.s linear;



     -o-transition: opacity 0.s linear;



     transition: opacity 0.s linear;



 }



 .header-nav .nav > li .sub-menu {



     <?php



     echo (service_finder_theme_get_data($data,'navigation-dropdown-bg') != '') ? 'background-color:'.service_finder_theme_get_data($data,'navigation-dropdown-bg').'; ' : '';



 	?>



     border: 1px solid #e9e9e9;



     display: block;



     left: 0;



     list-style: none;



     margin: 0px;



     opacity: 0;



     padding: 0px;



     position: absolute;



     visibility: hidden;



     width: 220px;



     z-index: 10;



 }



 .header-nav .nav > li .sub-menu li {



     border-bottom: 1px solid #e9e9e9;



     position: relative;



     font-weight: <?php echo (!empty($data['child-navigation-menu-fontweight'])) ? esc_html($data['child-navigation-menu-fontweight']): ''; ?>;



 }



 .header-nav .nav > li .sub-menu li a {



     color: <?php echo (!empty($data['navigation-dropdown-text-color'])) ? esc_html($data['navigation-dropdown-text-color']): ''; ?>;



     display: block;



     font-size: <?php echo (!empty($data['child-navigation-menu-fontsize'])) ? esc_html($data['child-navigation-menu-fontsize']).'px': '11px';



     ?>;



     padding: 10px 20px;



     text-transform: uppercase;



     transition: all 0.15s linear;



 }



 .header-nav .nav > li .sub-menu li a:hover {



     background-color: <?php echo (!empty($data['navigation-dropdown-hover-bg'])) ? esc_html($data['navigation-dropdown-hover-bg']): ''; ?>;



     color: <?php echo (!empty($data['navigation-dropdown-text-hover'])) ? esc_html($data['navigation-dropdown-text-hover']): ''; ?>;



     text-decoration: none;



 }



 .header-nav .nav > li .sub-menu li:last-child {



     border-bottom: 0px;



 }



 .header-nav .nav > li .sub-menu li .fa {



     color: #363636;



     display: block;



     float: right;



     position: absolute;



     right: 10px;



     top: 12px;



 }



 .header-nav .nav > li .sub-menu li:hover > a {



     color: <?php echo (!empty($data['navigation-dropdown-text-hover'])) ? esc_html($data['navigation-dropdown-text-hover']): ''; ?>;



 }



 .header-nav .nav > li .sub-menu li > .sub-menu {



     left: 220px;



 }



 .header-nav .nav > li .sub-menu li:hover > .sub-menu {



     left: 220px;



     margin: 0px;



     opacity: 1;



     top: -1px;



     visibility: visible;



     -webkit-transition: opacity 0.15s linear;



     -moz-transition: opacity 0.15s linear;



     -o-transition: opacity 0.15s linear;



     transition: opacity 0.15s linear;



 }



 .header-nav .nav > li .sub-menu li:hover > .sub-menu:before {



     background-color: transparent;



     bottom: 0px;



     content: '';



     display: block;



     height: 100%;



     left: -6px;



     position: absolute;



     top: 0px;



     width: 6px;



 }



 .header-nav .nav > li.has-mega-menu {



     position: inherit;



 }



 .header-nav .nav > li .mega-menu {



     background-color: <?php echo (!empty($data['navigation-dropdown-bg'])) ? esc_html($data['navigation-dropdown-bg']): ''; ?>;



     border: 1px solid #e9e9e9;



     display: table;



     left: 0px;



     list-style: none;



     opacity: 0;



     padding: 20px;



     position: absolute;



     right: 0px;



     visibility: hidden;



     width: 100%;



 }



 .header-nav .nav > li .mega-menu > li {



     display: table-cell;



     padding: 5px 0px;



     position: relative;



     vertical-align: top;



     width: 25%;



 }



 .header-nav .nav > li .mega-menu > li:after {



     background-color: #E9E9E9;



     bottom: 0px;



     content: '';



     display: block;



     height: 100%;



     margin: 0px 20px 0px 0px;



     position: absolute;



     right: 0px;



     top: 0px;



     width: 1px;



 }



 .header-nav .nav > li .mega-menu > li:last-child:after {



     display: none;



 }



 .header-nav .nav > li .mega-menu > li > a {



     color: #555555;



     display: block;



     font-size: 14px;



     margin: 0px;



     padding: 0px;



 }



 .header-nav .nav > li .mega-menu > li ul {



     list-style: none;



     margin: 10px 0px 0px 0px;



     padding: 0px;



 }



 .header-nav .nav > li .mega-menu > li ul a {



     color: <?php echo (!empty($data['navigation-dropdown-text-color'])) ? esc_html($data['navigation-dropdown-text-color']): ''; ?>;



     display: block;



     font-size: 11px;



     line-height: 34px;



     text-transform: uppercase;



 }



 .header-nav .nav > li .mega-menu > li ul a:hover {



     color: <?php echo (!empty($data['navigation-dropdown-text-hover'])) ? esc_html($data['navigation-dropdown-text-hover']): ''; ?>;



 }



 .header-nav .nav > li.menu-item-has-children:before {



     content: "\f078";



     display: block;



     font-family: "FontAwesome";



     right:3px;



     position: absolute;



     top: 50%;



     color: #999;



     margin-top: -8px;



     font-size: 8px;



 }



 



 



 /*-- Submenu direction---*/



 .header-nav .nav > li.submenu-direction .sub-menu {



 	left: auto;



 	right: 0;



 }



 .header-nav .nav > li.submenu-direction .sub-menu li > .sub-menu {



 	left:auto;



 	right:220px; 



 	margin:0 20px 0 0;



 }



 .header-nav .nav > li.submenu-direction .sub-menu li:hover > .sub-menu {



 	left:auto;



 	right:220px;



 	margin:0 0 0 0;



 }



 .has-child .open-close-btn {



     position:absolute;



     right:7px;



     top:9px;



     color:#555;



     background-color:transparent;



     z-index:999;



     cursor:pointer;



     padding:4px;



     font-size:18px;



     display:none;



 	width:26px;



 	text-align:center;



 	border:1px solid #ddd;



    background:#fff;



 }



 .has-child .has-child .open-close-btn {



     right:3px !important;



     top:4px !important;



 }



 .has-child li span[class*="fa-"]  {



     color:#555;



 }



 .has-child.nav-open > a+.open-close-btn.fa-angle-down:before {



  content:"\f105";



 }



 @media only screen and (max-width: 991px) {



 header .logo {



     display: block;



     padding: 4px 0;



 }



 .header-nav .nav > li > a {



     padding: ;



 }



 .header-nav .nav > li.menu-item-has-children:before {



 	right: 10px;



 	top: 0;



 	margin-top: 17px;



 	display:none;



 }



 .header-nav .nav > li .sub-menu {



     border-radius: 0px !important;



     -webkit-right-radius: 0 !important;



 }



 }



 @media only screen and (max-width: 991px) {



 /* responsive strat when media screen [991px] css START*/



 .navbar-header {



 	float: none;



 }



 .navbar-toggle {



 	display: block;



 }



 .navbar-collapse.collapse {



 	display: none!important;



 }



 .navbar-collapse.collapse.in {  /* NEW */



 	display: block!important; 



 }



 /* Responsive strat when medai screen [991px] css END*/



 .header-nav {



 	clear:both;



 	margin:0 -15px;



 	border-bottom:1px solid #E9E9E9;



    <?php



    echo (service_finder_theme_get_data($data,'mobile-navigation-bg-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'mobile-navigation-bg-color').'; ' : '';



	?>



 }



 .header-nav .nav{



 	float:none;



 	margin:0;



 	<?php



    echo (service_finder_theme_get_data($data,'mobile-navigation-bg-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'mobile-navigation-bg-color').'; ' : '';



	?>



 }



 .header-nav .extra-nav{



 	<?php



    echo (service_finder_theme_get_data($data,'mobile-navigation-bg-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'mobile-navigation-bg-color').'; ' : '';



	?>



 } 



 



 



 .header-nav .nav li {



 	float:none;



 }



 .header-nav .nav > li .sub-menu > li,



 .header-nav .nav > li .mega-menu > li {



 	float:none;



 	display:block;



 	width:auto;



 }



 .header-nav .nav  li .sub-menu > li a {



 	padding-left:30px;



 }



 .header-nav .nav > li > a {



 	padding: 12px 15px;



 	border:1px solid #E9E9E9 ;



 	margin-bottom:-1px;



 	<?php



    echo (service_finder_theme_get_data($data,'mobile-navigation-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-color').'; ' : '';



	?>



 }



 .header-nav .nav > li.active > a, 



 .header-nav .nav > li.current-menu-item > a {



    <?php



    echo (service_finder_theme_get_data($data,'mobile-navigation-text-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-hover-color').'; ' : '';



	?>



 }



 



  .header-nav .nav > li:hover > a {



	<?php



    echo (service_finder_theme_get_data($data,'mobile-navigation-text-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-hover-color').' !important; ' : '';



	?>



 }



 



 .header-nav .nav > li .sub-menu li a { 



 <?php



    echo (service_finder_theme_get_data($data,'mobile-navigation-dropdown-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-dropdown-text-color').'; ' : '';



	?>



 }



 .header-nav .nav > li .sub-menu li:hover > a { 



 <?php



    echo (service_finder_theme_get_data($data,'mobile-navigation-dropdown-text-hover') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-dropdown-text-hover').'; ' : '';



	?>



  }



 



.header-nav .nav > li .sub-menu li a:hover {



    <?php



    echo (service_finder_theme_get_data($data,'mobile-navigation-dropdown-hover-bg') != '') ? 'background-color:'.service_finder_theme_get_data($data,'mobile-navigation-dropdown-hover-bg').'; ' : '';



	?>



  }  



 .header-nav .nav i{



 	float:right;	



 }



 .header-nav .nav > li > a:hover,



 .header-nav .nav > li > a:active, 



 .header-nav .nav > li > a:focus {



    <?php



    echo (service_finder_theme_get_data($data,'mobile-navigation-bg-hover-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'mobile-navigation-bg-hover-color').'; ' : '';



	?>



 	text-decoration: none;



 }



 .header-nav .nav > li .mega-menu > li:after{



 	display:none;



 }



 .header-nav .nav > li ul,



 .header-nav .nav > li .sub-menu,



 .header-nav .nav > li .mega-menu {



 	display: none;



 	position: static;



 	visibility: visible;



 	width:auto;



 	<?php



     echo (service_finder_theme_get_data($data,'mobile-navigation-dropdown-bg') != '') ? 'background-color:'.service_finder_theme_get_data($data,'mobile-navigation-dropdown-bg').'; ' : '';



 	?>



 }



 .header-nav .nav > li ul.mega-menu ul {



 	display: block;



 }



 .header-nav .nav > li .mega-menu > li {



 	padding:0px;



 }



 .header-nav .nav > li ul.mega-menu li:hover ul {



 	display: block;



 }



 .header-nav .nav li.has-child {



     position:relative;



 }



 .header-nav .nav  li .sub-menu,



 .header-nav .nav  li .mega-menu {



     opacity:1;



     margin:0 !important;



 }



 .has-child .open-close-btn {



     display:block;



 }



 }



 /*= when header is sticky =*/



 .is-sticky .main-bar {



     position: fixed;



     top: 0;



     left: 0;



 }



 .is-sticky .logo-header {



     margin: 6px 0;



 }



 .is-sticky .header-nav .nav > li > a {



     padding: 25px 15px;



 }



 .is-sticky .extra-nav {



     padding: 15px 0;



 }



 @media only screen and (max-width:991px) {



 



.header-nav-left .extra-nav { background:none; }



.header-nav-left .extra-nav,



.header-nav-left .nav > li > a { border: 1px solid rgba(122, 122, 122, 0.23); }



 .extra-nav {



	display: -ms-flexbox; 



    display: flex; 



    -ms-flex-wrap: wrap; 



    flex-wrap: wrap;



    justify-content: center;



    align-items: center;



 	background-color:#fff;



 	width:100%;



 	text-align:center;



 	margin:0;



 	padding:0;



 	float:none;



     border:1px solid #E9E9E9;



 	margin-bottom:15px;



 }



 .extra-nav .extra-cell {



 	padding:5px;



    width:50%;



 }



.header-nav-left .extra-nav .extra-cell {



    width:auto;



} 



 



 .extra-nav .extra-cell .sf-booknow-btn {



	 padding: 7px 10px;



	font-size: 12px;



 }



 .is-sticky .extra-nav {



     float:none;



 	padding:0;



 }



 }



 @media only screen and (max-width: 991px) {



 .is-sticky .header-nav {



 	overflow: auto;



 	height: 250px;



 }



 .is-sticky#header-part .navbar-toggle {



 	margin: 15px 0;



 }



 }



 @media only screen and (max-width:480px) {



 .is-sticky#header-part .navbar-toggle {



 	margin: 15px 0 0;



 }



 }



 @media only screen and (max-width:991px) {



 .is-sticky .header-nav .nav > li > a {



 	padding: 12px 15px;



 }



 }



 



 /*= header full width =*/



 .sf-header-full-width .container {



     width: 100%;



 }



 



/*= Header style designs strat =*/



 



/*==============================



header style [1] & default



===============================*/







.header-style1.is-sticky .main-bar {  position: fixed;  background: <?php echo (!empty($data['navigation-bg-color-sticky'])) ? esc_html($data['navigation-bg-color-sticky']): '#fff'; ?>;  margin-top: 0;} 



 



.header-style1 .header-nav .nav > li > a,



.header-style1 .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-color'])) ? esc_html($data['navigation-text-color']): '#777777'; ?>; }







.header-style1.is-sticky .header-nav .nav > li > a,



.header-style1.is-sticky .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-color-sticky'])) ? esc_html($data['navigation-text-color-sticky']): '#777777'; ?>; }







 .header-style1 .header-nav .nav > li.active > a,



 .header-style1 .header-nav .nav > li.current-menu-item > a,



 .header-style1 .nav > li.current-menu-item.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']): ''; ?>; }



 



 .header-style1 .header-nav .nav > li:hover > a, 



 .header-style1 .nav > li:hover.menu-item-has-children:before,



 .header-style1.is-sticky .nav > li:hover.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']).'!important': ''; ?>; }



 







 @media only screen and (max-width: 991px) { 







.header-style2 .header-nav .nav > li > a,



.header-style2.is-sticky .header-nav .nav > li > a {	<?php  



		echo (service_finder_theme_get_data($data,'mobile-navigation-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-color').'; ' : '';



	?>  }



 



.header-style1 .header-nav .nav > li.active > a,



.header-style1 .header-nav .nav > li.current-menu-item > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']): ''; ?>; }   



    



.header-style1 .header-nav .nav > li:hover > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']).'!important': ''; ?>; }    



    



}  



 



/*=============================



header style [2] & center content



==============================*/



 .header-style2 .logo-header {



     margin-left: auto;



     margin-right: auto;



     margin-bottom: 0;



     float: none;



 	display:table;



 }



 .header-style2 .container {



     position: relative;



 }



 .header-style2 .nav-outer {



     display: table;



 }



 .header-style2 .main-bar-inr {



     display: table;



     margin: auto;



 }



 .header-style2 .header-nav {



     display: inline-block;



     float: left;



 }



 .header-style2 .header-nav .nav {



     float: none;



 }



 



.header-style2.is-sticky .main-bar {  position: fixed;  background: <?php echo (!empty($data['navigation-bg-color-sticky'])) ? esc_html($data['navigation-bg-color-sticky']): '#fff'; ?>;  margin-top: 0;} 



 



.header-style2 .header-nav .nav > li > a,



.header-style2 .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-color'])) ? esc_html($data['navigation-text-color']): '#777777'; ?>; }







.header-style2.is-sticky .header-nav .nav > li > a,



.header-style2.is-sticky .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-color-sticky'])) ? esc_html($data['navigation-text-color-sticky']): '#777777'; ?>; }







 .header-style2 .header-nav .nav > li.active > a,



 .header-style2 .header-nav .nav > li.current-menu-item > a,



 .header-style2 .nav > li.current-menu-item.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']): ''; ?>; }



 



 .header-style2 .header-nav .nav > li:hover > a, 



 .header-style2 .nav > li:hover.menu-item-has-children:before,



 .header-style2.is-sticky .nav > li:hover.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']).'!important': ''; ?>; }



 











 @media only screen and (max-width: 991px) { 







.header-style2 .extra-nav .extra-cell a.btn,



.header-style2.is-sticky .extra-nav .extra-cell a.btn { background-color: transparent; color: <?php echo (!empty($data['mobile-navigation-button-text-color'])) ? esc_html($data['mobile-navigation-button-text-color']): '#fff'; ?>; border: 2px solid <?php echo (!empty($data['mobile-navigation-button-border-color'])) ? esc_html($data['mobile-navigation-button-border-color']): '#fff'; ?>; margin-left: 5px; margin-right: 5px; padding: 4px 10px; }







.header-style2 .header-nav .nav > li > a,



.header-style2.is-sticky .header-nav .nav > li > a {	<?php  



		echo (service_finder_theme_get_data($data,'mobile-navigation-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-color').'; ' : '';



	?>  }



 



.header-style2 .header-nav .nav > li.active > a,



.header-style2 .header-nav .nav > li.current-menu-item > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']): ''; ?>; }   



    



.header-style2 .header-nav .nav > li:hover > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']).'!important': ''; ?>; }    



    



}   



 



 



 @media only screen and (max-width: 767px) {



 .header-style2 .navbar-toggle {



     position: static;



     margin: 0 auto 20px !important;



     float: none;



 }



 .header-style2 .nav-outer {



     display: block;



     padding: 22px 0 0;



 }



 }



 @media only screen and (max-width: 991px) {



 .header-style2 .header-nav {



     display: block;



     float: none;



 }



 .header-style2 .nav-outer {



     display: block;



 }



 #header-part.header-style2  .navbar-toggle {



     margin-left:auto;



 	margin-right:auto;



 	float:none;



 }



 }



 



 



/*============================



header style [3] & header transperent



=============================*/



 .header-style3 .main-bar {



     position: absolute;



     background: none;



 }



 



 .header-style3 .nav > li.menu-item-has-children::before {



     color: #FFF;



 } 



 .header-style3.is-sticky .nav > li.menu-item-has-children::before {	color: #999;}







 



.header-style3 .header-nav .nav > li > a,



 .header-style3 .header-nav .nav > li.menu-item-has-children::before {	color: <?php echo (!empty($data['navigation-text-color'])) ? esc_html($data['navigation-text-color']): '#FFF'; ?>; }







.header-style3.is-sticky .main-bar { position: fixed; background: <?php echo (!empty($data['navigation-bg-color-sticky'])) ? esc_html($data['navigation-bg-color-sticky']): '#fff'; ?>; }







.header-style3.is-sticky .header-nav .nav > li > a,



.header-style3.is-sticky .header-nav .nav > li.menu-item-has-children::before { color: <?php echo (!empty($data['navigation-text-color-sticky'])) ? esc_html($data['navigation-text-color-sticky']): '#777777'; ?>; }







.header-style3 .header-nav .nav > li.active > a,



.header-style3 .header-nav .nav > li.current-menu-item > a,



.header-style3 .nav > li.current-menu-item.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']): ''; ?>; }







.header-style3 .header-nav .nav > li:hover > a, 



.header-style3 .nav > li:hover.menu-item-has-children:before,



.header-style3.is-sticky .nav > li:hover.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']).'!important': ''; ?>; }



  







.header-style3 .navbar-toggle span { background: #FFF !important; }



.header-style3.is-sticky .navbar-toggle span { background: #666 !important;}







 @media only screen and (max-width: 991px) {



 .header-style3 .header-nav .nav > li > a {



     color: #555555;



 }



 .header-style3 .header-nav .nav > li.menu-item-has-children::before {



     color: #66666;



 }



 }



 



 @media only screen and (max-width: 991px) { 







.header-style3 .extra-nav .extra-cell a.btn,



.header-style3.is-sticky .extra-nav .extra-cell a.btn { background-color: transparent; color: <?php echo (!empty($data['mobile-navigation-button-text-color'])) ? esc_html($data['mobile-navigation-button-text-color']): '#fff'; ?>; border: 2px solid <?php echo (!empty($data['mobile-navigation-button-border-color'])) ? esc_html($data['mobile-navigation-button-border-color']): '#fff'; ?>; margin-left: 5px; margin-right: 5px; padding: 4px 10px; }







.header-style3 .header-nav .nav > li > a,



.header-style3.is-sticky .header-nav .nav > li > a {	<?php  



		echo (service_finder_theme_get_data($data,'mobile-navigation-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-color').'; ' : '';



	?>  }



 



.header-style3 .header-nav .nav > li.active > a,



.header-style3 .header-nav .nav > li.current-menu-item > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']): ''; ?>; }   



    



.header-style3 .header-nav .nav > li:hover > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']).'!important': ''; ?>; }    



    



}   



 



/*=============================



header style [4] & header white overlay 



==============================*/



 #header-part.header-style4 .navbar-toggle span {



 	background-color:#fff;



 }



 #header-part.header-style4.is-sticky .navbar-toggle span {



 	background-color:#666;



 }



 .header-style4.overlay-bg-white .main-bar {



     background-color:rgba(255,    255,    255,    <?php echo (isset($data['header-bg-opacity'])) ? esc_html($data['header-bg-opacity']): '';    ?>);



     position:absolute;



 }



 .header-style4.overlay-bg-white.is-sticky .main-bar {



     position: fixed;



     background: <?php echo (!empty($data['navigation-bg-color-sticky'])) ? esc_html($data['navigation-bg-color-sticky']): '#fff'; ?>;



 }



.header-style4 .header-nav .nav > li > a,



.header-style4 .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-color'])) ? esc_html($data['navigation-text-color']): '#777777'; ?>; } 







.header-style4.is-sticky .header-nav .nav > li > a,



.header-style4.is-sticky .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-color-sticky'])) ? esc_html($data['navigation-text-color-sticky']): '#777777'; ?>; }







.header-style4 .header-nav .nav > li.active > a,



.header-style4 .header-nav .nav > li.current-menu-item > a,



.header-style4 .nav > li.current-menu-item.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']): ''; ?>; }







.header-style4 .header-nav .nav > li:hover > a, 



.header-style4 .nav > li:hover.menu-item-has-children:before,



.header-style4.is-sticky .nav > li:hover.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']).'!important': ''; ?>; }



  



@media only screen and (max-width: 991px) { 







.header-style4 .extra-nav .extra-cell a.btn,



.header-style4.is-sticky .extra-nav .extra-cell a.btn { background-color: transparent; color: <?php echo (!empty($data['mobile-navigation-button-text-color'])) ? esc_html($data['mobile-navigation-button-text-color']): '#fff'; ?>; border: 2px solid <?php echo (!empty($data['mobile-navigation-button-border-color'])) ? esc_html($data['mobile-navigation-button-border-color']): '#fff'; ?>; margin-left: 5px; margin-right: 5px; padding: 4px 10px; }







.header-style4 .header-nav .nav > li > a,



.header-style4.is-sticky .header-nav .nav > li > a {	<?php  



		echo (service_finder_theme_get_data($data,'mobile-navigation-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-color').'; ' : '';



	?>  }



 



.header-style4 .header-nav .nav > li.active > a,



.header-style4 .header-nav .nav > li.current-menu-item > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']): ''; ?>; }   



    



.header-style4 .header-nav .nav > li:hover > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']).'!important': ''; ?>; }    



    



}   



  



  



/*===============================



header style [5] & header black overlay



================================ */



.header-style5.is-sticky .header-nav .nav > li.menu-item-has-children::before { color: #999; }



.header-style5.overlay-bg-black .navbar-toggle span {  background: #FFF !important; }



.header-style5.overlay-bg-black.is-sticky .navbar-toggle span {  background: #666 !important; }



 



.header-style5.overlay-bg-black.is-sticky .main-bar {  position: fixed;  background: <?php echo (!empty($data['navigation-bg-color-sticky'])) ? esc_html($data['navigation-bg-color-sticky']): '#fff'; ?>; }



.header-style5.overlay-bg-black .main-bar { background-color: rgba(0, 0, 0, <?php echo (isset($data['header-bg-opacity'])) ? esc_html($data['header-bg-opacity']): ''; ?>); position: absolute;}







.header-style5.overlay-bg-black .header-nav .nav > li > a,



.header-style5.overlay-bg-black .header-nav  .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-color'])) ? esc_html($data['navigation-text-color']): '#777777'; ?>; } 







.header-style5.overlay-bg-black.is-sticky .header-nav .nav > li > a,



.header-style5.overlay-bg-black.is-sticky .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-color-sticky'])) ? esc_html($data['navigation-text-color-sticky']): '#777777'; ?>; }







.header-style5.overlay-bg-black .header-nav .nav > li.active > a,



.header-style5.overlay-bg-black .header-nav .nav > li.current-menu-item > a,



.header-style5.overlay-bg-black .nav > li.current-menu-item.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']): ''; ?>; }







.header-style5.overlay-bg-black .header-nav .nav > li:hover > a, 



.header-style5.overlay-bg-black .nav > li:hover.menu-item-has-children:before,



.header-style5.overlay-bg-black.is-sticky .nav > li:hover.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']).'!important': ''; ?>; }



  



 



 



@media only screen and (max-width: 991px) { 







.header-style5.overlay-bg-black .extra-nav .extra-cell a.btn,



.header-style5.overlay-bg-black.is-sticky .extra-nav .extra-cell a.btn { background-color: transparent; color: <?php echo (!empty($data['mobile-navigation-button-text-color'])) ? esc_html($data['mobile-navigation-button-text-color']): '#fff'; ?>; border: 2px solid <?php echo (!empty($data['mobile-navigation-button-border-color'])) ? esc_html($data['mobile-navigation-button-border-color']): '#fff'; ?>; margin-left: 5px; margin-right: 5px; padding: 4px 10px; }







.header-style5.overlay-bg-black .header-nav .nav > li > a,



.header-style5.overlay-bg-black.is-sticky .header-nav .nav > li > a {	<?php  



		echo (service_finder_theme_get_data($data,'mobile-navigation-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-color').'; ' : '';



	?>  }



 



.header-style5.overlay-bg-black .header-nav .nav > li.active > a,



.header-style5.overlay-bg-black .header-nav .nav > li.current-menu-item > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']): ''; ?>; }   



    



.header-style5.overlay-bg-black .header-nav .nav > li:hover > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']).'!important': ''; ?>; }      







}



 



 



/*===============================



 header style [6] [transparent no top bar]



===============================*/



.header-style6 .extra-nav .extra-cell a.btn { background-color: transparent; color: <?php echo (!empty($data['navigation-button-text-color'])) ? esc_html($data['navigation-button-text-color']): '#fff'; ?>; border: 2px solid <?php echo (!empty($data['navigation-button-border-color'])) ? esc_html($data['navigation-button-border-color']): '#fff'; ?>; margin-left: 5px; margin-right: 5px; padding: 4px 10px; }



 



.header-style6.is-sticky .extra-nav .extra-cell a.btn {  background-color: transparent;  color: <?php echo (!empty($data['sticky-navigation-button-text-color'])) ? esc_html($data['sticky-navigation-button-text-color']): '#777777'; ?>;  border: 2px solid <?php echo (!empty($data['sticky-navigation-button-border-color'])) ? esc_html($data['sticky-navigation-button-border-color']): '#777777'; ?>; }  



  



.header-style6.is-sticky .main-bar {  position: fixed;  background: <?php echo (!empty($data['navigation-bg-color-sticky'])) ? esc_html($data['navigation-bg-color-sticky']): '#fff'; ?>;  margin-top: 0;}







.header-style6 .header-nav .nav > li > a,



.header-style6 .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-color'])) ? esc_html($data['navigation-text-color']): '#777777'; ?>; }







.header-style6.is-sticky .header-nav .nav > li > a,



.header-style6.is-sticky .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-color-sticky'])) ? esc_html($data['navigation-text-color-sticky']): '#777777'; ?>; }







 .header-style6 .header-nav .nav > li.active > a,



 .header-style6 .header-nav .nav > li.current-menu-item > a,



 .header-style6 .nav > li.current-menu-item.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']): ''; ?>; }



 



 .header-style6 .header-nav .nav > li:hover > a, 



 .header-style6 .nav > li:hover.menu-item-has-children:before,



 .header-style6.is-sticky .nav > li:hover.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']).'!important': ''; ?>; }



 



@media only screen and (max-width: 991px) { 







.header-style6 .extra-nav .extra-cell a.btn,



.header-style6.is-sticky .extra-nav .extra-cell a.btn { background-color: transparent; color: <?php echo (!empty($data['mobile-navigation-button-text-color'])) ? esc_html($data['mobile-navigation-button-text-color']): '#fff'; ?>; border: 2px solid <?php echo (!empty($data['mobile-navigation-button-border-color'])) ? esc_html($data['mobile-navigation-button-border-color']): '#fff'; ?>; margin-left: 5px; margin-right: 5px; padding: 4px 10px; }







.header-style6 .header-nav .nav > li > a,



.header-style6.is-sticky .header-nav .nav > li > a {	<?php  



		echo (service_finder_theme_get_data($data,'mobile-navigation-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-color').'; ' : '';



	?>  }



 



.header-style6 .header-nav .nav > li.active > a,



.header-style6 .header-nav .nav > li.current-menu-item > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']): ''; ?>; }   



    



.header-style6 .header-nav .nav > li:hover > a { color: <?php echo (!empty($data['mobile-navigation-text-hover-color'])) ? esc_html($data['mobile-navigation-text-hover-color']).'!important': ''; ?>; }    



    



} 



 



 



 



/*=============================

header style [7] [transparent no top bar]

==============================*/



.header-style7 .extra-nav .extra-cell a.btn { background-color: transparent; color: <?php echo (!empty($data['navigation-button-text-color'])) ? esc_html($data['navigation-button-text-color']): '#fff'; ?>; border: 2px solid <?php echo (!empty($data['navigation-button-border-color'])) ? esc_html($data['navigation-button-border-color']): '#fff'; ?>; margin-left: 5px; margin-right: 5px; padding: 4px 10px; } 



 .header-style7.is-sticky .extra-nav .extra-cell a.btn {  background-color: transparent;  color: <?php echo (!empty($data['sticky-navigation-button-text-color'])) ? esc_html($data['sticky-navigation-button-text-color']): '#777777'; ?>;  border: 2px solid <?php echo (!empty($data['sticky-navigation-button-border-color'])) ? esc_html($data['sticky-navigation-button-border-color']): '#777777'; ?>; }  



.header-style7 .main-bar { background-color: rgba(0, 0, 0, 0.0); position: absolute; top: 0; left: 0; padding-left: 20px; padding-right: 20px; margin-top: 15px; }

.header-style7 .header-nav .nav > li > a,

.header-style7 .header-nav .nav > li.menu-item-has-children::before { color: <?php echo (!empty($data['navigation-text-color'])) ? esc_html($data['navigation-text-color']): '#fff'; ?>; }



.header-style7.is-sticky .main-bar {  position: fixed;  background: <?php echo (!empty($data['navigation-bg-color-sticky'])) ? esc_html($data['navigation-bg-color-sticky']): '#fff'; ?>;  margin-top: 0;}



.header-style7.is-sticky .header-nav .nav > li > a,



.header-style7.is-sticky .header-nav .nav > li.menu-item-has-children::before { color: <?php echo (!empty($data['navigation-text-color-sticky'])) ? esc_html($data['navigation-text-color-sticky']): '#777777'; ?>; }



.header-style7 .navbar-toggle span { background: #FFF !important; } 



.header-style7 .header-nav .nav > li.active > a,



.header-style7 .header-nav .nav > li.current-menu-item > a,



.header-style7 .nav > li.current-menu-item.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']): ''; ?>; }



.header-style7 .header-nav .nav > li:hover > a, 



.header-style7 .nav > li:hover.menu-item-has-children:before,



.header-style7.is-sticky .nav > li:hover.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']).'!important': ''; ?>; }



 



@media only screen and (max-width: 991px) {



.header-style7.is-sticky .extra-nav .extra-cell a.btn,



.header-style7 .extra-nav .extra-cell a.btn { background-color: transparent; color: <?php echo (!empty($data['mobile-navigation-button-text-color'])) ? esc_html($data['mobile-navigation-button-text-color']): '#fff '; ?> !important; border: 2px solid <?php echo (!empty($data['mobile-navigation-button-border-color'])) ? esc_html($data['mobile-navigation-button-border-color']): '#fff'; ?> !important; margin-left: 5px; margin-right: 5px; padding: 4px 10px; }



.header-style7 .header-nav .nav > li > a {	<?php  



		echo (service_finder_theme_get_data($data,'mobile-navigation-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-color').'!important; ' : '';



	?>  }



 



.header-style7 .main-bar { margin-top: 0; padding-left: 0; padding-right: 0; }



.header-style7 .header-nav .nav > li > a,



.header-style7 .header-nav .nav > li.menu-item-has-children::before {color: #666666;}



}



@media only screen and (max-width: 480px) {



.header-style7 .extra-nav {  padding: 0; }



}











/*=============================

header style [8] [transparent no top bar]

==============================*/



.header-style8 .extra-nav .extra-cell a.btn { background-color:<?php echo (!empty($data['navigation-button-bg-color'])) ? esc_html($data['navigation-button-bg-color']) : '#fff'; ?>;  color: <?php echo (!empty($data['navigation-button-text-color'])) ? esc_html($data['navigation-button-text-color']): '#fff'; ?>; border: 2px solid <?php echo (!empty($data['navigation-button-border-color'])) ? esc_html($data['navigation-button-border-color']): '#fff'; ?>; margin-left: 5px; margin-right: 5px; padding:10px 20px; } 



 .header-style8.is-sticky .extra-nav .extra-cell a.btn {  background-color: <?php echo (!empty($data['sticky-navigation-button-bg-color'])) ? esc_html($data['sticky-navigation-button-bg-color']): ''; ?>;  color: <?php echo (!empty($data['sticky-navigation-button-text-color'])) ? esc_html($data['sticky-navigation-button-text-color']): '#777777'; ?>;  border: 2px solid <?php echo (!empty($data['sticky-navigation-button-border-color'])) ? esc_html($data['sticky-navigation-button-border-color']): '#777777'; ?>; }  



.header-style8.sf-header-inner .extra-nav .extra-cell a.btn { background-color:<?php echo (!empty($data['inner-navigation-button-bg-color'])) ? esc_html($data['inner-navigation-button-bg-color']): '#fff'; ?>;  padding:10px 20px; }  



.header-style8.is-sticky.sf-header-inner .extra-nav .extra-cell a.btn { background-color:<?php echo (!empty($data['sticky-inner-navigation-button-bg-color'])) ? esc_html($data['sticky-inner-navigation-button-bg-color']): '#fff'; ?>;  padding:10px 20px; }  

 



.header-style8 .main-bar { padding-left: 20px; padding-right: 20px;  }  

.home .header-style8 .main-bar { background-color: rgba(0, 0, 0, 0.0); position: absolute; top: 0; left: 0; }

.header-style8 .header-nav .nav > li > a,

.header-style8 .header-nav .nav > li.menu-item-has-children::before { color: <?php echo (!empty($data['navigation-text-color'])) ? esc_html($data['navigation-text-color']): '#fff'; ?>; }



.header-style8.is-sticky .main-bar {  position: fixed;  background: <?php echo (!empty($data['navigation-bg-color-sticky'])) ? esc_html($data['navigation-bg-color-sticky']): '#fff'; ?>;  margin-top: 0;}



.header-style8.is-sticky .header-nav .nav > li > a,

.header-style8.is-sticky .header-nav .nav > li.menu-item-has-children::before { color: <?php echo (!empty($data['navigation-text-color-sticky'])) ? esc_html($data['navigation-text-color-sticky']): '#777777'; ?>; }



.header-style8 .navbar-toggle span { background: #FFF !important; } 



.header-style8 .header-nav .nav > li.active > a,

.header-style8 .header-nav .nav > li.current-menu-item > a,



.header-style8 .nav > li.current-menu-item.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']): ''; ?>; }



.header-style8 .header-nav .nav > li:hover > a, 

.header-style8 .nav > li:hover.menu-item-has-children:before,



.header-style8.is-sticky .nav > li:hover.menu-item-has-children:before { color: <?php echo (!empty($data['navigation-text-hover-color'])) ? esc_html($data['navigation-text-hover-color']).'!important': ''; ?>; }

.header-style8.is-sticky .sf-header-logo { display:none; }

.header-style8 .sf-sticky-logo{ display:none; }
.header-style8.is-sticky .sf-sticky-logo { display:block; } 



@media only screen and (max-width: 991px) {



.header-style8.is-sticky .extra-nav .extra-cell a.btn,

.header-style8 .extra-nav .extra-cell a.btn { border-radius:10px; color: <?php echo (!empty($data['mobile-navigation-button-text-color'])) ? esc_html($data['mobile-navigation-button-text-color']): '#fff '; ?> !important; border: 2px solid <?php echo (!empty($data['mobile-navigation-button-border-color'])) ? esc_html($data['mobile-navigation-button-border-color']): '#fff'; ?> !important; margin-left: 5px; margin-right: 5px; padding: 4px 10px; background-color:<?php echo (!empty($data['navigation-button-background -color'])) ? esc_html($data['navigation-button-background-color']): '#fff'; ?>; }



.header-style8.sf-header-inner .extra-nav .extra-cell a.btn { background-color:<?php echo (!empty($data['mobile-inner-navigation-button-bg-color'])) ? esc_html($data['mobile-inner-navigation-button-bg-color']): '#fff'; ?>;  padding:10px 20px; }  



.header-style8 .header-nav .nav > li > a {	<?php 

		echo (service_finder_theme_get_data($data,'mobile-navigation-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'mobile-navigation-text-color').'!important; ' : '';

	?>  } 



.header-style8 .main-bar { margin-top: 0; padding-left: 0; padding-right: 0; }

.header-style8 .header-nav .nav > li > a,

.header-style8 .header-nav .nav > li.menu-item-has-children::before {color: #666666;}



}



@media only screen and (max-width: 480px) {

.header-style8 .extra-nav {  padding: 0; }

}







/*=====================

Nav left slide css

======================*/



.nav-left-slide-btn,



.nav-top-slide-btn { display:none; }	



 



@media only screen and (max-width: 991px) {



.nav-top-slide-btn{display:block;}



.left-nav-wrap .nav-left-slide-btn {display:block;}	



.left-nav-wrap .nav-top-slide-btn {display:none;}	



.sf-ltr .header-nav-left {position:fixed; top:0; left:-100%; width:240px; height:100%; min-height:100vh !important; margin:0 !important; overflow:auto !important; z-index:999;}



.header-nav-left.navbar-collapse.collapse { display:block !important;}



.body-overlay {position:fixed; top:0; left:0; width:100%; height:100%; min-height:100vh; background-color:#000; overflow:auto; z-index:888; opacity:0.8; cursor:url(inc/images/close-pic.png), auto;}



}



 /*---------------------------------------------------------------



 ineer Pages Header style



 ---------------------------------------------------------------*/



 /*== >mena-menu ==*/



 



.sf-header-inner#header-part .navbar-toggle span {



    <?php  echo (service_finder_theme_get_data($data,'mobile-inner-menu-button-color') != '') ? 'background:'.service_finder_theme_get_data($data,'mobile-inner-menu-button-color').'!important; ' : '';	?>



 	height:3px;



 }



.sf-header-inner#header-part.is-sticky .navbar-toggle span {



    <?php  echo (service_finder_theme_get_data($data,'mobile-inner-menu-button-color-sticky') != '') ? 'background:'.service_finder_theme_get_data($data,'mobile-inner-menu-button-color-sticky').'!important; ' : '';	?>



 	height:3px;



 } 



 



.sf-header-inner > .main-bar {



	background: <?php echo (!empty($data['inner-navigation-bg-color'])) ? esc_html($data['inner-navigation-bg-color']): ''; ?>;



}



.sf-header-inner.is-sticky > .main-bar {  position: fixed;  background: <?php echo (!empty($data['inner-navigation-bg-color-sticky'])) ? esc_html($data['inner-navigation-bg-color-sticky']): '#fff'; ?>;  margin-top: 0;}



.sf-header-inner.is-sticky .header-nav .nav > li > a,



.sf-header-inner.is-sticky .nav > li.menu-item-has-children:before {



     color: <?php echo (!empty($data['inner-navigation-text-color-sticky'])) ? esc_html($data['inner-navigation-text-color-sticky']): '#777777'; ?>;



}



 



.sf-header-inner .extra-nav .extra-cell a.btn { background-color: transparent; color: <?php echo (!empty($data['inner-navigation-button-text-color'])) ? esc_html($data['inner-navigation-button-text-color']): '#fff'; ?>; border: 2px solid <?php echo (!empty($data['inner-navigation-button-border-color'])) ? esc_html($data['inner-navigation-button-border-color']): '#fff'; ?>; margin-left: 5px; margin-right: 5px; padding: 4px 10px; }



 



.sf-header-inner.is-sticky .extra-nav .extra-cell a.btn {  background-color: transparent;  color: <?php echo (!empty($data['sticky-inner-navigation-button-text-color'])) ? esc_html($data['sticky-inner-navigation-button-text-color']): '#777777'; ?>;  border: 2px solid <?php echo (!empty($data['sticky-inner-navigation-button-border-color'])) ? esc_html($data['sticky-inner-navigation-button-border-color']): '#777777'; ?>; }  



 



.sf-header-inner .header-nav .nav > li {  font-weight: <?php echo (!empty($data['inner-parent-navigation-menu-fontweight'])) ? esc_html($data['inner-parent-navigation-menu-fontweight']): ''; ?>; }



 



.sf-header-inner .header-nav .nav > li > a { color: <?php echo (!empty($data['inner-navigation-text-color'])) ? esc_html($data['inner-navigation-text-color']): ''; ?>;



 font-size: <?php echo (!empty($data['inner-parent-navigation-menu-fontsize'])) ? esc_html($data['inner-parent-navigation-menu-fontsize']).'px': '12px'; ?>; }



.sf-header-inner .nav > li.menu-item-has-children:before { color: <?php echo (!empty($data['inner-navigation-text-color'])) ? esc_html($data['inner-navigation-text-color']): '#777777'; ?>; }     



     



 .sf-header-inner .header-nav .nav > li > a:hover  { color: <?php echo (!empty($data['inner-navigation-text-hover-color'])) ? esc_html($data['inner-navigation-text-hover-color']): ''; ?>; }



 



 .sf-header-inner .header-nav .nav > li.active > a,



 .sf-header-inner .header-nav .nav > li.current-menu-item > a,



 .sf-header-inner .nav > li.current-menu-item.menu-item-has-children:before { color: <?php echo (!empty($data['inner-navigation-text-hover-color'])) ? esc_html($data['inner-navigation-text-hover-color']): ''; ?>; }



 



 .sf-header-inner .header-nav .nav > li:hover > a,



 .sf-header-inner .nav > li:hover.menu-item-has-children:before,



  .sf-header-inner.is-sticky .nav > li:hover.menu-item-has-children:before { color: <?php echo (!empty($data['inner-navigation-text-hover-color'])) ? esc_html($data['inner-navigation-text-hover-color']).'!important': ''; ?>; }



 



 .sf-header-inner .header-nav .nav > li .sub-menu { background-color: <?php echo (!empty($data['inner-navigation-dropdown-bg'])) ? esc_html($data['inner-navigation-dropdown-bg']): ''; ?>; }



 .sf-header-inner .header-nav .nav > li .sub-menu li { font-weight: <?php echo (!empty($data['inner-child-navigation-menu-fontweight'])) ? esc_html($data['inner-child-navigation-menu-fontweight']): ''; ?>;}



 .sf-header-inner .header-nav .nav > li .sub-menu li a {  color: <?php echo (!empty($data['inner-navigation-dropdown-text-color'])) ? esc_html($data['inner-navigation-dropdown-text-color']): ''; ?>;



     font-size: <?php echo (!empty($data['inner-child-navigation-menu-fontsize'])) ? esc_html($data['inner-child-navigation-menu-fontsize']).'px': '11px'; ?>; }



     



 .sf-header-inner .header-nav .nav > li .sub-menu li a:hover { background-color: <?php echo (!empty($data['inner-navigation-dropdown-hover-bg'])) ? esc_html($data['inner-navigation-dropdown-hover-bg']): ''; ?>; color: <?php echo (!empty($data['inner-navigation-dropdown-text-hover'])) ? esc_html($data['inner-navigation-dropdown-text-hover']): ''; ?>; }



 .sf-header-inner .header-nav .nav > li .mega-menu { background-color: <?php echo (!empty($data['inner-navigation-dropdown-bg'])) ? esc_html($data['inner-navigation-dropdown-bg']): ''; ?>; }



 



 



@media only screen and (max-width: 991px) {



 #header-part.sf-header-inner .extra-nav .extra-cell a.btn, 



 #header-part.sf-header-inner.is-sticky .extra-nav .extra-cell a.btn { background-color: transparent; color: <?php echo (!empty($data['mobile-inner-navigation-button-text-color'])) ? esc_html($data['mobile-inner-navigation-button-text-color']): '#fff'; ?>; border: 2px solid <?php echo (!empty($data['mobile-inner-navigation-button-border-color'])) ? esc_html($data['mobile-inner-navigation-button-border-color']): '#fff'; ?>;  }



 



 #header-part.sf-header-inner .header-nav .nav > li > a,



 #header-part.sf-header-inner.is-sticky .header-nav .nav > li > a { color: <?php echo (!empty($data['mobile-inner-navigation-text-color'])) ? esc_html($data['mobile-inner-navigation-text-color']): ''; ?>; }



 



 #header-part.sf-header-inner .header-nav .nav > li > a:hover,



 #header-part.sf-header-inner.is-sticky .nav > li.menu-item-has-children:before  { color: <?php echo (!empty($data['mobile-inner-navigation-text-hover-color'])) ? esc_html($data['mobile-inner-navigation-text-hover-color']): ''; ?>; }



 



 #header-part.sf-header-inner .header-nav .nav > li.active > a,



 #header-part.sf-header-inner .header-nav .nav > li.current-menu-item > a { color: <?php echo (!empty($data['mobile-inner-navigation-text-hover-color'])) ? esc_html($data['mobile-inner-navigation-text-hover-color']): ''; ?>; }



 #header-part.sf-header-inner .header-nav .nav > li:hover > a { color: <?php echo (!empty($data['mobile-inner-navigation-text-hover-color'])) ? esc_html($data['mobile-inner-navigation-text-hover-color']).'!important': ''; ?>; }



 #header-part.sf-header-inner .header-nav .nav > li .sub-menu { background-color: <?php echo (!empty($data['mobile-inner-navigation-dropdown-bg'])) ? esc_html($data['mobile-inner-navigation-dropdown-bg']): ''; ?>; }



 #header-part.sf-header-inner .header-nav .nav > li .sub-menu li a {  color: <?php echo (!empty($data['mobile-inner-navigation-dropdown-text-color'])) ? esc_html($data['mobile-inner-navigation-dropdown-text-color']): ''; ?>;



}



     



 .sf-header-inner .header-nav .nav > li .sub-menu li a:hover { background-color: <?php echo (!empty($data['mobile-inner-navigation-dropdown-hover-bg'])) ? esc_html($data['mobile-inner-navigation-dropdown-hover-bg']): ''; ?>; color: <?php echo (!empty($data['mobile-inner-navigation-dropdown-text-hover'])) ? esc_html($data['mobile-inner-navigation-dropdown-text-hover']): ''; ?>; }



 .sf-header-inner .header-nav .nav > li .mega-menu { background-color: <?php echo (!empty($data['mobile-inner-navigation-dropdown-bg'])) ? esc_html($data['mobile-inner-navigation-dropdown-bg']): ''; ?>; }



}



 /*---------------------------------------------------------------



 24. BANNER



 ---------------------------------------------------------------*/



 .sf-banner-row,



 .sf-banner-outer {



     position: relative;



     min-height: 150px;



 }



 .sf-bnr-pic {



     width: 100%;



     overflow: hidden;



 }



 .sf-bnr-pic > img {



     width: 100%;



     height: auto;



     display: block;



 }



 .sf-bnr-text {



     position: absolute;



     left: 0;



     top: 35%;



     width: 100%;



     margin: 0;



     font-family: <?php echo (!empty($data['banner-heading-text']['font-family'])) ? esc_html($data['banner-heading-text']['font-family']): ''; ?>;



     color: #FFFFFF;



 }



.sf-bnr-text strong,

.sf-banner-two .sf-bnr-text .text-top-line {



     display: block;



     <?php 



 	echo (service_finder_theme_get_data($data['banner-heading-text'],'font-weight') != '') ? 'font-weight:'.service_finder_theme_get_data($data['banner-heading-text'],'font-weight').'; ' : '';



 	echo (service_finder_theme_get_data($data['banner-heading-text'],'font-size') != '') ? 'font-size:'.service_finder_theme_get_data($data['banner-heading-text'],'font-size').'; ' : '';



 	echo (service_finder_theme_get_data($data['banner-heading-text'],'line-height') != '') ? 'line-height:'.service_finder_theme_get_data($data['banner-heading-text'],'line-height').'; ' : '';



 	echo (service_finder_theme_get_data($data['banner-heading-text'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['banner-heading-text'],'color').'; ' : '';



 	echo (service_finder_theme_get_data($data['banner-heading-text'],'text-transform') != '') ? 'text-transform:'.service_finder_theme_get_data($data['banner-heading-text'],'text-transform').'; '  : '';



 	 ?>



 }



.sf-bnr-text span,

.sf-banner-two .sf-bnr-text .text-bot-line {



     <?php 



 	echo (service_finder_theme_get_data($data['banner-sub-heading-text'],'font-family') != '') ? 'font-family:'.service_finder_theme_get_data($data['banner-sub-heading-text'],'font-family').'; ' : '';



 	echo (service_finder_theme_get_data($data['banner-sub-heading-text'],'font-weight') != '') ? 'font-weight:'.service_finder_theme_get_data($data['banner-sub-heading-text'],'font-weight').'; ' : '';



 	echo (service_finder_theme_get_data($data['banner-sub-heading-text'],'font-size') != '') ? 'font-size:'.service_finder_theme_get_data($data['banner-sub-heading-text'],'font-size').'; ' : '';



 	echo (service_finder_theme_get_data($data['banner-sub-heading-text'],'line-height') != '') ? 'line-height:'.service_finder_theme_get_data($data['banner-sub-heading-text'],'line-height').'; ' : '';



 	echo (service_finder_theme_get_data($data['banner-sub-heading-text'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['banner-sub-heading-text'],'color').'; ' : '';



 	echo (service_finder_theme_get_data($data['banner-sub-heading-text'],'text-transform') != '') ? 'text-transform:'.service_finder_theme_get_data($data['banner-sub-heading-text'],'text-transform').'; '  : '';



 	 ?>



 }



 @media only screen and (max-width: 1440px) {



 .sf-bnr-text {



     top: 30%;



 }



 }



 @media only screen and (max-width: 1200px) {



 .sf-bnr-text {



 	top: 40%;



 }



 .sf-bnr-text strong {



     font-size: 60px;



     line-height: 60px;



     margin: 0 0 15px;



 }



 .sf-bnr-text span {



     font-size: 20px;



     line-height: 24px;



 }



 }



 @media only screen and (max-width: 991px) {



 .sf-bnr-text {



 	height:100%;



 }



 .sf-bnr-text .container {



 	vertical-align:middle;



 }



 .sf-bnr-text strong {



     font-size: 50px;



     line-height: 50px;



     margin: 0 0 10px;



 }



 }



 @media only screen and (max-width: 767px) {



     .sf-bnr-text strong {



         font-size: 40px;



         line-height: 40px;



         margin: 0 0 0;



     }



 }



 @media only screen and (max-width: 680px) {



     .sf-bnr-text strong {



         font-size: 30px;



         line-height: 30px;



         margin: 0 0 0;



     }



     .sf-bnr-text span {



         font-size: 14px;



         line-height: 18px;



     }



     .sf-header-style-7 .sf-bnr-text {



         top: 60%;



     }



 }



 @media only screen and (max-width: 480px) {



     .sf-bnr-pic > img {



         width: 150%;



         max-width: 150%;



         margin-left: -25%;



     }



     .sf-bnr-text strong {



         font-size: 20px;



         line-height: 20px;



     }



     .sf-bnr-text span {



         font-size: 12px;



         line-height: 16px;



     }



 }



 @media only screen and (max-width: 420px) {



     .sf-bnr-pic > img {



         width: 250%;



         max-width: 250%;



         margin-left: -75%;



     }



 }



 /*== > Revolution Slider ==*/



 .sf-rev-slider-wrap {position:relative;}



 /*== > inner page banner ==*/



 .banner-inner-row {

     height: 400px;

     background-size: cover;

     background-position: center center;

     position: relative;

 }



 @media only screen and (max-width: 1400px) {

     .banner-inner-row {

         height: 380px;

     }

 }



 @media only screen and (max-width: 767px) {

     .banner-inner-row {

         height: 250px;

     }

 }



 .banner-inner-row h1,



 .banner-inner-row h2,



 .banner-inner-row h3,



 .banner-inner-row h4,



 .banner-inner-row h5,



 .banner-inner-row h6 {



     color: #FFF;



 }



 .banner-inner-row .sf-find-bar {



     z-index: 1;



     margin: 0;



 }



 .search-form .category-select ul li a span {



     font-weight: 600;



 }



 .search-form .category-select ul li a span.childcat {



     font-weight: 400;



     color: #7c7c7c;



 }



 .search-form .category-select ul li.active a span.childcat {



     color: #FFFFFF;



 }



 .search-form .category-select ul li img {



     width: 36px;



     height: 36px;



     margin-right: 5px;



     border-radius: 100%;



     -webkit-border-radius: 100%;



 }



 .search-form .category-select .filter-option img {



     width: 20px;



     height: 20px;



     margin-right: 5px;



     border-radius: 100%;



     -webkit-border-radius: 100%;



 }



 .search-form .bootstrap-select .btn {



     padding-left: 10px;



 }



 /*== >  Provider banner off ==*/



 .banner-inner-row.provider-banner-off {



     height: 270px;



     background-image: url("inc/images/pattern/pattern1.jpg") !important;



     background-repeat: repeat;



     background-size: auto;



 }



 .provider-banner-off.overlay-black-middle::after {



     opacity: 0.1;



 }



 @media only screen and (max-width: 980px) {



     .banner-inner-row.provider-banner-off {



         height: 385px;



     }



 }



 @media only screen and (max-width: 767px) {



     .banner-inner-row.provider-banner-off {



         height: 0;



     }



 }



 /*service find bar demo1 */



 .sf-search-benner {



     position: relative;



 }



 .sf-search-benner {



     position: relative;



 }



 .sf-find-bar {



     position: absolute;



     left: 0;



     width: 100%;



     z-index: 50;



 }



 .sf-find-bar.pos-v-center {



     top: 55%;



 }



 .sf-find-bar.pos-v-bottom {



     top: auto;



     bottom: 0;



 }



 .sf-find-bar-inr {



     position: absolute;



     left: 0;



     bottom: 0;



     width: 100%;



     z-index: 50;



 }



 .sf-find-bar .search-form,



 .sf-find-bar-inr .search-form {



     padding:23px 10px;



     position:relative;



 }



 .sf-find-bar .search-form:before,



 .sf-find-bar-inr .search-form:before {



     content: "";



     position: absolute;



     left: 0;



     top: 0;



     width: 100%;



     height: 100%;



     background: <?php echo (!empty($data['search-bar-bg-color'])) ? esc_html($data['search-bar-bg-color']): ''; ?>;



     opacity: <?php echo (isset($data['search-bar-bg-opacity'])) ? esc_html($data['search-bar-bg-opacity']): ''; ?>;



 }



 .sf-find-bar .bootstrap-select.btn-group .dropdown-menu.inner,



 .sf-find-bar-inr .bootstrap-select.btn-group .dropdown-menu.inner {



     max-height: 356px !important;



 }



 .sf-find-bar .bootstrap-select .dropdown-toggle,



 .sf-find-bar-inr .bootstrap-select .dropdown-toggle {



     border: 1px solid #fff !important;



 }



 .sf-find-bar .type-address .form-control,



 .sf-find-bar-inr .type-address .form-control {



     border-color: #fff;



 }



 .sf-find-bar .search-col-8,



 .sf-find-bar-inr .search-col-8 { width: 12.444% ; }



 .sf-find-bar .search-col-7,



 .sf-find-bar-inr .search-col-7 { width: 14.222%;}



 .sf-find-bar .search-col-6,



 .sf-find-bar-inr .search-col-6 { width: 16.6667%;}



 .sf-find-bar .search-col-5,



 .sf-find-bar-inr .search-col-5 { width: 20%;}



 .sf-find-bar .search-col-4,



 .sf-find-bar-inr .search-col-4 { width: 25%;}



 .sf-search-validate { background: #fff none repeat scroll 0 0; color: #FF7174; font-size: 13px; height: 100%; left: 0; line-height: 16px; overflow: hidden; padding: 10px 15px; position: absolute; top: 0; width: 100%; padding-top:40px; text-align:center; }



 @media only screen and (max-width: 1200px) {



 .sf-find-bar .search-col-6 { width: 33.333%; margin: 5px 0; }



 .sf-find-bar .search-col-8 .btn-search-result,



 .sf-find-bar-inr .search-col-8 .btn-search-result { font-size:12px !important; padding:13px 5px !important; }



 }



 @media only screen and (max-width: 991px) {



 .col-md-9.search-col-1 { 



 	margin-bottom:15px;



 }	



 .sf-find-bar {



     position: static;



 }



 .sf-find-bar .search-col-5 {



     width: 50%;



     margin-bottom: 15px;



 }



 .sf-find-bar .col-sm-12.search-col-5 {



     width: 100%;



 }



 .sf-find-bar-inr .search-col-5 {



     margin-bottom: 15px;



 }



 .sf-find-bar .search-col-3 {



     margin-bottom: 10px;



 }



 .sf-find-bar .col-sm-12.search-col-3 {



     margin-bottom: 0;



 }



 .sf-find-bar .search-col-7,



 .sf-find-bar-inr .search-col-7 { width: 33.333%; margin:5px 0px; }



 .sf-find-bar .search-col-7:last-child,



 .sf-find-bar-inr .search-col-7:last-child { width: 100%; }



 .sf-find-bar .search-col-8,



 .sf-find-bar-inr .search-col-8 { width:25% ; margin:5px 0px; }



 }



 @media only screen and (max-width: 767px) {



 .sf-find-bar .search-col-4,



 .sf-find-bar-inr .search-col-4 { width: 33.333%; float:left; margin:5px 0px;}



 .sf-find-bar .search-col-4:last-child,



 .sf-find-bar-inr .search-col-4:last-child { width:100%;}



 .sf-find-bar .search-col-7,



 .sf-find-bar-inr .search-col-7 { width: 50%; float:left; }	



 .sf-find-bar .search-col-8,



 .sf-find-bar-inr .search-col-8 { width:50%; float:left; }



 .sf-find-bar .search-col-6 {



     width: 100%;



     margin: 0 0 10px



 }



 .sf-find-bar .col-sm-12.search-col-6 {



     width: 100%;



     margin: 0



 }



 .sf-find-bar .search-col-5 {



     float: left;



     margin-bottom: 10px;



 }



 .sf-find-bar .col-sm-12.search-col-5 {



     clear: both;



 }



 .sf-find-bar .search-col-5 {



     margin-bottom: 10px;



     width: 100%;



     float: none;



 }



 .sf-find-bar .col-sm-12.search-col-5 {



     clear: both;



 }



 }



 @media only screen and (max-width:550px) {



 .sf-find-bar .search-col-4,



 .sf-find-bar-inr .search-col-4 { width: 100%; }	



 }



 /*== Search Bar inner page==*/



 .sf-find-bar-inr .search-col-5 {



     width: 20%;



 }



 .sf-find-bar-inr .search-col-6 {



     width: 16.6667%;



 }



 @media only screen and (max-width: 991px) {



 .sf-find-bar-inr .search-col-3 {



     width: 50%;



     margin-bottom: 10px;



 }



 .sf-find-bar-inr .col-sm-12.search-col-3 {



     width: 100%;



     margin-bottom: 0;



 }



 .sf-find-bar-inr .search-col-6,



 .sf-find-bar-inr .search-col-5 {



     width: 50%;



     margin-bottom: 10px;



 }



 .sf-find-bar-inr .col-sm-12.search-col-5 {



     width: 100%;



     margin-bottom: 0;



 }



 }



 @media only screen and (max-width: 767px) {



 .sf-find-bar-inr .search-col-3 {



     width: 100%;



 }



 .sf-find-bar-inr .search-col-5 {



     width: 100%;



     float: none;



 }



 .sf-find-bar-inr .search-col-6 {



     width: 100%;



     margin-bottom: 10px;



 }



 .sf-find-bar-inr .col-sm-12.search-col-6 {



     margin-bottom: 0;



 }



 .sf-find-bar-inr {



     position: static;



 }



 .sf-find-bar-inr > .container {



     padding-left: 0;



     padding-right: 0;



 }



 }



 /*---------------------------------------------------------------



 25. SLIDER



 	>rs slider



 	>owl slider



 ---------------------------------------------------------------*/



 /*== >rs slider ==*/



 .tp-caption .font-weight-300 {



     font-weight: 300;



 }



 .tp-caption .font-weight-400 {



     font-weight: 400;



 }



 .tp-caption .font-weight-500 {



     font-weight: 500;



 }



 .tp-caption .font-weight-600 {



     font-weight: 600;



 }



 .tp-caption .font-weight-700 {



     font-weight: 700;



 }



 .tp-caption .font-weight-800 {



     font-weight: 800;



 }



 .tp-caption .font-weight-900 {



     font-weight: 900;



 }



 .tp-caption .btn {



     font-weight: 600;



     text-transform: uppercase;



 }



 .tp-caption .btn-lg {



     padding-left: 80px;



     padding-right: 80px;



 }



 .tp-caption h1,



 .tp-caption h2,



 .tp-caption h3,



 .tp-caption h4,



 .tp-caption h5,



 .tp-caption h6 {



     font-weight: 800;



     margin-bottom: 24px;



     color: #FFFFFF;



 }



 .tp-caption h1 {



     font-size: 70px;



     line-height: 60px;



 }



 .tp-caption h2 {



     font-size: 60px;



     line-height: 50px;



 }



 .tp-caption h3 {



     font-size: 50px;



     line-height: 40px;



     margin-bottom: 20px;



 }



 .tp-caption h4 {



     font-size: 40px;



     line-height: 30px;



     margin-bottom: 15px;



 }



 .tp-caption h5 {



     font-size: 30px;



     line-height: 4px;



     margin-bottom: 10px;



 }



 .tp-caption h6 {



     font-size: 20px;



     line-height: 22px;



     margin-bottom: 10px;



 }



 .tp-caption h4,



 .tp-caption h5,



 .tp-caption h6 {



     font-weight: 600;



 }



 a.btn {



     color: #FFF;



 }



 a.btn:hover,



 a.btn:focus,



 a.btn:active {



     color: #FFF;



 }



 /*== >owl slider ==*/



 /* next pre btn */



 .owl-carousel .owl-stage { margin:auto; }



 .owl-theme .owl-controls { margin-top: 40px;  text-align: center; }



 .owl-theme .owl-controls .owl-nav .owl-prev,



 .owl-theme .owl-controls .owl-nav .owl-next { font-size: 13px; margin: 0 5px; padding:7px 12px; display: inline-block; cursor: pointer;}



 .owl-theme .owl-controls .owl-nav .owl-prev:hover,



 .owl-theme .owl-controls .owl-nav .owl-next:hover { text-decoration: none; }



 .owl-theme .owl-controls .owl-nav .disabled { opacity: .5; cursor: default }



 /* owl dots button */



 .owl-theme .owl-dots .owl-dot { display: inline-block;  zoom: 1;  *display: inline }



 .owl-theme .owl-dots .owl-dot span {  width: 10px; height: 10px; margin: 5px 7px; background: #d6d6d6; display: block; -webkit-backface-visibility: visible; -webkit-transition: opacity 200ms ease;    -moz-transition: opacity 200ms ease; -ms-transition: opacity 200ms ease; -o-transition: opacity 200ms ease; transition: opacity 200ms ease; -webkit-border-radius: 30px; -moz-border-radius: 30px;



 border-radius: 30px }



 .owl-theme .owl-dots .owl-dot.active span,



 .owl-theme .owl-dots .owl-dot:hover span { background: #72c529 }



 .owl-btn-center-lr .owl-controls {  margin: 0;}



 .owl-btn-center-lr .owl-controls .owl-nav .owl-prev,



 .owl-btn-center-lr .owl-controls .owl-nav .owl-next { position: absolute; left: 0;  top: 50%; margin: -17px 0; }



 .owl-btn-center-lr .owl-controls .owl-nav .owl-next { left: auto; right: 0; }



 .owl-carousel .owl-item img {   transform-style: inherit; }



 .galley-details { position: relative; }



 .galley-details img {  width: 100%; height: auto; }



 .gallery-thums { margin: 20px 0 0; padding: 0 50px;}



 .gallery-thums .item { padding: 0 5px;}



 /*---------------------------------------------------------------



 26. MAP BANNER



 ---------------------------------------------------------------*/



 .sf-map-row {



     position: relative;



 }



 #gmap_wrapper {



     position: relative;



 }



 .gmap_home {



     height: <?php echo (!empty($data['map-height-desktop'])) ? esc_html($data['map-height-desktop']).'px': '600px';



     ?>;



 }



 @media only screen and (max-width: 768px) {



     .gmap_home {



         height: <?php echo (!empty($data['map-height-ipad'])) ? esc_html($data['map-height-ipad']).'px': '650px';



         ?>;



     }



 }



 @media only screen and (max-width: 767px) {



     .gmap_home {



         height: <?php echo (!empty($data['map-height-mobile'])) ? esc_html($data['map-height-mobile']).'px': '350px';



         ?>;



     }



 }



 #no-result {



     position: absolute;



     left: 25%;



     bottom: 35%;



     width: 270px;



     color: #FFF;



     font-size: 23px;



     font-weight: 800;



     text-transform: uppercase;



     margin: -20px -100px;



     padding: 20px 10px;



     background: rgba(0, 0, 0, 0.4);



 }



 #no-result .container {



     width: auto;



 }



 /*= Map marker =*/



 .map-marker {



     background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     /*background-image: linear-gradient(#00d2b8, #009f8b);*/



     



     border-radius: 40px 40px 4px 40px;



     height: 40px;



     display: block;



     position: relative;



     top: 0px;



     transition: top .15s linear;



     width: 40px;



     cursor: pointer;



     -moz-transform: rotate(45deg);



     -webkit-transform: rotate(45deg);



     -o-transform: rotate(45deg);



     -ms-transform: rotate(45deg);



     transform: rotate(45deg);



 }



 .map-marker:before {



     background-color: rgba(0, 0, 0, 0.13);



     border-radius: 50%;



     bottom: -3px;



     left: 28px;



     width: 25px;



     content: '';



     height: 5px;



     position: absolute;



     transition: all .15s linear;



     -moz-transform: rotate(-45deg);



     -webkit-transform: rotate(-45deg);



     -o-transform: rotate(-45deg);



     -ms-transform: rotate(-45deg);



     transform: rotate(-45deg);



 }



 .map-marker:after {} .map-marker:hover {



     top: -4px;



 }



 .map-marker:hover:before {



     bottom: -6px;



     left: 34px;



     width: 18px;



 }



 .map-marker:hover {



     top: -4px;



     -moz-transform: scale(1.4) rotate(45deg);



     -webkit-transform: scale(1.4) rotate(45deg);



     -o-transform: scale(1.4) rotate(45deg);



     -ms-transform: scale(1.4) rotate(45deg);



     transform: scale(1.4) rotate(45deg);



 }



 .map-marker.active:hover {



     bottom: -6px;



     left: 34px;



     width: 18px;



 }



 .map-marker.active {



     top: -4px;



     -moz-transform: scale(1.4) rotate(45deg);



     -webkit-transform: scale(1.4) rotate(45deg);



     -o-transform: scale(1.4) rotate(45deg);



     -ms-transform: scale(1.4) rotate(45deg);



     transform: scale(1.4) rotate(45deg);



 }



 .map-marker.active:before {



     bottom: -6px;



     left: 34px;



     width: 18px;



 }



 .map-marker .icon {



     background: #333333;



     display: block;



     width: 28px;



     height: 28px;



     line-height: 28px;



     margin: 0px auto;



     padding: 4px;



     position: relative;



     overflow: hidden;



     text-align: center;



     top: 6px;



     left: 0;



     border: 2px solid #FFF;



     border-radius: 100%;



     -webkit-border-radius: 100%;



     -moz-transform: rotate(-45deg);



     -webkit-transform: rotate(-45deg);



     -o-transform: rotate(-45deg);



     -ms-transform: rotate(-45deg);



     transform: rotate(-45deg);



 }



 .map-marker .icon img {



     max-width: 100%;



     height: auto;



     display: block;



 }



 .cluster .cluster-inner {



     width: 30px !important;



     height: 30px;



     line-height: 28px !important;



     background: <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



     border: 2px solid #FFF;



     font-size: 13px !important;



     border-radius: 100%;



     -webkit-border-radius: 100%;



 }



 .cluster .cluster-inner {



     -webkit-animation: as-basic-fast 2s linear infinite;



     -moz-animation: as-basic-fast 2s linear infinite;



     animation: as-basic-fast 2s linear infinite;



 }



 .cluster:hover .cluster-inner {



     -moz-transform: scale(1.1);



     -webkit-transform: scale(1.1);



     -o-transform: scale(1.1);



     -ms-transform: scale(1.1);



     transform: scale(1.1);



 }



 @keyframes as-basic-fast {



     0%, 100% {



         -webkit-box-shadow: 0 0 0 3px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



         -moz-box-shadow: 0 0 0 3px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



         box-shadow: 0 0 0 3px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



     }



     50% {



         -webkit-box-shadow: 0 0 0 5px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



         -moz-box-shadow: 0 0 0 5px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



         box-shadow: 0 0 0 5px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



     }



 }



 @-webkit-keyframes as-basic-fast / Safari and Chrome / {



     0%, 100% {



         -webkit-box-shadow: 0 0 0 3px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



         -moz-box-shadow: 0 0 0 3px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



         box-shadow: 0 0 0 3px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



     }



     50% {



         -webkit-box-shadow: 0 0 0 5px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



         -moz-box-shadow: 0 0 0 5px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



         box-shadow: 0 0 0 5px <?php echo (!empty($data['map-color-cluster'])) ? esc_html($data['map-color-cluster']): ''; ?>;



     }



 }



 /*= Map infobox =*/



 .info_details {



     padding: 0px;



     width: 320px;



     height: 152px;



     margin-top: -210px;



     margin-left: -160px;



     position: absolute;



     background: #ffffff;



     box-shadow: 1px 1px 48px #ccc;



     box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.39);



     padding: 6px;



 }



 .info_details:after {



     top: 100%;



     border: solid transparent;



     content: " ";



     height: 0;



     width: 0;



     position: absolute;



     border-top-color: #fff;



     border-width: 15px;



     left: 50%;



     margin-left: -15px;



 }



 .contact_info_details {



     height: 120px;



     margin-top: -8px;



     margin-left: -64px;



 }



 .contact_info_details h2 {



     font-size: 30px;



     color: #b881fc;



     background-color: #fff;



     float: left;



     width: 100%;



     text-align: center;



 }



 .info_details img {



     max-width: 100%;



     width: 100%;



     height: auto;



     float: left;



     max-height: 200px;



 }



 #infocloser {



     position: absolute;



     width: 18px;



     height: 18px;



     z-index: 999999;



     background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     cursor: pointer;



     top: 6px;



     left: 6px;



     text-align: center;



     color: #fff



 }



 .infoimage {



     width: 140px;



     height: 140px;



     float: left;



     margin-right: 15px;



     background-size: cover;



     background-position: 50% 50%;



     border-top-left-radius: 3px;



     border-top-right-radius: 3px;



 }



 #infobox_title {



     display: block;



     font-size: 16px;



     line-height: 1.1em;



     color: #707070;



     text-transform: uppercase;



     padding: 5px 0px;



     font-weight: 700;



 }



 .map-company {



     font-size: 13px;



     line-height: 16px;



     color: #707070;



     padding: 0 0px 5px;



 }



 .map-address {



     padding-top: 5px;



     padding-right: 5px;



 }



 #infobox_title:hover,



 .info_details a:hover {



     color: #3396D1;



 }



 .map-category {



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     color: #fff;



     display: inline;



     font-size: 12px;



     font-weight: 800;



     margin-bottom: 10px;



     padding: 0 5px;



     text-transform: uppercase;



 }



 #info_inside {



     padding-left: 13px;



     float: left;



     font-size: 14px;



     margin-top: 13px;



     color: #717374;



     width: 100%;



 }



 .prop_detailsx {



     float: left;



     display: inline;



     font-size: 14px!important;



     color: #8A8F9A;



     padding: 11px 15px 7px 15px;



     background-color: #fff;



     box-sizing: border-box;



     -moz-box-sizing: border-box;



     margin-top: 0px;



     font-weight: 400!important;



     font-family: 'Raleway', sans-serif;



 }



 #googleMapSlider .prop_detailsx {



     margin-top: 2px;



 }



 .prop_pricex {



     float: left;



     display: inline;



     color: #fff;



     color: #009F8B;



     font-size: 20px;



     opacity: 1;



     line-height: 0px;



     position: absolute;



     right: 15px;



     bottom: 68px;



     font-weight: 700;



     font-family: 'Open Sans', sans-serif;



 }



 .infogradient {



     display: none;



     width: 100%;



     height: 66px;



     position: absolute;



     top: 74px;



     left: 0px;



     /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#2b313e+0,282f3d+100&amp;0+0,1+82 */



     



     background: -moz-linear-gradient(top, rgba(43, 49, 62, 0) 0%, rgba(41, 47, 61, 1) 82%, rgba(40, 47, 61, 1) 100%);



     /* FF3.6+ */



     



     background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(43, 49, 62, 0)), color-stop(82%, rgba(41, 47, 61, 1)), color-stop(100%, rgba(40, 47, 61, 1)));



     /* Chrome,Safari4+ */



     



     background: -webkit-linear-gradient(top, rgba(43, 49, 62, 0) 0%, rgba(41, 47, 61, 1) 82%, rgba(40, 47, 61, 1) 100%);



     /* Chrome10+,Safari5.1+ */



     



     background: -o-linear-gradient(top, rgba(43, 49, 62, 0) 0%, rgba(41, 47, 61, 1) 82%, rgba(40, 47, 61, 1) 100%);



     /* Opera 11.10+ */



     



     background: -ms-linear-gradient(top, rgba(43, 49, 62, 0) 0%, rgba(41, 47, 61, 1) 82%, rgba(40, 47, 61, 1) 100%);



     /* IE10+ */



     



     background: linear-gradient(to bottom, rgba(43, 49, 62, 0) 0%, rgba(41, 47, 61, 1) 82%, rgba(40, 47, 61, 1) 100%);



     /* W3C */



     



     filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#002b313e', endColorstr='#282f3d', GradientType=0);



     /* IE6-9 */



 }



 .infodetails {



     position: relative;



     float: right;



     margin-top: 15px;



     margin-right: 12px;



     margin-left: 0px;



     color: #8A8F9A;



 }



 /*= Map controls =*/



 #gmap-controls-wrapper {



     width: 36px;



     position: absolute;



     top: 50%;



     left: 20px;



     margin-top: -55px;



     z-index: 9;



     pointer-events: none;



 }



 .provider-map #gmap-controls-wrapper {



     width: 30px;



     top: auto;



     left: auto;



     right: 20px;



     bottom: 20px;



     margin: 0;



 }



 .provider-map #gmap-controls-wrapper [id*="gma"] {



     width: 30px;



     height: 24px;



     line-height: 24px;



     font-size: 10px;



     margin-bottom: 2px;



 }



 @media only screen and (max-width: 767px) {



     #gmap-controls-wrapper {



         width: 32px;



         top: auto;



         bottom: 15px;



         left: 15px;



         margin-top: 0;



     }



 }



 #gmapzoomplus,



 #gmapzoomminus,



 #geolocation-button,



 #gmap-full,



 #gmap-prev,



 #gmap-next {



     pointer-events: auto;



 }



 #geolocation-button,



 #gmap-full,



 #gmap-next,



 #gmap-prev,



 #gmapstreet,



 #gmapzoomplus,



 #gmapzoomminus {



     background-color: #333;



     color: #FFFFFF;



     font-size: 10px;



     width: 30px;



     height: 26px;



     line-height: 24px;



     text-align: center;



     border: 1px solid #333;



     z-index: 99;



     -webkit-transition: all 0.2s ease;



     -moz-transition: all 0.2s ease;



     -o-transition: all 0.2s ease;



     transition: all 0.2s ease;



     pointer-events: auto;



     float: left;



     margin-bottom: 2px;



     cursor: pointer;



 }



 @media only screen and (max-width: 767px) {



     #geolocation-button,



     #gmap-full,



     #gmap-next,



     #gmap-prev,



     #gmapstreet,



     #gmapzoomplus,



     #gmapzoomminus {



         width: 32px;



     }



 }



 #gmap-controls-wrapper.fullscreenon {



     z-index: 99999;



     position: fixed;



 }



 .google_map_on_list_wrapper {



     position: relative;



     width: 100%;



     float: left;



 }



 .google_map_on_list_wrapper #gmapzoomminus {



     position: absolute;



     top: 15px;



     left: 52px;



 }



 .google_map_on_list_wrapper #gmapzoomplus {



     position: absolute;



     top: 15px;



     left: 15px;



 }



 .google_map_on_list_wrapper #gmapstreet {



     position: absolute;



     top: 15px;



     left: 89px;



 }



 .boxed .google_map_on_list_wrapper #gmapzoomplus {



     left: 24px;



 }



 .boxed .google_map_on_list_wrapper #gmapzoomminus {



     left: 61px;



 }



 .boxed .google_map_on_list_wrapper #gmapstreet {



     left: 98px;



 }



 #gmapzoomminus.smallslidecontrol {



     left: 15px;



     top: 96px;



     padding-top: 5px;



     display: none;



 }



 #gmapzoomplus.smallslidecontrol {



     top: 63px;



     left: 15px;



     padding-top: 5px;



     display: none;



 }



 #gmap-control-list {



     position: absolute;



     top: 0px;



     right: 0px;



     width: 100%;



     height: 60px;



     box-sizing: border-box;



     z-index: 100;



     text-align: left;



     opacity: 1;



     padding: 10px 10px 0px 10px;



     z-index: 1;



 }



 /* Map Full Screen */



 .full-screen-map {



     position: fixed;



     width: 100%;



     height: 100%;



     left: 0;



     top: 0;



 }



 .full-screen-map .search-result-listing {



     z-index: 0;



 }



 .full-screen-map #header-part {



     z-index: 1;



 }



 .full-screen-map #no-result {



     position: absolute;



     left: 50%;



     bottom: 50%;



     width: 270px;



     margin: -20px -135px;



 }



 .fullmap {



     height: 100%;



     left: 0;



     margin: 0;



     padding: 0;



     position: fixed !important;



     top: 0;



     width: 100%;



     z-index: 99;



 }



 /*---------------------------------------------------------------



 26. PAGINATION 



 ---------------------------------------------------------------*/



 /* pagination style-1 */



 .pagination-bx .pagination,



 .cvf-universal-pagination .pagination {



     margin: 0;



 }



 .pagination {



     padding: 10px 0;



 }



 .pagination > li:first-child > a,



 .pagination > li:first-child > span {



     border-bottom-left-radius: 0;



     border-top-left-radius: 0;



     margin-left: 0;



 }



 .pagination > li:last-child > a,



 .pagination > li:last-child > span {



     border-bottom-right-radius: 0;



     border-top-right-radius: 0;



 }



 .pagination > li > a,



 .pagination > li > span {



     background-color: #fff;



     border: 1px solid #e0e0e0;



     color: #767676;



     padding: 8px 14px;



     font-weight: 600;



     font-size: 12px;



 }



 .pagination > li > a:hover,



 .pagination > li > span:hover,



 .pagination > li > a:focus,



 .pagination > li > span:focus {



     background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     border: 1px solid rgba(0, 0, 0, 0.2);



     color: #fff;



 }



 .pagination > .active > a,



 .pagination > .active > span,



 .pagination > .active > a:hover,



 .pagination > .active > span:hover,



 .pagination > .active > a:focus,



 .pagination > .active > span:focus {



     background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     border: 1px solid rgba(0, 0, 0, 0.2);



 }



 .pagination > .previous > a,



 .pagination > .next > a {



     padding: 8px 14px;



     font-size: 12px;



 }



 /*DataTable  pagination */



 .dataTables_paginate ul.pagination {



     margin: 0;



 }



 .dataTables_paginate .pagination > li {



     padding: 0;



 }



 /*---------------------------------------------------------------



 27. FOOTER 



 ---------------------------------------------------------------*/



 footer h1,



 footer h2,



 footer h3,



 footer h4,



 footer h5,



 footer h6 {



    color: <?php echo (!empty($data['top-footer-text-color'])) ? esc_html($data['top-footer-text-color']): ''; ?>;



 }



 #footer {



     font-size: <?php echo (!empty($data['footer-fontsize'])) ? esc_html($data['footer-fontsize']).'px': ''; ?>;



 }



 footer a,



 footer a:visited {



     color: <?php echo (!empty($data['top-footer-link-color'])) ? esc_html($data['top-footer-link-color']): ''; ?>;



 }



 footer a:active,



 footer a:focus,



 footer a:hover {



     color: <?php echo (!empty($data['top-footer-link-hover-color'])) ? esc_html($data['top-footer-link-hover-color']): ''; ?>;



 }



 footer#footer {



     background-position: center;



     background-size: cover;



 	margin-top:-1px;



 }



 .sf-top-footer-overlay,



 .sf-bottom-footer-overlay {



     position: relative;



 }



 .sf-top-footer-overlay .container,



 .sf-bottom-footer-overlay .container {



     position: relative;



     z-index: 1;



 }



 .sf-top-footer-overlay:before,



 .sf-bottom-footer-overlay:before {



     content: "";



     background: #000;



     position: absolute;



     top: 0;



     left: 0;



     width: 100%;



     height: 100%;



 }



 .sf-top-footer-overlay:before {



     opacity: <?php echo (isset($data['footer-bg-opacity'])) ? esc_html($data['footer-bg-opacity']): ''; ?>;



 }



 .sf-bottom-footer-overlay:before {



     opacity: <?php echo (isset($data['bottom-footer-bg-opacity'])) ? esc_html($data['bottom-footer-bg-opacity']): ''; ?>;



 }



 footer p {



     color: #fff;



     line-height: 22px;



     margin-bottom: 10px;



 }



 footer p a {



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 footer .widget ul {



     list-style: none;



     margin-top: 5px;



     margin-left: 0;



     margin-right: 0;



     margin-bottom: 0;



 }



 .widget {} .widget i.fa {



     margin-right: 5px;



 }



 .widget-title {



     margin: 15px 0 25px;



 }



 .widget-title:after {



     content: "";



     width: 50px;



     height: 2px;



     display: block;



     margin: 10px 0;



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 #footer .widget_categories ul li:before,



 #footer .widget_archive ul li:before,



 #footer .widget_meta ul li:before,



 #footer .widget_pages ul li:before,



 #footer .widget_recent_comments ul li:before,



 #footer .widget_nav_menu ul li:before,



 #footer .widget_recent_entries ul li:before,



 #footer .widget_service_finder_providers_cities li:before {



     font-family: "FontAwesome";



     content: "\f0da";



     color: <?php echo (!empty($data['top-footer-text-color'])) ? esc_html($data['top-footer-text-color']): ''; ?>;



     position: absolute;



     left: 0;



     top: 10px;



     display: block;



 }



 #footer .widget_categories li,



 #footer .widget_meta li,



 #footer .widget_recent_comments li,



 #footer .widget_archive li,



 #footer .widget_pages li,



 #footer .widget_nav_menu li,



 #footer .widget_recent_entries li,



 #footer .widget_service_finder_providers_cities li {



     position: relative;



     padding: 10px 10px 10px 15px;



     border-bottom: 1px dashed <?php echo (!empty($data['top-footer-text-bottom-border-color'])) ? esc_html($data['top-footer-text-bottom-border-color']): ''; ?>;



     color: #FFF;



 }



 #footer .widget_categories li:last-child,



 #footer .widget_meta li:last-child,



 #footer .widget_recent_comments li:last-child,



 #footer .widget_archive li:last-child,



 #footer .widget_pages li:last-child,



 #footer .widget_nav_menu li:last-child,



 #footer .widget_recent_entries li:last-child,



 #footer .widget_service_finder_providers_cities li:last-child {



     border-bottom: none;



 }



 #footer .widget_categories li li,



 #footer .widget_meta li li,



 #footer .widget_recent_comments li li,



 #footer .widget_archive li li,



 #footer .widget_pages li li,



 #footer .widget_nav_menu li li,



 #footer .widget_recent_entries li li {



     border-bottom: none;



     padding-left: 7px;



     padding-right: 5px;



     padding-top: 0;



     padding-bottom: 0;



     line-height: 28px;



 }



 #footer .widget_categories li li:before,



 #footer .widget_meta li li:before,



 #footer .widget_recent_comments li li:before,



 #footer .widget_archive li li:before,



 #footer .widget_pages li li:before,



 #footer .widget_nav_menu li li:before,



 #footer .widget_recent_entries li li:before {



     top: 0;



     left: -12px;



 }



 /* Recent posts & Recent tweets */



 .recent-posts-entry li:last-child,



 .tweets-feed-entry li:last-child {



     border-bottom: none;



 }



 .recent-posts-entry li,



 .tweets-feed-entry li {



     margin-bottom: 0;



     min-height: 96px;



     padding-bottom: 12px;



     padding-top: 10px;



     width: 100%;



     clear: both;



     border-bottom: 1px dashed #3d3d3d;



 }



 .recent-posts-entry p,



 .tweets-feed-entry p {



     margin: 0 0 2px;



 }



 .recent-posts-entry .post-date,



 .tweets-feed-entry .tweet-date {



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     font-size: 12px;



     font-style: italic;



 }



 .recent-posts-entry .post-thum-bx {



     width: 70px;



     float: left;



     margin-top: 3px;



     margin-right: 15px;



     border: 1px solid #FFF;



 }



 .recent-posts-entry .post-title {



     margin: 0 0 2px;



 }



 .recent-posts-entry .post-text-bx {



     margin-left: 75px;



 }



 .tweets-feed-entry .post-date {



     color: #08c7a6;



     font-size: 12px;



     font-style: italic;



 }



 .tweets-feed-entry a {



     color: #08c7a6;



 }



 .recent-posts-entry ul li.no-img-post {



     min-height: 60px;



 }



 .recent-posts-entry ul li.no-img-post .post-thum-bx {



     display: none;



 }



 .recent-posts-entry ul li.no-img-post .post-text-bx {



     margin-left: 0;



 }



 /* footer Mata */



 /* footer Tags  */



 #footer .widget_tag_cloud a {



     padding: 8px 10px;



     background-color: #e6e6e6;



     font-size: 12px;



     display: inline-block;



     margin: 0 0 5px;



     color: #555555;



 }



 #footer .widget_tag_cloud a:hover {



     background-color: #CCCCCC;



 }



 /*Twitter Recent feeds*/



 #footer .tweet_algo .twit-text {



     padding: 0 0 10px;



 }



 #footer .tweet_algo .twit-info strong {



     text-transform: uppercase;



 }



 #footer .tweet_algo .twit-info strong:after {



     content: "/";



     padding-left: 3px;



 }



 /*Footer Archive*/



 #footer .widget_archive label {



     display: block;



 }



 #footer .widget_archive select {



     width: 100%;



     border: 1px solid #CCC;



     padding: 5px;



 }



 /*Footer categories*/



 .widget_categories select {



     width: 100%;



     padding: 5px;



     border: 1px solid #CCC;



 }



 .widget_archive .bootstrap-select ul li,



 .widget_text .bootstrap-select ul li,



 .widget_categories .bootstrap-select ul li {



     padding: 0 !important;



 }



 .widget_archive .bootstrap-select ul li:before,



 .widget_text .bootstrap-select ul li:before,



 .widget_categories .bootstrap-select ul li:before {



     display: none;



 }



 /*Footer Widget RSS */



 #footer .widget_rss li {



     border-bottom: 1px dashed #313131;



     padding-bottom: 10px;



     margin-bottom: 10px;



 }



 #footer .widget_rss .rsswidget {



     text-transform: uppercase;



     font-weight: 600;



     color: #fff;



 }



 #footer .widget_rss .rss-date {



     color: #999;



 }



 #footer .widget_rss .rssSummary {



     padding: 5px 0;



     color: #fff;



 }



 #footer .widget_rss cite {



     color: #3396d1;



 }



 /*Footer calender */



 #footer .widget_calendar tfoot tr td a {



     background-color: transparent;



 }



 #footer .widget_calendar caption:after,



 #footer .widget_calendar caption {



     color: #FFF;



 }



 /* footer logo */



 .widget_text .f-logo {



     margin: 15px 0;



 }



 /* Company info */



 .widget_company_info,



 .footer-1-col {



     text-align: center;



 }



 .footer-1-col,



 .widget_company_info .f-logo,



 .socila-box list-inline {



     display: inline-block;



 }



 .footer-1-col .sf-site-liks {



  margin:40px 0;



 }



 .widget_company_info .sf-site-liks {



     margin: 10px 0 20px;



 }



 .footer-1-col .widget-title::after { margin-left:auto; margin-right:auto; }



 .footer-top {



     background: <?php echo (!empty($data['footer-background-color'])) ? esc_html($data['footer-background-color']): ''; ?>;



     background-size: cover;



     background-position: center;



     padding: 50px 0;



     



     color: <?php echo (!empty($data['top-footer-text-color'])) ? esc_html($data['top-footer-text-color']): ''; ?>;



 }



 .footer-top p{



     color: <?php echo (!empty($data['top-footer-text-color'])) ? esc_html($data['top-footer-text-color']): ''; ?>;



 }



 .footer-top a{



     color: <?php echo (!empty($data['top-footer-link-color'])) ? esc_html($data['top-footer-link-color']): ''; ?>;



 }



 .footer-bottom {



     background: <?php echo (!empty($data['bottom-footer-bg-color'])) ? esc_html($data['bottom-footer-bg-color']): ''; ?>;



     padding: 30px 0;



     color: <?php echo (!empty($data['bottom-footer-text-color'])) ? esc_html($data['bottom-footer-text-color']): ''; ?>;



 }



 .footer-bottom .socila-box {



     margin-bottom: 0;



 }



 .footer-bottom .socila-box a{



    color: <?php echo (!empty($data['bottom-footer-text-color'])) ? esc_html($data['bottom-footer-text-color']): ''; ?>;



 }



 @media only screen and (max-width: 767px) {



     .footer-bottom [class*="col-"] {



         width: 100%;



         float: none;



         text-align: center;



     }



     .footer-bottom [class*="col-"]:first-child {



         margin-bottom: 15px;



     }



     .footer-bottom .socila-box {



         float: none !important;



     }



 }



 /* scroll top btn css */



 button.scroltop {



     background: #161616;



     border: none;



     position: fixed;



     right: 10px;



     bottom: 20px;



     color: #fff;



     margin: 0;



     cursor: pointer;



     display: none;



     height: 30px;



     width: 30px;



     padding: 8px;



     text-align: center;



     -webkit-border-radius: 50px;



     border-radius: 50px;



     z-index:999;



 }



@media only screen and (max-width: 991px) {



#footer .container { width: 100%; padding-left: 30px; padding-right: 30px; }



#footer .footer-4-col { width: 50%; margin-bottom: 40px; }



}



@media only screen and (max-width: 767px) {



.footer-clear { display: block !important; clear: both; }



#footer .footer-4-col { width: 100%; }



#footer .footer-3-col { width: 100%; }



#footer .footer-2-col { width: 100%; }	 



#footer .footer-1-col { width: 100%; }	 



.footer-bottom [class*="clo-"] { width: 100%; }



}



 /*---------------------------------------------------------------



 28. PAGE-CONTENT



 ---------------------------------------------------------------*/



 .page-wraper {



     background: #f7f8fa;



 }



 .page-content {



     margin-top: 0;



     padding-bottom: 50px;



 }



 .section-full {



     padding: 80px 0;



     position: relative;



     background-repeat: no-repeat;



     background-size: cover;



     -webkit-backface-visibility: hidden;



     -webkit-transform: translate3d(0, 0, 0);



 }



 .section-full > .container {



     z-index: 1;



     position: relative;



 }



 .section-full:last-child {



     margin-bottom: -50px;



 }



 @media only screen and (max-width: 1024px) {



     .section-full {



         background-attachment: scroll !important;



     }



 }



 @media only screen and (max-width: 991px) {



     .page-content {



         margin-top: 0;



     }



     .section-full {



         padding: 50px 0;



     }



 }



 /*== >How Service Finder Works ==*/



 .how-sf-work .icon-bx {



     margin-bottom: 5px;



 }



 .how-sf-work .sf-element-bx .shadow-bx {



     width: 100px;



     margin: auto;



 }



 .how-sf-work .sf-element-bx .shadow-bx img {



     width: 100%;



 }



 .how-sf-work p {



     margin-bottom: 10px;



     line-height: 20px;



 }



 .how-sf-work .sf-element-bx .step-no-bx {



     font-size: 72px;



     color: #eaeaea;



     font-weight: 700;



     font-family: Arial;



 }



 .how-sf-work .sf-element-bx:hover .icon-bx-lg {



     -moz-transform: translateY(-10px);



     -webkit-transform: translateY(-10px);



     -o-transform: translateY(-10px);



     -ms-transform: translateY(-10px);



     transform: translateY(-10px);



 }



 .how-sf-work .sf-element-bx:hover .shadow-bx {



     width: 50px;



 }



 .how-sf-work .sf-element-bx:hover .step-no-bx {



     color: #999999;



 }



 .line-bx {



     bottom: 60px;



     left: 0;



     width: 100%;



     position: absolute;



 }



 .line-bx .pull-left,



 .line-bx .pull-right {



     width: 60%;



 }



 @media only screen and (max-width: 991px) {



     .how-sf-work .padding-lr-30 {



         padding-left: 10px;



         padding-right: 10px;



     }



     .line-bx .pull-left,



     .line-bx .pull-right {



         display: none;



     }



 }



 /*== >Service Finder Categories ==*/



 .sf-title-bx {



     padding: 15px 20px;



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     color: #FFF;



 }



 .service-name {



     margin: 0;



     color: #FFF;



     font-weight: 500;



     position: absolute;



     left: 0;



     bottom: 0;



     padding: 10px 20px;



     z-index: 1;



 }



 .service-name a {



     color: #FFF;



 }



 .service-plus {



     background: <?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;



     color: #FFF;



     top: 20px;



     font-size: 13px;



     font-weight: 700;



     left: 20px;



     padding: 2px 10px;



     position: absolute;



     z-index: 1;



     box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);



     -webkit-box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);



 }



 .service-plus i {



     margin-right: 5px;



 }



 .overlay-bg:before {



     content: "";



     background: #000;



     position: absolute;



     left: 0;



     top: 0;



     width: 100%;



     height: 100%;



     opacity: 0.3;



     opacity: <?php echo (isset($data['overlay-hover-opacity'])) ? esc_html($data['overlay-hover-opacity']): ''; ?>;



     z-index: 1;



 }



 .sf-cate-no-img .sf-thum-bx {



     min-height: 250px;



     border: 1px dashed #ddd;



     box-shadow: none;



     -webkit-box-shadow: none;



 }



 @media only screen and (max-width: 1200px) {



     .sf-cate-no-img .sf-thum-bx {



         min-height: 220px;



     }



 }



 @media only screen and (max-width: 991px) {



     .sf-cate-no-img .sf-thum-bx {



         min-height: 258px;



     }



 }



 .sf-cate-no-img:hover .sf-thum-bx:before,



 .sf-cate-no-img:hover .sf-thum-bx:after {



     display: none;



 }



 .sf-cate-no-img.overlay-bg:before {



     display: none;



 }



 .sf-cate-no-img sf-thum-bx:before,



 .sf-cate-no-img sf-thum-bx:after {



     display: none;



 }



 .sf-cate-no-img .service-name {



     color: #777777;



 }



 .provider-sub-category .sf-cate-no-img .sf-thum-bx {



     min-height: 247px;



 }



 @media only screen and (max-width: 1200px) {



     .sf-cate-no-img .sf-thum-bx {



         min-height: 196px;



     }



 }



 @media only screen and (max-width: 991px) {



     .sf-cate-no-img .sf-thum-bx {



         min-height: 230px;



     }



 }



 /*== > Who's on servicefinder.com ==*/



 .who-fs-com {



     background-image: url(inc/images/background/bg1.jpg);



     background-size: cover !important;



     background-attachment: fixed;



     background-position: center;



 }



 .sf-about-text p {



     color: #fff;



     font-size: 16px;



 }



 /*== > Why Use servicefinder ==*/



 .why-use-sf .icon-bx-md {



     border: 2px solid <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     margin-bottom: 20px;



 }



 .why-use-sf .icon-bx-md i {



     margin: -6px 0 0;



 }



 .why-use-sf .sf-element-bx:hover .icon-bx-md {



     background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .why-use-sf .sf-element-bx:hover .icon-bx-md i {



     color: #FFFFFF;



 }



 .why-use-sf p {



     line-height: 20px;



     margin-bottom: 0;



 }



 @media only screen and (max-width: 767px) {



     .why-use-sf .padding-lr-30 {



         padding-left: 0;



         padding-right: 0;



     }



 }



 @media only screen and (max-width: 480px) {



     .why-use-sf [class*="col-"] {



         width: 100%;



     }



     .why-use-sf .padding-lr-30 {



         padding-left: 20px;



         padding-right: 20px;



     }



 }



 /*== > Featured Providers ==*/



 .sf-category-tag {



     position: absolute;



     left: 0;



     bottom: 0;



     margin: 20px;



     background: #ff650d;



     color: #FFF;



     text-transform: uppercase;



     padding: 3px 10px;



     font-size: 14px;



     z-index: 3;



     background-attachment: fixed;



 }



 .sf-company-name {



     display: block;



     margin-bottom: 15px;



 }



 .sf-category-tag a {



     color: #FFF;



 }



 .sf-featured-bx {



     background: #FFF;



     margin: 0 15px;



 }



 .sf-featured-label,



 .sf-hired-label {



     background: url(inc/images/featured-label.png) 0 0 no-repeat;



     width: 82px;



     height: 82px;



     position: absolute;



     top: 0;



     left: 0;



     z-index: 1;



     color: #FFF;



 }



 .sf-featured-label span,



 .sf-hired-label span {



     bottom: 45px;



     display: block;



     font-size: 12px;



     left: 0;



     position: absolute;



     -moz-transform: rotate(-46deg);



     -webkit-transform: rotate(-46deg);



     -o-transform: rotate(-46deg);



     -ms-transform: rotate(-46deg);



     transform: rotate(-46deg);



     text-shadow: 0 0 2px rgba(0, 0, 0, 0.5);



 }



 .sf-hired-label {



     background: url(inc/images/hired-label.png) right bottom no-repeat;



     top: auto;



     left: auto;



     right: 0;



     bottom: 0;



 }



 .sf-hired-label span {



     bottom: 20px;



     left: auto;



     right: 12px;



 }



 .sf-job-title-bx {



     font-size: 15px;



     text-transform: uppercase;



 }



 .sf-featured-bx {



     background: #FFF;



 }



 .sf-featured-bx .padding-20 {



     padding: 15px 15px 10px;



 }



 .sf-featured-bx .btn {



     padding: 8px 10px;



 }



 .sf-featured-bx .sf-title {



     text-transform: uppercase;



     margin-top: 0;



 }



 .sf-featured-bx p {



     text-transform: uppercase;



     margin: 0;



 }



 /*== >Service Finder Categories 2 ==*/



 .sf-category2 [class*="icon-bx-"] {



     background: none;



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     margin-bottom: 20px;



 }



 .sf-category2 .sf-title {



     margin: 0 0 5px;



 }



 .show_more_main {

     clear: both;

     padding-top: 20px;

     text-align:center;    

 }



 /*== > Providers Follow us ==*/



 .providers-follow {



     padding: 150px 0;



     background-image: url(inc/images/background/bg5.jpg);



     background-position: center center;



     background-size: cover;



 }



 .providers-follow .sf-title {



     font-size: 40px;



     text-transform: uppercase;



     font-weight: 700;



     display: block;



     margin-bottom: 15px;



 }



 .providers-follow .sf-title span {



     color: #3396d1;



 }



 .providers-follow .sf-follow-text {



     font-size: 15px;



     padding: 0 15%;



 }



 /*== >  Latest-blog ==*/



 .latest-blog .post-thum {



     position: relative;



 }



 .latest-blog .post-date {



     position: absolute;



     bottom: 30px;



     left: 30px;



 }



 .latest-blog .post-info {



     background: #f7f8fa;



     padding: 30px;



     border-bottom: 2px solid #e9e9e9;



 }



 .latest-blog .post-meta {



     border-bottom: none;



     border-top: none;



     margin: 0;



     padding: 10px 0;



 }



 .latest-blog .post-meta ul {



     float: none;



 }



 .latest-blog .sf-no-img-blog .post-date {



     position: static;



     margin: 0px 30px 10px 30px;



 }



 /*== > testimonial ==*/



 .testimonial-bx {



     margin-bottom: 0;



     padding: 0px 30px;



     position: relative;



 }



 .sf-testimonials .col-md-6:first-child:after {



     content: "";



     border-bottom: 1px solid #e0e0e0;



     border-right: 1px solid #e0e0e0;



     position: absolute;



     right: 0;



     top: 0;



     width: 0;



     height: 100%;



 }



 .testimonial-pic {



     background: #FFF;



     width: 100px;



     height: 100px;



     overflow: ;



     border: 5px solid #FFF;



     position: relative;



     float: left;



     border-radius: 100%;



     -webkit-border-radius: 100%;



     -webkit-box-shadow: 2px 3px 6px -3px rgba(0, 0, 0, 0.35);



     -moz-box-shadow: 2px 3px 6px -3px rgba(0, 0, 0, 0.35);



     box-shadow: 2px 3px 6px -3px rgba(0, 0, 0, 0.35);



 }



 .testimonial-pic img {



     width: 90px;



     height: 90px;



     border-radius: 100%;



     -webkit-border-radius: 100%;



 }



 .testimonial-pic:before {



     content: "\f10d";



     font-family: "FontAwesome";



     display: block;



     width: 36px;



     height: 36px;



     line-height: 36px;



     font-size: 16px;



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     color: #FFF;



     text-align: center;



     position: absolute;



     left: 0;



     top: 65px;



     border-radius: 100%;



     -webkit-border-radius: 100%;



     z-index: 10;



 }



 .testimonial-text {



     margin-left: 120px;



     line-height: 20px;



     padding: 10px;



 }



 .testimonial-text p {



     margin-bottom: 0;



     line-height: 22px;



     color: #555;



 }



 .testimonial-text .testimonial-detail {



     margin-top: 15px;



 }



 .testimonial-text strong {



     font-size: 16px;



     color: #3396d1;



     display: inline-block;



     position: relative;



     margin-right: 5px;



 }



 .testimonial-text strong:after {



     content: "/";



     color: #333;



     margin-left: 3px;



 }



 .testimonial-text span {



     font-size: 14px;



     color: #333333;



     font-style: italic;



 }



 @media only screen and (max-width: 480px) {



     .testimonial-bx {



         padding: 0;



     }



     .testimonial-pic {



         float: none;



         margin: 0 auto 15px;



     }



     .testimonial-text {



         margin-left: 0;



         text-align: center;



     }



     .testimonial-text .testimonial-detail {



         padding-top: 10px;



     }



 }



 /*---------------------------------------------------------------



 29. INNER-CONTENT



 ---------------------------------------------------------------*/



 /*== > filter sort by ==*/



 .title-section {



     clear: both;



     padding: 15px 0;



     margin-top: 50px;



     border-top: 1px solid #e1e1e1;



     border-bottom: 1px solid #e1e1e1;



 }



 .title-section .result-title {



     margin: 10px 0;



 }



 .title-section .result-title strong {



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 @media only screen and (max-width: 767px) {



     .title-section [class*="col-"] {



         width: 100%;



         float: none;



     }



     .sort-filter-bx.pull-right {



         float: none !important;



     }



 }



 /*== > search result ==*/



 .sf-map-serach-page .listing-box,



 .sf-map-serach-page .listing-grid-box {



     padding-top: 30px;



 }



 .result-listing {



     background: #FFF;



 }



 .result-listing .sf-thum-bx {



     width: 400px;



     float: left;



     min-height: 280px;



     margin-right: 30px;



 }



 .result-listing .result-text {



     padding: 20px;



 }



 .result-listing .sf-title {



     margin-top: 0;



     margin-right: 90px;



     text-transform: uppercase;



 }



 .result-listing .sf-company-name {



     display: block;



     margin-bottom: 10px;



 }



 .result-listing .rating-container {



     position: absolute;



     top: 15px;



     right: 15px;



 }



 .result-listing a.btn {



     position: absolute;



     bottom: 20px;



     right: 15px;



     background: none;



     border: none;



     padding: 0;



     color: #ccc !important;



     font-size: 0;



 }



 .result-listing a.btn:hover,



 .result-listing a.btn:active,



 .result-listing a.btn:focus {



     color: #666 !important;



     background: none;



 }



 .result-listing a.btn:hover {



     color: #ccc !important;



 }



 .result-listing a.btn .fa {



     font-size: 16px;



 }



 .result-listing a.btn.remove-favorite .fa {



     color: #77c04b;



 }



 @media only screen and (max-width: 991px) {



     .result-listing .sf-thum-bx {



         width: 300px;



     }



 }



 @media only screen and (max-width: 767px) {



     .result-listing .sf-thum-bx {



         min-height: 225px;



     }



 }



 @media only screen and (max-width: 640px) {



     .result-listing .sf-thum-bx {



         width: 100%;



         float: none;



         margin: 0 0 15px;



     }



     .result-listing .result-text {



         position: relative;



     }



 }



 .sf-map-serach-page .sort-filter-bx .f-f-left,



 .sf-map-serach-page .sort-filter-bx .f-f-right {



     float: none;



 }



 .sf-map-serach-page .sort-filter-bx .f-f-left {



     margin-bottom:15px;



 }



 .sf-map-serach-page .sort-filter-bx .f-f-left:after {



     content:"";



 	display:block;



 	clear:both;



 }



 /*== > provider box ==*/



 .sf-provider-bx {



     text-align: center;



 }



 .sf-provider-bx .sf-title {



     text-transform: uppercase;



 }



 .sf-provider-bx .sf-category-tag {



     font-size: 12px;



     padding: 2px 5px;



 }



 .sf-provider-bx .btn {



     padding: 9px 2px;



 }



 .sf-provider-bx .sf-company-name {



     min-height: 20px;



     margin-bottom: 5px;



     display: block;



 }



 /*== > provider box thum height manage ==*/



 .sf-listing-grid-4 .sf-thum-bx {



     min-height: 203px;



 }



 .sf-listing-grid-3 .sf-thum-bx {



     min-height: 278px;



 }



 .sf-listing-grid-2 .sf-thum-bx {



     min-height: 236px;



 }



 @media only screen and (max-width: 1200px) {



     .sf-listing-grid-4 .sf-thum-bx {



         min-height: 160px;



     }



     .sf-listing-grid-3 .sf-thum-bx {



         min-height: 220px;



     }



 }



 @media only screen and (max-width: 991px) {



     .sf-listing-grid-4 .sf-thum-bx {



         min-height: 259px;



     }



     .sf-listing-grid-3 .sf-thum-bx {



         min-height: 259px;



     }



     .sf-listing-grid-2 .sf-thum-bx {



         min-height: 262px;



     }



 }



 @media only screen and (max-width: 767px) {



     .sf-listing-grid-4 .sf-thum-bx,



     .sf-listing-grid-3 .sf-thum-bx,



     .sf-listing-grid-2 .sf-thum-bx {



         min-height: 160px;



     }



     .sf-listing-grid-4 .equal-col,



     .sf-listing-grid-3 .equal-col,



     .sf-listing-grid-2 .equal-col {



         margin-bottom: 30px;



     }



 }



 /*== > provider rating ==*/



 .sf-show-rating .star-rating .caption,



 .sf-show-rating .star-rating .clear-rating {



     display: none;



 }



 .sf-show-rating .rating-container {



     letter-spacing: 2px;



     font-size: 15px;



 }



 .sf-show-rating .rating-sm {



     font-size: 15px;



 }



 .sf-show-rating .rating-disabled {



     cursor: text;



 }



 /*== > no result found ==*/



 .sf-nothing-found,



 sf-nothing-found2 {



     padding: 10px;



     margin: 5% 0;



 }



 .sf-nothing-found2 .sf-tilte,



 .sf-nothing-found2 .sf-tilte {



     font-size: 40px;



     font-weight: 600;



     text-transform: uppercase;



 }



 .sf-nothing-found2 p,



 .sf-nothing-found2 p {



     font-size: 16px;



 }



 sf-nothing-found2 {



     margin: 0;



 }



 /*== > provider sub category result ==*/



 .provider-sub-category,



 .provider-sub-category-center {



     padding: 40px 0;



 }



 .provider-sub-category-center {



     text-align: center;



 }



 .provider-sub-category-center .icon-bx-md {



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     margin-bottom: 20px;



 }



 .provider-sub-category-center .icon-bx-md p {



     min-height: 30px;



 }



 /*== > search result + Map==*/



 .listing-map #header-part .container {



     width: auto;



 }



 .google-map-fixed {



     position: fixed;



     left: 0;



     bottom: 0;



     width: 100%;



     height: 100%;



     padding-right: 700px;



     z-index: 1;



 }



 .search-result-listing {

     width: 700px;

     float: right;

     position: relative;

     z-index: 2;

 }



 .search-result-listing .search-form {



     padding: 15px 10px;



 }



 .search-result-listing .btn-advace-wrap .btn-advace-search {



     position: static;



     display: inline-block;



     background-color: #77c04b;



     border-color: #62a643;



     color: #ffffff;



     margin-left: 10px;



 }



 .search-result-listing .btn-advace-wrap .btn-advace-search:after {



     display: none;



 }



 .search-result-listing .sf-advace-search {



     padding: 10px;



 }



 .search-result-listing .sf-advace-search b,



 .search-result-listing .sf-advace-search .sf-tilte {



     color: #777;



 }



 .search-result-listing .sf-advace-search .sf-tilte {



     font-size: 15px;



     font-weight: 700;



 }



 .search-result-listing .slider-track {



     background-image: linear-gradient(to bottom, #ddd 0px, #ddd 100%);



 }



 .search-result-listing .search-form .search-col-3,



 .search-result-listing .search-form .search-col-4,



 .search-result-listing .search-form .search-col-5,



 .search-result-listing .search-form .search-col-6 {



     padding: 0 10px;



     margin: 10px 0;



 }



 .search-result-listing .search-form .search-col-3 {



     width: 33.333%;



     padding: 0 10px;



     margin: 10px 0;



 }



 .search-result-listing .search-form .search-col-4 {



     width: 33.333%;



     padding: 0 10px;



     margin: 10px 0;



 }



 .search-result-listing .search-form .search-col-5 {



     width: 50%;



     padding: 0 10px;



     margin: 10px 0;



 }



 .search-result-listing .search-form .search-col-6 {



     width: 50%;



     padding: 0 10px;



     margin: 10px 0;



 }



 .search-result-listing .search-form .col-sm-12.search-col-4,



 .search-result-listing .search-form .col-sm-12.search-col-5,



 .search-result-listing .search-form .col-sm-12.search-col-6 {



     width: 100%;



 }



 @media only screen and (max-width: 767px) {



     .search-result-listing .search-form .search-col-3,



     .search-result-listing .search-form .search-col-4,



     .search-result-listing .search-form .search-col-5,



     .search-result-listing .search-form .search-col-6 {



         width: 100%;



     }



     .search-result-listing .search-form .col-sm-12.search-col-3,



     .search-result-listing .search-form .col-sm-12.search-col-4,



     .search-result-listing .search-form .col-sm-12.search-col-5,



     .search-result-listing .search-form .col-sm-12.search-col-6 {



         margin-top: 0;



     }



 }



 .search-result-listing .title-section .result-title {



     margin: 10px 0;



 }



 .listing-wraper {
     padding: 20px 20px 20px;
 }

@media only screen and (max-width:991px){
 .listing-wraper { padding: 20px 0px 20px; }  
}


 .listing-wraper .search-form {
     padding: 20px 20px 20px;
     background: #FFF;
     margin-bottom: 30px;
     position: relative;
 }
   


 .listing-wraper .result-listing .sf-thum-bx {



     width: 300px;



 }



 .listing-wraper .sf-category-tag {



     font-size: 12px;



 }



 .search-result-listing .result-listing .sf-thum-bx {



     min-height: 225px;



 }



 @media only screen and (max-width: 1200px) {



     .google-map-fixed {



         width: %;



     }



     .search-result-listing {



         width: %;



     }



 }



 @media only screen and (max-width: 991px) {



     .google-map-fixed {



         padding-right: 0;



         display: none;



     }



     .search-result-listing {



         width: 100%;



     }



 }



 @media only screen and (max-width: 767px) {



     .search-result-listing [class*="col-sm-4"],



     .search-result-listing [class*="col-sm-12"] {



         width: 50%;



         float: left;



     }



     .search-result-listing .title-section .result-title {



         margin-bottom: 15px;



     }



 }



 @media only screen and (max-width: 640px) {



     .listing-wraper .result-listing .sf-thum-bx {



         width: 100%;



         float: none;



         margin: 0 0 15px;



     }



     .result-listing .result-text {



         position: relative;



     }



 }



 @media only screen and (max-width: 480px) {



     .search-result-listing [class*="col-sm-4"],



     .search-result-listing [class*="col-sm-12"] {



         width: 100%;



         float: none;



     }



 }



 /*== > breadcrumb menu ==*/



 .breadcrumb-row {



     background: #e8e9e9;



     padding: 20px 0;



 }



 .breadcrumb-row ul {



     margin: 0;



 }



 .breadcrumb-row ul li {



     padding: 0;



     margin-right: 3px;



     color: #333333;



 }



 .breadcrumb-row ul li:after {



     content: "/";



     margin-left: 7px;



 }



 .breadcrumb-row ul li a {



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .breadcrumb-row ul li:last-child {



     color: #676767;



 }



 .breadcrumb-row ul li:last-child:after {



     display: none;



 }



 /*== > Provider Details ==*/



 .sliderLarge .owl-controls {



     margin: 0;



 }



 .thumbnail-slider {



     margin-top: 15px;



 }



 .thumbnail-slider .owl-item {



     cursor: pointer;



 }



 .thumbnail-slider .sf-thum-active:after {



     content: "";



     position: absolute;



     top: 0;



     width: 100%;



     height: 100%;



     border: 3px solid #3396D1;



 }



 .sf-catlist-new {



     padding-bottom: 50px;



 }



 .sf-catlist-new .show_more_main {



     position: absolute;



     left: 0;



     bottom: 0;



     width: 100%;



 }



 @media only screen and (max-width: 420px) {



     .sf-catlist-new .col-xs-6 {



         width: 100%;



     }



 }



 .provider-details {



     border-bottom: 1px solid #efeded;



     min-height: 120px;



 }



 .provider-details .provider-logo {



     width: 200px;



     float: left;



     margin-right: 30px;



     text-align: center;



     padding: 10px;



     border: 1px solid #E5E5E5;



     margin-bottom: 15px;



     text-align: center;



     position: relative;



 }



 .provider-details .provider-logo .sf-provider-name {



     display:block;



 }



 .provider-details .provider-text {



     min-height: 255px;



 }



 .about-info .sf-provider-des .sf-average-question,



 .provider-details .sf-average-question,



 .result-listing .sf-average-question,



 .listing-grid-box .sf-average-question,



 .sf-featured-bx .sf-average-question,



 .sf-map-serach-page .sf-average-question {



     position: absolute;



     top: 10px;



     right: 10px;



     padding: 3px;



     width: 24px;



     height: 24px;



     text-align: center;



     background-color: rgba(255, 255, 255, 0.8);



     cursor: pointer;



     z-index: 99;



 }



 .sf-featured-bx .sf-average-question {



     top: 208px;



     right: 15px;



 }



 .about-info .sf-provider-des .sf-average-question {



     top: 15px;



     right: 15px;



 }



 .result-listing .sf-average-question {



     top: 15px;



     right: 15px;



 }



 .provider-details .btn {



     margin: 5px 0;



 }



 .provider-social {



     padding-top: 15px;



 }



 .provider-social .social-bx {



     float: left;



     margin: 0;



 }



 .provider-social .social-bx li a {



     border: 1px solid #ccc;



     color: #999;



     height: 25px;



     padding: 5px;



     width: 25px;



     margin: 0 3px;



     text-align: center;



 }



 .provider-social .rating-container {



     float: right;



 }



 @media only screen and (max-width: 480px) {



     .provider-details .provider-logo {



         width: auto;



         height: auto;



         float: none;



         margin: 0 0 20px;



     }



 }



 .provider-details .provider-logo img {



     width: 100%;



     height: auto;



     display: block;



     margin-bottom: 15px;



 }



 @media only screen and (max-width: 480px) {



     .provider-details .provider-text {



         margin-left: 0;



     }



 }



 .provider-details .provider-text h5 {



     margin-top: 0;



     margin-bottom: 5px;



 }



 .provider-details .provider-text .tagline {



     text-transform: uppercase;



     font-weight: 600;



 }



 .provider-post-info {



     padding: 15px 0 0;



 }



 .provider-post-info i {



     margin: 0 5px 0 10px;



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 /* shared buttons */



 ul.sharebtn-bx {



     float: left;



 }



 ul.share-social-bx {



     float: right;



	 clear:right;



 }



 ul.sharebtn-bx,



 ul.share-social-bx {



     list-style: none;



     margin: 0;



     min-height: 34px;



 }



 ul.sharebtn-bx li,



 ul.share-social-bx li {



     display: inline-block;



     border: 1px solid #efeded;



     padding: 0px 10px 0 0;



     height: 34px;



     margin-right: 8px;



 }



 ul.sharebtn-bx li a,



 ul.share-social-bx li a {



     display: inline-block;



 }



 ul.sharebtn-bx li i,



 ul.share-social-bx li i {



     display: inline-block;



     text-align: center;



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     padding: 10px;



     margin-right: 10px;



     border-right: 1px solid #efeded;



     font-size: 11px;



 }



 /* shared style 1*/



 /* shared style 2*/



 ul.share-social-bx li {



     border: none;



     width: 36px;



     display: block;



     float: left;



     white-space: nowrap;



     overflow: hidden;



     margin-right: 0;



 }



 ul.share-social-bx li a {



     color: #FFF;



     font-size: 12px;



 }



 ul.share-social-bx li i {



     border-right: none;



     font-size: 14px;



     color: #FFF;



     width: 36px;



     height: 34px;



     line-height: 34px;



     padding: 0;



     text-align: center;



 }



 ul.share-social-bx li.fb {



     background: #354d89;



 }



 ul.share-social-bx li.fb i {



     background: #3a5799;



 }



 ul.share-social-bx li.gp {



     background: #d34b2b;



 }



 ul.share-social-bx li.gp i {



     background: #e35736;



 }



 ul.share-social-bx li.tw {



     background: #029fdf;



 }



 ul.share-social-bx li.tw i {



     background: #00abf0;



 }



 ul.share-social-bx li.dig {



     background: #1d61aa;



 }



 ul.share-social-bx li.dig i {



     background: #2B6FB8;



 }



 ul.share-social-bx li.lin {



     background: #0176be;



 }



 ul.share-social-bx li.lin i {



     background: #0082CA;



 }



 ul.share-social-bx li.pin {



     background: #ac0104;



 }



 ul.share-social-bx li.pin i {



     background: #BD0E15;



 }



 ul.share-social-bx li:hover {



     width: 95px;



 }



 @media only screen and (max-width: 767px) {



     ul.sharebtn-bx,



     ul.share-social-bx {



         float: none;



     }



     ul.sharebtn-bx {



         margin-bottom: 10px;



     }



 }



 /* Business Hours table */



 .sf-business-hours { text-align: center; text-transform: uppercase;}



 .sf-business-hours tr th { background: #EFEFEF; text-align: center;}



 .sf-business-hours .sf-to { display: block;    font-weight: 400; font-size: 13px;}



 .sf-business-hours span { color: #999;  font-size: 14px; color: #767676; font-weight: 600;}



 .sf-business-hours tr td.sf-closed-day { vertical-align: middle; font-weight: 600; color: #F87C80;}



 .sf-break-timing {border-top:1px solid #ddd; margin:20px -10px 0; }



 .sf-break-timing strong {border-bottom:1px solid #ddd; display:block; padding:6px 2px; color:#555; background-color:#efefef;}



 .sf-break-timing strong  .fa { color:#333;}



 .sf-break-timing ul {list-style:none; margin:15px 0 5px;}



 .sf-break-timing ul li {font-size:12px; font-weight:400; padding:2px 0;}



 .sf-break-timing ul li b{color:#333; font-weight:400;} 



 .sf-business-hours .sf-break-timing ul li {margin-bottom:10px; line-height:14px; }



 .sf-business-hours .sf-break-timing ul li:last-child {margin-bottom:0; }



 .sf-business-hours .sf-break-timing ul li b {display:block; } 



 /* Provider info table */



 .provider-info-outer {



     overflow: hidden;



 }



 .provider-info-outer ul.provider-info {



     margin-top: -1px !important;



 }



 ul.provider-info li {



     padding: 15px 10px 15px 10px;



     margin-bottom: 0;



     width: 50%;



     border-top: 1px solid #efeded;



     border-right: 1px solid #efeded;



     width: 50%;



     float: left;



     line-height: 20px;



 }



 ul.provider-info li:nth-child(2n+0) {



     border-right: none;



 }



 ul.provider-info li span {



     display: block;



     padding-left: 25px;



 }



 ul.provider-info li i {



     margin-right: 10px;



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     font-size: 20px;



     vertical-align: middle;



 }



 ul.provider-info li strong {



     font-weight: 600;



     font-size: 14px;



     text-transform: uppercase;



 }



 ul.provider-info li strong:after {



     content: "";



     display: block;



     clear: both;



     margin-bottom: 5px;



 }



 @media only screen and (max-width: 767px) {



     ul.provider-info li {



         width: auto;



         float: none;



     }



     ul.provider-info li {



         border-right: none;



     }



 }



 /* provider-map */



 .provider-map #gmap_canvas {



     width: 100% !important;



 }



 .provider-map #map_canvas {



     width: 100% !important;



 }



 /* provider-services */



 .provider-services ul {



     margin: 0;



     list-style: none;



 }



 .provider-services ul li {



     margin: 0 0 15px;



     padding: 0 0 15px 25px;



     border-bottom: 1px solid #e1e1e1;



     position: relative;



 }



 .provider-services ul li i {



     position: absolute;



     left: 0;



     top: 2px;



     font-size: 16px;



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .provider-services ul li .p-s-title {



     margin: 0 0 0 0px;



 }



 .provider-services ul li .p-s-title .cost {



     float: right;



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .provider-services ul li .p-s-title .cost i {



     position: static;



 }



 .provider-services ul li .p-s-text {



     display: none;



     margin: 0;



     padding: 10px 0s;



 }



 .provider-services ul li:last-child {



     border-bottom: none;



     margin-bottom: 0;



     padding-bottom: 0;



 }



 .provider-services ul li:hover .p-s-text {



     display: block;



 }



 /* documents-download */



 .sf-documents-table .panel {



     margin-bottom: 0;



 }



 .sf-documents-table .panel-heading {



     padding-left: 40px;



     position: relative;



     min-height: 60px;



 }



 .sf-documents-table .price-bx {



     position: absolute;



     left: 15px;



     top: 10px;



 }



 @media only screen and (max-width: 767px) {



     .sf-documents-table td {



         padding: 0;



         display: block;



     }



 }



 /* recent info table */



 .recent-services-bx ul {



     list-style: none;



     margin: 0;



 }



 .recent-services-bx ul li {



     width: 100%;



     min-height: 100px;



     clear: both;



     padding: 0 0 20px;



     margin-bottom: 20px;



     border-bottom: 1px solid #ededed;



 }



 .recent-services-bx ul li:last-child {



     border-bottom: none;



     margin: 0;



     padding: 0;



     min-height: 80px;



 }



 .recent-services-bx p {



     margin: 0;



     line-height: 18px;



 }



 .recent-services-bx .post-thum-bx {



     width: 80px;



     float: left;



     margin-right: 15px;



     border: 1px solid #FFF;



 }



 .recent-services-bx .post-title {



     margin: 0 0 2px;



 }



 .recent-services-bx .post-text-bx {



     margin-left: 90px;



 }



 ul.timeslots,



 ul.protimelist {



     margin: 20px 0;



 }



 ul.timeslots li,



 ul.protimelist li {



     padding: 10px 15px;



     margin: 0 10px 10px 0;



     background: #F0F0F0;



     text-transform: uppercase;



     border-bottom: 3px solid #e1e1e1;



     cursor: pointer;



 }



 ul.timeslots li.active,



 ul.protimelist li.active {



     background: #dadada;



     border-bottom: 2px solid #bfbfbf;



 }



 /* booking status indigate */



 ul.indiget-booking {



     margin: 0;



 }



 ul.indiget-booking li {



     display: inline-block;



     padding: 0;



     margin-right: 30px;



 }



 ul.indiget-booking li b {



     width: 10px;



     height: 10px;



     background: #CCC;



     display: inline-block;



     margin-right: 10px



 }



 ul.indiget-booking li.allbooked b {



     background: #f6dfec;



 }



 ul.indiget-booking li.unavailable b {



     background: #edbfbf;



 }



 /* booking form */



 .mincost { color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; float: right;}



 .mincost strong { color: <?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; font-weight: 800;}



 .form-step-bx { position: relative;}



 .form-step-bx h6 { position: relative; margin-left: 15px; margin-right: 15px; border-bottom: 1px solid #E1E1E1; margin-bottom: 30px; padding-bottom: 15px;}



 .form-step-bx h6 strong { position: absolute; left: -30px; font-size: 18px; color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; font-weight: 800;}



 .form-step-bx .btn.edit {position: absolute; right: 0; top: -5px;}



 .form-step-bx label { margin-bottom: 10px;}



 .form-step-bx .form-group,



 .profile-form-bx .form-group,



 .modal-body .form-group,



 .form-group { margin-bottom: 25px;}



 .sf-upgrade-payment .form-group { margin: 25px 0;}



 .renew-package { padding-left:15px; padding-right:15px;}



 .staff-member { text-align: center;}



 .staff-member .sf-element-bx {overflow:hidden;}



 .staff-member h6 { text-align: left;}



 .staff-member .sf-thum-bx { border: 5px solid <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; overflow: hidden; cursor: pointer; min-height: 40px;}



 .staff-member .sf-thum-bx:after { border-radius:0; -webkit-border-radius:0;}



 .staff-member .member-done { position: absolute;  bottom: -30px; right: 0; width: 30px; height: 30px; line-height: 30px; font-size: 14px; color: #FFF; background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; }



 .staff-member .member-name { color: #FFF; border: none; padding: 0; margin: 0 0 0px; min-height: 40px; word-wrap:break-word; font-size:12px;}



 .staff-member .sf-title-bx { padding: 5px 5px 5px; border: none; min-height: 60px; line-height: 16px;}



 .staff-member .rating-bx { font-size: 10px;}



 .staff-member .rating-container .rating-stars { color: #FC0;}



 .staff-member .rating-container { color: #fff; font-size: 12px;}



 .staff-member .sf-element-bx:hover .overlay-black-light:after { opacity: 0;}



 .staff-member .sf-element-bx:hover .member-done { bottom: 0;}



 .staff-member .sf-element-bx.selected .member-done { width: 100%; bottom: -10px;}



 .staff-member .sf-element-bx.selected .overlay-black-light:after { opacity: 0;}



 /* payment card */



 .pay-source {



     padding: 0 15px 25px;



 }



 .pay-source a {



     display: inline-block;



     margin-right: 10px;



 }



 .pay-source a img {



     max-width: 100%;



     height: 30px;



     border: 1px solid #E1E1E1;



 }



 /* Featured box */



 #feature-req-bx .alert-bx {



     padding: 10px 15px;



     margin: 0 0 15px;



 }



 /* Amount status */



 .sf-adminfee-bx {



     list-style: none;



     width: 100%;



     max-width: 500px;



     padding: 10px 20px;



     border: 1px solid #ddd;



 }



 .sf-adminfee-bx li {



     padding: 5px 0 !important;



     border-top: 1px solid #ddd;



     font-weight: 600;



     font-size: 14px;



 }



 .sf-adminfee-bx li strong {



     float: right;



     color: #555555;



 }



 .sf-adminfee-bx li:first-child {



     border: none;



 }



 .sf-adminfee-bx li:last-child {



     border-width: 2px;



 }



 /*== > Provider Details demo2 ==*/



 /*about-info*/



 .about-info .sf-about-box {



     padding: 20px;



 }



 .about-info .sf-title {



     margin: 0 0 20px;



 }



 .about-info .tagline {



     margin: 0 0 10px;



     display: block;



 }



 .about-info .sf-provider-des {



     padding: 15px;



     background: #FFF;



     text-align: center;



     margin: 0 15px 15px 0;



     position: relative;



 }



 .about-info .rating-bx {



     position: absolute;



     left: 0;



     bottom: 20px;



     width: 100%;



     padding: 0 10px;



     z-index: 1;



 }



 .about-info .rating-container .rating-stars {



     color: #FC0;



 }



 .about-info .rating-container {



     color: #fff;



 }



 .about-info .sf-provider-name {



     display: block;



     font-size: 16px;



     padding-top: 15px;



     font-weight: 600;



     color: #333;



 }



 .about-info .social-bx {



     margin: 15px 0 10px;



     float: none;



 }



 .about-info .social-bx li {



     padding: 0;



     margin: 0 2px;



 }



 .about-info .social-bx li a {



     border: 1px solid #CCC;



     padding: 7px;



     width: 30px;



     height: 30px;



     color: #999;



 }



 .about-info .sharebtn-bx {



     width: 42%;



 }



 .about-info .shared-bx .sharebtn-bx li {



     background: #FFF;



     margin-bottom: 5px;



 }



 @media only screen and (max-width: 991px) {



     .about-info .sharebtn-bx,



     .about-info .share-social-bx {



         width: auto;



         float: none;



         margin-bottom: 10px;



     }



 }



 @media only screen and (max-width: 767px) {



     .about-info .col-xs-4 {



         width: 100%;



         float: none;



     }



 }



 .sf-about-box .shared-bx {



     overflow:hidden;



     margin-bottom: 15px



 }



 @media only screen and (max-width: 1200px) {



     .sf-about-box .shared-bx {



         width: 625px;



     }



 }



 @media only screen and (max-width: 991px) {



     .sf-about-box .shared-bx {



         width: 480px;



     }



 }



 @media only screen and (max-width: 767px) {



     .sf-about-box .shared-bx {



         width: auto;



         display: block;



     }



 }



 /*gallery-thums*/



 .gallery-row {



     background: url(inc/images/background/bg4.jpg) center fixed no-repeat;



     background-size: cover;



 }



 .gallery-row .gallery-thums2 .item {



     padding: 0 15px;



 }



 .gallery-row .gallery-thums2 .item .sf-thum-bx {



     border: 5px solid #FFF;



     background: #FFF;



 }



 /*address-info*/



 .address-info .sf-element-bx {



     margin-bottom: 40px;



 }



 .address-info .icon-bx-md {



     border: 2px solid <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     line-height: 94px;



     margin-bottom: 20px;



 }



 .address-info h6 {



     margin-bottom: 5px;



 }



 .address-info p {



     margin-bottom: 0;



 }



 .address-info .info-3-col-clear,



 .address-info .info-2-col-clear {



     clear: both;



 }



 @media only screen and (max-width: 991px) {



     .address-info .info-3-col-clear {



         display: none;



     }



     .address-info .info-2-col-clear {



         display: block !important;



     }



 }



 /*lacation-point*/



 .map-location #gmap_canvas {



     width: 100% !important;



 }



 @media only screen and (max-width: 768px) {



     .map-location .gmap-outer,



     .map-location #gmap_canvas {



         height: 300px !important;



     }



 }



 /*video-demo*/



 .video-row .embed-responsive {



     box-shadow: 0 0 10px #eaeaea;



     -webkit-box-shadow: 0 0 10px #eaeaea;



 }



 .video-row .embed-responsive iframe {



     border: 15px solid #FFF;



 }



 /*services-row*/



 .services-row .nav-tabs {



     clear: both;



 }



 .services-row table tr td {



     width: 50%;



 }



 .services-row table tr td:first-child {



     padding-right: 15px;



 }



 .services-row table tr td:last-child {



     padding-left: 15px;



 }



 .services-row table tr td:first-child:last-child {



     padding: 0 15px 0 0;



 }



 .services-row table tr td {



     border: none;



     padding: 0 0;



 }



 .services-row .panel-heading {



     background: #FFF;



     display: table;



     color: #555555;



 }



 .services-row .panel-heading .price-bx {



     display: table-cell;



     border-right: 1px solid #CCC;



     padding: 6px 10px;



     font-size: 13px;



     font-weight: 500;



     white-space: nowrap;



     vertical-align: middle;



 }



 .services-row .panel-heading .price-bx .sf-fix-hours {



     display: block;



 }



 .services-row .panel-heading .service-title {



     display: table-cell;



     padding: 15px;



     width: 100%;



     vertical-align: top;



 }



 .sf-services-list {



     list-style: none;



     margin: 0 !important;



 }



 .sf-services-list li {



     padding: 0 15px !important;



 }



 .sf-services-list li .panel-heading {



     padding: 0;



     position: relative;



     cursor: pointer;



 }



 .sf-services-list li:nth-child(2n+1) {



     clear: both;



     content: "";



     display: table;



 }



 .sf-services-list .panel-heading[aria-expanded]:before {



     content: "\f067";



     font-family: "FontAwesome";



     position: absolute;



     top: 15px;



     right: 15px;



     font-size: 14px;



 }



 .sf-services-list .panel-heading[aria-expanded=true]:before {



     content: "\f068";



 }



 @media only screen and (max-width: 767px) {



     .sf-services-list li:nth-child(2n+1) {



         display: block;



         clear: none;



     }



 }



 /*booking-row*/



 .book-now-row .mincost {



     text-transform: uppercase;



     font-weight: 800;



     font-size: 22px;



     display: block;



     float: none;



     margin-bottom: 20px;



 }



 .book-now-row .mincost {



     text-transform: uppercase;



     font-weight: 800;



     font-size: 22;



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .book-now-row .mincost strong {



     color: <?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;



     font-weight: 800;



 }



 .book-now-row .booking-desc-bx {



     padding: 0 15%;



     line-height: 24px;



 }



 .form-wizard {



     background: #FFF;



 }



 .form-nav .nav {



     margin: 0 0 20px;



 }



 .form-nav .nav li {



     padding: 0;



     border-right: 2px solid #fff;



 }



 .form-nav .nav li:last-child {



     border-right: none;



 }



 .form-nav .nav li a {



     padding: 30px 10px;



     background: #f0f0f0;



     font-size: 16px;



     font-weight: 600;



     color: #555555;



 }



 .form-nav .nav li a:hover {



     background: #f0f0f0;



 }



 .form-nav .nav li.active a:hover,



 .form-nav .nav li.active a:focus,



 .form-nav .nav li.active a:active,



 .form-nav .nav li.active a {



     background: #FFFFFF;



     color: #555555;



 }



 .form-wizard .progress {



     height: 10px;



     margin: 0 20px 20px;



 }



 .form-wizard .progress .progress-bar {



     font-size: 0;



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .form-wizard .tab-pane {



     border-top: 1px solid #e1e1e1;



     border-bottom: 1px solid #e1e1e1;



 }



 .form-wizard .wizard-actions {



     list-style: none;



     margin: 0;



     padding: 40px;



 }



 .form-wizard .wizard-actions li {



     padding: 0;



     display: inline;



 }



 .form-wizard .wizard-actions .previous {



     display: inline-block;



 }



 .otp-section .otp {



     color: #3396D1;



     font-size: 12px;



     font-style: italic;



 }



 .form-wizard .sf-zipcode-area .fa-refresh {



     width: 36px;



     height: 36px;



     line-height: 36px;



     text-align: center;



 }



 /*quotes-row*/



 .quotes-row {



     background: url(inc/images/background/bg3.jpg) center fixed no-repeat;



     background-size: cover;



     font-size: 18px;



 }



 @media only screen and (max-width: 480px) {



     .quotes-row .padding-lr-50 {



         padding: 0;



     }



 }



 /*---------------------------------------------------------------



 30. AFTER-LOGIN-CONTENT



 ---------------------------------------------------------------*/



 /*left-menu*/



 .profile-menu ul {



     margin: 0;



     list-style: none;



     background: #FFF;



 }



 .profile-menu ul li {



     padding: 10px 40px 10px 50px;



     border-bottom: 1px solid #e8e9e9;



     position: relative;



     min-height: 50px;



     line-height: 30px;



     font-weight: 600;



     font-size: 14px;



 }



 .profile-menu ul li a {



     color: #555555;



     text-transform: uppercase;



     display: block;



 }



 .profile-menu ul li:hover,



 .profile-menu ul li.active {



     color: #FFFFFF;



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .profile-menu ul li:hover a,



 .profile-menu ul li.active a {



     color: #FFFFFF;



 }



 .profile-menu ul li:hover span,



 .profile-menu ul li.active span {



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     background: #FFF;



 }



 .profile-menu ul li i {



     width: 30px;



     height: 30px;



     border-right: 1px solid #e8e9e9;



     text-align: center;



     line-height: 30px;



     margin-right: 10px;



     position: absolute;



     top: 10px;



     left: 10px;



     font-size: 15px;



 }



 .profile-menu ul li span {



     height: 22px;



     min-width: 22px;



     line-height: 22px;



     font-size: 10px;



     text-align: center;



     position: absolute;



     right: 10px;



     top: 15px;



     background: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     color: #FFFFFF;



     border-radius: 100%;



     -webkit-border-radius: 100%;



 }



 /*features nav*/



 .features-nav ul {



     margin: 0;



     list-style: none;



     background: #FFF;



     text-transform: uppercase;



 }



 .features-nav ul li {



     position: relative;



     font-weight: 600;



     font-size: 14px;



     padding: 0;



 }



 .features-nav ul li a {



     border-bottom: 1px solid #e8e9e9;



     padding: 10px 10px 10px 40px;



     min-height: 50px;



     line-height: 30px;



     color: #555555;



     display: block;



 }



 .features-nav ul li a:hover,



 .features-nav ul li a.active {



     color: #FFFFFF;



     background: #3396d1;



 }



 .features-nav ul ul li a:hover {



     padding-left: 45px;



 }



 .features-nav ul ul li a:hover:before,



 .features-nav ul ul li a.active:before {



     color: #FFFFFF;



 }



 .features-nav ul li.current_page_item a {



     color: #FFFFFF;



     background: #3396d1;



 }



 .features-nav ul li.current_page_item a:before {



     color: #FFFFFF;



 }



 .features-nav ul li i {



     width: 30px;



     height: 30px;



     text-align: center;



     line-height: 30px;



     position: absolute;



     top: 10px;



     left: 10px;



     font-size: 15px;



 }



 .features-nav ul li span {



     height: 22px;



     min-width: 22px;



     line-height: 22px;



     font-size: 10px;



     text-align: center;



     position: absolute;



     right: 10px;



     top: 15px;



     background: #3396d1;



     color: #FFFFFF;



     border-radius: 100%;



     -webkit-border-radius: 100%;



 }



 .features-nav ul ul {



     text-transform: none;



 }



 .features-nav ul ul li {



     font-weight: 400;



     font-size: 14px;



 }



 .features-nav ul ul li a {



     border-bottom-color: #F2F2F2;



     color: #999999;



     padding: 6px 10px 6px 40px;



     line-height: 20px;



     min-height: 0;



 }



 .features-nav ul ul li a:before {



     color: #999999;



     content: "\f0da";



     font-family: FontAwesome;



     font-size: 14px;



     left: 20px;



     margin-top: -9px;



     position: absolute;



     top: 50%;



 }



 /*right-box*/



 .profile-form-bx {



     padding: 30px;



     background: #FFF;



 }



 .profile-form-bx .btn {



     margin: 0 2px 2px 0;



 }



 .profile-form-bx .form-inr {



     padding: 30px;



     border: 1px solid #e1e1e1;



     margin-bottom: 30px;



     clear: both;



 }



 .profile-form-bx .sf-table-outer {



 }



 .dataTables_wrapper .row:first-child,



 .dataTables_wrapper .row:last-child {



  margin-left:0;



  margin-right:0;



  padding-left:15px;



  padding-right:15px;



 }



 .profile-form-bx .row {



     margin: 0;



 }



 @media only screen and (max-width: 767px) {



     .profile-form-bx .sf-table-outer {



         margin: 0;



     }



     .profile-form-bx,



     .profile-form-bx .form-inr,



     .panel-body.padding-30,



     .tabbable .tab-pane {



         padding: 15px;



     }



     .profile-form-bx .dataTables_length {



         text-align: left;



     }



     .profile-form-bx .dataTables_filter {



         text-align: left;



     }



 }



 .profile-form-bx .form-inline .radio label,



 .profile-form-bx .form-inline .checkbox label {



     text-transform: none;



 }



 .profiles-content {} 



 .profiles-content h3,



 .profiles-content h4,



 .profiles-content h5,



 .profiles-content h6 {



     margin-top: 0;



 }



 .profiles-content label {



     text-transform: uppercase;



 }



 .profiles-content .panel-group {



     margin-bottom: 30px;



 }



 .auther-bx {



 	display:none;



     padding: 30px 20px 20px;



     margin-top: 5px;



     text-align: center;



     background: url(inc/images/autherbg.jpg) no-repeat center top;



     background-size: cover;



 }



 .auther-bx .auther-pic {



     width: 90px;



     height: 90px;



     margin: 0 auto 15px;



 }



 .auther-bx .auther-pic img {



     border-radius: 100%;



     -webkit-border-radius: 100%;



     width: 100%;



     height: auto;



     border: 3px solid #FFF;



 }



 .auther-bx h6 {



     font-size: 12px;



 }



 .auther-bx h6,



 .auther-bx p {



     color: #FFF;



     text-transform: uppercase;



     margin: 0;



 }



 .form-bx {



     background: #FFF;



 }



 /*avtar pic set*/



 .auther-pic-text .profile-pic-bx {



     float: left;



     width: 180px;



     position: relative;



 }



 .auther-pic-text .profile-pic-bx div.RWMB-drag-drop {



     height: auto;



 }



 .auther-pic-text .profile-pic-bx .drag-drop-inside p {



     display: none;



 }



 .auther-pic-text .profile-pic-bx .drag-drop-inside p.drag-drop-buttons {



     display: block;



 }



 .auther-pic-text .profile-pic-bx .rwmb-images li {



     min-height: 180px;



 }



 .auther-pic-text .profile-text-bx {



     margin-left: 200px;



 }



 .auther-pic-text .profile-text-bx p {



     color: #888888;



     font-size: 14px;



     line-height: 24px;



     padding-top: 15px;



     margin-bottom: 15px;



 }



 @media only screen and (max-width: 767px) {



 .auther-pic-text .profile-text-bx p {



 	padding-top: 0;



 	margin:0;



 	line-height:16px;



 }



 }



 @media only screen and (max-width: 480px) {



 .auther-pic-text .profile-pic-bx {



 	float: left;



 	width: 130px;



 	margin-bottom: 30px;



 	margin-right:15px;



 }



 .auther-pic-text .profile-text-bx {



 	margin-left: 140px;



 }



 }



 .auther-pic-text .profile-text-bx ul {



     margin: 0;



     text-transform: uppercase;



 }



 .auther-pic-text .profile-text-bx ul li {



     padding: 4px 0;



 }



 .auther-pic-text .profile-text-bx ul li strong {



     display: inline-block;



     color: #555555;



     width: 130px;



 }



 @media only screen and (max-width: 480px) {



 .auther-pic-text .profile-text-bx ul li strong {



     display: block;



 	font-size:12px;



 }



 }



 .profile-pic-bx .rwmb-input .drag-drop-inside {



     padding: 0;



 }



 .profile-pic-bx .rwmb-input .drag-drop-inside img {



     position: static;



     left: 0;



     top: 0;



     width: 100%;



     height: auto;



 }



 .profile-pic-bx p.drag-drop-buttons {



     position: absolute;



     left: 0;



     bottom: 0;



     margin: 0;



     width: 100%;



 }



 .profile-pic-bx p.drag-drop-buttons .btn {



     width: 100%;



 }



 .profile-pic-bx ul.rwmb-images li {



     width: auto;



     float: none;



     margin: 0;



 }



 .profile-pic-bx ul.rwmb-images li .rwmb-image-bar,



 .gallery-images .rwmb-image-bar,



 .attachment-files .rwmb-image-bar,



 .rwmb-video-thumb .rwmb-thumb-bar {



     padding: 0px 6px;



 }



 .rwmb-image-bar a.rwmb-delete-file,



 .rwmb-video-thumb a.rwmb-delete-file {



     font-size: 19px;



     color: #fff;



 }



 /*Profile panel box*/



 .pro-setting .panel-heading {



     padding: 12px 25px;



     border-bottom: 1px solid #e1e1e1;



 }



 .pro-setting .panel-heading .panel-tittle {



     margin: 0;



 }



 /*attachments*/



 .form-control[readonly] {



     background: #FFF;



 }



 /*address map*/



 .pro-setting .rwmb-map-wrapper {



     padding: 0 15px;



 }



 /*availability*/



 .form-availability .time-zone,



 .form-availability .selected-time {



     list-style: none;



     margin: 0 0 15px;



 }



 .form-availability .time-zone li {



     width:16.689%;



     border: 1px solid #CCC;



     display: block;



     float: left;



     margin: 0 -1px -1px 0;



     padding: 10px 10px;



     cursor: pointer;



 }



 @media only screen and (max-width: 460px) {



     .form-availability .time-zone li {



         width: 25%;



     }



 }



 .form-availability .time-zone li.selected {



     background: #CCCCCC;



     color: #FFFFFF;



 }



 .form-availability .selected-time li {



     padding: 0;



     margin-bottom: 10px;



 }



 /*schedule*/



 .scheduledata-bx {



     border-bottom: 1px solid #ddd;



     margin-bottom: 30px;



     padding-bottom: 20px;



 }



 .scheduledata-bx .tabbable {



     margin-bottom: 20px;



 }



 .scheduledata-bx #membertab li {



     margin: 0 10px 10px 0px;



 }



 .scheduledata-bx .month-title {



     float: left;



 }



 .scheduledata-bx .month-title {



     float: left;



     margin: 10px 0 10px;



 }



 .scheduledata-bx .staffmembers-bx {



     float: right;



 }



 .scheduledata-bx .staffmembers-bx .btn-group {



     margin-left: 10px;



 }



 .scheduledata-bx .multiselect {



     background: #FFF;



     border: 1px solid #e1e1e1;



 }



 .scheduledata-bx .btn:focus,



 .scheduledata-bx .btn:active,



 .scheduledata-bx .btn:hover,



 .scheduledata-bx .btn-default.active,



 .btn-default:active,



 .scheduledata-bx .open > .dropdown-toggle.btn-default {



     background: #FFF;



     border: 1px solid #e1e1e1;



 }



 .scheduledata-bx .btn-group .dropdown-menu {



     margin: 0;



 }



 .scheduledata-bx .btn-group .dropdown-menu li {



     padding: 0;



 }



 .scheduledata-bx .btn-group .dropdown-menu li a {



     padding: 8px 10px;



 }



 .scheduledata-bx .btn-group .dropdown-menu li .checkbox {



     margin: 0;



 }



 #schedule .pull-right.form-inline {



     float: none !important;



 }



 .member-thumb {



     border: 1px solid #CCC;



     background: #fff;



     padding: 5px;



     float: left;



     text-align: center;



 }



 .member-thumb img {



     display: block;



     margin-bottom: 5px;



 }



 @media only screen and (max-width: 680px) {



     #schedule .pull-right.form-inline .btn-group {



         display: block;



         clear: both;



     }



     #schedule .pull-right.form-inline .btn-group:first-child .btn {



         display: table-cell;



         width: 33.333%;



         margin: 5px 0;



     }



     #schedule .pull-right.form-inline .btn-group:last-child .btn {



         display: table-cell;



         width: 25%;



         margin: 5px 0;



     }



 }



 /*invoice*/



 .add-invoice .col-xs-offset-1,



 .invoiceservices-bx .col-xs-offset-1,



 .add-booking-invoice .col-xs-offset-1 {



     margin-left: 0;



 }



 .add-invoice .has-feedback input.form-control {



     padding: 9px 12px;



 }



 .add-invoice .text-nowrap .num-hours,



 .invoiceservices-bx .text-nowrap .num-hours {



     width: 65px !important;



     display: inline-block;



 }



 .invoiceservices-bx .has-feedback .form-control {



     padding-right: 12px;



 }



 .invoiceservices-bx .has-feedback .bootstrap-select.form-control {



     padding-right: 0;



 }



 /*add invoice popup*/



 .servicearea-group {



     margin-left: -15px;



     margin-right: -15px;



 }



 .invoiceservices-bx {



     position: relative;



     padding-bottom: 30px



 }



 .sf-invoice-addbtn {



     position: absolute;



     bottom: 0;



     right: -22px;



 }



 /*Invoice Manager status*/



 .invoice-view .invoice-status {



     padding: 10px 0;



     display: block;



     border-top: 1px solid #CCC;



     border-bottom: 1px solid #CCC;



     font-size: 24px;



     color: #3396d1;



     margin-bottom: 30px;



     text-transform: uppercase;



 }



 #booking-details .member-thumb {



     display: inline-block;



     text-align: center;



     text-transform: uppercase;



     font-size: 11px;



     color: #333;



 }



 #booking-details .member-thumb img {



     display: block;



     border: 1px solid #FFF;



 }



 .profile-form-bx #feature-req-bx .sf-card-group {



     margin: 15px 0;



     position: relative;



 }



 .profile-form-bx #feature-req-bx .sf-card-group .radio {



     position: relative;



     display: inline-block;



     margin-right: 15px;



 }



 .profile-form-bx #feature-req-bx .sf-card-group .btn.btn-block {



     margin: 15px -15px 0;



 }



 .profile-form-bx #feature-req-bx #featurecardinfo {



     margin: 0 -15px;



 }



 /*send reminder mail popup*/



 .send-reminder-form .control-label {



     margin-bottom: 10px;



 }



 .send-reminder-form .control-label {



     margin-bottom: 10px;



 }



 .send-reminder-form .reminder-text-area {



     margin-bottom: 20px;



 }



 /*calender css*/



 .zabuto_calendar,



 .zabuto_calendar th,



 .zabuto_calendar td,



 .zabuto_calendar .calendar-month-navigation {



     text-align: center;



     cursor: pointer;



 }



 .zabuto_calendar .allbooked {



     background: #f3e7f3 !important;



     cursor: not-allowed !important;



     color: #b699b6;



     font-weight: 600;



 }



 .zabuto_calendar .unavailable {



     background: #fbdede !important;



     cursor: not-allowed !important;



     color: #c79797;



     font-weight: 600;



 }



 .zabuto_calendar .selected {



     background: #bce1f7 !important;



     color: #6999b5;



     font-weight: 600;



 }



 .zabuto_calendar .badge-today {



     background-color: #f1f1f1 !important;



     color: #757575 !important;



     font-weight: 600;



 }



 .zabuto_calendar .badge {



     border-radius: 0;



     display: table-cell;



     min-width: auto;



 }



 div.zabuto_calendar .table tr.calendar-dow-header th {



     background-color: #f0f0f0;



     padding: 14px 0;



 }



 div.zabuto_calendar .table tr.calendar-month-header th {



     background-color: #fff;



 }



 @media only screen and (max-width: 991px) {



     .servicearea-group .form-group.has-feedback:after {



         content: "";



         border-bottom: 2px solid #e1e1e1;



         display: block;



         margin: 0 15px;



     }



     .servicearea-group .col-xs-3 {



         width: 33.333%;



         margin-bottom: 15px;



     }



     .servicearea-group .col-xs-2 {



         width: 33.333%;



         margin-bottom: 15px;



     }



     .servicearea-group .col-xs-2 {



         width: 33.333%;



         margin-bottom: 15px;



         clear: both;



     }



     .servicearea-group .col-xs-1 {



         width: 65%;



         margin-bottom: 15px;



     }



 }



 @media only screen and (max-width: 767px) {



     .servicearea-group .col-xs-3 {



         width: 50%;



     }



     .servicearea-group .col-xs-2 {



         width: 50%;



     }



     .servicearea-group .col-xs-2 {



         width: 50%;



         clear: none;



     }



     .servicearea-group .col-xs-1 {



         width: 100%;



         clear: both;



     }



     .servicearea-group .col-xs-3 .form-group.form-inline {



         margin-bottom: 15px;



     }



     .servicearea-group .col-xs-3 .radio {



         display: inline-block;



     }



 }



 @media only screen and (max-width: 420px) {



     .servicearea-group .col-xs-3 {



         width: 100%;



     }



     .servicearea-group .col-xs-2 {



         width: 100%;



     }



     .servicearea-group .col-xs-2 {



         width: 100%;



         clear: none;



     }



     .servicearea-group .col-xs-1 {



         width: 100%;



         clear: both;



     }



 }



 /*Category*/



 .category-drop .text {



     font-weight: 600;



 }



 .category-drop .childcat {



     padding-left: 10px;



 }



 /*gallery & document attachment */



 div.RWMB-drag-drop {



     border: 2px dashed #ddd !important;



 }



 .gallery-images .rwmb-input .rwmb-drag-drop,



 .attachment-files .rwmb-input .rwmb-drag-drop,



 .profile-pic-bx .rwmb-input .rwmb-drag-drop {



     border-width: 2px;



 }



 .gallery-images .rwmb-input .drag-drop-inside,



 .attachment-files .rwmb-input .drag-drop-inside,



 .profile-pic-bx .rwmb-input .drag-drop-inside {



     padding: 30px;



 }



 .gallery-images .rwmb-input .drag-drop-inside p,



 .attachment-files .rwmb-input .drag-drop-inside p,



 .profile-pic-bx .rwmb-input .drag-drop-inside p {



     margin: 0 0 5px;



     font-size: 20px;



     text-transform: uppercase;



 }



 .gallery-images .rwmb-input p.drag-drop-buttons,



 .attachment-files .rwmb-input p.drag-drop-buttons,



 .profile-pic-bx .rwmb-input p.drag-drop-buttons {



     margin: 10px 0 0;



 }



 .gallery-images ul.rwmb-images,



 .attachment-files ul.rwmb-images,



 .sf-videothumbs ul.rwmb-video-thumb {



     list-style: none;



     margin: 0 -15px;



 }



 .gallery-images ul.rwmb-images li,



 .sf-videothumbs ul.rwmb-video-thumb li {



     margin: 0 0 30px;



     padding: 0 15px;



     width: 25%;



     height: auto;



     min-height: 100px;



     float: left;



     position: relative;



 }



 .rwmb-oembed-wrapper .addbtn.sf-add-video {



     margin-bottom: 15px;



 }



 @media only screen and (max-width: 480px) {



     .gallery-images ul.rwmb-images li {



         width: 33.333%;



     }



 }



 .attachment-files ul.rwmb-images li {



     margin: 0 0 30px;



     padding: 0 15px;



     width: 25%;



     height: auto;



     min-height: 60px;



 }



 @media only screen and (max-width: 480px) {



     .attachment-files ul.rwmb-images li {



         width: 33.333%;



         min-height: 50px;



     }



 }



 .gallery-images .rwmb-image-bar,



 .attachment-files .rwmb-image-bar,



 .rwmb-video-thumb .rwmb-thumb-bar {



     right: 15px;



 }



 .gallery-images ul.rwmb-images li img,



 .attachment-files ul.rwmb-images li img,



 .sf-videothumbs ul.rwmb-video-thumb li img {



     width: 100%;



     height: auto;



 }



 .profile-pic-bx ul.rwmb-images,



 .profile-pic-bx ul.rwmb-images li,



 ul.rwmb-images,



 ul.rwmb-images li {



     margin: 0;



     padding: 0;



     list-style: none;



 }



 .profile-pic-bx ul.rwmb-images li img {



     width: 100%;



     height: auto;



 }



 .rwmb-image-bar a.rwmb-delete-file {



     color: #FFF;



 }



 .rwmb-image-bar a.rwmb-delete-file:hover {



     color: #FFF;



 }



 /*calender-css*/



 .cal-context #cal-slide-content {



     background-image: none;



     background-color: #f1f1f1;



     box-shadow: none;



     -webkit-box-shadow: none;



 }



 .cal-context #cal-slide-content:hover {



     background-color: #f1f1f1;



 }



 .cal-context #cal-slide-content ul {



     margin: 0;



 }



 .cal-context #cal-slide-content ul li {



     padding: 0;



     margin-bottom: 10px;



     border-bottom: 1px dashed #ccc;



 }



 .cal-context .cal-event-list .event.pull-left {



     margin-top: 6px;



 }



 .cal-context .event-info {



     background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .cal-context #cal-slide-content a.event-item {



     display: inline-block;



     color: #777777;



 }



 .cal-context #cal-slide-content a.event-item strong {



     text-transform: uppercase;



 }



 .cal-context #cal-slide-content a.event-item p {



     margin: 0;



 }



 .event-info.sf-pending {



     background-color: #FF8040;



 }



 .event-info.sf-complete {



     background-color: #10C21E;



 }



 .event-info.sf-cancel {



     background-color: #F80C12;



 }



 /*Embeded Code*/



 .rwmb-input.ui-sortable {



     position: relative;



 }



 .rwmb-input.ui-sortable .show-embed {



     position: absolute;



     top: 0;



     right: 0;



 	padding:14px 15px;



 }



 .rwmb-input.ui-sortable .form-control {



     margin-bottom: 30px;



     padding-right: 95px;



 }



 .rwmb-oembed-wrapper .addbtn {



     margin-top: 15px;



 }



 /*pop content */



 .edit-member .profile-pic-bx,



 .add-new-member .profile-pic-bx {



     max-width: 200px;



     margin: 0 auto 30px;



 }



 .edit-member .profile-pic-bx img,



 .add-new-member .profile-pic-bx img {



     width: 100%;



     height: auto;



 }



 /*Payment Card*/



 .sf-card-group {



     margin: 20px -15px !important;



     padding: 0 5px 0 0;



 }



 .sf-card-group img,



 .sf-card-my-account img {



     margin-top: -10px;



     margin-right: 5px;



     height: 34px;



 }



 .sf-card-group.margin-less {



     margin: 20px 0;



     padding: 0 15px;



 }



 /*Add New Group */



 .sf-group-list {



     list-style: none;



     margin: 0 -5px;



 }



 .sf-group-list li {



     display: inline-block;



     padding: 5px 10px;



     border: 1px solid #ddd;



     margin: 5px;



     vertical-align: middle;



 }



 .sf-group-list li .delete-group {



     margin-left: 5px;



     font-weight: 600;



 }



 /* Customer login */



 .current-booking {



     border: 1px solid #e1e1e1;



     padding: 30px;



     position: relative;



 }



 .current-booking .provider-pic {



     float: left;



     margin-right: 30px;



     width: 200px;



 }



 .current-booking .meta-d-t span {



     display: block;



     font-size: 15px;



     margin-bottom: 10px;



 }



 .current-booking .btn {



     position: absolute;



     right: 30px;



     top: 50px;



 }



 /* Bookings list  */



 table.booking-listing tr th {



     display: none;



 }



 table.booking-listing tr td {



     padding: 15px 10px;



 }



 table.booking-listing tr td .inner > h3 {



     white-space:nowrap;



 }



 table.booking-listing tr td .booking-option .dropdown-menu { left:auto; right:0px; }



 table.booking-listing tr td .booking-option .dropdown-menu li a { padding:7px 15px; }



 @media only screen and (max-width: 991px) {



 table.booking-listing tr td .inner > h3 {



     white-space:normal;



 }



 }



 table.booking-listing .provider-pic {



 	width:70px;



     display:inline-block;



 	border:1px solid #ddd;



 }



 table.booking-listing .provider-pic img {



     width: 100%;



     height: auto;



 	border:none;



 }



 table.booking-listing .booking-date-time span {



     display: block;



     margin-bottom: 10px;



 }



 table.booking-listing .booking-date-time span i {



     margin-right: 5px;



     color: #555555;



 }



 table.booking-listing .bootstrap-select {



     width: auto !important;



 }



 /*=== Contact us page ==== */



 .banner-contact-row {



     height: 300px;



     background-size: cover;



     background-position: center;



 }



 .banner-contact-row * {



     color: #FFF;



 }



 .banner-contact-row .container {



     display: table;



     height: 100%;



 }



 .banner-contact-row h1 {



     display: table-cell;



     vertical-align: middle;



 }



 ul.contact-info {



     min-height: 293px;



 }



 ul.contact-info li {



     padding: 0 0 15px 25px;



     margin-bottom: 15px;



     border-bottom: 1px solid #e1e1e1;



     position: relative;



     line-height: 20px;



 }



 ul.contact-info li:last-child {



     padding-bottom: 0;



     margin-bottom: 0;



     border-bottom: none;



 }



 ul.contact-info li h4 ul.contact-info li h5,



 ul.contact-info li h6 {



     margin: 0 0 10px;



 }



 ul.contact-info li p {



     line-height: 20px;



     margin: 0;



 }



 ul.contact-info li .fa {



     position: absolute;



     left: 0;



     top: 2px;



     color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     font-size: 16px;



 }



 /*page not found*/



 .page-notfound {



     padding: 50px 0;



 }



 .page-notfound strong {



     font-size: 200px;



     font-weight: 900;



     line-height: 140px;



     display: block;



 }



 .page-notfound strong i {



     font-size: 190px;



     margin: 0 10px;



 }



 .page-notfound .searchform {



     position: relative;



     text-align: left;



     max-width: 420px;



     margin: 30px auto;



 }



 .sticky {



     clear: both;



 }



 .gallery-caption {



     clear: both;



 }



 .bypostauthor {



     clear: both;



 }



 .page-notfound span {



     font-size: 48px;



     display: block;



     color: #333;



     font-weight: 600;



     text-transform: uppercase;



     margin-bottom: 30px;



 }



 /*--------------------------------------------------------------- 



 31. themeforest required classes



 ---------------------------------------------------------------*/



 /* Text meant only for screen readers. */



 .screen-reader-text {



     clip: rect(1px, 1px, 1px, 1px);



     position: absolute !important;



     height: 1px;



     width: 1px;



     overflow: hidden;



 }



 .screen-reader-text:focus {



     background-color: #f1f1f1;



     border-radius: 3px;



     box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);



     clip: auto !important;



     color: #21759b;



     display: block;



     font-size: 14px;



     font-size: 0.875rem;



     font-weight: bold;



     height: auto;



     left: 5px;



     line-height: normal;



     padding: 15px 23px 14px;



     text-decoration: none;



     top: 5px;



     width: auto;



     z-index: 100000;



     / Above WP toolbar. /



 }



 /*---------------------------------------------------------------



 32. Autocomplete script UI



 ---------------------------------------------------------------*/



 .ui-autocomplete {



     position: absolute;



     top: 100%;



     left: 0;



     z-index: 1000;



     float: left;



     display: none;



     min-width: 160px;



     padding: 4px 0;



     margin: 0 0 10px 25px;



     list-style: none;



     background-color: #ffffff;



     border-color: #ccc;



     border-color: rgba(0, 0, 0, 0.2);



     border-style: solid;



     border-width: 1px;



     -webkit-border-radius: 5px;



     -moz-border-radius: 5px;



     border-radius: 5px;



     -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);



     -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);



     box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);



     -webkit-background-clip: padding-box;



     -moz-background-clip: padding;



     background-clip: padding-box;



     *border-right-width: 2px;



     *border-bottom-width: 2px;



 }



 .ui-menu-item > a.ui-corner-all {



     display: block;



     padding: 3px 15px;



     clear: both;



     font-weight: normal;



     line-height: 18px;



     color: #555555;



     white-space: nowrap;



     text-decoration: none;



 }



 .ui-state-hover,



 .ui-state-active {



     color: #ffffff;



     text-decoration: none;



     background-color: #0088cc;



     border-radius: 0px;



     -webkit-border-radius: 0px;



     -moz-border-radius: 0px;



     background-image: none;



 }



 .ui-helper-hidden-accessible {



     display: none;



 }



 .contact-area-bx {



     overflow: hidden;



     height: 350px;



     width: 100%;



 }



 .default-hidden {



     display: none;



 }



 .update-nag {



     display: block;



     clear: both;



 }



 .datepicker {



     z-index: 1200 !important;



 }



 /*== Clear Floating afetr & beftore classes ==*/



 ul.job_listings li.job_listing:after,



 ul.job_listings li.job_listing:before,



 .job_filters .showing_jobs:after,



 .job_filters .showing_jobs:before,



 .sf-cati-all:after,



 .sf-cati-all:before {



     content: ".";



     display: block;



     clear: both;



     visibility: hidden;



     line-height: 0;



     height: 0;



 }



 /*job css*/



 .job_filters {



 	padding: 25px;



 	background:#fff; 



 	border:1px solid #e3e7eb;



 }



 .job_filters [class*="search_"] {margin-bottom:20px;}



 .job_filters [class*="search_"]:last-child {margin-bottom:0;}



 .job_listings {margin-left:-15px; margin-right:-15px;}



 .job_listings:after { content:""; clear:both; display:table;}



 .sf-left-jobs-search,



 .sf-right-jobs-resuts {padding-left:15px; padding-right:15px;}



 .sf-left-jobs-search {width:25%; float:left; padding-left:15px; padding-right:15px;}



 .sf-right-jobs-resuts {width:75%; float:right;}



 @media only screen and (max-width: 991px) { 



 .sf-left-jobs-search {width:30%;}



 .sf-right-jobs-resuts {width:70%;}



 }



 .job_filters .search_jobs {



 	padding:0;



 	margin-bottom:30px;



 }



 .job_filters .search_jobs > div.search_keywords,



 .job_filters .search_jobs > div.search_location,



 .job_filters .search_jobs > div.search_region,



 .job_filters .search_jobs > div.search_categories {



     float: none;



     padding:0;



     width: 100%;



 	clear: none;



 }



 .job_filters .search_jobs input {



     width: 100%;



     border: 1px solid #ddd;



     font-size: 13px;



     height: 40px;



     line-height: 20px;



     padding: 9px 12px;



 }



 .job_filters .job_types {



 	background:none;



     border: none;



     font-size: 14px;



     padding: 0;



 }



 .job_filters .job_types li {



     padding:0;



     float: none;



     font-size: 14px;



     line-height: 18px;



 	border:none;



 	margin-bottom:15px;



 }



 .job_filters .job_types li:last-child {



 	margin-bottom:0;



 }



 @media only screen and (max-width: 991px) {



 .job_filters .search_jobs div.search_keywords,



 .job_filters .search_jobs div.search_location,



 .job_filters .search_jobs div.search_provider_categories,



 .job_filters .search_jobs div.search_categories {



     float: none;



     margin: 0 0 15px;



     padding: 0;



     width: auto;



 }



 .job_filters .job_types li:last-child {



     border-right: inherit;



 }



 }



 .job_filters .job_types li .checkbox {



     margin: 0;



     line-height: 20px;



 }



 .job_filters .job_types li label {



     margin: 0;



 }



 .job_filters .showing_jobs {



     background: #fff;



 	border:none;



     border-top: 1px solid #ddd;



     font-size: 12px;



     padding:25px 25px 0;



 	margin:25px -25px 0;



 }



 .showing_jobs > span {



     display: block;



 	margin-bottom:10px;



 }



 .job_filters .showing_jobs a.rss_link:before,



 .job_filters .showing_jobs a.reset:before {



     content: "\f09e";



     font-family: 'FontAwesome';



     color: #fff;



     margin-right: 5px;



     font-size: 13px;



     font-weight: normal;



 }



 .job_filters .showing_jobs a {float:left;}



 .job_filters .showing_jobs a.rss_link {



     color: #fff;



     display: block;



     background-color: #f08d3c;



     font-weight: 600;



     padding: 2px 10px;



 }



 .job_filters .showing_jobs a.rss_link:before {



     content: "\f09e";



 }



 .job_filters .showing_jobs a.reset {



     color: #fff;



     display: block;



     background-color: #707070;



     font-weight: 600;



     padding: 2px 10px;



     margin-right: 10px;



 }



 .job_filters .showing_jobs a.reset:before {



     content: "\f01e";



 }



 ul.job_listings {



     border-top: 1px solid #ddd;



 }



 ul.job_listings li.job_listing {



     background: #fff;



     border-right: 1px solid #ddd;



     border-left: 1px solid #ddd;



     border-bottom: 1px solid #ddd;



     font-size: 14px;



     padding:20px;



     position: relative;



 }



 ul.job_listings li.job_listing:hover {



 	background-color:#fafafa;



 }



 ul.job_listings li.job_listing a.job-clickable-box {



     padding: 0;



     position: absolute;



     left: 0;



     top: 0;



     width: 100%;



     height: 100%;



     background: none !important;



 }



 ul.job_listings .job_listing .job-comapny-logo {



     width: 100px;



     height:100px;



     float: left;



 	overflow:hidden;



 	padding:5px;



 	border:1px solid #ddd;



 	background-color:#fff;



 	border-radius:100% !important;



 	-webkit-border-radius:100% !important;



 }



 ul.job_listings .job_listing .job-comapny-logo img {



 	width: 100%;



 	height: auto;



 	border-radius:100% !important;



 	-webkit-border-radius:100% !important;



 }



 .job_listing .location {



     position: relative;



 }



 .job_listing .location:before {



     content: "\f041";



     font-family: 'FontAwesome';



     position: absolute;



     left: 15px;



     top:-3px;



     font-size: 20px;



     color: #767676;



 }



 .job-comapny-info {



     padding-top: 15px;



     padding-left: 100px;



 }



 .job-comapny-info:after {



 	content:"";



 	clear:both;



 	display:block;



 }



 .job-comapny-info .position,



 .job-comapny-info .location,



 .job-comapny-info .meta {



     vertical-align: top;



     padding-left: 30px;



     display: block;



 	float:left;



 }



 .job-comapny-info .position {



     width: 40%;



 }



 .job-comapny-info .position h3 {



     font-size: 18px;



     margin-bottom: 5px;



     margin-top: 0;



     text-transform: none;



 }



 .job-comapny-info .position .company strong {



     font-weight: normal;



     color: #777;



 }



 .job-comapny-info .location {



     width:30%;



     font-size: 16px;



     padding-left:35px;



 }



 .job-comapny-info .meta {



     width:30%;



     list-style: none;



     margin-left: 0;



 }



 .job_listing .meta li {



     text-align: center;



     line-height: 22px;



     padding: 0 10px;



 }



 .job_listing .job-type {



     color: #fff;



     font-weight: 600;



     text-transform: uppercase;



     font-size: 13px;



     background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .job_listing .job-type.hourly {



     background-color: #3396D1;



 }



 .job_listing .job-type.full-time {



     background-color: #77c04b;



 }



 .job_listing .job-type.part-time {



     background-color: #ebc23a;



 }



 .job_listing .job-type.freelance {



     background-color: #E34C43;



 }



 .job_listing .job-type.temporary {



     background-color: #E9616F;



 }



 .job_listing .job-type.fix-price {



     background-color: #EB6725;



 }



 .job_listing .job-type.internship {



     background-color: #8645A6;



 }



 .job_listing .date {



     color: #666;



     background-color: #EFEFEF;



 }



 .job_listing .date date:before {



     content: "\f017";



     font-family: 'FontAwesome';



     margin-right: 5px;



 }



 .job-manager-category-dropdown .dropdown-toggle {padding-left:10px;}



 @media only screen and (max-width: 991px) {



 ul.job_listings .job_listing .job-comapny-logo { width: 80px; height: 80px; padding:3px; border: 1px solid #ddd; }	



 .job-comapny-info { padding-top: 10px; padding-left: 80px; }



 .job-comapny-info .position { width:50%;}



 .job-comapny-info .location {font-size:13px; width:50%; padding-left:35px;}



 .job-comapny-info .meta { width:120px; clear:both;}



 .job_listing .job-type {font-size:12px;}



 .job_listing .meta li {font-size:12px;}



 .job-comapny-info .position,



 .job-comapny-info .meta {	padding-left: 25px;}



 .job-comapny-info .location {	padding-left:32px;}



 }



 @media only screen and (max-width: 767px) {



 ul.job_listings .job_listing .job-comapny-logo { width: 50px; height: 50px;  }	



 .job-comapny-info { padding-top:0; padding-left: 50px; }



 .job-comapny-info .meta { padding-top:10px; }



 .job-comapny-info .position,



 .job-comapny-info .meta {	padding-left:15px;}



 .sf-left-jobs-search {width:35%;}



 .sf-right-jobs-resuts {width:65%;}



 .job_filters { padding:15px; }



 .job_filters .showing_jobs {  padding: 15px 15px 0;  margin: 15px -15px 0; }



 }



 @media only screen and (max-width: 600px) {



 .sf-left-jobs-search {width:38%;}



 .sf-right-jobs-resuts {width:62%;}



 .job-comapny-info .position,



 .job-comapny-info .location { width:100%; margin-bottom:15px;}



 .job-comapny-info .meta { padding-top:0; }



 }



 @media only screen and (max-width: 500px) {



 .sf-left-jobs-search {width:100%; margin-bottom:30px;}



 .sf-right-jobs-resuts {width:100%;}



 .job_filters .job_types li { display:inline-block; margin:0 10px 10px 0;}



 }



 /*JOB-MANAGER-FORM CSS*/



 .job-manager-form {



     background-color: #fff;



     border: 2px solid #e1e1e1;



     padding: 20px 0;



 }



 .job-manager-form h2 {



     padding: 0 30px;



 }



 .job-manager-form fieldset {



     padding: 15px 30px;



     border-bottom: none;



 }



 .job-manager-form fieldset .account-sign-in {



     padding: 15px;



     border: 1px solid #e1e1e1;



     background-color: #f8f8f8;



     font-weight: 600;



 }



 .job-manager-form .chosen-container-multi .chosen-choices {



     border: 1px solid #e1e1e1;



     outline: none;



 }



 .job-manager-form fieldset input.input-text {



     border: 1px solid #e1e1e1;



     font-size: 13px;



     height: 40px;



     line-height: 20px;



     padding: 9px 12px;



 }



 .job-manager-form fieldset textarea {



     border: 1px solid #e1e1e1;



     box-shadow: none;



     font-size: 13px;



     padding: 9px 12px;



 }



 .job-manager-form fieldset .wp-editor-container {



     border: 1px solid #e1e1e1;



     border-radius: 0;



     -webkit-border-radius: 0;



 }



 .job-manager-form fieldset input.wp-job-manager-file-upload {



     padding: 0;



     border: none;



 }



 .job-manager-form fieldset .account-sign-in .button {



     float: right;



 }



 .job-manager-form input[type="submit"] {



     margin-left: 31%;



 }



 .job-manager-form input[type="submit"],



 .job-manager-form fieldset .account-sign-in .button,



 .single_job_listing .application .application_button,



 .load_more_jobs strong {



     background-color: #77c04b;



     color: #ffffff;



     padding: 9px 20px;



     line-height: 1.5;



     display: inline-block;



     border-top: none;



     border-left: none;



     border-right: none;



     font-size: 14px;



     border-bottom: 2px solid #62a643;



     font-weight: normal;



 }



 .job-manager-form input[type="submit"]:hover,



 .job-manager-form input[type="submit"]:focus,



 .job-manager-form fieldset .account-sign-in .button:hover,



 .job-manager-form fieldset .account-sign-in .button:focus,



 .single_job_listing .application .application_button:hover,



 .single_job_listing .application .application_button:focus,



 .load_more_jobs strong:hover,



 .load_more_jobs strong:focus {



     background-color: #6ab33e;



     border-color: #5a9e2f;



     color: #ffffff;



 }



 @media only screen and (max-width: 767px) {



     .job-manager-form fieldset label,



     .job-manager-form fieldset div.field {



         float: none;



         width: auto;



     }



 }



 /*job detail css*/



 .sf-job-info {



     background-color: #fff;



     padding: 30px;



 }



 .sf-job-info .company-logo-info {



     width: 150px;



     float: left;



 }



 .sf-job-info .sf-job-detail {



     clear: both;



 }



 .sf-job-title-company {



     margin-left: 170px;



 }



 .sf-job-company-name {



     font-size: 18px;



 }



 .sf-job-company-name strong {



     font-weight: normal;



 }



 .job_application.application {



     position: absolute;



     right: 30px;



     top: 50px;



 }



 .single_job_listing .meta {



     padding: 30px 0;



     margin-bottom: 0;



 }



 @media only screen and (max-width: 767px) {



     .sf-job-title {



         margin: 0 0 10px;



     }



     .sf-job-info .company-logo-info {



         width: 90px;



     }



     .sf-job-title-company {



         margin-left: 100px;



         margin-right: 0;



     }



     .job_application.application {



         margin-left: 100px;



         margin-top: 15px;



         position: static;



     }



 }



 /*== Job Dashboard ==*/



 #job-manager-job-dashboard table th {



     padding:15px 10px;



 }



 #job-manager-job-dashboard table td {



     padding: 10px;



 }



 .sf-cati-row ul {



     padding-bottom: 20px;



     margin: 0 0 20px;



     border-bottom: 1px dashed #CCC;



 }



 .sf-cati-row:last-child ul {



     margin: 0 0 0;



     border-bottom: none;



 }



 .sf-cati-row ul li {



     width: 33%;



     display: inline-block;



     padding: 10px 20px 10px 0;



     font-size: 15px;



 }



 .sf-cati-row ul li [class*="icon-bx"] {



     width: 25px;



     height: 25px;



     background-color: #FFF;



     line-height: 25px;



     margin-right: 15px;



 }



 .sf-cati-row ul li [class*="icon-bx"] img {



     height: 22px;



 }



 @media only screen and (max-width: 991px) {



     .sf-cati-row ul li {



         width: 49.555%;



     }



 }



 @media only screen and (max-width: 767px) {



     .sf-cati-row ul li {



         width: 100%;



     }



 }



 /*== choose service in bookin form css ==*/



 .sf-noservice-available { padding:30px; text-align:center; border:2px solid #ddd; font-size:18px; color:#999; margin:-35px 15px 0px; }



 .tab-service-area {padding-top: 0;padding-bottom: 20px;}



 .aon-service-outer {margin-bottom: 30px;position: relative;}



 .aon-service-outer .bootstrap-touchspin {position: absolute;bottom: 0;left: 0;padding: 0 15px; display:table;}



 .aon-service-outer .bootstrap-touchspin .input-group-btn { vertical-align:bottom; }



 .aon-service-outer .bootstrap-touchspin .btn {border: 1px solid #e1e1e1;font-size: 16px;font-weight: 600;padding: 8px 20px;height: 35px;}



 .aon-service-outer .bootstrap-touchspin .form-control { height: 35px;}



 .aon-service-outer .bootstrap-touchspin .bootstrap-touchspin-postfix {border-left: none;font-size: 11px;text-transform: uppercase;}



 .aon-service-outer .bootstrap-touchspin .form-control {font-size: 11px;}



 .sf-service-fixhr-bx .input-table-bx {display: table;width: 100%;}



 .sf-service-fixhr-bx .input-cell-bx {display: table-cell;width: 1%;border: 1px solid #ddd;background-color: #fff;text-align: center;vertical-align: middle;font-weight: 600;position: relative;}



 .sf-service-fixhr-bx .input-cell-bx > .fa {position: absolute;top: 14px;left: 14px;z-index: 3;}



 .sf-service-fixhr-bx .input-cell-bx input {border: none;text-align: center;}



 .aon-service-bx {  background-color: #fff;    border: 1px solid #e1e1e1;   text-align: center;    position: relative;    cursor: pointer;}



 .aon-service-done {   position: absolute;    content: "";    top: 0;    left: 0;   width: 40%;   height: 40%;    margin: 30%;    background-color: rgba(255, 255, 255, 0.5);   opacity: 0; }



 .aon-service-done .fa {content: "\f00c";font-family: "FontAwesome";position: absolute;top: 50%;left: 50%;margin: -35px;font-size: 40px;color: #77c04b;-moz-transform: scale(0);-webkit-transform: scale(0);-o-transform: scale(0);-ms-transform: scale(0);transform: scale(0);}



 .selected .aon-service-done .fa {-moz-transform: scale(1);-webkit-transform: scale(1);-o-transform: scale(1);-ms-transform: scale(1);transform: scale(1);}



 .selected .aon-service-done {top: 0;left: 0;width: 100%;height: 100%;margin: 0;opacity: 1;background-color: rgba(255, 255, 255, 0.9);}



 .aon-service-outer {margin-bottom: 30px;}



 .aon-service-outer .addcouponcode-wrap { position: absolute; bottom:35px; left:0; width:100%; padding:0 15px;}



 .aon-service-outer .addcouponcode { width:100%; border-radius: 0; -webkit-border-radius: 0; padding: 2px 10px;}



 .sf-couponcode-popup {position:fixed; width:280px; top:50%; left:50%; margin:-140px;  z-index:9999; padding:30px; background-color:#fff; border:2 px so lid #ddd; text-align:center; -webkit-box-shadow: 0 0 25px 0 rgba(0,0,0,0.5); box-shadow: 0 0 25px 0 rgba(0,0,0,0.5); }



 .sf-couponcode-close,



 .sf-breakpopup-close,



 .sf-memberbreakpopup-close {position:absolute; top:0; right:0; width:30px; height:30px; text-align:center; line-height:30px; cursor:pointer; font-size:14px;}



 .sf-couponcode-close:hover { color:#FF2227; }



 .sf-couponcode-popup .form-control {margin-bottom:15px;}



 .sf-couponcode-popup-overlay { position:fixed; width:100%; height:100%; top:0; left:0; background-color:#fff; opacity:0.7; z-index:9998;}



 .sf-couponcode-popup.sf-cpc-popuplarge { width:400px; margin:-200px; } 



 @media only screen and (max-width: 480px) { 



 .sf-couponcode-popup.sf-cpc-popuplarge { width:300px; margin:-150px; } 



 }



 #addbreaktimepopup.sf-couponcode-popup.sf-cpc-popuplarge { width:650px; margin:-150px -325px; } 



 @media only screen and (max-width:680px) { 



 #addbreaktimepopup.sf-couponcode-popup.sf-cpc-popuplarge { width:300px; margin:-150px; } 



 #addbreaktimepopup.sf-couponcode-popup.sf-cpc-popuplarge [class*="col-xs-"] { width:100%; float:none;} 



 }



 /*== all categories ==*/



 .aon-service-bx [class*="icon-bx-"] {background: none;height: 70px;width: 100%;line-height: 70px;}



 .aon-service-name * { margin: 0; padding: 10px 5px 20px; text-transform: none; min-height: 75px;}



 .aon-service-price {background-color: #f0f0f0;color: #605f5f;font-weight: 600;font-family: Arial;padding: 7px 15px;border: 1px solid #e1e1e1;margin: -1px;font-size: 14px;}



 .aon-service-price .sf-fix-hours {color: #777777;font-weight: 400;margin-left: 10px;font-size: 12px;}



 .aon-service-price .sf-fix-hours:before {content: "/";font-weight: 600;position: relative;left: -5px;color: #CCC;}



 @media only screen and (max-width:767px) { 



 .aon-service-name * {min-height:20px;}



 .aon-service-outer { margin-bottom: 20px; }



 }



 @media only screen and (max-width: 360px) { 



 .form-wizard .wizard-actions .pull-left,



 .form-wizard .wizard-actions .pull-right { float: none;width: 100%;margin: 5px 0;} 



 .form-wizard .wizard-actions li.next,.form-wizard .wizard-actions li.previous { display: block;  width: 100%;  }



 }



 /*== all service ==*/



 .sf-cati-all {



     padding: 25px 0 35px;



 }



 .sf-cati-all ul {



     margin: 0 -1.5%;



 }



 .sf-cati-all ul li {



     width: 30%;



     display: inline-block;



     padding: 20px 0;



     font-size: 15px;



     margin: 0 1.5%;



     border-bottom: 1px dashed #ddd;



 }



 .sf-cati-all ul li span {



     float: right;



     color: #3396D1;



     font-weight: 600;



     font-size: 14px;



 }



 .sf-cati-all ul li span .fa {



     font-weight: 300;



 }



 @media only screen and (max-width: 991px) {



     .sf-cati-all ul li {



         width: 45.666%;



         margin: 0 2%;



         padding: 5px 0;



     }



 }



 @media only screen and (max-width: 767px) {



     .sf-cati-all ul li {



         width: auto;



         margin: 0 15px;



         display: block;



     }



 }



 /*== Provider categories ==*/



 .sf-provider-cat {



     margin-bottom: 20px;



     margin-right: 300px;



 }



 .sf-provider-cat a {



     margin-left: 5px;



     display:inline-block



 }



 .sf-provider-cat.sf-p-c-v2 {



     margin-right: 0;



 }



 .provider-content {



     padding-top: 40px;



 }



 .provider-quotation {



     margin: -15px 0 15px;



 }



 #applicants-listing {



     padding-top: 50px;



 }



 #autocity #signup_city {



     padding-right: 12px;



 }



 @media only screen and (max-width: 991px) {



     .sf-provider-cat {



         margin-right: 0;



     }



 }



 /*== listing set thum height ==*/



 .sf-featured-thum,



 .sf-listing-thum,



 .sf-catagories-listing {



     position: relative;



     height: 220px;



     background-color: #EEE;



     background-repeat: no-repeat;



     background-size: cover;



     background-position: center;



 }



 .sf-featured-thum .sf-featured-link,



 .sf-listing-thum .sf-listing-link {



     position: absolute;



     top: 0;



     left: 0;



     height: 100%;



     width: 100%;



     z-index: 2;



 }



 .sidebar-postion {



     float: <?php echo (!empty($data['sidebar-position'])) ? esc_html($data['sidebar-position']): ''; ?>;



 }



 .show_more_main_v2 {



     clear: both;



 }



 .pixrating_title {



     font-size: 12px;



     font-weight: 600;



     margin: 0 0 3px;



 }



 .review_rate {



     font-size: 8px;



     color: #F4BE36;



 }



 .comments-area .comment-form .logged-in-as,



 .comments-area .comment-form .review-title-form,



 .comments-area .comment-form #add_comment_rating_wrap {



     float: none;



     width: auto;



     display: block;



 }



 .comments-area .comment-form .logged-in-as {



     margin-bottom: 15px;



 }



 .comments-area .comment-form .logged-in-as a {



     color: #999999;



 }



 .comments-area .comment-form .logged-in-as a:last-child {



     color: #333333;



 }



 .comments-area .comment-form p.review-title-form {



     max-width: 700px;



 }



 .comments-area .comment-form p.review-title-form input {



     padding-left: 15px;



 }



 .comments-area .comment-form #add_comment_rating_wrap {



     padding: 0 15px;



     width: 240px;



     margin: 0 0 20px;



 }



 .comments-area .comment-form #add_comment_rating_wrap label {



     display: block;



     font-size: 13px;



 }



 .comments-area .comment-form #add_comment_rating_wrap [class*="star-"] {



     color: #F4BE36;



 }



 .comments-area .comment-form #add_comment_rating_wrap #add_post_rating {



     bottom: 6px;



     right: 15px;



     color: #333333;



     font-weight: 600;



 }



 /* Proder rating */



 .sf-stats-rating {



     width: 170px;



     display: inline-block;



     text-align: right;



     margin-right: 10px;



     vertical-align: top;



 }



 .sf-stats-rating .sf-rating-holder,



 .sf-stats-rating .sf-completed-tasks,



 .sf-stats-rating .sf-average-reviews,



 .sf-stats-rating .sf-rate-persent,



 .sf-stats-rating .sf-average-question {



     padding-top: 1px;



     padding-bottom: 1px;



 }



 .sf-stats-rating .sf-rating-holder {



     color: #F4BE36;



     font-size: 16px;



 }



 .sf-stats-rating .sf-average-reviews {



     display: inline-block;



     font-weight: 600;



 }



 .sf-stats-rating .sf-rate-persent,



 .sf-stats-rating .sf-average-question {



     display: inline-block;



     color: #CCCCCC;



 }



 .sf-stats-rating .sf-completed-tasks {



     font-size: 11px;



 }



 .sf-reviews-summary {



     width: 150px;



     display: inline-block;



     vertical-align: top;



 }



 .sf-reviews-summary .sf-reviews-row {



     display: table;



     width: 100%;



 }



 .sf-reviews-summary .sf-reviews-star,



 .sf-reviews-summary .sf-reviews-star-no {



     display: table-cell;



 }



 .sf-reviews-summary .sf-reviews-star {



     text-align: right;



     padding-right: 10px;



     color: #F4BE36;



     font-size: 12px;



 }



 .sf-reviews-summary .sf-reviews-star-no {



     width: 60px;



     text-align: left;



 }



 /*tooltip css*/



 .sf-provider-tooltip .btn {



     margin: 0 5px 10px !important;



     padding: 4px 5px;



     width: 40px;



 }



 .tooltip-inner {



     padding: 10px;



     font-weight: 600;



     border-radius: 0;



     width: 100%



 }



 /*Plans css*/



 .one-package-show .sf-plans-outer {



 	width:100%;



 }



 .two-package-show .sf-plans-outer {



 	width:50%;



 }



 .three-package-show .sf-plans-outer {



 	width:33.333%;



 }



 .profile-form-bx .sf-plans-list {



     margin: 0 0 30px;



 }



 .sf-plans-list .sf-plans-outer {



 	cursor:pointer;



 	margin:65px 0px;



 }



 @media only screen and (max-width: 991px) {



 .sf-plans-list .sf-plans-outer {



 	margin-bottom:30px;



 }



 .profile-form-bx .sf-plans-list {



     margin: 0 0 0;



 }



 .one-package-show .sf-plans-outer,



 .two-package-show .sf-plans-outer,



 .three-package-show .sf-plans-outer {



 	width:100%;



 }



 }



 .sf-plans-bx {



     border: 1px solid #e1e1e1;



     padding: 30px 20px;



     text-align: center;



     position: relative;



 }



 .sf-plans-bx .sf-plans-name {



     margin-top: 0;



 }



 .sf-plans-bx .sf-plans-price {



     font-size: 30px;



     font-weight: 800;



     margin-bottom: 10px;



     color: ##3396D1;



 }



 .sf-plans-bx .sf-plans-connects {



     font-size: 14px;



     font-weight: 600;



 }



 .sf-plans-done {



     position: absolute;



     content: "";



     top: 0;



     left: 0;



     width: 40%;



     height: 40%;



     margin: 30%;



     background-color: rgba(255, 255, 255, 0.5);



     opacity: 0;



 }



 .sf-plans-done .fa {



     content: "\f00c";



     font-family: "FontAwesome";



     position: absolute;



     top: 50%;



     left: 50%;



     margin: -25px;



     font-size: 50px;



     color: #77c04b;



     -moz-transform: scale(0);



     -webkit-transform: scale(0);



     -o-transform: scale(0);



     -ms-transform: scale(0);



     transform: scale(0);



 }



 .selected .sf-plans-done .fa {



     -moz-transform: scale(1);



     -webkit-transform: scale(1);



     -o-transform: scale(1);



     -ms-transform: scale(1);



     transform: scale(1);



 }



 .selected .sf-plans-done {



     top: 0;



     left: 0;



     width: 100%;



     height: 100%;



     margin: 0;



     opacity: 1;



     background-color: rgba(255, 255, 255, 0.9);



 }



 .selected-plan > .sf-plans-bx {



     background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



     border-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;



 }



 .selected-plan * {



     color: #fff;



 }



 .sf-plans-available {



     margin-bottom: 30px;



 }



 .sf-plans-available li {



     margin-bottom: 10px;



 }



 .sf-plans-available strong {



     color: #333333;



 }



 .sf-overlay-wraper {



     position: absolute;



     left: 0;



     top: 0;



     width: 100%;



     height: 100%;



     background-color: #333;



     opacity: 0.5;



 }



 .sf-alert-bx {



     padding: 15px;



     background-color: #f2dede;



     border-color: #ebccd1;



     color: #a94442;



     margin: 0 15px;



 }



 /*popup set marker position*/



 .set-marker-popup {



     display: none;



     position: fixed;



     top: 0;



     left: 0;



     width: 100%;



     height: 100%;



     z-index: 9999;



 }



 .set-marker-popup .set-marker-map {



     position: absolute;



     top: 0;



     left: 0;



     width: 100%;



     height: 100%;



     z-index: 1;



 }



 .set-marker-popup .set-marker-popup-close {



     position: absolute;



     top: 8px;



     right: 8px;



     width: 30px;



     height: 30px;



     z-index: 2;



     color: #fff;



     text-align: center;



     line-height: 30px;



     cursor: pointer;



     border: 1px solid rgba(0, 0, 0, 0);



     background-color: rgba(0, 0, 0, 0.8);



 }



 .set-marker-popup .set-marker-popup-close:hover {



     background-color: rgba(0, 0, 0, 1);



 }



 ul.fs-customer-status {



     margin-top: -10px;



     margin-bottom: -10px;



     padding-top: 10px;



     padding-bottom: 10px;



 }



 ul.fs-customer-status:hover ul {



     display: block;



 }



 ul.fs-customer-status .dropdown-menu {



     margin-top:10px;



 }



 ul.fs-customer-status .dropdown-menu > li > a {



     color: #555;



 }



 /*==============================



 	New home page css



 ===============================*/



 /*== For only icons ==*/



 .sf-icon-xl,



 .sf-icon-lg,



 .sf-icon-md,



 .sf-icon-sm,



 .sf-icon-xs {



     display: inline-block;



     text-align: center;



 }



 .sf-icon-xl {



     width: 100px;



 }



 .sf-icon-lg {



     width: 80px;



 }



 .sf-icon-md {



     width: 60px;



 }



 .sf-icon-sm {



     width: 40px;



 }



 .sf-icon-xs {



     width: 30px;



 }



 .sf-icon-xl i,



 .sf-icon-lg i,



 .sf-icon-md i,



 .sf-icon-sm i,



 .sf-icon-xs i {



     vertical-align: middle;



 }



 .sf-icon-xl i {



     font-size: 80px;



 }



 .sf-icon-lg i {



     font-size: 60px;



 }



 .sf-icon-md i {



     font-size: 45px;



 }



 .sf-icon-sm i {



     font-size: 30px;



 }



 .sf-icon-xs i {



     font-size: 20px;



 }



 .sf-icon-xl img,



 .sf-icon-lg img,



 .sf-icon-md img,



 .sf-icon-sm img,



 .sf-icon-xs img {



     vertical-align: middle;



     max-width: 100%;



     width: auto;



 }



 .sf-icon-xl img {



     height: 80px;



 }



 .sf-icon-lg img {



     height: 70px;



 }



 .sf-icon-md img {



     height: 50px;



 }



 .sf-icon-sm img {



     height: 30px;



 }



 .sf-icon-xs img {



     height: 20px;



 }



 /*header full screen*/



 .nav-wide .container {



     width: 100%;



 }



 .sf-categories-girds {



     position: relative;



     overflow: hidden;



 }



 .sf-categories-girds .sf-category-link {



     position: absolute;



     top: 0;



     left: 0;



     width: 100%;



     height: 100%;



 }



 .sf-categories-thum {



     height: 250px;



     background-size: cover;



     background-position: center;



 }



 .sf-categories-girds.high-light .sf-categories-thum {



     height: 530px;



 }



 @media (max-width: 767px) {



     .sf-categories-thum {



         height: 150px;



     }



     .sf-categories-girds.high-light .sf-categories-thum {



         height: 200px;



     }



 }



 .sf-categories-content {



     position: absolute;



     top: 40%;



     width: 100%;



     color: #fff;



 }



 .sf-categories-content {



     color: #fff;



 }



 .sf-overlay-box {



     position: absolute;



     top: 0;



     left: 0;



     width: 100%;



     height: 100%;



     /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0+0,0.65+100 */



     



     background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.65) 100%);



     /* FF3.6-15 */



     



     background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.65) 100%);



     /* Chrome10-25,Safari5.1-6 */



     



     background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.65) 100%);



     /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */



     



     filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000', GradientType=0);



     /* IE6-9 */



 }



 .sf-categories-content .sf-categories-quantity {



     display: inline-block;



     font-size: 14px;



     padding: 2px 10px;



     font-weight: 600;



     border: 1px solid #fff;



     border-radius: 50px;



     -webkit-border-radius: 50px;



     margin-bottom: 10px;



 }



 .sf-categories-content .sf-categories-title {



     font-size: 18px;



     font-weight: 600;



 }



 .sf-how-work {



     position: relative;



     margin-bottom: 30px;



 }



 .sf-how-work .sf-tilte {



     margin-bottom: 10px;



 }



 .sf-how-work [class*="sf-icon-"] {



     position: relative;



 }



 .sf-how-work .sf-no-step {



     position: absolute;



     right: -40px;



     top: -20px;



     font-size: 80px;



     font-weight: 700;



     color: #f5f5f5;



 }



 .sf-why-choose {} .owl-featured-2 {



     padding-left: 15px;



     padding-right: 15px;



 }



 .sf-search-result-girds {



     margin-bottom: 30px;



 }



 .sf-featured-top { position: relative;}



 .sf-featured-media {



     height: 250px;



     background-size: cover;



     background-position: center;



 }



 .sf-categories-label,



 .sf-featured-sign {



     padding: 3px 10px 1px;



     display: inline-block;



     font-size: 12px;



     color: #fff;



     border-radius: 2px;



     -webkit-border-radius: 2px;



     text-transform: uppercase;



     font-weight: 500;



 }



 .sf-categories-label {



     position: absolute;



     top: 20px;



     left: 20px;



     background-color: #ff650d;



     z-index: 1;



 }



 .sf-categories-label:hover {



     background-color: #f45a02;



 }



 .sf-categories-label a {



     color: #fff;



 }



 .sf-featured-approve {



     position: absolute;



     white-space: nowrap;



     top: 20px;



     right: 20px;



     background-color: #f34343;



     color: #FFF;



     font-size: 11px;



     width: 25px;



     line-height: 20px;



     height: 25px;



     text-align: center;



     border: 2px solid #fff;



     border-radius: 30px;



     -webkit-border-radius: 30px;



     z-index: 1;



     padding: 1px 5px 0;



     overflow: hidden;



     -webkit-transition: all 0.8s ease-out;



     -moz-transition: all 0.8s ease-out;



     -o-transition: all 0.8s ease-out;



     -ms-transition: all 0.8s ease-out;



     transition: all 0.8s ease-out;



 }



 .sf-featured-approve span {



     font-size: 12px;



     font-weight: 500;



     padding-left: 5px;



 }



 .sf-featured-approve:hover {



     width: 130px;



 }



 .sf-featured-item {



     position: absolute;



     bottom: 20px;



     right: 20px;



     color: #FFF;



     font-size: 18px;



     z-index: 1;



 }



 .sf-featured-item:hover {



     color: #f34343;



 }



 .sf-featured-item {



     position: absolute;



     bottom: 20px;



     right: 20px;



     color: #FFF;



     font-size: 18px;



     z-index: 1;



 }



 .sf-featured-item:hover {



     color: #77C04B;



 }



 .sf-featured-item:focus,



 .sf-featured-item:active {



     color: #fff;



 }



 .sf-featured-info {



     position: absolute;



     bottom: 0;



     left: 0;



     width: 85%;



     padding: 15px 20px;



 }



 .sf-featured-sign {



     background-color: #77c04b;



     margin-bottom: 5px;



 }



 .sf-featured-provider {



     padding: 2px 0;



     font-size: 18px;



     color: #fff;



     font-weight: 500;



 }



 .sf-featured-address {



     padding: 2px 0;



     font-size: 14px;



     color: #fff;



 }



 .sf-featured-address i {



     font-size: 16px;



 }



 .sf-featured-info .rating-bx {



     margin: 0 1px;



     font-size: 13px;



 }



 .sf-featured-girds .sf-profile-link,



 .sf-search-result-girds .sf-profile-link {



     position: absolute;



     top: 0;



     width: 100%;



     height: 100%



 }



 .sf-featured-bot {



     padding: 20px;



     background-color: #fff;



     border: 1px solid #e8e8e8;



 }



 .sf-featured-comapny {



     font-size: 14px;



     color: #383838;



     font-weight: 500;



     margin-bottom: 10px;



 }



 .sf-featured-text {



     margin-bottom: 15px;



 }



 .sf-featured-bot .sf-provider-tooltip .btn {



     padding: 0;



     border: none;



     background: none;



     margin: 0 15px 0 0 !important;



     width: auto;



 }



 /*===================



 	Search reasult listing



 ====================*/



 .sf-featured-listing { background-color: #fff;  margin-bottom: 30px; }



 .sf-featured-listing .sf-availability-label { position: absolute; bottom: 20px; }



 @media only screen and (max-width:767px) { 



 .sf-featured-listing {  margin:0 15px 30px; }



 }



 .sf-featured-listing,



 .sf-featured-left,



 .sf-featured-right {



     position: relative;



 }



 .sf-featured-left {



     width: 40%;



     float: left;



 }



 .sf-featured-left .sf-featured-media {



     height: 300px;



 }



 .sf-featured-right {



     width: 60%;



     float: right;



     padding: 20px 30px;



 }



 .sf-featured-right .sf-featured-provider {



     color: #383838;



 }



 .sf-featured-right .sf-featured-address {



     color: #999999;



 }



 .sf-service-price-list {



     list-style: none;



     margin-left: 0;



 }



 .sf-service-price-list {



     font-weight: 400;



 }



 .sf-service-price-list li {



     padding: 3px 0;



     color: #383838;



 }



 .sf-service-price-list li span {



     padding: 1px 0;



     float: right;



     color: #999;



     font-weight: 500;



 }



 .sf-featured-right .sf-provider-tooltip {



     position: absolute;



     right: 20px;



     top: 20px;



 }



 .sf-featured-right .sf-provider-tooltip .btn {



     padding: 0;



     border: none;



     background: none;



     margin: 0 15px 0 0;



     width: auto;



 }



 /*===================



 	Company Satus



 ====================*/



 .sf-company-satus {



     position: relative;



     <?php echo (service_finder_theme_get_data($data,'shortcode-statistics-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'shortcode-statistics-text-color').'; ' : '#767676'; ?>;



 }



 .sf-company-satus:after {



     content: "";



     height: 50px;



     width: 1px;



     background-color: #fff;



     opacity: 0.2;



     position: absolute;



     right: 0;



     top: 50%;



     margin: -25px 0;



 }



 @media only screen and (max-width: 991px) {



     .sf-counter-wrap {



         margin-bottom: 30px;



     }



 }



 .sf-company-count {



     font-size: 36px;



     font-weight: 800;



 }



 .sf-company-count {



     font-size: 36px;



     font-weight: 700;



     font-family: Arial;



     line-height: 40px;



     padding: 5px 0;



 }



 .sf-company-satus-name {



     font-size: 16px;



     text-transform: uppercase;



 }



 /*===================



 	Latest News



 ====================*/



 .sf-latest-news {



     margin-bottom: 30px;



 }



 .sf-latest-news .post-thum {



     overflow: hidden;



 }



 .sf-latest-news .post-info {



     padding: 20px;



     background-color: #fff;



     border: 1px solid #e8e8e8;



     border-radius: 0 0 5px 5px;



     -webkit-border-radius: 0 0 5px 5px;



 }



 .sf-latest-news .post-title {



     margin-bottom: 5px;



 }



 .sf-latest-news .post-meta ul li {



     color: #616161;



 }



 .sf-latest-news .post-meta ul li i {



     color: #636363;



 }



 .sf-latest-news p:last-child {



     margin: 0;



 }



 /*=====================



 	TESTIMONIAL



 =====================*/



 .quote-left,



 .quote-right {



     position: relative;



 }



 .quote-left:before,



 .quote-right:after {



     font-family: "FontAwesome";



     position: absolute;



     z-index: 10;



     top: 15px;



     font-size: 40px;



     color: #3791C6;



 }



 .quote-left:before {



     content: "\f10d";



     left: 0;



 }



 .quote-right:after {



     content: "\f10e";



     left: auto;



     right: 0;



 }



 .testimonial-thum {



     background: #fff none repeat scroll 0 0;



     border: 5px solid #fff;



     display: inline-block;



     height: 100px;



     position: relative;



     width: 100px;



     overflow: hidden;



 }



 .sf-testimonial-text {



     padding: 15px 80px;



     margin: 0 40px;



     position: relative;



 }



 .testimonial-text p:last-child {



     margin: 0;



 }



 .sf-testimonial-detail {



     padding: 5px;



 }



 .testimonial-name,



 .testimonial-position {



     display: block;



 }



 .testimonial-name {



     color: #3d474a;



     font-size: 16px;



 }



 .testimonial-position {



     color: #3690c5;



 }



 .testimonial-text p {



     margin: 0;



 }



 /*==Testimonial 2 css==*/



 .sf-testimonial-2 .testimonial-thum {



     border-radius: 100%;



     -webkit-border-radius: 100%;



 }



 .sf-testimonial-2 {



     text-align: center;



 }



 .sf-testimonial-2 .sf-testimonial-2-thums {



     border-radius: 100%;



     -webkit-border-radius: 100%;



 }



 @media only screen and (max-width: 767px) {



     .sf-testimonial-2 .sf-testimonial-text {



         padding: 15px 40px;



         margin: 0 5px;



         position: relative;



     }



     .sf-testimonial-2 .quote-left::before,



     .sf-testimonial-2 .quote-right::after {



         font-size: 25px;



     }



 }



 /*=====================



 	FOOTER 2 CSS



 =====================*/



 .sf-footer-2 { text-align: center; }



 .sf-footer-2 .footer-top { background: #4f5559; }



 .sf-footer-2 .footer-bottom { background: #3b4044; }



 .sf-site-liks { list-style: none;  margin: 40px 0; }



 .sf-site-liks li { display: inline-block;  padding: 0 15px; }



 .sf-site-liks .socila-box { margin: 0; }



 .sf-categories-2 { margin-bottom: 30px; }



 .sf-categories-2 p { margin: 0; }



 .sf-categories-2 [class*="icon-bx-"] { position: relative; }



 .sf-categories-2 .sf-category2-link { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }



 .sf-categories-2-count { background-color: #f34343; border: 2px solid #fff; border-radius: 30px; color: #fff; font-size: 12px; line-height: 30px; position: absolute; right: 10px; text-align: center; top: -15px;  width: 30px; height: 30px; font-weight: 500; }



 .dataTable.favorites-listing,



 .table.job-manager-jobs { border: 1px solid #ddd; border-collapse: separate; }



 div.zabuto_calendar .table {} div.zabuto_calendar .table th,



 div.zabuto_calendar .table td { border: 1px solid #ddd; display: ; }



 .sf-multiple-categories-select button { white-space: normal; height: auto !important; }



 .sf-location-listing:before,



 .sf-location-listing:after { content: ""; display: table; }



 .sf-location-listing:after { clear: both;}



 .sf-location-btn { margin-bottom:15px; }



 .map-location .sf-location-listing { margin: 15px 0 0; }



 .sf-location-listing { list-style: none; margin: 15px -15px 0; }



 .sf-location-listing li { width: 50%; float: left; margin-bottom: 15px; padding-left: 15px; padding-right: 15px; }



 .sf-location-listing li a { display: block; height: 100%; padding: 20px; background-color: #f6f6f6; border: 1px solid #e1e1e1; color: #777; }



 .sf-location-btn { clear: both; text-align: center; }



 .sf-submit-my-profile { float: left; }



 .sf-check-my-profile { float: right; }



 @media only screen and (max-width:480px) { 



 .sf-location-listing li { width: 100%; float: none; }



 }



 @media only screen and (max-width:767px) { 



 .sf-check-my-profile { float: none; text-align:left; }



 .sf-check-my-profile .btn-primary { margin-bottom:10px; }



 .sf-submit-my-profile { float: none; }



 #submit-fixed.fixed { min-height:40px; }



 #submit-fixed.fixed .btn-primary { position: fixed; bottom: 50px; left:15px; z-index: 999; font-size:0;}



 #submit-fixed.fixed .btn-primary .fa {font-size:20px;}



 }



 .sf-video-gallery .sf-video-box { overflow: hidden; }



 .sf-video-gallery .sf-video-box img { margin: -12% -1%;  width: 104%;  max-width: 104%; }



 /*=======================



 	// Search Bar css new look //



 =======================*/



 .sf-advace-search {



     padding: 10px 0;



 }



 .sf-advace-search b,



 .sf-advace-search .sf-tilte {



     color: #fff;



 }



 .sf-advace-search .sf-minimum-price,



 .sf-advace-search .sf-minimum-mile,



 .sf-advace-search .sf-maximum-price,



 .sf-advace-search .sf-maximum-mile {



     display: block;



     margin-top: 5px;



 }



 .sf-advace-search .sf-minimum-price,



 .sf-advace-search .sf-minimum-mile {



     float: left;



 }



 .sf-advace-search .sf-maximum-price,



 .sf-advace-search .sf-maximum-mile {



     float: right;



 }



 .sf-advace-search .tooltip-inner {



     padding: 4px 7px;



     font-weight: 500;



 }



 .sf-advace-search .slider.slider-horizontal {



     width: 100%;



 }



 .sf-advace-search .slider.slider-horizontal .slider-track {



     height: 5px;



     margin-top: -3px;



 }



 .sf-advace-search .slider-handle {



     background-image: linear-gradient(to bottom, #3396d1 0px, #3396d1 100%);



     border: 2px solid #fff;



 }



 .sf-advace-search .sf-tilte {



     text-transform: uppercase;



     font-size: 18px;



     font-weight: 800;



     margin-bottom: 20px;



 }



 .btn-advace-wrap {



     position: relative;



     z-index: 1;



 }



 .btn-advace-wrap .btn-advace-search {



     position: absolute;



     left: -10px;



     bottom: 23px;



     padding: 4px 8px;



     color: #fff;



     font-size: 14px;



 }



 .btn-advace-wrap .btn-advace-search::after {



     content: "";



     background: <?php echo (!empty($data['search-bar-bg-color'])) ? esc_html($data['search-bar-bg-color']): ''; ?>;



     position: absolute;



     left: 0;



     top: 0;



     width: 100%;



     height: 100%;



     z-index: -1;



     opacity: <?php echo (isset($data['search-bar-bg-opacity'])) ? esc_html($data['search-bar-bg-opacity']): ''; ?>;



 }



 .sf-search-result .search-form::before {}



 @media only screen and (max-width: 991px) {



 .sf-find-bar,	



 .sf-search-result {



 	background: <?php echo (!empty($data['search-bar-bg-color-mobile'])) ? esc_html($data['search-bar-bg-color-mobile']): ''; ?>;



 }



 .sf-find-bar .search-form, 



 .sf-find-bar-inr .search-form {



 	margin:40px 0px



 }



 }



 @media only screen and (max-width: 767px) {



 .sf-find-bar .search-form, 



 .sf-find-bar-inr .search-form {



 	margin:40px 15px



 }



 }



 /*Social icon on login & sign up popup*/



 .wp-social-login-widget {



     clear: both;



 }



 .wp-social-login-widget .wp-social-login-provider-list {



     padding: 10px 0;



 }



 .wp-social-login-provider-list .wp-social-login-provider {



     display: block;



     padding:0px 15px;



     position: relative;



     margin:0px 0px 10px;



 	line-height:22px;



 	height:40px;



 }



 .wp-social-login-provider-list .wp-social-login-provider:last-child {



     margin-bottom: 0;



 }



 .wp-social-login-provider-list .wp-social-login-provider:hover {



     opacity: 0.8;



 }



 .wp-social-login-provider-list .wp-social-login-provider img {



     display: none;



 }



 .wp-social-login-provider-facebook {



     background-color: #4463b1;



 }



 .wp-social-login-provider-list [class*="wp-social-login-provider-"]:after {



     left: 50px;



     font-size: 14px;



 }



 .wp-social-login-provider-list [class*="wp-social-login-provider-"]:before {



     left: 20px;



     font-size: 15px;



 }



 .wp-social-login-provider-facebook:after,



 .wp-social-login-provider-facebook:before {



     position: absolute;



     top: 10px;



     color: #fff;



     font-size: 12px;



 }



 .wp-social-login-provider-facebook:after {



     content: "Facebook";



 }



 .wp-social-login-provider-facebook:before {



     content: "\f09a";



     font-family: "FontAwesome";



 }



 .wp-social-login-provider-google {



     background-color: #da4935;



 }



 .wp-social-login-provider-google:after,



 .wp-social-login-provider-google:before {



     position: absolute;



     top: 10px;



     color: #fff;



     font-size: 12px;



 }



 .wp-social-login-provider-google:after {



     content: "google";



 }



 .wp-social-login-provider-google:before {



     content: "\f1a0 ";



     font-family: "FontAwesome";



 }



 .wp-social-login-provider-twitter {



     background-color: #4d9edb;



 }



 .wp-social-login-provider-twitter:after,



 .wp-social-login-provider-twitter:before {



     position: absolute;



     top: 10px;



     color: #fff;



     font-size: 12px;



 }



 .wp-social-login-provider-twitter:after {



     content: "twitter";



 }



 .wp-social-login-provider-twitter:before {



     content: "\f099 ";



     font-family: "FontAwesome";



 }



 .wp-social-login-provider-linkedin {



     background-color: #005a87;



 }



 .wp-social-login-provider-linkedin:after,



 .wp-social-login-provider-linkedin:before {



     position: absolute;



     top: 10px;



     color: #fff;



     font-size: 12px;



 }



 .wp-social-login-provider-linkedin:after {



     content: "linkedin";



 }



 .wp-social-login-provider-linkedin:before {



     content: "\f0e1 ";



     font-family: "FontAwesome";



 }



 .wp-social-login-provider-instagram {



     background-color: #49709b;



 }



 .wp-social-login-provider-instagram:after,



 .wp-social-login-provider-instagram:before {



     position: absolute;



     top: 10px;



     color: #fff;



     font-size: 12px;



 }



 .wp-social-login-provider-instagram:after {



     content: "instagram";



 }



 .wp-social-login-provider-instagram:before {



     content: "\f16d ";



     font-family: "FontAwesome";



 }



 .wp-social-login-provider-tumblr {



     background-color: #466484;



 }



 .wp-social-login-provider-tumblr:after,



 .wp-social-login-provider-tumblr:before {



     position: absolute;



     top: 10px;



     color: #fff;



     font-size: 12px;



 }



 .wp-social-login-provider-tumblr:after {



     content: "tumblr";



 }



 .wp-social-login-provider-tumblr:before {



     content: "\f173 ";



     font-family: "FontAwesome";



 }



 .sf-scroll-nav { position: fixed; width: 40px; right: 0; top: 50%; z-index: 999; -webkit-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%); display:none; }



 .sf-scroll-nav ul { list-style: none;  margin: 0; padding: 0;}



 .sf-scroll-nav ul li { position: relative; }



 .sf-scroll-nav ul li a { display: block; width: 40px; height: 40px; margin: 1px 0;}



 .sf-scroll-nav ul li a:hover span,



 .sf-scroll-nav ul li a.active span { background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; color: #fff;}



 .sf-scroll-nav ul li span { width: 40px; height: 40px; line-height: 40px; background-color: #EFF3F6; display: block; text-align: center; position: relative; z-index: 1; }



 .sf-scroll-nav ul li strong {padding: 0 15px; height: 40px; line-height: 40px; background-color: #e9edf0; border-left: 3px solid <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;  display: block; position: absolute; right: -200px; top: 0;  text-transform: uppercase; font-size: 12px;  white-space: nowrap; -webkit-transition: all 0.5s ease;  -moz-transition: all 0.5s ease; -ms-transition: all 0.5s ease; -o-transition: all 0.5s ease;  transition: all 0.5s ease; }



 .sf-scroll-nav ul li:hover strong { right: 100%;}



 .sf-scroll-nav.sf-floating-desktop-menu { display:block; }



 @media only screen and (max-width: 991px) { 



 .sf-scroll-nav.sf-floating-desktop-menu {  display:none; }



 .sf-scroll-nav.sf-floating-mobile-menu { display:block;}



 }



 @media only screen and (max-width:480px) {  



 .sf-scroll-nav { position: fixed; width:25px; }



 .sf-scroll-nav ul li a {width:25px;}



 .sf-scroll-nav ul li span { width: 25px;}



 }



 /*====provider rating css===*/



 .sf-customer-rating {



     max-width: 360px;



     padding: 30px 15px;



 }



 .sf-customer-rating-row {



     padding: 5px 0;



     margin-top: -1px;



 }



 .sf-customer-rating-row:first-child {



     -webkit-border-radius: 5px 5px 0 0;



     border-radius: 5px 5px 0 0;



 }



 .sf-customer-rating-row:last-child {



     -webkit-border-radius: 0 0 5px 5px;



     border-radius: 0 0 5px 5px;



 }



 .sf-customer-rating-name {



     padding: 8px 5px 0;



 }



 .sf-customer-rating-sarts {



     display: inline-block;



     margin-right: 5px;



 }



 .sf-customer-rating-sarts .rating-sm {



     font-size: 20px;



     letter-spacing: 5px;



 }



 .star-rating .caption span {



     width: auto;



     height: 25px;



     display: inline-block;



     background-size: cover;



     background-repeat: no-repeat;



 	font-size: 14px;



 	line-height: 20px;    



 }



 .star-rating .caption span.aon-icon-angry {



     background-image: url("inc/images/rating-icons/icon-angry.png");



 }



 .star-rating .caption span.aon-icon-cry {



     background-image: url("inc/images/rating-icons/icon-cry.png");



 }



 .star-rating .caption span.aon-icon-sad {



     background-image: url("inc/images/rating-icons/icon-sad.png");



 }



 .star-rating .caption span.aon-icon-happy {



     background-image: url("inc/images/rating-icons/icon-happy.png");



 }



 .star-rating .caption span.aon-icon-awesome {



     background-image: url("inc/images/rating-icons/icon-awesome.png");



 }



 .sf-customer-display-rating {



     border-bottom: 1px solid #ddd;



     margin: 0 -20px 15px;



     padding: 0 20px;



 }



 .sf-customer-display-rating .sf-customer-rating-row {



     display: inline-block;



     margin-right: 15px;



 }



 .sf-customer-display-rating .sf-customer-rating-row .sf-customer-rating-name.pull-left,



 .sf-customer-display-rating .sf-customer-rating-row .sf-customer-rating-count.pull-right {



     padding: 0;



     float: none !important;



     display: block;



     font-weight: 400;



 }



 /*Blog Post css in provider my account */



 .ap-form-field input[type="text"],



 .ap-form-field input[type="email"] {



     height: 40px;



     padding: 5px 10px;



 }



 .ap-form-field input[type="text"],



 .ap-form-field input[type="email"],



 .ap-form-field textarea {



     border: 1px solid #ddd;



 }



 .ap-form-field-wrapper label {



     font-weight: 600;



     margin-bottom: 10px;



 }



 .ap-form-submit-button {



     background-color: #77c04b;



     border-color: #62a643;



     color: #fff;



     border-left: none;



     border-right: none;



     border-top: none;



     border-width: 2px;



     box-shadow: none;



     font-weight: normal;



     outline: 0 none;



     padding: 10px 20px;



 }



 .ap-form-field-wrapper {



     margin-bottom: 20px;



 }



 .gotohome,



 .gotohome:hover,



 .gotohome:focus {



     float: right;



     color: #fff;



     margin-top: 5px;



 }



 .gotohome:hover {



     opacity: 0.8;



 }



 .sf-by-string {



     margin-right: 5px;



     color: #555;



 }



 .sf-jobauthor_thumb {



     width: 80px;



     height: 80px;



     float: left;



     margin-right: 15px;



 }



 /*============



 woocommerce



 ============*/



 .wc-terms-and-conditions input{	opacity: 1;	position: static !important;}



 .woocommerce form .form-row input.input-text,



 .woocommerce form .form-row textarea { border: 1px solid #ddd; padding: 10px 12px;}



 .woocommerce form .form-row input.input-text {} 



 .woocommerce form .form-row textarea {min-height: 150px;}



 .select2-container .select2-selection--single { height:45px;}



 .select2-container .select2-selection--single .select2-selection__rendered { padding-left: 12px;}



 .select2-container--default .select2-selection--single .select2-selection__rendered {line-height: 45px;}



 .select2-container--default .select2-selection--single { border: 1px solid #ddd; border-radius: 0; -webkit-border-radius: 0;}



 .sf-find-bar-inr.pos-v-bottom { top:auto !important; bottom:0;}



 div.dataTables_wrapper div.dataTables_processing { margin-left: -55px !important; width:110px; border:none; background:none; box-shadow:none; -webkit-box-shadow:none; }



 .geolocate{ position:absolute; top:12px; right:22px; color:#999999;}



 .woocommerce form.login {background-color:#fff;}



 .select2-container--default .select2-selection--single .select2-selection__arrow {top:10px;}



 /*-------------------------------------



 	2.8 colum gap less



 -------------------------------------*/



 .sf-select-plan {display:table;width:100%;	padding:0 15px;margin-bottom:30px;}



 .sf-plan-left-block,



 .sf-plan-right-block {	display:table-cell;	padding:20px 10px;	vertical-align:middle;	text-align:center;}



 .sf-plan-left-block{ width:40%; background-color:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;	color:#fff;}



 .sf-plan-left-block h1 {font-size:22px;	line-height:22px;	font-weight:600;	color:#fff;	margin:0 0 5px;}



 .sf-plan-left-block p {font-size:16px;margin-bottom:15px;}



 .sf-plan-right-block{width:60%;background-color:#EFEFEF;background-image:url(inc/images/clock-gif.gif);background-repeat:no-repeat;background-position:-50px center;background-size:100px 100px;}



 .countdown > div {display: inline-block; margin:0 10px;}



 .countdown-container .countdown-value { font-size: 50px;  color: #555;  font-weight:600;}



 .countdown-container .countdown-value {  font-size: 50px;  line-height:45px; color: #555; font-family:Arial;}



 .countdown > div > span { display: block;  text-transform:uppercase;  font-size:13px; font-weight:400;}



 @media only screen and (max-width: 1200px) { 



 .countdown-container .countdown-value { font-size:35px;}



 }



 @media only screen and (max-width:767px) { 



 .sf-select-plan {display:block;}



 .sf-plan-left-block,



 .sf-plan-right-block {	display:block;	width:auto;}



 }



 @media only screen and (max-width:480px) { 



 .countdown > div { margin:0 5px;



 }



 .countdown-container .countdown-value { font-size:22px;  line-height:25px;}



 .countdown > div > span { font-size:11px;}



 .sf-plan-left-block,



 .sf-plan-right-block  {padding:15px 5px;}



 .sf-plan-left-block h1 {	font-size:18px;}



 .sf-plan-right-block{ background-position:-20px center; background-size:60px 60px;}



 }



 .btn.btn-renew {border:2px solid #fff;	padding:3px 10px; font-size:12px;	text-transform:uppercase;} 



 .btn.btn-renew.btn-renew-active {background-color:#27c627;} 



 .address-alert { float:right; max-width:250px;}



 .address-alert.alert-fixed { position: fixed; bottom:10px; right:10px; z-index: 999;}



 @media only screen and (max-width:991px) { 



 .address-alert { float:none;} 



 }



 .sf-features-list, 



 .sf-languages-list {list-style:none; margin:0;}



 .sf-features-list li,



 .sf-languages-list li {float:left; width:33.333%; padding:10px 0;}



 .sf-languages-list li img { margin-right:0px; vertical-align:sub; }



 .sf-features-list li .features-icon { margin-right:5px; }



 .sf-features-list li .features-icon img { height:20px; }



 .sf-experience-acord .sf-panel,



 .sf-qualification-acord .sf-panel,



 .sf-services-acord .sf-panel {background-color:#f7f8fa; padding:20px; position:relative; margin-bottom:0;}



 .sf-experience-acord .sf-panel:nth-child(odd),



 .sf-qualification-acord .sf-panel:nth-child(odd),



 .sf-services-acord .sf-panel:nth-child(odd) {background-color:#f0f1f3; }



 .sf-experience-acord .sf-panel .acod-title,



 .sf-qualification-acord .sf-panel .acod-title,



 .sf-qualification-acord .sf-panel .acod-title { margin:0; text-transform:none; }



 .sf-experience-acord .sf-panel .acod-title span,



 .sf-qualification-acord .sf-panel .acod-title span,



 .sf-services-acord .sf-panel .acod-title span{ display:block; color:#777; }



 .sf-experience-acord .sf-panel .acod-title .exper-author,



 .sf-qualification-acord .sf-panel .acod-title .exper-author,



 .sf-services-acord .sf-panel .acod-title .exper-author{color:#555;  font-size:15px; font-weight:600;margin-bottom:5px; text-transform:uppercase;  }



 .sf-experience-acord .sf-panel .acod-title .exper-date,



 .sf-qualification-acord .sf-panel .acod-title .exper-date {color:#555; text-transform:uppercase; font-size:14px; position:absolute; top:15px; right:15px; }



 @media only screen and (max-width:767px) { 



 .sf-experience-acord .sf-panel .acod-title .exper-date,



 .sf-qualification-acord .sf-panel .acod-title .exper-date { position:static; display:block; margin:5px 0;}



 .sf-features-list li,



 .sf-languages-list li {float:left; width:50%; padding:10px 0;}



 }



 @media only screen and (max-width:480px) { 



 .sf-features-list li,



 .sf-languages-list li {float:none; width:auto; display:inline-block; padding:10px 0; margin-right:10px;}



 }



 .sf-experience-acord .sf-panel .acod-body,



 .sf-qualification-acord .sf-panel .acod-body,



 .sf-services-acord .sf-panel .acod-body {padding-top:10px;}



 .sf-certificates-list {list-style:none; margin:0;}



 .sf-certificates-list li {margin-bottom:20px;}



 .sf-certificates-list li:after {content:""; clear:both; display:table;}



 .sf-certificates-list li .awards-pic { margin-right:20px; width:120px; float:left; }



 .sf-certificates-list li .awards-pic img { width:100%; height:auto; }



 .sf-certificates-list li span{ display:block; color:#777; }



 .sf-certificates-list li .awards-title  {color:#555;  font-size:15px; font-weight:600;margin-bottom:5px; text-transform:uppercase;  }



 .sf-certificates-list li .awards-date { font-size:14px; margin-bottom:10px; color:#555;  }



 .sf-certificates-list li .awards-text { }



 @media only screen and (max-width:340px) { 



 .sf-certificates-list li .awards-pic {    margin-left: 0;    float: none;	width:100%; margin-bottom:15px;}



 }



 .sf-ques-ans-list {list-style:none; margin:0; }



 .sf-ques-ans-list li {background-color:#fff; position:relative; min-height:80px; border:1px solid #e1e1e1; margin-top:-1px; clear:both;}



 .sf-ques-ans-list li [id*="sf-add-answer-"]:after { content:""; display:block; clear:both;}



 .sf-ques-ans-list .sf-ques-area,



 .sf-ques-ans-list .sf-ans-area { position:relative; padding:15px 15px 15px 80px;}



 .sf-ques-ans-list .sf-ans-area { margin-left:50px;}



 .sf-ansering-area {padding:0 20px 20px 80px;}



 .sf-ansering-area .readmore-link {color:#3396d1; font-size:12px; font-weight:400;}



 .sf-ques-ans-list li:nth-child(odd){background-color:#f7f8fa; }



 .sf-ques-ans-list li .sf-ques-ans-author { position:absolute; left:15px; top:15px; width:45px; height:45px; display:inline-block; overflow:hidden; -webkit-border-radius: 100px; border-radius: 100px; }



 .sf-ques-ans-list li .sf-ques-ans-author img { width:100%; height:auto; }



 .sf-ques-ans-list li .sf-ques-has { color:#555; font-size:14px; font-weight:600;  margin:0 0 5px;}



 .sf-ques-ans-list li .sf-ques-has-desc p:last-child { margin:0;}



 .sf-ques-ans-list li .sf-ques-meta-col { color:#888; font-size:12px; font-weight:400;  display:inline-block; margin-right:10px; cursor:pointer;}



 .sf-ques-ans-list.sf-qa-full-detail {}



 .sf-ques-ans-list.sf-qa-full-detail li { border:none; margin-top:0;}



 .sf-ques-ans-list.sf-qa-full-detail li:nth-child(odd){background-color:#fff; }



 .sf-ques-ans-list.sf-qa-full-detail li .sf-ques-has{ margin:0 0 5px;}



 .sf-ques-ans-list.sf-qa-full-detail li .sf-qa-hour { position:absolute; right:15px; top:15px; }



 .sf-ques-ans-list.sf-qa-full-detail li .sf-ans-has { margin-right:120px; }



 .sf-ques-ans-list.sf-qa-full-detail .sf-ans-area { padding-left:70px; }



 .sf-ques-ans-list.sf-qa-full-detail .sf-ans-area .sf-ques-ans-author { width:35px; height:35px; }



 .sf-qa-wrap {text-align:center; margin-bottom:30px;}



 .sf-qa-wrap .qa-pic { margin-bottom:25px;  }



 .sf-qa-wraper { padding:25px 0 0; border-top:2px dashed #ddd; }



 .sf-question-row { margin-bottom:10px; }



 /*My Account css*/



 .wrapper-admin {	height:100vh;}



 #header-admin-wrap {	}



 #header-admin {	width:calc(100% - 250px); height:70px; background-color:#fff; border-bottom:1px solid #ddd; position:fixed;	top:0; right:0;	z-index:111; -webkit-transition:all 0.3s; -moz-transition: all 0.3s; -ms-transition:all 0.3s; -o-transition:all 0.3s; transition:all 0.3s;}



 #header-admin .container {	width:100%;	padding-left:20px;	padding-right:20px;}



 #header-admin.active {width:calc(100%);	 }



 #sidebar-admin-wraper {    width: 250px;    position: fixed;    top: 0;    left: 0;    height: 100vh;    z-index: 999;    background: <?php echo (!empty($data['left-menu-bgcolor'])) ? esc_html($data['left-menu-bgcolor']): ''; ?>;    color: <?php echo (!empty($data['left-menu-font-color'])) ? esc_html($data['left-menu-font-color']): ''; ?>;    transition: all 0.3s;}



 #sidebar-admin-wraper.active {    margin-left: -250px;}



 #content { width: calc(100% - 250px);  padding-top:70px;  min-height: 100vh;  transition: all 0.3s;  position: absolute;   top: 0;  right: 0; }



 #content.active { width: 100%; }



 #content.active .sf-submit-btns { width: 100%; }



 @media (max-width: 768px) {



 #sidebar-admin-wraper { margin-left: -250px;}



 #sidebar-admin-wraper.active { margin-left: 0;}



 #content {	width: 100%;}



 #content.active {	width: calc(100% - 250px);}



 #header-admin {	width:calc(100%); }



 #header-admin.active,



 #content.active { overflow:hidden; }



 #header-admin.active .container,



 #content.active .content-admin-main { min-width:480px;}



 #header-admin.active { width: calc(100% - 250px);}



 }



 .header-middle {float:left;}



 .header-left { float:left; }



 .header-right { float:right; }



 .header-middle .navbar-toggle { margin-top:17px; margin-bottom:17px;} 



 .header-middle .navbar-toggle { margin-top:17px; margin-bottom:17px;} 



 .header-middle .navbar-toggle .icon-bar { background-color:#333; } 



 .header-middle .header-nav .nav > li > a { padding:25px 15px; }



 @media only screen and (max-width:991px) {



 .header-middle { float:none; } 



 .header-middle .header-nav .nav > li > a {  padding: 12px 15px; }



 }



 .sf-submit-btns { width: calc(100% - 250px); padding:15px 20px; background-color: #fff; border-bottom: 1px solid #ddd;  position: fixed;  top:70px; right: 0; z-index: 110; -webkit-transition: all 0.3s;



 -moz-transition: all 0.3s; -ms-transition: all 0.3s; -o-transition: all 0.3s; transition: all 0.3s;}



 .sf-submit-btns.active { width:100%;}



 @media only screen and (max-width:991px) { 



 .sf-submit-btns .btn { padding:10px;}



 }



 @media only screen and (max-width:768px) {



 .sf-submit-btns { width:100%; }



 }



 @media only screen and (max-width:767px) {



 .sf-submit-btns { width:100%; position:static; border:1px solid #ddd;}



 }



 .header-left,



 .header-right {	display:table; height:70px; }



 .nav-btn-wrap { display:table-cell; vertical-align:middle; }



 .nav-btn-admin { font-size:21px; cursor:pointer; display:block; }



 .header-left,



 .header-right {	display:table; height:70px; }



 .nav-btn-wrap { display:table-cell; vertical-align:middle; }



 .nav-btn-admin { font-size:21px; cursor:pointer; display:block; }



 .header-left > .header-widget-wrap,



 .header-right > .header-widget-wrap {	display:table-cell;	vertical-align:middle;}



 .header-widget-wrap > .header-widget {display:inline-block; margin-left:25px; position:relative; cursor:pointer;}



 .header-widget-wrap .dropdown-menu { top:40px; left:auto; right:-20px; min-width:150px; width:100%;}



 .header-widget .dropdown-menu > li > a { white-space:normal; font-size:12px;}



 .header-widget .dropdown-menu.arrow-up:after{content:"";position:absolute;top:-6px; right: 20px;border-right:7px solid transparent;border-bottom: 7px solid #ffffff;border-left:7px solid transparent;}



 .header-widget .dropdown-menu.arrow-up:before{content:"";position:absolute;top:-8px; right:19px;border-right: 8px solid transparent;border-bottom:8px solid #d9d9d9;border-left:8px solid transparent;	}



 .header-widget .dropdown-menu.sf-notification-list { min-width:260px; }



 .header-widget .dropdown-menu.sf-myaccounts-list { min-width:150px; right:9px; }



 @media only screen and (max-width:480px) { 



 .header-widget .dropdown-menu.sf-notification-list { right: -137px;}



 .header-widget .dropdown-menu.sf-myaccounts-list { right:-5px; }



 .header-widget .dropdown-menu.sf-notification-list:after { right:135px;}



 .header-widget .dropdown-menu.sf-notification-list:before { right:134px;}



 }



 .aon-admin-user {padding-left:50px; position:relative; font-size:16px; cursor:pointer; color:#333;}



 .aon-admin-user:hover {color:#999;}



 .aon-admin-user::after { content: "\f107"; font-family: fontawesome; display: inline-block; margin-left:0px;  color: #555;}



 .aon-admin-pic {width:40px; height:40px; background-color:#ddd; display:inline-block; overflow:hidden; position:absolute; top:50%; left:0; margin-top:-20px; -webkit-border-radius: 100%; border-radius: 100%;}



 .aon-admin-pic img {width:100%; height:auto;}



 .aon-admin-pic span {display:inline-block;}



 .aon-admin-pic span {display:inline-block;}



 .aon-admin-messange,



 .aon-admin-notification {color:#333; font-size:18px;}



 .aon-admin-messange span,



 .aon-admin-notification span {position:absolute; top:-7px; right:-15px; width:20px; height:20px; color:#fff; font-size:12px; text-align:center; line-height:20px; -webkit-border-radius: 100%; border-radius: 100%;}



 .aon-admin-messange span { background-color:#00E6E6!important;}



 .aon-admin-notification span { background-color:#F04F53;}



 .page-logo { background-color:rgba(0,0,0,0.05);	padding:10px;	text-align:center;	margin-bottom:30px; font-weight:600; font-size:20px;}



 .page-logo a,



 .page-logo a:hover,



 .page-logo a:active,



 .page-logo a:focus { color:#fff; }



 @media (max-width: 768px) {



 .aon-admin-user { font-size:14px; padding-left:40px;}



 .aon-admin-pic { width: 30px; height:30px; margin-top:-15px;}



 .header-widget-wrap > .header-widget { margin-left: 20px; }



 .aon-admin-messange, .aon-admin-notification {  font-size: 15px; }



 .aon-admin-messange span, .aon-admin-notification span { top: -5px; right: -13px; width: 16px; height: 16px; font-size: 10px; text-align: center; line-height: 16px; font-weight: bold; }



 }



 @media only screen and (max-width:480px) {



 .aon-admin-user { font-size:12px; }



 }



 .tip-info {display:inline-block;	width:16px;	height:16px;line-height:16px;text-align:center;font-size:11px;color:#fff;text-indent:-1px;background-color:#ccc; vertical-align:middle; border-radius:20px;-webkit-border-radius:20px;}



 .tooltip .tooltip-inner {	padding:6px 15px;	font-size:12px;}



 @media only screen and (max-width:1200px) { 



 .slider .tooltip.tooltip-main { opacity:1; }



 }



 .tip-info.tipgray {background-color:#CCCCCC;}



 .content-admin-wraper {  float:left;width:100%;	position:relative;	z-index:1}



 .content-admin-area {  margin-left: 240px;  padding:70px 0 0;	background-color:#F6F6FA; min-height:100vh;}



 .content-admin-main {  padding:30px; min-height:100vh; background-color:#fbfbfb;}



 @media only screen and (max-width:991px) { 



 .content-admin-main {  padding:15px;}	



 }



 .content-admin-main .panel { box-shadow:0 0 12px 0 rgba(0,0,0,.06); -webkit-box-shadow:0 0 12px 0 rgba(0,0,0,.06);}



 .sf-noservice-available { padding:30px; text-align:center; border:2px solid #ddd; font-size:18px; color:#999; margin:0px 15px 25px; clear:both; }



 .content-admin-main textarea.form-control { height:auto; }



 .content-admin-main textarea.form-control[id="arearegion"] { margin-bottom:10px; } 



 .content-admin-main .input-group-addon.fixed-w { padding: 6px 3px; width: 50px; }



 .content-admin-main .bootstrap-select div.dropdown-menu ul li a { padding:10px 15px; }



 .panel-default > .sf-panel-heading.p-h-small {padding:20px 30px; }



 .sf-panel-heading:after {content:""; clear:both; display:table;}



 .sf-panel-heading-left {float:left;}



 .sf-panel-heading-right {float:right;}



 @media only screen and (max-width:767px) {



 .sf-panel-heading {padding:20px 15px !important;}



 .sf-panel-body {padding:15px;}	



 }



 .panel-default > .sf-panel-heading {	padding:30px; background-color:#fff;  position:relative;}



 .sf-panel-heading > h3 {	margin:0;}



 .sf-panel-heading > h3 span {	margin-right:10px;	font-size:24px;	vertical-align:bottom;}



 .sf-panel-body table {margin:0;}



 /* Admin Nav */



 .has-child .submenu-toogle {    position:absolute;    right:10px;    top:10px;    color:#fff;  z-index:999;    cursor:pointer;    padding:7px;    font-size:16px;    display:none;}



 .has-child li .submenu-toogle  {    opacity:0.9;}



 .has-child.nav-active > a+.submenu-toogle.fa-angle-down:before { content:"\f106";}



 .admin-nav {font-family:"Roboto";}



 .admin-nav ul {list-style:none; margin:0;}



 .admin-nav ul li {	float:none;}



 .admin-nav ul li a > i {font-size:18px; margin-right:15px; }



 .admin-nav ul > li > a {  padding:12px 25px;  color: <?php echo (!empty($data['left-menu-font-color'])) ? esc_html($data['left-menu-font-color']): ''; ?>; display:block; }



 .admin-nav ul li a > i {font-size:18px; margin-right:20px; }



 .admin-nav ul > li.active > a{ color: <?php echo (!empty($data['left-menu-font-color'])) ? esc_html($data['left-menu-font-color']): ''; ?>; background-color:rgba(0,0,0,0.1) }



 .admin-nav ul > li > a:hover,



 .admin-nav ul > li > a:active, 



 .admin-nav ul > li > a:focus { background-color:rgba(0,0,0,0.1) text-decoration: none; }



 .admin-nav ul > li .mega-menu > li:after{	display:none;}



 .admin-nav ul  li .sub-menu > li a {	padding-left:65px;}



 .admin-nav ul  li .sub-menu > li a > i {font-size:20px; width:22px; }



 .admin-nav ul > li ul,



 .admin-nav ul > li .sub-menu {display: none; position: static;	visibility: visible;	width:auto;	background-color:rgba(0,0,0,0.1)}



 .admin-nav ul li.has-child { position:relative;}



 .admin-nav ul li .sub-menu { opacity:1; margin:0 !important; }



 .has-child .submenu-toogle {    display:block;}



 .admin-nav ul li.has-child { position:relative;}



 .admin-nav ul li .sub-menu { opacity:1; margin:0 !important; }



 .has-child .submenu-toogle {    display:block;}



 .content-admin-wraper {  float:left;width:100%;	position:relative;	z-index:1}



 .content-admin-area {  margin-left: 240px;  padding:70px 0 0;	background-color:#F6F6FA; min-height:100vh;}



 .content-admin-main .panel { box-shadow:0 0 12px 0 rgba(0,0,0,.06); -webkit-box-shadow:0 0 12px 0 rgba(0,0,0,.06);}



 .sf-form-control { border:1px solid #dbdbdb; height:40px; box-shadow:0 1px 3px 0 rgba(0,0,0,.06); -webkit-box-shadow:0 1px 3px 0 rgba(0,0,0,.06);}



 .content-admin-main textarea.form-control { height:auto; }



 .sf-select-box > .dropdown-toggle {  height:40px; }



 .content-admin-main .bootstrap-select div.dropdown-menu ul li a { padding:10px 15px; } 



  



 /*radio & checkbox*/



 .sf-radio-checkbox.radio-inline,



 .sf-radio-checkbox.checkbox-inline {padding-left:0 !important;} 



 .sf-radio-checkbox label {font-weight:normal !important;} 



 .sf-radio-checkbox input[type=checkbox], 



 .sf-radio-checkbox input[type=radio] { display:; opacity:0; margin-left:1px !important; }



 .sf-radio-checkbox input[type=checkbox] + label, 



 .sf-radio-checkbox input[type=radio] + label { display: block; padding-left:24px !important; position: relative; cursor:pointer;}



 .sf-radio-checkbox input[type=checkbox] + label:hover:before, 



 .sf-radio-checkbox input[type=radio] + label:hover:before {	border-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; }



 .sf-radio-checkbox input[type=checkbox] + label:before, 



 .sf-radio-checkbox input[type=radio] + label:before { background-color: #fff; border: 3px solid #b6b7b8; content: ""; display: inline-block; height: 20px; line-height: 1; margin-left: -24px; position: absolute;  top: 0px; transition: all linear 0.1s; width: 20px; border-radius: 2px; -webkit-border-radius:2px;}



 .sf-radio-checkbox input[type=checkbox] + label:after { color: #fff; content: "\f00c"; font-family: FontAwesome; font-size: 0px; -webkit-font-smoothing: antialiased; left: 6px; position: absolute; top: 7px; transition: all linear 0.1s;}



 .sf-radio-checkbox input[type=checkbox]:checked + label:before { border-width:10px; border-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; }



 .sf-radio-checkbox input[type=checkbox]:checked + label:after { font-size: 12px; left:3px; top:1px; }



 .sf-radio-checkbox input[type=radio] + label:before { border-radius: 50%; content: ""; }



 .sf-radio-checkbox input[type=radio]:checked + label:before { border-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; border-width: 5px; }



 .form-inline .checkbox input[type="checkbox"], 



 .form-inline .radio input[type="radio"] { position:absolute; left:0; bottom:0;}



 .fa-facebook.sf-color-social {background-color:#3b5998; border-color:#3b5998; color:#fff;}



 .fa-twitter.sf-color-social {background-color:#55acee; border-color:#55acee; color:#fff;}



 .fa-linkedin.sf-color-social {background-color:#0177b5; border-color:#0177b5; color:#fff;}



 .fa-pinterest.sf-color-social {background-color:#bd081c; border-color:#bd081c; color:#fff;}



 .fa-google-plus.sf-color-social {background-color:#dc4a38; border-color:#dc4a38; color:#fff;}



 .fa-digg.sf-color-social {background-color:#286091; border-color:#286091; color:#fff;}



 .fa-instagram.sf-color-social {background-color:#527fa4; border-color:#527fa4; color:#fff;}



     



 .sf-booking-info-col {padding:15px;}



 .sf-booking-payment-info {padding:10px; cursor:pointer;}



 .sf-booking-refid {font-size:24px; margin-right:10px;}



 .sf-booking-incomplete {padding:2px 10px; font-size:10px; color:#fff; background-color:#f0ad4e; border-radius:20px; font-weight:600; vertical-align:text-top; margin-right:10px; }



 .sf-booking-upcoming {padding:2px 10px; font-size:10px; color:#fff; background-color:#3396d1; border-radius:20px; font-weight:600; vertical-align:text-top; display:inline-block;}



 .sf-booking-completed {padding:2px 10px; font-size:10px; color:#fff; background-color:#77c04b; border-radius:20px; font-weight:600; vertical-align:text-top; display:inline-block; }



 .sf-payment-status {padding:2px 10px; font-size:10px; color:#fff; background-color:#f0ad4e; border-radius:20px; font-weight:600; vertical-align:text-top; margin-right:10px; }



 .customer-info { list-style:none; margin:0; }



 .customer-info li { position:relative; margin-bottom:10px; }



 .customer-info li strong {margin-right:5px; color:#333333;}



 .customer-info li strong:after {content:":"; position:relative; right:-2px;}



 .customer-info li strong .fa { color:#ddd; margin-right:5px; color:#333333;}



 .selected-time { margin:0;}



 .selected-time li { margin-bottom:10px;}   



 .sf-wallet-section {text-align:center}



 .sf-wallet-title {font-size:30px; margin:20px 0;}



 .sf-wallet-amount {font-size:20px; font-weight:600; color:#3396d1 !important;}



 .sf-wallet-section .icon-bx-lg.rounded-bx {border-radius:100%; -webkit-border-radius:100%;} 



 .wallet-payment-form  {    margin: 20px auto !important;    max-width: 800px;    width: 100%;}



 .wallet-payment-form  [class*="col-"] { float:none;  width:auto;}



 .wallet-payment-form  [name="wallet-payment"] { display:table; width:auto !important; margin:auto;}



 .wallet-payment-form  .form-group.form-inline.has-feedback { display:table; margin:auto;}



 .sf-availability-days {clear:both; padding:30px 0;}



 .sf-ques-header {padding:15px; border:1px solid #ddd; border-bottom:none; }



 .sf-ques-ans-area {list-style:none; margin:0;}



 .sf-ques-ans-area > li {border-bottom:1px solid #ddd;}



 .sf-ques-header-pic {width:35px;  overflow:hidden; float:left; -webkit-border-radius:5px; border-radius:5px;}



 .sf-ques-header-title {font-size:14px; line-height:18px; font-weight:600;}



 .sf-ques-header-title a {display:block; color:#333;}



 .sf-ques-header-body {overflow:hidden; padding:0 20px;}



 .sf-ques-body { padding:15px; border:1px solid #ddd;  margin-bottom:-1px; }



 .sf-ques-body-title {font-size:18px; font-weight:600; color:#333; margin-bottom:10px;}



 .sf-ques-ans-author {width:50px; float:left; overflow:hidden; -webkit-border-radius: 100px; border-radius: 100px;}



 .sf-ques-title-meta {overflow:hidden; padding:3px 15px;}



 .sf-ques-has,



 .sf-ques-ans-meta { overflow:hidden; }



 .sf-quesans-title { color:#333; font-size:15px;}



 .sf-quesans-meta { color:#888; font-size:12px; font-weight:400;}



 .sf-anstext-body {clear:both; padding-top:20px; color:#333; font-size:15px;}



 .sf-anstext-body .sf-quesans-meta {margin-top:10px;}



 .sf-anstext-body .readmore-link {color:#3396d1; font-size:15px;}



 .sf-answer-icon { width:20px; display:inline-block;}    



 .sf-service-weekdays { list-style:none; margin:0;}



 .sf-service-weekdays li {display:table; width:100%; margin-bottom:10px;}



 .sf-service-weekdays li > span {display:table-cell; vertical-align:middle; }



 .sf-service-weekdays li > span:first-child {font-weight:400; width:100px; color:#555;}



 .sf-service-weekdays li > span:last-child {padding-left:10px;}



 .toggle-on.btn { padding-left:10px;  text-align:left; border:none !important;}



 .toggle-off.btn { padding-right:10px; text-align:right; border:none !important;} 



 .toggle-off.btn-default.btn.active:hover,



 .toggle-off.btn-default.btn.active:active,



 .toggle-off.btn-default.btn.active:focus { border:none !important; }



 #captchaimg_requestquote {margin:15px auto; display:block; text-align:center; border:1px solid #ddd; padding:5px;}



.refreshCaptcha {  color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; font-weight:600; }



.refreshCaptcha:hover,



.refreshCaptcha:active,



.refreshCaptcha:focus { text-decoration:underline; }



 .sf-quote-wrap .drag-drop-info,



 .sf-quote-wrap .drag-drop-info+p {padding:10px 20px; word-break:break-all; font-weight:600; }



 .sf-quote-wrap .drag-drop-info+p { font-size:20px; color:#999;}



 .sf-quote-wrap .rwmb-uploaded { padding:0; margin:0 -5px 10px;  }



 .sf-quote-wrap .rwmb-uploaded:after { content:""; display:block; clear:both; }



 .sf-quote-wrap .rwmb-images li { width:50%; float:left; padding-left:5px; padding-right:5px; margin-bottom:10px; position:relative; }



 .sf-quote-wrap .rwmb-images img { width:100%;  }



 .sf-quote-wrap .rwmb-images .rwmb-image-bar { position:absolute; top:10px; right:10px; font-size:20px; width:20px; height:20px; background-color:#F00;}



 .sf-quote-wrap .rwmb-images .rwmb-image-bar a { line-height:20px; display:block; text-align:center;}



 .sf-quote-wrap {margin-left:-15px; margin-right:-15px; margin-bottom:15px;}



 .sf-quote-wrap .sf-title {margin:30px 20px 0;}



 .bookingwallet-bx {text-align:center; padding-top:10px;}



 .bookingwallet-bx ul {margin:0;}



 .bookingwallet-bx ul li { margin-bottom:10px; }



 .bookingwallet-bx ul li h5{font-size:35px; margin-bottom:20px;}



 .bookingwallet-bx ul li strong { font-size:25px; color:#77c04b;}



 .bookingwallet-bx .sf-radio-checkbox {display:inline-block; margin-right:15px;}



 .sf-services-area .sf-panel {background-color:#f7f8fa; padding:10px 20px; position:relative; margin-bottom:0; border-bottom:2px solid #f0f1f3;}



 .sf-services-area .sf-panel:last-child {border-bottom:none;}



 .sf-services-area .sf-panel .acod-title .exper-author { color:#555;  font-size:15px; font-weight:600;margin-bottom:5px; text-transform:uppercase;  }



 .sf-services-area .acod-head { margin-right:120px; }



 .sf-services-area .sf-servicemeta { position:absolute; right:20px; top:22px; }



 .sf-services-area .sf-servicemeta span { margin-left:5px; font-weight:400; font-size:12px;}



 @media only screen and (max-width: 480px) { 



 .sf-services-area .sf-servicemeta { position: static; display:block; margin-bottom:5px;}



 .sf-services-area .sf-servicemeta span { margin-left:0; }



 .sf-services-area .acod-head { margin:0 0 5px; }



 }



 .sf-services-area .sf-servicemeta .fa,



 .sf-services-area .sf-servicemeta strong { color:#555; }



 .sf-service-offer-label {background-color:#77c04b; color:#fff; padding:2px 5px; font-size:10px; -webkit-border-radius:10px; border-radius:10px;}



 .sf-service-offer-label .fa{ font-size:12px;}



 .sf-service-location-area {padding:0 15px; margin-bottom:30px; clear:both; }



 .sf-service-location-area .sf-title { margin:0 0 10px; padding:0; border-bottom:none; }



 .sf-service-location-area .sf-location-text { margin:0 0 10px; } 



 .sf-total-earnings {font-size:20px; color:#77c04b; padding:0 15px; }



 .sf-total-dues {font-size:20px; color:#E3B71C; padding:0 15px;}



 .joblimit-payment-form h5 { font-size:25px; }



 .joblimit-payment-form strong { font-size:20px;  color:#3396d1;}



 #walletskipoption {margin-bottom:20px;}



 .sf-service-group-title {  font-size:14px;  font-weight:400; background-color:#f1f2f4; color:#555; padding:10px 20px; border-bottom:2px solid #eaeaea;}



 .backbtn {margin-bottom:20px;}



 .alert.alert-success,



 .alert.alert-danger



 /*.alert.alert-warning,



 .alert.alert-info*/ {position:fixed; top:20px; left:50%;  width:450px; text-align:left; z-index:999; margin-left:-225px; font-size:16px; font-weight:600; color:#fff; padding:25px 25px 25px 70px; border:none; -webkit-box-shadow:0 0 20px 5px rgba(0,0,0,0.2); box-shadow:0 0 20px 5px rgba(0,0,0,0.2); cursor:pointer;}



 .alert.alert-success {background-color:#33d275;}



 .alert.alert-danger {background-color:#ff6b79;}



 /*.alert.alert-warning {background-color:#ffc95c;}



 .alert.alert-info {background-color:#5cc4eb;}*/



 .alert.alert-success:after,



 .alert.alert-danger:after



 /*.alert.alert-warning:after,



 .alert.alert-info:after*/ {position:absolute; left:20px; top:15px; font-size: 30px; color:#fff;  font-family:"FontAwesome";} 



 .alert.alert-success:after {content:"\f05d"; }



 .alert.alert-danger:after {content:"\f05c";} 



 /*.alert.alert-warning:after {content:"\f071";} 



 .alert.alert-info:after {content:"\f05a";} */



 .alert.alert-success:before,



 .alert.alert-danger:before,



 .alert.alert-warning:before,



 .alert.alert-info:before { content:"\f00d";  position:absolute; right:10px; top:5px; font-size:14px; color:#fff;  font-family:"FontAwesome"; opacity:0.7;} 



 .alert.alert-success:hover:before,



 .alert.alert-danger:hover:before,



 .alert.alert-warning:hover:before,



 .alert.alert-info:hover:before { opacity:1; } 



 @media only screen and (max-width:767px) { 



 .alert.alert-success,



 .alert.alert-danger



 /*.alert.alert-warning,



 .alert.alert-info*/ { width:250px; font-size:14px; padding:20px 20px 20px 60px; margin-left:-125px; }



 }



 .viewcoupon-bx {text-align:center;}



 .viewcoupon-bx #addwoobookingcoupon,



 .viewcoupon-bx #addbookingcoupon {margin:25px 0 20px; position:relative;}



 .viewcoupon-bx .verifywoobookingcoupon,



 .viewcoupon-bx .verifybookingcoupon  {  position: absolute; top: 0; right: 0; padding: 15px 25px; }



 .sf-add-question-form {border:1px solid #ddd; padding:20px; background-color:#f7f8fa; margin-top:20px;}



 .sf-add-question-form .btn-primary { margin-top:20px;}



   



 #walletwiredinfo {padding:20px; text-align:center; border:2px solid #ddd; font-weight:bold; color:#bbbbbb; margin:30px auto 30px; max-width:500px;}  



 #walletwiredinfo .margin-b-20,



 #walletwiredinfo p { margin:0;}     



 .has-feedback .bootstrap-select {padding-right:0;}



 .stripe-identity-verification .rwmb-plupload_image-wrapper { margin-bottom:20px; }



 #loadservices .col-lg-3 {width:auto; float:none; display:inline-block;}



 #sf-wallet-top-balance {position:absolute; right:30px; top:50%; margin:-10px 0; font-size:16px; font-weight:bold; color:#3396d1; }



 #sf-wallet-top-balance img {height:20px; margin-right:5px; }



 .sf-current-job {background-color: #77c04b; color: #fff; padding: 2px 5px;font-size: 10px; -webkit-border-radius: 10px; border-radius: 10px;}



 .sf-cancel-membership {position:absolute; top:50%; right:30px; margin-top:-20px;}



 @media only screen and (max-width:767px) { 



 .sf-cancel-membership {position:static; margin:10px 0 0;}



 #sf-wallet-top-balance {position:static; margin:10px 0 0; }



 }



 .rwmb-plupload_image-wrapper .sf-quote-wrap .rwmb-images li {width:20%;}



 @media only screen and (max-width:767px) { 



 .rwmb-plupload_image-wrapper .sf-quote-wrap .rwmb-images li {width:33.333%;}



 }



 @media only screen and (max-width:480px) { 



 .rwmb-plupload_image-wrapper .sf-quote-wrap .rwmb-images li {width:50%;}



 }



 .sf-provider-team {    font-size: 12px;    padding: 7px 15px;    border: 2px solid #333333; color:#333333;    display: table;    width: auto;    font-weight: 600;    margin: 10px 0;}



 .sf-current-active { position:absolute; top:54px; left:-56px; color:#fff; background-color:#77c04b;  padding: 6px 12px;  font-size: 13px;  font-weight:bold;   text-align: center; -moz-transform: rotate(90deg); -webkit-transform: rotate(90deg); -o-transform: rotate(90deg); -ms-transform: rotate(90deg); transform: rotate(90deg);}



 .sf-calbooking-status {float:right; padding:10px 0;}



 .sf-calbooking-status span {display: inline-block; padding: 2px 10px; color: #fff; font-weight: 600; margin-left: 5px; border-radius: 10px; -webkit-border-radius: 10px; font-size: 10px;  text-transform: uppercase;}



 .sf-calbooking-status-complete {background-color:#10c21e;}



 .sf-calbooking-status-incomplete {background-color:#ff8040;}



 .sf-questions-norating .pixrating_title,



 .sf-questions-norating .review_rate,



 .sf-questions-norating  #add_comment_rating_wrap,



 .sf-questions-norating .review-title-form {display:none;}



 .sf-questions-norating .comment-form-comment textarea {width:100%; border:1px solid #ddd; padding:10px;}



 .sf-questions-norating .form-submit input {background-color: <?php echo (!empty($data['button-primary-background-color'])) ? esc_html($data['button-primary-background-color']): ''; ?>;



     border-color: <?php echo (!empty($data['button-primary-border-color'])) ? esc_html($data['button-primary-border-color']): ''; ?>;



     color: <?php echo (!empty($data['button-primary-color'])) ? esc_html($data['button-primary-color']).'!important': ''; ?>; padding:7px 20px; outline:none; border:none; }



 .sf-questions-norating .form-submit input:hover {background-color: <?php echo (!empty($data['button-primary-hover-background-color'])) ? esc_html($data['button-primary-hover-background-color']): ''; ?>;



     border-color: <?php echo (!empty($data['button-primary-hover-border-color'])) ? esc_html($data['button-primary-hover-border-color']): ''; ?>;



     color: <?php echo (!empty($data['button-primary-hover-color'])) ? esc_html($data['button-primary-hover-color']).'!important': ''; ?>; }



     



 .sf-download-certificate { background-color: #77c04b; color: #ffffff; padding:2px 6px; outline:none; border:none; display:table; white-space:nowrap; margin:10px 0; font-size:12px;   }



 .sf-download-certificate:hover,



 .sf-download-certificate:active,



 .sf-download-certificate:focus { color: #ffffff;}



 .sf-selectall-providers { padding:15px; background-color:#f7f8fa; border:1px solid #ddd; font-weight:bold; margin-bottom:20px; }



 .sf-quote-related-providers .sf-element-bx { margin-bottom:0px; } 



 .sf-quote-related-providers {list-style:none;}



 .sf-quote-related-providers >  li  { float:left; padding-left:15px; padding-right:15px; width:20%; margin-bottom:30px; }  



 .sf-quote-related-providers >  li .sf-rel-provider-outer  { border:1px solid #ddd;} 



 .sf-quote-related-providers  li > .sf-provider-bx { margin:0; } 



 .sf-quote-related-providers .sf-listing-thum { height:150px;} 



 .sf-quote-related-providers .sf-provider-bx .sf-category-tag { font-size: 10px; padding: 2px 5px; margin:10px;}



 .sf-quote-related-providers .sf-radio-checkbox {  padding:10px 15px; border-top:1px solid #ddd; margin:0; font-size:12px; } 



 .sf-quote-related-providers .padding-20.bg-white {  padding:10px;} 



 .sf-quote-related-providers .sf-company-name { font-size:12px; line-height:14px; } 



  .sf-quote-related-providers li:nth-child(5n+1) {clear:left; }



 @media only screen and (max-width:991px) {  



 .sf-quote-related-providers li:nth-child(5n+1) {clear:none; }



 .sf-quote-related-providers li:nth-child(4n+1) {clear:left; }



 .sf-quote-related-providers >  li  { width:25%; padding-left:5px; padding-right:5px;  } 



 .sf-selectall-providers { margin: 0 -10px 20px; } 



 }



 @media only screen and (max-width:767px) {  



 .sf-quote-related-providers li:nth-child(5n+1) {clear:none; }



 .sf-quote-related-providers li:nth-child(4n+1) {clear:none; }



 .sf-quote-related-providers li:nth-child(3n+1) {clear:left; }



 .sf-quote-related-providers >  li  { width:33.333%; }  



 }



 @media only screen and (max-width:480px) {  



 .sf-quote-related-providers li:nth-child(5n+1) {clear:none; }



 .sf-quote-related-providers li:nth-child(4n+1) {clear:none; }



 .sf-quote-related-providers li:nth-child(3n+1) {clear:none; }



 .sf-quote-related-providers li:nth-child(2n+1) {clear:left; }



 .sf-quote-related-providers >  li  { width:50%; }  



 }



 #feature-bx .bootstrap-touchspin-up,



 #feature-bx .bootstrap-touchspin-down {	padding:14px 15px;	border:1px solid #ddd;}



 .sf-question-cat-select {margin-top:15px;}



 .sf-team-schedule-bx:after {content:""; clear:both; display:block;}



 .sf-member-break-btn {text-align:right;}



 .sf-member-break-btn .site-button.square {background-color:#3396d1; display:inline-block; padding:5px 10px; color:#fff; margin:10px 0 0;}



 .selected-working-hours { padding:20px 0 0; clear:both; }



 .selected-working-hours ul { list-style:none; margin:0 15px;}



 .selected-working-hours ul li { background-color:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; padding:2px 15px;	color:#fff; white-space:normal; line-height:30px; display:inline-block; margin:0 15px 15px 0; font-size:12px; cursor:pointer; }



 @media only screen and (max-width:767px) { 



 .selected-working-hours ul li { padding:2px 10px; line-height:24px; font-size:11px; font-weight:400;}



 } 



 .working-hours-admin {border-bottom:1px solid #f0f0f0; padding-top:20px;}



 .working-hours-admin:first-child {padding-top:0px;}



 .working-hours-admin:last-child {padding-bottom:5px; border-bottom:none; }



 .working-hours-admin .sf-add-breaktime-btn {text-align:right;}



 .working-hours-admin .site-button.square {margin-top:8px; background-color:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;;	color: #fff; width:30px; height:30px; line-height:30px; text-align:center; display: inline-block; 	font-size: 16px; 	outline: none; 	cursor: pointer; 	outline: none;  border:none; text-decoration: none !important; }



 .working-hours-admin .site-button.square:hover,



 .working-hours-admin .site-button.square:focus,



 .working-hours-admin .site-button.square:active {color: #fff; }



 .working-hours-admin .sf-bh-onoff h5 {float:left;}



 .working-hours-admin .sf-bh-onoff .toggle  {float:right; margin-top:7px;}



 .working-hours-admin .sf-bh-timing-row {position:relative;}



 .working-hours-admin .sf-bh-overlay {position:absolute; top:0; left:0; width:100%; height:100%; background-color:#fff; opacity:0.8; cursor:not-allowed; }



 @media only screen and (max-width:991px) {  



 .sf-bh-onoff {margin-bottom:10px;}  



 .working-hours-admin .sf-bh-onoff .toggle { margin-top:4px;}



 .working-hours-admin .sf-bh-timing-row .col-sm-5 {margin-bottom:10px;}



 }



 .pro-setting.user-update {padding-top:40px;}



 @media only screen and (max-width:767px) {



 .pro-setting.user-update {padding-top:0;}	



 }



 .sf-membership-reactivate {margin-top:20px;}



 .alreadyvote {cursor:initial; opacity:0.6;}



 /*Full Responsive Table */



 .sf-responsive-table  td,



 .sf-responsive-table th { padding:8px !important;}



 @media only screen and (max-width:991px) {



 #small-divice-tables table, 



 #small-divice-tables  thead, 



 #small-divice-tables  tbody, 



 #small-divice-tables  th, 



 #small-divice-tables  td, 



 #small-divice-tables  tr { 	display: block; }



 #small-divice-tables  thead tr { 	position: absolute;	top: -9999px;	left: -9999px;	display:none;}



 #small-divice-tables  tr {	 border: 1px solid #ccc; }



 #small-divice-tables  td { 	border: none;	border-bottom: 1px solid #eee; 	position: relative;	padding-left: 45% !important; 	white-space: normal;	text-align:left;}



 #small-divice-tables  td:before { 	position: absolute;	top: 6px;	left: 6px;	width: 45%; 	padding-right: 10px;   font-size:12px;	white-space: nowrap;	text-align:left;	font-weight: bold;}



 #small-divice-tables  td:before {	 content: attr(data-title); }



 }



 @media only screen and (max-width:767px) {



 .sf-services-table-wrap {padding:0 !important; border:none !important; }



 }



 /*Job Detail Page */



 .sf-job-info-section {text-align:center; padding:40px 0;}



 .sf-job-info-section .job-info-list {list-style:none;}



 .sf-job-info-section .job-info-list li {display:inline-block; position:relative; padding:2px 10px; margin:0 5px; font-weight:600; font-size:14px; border-radius:5px;}



 .sf-job-info-section .job-info-list li.sf-job-timing {background-color:#333; color:#fff;}



 .sf-job-info-section .job-info-list li.sf-job-timing.full-time {background-color:#77c04b;}



 .sf-job-info-section .job-info-list li.sf-job-timing.part-time {background-color:#F49637;}



 .sf-job-info-section .job-info-list li:after {content:"/"; position:absolute; right:-10px; top:3px; font-weight:normal; color:#C1C1C1;}



 .sf-job-info-section .job-info-list li:last-child:after { display:none; }



 .sf-job-info-section .job-info-list li:first-child:after { display:none; }



 .job-info-detail {list-style:none; margin:0;  padding-bottom:20px; }



 .job-info-detail li {display:block; padding-left:20px; position:relative; margin-bottom:10px; font-weight:400; color:#999;}



 .job-info-detail li:last-child { margin:0;}



 .job-info-detail li .fa {position:absolute; top:2px; left:0; color:#777;}



 .sf-relatedjobs-listing ul {list-style:none; margin:0;}



 .sf-relatedjobs-listing ul li {margin-bottom:15px;  clear:both;}



 .sf-relatedjobs-listing ul li:after {content:""; clear:both; display:block;}



 .sf-relatedjobs-listing .sf-job-thum-bx {width:70px; float:left;}



 .sf-relatedjobs-listing .post-text-bx {margin-left:85px;}



 .sf-relatedjobs-listing .sf-jobtime-btn {padding:2px 8px;margin-top:5px; background-color:#333333; color:#fff; font-size:11px; display:table; font-weight:400; border-radius: 2px; -webkit-border-radius: 2px;}



 .sf-relatedjobs-listing .sf-job-post-title {margin:0 0 3px;}



 .sf-companyinfo-wrap ul {list-style:none; margin:0;}



 .sf-companyinfo-wrap ul li:after {content:""; clear:both; display:block;}



 .sf-companyinfo-wrap .sf-job-companylogo {width:100px; float:left;}



 .sf-companyinfo-wrap .sf-job-companylogo img {width:100%;}



 .sf-companyinfo-wrap .sf-job-companyinfo {margin-left:120px;}



 .sf-companyinfo-wrap .sf-jobcompanybtn {padding:2px 8px;margin-top:5px; background-color:#333333; color:#fff; font-size:11px; display:table; font-weight:400; border-radius: 2px; -webkit-border-radius: 2px;}



 .sf-companyinfo-wrap .sf-jobcompanytitle {margin:5px 0;}



 .section-content.provider-content {padding-top:0;}



 .sf-customerinfo-wrap ul {list-style:none; margin:0;}



 .sf-customerinfo-wrap ul li:after {content:""; clear:both; display:block;}



 .sf-customerinfo-wrap .sf-job-customerimage {width:70px; height:70px; border:1px solid #ddd; background-color:#e8eae9; float:left; border-radius:100px; -webkit-border-radius:100px; overflow:hidden;}



 .sf-customerinfo-wrap .sf-job-customerimage img {width:100%;}



 .sf-customerinfo-wrap .sf-job-customerinfoinfo {margin-left:90px; padding-top:10px;}



 .sf-customerinfo-wrap .sf-job-customer-companyname { font-weight:600; margin-top:0;}



 .sf-share-social .share-social-bx {float:none;}



 .sf-anybooking-select {float:right;}



 .sf-anybooking-select .bootstrap-select { width:200px !important;}



 .sort-filter-bx { padding:20px 15px 15px; background-color:#fff; border:1px solid #ddd; margin:30px 0 0; position:relative; }



 .sort-filter-bx > .sf-tilte { position:absolute; top:-15px; left:15px; background-color:#fff; padding:2px 10px; margin:0;}



 .sort-filter-bx .f-f-left {float:left;}



 .sort-filter-bx .f-f-right{float:right; }



 .sf-search-any-option {margin:0 -3px; list-style:none;}



 .sf-search-any-option > li {float:left; width:130px; padding:0 3px; }



 .sf-search-any-option > li.sf-filterby-date {float:left; width:165px; padding:0 5px; }



 .sf-search-any-option > li:last-child {width:auto;}



 .sf-search-any-option > li .bootstrap-select {width:100% !important; }



 .sf-search-any-option > li .bootstrap-select .dropdown-toggle { padding-left:10px; padding-right:20px; border-radius:5px; }



 .sf-search-any-option > li .btn-primary {padding:10px 20px; }





@media only screen and (max-width:991px) { 

.sf-search-any-option > li { float: left; width: 130px; padding: 0 15px; width: 33.333%; }

.sf-search-any-option > li.sf-filterby-date { float: left; width: 33.333%; padding: 0 5px; }   

}





 .sf-search-sortby {margin:0 -3px; list-style:none; display:inline-block;}



 .sf-search-sortby li {float:left; width:75px; padding:0 3px; }



 .sf-search-sortby li.sf-select-sort-by {width:100px; }



 .sf-search-sortby li .bootstrap-select {width:100% !important; }



 .sf-search-sortby li .bootstrap-select .dropdown-toggle {padding-left:10px; padding-right:20px; }



 .sf-search-grid-option {margin:0 -3px; list-style:none; display:inline-block;}



 .sf-search-grid-option li {float:left; padding:0 3px; }



 .sf-search-grid-option li .btn {padding:9px 10px; border: 1px solid #ddd; }



 @media only screen and (max-width:991px) { 



 .sort-filter-bx .f-f-left,



 .sort-filter-bx .f-f-right  { float: left; width: 100%; }



 .sort-filter-bx .f-f-left { margin-bottom:10px; }



 .sf-search-any-option {  margin: 30px -15px 0px; width: 100%; } 



.sf-search-any-option > li:last-child { width:33.333%; } 

.sf-search-any-option > li .btn-primary { padding: 10px 20px; width: 100%; }



 }



 @media only screen and (max-width:650px) { 

.sf-search-any-option > li,

.sf-search-any-option > li.sf-filterby-date {width:50%; }



.sf-search-any-option > li {margin-bottom:10px;}

.sf-search-any-option > li:last-child {margin-bottom:0;}



.sf-search-any-option li:last-child { width: 100%; }    

     

}



 .sf-job-details-fileds {margin-bottom:20px; }



 .sf-job-details-fileds ul {list-style:none; margin:0; }



 .sf-job-details-fileds ul li {display:table; width:100%; border:1px solid #eeeeee; margin-top:-1px;}



 .sf-job-details-fileds ul li:nth-child(even) {background-color:#f7f8fa;}



 .sf-job-details-fileds ul li span {padding:10px 15px; display:table-cell; width:50%;}



 .sf-job-details-fileds ul li span:first-child {font-weight:600;}



 .sf-mangopay-accountform {float:left; width:49%; background-color:#fff; padding:30px; border:2px solid #ddd; margin-bottom:50px;}



 .mp_merchant_bank_account_container > p { margin:0 0 20px ;}



 .mp_merchant_bank_account_container > p b { font-size:20px; color:#555; font-weight:400; text-transform:uppercase; }



 .mp_merchant_bank_account_container table td { display:block; clear:both; padding:0;}



 .mp_merchant_bank_account_container .regular-text,



 .mp_merchant_bank_account_container .input-text  { padding:9px 12px; height:50px; line-height:20px; border: 1px solid #dbdbdb; width:100%; box-shadow: 0 1px 3px 0 rgba(0,0,0,.06); -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,.06);}



 .mp_merchant_bank_account_container table td .regular-text ,



 .mp_merchant_bank_account_container table td .bootstrap-select  {margin-bottom:20px;}



 .mp_merchant_bank_account_container table td .bootstrap-select > .dropdown-toggle {height: 50px;}



 .mp_merchant_bank_account_container table td > .regular-text + br + .regular-text {margin-top:-10px;}



 .mp_merchant_bank_account_container table td > .regular-text + br {display:none;}



 .mp_merchant_bank_account_container table td p {margin:0;}



 .kyc_submit_div .kyc_submit,



 .sf-mangopay-accountform  .btn-inverse { background-color: #77c04b; color: #ffffff; padding:10px 20px; border:none; outline:none;}



 .sf-mangopay-accountform  .btn-inverse:hover,



 .sf-mangopay-accountform  .btn-inverse:active,



 .sf-mangopay-accountform  .btn-inverse:focus,



 .kyc_submit_div .kyc_submit:hover,



 .kyc_submit_div .kyc_submit:active,



 .kyc_submit_div .kyc_submit:focus {background-color: #6ab33e; color: #ffffff; }



 .sf-mangopay-accountform + #kyc_div_global{float:right; width:49%; background-color:#fff; padding:30px; border:2px solid #ddd;}



 .sf-mangopay-accountform + #kyc_div_global > div {margin:0 !important;}



 .kyc_list_documents_banner.light { background-color: #68aef3; padding: 15px; font-size: 16px;}



 .kyc_list_documents_ul tr td {padding:5px;}



 .kyc_list_documents_ul tr .kyc_list_documents_td_status_icon {padding:0;}



 .kyc_form_block > p { margin:0 0 20px ;}



 .kyc_form_block > p strong { font-size:20px; color:#555; font-weight:400; text-transform:uppercase; }



 .kyc_select_type > .dropdown-toggle {height: 50px;}



 .kyc_submit_div p {margin:0; line-height:normal;}



 .kyc_form_block .kyc_input_file { border:2px dashed #ddd; padding:15px;}



 #kyc_div_global .entry-footer{ padding:15px 0 0; }



 #kyc_div_global .post-edit-link { padding:3px 12px; font-size:12px; color:#555; background-color:#ddd; }



 @media only screen and (max-width:767px) {



 .sf-mangopay-accountform {float:none; width:100%; padding:20px; margin-bottom:30px;}



 .sf-mangopay-accountform + #kyc_div_global{float:none; width:100%; padding:20px; margin-bottom:50px;}



 .kyc_list_documents_ul tr td {display:block; margin:0;}



 }



 .sf-availability-label {position:absolute; bottom:-8px; left:20px; background-color:#77c04b; padding:1px 10px; color:#fff; font-size:12px; border-radius:10px;} 



 .sf-availability-label.unavailable { background-color:#FF373D;} 



 .toggle-bulk-availability {margin-bottom:30px;}



 .sf-booking-info-col [id*="services-summary-"] {padding-top:15px; clear:both;}



 @media only screen and (max-width:480px) {



 .sf-rouned-box {padding:10px;}



 }



 textarea#areazipcode + i + p {margin:15px 0 0;}



 .sf-memberbreak-days { list-style:none; margin:0;}



 .sf-memberbreak-days li { background-color:#3396d1; padding:2px 15px;	color:#fff; white-space:normal; line-height:30px; display:inline-block; margin:0 15px 15px 0; font-size:12px; cursor:pointer; }



 @media only screen and (max-width:767px) { 



 .sf-memberbreak-days li { padding:2px 10px; line-height:24px; font-size:11px; font-weight:400;}



 } 



 .booking-payment-data li {font-weight:normal; color:#777; font-size:12px;}



 .booking-payment-data li strong {margin-right:5px; color:#555; padding-right:2px;}



 .booking-payment-data li strong:after {content:":";}



 .booking-payment-data li .fa-check {color:#27C411}



 .booking-payment-data li .fa-close {color:#FF3E43}



 .woocommerce table.shop_table {background-color:#fff;}



 .woocommerce table.shop_table th { padding: 15px 12px; font-size: 14px; text-transform: uppercase; }



 .woocommerce table.shop_table td { padding: 10px 12px; }



 .woocommerce-cart table.cart td.actions .coupon .input-text {width:120px;}



 .woocommerce-cart table.cart td.actions .coupon .input-text { border:1px solid #ddd; height: 50px; padding:13px 15px;}



 .woocommerce-cart table.cart td.actions .coupon .button,



 .woocommerce #payment #place_order, 



 .woocommerce-page #payment #place_order { height: 50px; padding:13px 15px; background-color:#3396d1; color:#fff;}



 .woocommerce-cart table.cart td.actions .button[name="update_cart"] {display:none;}



 .woocommerce #payment #place_order:hover,



 .woocommerce #payment #place_order:active,



 .woocommerce #payment #place_order:focus,



 .woocommerce-page #payment #place_order:hover,



 .woocommerce-page #payment #place_order:active,



 .woocommerce-page #payment #place_order:focus,



 .woocommerce-cart table.cart td.actions .coupon .button:hover,



 .woocommerce-cart table.cart td.actions .coupon .button:active,



 .woocommerce-cart table.cart td.actions .coupon .button:focus,



 .woocommerce-cart table.cart td.actions .button[name="update_cart"]:hover,



 .woocommerce-cart table.cart td.actions .button[name="update_cart"]:active,



 .woocommerce-cart table.cart td.actions .button[name="update_cart"]:focus { height: 50px; padding:13px 15px; background-color:#1679b4; color:#fff;}







.job-manager-form input[type="submit"],

.sf-jobdetail-blocks .sf-btn-large2,

.sf-contact-submit-btn .sf-btn-large,

.side-bar .bx-search .search-form .search-submit,
.widget_search.search-2 .search-form .search-submit,

.sf-blog-comment-wrap .comments-area .comment-form p input[type="submit"],

.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,

.job-manager-form fieldset .account-sign-in .button {  

 <?php

	echo (service_finder_theme_get_data($data,'button-primary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-background-color').'; ' : '';

	echo (service_finder_theme_get_data($data,'button-primary-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-primary-border-color').'; ' : '';

	echo (service_finder_theme_get_data($data,'button-primary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-color').'; ' : '';

?> 

}



.job-manager-form input[type="submit"]:hover,

.job-manager-form input[type="submit"]:active,

.job-manager-form input[type="submit"]:focus,



.sf-jobdetail-blocks .sf-btn-large2:hover,

.sf-jobdetail-blocks .sf-btn-large2:active,

.sf-jobdetail-blocks .sf-btn-large2:focus,



.sf-contact-submit-btn .sf-btn-large:hover,

.sf-contact-submit-btn .sf-btn-large:active,

.sf-contact-submit-btn .sf-btn-large:focus,  



.side-bar .bx-search .search-form .search-submit:hover,

.side-bar .bx-search .search-form .search-submit:active,

.side-bar .bx-search .search-form .search-submit:focus,



.sf-blog-comment-wrap .comments-area .comment-form p input[type="submit"]:hover,

.sf-blog-comment-wrap .comments-area .comment-form p input[type="submit"]:active,

.sf-blog-comment-wrap .comments-area .comment-form p input[type="submit"]:focus,



.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,

.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:active,

.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus,



.job-manager-form fieldset .account-sign-in .button:hover,

.job-manager-form fieldset .account-sign-in .button:active,

.job-manager-form fieldset .account-sign-in .button:focus { 



 <?php

	echo (service_finder_theme_get_data($data,'button-primary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-hover-background-color').'; ' : '';

	echo (service_finder_theme_get_data($data,'button-primary-hover-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-primary-hover-border-color').'; ' : '';

	echo (service_finder_theme_get_data($data,'button-primary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-hover-color').'; ' : '';

?>



}  

 



 .woocommerce .col2-set .col-1,

 .woocommerce .col2-set .col-2 { background: #fff; padding:20px;	border:1px solid #ddd; margin-bottom:30px;}



 #add_payment_method #payment, 



 .woocommerce-cart #payment, 



 .woocommerce-checkout #payment { background: #fff; border-radius: 0;  -webkit-border-radius: 5px; border:1px solid #ddd;} 



 #add_payment_method #payment div.payment_box, 



 .woocommerce-cart #payment div.payment_box,



 .woocommerce-checkout #payment div.payment_box { background: #f3f4f6;} 



 #add_payment_method #payment div.payment_box:before,



 .woocommerce-cart #payment div.payment_box:before,



 .woocommerce-checkout #payment div.payment_box:before{ border:1em solid #f3f4f6; border-right-color:transparent; border-left-color:transparent; border-top-color:transparent;}



 .wc-stripe-elements-field { padding: 12px !important; }



 .woocommerce-notice--success.woocommerce-thankyou-order-received {font-size:24px; color:#77c04b; font-weight:bold; }



 .woocommerce-notice--success.woocommerce-thankyou-order-received {font-size:24px; color:#77c04b; font-weight:bold; }



 .woocommerce .woocommerce-customer-details address {background-color:#fff; padding:25px 20px;}



 .woocommerce .woocommerce-customer-details address  br {margin-bottom:10px !important;}



 .woocommerce-customer-details--phone {margin-top:10px !important;}



 .woocommerce ul.order_details { margin: 0 0 3em; list-style: none;  padding:15px 15px 5px;  background: #fff;  border: 1px solid #ddd; }



 .woocommerce ul.order_details li {font-size:12px; margin-bottom:10px;}



 .woocommerce ul.order_details li strong {font-size:14px;}



 .woocommerce ul.order_details li:last-of-type { margin-right: 0; padding-right: 0;}



 .woocommerce td.product-name .wc-item-meta {margin:10px 0 0;}



 .woocommerce table.shop_table th.product-quantity,



 .woocommerce table.shop_table td.product-quantity,



 .woocommerce table.shop_table td.product-thumbnail,



 .woocommerce table.shop_table th.product-thumbnail {display:none;}



 @media only screen and (max-width:767px) {



 div.table-responsive > div.dataTables_wrapper > div.row > div[class^="col-"]:first-child {width:100%; float:none;}



 div.table-responsive > div.dataTables_wrapper > div.row > div[class^="col-"]:last-child { width:100%; float:none;}



 }



 .identitycheck .col-md-12 {margin-bottom:15px;}



 .identitycheck  ul.rwmb-images { margin:0 -1% ;}



 .identitycheck  ul.rwmb-images li img {height:auto;}



 .identitycheck  ul.rwmb-images li {background-color:#eeeeee; border:1px solid #ddd; width:23%; margin:0 1% 10px;}



 .identitycheck  ul.rwmb-images li img {height:auto;}



 @media only screen and (max-width:480px) {



 .identitycheck  ul.rwmb-images li {width:48%;}



 }



 .bs-modal-open {



   overflow: hidden;



 }



 .bs-modal-open .modal {



   overflow-x: hidden;



   overflow-y: auto;



 }



 .bs-modal-open {



   @extend .modal-open;



 }



 #user_nationality_field #user_nationality {display:block !important; border:1px solid #ddd; padding:10px 12px;}



 #user_nationality_field .bootstrap-select {display:none !important;}



 .add_media.sf-add-media {background-color:#fff; border:1px solid #ddd; border-bottom-width:2px; padding:2px 10px 2px 30px; margin-bottom:10px; position:relative;}



 .add_media.sf-add-media:after { content:"\f083"; position:absolute; left:10px; top:2px; font-family:"FontAwesome"; color:#555; }



 .showreplies span {font-family:Arial; color:#000; font-size:11px; font-weight:bold; margin-left:3px;}



 .job_listing_preview.single_job_listing .container { width:100%; padding:0;}



 .edit_service_group_bx,



 .service_group_bx  {margin-bottom:20px;}



 .button-default,



 a.button-default {border:1px solid #ddd; color:#555;}



 .button-default:hover,



 a.button-default:hover,



 .button-default:focus,



 a.button-default:focus,



 .button-default:active,



 a.button-default:active {border:1px solid #c1c1c1; color:#333; background-color:#F3F3F3;}



 .sf-approveidentify-icon .sf-featured-approve {position:static;}



 .sf-customer-avgrage-rating {float:right;}



 @media only screen and (max-width:1200px) {



 .sf-customer-avgrage-rating {float:none;}



 }



 .sf-customer-avgrage-rating .sf-customer-rating-row {display:table; padding:0;}



 .sf-customer-avgrage-rating .sf-customer-rating-row [class*="sf-customer-rating-"] {display:table-cell; padding:2px; }



 .sf-customer-avgrage-rating .sf-customer-rating-name {width:140px; font-weight:400;}



 .sf-customer-avgrage-rating .sf-customer-rating-count {width:75px;}



 .sf-customer-avgrage-rating .sf-customer-rating-count-digits {width:40px; font-weight:600; font-size:12px;}



 .sf-customer-avgrage-rating .sf-customer-rating-smiley  {width:37px;}



 .sf-customer-avgrage-rating .sf-customer-rating-smiley .caption span  {width:18px; height:18px;}



 @media only screen and (max-width:650px) {



 .sf-customer-avgrage-rating {float:none; clear:both;}



 .sf-customer-avgrage-rating .sf-customer-rating-name {width:130px;}



 }



 .sf-category-filter-bar .sort-filter-bx {margin:0; border:none; padding:0; background:none;}



 .sf-category-filter-bar .sf-search-grid-option li .btn {border:1px solid #ddd; min-width:45px;}



 .sf-category-filter-bar .sf-search-sortby,



 .sf-category-filter-bar .sf-search-grid-option {float:left;}



 .sf-category-filter-bar .sf-search-sortby {margin-right:3px;}



 /*	FAQ's */



 .arconix-faq-wrap {



 	background:#fff !important;



     border-radius:0 !important;



 	-webkit-border-radius:0 !important;



     margin: 14px 0 !important;



     padding:10px 12px !important;



 }



 .arconix-faq-title {



 	font-weight:600;



 	position:relative;



 	padding-left:35px !important;



 	background-image:none !important;



 }



 .arconix-faq-title.faq-closed:before,



 .arconix-faq-title.faq-open:before {



 	position:absolute;



 	left:-13px;



 	top:-11px;



 	background-color:#3396D1;



 	font-family:"FontAwesome";



 	padding:13px 14px;



 	color:#fff;



 	font-size:12px;



 }



 .arconix-faq-title.faq-open:before {



 	content:"\f068 ";



 }



 .arconix-faq-title.faq-closed:before {



 	content:"\f067 ";



 }



 .arconix-faq-wrap .arconix-faq-content {



     margin-left: 12px !important;



     padding:10px 22px !important;



 	font-size:16px !important;



 }



 .sf-requestquote-icon {width:21px; display:inline-block; } 



 .latest-blog .sf-no-img-blog {background-color:#f7f8fa; padding-top:30px;}



 .latest-blog .sf-no-img-blog .img-effect2:before {display:none;}



 .latest-blog .owl-blogs .sf-no-img-blog {padding-top:0px;}



 /*================================



 	Home Page 4



 ================================*/



 .sf-categoriesBox-pic { border:10px solid #fff; -webkit-box-shadow: 0 6px 10px 3px rgba(0,0,0,0.2); box-shadow: 0 6px 10px 3px rgba(0,0,0,0.2); -webkit-border-radius: 5px 5px 5px 5px;



 border-radius: 5px 5px 5px 5px; }



 .sf-categoriesBox-info { padding-top:10px; }



 .sf-cateoriess-half-bg { 



 width:100%; height:50%; position:absolute; top:0px; left:0px; width:100%; height:50%; z-index:1; 



 background-color: <?php echo (!empty($data['category-top-bg-color'])) ? esc_html($data['category-top-bg-color']): '#0e1215'; ?>;



 }



 .sf-howServFinWork-box { padding-left:0px; padding-right:0px; }



 .sf-howServFinWork-box [class*="sf-icon-"] { position:relative; width:100px; height:100px; line-height:96px; border:2px solid #fff; text-align:center; border-radius:100%;	-webkit-border-radius:100%; }



 .sf-howServFinWork-box [class*="sf-icon-"] img { height:55px; }



 .sf-howServFinWork-box [class*="sf-icon-"] .sf-no-step { position:absolute; top:0px; right:0px; font-size:14px;  font-weight:600; background-color:#fff; width:25px; height:25px; line-height:25px; border-radius:100%;	-webkit-border-radius:100%; }



 .sf-howServFinWork-box p { color:#fff }



 @media only screen and (max-width:767px) {



 .sf-howServFinWork-box { padding-left:50px; padding-right:50px; margin-bottom:50px; }	



 .col-md-4:last-child .sf-howServFinWork-box { margin-bottom:0px; }	



 }



 @media only screen and (max-width:480px) {



 .sf-howServFinWork-box { padding-left:20px; padding-right:20px; margin-bottom:50px; }	



 }



 .sf-latest-news2 { margin-bottom:30px; text-align:center; }



 .sf-latest-news2 .post-thum { border-radius:5px 5px 0 0; -webkit-border-radius:5px 5px 0 0; overflow:hidden;}



 .sf-latest-news2 .post-info {	padding:20px;	background-color:#fff;	border:1px solid #e8e8e8;	border-radius: 0 0 5px 5px; -webkit-border-radius:0 0 5px 5px; }



 .sf-latest-news2 .post-title {	margin-bottom:5px; }



 .sf-latest-news2 .post-meta ul li { color:#999999; }



 .sf-latest-news2 p:last-child { margin:0; }



 @media only screen and (max-width:991px) {



 .sf-latest-news2 .post-info { padding:15px; }



 }



 .job_listings.job_listings-new .job_listing { padding:15px; }



 .job_listings.job_listings-new .job_listing .job-comapny-like-heart { padding:25px 35px 25px 20px; float:left; font-size:20px; }



 .job_listings.job_listings-new .job_listing .job-comapny-logo { width:65px; height:65px; border:none; padding:0px; }



 .job_listings.job_listings-new .job_listing .job-comapny-info { padding-left:140px; }



 .job_listings.job_listings-new .job_listing .job-comapny-info .position { width: 38%; }



 .job_listings.job_listings-new .job_listing .job-comapny-info .location { width: 25%; }



 .job_listings.job_listings-new .job_listing .job-comapny-info .meta { width: 20%;  }



 .job_listings.job_listings-new .job_listing .job-comapny-info .meta .job-type.hourly { display:inline-block; background-color:#62b815; font-weight:normal; text-transform:none; padding:2px 25px 1px; border-radius:3px;	-webkit-border-radius:3px;  }



 .job_listings.job_listings-new .job_listing .job-comapny-info .job-comapny-price { width:17%; float:left; color:#62b815; font-size:18px; font-weight:600; }



 .pricing-tables-wrap { background-color:#fff; }



 .pricing-tables-top { background-color:#fff; text-align:center; border-bottom:1px solid #eaeaea; }



 .pricing-tables-name,



 .pricing-tables-money { padding:20px 30px; }



 .pricing-tables-name { font-size:22px; color:#000; font-weight:600; }



 .pricing-tables-text { font-size:14px; color:#555; padding:0px 30px; }



 .pricing-tables-money  strong { font-size:22px; line-height:22px; font-weight:900; color:#d61c36; display:inline-block; }



 .pricing-tables-money span { font-size:16px; line-height:15px; color:#8d9091; display:inline-block; }



 .pricing-tables-midd { padding:20px 30px 0; }



 .pricing-tables-midd ul { list-style:none; margin:0; }



 .pricing-tables-midd ul li { position:relative; color:#3a3a3a; padding:7px 0px 7px 25px; }



 .pricing-tables-midd ul li.pricing-not-add { opacity:0.3; }



 .pricing-tables-midd ul li.pricing-not-add .fa { color:#3a3a3a; }



 .pricing-tables-midd ul li .fa { color:#62b815; position:absolute; left:0px; top:10px; }



 .pricing-tables-midd ul li:last-child { border-bottom:none; }



 .pricing-tables-bottom { text-align:center; }



 .pricing-tables-bottom .btn { width:80%; position:relative; margin:30px 0px;}



 .pricing-tables-midd ul li.sf-featued-no-provide { opacity:0.5; }



 .pricing-tables-midd ul li.sf-featued-no-provide .fa { color:#777; }



 @media only screen and (max-width:991px) {



 .pricing-tables-wrap { margin-bottom:50px; }



 }



 .sf-providers-follow-left { padding-right:60px; }



 .sf-providers-follow-title > h2,



 .sf-providers-follow-text p { <?php echo (service_finder_theme_get_data($data,'shortcode-followers-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'shortcode-followers-text-color').'; ' : '#fff'; ?> line-height:1.8; }



 @media only screen and (max-width:991px) {



 .sf-providers-follow-left { padding-right:0px; margin-bottom:30px; }



 }



 /*======================================



 	Animated play btn



 ======================================*/



 .play-now .icon { position:absolute;left:50%;top:50%;height:80px;width:80px;text-align:center;line-height:74px; border:3px solid #fff; color:#fff;z-index:1; font-size:24px;padding-left:5px; display: block; 



 	-webkit-transform: translateX(-50%) translateY(-50%); transform: translateX(-50%) translateY(-50%); -webkit-transform-origin:center; transform-origin: center center; 



 	-webkit-border-radius: 50%; -moz-border-radius: 50%; -ms-border-radius: 50%; -o-border-radius: 50%; border-radius: 50%; 



 	-webkit-box-shadow: 0 5px 10px 0 rgba(255, 255, 255, .1); -moz-box-shadow: 0 5px 10px 0 rgba(255, 255, 255, .1); -ms-box-shadow: 0 5px 10px 0 rgba(255, 255, 255, .1); 



 	-o-box-shadow: 0 5px 10px 0 rgba(255, 255, 255, .1); box-shadow: 0 5px 10px 0 rgba(255, 255, 255, .1);



 }



 .play-now .ripple,



 .play-now .ripple:before,



 .play-now .ripple:after { position:absolute; top:50%; left:50%; height: 80px; width: 80px;



 	-webkit-transform: translateX(-50%) translateY(-50%); transform: translateX(-50%) translateY(-50%); -webkit-transform-origin:center; transform-origin: center center; 



 	-webkit-border-radius: 50%; -moz-border-radius: 50%; -ms-border-radius: 50%; -o-border-radius: 50%; border-radius: 50%;



 	-webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, .3); -moz-box-shadow: 0 0 0 0 rgba(255, 255, 255, .3); -ms-box-shadow: 0 0 0 0 rgba(255, 255, 255, .3); 



 	-o-box-shadow: 0 0 0 0 rgba(255, 255, 255, .3); box-shadow: 0 0 0 0 rgba(255, 255, 255, .3);



 	-webkit-animation: ripple 3s infinite; -moz-animation: ripple 3s infinite; -ms-animation: ripple 3s infinite; -o-animation: ripple 3s infinite; animation: ripple 3s infinite;



 }



 .play-now .ripple:before { -webkit-animation-delay: .9s; -moz-animation-delay: .9s; -ms-animation-delay: .9s; -o-animation-delay: .9s; animation-delay: .9s;  content: ""; position: absolute; }



 .play-now .ripple:after { -webkit-animation-delay: .6s; -moz-animation-delay: .6s; -ms-animation-delay: .6s; -o-animation-delay: .6s; animation-delay: .6s; content: ""; position: absolute; }



 @-webkit-keyframes ripple {



     70% {box-shadow: 0 0 0 70px rgba(255, 255, 255, 0);}



 	100% {box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);}



 }



 @keyframes ripple {



     70% {box-shadow: 0 0 0 70px rgba(255, 255, 255, 0);}



     100% {box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);}



 }



 .overlay-wraper { position: relative; }



 .overlay-main { position: absolute; left: 0; top: 0;  width: 100%; height: 100%; opacity: 0.1; }



 .sf-video-pay-pic {overflow:hidden; border-radius:10px; -webkit-border-radius:10px; margin-bottom:30px; }



 .sf-video-pay-pic img { width:100%; }



 /*testimonial 2*/



 .sf-testimonials-left { padding-right:5px; }



 .testimonial-2 .testimonial-text { background-color:#fff; padding:30px 35px 60px 35px; margin:0px; border-radius:5px; -webkit-border-radius:5px; }



 .testimonial-2 .testimonial-text .testimonial-reviews { font-size:24px; font-weight:600; margin-bottom:15px; }



 .testimonial-2 .testimonial-text p { line-height:normal; }



 @media only screen and (max-width: 767px) { 



 .testimonial-2 .testimonial-text { padding:25px 30px 70px 25px; }



 }



 .testimonial-2 .testimonial-text:after { content:""; position:absolute; bottom:-15px; left:50px;	width:0; height:0; border-left:15px solid transparent; border-right: 15px solid transparent; border-top: 15px solid #eff3f6; }



 .testimonial-2 .testimonial-detail { padding:0px 0 20px 20px; }



 .testimonial-2 .testimonial-thum { float:left; border:5px solid #eff3f6;	margin-top:-40px; margin-right:15px; width:80px; height:80px; padding:0px; border-radius:100%; -webkit-border-radius:100%; overflow:hidden;  }



 .testimonial-2 .testimonial-thum img { height:auto; }



 .testimonial-2 .testimonial-name,



 .testimonial-2 .testimonial-position {	 padding:2px 0; }



 .testimonial-2 .testimonial-name { padding-top:15px; <?php echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '#7d4df6'; ?>; }



 .testimonial-2 .testimonial-position { color: #f11749; }



 .testimonial-2 .quote-left:before { top:50px; }



 



 .sf-company-satus2 { background-color:#fff; padding:30px; <?php echo (service_finder_theme_get_data($data,'shortcode-statistics-text-color') != '') ? 'color:'.service_finder_theme_get_data($data,'shortcode-statistics-text-color').'; ' : '#767676'; ?>; }



 .sf-company-satus2 .sf-company-count { font-size:50px; }



 .sf-company-satus2 .sf-company-satus-name { font-size:22px; text-transform:none;}



 .sf-company-satus2 .sf-company-satus-line { padding:6px; margin:30px 10px 5px;  }



 .sf-company-satus2 .sf-company-satus-line.purple { background-color:#7748ee; } 



 .sf-company-satus2 .sf-company-satus-line.green { background-color:#62b815; } 



 .sf-company-satus2 .sf-company-satus-line.yellow { background-color:#feb92d; } 



 .sf-company-satus2 .sf-company-satus-line.blue { background-color:#2dbefd; } 



 



 



 @media only screen and (max-width: 991px) { 



 .sf-company-satus2 { margin-bottom:30px; }



 }



 



 @media only screen and (max-width: 767px) { 



 .col-md-3:last-child .sf-company-satus2 { margin-bottom:0px; }



 }



 .sf-footer-light .footer-top { background: <?php echo (!empty($data['footer-background-color'])) ? esc_html($data['footer-background-color']): '#fafbfa'; ?>; }



 .sf-footer-light p {  color: <?php echo (!empty($data['top-footer-text-color'])) ? esc_html($data['top-footer-text-color']): '#777'; ?>; }



 .sf-footer-light h1, .sf-footer-light h2, .sf-footer-light h3, .sf-footer-light h4, .sf-footer-light h5, .sf-footer-light h6 {



      color: <?php echo (!empty($data['top-footer-text-color'])) ? esc_html($data['top-footer-text-color']): '#777'; ?>;



 }



 .sf-footer-light .footer-bottom { 

    background: <?php echo (!empty($data['bottom-footer-bg-color'])) ? esc_html($data['bottom-footer-bg-color']): '#fafbfa'; ?>;

    padding: 30px 0;

    color: <?php echo (!empty($data['bottom-footer-text-color'])) ? esc_html($data['bottom-footer-text-color']): '#777'; ?>;

    position:relative;

}



     



 .sf-footer-light .footer-bottom p { 



 	color: <?php echo (!empty($data['bottom-footer-text-color'])) ? esc_html($data['bottom-footer-text-color']): '#777'; ?>;



 }     



 .sf-footer-light .sf-footer-divider-line { height:1px; background-color:#000; opacity:0.1;  }



 .sf-footer-light  a, 



 .sf-footer-light  a:visited { color: <?php echo (!empty($data['top-footer-link-color'])) ? esc_html($data['top-footer-link-color']): '#777'; ?>;}



 .sf-feaProvideer-wrap { border:1px solid #ddd; background-color:#fff; position:relative; border:1px solid #ddd; margin-bottom:30px; border-radius:5px; -webkit-border-radius:5px; }



 .sf-feaProvideer-wrap .sf-featured-approve { right:15px; top:15px; left:auto; z-index:2;}



 .sf-feaProvideer-wrap .sf-feaProvideer-label { position:absolute; left:-5px; top:20px; z-index:1;  background-color:#62b815; padding:3px 10px 2px; color:#fff; text-transform:uppercase; font-size:12px; border-top-right-radius:2px; -webkit-border-bottom-right-radius:2px; }



 .sf-feaProvideer-wrap .sf-feaProvideer-label:after { content:""; position:absolute; left:0px; top:-5px;  width:0px; height:0px; border-top:6px solid transparent; border-bottom: 0px solid transparent; border-right:5px solid #41850c; }



.sf-feaProvideer-wrap .sf-feaProvideer-pic { width:170px; float:left; margin:25px; position:relative; }



 .sf-feaProvideer-wrap .sf-feaProvideer-pic img { width:100%; }



 .sf-feaProvideer-wrap .sf-feaProvideer-info { margin:25px 80px 25px 220px; }



 .sf-feaProvideer-wrap .sf-feaProvideer-info .sf-categories-label { position: relative; margin-bottom: 5px; top: 0; left: 0;z-index: 1; } 



 .sf-feaProvideer-wrap .sf-feaProvideer-info .sf-feaProvideer-title { margin:5px 0px; }



 .sf-feaProvideer-wrap .sf-feaProvideer-info .sf-feaProvideer-address { font-size:12px; color:#999; margin-bottom:10px; }



 .sf-feaProvideer-wrap .sf-feaProvideer-info .sf-feaProvideer-text { line-height:1.6; }



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap { position:absolute; top:0px; right:0px; width:50px; height:100%; display:block; border-left:1px solid #ddd; } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap.sf-iconbox-cnt-4 .sf-feaProvideer-icon,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap.sf-iconbox-cnt-4 .sf-feaProgrid-icon { height:25%; } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap.sf-iconbox-cnt-3 .sf-feaProvideer-icon,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap.sf-iconbox-cnt-3 .sf-feaProgrid-icon { height:33.333%; } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap.sf-iconbox-cnt-2 .sf-feaProvideer-icon,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap.sf-iconbox-cnt-2 .sf-feaProgrid-icon { height:50%; } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap.sf-iconbox-cnt-1 .sf-feaProvideer-icon,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap.sf-iconbox-cnt-1 .sf-feaProgrid-icon { height:100%; } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon { width:50px; height:25%; display:table; cursor:pointer; position:relative; } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon i,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon i { display:table-cell; font-size:18px; text-align:center; vertical-align:middle; border-bottom:1px solid #ddd; } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon:hover i,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon:hover i { font-size:20px;  } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon i { border-bottom:none; } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon .sf-feaPro-tooltip,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon .sf-feaPro-tooltip { position:absolute; top:15px; right:100%; margin-right:5px; background-color:#383838; white-space:nowrap; font-size:12px; color:#fff; padding:2px 5px; opacity:0; border-radius:2px; -webkit-border-radius:2px;  } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon .sf-feaPro-tooltip:after,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon .sf-feaPro-tooltip:after { content:""; position:absolute; right:-5px; top:50%; margin-top:-2.5px; width:0px; height:0px; border-top:4px solid transparent; border-bottom: 4px solid transparent; border-left:5px solid #383838; } 



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon:hover .sf-feaPro-tooltip,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon:hover .sf-feaPro-tooltip { opacity:1; } 



 .sf-feaProvideer-wrap .sf-profile-link { width: calc(100% - 50px); }



 @media only screen and (max-width:767px) {  



 .sf-feaProvideer-wrap .sf-feaProvideer-info { margin: 15px 15px 15px 210px; }



 .sf-feaProvideer-wrap .sf-feaProvideer-pic { margin: 15px; }



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap { position: static; width: 100%; height: 50px; display:table; border-top:1px solid #ddd; border-left:none; }



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon { width: 1%;  height: 50px; display: table-cell; text-align:center; vertical-align:middle;}



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon > .sf-feaPro-tooltip + i,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon > .sf-feaPro-tooltip + i { display:inline-block; border:none; }



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon:first-child { border-left:none; }



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon > .sf-feaPro-tooltip,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon > .sf-feaPro-tooltip { left:50%; top:auto; bottom:120%; right:auto; transform: translateX(-50%); }



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon:first-child .sf-feaPro-tooltip { left:10%; transform: translateX(-10%); }



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon:last-child .sf-feaPro-tooltip { left:90%; transform: translateX(-90%); }



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon .sf-feaPro-tooltip::after,



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon .sf-feaPro-tooltip::after { right:50%; margin-right:-2.5px; top:100%; margin-top:0px; border-right: 4px solid transparent; border-top: 4px solid #383838; border-left: 5px solid transparent; }



 .featured-box-slider .sf-feaProvideer-wrap { margin-left:15px; margin-right:15px; }



 .sf-feaProvideer-wrap .sf-profile-link { width:100%; height:calc(100% - 50px); }



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProvideer-icon { width:1%;  }



 .sf-feaProvideer-wrap .sf-feaProvideer-iconwrap .sf-feaProgrid-icon  { width:1%; display:table-cell; height:50px; text-align:center; vertical-align:middle;  }



 }



 @media only screen and (max-width:460px) {  



 .sf-feaProvideer-wrap .sf-feaProvideer-info { margin: 15px 15px 15px 15px; }



 .sf-feaProvideer-wrap .sf-feaProvideer-pic { width: auto; float: none; margin: 15px; }



 }



 .sfp-yellow { color:#feb92d; }



 .sfp-perple { color:#8155f3; }



 .sfp-green { color:#62b815; }



 .sfp-blue { color:#3bc4fd; }



 .widget-categories-links li a,



 .widget-company-links li a,



 .widget-support-links li a,



 .widget-resources-links li a { display:block; padding:5px 0px; font-size:13px; }



 /*---------------------------------------------------------------



  BANNER



 ---------------------------------------------------------------*/



 .sf-bannex-area-wrap {	position: relative; min-height:150px; } 



 .sf-bannex-img { width: 100%; overflow: hidden;}



 .sf-bannex-img img { width: 100%;	height: auto; display: block;}



 .sf-bannex-text {	position:absolute; left:0; top:30%; width: 100%; margin:0; font-family: Raleway; color:#FFFFFF; font-family:"Raleway"; }



 .sf-bannex-text strong { display: block; font-size:55px; font-weight:700; line-height:1.4; margin:0px;	color: #FFFFFF; }



 .sf-bannex-text span { font-size:55px; line-height:1.4; font-weight:400; }



 .sf-bannex-text p { font-size:20px; line-height:1.5; font-weight:400; max-width:500px; margin-top:30px; }



 @media only screen and (max-width:1600px) {  



 .sf-bannex-text strong { font-size:45px;  }



 .sf-bannex-text span { font-size:35px; }



 .sf-bannex-text p { font-size:18px; margin-top:10px; }



 }



 @media only screen and (max-width:1200px) {  



 .sf-bannex-text strong { font-size:35px;  }



 .sf-bannex-text span { font-size:25px; }



 .sf-bannex-text p { font-size:16px; }



 }



 @media only screen and (max-width:991px) {  



 .sf-bannex-text strong { font-size:30px;  }



 .sf-bannex-text span { font-size:20px; }



 .sf-bannex-text p { font-size:15px; }



 }



 @media only screen and (max-width:767px) {  



 .sf-bannex-text strong { font-size:20px; margin-bottom:10px;  }



 .sf-bannex-text span { font-size:18px; }



 .sf-bannex-text p { font-size:14px; }



 .sf-bannex-text .btn { padding:8px 15px; font-size:12px; }



 }



 @media only screen and (max-width:600px) {  



 .sf-bannex-text strong { font-size:18px; margin-bottom:5px;  }



 .sf-bannex-text span { font-size:16px; }



 .sf-bannex-text p { font-size:12px; margin-bottom:15px; }



 .sf-bannex-text .btn { padding:5px 12px; font-size:11px; }



 }



 @media only screen and (max-width:480px) {  



 .sf-bannex-text strong { font-size:18px; margin-bottom:5px;  }



 .sf-bannex-text span { font-size:16px; }



 .sf-bannex-text p { font-size:12px; margin-bottom:15px; }



 .sf-bannex-text .btn { padding:5px 12px; font-size:11px; }



 }



 @media only screen and (max-width:380px) {  



 .sf-bannex-text strong { font-size:16px; line-height:18px; margin-bottom:3px;  }



 .sf-bannex-text span { font-size:14px; }



 .sf-bannex-text p { font-size:11px; margin-bottom:15px; }



 .sf-bannex-text .btn { padding:3px 10px; font-size:10px; }



 }



 /*---------------------------------------------------------------



   SEARCH



 ---------------------------------------------------------------*/



 .sf-bannerText-wrap { position:relative; }



 .sf-search-bar-warp { position: absolute; bottom:-90px; left: 0; width: 100%; z-index: 2; }



 .sf-searchbar-table-wrap { background-color:#FFFFFF; position:relative; margin:0 0 40px; border-radius:0px 5px 5px 5px; -webkit-border-radius:0px 5px 5px 5px; -webkit-box-shadow:15px 15px 30px 0 rgba(0,0,0,0.2); box-shadow:15px 15px 30px 0 rgba(0,0,0,0.2);}



 .sf-advace-search-btn { position: absolute; left:0px; bottom:100%;  background-color:#FFFFFF; z-index:1; cursor:pointer; padding: 4px 8px; color: #555; font-size: 14px; border-radius:5px 5px 0px 0px; -webkit-border-radius:5px 5px 0px 0px; }



 .sf-searchbar-table { display:table; width:100%; }



 .sf-searchbar-table .sf-searchbar-left,



 .sf-searchbar-table .sf-searchbar-right { display:table-cell; position:relative; vertical-align:middle; }



 .sf-searchbar-table .sf-searchbar-left,



 .sf-searchbar-table .sf-searchbar-right  { padding:30px 30px 15px; }



 .sf-searchbar-table .sf-searchbar-right { width:200px; vertical-align:top; padding-left:0px;  }



 .sf-searchbar-table .sf-searchbar-right .btn { display:block; padding:10px 15px; border-radius:5px; -webkit-border-radius:5px; }



 .sf-searchbar-left > ul {list-style:none; margin:0 -15px; }



 .sf-searchbar-left > ul > li { width:100%; float:left; padding-left:15px; padding-right:15px; margin-bottom:15px; position:relative; }



 .sf-searchbar-left > ul > li .sf-form-control,



 .sf-searchbar-left > ul > li .bootstrap-select { width:100% !important; height:40px; border-radius:5px; -webkit-border-radius:5px; }



 .sf-searchbar-left > ul > li .bootstrap-select .btn { height:40px; border:1px solid #dbdbdb !important; padding-left:12px; font-weight:normal; text-transform:none; border-radius:5px; -webkit-border-radius:5px; }



 .sf-searchbar-left > ul.sf-searchfileds-count-7 { margin:0px -10px; }



 .sf-searchbar-left > ul.sf-searchfileds-count-7 > li { width:14.222%; padding:0px 10px; }



 .sf-searchbar-left > ul.sf-searchfileds-count-6 { margin:0px -10px; }



 .sf-searchbar-left > ul.sf-searchfileds-count-6 > li { width:16.666%; padding:0px 10px; }



 .sf-searchbar-left > ul.sf-searchfileds-count-5 > li { width:20%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-4 > li { width:25%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-3 > li { width:33.333%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-2 > li { width:50%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-1 > li { width:100%; }



 .sf-advace-search-two { padding:0px 30px 0px; }



 .sf-advace-search-two .sf-tilte {color: #555; text-transform: uppercase; font-size: 18px; font-weight: 800; margin-bottom: 20px; }



 .sf-advace-search-two .sf-minimum-price,



 .sf-advace-search-two .sf-minimum-mile,



 .sf-advace-search-two .sf-maximum-price,



 .sf-advace-search-two .sf-maximum-mile { display: block; margin-top: 5px; }



 .sf-advace-search-two .sf-minimum-price,



 .sf-advace-search-two .sf-minimum-mile { float: left;}



 .sf-advace-search-two .sf-maximum-price,



 .sf-advace-search-two .sf-maximum-mile { float: right;}



 .sf-advace-search-two .tooltip-inner { padding: 4px 7px; font-weight: 500;}



 .sf-advace-search-two .slider.slider-horizontal { width: 100%; }



 .sf-advace-search-two .slider.slider-horizontal .slider-track { height: 5px; margin-top: -3px;}



 .sf-advace-search-two .slider-handle { background-image: linear-gradient(to bottom, #3396d1 0px, #3396d1 100%); border: 2px solid #fff; 
<?php
	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';
?>
 }  

 

 .sf-advace-search-two .slider-track {

  position:absolute;
  cursor:pointer;
  background-image:-webkit-linear-gradient(top,#555 0,#555 100%);
  background-image:-o-linear-gradient(top,#555 0,#555 100%);
  background-image:linear-gradient(to bottom,#555 0,#555 100%);
  background-repeat:repeat-x;
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5',endColorstr='#fff9f9f9',GradientType=0);
  -webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0);
  box-shadow:inset 0 1px 2px rgba(0,0,0,0);
  border-radius:4px
  background:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;

 }



 .sf-advace-search-two .slider-selection {



  position:absolute;



  background-image:-webkit-linear-gradient(top,#CCC 0,#CCC 100%);



  background-image:-o-linear-gradient(top,#CCC 0,#CCC 100%);



  background-image:linear-gradient(to bottom,#CCC 0,#CCC 100%);



  background-repeat:repeat-x;



  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff9f9f9',endColorstr='#fff5f5f5',GradientType=0);



  -webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0);



  box-shadow:inset 0 -1px 0 rgba(0,0,0,0);



  -webkit-box-sizing:border-box;



  -moz-box-sizing:border-box;



  box-sizing:border-box;



  border-radius:4px



 }



 .sf-advace-search-two .slider .tooltip.top { top: -20px; }



 .sf-advace-search-two .tooltip-inner {	border-radius: 3px;-webkit-border-radius: 3px;}



 .sf-advace-search-two .tip-info {display:inline-block;	width:16px;	height:16px;line-height:16px;text-align:center;font-size:11px;color:#fff;text-indent:-1px;background-color:#ccc; vertical-align:middle; border-radius:20px;-webkit-border-radius:20px;}



 .sf-advace-search-two .tooltip .tooltip-inner {	padding:15px 25px;	font-size:12px;}



 .sf-advace-search-two .tip-info.tipgray {background-color:#CCCCCC;}



 @media only screen and (max-width:1366px) {  



 .sf-searchbar-table .searchbar-left { padding:20px 20px 5px;}



 }



 @media only screen and (max-width:1200px) {  



 .sf-searchbar-left > ul > li { padding-left:7px; padding-right:7px;}



 }



 @media only screen and (max-width:991px) {



 .sf-searchbar-left > ul.sf-searchfileds-count-7 { margin: 0px -20px; }	



 .sf-searchbar-left > ul.sf-searchfileds-count-7 > li { width:33.333%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-7 > li:first-child { width:100%; }



 	



 .sf-searchbar-left > ul.sf-searchfileds-count-6 { margin:0px -20px; }



 .sf-searchbar-left > ul.sf-searchfileds-count-6 > li { width:33.333%; }



 	



 .sf-searchbar-left > ul.sf-searchfileds-count-5 > li { width:50%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-5 > li:first-child { width:100%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-4 > li { width:50%; }



 .sf-searchbar-table .sf-searchbar-left { padding: 30px 38px 0px; }		



 .sf-search-bar-warp {position: static; background-color:<?php echo (!empty($data['search-bar-bg-color-mobile'])) ? esc_html($data['search-bar-bg-color-mobile']): ''; ?>; padding:50px 0px 50px;  }



 .sf-bannex-img img { width:120%; max-width:120%; margin:0 -10%; }



 .sf-bannex-text { top:55%; transform: translateY(-50%); }



 .sf-searchbar-table { display:block; }



 .sf-searchbar-table .sf-searchbar-left, 



 .sf-searchbar-table .sf-searchbar-right { display:block; width:auto; }



 .sf-searchbar-table .sf-searchbar-left { padding:30px 30px 0px; }



 .sf-searchbar-table .sf-searchbar-right { padding:0px 30px 30px; }



 .sf-searchbar-table .sf-searchbar-right .btn { display:block; width:100%; }



 .sf-searchbar-left > ul.search-bar-box4 > li { width:50%; padding:0px 15px; margin-bottom:20px;}



 .sf-searchbar-table .sf-searchbar-right { padding: 0px 20px 30px; }



 }



 @media only screen and (max-width:767px) {  



 .sf-bannex-img img { width: 140%; max-width: 140%; margin: 0 -20%; }



 .sf-searchbar-table .sf-searchbar-left,



 .sf-searchbar-table .sf-searchbar-right { display:block; }



 .sf-searchbar-table .sf-searchbar-right .site-button { position: static; width: 100%; height: auto; display: block; }



 .sf-searchbar-table .sf-searchbar-left { padding:30px 30px 0; }



 .sf-searchbar-table .sf-searchbar-right {padding:0px 20px 30px; width:auto; }



 }



 @media only screen and (max-width:480px) {	



 .sf-searchbar-left > ul.sf-searchfileds-count-3 > li { width:100%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-6 > li { width:50%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-7 > li { width:50%; }



 }



 @media only screen and (max-width:400px) {	



 .sf-searchbar-left > ul.sf-searchfileds-count-7 > li { width:100%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-6 > li { width:100%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-5 > li { width:100%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-5 > li:first-child { width:100%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-4 > li { width:100%; }



 .sf-searchbar-left > ul.sf-searchfileds-count-2 > li { width:100%; }



 }



 /*=== Booking Tabs === */



 .sf-profile-layout-3 .form-nav .steps { display:table; width:100%; border:none; margin:0px 0px 40px; counter-reset:li; margin-top:30px; border-bottom:2px solid #F0F0F0; }



 .sf-profile-layout-3 .form-nav .steps > li { margin:0; display:table-cell; float:none; width:33.333%; position:relative; }



 .sf-profile-layout-3 .form-nav .steps > li:before {content:counter(li , decimal);counter-increment:li; position:absolute; bottom:0px; line-height:25px; left:50%; margin-left:-16px;	width:32px;	height:32px; margin-bottom:-16px;	padding:5px;	color:#fff;	background:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; font-weight:bold;	text-align:center;	font-size:12px;	-webkit-border-radius:100px;	-moz-border-radius:100px;	border-radius:100px; z-index:2; opacity:0; }	



 .sf-profile-layout-3 .form-nav .steps > li > a { position:relative; border-radius:0; -webkit-border-radius:0px; padding:15px 10px 30px; border:none; position:relative; font-size:20px; color:#555; font-weight:bold; }



 .sf-profile-layout-3 .form-nav .steps > li > a i { margin-right:5px; }



 .sf-profile-layout-3 .form-nav .steps > li > a, 



 .sf-profile-layout-3 .form-nav .steps > li > a:focus, 



 .sf-profile-layout-3 .form-nav .steps > li > a:hover { border:none; background:none;}



 .sf-profile-layout-3 .form-nav .steps > li > a:after { content:""; position:absolute; bottom:-2px; left:50%; width:0%; height:2px; background-color:transparent; -webkit-transition: all 0.5s ease;



 -moz-transition: all 0.5s ease; -ms-transition: all 0.5s ease; -o-transition: all 0.5s ease; transition: all 0.5s ease;}



 .sf-profile-layout-3 .form-nav .steps > li.active:before { opacity:1;  }



 .sf-profile-layout-3 .form-nav .steps > li.active > a { <?php



     echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	?>;   }



 .sf-profile-layout-3 .form-nav .steps > li.active > a:after { left:0%;  width:100%; background-color:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;}



 .sf-profile-layout-3 .progress { height:5px; margin: 0px 0px 20px; }



 .sf-profile-layout-3 .tab-pane-inr { padding:20px 0px 0px; }



 .sf-profile-layout-3 .tab-pane { border-top:none; border-bottom:none; }



 .sf-profile-layout-3 .sf-custom-inputbox .col-md-12 { padding:0px; }



 .sf-profile-layout-3 .sf-custom-inputbox .col-md-12 label { display:none; }



 .sf-profile-layout-3 .sf-custom-inputbox .col-md-12 .form-control { background:#f9f9f9; -webkit-border-top-right-radius:5px; border-bottom-right-radius:5px; }



 .sf-profile-layout-3 .sf-custom-inputbox .col-md-12 .input-group-addon { background:#f9f9f9; -webkit-border-top-left-radius:5px; border-bottom-left-radius:5px; }



 .sf-profile-layout-3 #bookingservices .tab-service-area { margin-left:-15px; margin-right:-15px; border:none;  counter-reset:aon-service-outer;  }



 .sf-profile-layout-3 .aon-service-outer:before {content: counter(aon-service-outer , decimal); counter-increment:aon-service-outer; position:absolute; top:0; left:50%;	width:40px;	height:40px; margin:-20px; border:1px solid #e7e7e7;	padding:10px;	color:#555;	background:#fff; font-weight:bold;	text-align:center;	font-size:14px;	-webkit-border-radius:100px;	-moz-border-radius:100px;	border-radius:100px; z-index:2; -webkit-box-shadow: 0 0 0 3px #fff; box-shadow: 0 0 0 3px #fff; }



 .sf-profile-layout-3 .aon-service-outer { width:33.333%; }



 .sf-profile-layout-3 .aon-service-outer .aon-service-bx { background:#f9f9f9; -webkit-border-radius:5px; border-radius:5px;}



 .sf-profile-layout-3 .aon-service-outer .aon-service-bx .aon-service-name h5 { padding:30px 5px 20px; color:#555; font-size: 18px; font-weight: 600; margin-bottom: 5px;}



 .sf-profile-layout-3 .aon-service-price { margin:0px; border:none; background:none; }



 .sf-profile-layout-3 .aon-service-price .sf-fix-hours { color:#777777; font-weight:700; margin-left: 10px; font-size: 12px; text-transform: uppercase; }



 .sf-profile-layout-3 .sf-service-fixhr-bx .input-table-bx { border-radius:0px 0px 5px 5px; -webkit-border-radius:0px 0px 5px 5px;  }



 .sf-profile-layout-3 .sf-service-fixhr-bx .input-cell-bx { color:#fff; background:none; border-color:#fff;}



 .sf-profile-layout-3 .sf-service-fixhr-bx .input-cell-bx:first-child { border-radius:0px 0px 0px 5px; -webkit-border-radius:0px 0px 0px 5px; }



 .sf-profile-layout-3 .sf-service-fixhr-bx .input-cell-bx:last-child { border-radius:0px 0px 5px 0px; -webkit-border-radius:0px 0px 5px 0px; }



 .sf-profile-layout-3 .aon-service-outer .bootstrap-touchspin .form-control,



 .sf-profile-layout-3 .aon-service-outer .bootstrap-touchspin .input-group-addon,



 .sf-profile-layout-3 .aon-service-outer .bootstrap-touchspin .btn { color:#fff; background:none; border-color:rgba(255,255,255,0.2); }



 .sf-profile-layout-3 .selected .aon-service-done { background:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;  border-radius:5px; -webkit-border-radius:5px; }



 .sf-profile-layout-3 .selected .aon-service-done .fa { position:absolute; color:#fff; top:0; left:50%;	width:40px;	height:40px; margin:-20px; border:1px solid #e7e7e7;	padding:12px;	background:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; font-weight:bold;	text-align:center;	font-size:14px;	-webkit-border-radius:100px;	-moz-border-radius:100px;	border-radius:100px; z-index:2; -webkit-box-shadow: 0 0 0 3px #fff; box-shadow: 0 0 0 3px #fff; }



 .sf-profile-layout-3 .wizard-actions { text-align:center; }



 .sf-profile-layout-3 .wizard-actions li { display:inline-block; }



 .sf-profile-layout-3 .wizard-actions li .btn { -webkit-border-radius:5px; border-radius:5px; margin:0px 5px; }



 .sf-profile-layout-3 .sf-custom-inputbox > .col-lg-12 { padding:0px; }



 .sf-profile-layout-3 .sf-custom-inputbox > .sf-service-location-area { padding:0px; }



 .sf-profile-layout-3 .alert.alert-info { position:relative; -webkit-border-radius:5px; border-radius:5px; }



 .sf-profile-layout-3 .alert.alert-info::before { top:15px; color:inherit; } 



 #sf-provider-review .alert.alert-info { position:relative; -webkit-border-radius:5px; border-radius:5px; }



 #sf-provider-review .alert.alert-info::before { top:15px; color:inherit; } 



 @media only screen and (max-width:991px) {  



 .sf-profile-layout-3 .aon-service-outer { width: 33.333%; float:left; margin-bottom:30px; }



 }



 @media only screen and (max-width:767px) {  



 .sf-profile-layout-3 .aon-service-outer { width: 50%; }



 .sf-profile-layout-3 .form-nav .steps > li > a { font-size:16px; }



 .sf-profile-layout-3 .form-nav .steps > li { display:block; width:50%; float:left; }



 .sf-profile-layout-3 .form-nav .steps > li > a { padding-top:20px; padding-bottom:20px; }



 }



 @media only screen and (max-width:400px) {  



 .sf-profile-layout-3 .aon-service-outer { width: 100%; float:left; }



 }



 @media only screen and (max-width:360px) {  



 .sf-profile-layout-3 .form-nav .steps > li > a { font-size:14px; }



 }



 @media only screen and (max-width:767px) {  



 .sf-bannex-img img { width: 140%; max-width: 140%; margin: 0 -20%; }



 .sf-searchbar-table .sf-searchbar-left,



 .sf-searchbar-table .sf-searchbar-right { display:block; }



 .sf-searchbar-table .sf-searchbar-right .site-button { position: static; width: 100%; height: auto; display: block; }



 .sf-searchbar-table .sf-searchbar-left { padding:30px 30px 0; }



 .sf-searchbar-table .sf-searchbar-right {padding:0px 30px 30px; width:auto; }



 }



 @media only screen and (max-width:600px) {  



 .sf-bannex-img img { width: 160%; max-width: 160%; margin: 0 -30%; }



 }



 @media only screen and (max-width:480px) { 



 .sf-bannex-img img { width: 180%; max-width: 180%; margin: 0 -40%; }



 .sf-searchbar-left > ul.search-bar-box4 > li { width:100%; float:none;}



 .sf-search-bar-warp2 { position: relative; bottom:auto; margin:-50px 0 30px; }



 }



 @media only screen and (max-width:380px) { 



 .sf-bannex-img img { width: 200%; max-width: 200%; margin: 0 -50%; }



 }



 .sf-overlay-main { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }



 .sf-banner-heading-wrap { display:table; position:relative; height:100%; width:100%; max-width:1170px; margin:auto; text-align:center; }



 .sf-banner-heading-area { display:table-cell; padding:50px 15px; vertical-align:middle; color:#fff;}



 .sf-banner-heading-large { font-size:55px; margin-bottom:15px; font-weight:300; }



 .sf-banner-heading-large strong { font-weight:600; }



 .sf-banner-breadcrumbs-nav ul { margin:0; }



 .sf-banner-breadcrumbs-nav ul li { position:relative; display:inline-block; font-size:18px; font-weight:300; padding:0; margin-right:20px;  color:#fff;}



 .sf-banner-breadcrumbs-nav ul li a { color:#fff;}



 .sf-banner-breadcrumbs-nav ul li:after { content:"\f105"; position:absolute; right:-13px; top:1px; font-size:18px; color:#fff; font-family:"FontAwesome"; margin-left:7px;}

.sf-banner-breadcrumbs-nav ul li:last-child:after { display:none; }







 .sf-page-scroll-wrap { background-color:#fff; padding:80px 0px 0px; position:relative; }



 .sf-page-scroll-nav { border-bottom:2px solid #ddd; margin-top:30px; }



 .sf-page-scroll-nav ul { list-style:none; display:table; margin:auto; width:100%; }



 .sf-page-scroll-nav ul li { display:table-cell; text-align:center; vertical-align:middle;}



 .sf-page-scroll-nav ul li a { position:relative; display:block; font-size:20px; padding:20px 5px; color:#c1c1c1;}



 .sf-page-scroll-nav ul li a.active,



 .sf-page-scroll-nav ul li a:hover { color:#6c6d6d;}



 .sf-page-scroll-nav ul li a.active:after,



 .sf-page-scroll-nav ul li a:hover:after { content:""; position:absolute; left:0px; bottom:-2px; width:100%; height:2px; background-color:#6c6d6d;}



 @media only screen and (max-width:991px) {



 .sf-page-scroll-nav { margin-top:0px;}



 .sf-banner-heading-large { font-size:30px;}



 }



 @media only screen and (max-width:767px) {



 .sf-page-scroll-nav ul li { display:inline-block; }



 .sf-page-scroll-nav ul li a { font-size:14px; padding:10px 5px; }



 .sf-banner-heading-large { font-size:25px;}



 .sf-banner-breadcrumbs-nav ul li { font-size:14px; }



 }



 @media only screen and (max-width:480px) {



 .sf-banner-heading-large { font-size:20px;}



 }



 .sf-company-abou-left { padding-right:50px; }



 .sf-company-about-table { width:100%; display:table; width:100%; border-bottom:1px solid #ddd; margin-top:-20px; margin-bottom:30px; }



 .sf-company-about-table .sf-company-about-cell { width:50%; display:table-cell; padding:20px 0px; }



 .sf-company-about-table .sf-company-about-cell strong { display:inline-block; margin-right:5px; font-weight:normal;  color:#555; }



 .sf-company-about-table .sf-company-about-cell strong a { display:inline; margin-right:3px; color:#999999; }



 .sf-company-about-table .sf-company-about-cell strong:first-child { font-weight:600;  }



 .sf-company-about-texts { margin-bottom:30px; }



 .sf-company-about-table.sf-comAbou-two { overflow:hidden; display:block; width:auto; padding:15px 0px 20px;  margin-top:-10px; margin-bottom:25px; }



 .sf-company-about-table.sf-comAbou-two .sf-company-about-cell { width:100%; display:block; padding:5px 0px;  font-weight:400;  }



 @media only screen and (max-width:991px) {



 .sf-company-abou-left { padding-right:0px; }



 }



 @media only screen and (max-width:767px) {



 .sf-company-abou-left { margin-bottom:30px; }



 }



 .social-share-icon { display:table; width:100%;	}



 .social-share-cell { display:table-cell; }



 .social-share-cell:first-child { width:100px;}



 .social-share-icon ul {list-style:none; margin:0px 0px 20px; }



 .social-share-icon ul li {	display:inline-block; margin-bottom:8px; }



 .social-share-icon ul li a { border:2px solid #ddd;	 width:36px; height:36px; line-height:30px; text-align:center; color:#a9a9a9;margin:0 3px;display:inline-block;text-transform:uppercase;font-size:11px;font-weight:600;border-radius:5px; -webkit-border-radius:5px; }



 .social-share-icon ul li a .fa { font-size:16px;  vertical-align:middle; }	



 .share-buttons li a.fb-share { border-color:#3b5998; color:#3b5998}



 .share-buttons li a.fb-share:hover { background:#3b5998; color:#fff}



 .share-buttons li a.twitter-share:hover { background:#1da1f2; color:#fff}



 .share-buttons li a.twitter-share { border-color:#1da1f2; color:#1da1f2}



 .share-buttons li a.gplus-share:hover { background:#dd4b39; color:#fff}



 .share-buttons li a.gplus-share { border-color:#dd4b39; color:#dd4b39}



 .share-buttons li a.pinterest-share:hover { background:#bd081c; color:#fff}



 .share-buttons li a.pinterest-share { border-color:#bd081c; color:#bd081c}



 .share-buttons li a.linkedin-share:hover { background:#0073b1; color:#fff}



 .share-buttons li a.linkedin-share { border-color:#0073b1; color:#0073b1}



 .share-buttons li a.digg-share:hover { background:#286091; color:#fff}



 .share-buttons li a.digg-share { border-color:#286091; color:#286091}



 .share-buttons li a.instagram-share:hover { background:#527fa4; color:#fff}



 .share-buttons li a.instagram-share { border-color:#527fa4; color:#527fa4}



 .sf-company-need-btn .btn { margin-right:10px; margin-bottom:10px; }



 .sf-feaProgrid-wrap { border:1px solid #ddd; position:relative; border:1px solid #ddd; margin-bottom:30px; border-radius:5px; -webkit-border-radius:5px; }



 .sf-feaProgrid-wrap .sf-feaProgrid-label { position:absolute; left:-5px; top:20px; z-index:1; background-color:#62b815; padding:3px 10px 2px; color:#fff; text-transform:uppercase; font-size:12px; border-top-right-radius:2px; -webkit-border-bottom-right-radius:2px; }



 .sf-feaProgrid-wrap .sf-feaProgrid-label:after { content:""; position:absolute; left:0px; top:-5px;  width:0px; height:0px; border-top:6px solid transparent; border-bottom: 0px solid transparent; border-right:5px solid #41850c; }



 .sf-feaProgrid-wrap .sf-feaProgrid-pic { background-repeat:no-repeat; background-size:cover; background-position:center top; height:348px; position:relative; }



 .sf-feaProgrid-wrap .sf-availability-label { position:static; margin-bottom:5px; display:inline-block;}



 .sf-feaProvideer-wrap  .sf-availability-label { position:static; margin-bottom:5px; display:inline-block;}



 .sf-feaProgrid-wrap .sf-feaProgrid-info { position:absolute; bottom:0px; padding:15px; z-index:1 }



 .sf-feaProgrid-wrap .sf-feaProgrid-info .sf-feaProgrid-title { margin:5px 0px;  color:#fff; }



 .sf-feaProgrid-wrap .sf-feaProgrid-info .sf-feaProgrid-address { font-size:14px; color:#fff; margin-bottom:10px; }



 .sf-feaProgrid-wrap .sf-feaProgrid-info .sf-feaProgrid-text { line-height:1.6; }



 .sf-feaProgrid-wrap .sf-feaProgrid-iconwrap { display:table; width:100%; } 



 .sf-feaProgrid-wrap .sf-feaProgrid-iconwrap .sf-feaProgrid-icon {  display:table-cell; text-align:center; cursor:pointer; border-right:1px solid #ddd; position:relative; } 



 .sf-feaProgrid-wrap .sf-feaProgrid-iconwrap .sf-feaProgrid-icon:last-child { border-left:none; } 



 .sf-feaProgrid-wrap .sf-feaProgrid-iconwrap .sf-feaProgrid-icon i { display:block; padding:15px 10px; font-size:18px; text-align:center; vertical-align:middle; } 



 .sf-feaProgrid-wrap .sf-feaProgrid-iconwrap .sf-feaProgrid-icon .sf-feaPro-tooltip { position:absolute; bottom:100%; right:0px; margin-top:-5px; background-color:#383838; white-space:nowrap; font-size:12px; color:#fff; padding:3px 8px; opacity:0; border-radius:2px; -webkit-border-radius:2px;  } 



 .sf-feaProgrid-wrap .sf-feaProgrid-iconwrap .sf-feaProgrid-icon .sf-feaPro-tooltip:after { content:""; position:absolute; left:50%; bottom:-6px; margin-left:-2.5px; width:0; height: 0; border-left:6px solid transparent; border-right: 6px solid transparent; border-top: 6px solid #383838;} 



 .sf-feaProgrid-wrap .sf-feaProgrid-iconwrap .sf-feaProgrid-icon:hover .sf-feaPro-tooltip { opacity:1; } 



 #sf-provider-gallery { padding:60px 45px 45px; }



 #sf-provider-gallery h2 { margin-bottom:0px; }



 .sf-vender-gallery-wrap,.profile-gallery-third { background-color:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; }



 .sf-venderGallery-wrap { list-style:none; margin:0px; padding:0px; }



 .sf-venderGallery-wrap li { width:30%;  float:left; position:relative; }



 .sf-venderGallery-wrap li.sf-venGal-wide { width:40%; }



 .sf-venderGallery-box { height:280px; position:relative; background-size:cover; background-repeat:no-repeat; background-position:center; }



 .sf-vendGallery-overlay { position:absolute; top:0%; left:0px; width:100%; height:100%; text-align:center; color:#fff; background-color:#feb92d; opacity:0; -webkit-transition: all 0.3s ease;



 -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease;}



 .sf-vendGallery-overlay a { color:#fff; }



 .sf-venderGallery-wrap li:hover .sf-vendGallery-overlay { opacity:0.8; }



 .sf-venderGallery-wrap li:hover .sf-vendGallery-overlay i { position: absolute; font-size:40px; cursor:pointer; width:50px; height:50px; left: 50%; top: 50%;transform: translate(-50%, -50%); }



 @media only screen and (max-width:767px) { 



 .sf-venderGallery-wrap li { width:50%;  }



 .sf-venderGallery-wrap li.sf-venGal-wide { width:50%; }



 .sf-venderGallery-box { height:200px; margin-bottom:30px; }



 }



 @media only screen and (max-width:480px) {



 #sf-provider-gallery { padding:30px 15px 15px; } 



 .sf-venderGallery-wrap li { width:100%;  }



 .sf-venderGallery-wrap li.sf-venGal-wide { width:100%; }



 }



 /*=== 5. ACCORDIAN ===*/



 .sf-custom-accordion .panel {	border:none;border-radius:0;margin-bottom:10px;box-shadow:none;-webkit-box-shadow:none; border-radius:5px; -webkit-border-radius:5px; }



 .sf-custom-accordion .acod-head {position:relative;}



 .sf-custom-accordion .acod-title {	margin-top:0;	margin-bottom:0;}



 .sf-custom-accordion .acod-head .fa { margin-right:5px;  }



 .sf-custom-accordion .acod-head .indicator .fa {  background-color:#555; color:#fff; width:18px; height:18px; line-height:20px; font-size:11px; display:block; text-align:center;  border-radius:50px; -webkit-border-radius:50px }



 .sf-custom-accordion .acod-head a {	display:block; padding:15px 40px 15px 25px; font-size:18px; border:1px solid #ddd; border-radius:5px; -webkit-border-radius:5px; }



 .sf-custom-accordion .acod-head a[aria-expanded="ture"] {	border-bottom-left-radius:0px; -webkit-border-bottom-right-radius:0px; }



 .sf-custom-accordion .acod-head a,



 .sf-custom-accordion .acod-head a:hover,



 .sf-custom-accordion .acod-head a.collapsed:hover { color:#000; }



 .sf-custom-accordion .acod-head a.collapsed { color:#3d474a; }



 .sf-custom-accordion .acod-head .collapsed .indicator .fa { -moz-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -ms-transform: rotate(0deg); transform: rotate(0deg); }



 .sf-custom-accordion .acod-head .indicator .fa { -moz-transform: rotate(45deg); -webkit-transform: rotate(45deg); -o-transform: rotate(45deg); -ms-transform: rotate(45deg);	transform: rotate(45deg); }



 .sf-custom-accordion .acod-head .indicator { padding:12px; color:#666;  position:absolute; right:0; top:8px; margin:0; }



 .sf-custom-accordion .acod-head [aria-expanded="true"] .indicator { color:; }



 .sf-custom-accordion .acod-body {margin-top:-1px; border-left:1px solid #ddd ;border-right:1px solid #ddd; border-bottom:1px solid #ddd;	border-top:1px solid transparent; border-bottom-left-radius:5px; -webkit-border-bottom-right-radius:5px;	 }



 .sf-custom-accordion .acod-content { margin:20px;}



  /*icon Colors*/



 .sf-icon-purple{color:#7748ec;}



 .sf-icon-yellow{color:#feb92d;}



 .sf-icon-green{color:#6fbe28;}



 .sf-icon-sky-blue{color:#2cbffd;}



 .sf-icon-red{color:#f86667;}



 /*Business hour*/



 .sf-list-business-hours {	position:relative;	padding-left:80px;}



 .sf-list-business-hours ul {	margin:0px;}



 .sf-list-business-hours li {	display: table;	width: 100%;	margin-bottom: 10px;	padding-bottom: 10px;}



 .sf-list-business-hours li:last-child {	margin-bottom: 0px;	padding-bottom: 0px;	border-bottom: none;}



 .sf-list-business-hours span {	display: table-cell;	text-align: right;	font-size: 16px;	color: #555757;	font-weight: 500;}



 .sf-list-business-hours span:first-child {	display: table-cell;	text-align: left;	font-weight: 300;	width: 25%;	font-size:16px;}



 .sf-list-business-hours span:first-child b{	float:right;	font-weight: 300;}



 .sf-list-business-hours span:last-child {	text-align: left;	padding-left:30px;}



 .sf-list-business-hours li.working-off span:last-child {	color:#f97e7e;}



 .sf-list-business-hours .sf-border-icon{	position:absolute;	left:0px;	top:0px;}



 .sf-border-icon{display: inline-block;    width: 60px;    height: 60px;    border: 1px solid #d4d4d4;    line-height: 60px;    text-align: center;    border-radius: 50%;}



 @media only screen and (max-width:991px) {

 .sf-list-business-hours + .d-flex > .col-md-6 { width:50%; }  

 }





 @media only screen and (max-width:767px) {



 .sf-list-business-hours {	padding-left:0px;}



 .sf-list-business-hours .sf-border-icon { display:none; }



 }



 @media only screen and (max-width:480px) {



 .sf-list-business-hours span:first-child { font-size:14px; }



 .sf-list-business-hours span { font-size:14px; }



 }



 /*Business Map*/



 .sf-provider-business-map { margin-bottom:50px; }



 .sf-provider-business-map #gmap_wrapper,



 .sf-provider-business-map #googleMap {height:350px !important; }



 .sf-provider-business-map .sf-location-listing { margin:15px 0 0; }



 .sf-provider-business-map-inner{	-webkit-border-radius:6px;	border-radius:6px;	overflow:hidden;	-webkit-box-shadow: 0 0 30px 0 #BFBFBF;	box-shadow: 0 0 30px 0 #BFBFBF;}



 .sf-icon-box.left .sf-border-icon{	float:left;}



 .sf-icon-box.left .sf-icon-content{	overflow:hidden;	padding-left:20px;}



 .sf-icon-box .sf-icon-content .sf-icon-title{color:#c5c5c5; margin-bottom:10px;}



 .sf-icon-box .sf-icon-content .sf-icon-detail{color:#555757;}



 .sf-icon-box .sf-icon-content .sf-icon-detail p {margin-bottom:5px;}



 .sf-icon-box .sf-icon-content .sf-icon-detail p:last-child {margin-bottom:0px;}



 /*Video Section*/



 .sf-video-slide-wrap {	position: relative;	height: 330px;	border-radius: 5px;	-webkit-border-radius: 5px;	overflow: hidden;}



 .sf-video-slide-thum {	position: absolute;	top: 0;	left: 0;	width: 100%;	height: 100%;	background-position: center;	background-size: auto 135%;}



 .sf-video-slide-overlay {	position: absolute;	width: 100%;	height: 100%;	top: 0;	left: 0;	background-color: rgba(0,0,0,0.2);	z-index: 1;}



 .sf-video.video-play-btn {position: absolute;	top: 50%;	left: 50%;	width: 70px;	height: 70px;	line-height: 70px;	text-align: center;	color: #fff;	display: block;	z-index: 10;	font-size: 32px;	border:3px solid #fff; -webkit-border-radius: 50%; 	border-radius: 50%;



 	-webkit-transform: translateX(-50%) translateY(-50%);



 	-moz-transform: translateX(-50%) translateY(-50%);



 	-ms-transform: translateX(-50%) translateY(-50%);



 	-o-transform: translateX(-50%) translateY(-50%);	



 }



 .sf-video.video-play-btn:hover {	color: #2cbffd;	border: 2px solid #2cbffd;}



 .sf-video.video-play-btn i {	margin-right: -5px;} 



 /*Video Section*/



 .sf-video-slide-wrap.sf-videos-slider-two {	height:230px;	}



 /*services tab*/



 #sf-provider-services { padding:45px 45px 45px;}



 #sf-provider-services .nav-tabs { margin-bottom:0px;  width:100%;  }



 #sf-provider-services .nav-tabs > li { display:inline-block; float:none; }



 #sf-provider-services .sf-services-tab ul li span:first-child{ display:inline-block; float:none; }



 #sf-provider-services .sf-services-tab ul li span:first-child + span{ text-align:right; }



 #sf-provider-services .sf-services-tab ul li span .sf-service-offer-label { display:inline-block; padding:0px; background:none; }



 #sf-provider-services .sf-services-tab ul li span .sf-service-offer-label i.badge-btn { background:none; padding:5px 20px; vertical-align:middle; }



 @media only screen and (max-width:480px) {



 #sf-provider-services {  padding:30px 15px 15px;}



 }



 .bg-green-2{	background-color:#65ba18;}



 .sf-services-tab{	background-color:#fff;	-webkit-border-radius: 4px;	border-radius: 4px;	overflow:hidden;}



 .sf-services-tab ul{	list-style:none;	margin-left:0px;}



 .sf-services-tab ul li{	display:table;	padding:20px;	width:100%;}



 .sf-services-tab ul li:nth-child(odd) {background: #fafafa}



 .sf-services-tab ul li span{	display:table-cell;	font-size:18px;	}



 .sf-services-tab ul li span:last-child{	text-align:right;	color:#a8a8a8;}



 .sf-services-tab ul li span i.badge-btn{	background-color:#e5e6eb;	color:#fff;	margin-left:30px;	padding:2px 30px;	font-size:14px;	font-style:normal;	-webkit-border-radius:4px;	border-radius:4px;}



 .sf-services-tab ul li:hover span{	color:#7d4df6;}



 .sf-services-tab ul li:hover span i.badge-btn{	background-color:#7d4df6;}		



 /*=== Custom Tabs === */



 .sf-custom-tabs .sf-custom-tabs-line { height:2px; background-color:#fff; opacity:0.2; }



 .sf-custom-tabs .nav-tabs { display:table; margin:auto; border:none; }



 .sf-custom-tabs .nav-tabs > li { margin:0;}



 .sf-custom-tabs .nav-tabs > li > a { border-radius:0; -webkit-border-radius:0px; padding:15px 25px; border:none; position:relative; font-size:20px; color:<?php echo (!empty($data['profile-document-services-text-color'])) ? esc_html($data['profile-document-services-text-color']): ''; ?>; opacity:0.5; font-weight:bold; }



 .sf-custom-tabs .nav-tabs > li > a i { margin-right:5px; }



 .sf-custom-tabs .nav-tabs > li > a, 



 .sf-custom-tabs .nav-tabs > li > a:focus, 



 .sf-custom-tabs .nav-tabs > li > a:hover { border:none; background:none;}



 .sf-custom-tabs .nav-tabs > li > a:after { content:""; position:absolute; bottom:-2px; left:50%; width:0%; height:2px; background-color:transparent; -webkit-transition: all 0.5s ease;



 -moz-transition: all 0.5s ease; -ms-transition: all 0.5s ease; -o-transition: all 0.5s ease; transition: all 0.5s ease;}



 .sf-custom-tabs .nav-tabs > li.active > a { color:<?php echo (!empty($data['profile-document-services-active-text-color'])) ? esc_html($data['profile-document-services-active-text-color']): ''; ?>; opacity:1; }



 .sf-custom-tabs .nav-tabs > li.active > a:after { left:0%;  width:100%; background-color:<?php echo (!empty($data['profile-document-services-active-text-color'])) ? esc_html($data['profile-document-services-active-text-color']): ''; ?>;}



 .sf-custom-tabs .tab-content { padding-top:30px;}



 .sf-custom-tabs .aon-tabs-inline { text-align:center; }



 .sf-custom-tabs .aon-tabs-inline li { display:inline-block; float:none; }



 .sf-custom-tabs .aon-tabs-inline > li a i { margin-right:5px; font-size:16px; }



 .sf-document-tab { background-color:#fff; padding:20px 20px 0px;  }



 @media only screen and (max-width:991px) {



 .sf-custom-tabs .nav-tabs > li > a { padding:10px 15px; font-size:16px; }



 }



 @media only screen and (max-width:767px) {



 .sf-custom-tabs .nav-tabs > li > a { padding:5px 10px; font-size:14px; font-weight:600; }



 }



 /*=== Booking Tabs === */



 .sf-booking-tabs .nav-tabs { display:table; width:100%; border:none; margin:0px; counter-reset:li; margin-top:30px; }



 .sf-booking-tabs .nav-tabs > li { margin:0; display:table-cell; float:none; width:33.333%; position:relative; }



 .sf-booking-tabs .nav-tabs > li:before {content:counter(li , decimal);counter-increment:li; position:absolute; bottom:0; left:50%; margin-left:-16px;	width:32px;	height:32px; margin-bottom:-16px;	padding:5px;	color:#fff;	background:#7d4df6; font-weight:bold;	text-align:center;	font-size:12px;	-webkit-border-radius:100px;	-moz-border-radius:100px;	border-radius:100px; z-index:2; opacity:0; }



 	



 .sf-booking-tabs .nav-tabs > li > a { border-radius:0; -webkit-border-radius:0px; padding:15px 25px 30px; border:none; position:relative; font-size:20px; color:#555; font-weight:400; text-transform:uppercase;}



 .sf-booking-tabs .nav-tabs > li > a i { margin-right:5px; }



 .sf-booking-tabs .nav-tabs > li > a, 



 .sf-booking-tabs .nav-tabs > li > a:focus, 



 .sf-booking-tabs .nav-tabs > li > a:hover { border:none; background:none;}



 .sf-booking-tabs .nav-tabs > li > a:after { content:""; position:absolute; bottom:-2px; left:50%; width:0%; height:2px; background-color:transparent; -webkit-transition: all 0.5s ease;



 -moz-transition: all 0.5s ease; -ms-transition: all 0.5s ease; -o-transition: all 0.5s ease; transition: all 0.5s ease;}



 .sf-booking-tabs .nav-tabs > li.active:before { opacity:1;  }



 .sf-booking-tabs .nav-tabs > li.active > a { color:#7d4df6;  }



 .sf-booking-tabs .nav-tabs > li.active > a:after { left:0%;  width:100%; background-color:#7d4df6;}



 @media only screen and (max-width:1200px) {



 .sf-booking-tabs .nav-tabs > li > a { padding:15px 5px 20px; font-size:16px; }



 }



 @media only screen and (max-width:767px) {



 .sf-booking-tabs .nav-tabs > li > a { padding:15px 3px 20px; font-size:14px; font-weight:600; }



 }



 @media only screen and (max-width:480px) {



 .sf-booking-tabs .nav-tabs > li { margin-bottom:10px; }



 .sf-booking-tabs .nav-tabs > li > a { padding:15px 3px 20px; font-size:14px; font-weight:600; border:2px solid #eee; }



 .sf-booking-tabs .nav-tabs > li { display: block; width: 100%; }



 .sf-booking-tabs .nav-tabs > li:before { top:50%; left:10px; margin-top:-16px; margin-left:0px;  }



 .sf-booking-tabs .nav-tabs > li > a, 



 .sf-booking-tabs .nav-tabs > li > a:focus, 



 .sf-booking-tabs .nav-tabs > li > a:hover { border:2px solid #eee;}



 }



 .sf-booking-text-price { display:table; width:100%; }



 .sf-booking-text-cell,



 .sf-booking-price-cell { display:table-cell; vertical-align:top; }



 .sf-booking-text-price.sf-no-booking-desc .sf-booking-text-cell:first-child { display:none;}



 .sf-booking-text-cell p { margin:0px; }



 .sf-booking-text-cell {padding-right:30px;}



 .sf-booking-price-cell {padding-left:30px; white-space:nowrap; font-weight:600; border-left:1px solid #e1e1e1; }



 .sf-no-booking-desc .sf-booking-price-cell { text-align:center; border:none; padding:0px 15px; display:block; }



 .sf-booking-price-cell .sf-pricex-lable { font-size:16px; color:#555757;  }



 .sf-booking-price-cell .sf-price-amoutss { font-size:22px; <?php



     echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



 	?>;   }



 @media only screen and (max-width:480px) {



 .sf-booking-text-cell, 



 .sf-booking-price-cell { display:block; padding-right:0px; }



 .sf-booking-price-cell { padding-top:10px; }



 .sf-booking-price-cell { padding-left:0px; border-left: none; }



 }



 .sf-booking-tabs .tab-content { padding-top:30px;}



 .sf-service-booking-listing { list-style:none; margin:0px -10px; counter-reset:li; }



 .sf-service-booking-col:before {content:counter(li , decimal); counter-increment:li; position:absolute; top:0; left:50%;	width:40px;	height:40px; margin:-20px; border:1px solid #e7e7e7;	padding:10px;	color:#555;	background:#fff; font-weight:bold;	text-align:center;	font-size:14px;	-webkit-border-radius:100px;	-moz-border-radius:100px;	border-radius:100px; z-index:2; -webkit-box-shadow: 0 0 0 3px #fff;



 box-shadow: 0 0 0 3px #fff; }



 .sf-service-booking-col { width:25%; float:left; padding:0px 10px; text-align:center; position:relative; margin-bottom:40px; }



 .sf-service-booking-item { padding:25px 15px 15px; background-color:#f9f9f9;  border:1px solid #e5e5e5; border-radius: 5px; -webkit-border-radius: 5px; }



 .sf-service-booking-title { font-size:18px; font-weight:600; margin-bottom:5px; }



 .sf-service-booking-price-hour { font-size:13px; font-weight:600; color:#AFAFAF; text-transform:uppercase; }



 .sf-service-booking-col.active .sf-service-booking-item { background-color:#7d4df6; }



 .sf-service-booking-col.active .sf-service-booking-title { color:#fff;  }



 .sf-service-booking-col.active .sf-service-booking-price-hour { color:#fff; }



 .sf-service-booking-col.active:before { content:"\f00c"; font-family: 'FontAwesome';  border:1px solid #7d4df6;	padding:10px;	color:#fff;	background:#7d4df6;  }



 @media only screen and (max-width:1200px) {



 .sf-service-booking-col { width:33.333%; }



 }



 @media only screen and (max-width:991px) {



 .sf-service-booking-col { width:50%; }



 }



 @media only screen and (max-width:480px) {



 .sf-service-booking-col { width:100%; }



 }



 .sf-service-location-input { margin:30px 0px 50px; }



 .sf-service-location-input .form-control { background-color:#f9f9f9; height:60px; padding:15px 20px;  }



 .sf-service-next-prev-btns  { clear:both; text-align:center; }



 .sf-service-next-prev-btns .btn { clear:both; min-width:140px; text-align:center; margin:0 5px; }



 .sf-vender-review-article { background-color:#555757; }



 .sf-serBookList-two .sf-service-booking-col { width:33.33%; }



 @media only screen and (max-width:1200px) {



 .sf-serBookList-two .sf-service-booking-col { width:50%; }



 }



 @media only screen and (max-width:480px) {



 .sf-serBookList-two .sf-service-booking-col { width:100%; }



 }



 .sf-vender-review-tab-area .sf-rating-averagebox { float:left; }



 .sf-vender-review-tab-area .sf-stats-rating .sf-average-reviews {  color:#fff;}



 .sf-vender-review-tab-area .sf-stats-rating .sf-rate-persent, 



 .sf-vender-review-tab-area .sf-stats-rating .sf-average-question { color: #fff; display:inline; }



 .sf-vender-review-tab-area .sf-stats-rating .sf-completed-tasks { color: #fff; }



 .sf-vender-review-tab-area .sf-reviews-summary .sf-reviews-star-no { color: #fff; }



 .sf-rating-categories-wraps { float:right; color:#fff; display:table; margin-bottom:30px; margin-top:20px; }



 .sf-rating-categories-table { display:table; width:100%; }



 .sf-rating-categories-cell { display:table-cell; white-space:nowrap; }



 .sf-rating-categories-cell:first-child { padding-right:20px; }



 .sf-rating-categories-cell:last-child { text-align:right; }



 .sf-rating-categories-cell .sf-reviews-row { display:table; width:100%;  }



 .sf-rating-categories-cell .sf-reviews-row .sf-reviews-star,



 .sf-rating-categories-cell .sf-reviews-row .sf-reviews-star-no { display:table-cell; padding:4px 0px; }



 .sf-rating-categories-cell .sf-reviews-row .sf-reviews-star { color:#F4BE36;  }



 .sf-rating-categories-cell .sf-reviews-row .sf-reviews-star-no { width:30px; }



 .sf-rating-averages-wraps { float:left; color:#fff; display:table; margin-bottom:30px; margin-top:20px; }



 .sf-rating-averages-table { display:table; width:100%; }



 .sf-rating-averages-cell { display:table-cell; white-space:nowrap; }



 .sf-rating-averages-cell:first-child { padding-right:20px;  text-align:right; }



 .sf-rating-averages-cell:last-child { text-align:right; width:120px; }



 .sf-rating-averages-cell .sf-reviews-row { display:table; width:100%;  }



 .sf-rating-averages-cell .sf-reviews-row .sf-reviews-star,



 .sf-rating-averages-cell .sf-reviews-row .sf-reviews-star-no { display:table-cell; padding:4px 0px; }



 .sf-rating-averages-cell .sf-reviews-row .sf-reviews-star { color:#F4BE36;  }



 .sf-rating-averages-cell .sf-reviews-row .sf-reviews-star-no { width:30px; }



 .sf-rating-averages-cell .sf-rating-holder { color:#aaabab; }



 .sf-rating-averages-cell .sf-rate-persent,



 .sf-rating-averages-cell .sf-average-question { color:#aaabab; }



 .sf-rating-averages-cell .sf-completed-tasks { color:#aaabab; }



 @media only screen and (max-width:767px) {



 .sf-rating-averages-wraps,



 .sf-rating-categories-wraps { float:none; }	



 .sf-rating-categories-wraps {



     max-width: 315px;



     width: 100%;



 }



 }



 .sf-vender-review-tab-area .comments-area .comments-title:first-letter { color: #fff; }



 .sf-vender-review-tab-area  .comments-area .comments-title { color:#fff; margin-bottom:30px; }



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-body { background-color:rgba(255,255,255,0.1); border:none; padding:25px 30px; border-radius:5px; -webkit-border-radius:5px;  }



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-body::before {display:none;}



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-body::after { opacity: 0.1; }



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-author .fn { font-size:22px; color:#fff; }



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-meta::before { display:none; }



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-meta a { color:#bcbcbc; }



 .sf-vender-review-tab-area ol.comment-list li.comment p { color:#fff; line-height:1.5;}



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-author .avatar { width:70px; height:70px; left:-100px; }



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-body { margin-left: 100px;}



 .sf-rating-name-list { list-style:none; margin:0px 0px 20px; padding-bottom:5px; border-bottom:1px solid rgba(255,255,255,0.1) }



 .sf-rating-name-list li { padding:10px 5px; display:inline-block; margin-right:30px; }



 .sf-rating-name-list li .sf-reviews-star-no { font-size:16px; color:#fff; }



 .sf-rating-name-list li .sf-reviews-star { font-size:14px; color:#F4BE36;  }



 @media only screen and (max-width:767px) {  



 .sf-rating-name-list li { margin-right:15px; }



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-body { padding:15px 20px; }



 }



 @media only screen and (max-width:400px) {  



 .sf-rating-name-list li { margin-right: 5px; }



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-author .avatar { width: 40px; height: 40px; left: -60px; }



 .sf-vender-review-tab-area ol.comment-list li.comment .comment-body { margin-left: 60px; }



 }



 .sf-vender-parts-area { margin-top:60px; position:relative; }



 /*sidebar*/



 .bdr-1-gray{border:1px solid #ddd;}



 .sf-sidebar-right { margin-top:50px; }



 .sf-sidebar-right input.form-control {background-color:#fff; height:46px;}



 .sf-sidebar-right .sf-user-login input.form-control {background-color:#f9f9f9; border:1px solid transparent;}



 .sf-sidebar-right .sf-user-login input:focus.form-control {background-color:#fff; border:1px solid #000;}



 .sf-sidebar-right  .checkbox input[type="checkbox"] + label::before{height:25px;width:25px; background-color:#f9f9f9;margin-left:-30px;}



 .sf-sidebar-right  .checkbox input[type=checkbox] + label {display: block; padding-left: 30px !important; position: relative;}



 .sf-sidebar-right  .checkbox input[type=checkbox]:checked + label:after {font-size: 14px;    left: 5px;    top: 3px;}



 .sf-sidebar-right .checkbox input[type=checkbox]:checked + label:before {border-width: 12px; border-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;}



 .sf-sidebar-right .checkbox input[type=checkbox] + label:before, .radio input[type=radio] + label:before{border:2px solid #777;}



 .sf-request-quote  input.form-control {background-color:#fff; border:1px solid transparent; height:46px;}



 .sf-request-quote  .input-group { position:relative;  }



 .sf-request-quote  .input-group-addon { border:none; background:none; position:absolute; width:40px; line-height:32px; z-index:3; }



 .sf-request-quote  #captcha_code { padding-left:40px; }



 .sf-request-quote  textarea.form-control {background-color:#fff; border:1px solid transparent; resize:none;min-height: 90px;}



 .sf-request-quote  input:focus.form-control {background-color:#fff; border:1px solid #000;}



 .sf-request-quote  textarea:focus.form-control {background-color:#fff; border:1px solid #000;}



 .sf-request-quote .form-group span{    font-size: 17px;    color: #8659f7;   font-weight: 600; padding-bottom:30px; display:block;}



 .sf-request-quote .col-md-12 { padding:0px; }



 .sf-upload-btn-wrapper {	position: relative;	overflow: hidden;	display: block;}



 .sf-upload-btn-wrapper input[type=file] {	position: absolute;	left: 0;	top: 0;	opacity: 0;	cursor: pointer;	width:100%;	height:100%;}



 .sf-related-provider > .section-head {	text-align:left; }



 .sf-related-provider-bx ul{	list-style:none;	margin:0; }



 .sf-related-provider-bx ul li{ width:100%; 	min-height:100px;	clear:both;	padding:0 0 20px;	margin-bottom:20px; 	border-bottom:1px solid #ededed;  }



 .sf-related-provider-bx ul li:last-child{ 	border-bottom:none; 	margin:0;	padding:0;	min-height:80px; }



 .sf-related-provider-bx p{	margin:0;	line-height:18px;  }



 .sf-related-provider-bx .post-thum-bx {width:80px; 	float:left;	margin-right:15px; 	border:1px solid #000; border-radius:3px; -webkit-border-radius:3px;}



 .sf-related-provider-bx .post-title {margin:0 0 10px; }



 .sf-related-provider-bx .post-text-bx {margin-left:90px;}



 .day-event.day-highlight.dh-event-info.sf-complete { height:auto !important; }



 .cal-week-box [data-event-class] { height:auto; }



 .cal-week-box [data-event-class] p { margin:5px; }



 #cal-day-box .day-highlight.dh-event-info { height: auto !important; }



 #cal-day-box .day-highlight.dh-event-info a:hover{ color:#000; } 



 @media only screen and (max-width:1200px) {  



 #cal-day-box .dh-event-info:not(:nth-child(2)) { margin-top:0 !important;}



 }



 #cal-day-box .day-highlight.dh-event-info p { margin:0px !important; }



 .owl-theme .owl-controls .owl-nav .owl-prev, 



 .owl-theme .owl-controls .owl-nav .owl-next { border-radius:50px !important; padding:10px 15px !important;}



 .sf-curve-topWrap { position:absolute; bottom:0px; left:0px; width:100%; height:50px; overflow:hidden; }



 .sf-curveTop { position:absolute; top:100%; left:-5px; background-color:#7754f4; width:100%; height:100px;  z-index:1; -moz-transform: rotate(1.5deg) skewX(1deg); -webkit-transform: rotate(1.5deg) skewX(1deg); -o-transform: rotate(1.5deg) skewX(1deg); -ms-transform: rotate(1.5deg) skewX(1deg); transform: rotate(1.5deg) skewX(1deg); }



 .sf-curve-botWrap { position:absolute; bottom:0px; left:0px;  width:100%; height:50px; overflow:hidden;}



 .sf-curveBot { position:absolute; top:100%; right:-5px; background-color:#e2e6ef; width:100%; height:100px;  z-index:1; 



 -moz-transform: rotate(-1.5deg) skewX(1deg);



 -webkit-transform: rotate(-1.5deg) skewX(1deg);



 -o-transform: rotate(-1.5deg) skewX(1deg);



 -ms-transform: rotate(-1.5deg) skewX(1deg);



 transform: rotate(-1.5deg) skewX(1deg);



 }



 .sf-client-logo-wrap { position:relative; }



 .sf-client-curveTop { background-color:#7754f4; }



 .sf-client-curveBot { background-color:#62b815; }



 .sf-cateoriess-wrap { position:relative; }



 .sf-cateori-curveTop { background-color:#000; }



 .sf-cateori-curveBot { background-color:#62b815; }



 .sf-howServFinder-wrap { position:relative; }



 .sf-howitwork-curveTop { background-color:#7754f4; }



 .sf-howitwork-curveBot { background-color:#62b815; }



 .sf-featurProviders-wrap { position:relative; }



 .sf-feaPro-curveTop { background-color:#7754f4; }



 .sf-feaPro-curveBot { background-color:#62b815; }



 .sf-trustedBy-wrap { position:relative; }



 .sf-trustedBy-curveTop { background-color:#7754f4; }



 .sf-trustedBy-curveBot { background-color:#62b815; }



 .sf-whyChoos-wrap { position:relative; background-color:#6bbe20; }



 .sf-whyChoos-curveTop { background-color:#7754f4; }



 .sf-whyChoos-curveBot { background-color:#62b815; }



 .sf-latestBlog-wrap { position:relative; }



 @media only screen and (max-width:767px) {  



 .sf-latestBlog-wrap .col-md-4 { margin-bottom:30px; }



 .sf-latestBlog-wrap .col-md-4:last-child { margin-bottom:0px; }



 }



 .sf-latestBlog-curveTop { background-color:#7754f4; }



 .sf-latestBlog-curveBot { background-color:#62b815; }



 .sf-sf-postJobs-wrap-wrap { position:relative; background-color:#6dbf22; }



 .sf-postJobs-curveTop { background-color:#7754f4; }



 .sf-postJobs-curveBot { background-color:#62b815; }



 .sf-site-pricingtable-wrap {position:relative;  background-color:#000; }



 .sf-pricingtable-curveTop { background-color:#7754f4; }



 .sf-pricingtable-curveBot { background-color:#62b815; }



 .sf-testimonials-wrap {position:relative;  background-color:#eff3f6; }



 .sf-testimo-curveTop { background-color:#7754f4; }



 .sf-testimo-curveBot { background-color:#62b815; }



 .sf-providers-follow-wrap { position:relative; background-color:#555757;  }



 .sf-proFolos-curveTop { background-color:#7754f4; }



 .sf-proFolos-curveBot { background-color:#62b815; }



 .sf-page-scroll-wrap { position:relative; }



 .sf-pageScroll-curveTop { background-color:#7754f4; }



 .sf-company-about-info { position:relative; }



 .sf-aboutInfo-curveBot { background-color:#62b815; }



 .sf-vender-gallery-wrap { position:relative; }



 .sf-vendGallery-curveTop { background-color:#7754f4; }



 .sf-vendGallery-curveBot { background-color:#62b815; }



 .sf-venContInfo-wrap { position:relative; }



 .sf-venContInfo-curveTop { background-color:#7754f4; }



 .sf-venContInfo-curveBot { background-color:#62b815; }



 .sf-vender-bio-wrap { position:relative; }



 .sf-vendBio-curveTop { background-color:#7754f4; }



 .sf-vendBio-curveBot { background-color:#62b815; }



 .sf-venderVideo-wrap { position:relative; }



 .sf-vendVideo-curveTop { background-color:#7754f4; }



 .sf-vendVideo-curveBot { background-color:#62b815; }



 .sf-venderDocument-wrap,.profile-services-third { position:relative; background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; }



 .sf-venderDoc-curveTop { background-color:#7754f4; }



 .sf-venderDoc-curveBot { background-color:#62b815; }



 .sf-BookNow-wrap { position:relative; }



 .sf-BookNow-curveTop { background-color:#7754f4; }



 .sf-BookNow-curveBot { background-color:#62b815; }



 .sf-vendReviewArticle-wrap { position:relative; background-color:#555757; }



 .sf-vendRevArt-curveTop { background-color:#7754f4; }



 .sf-vendRevArt-curveBot { background-color:#62b815; }



 .client-logo-slider .owl-controls { margin:0px; }



 .categories-box-slider { padding:0px 15px; }



 .sf-quotelist-details,



 .sf-job-box,



 .sf-job-boxrow { background:#fff; padding:30px; position:relative; border: 1px solid #ddd; border-radius:10px; -webkit-border-radius:10px; }



 .sf-job-box-title { float:left; margin-right:150px; margin:0px 0px 20px; }



 .sf-job-box-price { position:absolute; top:20px; right:30px; font-size:35px; font-weight:600; color:#62b815; }



 .sf-job-boxrow p:last-child { margin-bottom:0px; }



 .sf-job-box-wrap .sf-job-box { padding-right:200px; }



 @media only screen and (max-width:550px) {  



 .sf-job-box-wrap .sf-job-box { padding-right:30px; }



 .sf-job-box-price { position: static; font-size:30px; margin-bottom:20px; display:block;}



 }



 .sf-quotelist-details { display:table; width:100%; list-style:none; margin:0px auto;  }



 .sf-quotelist-details li { display:table-cell; width:25%; text-align:center; vertical-align:middle;  margin-bottom:10px; padding-bottom:10px; }



 .sf-quotelist-details li span { display:block;  }



 .sf-quotelist-details li span:first-child { font-weight:600; text-transform:uppercase;  }



 .sf-quotelist-details li span:first-child i { font-weight:normal;  }



 .sf-quotelist-details li span .fa { display:block;  margin:0px auto 20px; width:60px; color:#999; height:60px; line-height:60px; text-align:center; font-size:20px; border:1px solid #ccc; border-radius:50px; -webkit-border-radius:50px;}



 .sf-serach-bar-verticle { border:1px solid #ddd; margin-top:30px; border-radius:10px; -webkit-border-radius:10px; }



 .sf-serach-bar-box { padding:30px; border-bottom:1px solid #ddd; }



 .sf-serach-bar-box:last-child { border-bottom:none; }



 .sf-serach-bar-label .fa { margin-right:10px; }



 .sf-serach-bar-content .sf-select-box { width:100% !important; }



 .sf-serach-bar-content .form-group { margin-bottom:10px; }



 .sf-serach-bar-content .form-group .checkbox label { padding-left:30px !important; }



 .sf-serach-bar-content .form-group:last-child { margin-bottom:0px; }



 .sf-serach-bar-label { margin:0px 0px 20px; } 



 .sf-serach-bar-content .checkbox input[type=checkbox] + label:before, 



 .sf-serach-bar-content .radio input[type=radio] + label:before { margin-left: -30px;}



 .sf-serach-bar-box [name="filterlocation"] { margin-bottom:15px; }



 .sf-serach-result-listing { margin-top:30px; }



 .sf-serach-result-wrap { display:table; position:relative; width:100%; border:1px solid #ddd; margin-bottom:30px; border-radius:10px; -webkit-border-radius:10px; }



 .sf-serach-result-left,



 .sf-serach-result-right { display:table-cell; padding:30px; vertical-align:top;  }



 .sf-serach-result-left { text-align:center; width:230px;}



 .sf-serach-result-left .btn-primary { margin:0px auto 20px; display:table; padding:7px 15px; font-size:12px; }



 .sf-serach-result-left .btn-link { color:#323232; display:inline-block; position:relative; text-decoration:none; }



 .sf-serach-result-left .btn-link:after { content:""; position:absolute; width:100%; height:2px; bottom:0px; left:50%;   transform: translateX(-50%); background-color:#000; -webkit-transition: all 0.5s ease;-moz-transition: all 0.5s ease;-ms-transition: all 0.5s ease;-o-transition: all 0.5s ease;transition: all 0.5s ease;}



 .sf-serach-result-left .btn-link:hover:after {width:100%; }



 .sf-hiring-status { display:table; margin:0 auto 10px; font-weight:400; color:#FF9900; border:1px solid #FF9900; padding:2px 8px;  border-radius:3px; -webkit-border-radius:3px; }



 .sf-serach-result-head { margin-right:140px; }



 .sf-serach-result-right { padding-left:0px; }



 .sf-serach-result-propic { width:170px; position:relative; margin-bottom:30px;  }



 .sf-serach-result-propic img { width:100%; height:auto;  }



 .sf-serach-result-propic .sf-featured-approve { top:12px; right:12px; -webkit-box-shadow: 0px 0px 5px 0 rgba(0,0,0,0.2); box-shadow: 0px 0px 5px 0 rgba(0,0,0,0.2);}



 .sf-serach-result-title { margin:0px 0px 15px; }



 .sf-serach-result-address { margin-bottom:15px; color:#777777; }



 .sf-serach-result-address i { margin-right:5px; }



 .sf-serach-result-lable-wrarp { margin-bottom:10px; }



 .sf-serach-lable-invitation,



 .sf-serach-lable-quotation { display:inline-block; padding:2px 10px; color:#fff; font-size:12px; text-transform:uppercase; font-weight:600; margin-bottom:5px; border-radius:2px; -webkit-border-radius:2px; }



 .sf-serach-lable-invitation:hover,



 .sf-serach-lable-quotation:hover { color:#fff; }



 .sf-serach-lable-invitation { background-color:#21b0f3; margin-right:10px; }



 .sf-serach-lable-quotation { background-color:#f37b1a; }



 .sf-serach-rating-addto { margin-bottom:10px; }



 .sf-serach-rating-addto .sf-show-rating { display:inline-block !important; }



 .sf-serach-ratings { display:inline-block; margin-right:5px;}



 .sf-serach-ratings-star { color:#ffc200; }



 .sf-serach-ratings-total { color:#999999; font-size:12px; }



 .sf-serach-addToFav { display:inline-block; cursor:pointer; font-size:18px; }



 .sf-serach-categoriList { margin-bottom:10px; color:#333333; font-weight:500; }



 .sf-serach-result-footer { position:absolute; top:30px; right:30px; }



 .brn-send-messege { border:2px solid #62b815; color:#62b815; background:none; padding:3px 12px; text-transform:uppercase; outline:none; font-size:12px; font-weight:600; border-radius:5px; -webkit-border-radius:5px; margin-bottom:15px; display:inline-block;}



 .brn-send-messege .fa {font-size:18px; }



 .brn-send-messege .sf-msging-count { display:inline-block; min-width:16px;  height:16px; line-height:18px; vertical-align:middle; text-align:center; background-color:#464141; color:#fff; font-size:10px; border-radius:15px; -webkit-border-radius:15px; padding:0px 5px; } 



 .sf-serach-result-price { color:#464141; font-size:24px; font-weight:600; text-align:center; }



 .sf-featuerd-label { position:absolute; top:15px; left:-12px; z-index:1; -moz-transform: rotate(-45deg);-webkit-transform: rotate(-45deg);-o-transform: rotate(-45deg);-ms-transform: rotate(-45deg); transform: rotate(-45deg); }



 .sf-featuerd-label span{position:relative; display:block; width:80px; background-color:#62b815; color:#fff; height:24px; line-height:24px; font-weight:600; font-size:12px; text-transform:uppercase;}



 .sf-featuerd-label span:before { z-index:-1; content:""; position:absolute; top:0px;  left:-10px; width:40px; height:100%; background-color:#62b815; -moz-transform: skewX(-40deg); -webkit-transform: skewX(-40deg); -o-transform: skewX(-40deg); -ms-transform: skewX(-40deg); transform: skewX(-40deg);}



 .sf-featuerd-label span:after { z-index:-1; content:""; position:absolute; top:0px;  right:-10px; width:40px; height:100%; background-color:#62b815; -moz-transform: skewX(40deg); -webkit-transform: skewX(40deg); -o-transform: skewX(40deg); -ms-transform: skewX(40deg); transform: skewX(40deg);}



 .sf-featuerd-label:before { z-index:-1; content:""; position:absolute; bottom:-3px;  left:-19px; width:6px; height:6px; background-color:#2b4b0e; -moz-transform: rotate(45deg);



 -webkit-transform: rotate(45deg);-o-transform: rotate(45deg);-ms-transform: rotate(45deg);transform: rotate(45deg); }



 .sf-featuerd-label:after {z-index:-2;  content:""; position:absolute; bottom:-3px;  right:-19px; width:6px; height:6px; background-color:#2b4b0e; -moz-transform: rotate(45deg);



 -webkit-transform: rotate(45deg);-o-transform: rotate(45deg);-ms-transform: rotate(45deg);transform: rotate(45deg);}



 @media only screen and (max-width:1200px) {  



 .sf-serach-result-left, 



 .sf-serach-result-right { padding:20px; }



 .sf-serach-result-right { padding-left:0px; }



 .sf-serach-result-left { width: 170px; }



 .sf-serach-result-propic { width: 130px; height: 130px;}



 .sf-serach-result-footer { top:20px; right:20px; }



 }



 @media only screen and (max-width:767px) {  



 .sf-serach-result-head { margin-right:0px; }



 .sf-serach-result-footer { position:static; margin-top:20px; }



 .brn-send-messege { float:left; }



 .sf-serach-result-price { float:right; }



 }



 @media only screen and (max-width:600px) {  



 .brn-send-messege { float:none; }



 .sf-serach-result-price { float:none; text-align:left;  }



 }



 @media only screen and (max-width:470px) {  



 .sf-serach-result-left, 



 .sf-serach-result-right { display:block;}



 .sf-serach-result-right { padding-left:20px; }



 .sf-serach-result-bookNow { position:absolute; top:50px; right:20px; }



 .sf-serach-result-propic { margin-bottom:0px; }



 }



 @media only screen and (max-width:380px) {  



 .sf-serach-result-left, 



 .sf-serach-result-right { padding:15px; }



 }



 .sf-other-logins.sf-other-login-one ul li { float:none; margin:0px auto 20px; max-width:300px; width:100%; }



 .sf-nextend-center{ text-align:center}



 .sf-other-logins { padding-top:30px; margin-bottom:-20px; }



 .sf-other-logins ul { list-style:none; margin:0px -15px;}



 .sf-other-logins ul:after { content:""; clear:both; display:table; }



 .sf-other-logins ul li { width:50%; float:left; padding:0px 15px; margin-bottom:20px; min-height:40px; line-height:40px;  }



 .sf-other-logins ul li:last-child { margin-bottom:0px; }



 .sf-other-logins ul li div.nsl-container-block .nsl-container-buttons,



 .sf-other-logins ul li div.nsl-container-block .nsl-container-buttons a { padding:0px; margin:0px; }



 .sf-other-logins ul li div.nsl-container-block .nsl-container-buttons a { margin-bottom:15px; }



 .sf-otherlogin-wrap { padding-top:30px; clear:both; }



 .sf-otherlogin-wrap:after { content:""; clear:both; display:table; }



 .sf-otherlogin-wrap .col-md-12 { margin-bottom:20px; }



 .sf-otherlogin-wrap .col-md-12:last-child { margin-bottom:0px; }



 .sf-otherlogin-wrap div.nsl-container-block .nsl-container-buttons,



 .sf-otherlogin-wrap div.nsl-container-block .nsl-container-buttons a { padding:0px; margin:0px; }



 .provider_registration #paymethod { padding:0px 30px; }



 .resendotp,



 .resendotppopup,



 .resendsignupotp,



 .resendsignupotppopup { position: absolute; right:28px; bottom:40px; text-transform: uppercase; font-size: 12px; font-weight:600; }



 #sendregotploading,



 #sendloginotploading { font-size:15px; display:none; }



 #signupotpboxpopup,



 #loginotpboxpopup { margin-bottom:30px;}



 .form-inline.input-animate { margin-bottom:15px; }



 .modal-body .sf-select-box > .dropdown-toggle,



 .modal-body .bootstrap-select.sf-form-control { height:40px; }



 #otpregisterformpopup .col-md-6 { width:100%; }



 #otpregisterformpopup .input-animate label { display:block; }



 .sf-avtarinfo-wrapper { margin-bottom:30px; }



 .sf-avtarinfo-wrapper:after { content:""; display:table; clear:both; }



 .sf-author-avatar-info {overflow:hidden; padding-left:20px;}



 @media only screen and (max-width:480px) {  



 .sf-author-avatar-info {clear:both; padding-left:0px;}



 .sf-dimension-wrap .docs-preview, 



 .sf-dimension-wrap .docs-data { display: block !important; padding:15px 0px 0px !important; }



 .crop-img-left { padding: 10px !important;}



 .crop-img-area { padding: 10px !important;}



 }  



 .sf-author-avatar-info > h5 {margin:0 0 10px;}



 .sf-avtarinfo-wrapper .sf-img-section { position:relative; width:200px; min-height:150px; float: left;}



 .sf-avtarinfo-wrapper .sf-img-section img { width:100%; }



 .sf-avtarinfo-wrapper .sf-img-section #file-upload



 .sf-avtarinfo-wrapper .sf-img-section #cover-upload { position:absolute;  left:50%; bottom:20px;  width:140px; height:42px; cursor:pointer; opacity:0; font-size:14px; white-space:nowrap; cursor:pointer; overflow:hidden; -ms-transform: translateX(-50%) translateY(-50%); -webkit-transform: translateX(-50%); transform: translateX(-50%);}



 



 .sf-avtarinfo-wrapper .custom-file-upload { position:absolute; bottom:20px; left:50%; white-space:nowrap; cursor:pointer; padding:5px 10px; -webkit-border-radius:5px; border-radius:5px; -ms-transform: translateX(-50%) translateY(-50%); -webkit-transform: translateX(-50%); transform: translateX(-50%); 



    <?php



     echo (service_finder_theme_get_data($data,'button-primary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-color').'; ' : '';



 	?>



 } 



 



.sf-avtarinfo-wrapper .custom-file-upload:hover,



.sf-avtarinfo-wrapper .custom-file-upload:focus,



.sf-avtarinfo-wrapper .custom-file-upload:active { 



    <?php



     echo (service_finder_theme_get_data($data,'button-primary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-hover-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-hover-color').'; ' : '';



 	?>



 } 



 



 



 .sf-avtarinfo-wrapper .sf-avatar-close { position:absolute; top:20px; right:20px; width:20px; height:20px; line-height:20px; text-align:center; background-color:#FF4246; color:#fff; }



 .sf-img-section input[type="file"] { width:140px; position:absolute; bottom:30px; left:50%; white-space:nowrap; cursor:pointer; background-color:#76c62e; color:#fff; padding:7px 10px; -webkit-border-radius:5px; border-radius:5px; -ms-transform: translateX(-50%) translateY(-50%); -webkit-transform: translateX(-50%); transform: translateX(-50%); opacity:0; } 



 .sf-author-avatar-limits {margin:0; list-style:none;}



 .sf-author-avatar-limits li {padding-left:15px; margin-bottom:10px; position:relative; }



 .sf-author-avatar-limits li:after { content:"\f105"; position:absolute; top:0px; left:0px; font-size:14px; font-family:"FontAwesome"; }



 .sf-author-avatar-limits li strong { font-weight:500; color:#555; }



 .crop-img-area { border:1px solid #ddd; padding:20px; margin-top:30px; -webkit-border-radius:5px; border-radius:5px; } 



 .sf-cropimg-table { display:table; width:100%; border: 2px dashed #ccc; }



 .crop-img-left,



 .crop-img-right  { display:table-cell; width:50%; vertical-align:top; }



 .crop-img-left{ width:50%; overflow:hidden; -webkit-border-radius:5px; border-radius:5px; }



 .crop-img-left img{ width:100%; }



 .crop-img-right { width:50%; padding-left:30px; text-align:center; } 



 .crop-img-right p { text-transform:uppercase; text-align:center; } 



 .crop-img-right img { -webkit-border-radius:5px; border-radius:5px; }



 .sf-preview-wrap { text-align:right; }



 .sf-preview-wrap .site-button{ position:static; padding:8px 20px; width:auto; margin-left:15px; }



 .docs-preview-buttons .site-button.outline.green { color: #35b494; border-color: #35b494; }   



 @media only screen and (max-width:1200px) {  



 .sf-dimension-wrap { display:block; }



 .sf-dimension-wrap .docs-preview, 



 .sf-dimension-wrap .docs-data { display:block; }



 }  



 @media only screen and (max-width:991px) {  



 .sf-cropimg-table { display:block; }



 .crop-img-left,



 .crop-img-right  { display:block; width:100%; padding:15px;}



 .crop-img-left { border-right:none !important;}



 }



 .no-aacess-head { padding:50px 0px; line-height:50px; }



 .no-aacess-title { font-size:40px; text-align:center; color:#3b55ce; font-weight:500; }



 .no-aacess-title span { display:block; font-size:70px; line-height:70px; font-weight:700; text-transform:uppercase; color:#3ed9c7; }



 .no-aacess-pic { text-align:center; }



 .no-aacess-pic { -webkit-animation: slide-top 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) infinite alternate-reverse ;  animation: slide-top 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) infinite alternate-reverse ; }



 @-webkit-keyframes slide-top {



   0% {  -webkit-transform: translateY(0);  transform: translateY(0);  }



   100% {  -webkit-transform: translateY(-10px); transform: translateY(-10px); }



 }



 @keyframes slide-top {



   0% {  -webkit-transform: translateY(0);  transform: translateY(0); }



   100% { -webkit-transform: translateY(-10px); transform: translateY(-10px); }



 }



 .sf-services-panel-wrap .mCS-minimal.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar { background:#CCCCCC; }



 .sf-services-panel-wrap  {max-width:600px; width:100%; height:100%; z-index:999; position:fixed; top:0; right:-105%; background-color:#fff;  -webkit-box-shadow: 0 0 15px 0 rgba(0,0,0,0.3); box-shadow: 0 0 15px 0 rgba(0,0,0,0.3);}



 .sf-services-panel-close  { position:absolute; top:0px; left:0px; margin:0; width:30px; height:30px; line-height:30px; background-color:#000; color:#fff; text-align:center; font-size:16px; cursor:pointer; z-index:1; }



 .sf-services-panel-inner { position:absolute; top:0px; left:0px; width:100%; height:100%; padding:30px; }



 .sf-services-panel-listing { list-style:none; margin:0px; padding:0px; }



 .sf-services-panel-listing li { border-bottom:1px dashed #ccc; padding-bottom:20px; margin-bottom:20px;  position:relative; }

 .sf-services-panel-listing li .sf-services-panel-title { margin-top:0px; width: calc(100% - 120px); }

 .sf-services-panel-listing li .sf-services-panel-price { position:absolute; right:0px; top:0px; color:#62b815; font-weight:800; } 

@media only screen and (max-width:480px){
 .sf-services-panel-listing li .sf-services-panel-title { width: calc(100% - 0px); }
 .sf-services-panel-listing li .sf-services-panel-price { position:static; }   
}

 .sf-services-panel-listing li p:last-child { margin-bottom:0px; }



 .sf-viewallgal-btn-wrap .sfviewallgallery { display:inline-block; color:#fff; font-weight:600; text-transform:uppercase; text-decoration:none; }



 .sf-viewallgal-btn-wrap .sfviewallgallery:hover { opacity:0.7px; }



 .sf-profile-link {position:absolute;  top:0px; left:0px; width:100%; height:100%; z-index:1;}



 .sf-booking-popup-open #header-part { z-index:0; }



 .booking-panel-wrap,.checkout-panel-wrap { position:fixed; top:100%; left:50%; display:table;  transform: translateX(-50%); max-width:800px; width:100%; height:100%; z-index:99; background-color:#fff; display:none;  }



 .booking-panel-wrap .acod-head .indicator,.checkout-panel-wrap .acod-head .indicator { top:5px;}



 .booking-panel-wrap .sf-custom-accordion,.checkout-panel-wrap .sf-custom-accordion { }



 .booking-panel-cell { display:block; vertical-align:middle; padding:30px; height:100vh; width:100%; }



 .booking-panel-overlay,.checkout-panel-overlay { position:fixed; top:0px; left:0px; width:100%; height:100%; z-index:98; display:none; background-color:#000; opacity:0.8; }



 .sf-serach-result-close { position:absolute; top:0px; right:-30px; font-size:16px; cursor:pointer; background:#FF0000; width:30px; height:30px; line-height:30px; text-align:center;  color:#fff;}



 .booking-panel-step-one,



 .booking-panel-step-two,



 .booking-panel-step-three,



 .booking-panel-step-four,



 .booking-panel-step-five { padding:10px; } 



 @media only screen and (max-width:767px) {  



 .booking-panel-cell { padding:15px; }



 .sf-custom-accordion .acod-content { margin:5px; }



 .sf-serach-result-close { right: 0;}



 }



 .booking-panel-price-edit { display:inline-block; background-color:#FF9900; color:#fff; padding:2px 8px; font-size:12px; vertical-align:middle;  -webkit-border-radius:3px; border-radius:3px;  }



 .booking-panel-price { font-size:20px; color:#76c62e; font-weight:600; display:inline-block; vertical-align:middle; margin-right:10px; }



 .booking-update-box {display:table; width:100%; margin-top:20px; }



 .booking-update-box .booking-update-cell {display:table-cell; vertical-align:middle;  }



 .booking-update-box .booking-update-cell .form-control { padding:5xp 10px; height:46px; }



 .booking-update-box .booking-update-cell:last-child { width:1%; padding-left:15px; }



 .booking-panel-wrap .mCS-minimal.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.checkout-panel-wrap .mCS-minimal.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {



     background-color: #000;



     background-color: rgba(0,0,0,.3);



 }



 .booking-panel-btn-wrap { margin-top:20px; }



 .sf-adminfee-outer { padding:20px; margin-top:30px; text-align:center; background-color:#f9f9f9; border:1px solid #e1e1e1; -webkit-border-radius:5px; border-radius:5px; }



 .sf-payonly-adminfee:first-child { font-weight:600; color:#555757; }



 .sf-payonly-adminfee:last-child { font-weight:normal; }



 @-webkit-keyframes grow { 



 0%{-webkit-transform:scale(1);} 50%{-webkit-transform:scale(1.05);} 100%{-webkit-transform:scale(1);}



 }



 @-moz-keyframes grow {



  0%{-moz-transform:scale(1);} 50%{-moz-transform:scale(1.05);} 100%{-moz-transform:scale(1);}



 }



 @-ms-keyframes grow {



 0%{-ms-transform:scale(1);} 50%{-ms-transform:scale(1.05);} 100%{-ms-transform:scale(1);}



 }



 .sf-payonly-adminfee{ -webkit-animation-name: grow; -webkit-animation-duration:1s; -webkit-animation-iteration-count: infinite; -webkit-animation-timing-function: linear; -moz-animation-name: grow; -moz-animation-duration:1s; -moz-animation-iteration-count: infinite; -moz-animation-timing-function: linear; -ms-animation-name: grow; -ms-animation-duration: 1s;



     -ms-animation-iteration-count: infinite; -ms-animation-timing-function: linear; }



 .jobbookingdate .datepicker-inline { display:block; width:auto; }



 .jobbookingdate .table-condensed > thead > tr > th { text-transform:uppercase; color:#7d4df6; }



 .jobbookingdate .table-condensed > tbody > tr > td.day { color:#838d90; padding:15px 5px; }



 .jobbookingdate .table-condensed > tbody > tr > td.day.old,



 .jobbookingdate .table-condensed > tbody > tr > td.disabled { opacity:0.5; }



.datepicker table tr td.active,

.datepicker table tr td:hover,

.jobbookingdate .table-condensed > tbody > tr > td.active,

.jobbookingdate .table-condensed > tbody > tr > td:hover { background:#76c62e !important; color:#fff; }



  



 div.nsl-container .nsl-button-default span.nsl-button-label-container { margin: 0 15px 0 12px !important; } 



  



 .aon-alert-identity { margin:0px 15px 0px; }



 .aon-alert-warning { color:#a22b2b; background-color:#f7d9d9; border-color:#f1bcbc; -webkit-border-radius:5px; border-radius:5px; }



 .aon-alert-success { color:#26851f; background-color:#d9f7db; border-color:#bcf1bf; -webkit-border-radius: 5px; border-radius: 5px; }



 .sf-nodata-dark { border:1px solid #ccc; color:#ccc; font-weight:600; padding:30px; text-align:center; -webkit-border-radius:5px; border-radius:5px;  }



 .sf-viewallgal-btn-wrap { text-align:center; padding-top:20px; clear:both; }



 .sf-login-note { border:1px solid #ccc; color:#ccc; font-weight:600; padding:15px; margin:0px 15px 25px; text-align:center; -webkit-border-radius:5px; border-radius:5px; }



 .sf-quote-wrap  img.rwmb-loader { width:50px !important; display:table; margin:30px auto; }



 .booking-panel-calender-wrap { border:1px solid #ddd; }



 .booking-slots-outer ul.timeslots li { padding:7px 10px; font-size:14px; margin-top:5px; }



 .sf-populerCities-wrap { background-color:#fff; }



 .sf-popcity-wrap-one-box { margin-bottom:30px;  }



 .sf-popcity-wrap-one { padding:20px; position:relative; background-color:#eff3f6; border:1px solid #d8dde2; overflow:hidden; border-radius:5px; -webkit-order-radius:5px; }



 .sf-popcity-wrap-one .sf-popcity-title { margin-bottom:10px; }



 .sf-popcity-wrap-one .results-text { color:#888888; }



 .sf-popcity-wrap-one .results-text strong { font-size:50px; line-height:50px; display:inline-block; color:#ccc; font-weight:600; margin-right:5px;}



 .sf-PopulerCities-curveTop { background-color:#7754f4; }



 .sf-PopulerCities-curveBot { background-color:#62b815; }



 .sf-popular-cities-link { position:absolute; width:100%; height:100%; top:0px; left:0px; }



 .sf-userInfoArea { padding:30px; background-color:#fff; border:1px solid #ddd; margin:50px 0px 0px; }



 .sf-userInfoTop {display:table; width:100%; margin-bottom:30px; }



 .sf-userInfoLeft,



 .sf-userInfoRight {display:table-cell; }



 .sf-userInfoLeft { width:150px; }



 .sf-userInfoRight { padding-left:30px; }



 .sf-userInfoArea { padding:30px; background-color:#fff; border:1px solid #ddd; margin:50px 0px 0px; }



 .sf-userInfoTop {display:table; width:100%; }



 .sf-userInfoLeft,



 .sf-userInfoRight {display:table-cell; vertical-align:top; }



 .sf-userInfoLeft { width:150px; }



 .sf-userInfoRight { padding-left:30px; }



 .sf-userInfoLeft .sf-userImage { width:150px; border-radius:5px; -webkit-border-radius:5px; }



 .sf-userInfoLeft .sf-userImage img { width:100%;  }



 .sf-userInfoRight ul { list-style:none; margin:10px 0px 20px;  }



 .sf-userInfoRight ul li { display:inline-block; margin-right:10px; }



 .sf-userInfoRight ul li i { margin-right:5px; }



 .sf-userInfoRight ul li:first-child { display:block; font-size:20px; color:#555; margin-bottom:15px; }



 #loadmorecities { text-align:center; }



 .site-button-link { background:none; padding:0px; outline:none; border:none; font-weight:600; color:#76c62e; font-size:14px; }



 .site-button-link .fa { opacity:0; margin-left:-5px; vertical-align:middle; margin-left:0px; -webkit-transition: all 0.5s ease; -moz-transition: all 0.5s ease; -ms-transition: all 0.5s ease; -o-transition: all 0.5s ease; transition: all 0.5s ease;}



 .site-button-link:hover,



 .site-button-link:active,



 .site-button-link:focus {color:#76c62e; }



 .site-button-link:hover .fa,



 .site-button-link:active .fa,



 .site-button-link:focus .fa {  opacity:1; margin-left:5px; }



 .comments-area .alert-warning { position:relative; border-radius:5px; -webkit-order-radius:5px; }



 .comments-area .alert-warning:before { opacity:0; }



 .sf-vender-parts-area .sf-company-about-right { width:300px; float:right; margin-left:30px; }  



 .sf-company-about-info .sf-company-about-right { width:360px; float: right; margin-left: 30px;}



 .sf-company-about-right .sf-feaProgrid-pic { height: 370px; }



 @media only screen and (max-width:776px) {  



 .sf-vender-parts-area .sf-company-about-right,



 .sf-company-about-info .sf-company-about-right { width:300px; }



 .sf-company-about-right .sf-feaProgrid-pic { height: 300px; }



 }



 @media only screen and (max-width:600px) {  



 .sf-vender-parts-area .sf-company-about-right,



 .sf-company-about-info .sf-company-about-right { width:200px; }



 .sf-company-about-right .sf-feaProgrid-pic { height:250px; }



 }



 @media only screen and (max-width:480px) {  



 .sf-vender-parts-area .sf-company-about-right, 



 .sf-company-about-info .sf-company-about-right { width:100%; float:none; margin-left:0px; }



 .sf-company-about-right .sf-feaProgrid-pic { height:300px; }



 }



 .sf-service-box-wrap { display:table; width:100%; margin-bottom:10px; }



 .sf-service-box-wrap .sf-service-left-cell,



 .sf-service-box-wrap .sf-service-right-cell { display:table-cell; vertical-align:top; }



 .sf-service-box-wrap .sf-service-right-cell { text-align:right; color:#555;  }



 .sf-service-box-wrap .sf-service-left-cell .sf-service-offer-label { display:inline-block; padding:0px; background:none; }



 .sf-service-box-wrap .sf-service-left-cell a  { font-weight:600; color:#555; }



 .sf-service-box-wrap .sf-service-left-cell a:hover  { color:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; }



 .sf-service-box-wrap .sf-service-left-cell .sf-service-offer-label i  { margin:0px; background:#caccd4; }



 @media only screen and (max-width:767px) {  



 .sf-service-box-wrap .sf-service-left-cell .sf-service-offer-label i  { padding:0px 10px; font-size:12px; }



 }



 @media only screen and (max-width:480px) {  



 .sf-service-box-wrap .sf-service-left-cell,



 .sf-service-box-wrap .sf-service-right-cell { display:block; }



 .sf-service-box-wrap .sf-service-right-cell { text-align: left; }



 .sf-service-box-wrap .sf-service-left-cell { margin-bottom:5px; }



 .sf-service-box-wrap .sf-service-right-cell { font-size:12px; }



 }



 .sf-coverinfo-wrapper .sf-img-section { width:100%; max-width:600px; }



 .sf-coverinfo-wrapper .sf-author-avatar-info { clear:both; padding:30px 0px 0px}



 /* footer fixed on bottom css*/



 .footer-fixed #footer { position:fixed; width:100%; bottom:0; }



 .footer-fixed .page-content { position:relative; z-index:1; background-color:#f7f8fa; }



 @media only screen and (max-width:991px) {  



 .footer-fixed #footer { position:static;}



 .footer-fixed .page-wraper { padding-bottom:0px !important; }



 .footer-fixed .page-content { position:static; }



 }



 .sf-package-highlight { position:absolute; top:16px; right:-12px; -moz-transform:rotate(-45deg); -webkit-transform:rotate(-45deg); -o-transform:rotate(-45deg); -ms-transform:rotate(-45deg);



     transform: rotate(-315deg);}



 .sf-package-highlight span{position:relative; display:block; width:80px; background-color:#62b815; color:#fff; height:24px; line-height:24px; font-weight:600; font-size:12px; text-transform:uppercase;}



 .sf-package-highlight span:before { z-index:-1; content:""; position:absolute; top:0px;  left:-10px; width:40px; height:100%; background-color:#62b815; -moz-transform: skewX(-40deg); -webkit-transform: skewX(-40deg); -o-transform: skewX(-40deg); -ms-transform: skewX(-40deg); transform: skewX(-40deg);}



 .sf-package-highlight span:after { z-index:-1; content:""; position:absolute; top:0px;  right:-10px; width:40px; height:100%; background-color:#62b815; -moz-transform: skewX(40deg); -webkit-transform: skewX(40deg); -o-transform: skewX(40deg); -ms-transform: skewX(40deg); transform: skewX(40deg);}



 .sf-package-highlight:before { z-index:-1; content:""; position:absolute; bottom:-3px;  left:-19px; width:6px; height:6px; background-color:#2b4b0e; -moz-transform: rotate(45deg);



 -webkit-transform: rotate(45deg);-o-transform: rotate(45deg);-ms-transform: rotate(45deg);transform: rotate(45deg); }



 .sf-package-highlight:after {z-index:-2;  content:""; position:absolute; bottom:-3px;  right:-19px; width:6px; height:6px; background-color:#2b4b0e; -moz-transform: rotate(45deg);



 -webkit-transform: rotate(45deg);-o-transform: rotate(45deg);-ms-transform: rotate(45deg);transform: rotate(45deg);} 



 @media only screen and (max-width:767px) {  



 .sf-package-highlight { top: 23px; right: -3px;}



 .sf-package-highlight:before,



 .sf-package-highlight:after { display:none; } 



 }



 .sf-pricing-highlight.pricing-tables-wrap { background:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; }



 .sf-pricing-highlight.pricing-tables-wrap:after { background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; }



 .sf-pricing-highlight.pricing-tables-wrap:before {background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;  }



 /* Provider profile page section top curve */



 .sf-vendGallery-curveTop,



 .sf-venContInfo-curveTop,



 .sf-vendBio-curveTop,



 .sf-vendVideo-curveTop,



 .sf-venderDoc-curveTop,



 .sf-BookNow-curveTop,



 .sf-vendRevArt-curveTop { background-color:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; }



 /* Provider profile page section bottom curve */



 .sf-aboutInfo-curveBot,



 .sf-vendGallery-curveBot,



 .sf-venContInfo-curveBot,



 .sf-vendBio-curveBot,



 .sf-vendVideo-curveBot,



 .sf-venderDoc-curveBot,



 .sf-BookNow-curveBot,



 .sf-vendRevArt-curveBot { background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; }



 .cvf-pagination-nav { text-align:center; } 



 .cvf-pagination-nav .pagination { margin:0px; padding:0px; } 



 table.dataTable td.dataTables_empty, 



 table.dataTable th.dataTables_empty { font-weight:600; }



 .job-manager-jobs tr td.action .dropdown-menu { top:auto; bottom:100%; }



 .sf-custom-error { z-index:9999 !important; }



 .sf-total-msgnumber { display:inline-block; background-color:#FFF; color:#3396d1; min-width:14px; height:14px; line-height:14px; vertical-align:middle; font-size:11px; font-weight:bold; border-radius:14px; -webkit-order-radius:14px;  }



 .sf-profilecat-label { display:block; margin-top:20px; }



 .sf-profilecat-label a { display:inline-block; padding:1px 10px; color:#62b815; border:1px solid #62b815; font-size:14px; font-weight:400; border-radius:3px; -webkit-order-radius:3px;  } 



 .sf-serach-result-name { display:inline-block; margin-bottom:10px; font-weight:600; color:#323232; }



 .aon-messenger-submit-btn { border:none !important; padding:4px 10px; line-height:30px; background-color: <?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>;  }



 .sf-popcity-list { list-style:none; }



 .sf-popcity-wrap-two-box { display:inline-block; vertical-align:top; min-width:16.222%; margin-bottom:30px; }



 .sf-popcity-wrap-two .sf-popcity-title { font-weight:400; }



 .sf-popcity-wrap-two .sf-popcity-title a:hover { text-decoration:underline; }



 .sf-PopulerCities-curveTop { background-color:#7754f4; }



 .sf-PopulerCities-curveBot { background-color:#62b815; } 



 @media only screen and (max-width:1200px) {   



 .sf-popcity-wrap-two-box { min-width: 19.555%; }



 }



 @media only screen and (max-width:991px) {   



 .sf-popcity-wrap-two-box { min-width: 24.444%; }



 }



 @media only screen and (max-width:645px) {   



 .sf-popcity-wrap-two-box { min-width: 32.777%; }



 }



 @media only screen and (max-width:480px) {   



 .sf-popcity-wrap-two-box { min-width: 49%; }



 }



 .no_job_listings_found { text-align:center; border:1px solid #ccc; color:#c8c3c3; font-weight:500; padding:30px; border-radius:5px; -webkit-order-radius:5px;  }



 .booking-zipcode-input { padding:0px; }



 .sf-category-link { position:absolute; width:100%; height:100%; top:0px; left:0px; }



 code {  color:#858787; background-color:#ffffff; border-color:#e5e8e8; border:1px solid #ccc; display:inline-block; }



 pre code { border:none;  }



 .wp-block-button.alignleft { margin-top: 0; margin-right:30px; }



 .wp-block-button.alignright { margin-top: 0;margin-left: 30px;}



 figure.wp-caption, 



 .wp-block-button, 



 .wp-block-cover, 



 .wp-block-image, 



 .wp-block-video {



     margin-bottom:30px;



 }



 .wp-block-cover .wp-block-cover-image-text, 



 .wp-block-cover .wp-block-cover-text, 



 .wp-block-cover h2, 



 .wp-block-cover-image .wp-block-cover-image-text, 



 .wp-block-cover-image .wp-block-cover-text, 



 .wp-block-cover-image h2 {



     font-size: 30px;



     line-height: 1.067em;



     letter-spacing: 0;



     font-size: 28px !important;



     color:#fff !important;



     margin-bottom: 0;



 }



 .wp-block-cover .wp-block-cover-text a { color:#fff; }



 .wp-block-button { margin:30px 0; }



 .wp-block-button__link { background-color:#77c04b; }



 .wp-block-button .wp-block-button__link { 



 	<?php



     echo (service_finder_theme_get_data($data,'button-primary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-primary-border-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-color').'; ' : '';



 	?>



 	position:relative; display:inline-block; vertical-align:middle; width:auto; font-size:14px; font-weight:400; text-decoration:none; outline:0;



  padding:9px 20px; border-width:1px; border-style:solid; cursor:pointer; border-radius:0px; -webkit-border-radius:0px; }



 .wp-block-button .wp-block-button__link:hover,



 .wp-block-button .wp-block-button__link:focus,



 .wp-block-button .wp-block-button__link:active { 



 	<?php



     echo (service_finder_theme_get_data($data,'button-primary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-hover-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-hover-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-primary-hover-border-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-hover-color').'; ' : '';



 	?>



  } 



 .wp-block-button.is-style-outline .wp-block-button__link { color: #77c04b; background-color:transparent; border: 1px solid #77c04b; }



 h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color:inherit; }

 h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover { color:inherit; }



 .wp-block-search { display: flex; flex-wrap: wrap; margin-bottom:30px; }



 .wp-block-search .wp-block-search__input { flex-grow: 1; padding:10px 15px; border:1px solid #ccc; height:40px; outline:none; }



 .wp-block-search .wp-block-search__button {



 	<?php



     echo (service_finder_theme_get_data($data,'button-primary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-color').'; ' : '';



 	?>



 	height: 40px; padding: 10px 15px; border:none; }



 .wp-block-search label { display: block; margin-bottom:30px; }



 .wp-block-search .wp-block-search__button:hover,



 .wp-block-search .wp-block-search__button:focus,



 .wp-block-search .wp-block-search__button:active { <?php



     echo (service_finder_theme_get_data($data,'button-primary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-hover-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-hover-color').'; ' : '';



 	?>    }



 .wp-block-archives, 



 .wp-block-categories, 



 .wp-block-latest-posts, .wp-block-rss { margin: 0; padding-left: 0; }



 .wp-block-archives li, 



 .wp-block-categories li, 



 .wp-block-latest-posts li, 



 .wp-block-rss li {



     margin-bottom: 1em;



     list-style-type: none;



 }



 .wp-block-group.has-background, 



 p.has-background {



     margin: 2rem 0;



     padding: 20px 30px;



 }



 .sf-link-pages a {



     color: #000;



     padding:0px 2px;



     background-color:transparent;



     margin: 0 2px;



 }



 pre { margin: 15px 0;}



 .post-text li a,



 .post-text p a { color:#3396d1;  }



 .post-password-form input[type="password"] { padding:10px 15px; border:1px solid #ccc; height:40px; margin:10px 0px; }



 .post-password-form input[type="submit"] { 



 	<?php



     echo (service_finder_theme_get_data($data,'button-primary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-color').'; ' : '';



 	?>



 position:static; height: 40px; padding: 10px 15px; border:none;}



 .post-password-form input[type="submit"]:hover,



 .post-password-form input[type="submit"]:focus,



 .post-password-form input[type="submit"]:active { <?php



     echo (service_finder_theme_get_data($data,'button-primary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-hover-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-hover-color').'; ' : '';



 	?>   }



 #gallery-1 .gallery-item img { float:none; width:auto; }



 #gallery-2 .gallery-item img { float:none; width:auto; }



 .wp-block-image .aligncenter > figcaption a {color: <?php echo (!empty($data['link-color'])) ? esc_html($data['link-color']): ''; ?>;}



 .wp-block-audio figcaption, 



 .wp-block-gallery .blocks-gallery-image figcaption, 



 .wp-block-gallery .blocks-gallery-item figcaption, 



 .wp-block-image figcaption, .wp-block-video figcaption {



     font-size: .71111em;



     font-family: inherit;



     line-height: 1.6;



     margin: 0;



     padding: .5rem;



     text-align: center;



 }



 .wp-block-quote.is-large, 



 .wp-block-quote.is-style-large {



     margin: 0 0 16px;



     padding:16px 20px 16px 80px;



 }



 .section-full ~ br { display:none; }



 #sf-bookingmember-image { display:table; margin:auto; border:1px solid #ccc; padding:5px;  }



 #sf-bookingmember-image img { width:130px; height:130px; }



 .sf-total-recmded { color:#3396d1; font-weight:bold; font-size:15px; font-family:Arial, Helvetica, sans-serif; }



 p.submit input#wp-submit { 



 	



     <?php



     echo (service_finder_theme_get_data($data,'button-primary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-color').'; ' : '';



 	?>



 border-radius:5px; display:table; margin:auto; -webkit-border-radius:5px;  border: none;  box-shadow: none; font-weight: normal; outline:none !important; padding: 10px 20px; text-decoration: none; }



 p.submit input#wp-submit:hover,



 p.submit input#wp-submit:active,



 p.submit input#wp-submit:focus { 



 	<?php



     echo (service_finder_theme_get_data($data,'button-primary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-hover-background-color').'; ' : '';



 	echo (service_finder_theme_get_data($data,'button-primary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-hover-color').'; ' : '';



 	?>



 }



 



.sf-user-roles-name { font-size: 22px; font-weight: 800; font-family: "raleway";  display: table; margin:-75px auto 31px; color: #fff; text-transform: uppercase; }	



.social-role-chooser.sf-radio-checkbox input[type=radio] + label { font-size: 20px; }



.social-role-chooser.sf-radio-checkbox input[type=radio] + label:before { top: 8px; }



.social-role-chooser .fa-check { position:absolute; left:45%; bottom:-60px; display:block; font-size:60px; color:#000; opacity: 0.2;



-moz-transform: translateX(-50%); -webkit-transform: translateX(-50%); -o-transform: translateX(-50%); -ms-transform: translateX(-50%); transform: translateX(-50%);



-moz-transform: scale(0); -webkit-transform: scale(0); -o-transform: scale(0); -ms-transform: scale(0); transform: scale(0); -webkit-transition: all 0.5s ease; -moz-transition: all 0.5s ease; -ms-transition: all 0.5s ease;



-o-transition: all 0.5s ease; transition: all 0.5s ease;}



 	



.social-role-chooser.active .fa-check { -moz-transform: scale(1); -webkit-transform: scale(1); -o-transform: scale(1); -ms-transform: scale(1); transform: scale(1); }	



.social-login-text h2 { text-align:center; margin:30px 0px; font-size:20px; }	



@media only screen and (max-width:1200px) { 	



.sf-user-roles-name { font-size:16px; margin:-63px auto 30px; }	 



}



@media only screen and (max-width:991px) { 	



.sf-user-roles-name { font-size: 14px; margin: -50px auto 30px; }	 



}	



@media only screen and (max-width:767px) { 



.social-role-chooser .fa-check { bottom:-30px; font-size:30px; left:48%; }	



.social-login-wrap [class*="col-"] { width:100%; margin-bottom:20px; }



.social-login-wrap [class*="col-"] .sf-user-roles-pic img { height:250px; }



.sf-user-roles-name { font-size: 14px; margin:-46px auto 15px; }



}		



	



@media only screen and (max-width:480px) { 



.social-role-chooser .fa-check { bottom:-30px; font-size:30px; left:48%; }	



.social-login-wrap [class*="col-"] .sf-user-roles-pic img { height:200px; }



.sf-user-roles-name { font-size: 12px; margin: -37px auto 15px; }



.social-role-chooser.sf-radio-checkbox input[type=radio] + label { font-size: 16px; }



.social-role-chooser.sf-radio-checkbox input[type=radio] + label:before { top: 4px; }



}			



	



 



 @media only screen and (max-width:767px) { 



 .sf-submit-my-profile.is-sticky { position:fixed; bottom:70px; right:21px; z-index:99;}



 .sf-submit-my-profile.is-sticky .btn { font-size:0px;}



 .sf-submit-my-profile.is-sticky .btn i { font-size:16px;}



 .sf-submit-my-profile.is-sticky { -webkit-animation: text-pop-up-top 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) infinite alternate both; animation: text-pop-up-top 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) infinite alternate both; }



 @-webkit-keyframes text-pop-up-top {



   0% {	-moz-transform: scale(1); -webkit-transform: scale(1); -o-transform: scale(1); -ms-transform: scale(1); transform: scale(1); }



   100% {	-moz-transform: scale(1.1); -webkit-transform: scale(1.1); -o-transform: scale(1.1); -ms-transform: scale(1.1); transform: scale(1.1); }



 }



 @keyframes text-pop-up-top {



   0% {	-moz-transform: scale(1); -webkit-transform: scale(1); -o-transform: scale(1); -ms-transform: scale(1); transform: scale(1); }



   100% {	-moz-transform: scale(1.1); -webkit-transform: scale(1.1); -o-transform: scale(1.1); -ms-transform: scale(1.1); transform: scale(1.1); }



 }



 }



 .section-content.profiles-content > .container .section-full { width:100vw; margin-left: -50vw;  left: 50%;}



 .sf-chkallinv-outer { padding:20px 30px; border:1px solid #ddd; border-radius:10px; -webkit-border-radius:10px; margin-bottom:30px; }



 .sf-chkallinv-outer:after { content:""; display:table; clear:both; }



 .sf-chkallinv-left { float:left; }



 .sf-chkallinv-right { float:right; }



 .sf-serach-result-left .sf-radio-checkbox { display:table; margin:20px auto 0px; }



 @media only screen and (max-width:600px) {   



 .sf-chkallinv-left,



 .sf-chkallinv-right { float:none; }



 .sf-chkallinv-left { margin-bottom:10px; }



 }



 @media only screen and (max-width:767px) {   



 .profile-form-bx.sf-calview-custum { padding:0px; }



 span[data-cal-date] { font-size: 14px; margin-top: 5px;  margin-right: 10px; }



 .cal-month-box .cal-day-today span[data-cal-date] { font-size: 20px; }



 }



 @media only screen and (max-width:480px) {   



 span[data-cal-date] { font-size: 12px; }



 .cal-month-box .cal-day-today span[data-cal-date] { font-size:15px; }



 }



 #cal-week-box { z-index:999; }



 .sf-bh-breaktime { list-style:none; margin:0px; padding:0px; }	



 .sf-bh-breaktime li:first-child { font-weight:600; color:#222; }	



 .sf-bh-breaktime li { display:inline-block; font-size:12px; padding:0px; margin:0px 10px 5px 0px;  line-height:18px; color:#888; width:auto;  font-weight:normal; }



 .sf-multiple-categories-select button[data-id="languages"]  img { margin-right:5px; }



 .sf-multiple-categories-select button[data-id="languages"]  img { margin-right:5px; vertical-align:middle; margin-top:-3px; }



 div.nsl-container-block .nsl-container-buttons a { min-width: 260px; }



 



.profile-gallery-third .section-head h2{



 color:<?php echo (!empty($data['profile-gallery-text-color'])) ? esc_html($data['profile-gallery-text-color']): '#fff'; ?>;



}



 



#login-Modal .loginform + .sf-otherlogin-wrap .nsl-container-buttons > a { margin-bottom:15px; }  



#login-Modal .loginform + .sf-otherlogin-wrap .nsl-container-buttons > a:last-child { margin-bottom:0px; }  



#login-Modal .loginform + .sf-otherlogin-wrap .nsl-button-label-container { font-size:14px; }  



/*.provider_registration .row { display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;  } */



 


#connectbtn a { background-color:#4285f4; padding-left:50px; display:table; height:42px; padding-right:10px; color:#fff; font-family:Arial, Helvetica, sans-serif; font-family: 'Roboto', sans-serif; position:relative; font-weight: 600; -webkit-border-radius:2px; border-radius:2px }



#connectbtn .google-icon-wrapper { position: absolute; top:0px; left:0px; margin-top:1px; margin-left:1px; width: 40px; height: 40px; border-radius: 2px; background-color: #fff; }



#connectbtn .google-icon { position: absolute; top:0px; left:0px; margin-top: 11px; margin-left: 11px; width: 18px; height: 18px; }



.select2-container--default .select2-selection--multiple .select2-selection__rendered li { margin:7px 5px 0 2px; padding: 2px 5px; line-height: 24px; font-size: 14px; }



.select2-container--default .select2-results__option[aria-selected="true"], .select2-container--default .select2-results__option[data-selected="true"] { background-color: #ddd; padding: 0px 5px; }



.select2-results__option { padding: 0px 5px;}



.job-manager-form fieldset { line-height: 22px; }



.woocommerce span.onsale,



.woocommerce ul.products li.product .onsale { 



<?php



	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



?>



}



.woocommerce div.product .woocommerce-tabs ul.tabs li.active:after { 



<?php



	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';



?>



}



.woocommerce #respond input#submit,



.woocommerce a.button,



.woocommerce button.button,



.woocommerce input.button,



.woocommerce .summary.entry-summary .single_add_to_cart_button {



<?php



	echo (service_finder_theme_get_data($data,'button-primary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-background-color').'; ' : '';



	echo (service_finder_theme_get_data($data,'button-primary-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-primary-border-color').'; ' : '';



	echo (service_finder_theme_get_data($data,'button-primary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-color').'; ' : '';



?>



 font-weight:400;



 font-size:14px;



 padding:10px 20px;



 outline:none;



}



.woocommerce #respond input#submit:hover,



.woocommerce a.button:hover,



.woocommerce button.button:hover,



.woocommerce input.button:hover,



.woocommerce .summary.entry-summary .single_add_to_cart_button:hover {



<?php



	echo (service_finder_theme_get_data($data,'button-primary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-primary-hover-background-color').'; ' : '';



	echo (service_finder_theme_get_data($data,'button-primary-hover-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-primary-hover-border-color').'; ' : '';



	echo (service_finder_theme_get_data($data,'button-primary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-primary-hover-color').'; ' : '';



?>



 text-decoration:none;



 background-image:none;



}



.woocommerce-cart table.cart td.actions .coupon [for="coupon_code"] + .input-text { width: 140px; height:40px; margin-right:10px;}



.woocommerce #payment #place_order,



.woocommerce-cart table.cart td.actions .coupon .button,



.woocommerce-page #payment #place_order {



	<?php



		echo (service_finder_theme_get_data($data,'button-secondary-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-secondary-background-color').'; ' : '';



		echo (service_finder_theme_get_data($data,'button-secondary-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-secondary-border-color').'; ' : '';



		echo (service_finder_theme_get_data($data,'button-secondary-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-secondary-color').'!important; ' : '';



    ?>



}



.woocommerce #payment #place_order:hover,



.woocommerce-cart table.cart td.actions .coupon .button:hover,



.woocommerce-page #payment #place_order:hover {



	<?php



		echo (service_finder_theme_get_data($data,'button-secondary-hover-background-color') != '') ? 'background-color:'.service_finder_theme_get_data($data,'button-secondary-hover-background-color').'; ' : '';



		echo (service_finder_theme_get_data($data,'button-secondary-hover-border-color') != '') ? 'border-color:'.service_finder_theme_get_data($data,'button-secondary-hover-border-color').'; ' : '';



		echo (service_finder_theme_get_data($data,'button-secondary-hover-color') != '') ? 'color:'.service_finder_theme_get_data($data,'button-secondary-hover-color').'!important; ' : '';



    ?>



}



.sf-noresult-outer {



    padding: 20px 30px;



    border: 1px solid #ddd;



    border-radius: 10px;



    -webkit-border-radius: 10px;



    margin-bottom: 30px;



}



.staging-toggle-wrapper { margin-left:35%; padding-top:20px; }



.staging-toggle-filter {display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; justify-content:center;}



.staging-toggle-filter .form-group { padding:0px 0px; border:2px solid #ccc; cursor:pointer; margin:0px 10px; border-radius:5px; -webkit-border-radius:5px; }



.staging-toggle-filter .form-group:hover,



.staging-toggle-filter .form-group.active {  border:2px solid #7042e1; padding:0px;}



.staging-toggle-filter .form-group .sf-radio-checkbox { margin:0px; }



#jobapplicantsfilter .staging-toggle-filter .form-group .radio input[type="radio"] + label { padding:10px 20px !important; display:block; }



.staging-toggle-filter .form-group .radio input[type="radio"] + label::before,



.staging-toggle-filter .form-group .checkbox input[type="checkbox"] + label::before { display:none; }



.staging-toggle-filter .form-group .radio input[type="radio"] + label,



.staging-toggle-filter .form-group .checkbox input[type="checkbox"] + label { padding:0px !important; }



@media only screen and (max-width:991px) {   



.staging-toggle-wrapper { margin-left:0%; }



}



@media only screen and (max-width:400px) {   



.staging-toggle-filter .form-group { margin-bottom:10px; }



}



.sf-job-box  { margin-top:30px; }



.sf-job-box .sf-job-box-price { position: static; display: table; margin-bottom: 15px; }















.job_listing_preview > .container  { width:100%; }



.job_listing_preview > .breadcrumb-row  { margin:0px 15px; }







.job_listing_preview_title h2 { margin-top:10px; }







.entry-content .job_listing_preview_title .button, 



.job_listing_preview_title .button { margin-top:5px;}







@media only screen and (max-width:480px) {   



.job_listing_preview { padding: 0 0 1em;}



.entry-content .job_listing_preview_title .button, 



.job_listing_preview_title .button { float:none; margin-top:10px; margin-left: 0; margin-right: 10px; }



}







.sf-recomm-header { text-align:center; border: 1px solid #ddd; margin-bottom: 30px; border-radius: 10px; -webkit-border-radius: 10px; }







.sf-follow-text p{ color:inherit;}







.sf-about-text2 p{ color:inherit;}







/*Theme style 4 (Updated 4.0)*/







.d-flex { display: -ms-flexbox !important; display: flex !important; }



.flex-wrap { -ms-flex-wrap: wrap !important; flex-wrap: wrap !important; }



.a-b-none:after,



.a-b-none:before { display: none; }



.align-items-center { -ms-flex-align: center !important; align-items: center !important; }



.justify-content-between { -ms-flex-pack: justify; justify-content: space-between; }















.sf-sub-title { color: #ffb600; text-transform: uppercase; letter-spacing: 4px; font-weight: 600; display: block;  margin-bottom: 10px; }



.sf-title { margin:0px; }



.btn {text-transform: uppercase;}



.sf-curve-area { background-image: url("inc/images/curve-bg.png"); position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 1; background-repeat: no-repeat;



    background-size: cover;



}







.sf-banner-two .sf-bnr-text { max-width:700px; top:50%; left:calc(50% - 250px); -moz-transform: translateX(-50%) translateY(-50%); -webkit-transform: translateX(-50%) translateY(-50%); -o-transform: translateX(-50%) translateY(-50%); -ms-transform: translateX(-50%) translateY(-50%); transform: translateX(-50%) translateY(-50%); z-index:98; }



.sf-banner-two .sf-bnr-text .container { width: auto;} 

.sf-banner-two .sf-bnr-pic { height:100vh; } 


.sf-banner-two .sf-bnr-text .text-top-line { font-size:60px; line-height:1.3; font-weight:300; margin:0px; }
.sf-banner-two .sf-bnr-text .text-top-line p { line-height:inherit; margin:0px; }
.sf-banner-two .sf-bnr-text .text-top-line span { color: #ffb600; font-size:inherit; }

.sf-banner-two .sf-bnr-text .text-bot-line { font-size:60px; line-height:1.3; font-weight:800; border-bottom:1px solid #ffb600; display:table; padding-bottom:20px; margin:0px; }
.sf-banner-two .sf-bnr-text .text-bot-line p { line-height:inherit; margin:0px; }


.sf-findBar-vertical .container { position: relative; }
.sf-findBar-vertical .sf-searchbar-table {  display: block; }

.sf-findBar-vertical .sf-searchbar-table .sf-searchbar-left, 

.sf-findBar-vertical .sf-searchbar-table .sf-searchbar-right { display:block; padding:0px; }

.sf-findBar-vertical .sf-searchbar-table .sf-searchbar-right { padding-top: 10px; }

.sf-findBar-vertical { bottom:0px; height:100%; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;  }



.sf-findBar-vertical .search-form  { position: absolute; max-width:500px; top:50%; right: 0px; padding:40px !important; border-radius:30px !important;  box-shadow: 0 0 70px rgba(52, 69, 113, 0.38); 



-moz-transform: translateY(-50%);



-webkit-transform: translateY(-50%); 



-o-transform: translateY(-50%); 



-ms-transform: translateY(-50%); 



transform: translateY(-50%); 



}



.sf-findBar-vertical .search-form::before { background:#fff; border-radius:30px; opacity: 1; }



.sf-findBar-vertical .search-form::after { content:""; position:absolute; left: 0px; bottom:-8px; width: 100%; height:100px; z-index: -1;  border-radius:30px; 

background:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;

}







.sf-findBar-vertical .sf-searchbar-left > ul { margin:0px; }



.sf-findBar-vertical .sf-searchbar-left > ul > li label { margin-bottom:0px; color:#000; line-height:1; }



.sf-findBar-vertical .sf-searchbar-left > ul > li { width:100%; padding-left:0px; padding-right:0px; }



.sf-findBar-vertical .sf-searchbar-left > ul > li .form-control { border:none; padding-left:0px; height: 50px; border-bottom:1px solid #ddd; box-shadow:none; -webkit-box-shadow:none; border-radius:0px; }



.sf-findBar-vertical .sf-searchbar-left > ul > li .bootstrap-select .btn { height: 50px; border:none !important; border-bottom:1px solid #ddd !important; padding-left:0px }



.sf-findBar-vertical .sf-searchbar-left > ul > li .sf-search-icon { position: absolute; bottom: 10px; right: 0px; width: 25px; z-index: 2; }



















.sf-findBar-vertical .filter-option img { width:30px; margin-right: 5px; border-radius:30px; }







.sf-findBar-vertical .sf-searchbar-right { width: 100%; }



.sf-findBar-vertical .sf-searchbar-right .btn { width: 100%; max-width: 220px; margin: auto; border-radius: 15px; padding: 15px 20px; }







.header-style8 .header-nav .nav { float: left; margin-left: 50px; }











.section-head .sf-title { line-height: 1.5; }







@media only screen and (max-width:1600px) {



.sf-findBar-vertical .filter-option img { width: 22px; }    



.sf-findBar-vertical .search-form { padding: 25px 35px 35px;}



.sf-findBar-vertical .sf-searchbar-left > ul > li .form-control { height: 30px; padding-top: 0px; }    



.sf-findBar-vertical .sf-searchbar-left > ul > li .bootstrap-select .btn { height: 30px; padding-top: 0px; }    



.sf-findBar-vertical .sf-searchbar-left > ul > li .sf-search-icon {  width: 22px; }  



.sf-findBar-vertical .sf-searchbar-left > ul > li { margin-bottom: 10px; }



.sf-findBar-vertical .search-form  { max-width:450px; }



}







@media only screen and (max-width:1440px) {



.sf-banner-two .sf-bnr-text .text-top-line { font-size: 50px; }



.sf-banner-two .sf-bnr-text .text-bot-line { font-size: 50px; padding-bottom: 15px; }



}







@media only screen and (max-width:1280px) {



.sf-findBar-vertical .search-form  { max-width:450px; }



.sf-findBar-vertical .search-form {  padding: 15px 30px 25px; }



.sf-findBar-vertical .sf-searchbar-left > ul > li { margin-bottom: 5px; }



.sf-findBar-vertical .search-form { max-width: 420px; right: 25px; }



.sf-banner-two .sf-bnr-text .text-top-line { font-size:40px; }



.sf-banner-two .sf-bnr-text .text-bot-line { font-size:40px; }



}







@media only screen and (max-width:1200px) {



	





.sf-findBar-vertical .search-form  { max-width:350px; }



.sf-banner-two .sf-bnr-text {  max-width: 500px; height:auto; left: calc(50% - 235px);  }











.header-style8 .header-nav .nav { float: none; margin-left:0px; }



.header-style8 .extra-nav { margin-bottom: -1px; }



.sf-findBar-vertical .sf-searchbar-left > ul > li .form-control { height:25px; padding-bottom:5px; } 



.sf-findBar-vertical .sf-searchbar-left > ul > li .bootstrap-select .btn { height: 25px; padding-bottom: 5px; padding-top: 0px; }



.sf-findBar-vertical .sf-searchbar-left > ul > li label {  line-height: 1.2;  font-size: 14px;  display: block; }



}







@media only screen and (max-width:991px) {



.sf-banner-two .sf-bnr-text {  left:0; -moz-transform: translateX(0%) translateY(-50%); -webkit-transform: translateX(0%) translateY(-50%);  -o-transform: translateX(0%) translateY(-50%);  -ms-transform: translateX(0%) translateY(-50%);  transform: translateX(0%) translateY(-50%); }

.sf-findBar-vertical { position:absolute; background:none; }

    

.sf-banner-two .sf-bnr-text { z-index:1; }

.sf-findBar-vertical { position:static; background:inherit; }

.sf-findBar-vertical .container { width: 100%; }

.sf-findBar-vertical .search-form { padding:25px 30px 35px; max-width:100%; position:relative; right:0; top:0; -moz-transform:none; -webkit-transform:none; -o-transform:none; -ms-transform:none; transform: none; }

.sf-findBar-vertical .sf-searchbar-left > ul { display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; }

.sf-findBar-vertical .sf-searchbar-left > ul > li { width: calc(50% - 30px); margin: 0px 15px 30px; }

.sf-findBar-vertical .sf-searchbar-left > ul > li .form-control { height:40px; padding-bottom: 5px;  padding-top:5px; }

.sf-findBar-vertical .sf-searchbar-left > ul > li .bootstrap-select  { padding:0px; 40px}

.sf-findBar-vertical .sf-searchbar-left > ul > li .bootstrap-select .btn { height: 40px; padding-bottom: 5px; padding-top: 5px; }    

        

}



@media only screen and (max-width:600px) {

.sf-banner-two .sf-bnr-text .text-top-line { font-size: 25px; }

.sf-banner-two .sf-bnr-text .text-bot-line { font-size: 25px; }

}























/*========================================================================================================



	04 SEPTEMBER 2021



========================================================================================================*/







/*Popular Categories*/



.sf-ow-img{text-align: center; margin:20px 0px;}



.sf-ow-img a img{border-radius: 40px;}



.sf-ow-img .sf-ow-title{color:#022279}





.sf-ow-img {

  -webkit-transition: all 0.5s ease;

  -moz-transition: all 0.5s ease;

  -ms-transition: all 0.5s ease;

  -o-transition: all 0.5s ease;

  transition: all 0.5s ease;

}

.center .sf-ow-img {

  -moz-transform: scale(1.2);

  -webkit-transform: scale(1.2);

  -o-transform: scale(1.2);

  -ms-transform: scale(1.2);

  transform: scale(1.2);

}







.sf-owl-arrow .owl-next{background: none; border: none;}



.sf-owl-arrow .owl-prev{background: none; border: none;}







.sf-owl-arrow .owl-prev .ar-left{width: 54px; height: 2px; background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; display: block;position: relative;}



.sf-owl-arrow .owl-prev .ar-left:after{content: ''; background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; width: 16px;height: 2px;top: -5px;left: -3px;position: absolute;



	transform: rotate(135deg);}



.sf-owl-arrow .owl-prev .ar-left::before{ content: ''; background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; width: 16px;height: 2px;bottom: -5px;left: -3px;position: absolute;



	transform: rotate(-135deg);}







.sf-owl-arrow .owl-next .ar-right{width: 54px;	height: 2px; background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; display: block;position: relative;}



.sf-owl-arrow .owl-next .ar-right:after{content: ''; background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; width: 16px;height: 2px;top: -5px;right: -3px;position: absolute;



	transform: rotate(35deg);}



.sf-owl-arrow .owl-next .ar-right::before{content: '';background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;width: 16px; height: 2px;bottom: -5px;right: -3px;position: absolute;



	transform: rotate(-35deg);}



	



.sf-owl-arrow .owl-nav{margin-top: 10px;}







/*Step Box*/



.sf-how-service-wrap { background-image:url("inc/images/bg-curve.png"); background-size: auto; background-position: top; }



.sf-step-section{text-align: center;}



.sf-step-section .sf-step-icon{display: inline-block; margin-bottom: 30px;}



.sf-step-section .sf-step-icon span{display: block; background-color: #ffb600; width: 140px; height: 140px; border-radius: 50px; line-height: 140px; transform: rotate(135deg);}







.sf-step-section .sf-step-icon span img{transform: rotate(-135deg); height:40px; }



.sf-step-section .sf-step-info .sf-title{color:#022279}



.step-position-1{margin-top: 0px;}



.step-position-2{margin-top: 60px;}



.step-position-3{margin-top: 120px;}







.sf-bg-light-purple{background-color: #f8f5ff;}







@media only screen and (max-width:991px) {



.sf-how-service-wrap { background-image:none; }



    



.step-position-1 { margin-top: 50px; }    



.step-position-2 { margin-top: 50px; }



.step-position-3 { margin-top: 50px; }    



}











/*Service Provider*/



.sf-ow-provider-wrap{position: relative; background-color:#022279; border-radius: 40px;margin-top: 50px; margin-bottom: 30px;margin-left: 30px; 

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>

}



.sf-ow-provider{background-color: #fff;	border-radius: 40px;	padding: 30px 50px 20px;	text-align: center;	margin-bottom: -50px;	position: relative;	top: -50px;	left: -15px; box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);}











.sf-ow-provider .sf-ow-top{padding-bottom: 20px; padding-left: 24px;	padding-right: 24px;}



.sf-ow-provider .sf-ow-top .sf-pro-check{position: absolute; left:30px; top:30px;}



.sf-ow-provider .sf-ow-top .sf-pro-check span { width:28px; height:28px; line-height:28px; display: block; background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>

; color: #000; font-size:14px; border-radius: 50%;}



 



.sf-ow-provider .sf-ow-top .sf-pro-favorite { position: absolute; right:30px; top:30px; line-height:1; }   



.sf-ow-provider .sf-ow-top .sf-pro-favorite a { display:block; font-size: 26px; color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>

; cursor:pointer; }







.sf-ow-provider .sf-ow-top .sf-title { margin-bottom: 10px;}







.sf-ow-provider .sf-ow-info span{font-weight: 700;}







.sf-ow-provider .sf-ow-mid .sf-ow-media{margin-bottom: 20px;}



.sf-ow-provider .sf-ow-mid .sf-ow-media img{border-radius: 30px; box-shadow: 0px 15px 20px #cdc9d7;}







.sf-ow-provider .sf-ow-pro-rating span{display: inline-block;padding-right: 2px; color: #ffb600;font-size: 16px;}



.sf-ow-provider .sf-ow-pro-rating span.text-gray{color: #9ea4b2;}







.sf-ow-provider-wrap .sf-ow-bottom {text-align: center;padding: 20px;}



.sf-ow-provider-wrap .sf-ow-bottom a {color: #fff; font-size: 18px; font-weight: 700; cursor:pointer;}







@media only screen and (max-width:1550px) {

.sf-ow-provider { border-radius:30px; padding: 15px 25px 20px;}

.sf-ow-provider .sf-ow-top .sf-pro-check {  left:20px;  top:20px; }

.sf-ow-provider .sf-ow-top .sf-pro-favorite { right:20px; top:20px; }    

}





@media only screen and (max-width:767px) {

.sf-ow-provider { border-radius:30px; padding: 15px 25px 20px;}   

.sf-ow-provider .sf-ow-top .sf-pro-check {  left: -10px;  top: 0; }

.sf-ow-provider .sf-ow-top .sf-pro-favorite { right:20px; top:20px; line-height: 1; }    

}







/*Statics*/



.sf-bg-d-blue{background-color: #022279;}





.sf-statics-four-wrap { 

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>

}



.sf-statics-four-wrap .sf-title {color:#fff; margin-bottom:20px; max-width:450px; }



.sf-statics-four-wrap p { color:#fff; max-width: 550px; margin: 0px; }



@media only screen and (max-width:991px) {

.sf-statics-four-wrap .col-md-6 { width:100%; }

}



.sf-static-section{background-color: #fff; margin-bottom: 30px; text-align: center; border-radius: 50px;padding: 40px 20px}



.sf-static-section .sf-company-static-num {font-weight: 700; font-size: 60px;line-height: 60px;}



.sf-static-section .sf-company-static-name { margin-bottom: 0px; margin-top: 10px;font-size: 18px; font-weight:400;}







.sf-statics-blocks .sf-static-position-1{margin-top: 0px;}



.sf-statics-blocks .sf-static-position-2{margin-top: 60px;}







.sf-static-section.sf-t-blue{color: #022278;}



.sf-static-section.sf-t-yellow{color: #ffb600;}



.sf-static-section.sf-t-green{color: #6ab33e;}



.sf-static-section.sf-t-skyblue{color: #0cb6f5;}







@media only screen and (max-width:991px) {





.sf-statics-four-wrap .sf-title { max-width:none; }



.sf-statics-four-wrap p { max-width: none; margin: 0px; }



.sf-statics-blocks { margin-top: 50px; }



.sf-static-position-1,



.sf-static-position-2 { margin:0px -15px;  display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;  width:auto; float:none; }



.sf-statics-blocks .sf-static-position-2 { margin-top:30px; }



.sf-static-section { padding: 40px 20px; width: calc(50% - 30px); margin: 0px 15px; }



}







@media only screen and (max-width:600px) {



.sf-static-section .sf-company-static-num {  font-size:40px; line-height: 40px; }



.sf-static-section .sf-company-static-name {  font-size: 16px; }



}











/*sf-blog-section-1*/







.sf-news-section-wrap .row {}



.sf-blog-section-1{background-color: #f8f5ff; border: 1px solid #ddd;border-radius: 30px;}



.sf-blog-section-1 .sf-post-media a img{border-radius: 30px; width:100%; }



.sf-blog-section-1 .sf-post-meta{padding: 20px; border-bottom: 1px solid #ddd;}







.sf-blog-section-1 .sf-post-meta ul {margin:0px; display: flex; justify-content: space-between; list-style: none; align-items: center;}



.sf-blog-section-1 .sf-post-meta ul li {color: #022279;font-size:16px; font-weight:600}



.sf-blog-section-1 .sf-post-meta ul li.sf-post-category { padding: 6px 20px; background-color: #fff; border-radius: 6px; line-height: 1.2; }



.sf-blog-section-1 .sf-post-meta ul li.sf-post-author a {color: #022279;font-size:14px; font-weight:600}



.sf-blog-section-1 .sf-post-meta ul li.sf-post-author a span {padding-left: 2px; margin-left: 2px; display: inline-block;}







.sf-blog-section-1 .sf-post-info{padding: 20px;}







.sf-blog-section-1 .sf-post-title{margin-top: 0px; margin-bottom: 10px;}



.sf-blog-section-1 .sf-post-title a{color: #022278; margin-bottom: 0px;}







@media only screen and (max-width:991px) {



.sf-news-section-wrap .section-head .row .col-md-6 { width:100%; }

.sf-news-section-wrap .row { display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;  -ms-flex-pack: center;  justify-content: center; }

.sf-news-section-wrap .row .col-md-4 { width:50%; margin-bottom:30px; }}



@media only screen and (max-width:600px) {

.sf-news-section-wrap .row .col-md-4 { width:100%; }

}







/*Why Choose Us*/



.sf-whycoose-section-wrap{padding: 0px !important; background-color: #f8f5ff; overflow:hidden; }



.sf-whycoose-section-wrap .section-content {  position: relative; z-index:1; margin:0px; }





.sf-whycoose-section-wrap .sf-w-choose-info-left{max-width: 745px; margin-left: auto; padding: 80px 130px 80px 15px;}







.sf-whycoose-section-wrap .sf-w-choose{width: 100%;display: block;}



.sf-whycoose-section-wrap .sf-w-choose-icon{float: left;margin-right: 20px;}



.sf-whycoose-section-wrap .sf-w-choose-icon span{background-color: #fff; width: 80px; height: 80px; line-height: 80px; border-radius: 30px; display: block; text-align: center; box-shadow: 0px 0px 50px rgba(112, 66, 225, 0.2);}



.sf-whycoose-section-wrap .sf-w-choose-info{overflow: hidden;}







.sf-whycoose-section-wrap .sf-w-choose-info .sf-title{color: #022278; margin-bottom: 10px;}







.sf-whycoose-section-wrap .sf-w-choose-bg-outer{display: flex;}







.sf-whycoose-section-wrap .sf-w-choose-bg-wrap { position: relative; overflow: hidden;}







.sf-w-choose-left-cell { width:58.33333333%; }



.sf-w-choose-right-cell { width:41.66666667%; }





.sf-whycoose-section-wrap .sf-w-choose-bg{position: absolute; left: 0px; top: 0px; right: 15px; bottom: 0px; background-size: cover; }







@media only screen and (max-width:1200px) {



.sf-whycoose-section-wrap .sf-w-choose-info-left {  max-width: 575px; padding-right:50px; }



}



@media only screen and (max-width:991px) {



.sf-whycoose-section-wrap .sf-w-choose-info-left {  max-width:440px; padding-right:30px; }



}



@media only screen and (max-width:767px) {



.sf-w-choose-left-cell,



.sf-w-choose-right-cell { width:100%; }



.sf-whycoose-section-wrap .sf-w-choose-info-left { max-width: none; }



.sf-whycoose-section-wrap .sf-w-choose-bg {  position: static; min-height:600px;}



}



















/*jobs*/



.sf-jobs-section{background-color: #fff; border-radius: 30px; padding: 30px; margin-top: 40px; margin-bottom: 30px; box-shadow:0px 0px 30px rgba(46, 13, 79, 0.1); }



.sf-jobs-section .sf-jobs-head{display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;}



.sf-jobs-section .sf-jobs-head .sf-jobs-media{ display:block; width:100px; height:100px; border-radius: 50%; overflow: hidden; position: relative; top: -70px; margin-bottom: -70px; box-shadow: 0px 0px 50px rgba(112, 66, 225, 0.2);}







.sf-jobs-section .sf-jobs-head .sf-jobs-position { background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; font-size: 16px; color: #000; font-weight: 600; padding:6px 26px; border-radius: 6px;}



@media only screen and (max-width:767px) {

.sf-jobs-section .sf-jobs-head .sf-jobs-position { background-color: #feb500; font-size: 12px; color: #000; font-weight: 600; padding: 4px 12px; border-radius: 6px; }

}









.sf-jobs-info .sf-job-company{font-size: 16px; color: #9c9c9c; font-weight: 600; margin-bottom: 10px;}



.sf-jobs-info .sf-title a { margin-bottom: 20px; display: block;}   







.sf-jobs-footer{display: flex; justify-content: space-between; align-items: center;}



.sf-jobs-footer i { font-size: 24px;}







.sf-jobs-footer{ <?php echo (service_finder_theme_get_data($data['h4-size'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['h4-size'],'color').'; ' : ''; ?> font-weight: 600;}



.sf-jobs-footer i{font-size: 24px; padding-right: 5px;}



.sf-jobs-cost span{font-size: 36px; font-weight: 600;}







/*Pricing Plan*/



.sf-pricing-wrap { background-color:#f8f5ff; }



.sf-pricing-section-outer { border-radius: 30px; background-color: #fff; padding: 20px;margin-top: 100px;}







.sf-pricing-section{padding: 50px; }







.sf-price-tb-info .sf-price-plan-name{color: #022279; font-size: 28px; line-height: 28px; font-weight: 600;}



.sf-price-tb-info .sf-price-plan-discount{color: #141414; font-size: 17px; font-weight: 600;}







.sf-price-tb-list{margin: 30px 0px}



.sf-price-tb-list ul{list-style: none; margin-bottom: 0px; margin-left: 0px;}



.sf-price-tb-list ul li{font-size: 14px; color: #141414; font-weight: 600; margin-bottom: 10px;}



.sf-price-tb-list ul li i{margin-right: 10px; color: #42e539; font-size: 18px;}



.sf-price-tb-list ul li.disable,



.sf-price-tb-list ul li.disable i{color: #d6d6d6;}







.sf-price-tb-plan .sf-price-plan-cost{font-size: 24px;font-weight: 600; color: #022279;}



.sf-price-tb-plan .sf-price-plan-cost span{font-size: 38px;}







.sf-price-tb-plan{margin-bottom: 30px;}



.sf-choose-plan-btn{ display:block; text-align:center; font-size: 18px;color: #022279; font-weight: 500; background-color: #dae2f6; border: 1px solid #022279; border-radius: 15px; line-height:1.2; padding: 12px 15px;}







.sf-pricing-section.sf-pricing-active {

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>

border-radius: 20px; margin-top: -50px;

}







.sf-pricing-section.sf-pricing-active .sf-price-tb-info .sf-price-plan-name,



.sf-pricing-section.sf-pricing-active .sf-price-tb-plan .sf-price-plan-cost,



.sf-pricing-section.sf-pricing-active .sf-price-tb-list ul li,



.sf-pricing-section.sf-pricing-active .sf-price-plan-discount{color: #fff;}







.sf-pricing-section.sf-pricing-active .sf-choose-plan-btn{background-color: #ffb600;}











.no-gutter {margin-right: 0; margin-left: 0;}



  



.no-gutter > [class*="col-"] {padding-right: 0; padding-left: 0;}















/*Pricing-btn*/



.sf-priceing-tb-control{text-align: center;}



.sf-priceing-tb-control span{font-size: 18px; color: #022279; font-weight: 600;padding: 0px 10px;}







.sf-priceing-tb-control .switch { position: relative; display: inline-block; width: 84px; height: 34px;}



.sf-priceing-tb-control .switch input {opacity: 0;  width: 0;  height: 0;}



.sf-priceing-tb-control .slider {position: absolute;cursor: pointer; top: 0; left: 0; right: 0;bottom: 0;background-color: #ccc;-webkit-transition: .4s; transition: .4s;}



.sf-priceing-tb-control .slider:before {position: absolute; content: "";height: 26px;width: 26px;left: 4px;bottom: 4px;background-color: white;  -webkit-transition: .4s; transition: .4s;}



input:checked + .slider {background-color: #022279;}



input:focus + .slider { box-shadow: 0 0 1px #022279;}







input:checked + .slider:before {-webkit-transform: translateX(50px); -ms-transform: translateX(50px); transform: translateX(50px);}







@media only screen and (max-width:1200px) { 



.no-gutter > [class*="col-"] { width:50%;  float:left;  }



.sf-pricing-section.sf-pricing-active {  margin-top:0px; }



}







@media only screen and (max-width:600px) { 



.no-gutter > [class*="col-"] { width:100%;  float:none;  }



}







/* Rounded sliders */



.sf-priceing-tb-control .slider.round {border-radius: 34px;}



.sf-priceing-tb-control .slider.round:before { border-radius: 50%;}







/*Testimonial*/



.sf-testimonial-user {background-color: #dae2f6; border: 1px solid #022278; border-radius: 20px; padding: 20px 30px; cursor: pointer;}



.sf-testimonial-user .sf-testimonial-media{float: left; width: 61px; height: 61px; border-radius: 50%; overflow: hidden; margin-right: 20px;}



.sf-testimonial-user .sf-testimonial-user-detail{overflow: hidden;}



.sf-testimonial-user .sf-testimonial-user-detail .sf-testi-user-name{color: #022278; font-size: 18px; font-weight: 600;}



.sf-testimonial-user .sf-testimonial-user-detail .sf-testi-user-position{color: #222;font-size:16px; font-weight: 600;}







.sf-testimonial-info { padding-top:50px; }



.sf-testimonial-info .sf-testimonial-title{color: #022278; font-size: 26px; font-weight: 600;}



.sf-testimonial-info .sf-ow-pro-rating{margin: 30px 0px;}



.sf-testimonial-info .sf-ow-pro-rating span{display: inline-block;padding-right: 2px; color: #ffb600;font-size: 24px;}



.sf-testimonial-info .sf-ow-pro-rating span.text-gray {

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>

}







.sf-testimonial-quote { 

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>

 font-size: 36px; 

}







.slick-testimonials-thumbnails .slick-list { padding:0px !important; }



.slick-testimonials-thumbnails .slick-item { padding: 0px 10px; }







.slick-testimonials-thumbnails .slick-active.slick-center .sf-testimonial-user { 

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'border-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>

}



.slick-testimonials-thumbnails .slick-active.slick-center .sf-testimonial-user .sf-testi-user-name{color: #fff;}



.slick-testimonials-thumbnails .slick-active.slick-center .sf-testimonial-user .sf-testi-user-position{color: #fff;}







.slick-testimonials-thumbnails .slick-next,



.slick-testimonials-thumbnails .slick-prev{width: auto;height: auto;}



.slick-testimonials-thumbnails .slick-next:before,



.slick-testimonials-thumbnails .slick-prev:before{font-family: 'FontAwesome';color: #022279;font-size: 44px;}



.slick-testimonials-thumbnails .slick-next:before {content: "\f105";}



.slick-testimonials-thumbnails .slick-prev:before {content: "\f104";}











.sf-footer-st-1{background-color: #f8f5ff; padding-top: 50px;}







.sf-news-letter{margin-bottom:50px; border: 1px solid #022278; border-radius: 20px; padding: 20px 30px; display: flex; justify-content: space-between;}



.sf-news-letter span{font-size: 24px; font-weight: 600; color: #022278;}



.sf-news-l-form{display: flex; min-width: 560px; margin-bottom: 0px;}



.sf-news-l-form .form-control{height: 40px; border-radius:12px 0px 0px 12px;}



.sf-news-l-form .sf-sb-btn{



    font-size: 14px;



    color: #000;



    border: none;



    font-weight: 500;



    background-color: #ffb600;



    border-radius: 12px;



    padding: 7px 30px;



    margin-left: -12px;



}



.sf-footer-mid{margin-bottom: 30px;}



.sf-site-link{margin-bottom: 30px;}



.sf-site-link .sf-f-title{font-size: 24px; font-weight: 600; color: #022278; margin-bottom: 10px;}



.sf-site-link ul{list-style: none; margin: 0px; }



.sf-site-link ul li a{color: #535353; font-size: 16px; font-weight: 500;}







.sf-footer-bottom-section{display: flex; justify-content: space-between; align-items: center;}







.sf-footer-bottom{padding-bottom: 30px;}







.sf-footer-bottom-section .sf-f-social{position: relative; padding-left: 420px;}



.sf-footer-bottom-section .sf-f-social:after{content: ''; position: absolute;left: 0px; top: 50%; height: 1px; background-color:<?php echo (!empty($data['bottom-footer-social-line-color'])) ? esc_html($data['bottom-footer-social-line-color']): ''; ?>; width: 390px;}



.sf-footer-bottom-section .sf-f-social .socila-box{margin: 0px;}



.sf-footer-bottom-section .sf-f-social .socila-box li{display: inline-block;}



.sf-footer-bottom-section .sf-f-social .socila-box li a{ color:<?php echo (!empty($data['bottom-footer-social-line-color'])) ? esc_html($data['bottom-footer-social-line-color']): ''; ?>; font-size: 22px; padding-right: 15px;}



.sf-footer-bottom-section .sf-f-social .socila-box li:last-child a{padding-right: 0px;}







.sf-f-copyright{color: #535353; font-size: 14px; font-weight: 500;}











/*sf rounded sidebar*/



.sf-rounded-sidebar{border-radius: 20px; border: 1px solid #e1dced; background-color: #fff; box-shadow: 0px 0px 20px rgba(112, 66, 225, 0.1); margin-right: 20px;}







.sf-job-sidebar-blocks {padding: 30px !important; border-bottom: 1px solid #e1dced; }

.sf-job-sidebar-blocks .job-manager-category-dropdown { width:100% !important; }



.sf-job-sidebar-blocks:last-child{border: none;}



.sf-job-sidebar-blocks .sf-title{margin-bottom: 20px; }



.sf-job-sidebar-blocks .form-control{height: 50px; border-radius: 6px;}



.sf-job-sidebar-blocks .bootstrap-select .dropdown-toggle {height: 50px;border-radius: 6px;}



.sf-btn-large{font-size: 16px; text-transform: uppercase;



    color: #000;



    border: none;



    font-weight: 500;



    background-color: #ffb600;



    border-radius: 6px;



    padding: 10px 30px;



    display: block;



    width: 100%;



}



.sf-location-ring-wrap{position: relative;}



.sf-location-ring{



    position: absolute;



    width: 6px;



    height: 6px;



    border-radius: 50%;



    background-color: #000;



    right: 20px;



    top: 50%;



    transform: translateY(-50%);



}



.sf-location-ring:after{



    position: absolute;



    content: '';



    width: 16px;



    height: 16px;



    border-radius: 50%;



    border: 1px solid #000;



    right: -5px;



    top: 50%;



    transform: translateY(-50%);



}







.sf-job-sidebar-blocks .sf-job_types { list-style: none; margin: 0px;}

.sf-job-sidebar-blocks .sf-job_types input[type="checkbox"] + label { padding-left:30px !important; line-height: 1.4; }

.sf-job-sidebar-blocks .sf-job_types input[type="checkbox"] + label:before { margin-left: -30px; }







.sf-range-slider .sf-range-slider-control{font-family: 'sofia_proregular';}



.sf-range-slider .sf-range-slider-control span{color: #f0ad07;}



.sf-range-slider .slider.slider-horizontal{width: 100%;}



.sf-range-slider .slider-selection{background-color: #ffb600; background-image: none;}







.sf-range-slider .slider-handle{width: 24px; height: 24px; background-color: #fff; border: 3px solid #ffb600; background-image: none;}







.sf-range-slider .slider.slider-horizontal .slider-track {height: 6px; margin-top: 0px}



.sf-range-slider .slider .tooltip.top {margin-top: -50px;}













.sf-search-bar-panel { position: fixed; left:0px; bottom: 0; width: 100%; max-width:450px; height:calc(100vh - 90px); padding:0px; background-color: #fff; z-index: 1000; -webkit-transition: all 0.5s ease; -moz-transition: all 0.5s ease; -ms-transition: all 0.5s ease; -o-transition: all 0.5s ease; transition: all 0.5s ease; }



.sf-search-bar-panel .slider.slider-horizontal { width: 100%; }



.sf-search-title {  margin-bottom: 10px; }  

.sf-search-bar-panel .sf-search-title h6 { font-size:18px; margin: 0px; display: inline-block; }




@media only screen and (max-width:1600px) { 

.sf-search-bar-panel { max-width:350px;  }

}



@media only screen and (max-width:991px) { 

.sf-search-bar-panel { left:-100%;  }

.sf-search-result-area { margin-left: 0; padding: 25px; }

.active-vs-bar .sf-search-bar-panel { left:0%;  }

.active-vs-bar .search-filter-btn { position:absolute; top: 0; left:350px; font-size:0px; width:34px; height:34px; background:#f23e3e; color:#fff; z-index:9999; padding:0px; border-radius:0; -webkit-box-shadow: 0 0 15px 0 rgba(0,0,0,0.1); box-shadow: 0 0 15px 0 rgba(0,0,0,0.1); } 

.active-vs-bar .search-filter-btn i { font-size:20px; } 

.active-vs-bar .search-filter-btn i:before { content: "\f00d"; }     

}






.sf-map-filter .btn { margin-right:10px; }

.search-filter-btn { display:none; }

    

@media only screen and (max-width:991px) { 

.search-filter-btn { display:inline-block; }

}



.sf-search-bar-panel { position: fixed; left:0px; bottom: 0; width: 100%; max-width:450px; height:calc(100vh - 90px); padding:0px; background-color: #fff; z-index: 1000; }



.sf-search-bar-panel .slider.slider-horizontal { width: 100%; }



.sf-search-bar-panel .sf-search-title label { font-weight:normal; font-size:18px; color:#022279; }










@media only screen and (max-width:1600px) { 

.sf-search-bar-panel { max-width:350px;  }

}



@media only screen and (max-width:991px) { 

.sf-search-bar-panel { left:-100%;  }

.sf-search-result-area { margin-left: 0; padding: 25px; }

}





    

.sf-map-filter .btn { margin-right:10px; }

.search-filter-btn { display:none; }

    

@media only screen and (max-width:991px) { 

.search-filter-btn { display:inline-block; }

}





.sf-curve-pos {  -moz-transform: skewY(-2deg); -webkit-transform: skewY(-2deg); -o-transform: skewY(-2deg); -ms-transform: skewY(-2deg); transform: skewY(-2deg); }



.sf-curve-pos > .container { -moz-transform: skewY(2deg); -webkit-transform: skewY(2deg); -o-transform: skewY(2deg); -ms-transform: skewY(2deg); transform: skewY(2deg);  }



.sf-curve-pos .sf-w-choose-info-left { -moz-transform: skewY(2deg); -webkit-transform: skewY(2deg); -o-transform: skewY(2deg); -ms-transform: skewY(2deg); transform: skewY(2deg);  }







.sf-search-icon { width:20px; display:block; float:right; }











.sf-searchbar-box { padding:0px 30px 30px; }



.sf-searchbar-area { list-style:none; margin:0px 0px 30px; }



.sf-searchbar-area > li { padding:30px 0px; border-bottom:1px solid #ddd; }



.sf-searchbar-area > li:after { content:""; clear:both; display: block; }



.sf-searchbar-area .slider.slider-horizontal .slider-track { height:6px; background:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; }  



.sf-searchbar-area .slider.slider-horizontal .slider-selection { background:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; }



.sf-searchbar-area .slider.slider-horizontal .slider-handle { 

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>

top:-2px; } 



.sf-searchbar-area .slider .tooltip.top { margin-top:-45px; }



.sf-searchbar-area .tooltip .tooltip-inner { padding: 8px 10px; border-radius: 10px; }











.sf-searchbar-box .sf-search-btn { display: block; width:100%; height:54px; border-radius:20px; font-size:20px; }











.sf-left-value { float:left; }



.sf-right-value { float:right; }











.sf-search-result-area { margin-left:450px; padding:30px; min-height:100vh; margin-top:0px; position: relative;  }
.sf-search-result-area .listing-wraper { padding: 5px 0px 0px; }




.sf-header-no-map + .page-content { padding-bottom:0px; background-color:#f9f6ff; }







@media only screen and (max-width:1600px) { 



.sf-search-bar-panel { max-width:350px;  }



.sf-search-result-area { margin-left:350px; }



}







@media only screen and (max-width:1440px) { 

.sf-search-bar-panel { max-width:350px;  }

.sf-search-result-area { margin-left:350px; padding:25px; }

.sf-vender-list-info { padding:25px; }

}

    

@media only screen and (max-width:1300px) { 

.sf-search-result-area [class*="col-md-"] { width:100%; } 

}



@media only screen and (max-width:991px) { 

.sf-search-result-area { margin-left:0px; }



}







.sf-search-bar-panel .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,

.sf-search-bar-panel .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar {

    background-color: #012177;

    opacity:0.4;

    background-color:rgba(1, 32, 116, 0.54);

    <?php

        echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

    ?>

}







.sf-search-result-top { margin-bottom:20px; }







.sf-search-result-title h5 { margin: 0px; }



.sf-search-result-title h5 span { color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;}



.sf-search-result-option .sf-search-sortby .btn { border-radius:10px; }



.sf-search-result-option .sf-search-grid-option .btn {  border-radius:10px; }



.sf-search-result-option .bootstrap-select { border-radius: 10px; }















.sf-search-result-area .sf-ow-provider-wrap { margin-left: 15px; }











.pagination-center { text-align:center; }







.pagination-two { clear:both; margin-bottom:30px; }



.pagination-two .pagination > li > a, 



.pagination-two .pagination > li > span { margin: 0px 3px; border:none; border-radius:10px; }











.sf-vender-list-wrap { margin-bottom:30px; }



.sf-vender-list-box { background-color:#fff; border-radius:30px; overflow:hidden; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }



.sf-vender-list-pic { width:220px; min-height:150px; background-repeat:no-repeat; background-size:cover; background-position:center; position:relative; }



.sf-vender-list-info { width:calc(100% - 220px); padding:30px; position:relative; }



.sf-vender-list-info .sf-venders-title { margin:0px; }



.sf-vender-list-info .sf-venders-address .fa { margin-right:5px; }







.sf-vender-list-info .sf-ow-pro-rating { line-height:1; margin: 10px 0px 15px; }











.sf-vender-list-info .sf-pro-check { display: inline-block; vertical-align: middle; margin-right: 10px; }



.sf-vender-list-info .sf-pro-check span { text-align: center; width: 26px; height: 26px; line-height: 26px; display: block; background-color: #ffb600; color: #000; font-size: 14px;



    border-radius: 50%; }



.sf-vender-list-info .sf-pro-favorite { display: inline-block; line-height:1; vertical-align: middle; margin-right: 10px; }



.sf-vender-list-info .sf-pro-favorite a { font-size: 26px; color:#ffb600; }



.sf-vender-list-info .sf-ow-pro-rating span { display: inline-block; padding-right: 2px; color: #ffb600; font-size: 16px; }



















.action-dropdown .action-button { color:#022279; border:none; padding:5px 10px; background:none; color:#333;  border-radius:5px; -webkit-border-radius: 5px; }



.action-dropdown .action-button:focus { color:#022279;}



.action-dropdown .dropdown-menu { border:none; padding:5px 0px; margin-top:12px; left:auto; right:100%; margin-right:-50px; -webkit-box-shadow: 0 0 10px 5px rgba(0,0,0,0.5);



box-shadow: 0 0 12px 3px rgba(0,0,0,0.1);}



.action-dropdown .dropdown-menu:after { content:""; position:absolute; top:-7px; right:25px; width: 0; height: 0; border-left:7px solid transparent; border-right: 7px solid transparent;border-bottom:7px solid #fff; }



.action-dropdown .dropdown-menu > li > a { padding:5px 15px; font-family:'Poppins'; font-size:12px; color:#99a3aa; }







.action-dropdown .dropdown-menu > li > a i {  margin-right: 5px;  font-size: 16px; vertical-align: middle;  color: #293742; }



.action-dropdown .dropdown-menu > li > a:hover { background:none;  color:#000; }



.action-dropdown .dropdown-menu > li > a:hover i { color:#000; }



.action-dropdown.dropdown-left { width: auto; position: absolute; top: 25px; right: 20px; }



.action-dropdown.dropdown-left .fa { vertical-align: middle;}



.action-dropdown.dropdown-left .dropdown-menu { top:0; margin:0 10px 0 0; right:35px;}



.action-dropdown .dropdown-menu:after { top:10px; right:-14px;  border-top:7px solid transparent; border-bottom: 7px solid transparent;  border-left: 7px solid #fff; }











.job_listings.job_listings-two { list-style:none; margin:0px; border:none; }







.job_listings.job_listings-two li.job_listing { border-radius:10px; border:1px solid #ddd; border-left-width:3px; border-left-style:solid; 

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'border-left-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>;

padding:30px; font-size:16px; margin-bottom:30px; 



}









.job_listings.job_listings-two li.job_listing .job-comapny-logo { width:70px; height:70px; padding:0; border:1px solid #eee; border-radius:10px !important; -webkit-border-radius: 10px !important; }



.job_listings.job_listings-two li.job_listing .job-comapny-logo img { border-radius:5px !important; -webkit-border-radius:5px !important; }







.job_listings.job_listings-two .job-comapny-info .position { width: auto; float: none; margin-right: 150px; padding: 0px; margin-bottom:10px; }



.job_listings.job_listings-two .job-comapny-info .position h3 { font-size:24px; line-height:1.2; }







.job_listings.job_listings-two .job-comapny-info {padding-top: 0px; padding-left:90px; }



.job_listings.job_listings-two .job-type {  position: absolute;  top:25px;  right:80px;  background: #edfafe;  border-radius: 5px;  padding: 5px 10px;  color: #4eccf3; font-weight:normal; }



.job_listings.job_listings-two .job-type .fa {  margin-right:5px; }







.job_listings.job_listings-two .job-comapny-info .meta { padding:0px; width:30%; display:inline-block; }



.job_listings.job_listings-two .job-comapny-info .meta li.date { text-align:left; background:none; padding:0px; }







.job_listings.job_listings-two .job-comapny-info .job-location { width:30%; display:inline-block; }



.job_listings.job_listings-two .job-comapny-info .job-location .fa { margin-right:5px; }



.job_listings.job_listings-two .job-comapny-info .job-amount { width:30%; display:inline-block; }



.job_listings.job_listings-two .job-comapny-info .job-amount span {  color:#e82d2d; }



.job_listings.job_listings-two .job-comapny-info .job-amount .fa { margin-right:5px;  }



.job_listings.job_listings-two .job-comapny-info .position .company strong { font-size:18px; color:#a0a0a0; }







.job_listings.job_listings-two .job-comapny-info .job-label { position:absolute; top:25px; right:30px; }











/*Contact us*/

.sf-contacts-col { margin-bottom:30px; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;  }

.sf-contact-info-box{ width:100%; border-radius: 30px; background-color: #fff; box-shadow: 0px 0px 30px rgba(46, 13, 79, 0.1); text-align: center; padding: 40px 30px; border-bottom-width:4px; border-bottom-style:solid; border-bottom-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>

;}



.sf-contact-info-box .sf-contact-info .sf-title{font-size: 24px; margin: 20px 0px;}



.sf-contact-info-box .sf-contact-info p { margin:0px auto 0px; max-width:250px; }





.sf-contact-icon{position: relative;z-index: 1; margin-bottom: 40px;}



.sf-contact-icon:after{content: ''; width: 84px; height: 84px; left: 50%x; top: 0px; position: absolute; background-color: #f5f6fa; border-radius: 50%; z-index: -1; transform: translateX(-50%);margin-left: -20px;}







.sf-contact-icon span{display: block;line-height: 60px;}











.sf-contact-form{max-width: 960px; margin: 0px auto;}



.sf-contact-icon span img{height: 60px;}







.sf-contact-form .form-control{border-radius: 14px; border: 2px solid #c2c8d7; height: 50px; background-color: transparent;}



.sf-contact-form textarea.form-control{height: 190px;}



.sf-contact-form .sf-contact-submit-btn{ max-width: 260px; margin: 0px auto;}

.sf-contact-form .sf-contact-submit-btn .btn { width:100%; }





.sf-map-social-block{padding: 50px; background-color: #f8f5ff; border-radius: 30px; box-shadow: 0px 0px 30px rgba(46, 13, 79, 0.1); max-width: 960px; margin: 0px auto; position: relative;}



.sf-map-social-block h2{max-width: 600px; margin: 0px auto 30px;}



@media only screen and (max-width:991px) {  

.sf-map-social-block h2 { max-width: 600px; margin: 10px 40px 30px; font-size: 30px; line-height: 1.3; }

}



@media only screen and (max-width:480px) {  

.sf-map-social-block h2 { font-size:22px; line-height: 1.2; }

}





.sf-con-social{margin: 0px;}







.sf-con-social li{display: inline-block; margin-right: 20px;}



.sf-con-social li:last-child{margin-right: 0px;}







.sf-con-social li a{display: block; border-radius: 8px; font-size: 18px; line-height: 18px; color: #fff; padding: 12px 40px;}

.sf-con-social li a img{padding-right: 5px;}

.sf-con-social li a.sf-fb{background-color: #1768d4;}

.sf-con-social li a.sf-twitter{background-color: #1ebce9;}

.sf-con-social li a.sf-pinterest{background-color: #d63127;}

.sf-con-social li a.sf-linkedin{background-color: #0e72a3;}

.sf-con-social li a.sf-digg {background-color:#222; }





.sf-con-social-pic span{display: inline-block; border-radius: 50%; border: 3px solid <?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; overflow: hidden;}



@media only screen and (max-width:991px) {  

.sf-contact-info-wrap .row { -ms-flex-wrap: wrap !important; flex-wrap: wrap !important; -ms-flex-pack: center; justify-content: center; } 

.sf-contacts-col { width:50%; } 

.sf-con-social { width: 80%; margin: 0px 10%; } 

.sf-con-social li { margin-bottom:30px; }

}



@media only screen and (max-width:767px) {  

.sf-con-social li { margin: 0px 15px 20px; }

}



@media only screen and (max-width:620px) {  

.sf-con-social li { margin: 0px 15px 20px !important; min-width: 72%; }

}



@media only screen and (max-width:575px) {  

.sf-contacts-col { width:100%; }

.sf-con-social li { margin: 0px 0px 20px !important; }

.sf-con-social li a {padding: 12px 10px;}

}







.img-pos-1{position: absolute; left: 180px; top: -40px;}

.img-pos-2{position: absolute; left: 40px; top: 60px;}

.img-pos-3{position: absolute; left: 80px; top: 180px;}





.img-pos-4{position: absolute; right: 180px; top: -40px;}

.img-pos-5{position: absolute; right: 40px; top: 60px;}

.img-pos-6{position: absolute; right: 80px; top: 180px;}



@media only screen and (max-width:991px) {  

.img-pos-2 { left:20px; }

.img-pos-5 { right:20px;}

.img-pos-3 { left:60px;}

.img-pos-6 { right:60px; }

}



@media only screen and (max-width:767px) {  

.img-pos-1 { left:20%;}

.img-pos-4 { right:20%;}

}



@media only screen and (max-width:575px) {  

.img-pos-2 { left:10px; }

.img-pos-5 { right:10px;}

}

@media only screen and (max-width:480px) {  

.img-pos-3 { left: 30px; }

.img-pos-6 { right: 30px; }

}







/*Sf Map*/



.sf-map-wrap{height: 430px; background-size: cover; background-repeat: no-repeat; background-color:#022279; position: relative; margin-top: -130px; margin-bottom: -70px;}



.sf-map-icon{position: absolute; top: 50%; left: 50%; transform: translate(-50% -50%)}







/*Blog Grid*/







.sf-blog-style-1 .post-bx{background-color: #f9fafd; border-radius: 15px; border-bottom-width: 3px; border-bottom-style: solid; border-bottom-color: #022178; margin-bottom: 30px; 

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'border-bottom-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>

}



.sf-blog-style-1 .post-bx .post-thum{border-radius: 15px; overflow: hidden;}



.sf-blog-style-1 .post-info{background:none;}







.sf-blog-style-1 .post-info .post-categories{position: relative; margin-top: -46px;  margin-bottom: 20px;}







.sf-blog-style-1 .post-info .post-categories a{display: inline-block; padding: 5px 20px; color: #fff; text-transform: uppercase; border-radius:10px; background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; margin-right: 8px; font-size: 14px;}



.sf-blog-style-1 .post-info .post-categories a:last-child{margin-right: 0px;}











.sf-blog-style-1 .post-meta{border: 0px;  padding: 0px; margin: 0px;}



.sf-blog-style-1.blog-post .post-meta ul{margin: 0px 0px 10px 0px; float:none;}



.sf-blog-style-1 .post-title{font-size: 24px;}



.sf-blog-style-1.blog-grid.blog-post .post-date{width: inherit;background: none; margin: 0px;}



.sf-blog-style-1.blog-list.blog-post .post-date{width: inherit;background: none; margin: 0px;}



.sf-blog-style-1.blog-post .post-date span{background: none; padding: 0px; font-size: inherit; display: inherit; vertical-align: inherit;}



.sf-blog-style-1.blog-post .post-meta ul li{color: #595959;position: relative; padding-right: 10px;}



.sf-blog-style-1.blog-post .post-meta ul li:last-child{padding-right: 0px;}



.sf-blog-style-1.blog-post .post-meta ul li:after{content: '|'; position: absolute; right: 0px; top: 0px;}



.sf-blog-style-1.blog-post .post-meta ul li:last-child:after{display: none;}



.sf-blog-style-1.blog-post .post-meta ul li a{color: #595959;}







/*BLog Detail*/



.sf-blog-style-1.blog-detail .post-bx{background-color: transparent; border-radius: 0px; border-bottom: 0px ;margin-bottom: 30px;}



.sf-blog-style-1.blog-detail.blog-post .post-date{width: inherit;background: none; margin: 0px;}



.sf-detail-disc-list{margin: 10px 0px 20px 0px; list-style: decimal; list-style-position: inside;}



.sf-detail-disc-list li{padding-bottom: 5px;}



.sf-blog-style-1.blog-detail .post-info { padding: 30px 0px 0px;}







.sf-blog-style-1.blog-detail blockquote{background-color: #f0f0fb; border-radius: 20px; border-left: 3px solid #022279; padding: 30px;}



.sf-blog-style-1.blog-detail blockquote:before{display: none;}



.sf-blog-style-1.blog-detail blockquote h4{font-size: 24px; margin-top: 0px; margin-bottom: 15px;}



.sf-blog-style-1.blog-detail blockquote .quoter{text-transform: uppercase; font-size: 16px; font-weight: 600;}







.sf-blog-style-1.blog-detail .sf-con-social-wrap{display: flex; justify-content: space-between;}



.sf-blog-style-1.blog-detail .sf-con-social{margin-bottom: 30px;}







/*BLog Tags*/



.sf-post-tags{margin: 30px 0px; display: flex; justify-content: start;}



.sf-post-tags h4{margin: 0px 30px 0px 0px;}



.sf-post-tags ul{margin: 0px; list-style: none;}



.sf-post-tags ul li{display: inline-block;}



.sf-post-tags li a{display:block; margin-right: 10px;border-radius: 12px; color: #595959; font-size: 16px;line-height: 20px; border: 1px solid #e2e5ec; padding: 8px 20px;}











.sf-pd-sm-media{margin: 40px 0px;}



.sf-pd-sm-media .sf-pd-img{border-radius: 12px; overflow: hidden;}







/*Blog post meta icon style*/



.sf-blog-style-1.blog-post .post-meta.sf-icon-post-meta ul li:after{display: none;}



.sf-blog-style-1.blog-post .post-meta.sf-icon-post-meta ul li i{color:#ffb600;}







/*BLog Post Comment Section*/



.sf-blog-comment-wrap .comment-respond {padding: 40px;border: 0px;background-color: #f8f5ff;}



.sf-blog-comment-wrap .comments-area .comment-form p input[type="text"],



.sf-blog-comment-wrap .comments-area .comment-form p textarea {



    border-radius: 14px;



    border: 2px solid #c2c8d7;



    height: 50px;



    background-color: #fff;



    padding: 10px;



}







.sf-blog-comment-wrap .comments-area p:before{display: none;}



.sf-blog-comment-wrap .comments-area .comment-form p textarea{height: 190px;}







.sf-blog-comment-wrap .comments-area .comment-form p.comment-form-author{width: 50%;}



.sf-blog-comment-wrap .comments-area .comment-form p.comment-form-email{width: 50%;}



.sf-blog-comment-wrap .comments-area .comment-form p.comment-form-url{width: 100%;}



.sf-blog-comment-wrap .comments-area .comment-form .sf-btn-large{width: auto;}







.sf-blog-comment-wrap ol.comment-list li.comment .comment-meta::before{display: none;}



.sf-blog-comment-wrap ol.comment-list li.comment .comment-body::before,



.sf-blog-comment-wrap ol.comment-list li.comment .comment-body::after{display: none;}







.sf-blog-comment-wrap ol.comment-list li.comment .comment-author .fn {color: #022279;font-size: 20px;text-transform: capitalize;}



.sf-blog-comment-wrap ol.comment-list li.comment .comment-meta a{ color: #000; }







.sf-blog-comment-wrap ol.comment-list li.comment .comment-body {



    padding: 0px;



    margin-left: 130px;



    border: 0px;



}



.sf-blog-comment-wrap ol.comment-list li.comment .comment-author .avatar {



    left: -130px;



    width: 106px;



    height: 106px;



    border-radius: 12px;



    -webkit-border-radius: 12px;



    border: 0px;



}







.sf-blog-comment-wrap ol.comment-list li.comment .reply a {



    position: absolute;



    top: 0px;



    right: 0px;



    margin-top: 0px;



    color: #000;



    font-weight: normal;



    background-color: #ffb600;



    padding: 15px 30px 15px 15px;



    border-radius: 10px;



    line-height: 0px;



}







.sf-blog-comment-wrap ol.comment-list li.comment .reply a::before {



    content: "\f178";



    font-weight: normal;



    color: #000;



    margin-right: 10px;



    position: absolute;



    right: 0px;



    top: 50%;



    transform: translateY(-50%);



}







.sf-blog-comment-wrap .comments-area .comments-title{font-size: 30px; font-weight: normal; text-transform: capitalize;}



.sf-blog-comment-wrap .comments-area .comments-title span{



    color: #ffb600;



}



























.sf-job-benner { position: relative; background-color:#f8f5ff; }



.banner-job-row { background-size: cover;  background-position: center center;  position: relative; }



.sf-banner-job-heading-wrap { display: table; position: relative; width: 100%; max-width: 1170px;margin: auto; text-align: center; }



.sf-banner-job-heading-area { display: table-cell; padding: 50px 15px; vertical-align: middle; }



.sf-banner-job-heading-large { font-size:36px; margin-bottom: 15px; font-weight: 300; color:#022279; }







.sf-banner-job-logo-pic { width:110px; margin:10px auto 20px; border-radius:10px;  }



.sf-banner-job-logo-pic img { width:100%; border-radius:10px; }







.sf-banner-job-dutation { list-style:none; margin: 0px auto 110px; }



.sf-banner-job-dutation li { display:inline-block; padding: 0px 15px; border-right:1px solid #777; font-size: 18px; line-height:1.2; margin-bottom:20px; }



.sf-banner-job-dutation li:last-child { border:none;  }







.sf-banner-job-dutation li .jobs-timing { color:#022279; }







.sf-banner-job-dutation li .jobs-date-label { color:#58aa22; background-color:#deedd4; display:inline-block; padding:7px 12px; border-radius:10px; margin-left:10px; }











.sf-job-details-fileds-two { border-radius:30px; border:1px solid #ddd5eb; overflow:hidden; background:#fff; box-shadow: 0 0 20px rgba(105, 85, 138, 0.24); margin: -152px auto 50px;



z-index: 1; position: relative;  }



.sf-job-details-fileds-two ul { display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; margin: 0px -2px -1px; }







.sf-job-details-fileds-two ul li { padding:25px 20px 30px 40px; display:block; width:33.333%; margin-right: -1px; border:1px solid #ddd5eb; }



.sf-job-details-fileds-two ul li span { padding: 0; display: block; width: auto; }



.sf-job-details-fileds ul li:nth-child(2n) { background-color: #fff; }











.sf-job-details-fileds ul li .job-meta-icon { float: left; margin-right: 20px;  margin-top:4px; }



.sf-job-details-fileds ul li .sf-job-meta-info{overflow: hidden;}



.sf-job-details-fileds ul li .job-meta-title { display: inline; margin: 0px; }



.sf-job-details-fileds ul li .job-meta-text { line-height: 1; }







.sf-job-details-fileds ul li .job-meta-text { line-height: 1; }











.job-gallery { list-style:none; margin:0px; }



.job-gallery li { width:25%;  padding:0px; float:left; position:relative; }



.job-gallery li .job-gallery-pic { background:#ddd; height:200px; background-size: cover; background-position: center;  background-image:url("inc/images/job-gallery/pic.jpg"); background-position: center; }



.job-gallery li .job-gallery-link { position:absolute; top:0px; left:0px; opacity:0; width: calc(100% - 30px); height:calc(100% - 30px); margin:15px; background:#032379; opacity:0; 



    font-size:50px; color:#fff; display: -ms-flexbox; display: flex; -ms-flex-pack: center;  justify-content: center; -ms-flex-align: center ; align-items: center ;



  



-webkit-transition: all 0.5s ease; 



-moz-transition: all 0.5s ease; 



-ms-transition: all 0.5s ease; 



-o-transition: all 0.5s ease; 



transition: all 0.5s ease;



}



.job-gallery li:hover .job-gallery-link { opacity:0.8; }







.job-gallery li:last-child .job-gallery-link { opacity:1; width: 100%; height: 100%; margin:0px; opacity:0.8;  }







.sf-pres-video-pic{position: relative;}



.sf-pres-video-pic img{border-radius: 10px;}



.sf-pres-video-pic .overlay-vid{background-color: #000; opacity: 0.5; position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%;border-radius: 10px; z-index: 1;}







.sf-pres-video-icon{display: inline-block; position: absolute; left: 50%; top: 50%; transform: translate(-50% , -50%); z-index: 2;}



.sf-pres-video-icon i{font-size:100px; color: #fff;}











.sf-btn-large2{



    font-size: 20px;



    color: #000;



    border: none;



    background-color: #ffb600; 



    border-radius: 6px;



    padding: 10px 30px;



    display: block;



    width: 100%;



    text-align: center;



}







.sf-jobdetail-blocks{margin-bottom: 30px;}



.sf-jobdetail-blocks .sf-title{margin-bottom: 20px;}



.sf-jobdetail-blocks .sf-con-social li{margin:0px 0px 15px 0px; display:block;text-align: center;}







.sf-related-jobs{border-radius: 10px; padding: 30px; background-color: #f2f0f7; border: 1px solid #e1dced;text-align: center;}







.sf-related-jobs .sf-related-job-pic{margin-bottom: 10px;}



.sf-related-jobs .sf-related-job-pic img{border-radius: 10px;}



.sf-related-jobs .sf-related-job-name{font-size: 18px; color: #2f2f30; font-family: 'sofia_prosemibold';}



.sf-related-jobs .sf-related-job-name span{background-color: #6dca2d; color: #fff; border-radius: 50%; padding: 2px;}



.sf-related-jobs .sf-related-job-rating span{display: inline-block;padding-right: 2px; color: #ffb600;font-size: 18px;}



.sf-related-jobs .sf-related-job-rating span.text-gray{color: #52504a;}



.sf-related-jobs .sf-related-job-rating span.sf-rating-lable{color: #969696;}











.sf-jobrelated-carousel .sf-jobs-section {box-shadow: none; margin-bottom: 0px; border:1px solid #ddd; }



.sf-jobrelated-carousel .sf-jobs-head .sf-jobs-media { box-shadow: none; }











































/*Responsive Css*/



@media only screen and (max-width:991px){



    .sf-jobdetail-sidebar{margin-top: 30px;}



    .sf-news-letter {display: block;}



    .sf-footer-bottom-section .sf-f-social{padding-left: 70px;}



    .sf-footer-bottom-section .sf-f-social::after {width: 60px;}



    .sf-rounded-sidebar{margin-right: 0px; margin-bottom: 10px;}



}







@media only screen and (max-width:767px){



    .sf-footer-bottom-section{display: block;}



    .sf-footer-bottom-section .sf-f-social {padding-left: 0px;}



    .sf-footer-bottom-section .sf-f-social::after {display: none;}



    .sf-f-logo{margin-bottom: 10px;}



}



@media only screen and (max-width:720px){



    .sf-news-l-form {min-width: auto;}



    .job_listings.job_listings-two .job-comapny-info .job-amount{width: 100%;}



    .job_listings.job_listings-two .job-comapny-info .position{margin-right: 0px;margin-top: 35px;}



    .job_listings.job_listings-two .job-type{right: auto; left: 120px;}



}







@media only screen and (max-width:640px){



    .sf-job-details-fileds-two ul li{width: 50%;}



    .sf-banner-job-heading-large {font-size: 24px;}



    .job-gallery li .job-gallery-pic{height: 130px;}



    .sf-news-l-form {min-width: auto;}



}



@media only screen and (max-width:540px){



    .job_listings.job_listings-two .job-comapny-info .meta,



    .job_listings.job_listings-two .job-comapny-info .job-location{width: 100%;}



    .job_listings.job_listings-two .job-comapny-info{padding-left: 0px;}



    .job_listings.job_listings-two li.job_listing .job-comapny-logo{float: none;}



    .job_listings.job_listings-two .job-comapny-info .position{margin-top: 10px;}



}



@media only screen and (max-width:480px){



    .sf-job-details-fileds-two ul li{width: 100%;}



    .job-gallery li{width: 50%;}



    .sf-footer-mid [class*="col-"]{width: 100%;}



    .sf-news-letter span{font-size: 20px; margin-bottom: 10px; display:block;}



    .sf-news-l-form{display: block;}



    .sf-news-l-form .form-control {border-radius: 12px;margin-bottom: 10px;}



    .sf-news-l-form .sf-sb-btn{margin: 0px; width: 100%;}



}



@media only screen and (max-width:420px){



    .sf-search-result-title{margin-bottom: 20px;}



    .sf-blog-style-1 .post-info{padding-left: 20px; padding-right: 20px;}



}







@media only screen and (max-width:340px){



.sf-banner-job-dutation li .jobs-date-label{margin-top: 5px;}



}











.sf-profile-banner { border-top:1px solid #ddd; }



.sf-proBnr-pic { height:440px; border-radius: 30px; background-image: url("../images/banner/pro-banner.jpg")  }



.sf-proBnr-row  { padding: 50px 0px; position: relative; }



.sf-proBnr-row:before  { content:""; position: absolute; left: 100%; top: 0px; margin-left:-250px; width: 5000px; height: 100%; background:#022279; 

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>}







.sf-provi-pic { width: 175px; height: 175px; border-radius:100%; margin:0px auto 20px; position:relative;  }

.sf-provi-pic .sf-pro-check { position: absolute;  bottom: -12px; left: 50%; z-index: 1; margin: 0px -15px; }



.sf-provi-pic img { width:100%; height:100%; border-radius:100%; object-fit:cover; object-position:center; }





@media only screen and (max-width:991px){

.sf-provi-pic { width: 150px; height: 150px; border-radius:100%; margin:0px auto 20px; }

.sf-proBnr-row::before { content: ""; position: absolute; left: 50%; bottom: 0px; margin-left: -50vw; width: 100vw; height: 25% !important; top:auto; }

}





.sf-provi-name { margin: 0; }



.sf-provi-tagline { font-size: 18px; margin-bottom: 5px; }







.sf-provi-gallery { color: #000; display: table; margin:0px auto 10px; border-bottom: 1px solid #000; line-height: 1.2; }



.sf-provi-rating {color: #ffb600; margin-bottom: 15px; }







.sf-provi-social { display: table; margin:0px auto 30px;}







.sf-provi-social ul { float: none; overflow:hidden; border-radius:5px; }







.sf-provi-btn .btn { margin: 0px 10px; }



@media only screen and (max-width:575px) {

.sf-provi-btn .btn { display: table; margin: 10px auto; }

}







.sf-page-scroll-wrap2 { padding: 0px; border-top: 1px solid #ddd; border-bottom: 1px solid #ddd; margin-bottom:60px;  }



.sf-page-scroll-wrap2 .sf-page-scroll-nav { margin: 0px; border: none; }







.sf-page-scroll-wrap2 .sf-page-scroll-nav ul li a { color: #222; font-size: 16px; font-weight:600; }





@media only screen and (max-width:991px){

.sf-page-scroll-wrap2 .sf-page-scroll-nav ul li { display:table-cell; }

}











.sf-shadow-box { -webkit-box-shadow: 0 0 10px 5px rgba(0,0,0,0.05); box-shadow: 0 0 10px 5px rgba(0,0,0,0.05); }



.sf-border-box { border: 1px solid #eaeaea;  }



.sf-radius-10 { border-radius: 10px; }











.sf-ow-provider-sidebar .sf-ow-provider-wrap { margin-left:15px; margin-bottom: 0px;  }

.sf-ow-provider-sidebar .sf-ow-provider-wrap .sf-ow-provider { border:1px solid #ddd; box-shadow: none; }



.sf-ow-provider-sidebar .sf-verified-label { bottom: 80%; }





.sf-ow-provider-sidebar .owl-controls { margin-top:20px; }







.sf-sidebar-title { margin:0px 0px 20px; }











.sf-provi-title { margin:0px 0px 20px; }







.sf-divider-line { height: 2px; background:#ddd; position: relative; margin-bottom: 40px;  }



.sf-divider-line:after { content:""; position: absolute; top: 0px; left: 0px; height: 2px; width:100px; 

<?php echo (service_finder_theme_get_data($data['h3-size'],'color') != '') ? 'background-color:'.service_finder_theme_get_data($data['h4-size'],'color').'; ' : ''; ?>



}







.sf-provi-cat { font-size:18px; margin-bottom:20px; }



.sf-provi-cat strong { color: #555; }







.sf-provi-bio-text { border-bottom:1px solid #ddd; }







.sf-provi-bio-text + .social-share-icon2  { margin-top:30px; }











.social-share-icon2 { display: -ms-flexbox; display: flex; -ms-flex-align: center ; align-items: center ; -ms-flex-wrap: wrap; flex-wrap: wrap; }



.social-share-icon2 .social-share-cell { width: auto; }



.social-share-icon2 .social-share-cell:first-child { margin-right: 10px; }



@media only screen and (max-width:1200px){

.social-share-icon2 .social-share-cell:first-child { width:100%; margin-bottom: 5px; } 

.sf-provi-social-row .social-share-icon2 { width: 100%; border-top: 1px solid #ddd; padding-top: 15px; margin-top: 30px;}

}

 





.social-share-icon2 ul { margin: 0px; }

.social-share-icon2 ul li { margin: 0px 0px 10px;  }







.sf-provi-service-list { list-style:none; margin: 0; border:1px solid #ddd; border-radius: 10px; margin-bottom:30px; overflow:hidden;  }



.sf-provi-service-list li { border-top:1px solid #ddd; padding: 30px; position: relative; }

.sf-provi-service-list li:first-child { border-top:none; }

.sf-provi-service-list .sf-grp-title { padding: 15px 30px; font-weight: 600; color: #000; background-color: #f0f2f8; font-size: 16px; letter-spacing: 1px; }





.servi-leRi-btn .btn { padding:3px 12px; }

.servi-le-btn .btn:first-child { border-radius:10px 0px 0px 10px;  }

.servi-le-btn .btn:last-child { border-radius:0px 10px 10px 0px;  } 





.sf-provi-service-ttle { margin:0px 0px 10px 0px; }



.sf-provi-service-ttle span { padding:2px 10px; background: #f1f2f6; color: #666; font-size: 12px; text-transform: uppercase; border-radius: 10px; }



.sf-provi-service-price,



.sf-provi-service-hour { display: inline-block; margin-right: 20px; }



.sf-provi-service-hour i { margin-right: 5px; }



.sf-provi-service-price { color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; }

.addcouponcode-wrap .addcouponcode {  color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; }







.sf-provi-toggle-btn { display: inline-block; border-radius: 10px; width: 20px; height: 20px; background: #000; color: #fff; font-size: 20px; line-height: 1; text-align: center; font-family: arial; cursor: pointer; font-weight:400; -webkit-transition: all 0.5s ease; -moz-transition: all 0.5s ease; -ms-transition: all 0.5s ease; -o-transition: all 0.5s ease; transition: all 0.5s ease;  }

.active-pro-ser .sf-provi-toggle-btn { -moz-transform: rotate(45deg); -webkit-transform: rotate(45deg); -o-transform: rotate(45deg); -ms-transform: rotate(45deg); transform: rotate(45deg); }







.sf-provi-descriptio { display:none; padding-top:10px; }











.sf-provi-service-top { display: table; width: 100%; }



.sf-provi-service-left,

.sf-provi-service-right{ display: table-cell; vertical-align: middle; }



.sf-provi-service-right {  white-space: nowrap; text-align: right; }

.sf-provi-service-right .btn {  padding: 5px 15px; font-size: 13px; margin-left: 10px; height:32px; } 



@media only screen and (max-width:575px){

.sf-provi-service-top { display: block;  }



.sf-provi-service-left,

.sf-provi-service-right{ display: block;  }

.sf-provi-service-right { padding-top:30px; text-align:left; }   

}





.sf-provi-service-count { display: inline-block; max-width:150px; vertical-align: middle; margin-right: 15px; }



.bootstrap-touchspin-up,



.bootstrap-touchspin-down { padding:5px 10px; border: 1px solid #ddd !important; background: none; }



.sf-provi-service-count .form-control,



.sf-provi-service-count .bootstrap-touchspin-postfix { height: 32px;  font-size: 12px; line-height: 20px; padding: 5px 5px; text-align: center; min-width:40px; }



.sf-provi-service-count .bootstrap-touchspin-postfix { padding: 5px 10px; }



.sf-provi-service-top.active + .sf-provi-service-bottom .sf-provi-descriptio { display: block; padding-top: 10px; }







.sf-provi-coInfo-map { height:290px; border-radius:10px; background-image: url("../images/map.jpg"); border-radius:10px; overflow:hidden; }







.sf-list-business-hours ul { margin:-8px 0px 0px; }



.sf-list-business-hours li { display: table; width: 100%; margin-bottom: 10px; padding-bottom: 10px; }



.sf-list-business-hours span:first-child { display: table-cell; text-align: left; font-weight: 300; width: 25%; font-size: 16px; }



.sf-list-business-hours span { display: table-cell; text-align: right; font-size: 16px; color: #555757; font-weight: 500; }



.sf-list-business-hours span:first-child b { float: right; font-weight: 300; }











.sf-provi-coInfo-hour.sf-list-business-hours { padding: 0px; }



.sf-provi-coInfo-hour.sf-list-business-hours span:last-child { text-align:right; }



.sf-provi-coInfo-hour.sf-list-business-hours li { padding-bottom: 0px; }







.sf-provi-coInfo-box {  }







.sf-video-box { position: relative; }



.sf-video-pic { height:190px; background-size: cover; background-position: center; border-radius: 10px;  }



.sf-video-play-btn { position: absolute; bottom: 0px; right: 0px; width: 60px; height:60px; line-height: 60px; font-size: 24px; text-align: center; background:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>; border-radius:10px 0px 10px 0px; }



.sf-video-play-btn i { color:#fff; }



.sf-videoBox-full .sf-video-pic { height: 250px; } 





.sf-provi-articles-list { list-style:none; margin:0px; }



.sf-provi-articles-list li { margin-bottom:30px; }



.sf-provi-art-left { width:25%; font-size:14px; border-right:1px solid #ddd; display:block; }



.sf-provi-art-pic { width:90px; border-radius:10px; margin-bottom:15px;  }



.sf-provi-art-pic img { width:100%;  border-radius:10px; }



.sf-provi-art-right { width:75%; padding-left:60px; -ms-flex-align: center ; align-items: center;  }



.sf-provi-art-title { margin:0px 0px 5px; display:table; }

.sf-provi-art-text { margin-bottom:5px; }

.sf-provi-art-btn { color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;  }





@media only screen and (max-width:1200px){

.sf-provi-articles-full .sf-provi-art-left { width:30%; }

.sf-provi-articles-full .sf-provi-art-right { width:70%; padding-left: 30px; }

}



@media only screen and (max-width:767px){

.sf-provi-articles-full li { width:100% !important; }

}



@media only screen and (max-width:767px){

.sf-provi-articles-full li { width:100% !important; }

}



@media only screen and (max-width:575px){



.sf-provi-art-left { width:100%; display:block !important; border:none; }

.sf-provi-art-right { width:100%; padding-left:0px; }

.sf-provi-art-left:after { content:""; display:block; clear: both; }   

.sf-provi-art-pic { width: 50px; border-radius: 10px; margin-bottom: 15px; float: left; margin-right: 15px; } 





.sf-provi-articles-full .sf-provi-art-left { width:100%; display:block !important; border:none; }

.sf-provi-articles-full .sf-provi-art-right { width:100%; padding-left:0px; }

.sf-provi-articles-full .sf-provi-art-left:after { content:""; display:block; clear: both; }   

.sf-provi-art-pic { width: 50px; border-radius: 10px; margin-bottom: 15px; float: left; margin-right: 15px; }    

    

}











.sf-provi-art-date { width:100%; }



.sf-provi-art-comment { width:100%; }







.sf-custom-new .nav-tabs { border-bottom: 2px solid rgba(0,0,0,.2); }



.sf-custom-new .nav-tabs > li > a { <?php echo (service_finder_theme_get_data($data['h4-size'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['h4-size'],'color').'; ' : ''; ?> padding:15px 0px; margin-right:40px; }



.sf-custom-new .nav-tabs > li.active > a { <?php echo (service_finder_theme_get_data($data['h4-size'],'color') != '') ? 'color:'.service_finder_theme_get_data($data['h4-size'],'color').'; ' : ''; ?>}



.sf-custom-new .nav-tabs { margin:0px; width: 100%; }



.sf-custom-new .nav-tabs > li.active > a::after { <?php echo (service_finder_theme_get_data($data['h4-size'],'color') != '') ? 'background-color:'.service_finder_theme_get_data($data['h4-size'],'color').'; ' : ''; ?> }







.sf-languages-list-new li span { width:46px; height: 46px; line-height: 40px; text-align: center; margin-right:10px; display: inline-block; border: 1px solid #ddd; border-radius:30px; }







.sf-features-list-new li .features-icon { width:46px; height: 46px; line-height: 40px; text-align: center; margin-right:10px; display: inline-block; border: 1px solid #ddd; border-radius:30px;  }







.sf-rating-averages-wraps { color: #555; }



.sf-rating-categories-new { color: #555; }







.sf-rating-outer-border { border: 1px solid #ddd; padding:5px 20px; border-radius:10px; margin-bottom: 30px; }







.sf-review-box { padding:30px; border-radius:10px; margin-bottom: 60px; }







.sf-review-pic { width:42px; height: 42px; border-radius: 30px; float: left; overflow: hidden;}







.sf-review-info { padding-left:20px; overflow: hidden; }







.sf-review-name { margin: 0px 0px 5px; }



.sf-review-feedback { line-height: 1; }







.sf-review-date { clear: both; padding: 10px 0px; }







.sf-review-footer { background: #fff; padding:20px; border-radius:10px; margin-bottom:-60px; }







.sf-review-red-less { color: #ffb600; cursor: pointer; }







.sf-review-rating { margin: 0px -5px 30px; list-style: none; }



.sf-review-rating li { width: 50%; padding: 0px 5px; }



.sf-review-rating li .sf-ow-pro-rating { color: #ffb600; }



.sf-review-footer { line-height: 1.4; }







.sf-provi-coInfo-box { margin-top: 30px; }



.sf-provi-coInfo-box h6 { margin: 0px 0px 5px }







.sf-qes-answer-list { list-style: none; margin: 0px; }



.sf-qes-answer-list li { margin-bottom: 20px; }



.sf-qestion-line { margin: 0px 0px 10px; position: relative; padding-right:20px; }



.sf-qestion-line .fa { position: absolute; top:4px; right: 0px; cursor:pointer; padding:1px 2px;}
.nav-active .sf-qestion-line .fa:before { content: "\f068"; }


.sf-answer-line { line-height: 1.4; }









.sf-provi-bio-box:after { content:""; display:block; clear:both; }

.sf-provi-bio-left { width:350px; float: left; } 

.sf-provi-bio-info { border: 1px solid #f2f3f4; background:#f9f9f9; padding:50px 30px; text-align: center; }







.sf-provi-bio-right { padding-left: 50px; overflow: hidden; }



.sf-provi-bio-right .sf-provi-btn { margin-bottom:15px; }



.sf-provi-bio-right .sf-provi-btn .btn { margin:0px; margin-right:15px; margin-bottom:15px; }



.sf-provi-social-row { padding-top:30px; }







.sf-provi-social-row  .sf-provi-social { margin:0px; }



.sf-provi-social-row  .social-share-icon2 { width:auto; }





@media only screen and (max-width:991px){ 

.sf-provi-bio-left { width:250px; } 

}





@media only screen and (max-width:767px){ 

.sf-provi-bio-left { width:200px; }

.sf-provi-bio-right { padding-left:30px; }

}



@media only screen and (max-width:575px){ 

.sf-provi-bio-left { width:auto; float:none; margin-bottom:30px; }

.sf-provi-bio-right { padding-left:0px; float:none; }

}



.sf-provi-qform { padding:30px; background:#f8fafe; border:1px solid #ddd; }

.sf-provi-qform .has-feedback label ~ .form-control-feedback { top: 38px; }

.sf-provi-qform .btn-linking { margin:0px 15px; }





.sf-provi-articles-full { margin:0px -15px; }



.sf-provi-articles-full li { width:50%; padding:0px 15px; }





.servicebox.selected { background-color:#f1eff8; }





.sf-proBnrfull-container { width: 100%; padding: 0px; }



.sf-proBnrfull-row { display: table; width: 100%; height:650px; }

.sf-proBnrfull-left,

.sf-proBnrfull-right { display: table-cell; vertical-align: middle; padding: 50px; }

.sf-proBnrfull-right { width:600px; background-color:<?php echo (!empty($data['color-scheme'])) ? esc_html($data['color-scheme']): ''; ?>; }

.sf-proBnrfull-left { background-image: url("../images/banner/pro-banner.jpg"); background-position: center; background-size: cover; }





@media only screen and (max-width:1200px){ 

.sf-proBnrfull-right { width:500px; }

}



@media only screen and (max-width:991px){ 

.sf-proBnrfull-row { display:block; height:auto; }

.sf-proBnrfull-left,

.sf-proBnrfull-right { display:block; width: auto; }

.sf-proBnrfull-left { min-height:400px; }    

}



.sf-proBnrfull-heading { font-size: 46px; line-height: 1.4; color:#fff; margin: 0px 0px 10px;  }

.sf-proBnrfull-tagline { color:#fff; font-size: 22px; }



.sf-provi-coInfo-map-full { height: 530px; position:relative;}

.sf-provi-coInfo-map-full #gmap_wrapper { position: absolute; top: 0; left: 0; width: 100%; height: 100% !important;}

.sf-provi-coInfo-map-full #googleMap { height: 100% !important;}



.sf-bot-divider { padding-bottom:30px !important; border-bottom: 1px solid #ddd; }



.sf-videoBox-full .sf-video-pic { height: 250px;  }



.sf-qes-answerList-full { margin: 0px -15px; }

.sf-qes-answerList-full li { width: 50%; padding: 0px 15px; }



.servi-leRi-btn .btn { padding:3px 12px; color:#fff !important; <?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>

 }

.servi-leRi-btn .btn i { color:#fff; }

.servi-le-btn .btn:first-child { border-radius:10px 0px 0px 10px;  }

.servi-le-btn .btn:last-child { border-radius:0px 10px 10px 0px;  }





@media only screen and (max-width:991px){ 

.sf-provi-coInfo-map-full { height: 300px; margin-bottom:30px; }    

}



@media only screen and (max-width:767px){ 

.sf-qes-answerList-full li { width:100%;  }   

}





.sf-caty-pic { height:500px; position: relative; border-radius:30px; margin-bottom: -120px; background-image:url("../images/cat-pic.jpg"); background-size: cover; background-position: center; }



.sf-caty-cirle { position:absolute; bottom:-40px; right:20px; width: 90px; height: 90px; line-height: 90px; text-align: center; background: #fff; font-size: 30px; 

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?>



border-radius: 50px; 

}



.sf-caty-cirle a { color:inherit; display:inline-block; -webkit-transition: all 0.5s ease; -moz-transition: all 0.5s ease; -ms-transition: all 0.5s ease; -o-transition: all 0.5s ease; transition: all 0.5s ease; }

.sf-caty-cirle a:hover { -moz-transform: scale(1.2); -webkit-transform: scale(1.2); -o-transform: scale(1.2); -ms-transform: scale(1.2); transform: scale(1.2); }

.sf-caty-btn { position:absolute; bottom:-40px; right:120px; color:#fff; font-weight: 600; }



@media only screen and (max-width:991px){ 

.sf-caty-pic { margin-bottom:30px; }   

}



@media only screen and (max-width:600px){ 

.sf-caty-pic { height:300px; } 

}





.sf-allCaty-grid-wrap { 

<?php

	echo (service_finder_theme_get_data($data,'color-scheme') != '') ? 'background-color:'.service_finder_theme_get_data($data,'color-scheme').'; ' : '';

?> 

}



.sf-allCaty-grid-wrap { padding-top:150px; padding-bottom:80px; }



.sf-catyitem-pic { height:220px; }



.sf-catyitem-box:first-child { margin-bottom: 30px; }

.sf-catyitem-pic { border-radius:10px; }

.sf-catyitem-title { color:#fff; text-align: center; }



.sf-caty-icon-col { text-align: center; color: #fff; }

.sf-caty-icon-box { width: 130px; height: 130px; line-height:105px; background: #fff; text-align: center; margin:0px auto 40px; border-radius:100px; border: 10px solid #fab200; }

.sf-caty-icon-title { color: #fff; margin: 0px 0px 15px;  }





.sf-answer-line { display: none;} 

  

  

.wp-block-search .wp-block-search__label { color:#022279; }





.sf-job-description ul { list-style:none; }

.sf-job-description ul li { position: relative; padding-left:20px; line-height:42px; }

.sf-job-description ul:before { content:""; width:8px; height:8px; background: #000; position:absolute; top:18px; left: 0px; }





.sf-seach-vertical + .sf-search-result-area .sf-map-row #gmap_wrapper { height:300px !important; padding: 15px; border:1px solid #ddd; background: #fff; margin-bottom:30px; }

.sf-seach-vertical + .sf-search-result-area .sf-map-row #googleMap { height: 100% !important; }





.sf-contact-form .captchaouter { display:table; margin: auto; }





.sf-captcha-wrap { max-width: 430px; clear: both; margin: auto; }



.sf-captcha-wrap .fa-pencil { display:none; }



.sf-captcha-wrap .form-control { border-radius:14px !important; }







.google-map-leftslide { position: absolute; top: 0px; left: 0px; width:100%; height: 100%; z-index: 99; background:#f9f6ff; }

.google-map-leftslide-close { position: absolute; top: 0px; right: 0px; width: 30px; height: 30px; line-height:30px; text-align:center; background:#EF2F33; color:#fff; z-index:1; } 

.google-map-leftslide-close:hover,

.google-map-leftslide-close:active,

.google-map-leftslide-close:focus { color:#fff; } 



.sf-srhmap-style { display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;  width: 100%; clear: both;  margin-top: 20px;  border-top: 1px solid #ddd; padding-top: 25px;  -ms-flex-pack: space-between;  justify-content: space-between;  }



.search-result-listing-two { width: auto; float: none; }



.sf-search-result-four .sort-filter-bx { width: 100%; padding: 0px; background:noe; border:none; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; -ms-flex-pack: space-between;  justify-content: space-between; background:none;  }





.sf-bookngservice-fours ul.timeslots li.active { background: #022279; color: #fff; } 



@media only screen and (max-width:991px){ 

    .google-map-leftslide { width:100%; }  

}

 

#catresultfound { border: 1px solid rgba(255, 255, 255, 0.46); padding: 40px 30px; border-radius: 10px; text-align: center; color: rgba(255, 255, 255, 0.66); font-size: 20px; } 

.sf-proBnr-left { margin-bottom:30px; } 





@media only screen and (max-width:991px){ 

.sf-provi-coInfo-hour.sf-list-business-hours { margin-top:30px; }    

}





 



.sf-categores-four-wrap .row {  display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;  -ms-flex-pack: center;  justify-content: center; }

.sf-categores-four-wrap .row:after,

.sf-categores-four-wrap .row:before { display:none; }



@media only screen and (max-width:991px){ 

.sf-categores-four-wrap .section-head .row > [class*="col-"] { width:100%;  }   

}



.home-featured-providers { display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;  -ms-flex-pack: center;  justify-content: center; }



.home-featured-providers:after,

.home-featured-providers:before { display:none; }



.joblisting-home { display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;  -ms-flex-pack: center;  justify-content: center; }

.joblisting-home li { width:calc(50% - 30px); margin-left:15px !important; margin-right:15px !important; padding-left:15px; padding-right:15px; }

.joblisting-home li .job-type { width: auto;  margin:0px !important; right:30px !important; }

.joblisting-home li .meta li.date { white-space:nowrap; }

.joblisting-home.job_listings-two .job-comapny-info .job-label { top: auto; left: 50px; bottom: -20px; right: auto; }

.joblisting-home.job_listings-two .meta { width:38% !important; float:none; display:inline-block; }

.joblisting-home.job_listings-two .meta li.date { margin:0px !important; display:inline-block; }





.jobs-view-more { text-align:center; } 



  

.job_filters .showing_jobs.wp-job-manager-showing-all  { display:none !important;  } 



#bookingservices li{ display:none; }

#showLess { display:none; }



.job_listing_preview .container { width:100%; max-width:100%; }





#jobgallery-dragdrop:after { display:none; }



.job-gallery-wrap .rwmb-plupload_image-wrapper { width:70%; margin-left:auto; margin-bottom:30px; }





.job-manager-form .rwmb-uploaded { margin:0px -15px; }



.job-manager-form .rwmb-image-bar { line-height:1; }



.job-manager-form .drag-drop-info { margin: 30px 0px 0px; }





.features-four .why-use-sf .icon-bx-md { background-color: #ffb600; border-color:#ffb600; }



.sf-recent-post-wrap .job_listings { margin-left:0px; margin-right:0px; }  



.sf-recent-post-wrap .job_listings .row { display: -ms-flexbox; display: flex;  -ms-flex-wrap: wrap; flex-wrap: wrap; }  

.sf-recent-post-wrap .job_listings:after,

.sf-recent-post-wrap .job_listings:before { display:none; }  

.sf-recent-post-wrap .row.job_listings > [class*="col-"] { width:33.333%; } 

@media only screen and (max-width:1200px){ 

.sf-recent-post-wrap .row.job_listings > [class*="col-"] { width:50%; } 

} 

@media only screen and (max-width:650px){ 

.sf-recent-post-wrap .row.job_listings > [class*="col-"] { width:100%; } 

} 









.job-position-field { display:none;}





.sf-caty-listResult-wrap .sf-ow-provider-wrap { margin-left: 15px; }

.sf-caty-listResult-wrap .row { display: -ms-flexbox; display: flex;  -ms-flex-wrap: wrap; flex-wrap: wrap; }

.sf-caty-listResult-wrap .row:after,

.sf-caty-listResult-wrap .row:before{ display:none; }

@media only screen and (max-width:1200px){ 

.sf-caty-listResult-wrap .row .col-md-4 { width:50%; } 

} 

@media only screen and (max-width:650px){ 

.sf-caty-listResult-wrap .row .col-md-4 { width:100%; } 

} 







    

.col-md-five { width: 20%; padding-left: 15px; padding-right: 15px; } 

@media only screen and (max-width:1200px){ 

.col-md-five { width:25%;  }

}

@media only screen and (max-width:991px){ 

.col-md-five { width:33.333%;  }

}

@media only screen and (max-width:600px){ 

.col-md-five { width:50%;  }

.sf-ow-img .sf-ow-title { font-size:12px; }

} 



.sf-search-result-area .listing-grid-box .row { display: -ms-flexbox; display: flex;  -ms-flex-wrap: wrap; flex-wrap: wrap;  }

.sf-search-result-area .listing-grid-box .row:after,

.sf-search-result-area .listing-grid-box .row:before{ display:none; }











.sf-search-result-area { padding:30px 30px 30px 30px; background-color:#f9f6ff; background-color:<?php echo (!empty($data['bg-color'])) ? esc_html($data['bg-color']): ''; ?>; }



@media only screen and (max-width:1300px){ 

.sf-search-result-area .listing-grid-box [class*="col-md-"] {  width: 50%; }

} 

@media only screen and (max-width:650px){ 

.sf-search-result-area .listing-grid-box [class*="col-md-"] {  width:100%; }

} 



@media only screen and (max-width:991px){

#masonry .card-container { width:50%; }

}



@media only screen and (max-width:600px){

#masonry .card-container { width:100%; }

}



.sf-contact-info-wrap > .row { display: -ms-flexbox; display: flex;  -ms-flex-wrap: wrap; flex-wrap: wrap; }

.sf-contact-info-wrap > .row:after,

.sf-contact-info-wrap > .row:before{ display:none; } 

.sf-contact-info-wrap > .row > [class*="col-"] { display: -ms-flexbox; display: flex; margin-bottom:30px; }

 

@media only screen and (max-width:991px){

.sf-contact-info-wrap > .row > [class*="col-"] { width:50%; }

}

@media only screen and (max-width:600px){

.sf-contact-info-wrap > .row > [class*="col-"] { width:100%; }

}





.sf-allCaty-grid-wrap .section-content > .row { display: -ms-flexbox; display: flex;  -ms-flex-wrap: wrap; flex-wrap: wrap;  -ms-flex-pack: center;  justify-content: center;   }

.sf-allCaty-grid-wrap .section-content > .row:after,

.sf-allCaty-grid-wrap .section-content > .row:before{ display:none; } 

.sf-allCaty-grid-wrap .section-content > .row [class*="col-"] { width:25%; } 



@media only screen and (max-width:1200px){

.sf-allCaty-grid-wrap .section-content > .row [class*="col-"] { width:33.333%; }

}

@media only screen and (max-width:991px){ 

.sf-allCaty-grid-wrap .section-content > .row [class*="col-"] { width:50%; }

}

@media only screen and (max-width:480px){ 

.sf-allCaty-grid-wrap .section-content > .row [class*="col-"] { width:100%; }

}





#quoteuploader-dragdrop { display: table; width: 100%; }



.servi-le-btn .fa-arrow-up:before { display:inline-block; content:"\e607"; font-family: 'simple-line-icons';  }

.servi-le-btn .fa-arrow-down:before { display:inline-block; content:"\e607"; font-family: 'simple-line-icons'; -moz-transform: rotate(180deg); -webkit-transform: rotate(180deg); -o-transform: rotate(180deg); -ms-transform: rotate(180deg); transform: rotate(180deg); }  





.post-navigation .nav-links { display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; -ms-flex-pack:space-between;  justify-content:space-between; }





.sf-summery-box { position: fixed; width: 450px; right: 30px; bottom: 30px; background: #fff; border: 1px solid #ddd; padding: 30px 10px 20px; border-radius: 10px; z-index:999; -webkit-box-shadow: 0 0 30px 10px rgba(0,0,0,0.1); box-shadow: 0 0 30px 10px rgba(0,0,0,0.1);   }

.sf-summery-inr { max-height:200px;  overflow:auto; padding:0px 20px; }

.sf-summery-box ul { list-style:none; margin:0px; }

.sf-summery-box ul li { display:table; border-bottom:1px solid #ddd; width:100%; }

.sf-summery-box ul li:last-child { border-bottom:none; display: -ms-flexbox; display: flex;  -ms-flex-wrap: wrap; flex-wrap: wrap;  -ms-flex-pack: space-between;  justify-content: space-between; padding-top: 5px; color:#000; font-weight:bold; }







.sf-summery-box ul li [class*="sf-sum-cel-"] { display:table-cell; padding:5px 0px; color:#777; }

.sf-summery-box ul li [class*="sf-sum-cel-"]:last-child { text-align:right; }

.sf-summery-box ul li .sf-sum-cel-one { color:#000; font-weight:500; }

.sf-summery-box ul li .sf-sum-cel-one strong { display:block; line-height: 18px; font-size:14px; }

.sf-summery-box ul li .sf-sum-cel-one span { font-size:13px; margin-right:5px; display:inline-block; color:#777; text-transform:uppercase; }

.sf-summery-box ul li .sf-sum-cel-four { color:#000; font-weight:500; }



.sf-summery-total { font-size:18px; margin:0px 20px; display: -ms-flexbox; display: flex;  -ms-flex-pack: space-between;  justify-content: space-between; background: #eceef4; }

.sf-summery-total [class*="sf-sum-cel-"]:first-child { font-weight:600; color:#000; padding: 10px;}

.sf-summery-total [class*="sf-sum-cel-"]:last-child { font-weight:600; color:#000; padding: 10px; text-align:right;  }



.sf-suumery-close { position: absolute; right: 0px; top: -32px; background: red; color: #fff; width: 24px; height: 24px; line-height: 0; border: none; border-radius: 5px; }

.sf-suumery-close .fa { font-size:12px; }



@media only screen and (max-width:480px) {

 .sf-summery-box { right:15px; bottom: 15px; width:calc(100% - 30px); }   

}



.sf-verified-label { opacity:0; cursor:pointer;  position: absolute; bottom:100%; left: 50%;  padding: 2px 10px; background-color: #000; color: #fff; font-size: 12px; border-radius: 5px; -moz-transform: translateX(50%); -webkit-transform: translateX(-50%); -o-transform: translateX(-50%); -ms-transform: translateX(-50%); transform: translateX(-50%); 

-webkit-transition: all 0.5s ease; -moz-transition: all 0.5s ease; -ms-transition: all 0.5s ease; -o-transition: all 0.5s ease; transition: all 0.5s ease; }



.sf-verified-label:after { content:""; position:absolute; top:100%; left:50%; margin:0px -5px; width: 0; height:0px; border-style: solid; border-width: 5px 5px 0 5px; border-color: #000 transparent transparent transparent; }



.sf-pro-check:hover .sf-verified-label{ opacity:1; }





/*======================

All categories

=======================*/

.aon-page-benner-area2 {

  background-color: #f2f5fa;

  text-align: center;

  padding: 80px 0px;

  position:relative;

  width:100vw;

  left:50%;

  margin-left:-50vw;

}

.aon-page-benner-area2 .aon-banner-large2-title {

  color: #224073;

  font-size: 26px;

  font-weight: 800px;

  max-width: 530px;

  margin-left: auto;

  margin-right: auto;

  font-family: "sofia_prosemibold";

}

.aon-all-categories-wrap2 {

  padding: 90px 0px 60px;

}

.aon-all-cat-block {

  position: relative;

  background-position: center center;

  background-size: cover;

  height: 440px;

  border-radius: 30px;

  margin-bottom: 30px;

  margin-right: 20px;

}

.aon-all-cat-block .aon-cat-quantity {

  position: absolute;

  left: 30px;

  top: 30px;

  z-index: 1;

}

.aon-all-cat-block .aon-cat-quantity span {

  width: 75px;

  height: 75px;

  line-height: 75px;

  text-align: center;

  border-radius: 50%;

  background-color: #fff;

  display: block;

  font-size: 30px;

  color: #022279;

  font-family: "sofia_prosemibold";

  position: relative;

  z-index: 1;

  box-shadow: 7px 7px #ffb600;

}

.aon-all-cat-block .aon-cat-quantity span i {

  font-style: normal;

}

.aon-all-cat-block .aon-cat-name {

  position: absolute;

  right: -20px;

  bottom: 30px;

}

.aon-all-cat-block .aon-cat-name a {

  font-size: 18px;

  color: #000;

  background-color: #fff;

  padding: 12px 20px;

  border-radius: 6px;

  box-shadow: 4px 0px #073088;

}











.nav-links::after { display:none; }

.nav-links {

    display: -ms-flexbox; 

    display: flex;  

    -ms-flex-wrap: wrap; 

    flex-wrap: wrap; 

    -ms-flex-pack: space-between;  

    justify-content:space-between; 

}

.nav-links .nav-next,

.nav-links .nav-previous {

   width:50%;

}

.post-navigation .nav-previous .post-title, 

.post-navigation .nav-next .post-title { margin-top: 0; }



.nav-links .nav-next a { text-align:right; position:relative; display:block; padding-right: 40px; margin:10px 0px; }

.nav-links .nav-next a:before { content:"\f105"; position:absolute; top:0px; right:0px; font-family:"FontAwesome"; border:1px solid #ddd; width:30px; height:30px; line-height:28px; text-align:center; border-radius:30px; font-size: 20px; color:#222; 

-webkit-transition: all 0.5s ease;

-moz-transition: all 0.5s ease;

-ms-transition: all 0.5s ease;

-o-transition: all 0.5s ease;

transition: all 0.5s ease;}



.nav-links .nav-previous a { text-align:left; position:relative;  display:block; padding-left: 40px; margin:10px 0px; }

.nav-links .nav-previous a:before { content:"\f104"; position:absolute; top:0px; left:0px; font-family:"FontAwesome"; border:1px solid #ddd; width:30px; height:30px; line-height:28px; text-align:center; border-radius:30px; font-size: 20px; color:#222;  

-webkit-transition: all 0.5s ease;

-moz-transition: all 0.5s ease;

-ms-transition: all 0.5s ease;

-o-transition: all 0.5s ease;

transition: all 0.5s ease;} 



.nav-links .nav-next:hover a:before { background:#feb500; }



.nav-links .nav-previous:hover a:before { background:#feb500; } 


.bx-search .search-form { display: -ms-flexbox; display: flex; position: relative; }

.bx-search .search-form label { flex-grow: 1; margin:0px; }

.bx-search .search-form .search-field { padding: 10px 15px; border: 1px solid #ccc;  height: 40px; outline: none; border-radius:10px; width:100%; } 

.bx-search .search-form .search-submit { background-color: #FF9D00; color: #000; padding: 7px 15px; border: none; position: absolute; right: 0px; top: 0px;  border-radius: 0px 10px 10px 0px;  height: 40px; }





.sf-f-copyright p { color:<?php echo (!empty($data['bottom-footer-text-color'])) ? esc_html($data['bottom-footer-text-color']): '#777'; ?>; }



.sf-average-question { width:28px; height:28px; line-height:30px; display:block; background-color:#4a9c44; color:#fff; font-size:14px; border-radius: 50%; margin:20px auto 0px; }







.job_listings.job_listings-two .job-comapny-info .meta { width: auto !important; } 

.job_listings.job_listings-two .job-comapny-info .meta,

.job_listings.job_listings-two .job-comapny-info .job-location, 

.job_listings.job_listings-two .job-comapny-info .job-amount { width: auto; display: inline-block;  margin-right:25px; } 

.sf-job-sidebar-blocks .sf-title em { font-style:normal; }

.sf-job-sidebar-blocks em { font-style:normal; }



@media only screen and (max-width:991px){ 

.job_listings.job_listings-two li.job_listing { width:100%; }

}

@media only screen and (max-width:720px){ 

.job_listings.job_listings-two .job-type { right:auto !important; left: 120px; top: 50px; }

}







#header-part.sf-header-inner.sf-search-header { height:99px; }

#header-part.sf-header-inner.sf-search-header .main-bar { position:fixed; }  

#header-part.sf-header-inner.sf-search-header .header-nav .nav > li > a,

#header-part.sf-header-inner.sf-search-header.is-sticky .header-nav .nav > li > a { padding:35px 15px !important; } 



#header-part.sf-header-inner.sf-search-header .extra-nav,

#header-part.sf-header-inner.sf-search-header.is-sticky .extra-nav {  padding:25px 0; } 



#header-part.sf-header-inner.sf-search-header .logo-header {  margin-top:18px; } 

#header-part.sf-header-inner.sf-search-header.is-sticky .logo-header { margin:18px 0; }  



@media only screen and (max-width: 991px) {

#header-part.sf-search-header .is-sticky .navbar-toggle { margin: 24px 0; }

.header-nav .nav > li > a { padding: 12px 15px !important; } 

}





.sf-pro-check { position:relative; display:table; }

.sf-pro-check span {

    width: 30px;

    height: 30px;

    line-height: 30px;

    display: block;

    background-color:<?php echo (!empty($data['seconday-color-scheme'])) ? esc_html($data['seconday-color-scheme']): ''; ?>;

    color: #000;

    font-size: 16px;

    border-radius: 50%;

}



