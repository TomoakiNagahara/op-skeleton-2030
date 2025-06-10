<?php
/**	op-skeleton-2030:/asset/config/php.php
 *
 * @created    2022-11-09  op-skeleton-2020:/config/php.php
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

//	...
error_reporting(E_ALL);
ini_set('short_open_tag', 'On' );
ini_set('display_errors', 'Off');
ini_set('log_errors'    , 'Off');

//	If you want to override the above settings, write them in the "_php.php" file.
if( file_exists( $path = __DIR__.'/_php.php' ) ){
	require_once($path);
}
