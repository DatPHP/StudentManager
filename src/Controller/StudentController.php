<?php

namespace App\Controller;

use App\Entity\Student;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use Symfony\Component\Form\Extension\Core\Type\FormType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{

    /**
     * @Route("/student/add", name="customer")
     */
    public function add(Request $request)
    {


        $form = $this->createFormBuilder()
            ->add('mssv',TextType::class)
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add('phone',TextType::class)
            ->add('address', TextType::class)
            ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();

          //    var_dump($data);


          // save database
            $entityManager = $this->getDoctrine()->getManager();

            $student = new Student();
            $student->setMSSV($data['mssv']);
            $student->setName($data ["name"]);
            $student->setEmail($data ["email"]);
            $student->setPhone($data ["phone"]);
            $student->setAddress($data ["address"]);

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($student);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();


            $response = new RedirectResponse('/student/show');
            $response->prepare($request);

            return $response->send();
        }
        return $this->render('student/add.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/student/show", name="customer_view")
     */
    public function index()
    {

        $student = $this->getDoctrine()
            ->getRepository(Student::class)
           -> findAll();

        return $this->render('student/index.html.twig',['student'=>$student]);

    }



    /**
     * @Route("/student/edit/{id}")
     */
    public function update($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $student = $entityManager->getRepository(Student::class)->find($id);




        if (!$student) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

//
//             echo '<pre>';
//             var_dump($student);
//              exit;




        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();



        $defaults = [
            'mssv' => $student->getMssv() ,
            'name'=> $student->getName(),
            'email'=>$student->getEmail(),
            'phone'=>$student->getPhone(),
            'address'=>$student->getAddress()
        ];


//
//        echo '<pre>';
//           var_dump($defaults);
//              exit;


        $form = $formFactory->createBuilder(FormType::class, $defaults)
            ->add('mssv',TextType::class)
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add('phone',TextType::class)
            ->add('address', TextType::class)
            ->add('send', SubmitType::class)
            ->getForm();


        $request = Request::createFromGlobals();
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();

            //    var_dump($data);


            // save database
            $entityManager = $this->getDoctrine()->getManager();


            $student->setMSSV($data['mssv']);
            $student->setName($data ["name"]);
            $student->setEmail($data ["email"]);
            $student->setPhone($data ["phone"]);
            $student->setAddress($data ["address"]);

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($student);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();


            $response = new RedirectResponse('/student/show');
            $response->prepare($request);

            return $response->send();
        }

        return $this->render('student/edit.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/Student/delete/{id}", name="student_delete")
     */
    public function delete($id)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $student = $entityManager->getRepository(Student::class)->find($id);

        if (!$student) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
        $entityManager->remove($student);
        $entityManager->flush();


        return new Response('delete success!!!!! ');

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }





    /**
     * @Route("/student/detail/{id}", name="product_show")
     */
    public function show($id)
    {
        $student = $this->getDoctrine()
            ->getRepository(Student::class)
            ->find($id);

        if (!$student) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }


        return $this->render('student/detail.html.twig', [
           'student'=>$student
        ]);




        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }



}
