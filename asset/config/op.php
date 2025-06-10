<?php
/**	op-skeleton-2030:/asset/config/op.php
 *
 * @created    2022-11-15  op-skeleton-2020:/asset/config/op.php
 * @porting    2025-06-09  op-skeleton-2030:/asset/config/op.php
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

/**	op skeleton app branch
 *
 * @var string
 */
define('_OP_APP_BRANCH_', '2030');

//	Calc App ID.
$app_id = substr(md5(__FILE__), 0, 10);

/**	AppID
 *
 * @var string
 */
define('_APP_ID_' , $app_id);
