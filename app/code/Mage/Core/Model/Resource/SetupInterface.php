<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface Mage_Core_Model_Resource_SetupInterface
{
    const DEFAULT_SETUP_CONNECTION  = 'core_setup';
    const VERSION_COMPARE_EQUAL     = 0;
    const VERSION_COMPARE_LOWER     = -1;
    const VERSION_COMPARE_GREATER   = 1;

    const TYPE_DB_INSTALL           = 'install';
    const TYPE_DB_UPGRADE           = 'upgrade';
    const TYPE_DB_ROLLBACK          = 'rollback';
    const TYPE_DB_UNINSTALL         = 'uninstall';
    const TYPE_DATA_INSTALL         = 'data-install';
    const TYPE_DATA_UPGRADE         = 'data-upgrade';

    /**
     * Apply module resource install, upgrade and data scripts
     *
     * @return Mage_Core_Model_Resource_SetupInterface
     */
    public function applyUpdates();

    /**
     * Check call afterApplyAllUpdates method for setup class
     *
     * @return boolean
     */
    public function getCallAfterApplyAllUpdates();

    /**
     * Run each time after applying of all updates,
     *
     * @return Mage_Core_Model_Resource_SetupInterface
     */
    public function afterApplyAllUpdates();

    /**
     *  Apply data updates to the system after upgrading
     */
    public function applyDataUpdates();
}
