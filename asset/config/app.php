<?php
/**	op-skeleton-2030:/asset/config/app.php
 *
 * @created    2019-02-20
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

/**	Return config array.
 *
 * @created   2019-12-12
 * @return    array        $config
 */
return [
	'title'     => 'The onepiece-framework app skeleton '._OP_APP_BRANCH_,
	'copyright' => 'Copyright 2009 All right reserved.',
	'app.phtml' =>  OP::isAdmin() ? true: false,
];
