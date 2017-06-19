<?php
/*
 * This file is part of the feed-io package.
 *
 * (c) Alexandre Debril <alex.debril@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FeedIo;


use FeedIo\Feed\Item;
use FeedIo\Formatter\JsonFormatter;

class JsonFormatterTest extends \PHPUnit_Framework_TestCase
{



    public function testToString()
    {
        $items = [
            $this->getItem('item 1', 'Lorem Ipsum'),
            $this->getItem('item 2', '<p>Foo Bar</p>'),
        ];

        $feed = new Feed();
        $feed->setTitle('feed title');

        foreach($items as $item) {
            $feed->add($item);
        }

        $formatter = new JsonFormatter();
        $string = $formatter->toString($feed);

        var_dump($string);
        $this->assertJson($string);
    }

    public function testIsHtml()
    {
        $formatter = new JsonFormatter();

        $this->assertTrue($formatter->isHtml('<p>lorem ipsum</p>'));

        $this->assertFalse($formatter->isHtml('lorem ipsum'));
    }

    protected function getItem($title, $description)
    {
        $item = new Item();
        $author = new Item\Author();
        $author->setName('foo bar');
        $item->setAuthor($author);

        $media = new Item\Media();
        $media->setUrl('http://something');
        $item->addMedia($media);

        $item->setTitle($title);
        $item->setDescription($description);

        return $item;
    }

}