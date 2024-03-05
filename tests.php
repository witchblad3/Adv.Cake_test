<?php
use PHPUnit\Framework\TestCase;

class RevertCharactersTest extends TestCase {
    public function testRevertCharacters() {
        $this->assertEquals("Тевирп! Онвад ен ьсиледив.", revertCharacters("Привет! Давно не виделись."));
        $this->assertEquals("Яблоко, апельсин, банан.", revertCharacters("Околбя, нислепа, нанаб."));
        $this->assertEquals("12345 67890.", revertCharacters("54321 09876."));
    }
}