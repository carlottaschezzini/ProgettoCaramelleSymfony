<?php  
namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AulaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, array('label' => false))
            ->add('sede', EntityType::class, array('class' => 'UserBundle:Sede', 'choice_label' => 'citta'))
            ->add('citta', TextType::class, array('label' => false))
            ->add('posti', IntegerType::class, array('label' => false))
           
            ->add('save', SubmitType::class, array('label' => false))
        ;
    }
}