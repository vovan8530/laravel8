<?php

namespace App\Helpers;

use Illuminate\Support\Arr;

/**
 * ArrayHelper provides additional array functionality that you can use in your application.
 *
 * @package App\Helpers
 */
class ArrayHelper {
  /**
   * Builds a map (key-value pairs) from a multidimensional array or an array of objects by callback.
   *
   * For example,
   *
   * ```php
   * $array = [
   *     ['id' => '123', 'name' => 'aaa', 'class' => 'x'],
   *     ['id' => '124', 'name' => 'bbb', 'class' => 'x'],
   *     ['id' => '345', 'name' => 'ccc', 'class' => 'y'],
   * ];
   *
   * $result = ArrayHelper::arrayMapAssoc(function($key, $value) {
   *    // first parameter wll be key of array item, but second will be value
   *    return [$value['id'], $value];
   * }, $array);
   *
   * // the result is:
   * // [
   * //     '123' => 'aaa',
   * //     '124' => 'bbb',
   * //     '345' => 'ccc',
   * // ]
   * ```
   *
   * @param callable $f
   * @param array $a
   * @return array
   */
  public static function arrayMapAssoc(callable $f, array $a): array {
    return array_column(array_map($f, array_keys($a), $a), 1, 0);
  }

  /**
   * Builds a map (key-value pairs) from a multidimensional array or an array of objects.
   * The `$from` and `$to` parameters specify the key names or property names to set up the map.
   * Optionally, one can further group the map according to a grouping field `$group`.
   *
   * For example,
   *
   * ```php
   * $array = [
   *     ['id' => '123', 'name' => 'aaa', 'class' => 'x'],
   *     ['id' => '124', 'name' => 'bbb', 'class' => 'x'],
   *     ['id' => '345', 'name' => 'ccc', 'class' => 'y'],
   * ];
   *
   * $result = ArrayHelper::map($array, 'id', 'name');
   * // the result is:
   * // [
   * //     '123' => 'aaa',
   * //     '124' => 'bbb',
   * //     '345' => 'ccc',
   * // ]
   *
   * $result = ArrayHelper::map($array, 'id', 'name', 'class');
   * // the result is:
   * // [
   * //     'x' => [
   * //         '123' => 'aaa',
   * //         '124' => 'bbb',
   * //     ],
   * //     'y' => [
   * //         '345' => 'ccc',
   * //     ],
   * // ]
   * ```
   *
   * @param array $array
   * @param string $from
   * @param string $to
   * @param string|null $group
   * @return array
   */
  public static function map(array $array, string $from, string $to, string $group = null): array {
    $result = [];
    foreach ($array as $element) {
      $key = static::getValue($element, $from);
      $value = static::getValue($element, $to);
      if ($group !== null) {
        $result[static::getValue($element, $group)][$key] = $value;
      } else {
        $result[$key] = $value;
      }
    }
    return $result;
  }

  /**
   * Retrieves the value of an array element or object property with the given key or property name.
   * If the key does not exist in the array, the default value will be returned instead.
   * Not used when getting value from an object.
   *
   * The key may be specified in a dot format to retrieve the value of a sub-array or the property
   * of an embedded object. In particular, if the key is `x.y.z`, then the returned value would
   * be `$array['x']['y']['z']` or `$array->x->y->z` (if `$array` is an object). If `$array['x']`
   * or `$array->x` is neither an array nor an object, the default value will be returned.
   * Note that if the array already has an element `x.y.z`, then its value will be returned
   * instead of going through the sub-arrays. So it is better to be done specifying an array of key names
   * like `['x', 'y', 'z']`.
   *
   * Below are some usage examples,
   *
   * ```php
   * // working with array
   * $username = ArrayHelper::getValue($_POST, 'username');
   * // working with object
   * $username = ArrayHelper::getValue($user, 'username');
   * // working with anonymous function
   * $fullName = ArrayHelper::getValue($user, function ($user, $defaultValue) {
   *     return $user->firstName . ' ' . $user->lastName;
   * });
   * // using dot format to retrieve the property of embedded object
   * $street = ArrayHelper::getValue($users, 'address.street');
   * // using an array of keys to retrieve the value
   * $value = ArrayHelper::getValue($versions, ['1.0', 'date']);
   * ```
   *
   * @param array|object $array array or object to extract value from
   * @param string|\Closure|array $key key name of the array element, an array of keys or property name of the object,
   * or an anonymous function returning the value. The anonymous function signature should be:
   * `function($array, $defaultValue)`.
   * @param mixed $default the default value to be returned if the specified array key does not exist. Not used when
   * getting value from an object.
   * @return mixed the value of the element if found, default value otherwise
   */
  public static function getValue(array|object $array, string|array|\Closure $key, mixed $default = null): mixed {
    if ($key instanceof \Closure) {
      return $key($array, $default);
    }
    if (is_array($key)) {
      $lastKey = array_pop($key);
      foreach ($key as $keyPart) {
        $array = static::getValue($array, $keyPart);
      }
      $key = $lastKey;
    }
    if (is_array($array) && (isset($array[$key]) || array_key_exists($key, $array))) {
      return $array[$key];
    }
    if (($pos = strrpos($key, '.')) !== false) {
      $array = static::getValue($array, substr($key, 0, $pos), $default);
      $key = substr($key, $pos + 1);
    }
    if (is_object($array) && isset($array->$key)) {
      // this is expected to fail if the property does not exist, or __get() is not implemented
      // it is not reliably possible to check whether a property is accessible beforehand
      return $array->$key;
    } elseif (is_array($array)) {
      return (isset($array[$key]) || array_key_exists($key, $array)) ? $array[$key] : $default;
    }
    return $default;
  }

  /**
   * Check result static::getValue() and return default value if result is empty.
   *
   * @param array|object $array
   * @param string|\Closure|array $key
   * @param mixed|null $default
   * @return mixed
   */
  public static function getNotEmptyValue(array|object $array, string|\Closure|array $key, mixed $default = null): mixed {
    $value = static::getValue($array, $key, $default);
    return !HttpRequestHelper::isEmptyParameter($value) ? $value : $default;
  }

  /**
   * Create array by number iteration.
   *
   * @param int $iteration
   * @return array
   */
  public static function createArray(int $iteration): array {
    $array = [];
    for ($i = 0; $i < $iteration; $i++) $array[$i] = $i;
    return $array;
  }

  /**
   * Create array by number iteration.
   *
   * @param int $min
   * @param int $max
   * @return array
   */
  public static function createArrayByRange(int $min, int $max): array {
    $array = [];
    for ($i = $min; $i <= $max; $i++)
      $array[$i] = $i;

    return $array;
  }

  /**
   * @param array $array
   * @return array
   */
  public static function exceptEmptyValues(array $array): array {
    return Arr::where($array, function ($value) {
      return !empty($value);
    });
  }
}
