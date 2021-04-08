<?php

class Singleton
{
    public static function getInstance()
    {
        static $instance = null;

		if ($instance === null) {
			$instance = new static();
		}
		return $instance;
    }

    /**
     * Private to disabled instantiation.
     */
    private function __construct() {}

    /**
     * Cannot clone a singleton.
     */
    private function __clone() {}

    /**
     * Cannot serialize a singleton.
     */
    private function __sleep() {}

    private function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}

class Database extends Singleton
{
    protected $userName;

    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    public function printUserName(): void
    {
        echo $this->userName . PHP_EOL;
    }
}

$database1 = Database::getInstance();
$database1->setUserName('John');
$database1->printUserName();

$database2 = Database::getInstance();
$database2->printUserName();

$database2->setUserName('Jane');
$database1->printUserName();
$database2->printUserName();
