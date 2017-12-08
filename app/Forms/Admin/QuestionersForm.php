<?php

namespace App\Forms\Admin;

use Kris\LaravelFormBuilder\Form;

class QuestionersForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('category_name', 'text', [
                'label' => trans('admin.fields.questioner.name')
            ])
            ->add('question', 'text', [
                'label' => trans('admin.fields.questioner.name')
            ])
            ->add('anser_items', 'text', [
                'label' => trans('admin.fields.questioner.email')
            ]);
        parent::buildForm();
    }
}
