<?php

namespace ProjectBundle\Repository;

/**
 * ProjetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjetRepository extends \Doctrine\ORM\EntityRepository
{

    public function domainePrpjet($domaine){
        $qb =$this->getEntityManager()
            ->createQuery("select c from ProjectBundle:Projet c Where c.idCategorie=:dom")
            ->setParameter('dom',$domaine);
        return $query = $qb->getResult();
    }
    public function updateMontant($id,$montant)
    {
        $em= $query=$this->getEntityManager();
        $RAW_QUERY = "UPDATE projet SET montant = montant +:mont WHERE id_projet=:id";

        $statement=$em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('mont',$montant);
        $statement->bindValue('id',$id);

        $statement->execute();



    }
    public function findEntitiesByString($str,$id){
        return $this->getEntityManager()
            ->createQuery(
                "SELECT p
                FROM ProjectBundle:Projet p
                WHERE p.nomProjet LIKE :str and p.idEntreprise='$id' and (p.idEtat= 2 or p.idEtat= 1) "
            )
            ->setParameter('str', '%'.$str.'%')

            ->getResult();
    }
    public function findEntitiesByStringmy($str,$id){
        return $this->getEntityManager()
            ->createQuery(
                "SELECT p
                FROM ProjectBundle:Projet p
                WHERE p.nomProjet LIKE :str and p.idEntreprise='$id'  "
            )
            ->setParameter('str', '%'.$str.'%')

            ->getResult();
    }
    public function findProjet(){
        return $this->getEntityManager()
            ->createQuery(
                "SELECT p
                FROM ProjectBundle:Projet p
                WHERE p.idEtat  != 3   "
            )


            ->getResult();
    }
    public function findProjetEtat($id,$idEtat){
        return $this->getEntityManager()
            ->createQuery(
                "SELECT p
                FROM ProjectBundle:Projet p
                WHERE p.idEtat  = $idEtat and p.idEntreprise= $id  "
            )


            ->getResult();
    }

    public function updateDatedebut()
    {
        $em= $query=$this->getEntityManager();
        $RAW_QUERY = "UPDATE projet SET id_etat =2 WHERE date_debut_projet < SYSDATE()";

        $statement=$em->getConnection()->prepare($RAW_QUERY);

        $statement->execute();
    }





    public function updateDate()
    {
        $em= $query=$this->getEntityManager();
        $RAW_QUERY = "UPDATE projet SET id_etat =3 WHERE date_fin_projet < SYSDATE()";

        $statement=$em->getConnection()->prepare($RAW_QUERY);

        $statement->execute();
    }
    public function updateMontantEtat()
    {
        $em= $query=$this->getEntityManager();
        $RAW_QUERY = "UPDATE projet SET id_etat=3  WHERE montant >= votre_finance";

        $statement=$em->getConnection()->prepare($RAW_QUERY);

        $statement->execute();
    }

    public function updateEtatProjet($id)
    {
        $em= $query=$this->getEntityManager();
        $RAW_QUERY = "UPDATE projet SET id_etat=2  WHERE id_projet=:id and id_etat != 3";

        $statement=$em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('id',$id);

        $statement->execute();
    }

    public function afficherProjetInvesstment($id)
    {
        $em= $query=$this->getEntityManager();
        $RAW_QUERY = "SELECT DISTINCT p.* FROM `projet` p JOIN investissement i ON p.id_projet=i.id_projet WHERE i.id_invesstisseur  = 19 ORDER BY p.montant LIMIT 3";

        $statement=$em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('id',$id);
        $statement->execute();
        $result=$statement->fetchAll();

        return $result;

    }
    public function topprojectaimer($id)
    {
        $em= $query=$this->getEntityManager();
        $RAW_QUERY = "SELECT p.`id_projet`,p.`nom_projet`,p.`id_categorie` FROM projet p WHERE p.`id_etat` IN (1,2) ORDER BY (SELECT COUNT(i.id_investissement) FROM `investissement` i WHERE `id_invesstisseur`=18 and i.`id_projet`=p.`id_projet`) DESC LIMIT 1";

        $statement=$em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('id',$id);
        $statement->execute();
        $result=$statement->fetchAll();

        return $result;

    }










}
