<?php

namespace App\Form;

use App\Entity\Setting;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('keywords')
            ->add('description')
            ->add('company')
            ->add('address')
            ->add('phone')
            ->add('fax')
            ->add('email')
            ->add('smtpserver')
            ->add('smtpemail')
            ->add('smtppassword')
            ->add('smtpport')
            ->add('facebook')
            ->add('instagram')
            ->add('twitter')
            ->add('aboutus',TextType::class)
            ->add('contact',TextType::class)
            ->add('reference',TextType::class)
            //->add('aboutus', CKEditorType::class , array(
             //   'config' =>array(
             //     'uiColor' => '#ffffff',
             // ),
         //   ))

           //  ->add('contact', CKEditorType::class , array(
             //    'config' =>array(
             //      'uiColor' => '#ffffff',
             //  ),
            // ))

            // ->add('reference', CKEditorType::class , array(
               //  'config' =>array(
               //    'uiColor' => '#ffffff',
              // ),
            //))

             ->add('status',ChoiceType::class,[
              'choices'=> [
                'True'=> 'True',
                'False'=>'False'],
              ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Setting::class,
        ]);
    }
}
