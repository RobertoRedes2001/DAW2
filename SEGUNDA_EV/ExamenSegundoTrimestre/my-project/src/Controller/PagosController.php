<?php

namespace App\Controller;

use App\Form\UpdatePagosFormType;
use App\Form\InsertPagosFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\PAGOSRoberto;

class PagosController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/pagos', name: 'pagos_lista')]
    public function index(): Response
    {
        // Obtener el repositorio de Pagos
        $pagosRepository = $this->em->getRepository(PAGOSRoberto::class);

        // Obtener todos los pagos
        $pagos = $pagosRepository->findAll();

        // Renderizar la plantilla con los resultados
        return $this->render("pagosList.html.twig", [
            "resultados" => $pagos,
        ]);
    }


    #[Route('/pagos/edit/{id}', name: 'pagos_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PAGOSRoberto $pagos): Response
{
    // Crear el formulario de edición utilizando el formulario UpdatePagosFormType y el objeto PAGOSRoberto
    $form = $this->createForm(UpdatePagosFormType::class, $pagos);
    
    // Manejar la solicitud HTTP
    $form->handleRequest($request);

    // Verificar si el formulario ha sido enviado y es válido
    if ($form->isSubmitted() && $form->isValid()) {
        // Persistir los cambios en la base de datos
        $this->em->flush();
        
        // Redirigir al usuario a la lista de pagos después de la edición exitosa
        return $this->redirectToRoute('pagos_lista');
    }

    // Renderizar la plantilla 'edit.html.twig' con los datos del pago y el formulario
    return $this->render('edit.html.twig', [
        'pagos' => $pagos, // Pasar el objeto PAGOSRoberto a la plantilla
        'form' => $form->createView(), // Pasar la vista del formulario a la plantilla
    ]);
}


    #[Route('/pagos/insert', name: 'pagos_insert', methods: ['GET', 'POST'])]
    public function insert(Request $request): Response
    {
        $pagos = new PAGOSRoberto(); // Crear un nuevo objeto PAGOSRoberto

        $form = $this->createForm(InsertPagosFormType::class, $pagos);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($pagos); // Persistir el nuevo pago
            $this->em->flush();
            return $this->redirectToRoute('pagos_lista');
        }

        return $this->render('insert.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
