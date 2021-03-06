<?php
namespace TYPO3\CMS\Extbase\Tests\UnitDeprecated\Reflection;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\Reflection\ClassSchema;

/**
 * Test case
 */
class ClassSchemaTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    public function testClassSchemaDetectsInjectProperties()
    {
        $classSchema = new ClassSchema(Fixture\DummyClassWithInjectProperty::class);
        static::assertTrue($classSchema->hasInjectProperties());

        $propertyDefinition = $classSchema->getProperty('propertyWithInjectAnnotation');
        static::assertTrue($propertyDefinition['annotations']['inject']);

        $injectProperties = $classSchema->getInjectProperties();
        static::assertArrayHasKey('propertyWithInjectAnnotation', $injectProperties);
    }
}
