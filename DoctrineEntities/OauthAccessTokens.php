<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAccessTokens
 *
 * @ORM\Table(name="oauth_access_tokens", indexes={@ORM\Index(name="oauth_access_tokens_session_id_foreign", columns={"session_id"})})
 * @ORM\Entity
 */
class OauthAccessTokens
{
    /**
     * @var string
     *
     * @ORM\Column(name="access_token", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $accessToken;

    /**
     * @var integer
     *
     * @ORM\Column(name="expire_time", type="integer", nullable=false)
     */
    private $expireTime;

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

