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


// Pagination

use Knp\Component\Pager\PaginatorInterface;

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


            // thong bao
            $this->addFlash('add', 'Add Student Success');


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
    public function index(Request $request, PaginatorInterface $paginator)
    {

        $student = $this->getDoctrine()
            ->getRepository(Student::class)
           -> findAll();







        // Retrieve the entity manager of Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Appointments entity
        $appointmentsRepository = $em->getRepository(Student::class);

        // Find all the data on the Appointments table, filter your query as you need
        $allAppointmentsQuery = $appointmentsRepository->findAll();

        // Paginate the results of the query
        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );

        // Render the twig view
        return $this->render('student/index.html.twig', [
            'appointments' => $appointments
        ]);
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
            ->add('mssv',TextType::class, ['attr' => ['maxlength' => 10]])
            ->add('name', TextType::class,  ['attr' => ['maxlength' => 30]])
            ->add('email', EmailType::class, ['attr' => ['maxlength' => 50]])
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



            // thong bao
            $this->addFlash('update', 'Update a  Student Success');


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


        // thong bao
        $this->addFlash('notice', 'Delete Student Success');

        return $this->redirectToRoute('customer_view');


       // return new Response('delete success!!!!! ');

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
