<?php

namespace AssoConnect\GraphQLMutationValidatorBundle\Validator;

use AssoConnect\GraphQLMutationValidatorBundle\Exception\UserException;
use AssoConnect\GraphQLMutationValidatorBundle\Input\RequestObject;
use Symfony\Component\Validator\Validator\ValidatorInterface;

Class MutationValidator
{

    /**
     * @var ValidatorInterface
     */
    protected $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function validate($object)
    {
        $errors = $this->validator->validate($object);

        if(count($errors) > 0) {
            throw new UserException($errors);
        }
    }
}
