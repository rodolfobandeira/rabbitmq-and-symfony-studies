<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @param $name string
     * @Route("/", name="homepage")
     * @return string
     */
    public function indexAction($name = 'rodolfo')
    {
        $this->get('old_sound_rabbit_mq.hello_rabbitmq_producer')->publish($name);
 
	return new Response('Hello Rabbitmq Executed!');
    }
}
