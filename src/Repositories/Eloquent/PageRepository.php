<?php

namespace Cms_Framework_Seed\Page\Repositories\Eloquent;

use Cms_Framework_Seed\Page\Interfaces\PageRepositoryInterface;
use Cms_Framework_Seed\Repository\Eloquent\BaseRepository;

class PageRepository extends BaseRepository implements PageRepositoryInterface
{

    /**
     * Booting the repository.
     *
     * @return null
     */
    public function boot()
    {
        $this->fieldSearchable = config('cms_framework_seed.page.page.search');
    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('cms_framework_seed.page.page.model');
    }

    /**
     * Get page by id or slug.
     *
     * @return void
     */
    public function getPage($var)
    {
        return $this->findBySlug($var);
    }
}
