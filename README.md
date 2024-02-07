# Projeto Laravel 10 
**Crud Exercício de fixação de Laravel**

## Requisitos do Projeto / Configuração do Ambiente

Certifique-se de que seu ambiente atenda aos seguintes requisitos antes de iniciar o projeto:

- PHP 8.2 ou superior
- Composer instalado
- GIT instalado

## Instruções para Iniciar o Projeto

1. **Criar o projeto com laravel**
    - composer create-project laravel/laravel meu-projeto

2. **Clonar o Repositório**
   ```bash
   git clone https://github.com/eliasdossantos/Projeto-Crud-Laravel.git

3. **Acessar o Diretório do Projeto**
    - cd seu-projeto

4. **Instalar as Dependências com o Composer**
   - composer install

5. **Configurar o Ambiente**
    - Copie o arquivo .env.example para um novo arquivo chamado .env e configure as variáveis de ambiente, como conexão com o banco de dados.
    - Gere a chave de aplicativo com o comando:
    - php artisan key:generate

6. **Iniciar o Servidor Laravel**
    - php artisan serve

7. **Acessar o Projeto Localmente**
    - http://127.0.0.1:8000

8. **Criar Controller**
    - exemplos: php artisan make:controller ContaController
    - php artisan make:controller NomeDaController

9. **Criar a VIEW**
    - exemplos php artisan make:view contas/create
    - php artisan make:view nomeDaView

10. **Criar banco de dados com o migrate no laravel 10**
    - php artisan migrate
