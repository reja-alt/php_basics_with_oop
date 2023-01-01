<?php

// Declare the interface 'Template'
interface Template
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implement the interface
// This will work
class WorkingTemplate implements Template
{
    private $vars = [];
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
 
        return $template;
    }
}

interface A
{
    public function foo();
}

interface B extends A
{
    public function baz(Baz $baz);
}

// This will work
class C implements B
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}

// This will not work and result in a fatal error
class D implements B
{
    public function foo()
    {
    }

    // public function baz(Foo $foo)
    // {
    // }

    public function baz(Baz $baz)
    {
    }
}

// Example #3 Variance compatibility with multiple interfaces

class Foo {}
class Bar extends Foo {}

interface A2 {
    public function myfunc(Foo $arg): Foo;
}

interface B2 {
    public function myfunc(Bar $arg): Bar;
}

class MyClass implements A2, B2
{
    public function myfunc(Foo $arg): Bar
    {
        return new Bar();
    }
}
