<h1>Atividade laravel </h1>

> Usando Docker e DockerCompose

> Copie o arquivo .env-example e cole como .env

> Execute os Seguintes comandos para realizar a instalação <br />
    ```- docker-compose up ```<br />
    ``` - composer install ```<br />
    ``` - docker-compose exec node npm install```<br />
    ```- docker-compose exec node npm run dev```<br />
    ```- docker-compose exec app php artisan key:generate```<br />
    ```- docker-compose exec app php artisan migrate```<br />
    ```- docker-compose exec app php artisan passport:install```<br />
 
>Postman <br />
     ```- Importe os dados do postman da pasta postman/PosAtividadeLaravel.postman_collection.json ```<br />
     
     
>Para usar a api em todos os recuros precisa de autenticação  <br />
     ``` - Gere seu token na area adminitrativa ``` <br />
     ``` - No Postman substitua o token no parametro Authorization no Headers com Bearer $token ``` <br />
     
>Para alimetar o banco com dados fakes de exemplo execute o seguinte comando <br />
     ```- docker-compose exec app php artisan db:seed```<br />
        
>Endereços http <br />
    ```- aplicação http://localhost:8080   ``` <br />
    ```  - phpmyadmin http://localhost:8081 ```   <br />
    
>Resumo do projeto <br />
    ```- Controllers em: app/Http/Controllers/Api   ``` <br />
    ```- Models em: app/Model   ``` <br />
    ```- Resources em: app/Http/Resources   ``` <br />
    ```- Migrations em: database/migrations   ``` <br />
    ```- Factories em: database/factories ```<br />    
    ```- Requests em: app/Http/Requests ```<br />    
    

