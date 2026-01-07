<?php
ob_start(null, 0, false);
error_reporting(0);
ini_set('memory_limit', '-1');
session_start();
header('Access-Control-Allow-Origin: *');

/* Resolve the PHP header function */
header('Access-Control-Allow-Origin: *');
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

try {
	// Detect Protocol: Check for Cloud Run's X-Forwarded-Proto or standard HTTPS
	if (
		(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
		$_SERVER['SERVER_PORT'] == 443 ||
		(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
	) {
		$protocol = "https://";
	} else {
		$protocol = "http://";
	}

	$domainName = $_SERVER['HTTP_HOST'];

	// Determine if we are in a subdirectory based on the script location vs the domain root
	// This helps with localhost wamp setups vs production root domains
	if ($domainName == 'localhost' || strpos($domainName, '127.0.0.1') !== false) {
		// Assuming standard wamp/xampp structure where project is a folder
		// Adjust this if your local setup is different
		$temp_baseurl = '/blacspicemedia';
	} else {
		// For Cloud Run (*.run.app) or Custom Domains, usually served from root
		$temp_baseurl = '';
	}

	define("PRODUCTION", true); // Default to true for cloud run 
	define("PROTOCOL", $protocol);
	define("DOMAIN", $domainName);
	define("SALT", "");
	define("COLOR", "");

	$minify = '';
	// Logic to enable minification only if needed, can be simplified
	if (PRODUCTION == true || PRODUCTION == 1) {
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); // Log errors but hide from user
		$minify = '.min';
	} else {
		error_reporting(E_ALL);
		$minify = '';
	}

	define("BASEURL", PROTOCOL . DOMAIN . $temp_baseurl . '/');
	define("COMMON_API", BASEURL . 'common/api/');
	define("CALLURL", BASEURL . 'common/api/api.php');
	// define("API_URL", $temp_api_url);
	define("BASEURL_ASSETS", BASEURL . 'assets/');
	define("BASEURL_CSS", BASEURL_ASSETS . 'css/');
	define("BASEURL_JS", BASEURL_ASSETS . 'js/');
	define("BASEURL_JS_CUSTOM", BASEURL_JS . 'custom/');
	define("BASEURL_JS_API", BASEURL_JS . 'api/');
	define("BASEURL_IMG", BASEURL_ASSETS . 'img/');
	define("PLACEHOLDER_IMG", BASEURL_IMG . 'placeholder/img.png');
	define("BASEURL_ICONS", BASEURL_IMG . 'icons/');
	define("MINIFY", $minify);

	// Set sessions if needed
	// if (!isset($_SESSION)) {
	// 	session_start();
	// }
	// $_SESSION['legend_api_base_url'] = $temp_api_url;
	$_SESSION['legend_base_url'] = BASEURL;
	$_SESSION['legend_salt'] = SALT;


} catch (Exception $e) {
}
?>