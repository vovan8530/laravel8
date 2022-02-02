<?php

namespace App\Helpers;

/**
 * Helper to provide work with request data.
 *
 * @package App\Helpers
 */
class HttpRequestHelper {
  /**
   * Checking value is not empty.
   *
   * @param $value mixed
   * @param $checkEmptyFunction boolean
   * @return boolean
   */
  public static function isEmptyParameter(mixed $value, bool $checkEmptyFunction = false): bool {
    return $value === ''
      || $value === []
      || $value === null
      || $value === 'null'
      || $value === 'undefined'
      || (is_string($value) && trim($value) === '')
      || ($checkEmptyFunction ? empty($value) : false);
  }

  /**
   * Calculate offset by limit and current page.
   *
   * @param int $limit
   * @param int $page
   * @return float|int
   */
  public static function getOffsetPages(int $limit, int $page = 1): float|int {
    $offset = 0;
    if ($page >= 1) {
      $offset = ($page - 1) * $limit;
    }

    return $offset;
  }
}
