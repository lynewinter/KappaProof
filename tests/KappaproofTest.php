<?php
/**
 * Tests for KappaProof
 */

use PHPUnit\Framework\TestCase;
use Kappaproof\Kappaproof;

class KappaproofTest extends TestCase {
    private Kappaproof $instance;

    protected function setUp(): void {
        $this->instance = new Kappaproof(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Kappaproof::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
