<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\JobPosting;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes JobPostingTest.
 */
class JobPostingTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(JobPosting::schemaUrl(), 'http://schema.org/JobPosting');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::alternateName());
    }

    public function testBaseSalaryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::baseSalary());
    }

    public function testBenefitsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::benefits());
    }

    public function testDatePostedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::datePosted());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::description());
    }

    public function testEducationRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::educationRequirements());
    }

    public function testEmploymentTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::employmentType());
    }

    public function testExperienceRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::experienceRequirements());
    }

    public function testHiringOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::hiringOrganization());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::image());
    }

    public function testIncentiveCompensationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::incentiveCompensation());
    }

    public function testIncentivesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::incentives());
    }

    public function testIndustryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::industry());
    }

    public function testJobBenefitsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::jobBenefits());
    }

    public function testJobLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::jobLocation());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::name());
    }

    public function testOccupationalCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::occupationalCategory());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::potentialAction());
    }

    public function testQualificationsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::qualifications());
    }

    public function testResponsibilitiesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::responsibilities());
    }

    public function testSalaryCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::salaryCurrency());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::sameAs());
    }

    public function testSkillsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::skills());
    }

    public function testSpecialCommitmentsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::specialCommitments());
    }

    public function testTitleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::title());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::url());
    }

    public function testWorkHoursWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, JobPosting::workHours());
    }
}
