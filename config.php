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
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$domainName = $_SERVER['HTTP_HOST'];
	// $domainName = str_replace("www.", "", $domainName);

	define("PRODUCTION", false); // true [or] false <---------------check here
	define("PROTOCOL", $protocol);
	define("DOMAIN", $domainName);
	define("SALT", "");
	define("COLOR", "");

	/* this has been folder structure 'not browser url' */
	$temp_baseurl = '';
	// $check 		  = explode('/', $_SERVER['REQUEST_URI']);
	if (DOMAIN == 'localhost') {
		$temp_baseurl = '/blacspicemedia';
	} else if (DOMAIN == 'blacspicemedia.com' || DOMAIN == 'www.blacspicemedia.com') {
		$temp_baseurl = '';
	} else if (DOMAIN == 'blacspicemedia-212363378304.asia-south1.run.app' || DOMAIN == 'www.blacspicemedia-212363378304.asia-south1.run.app') {
		$temp_baseurl = '';
	} else {
		$temp_baseurl = '/';
	}

	$minify = '';
	if (PRODUCTION == true || PRODUCTION == 1) {
		/* this function using PHP error */
		error_reporting(0);
		$minify = '.min';
	} else {
		$minify = '';
	}

	define("BASEURL", PROTOCOL . DOMAIN . $temp_baseurl . '/');
	define("COMMON_API", BASEURL . 'common/api/');
	define("CALLURL", BASEURL . 'common/api/api.php');
	define("API_URL", $temp_api_url);
	define("BASEURL_ASSETS", BASEURL . 'assets/');
	define("BASEURL_CSS", BASEURL_ASSETS . 'css/');
	define("BASEURL_JS", BASEURL_ASSETS . 'js/');
	define("BASEURL_JS_CUSTOM", BASEURL_JS . 'custom/');
	define("BASEURL_JS_API", BASEURL_JS . 'api/');
	define("BASEURL_IMG", BASEURL_ASSETS . 'img/');
	define("PLACEHOLDER_IMG", BASEURL_IMG . 'placeholder/img.png');
	define("BASEURL_ICONS", BASEURL_IMG . 'icons/');
	define("MINIFY", $minify);
	$_SESSION['legend_api_base_url'] = $temp_api_url;
	$_SESSION['legend_base_url'] = BASEURL;
	$_SESSION['legend_salt'] = SALT;


} catch (Exception $e) {
}
?>