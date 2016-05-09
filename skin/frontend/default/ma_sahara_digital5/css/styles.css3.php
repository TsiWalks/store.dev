<?php
    header('Content-type: text/css; charset: UTF-8');
    header('Cache-Control: must-revalidate');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
    $url = $_REQUEST['url'];
?>

@-webkit-keyframes moveFromTop {
    from {
        -webkit-transform: translateY(-100%);
    }
    to {
        -webkit-transform: translateY(0%);
    }
}
@-moz-keyframes moveFromTop {
    from {
        -moz-transform: translateY(-100%);
    }
    to {
        -moz-transform: translateY(0%);
    }
}
@-ms-keyframes moveFromTop {
    from {
        -ms-transform: translateY(-100%);
    }
    to {
        -ms-transform: translateY(0%);
    }
}

@-webkit-keyframes smallToBig{
    from {
        -webkit-transform: scale(0.1);
    }
    to {
        -webkit-transform: scale(1);
    }
}
@-moz-keyframes smallToBig{
    from {
        -moz-transform: scale(0.1);
    }
    to {
        -moz-transform: scale(1);
    }
}
@-ms-keyframes smallToBig{
    from {
        -ms-transform: scale(0.1);
    }
    to {
        -ms-transform: scale(1);
    }
}

.ma-box-content .actions .actions-inner,
.dropit  .dropit-trigger .dropit-submenu,
.footer-static-top .link-follow li a span,
.top-cart-content
{
-ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
filter: alpha(opacity=0);
opacity: 0;	
}
.newproductslider-item :hover .actions .actions-inner,
.products-grid .item-inner:hover .actions .actions-inner,
.dropit  .dropit-trigger:hover .dropit-submenu,
.footer-static-top .link-follow li a:hover span,
.top-cart-contain:hover .top-cart-content
{
-ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
filter: alpha(opacity=100);
opacity: 100;
}

.block,
.pt_custommenu div.pt_menu,
button.button span,
.wrapper_box #continue_shopping,
.wrapper_box #shopping_cart 
{
-moz-border-radius:4px;
-webkit-border-radius:4px;
border-radius:4px;
}

.top-cart-wrapper
{
-moz-border-radius:5px;
-webkit-border-radius:5px;
border-radius:5px;
}

{
transition: 0.3s ease-in-out;
-moz-transition: 0.2s ease-in-out;
-webkit-transition: 0.2s ease-in-out;
-o-transition: 0.2s ease-in-out;
-ms-transition: 0.2s ease-in-out
}

.ma-upsellslider-container .ma-upsellslider-item img:hover,
.ma-relatedslider-container .relatedslider-item img:hover,
.banner-left img:hover,
.banner-home-content .box-img img:hover,
.ma-bestseller-products img:hover,
.ma-onsale-products img:hover
{
-ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=80)";
filter: alpha(opacity=80);
opacity: 0.8;
}