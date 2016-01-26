<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAccessTokenScopes
 *
 * @ORM\Table(name="oauth_access_token_scopes", indexes={@ORM\Index(name="oauth_access_token_scopes_access_token_foreign", columns={"access_token"}), @ORM\Index(name="oauth_access_token_scopes_scope_foreign", columns={"scope"})})
 * @ORM\Entity
 */
class OauthAccessTokenScopes
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
     * @var \AppBundle\Entity\OauthScopes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OauthScopes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="scope", referencedColumnName="id")
     * })
     */
    private $scope;

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

