<style media="screen">

 /*Global*/
    .maintenance {
        margin-left: auto;
        margin-right: auto;
        width: 400px;
    }
    .maintenance h1, .countdown {
        font-size: 20px;
    }
    .breadcrumb_bg {
        background-image: url(<?= $theme_config['img_bg'] ?>);
    }
 /*Footer*/
    .footer-area {
        background-image:radial-gradient(#CFCFCF, #fff);
        padding: 50px 0px 20px;
    }
    .footer-text p {
        color: #000;
        font-family: "Roboto", sans-serif;
        line-height: 1.929;
        font-size: 14px;
        margin-bottom: 0px;
    }
    .footer-area .single-footer-widget ul li a {
        color: #000;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        font-size: 15px;
    }
    .footer-area .single-footer-widget ul li a:hover {
        color: #000;
    }
    .krozix {
        background-image: repeating-linear-gradient(45deg, <?= $theme_config['theme_color'] ?>, <?= $theme_config['color_bg'] ?>);
        text-align: center;
        background-size: 800% 800%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: rainbow 8s ease infinite;
    }

    @keyframes rainbow { 
        0%{background-position:0% 50%}
        50%{background-position:100% 25%}
        100%{background-position:0% 50%}
    }
    .cta_part {
    background-image: url(<?= $theme_config['home_stats_img'] ?>);
    }

 /*Home*/
    .btn_1, .btn_3:hover:after, .btn_4, .button, .blog_item_img .blog_item_date, .main_menu .main-menu-item ul li .nav-link:before, .menu_fixed, .our_project .more_btn_iner:hover, .footer-area .single-footer-widget .click-btn, .footer-area .btn, .blog_part .single-home-blog .card .dot:after, .footer-area .single-footer-widget .click-btn, .footer-area .btn {
        background-color: <?= $theme_config['theme_color'] ?>;
    }
    .footer-area .copyright_part_text a, .section_tittle p, .btn_3:hover, .blog_area a:hover, .blog_area a :hover, .blog_details a:hover, .single-post-area .blog-author a:hover, .single_blog_post .single_blog .single_appartment_content p a, .dropdown .dropdown-menu .dropdown-item:hover, .dropdown:hover .dropdown-menu, .dropdown .dropdown-item:hover, .banner_part .banner_text h1 span, .our_service .single_service span, .about_part .about_part_text h5, .about_part .about_part_text ul li span, .experiance_part .about_text_iner .about_text_counter h2, .our_project .project_menu_item ul li:hover, .our_project .project_menu_item .active, .our_project .more_btn_iner, .footer-area .single-footer-widget ul li a:hover, .footer-area .copyright_part_text a, b, sup, sub, u, del, .genric-btn.primary:hover, .genric-btn.primary-border, .ordered-list li, .ordered-list-alpha li, .ordered-list-roman li, .default-select .nice-select .list .option.selected, .default-select .nice-select .list .option:hover, .form-select .nice-select .list .option.selected, .form-select .nice-select .list .option:hover, .blog_part .single-home-blog .card h5:hover, .copyright_part a, .contact-info .media-body h3 a:hover, .footer-area .single-footer-widget ul li a:hover, .footer-area .copyright_part_text a {
        color: <?= $theme_config['theme_color'] ?>;
    }
    .blog_right_sidebar .tag_cloud_widget ul li a:hover {
        background: <?= $theme_config['theme_color'] ?>;
    }
    ..our_project .more_btn_iner, .genric-btn.primary:hover, .genric-btn.primary-border, .single-input-primary:focus {
        border: 1px solid <?= $theme_config['theme_color'] ?>;
    }
    .genric-btn.primary, .genric-btn.primary-border:hover, .default-switch input+label, .primary-switch input:checked+label:before {
        background: <?= theme_config['theme_color']?>;
    }
    .generic-blockquote {
        border-left: 2px solid <?= theme_config['theme_color']?>;
    }
    .unordered-list li:before {
        border: 3px solid <?= theme_config['theme_color']?>;
    }
    .card p{
        color: #000;
    }
    .banner_part {
        background-image: url(<?= $theme_config['img_bg'] ?>);
    }
    .banner_part:after, .btn_1:hover, .breadcrumb:after{
        background-color: <?= $theme_config['color_bg'] ?>;
    }
    .cta_part:after{
        background-color: <?= $theme_config['color_bg'] ?>;
    }
    /*Navbar phone 1.0.1*/
    @media (max-width: 995px){
    .navbar-brand {
      display: none;
    }
}

    @media (min-width: 991px){
    .navbar-brand {
      display: block;
    }
}
</style>