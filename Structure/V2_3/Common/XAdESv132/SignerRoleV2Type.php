<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing SignerRoleV2Type
 *
 *
 * XSD Type: SignerRoleV2Type
 */
class SignerRoleV2Type
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[] $claimedRoles
     */
    private $claimedRoles = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertifiedRoleTypeV2Type[] $certifiedRolesV2
     */
    private $certifiedRolesV2 = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignedAssertion[] $signedAssertions
     */
    private $signedAssertions = null;

    /**
     * Adds as claimedRole
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType $claimedRole
     */
    public function addToClaimedRoles(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType $claimedRole)
    {
        $this->claimedRoles[] = $claimedRole;
        return $this;
    }

    /**
     * isset claimedRoles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClaimedRoles($index)
    {
        return isset($this->claimedRoles[$index]);
    }

    /**
     * unset claimedRoles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClaimedRoles($index)
    {
        unset($this->claimedRoles[$index]);
    }

    /**
     * Gets as claimedRoles
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[]
     */
    public function getClaimedRoles()
    {
        return $this->claimedRoles;
    }

    /**
     * Sets a new claimedRoles
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[] $claimedRoles
     * @return self
     */
    public function setClaimedRoles(?array $claimedRoles = null)
    {
        $this->claimedRoles = $claimedRoles;
        return $this;
    }

    /**
     * Adds as certifiedRole
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertifiedRoleTypeV2Type $certifiedRole
     */
    public function addToCertifiedRolesV2(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertifiedRoleTypeV2Type $certifiedRole)
    {
        $this->certifiedRolesV2[] = $certifiedRole;
        return $this;
    }

    /**
     * isset certifiedRolesV2
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertifiedRolesV2($index)
    {
        return isset($this->certifiedRolesV2[$index]);
    }

    /**
     * unset certifiedRolesV2
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertifiedRolesV2($index)
    {
        unset($this->certifiedRolesV2[$index]);
    }

    /**
     * Gets as certifiedRolesV2
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertifiedRoleTypeV2Type[]
     */
    public function getCertifiedRolesV2()
    {
        return $this->certifiedRolesV2;
    }

    /**
     * Sets a new certifiedRolesV2
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertifiedRoleTypeV2Type[] $certifiedRolesV2
     * @return self
     */
    public function setCertifiedRolesV2(?array $certifiedRolesV2 = null)
    {
        $this->certifiedRolesV2 = $certifiedRolesV2;
        return $this;
    }

    /**
     * Adds as signedAssertion
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignedAssertion $signedAssertion
     */
    public function addToSignedAssertions(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignedAssertion $signedAssertion)
    {
        $this->signedAssertions[] = $signedAssertion;
        return $this;
    }

    /**
     * isset signedAssertions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignedAssertions($index)
    {
        return isset($this->signedAssertions[$index]);
    }

    /**
     * unset signedAssertions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignedAssertions($index)
    {
        unset($this->signedAssertions[$index]);
    }

    /**
     * Gets as signedAssertions
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignedAssertion[]
     */
    public function getSignedAssertions()
    {
        return $this->signedAssertions;
    }

    /**
     * Sets a new signedAssertions
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignedAssertion[] $signedAssertions
     * @return self
     */
    public function setSignedAssertions(?array $signedAssertions = null)
    {
        $this->signedAssertions = $signedAssertions;
        return $this;
    }
}

