<?php

interface Shape
{
	public function draw();
}

class Square implements Shape
{
    public function draw()
    {
		echo 'Inside Square::draw() method.';
	}
}

class Circle implements Shape
{
    public function draw()
    {
		echo 'Inside Circle::draw() method.';
	}
}

class ShapeFactory
{
    public static function getShape(String $shapeType): ?Shape
    {
		if ($shapeType === "circle") {
			return new Circle();
        }

        if($shapeType === "square") {
			return new Square();
		}

		throw new Exception('Shape type not found.');
	}
}

$circle = ShapeFactory::getShape("circle");
$circle->draw();

$square = ShapeFactory::getShape("square");
$square->draw();
