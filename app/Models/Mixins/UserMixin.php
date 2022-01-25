<?php

namespace App\Models\Mixins;

trait UserMixin {
  /**
   * @return bool
   */
  public function isNew(): bool {
    return !$this->exists;
  }
}