<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\HttpFoundation\Request; 

use App\Form\AcheteurType;
use App\Entity\Acheteur;
use Doctrine\ORM\EntityManagerInterface;

class AcheteurController extends AbstractController
{
    #[Route('/insert', name: 'add_acheteur')]
    public function insertA(Request $request)
    {
        $form=$this->createFormbuilder()
        ->add('nomC', TextType::class)
        ->add('prenomC', TextType::class)
        ->add('adrC', TextType::class)
        ->add('cpC', TextType::class)
        ->add('villeC', TextType::class)
        ->add('telC', TextType::class)
        ->add('save', SubmitType::class,
        ['label'=>'Insérer un client'])
        ->getForm();

        return $this->render('acheteur/create.html.twig', array('my_form'=>$form->createView()));
    }
    #[Route('/insert2', name: 'add_acheteur2')]
    public function insertA2(Request $request, EntityManagerInterface $entityManager)
    {
        $acheteur = new Acheteur;
        $formAcheteur= $this->createForm(AcheteurType::class, $acheteur);

        $formAcheteur->add('creer', SubmitType::class, array('label'=>'Insertion d\'un acheteur' ));
        // $formAcheteur->handleRequest($request); //récupération de l’objet $request
        // if($request->isMethod('post')&& $formAcheteur->isValid()) {
        //     $entityManager->persist($acheteur); //persistance de l’objet $bateau
        //     $entityManager->flush(); // envoie vers la base de données
        //     return $this->redirect($this->generateUrl('add_acheteur2')); //redirection vers l’affichage du formulaire
        // }
        return $this->render('acheteur/create2.html.twig',
        array('my_form'=>$formAcheteur->createView()));
    }
    #[Route("/update/{id}", name:"update_acheteur")]
    public function updateA(Request $request,$id)
    {
        $form=$this->createFormbuilder()
        ->add('nomC', TextType::class)
        ->add('prenomC', TextType::class)
        ->add('adrC', TextType::class)
        ->add('cpC', TextType::class)
        ->add('villeC', TextType::class)
        ->add('telC', TextType::class)
        ->add('save', SubmitType::class,
        ['label'=>'Insérer un client'])
        ->getForm();

        return $this->render('acheteur/create.html.twig', array('my_form'=>$form->createView()));
    }
    #[Route("/delete/{id}", name:"delete_acheteur")]
    public function deleteA(Request $request, $id)
    {

    }
}
