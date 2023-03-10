<?php

namespace App\Repository;

use App\Entity\RendezVous;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Twilio\Rest\Client;

/**
 * @extends ServiceEntityRepository<RendezVous>
 *
 * @method RendezVous|null find($id, $lockMode = null, $lockVersion = null)
 * @method RendezVous|null findOneBy(array $criteria, array $orderBy = null)
 * @method RendezVous[]    findAll()
 * @method RendezVous[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RendezVousRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RendezVous::class);
    }

    public function save(RendezVous $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RendezVous $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    
    public function getPostDesc(){
        $qb = $this->createQueryBuilder('x')->orderBy('x.DateRdv', 'DESC'); // x : aliace , reference direct 3al table tRendez-Vous
        return $qb->getQuery()->getResult();
    }
    public function order_By_Rdv()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.dateRdv', 'ASC')
            ->getQuery()->getResult();
    }

    public function order_By_message()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.message', 'ASC')
            ->getQuery()->getResult();
    }

    public  function sms(){
        // Your Account SID and Auth Token from twilio.com/console
                $sid = 'ACc11038f0f8dd4508a6d63dbd3c40481f';
                $auth_token = '118f02efe3be22407a7e1cf0ec453856';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
        // A Twilio number you own with SMS capabilities
                $twilio_number = "+15074195060";
        
                $client = new Client($sid, $auth_token);
                $client->messages->create(
                // the number you'd like to send the message to
                    '+21651015709',
                    [
                        // A Twilio phone number you purchased at twilio.com/console
                        'from' => '+15074195060',
                        // the body of the text message you'd like to send
                        'body' => 'Votre rendez-vous est accepter avec succés  !'
                    ]
                );
            }


    /*public function construct(ManagerRegistry $registry)
    {
        parent::construct($registry, RendezVous::class);
    }

    /**
     * Returns an array of statistics for each date with a RendezVous
     *
     * @return array
     */
   /* public function getStatisticsByDate()
    {
        $qb = $this->createQueryBuilder('r')
            ->select('DATE(r.date) AS date, COUNT(r.id) AS total')
            ->groupBy('date')
            ->orderBy('date', 'ASC');

        return $qb->getQuery()->getResult();
    }       

    
            /*public function findRendezVousWithEtat(): array
            {
                return $this->createQueryBuilder('r')
                    ->select('r, r.etat')
                    ->getQuery()
                    ->getResult();
            }
            


    /*public function countByMonth(): array
    {
        $qb = $this->createQueryBuilder('rv')
            ->select('COUNT(rv) as count, DATE_TRUNC(\'month\', rv.date) as month')
            ->groupBy('month')
            ->orderBy('month');
            
        return $qb->getQuery()->getResult();
    }

   // Assuming that $entityManager is an instance of EntityManagerInterface
        

    

    //    /**
    //     * @return RendezVous[] Returns an array of RendezVous objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

  /*   example recherche 
    return $this->createQueryBuilder('c')
            ->andWhere('c.id = :val OR c.message = :val OR c.location = :val ')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
        */

    //    public function findOneBySomeField($value): ?RendezVous
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }





}
