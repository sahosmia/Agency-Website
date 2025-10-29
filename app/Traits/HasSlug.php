<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasSlug
{
    /**
     * Boot the trait.
     *
     * @return void
     */
    protected static function bootHasSlug()
    {
        static::creating(function (Model $model) {
            if (empty($model->slug)) {
                $model->slug = $model->generateUniqueSlug($model->{$model->getSlugSourceField()});
            }
        });

        static::updating(function (Model $model) {
            if ($model->isDirty($model->getSlugSourceField())) {
                $model->slug = $model->generateUniqueSlug($model->{$model->getSlugSourceField()});
            }
        });
    }

    /**
     * Get the source field for the slug.
     *
     * @return string
     */
    public function getSlugSourceField(): string
    {
        return 'title';
    }

    /**
     * Generate a unique slug for the model.
     *
     * @param  string  $source
     * @return string
     */
    protected function generateUniqueSlug(string $source): string
    {
        $slug = Str::slug($source);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)->when($this->exists, fn ($q) => $q->where($this->getKeyName(), '!=', $this->getKey()))->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}
