<?php
/**
 * Plugin Name:       Epitrove Helper
 * Plugin URI:        http://wisdmlabs.com
 * Description:       Licensing addon for all epitrove products.
 * Version:           1.1
 * Author:            WisdmLabs
 * Author URI:        http://wisdmlabs.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       epitrove-helper
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

require_once __DIR__ . '/vendor/autoload.php'; 

function run_epitrove_helper()
{
    require plugin_dir_path(__FILE__).'includes/entities/class-epitrove-product.php';
    require plugin_dir_path(__FILE__).'includes/trait-third-party-developers.php';
    require plugin_dir_path(__FILE__).'includes/class-epitrove-license.php';
    \Licensing\EpitroveLicense::getInstance();
}

run_epitrove_helper();

// Check updates for epitrove-helper addon

$addOnUpdater = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/WisdmLabs/epitrove-helper',
    __FILE__,
    'epitrove-helper'
);

$addOnUpdater->setBranch('master');