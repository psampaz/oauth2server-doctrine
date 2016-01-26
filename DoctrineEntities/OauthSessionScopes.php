<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthSessionScopes
 *
 * @ORM\Table(name="oauth_session_scopes", indexes={@ORM\Index(name="oauth_session_scopes_session_id_foreign", columns={"session_id"}), @ORM\Index(name="oauth_session_scopes_scope_foreign", columns={"scope"})})
 * @ORM\Entity
 */
class OauthSessionScopes
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
     * @var \AppBundle\Entity\OauthSessions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OauthSessions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     * })
     */
    private $session;


}

