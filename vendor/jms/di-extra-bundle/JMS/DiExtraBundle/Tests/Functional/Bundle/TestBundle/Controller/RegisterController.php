<?php

/*
 * Copyright 2011 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace JMS\DiExtraBundle\Tests\Functional\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use JMS\DiExtraBundle\Annotation as DI;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
abstract class RegisterController
{
    /**
     * @Route("/register")
     */
    public function registerAction()
    {
        $mailer = $this->getMailer();

        return new Response($mailer->getFromMail(), 200, array('Content-Type' => 'text/plain'));
    }

    /** @DI\LookupMethod("test_mailer") */
    abstract protected function getMailer();
}
