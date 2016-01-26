<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAuthCodeScopes
 *
 * @ORM\Table(name="oauth_auth_code_scopes", indexes={@ORM\Index(name="oauth_auth_code_scopes_auth_code_foreign", columns={"auth_code"}), @ORM\Index(name="oauth_auth_code_scopes_scope_foreign", columns={"scope"})})
 * @ORM\Entity
 */
class OauthAuthCodeScopes
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
     * @var \AppBundle\Entity\OauthAuthCodes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OauthAuthCodes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auth_code", referencedColumnName="auth_code")
     * })
     */
    private $authCode;


}

