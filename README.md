
##  Starting project locally

Application can be startedlocallycloning the repositories and by following next
steps. Make sure to get the latest versions of all the applications and programming
languages.
Applications that have to be downloaded for stating the project:
Ganache, PHPStorm (or any other code editor), **[Laragon](https://laragon.org/)**, terminal
## 1. Clone Repositories

Here is the link to minting repo: https://github.com/YellowAvocado/MyNFTContract
Here is the link to minting repo: https://github.com/YellowAvocado/NFTLaravel-SAE

Do the same procedure for both repositories, one at the time, in the terminal:

    git clone git@github.com:YellowAvocado/NFTLaravel-SAE.git
    git composer install
    cp .env.example .env
    php artisan key:generate
    npm install
    npm run dev

##  2. Laragon

After cloned repos run laravel and open the application using writing **myNFT.test** in
the browser. In Laragon start the Apache or Nginx. Doing these steps, the application
will be visible in the browser on the **/login page**.

## 3.Ganache
Quickstart Ganache and insert credentials in the .env file.
Here is an example of what an .env file should look like in theNFTLaravel-SAE project.
(it is safe to provide these credentials since al of them are run localy and wil change
when Ganache activates every time).

    JSON_RPC_URL=http://127.0.0.1:3000
    PRIVATE_KEY=0x0e53e734d2761c852b43c26fa77c98410ad96d07dfa7e0dd21b3456ef59
    81c63
    CONTRACT_ADDRESS=0x9eB0C08d0AF66476149D96d2D7D059C3c4cded75
    TOKEN_URI=http://mynft.test/public/storage

Following interface contains all the informations that are needed for adding
credential in the .enc file.

## 4. Minting the data and inserting the API key
   Run the minting services in the in the new terminal:

   **cd [application_path]**

   **node node_scripts/mintNFT.js**

   (keep the minting listening the whole time of the testing)
   Get the **DALL E API** key. And put it in the **.env** 
   NFTLaravel-SAE file, also make sure that **MINT_URL** is also provided. 

    OPENAI_API_KEY=""
    MINT_URL="http://localhost:3000"
   
## 5. RegisterasAdmin
   App should be ready for playing. Register as a user or Admin.

   (admin has the power of accessing the admin panel, but still guest and admin can
   generate NFT)

__Admincredentials:__

    Name: Admin

    Email: admin@nft.com

    Password: 123123123
## 6. GenerateNFT
   The main part of the application is to generate an NFT, by inserting the credential:

   **Title:**  [title of the image]

   **Prompt:** [describe the look of NFT]

   **Address:** Wallet address generated in the Ganache
