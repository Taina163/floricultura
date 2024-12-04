<?php

namespace Controller;

use Model\usuariosModel;

require './vendor/autoload.php';

class UsuarioController{

        public function __construct()
        {
            
        }

        public function login(){
                if ($_POST){
                        $user = new usuariosModel();
                        $user->setEmail($_POST['email']);
                        $user->setSenha($_POST['senha']);
                        
                        if(!empty($user->getEmail()) &&  !empty($user->getSenha())){
                            
                            $check = $user->checkLogin();
                            
                            if($check == 1){
                                session_start();
                                $id = $user->loadUserId();
                                foreach($id as $values){
                                $_SESSION['id'] = $values['id'];
                                }
                                $_SESSION['logado'] = $user->getEmail();
                                
                                header('location:./index.php?cod=logSuccess');
                            }else{
                                header('location: index.php?cod=logError');
                            }
                        }
                    }
        }

        public function cadastrar(){
                if($_POST){

                        //cadastro em si
                        //if($result == "valid"){
                            if($_POST['senha']==$_POST['senhaConfirm']){
                                require_once __DIR__ . '/../model/usuariosModel.php';
                            $user = new usuariosModel();
                            $user->setNome($_POST['nome']);
                            $user->setEmail($_POST['email']);
                            $user->setSenha($_POST['senha']);
                            $cadastro = $user->cadastrar();
                            
                            if($cadastro == 1){
                                header('location:../cadastroLogin.php?cod=success');
                            }else{
                                header('location:../cadastroLogin.php?cod=error');
                            }
                        }else{
                            header('location:../cadastroLogin.php?cod=errorSenha');
                        }}
        }
}
?>