<?php
spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();
/**
 * A map of classname => filename for SPL autoloading.
 *
 * @package AuthorizeNet
 */
$baseDir = __DIR__ ;
$coreDir = $baseDir . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR;
$httpDir = $baseDir . DIRECTORY_SEPARATOR . 'http' . DIRECTORY_SEPARATOR;
$jwtDir = $baseDir . DIRECTORY_SEPARATOR . 'jwt' . DIRECTORY_SEPARATOR;
$logDir = $baseDir . DIRECTORY_SEPARATOR . 'log' . DIRECTORY_SEPARATOR;
$payloadDigestDir = $baseDir . DIRECTORY_SEPARATOR . 'payloadDigest' . DIRECTORY_SEPARATOR;
$utilDir = $baseDir . DIRECTORY_SEPARATOR . 'util' . DIRECTORY_SEPARATOR;

$vendorDir = $baseDir . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR;

return array(
	'CybsAuthSdk\Authentication' => $coreDir . 'Authentication.php',
	'CybsAuthSdk\MerchantConfiguration' => $coreDir . 'MerchantConfiguration.php',
	'CybsAuthSdk\AuthException' => $coreDir . 'AuthException.php',
	'CybsAuthSdk\TokenGenerator' => $coreDir . 'TokenGenerator.php',
	'CybsAuthSdk\HttpSignatureGenerator' => $httpDir . 'HttpSignatureGenerator.php',
	'CybsAuthSdk\JsonWebTokenGenerator' => $jwtDir . 'JsonWebTokenGenerator.php',
	'CybsAuthSdk\JsonWebTokenHeader' => $jwtDir . 'JsonWebTokenHeader.php',
	'CybsAuthSdk\GlobalParameter' => $utilDir . 'GlobalParameter.php',
	'CybsAuthSdk\PropertiesUtil' => $utilDir . 'PropertiesUtil.php',
	'CybsAuthSdk\Logger' => $logDir . 'Logger.php',
	'CybsAuthSdk\PayloadDigest' => $payloadDigestDir . 'PayloadDigest.php',
	'CybsAuthSdk\JWT\JWT' => $jwtDir . 'php-jwt-master/src/PayloadDigest.php',
	'Firebase\JWT\JWT' => $vendorDir . 'firebase/php-jwt/src/JWT.php'
);
