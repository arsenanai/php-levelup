<?php
error_reporting( E_ALL );
ob_start( function ($buffer) {
	$buffer .= headers_sent() ? 'true' : 'false';
	$buffer .= print_r( headers_list(), true );
	// header_remove( 'Set-Cookie' );
	foreach( headers_list() as $header ){
		strtolower( $header );
		header( $header . '; Secure', true );
	}
	return $buffer;
} );

header( 'Set-Cookie: Test1=Test$%/&' );
header( 'Set-Cookie: Test2=Test$%/&' );
header( 'Set-Cookie: Test3=Test$%/&' );

print 'Hello World!';
