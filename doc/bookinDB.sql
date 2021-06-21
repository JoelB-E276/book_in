DROP DATABASE IF EXISTS bookin_php;
CREATE DATABASE bookin_php CHARACTER SET 'utf8';
USE bookin_php;

DROP USER IF EXISTS 'Bookin'@'Localhost';
CREATE USER 'Bookin'@'Localhost';
GRANT ALL PRIVILEGES ON bookin_php.* To 'bookin'@'Localhost' IDENTIFIED BY 'book';


CREATE TABLE `user`
(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  lastname VARCHAR(250) NOT NULL,
  firstname VARCHAR(250) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  city VARCHAR(30) NOT NULL,
  city_code CHAR(6) NOT NULL,
  adress VARCHAR(250) NOT NULL,
  birth_date DATE NOT NULL,
  book_id INT NOT NULL,
  PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO user
(lastname, firstname, email, city, city_code, adress, birth_date)
VALUES
("Hopper","Grace","hopper@maboitemail.fr","New-York","10021","fifh avenue","19061209"),
("Lovelace","Ada","lovelace@gmail.com","Londres","SW1A 2AA", "12 Downing street", "18151210"),
("Lamarr","Hedy","lamarr@yahoo.fr","Vienne","1030","27 Prinz Eugen-Strabe","19141109");



CREATE TABLE book
(
  book_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(250) NOT NULL,
  author VARCHAR(250) NOT NULL,
  `resume` VARCHAR(8000) NULL,
  release_date DATE NOT NULL,
  genre VARCHAR(50) NOT NULL,
  `edition` VARCHAR(50) NOT NULL,
  number_pages VARCHAR(50) NOT NULL,
  `availability` VARCHAR(50) NOT NULL,
  `user_id` INT UNSIGNED  NULL,
  borrowing_date DATE NULL,
  rendering_date DATE NULL,
  PRIMARY KEY (id_book),
  FOREIGN KEY (user_id) REFERENCES `user`(id)
);

INSERT INTO book
(`title`, `author`, `release_date`, `genre`, `edition`, `number_pages`, `availability`, `resume`)
VALUES
("Au revoir là haut", "Pierre Lemaitre","20131130","Roman","Albin Michel", "624", "oui","Pour le commerce, la guerre présente beaucoup d'avantages, même après. Sur les ruines du plus grand carnage du XX° siècle, deux rescapés des tranchées, passablement abîmés, prennent leur revanche en réalisant une escroquerie aussi spectaculaire qu'amorale. Des sentiers de la gloire à la subversion de la patrie victorieuse, ils vont découvrir que la France ne plaisante pas avec Ses morts...Fresque d'une rare cruauté, remarquable par son architecture et sa puissance d'évocation, Au revoir là-haut est le grand roman de l'après-guerre de 14, de l'illusion de l'armistice, de l'État qui glorifie ses disparus et se débarrasse de vivants trop encombrants, de l\'abomination érigée en vertu. Dans l\'atmosphère crépusculaire des lendemains qui déchantent, peuplée de misérables pantins et de lâches reçus en héros, Pierre Lemaitre compose la grande tragédie de cette génération perdue avec un talent et une maîtrise impressionnants."),
("Alex","Pierre Lemaitre","20110202","Thriller","Albin Michel", "392", "oui","Qui connaît vraiment Alex ?Elle est belle. Excitante. Est-ce pour cela qu'on l'a enlevée, séquestrée et livrée à l'inimaginable ? Mais quand la police découvre enfin sa prison, Alex a disparu.Alex, plus intelligente que son bourreau.Alex qui ne pardonne rien, qui n'oublie rien ni personne."),
("Robe de marié", "Pierre Lemaitre","20090107","Roman", "Calmann-Lévy","270","oui","Nul n'est à l'abri de la folie. Sophie, une jeune femme qui mène une existence paisible, commence à sombrer lentement dans la démence: mille petits signes inquiétants s'accumulent puis tout s'accélère. Est-elle responsable de la mort de sa belle-mère, de celle de son mari infirme ? Peu à peu, elle se retrouve impliquée dans plusieurs meurtres dont, curieusement, elle n'a aucun souvenir. Alors, désespérée mais lucide, elle organise sa fuite; elle va changer de nom, de vie, se marier, mais son douloureux passé la rattrape..."),
("Travail soigné", "Pierre Lemaitre", "20100609", "Thriller", "Livre de Poche", "416", "oui", "Dès le premier meurtre, épouvantable et déroutant, Camille Verhoeven comprend que cette affaire ne ressemblera à aucune autre. Et il a raison. D'autres crimes se révèlent, horribles, gratuits... La presse, le juge, le préfet se déchaînent bientôt contre la méthode Verhoeven. Policier atypique, le commandant Verhoeven ne craint pas les affaires hors normes, mais celle-ci va le laisser totalement seul face à un assassin qui semble avoir tout prévu. Jusque dans le moindre détail. Jusqu'à la vie même de Camille qui n'échappera pas au spectacle terrible que le tueur a pris tant de soin à organiser, dans les règles de l'art..."),
("Les fourmis", "Bernard Werber", "20020824", "Science-fiction", "Livre de Poche", "320","oui", "Le temps que vous lisiez ces lignes, sept cents millions de fourmis seront nées sur la planète. Sept cents millions d'individus dans une communauté estimée à un milliard de milliards, et qui a ses villes, sa hiérarchie, ses colonies, son langage, sa production industrielle, ses esclaves, ses mercenaires... Ses armes aussi. Terriblement destructrices. Lorsqu'il entre dans la cave de la maison léguée par un vieil oncle entomologiste, Jonathan Wells est loin de se douter qu'il va à leur rencontre. A sa suite, nous allons découvrir le monde fabuleusement riche, monstrueux et fascinant de ces infra terrestres, au fil d'un thriller unique en son genre, où le suspense et l'horreur reposent à chaque page sur les données scientifiques les plus rigoureuses. Voici pour la première fois un roman dont les héros sont des... fourmis."),
("La révolution des fourmis", "Bernard Werber", "20011130","Science-fiction","Livre de Poche", "672","oui","Que peuvent nous envier les fourmis ? L’humour, l’amour, l’art. Que peuvent leur envier les hommes ? L’harmonie avec la nature, l’absence de peur, la communication absolue. Après des millénaires d’ignorance, les deux civilisations les plus évoluées de la planète vont-elles enfin pouvoir se rencontrer et se comprendre ? Sans se connaître, Julie Pinson, une étudiante rebelle, et 103e, une fourmi exploratrice, vont essayer de faire la révolution dans leur monde respectif pour le faire évoluer. Les Fourmis était le livre du contact, Le Jour des Fourmis le livre de la confrontation. La Révolution des Fourmis est le livre de la compréhension. Mais au-delà du thème des fourmis, c'est une révolution d'humains, une révolution non violente, une révolution faite de petites touches discrètes et d'idées nouvelles que nous propose Bernard Werber. À la fois roman d’aventures et livre initiatique, ce couronnement de l’épopée myrmécéenne nous convie à entrer dans un avenir qui n’est peut-être pas seulement de la science-fiction…"),
("Millénium 1 : Les hommes qui n'aimaient pas les femmes", "Stieg Larson","20060609","Roman","Actes Sud","652", "oui","Ancien rédacteur de Millénium, revue d'investigations sociales et économiques, Mikael Blomkvist est contacté par un gros industriel pour relancer une enquête abandonnée depuis quarante ans. Dans le huis clos d'une île, la petite nièce de Henrik Vanger a disparu, probablement assassinée, et quelqu'un se fait un malin plaisir de le lui rappeler à chacun de ses anniversaires. Secondé par Lisbeth Salander, jeune femme rebelle et perturbée, placée sous contrôle social mais fouineuse hors pair, Mikael Blomkvist, cassé par un procès en diffamation qu'il vient de perdre, se plonge sans espoir dans les documents cent fois examinés, jusqu'au jour où une intuition lui fait reprendre un dossier. Régulièrement bousculés par de nouvelles informations, suivant les méandres des haines familiales et des scandales financiers, lancés bientôt dans le monde des tueurs psychopathes, le journaliste tenace et l'écorchée vive vont résoudre l'affaire des fleurs séchées et découvrir ce qu'il faudrait peut-être taire."),
("La ligne de sang", "DOA", "20070215","Thriller","Gallimard","656","oui","Madeleine Castinel est étudiante à Lyon. Elle sort d'une rupture difficile avec son petit ami, Paul Grieux. Depuis le soir du 30 septembre 2003, elle est partie sans prévenir ses proches. Personne ne s'inquiète : ils ont l'habitude de ses fugues solitaires. Priscille Mer est lieutenant de police. Jeune, inexpérimentée, elle découvre jour après jour le quotidien déprimant du commissariat de la Croix-Rousse. Le 30 septembre 2003, en début de soirée, elle intervient sur un accident de la circulation. Il y a un seul blessé, le conducteur d'une moto. Il se nomme Paul Grieux. Le 30 septembre 2003, alors qu'il rentre chez lui après une journée de travail, le capitaine Marc Launay, du SRPJ de Lyon, croise l'une de ses anciennes stagiaires, Priscille Mer, sur les lieux d'un accident. Pour l'aider, il décide de s'occuper de prévenir le seul proche identifié de Paul Grieux. Il n'a qu'une adresse, celle de la fiancée du motard, Madeleine Castinel. Paul Grieux est antiquaire. Jusqu'au soir du 30 septembre 2003, il menait une existence tranquille et discrète. Presque secrète. Il était le mystérieux amant de Madeleine. A sa demande, elle parlait peu de lui, n'évoquait jamais Son Nom. Que souhaitait-il cacher ? A présent, il est dans le coma et lutte contre la mort. Il se bat, se débat, parle, délire, crie. Révèle. Mais le temps s'enfuit. Tempus fugit. Où mène la ligne de sang qui s'esquisse entre ces quatre vies ? Cela n'aurait pu être qu'un banal accident de moto sur les hauteurs de la Croix-Rousse. Un homme dans le coma victime d'un accrochage... C'est le début d'une enquête des plus troubles menée à l'instinct par les officiers de police Marc Launay et Priscille Mer. La victime, entourée de mystères, est bien trop inquiétante. Tout sue l'angoisse et la peur dans sa grande maison vide. Trop de portes fermées, de questions, de silences oppressants. Sa compagne même a disparu, comme volatilisée dans son appartement, et personne ne sait rien. Jamais elle ne mentionnait son nom. Jamais elle ne parlait de lui. À sa demande. Comme s'il avait voulu ne jamais exister. Comme s'il avait souhaité que personne ne puisse un jour savoir ce qu'il était vraiment...");





























/*


Alex
Pierre Lemaitre
EAN : 9782226218773
392 pages
Éditeur : Albin Michel (02/02/2011)
  Existe en édition audio

Résumé :
Qui connaît vraiment Alex ?
Elle est belle. Excitante.
Est-ce pour cela qu'on l'a enlevée, séquestrée et livrée à l'inimaginable ?
Mais quand la police découvre enfin sa prison, Alex a disparu.
Alex, plus intelligente que son bourreau.
Alex qui ne pardonne rien, qui n'oublie rien ni personne.

Un thriller glaçant qui jongle avec les codes de la folie meurtrière, une mécanique diabolique et imprévisible où l'on retrouve le talent de l'auteur de Robe de marié.

-----------------------------link
Robe de marié 
Pierre Lemaitre
EAN : 9782702139752
270 pages
Éditeur : Calmann-Lévy (07/01/2009)
4.07/5   3316 notes
Résumé :
Nul n'est à l'abri de la folie. Sophie, une jeune femme qui mène une existence paisible, commence à sombrer lentement dans la démence: mille petits signes inquiétants 
s'accumulent puis tout s'accélère. Est-elle responsable de la mort de sa belle-mère, de celle de son mari infirme ? Peu à peu, elle se retrouve impliquée dans plusieurs 
meurtres dont, curieusement, elle n'a aucun souvenir. Alors, désespérée mais lucide, elle organise sa fuite; elle va changer de nom, de vie, se marier, mais son douloureux 
passé la rattrape...

Les ombres de Hitchcock et de Brian de Palma planent sur ce thriller diabolique.

Avec "Robe de marié", dont on comprendra le titre dans les dernières pages, Pierre Lemaitre livre un polar parfaitement orchestré où le mal n'épargne personne.
Allan Kaval, Marianne

Une fable cruelle et amorale sur le harcèlement et la vengeance.
Philiippe Lemaire, Le Parisien.
-----------------------------------------
Travail soigné
Pierre Lemaitre
EAN : 9782253127383
416 pages
Éditeur : Le Livre de Poche (09/06/2010)
  Existe en édition audio
3.96/5   1641 notes
Résumé :
Dès le premier meurtre, épouvantable et déroutant, Camille Verhoeven comprend que cette affaire ne ressemblera à aucune autre. 
Et il a raison. D'autres crimes se révèlent, horribles, gratuits... La presse, le juge, le préfet se déchaînent bientôt contre la "méthode Verhoeven".
 Policier atypique, le commandant Verhoeven ne craint pas les affaires hors normes, mais celle-ci va le laisser totalement seul face à un assassin qui semble avoir tout prévu. Jusque dans le moindre détail. Jusqu'à la vie même de Camille qui n'échappera pas au spectacle terrible que le tueur a pris tant de soin à organiser, dans les règles de l'art...
-------------------------------------link
Les Fourmis 
Bernard Werber
EAN : 9782253063339
320 pages
Éditeur : Le Livre de Poche (24/08/2002)
  Existe en édition audio
3.88/5   9168 notes
Résumé :
Le temps que vous lisiez ces lignes, sept cents millions de fourmis seront nées
 sur la planète. Sept cents millions d'individus dans une communauté estimée à un milliard de milliards, et qui a ses villes, sa hiérarchie, ses colonies, son langage, sa production industrielle, ses esclaves, ses mercenaires... Ses armes aussi. Terriblement destructrices. Lorsqu'il entre dans la cave de la maison léguée par un vieil oncle entomologiste, Jonathan Wells est loin de se douter qu'il va à leur rencontre. A sa suite, nous allons découvrir le monde fabuleusement riche, monstrueux et fascinant de ces "infra terrestres", au fil d'un thriller unique en son genre, où le suspense et l'horreur reposent à chaque page sur les données scientifiques les plus rigoureuses. 
Voici pour la première fois un roman dont les héros sont des... fourmis.
-----------------------------------------link
La Révolution des fourmis 
Bernard Werber
EAN : 9782253144458
672 pages
Éditeur : Le Livre de Poche (30/11/-1)
  Existe en édition audio
3.73/5   2314 notes
Résumé :
Que peuvent nous envier les fourmis ? L’humour, l’amour, l’art. Que peuvent leur envier les hommes ? L’harmonie avec la nature, l’absence de peur, la communication absolue.
Après des millénaires d’ignorance, les deux civilisations les plus évoluées de la planète vont-elles enfin pouvoir se rencontrer et se comprendre ?
Sans se connaître, Julie Pinson, une étudiante rebelle, et 103e, une fourmi exploratrice, vont essayer de faire la révolution dans leur monde respectif pour le faire évoluer.
Les Fourmis était le livre du contact, Le Jour des Fourmis le livre de la confrontation. La Révolution des Fourmis est le livre de la compréhension.
Mais au-delà du thème des fourmis, c'est une révolution d'humains, une révolution non violente, une révolution faite de petites touches discrètes et d'idées nouvelles que nous propose Bernard Werber.
À la fois roman d’aventures et livre initiatique, ce couronnement de l’épopée myrmécéenne nous convie à entrer dans un avenir qui n’est peut-être pas seulement de la science-fiction…
--------------------------------link
Millénium, tome 1 : Les hommes qui n'aimaient pas les femmes 
Stieg Larsson

Lena Grumbach (Traducteur)
Marc de Gouvenain (Traducteur)
EAN : 9782742761579
574 pages
Éditeur : Actes Sud (09/06/2006)
  Existe en édition audio
4.18/5   11921 notes
Résumé :
Ancien rédacteur de Millénium, revue d'investigations sociales et économiques, Mikael Blomkvist est contacté par un gros industriel pour relancer une enquête abandonnée depuis quarante ans.
Dans le huis clos d'une île, la petite nièce de Henrik Vanger a disparu, probablement assassinée, et quelqu'un se fait un malin plaisir de le lui rappeler à chacun de ses anniversaires.
Secondé par Lisbeth Salander, jeune femme rebelle et perturbée, placée sous contrôle social mais fouineuse hors pair, Mikael Blomkvist, cassé par un procès en diffamation qu'il vient de perdre, se plonge sans espoir dans les documents cent fois examinés, jusqu'au jour où une intuition lui fait reprendre un dossier.
Régulièrement bousculés par de nouvelles informations, suivant les méandres des haines familiales et des scandales financiers, lancés bientôt dans le monde des tueurs psychopathes, le journaliste tenace et l'écorchée vive vont résoudre l'affaire des fleurs séchées et découvrir ce qu'il faudrait peut-être taire.

A la fin de ce volume, le lecteur se doute qu'il rencontrera à nouveau les personnages et la revue Millénium. Des fils ont été noués, des portes ouvertes. Impatient, haletant, on retrouvera Mikael et sa hargne sous une allure débonnaire, et Lisbeth avec les zones d'ombre qui l'entourent, dans - Millénium 2 - La fille qui rêvait d'un bidon d'essence et d'une allumette ; Millénium 3 - La Reine dans le palais des courants d'air.

---------------------------------------------
Millénium, Tome 2 : La fille qui rêvait d'un bidon d'essence et d'une allumette 
Stieg Larsson

Lena Grumbach (Traducteur)
Marc de Gouvenain (Traducteur)
EAN : 9782742765010
652 pages
Éditeur : Actes Sud (25/10/2006)
  Existe en édition audio
4.18/5   8556 notes
Résumé :
Tandis que Lisbeth Salander coule des journées supposées tranquilles aux Caraïbes, Mikael Blomkvist, réhabilité, victorieux, est prêt à lancer un numéro spécial de Millénium sur un thème brûlant pour des gens haut placés : une sombre histoire de prostituées exportées des pays de l'Est. Mikael aimerait surtout revoir Lisbeth. Il la retrouvé sur son chemin, mais pas vraiment comme prévu : un soir, dans une rue de Stockholm, il la voit échapper de peu à une agression manifestement très planifiée.

Enquêter sur des sujets qui fâchent mafieux et politiciens n'est pas ce qu'on souhaite à de jeunes journalistes amoureux de la vie. Deux meurtres se succèdent, les victimes enquêtaient pour Millénium. Pire que tout, la police et les médias vont bientôt traquer Lisbeth, coupable toute désignée et qu'on a vite fait de qualifier de tueuse en série au passé psychologique lourdement chargé.

Mais qui était cette gamine attachée sur un lit, exposée aux caprices d'un maniaque et qui survivait en rêvant d'un bidon d'essence et d'une allumette ?

S'agissait-il d'une des filles des pays de l'Est, y a-t-il une hypothèse plus compliquée encore ? C'est dans cet univers à cent à l'heure que nous embarque Stieg Larsson qui signe avec ce deuxième volume de la trilogie Millénium un thriller au rythme affolant.
----------------------------------------
Millenium, Tome 3 : La reine dans le palais des courants d'air 
Stieg Larsson

Lena Grumbach (Traducteur)
Marc de Gouvenain (Traducteur)
EAN : 9782742770311
711 pages
Éditeur : Actes Sud (29/08/2007)
  Existe en édition audio
4.15/5   7567 notes
Résumé :
Après avoir échappé de peu à la mort, Lisbeth Salander se remet difficilement de ses blessures dans une chambre d’hôpital. Incapable physiquement d’agir, elle a de surcroît été placée en isolement et sous surveillance policière, car elle est encore sous le coup de plusieurs chefs d’accusation. La voilà coincée, donc, mais pas inactive, d’autant qu’un patient soigné dans une chambre voisine a de très sérieux et très anciens comptes à régler avec elle…
De son côté, Mikael Blomkvist se démène pour innocenter et réhabiliter la jeune femme. Ses recherches lèvent le voile sur les plus inavouables activités de certains services secrets, mais les sombres personnages autour desquels se resserre son enquête ne vont pas se laisser menacer sans réagir.

Le troisième volume de Millénium promet poussées d’adrénaline, insoutenable suspense et scènes terribles, mais la pire épreuve pour le lecteur consistera à se séparer des personnages à la fin de ce dernier volet de l’irrésistible trilogie.
----------------------link
La ligne de sang 
DOA
Stéphane Douay
EAN : 9782070342419
656 pages
Éditeur : Gallimard (15/02/2007)
3.6/5   129 notes
Résumé :
Madeleine Castinel est étudiante à Lyon. Elle sort d'une rupture difficile avec son petit ami, Paul Grieux. Depuis le soir du 30 septembre 2003, elle est partie sans prévenir ses proches. Personne ne s'inquiète : ils ont l'habitude de ses fugues solitaires.

Priscille Mer est lieutenant de police. Jeune, inexpérimentée, elle découvre jour après jour le quotidien déprimant du commissariat de la Croix-Rousse.


Le 30 septembre 2003, en début de soirée, elle intervient sur un accident de la circulation. Il y a un seul blessé, le conducteur d'une moto. Il se nomme Paul Grieux

. Le 30 septembre 2003, alors qu'il rentre chez lui après une journée de travail, le capitaine Marc Launay, du SRPJ de Lyon, croise l'une de ses anciennes stagiaires, Priscille Mer, sur les lieux d'un accident.

Pour l'aider, il décide de s'occuper de prévenir le seul proche identifié de Paul Grieux. Il n'a qu'une adresse, celle de la fiancée du motard, Madeleine Castinel. Paul Grieux est antiquaire. Jusqu'au soir du 30 septembre 2003, il menait une existence tranquille et discrète. Presque secrète. Il était le mystérieux amant de Madeleine

. A sa demande, elle parlait peu de lui, n'évoquait jamais Son Nom. Que souhaitait-il cacher ? A présent, il est dans le coma et lutte contre la mort. Il se bat, se débat, parle, délire, crie. Révèle. Mais le temps s'enfuit. Tempus fugit. Où mène la ligne de sang qui s'esquisse entre ces quatre vies ?

Cela n'aurait pu être qu'un banal accident de moto sur les hauteurs de la Croix-Rousse. Un homme dans le coma victime d'un accrochage... C'est le début d'une enquête des plus troubles menée à l'instinct par les officiers de police Marc Launay et Priscille Mer. La victime, entourée de mystères, est bien trop inquiétante. Tout sue l'angoisse et la peur dans sa grande maison vide. Trop de portes fermées, de questions, de silences oppressants. Sa compagne même a disparu, comme volatilisée dans son appartement, et personne ne sait rien. Jamais elle ne mentionnait son nom. Jamais elle ne parlait de lui. À sa demande. Comme s'il avait voulu ne jamais exister. Comme s'il avait souhaité que personne ne puisse un jour savoir ce qu'il était vraiment...
--------------------------link
Bel-Ami
Guy de Maupassant 
EAN : 9782253009009
367 pages
Éditeur : Le Livre de Poche (01/08/1885)
  Existe en édition audio
3.89/5   7399 notes
Résumé :
Le monde est une mascarade où le succès va de préférence aux crapules. La réussite, les honneurs, les femmes et le pouvoir: le monde n'a guère changé. 
On rencontre toujours - moins les moustaches - dans les salles de rédaction ou ailleurs, de ces jeunes aventuriers de l'arrivisme et du sexe. 
Comme Flaubert, mais en riant, Maupassant disait de son personnage, l'odieux Duroy : " Bel-Ami, c'est moi." Et pour le cynisme, la fureur sensuelle, l'athéisme, la peur de la mort, ils se ressemblaient assez. Mais Bel-Ami ne savait pas écrire, et devenait l'amant et le négrier d'une femme talentueuse et brillante. Maupassant, lui, était un immense écrivain. Universel, déjà, mais par son réalisme, ses obsessions et ses névroses, encore vivant aujourd'hui.

-------------------------
Le Vol des cigognes 
Jean-Christophe Grangé
EAN : 9782253140078
Éditeur : Le Livre de Poche (22/10/1998)
  Existe en édition audio
3.91/5   2649 notes
Résumé :
Chaque année, elles repartent pour leur fabuleuse migration jusqu'en Afrique. Cette année, elles ne reviennent pas. Le vieil ornithologue suisse qui étudiait leur migration est retrouvé assassiné, les yeux arrachés...
Louis Antioche, étudiant oisif et aventureux, se lance sur les traces des cigognes disparues. Cadavres mutilés, tueurs surgis du néant, le jeu de piste débouche sur un gigantesque trafic de diamants et tourne vite au cauchemar.
Des camps de tsiganes bulgares à l'enfer vert de Centrafrique en passant par les kibboutz chauffés à blanc des territoires occupés, sa contre-poursuite l'entraîne jusqu'à Calcutta. Au cœur des ténèbres.
(édition 01/1999)

Quatrième de couverture
Un ornithologue suisse est trouvé mort d'une crise cardiaque... dans un nid de cigognes. Malgré cette disparition, Louis, l'étudiant qu'il avait engagé, décide d'assumer seul la mission prévue : suivre la migration des cigognes jusqu'en Afrique, afin le découvrir pourquoi nombre d'entre elles ont disparu durant la saison précédente...

Parmi les Tsiganes de Bulgarie, dans les territoire occupés par Israël, puis en Afrique, Louis court d'énigme en énigme et d'horreur en horreur : observateurs d'oiseaux massacrés, cadavres d'enfants mutilés dans un laboratoire... Les souvenirs confus de son propre passé - ses mains portent des cicatrices de brûlures depuis un mystérieux accident - se mêlent bientôt à l'enquête. Et c'est au cœur de l'Inde, à Calcutta, que surgira l'effroyable vérité...

Suspense, imagination, vérité documentaire : ce thriller captivant, véritable coup de maître, est le premier roman de l'auteur du best-seller "Les Rivières pourpres."
----------------------------
Kaïken
Jean-Christophe Grangé
EAN : 9782226243034
480 pages
Éditeur : Albin Michel (03/09/2012)
  Existe en édition audio
3.64/5   1238 notes
Résumé :
" - Un kaïken.
- Tu sais à quoi ça sert ?
- C'est avec ce poignard que les femmes samouraïs se suicidaient. Elles se tranchaient la gorge... "

Olivier Passan de la Criminelle. Un solitaire fasciné par le Japon traditionnel, un samouraï des temps modernes, lancé dans la traque d'un insaisissable criminel, « l'Accoucheur », qui éventre les femmes au terme de leur grossesse pour brûler le fœtus.
Ce flic tourmenté, complexe, cherche à comprendre les raisons du naufrage de son couple : Naoko, sa femme japonaise, a demandé le divorce mais ils se sont entendus pour une garde alternée de leurs deux enfants. Cette vie de famille chaotique est au centre de l'intrigue, qui joue des similitudes entre l'histoire personnelle de Passan et celle du serial killer que l'on est tenté de voir comme son double monstrueux. Mais le suicide de l'Accoucheur ne résout rien et Passan devra aller jusqu'à Tokyo rechercher la clé de l'énigme...

Un thriller ambitieux, magnifiquement soutenu de bout en bout. Loin des clichés habituels, le Japon occupe une place prépondérante dans le déroulement d'une intrigue imprévisible où Grangé confère à ses héros une surprenante densité psychologique.
--------------------------link
La terre des morts 
Jean-Christophe Grangé
EAN : 9782226392091
Éditeur : Albin Michel (02/05/2018)
  Existe en édition audio
3.74/5   676 notes
Résumé :
[LIVRE AUDIO]

Quand le commandant Corso est chargé d’enquêter sur une série de meurtres de strip-teaseuses, il pense avoir affaire à une traque criminelle classique.
Il a tort : c’est d’un duel qu’il s’agit. Un combat à mort avec son principal suspect, Philippe Sobieski, peintre, débauché, assassin.

Mais ce duel est bien plus encore : une plongée dans les méandres du porno, du bondage et de la perversité sous toutes ses formes. Un vertige noir dans lequel Corso se perdra lui-même, apprenant à ses dépens qu’un assassin peut en cacher un autre, et que la réalité d’un flic peut totalement basculer, surtout quand il s’agit de la jouissance par le Mal.
----------------------------------
Sur les épaules de Darwin, tome 2 : Je t'offrirai des spectacles admirables 
Jean-Claude Ameisen
EAN : 9781020900662
Éditeur : Les liens qui libèrent (06/11/2013)
4.18/5   59 notes
Résumé :
Je t'offrirais - à partir de toutes petites choses - des spectacles admirables, chante Virgile.
A partir de ces toutes petites choses - les abeilles - célébrées par Virgile, à partir de presque rien - un flocon de neige - offert par Kepler, Jean Claude Ameisen nous entraîne dans un vertigineux voyage.
Un voyage à la rencontre des abeilles et de leur extraordinaire alliance avec les fleurs dépend notre survie ; des fourmis qui tressent leur fil d'Ariane et découvrent la sortie des labyrinthes ; de l'étrange géométrie des alvéoles et des flocons de neige ; de la course des planètes, comètes et astéroïdes qui scande nos jours, nos années - et les millions d'années ; des minuscules horloges biologiques qui battent les heures au coeur de chaque vivant.
Un voyage à travers l'espace et le temps.
A la découverte de la mystérieuse splendeur de l'univers qui nous entoure et nous a donné naissance. 
*/