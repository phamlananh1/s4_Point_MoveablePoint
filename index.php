<?php
class Point
{
    public $x;
    public $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function setX($x){
        $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function setY($y){
        $this->y;
    }
    public function getXY(){
        $arr[] = $this->x;
        $arr[] = $this->y;
        return json_encode($arr);
    }
    public function __toString(){
        return "Point:".$this->getXY()."<br>";
    }
}
class MoveablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;
    public function __construct($x, $y, $xS, $yS)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xS;
        $this->ySpeed = $yS;
    }
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setSpeed($xS, $yS)
    {
        $this->xSpeed = $xS;
        $this->ySpeed = $yS;
    }
    public function getSpeed()
    {
        $arr[] = $this->getXSpeed();
        $arr[] = $this->getYSpeed();
        return $arr;
    }
    public function __toString()
    {
        return parent::__toString() . "Speed:" . json_encode($this->getSpeed());
    }
    public function move()
    {
        $this->x += $this->getXSpeed();
        $this->y += $this->getYSpeed();
        return "[" . $this->x . "," . $this->y . "]";
    }
}
$moveablePoint = new MoveablePoint(2, 2, 5, 4);
echo $moveablePoint . "<br>";
echo "Point move to: " . $moveablePoint->move();