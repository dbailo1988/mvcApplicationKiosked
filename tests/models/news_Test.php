<?php
/**
 * Created by JetBrains PhpStorm.
 * User: daniel
 * Date: 28/07/13
 * Time: 18:30
 * To change this template use File | Settings | File Templates.
 */
//require_once '../../models/news.php';
//require_once '../../libraries/drivers/mysqlimproved.php';
//require_once '../../controllers/router.php';

require_once realpath(dirname(__FILE__)) . '/../../models/news.php';
require_once  realpath(dirname(__FILE__)) . '/../../libraries/database.php';
require_once  realpath(dirname(__FILE__)) . '/../../libraries/drivers/mysqlimproved.php';


class News_Model_Test extends PHPUnit_Framework_TestCase
{
    /*This function will check with a stub if the article['title']

    */


    public function test_searchDataBaseCheckUppercase()
    {
        /* This function tests if the article['title'] converts
        to upperCase doing a stub which take out the dependency
        with the data base.
        */

        $news = new News_Model();


        $result = array ("title" => "how to generate lorem\nipsum");

        $dbstub = $this->getMockBuilder('MysqlImproved_Driver')
            ->disableOriginalConstructor()
            ->getMock();

        $dbstub->expects($this->any())
            ->method('fetch')
            ->will($this->returnValue($result));

        $news->setDb($dbstub);

        $article = $news->get_article("John Squibb");

        $this->assertEquals("HOW TO GENERATE LOREM\nIPSUM", $article['title']);

     /*   // Create a stub for the SomeClass class.
        $stub = $this->getMock('SomeClass');

        // Create a map of arguments to return values.
        $map = array(
            array('a', 'b', 'c', 'd'),
            array('e', 'f', 'g', 'h')
        );

        // Configure the stub.
        $stub->expects($this->any())
            ->method('doSomething')
            ->will($this->returnValueMap($map));

        // $stub->doSomething() returns different values depending on
        // the provided arguments.
        $this->assertEquals('d', $stub->doSomething('a', 'b', 'c'));
        $this->assertEquals('h', $stub->doSomething('e', 'f', 'g'));*/
    }
}