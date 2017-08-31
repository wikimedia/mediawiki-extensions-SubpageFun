<?php
/**
 * 'Subpage Fun' is a MediaWiki extension which defines some new parser functions to get
 * advanced information about subpages.
 *
 * Documentation: http://www.mediawiki.org/wiki/Extension:Subpage_Fun
 * Support:       http://www.mediawiki.org/wiki/Extension_talk:Subpage_Fun
 * Source code:   http://svn.wikimedia.org/viewvc/mediawiki/trunk/extensions/SubpageFun
 *
 * @license: ISC license
 * @author:  Daniel Werner < danweetz@web.de >
 *
 * @file SubpageFun.php
 * @ingroup SubpageFun
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'SubpageFun' );
	wfWarn(
		'Deprecated PHP entry point used for SubpageFun extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
} else {
	die( 'This version of the SubpageFun extension requires MediaWiki 1.29+' );
}
