<?php
namespace RelationSelectFieldsBundle;
use OpenDxp\Extension\Bundle\AbstractOpenDxpBundle;
use OpenDxp\Extension\Bundle\OpenDxpBundleAdminClassicInterface;
use OpenDxp\Extension\Bundle\Traits\PackageVersionTrait;

class RelationSelectFieldsBundle extends AbstractOpenDxpBundle implements OpenDxpBundleAdminClassicInterface {

    use PackageVersionTrait;

    const PACKAGE_NAME = 'nambu-ch/opendxp-relation-select-fields';

    protected function getComposerPackageName(): string {
        return self::PACKAGE_NAME;
    }

    public function getEditmodeJsPaths(): array {
        return [
            "/bundles/relationselectfields/admin/js/document-tags/many-to-one-relation-select.js",
            "/bundles/relationselectfields/admin/js/document-tags/many-to-many-relation-select.js",
        ];
    }

    public function getJsPaths(): array {
        return [
            "/bundles/relationselectfields/admin/js/classfields/many-to-one-relation-select/data.js",
            "/bundles/relationselectfields/admin/js/classfields/many-to-one-relation-select/tag.js",
            "/bundles/relationselectfields/admin/js/classfields/many-to-many-relation-select/data.js",
            "/bundles/relationselectfields/admin/js/classfields/many-to-many-relation-select/tag.js",
        ];
    }

    public function getEditmodeCssPaths(): array {
        return [];
    }

    public function getCssPaths(): array {
        return [];
    }

}
