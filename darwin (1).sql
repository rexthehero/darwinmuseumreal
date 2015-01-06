-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 04 jan 2015 om 19:36
-- Serverversie: 5.6.12-log
-- PHP-versie: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `a2983417_Darwin`
--
CREATE DATABASE IF NOT EXISTS `a2983417_Darwin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `a2983417_Darwin`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artefacten`
--

CREATE TABLE IF NOT EXISTS `artefacten` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `naam` varchar(1000) NOT NULL,
  `omschrijfing` text NOT NULL,
  `afbeelding` varchar(100) NOT NULL,
  `stemmen` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Gegevens worden uitgevoerd voor tabel `artefacten`
--

INSERT INTO `artefacten` (`id`, `naam`, `omschrijfing`, `afbeelding`, `stemmen`) VALUES
(1, 'hond', 'De hond (Canis lupus familiaris) is een gedomesticeerde ondersoort van de wolf. De hond is een roofdier uit de familie van de hondachtigen (Canidae). De hond komt op alle continenten voor, meestal in gezelschap van de mens. Al sinds duizenden jaren wordt de hond gebruikt voor bewakingstaken, bij de jacht, als herdershond en als trekdier. Nog steeds heeft hij werk als politiehond of hulphond, maar de meeste honden worden tegenwoordig gehouden als gezelschapsdier.', 'hond.jpg', 0),
(2, 'baksteen', 'baksteen bestaat uit kei en veen en iedereeen is heel erg blij ben benieuwd of odijk ook echt dit gaat lezen', 'baksteen.jpg', 7),
(3, 'leeuw', 'De leeuw (Panthera leo) is een groot roofdier uit de familie der katachtigen (Felidae). Van alle katachtigen is enkel de tijger groter. De grootte en de manen van het mannetje geven het dier een imposant uiterlijk, waardoor de leeuw in grote delen van de wereld bekendstaat als de koning der dieren. In Europa heeft hij deze rol overigens pas in de loop van de Middeleeuwen overgenomen van de bruine beer.', 'leeuw.jpg', 85),
(4, 'Homo erectus', 'Homo erectus (Latijn voor ''rechtopgaande mens'') is een uitgestorven mensensoort die van 1,9 miljoen tot 400.000 jaar geleden leefde. Deze soort leefde hoofdzakelijk na Homo habilis, maar het is niet uitgesloten dat beide soorten een zekere periode tijdgenoten van elkaar waren en een onbekende gemeenschappelijke voorouder hebben.', 'homoerectus.jpg', 0),
(5, 'Kiwi', 'De kiwi''s of snipstruisen (Apterygiformes) zijn loopvogels die van nature alleen voorkomen in Nieuw-Zeeland. De vogel kreeg zijn naam van de Maori''s. De naam is afgeleid van de kreet van het mannetje tijdens het paarseizoen en is dus een onomatopee. Volgens een Maori-mythe creëerde de god Tane de kiwi uit een kalebas.\r\nDe inwoners van Nieuw-Zeeland worden ook wel kiwi''s genoemd en hetzelfde geldt voor veel andere aan dit land gerelateerde zaken zoals de Nieuw-Zeelandse dollar.\r\nDe kiwi''s zijn bedreigd en worden sinds het einde van de 19e eeuw niet meer gegeten.\r\n', 'kiwi.jpg', 10),
(6, 'kea', 'De kea (Nestor notabilis) is een vogelsoort uit de kleine familie (Strigopidae) van inheemse papegaaiachtigen die met name leeft in de buurt van Mount Cook in Nieuw-Zeeland. Zijn naaste verwant is de kaka (Nestor meridionalis)', 'kea.jpg', 1),
(7, 'haai', 'De haaien (Selachimorpha, ook wel Euselachii) behoren tot de kraakbeenvissen De oudste bekende fossielen van haaien dateren van meer dan 425 tot 455 miljoen jaar geleden. Er zijn meer dan 1000 soorten beschreven kraakbeenvissen, waaronder ongeveer 400 soorten haaien en 600 soorten roggen en pijlstaartroggen en ongeveer 30 soorten holocephali (draakvissen en chimeren, meestal diepzeevissen waarover vaak nog weinig bekend is).', 'haai.jpg', 1),
(8, 'palmboom', 'De palmenfamilie (Palmae of Arecaceae: beide zijn toegestaan) is de enige familie in de orde Arecales. Van de palmenfamilie zijn bijna 4000 soorten bekend. Er zijn vondsten van palmen van 40 miljoen jaar oud. Hoewel er wel winterharde (voor Nederland en België) palmsoorten bestaan, komen de meeste soorten van nature voor in tropen of subtropen.', 'palmboom.jpg', 0),
(9, 'Homo sapien', 'Mens of (wetenschappelijke naam) Homo sapiens (Latijn: verstandige of wijze mens) is een tweevoetige primatensoort uit de familie Hominidae', 'homosapien.jpg', 0),
(10, 'giraf', 'De giraffe of giraf (Giraffa camelopardalis) is een hoefdier met een zeer lange nek en lange en slanke poten. Het is het hoogste dier ter wereld: een volwassen giraffe kan een hoogte van rond de vijf meter bereiken. Het jong van een giraffe is al van de geboorte 2 meter.\r\nHet woord "giraffe" komt van het Italiaanse woord giraffa dat ontleend is aan het Arabische woord zar?fa. De Romeinen noemden de giraffe camelopardalis, wat letterlijk "kameelpanter" betekent. Deze benaming komt nog terug in het Afrikaans (kameelperd) en vroeger ook in het Nederlands (kameelpardel).\r\n', 'giraf.jpg', 5),
(11, 'neteldieren', 'De neteldieren (Cnidaria) vormen een stam van het dierenrijk. De stam omvat de schijfkwallen, de kubuskwallen, de hydroïdpoliepen en de bloemdieren. Neteldieren leven allemaal in het water, de meeste leven in zee, maar er zijn ook groepen die in zoet water leven. Vaak wordt in plaats van neteldier het woord holtedier (Coelenterata) gebruikt om deze stam der dieren aan te geven. Dit wordt echter ontraden, omdat de benaming holtedieren niet alleen voor de neteldieren wordt gebruikt, maar ook voor de ribkwallen en vroeger ook voor sponsdieren.', 'neteldieren.jpg', 1),
(12, 'Homo habilis', 'Homo habilis is een uitgestorven mensensoort die 2,2 tot 1,5 miljoen jaar geleden in Oost-Afrika leefde. Deze soort was kleiner dan de tegenwoordige mens en had een geschatte lengte tussen 1,20 m en 1,55 m. Er zijn zeer weinig fossiele resten van Homo habilis bekend. Over de taxonomie van deze soort bestaat onenigheid. Volgens sommige onderzoekers zijn de resten te primitief om in het geslacht Homo te passen en zou plaatsing in Australopithecus meer gerechtvaardigd zijn.\r\nDe streken waar Homo habilis van bekend is, lagen indertijd in de savanne.\r\n', 'homohabils.jpg', 0),
(13, 'paard', 'Paard werden vroeger gebruikt om snel van plek tot plek te komen tegenwoordig zijn er nog maar erg weinig plekken waar wilden paarden leven.', 'paard.jpg', 0),
(14, 'Tyrannosaurus', 'Tyrannosaurus is een geslacht van vleesetende theropode dinosauriërs. Tyrannosaurus behoort tot de groep van de Tyrannosauridae en leefde ongeveer zeventig tot vijfenzestig miljoen jaar geleden, tijdens het lateKrijt, in het westelijk deel van het huidige Noord-Amerika.', 'tyraniausauris.jpg', 0),
(15, 'roodborstje', 'De roodborst of het roodborstje (Erithacus rubecula) is een zangvogel uit de familie Muscicapidae (vliegenvangers). Hij waagt zich dicht bij huizen, vooral ''s winters. Verder is het een zeer talrijke broedvogel van grote tuinen, parken en bossen.', 'roodborstje.jpg', 0),
(16, 'krokodil', 'De krokodillen (Crocodylidae) zijn een familie uit de orde krokodilachtigen (Crocodilia). Onder deze familie bevinden zich de grootste soorten, en ook enkele afschrikwekkende uitgestorven soorten. Er zijn 15 soorten waarmee het van de 25 soorten krokodilachtigen de grootste groep is. Alligators, kaaimannen en gavialen zijn wel krokodilachtigen maar behoren tot andere families.', 'Krokodil.JPG', 0),
(17, 'zebra', 'Een zebra is een paardachtige (familie: Equidae) afkomstig uit het midden en zuiden van Afrika. De dieren staan vooral bekend om hun zwart-witte strepenpatroon. Algemeen gezien zijn het erg sociale dieren. Zebra''s leven met verschillende harems bijeen in een grotere kudde. De mens is er nooit echt in geslaagd ze te temmen, in tegenstelling tot paarden en ezels, hun naaste verwanten. Hun paniek-instinct bij onraad bleek moeilijk af te leren. De zebra is een herbivoor.', 'zebra.jpg', 0),
(18, 'kraai', 'Kraaien (Corvidae) of kraaiachtigen zijn een vogelfamilie in de orde van de zangvogels (Passeriformes) en de superfamilie Corvoidea. De familie telt 128 soorten', 'kraai.jpg', 0),
(19, 'slang', 'Slangen (Serpentes) zijn een groep van aan hagedissen verwante reptielen die behoren tot de orde schubreptielen (Squamata). Alle soorten worden gekenmerkt door een naar verhouding zeer lang en dun lichaam en het ontbreken van ledematen. Slangen zijn duidelijk te onderscheiden van alle andere dieren en de meeste andere reptielen als krokodilachtigen, schildpadden en brughagedissen. Met sommige groepen van hagedissen is het onderscheid niet zo duidelijk.', 'slang.jpg', 0),
(20, 'zwijn', 'Het wild zwijn of everzwijn (Sus scrofa), kortweg ever is het meest voorkomende lid van de familie der varkens (Suidae), en komt tegenwoordig over de hele wereld voor. Het is de wilde voorouder van het gedomesticeerd  varken.', 'zwijn.jpg', 5),
(21, 'wolf', 'De wolf (Canis lupus) is een zoogdier uit de familie hondachtigen (Canidae), die behoort tot de roofdieren (Carnivora).\r\nDe wolf komt wereldwijd voor. Er worden meerdere ondersoorten onderscheiden, waaronder enkele die zijn uitgestorven. De wolf leeft in groepen met een sociale structuur.\r\nDe wolf is de enige voorouder van de hond (Canis lupus familiaris). Een wolf en een hond kunnen samen vruchtbare nakomelingen voortbrengen, zodat ze, volgens een gangbaar soortbegrip in de zoölogie, tot dezelfde soort kunnen worden gerekend.\r\n', 'wolf.jpg', 0),
(22, 'School', 'Een school is de benaming voor een grote groep vissen van dezelfde soort die dicht op elkaar zwemmen.\r\nHet zwemmen in scholen heeft als voordeel dat de groep minder kwetsbaar is voor de aanvallen van roofdieren.\r\nEen bekende soort die in scholen zwemt is de haring.\r\nHet zwemmen van vissen in scholen is een voorbeeld van zelforganisatie. Een individu probeert steeds op dezelfde afstand te blijven van diegenen rondom hem. Hij is zich er niet van bewust waar hij zelf is. Hij heeft ook geen idee van de totale structuur. Er ontbreken leiders en slechts door toevalligheden verandert de zwemrichting.\r\n', 'school.jpg', 5),
(23, 'zeester', 'Zeesterren (Asteroidea) zijn een groep diersoorten die behoren tot de stekelhuidigen.\r\nZesterren hebben een stervormig lichaam met een centrale schijf en meestal vijf langwerpige lobben die armen worden genoemd. De centrale lichaamsschijf omvat de maag, met de mondopening aan de onderzijde. Ingeval de soort een anus heeft, ligt deze aan de bovenzijde. Het uiterlijk loopt per soort uiteen. Zo zijn soorten bekend met enige tientallen armen en zijn er naast de vele bruin-grijze ook rode, blauwe en gele zeestersoorten. Sommige soorten hebben stekels, andere een glad lichaamsoppervlak. Aan de onderkant van de armen bevinden zich buisvoetjes met kleverige napjes.\r\n', 'zeester.jpg', 0),
(24, 'octopus', 'Octopus is een geslacht van inktvissen uit de familie van Octopodidae. Het bestaat uit vele soorten.', 'Octopus.jpg', 0),
(25, 'krab', 'Krabben (Brachyura) zijn een groep van kreeftachtige dieren die behoren tot de orde tienpotigen (Decapoda). De wetenschappelijke naam Brachyura betekent letterlijk korte staart en verwijst naar het onder het buikschild geklapte achterlijf, waardoor krabben in tegenstelling tot andere kreeftachtigen geen zichtbare staart hebben. Krabben worden ook wel kortstaartigen of kortstaartkreeften genoemd vanwege hun gereduceerde achterlijf. De onderzijde van een krab is eigenlijk zijn staart en dit is een belangrijk verschil met alle andere kreeftachtigen.', 'krab.jpg', 0),
(26, 'papegaai', 'Papegaaien in de strikt taxonomische zin van het woord vormen een familie uit de orde van Psittaciformes (papegaaiachtigen), de Psittacidae. Hiertoe behoren ook de lori''s, die soms als een aparte onderfamilie worden beschouwd.\r\nVerder zijn er de kaketoes, die in de spreektaal ook papegaai genoemd worden. Ze behoren niet tot de familie Psittacidae. Zie cladogram onderaan bij sectie "Taxonomie".\r\n', 'papegaaien.jpg', 0),
(27, 'Tijger', 'De tijger (Panthera tigris) is een zoogdier dat tot de familie der katachtigen (Felidae) behoort, een van de vier ''grote katten'' die tot het geslacht Panthera behoren. Tijgers zijn jagende roofdieren.\r\nDe meeste tijgers wonen in het bos (waarvoor hun camouflagestrepen geschikt zijn) en in grasland. Van de grote katten zijn de tijger en de jaguar goede zwemmers; tijgers kunnen vaak badend in vijvers, meren en rivieren worden aangetroffen.\r\n', 'tijger.jpg', 0),
(28, 'hyena', 'Hyena''s (Hyaenidae) zijn een familie van middelgrote roofdieren die voorkomen in Afrika en Azië. Hoewel hyena''s eruit zien als grote honden, vormen ze een aparte biologische familie die waarschijnlijk het meest verwant is aan de andere families van de onderorde Feliformia: katachtigen (Felidae), civetkatachtigen (Viverridae), de pardelroller (Nandiniidae), Madagaskarcivetkatten (Eupleridae) en mangoesten (Herpestidae).\r\nIn vroegere tijden kwamen grote hyena''s voor over grote delen van Europa en Azië, maar ze zijn sterk in aantal en habitat teruggelopen. Er zijn slechts vier soorten overgebleven, de gevlekte hyena, de bruine hyena, de gestreepte hyena en de aardwolf die hoort tot de subfamilie Protelinae.\r\n', 'hyena.jpg', 0),
(29, 'poema', 'De poema, bergleeuw of zilverleeuw (Puma concolor) is een katachtig dier dat in geheel Midden- en Zuid-Amerika en in het westen van Noord-Amerika voorkomt. Lang heeft men gedacht dat de poema schadelijk was voor de wildstand en uiteraard voor vee. Het laatste is wellicht juist, maar het eerste niet. De poema zorgt juist voor een gezonde opbouw van de populatie van zijn prooidieren.\r\nDe poema is in grote delen van Amerika uitgeroeid, een lot dat hij deelt met vele andere katachtigen. De poema leeft solitair en is territoriumgebonden. Hij is echter niet agressief en gaat indringers het liefst uit de weg.\r\nDe nauwste verwant van de poema is waarschijnlijk het jachtluipaard (Acinonyx jubatus).\r\n', 'poema.jpg', 0),
(30, 'jaguar', 'De jaguar (Panthera onca) is een katachtige die voorkomt in Midden-Amerika en een groot deel van Zuid-Amerika. Hij lijkt oppervlakkig sterk op de luipaard, maar is zwaarder gebouwd en heeft een forsere rozettentekening.', 'jaguar.jpg', 7);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bezoekers`
--

CREATE TABLE IF NOT EXISTS `bezoekers` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `naam` varchar(100) NOT NULL,
  `tussenvoegsel` varchar(5) NOT NULL,
  `achternaam` varchar(100) NOT NULL,
  `telefoonnummer` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `quiz1` int(11) NOT NULL,
  `quiz2` int(11) NOT NULL,
  `quiz3` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Gegevens worden uitgevoerd voor tabel `bezoekers`
--

INSERT INTO `bezoekers` (`id`, `naam`, `tussenvoegsel`, `achternaam`, `telefoonnummer`, `email`, `quiz1`, `quiz2`, `quiz3`) VALUES
(1, 'Tim', '', 'Hartog', 618069936, 'tim.hartog@live.nl', 7, 3, 20),
(2, 'Simon', 'van', 'Eeden', 8889781, 'simionisgoed@gmail.com', 0, 0, 0),
(3, 'Dahir', '', 'Warsame', 112234567, 'Dahir@test.nl ', 0, 0, 0),
(4, 'Rik', '', 'Hartog', 2345665, 'rik.hartog@live.nl', 0, 0, 0),
(5, 'Bob', 'van', 'Houten', 234567, 'bob@hotmail.com', 0, 0, 0),
(6, 'tim', 'esfe', 'efssfe', 23456, 'rex@live.nl', 0, 0, 0),
(7, 'lame', 'lame', 'lame', 0, 'lame', 0, 0, 0),
(8, 'rex', 'van', 'marmeren', 123456, 'marmeren@hotmail.com', 2, 22, 30),
(9, 'Hans', 'van', 'Odijk', 2345223, 'hans@odijk.nl', 6, 20, 10),
(10, 'Test', '', 'test', 123, 'test@test.nl', 0, 0, 0),
(11, 'kees', '', 'Corlnekus', 11, 'Corlnekus@gmail.com', 0, 0, 0),
(12, 'tim', 'van', 'Hartog', 690180, 'tim.hartog@homtail.nl', 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `user_id` int(20) NOT NULL,
  `price` double(20,2) NOT NULL,
  `created_at` date NOT NULL,
  `ticket_id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Gegevens worden uitgevoerd voor tabel `booking`
--

INSERT INTO `booking` (`user_id`, `price`, `created_at`, `ticket_id`) VALUES
(5, 4.00, '2014-11-20', 3),
(5, 4.00, '2014-11-20', 4),
(5, 4.00, '2014-11-20', 5),
(5, 4.00, '2014-11-20', 6),
(6, 2.50, '2014-11-20', 7),
(7, 0.00, '2014-11-20', 8),
(5, 4.00, '2014-11-24', 9),
(6, 4.00, '2014-11-25', 10),
(8, 4.00, '2014-11-25', 11),
(0, 4.00, '2014-11-26', 33),
(0, 4.00, '2014-11-27', 34);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(50) NOT NULL,
  `tussenvoegsel` varchar(10) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `emailadres` varchar(100) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `gebruikersrol` varchar(50) NOT NULL,
  `blocked` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `emailadres`, `wachtwoord`, `gebruikersrol`, `blocked`) VALUES
(1, 'Verkoper', '', 'verkoper', 'verkoper@verkoper.nl', 'verkoper', 'verkoper', 0),
(2, 'quizmaster', '', 'quizmaster', 'quizmaster@quizmaster', 'quizmaster', 'quizmaster', 0),
(3, 'admin', '', 'admin', 'admin@admin', 'admin', 'admin', 0),
(5, 'manager', '', 'manager', 'manager@manager.nl', 'manager', 'manager', 0),
(6, 'tim', '', 'Hartog', 'tim.hartog@live.nl', 'wasbeer', 'manager', 0),
(7, 'tim', '', 'Hartog', 'rexthehero@live.nl', 'wasbeer', 'admin', 0),
(8, 'tim', '', 'Hartog', 't@live.nl', 'wasbeer', 'quizmaster', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stemmen`
--

CREATE TABLE IF NOT EXISTS `stemmen` (
  `emailadres` varchar(100) NOT NULL,
  `eerste` varchar(100) NOT NULL,
  `tweede` varchar(100) NOT NULL,
  `derde` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verkoper`
--

CREATE TABLE IF NOT EXISTS `verkoper` (
  `id` int(100) NOT NULL,
  `voornaam` varchar(50) NOT NULL,
  `tussenvoegsel` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `emailadres` varchar(20) NOT NULL,
  `gebruikersrol` varchar(100) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL,
  `blocked` int(1) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `verkoper`
--

INSERT INTO `verkoper` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `emailadres`, `gebruikersrol`, `wachtwoord`, `blocked`) VALUES
(0, 'tim', 'lala', 'lalla', 'llalallalala@llalcvn', 'verkoper', 'wasbeer', 0),
(1, 'Tim', '', 'Hartog', 'tim.hartog@live.nl', 'verkoper', 'wasbeer', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `voornaam` varchar(100) NOT NULL,
  `tussenvoegsel` varchar(10) NOT NULL,
  `achternaam` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `geboortedatum` date NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `woonplaats` varchar(100) NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `visitor`
--

INSERT INTO `visitor` (`voornaam`, `tussenvoegsel`, `achternaam`, `email`, `geboortedatum`, `postcode`, `woonplaats`, `id`) VALUES
('tim', '', 'Hartog', 'tim.hartog@live.nl', '1995-03-12', '3461AH', 'Linschoten', 5),
('Rex', '', 'Hartog', 'rex@live.nl', '1943-03-12', '3461AH', 'Linschoten', 6),
('Simion', '', 'Simion', 'simion@live.nl', '2011-04-12', '3461AH', 'Linschoten', 7),
('rex', 'van', 'marmeren', 'marmeren@hotmail.com', '1980-07-12', '3461AH', 'Linschoten', 8);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wachtwoord`
--

CREATE TABLE IF NOT EXISTS `wachtwoord` (
  `gebruiker_id` int(20) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
