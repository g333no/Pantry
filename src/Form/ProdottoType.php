<?php

namespace App\Form;

use App\Entity\Prodotto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ProdottoType extends AbstractType
{
    private array $categories;

    public function __construct(array $categories = [])
    {
        $this->categories = $categories;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nome', TextType::class, [
                'label' => 'Nome',
            ])
            ->add('quantita', IntegerType::class, [
                'label' => 'Quantità',
            ])
            ->add('scadenza', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Scadenza',
            ])
            ->add('categoria', ChoiceType::class, [
                'choices' => $this->categories,
                'placeholder' => 'Scegli una categoria',
                'required' => false,
                'attr' => ['class' => 'form-select'],
            ])
            ->add('categoria_custom', TextType::class, [
                'mapped' => false,
                'required' => false,
                'attr' => ['style' => 'display:none;'],
            ])
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();

                if ($form->has('categoria_custom')) {
                    $custom = $form->get('categoria_custom')->getData();
                    if ($custom !== null && (string) $custom !== '') {
                        if ($data instanceof Prodotto) {
                            $data->setCategoria((string)$custom);
                            $event->setData($data);
                        }
                    }
                }
            })
            ->add('colore', TextType::class, [
                'required' => false,
                'attr' => [
                    'type' => 'color',
                    'style' => 'width:3.2rem; height:2.2rem; padding:0; border:none;'
                ],
                'empty_data' => '#ffffff',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/',
                        'message' => 'Inserisci un colore esadecimale valido (es. #ff0000).',
                    ]),
                ],
            ])
            ->add('emoji', TextType::class, [
                'required' => false,
                'label' => 'Emoji',
                'attr' => ['placeholder' => '🍞 🍎 🥖'],
            ])
            ->add('tags_input', TextType::class, [
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'es: uova, bio, senza-glutine',
                    'class' => 'form-control'
                ],
                'label' => 'Tag (separati da virgola)'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Prodotto::class,
        ]);
    }
}
