<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Hubs applicants';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        // $grid->column('email_verified_at', __('Email verified at'));
        // $grid->column('password', __('Password'));
        // $grid->column('remember_token', __('Remember token'));
        // $grid->column('residence', __('Residence'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->id('id')->sortable();

        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->like('name','name');
            $filter->like('email','email');
             $filter->like('residence','Residence');
            $filter->equal('region')->select(['Greater Accra' => 'Greater Accra']);
            $filter->equal('sex')->select(['male' => 'Male', 'female' => 'Female']);
            $filter->equal('approved')->select(['Yes' => 'Approved', 'No' => 'Not approved']);

        });
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        // $show->field('email_verified_at', __('Email verified at'));
        // $show->field('password', __('Password'));
        // $show->field('remember_token', __('Remember token'));
        $show->field('residence', __('Residence'));
        $show->field('region', __('Region'));
        $show->field('question', __('Question'));
        $show->field('sex', __('Sex'));
        $show->field('approved', __('Approved'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User);

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        // $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        // $form->password('password', __('Password'));
        $form->text('residence', __('Residence'));
        $form->text('region', __('Region'));
        $form->text('question', __('Question'));
        $form->text('sex', __('Sex'));
        $form->text('approved', __('Approved'));
        // $form->text('remember_token', __('Remember token'));

        return $form;
    }


}
