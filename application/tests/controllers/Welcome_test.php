<?php

class Welcome_test extends TestCase
{
    public function test_index()
    {
//        $this->request("GET", "Welcome");
        $obj = new Welcome();
        $hi = $obj->testCode();
        $this->assertEquals("hi", $hi);
    }
}
