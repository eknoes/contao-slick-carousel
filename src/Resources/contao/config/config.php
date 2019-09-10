<?php

$GLOBALS['TL_CTE']['media']['Carousel'] = 'Eknoes\ContaoSlickCarousel\ContentElement\SlickCarousel';

if (TL_MODE == 'FE')
{
    $GLOBALS['TL_CSS'][] = 'bundles/contaoslickcarousel/slick.css|static';
    $GLOBALS['TL_CSS'][] = 'bundles/contaoslickcarousel/slick-theme.css|static';
    $GLOBALS['TL_CSS'][] = 'bundles/contaoslickcarousel/custom.css|static';
    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/contaoslickcarousel/slick.min.js|static';
}
