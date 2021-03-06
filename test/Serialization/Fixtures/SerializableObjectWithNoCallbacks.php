<?php
declare(strict_types = 1);

namespace BroadwaySerialization\Test\Serialization\Fixtures;

use Broadway\Serializer\Serializable;
use BroadwaySerialization\Serialization\AutoSerializable;

final class SerializableObjectWithNoCallbacks implements Serializable
{
    use AutoSerializable;

    private $bar;

    public function __construct($bar)
    {
        $this->bar = $bar;
    }
}
