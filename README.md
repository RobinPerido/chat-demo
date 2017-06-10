# chat-demo
Learning Vue
Usage:
    composer install
    npm install
    cp .env.example .env
    art key:generate
*Fill out the right credentials for pusher and your database, and set the broadcast driver to pusher.*
    art migrate --seed
    npm run dev
  
*You might want to add yourself to the users seeder and rerun it.*
