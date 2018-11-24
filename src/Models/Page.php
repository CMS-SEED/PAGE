<?php

namespace Cms_Framework_Seed\Page\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Cms_Framework_Seed\Activities\Traits\LogsActivity;
use Cms_Framework_Seed\Database\Model;
use Cms_Framework_Seed\Database\Traits\Slugger;
use Cms_Framework_Seed\Filer\Traits\Filer;
use Cms_Framework_Seed\Hashids\Traits\Hashids;
use Cms_Framework_Seed\Trans\Traits\Translatable;

class Page extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable, LogsActivity;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'cms_framework_seed.page.page';

    // /**
    //  * Set the pages title and heading.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;

        if (empty($this->attributes['title'])) {
            $this->attributes['title'] = $value;
        }

        if (empty($this->attributes['meta_title'])) {
            $this->attributes['meta_title'] = $value;
        }

        if (empty($this->attributes['heading'])) {
            $this->attributes['heading'] = $value;
        }

        if (empty($this->attributes['sub_heading'])) {
            $this->attributes['sub_heading'] = $value;
        }

    }

}
