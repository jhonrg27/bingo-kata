<?php
class Caller
{	

    const MIN_CARD_NUMBER = 1;
    const MAX_CARD_NUMBER = 75;

	private $numbers = [];
    
    public function callNumber()
    {
        do {
            $number = rand(self::MIN_CARD_NUMBER, self::MAX_CARD_NUMBER); 
        } while(in_array($number, $this->numbers));
        
        $this->numbers[] = $number;
        
        return $number;
    }
    

}