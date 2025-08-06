<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing CertifiedRolesListTypeV2Type
 *
 *
 * XSD Type: CertifiedRolesListTypeV2
 */
class CertifiedRolesListTypeV2Type
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertifiedRoleTypeV2Type[] $certifiedRole
     */
    private $certifiedRole = [
        
    ];

    /**
     * Adds as certifiedRole
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertifiedRoleTypeV2Type $certifiedRole
     */
    public function addToCertifiedRole(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertifiedRoleTypeV2Type $certifiedRole)
    {
        $this->certifiedRole[] = $certifiedRole;
        return $this;
    }

    /**
     * isset certifiedRole
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertifiedRole($index)
    {
        return isset($this->certifiedRole[$index]);
    }

    /**
     * unset certifiedRole
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertifiedRole($index)
    {
        unset($this->certifiedRole[$index]);
    }

    /**
     * Gets as certifiedRole
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertifiedRoleTypeV2Type[]
     */
    public function getCertifiedRole()
    {
        return $this->certifiedRole;
    }

    /**
     * Sets a new certifiedRole
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertifiedRoleTypeV2Type[] $certifiedRole
     * @return self
     */
    public function setCertifiedRole(array $certifiedRole)
    {
        $this->certifiedRole = $certifiedRole;
        return $this;
    }
}

