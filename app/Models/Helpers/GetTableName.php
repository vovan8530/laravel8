<?php

namespace App\Models\Helpers;

/**
 * Trait get static table name from database
 *
 * @package App\Models\Helpers
 */
trait GetTableName {
  /**
   * Get static table name
   *
   * @return string
   */
  public static function getTableName(): string {
    return with(new static())->getTable();
  }
}
