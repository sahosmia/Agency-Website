<?php

namespace App\Traits;

trait ScopeActive
{
    /**
     * Scope a query to only include active models.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where($this->getActiveStatusColumn(), 1);
    }

    /**
     * Get the name of the active status column.
     *
     * @return string
     */
    protected function getActiveStatusColumn()
    {
        return 'is_active';
    }
}
