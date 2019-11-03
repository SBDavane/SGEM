<?php

namespace App\JsonApi\Exames;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'exames';

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
            'nome' => $resource->nome,
            'estado' => $resource->estado,
            'data_realizacao' => $resource->data_realizacao,

            'created-at' => $resource->created_at->toAtomString(),
            'updated-at' => $resource->updated_at->toAtomString(),
        ];
    }

    public function getRelationships($resource, $isPrimary, array $includeRelationships)
  {
    return [
      'categoria' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ],
      'local' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ],
      'paciente' => [
        self::SHOW_SELF => true,
        self::SHOW_RELATED => true,
      ]
    ];
  }
}
