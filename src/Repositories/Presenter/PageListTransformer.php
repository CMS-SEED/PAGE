<?php

namespace Cms_Framework_Seed\Page\Repositories\Presenter;

use League\Fractal\TransformerAbstract;

class PageListTransformer extends TransformerAbstract
{
    public function transform(\Cms_Framework_Seed\Page\Models\Page $page)
    {
        return [
            'id'      => $page->getRouteKey(),
            'slug'    => $page->slug,
            'url'     => $page->slug . '.html',
            'name'    => $page->name,
            'heading' => $page->heading,
            'title'   => $page->title,
            'keyword' => $page->keyword,
            'status'  => $page->status,
            'order'   => $page->order,
        ];
    }
}
