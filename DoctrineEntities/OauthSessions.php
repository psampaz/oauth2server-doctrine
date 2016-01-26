<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthSessions
 *
 * @ORM\Table(name="oauth_sessions", indexes={@ORM\Index(name="oauth_sessions_client_id_foreign", columns={"client_id"})})
 * @ORM\Entity
 */
class OauthSessions
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
     * @ORM\Column(name="owner_type", type="string", length=255, nullable=false)
     */
    private $ownerType;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_id", type="string", length=255, nullable=false)
     */
    private $ownerId;

    /**
     * @var string
     *
     * @ORM\Column(name="client_redirect_uri", type="string", length=255, nullable=true)
     */
    private $clientRedirectUri;

    /**
     * @var \AppBundle\Entity\OauthClients
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OauthClients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;


}

