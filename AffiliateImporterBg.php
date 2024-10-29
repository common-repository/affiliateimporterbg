<?php
/*
  Plugin Name: AffiliateImporterBg
  Description: This plugin allows you to import the products directly from Banggood in your Wordpress WooCommerce store and earn a commission!
  Version: 1.0
  Author: CR1000Team
  License: GPLv2+
  Author URI: http://cr1000team.com
 */
use Dnolbon\AffiliateImporter\AffiliateImporter;
use Dnolbon\AffiliateImporterBanggood\AffiliateImporterBanggood;
use Dnolbon\Twig\Twig;

require_once ABSPATH . 'wp-admin/includes/plugin.php';
require_once ABSPATH . 'wp-admin/includes/upgrade.php';

include __DIR__ . '/vendor/autoload.php';

if (!defined('AEIDN_FILE_FULLNAME')) {
    define('AEIDN_FILE_FULLNAME', __FILE__);
}

include_once __DIR__ . '/screenoptions.php';

// Twig
Twig::getInstance()->setTemplatePath(__DIR__ . '/templates');

AffiliateImporter::getInstance()->addImporter(
    new AffiliateImporterBanggood(__FILE__, basename(__FILE__))
);