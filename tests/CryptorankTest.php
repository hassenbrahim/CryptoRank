<?php
/**
 * Tests for CryptoRank
 */

use PHPUnit\Framework\TestCase;
use Cryptorank\Cryptorank;

class CryptorankTest extends TestCase {
    private Cryptorank $instance;

    protected function setUp(): void {
        $this->instance = new Cryptorank(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptorank::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
