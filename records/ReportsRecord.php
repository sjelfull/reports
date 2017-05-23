<?php
/**
 * Reports plugin for Craft CMS
 *
 * Reports Record
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Reports
 * @since     1.0.0
 */

namespace Craft;

class ReportsRecord extends BaseRecord
{
    /**
     * @return string
     */
    public function getTableName ()
    {
        return 'reports';
    }

    /**
     * @access protected
     * @return array
     */
    protected function defineAttributes ()
    {
        return array(
            'name'     => array( AttributeType::String, 'default' => '' ),
            'handle'   => array( AttributeType::Slug, 'default' => '' ),
            'content'  => array( AttributeType::String, 'column' => ColumnType::Text ),
            'runCount' => array( AttributeType::Number, 'default' => 0 ),
        );
    }

    /**
     * @return array
     */
    public function defineRelations ()
    {
        return array();
    }
}