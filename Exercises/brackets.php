<?php
class Solution {

	private $test_cases = [
		'[({})]',
		'[([)',
		'([])[{}]{[]}',
		'()',
		'(]',
		'([])',
		'({[}){[(]}[({)]'
	];

	/**
	 * @param string $s
	 * @return bool
	 */
	private function isValid( string $s ) {
		$brackets_pairs = [ '()', '{}', '[]' ];
		while ( strlen( $s ) > 0 ) {
			$pair_found = false;
			foreach ( $brackets_pairs as $pair ) {
				if ( str_contains( $s, $pair ) ) {
					$s = str_replace( $pair, '', $s );
					$pair_found = true;
				}
			}
			if ( $pair_found === false && strlen( $s ) > 0 ) {
				return 'Неправильно';
			}
		}
		return 'Правильно';
	}

	function __construct() {
		foreach ( $this->test_cases as $case ) {
			echo 'case "' . $case . '": ' . $this->isValid( $case ) . PHP_EOL;
		}
	}
}

$solution = new Solution();