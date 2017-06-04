<?php

return array(
	/* This is a secure key that only you should know, an added layer of security for the image upload */
    'secure_key' => 'author12303',

    /* This is the url your output will be, usually http://www.domain.com/u/, also going to this url will be the gallery page */
    'output_url' => 'http://author.rest/i/',

    /* This is a redirect url if the script is accessed directly */
    'redirect_url' => 'http://author.rest/',

    /* This is a list of IPs that can access the gallery page (Leave empty for universal access) */
    'allowed_ips' => array('192.168.0.0', '0.0.0.0'),

    /* Page title of the gallery page */
    'page_title' => 'Gallery',

    /* Heading text at the top of the gallery page */
    'heading_text' => 'Gallery',
);
