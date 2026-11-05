<?php declare(strict_types=1);

namespace Tests\Builder;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Silent\Core\Builder\JsFileBuilder;

class JsBuilderTest extends TestCase {
    public function testBuilder() {
        $script = JsFileBuilder::build(__DIR__ . "/script.js", ["param1" => "test", "param2" => ["url" => "url22"]]);
        $this->assertEquals("console.log('test');\nconsole.log('url22');\nconsole.log('{\"url\":\"url22\"}');", $script);
    }

    public function testBuilderWithMissedParameter() {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageIs("Missing parameter 'param2.url' for template /home/dmytrii/Desktop/Silent/tests/Builder/script.js");

        JsFileBuilder::build(__DIR__ . "/script.js", ["param1" => "test"]);
    }

    public function testBuilderInvalidPath() {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageIs("Template not found: " . __DIR__ . '/script2.js');

        JsFileBuilder::build(__DIR__ . "/script2.js");
    }
}