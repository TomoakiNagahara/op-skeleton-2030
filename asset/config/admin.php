<?php
/**	op-skeleton-2030:/asset/config/admin.php
 *
 * @created    2020-07-13
 * @rebirth    2025-06-13
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

//	Access with this IP address will enable developer mode.
define('_ADMIN_IP_', '192.168.0.1', true);

//	An error message will be sent to this email address.
define('_ADMIN_MAIL_', 'info@onepiece-framework.com', true);

//	This email address will be the from of the admin email.
define('_ADMIN_FROM_', 'noreply@onepiece-framework.com', true);
