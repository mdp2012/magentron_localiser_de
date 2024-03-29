<?php
/**
 * This file is part of the MDP 2012 Hackathon.
 *
 * Mdp2012_Localiser is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  Mdp2012
 * @package   Mdp2012_Localiser_DE
 * @author    Mdp2012 Team <team@magento-developer-paradise.com>
 * @copyright 2012 Mdp2012 Team (http://gitorious.mdp/mdp_localiser). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     1.0.5
 */
/**
 * Setup script; Adds the delivery_time attribute for products
 * and creates all initial pages, blocks and emails
 *
 * @category  Mdp2012
 * @package   Mdp2012_Localiser_DE
 * @author    Mdp2012 Team <team@magento-developer-paradise.com>
 * @copyright 2012 Mdp2012 Team (http://gitorious.mdp/mdp_localiser). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     1.0.5
 */

/* @var $installer Mage_Eav_Model_Entity_Setup */
$installer = $this;
$installer->startSetup();

$installer->addAttribute(
    'catalog_product',
    'delivery_time',
    array(
        'label'                      => 'Lieferzeit',
        'input'                      => 'text',
        'required'                   => false,
        'user_defined'               => true,
        'default'                    => '2-3 Tage',
        'group'                      => 'General',
        'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'                    => true,
        'filterable'                 => false,
        'searchable'                 => false,
        'comparable'                 => true,
        'visible_on_front'           => true,
        'visible_in_advanced_search' => true,
        'used_in_product_listing'    => true,
        'is_html_allowed_on_front'   => true,
    )
);

$installer->endSetup();
