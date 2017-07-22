<?php

namespace App\Http\Controllers;



use App\Booktitle;
use Illuminate\Http\Request;

class BookTitleController extends Controller
{
   public $id;
   public $booktitle;
   public $authorname;


   public function store(){

       $objBookTitleModel = new Booktitle();

       $objBookTitleModel->booktitle = $_POST['bookTitle'];
       $objBookTitleModel->authorname = $_POST['authorName'];


       $status =$objBookTitleModel->save();

//       echo $status;
       return redirect('/booktitle/index');

   }

   public function index(){

       $objBookTitleModel = new  Booktitle();

       $allBookTitle = $objBookTitleModel->paginate(5);

       return view("booktitle/index", compact('allBookTitle'));
   }

   public function view($id){

       $objBookTitleModel = new Booktitle();

       $booktitle = $objBookTitleModel->find($id);

       return view('booktitle/view', compact('booktitle'));
   }

    public function edit($id){

        $objBookTitleModel = new Booktitle();

        $booktitle = $objBookTitleModel->find($id);

        return view('booktitle/edit', compact('booktitle'));
    }

    public function update(){
        $objBookTitleModel = new Booktitle();

        $booktitle = $objBookTitleModel->find($_POST["id"]);

        $booktitle->booktitle = $_POST['bookTitle'];

        $booktitle->authorname = $_POST['authorName'];

        $status = $booktitle->update();

        if ($status) echo " Success ";
        else
        echo " Failed ";

        return redirect('/booktitle/index');
    }

    public function delete($id){
        $objBookTitleModel = new Booktitle();

        $status = $objBookTitleModel->find($id)->delete();

        if($status) echo  " Successfully Deleted " ;
        else echo " Failed to Delete ";

        return redirect('/booktitle/index');

    }

    public function search($keyword){
//        var_dump($keyword);die();

        $objBookTitleModel = new Booktitle();

        $searchResult = $objBookTitleModel
            ->where ("booktitle", "LIKE", "%$keyword%")
            ->orwhere("authorname", "LIKE", "%$keyword%")
            ->paginate(5);

        return view ('booktitle/search_result', compact ('searchResult'));
    }


}

