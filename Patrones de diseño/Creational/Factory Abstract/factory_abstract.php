<?php

interface AbstractFactory
{
    public function createSquare(): AbstractProductA;
    public function createTriangle(): AbstractProductA;
}

class ShapeFactory implements AbstractFactory
{
    public function createSquare(): Shape
    {
        return new Square();
    }

    public function createTriangle(): Shape
    {
        return new Triangle();
    }
}

class RoudedShapeFactory implements AbstractFactory
{
    public function createSquare(): Shape
    {
        return new RoundedSquare();
    }

    public function createTriangle(): Shape
    {
        return new RoundedTriangle();
    }
}

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

class Triangle implements Shape
{
    public function draw()
    {
		echo 'Inside Triangle::draw() method.';
	}
}

class RoundedSquare implements Shape
{
    public function draw()
    {
		echo 'Inside RoundedSquare::draw() method.';
	}
}

class RoundedTriangle implements Shape
{
    public function draw()
    {
		echo 'Inside RoundedTriangle::draw() method.';
	}
}

function clientCode(AbstractFactory $factory)
{
    $square = $factory->createSquare();
    $triangle = $factory->createTriangle();
    $square->draw();
    $triangle->draw();
}

clientCode(new ShapeFactory());
clientCode(new RoudedShapeFactory());
