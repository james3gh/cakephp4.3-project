<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class BooksTable extends Table
{
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->requirePresence('name')
            ->notEmptyString('name', 'Please fill this field.')
            ->add('name', [
                'length' => [
                    'rule' => ['minLength', 6],
                    'message' => 'Name need to be at least 6 characters long.',
                ],
            ])
            ->requirePresence('author')
            ->notEmptyString('author', 'Please fill this field.')
            ->requirePresence('email')
            ->notEmptyString('email', 'Please fill this field.')
            ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => 'E-mail must be valid.',
            ])
            ->add('email', [
                'unique_email' => [
                    'rule' => ['validateUnique'],
                    'provider' => 'table',
                    'message' => 'Email aready exist.',
                ],
            ]);
        return $validator;
    }
}
