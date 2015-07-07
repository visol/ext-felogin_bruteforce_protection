<?php
namespace Aoe\FeloginBruteforceProtection\Tests\Unit\Hooks\UserAuth;

use Aoe\FeloginBruteforceProtection\Hooks\UserAuth\PostUserLookUp;

/**
 * Test case for class Tx_FeloginBruteforceProtection_Hooks_UserAuth_PostUserLookUp.
 *
 * @package TYPO3
 * @subpackage brute force protection
 *
 */
class PostUserLookUpTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var PostUserLookUp
     */
    private $postUserLookUp;

    /**
     * (non-PHPdoc)
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp()
    {
        $this->postUserLookUp = $this
            ->getMockBuilder('Aoe\\FeloginBruteforceProtection\\Hooks\\UserAuth\\PostUserLookUp')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * (non-PHPdoc)
     * @see PHPUnit_Framework_TestCase::tearDown()
     */
    public function tearDown()
    {
        unset($this->postUserLookUp);
    }

    /**
     * with backend login
     * @test
     */
    public function handlePostUserLookUpWithBackendLogin()
    {
        $feUserAuth = $this->getMock('\\TYPO3\\CMS\\Frontend\\Authentication\\FrontendUserAuthentication');
        $feUserAuth->loginType = 'BE';
        $params = array();
        $params['pObj'] = $feUserAuth;
        $this->postUserLookUp->handlePostUserLookUp($params);
    }
}
