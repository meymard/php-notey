<?php

namespace Meymard\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class NoteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildform(formbuilderinterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('body', 'text')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'meymard_note';
    }
}
