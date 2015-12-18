<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:46 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg;


use NilPortugues\SchemaOrg\SchemaOrg;
use RuntimeException;

class SchemaOrgTest extends \PHPUnit_Framework_TestCase
{
    public function testMagicGetWillReturnExistingMethod()
    {

    }

    public function testMagicGetWillReturnSameInstance()
    {
        $url1 = SchemaOrg::schemas()->URL();
        $url2 = SchemaOrg::schemas()->URL();

        SchemaOrg::schemas()->blogPosting()->articleSection()

        $this->assertSame($url1, $url2);
    }

    public function testMagicGetWillThrowExceptionWhenMethodDoesNotExist()
    {
        $this->setExpectedException(RuntimeException::class);
        SchemaOrg::schemas()->thiswillnotexist();
    }
}
 