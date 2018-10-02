<?php
use PHPUnit\Framework\TestCase;

final class CookTest extends TestCase {
  public $cook;

  public function __construct(){
    parent::__construct();

    $this->cook = new Cook();
  }

  public function testCookPrepareHardrock() {
    $this->assertEquals(
      'take a collection of knifes and set some hardrock music on',
      $this->cook->execute( new HardrockPreparation() )
    );
  }

  public function testCookPrepareSoccer() {
    $this->assertEquals(
      'open a beer and hum the anthem of their favourite soccer team',
      $this->cook->execute( new SoccerPreparation() )
    );
  }

  public function testCookPrepareApron() {
    $this->assertEquals(
      'put an apron on',
      $this->cook->execute( new ApronPreparation() )
    );
  }

}
