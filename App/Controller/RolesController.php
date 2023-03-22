<?php



       public function insertRoles()
{
    if(isset($_POST['submit'])) {
        
        $nom_roles = filter_input(INPUT_POST, 'nom_roles', FILTER_SANITIZE_STRING);

        
        if(empty($nom_roles)) {
            $_nom_roles['error'] = "Le champ nom du rôle est obligatoire";
            
        }

        
        $this->nom_roles = $nom_roles;

        
        $rolesModel = new RolesModel();
        $result = $rolesModel->AddRoles($this->nom_roles);

        
        if($result) {
            $nom_roles['success'] = "Le rôle a été ajouté avec succès";
        } else {
            $nom_roles['error'] = "Une erreur est survenue lors de l'ajout du rôle";
        }

      
    }
}


?>