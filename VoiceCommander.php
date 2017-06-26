<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'VoiceCommander' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['VoiceCommander'] = __DIR__ . '/i18n';
	//$wgExtensionMessagesFiles['VoiceCommander'] = __DIR__ . '/VoiceCommander.i18n.alias.php';
	wfWarn(
		'Deprecated PHP entry point used for Voice Commander extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);

	return true;
} else {
	die( 'This version of the Voice Commander extension requires MediaWiki 1.25+' );
}
