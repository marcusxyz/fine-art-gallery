<?php

declare(strict_types=1);

require __DIR__ . ('/functions.php');
require __DIR__ . ('/arrays.php');

$pageTitle = "Berzelii Gallery Dept.";

$indexH1 = "Berzelii Gallery <br> Dept.";

$city = 'Gothenburg';

$footerContact = 'For all questions: ';

$mail = 'hello@gallerydept.com';

$heroDescription = getHeroDescription('Berzelii Gallery Dept', 'Gothenburg', count($artworks));
