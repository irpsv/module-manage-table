<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class PagesTest extends TestCase
{
    public function testView()
    {
        // get by repo
        $manageTable = new ManageTable('table_name');
        $manageTable->ui_label;

        $formWidget = new AdminForm();
        $formWidget->begin();
            $tabs = $manageTable->props['tabs'];
            $tabsWidget = new AdminTabs();
            foreach ($tabs as $name => $columns) {
                $tabsWidget->beginTab($name);
                foreach ($columns as $name) {

                    $manageColumn = new ManageColumn($manageTable->id, $name);
                    $columnProps = $manageColumn->props;
                    $type = $columnProps['type'];

                    echo $formWidget->field($type, $columnProps);

                }
            }
            $tabsWidget->end();
        $formWidget->end();
    }

    public function testList()
    {

    }

    public function testUpdate()
    {

    }
}
