<?php
/*
 * This file is part of the feed-io package.
 *
 * (c) Alexandre Debril <alex.debril@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FeedIo\Feed\Item;


class Element
{

    /**
     * @var string
     */
    protected $name;
    
    /**
     * @var string
     */
    protected $content;
    
    /**
     * @var array
     */
    protected $attributes = array();
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     * @return $this
     */   
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }
    
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * @param string $content
     * @return $this
     */   
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }
    
    /**
     * @param string $name
     * @return string
     */
    public function getAttribute($name)
    {
        if ( array_key_exists($name, $this->attributes) ) {
            return $this->attributes[$name];
        }
        
        return null;
    }
    
    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    
    /**
     * @param string $name
     * @param string $value
     * @return $this
     */
    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
        
        return $this;
    }
    
}
