<?php
class Login extends Model{

    public function validate(){
        $errors = [];

        if(!$this->email){
            $errors['email'] = 'E-mail é um campo obrigatório.';
        }
        if(!$this->password){
            $errors['password'] = 'Por favor, informe a senha.';
        }
        if(count($errors) > 0){
            throw new ValidationException($errors);
        }
    }

    public function checkLogin(){
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        if($user){
//end_date... se o usuario saiu da empresa
            if($user->end_date){
                throw new AppException('Usuário está desligado da empresa.');
            }
//metodo vai verificar se a senha esta correta
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
        throw new AppException('Usuario e Senha inválidos.');
    }
}