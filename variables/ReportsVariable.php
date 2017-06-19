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
    public function prepare ($options = [ ])
    {
        $defaultOptions = [
            'type'    => 'table',
            'columns' => [ ],
            'rows'    => [ ],
            'labels'  => [ ],
            'data'    => [ ],
        ];
        $data           = array_merge($defaultOptions, $options);
        $data['rows'] = $this->safelyConvert($data['rows']);

        $json = json_encode($data);

        return TemplateHelper::getRaw('%report%' . $json . '%endreport%');
    }

    public function db ()
    {
        return craft()->db->createCommand();
    }

    private function safelyConvert ($rows = [ ])
    {
        $safeTypes = [ 'integer', 'double', 'string', 'NULL' ];

        $newRows = [ ];

        foreach ($rows as $row) {
            $newRow = [ ];

            foreach ($row as $cell) {
                if ( !in_array(gettype($cell), $safeTypes) ) {
                    if ($cell instanceof \Twig_Markup) {
                        $newRow[] = (string) $cell;
                    } else {
                        $newRow[] = $cell;
                    }
                } else {
                    $newRow[] = $cell;
                }
            }

            $newRows[] = $newRow;
        }

        return $newRows;
    }
}