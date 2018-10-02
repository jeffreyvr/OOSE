<?php
/**
 * Cook
 */
class Cook {

  public function execute(PreparationInterface $preparation) {
    return $preparation->prepare();
  }

}
