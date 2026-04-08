<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;
use App\Modules\Admin\Models\QuestionModel;

class QuestionController extends BaseController
{

    public function index()
    {

        $model = new QuestionModel();

        $data['questions'] = $model->orderBy('id','DESC')->findAll();

        return view('App\Modules\Admin\Views\questions\index',$data);

    }


    public function save()
    {

        $model = new QuestionModel();

        $id = $this->request->getPost('id');

        $data = [

            'question_text'=>$this->request->getPost('question_text'),
            'question_type'=>$this->request->getPost('question_type'),
            'marks'=>$this->request->getPost('marks')

        ];

        if($id){

            $model->update($id,$data);

        }else{

            $model->insert($data);

        }

        return $this->response->setJSON(['status'=>true]);

    }


    public function delete()
    {

        $model = new QuestionModel();

        $id = $this->request->getPost('id');

        $model->delete($id);

        return $this->response->setJSON(['status'=>true]);

    }


    public function get($id)
    {

        $model = new QuestionModel();

        $data = $model->find($id);

        return $this->response->setJSON($data);

    }

}