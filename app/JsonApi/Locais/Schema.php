<?php

namespace App\JsonApi\Locais;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'locais';

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
            'cidade' => $resource->cidade,
            'nome' => $resource->nome,
            'created-at' => $resource->created_at->toAtomString(),
            'updated-at' => $resource->updated_at->toAtomString(),
        ];
    }

public function getRelationships($resource, $isPrimary, array $includeRelationships)
  {
    return [
      'funcionarios' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ],
      'exames' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ]
    ];
  }
}
