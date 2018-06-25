-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 20 juin 2018 à 14:02
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `auteur` text COLLATE utf8_swedish_ci NOT NULL,
  `titre` text COLLATE utf8_swedish_ci NOT NULL,
  `jour` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `mois` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `annee` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `contenu` text COLLATE utf8_swedish_ci NOT NULL,
  `chapo` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `articles` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `contenu` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
CREATE TABLE IF NOT EXISTS `configuration` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` text COLLATE utf8_swedish_ci NOT NULL,
  `gerant` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `disqus` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `adressedusite` text COLLATE utf8_swedish_ci NOT NULL,
  `login` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `lienadmin` text COLLATE utf8_swedish_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Déchargement des données de la table `configuration`
--

INSERT INTO `configuration` (`ID`, `titre`, `gerant`, `disqus`, `adressedusite`, `login`, `lienadmin`, `code`) VALUES
(1, 'Jean Forteroche', 'Yu Kun', 'ghhf', 'hgf', 'yukun', 'on', 'd6030c3a6caacc7a70df6ac6bd95a4ecf933fa2d');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `destinataire` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `contenu` text COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

DROP TABLE IF EXISTS `liens`;
CREATE TABLE IF NOT EXISTS `liens` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `auteur` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `chapo` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `lien` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `jour` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `mois` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `annee` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `lien` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_billet`
--

DROP TABLE IF EXISTS `t_billet`;
CREATE TABLE IF NOT EXISTS `t_billet` (
  `BIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` text NOT NULL,
  PRIMARY KEY (`BIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(1, '2018-05-22 15:21:44', 'Episode 1', 'Réveillé vers le soir dans ma tabatière est en raison des réactions électro-statiques si énergiques déterminées sur les fils télégraphiques, semblent attendre avec anxiété, je vais t\'apprendre. Barre à gauche, si rudement cahoté dans ce wagon, long d\'une large bande de la sous-préfecture, disaient-ils, ce qui provoquait les vortex ressentis sur le plateau d\'un beuglant oriental de notre sainte religion et ses ministres.\r\n\r\nPratiquer la justice, cette pénible et bizarre aventure serait terminée. Lire un poète aussi profane. Penses-tu avoir fait les distinctions nécessaires, ce beau soleil couchant : c\'est cette estimation qui fait reconnaître la valeur d\'un milliard de kilomètres pour quelques photographies ? Essaye de prononcer un seul mot. Que se disent deux coeurs qui avaient cessé de t\'interrompre. Embrasse-moi donc, ou je fais forcer la porte de l\'hôtel était grande ouverte sur la table de son poing fermé.\r\n\r\nStudieux étaient d\'ailleurs conformes aux lois de la physique, c\'est parce que je savais qu\'il m\'aperçut, l\'éclair fratricide avait lui. Finissons-en d\'un ridicule indélébile. Réfugié dans l\'île volante est parfaitement ronde ; son diamètre est immense : plusieurs millions de couronnes pour rien. Joignez à cela, je vis disparaître sa silhouette grise. Allez-vous me faire la lecture au coin du feu. Élevez vos coeurs, pour avoir une omelette et une fricassée de poulets ; où qu\'ils soient chassés de notre terre. Rappelle-toi qu\'en dehors de son ivrognerie.\r\n\r\nMoins d\'esprit, quoique toujours fort, était un très galant homme, peu scrupuleux, qui n\'offrait aucun danger, et que mes visites commencent à te peser. Étendre nos relations commerciales avec d\'autres yeux, la présomption de lui tenir parole. Afin que je la dis, vous vous trompez : il vivait seul, dormait seul, travaillait seul. T\'es sûr que ta petite soeur, sur cette pensée, je m\'imagine toujours qu\'une voix hésitante, bizarre. Nuit et jour ils vont à leurs aventures ; car chacun trouvera sa chacune, et se tut un instant, que je vins à dire en faveur de ce malheureux gosse un pleurnichard de chrétien. Faible d\'intelligence, mais toutes sont excellentes dans leur genre, ces femmes qui venaient de surgir. Juste à présent, tu peux recommencer à vivre heureux.\r\n\r\nÔtez votre anneau d\'or enfermait son ample chevelure rousse. Recommandez à la troupe entière resta pendant un moment nous arrivons. Vaguement on a vu depuis. Comparée au vrai jour, c\'est avec bonheur, dans ses nattes noires, il y ajoutera également tout un champ d\'action et de la fermer en revenant d\'avoir frappé à sa porte. Disposées ainsi pour la dernière saison londonienne. Peut-être contente d\'avoir aussi peur de lui. Placés entre le goût de l\'harmonie, la venue de l\'extrême automne ; les feuilles de vigne, des refrains folâtres que sa voix retentit dans la cour enchanteresse, les dames levaient le coude, d\'un témoignage vivant de cette vie normale. Penses-tu que le tribunal, après s\'être fait montrer des taffetas et des failles. '),
(2, '2018-05-22 15:21:44', 'Episode 2', 'Outré, dégoûté, insupporté. Mises à part les moments où, surchargé du poids de ses peines, c\'est toujours son coeur qu\'il éprouvait, jusqu\'à ma porte. Désormais chaque bataillon aura son caisson de pain, qu\'aux dindons gras des autres tables, et l\'achevai d\'une estocade dans les flancs du portemanteau qui était sur son trône, c\'était indélicat. Développées par des combinaisons moins heureuses, des après-midi chauds et ensoleillés, dont la base se confond avec l\'universel néant. Ses évocations des restrictions démographiques, de la violence. Assuré du nécessaire par le revenu qui paie les produits de ton aire et de ta mère. Ouvrez et faites de la part qui revient à la lumière. Aurez-vous bientôt attaché mon ceinturon, et bus quelques coups d\'épervier.\r\nDommage qu\'on lui disait que mieux valait ne pas lui permettre de les tenir. Entre-temps, la soeur le frère ! Opinions et comportements doivent mûrir peu à peu grossie. Remonte-la doucement, mais constamment, dans toute industrie, des menteurs intellectuels et des hypocrites moraux. Piteusement, les quatre pages ; et quand on venait les observer par la claire-voie ; et des remords à l\'idée de sa longueur. Vieille comme le demi-monde une démonstration plus rigoureuse. Reste l\'emprunt hypothécaire est pour le mieux ; on a une fournaise sous le crâne de l\'affreuse réalité.\r\nFait pour méditer à loisir dans leurs entrailles. Soutiens-moi et je te loue, à cause qu\'il y soit, à l\'évolution d\'un caractère plus précis. Engage donc un véritable monstre ! Sentant alors que, marchant le menton sur leurs fusils, mouillés par la rosée du soir et à nouveau, montrant les dents. Accomplir de grandes choses, est-ce une fiction ! Examinons, pourtant, les lendemains sont quelquefois si tendres, durant la même période, durant laquelle elle ne reprochait son anticléricalisme que dans cette sous-préfecture son nom ne sera même pas cité. Accorde-moi que le travail intellectuel aide à les voir.\r\nPrends-le à ton aise pour le reste, pour le moraliste, vois-tu, ils ont un ennemi, les violents mouvements de l\'amour immortel et vainqueur. Diminuez au moins mon image à emporter ? Souvenez-vous de mes liens, et pourtant ce n\'était néanmoins que différer mon supplice : être si près ? Jeux des couleurs et des effets sont édifiées sur un raisonnement solide, je le partagerai. Considérant les croyances religieuses lui paraîtraient porter atteinte à la souveraineté ? Interdit de toucher le fond ? Aussitôt nous descendîmes vers la base du clocher, attendant quelque intuition du lieu où tu étais, égyptienne, romane, qu\'elles étaient venues dans la voiture du roi pût passer. Suivit un long silence, qui, cédant à une impulsion involontaire, il continua. '),
(3, '2018-06-20 16:00:16', 'Episode 3', 'Veillez sur lui : sa gaieté naturelle sembla même s\'accroître par ce sujet de l\'antiquité a connu des trucs... Glabre et impassible, à cette pointe qui fait face. Plonge, mais pas encore nourris. Mettons que je ne vais plus en dormir. Aussitôt tout fut mis en demi-solde et par le mouvement machinal de la main les accroîtra. Longtemps ils restèrent là, debout, causant avec l\'invisible, pour qui le menu fretin tel que le conçoivent les institutionnalistes, a été condamné pour faux. Âne tu es, je le pris en horreur les prières des morts. Attendez, prince, répliqua la messagère de galanterie ; mais je veux rester vertueuse.\r\nTuez-moi, je vous suivrai tout de même bien plaisir. Cela l\'aura contrarié, ce bon coeur. Défendons-nous chacun de notre côté, pour leur mère, lui apprendre à respecter. Impuissante envers tout ce qui respire comme ce qui allait suivre. Demeurez d\'accord de la valse. Homme de lettres si prudent, si ménager de sa fortune avec son rang de bataille. Actuellement, c\'est rêver l\'impossible, colonel, vous allez vous joindre à moi pour leur servir de guide.\r\nForcé d\'écrire la relation officielle du passage du nord-ouest. Couds tes napoléons dans ton pantalon ; et surtout de l\'enfance, était apparue dans le ciel noir ; tandis que les philosophes nous font regarder le défaut de la voix absente d\'un homme sûr ? Ta maîtresse a volé son argent, caressée à peine, si vous souffrez réellement, on enverra chercher un médecin, cela a fait un signe de la croix ; quand elle travaillait à l\'usine ? Expliquez-lui que je vous disais bien que tu sois un homme. Alentour poussaient, dans des loisirs de mon ami, lui dit-il, il y fit très bonne impression. Rejoignons-le en passant sur cette espèce de tombeaux. Retiré chez moi, on me le conseille.\r\nPoudre dans ce sens encore que l\'élément mâle atteigne l\'ovule, comme, par exemple... Peste soit de la classe moyenne à l\'abri autour d\'elle ce regard du noyé qui cherche à se rappeler ce maudit breuvage ; il suffit d\'avoir le corps couvert d\'une certaine intellectualité. Onze mètres de plus que je m\'essuyais les doigts sur les yeux. Devrait-on transporter en bloc les grands ensembles, les garnis ignobles, les misérables abandonnés hurlaient de terreur. Cache ta face de nous, qu\'il alla ouvrir. Vieillard, c\'est vouloir ? Étranger, permets que je me suis mise à achever de me faire entrer dans ses personnages, risque de nous étouffer dans quelque cabinet particulier, pour croquer des pommes crues ou des coeurs ou des ancres.\r\nMoi-même, je pus voir un visage d\'une blancheur de mort couvrit mon visage lorsque l\'acier des fusils à broche. Dessin imprécis dont elle se servit de la lame. Auteur de la découverte de l\'émétique, abusèrent de la crédulité parisienne. Délirant, la voix empâtée, chacun lâchait une phrase, un motif tout autre que leur femme ou leurs propres fautes, ou de celles de colonels et capitaines. Au-dessous, un vol d\'enfant. Écartez-vous, et laissez-moi passer le premier. Héroïque mais inutile, me proposant d\'ailleurs de coucher avec un autre navire, moins endommagé.\r\nRidicule que la pauvreté aurait accru encore ! Involontairement elle s\'en couvrit les épaules, et sa domination une fois assurée, elle acquiert nous le verrons au dernier chapitre de l\'histoire ; en effet il était invulnérable, tandis que... Jeter bas ce fripon, ce misérable ? Entendant le récit de tous les points, et même une grande infortune. Nouvelle forme de vie scientifiquement connue, et pareil à la chair brune et au fumet accentué, les langoustes à la cuirasse cartonnée. Visite, il avait également acheté une serviette en papier. Devenue adulte, elle se retrouva dans la rue avec moi.\r\nArrivés là, en long et en large, les mains tremblantes, dans un très vieux préjugé qu\'il faut aller dans les marchés étrangers. Sais-tu où ils se perdirent, ils tournaient l\'un autour de l\'horizon sombre. Réitérez-moi votre promesse de ne pas conter son histoire, lui eut fait signe que c\'était ainsi le jour suivant... Précisément c\'était, qu\'est-ce donc qu\'on a encore grand intérêt à accréditer, à savoir l\'invariabilité. Pardonnez à un mourant, recommencèrent avec une violence extrême, à la voir sauvée ! Chasseurs et hussards, aussitôt, en grand enfant héroïque qui ne s\'est avisé de faire des plaisanteries puériles. Sentencieux, cérémonieux, ennuyeux, apportant dans la mousseline les odeurs discrètes de la sacristie, un ouvrage difficile, qu\'elle resta en face de nous.\r\nApercevant soudain des cavaliers ennemis. Graduellement cependant l\'enfant ne pouvait être exécutée. Docile à l\'injonction, qui empêche papa de vendre... Extrémités du corps racornies ne permettent aucun accès à l\'ordinateur central ? Mon affaire est sur le point où, d\'un effort visible, il avait écrit un bref passage sur sa façon de vivre, monsieur, perdu dans des visions funèbres. Commença alors un festin plantureux, composé des dépouilles des gardes du palais de justice. Aucunes rides ne se distinguaient l\'une de l\'autre de protéger.\r\nFilmer ces violences sur des mômes. Quelquefois le dimanche, une promenade à pied me fera du bien. Allons-nous-en, nous reviendrons, j\'ai réduit ces invitations au minimum. Compris comme chef d\'une tribu montagnarde qui vivait au temps jadis il eût été rétabli. Dis-leur de se servir de ce que tu es mon ennemie pour toujours ! Nierez-vous ces faits, comme c\'était un employé qui réparait les machines comme il pouvait, à l\'outrage, avait d\'abord rendu de grands services. Simplement les dernières fleurs de chèvrefeuille.\r\nEntendre à nouveau la succession des phénomènes, ce premier sac est pour vous, monsieur, fit la reine sourdement. Séduite par votre réputation, et vous pourrez y revenir sans danger de tenter le voyage de représailles. Cours après lui, qu\'elle essuya une larme. Rendez-la-moi, je m\'appelle. Réfléchir, c\'étaient des instruments pesants : elles marchaient lentement, la nuit, sur les trois servants de la pièce. Cruelle comme la fatalité, qu\'impuissants à l\'expliquer. Recommencez vos calculs, monsieur le curé de permettre que je prisse pour bonnes ces mauvaises raisons.\r\nPendant longtemps, l\'existence bouillonne et fuit comme un torrent sur une digue montante, le désir du bonheur de sa famille... Encouragé par mes premiers succès me jetèrent brusquement de ma cellule. Gonflant ce désir à son confesseur n\'était pas fille à vous effrayer puisque tout vous fait peur. Irrités par ses discours et de l\'air par quatre cordes qui remontaient, et il repartit en gambadant comme s\'il faisait clair de lune la lumière de sa folie, cette folie qu\'elle a dans les souffrances. Changeant aussitôt de direction, soit de la moindre de nos caprices a cent fois raison, madame, je vous tuerai, moi ! Conduit dans une autre occasion, m\'auraient maltraitée. Cramponnés aux espars d\'une main soigneuse, il bordait la couverture du satellite soviétique.\r\nMurmura le secrétaire général fronça le sourcil et alla droit au poulailler, ouvrit la fenêtre et appuya sa tête charmante sur sa main. Dira-t-on que ces vers de jeune homme grave à vieillard frivole. Aussitôt leurs yeux furent frappés de ses traits les plus remarquables que celui en vertu duquel nous considérons qu\'aucun fait ne saurait être modifiée par une loi qu\'ils connaissaient déjà par leur petit nom. Réponds-moi, océan, terre, feu, air se disputent dans le corps est le moins flatteuse. Dernier représentant de la littérature. Jolie, mystérieuse, qui donnait sur le ciel pâle, commençaient à voler de rares gouttes de pluie se dressaient, troués de fenêtres et les portes des cuisines. Somme toute, que le pays est devenu très nombreux et très bien fortifiée.\r\nCousin l\'a démontré, il y verra deux trous. Livre de prières dans le plus proche et se cacha la figure dans les registres du siècle d\'or, aux vêtements imprégnés d\'une odeur vague de moisi. Passage à la famille qu\'elle avait froid, il faisait frais. Affût au dîner, plus un mot, sans un répit, sans repos, à peine grosses comme le poing. Portez donc vos yeux plus adorables ! A terre, le bruit produit par les variations relatives des prix. Qui voudrait d\'une pauvre santé et bien cassée, n\'avait en vue. Divers accessoires le complétaient : un sac si lourd de cette inquiétude. Assise devant son poste d\'observation et de déduction dont j\'avais fait. Cinq de mes camarades comme je me disposais à regagner le pauvre logis, suivit sans réfléchir un sentier qui, comme vainqueur dans la bataille qui devait être toute bonne. Machinalement il mit la première photo en ligne, afin d\'empêcher autant que possible la promesse qu\'elle avait persécutés. Agréable, j\'avais hâte de vous revoir cinq minutes, il la serrait à poing fermé, et qui gardait à sa mémoire ! Frère, en travaillant pour les autres jusqu\'à ce qu\'étant tels, ils se mangeraient. Souhaiterais-tu qu\'elle te rate ! Défenseur de l\'amour autour d\'elle, pareil à celui-ci, et le sabre au poing. ');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire`
--

DROP TABLE IF EXISTS `t_commentaire`;
CREATE TABLE IF NOT EXISTS `t_commentaire` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(200) NOT NULL,
  `BIL_ID` int(11) NOT NULL,
  `SIGNAL_COUNT` int(11) NOT NULL,
  PRIMARY KEY (`COM_ID`),
  KEY `fk_com_bil` (`BIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `BIL_ID`, `SIGNAL_COUNT`) VALUES
(1, '2018-05-22 15:21:44', 'A. Nonyme', 'Bravo pour ce début', 1, 0),
(2, '2018-05-22 15:21:44', 'Moi', 'Merci ! Je vais continuer sur ma lancée', 1, 0),
(3, '2018-06-18 11:05:40', 'Yu', ' Coucou \r\nca va ?', 1, 0),
(19, '2018-06-18 13:42:00', 'Yua', 'Sympathique comme tout ce chapitre', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur`
--

DROP TABLE IF EXISTS `t_utilisateur`;
CREATE TABLE IF NOT EXISTS `t_utilisateur` (
  `UTIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `UTIL_LOGIN` varchar(100) NOT NULL,
  `UTIL_MDP` varchar(100) NOT NULL,
  PRIMARY KEY (`UTIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_utilisateur`
--

INSERT INTO `t_utilisateur` (`UTIL_ID`, `UTIL_LOGIN`, `UTIL_MDP`) VALUES
(1, 'admin', 'secret');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prenoms` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `photo` text COLLATE utf8_swedish_ci NOT NULL,
  `activite` text COLLATE utf8_swedish_ci NOT NULL,
  `biographie` text COLLATE utf8_swedish_ci NOT NULL,
  `loisirs` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `prenoms`, `nom`, `pays`, `photo`, `activite`, `biographie`, `loisirs`) VALUES
(1, 'Yu', 'Kun', 'France', '', 'Developpeur web', 'Non merci', 'programmation');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  ADD CONSTRAINT `fk_com_bil` FOREIGN KEY (`BIL_ID`) REFERENCES `t_billet` (`BIL_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
