CREATE DATABASE jurassite;

USE jurassite;

CREATE TABLE site(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `longitude` VARCHAR(255) NOT NULL,
    `latitude` VARCHAR(255) NOT NULL,
    `manager` VARCHAR(255) NOT NULL,
    `phone` INT NOT NULL 
);

CREATE TABLE notes(
    `id` INT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `content` TEXT NOT NULL,
    `date` DATE NOT NULL,
    CONSTRAINT fk_notes_site
    FOREIGN KEY(`id`) REFERENCES site(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE dino(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `site_id` INT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `type` TEXT NOT NULL,
    `family` TEXT NOT NULL,
    `x` INT NOT NULL,
    `y` INT NOT NULL,
    `z` VARCHAR(255) NOT NULL,
    `picture` TEXT NOT NULL,
    `conservation` VARCHAR(255) NOT NULL,
    CONSTRAINT fk_dino_site
    FOREIGN KEY(`site_id`) REFERENCES site(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE remarks(
    `id` INT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `content` TEXT NOT NULL,
    CONSTRAINT fk_remarks_dino
    FOREIGN KEY(`id`) REFERENCES dino(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

INSERT INTO `site` (`name`, `longitude`, `latitude`, `manager`, `phone`) VALUES ('Glanum', '43°4701"N', '4°5032"E', 'John Hammond', '0123456789'),('Ambrussum', '43°4308"N', '4°0848"E', 'Professeur Alan Grant', '0123456798');

INSERT INTO `dino` (`name`, `site_id`, `type`, `family`,`x`, `y`, `z`, `picture`, `conservation`) VALUES ('Triceratops', '1', 'Herbivore', 'Cératopsidés','620', '555', '6 metres', '<img src="https://visitmuseum.gencat.cat/media/cache/1140x684/uploads/objects/photos/56cc7043e28a2_esquelet-sencer-de-triceratops.jpeg" alt="Triceratops" width="200" height="200" frameBorder="0" allowFullScreen>', '90%'),('Velociraptor', '2', 'Carnivore', 'Theropodes(Saurischien)', '785', '412', '12 metres', '<img src="https://i.pinimg.com/474x/42/61/c0/4261c0407cee38eb64461bd7e8cd11cd.jpg" alt="Velociraptor" width="200" height="200" frameBorder="0" allowFullScreen>', '100%'),('Stégosaure', '1', 'Vegetivore', 'Stegosaurus', '123', '456', '90 metres', '<img src="https://images.lpcdn.ca/924x615/201504/22/999496-squelette-plus-complet-stegosaure-expose.jpg" alt="Stegosaure" width="200" height="200" frameBorder="0" allowFullScreen>', '40%'),('Tyrannosaurus Rex', '2', 'Carnivore', 'Theropodes(Saurischien)', '69', '69', '69 metres', '<img src="https://cdn-europe1.lanmedia.fr/var/europe1/storage/images/europe1/culture/a-la-rencontre-de-trix-lexceptionnel-squelette-de-t-rex-du-museum-dhistoire-naturelle-3673340/48590600-1-fre-FR/A-la-rencontre-de-Trix-l-exceptionnel-squelette-de-T-Rex-du-Museum-d-Histoire-naturelle.jpg" alt="T-rex" width="200" height="200" frameBorder="0" allowFullScreen>', '69%');

INSERT INTO `notes` (`id`, `title`, `content`, `date`) VALUES ('1', 'Decouverte Triceratops', "On voit la tête !!!", '2005/06/06'),('1', 'Decouverte Stégosaure', 'On voit la patte !!', '2008/07/08'),('2', 'Decouverte Velociraptor', 'Bordel il est trop classe !!', '2002/08/07'),('2', 'Decouverte T-rex', 'Baleeeeeze', '2004/05/02');

INSERT INTO `remarks` (`id`, `title`, `content`) VALUES ('1', 'Triceratops', "Triceratops est un genre éteint célèbre de dinosaures herbivores de la famille des cératopsidés qui a vécu à la fin du Maastrichtien, au Crétacé supérieur, il y a 68 à 66 millions d'années, dans ce qui est maintenant l'Amérique du Nord.
Il a été l'un des derniers dinosaures non-aviens vivant avant leur disparition lors de la grande extinction Crétacé-Tertiaire, il y a 66 Ma (millions d'années)3.
Ayant une grande collerette osseuse, trois cornes et quatre grandes pattes, et montrant des similitudes avec le rhinocéros, le tricératops est l'un des dinosaures le plus reconnaissable et le genre le plus connu des cératopsidés. Il a notamment vécu à la même période que le redoutable tyrannosaure dont il était la proie."),('2', 'Velociraptor', "Le vélociraptor possède de puissantes mâchoires portant environ 80 dents acérées. Le vélociraptor mesurait, de la tête à la queue, environ 1,5 à 2 mètres pour une hauteur de 75 centimètres. Son poids avoisinait 15 à 20 kilogrammes2,3. Ses membres postérieurs sont pourvus d'une griffe rétractile, capable de se positionner presque à la verticale pour poignarder la peau de sa proie. Sa queue, rigidifiée par des tendons osseux, l'aide à s'équilibrer lorsqu'il se dresse pour harponner sa proie. Cette technique de chasse a été confirmée par la découverte d'un fossile de vélociraptor dont cette fameuse griffe se trouvait à l'emplacement du cou d'un protoceratops. On suppose que le prédateur et sa proie ont été brusquement ensevelis par un glissement de terrain en plein combat. "),('3', 'Stégosaure', "Stegosaurus, communément appelé stégosaure, est un genre éteint de grands dinosaures herbivores à dos cuirassé par des plaques osseuses. Il a vécu sur les terres des États-Unis et du Portugal actuels durant le Jurassique supérieur (Kimméridgien à Tithonien inférieur), il y a environ entre 155 et 150 Ma (millions d'années). Le plus ancien stégosaure jamais trouvé a été découvert dans la région de Boulahfa en Moyen Atlas au Maroc."),('4', 'T-rex', "Tyrannosaurus, communément appelé tyrannosaure, est un genre éteint de dinosaures théropodes appartenant à la famille des Tyrannosauridae et ayant vécu durant la partie supérieure du Maastrichtien, dernier étage du système Crétacé1, il y a environ 68 à 66 millions d'années2, dans ce qui est actuellement l'Amérique du Nord. Tyrannosaurus rex, dont l'étymologie du nom signifie « roi des lézards tyrans », est l'une des plus célèbres espèces de dinosaure et l'unique espèce de Tyrannosaurus si le taxon Tarbosaurus bataar n'est pas considéré comme faisant partie du même genre. Tyrannosaurus fut l'un des derniers dinosaures non-aviens à avoir vécu jusqu'à l'extinction survenue à la limite Crétacé-Paléocène il y a 66 millions d'années.");