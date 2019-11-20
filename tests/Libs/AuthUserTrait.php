<?php

/**
 * ======================================================================
 * LICENSE: This file is subject to the terms and conditions defined in *
 * file 'license.txt', which is part of this source code package.       *
 * ======================================================================
 */

namespace AAM\UnitTest\Libs;

/**
 * Test access policy integration with core AAM objects
 *
 * @version 6.0.0
 */
trait AuthUserTrait
{
    /**
     * @inheritdoc
     */
    public static function setUpBeforeClass()
    {
        // Set current User. Emulate that this is admin login
        wp_set_current_user(AAM_UNITTEST_AUTH_USER_ID);
    }

    /**
     * @inheritdoc
     */
    public static function tearDownAfterClass()
    {
        // Unset the forced user
        wp_set_current_user(0);
    }

}