# Projeto Laravel 10

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
   git clone https://github.com/seu-usuario/seu-repositorio.git

3. **Acessar o Diretório do Projeto**
    - cd seu-projeto

4. **Instalar as Dependências com o Composer**
```
composer install
```

5. **Configurar o Ambiente**
    - Duplicar o arquivo ".env.example" e renomear para ".env"
    - Alterar no arquivo .env o nome da base de dados para "SeuBancoDeDados". Exemplo: DB_DATABASE=seu_banco_de_dados

6. **Gere a chave de aplicativo com o comando:**
```
php artisan key:generate
```

7. **Criar a migration**
```
php artisan make:migration create_SUATABELA_table
```

8. **Executar as migration**
```
php artisan migrate
```

9. **Iniciar o Servidor Laravel**
```
php artisan serve
```

10. **Acessar o Projeto Localmente**
    - http://127.0.0.1:8000

11. **Criar Controller**
    - exemplos: php artisan make:controller ContaController
```
php artisan make:controller NomeDaController
```

12. **Criar a Models**
```
php artisan make:model Conta
```

13. **Criar a VIEW**
    - exemplos php artisan make:view contas/create
```
php artisan make:view nomeDaView
```

