<?php

namespace App\Admin\Controllers;

use App\NationalPitch;
use Illuminate\Support\Facades\Storage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NationalPitchController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'National Pitch Summit Attendees';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new NationalPitch);
        $grid->column('name',__('Name of Organisation/Consultant'));
        $grid->column('company',__('Company/Organisation'));
        $grid->column('designation',__('Designation'));
        $grid->column('contact',__('Contact'));
        $grid->column('email', __('Email'));


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
        $show->field('company', 'Company/Institution');
        $show->field('designation', 'Designation');
        // $show->proposals('Proposal')->as(function ($proposals) use ($id,$user) {
        //     // $html = asset('images/Ghanatechlab.jpg');
        //         $html = Storage::disk('s3')->url('/ai/curriculum/proposals/' . $id . '.' . $user->proposal);
        //         // $html = asset('uploads/curriculum/proposals/' . $id . '.' . $user->proposal);
        //     return $html;

        // })->file('proposal');
        $show->field('contact', __('Contact'));
        $show->field('email',__('Email'));

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
        $form->text('company', __('Company'));
        $form->text('designation', __('Designation'));
        $form->text('contact',__('Contact'));
        $form->text('email',__('Email'));

        return $form;
    }
}
