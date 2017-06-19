<?php

/**
 * Hide Page Module
 *
 * Sets status hidden when user saves pages that use a specific template.
 *
 * @property $pageTemplate
 *
 */

class HidePage extends WireData implements Module {

  public function init() {
    $this->pages->addHookBefore('save', $this, 'hideThisPage');
  }

  public function hideThisPage($event) {
    $page = $event->arguments(0);
    if($page->template != $this->pageTemplate) return; // replace 'category-site' with your template name
    if(!$page->hasStatus('hidden')) {
      $page->addStatus('hidden');
    }
  }
}
