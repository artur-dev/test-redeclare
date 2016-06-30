<?php
namespace Artur\Workspace;

use Artur\Test\User;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Annotation;
use JMS\Serializer\SerializerBuilder;

describe('User', function () {
    before(function () {
        AnnotationRegistry::registerAutoloadNamespace(
            Annotation::class,
            __DIR__ . '/../vendor/jms/serializer/src'
        );

        $serializer_builder = SerializerBuilder::create();
        $this->serializer = $serializer_builder->build();
    });

    it('can be serialized to an array', function () {
        $user = new User;
        $user->setId(123);
        $user->setUsername('user name');

        expect($this->serializer->toArray($user))->toBeA('array');
    });
});
