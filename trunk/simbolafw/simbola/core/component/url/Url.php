<?php

namespace simbola\core\component\url;

/** 
 * Url component definitions
 *
 * @author Faraj Farook
 */
class Url extends \simbola\core\component\system\lib\Component {

    /**
     * Setup the defaults
     */
    public function setupDefault() {
        $this->setParamDefault("HIDE_INDEX", true);
        $this->setParamDefault("URL_BASE", false);
    }
    
    /**
     * Decodes the url string and returns the Page object
     * 
     * @param type $urlString
     * @return \simbola\core\component\url\lib\Page
     */
    public function decode($urlString) {
        $page = new lib\Page();
        $page->loadFromUrl($urlString);
        return $page;
    }
    
    /**
     * Fetch the absolute URL of the request 
     *  For example 
     *   http://www.example.com/app/index.php/www/site/index
     *   http://www.example.com/app/www/site/index
     *   http://www.example.com/www/site/index
     * 
     * @return string
     */
    public function getAbsoluteUrl() {
        return $this->getBaseUrl() . $_SERVER['REQUEST_URI'];
    }

    /**
     * Fetch and returns the base URL of the application
     *  http://www.example.com/app     
     *  http://www.example.com
     * 
     * @return string
     */
    public function getBaseUrl() {        
        $url = 'http' . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://" . $_SERVER['SERVER_NAME'];
        $appBaseUrl = $this->getAppUrlBase();
        if($appBaseUrl != ""){
            $url  = $url . "/" . $this->getAppUrlBase();
        }
        return $url;
    }
    
    /**
     * Fetch and returns Application URL_BASE parameter 
     * 
     * @return string
     */
    public function getAppUrlBase() {
        $postFix = "";
        if($this->getParam("URL_BASE")){
            $postFix = $this->getParam("URL_BASE");
        }
        return $postFix;
    }

    /**
     * Redirect to the page specified
     * 
     * @param lib\Page $page
     */
    public function redirect($page) {        
        header("Location: {$page->getUrl()}");
    }

}

?>