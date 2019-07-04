<?php

namespace App\Admin\Controllers;

use App\CurriculumDev;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CurriculumDevsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Curriculum Developers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CurriculumDev);
        $grid->column('name',__('Name of Organisation/Consultant'));
        $grid->column('email',__('Email address'));


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
        $user = CurriculumDev::findOrFail($id);
        $show = new Show(CurriculumDev::findOrFail($id));

        $show->field('name', 'Name of Organisation/Consultant');
        $show->field('email', 'Email address');
        $show->field('phone_number', 'Phone number');
        $show->proposals('Proposal')->as(function ($proposals) use ($id,$user) {
            // $html = asset('images/Ghanatechlab.jpg');
                $html = asset('uploads/curriculum/proposals/' . $id . '.' . $user->proposal);
            return $html;

        })->file('proposal');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CurriculumDev);

        $form->text('name', __('Name of organisation/consultant'));
        $form->text('email', __('Email address'));
        $form->text('phone_number', __('Phone number'));

        return $form;
    }
}
