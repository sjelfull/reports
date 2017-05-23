<?php
/**
 * Reports plugin for Craft CMS
 *
 * Reports Task
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Reports
 * @since     1.0.0
 */

namespace Craft;

class ReportsVariable
{
    public function json ($columns = [ ], $data = null)
    {
        $data = [
            'columns' => $columns,
            'data'    => $data,
        ];

        $json = json_encode($data);

        return TemplateHelper::getRaw('%report%' . $json . '%endreport%');
    }
}