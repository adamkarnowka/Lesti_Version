<?php
/**
 * Lesti_Version
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * http://opensource.org/licenses/OSL-3.0
 *
 * @package      Lesti_Version
 * @copyright    Copyright (c) 2014 Gordon Lesti (http://www.gordonlesti.com)
 * @author       Gordon Lesti <info@gordonlesti.com>
 * @license      http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

/**
 * Class Lesti_Version_Block_Adminhtml_Data_Form_Element_Version_Ajax
 */
class Lesti_Version_Block_Adminhtml_Data_Form_Element_Version_Ajax extends Mage_Adminhtml_Block_Template
{

    public function __construct($attributes=array())
    {
        parent::__construct($attributes);
        $this->setTemplate('version/'.$attributes['version_type'].'.phtml');
    }

}