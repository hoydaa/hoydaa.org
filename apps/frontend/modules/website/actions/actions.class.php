<?php

/**
 * website actions.
 *
 * @package    hoydaa
 * @subpackage website
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class websiteActions extends sfActions
{
    public function executeList()
    {
        $this->tab = 'websites';
        $this->pages = array (
        array ('label' => 'Home', 'url' => '@homepage'),
        array ('label' => 'Websites')
        );
        $this->websites = WebsitePeer::doSelect(new Criteria());
    }
}
