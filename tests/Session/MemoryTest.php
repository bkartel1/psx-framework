<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2017 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PSX\Framework\Tests\Session;

use PSX\Framework\Session\Memory;

/**
 * MemoryTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class MemoryTest extends \PHPUnit_Framework_TestCase
{
    public function testGetSet()
    {
        $sess = new Memory('psx_session');

        $this->assertInstanceOf('PSX\Framework\Session\Session', $sess);
        $this->assertEquals(false, $sess->get('foo'));
        $this->assertEquals(false, $sess->has('foo'));

        $sess->set('foo', 'bar');

        $this->assertEquals('bar', $sess->get('foo'));
        $this->assertEquals(true, $sess->has('foo'));
    }

    public function testPropertyGetSet()
    {
        $sess = new Memory('psx_session');

        $this->assertEquals(false, $sess->foo);

        $sess->foo = 'bar';

        $this->assertEquals('bar', $sess->foo);
    }
}
