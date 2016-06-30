# test-redeclare
showcase for kahlan 'redeclare class' problem

```
$ bin/kahlan
            _     _
  /\ /\__ _| |__ | | __ _ _ __
 / //_/ _` | '_ \| |/ _` | '_ \
/ __ \ (_| | | | | | (_| | | | |
\/  \/\__,_|_| |_|_|\__,_|_| |_|

The Unit/BDD PHP Test Framework for Freedom, Truth, and Justice.

Working Directory: /vagrant/test-redeclare

PHP Fatal error:  Cannot redeclare class Doctrine\Common\Annotations\Annotation\Target in /vagrant/test-redeclare/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php on line 32
PHP Stack trace:
PHP   1. {main}() /vagrant/test-redeclare/vendor/crysalead/kahlan/bin/kahlan:0
PHP   2. Kahlan\Cli\Kahlan->run() /vagrant/test-redeclare/vendor/crysalead/kahlan/bin/kahlan:47
PHP   3. Kahlan\Filter\Filter::on() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Cli/Kahlan.php:376
PHP   4. call_user_func_array:{/vagrant/test-redeclare/vendor/crysalead/kahlan/src/Filter/Filter.php:213}() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Filter/Filter.php:213
PHP   5. Kahlan\Cli\Kahlan->Kahlan\Cli\{closure}() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Filter/Filter.php:213
PHP   6. Kahlan\Cli\Kahlan->_run() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Cli/Kahlan.php:368
PHP   7. Kahlan\Filter\Filter::on() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Cli/Kahlan.php:579
PHP   8. call_user_func_array:{/vagrant/test-redeclare/vendor/crysalead/kahlan/src/Filter/Filter.php:213}() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Filter/Filter.php:213
PHP   9. Kahlan\Cli\Kahlan->Kahlan\Cli\{closure}() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Filter/Filter.php:213
PHP  10. Kahlan\Suite->run() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Cli/Kahlan.php:578
PHP  11. Kahlan\Suite->process() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Suite.php:411
PHP  12. Kahlan\Suite->process() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Suite.php:298
PHP  13. Kahlan\Specification->process() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Suite.php:298
PHP  14. Kahlan\Specification->run() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Specification.php:91
PHP  15. Kahlan\Cli\Kahlan->Artur\Workspace\{closure}() /vagrant/test-redeclare/vendor/crysalead/kahlan/src/Specification.php:152
PHP  16. JMS\Serializer\Serializer->toArray() /vagrant/test-redeclare/spec/UserSpec.php:25
PHP  17. PhpOption\Some->map() /tmp/kahlan/vagrant/test-redeclare/vendor/jms/serializer/src/JMS/Serializer/Serializer.php:136
PHP  18. call_user_func:{/tmp/kahlan/vagrant/test-redeclare/vendor/phpoption/phpoption/src/PhpOption/Some.php:89}() /tmp/kahlan/vagrant/test-redeclare/vendor/phpoption/phpoption/src/PhpOption/Some.php:89
PHP  19. JMS\Serializer\Serializer->JMS\Serializer\{closure}() /tmp/kahlan/vagrant/test-redeclare/vendor/phpoption/phpoption/src/PhpOption/Some.php:89
PHP  20. JMS\Serializer\Serializer->visit() /tmp/kahlan/vagrant/test-redeclare/vendor/jms/serializer/src/JMS/Serializer/Serializer.php:124
PHP  21. JMS\Serializer\GraphNavigator->accept() /tmp/kahlan/vagrant/test-redeclare/vendor/jms/serializer/src/JMS/Serializer/Serializer.php:176
PHP  22. Metadata\MetadataFactory->getMetadataForClass() /tmp/kahlan/vagrant/test-redeclare/vendor/jms/serializer/src/JMS/Serializer/GraphNavigator.php:188
PHP  23. JMS\Serializer\Metadata\Driver\AnnotationDriver->loadMetadataForClass() /tmp/kahlan/vagrant/test-redeclare/vendor/jms/metadata/src/Metadata/MetadataFactory.php:103
PHP  24. Doctrine\Common\Annotations\AnnotationReader->getPropertyAnnotations() /tmp/kahlan/vagrant/test-redeclare/vendor/jms/serializer/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php:140
PHP  25. Doctrine\Common\Annotations\DocParser->parse() /tmp/kahlan/vagrant/test-redeclare/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php:226
PHP  26. Doctrine\Common\Annotations\DocParser->Annotations() /tmp/kahlan/vagrant/test-redeclare/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/DocParser.php:334
PHP  27. Doctrine\Common\Annotations\DocParser->Annotation() /tmp/kahlan/vagrant/test-redeclare/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/DocParser.php:641
PHP  28. Doctrine\Common\Annotations\DocParser->collectAnnotationMetadata() /tmp/kahlan/vagrant/test-redeclare/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/DocParser.php:718
PHP  29. Doctrine\Common\Annotations\AnnotationRegistry::registerFile() /tmp/kahlan/vagrant/test-redeclare/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/DocParser.php:472
PHP  30. require_once() /tmp/kahlan/vagrant/test-redeclare/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php:64
```
