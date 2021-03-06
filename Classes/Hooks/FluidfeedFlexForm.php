<?php

namespace Interfrog\IfFluidfeed\Hooks;

class FluidfeedFlexForm {

  /**
   * user template layout
   * @param array $config
   */
  public function user_templateLayout(array &$config) {
    $templateUtility = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Interfrog\\IfFluidfeed\\Utility\\IfTemplateLayoutUtility');
    $templateLayouts = $templateUtility->getAvailableTemplateLayouts($config['row']['pid']);
    foreach ($templateLayouts as $layout) {
      $additionalLayout = array(
        $GLOBALS['LANG']->sL($layout[0], TRUE),
        $layout[1]
      );
      array_push($config['items'], $additionalLayout);
    }
  }

}