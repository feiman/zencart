<?php
/**
 * @copyright Copyright 2003-2017 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:  New in v1.6.0 $
 */
namespace App\Controllers;

/**
 * Class MediaManagerClips
 * @package App\Controllers
 */
class MediaManagerClips extends AbstractLeadController
{
    /**
     *
     */
    public function addExecute($formValidation = null)
    {
        parent::addExecute($formValidation);
        $this->tplVarManager->set('pageDefinition.fields.media_id.value', $this->request->readGet('media_id'));
    }

    /**
     *
     */
    public function insertExecute()
    {
        $this->service->insertExecute();
        $this->response['redirect'] = zen_href_link($this->request->readGet('cmd'), 'media_id=' . (int)$this->request->readPost('entry_field_media_id'));
    }

}
