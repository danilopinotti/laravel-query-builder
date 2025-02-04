<?php

namespace Spatie\QueryBuilder\Filters;

use Illuminate\Database\Eloquent\Builder;

/**
 * @template TModelClass of \Illuminate\Database\Eloquent\Model
 * @template-implements \Spatie\QueryBuilder\Filters\Filter<TModelClass>
 */
class FiltersBeginsWithStrict extends FiltersPartial implements Filter
{
    protected function getWhereRawParameters($value, string $property): array
    {
        return [
            "{$property} LIKE ?",
            ["{$value}%"],
        ];
    }
}
