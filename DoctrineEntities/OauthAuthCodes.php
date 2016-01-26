<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAuthCodes
 *
 * @ORM\Table(name="oauth_auth_codes", indexes={@ORM\Index(name="oauth_auth_codes_session_id_foreign", columns={"session_id"})})
 * @ORM\Entity
 */
class OauthAuthCodes
{
    /**
     * @var string
     *
     * @ORM\Column(name="auth_code", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $authCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="expire_time", type="integer", nullable=false)
     */
    private $expireTime;

    /**
     * @var string
     *
     * @ORM\Column(name="client_redirect_uri", type="string", length=255, nullable=false)
     */
    private $clientRedirectUri;

    /**
     * @var \AppBundle\Entity\OauthSessions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OauthSessions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     * })
     */
    private $session;


}

