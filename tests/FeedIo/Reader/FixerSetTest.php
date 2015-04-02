<?php
/*
 * This file is part of the feed-io package.
 *
 * (c) Alexandre Debril <alex.debril@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FeedIo\Reader;


use FeedIo\Feed;

class FixerSetTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd()
    {
        $fixer = $this->getMockForAbstractClass('\FeedIo\Reader\FixerInterface');
        
        $fixerSet = new FixerSet;
        $fixerSet->add($fixer);
        
        $this->assertAttributeContainsOnly($fixer, 'fixers', $fixerSet);
    }
    
}