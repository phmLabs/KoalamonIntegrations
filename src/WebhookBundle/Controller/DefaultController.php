<?php

namespace KoalamonIntegrations\WebhookBundle\Controller;

use Koalamon\Bundle\IncidentDashboardBundle\Controller\ProjectAwareController;

class DefaultController extends ProjectAwareController
{
    public function webhookAction($hookName)
    {
        return $this->render('KoalamonIntegrationsWebhookBundle:Default:' . $hookName . '.html.twig');
    }
}
