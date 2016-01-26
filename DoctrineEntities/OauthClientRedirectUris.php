<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthClientRedirectUris
 *
 * @ORM\Table(name="oauth_client_redirect_uris")
 * @ORM\Entity
 */
class OauthClientRedirectUris
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=255, nullable=false)
     */
    private $clientId;

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_uri", type="string", length=255, nullable=false)
     */
    private $redirectUri;


}

