<?php

namespace App\Admin\Controllers;

use App\User;
use Illuminate\Support\Facades\Storage;
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
        $grid->column('hub_name', __('Hub Name'));
       
        $grid->column('project_lead_name','Name of Project Lead');
        $grid->column('project_lead_phone_number','Telephone Number');
         // $grid->column('application_registered', __('Application Registered ?'));
        // $grid->column('logo','Organisation Logo');
        // $grid->column('training_room','Training room available ?');
        // $grid->column('laptops','20 Laptops available ?');
        // $grid->column('committed','Committed to running AI Training ?');
        // $grid->column('incubation','Committed to running incubation ?');
        // $grid->column('internship_provision','Can provide internship places ?');
        // $grid->column('internship_places','Internship places');
        // $grid->column('reports','Can provide reports ?');
        // $grid->column('provide_trainers','Can provide 2 trainers ?');
        // $grid->column('business_lead','Can provide development lead');
        // $grid->column('email_verified_at', __('Email verified at'));
        // $grid->column('password', __('Password'));
        // $grid->column('remember_token', __('Remember token'));
        // $grid->column('residence', __('Residence'));
        $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));
        // $grid->id('id')->sortable();

        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->like('hub_name','Hub Name');
            // $filter->like('email','email');
             // $filter->like('residence','Residence');
            $filter->equal('application_registered',__('Organisation registered?'))->select(['Yes' => 'Yes','No' => 'No']);
            $filter->equal('training_room',__('Has training room for 20 individuals ?'))->select(['Yes' => 'Yes','No' => 'No']);
            // $filter->equal('sex')->select(['male' => 'Male', 'female' => 'Female']);
            // $filter->equal('approved')->select(['Yes' => 'Approved', 'No' => 'Not approved']);
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    public function detail($id)
    {
        // $_GLOBALS['id'] = $id;
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('hub_name','Hub Name');
        $show->field('application_registered','Organisation Registered ?');
        $show->field('project_lead_name','Name of Project Lead');
        $show->field('project_lead_phone_number','Telephone Number of Project Lead');
        $show->field('project_lead_email','Email address of Project Lead');
        // $show->image('Logo','3.jpg');
        $show->logos('Logo')->as(function ($logos) use ($id) {
            // $html = asset('images/Ghanatechlab.jpg');
                $html =  Storage::disk('s3')->url('https://gtlportal.s3.us-east-2.amazonaws.com/ai/hubs/logos/' . $id . '.png');
            // $html = Storage::disk('s3')->url('https://gtlportal.s3.us-east-2.amazonaws.com/ai/hubs/logos/2.png/xgigv8TnoEQY0jZk6jd4Od2CZPLHTleIc4XDr7ju.png');
                // $html = asset('uploads/hubs/logos/' . $id . '.png');
            return $html;

        })->image();

        $show->field('training_room','Have training room for at least 20 individuals?');
        $show->field('laptops','Have at least 20 laptops capable of running AI software ?');
        $show->field('committed','Committed to running 6-week AI Training?');
        $show->field('incubation','Committed to running 2-months incubation program?');
        $show->field('internship_provision','Can provide 20 internship places in AI-related roles for 2 months?');
        $show->field('internship_places','List of organisations providing internship');
        $show->field('reports','Committed to provide regular and timely reports?');
        $show->field('provide_trainers','Can provide 2 trainers skilled in AI ?');
        $show->field('business_lead','Can provide business development lead for 2 months incubation program?');

        // $show->field('name', __('Name'));
        // $show->field('email', __('Email'));
        // // $show->field('email_verified_at', __('Email verified at'));
        // // $show->field('password', __('Password'));
        // // $show->field('remember_token', __('Remember token'));
        // $show->field('residence', __('Residence'));
        // $show->field('region', __('Region'));
        // $show->field('question', __('Question'));
        // $show->field('sex', __('Sex'));
        // $show->field('approved', __('Approved'));
        // $show->field('created_at', __('Created at'));
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
        $form = new Form(new User);

        // $form->field('id', __('Id'));
        $form->text('hub_name',__('Hub Name'));
        $form->text('application_registered',__('Organisation Registered ?'));
        $form->text('project_lead_name',__('Name of Project Lead'));
        $form->text('project_lead_phone_number',__('Telephone Number of Project Lead'));
        $form->text('project_lead_email',__('Email address of Project Lead'));
        // $form->image('Logo','3.jpg');
        // $form->logos('Logo')->as(function ($logos) use ($id) {
        //     // $html = asset('images/Ghanatechlab.jpg');
        //         $html = asset('storage/hubs/logos/' . $id . '.png');
        //     return $html;

        // })->image();

        $form->text('training_room',__('Have training room for at least 20 individuals?'));
        $form->text('laptops',__('Have at least 20 laptops capable of running AI software ?'));
        $form->text('committed',__('Committed to running 6-week AI Training?'));
        $form->text('incubation',__('Committed to running 2-months incubation program?'));
        $form->text('internship_provision',__('Can provide 20 internship places in AI-related roles for 2 months?'));
        $form->text('internship_places',__('List of organisations providing internship'));
        $form->text('reports',__('Committed to provide regular and timely reports?'));
        $form->text('provide_trainers',__('Can provide 2 trainers skilled in AI ?'));
        $form->text('business_lead', __('Can provide business development lead for 2 months incubation program?'));
        // $form->text('name', __('Name'));
        // $form->email('email', __('Email'));
        // $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        // $form->password('password', __('Password'));
        // $form->text('residence', __('Residence'));
        // $form->text('region', __('Region'));
        // $form->text('question', __('Question'));
        // $form->text('sex', __('Sex'));
        // $form->text('approved', __('Approved'));
        // $form->text('remember_token', __('Remember token'));

        return $form;
    }

}
