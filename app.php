<?php
/**	op-skeleton-2030:/app.php
 *
 * @genesis    2014-02-24  op-core-5
 * @rebirth    2025-06-08  op-skeleton-2030
 * @version    1.0
 * @package    op-skeleton-2030
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	namespace
 *
 */
namespace OP;

/**	Measure the execution time of this app.
 *
 */
define('_OP_APP_START_', microtime(true));

/**	For remote debug
 *
 * This global variable shows which file is being accessed during remote debugging.
 * For example, this helps clarify when JS or CSS files are accessed.
 * The most common confusion comes from the browser automatically requesting `favicon.ico`.
 *
 * @var string $_request_uri
 */
$_request_uri = $_SERVER['REQUEST_URI'] ?? null;

//	...
if( $_request_uri === '/favicon.ico' or strpos($_request_uri, '/.well-known/') === 0 ){
	//	...
	if( file_exists($path = ".{$_request_uri}") ){
		echo file_get_contents($path);
	}
	//	...
	return;
}

/**	Set the application root path.
 *
 */
define('_ROOT_GIT_', __DIR__.'/');
define('_ROOT_APP_', __DIR__.'/');

/**	Bootstrap process.
 *
 */
if( file_exists( $file = 'asset/bootstrap/index.php' ) ){
	//	Execute
	include_once($file);
}else{
	//	Git submodules have not been initialized.
	include_once('asset/init/guidance.php');
}

/**	The app is launched automatically.
 *
 */
OP()->App()->Auto();
