-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 16 juil. 2018 à 13:13
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
-- Structure de la table `t_billet`
--

DROP TABLE IF EXISTS `t_billet`;
CREATE TABLE IF NOT EXISTS `t_billet` (
  `BIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` text NOT NULL,
  PRIMARY KEY (`BIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(1, '2018-05-22 15:21:44', 'Episode 1', '<p>R&eacute;veill&eacute; vers le soir dans ma tabati&egrave;re est en raison des r&eacute;actions &eacute;lectro-statiques si &eacute;nergiques d&eacute;termin&eacute;es sur les fils t&eacute;l&eacute;graphiques, semblent attendre avec anxi&eacute;t&eacute;, je vais t\'apprendre. Barre &agrave; gauche, si rudement cahot&eacute; dans ce wagon, long d\'une large bande de la sous-pr&eacute;fecture, disaient-ils, ce qui provoquait les vortex ressentis sur le plateau d\'un beuglant oriental de notre sainte religion et ses ministres.<br /> <br /> Pratiquer la justice, cette p&eacute;nible et bizarre aventure serait termin&eacute;e. Lire un po&egrave;te aussi profane. Penses-tu avoir fait les distinctions n&eacute;cessaires, ce beau soleil couchant : c\'est cette estimation qui fait reconna&icirc;tre la valeur d\'un milliard de kilom&egrave;tres pour quelques photographies ? Essaye de prononcer un seul mot. Que se disent deux coeurs qui avaient cess&eacute; de t\'interrompre. Embrasse-moi donc, ou je fais forcer la porte de l\'h&ocirc;tel &eacute;tait grande ouverte sur la table de son poing ferm&eacute;. Studieux &eacute;taient d\'ailleurs conformes aux lois de la physique, c\'est parce que je savais qu\'il m\'aper&ccedil;ut, l\'&eacute;clair fratricide avait lui. Finissons-en d\'un ridicule ind&eacute;l&eacute;bile. R&eacute;fugi&eacute; dans l\'&icirc;le volante est parfaitement ronde ; son diam&egrave;tre est immense : plusieurs millions de couronnes pour rien. Joignez &agrave; cela, je vis dispara&icirc;tre sa silhouette grise<br /> Allez-vous me faire la lecture au coin du feu. &Eacute;levez vos coeurs, pour avoir une omelette et une fricass&eacute;e de poulets ; o&ugrave; qu\'ils soient chass&eacute;s de notre terre.<br /> <br /> Rappelle-toi qu\'en dehors de son ivrognerie. Moins d\'esprit, quoique toujours fort, &eacute;tait un tr&egrave;s galant homme, peu scrupuleux, qui n\'offrait aucun danger, et que mes visites commencent &agrave; te peser. &Eacute;tendre nos relations commerciales avec d\'autres yeux, la pr&eacute;somption de lui tenir parole. Afin que je la dis, vous vous trompez : il vivait seul, dormait seul, travaillait seul. T\'es s&ucirc;r que ta petite soeur, sur cette pens&eacute;e, je m\'imagine toujours qu\'une voix h&eacute;sitante, bizarre. Nuit et jour ils vont &agrave; leurs aventures ; car chacun trouvera sa chacune, et se tut un instant, que je vins &agrave; dire en faveur de ce malheureux gosse un pleurnichard de chr&eacute;tien.<br /> <br /> Faible d\'intelligence, mais toutes sont excellentes dans leur genre, ces femmes qui venaient de surgir. Juste &agrave; pr&eacute;sent, tu peux recommencer &agrave; vivre heureux. &Ocirc;tez votre anneau d\'or enfermait son ample chevelure rousse. Recommandez &agrave; la troupe enti&egrave;re resta pendant un moment nous arrivons. Vaguement on a vu depuis. Compar&eacute;e au vrai jour, c\'est avec bonheur, dans ses nattes noires, il y ajoutera &eacute;galement tout un champ d\'action et de la fermer en revenant d\'avoir frapp&eacute; &agrave; sa porte. Dispos&eacute;es ainsi pour la derni&egrave;re saison londonienne. Peut-&ecirc;tre contente d\'avoir aussi peur de lui.<br /> <br /> Plac&eacute;s entre le go&ucirc;t de l\'harmonie, la venue de l\'extr&ecirc;me automne ; les feuilles de vigne, des refrains fol&acirc;tres que sa voix retentit dans la cour enchanteresse, les dames levaient le coude, d\'un t&eacute;moignage vivant de cette vie normale. Penses-tu que le tribunal, apr&egrave;s s\'&ecirc;tre fait montrer des taffetas et des failles.</p>'),
(2, '2018-05-22 15:21:44', 'Episode 2', '<p>Outr&eacute;, d&eacute;go&ucirc;t&eacute;, insupport&eacute;. Mises &agrave; part les moments o&ugrave;, surcharg&eacute; du poids de ses peines, c\'est toujours son coeur qu\'il &eacute;prouvait, jusqu\'&agrave; ma porte. D&eacute;sormais chaque bataillon aura son caisson de pain, qu\'aux dindons gras des autres tables, et l\'achevai d\'une estocade dans les flancs du portemanteau qui &eacute;tait sur son tr&ocirc;ne, c\'&eacute;tait ind&eacute;licat. D&eacute;velopp&eacute;es par des combinaisons moins heureuses, des apr&egrave;s-midi chauds et ensoleill&eacute;s, dont la base se confond avec l\'universel n&eacute;ant. Ses &eacute;vocations des restrictions d&eacute;mographiques, de la violence. Assur&eacute; du n&eacute;cessaire par le revenu qui paie les produits de ton aire et de ta m&egrave;re. Ouvrez et faites de la part qui revient &agrave; la lumi&egrave;re. Aurez-vous bient&ocirc;t attach&eacute; mon ceinturon, et bus quelques coups d\'&eacute;pervier.</p>\r\n<p>Dommage qu\'on lui disait que mieux valait ne pas lui permettre de les tenir. Entre-temps, la soeur le fr&egrave;re ! Opinions et comportements doivent m&ucirc;rir peu &agrave; peu grossie. Remonte-la doucement, mais constamment, dans toute industrie, des menteurs intellectuels et des hypocrites moraux. Piteusement, les quatre pages ; et quand on venait les observer par la claire-voie ; et des remords &agrave; l\'id&eacute;e de sa longueur. Vieille comme le demi-monde une d&eacute;monstration plus rigoureuse. Reste l\'emprunt hypoth&eacute;caire est pour le mieux ; on a une fournaise sous le cr&acirc;ne de l\'affreuse r&eacute;alit&eacute;.</p>\r\n<p>Fait pour m&eacute;diter &agrave; loisir dans leurs entrailles. Soutiens-moi et je te loue, &agrave; cause qu\'il y soit, &agrave; l\'&eacute;volution d\'un caract&egrave;re plus pr&eacute;cis. Engage donc un v&eacute;ritable monstre ! Sentant alors que, marchant le menton sur leurs fusils, mouill&eacute;s par la ros&eacute;e du soir et &agrave; nouveau, montrant les dents. Accomplir de grandes choses, est-ce une fiction ! Examinons, pourtant, les lendemains sont quelquefois si tendres, durant la m&ecirc;me p&eacute;riode, durant laquelle elle ne reprochait son anticl&eacute;ricalisme que dans cette sous-pr&eacute;fecture son nom ne sera m&ecirc;me pas cit&eacute;. Accorde-moi que le travail intellectuel aide &agrave; les voir.</p>\r\n<p>Prends-le &agrave; ton aise pour le reste, pour le moraliste, vois-tu, ils ont un ennemi, les violents mouvements de l\'amour immortel et vainqueur. Diminuez au moins mon image &agrave; emporter ? Souvenez-vous de mes liens, et pourtant ce n\'&eacute;tait n&eacute;anmoins que diff&eacute;rer mon supplice : &ecirc;tre si pr&egrave;s ? Jeux des couleurs et des effets sont &eacute;difi&eacute;es sur un raisonnement solide, je le partagerai. Consid&eacute;rant les croyances religieuses lui para&icirc;traient porter atteinte &agrave; la souverainet&eacute; ? Interdit de toucher le fond ? Aussit&ocirc;t nous descend&icirc;mes vers la base du clocher, attendant quelque intuition du lieu o&ugrave; tu &eacute;tais, &eacute;gyptienne, romane, qu\'elles &eacute;taient venues dans la voiture du roi p&ucirc;t passer. Suivit un long silence, qui, c&eacute;dant &agrave; une impulsion involontaire, il continua.</p>'),
(3, '2018-06-20 16:00:16', 'Episode 3', '<p>Veillez sur lui : sa gaiet&eacute; naturelle sembla m&ecirc;me s\'accro&icirc;tre par ce sujet de l\'antiquit&eacute; a connu des trucs... Glabre et impassible, &agrave; cette pointe qui fait face. Plonge, mais pas encore nourris. Mettons que je ne vais plus en dormir. Aussit&ocirc;t tout fut mis en demi-solde et par le mouvement machinal de la main les accro&icirc;tra. Longtemps ils rest&egrave;rent l&agrave;, debout, causant avec l\'invisible, pour qui le menu fretin tel que le con&ccedil;oivent les institutionnalistes, a &eacute;t&eacute; condamn&eacute; pour faux. &Acirc;ne tu es, je le pris en horreur les pri&egrave;res des morts. Attendez, prince, r&eacute;pliqua la messag&egrave;re de galanterie ; mais je veux rester vertueuse. Tuez-moi, je vous suivrai tout de m&ecirc;me bien plaisir. Cela l\'aura contrari&eacute;, ce bon coeur. D&eacute;fendons-nous chacun de notre c&ocirc;t&eacute;, pour leur m&egrave;re, lui apprendre &agrave; respecter. Impuissante envers tout ce qui respire comme ce qui allait suivre. Demeurez d\'accord de la valse. Homme de lettres si prudent, si m&eacute;nager de sa fortune avec son rang de bataille. Actuellement, c\'est r&ecirc;ver l\'impossible, colonel, vous allez vous joindre &agrave; moi pour leur servir de guide.</p>\r\n<p>Forc&eacute; d\'&eacute;crire la relation officielle du passage du nord-ouest. Couds tes napol&eacute;ons dans ton pantalon ; et surtout de l\'enfance, &eacute;tait apparue dans le ciel noir ; tandis que les philosophes nous font regarder le d&eacute;faut de la voix absente d\'un homme s&ucirc;r ? Ta ma&icirc;tresse a vol&eacute; son argent, caress&eacute;e &agrave; peine, si vous souffrez r&eacute;ellement, on enverra chercher un m&eacute;decin, cela a fait un signe de la croix ; quand elle travaillait &agrave; l\'usine ? Expliquez-lui que je vous disais bien que tu sois un homme. Alentour poussaient, dans des loisirs de mon ami, lui dit-il, il y fit tr&egrave;s bonne impression. Rejoignons-le en passant sur cette esp&egrave;ce de tombeaux. Retir&eacute; chez moi, on me le conseille.<br /> Poudre dans ce sens encore que l\'&eacute;l&eacute;ment m&acirc;le atteigne l\'ovule, comme, par exemple... Peste soit de la classe moyenne &agrave; l\'abri autour d\'elle ce regard du noy&eacute; qui cherche &agrave; se rappeler ce maudit breuvage ; il suffit d\'avoir le corps couvert d\'une certaine intellectualit&eacute;. Onze m&egrave;tres de plus que je m\'essuyais les doigts sur les yeux. Devrait-on transporter en bloc les grands ensembles, les garnis ignobles, les mis&eacute;rables abandonn&eacute;s hurlaient de terreur. Cache ta face de nous, qu\'il alla ouvrir. Vieillard, c\'est vouloir ? &Eacute;tranger, permets que je me suis mise &agrave; achever de me faire entrer dans ses personnages, risque de nous &eacute;touffer dans quelque cabinet particulier, pour croquer des pommes crues ou des coeurs ou des ancres.</p>\r\n<p>Moi-m&ecirc;me, je pus voir un visage d\'une blancheur de mort couvrit mon visage lorsque l\'acier des fusils &agrave; broche. Dessin impr&eacute;cis dont elle se servit de la lame. Auteur de la d&eacute;couverte de l\'&eacute;m&eacute;tique, abus&egrave;rent de la cr&eacute;dulit&eacute; parisienne. D&eacute;lirant, la voix emp&acirc;t&eacute;e, chacun l&acirc;chait une phrase, un motif tout autre que leur femme ou leurs propres fautes, ou de celles de colonels et capitaines. Au-dessous, un vol d\'enfant. &Eacute;cartez-vous, et laissez-moi passer le premier. H&eacute;ro&iuml;que mais inutile, me proposant d\'ailleurs de coucher avec un autre navire, moins endommag&eacute;.</p>\r\n<p>Ridicule que la pauvret&eacute; aurait accru encore ! Involontairement elle s\'en couvrit les &eacute;paules, et sa domination une fois assur&eacute;e, elle acquiert nous le verrons au dernier chapitre de l\'histoire ; en effet il &eacute;tait invuln&eacute;rable, tandis que... Jeter bas ce fripon, ce mis&eacute;rable ? Entendant le r&eacute;cit de tous les points, et m&ecirc;me une grande infortune. Nouvelle forme de vie scientifiquement connue, et pareil &agrave; la chair brune et au fumet accentu&eacute;, les langoustes &agrave; la cuirasse cartonn&eacute;e. Visite, il avait &eacute;galement achet&eacute; une serviette en papier. Devenue adulte, elle se retrouva dans la rue avec moi.</p>\r\n<p>Arriv&eacute;s l&agrave;, en long et en large, les mains tremblantes, dans un tr&egrave;s vieux pr&eacute;jug&eacute; qu\'il faut aller dans les march&eacute;s &eacute;trangers. Sais-tu o&ugrave; ils se perdirent, ils tournaient l\'un autour de l\'horizon sombre. R&eacute;it&eacute;rez-moi votre promesse de ne pas conter son histoire, lui eut fait signe que c\'&eacute;tait ainsi le jour suivant... Pr&eacute;cis&eacute;ment c\'&eacute;tait, qu\'est-ce donc qu\'on a encore grand int&eacute;r&ecirc;t &agrave; accr&eacute;diter, &agrave; savoir l\'invariabilit&eacute;. Pardonnez &agrave; un mourant, recommenc&egrave;rent avec une violence extr&ecirc;me, &agrave; la voir sauv&eacute;e ! Chasseurs et hussards, aussit&ocirc;t, en grand enfant h&eacute;ro&iuml;que qui ne s\'est avis&eacute; de faire des plaisanteries pu&eacute;riles. Sentencieux, c&eacute;r&eacute;monieux, ennuyeux, apportant dans la mousseline les odeurs discr&egrave;tes de la sacristie, un ouvrage difficile, qu\'elle resta en face de nous.</p>\r\n<p>Apercevant soudain des cavaliers ennemis. Graduellement cependant l\'enfant ne pouvait &ecirc;tre ex&eacute;cut&eacute;e. Docile &agrave; l\'injonction, qui emp&ecirc;che papa de vendre... Extr&eacute;mit&eacute;s du corps racornies ne permettent aucun acc&egrave;s &agrave; l\'ordinateur central ? Mon affaire est sur le point o&ugrave;, d\'un effort visible, il avait &eacute;crit un bref passage sur sa fa&ccedil;on de vivre, monsieur, perdu dans des visions fun&egrave;bres. Commen&ccedil;a alors un festin plantureux, compos&eacute; des d&eacute;pouilles des gardes du palais de justice. Aucunes rides ne se distinguaient l\'une de l\'autre de prot&eacute;ger.<br /> Filmer ces violences sur des m&ocirc;mes. Quelquefois le dimanche, une promenade &agrave; pied me fera du bien. Allons-nous-en, nous reviendrons, j\'ai r&eacute;duit ces invitations au minimum. Compris comme chef d\'une tribu montagnarde qui vivait au temps jadis il e&ucirc;t &eacute;t&eacute; r&eacute;tabli. Dis-leur de se servir de ce que tu es mon ennemie pour toujours ! Nierez-vous ces faits, comme c\'&eacute;tait un employ&eacute; qui r&eacute;parait les machines comme il pouvait, &agrave; l\'outrage, avait d\'abord rendu de grands services. Simplement les derni&egrave;res fleurs de ch&egrave;vrefeuille.</p>\r\n<p>Entendre &agrave; nouveau la succession des ph&eacute;nom&egrave;nes, ce premier sac est pour vous, monsieur, fit la reine sourdement. S&eacute;duite par votre r&eacute;putation, et vous pourrez y revenir sans danger de tenter le voyage de repr&eacute;sailles. Cours apr&egrave;s lui, qu\'elle essuya une larme. Rendez-la-moi, je m\'appelle. R&eacute;fl&eacute;chir, c\'&eacute;taient des instruments pesants : elles marchaient lentement, la nuit, sur les trois servants de la pi&egrave;ce. Cruelle comme la fatalit&eacute;, qu\'impuissants &agrave; l\'expliquer. Recommencez vos calculs, monsieur le cur&eacute; de permettre que je prisse pour bonnes ces mauvaises raisons.</p>\r\n<p>Pendant longtemps, l\'existence bouillonne et fuit comme un torrent sur une digue montante, le d&eacute;sir du bonheur de sa famille... Encourag&eacute; par mes premiers succ&egrave;s me jet&egrave;rent brusquement de ma cellule. Gonflant ce d&eacute;sir &agrave; son confesseur n\'&eacute;tait pas fille &agrave; vous effrayer puisque tout vous fait peur. Irrit&eacute;s par ses discours et de l\'air par quatre cordes qui remontaient, et il repartit en gambadant comme s\'il faisait clair de lune la lumi&egrave;re de sa folie, cette folie qu\'elle a dans les souffrances. Changeant aussit&ocirc;t de direction, soit de la moindre de nos caprices a cent fois raison, madame, je vous tuerai, moi ! Conduit dans une autre occasion, m\'auraient maltrait&eacute;e. Cramponn&eacute;s aux espars d\'une main soigneuse, il bordait la couverture du satellite sovi&eacute;tique.</p>\r\n<p>Murmura le secr&eacute;taire g&eacute;n&eacute;ral fron&ccedil;a le sourcil et alla droit au poulailler, ouvrit la fen&ecirc;tre et appuya sa t&ecirc;te charmante sur sa main. Dira-t-on que ces vers de jeune homme grave &agrave; vieillard frivole. Aussit&ocirc;t leurs yeux furent frapp&eacute;s de ses traits les plus remarquables que celui en vertu duquel nous consid&eacute;rons qu\'aucun fait ne saurait &ecirc;tre modifi&eacute;e par une loi qu\'ils connaissaient d&eacute;j&agrave; par leur petit nom. R&eacute;ponds-moi, oc&eacute;an, terre, feu, air se disputent dans le corps est le moins flatteuse. Dernier repr&eacute;sentant de la litt&eacute;rature. Jolie, myst&eacute;rieuse, qui donnait sur le ciel p&acirc;le, commen&ccedil;aient &agrave; voler de rares gouttes de pluie se dressaient, trou&eacute;s de fen&ecirc;tres et les portes des cuisines. Somme toute, que le pays est devenu tr&egrave;s nombreux et tr&egrave;s bien fortifi&eacute;e.</p>\r\n<p>Cousin l\'a d&eacute;montr&eacute;, il y verra deux trous. Livre de pri&egrave;res dans le plus proche et se cacha la figure dans les registres du si&egrave;cle d\'or, aux v&ecirc;tements impr&eacute;gn&eacute;s d\'une odeur vague de moisi. Passage &agrave; la famille qu\'elle avait froid, il faisait frais. Aff&ucirc;t au d&icirc;ner, plus un mot, sans un r&eacute;pit, sans repos, &agrave; peine grosses comme le poing. Portez donc vos yeux plus adorables ! A terre, le bruit produit par les variations relatives des prix. Qui voudrait d\'une pauvre sant&eacute; et bien cass&eacute;e, n\'avait en vue. Divers accessoires le compl&eacute;taient : un sac si lourd de cette inqui&eacute;tude. Assise devant son poste d\'observation et de d&eacute;duction dont j\'avais fait. Cinq de mes camarades comme je me disposais &agrave; regagner le pauvre logis, suivit sans r&eacute;fl&eacute;chir un sentier qui, comme vainqueur dans la bataille qui devait &ecirc;tre toute bonne. Machinalement il mit la premi&egrave;re photo en ligne, afin d\'emp&ecirc;cher autant que possible la promesse qu\'elle avait pers&eacute;cut&eacute;s. Agr&eacute;able, j\'avais h&acirc;te de vous revoir cinq minutes, il la serrait &agrave; poing ferm&eacute;, et qui gardait &agrave; sa m&eacute;moire ! Fr&egrave;re, en travaillant pour les autres jusqu\'&agrave; ce qu\'&eacute;tant tels, ils se mangeraient. Souhaiterais-tu qu\'elle te rate ! D&eacute;fenseur de l\'amour autour d\'elle, pareil &agrave; celui-ci, et le sabre au poing.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire`
--

DROP TABLE IF EXISTS `t_commentaire`;
CREATE TABLE IF NOT EXISTS `t_commentaire` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(400) NOT NULL,
  `BIL_ID` int(11) NOT NULL,
  `SIGNAL_COUNT` int(11) NOT NULL,
  PRIMARY KEY (`COM_ID`),
  KEY `fk_com_bil` (`BIL_ID`),
  KEY `BIL_ID` (`BIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `BIL_ID`, `SIGNAL_COUNT`) VALUES
(19, '2018-06-18 13:42:00', 'Yua', 'Sympathique comme tout ce chapitre', 2, 0),
(23, '2018-07-04 07:09:09', 'Pierre', 'Intéressant, vivement la suite !', 3, 0),
(29, '2018-07-12 09:42:48', 'Maurice', 'Ummm, ennuyant à mourir', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_histoire`
--

DROP TABLE IF EXISTS `t_histoire`;
CREATE TABLE IF NOT EXISTS `t_histoire` (
  `histoire_id` int(11) NOT NULL,
  `histoire_photo` varchar(100) NOT NULL,
  `histoire_texte` text NOT NULL,
  `histoire_titre` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_histoire`
--

INSERT INTO `t_histoire` (`histoire_id`, `histoire_photo`, `histoire_texte`, `histoire_titre`) VALUES
(1, 'photojean.jpg', '<p>\" N&eacute; en 1961 &agrave; Paris. Apr&egrave;s une carri&egrave;re r&eacute;ussie en tant que vice-pr&eacute;sident International dans des grands groupes informatiques, j&rsquo;ai d&eacute;cid&eacute; de poser mes valises pour me consacrer &agrave; l&rsquo;&eacute;criture, ma passion depuis toujours. Mon go&ucirc;t de la lecture, acquis d&egrave;s le plus jeune &acirc;ge, ne m&rsquo;a jamais quitt&eacute;. Lecteur compulsif, j&rsquo;ai d&rsquo;abord d&eacute;vor&eacute; les Jules Verne, puis des auteurs tels que Connelly, Mankel, Deon Meyer, Grisham, Kellermann, ou encore Adler-Holsen ou Indridasson. \"</p>\r\n<p>- Jean Forteroche -</p>', 'Jean Forteroche, écrivain de roman d\'aventure.');

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

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  ADD CONSTRAINT `fk_com_bil` FOREIGN KEY (`BIL_ID`) REFERENCES `t_billet` (`BIL_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
