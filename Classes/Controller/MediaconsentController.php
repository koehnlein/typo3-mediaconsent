<?php

namespace ArbkomEKvW\Mediaconsent\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class MediaconsentController
 *
 * @package ArbkomEKvW\Mediaconsent\Controller
 */
class MediaconsentController extends ActionController
{


    /**
     * List Action
     *
     * @return void
     */
    public function listAction()
    {
        $this->view->assign('placeholder', "Hurz! I bims!");
    }
}
