<?php
/**
*
* @package phpBB Extension - Did You Know
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.5] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'DYK_TITLE'							=> 'Você sabia?',
	'DYK_HIDE'							=> 'Ocultar',
	'DIDYOUKNOW_HIDE_EXPLAIN'			=> 'Oculta até você decidir vê-lo novamente, ativando novamente na UCP',
	'DIDYOUKNOW'						=> 'Mostrar Did You Know em viewforum',
	'DIDYOUKNOW_HIDE'					=> 'A Mensagem do Did You Know <strong>está agora oculta</strong> até que você decida ver novamente ativando no UCP',
	'DIDYOUKNOW_BACK_TO_INDEX' 			=> 'Clique aqui para retornar ao índice',
));
