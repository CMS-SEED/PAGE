<?php

namespace Cms_Framework_Seed\Page\Repositories\Presenter;

use Cms_Framework_Seed\Repository\Presenter\FractalPresenter;

class PageListPresenter extends FractalPresenter
{

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PageListTransformer();
    }
}
