<?php
declare(strict_types=1);

namespace App\Model\Behavior;

use ArrayObject;
use Cake\Event\EventInterface;
use Cake\ORM\Behavior;
use Cake\ORM\Query\SelectQuery;

class SoftDeleteBehavior extends Behavior
{
    //A função beforeFind necessita de 4 argumentos para funcionar corretamente, mas nesse caso apenas o query vai ser utilizado
    public function beforeFind(EventInterface $event, SelectQuery $query, ArrayObject $options, $primary): void
    {
        //Alias é para pegar o nome da tabela 
        $alias = $this->_table->getAlias();
        
        //Usa o alias pego no getAlias para pegar o campo deleted e verificar se é nulo, se caso for nulo, 
        //significa que não foi deletado
        $query->where(["$alias.deleted IS" => null]);
    }
}