<?php
/* SVN FILE: $Id: aco_two_fixture.php 7118 2008-06-04 20:49:29Z gwoo $ */
/**
 * Short description for file.
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2008, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2008, Cake Software Foundation, Inc.
 * @link				https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package			cake.tests
 * @subpackage		cake.tests.fixtures
 * @since			CakePHP(tm) v 1.2.0.4667
 * @version			$Revision: 7118 $
 * @modifiedby		$LastChangedBy: gwoo $
 * @lastmodified	$Date: 2008-06-04 13:49:29 -0700 (Wed, 04 Jun 2008) $
 * @license			http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * Short description for class.
 *
 * @package		cake.tests
 * @subpackage	cake.tests.fixtures
 */
class AcoTwoFixture extends CakeTestFixture {
/**
 * name property
 * 
 * @var string 'AcoTwo'
 * @access public
 */
	var $name = 'AcoTwo';
/**
 * fields property
 * 
 * @var array
 * @access public
 */
	var $fields = array(
		'id'		=> array('type' => 'integer', 'key' => 'primary'),
		'parent_id'	=> array('type' => 'integer', 'length' => 10, 'null' => true, 'default' => 0),
		'model'		=> array('type' => 'string', 'default' => ''),
		'foreign_key' => array('type' => 'integer', 'length' => 10, 'null' => true),
		'alias'		=> array('type' => 'string', 'default' => ''),
		'lft'		=> array('type' => 'integer', 'length' => 10, 'null' => true),
		'rght'		=> array('type' => 'integer', 'length' => 10, 'null' => true)
	);
/**
 * records property
 * 
 * @var array
 * @access public
 */
	var $records = array(
		array('id' => 1, 'parent_id' => null,	'model' => null, 'foreign_key' => null, 'alias' => 'ROOT',		'lft' => 1,  'rght' => 20),
        array('id' => 2, 'parent_id' => 1,		'model' => null, 'foreign_key' => null, 'alias' => 'tpsReports', 'lft' => 2,  'rght' => 9),
        array('id' => 3, 'parent_id' => 2,		'model' => null, 'foreign_key' => null, 'alias' => 'view',		'lft' => 3,  'rght' => 6),
        array('id' => 4, 'parent_id' => 3,		'model' => null, 'foreign_key' => null, 'alias' => 'current',	'lft' => 4,  'rght' => 5),
        array('id' => 5, 'parent_id' => 2,		'model' => null, 'foreign_key' => null, 'alias' => 'update',	'lft' => 7,  'rght' => 8),
        array('id' => 6, 'parent_id' => 1,		'model' => null, 'foreign_key' => null, 'alias' => 'printers',	'lft' => 10, 'rght' => 19),
        array('id' => 7, 'parent_id' => 6,		'model' => null, 'foreign_key' => null, 'alias' => 'print',		'lft' => 11, 'rght' => 14),
        array('id' => 8, 'parent_id' => 7,		'model' => null, 'foreign_key' => null, 'alias' => 'lettersize','lft' => 12, 'rght' => 13),
        array('id' => 9, 'parent_id' => 6,		'model' => null, 'foreign_key' => null, 'alias' => 'refill',	'lft' => 15, 'rght' => 16),
		array('id' => 10, 'parent_id' => 6,		'model' => null, 'foreign_key' => null, 'alias' => 'smash',		'lft' => 17, 'rght' => 18),
	);
}

?>
