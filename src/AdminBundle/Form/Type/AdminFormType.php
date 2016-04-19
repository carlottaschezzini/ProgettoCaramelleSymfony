<?php  
namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class AdminFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class)
            ->add('sede', TextType::class)
            ->add('citta', TextType::class)
            ->add('posti', IntegerType::class)
            ->add('data_creazione', DateTimeType::class)
            ->add('citta', IntegerType::class)
            ->add('descrizione', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }
}