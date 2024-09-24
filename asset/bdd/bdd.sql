/*
Sur votre serveur mysql, créer une base de données et un utilisateur (respecter les noms sinon le model ne fonctionnera pas)
nom base de données : eval_php
nom utilisateur 'eval_admin'@'localhost'
mot de passe utilisateur : c0d3r1sfun

Dans la base de données créée, appliquer le code suivant pour créer la table et la remplir :
*/

CREATE TABLE IF NOT EXISTS events (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    lieu VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    difficulte VARCHAR(255) NOT NULL
)ENGINE=INNODB;

INSERT INTO events (`image`, `lieu`, `description`, `difficulte`)
    VALUES  ('../asset/image/groupPn.webp', 'E2C', 'De sombre rumeurs amènent un groupe de jeunes codeurs à se préparer au pire', 'facile'),
            ('../asset/image/groupPn2.webp', 'E2C', 'Après une rapide préparation, ils sont prêts à en découdre', 'facile'),
            ('../asset/image/riverCity.png', 'River City', 'Ils vont devoir quitter la cité pour s''enfoncer dans les terres sauvages', 'moyenne'),
            ('../asset/image/aubergeRelai.png', 'Marais des murmures', 'Après un long voyage, ils arrivent à une sinistre auberge', 'moyenne'),
            ('../asset/image/enterTheCrypt.webp', 'Cave de l''auberge', 'Dans la cave se cache le repère du nécromancien', 'moyenne'),
            ('../asset/image/enterTheCrypt2.webp', 'La crypte', 'De nombreux obstacles se dressent devant nos héros', 'difficile'),
            ('../asset/image/fightTheBoss.webp', 'La crypte', 'Un terrible démon protège le trésor', 'difficile');