<?php
// src/Controller/CrudController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cliente;
use PhpParser\Node\Expr\Cast\String_;
use Symfony\Component\HttpFoundation\Request;


class CrudController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/')]
    public function index(): Response 
    {
        return $this->render('index.html', []);
    }

    #[Route('/clients/{page}')]
    public function clientList($page = 1): Response 
    {
        // Obtener el repositorio de Clients
        $clientsRepository = $this->em->getRepository(Cliente::class);
        // Número de client por página
        $clientsPerPage = 5;

        // Calcular el desplazamiento
        $offset = ($page - 1) * $clientsPerPage;

        // Contar el total de client
        $totalClients = count($clientsRepository->findAll());

        // Calcular el total de páginas
        $totalPages = ceil($totalClients / $clientsPerPage);

        // Obtener los client paginados
        $clients = $clientsRepository->findBy([], null, $clientsPerPage, $offset);

        // Renderizar la plantilla con los resultados y la paginación
        return $this->render("clientsList.html.twig", [
            "resultados" => $clients,
            "currentPage" => $page,
            "totalPages" => $totalPages,
        ]);
    }

    #[Route('/client/detail/{id}')]
    public function clientDetail($id): Response 
    {
        $ClientsRepository = $this->em->getRepository(Cliente::class);
        // Buscar la tarea por su ID
        $client = $ClientsRepository->find($id);    
        return $this->render("detailClient.html.twig", [
            "client" => $client,
        ]);
    }

    #[Route('/client/insert')]
    public function clientForm(): Response 
    {
        return $this->render('clientsForm.html.twig', []);
    }

    #[Route('/client/adding')]
    public function clientAdd(Request $request): Response
    {
        // Crear una nueva instancia de Clients
        $cliente = new Cliente;

        // Configurar los campos de la cliente usando el objeto Request
        $cliente
            ->setNombre($request->request->get('nombre'))
            ->setDirec($request->request->get('direc'))
            ->setCiudad($request->request->get('ciudad'))
            ->setEstado($request->request->get('estado'))
            ->setCodPostal($request->request->get('codPostal'))
            ->setTelefono($request->request->get('telefono'))
            ->setArea($request->request->get('area'))
            ->setLimiteCredito($request->request->get('limiteCredito'))
            ->setReprCod($request->request->get('reprCod'))
            ->setObservaciones($request->request->get('observaciones'));

        // Obtener el EntityManager y persistir la cliente
        $this->em->persist($cliente);

        // Guardar los cambios en la base de datos
        $this->em->flush();

        // Redirigir de vuelta a la lista
        header("Location: /clients/1");
        exit();
    }

    #[Route('/client/update/{id}')]
    public function clientUpdateForm($id): Response 
    {
        $ClientsRepository = $this->em->getRepository(Cliente::class);
        // Buscar la tarea por su ID
        $client = $ClientsRepository->find($id);    
        return $this->render("updateClientForm.html.twig", [
            "client" => $client,
        ]);
    }

    #[Route('/client/delete/{id}')]
    public function clientDelete($id): Response 
    {
        // Obtener el repositorio de Clients
        $clientRepository = $this->em->getRepository(Cliente::class);

        // Buscar la cliente por su ID
        $client = $clientRepository->find($id);

        // Si la cliente existe, eliminarla y persistir los cambios
        if ($client) {
            $this->em->remove($client);
            $this->em->flush();
        }

        // Redirigir de vuelta a la lista
        header("Location: /clients/1");
        exit();
    }

    #[Route('/client/updating/{id}')]
    public function clientUpdate(Request $request, String $id): void 
    {
        // Obtener el repositorio de Clients
        $clientsRepository = $this->em->getRepository(Cliente::class);
        // Buscar el cliente por su ID
        $cliente = $clientsRepository->find($id);

        // Verificar si el cliente existe
        if (!$cliente) {
            throw $this->createNotFoundException('Cliente no encontrado');
        }
        // Actualizar los campos del cliente usando el objeto Request
        $cliente
            ->setNombre($request->request->get('nombre'))
            ->setDirec($request->request->get('direc'))
            ->setCiudad($request->request->get('ciudad'))
            ->setEstado($request->request->get('estado'))
            ->setCodPostal($request->request->get('codPostal'))
            ->setArea($request->request->get('area'))
            ->setTelefono($request->request->get('telefono'))
            ->setLimiteCredito($request->request->get('limiteCredito'))
            ->setReprCod($request->request->get('reprCod'))
            ->setObservaciones($request->request->get('observaciones'));

        // Persistir y guardar los cambios
        $this->em->persist($cliente);
        $this->em->flush();
        // Redirigir de vuelta a la lista
        header("Location: /clients/1");
        exit();
    }
}