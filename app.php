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

/**	Set the application root path.
 *
 */
$_SERVER['APP_ROOT'] = getcwd();

/**	Bootstrap process.
 *
 */
if( file_exists( $file = __DIR__.'/asset/bootstrap/index.php' ) ){
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
