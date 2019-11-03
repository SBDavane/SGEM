<?php

namespace App\JsonApi\Funcionarios;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'funcionarios';

    /**
     * @param $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'primeiro_nome' => $resource->primeiro_nome,
            'ultimo_nome' => $resource->ultimo_nome,
            'activo' => $resource->ultimo_nome,
            'created-at' => $resource->created_at->toAtomString(),
            'updated-at' => $resource->updated_at->toAtomString(),
        ];
    }

public function getRelationships($resource, $isPrimary, array $includeRelationships)
  {
    return [
      'local' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ]
    ];
  }
}
