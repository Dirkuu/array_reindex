<?php
declare(strict_types=1);

namespace dirkuu;

if (! function_exists('array_reindex'))
{
	/**
	 * Sets new indexes for every element using values from passed column name
	 *
	 * @param array $array
	 * @param mixed $columnName
	 * @return array
	 */
	function array_reindex(array $array, $columnName): array {
		return array_combine(array_column($array, $columnName), $array);
	}
}