<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Ofertas;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index", defaults={"pagina" = 1})
     */
    public function indexAction($pagina)
    {
        $em = $this->getDoctrine()->getManager();
        $limite = 6;
        $totalOfertas = $em->getRepository('AppBundle\Entity\Ofertas')->totalOfertas();
        $totalPaginas = ceil($totalOfertas / $limite);
        $ofertas = $em->getRepository('AppBundle\Entity\Ofertas')->obtenerOfertas($pagina,$limite,$totalPaginas);
        return $this->render('default/index.html.twig',
                        array('lstOfertas' => $ofertas,
                              'paginas' => $totalPaginas,
                              'pagActual' => $pagina));
    }

     /**
     * @Route("buscar", name="buscar")
     * 
     */
     public function buscarAction(request $request)
      {
        if($request->isXmlHttpRequest())
        {
           $em = $this->getDoctrine()->getManager();
           $contenido = $request->request->get('valor');           
           $busqueda = $em->getRepository('AppBundle\Entity\Ofertas')->buscar($contenido);
           //$resultado = $this->renderView('default/busqueda.html.twig', 
            //                          array('lstOfertas' => $busqueda));
           return new JsonResponse(['html' => $this->renderView('default/busqueda.html.twig', 
                                                          array('lstOfertas' => $busqueda)) ]);  
         }

           
      } 




  }
