<?php

namespace App\Http\Controllers\Api\DataTables;

use App\Base\Controllers\DataTableController;
use App\Questioner;

class QuestionerDataTable extends DataTableController
{
    /**
     * @var string
     */
    protected $model = Questioner::class;

    /**
     * Columns to show
     *
     * @var array
     */
    protected $columns = ['category_name', 'question', 'answer_items'];

    /**
     * Image columns to show
     *
     * @var array
     */
    // protected $image_columns = ['picture'];

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $users = Questioner::query();
        return $this->applyScopes($users);
    }
}
