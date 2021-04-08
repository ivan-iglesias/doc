<?php

class Context
{
	private $strategy;

    public function Context(Strategy $strategy)
    {
		$this->strategy = $strategy;
	}

    public function executeStrategy(int $num1, int $num2)
    {
		return $this->strategy->doOperation($num1, $num2);
	}
}

interface Strategy
{
	public function doOperation(int $num1, int $num2);
}

class OperationAdd implements Strategy
{
    public function doOperation(int $num1, int $num2)
    {
		return $num1 + $num2;
	}
}

class OperationSubstract implements Strategy
{
    public function doOperation(int $num1, int $num2)
    {
		return $num1 - $num2;
	}
}

$context = new Context(new OperationAdd());
print "Suma: 10 + 5 = " . $context->executeStrategy(10, 5);

$context = new Context(new OperationSubstract());
print "Resta: 10 - 5 = " . $context->executeStrategy(10, 5);
