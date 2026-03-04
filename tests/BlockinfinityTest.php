<?php
/**
 * Tests for BlockInfinity
 */

use PHPUnit\Framework\TestCase;
use Blockinfinity\Blockinfinity;

class BlockinfinityTest extends TestCase {
    private Blockinfinity $instance;

    protected function setUp(): void {
        $this->instance = new Blockinfinity(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockinfinity::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
