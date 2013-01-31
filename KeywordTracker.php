<?php
require_once 'class.gaparse.php';

class KeywordTracker {
  private $ga_cookie;
  
  private $referer = '';
  
  public function __construct($referer = '') {
    $this->ga_cookie = new GA_Parse($_COOKIE);
    $this->referer = $referer;
  }
  
  public function getVersion() {
    return '1.0';
  }
  
  public function getInfo() {
    return array(
      'version' => $this->getVersion(),
      'ga_cookie' => $this->ga_cookie,
    );
  }
  
  public function formatEmail($html = false) {
    $this->ga_cookie = new GA_Parse($_COOKIE);
    
    $output = "-------------------------------------------------------\nKeyword Tracking Stats:\n-------------------------------------------------------\n";
    $output .= "Keyword: ".$this->ga_cookie->campaign_term."\n";
    $output .= "Source: ".$this->ga_cookie->campaign_source."\n";
    $output .= "Medium: ".$this->ga_cookie->campaign_medium."\n";
    $output .= "IP Address: ".$_SERVER['REMOTE_ADDR']."\n";
    
    $output .= "-------------------------------------------------------\nOther Tracking Stats:\n-------------------------------------------------------\n";
    $output .= "Campaign: ".$this->ga_cookie->campaign_name."\n";
    $output .= "Referer URL: ".$this->referrer."\n";
    $output .= "-------------------------------------------------------";
    
    return ($html) ? nl2br($output) : $output;
  }
}

?>