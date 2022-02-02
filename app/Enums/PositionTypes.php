<?php

namespace App\Enums;

class PositionTypes extends BaseEnum {
  const DEVELOPER = 1;
  const DESIGNER = 2;
  const TYPESETTER = 3;

  /**
   * @var string[]
   */
  public static array $LABELS = [
    self::DEVELOPER => 'Разработчик',
    self::DESIGNER => 'Дизайнер',
    self::TYPESETTER => 'Верстальщик',
  ];
}