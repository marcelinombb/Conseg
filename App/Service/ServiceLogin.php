<?php

namespace App\Service\ServiceLogin;

use MF\Model\Model;

    class ServiceLogin extends Model {

        public function autenticarLogin() {

            $query = "select id, nome, email from usuarios where email = :email and senha = :senha";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->bindValue(':senha', $this->__get('senha'));
            $stmt->execute();
    
            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if($usuario['id'] != '' && $usuario['nome'] != '') {
                $this->__set('id', $usuario['id']);
                $this->__set('nome', $usuario['nome']);
            }
    
            return $this;
        }

}