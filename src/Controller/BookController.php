<?php

namespace App\Controller;

use App\Controller\AppController;

class BookController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Books');
        $this->viewBuilder()->setLayout('booklayout');

    }

    public function index()
    {
        // $bks = $this->Books->find('all')->toArray();
        $books = $this->Books->find('all')->toArray();
        $this->set('title', 'Book list');
        $this->set('books', $books);
        // print_r($books);
    }

    public function create()
    {
        $this->set('title', 'Book Create');
    }

    public function saveData()
    {
        $this->autoRender = false;
        if ($this->request->is("post")) {
            $book = $this->Books->newEntity($this->request->getData());
            $validation = $book->getErrors();
            if (!empty($validation)) {
                $this->Flash->set($validation, [
                    'element' => 'book_error',
                ]);
            } else {
                $form_data = $this->request->getData();
                $uploaded_path = '/img/uploads';
                $image_name = $this->request->getData('file')->getClientFilename();
                $tmp_name = $this->request->getData('file')->getStream()->getMetadata('uri');

                ///image valid or not
                if (getimagesize($tmp_name)) {
                    if (move_uploaded_file($tmp_name, WWW_ROOT . $uploaded_path . "/" . $image_name)) {
                        $book->name = $form_data['name'];
                        $book->author = $form_data['author'];
                        $book->email = $form_data['email'];
                        $book->description = $form_data['description'];
                        $book->img = $uploaded_path . "/" . $image_name;
                        $this->Books->save($book);
                        $this->Flash->set('Book has been added successfully.', [
                            'element' => 'book_success',
                        ]);
                    } else {
                        $this->Flash->set('Image file has been not been added successfully.', [
                            'element' => 'book_error',
                        ]);
                    }
                } else {
                    $this->Flash->set('Image file is not valid', [
                        'element' => 'book_error',
                    ]);
                }

                // print_r($form_data);

            }
            $this->redirect(['action' => 'create']);
        }

    }
    public function edit($id)
    {
        $book = $this->Books->get($id);
        $this->set('title', 'Book edit');
        $this->set('book', $book);
    }

    public function update()
    {
        $this->autoRender = false;
        $form_data = $this->request->getData();
        $book = $this->Books->get($form_data['id']);
        $book->name = $form_data['name'];
        $book->author = $form_data['author'];
        $book->email = $form_data['email'];
        $book->description = $form_data['description'];
        $this->Books->save($book);
        $this->Flash->set('Book has been successfully updated.', [
            'element' => 'book_success',
        ]);
        $this->redirect(['action' => 'index']);
        // print_r($this->request->getData());
    }
    public function delete($id)
    {
        $this->autoRender = false;
        $book = $this->Books->get($id);
        $this->Books->delete($book);
        $this->Flash->set('Book has been deleted.', [
            'element' => 'book_success',
        ]);
        $this->redirect(['action' => 'index']);
    }

}
