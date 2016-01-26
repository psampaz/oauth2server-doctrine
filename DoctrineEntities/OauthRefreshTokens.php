<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthRefreshTokens
 *
 * @ORM\Table(name="oauth_refresh_tokens", indexes={@ORM\Index(name="oauth_refresh_tokens_access_token_foreign", columns={"access_token"})})
 * @ORM\Entity
 */
class OauthRefreshTokens
{
    /**
     * @var string
     *
     * @ORM\Column(name="refresh_token", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refreshToken;

    /**
     * @var integer
     *
     * @ORM\Column(name="expire_time", type="integer", nullable=false)
     */
    private $expireTime;

    /**
     * @var \AppBundle\Entity\OauthAccessTokens
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OauthAccessTokens")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="access_token", referencedColumnName="access_token")
     * })
     */
    private $accessToken;


}

