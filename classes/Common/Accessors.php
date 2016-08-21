<?php
/**
 * Created by Gorlum 19.08.2016 20:35
 */

namespace Common;

/**
 * Accessors storage
 *
 * TODO - make magic method access to accessors ????????
 *
 * @package Common
 */
class Accessors {

  /**
   * Array of accessors - getters/setters/etc
   *
   * @var callable[]
   */
  protected $accessors = array();

  /**
   * @var bool[]
   */
  protected $shared = array();

  /**
   * Result of shared function execution
   *
   * @var array
   */
  protected $executed = array();

  /**
   * @param string $varName
   * @param string $accessor
   *
   * @return bool
   */
  public function exists($varName, $accessor) {
    return isset($this->accessors[$varName . $accessor]);
  }

  /**
   * Assign accessor to a named variable
   *
   * Different accessors have different signatures - you should look carefully before assigning accessor
   *
   * @param string   $varName
   * @param string   $accessor - type of accessor getter/setter/importer/exporter/etc
   * @param callable $callable
   *
   * @throws \Exception
   */
  public function set($varName, $accessor, $callable, $shared = false) {
    if (empty($callable)) {
      return;
    } elseif (!is_callable($callable)) {
      throw new \Exception('Error assigning callable in ' . get_called_class() . '::set()! Callable typed [' . $accessor . '] is not a callable or not accessible in the scope');
    }

    // Converting method array-callable to closure
    // Require PHP 5.4 !!!!!!!!!!
//    if (is_array($callable) && count($callable) == 2 && is_object($callable[0])) {
//      $method = new \ReflectionMethod($callable[0], $callable[1]);
//      $callable = $method->getClosure($callable[0]);
//    }

    if($invoker = Invoker::build($callable)) {
      $callable = $invoker;
    }

    $this->accessors[$varName . $accessor] = $callable;
    if($shared) {
      $this->shared[$varName . $accessor] = true;
    }
  }

//  /**
//   * Gets accessor for later use
//   *
//   * @param string $varName
//   * @param string $accessor
//   *
//   * @return callable|null
//   */
//  public function get($varName, $accessor) {
//    return $this->exists($varName, $accessor) ? $this->accessors[$varName . $accessor] : null;
//  }

  /**
   * @param string $varName
   * @param string $accessor
   * @param array  $params
   *
   * @return mixed
   * @throws \Exception
   */
  public function execute($varName, $accessor, $params) {
    if (!$this->exists($varName, $accessor)) {
      throw new \Exception("No [{$accessor}] accessor found for variable [{$varName}] on " . get_called_class() . "::" . __METHOD__);
    }

    $functionName = $varName . $accessor;

    if(isset($this->shared[$functionName])) {
      if(!array_key_exists($functionName, $this->executed)) {
        $this->executed[$functionName] = call_user_func_array($this->accessors[$functionName], $params);
      }
      return $this->executed[$functionName];
    }

    return call_user_func_array($this->accessors[$functionName], $params);
  }

}
