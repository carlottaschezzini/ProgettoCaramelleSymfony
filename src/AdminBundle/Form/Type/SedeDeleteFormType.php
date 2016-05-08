<?php  
namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class SedeDeleteFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           	->add('aula', EntityType::class, array('class' => 'UserBundle:Aula', 'choice_label' => 'nome','label' => false))
            ->add('sede', EntityType::class, array('class' => 'UserBundle:Sede', 'choice_label' => 'citta','label' => false))

            
           
            ->add('save', SubmitType::class, array('label' => false))
        ;
    }
}