<?php
//declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class BingoCallerTest extends TestCase {

    const MIN_CARD_NUMBER = 1;
    const MAX_CARD_NUMBER = 75;	

	public function testValidRange()
	{
        $caller = new Caller();
        $number = $caller->callNumber();

        $this->assertTrue(
            $number >= 1 && $number <= 75
        );
	}

    public function testCheckerNumbers()
    {
        $caller = new Caller();        

        for ($i=1; $i<=75; ++$i) {
            $caller->callNumber();
        }

        $this->assertTrue(
			$caller
        );
    }

}