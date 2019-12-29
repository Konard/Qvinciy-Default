<?php
/**
 * SimpleStudio - PHP Фреймворк
 *
 * @package   SimpleStudio
 * @author    waldi <vladimiren22@gmail.com>
 */

namespace Core\Service;

class ServiceContainer {

  /**
   * @return ServiceContainer|object
   */
  public function getThis()
  {
    return $this;
  }

  /**
   * @return ServiceContainer|object
   */
  public function dumpThis()
  {
    dd($this);
  }
}
