<?php
function __autoload( $class_name) {
  require_once $DOCUMENT_ROOT. "classes/{$class_name}.php";
}

$cook = new Cook();

echo $cook->execute( new ApronPreparation() ) . PHP_EOL; // PHP_EOL = nieuwe regel
echo $cook->execute( new HardrockPreparation() ) . PHP_EOL;
echo $cook->execute( new SoccerPreparation() ) . PHP_EOL;
