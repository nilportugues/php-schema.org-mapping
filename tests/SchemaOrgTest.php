<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:46 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg;

use NilPortugues\SchemaOrg\SchemaOrg;
use RuntimeException;

class SchemaOrgTest extends \PHPUnit_Framework_TestCase
{
    public function testMagicGetWillReturnSameInstance()
    {
        $article1 = SchemaOrg::schemas()->blogPosting()->articleSection();
        $article2 = SchemaOrg::schemas()->blogPosting()->articleSection();

        $this->assertSame($article1, $article2);
    }

    public function testMagicGetWillThrowExceptionWhenMethodDoesNotExist()
    {
        $this->setExpectedException(RuntimeException::class);
        SchemaOrg::schemas()->thiswillnotexist();
    }
}
