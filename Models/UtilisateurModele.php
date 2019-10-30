<?php
class UtilisateurModele extends Model
{
    public function getAllUtilisateurs(){
        $sql = "SELECT * FROM utilisateur JOIN typeUtilisateur ON utilisateur.idTypeUtilisateur = typeUtilisateur.idTypeUtilisateur";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function getUtilisateurById($id){
        $sql = "SELECT * FROM utilisateur JOIN typeUtilisateur ON utilisateur.idTypeUtilisateur = typeUtilisateur.idTypeUtilisateur WHERE idUtilisateur=:id";
        $req = Database::getBdd()->prepare($sql);
        $req->execute(['id' => $id]);
        return $req->fetchAll();
    }

    public function deleteUtilisateur($id){
        $sql = "DELETE FROM utilisateur WHERE idUtilisateur=:id";
        $req = Database::getBdd()->prepare($sql);
        return ($req->execute(['id' => $id]));
    }

    public function addUtilisateur($nom, $mdp, $collectivite, $email, $idTypeUtilisateur, $actif = 1, $notifier = 0){
        $sql = "INSERT INTO utilisateur (nomUtilisateur, motDePasse, collectivite,email,idTypeUtilisateur,actif,notifier)
                VALUES (:nom, :mdp, :collectivite, :email, :idTypeUtilisateur, :actif, :notifier)";
        $req = Database::getBdd()->prepare($sql);
        $mdp=hash('sha512', $mdp);
        return $req->execute([
            'nom' => $nom,
            'mdp' => $mdp,
            'collectivite' => $collectivite,
            'email' => $email,
            'idTypeUtilisateur' => $idTypeUtilisateur,
            'actif' => $actif,
            'notifier' => $notifier
        ]);
    }

    public function updateUtilisateur($id, $mdp=null, $nom=null, $collectivite=null, $email=null, $idTypeUtilisateur=null, $actif=null, $notifier=null){
        $sql = "UPDATE utilisateur SET ";
        $tab['id'] = $id;
        if($mdp != null){
            $sql .= "motDePasse=:mdp,";
            $tab['mdp'] = hash('sha512', $mdp);
        }  
        if($nom != null){
            $sql .= "nomUtilisateur=:nom,";
            $tab['nom'] = $nom;
        }       
        if($collectivite != null){
            $sql .= "collectivite=:collectivite,";
            $tab['collectivite'] = $collectivite;
        }
        if($email != null){
            $sql .= "email=:email,";
            $tab['email'] = $email;
        }
        if($typeUtilisateur != null){
            $sql .= "idTypeUtilisateur=:idTypeUtilisateur,";
            $tab['idTypeUtilisateur'] = $idTypeUtilisateur;
        }
        if($actif != null){
            $sql .= "actif=:actif,";
            $tab['actif'] = $actif;
        }
        if($notifier != null){
            $sql .= "notifier=:notifier,";
            $tab['notifier'] = $notifier;
        }
        $sql=substr($sql,0,-1);    
        $sql .= " WHERE idUtilisateur=:id";

        $req = Database::getBdd()->prepare($sql);
        
        return ($req->execute($tab));
    }
}