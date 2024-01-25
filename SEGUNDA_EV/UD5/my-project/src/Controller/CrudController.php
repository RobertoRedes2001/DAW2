<?php
// src/Controller/CrudController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cliente;
use App\Repository\ClienteRepository;

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
    public function clientList(SessionInterface $session): Response 
    {
        // Obtener el repositorio de Clients
        $clientsRepository = $this->em->getRepository(Cliente::class);
        // Número de client por página
        $clientsPerPage = 10;

        // Obtener el número de página actual de la sesión o establecerlo a 1 si no existe
        $page = $session->get('current_page', 1);

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
    public function clientAdd(): void
    {
        // Crear una nueva instancia de Clients
        $cliente = new Cliente;

        // Configurar los campos de la cliente
        $cliente
            ->setNombre($_POST['nombre'])
            ->setDirec($_POST['direc'])
            ->setCiudad($_POST['ciudad'])
            ->setEstado($_POST['estado'])
            ->setDirec($_POST['codPostal'])
            ->setCodPostal( $_POST['codPostal'])
            ->setTelefono($_POST['telefono'])
            ->setArea($_POST['area'])
            ->setLimiteCredito($_POST['limiteCredito'])
            ->setReprCod($_POST['reprCod'])
            ->setObservaciones($_POST['observaciones']);

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

    #[Route('/client/updating/{id}')]
    public function clientUpdate($id): void 
    {
        // Obtener el repositorio de Clients
        $ClientsRepository = $this->em->getRepository(Cliente::class);
        // Buscar el cliente por su ID
        $cliente = $ClientsRepository->find($id);
        // Actualizar los campos de el cliente
        $cliente->setNombre($_POST['nombre']);
        $cliente->setDirec($_POST['direc']);
        $cliente->setCiudad($_POST['ciudad']);
        $cliente->setEstado($_POST['estado']);
        $cliente->setDirec($_POST['codPostal']);
        $cliente->setCodPostal( $_POST['area']);
        $cliente->setTelefono($_POST['telefono']);
        $cliente->setLimiteCredito($_POST['limiteCredito']);
        $cliente->setReprCod($_POST['reprCod']);
        $cliente->setObservaciones($_POST['observaciones']);
        // Persistir y guardar los cambios
        $this->em->persist($cliente);
        $this->em->flush();
        // Redirigir de vuelta a la lista
        header("Location: /clients/1");
        exit();
    }
}