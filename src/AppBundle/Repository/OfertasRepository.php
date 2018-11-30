<?php

	// src/AppBundle/Repository/OfertasRepository.php

	namespace AppBundle\Repository;

	use Doctrine\ORM\EntityRepository;
	use Doctrine\ORM\Tools\Pagination\Paginator;

	class OfertasRepository extends EntityRepository
	{
	  
	  public function obtenerOfertas($pagina,$limite,$totalPaginas,$valor = null)
		{
		   $inicio = ($pagina - 1) * $limite;
	   		$qb = $this->createQueryBuilder('p')
                  ->select('p')
                  ->andWhere('p.producto LIKE :valor')
				  ->setParameter('valor','%'. $valor .'%')
                  ->setFirstResult($inicio)
        		  ->setMaxResults($limite);
       		return $qb->getQuery()->getResult();	

	  
	   		$qb = $this->createQueryBuilder('p')
                  ->select('p')
                  ->setFirstResult($inicio)
        		  ->setMaxResults($limite);
       		return $qb->getQuery()->getResult();	
			                 
		}

	   public function totalOfertas()
	   {
	   		$qb = $this->createQueryBuilder('p')
	                  ->select('Count(p)');
	        return $qb->getQuery()->getSingleScalarResult();	 
	   }

	   public function buscar($valor)
	   {
	   		$qb = $this->createQueryBuilder('p')
	   				   ->select('p')
	   				   ->andWhere('p.producto LIKE :valor')
    				   ->setParameter('valor','%'. $valor .'%');
			return $qb->getQuery()->getResult();
	   }
	}

?>