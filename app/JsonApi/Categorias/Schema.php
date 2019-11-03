<?php

namespace App\JsonApi\Categorias;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'categorias';

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
            'designacao' => $resource->designacao,
            'created-at' => $resource->created_at->toAtomString(),
            'updated-at' => $resource->updated_at->toAtomString(),
        ];
    }
    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
      return [
        'exames' => [
          self::SHOW_SELF => true,
          self::SHOW_RELATED => true,
        ]
      ];
    }
}
