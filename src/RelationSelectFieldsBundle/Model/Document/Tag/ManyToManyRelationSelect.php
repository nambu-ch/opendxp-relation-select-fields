<?php
namespace RelationSelectFieldsBundle\Model\Document\Tag;
use OpenDxp\Model;

/**
 * @method \OpenDxp\Model\Document\Editable\Dao getDao()
 */
class ManyToManyRelationSelect extends Model\Document\Editable\Relations implements \Iterator {

    /**
     * @return string
     * @see TagInterface::getType
     *
     */
    public function getType(): string {
        return 'relations_select';
    }

}
