<?php

/**
 * this is used to
 * load all required
 * libraries
 */
//set error reporting to zero
error_reporting(0);
/**
 * Created by PhpStorm.
 * User: rofi
 * Date: 06-Mar-18
 * Time: 6:23 PM
 */

// Load Config
require_once 'config/config.php';

// Load Helpers if any
require_once 'helpers/session_helper.php';
require_once 'helpers/url_helper.php';
require_once 'helpers/otp_helper.php';
require_once 'helpers/back_up_helper.php';
require_once 'helpers/csrf_helper.php';