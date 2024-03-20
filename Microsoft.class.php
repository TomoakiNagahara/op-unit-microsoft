<?php
/** op-unit-microsoft:/Microsoft.class.php
 *
 * @created    2024-01-05
 * @version    1.0
 * @package    op-unit-microsoft
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP\UNIT;

/** use
 *
 */
use OP\IF_UNIT;
use OP\OP_CORE;
use OP\OP_CI;

/** Microsoft
 *
 */
class Microsoft implements IF_UNIT
{
	/** use
	 *
	 */
	use OP_CORE, OP_CI;

	/** Microsoft Translate
	 *
	 */
	static function Translate()
	{
		//	...
		if(!OP()->Unit()->isInstalled('Microsoft_Translate') ){
			throw new \Exception('Unit of MicrosftTranslate is not install.');
		}

		//	...
		return OP()->Unit('Microsoft_Translate');
	}
}
