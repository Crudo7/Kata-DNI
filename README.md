## Kata DNI 
In this project, the objective is to design with [Laravel](https://laravel.com) an application capable of generating via endpoint a letter for an eight-digit numerical string. Emulating the operation of the Spanish identification card (DNI).

## App

![Captura de pantalla 2025-01-09 113330](https://github.com/user-attachments/assets/9eea8e91-94ad-4e74-954b-a63feccd3f91)
*Correct operation, returns the number entered and the assigned letter*

![image](https://github.com/user-attachments/assets/d2d97dd5-53d5-49da-840a-e6fe5f353487)
*Incorrect operation, returns error text*

## 💻 Languages ​​and tools  
![](https://skillicons.dev/icons?i=php,laravel,git,github,vscode,)

## ⚙️ Installation prerequisites
🟢Install [Node.js](https://nodejs.org/en/download/source-code)

🟢Install [Composer](https://getcomposer.org/download/)

## 🛠️ Installation Guide 
0️⃣ Before starting to install the project, you will need to create a database (we have used mysql via xampp) and name it: `katadni`

1️⃣ Open a terminal in the folder where you want the repository to be cloned and enter this command:

```
git clone https://github.com/Leonkeneddy86/Kata_DNI.git
```

2️⃣ As you clone the repository, it will appear all the elements on it; you need to rename the file ".env.example" to ".env" and fill it with theese values:

![image](https://github.com/user-attachments/assets/727bcefe-2696-4afd-b371-ec4ca58a38f9)


2️⃣ In your preferred environment, open the project you cloned; you will need three consoles for the next step.

▷Console 1:
    ```
    npm install
    ```

     ```
     npm run dev
     ```
    
▷Console 2:
    ```
    composer install
    ```

    ```
    php artisan serve
    ```
    
## Execute Migration 
    
    php artisan migrate:fresh
    
    php artisan migrate:fresh --seed
    
    
3️⃣ In the second console that you have opened, press the ctrl key and click on the link to localhost that it offers you. It should take you to the main view of the project where the offers are located.

⚠️ If you have done the previous steps and the view has not opened correctly, go back to the third command console and enter this:

```
php artisan key:generate
```

 ```
 php artisan config:cache
``` 

## 🌐 Endpoints 
For this project, just one endpoint i needed to do all the functionalities; it's used to introduce the number you want to process; if it's correct it will return your number plus the corresponding letter; if it's not, it will show an error message warning you to introduce a valid number.

### 🔠 Assingn letter (GET)
`http://127.0.0.1:8000/api/assign/id`

*you need to introduce the number where the id goes*

## 🧪 Tests

<p align="center">
 <img width="671" alt="Captura de pantalla 2025-01-16 125108" src="https://github.com/user-attachments/assets/1b04b7fb-68f9-4db7-817f-db388dafc0b2" />
</p>

If you want to launch the tests and view them you can put this command in console 3:

```
php artisan test --coverage
```

<p align="center">
  <img src="https://github.com/user-attachments/assets/fedb145f-ac7b-4582-8bc3-0650835ca905" alt="PHP test coverage" width="500"/
</p>
