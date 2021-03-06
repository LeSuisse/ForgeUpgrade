<?php
/**
 * Copyright (c) STMicroelectronics, 2010. All Rights Reserved.
 *
 * Originally written by Manuel Vacelet
 *
 * ForgeUpgrade is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * ForgeUpgrade is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with ForgeUpgrade. If not, see <http://www.gnu.org/licenses/>.
 */

require_once('simpletest/autorun.php');

class AllTests extends TestSuite {
    function __construct() {
        parent::__construct('All tests');
        $p = dirname(__FILE__);
        ini_set('include_path', dirname($p).PATH_SEPARATOR.ini_get('include_path'));
        $this->addFile($p.'/ForgeUpgrade_BucketFilterTest.php');
    }
}


?>