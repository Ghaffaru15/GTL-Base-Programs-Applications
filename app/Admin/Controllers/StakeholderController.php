<?php

namespace App\Admin\Controllers;

use App\Stakeholder;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StakeholderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Stakeholder';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Stakeholder);

        // $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('company', __('Company'));
        $grid->column('designation', __('Designation'));
        $grid->column('email', __('Email'));
        $grid->column('contact', __('Contact'));
        // $grid->column('contact', __('Contact'));
        // $grid->column('email', __('Email'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Stakeholder::findOrFail($id));

        // $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('company', __('Company'));
        $show->field('designation', __('Designation'));
        $show->field('contact', __('Contact'));
        $show->field('email', __('Email'));
        $show->field('created_at', __('Date and time'));
        // $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Stakeholder);

        $form->text('name', __('Name'));
        $form->text('company', __('Company'));
        $form->text('designation', __('Designation'));
        $form->text('contact', __('Contact'));
        $form->email('email', __('Email'));

        return $form;
    }
}
