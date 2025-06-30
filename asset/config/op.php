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

/**	Generate AppID
 *
 * Generate an AppID based on $seed.
 * Set to an extremely long string.
 * The longer it is the harder it is to predict.
 *
 * @var string $seed
 */
$seed = __FILE__;
if( strpos($seed, '/var/') !== false ){
	echo "Seed is expected, please change it: {$seed}" . PHP_EOL;
	exit(__LINE__);
}
$app_id = defined('_IS_CI_') ? 'CI' : substr(md5($seed), 0, 10);

/**	AppID
 *
 * The AppID is used to encrypt the cookie.
 * Do not expose it to end users.
 *
 * @var string
 */
define('_APP_ID_' , $app_id);
