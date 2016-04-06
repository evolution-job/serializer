<?php

namespace spec\Xabbuh\XApi\Serializer;

use PhpSpec\ObjectBehavior;

class SerializerSpec extends ObjectBehavior
{
    function it_creates_a_serializer()
    {
        self::createSerializer()->shouldBeAnInstanceOf('Symfony\Component\Serializer\SerializerInterface');
    }
}
