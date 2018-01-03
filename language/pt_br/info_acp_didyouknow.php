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
	'ACP_DYK_EDIT_WORD'				=> 'Editar Did-You-Know',
	'ACP_DYK_ENTER_WORD'			=> 'Você deve inserir um texto!',
	'ACP_DYK_EXPLAIN'				=> 'Aqui você pode inserir, editar ou deletar os textos Did-You-Know. Estes textos aparecerão em ordem aleatória na página viewforum.',
	'ACP_DYK_EXPLAIN_EDIT'			=> 'Aqui você pode inserir ou editar textos Did-You-Know.',
	'ACP_DYK_FORM_INVALID'			=> 'O texto enviado foi inválido. Tente enviar novamente.',
	'ACP_DYK_NEW_WORD'				=> 'Adicionar novo texto',
	'ACP_DYK_NO_WORD'				=> 'Nenhum texto selecionado para edição!',
	'ACP_DYK_TITLE'					=> 'Administração do Did-You-Know',
	'ACP_DYK_WORD'					=> 'Texto',
	'ACP_DYK_WORD_ADDED'			=> 'O texto foi adicionado com sucesso.',
	'ACP_DYK_WORD_EDIT'				=> 'Edite ou insira o texto aqui',
	'ACP_DYK_WORD_ID'				=> 'Id',
	'ACP_DYK_WORD_REMOVED'			=> 'O texto selecionado foi removido com sucesso.',
	'ACP_DYK_WORD_UPDATED'			=> 'O texto selecionado foi atualizdo com sucesso.',
	'ACP_DYK_REMOVE_TABLES'			=> 'Tabela Did you know removida com sucesso',
	'ACP_DYK_INSERT_FIRST_FILL'		=> 'Tabela Did-You-Know preenchida com valores básicos',
	'ACP_DYK_UPDATE'				=> 'Módulo Did you know atualizado com sucesso',
	'ADD_DYK'						=> 'Adicionar nova entrada',
	'EDIT_DYK'						=> 'Editar entrada',
	'LANGUAGE_SET'					=> 'Pacote de idioma',
	'LANGUAGE_SET_DEFAULT'			=> 'Independente',
	'LANGUAGE_SET_EXPLAIN'			=> 'Defina aqui o idioma em que o texto deve ser mostrado aos usuários.',
	'LANGUAGE_SET_SETTINGS'			=> 'Configurações do pacote de idiomas',
	'LOG_DYK_DELETE'				=> '<strong>"Did-You-Know?" texto número %s foi deletado</strong>',
	'LOG_DYK_SAVE'					=> '"Did-You-Know?" texto número %s foi editado',
	'LOG_DYK_SAVE_NEW'				=> 'Um novo texto "Did-You-Know" foi adicionado',

	// Permission
	'ACL_U_DID_YOU_KNOW'			=> 'Pode gerenciar os textos do "Did-You-Know?" ',
));
