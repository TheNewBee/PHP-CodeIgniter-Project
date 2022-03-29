-- AST20401 Group11 201718
-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2017 at 03:34 PM
-- Server version: 10.2.8-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

DROP TABLE IF EXISTS `organizer`;
CREATE TABLE `organizer` (
  `organizer_id` int(10) UNSIGNED NOT NULL,
  `organizer_name` varchar(64) NOT NULL DEFAULT '',
  `organizer_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`organizer_id`, `organizer_name`, `organizer_description`) VALUES
(4, 'Reebok', 'In 1958, Reebok was established as a companion company to J.W. Foster and Sons, founded in 1895 in Bolton, Greater Manchester, England. From 1958 until 1986, Reebok apparel featured a Union Jack flag.Reebok is a global athletic footwear and apparel company, operating as a subsidiary of Adidas since 2005.'),
(5, 'Cathay Pacific', 'Cathay Pacific was founded on 24 September 1946by Australian Sydney H. de Kantzow and American Roy C. Farrell, with each man putting up HK$1 to register the airline. The airline made the world\'s first non-stop transpolar flight flying over the North Pole in July 1998, which was also the maiden flight to arrive at the then new Hong Kong International Airport.'),
(6, 'KFC', 'KFC,until 1991 known as Kentucky Fried Chicken, is an American fast food restaurant chain that specializes in fried chicken. Headquartered in Louisville, Kentucky, it is the world\'s second-largest restaurant chain (as measured by sales) after McDonald\'s, with almost 20,000 locations globally in 123 countries and territories as of December 2015. The chain is a subsidiary of Yum! Brands, a restaurant company that also owns the Pizza Hut and Taco Bell chains.'),
(3, 'Nike', 'Nike was founded on January 25, 1964, as Blue Ribbon Sports, by Bill Bowerman and Phil Knight, and officially became Nike, Inc. on May 30, 1971. The company takes its name from Nike, the Greek goddess of victory.Nike is an American multinational corporation that is engaged in the design, development, manufacturing, and worldwide marketing and sales of footwear, apparel, equipment, accessories, and services.'),
(1, 'HSBC', 'HSBC, officially known as The Hongkong and Shanghai Banking Corporation Limited, is a wholly owned subsidiary of HSBC, the largest bank in Hong Kong, and operates branches and offices throughout the Asia Pacific region, and in other countries around the world.\'The Hongkong and Shanghai Bank\' was established in British Hong Kong in 1865'),
(2, 'Adidas', 'Adidas was founded in July of 1924 as Gebrüder Dassler Schuhfabrik.It is the largest sportswear manufacturer in Europe, and the second largest in the world.'),
(7, 'McDonald\'s', 'McDonald\'s was founded in 1940 as a restaurant operated by Richard and Maurice McDonald, in San Bernardino, California, USA. They rechristened their business as a hamburger stand. The first time a McDonald\'s franchise used the Golden Arches logo was in 1953 at the opening of Phoenix, Arizona, USA. In 1955, Ray Kroc, a businessman, joined the company as a franchise agent and proceeded to purchase the chain from the McDonald brothers.'),
(8, 'NewBalance', 'New Balance was founded on 1906 by William J. Riley.New Balance maintains a manufacturing presence in the United States, as well as in the United Kingdom for the European market, where they produce some of their most popular models such as the 990 model—in contrast to its competitors, who often manufacture exclusively outside the USA and Europe. As a result, New Balance shoes tend to be more expensive than those of many other manufacturers.'),
(9, 'Uniqlo', 'Uniqlo  is a Japanese casual wear designer, manufacturer and retailer.[citation needed] The company has been a wholly owned subsidiary of Fast Retailing Co., Ltd. since November 2005. The company operates in Japan and several other countries.'),
(10, 'Gap', 'The Gap,Inc was founded in 1969 by Donald Fisher and Doris F. Fisher and is headquartered in San Francisco, California. The company operates five primary divisions: Gap (the namesake banner), Banana Republic, Old Navy, Intermix, and Athleta. Gap Inc. is the largest specialty retailer in the United States, and is 3rd in total international locations, behind Inditex Group and H&M. As of September 2008, the company has approximately 135,000 employees and operates 3,727 stores worldwide, of which 2,406 are located in the U.S.'),
(11, 'Bossini', 'Bossini was founded by Law Ting-pong and launched its first retail store in 1987. It has grown to 938 locations worldwide, a mix of directly managed and franchised stores. The group operates 257 directly managed stores in Hong Kong, mainland China, Taiwan and Singapore, with a further 81 franchised stores in mainland China. In around 40 other countries, the group supports a total of 600 franchised stores, including in Southeast Asia, the Middle East, Europe and Central America.'),
(12, 'Muji', 'Muji is a Japanese retail company which sells a wide variety of household and consumer goods. Muji is distinguished by its design minimalism, emphasis on recycling, avoidance of waste in production and packaging, and no-logo or \'no-brand\' policy. The name Muji is derived from the first part of Mujirushi Ryōhin, translated as No Brand Quality Goods on Muji\'s European website.'),
(13, 'Samsung', 'Samsung was founded by Lee Byung-chul in 1938 as a trading company. Over the next three decades, the group diversified into areas including food processing, textiles, insurance, securities and retail. Samsung entered the electronics industry in the late 1960s and the construction and shipbuilding industries in the mid-1970s; these areas would drive its subsequent growth. Following Lee\'s death in 1987, Samsung was separated into four business groups – Samsung Group, Shinsegae Group, CJ Group and Hansol Group. Since 1990, Samsung has increasingly globalised its activities and electronics; in particular, its mobile phones and semiconductors have become its most important source of income.'),
(14, 'Apple', 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California that designs, develops, and sells consumer electronics, computer software, and online services. The company\'s hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal computer, the iPod portable media player, the Apple Watch smartwatch, the Apple TV digital media player, and the HomePod smart speaker. Apple\'s consumer software includes the macOS and iOS operating systems, the iTunes media player, the Safari web browser, and the iLife and iWork creativity and productivity suites. Its online services include the iTunes Store, the iOS App Store and Mac App Store, Apple Music, and iCloud.'),
(15, 'Google', 'Google LLC is an American multinational technology company that specializes in Internet-related services and products. These include online advertising technologies, search, cloud computing, software, and hardware. Google was founded in 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University, in California. Together, they own about 14 percent of its shares, and control 56 percent of the stockholder voting power through supervoting stock. They incorporated Google as a privately held company on September 4, 1998. An initial public offering (IPO) took place on August 19, 2004, and Google moved to its new headquarters in Mountain View, California, nicknamed the Googleplex. In August 2015, Google announced plans to reorganize its various interests as a conglomerate called Alphabet Inc. Google, Alphabet\'s leading subsidiary, will continue to be the umbrella company for Alphabet\'s Internet interests. Upon completion of the restructure, Sundar Pichai was appointed CEO of Google; he replaced Larry Page, who became CEO of Alphabet.'),
(16, 'Microsoft', 'Microsoft Corporation is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports and sells computer software, consumer electronics, personal computers, and services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface tablet lineup. As of 2016, it is the world\'s largest software maker by revenue, and one of the world\'s most valuable companies. The word \'Microsoft\' is a portmanteau of \'microcomputer\' and \'software\'.'),
(17, 'StandardChartered', 'Standard Chartered PLC is a British multinational banking and financial services company headquartered in London, England. It operates a network of more than 1,200 branches and outlets (including subsidiaries, associates and joint ventures) across more than 70 countries and employs around 87,000 people. It is a universal bank with operations in consumer, corporate and institutional banking, and treasury services. Despite its UK base, it does not conduct retail banking in the UK, and around 90% of its profits come from Asia, Africa and the Middle East.'),
(18, 'Asus', 'Asus was founded in Taipei in 1989 by T.H. Tung, Ted Hsu, Wayne Hsieh and M.T. Liao, all four having previously worked at Acer as hardware engineers. At this time, Taiwan had yet to establish a leading position in the computer-hardware business. Intel Corporation would supply any new processors to more established companies like IBM first, and Taiwanese companies would have to wait for approximately six months after IBM received their engineering prototypes.'),
(19, 'City University', 'City Universitys origins lie in the calls for a ‘second polytechnic’ in the years following the 1972 establishment of the Hong Kong Polytechnic. In 1982, Executive Council member Chung Sze-yuen spoke of a general consensus that ‘a second polytechnic of similar size to the first should be built as soon as possible.’ District administrators from Tuen Mun and Tsuen Wan lobbied the government to build the new institution in their respective new towns. The government instead purchased temporary premises at the new Argyle Centre Tower II in Mong Kok, a property developed by the Mass Transit Railway Corporation in concert with the then-Argyle Station. The new school was called City Polytechnic of Hong Kong, a name chosen among nearly 300 suggestions made by members of the public.'),
(20, 'Seiko', 'The company was founded in 1881, when Kintarō Hattori opened a watch and jewelry shop called \'K. Hattori\' in the Ginza area of Tokyo, Japan. Eleven years later, in 1892, he began to produce clocksunder the name Seikosha , meaning roughly \'House of Exquisite Workmanship\'. According to Seikos official company history, titled \'A Journey In Time: The Remarkable Story of Seiko\' (2003), Seiko is a Japanese word meaning \'exquisite\' or \'success\'.');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE `session` (
  `session_id` int(10) UNSIGNED NOT NULL,
  `session_title` varchar(256) NOT NULL DEFAULT '',
  `session_type` varchar(64) NOT NULL DEFAULT '',
  `session_theme_photo` varchar(256) NOT NULL DEFAULT '',
  `description_s` text NOT NULL,
  `description_l` text NOT NULL,
  `time` int(16) NOT NULL DEFAULT 0,
  `available_ticket_num` smallint(255) NOT NULL DEFAULT 0,
  `price` varchar(32) NOT NULL DEFAULT '',
  `format` varchar(32) NOT NULL DEFAULT '',
  `level` varchar(32) NOT NULL DEFAULT '',
  `recommended` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `session_title`, `session_type`, `session_theme_photo`, `description_s`, `description_l`, `time`, `available_ticket_num`, `price`, `format`, `level`, `recommended`) VALUES
(1, 'Happy Interaction', 'Basketball Competition', '/CodeIgniter/images/HSBC.png', 'A competition for HSBC staff.', 'To let staff have a time to relax, and let staff have more intereaction.', 1522548000, 500, '30', 'Group', 'Let me try', 0),
(2, 'Just Have Fun', 'Badminton games', '/CodeIgniter/images/adidas.png', 'Have a chance to do some exercise with your friends or your family.', 'In this moment,you can have more communication with your friends or family.Also it can keep the relationship to each other.', 1522562400, 200, '50', 'Group', 'Beginner', 0),
(3, 'Happy Tennis', 'Tennis Training', '/CodeIgniter/images/nike.png', 'Nike\'s world headquarters are surrounded by the city of Beaverton but are within unincorporated Washington County. The city attempted to forcibly annex Nike\'s headquarters, which led to a lawsuit by Nike, and lobbying by the company that ultimately ended in Oregon Senate Bill 887 of 2005.', 'Appleby documents detail how Nike boosted its after-tax profits by, among other maneuvers, transferring ownership of its Swoosh trademark to a Bermudan subsidiary, Nike International Ltd. This transfer allowed the subsidiary to charge royalties to its European headquarters in Hilversum, Netherlands, effectively converting taxable company profits to an account payable in tax-free Bermuda. Although the subsidiary was effectively run by executives at Nike\'s main offices in Beaverton, Oregon -- to the point where a duplicate of the Bermudan company\'s seal was needed -- for tax purposes the subsidiary was treated as Bermuda. Its profits were not declared in Europe and came to light only because of a mostly unrelated case in US Tax Court, where papers filed by Nike briefly mention royalties in 2010, 2011 and 2012 totaling $3.86 billion. Under an arrangement with Dutch authorities, the tax break was to expire in 2014, so another reorganization transferred the intellectual property from the Bermudan company to a Dutch commanditaire vennootschap or limited partnership, Nike Innovate CV. Dutch law treats income earned by a CV as if it had been earned by the principals, who owe no tax in the Netherlands if they do not reside there.', 1522634400, 300, '50', 'Group', 'Beginner', 1),
(4, 'Highest Table Tennis', 'Table Tennis Competition', '/CodeIgniter/images/reebok.png', 'Reebok designs, manufactures, distributes and sells fitness, running and CrossFit sportswear including clothing and footwear. The clothing line includes t-shirts, hoodies and pants among other items.The brand has also collaborated with other companies to produce fitness equipment and workouts.', 'Reebok\'s parent company, Adidas, is headquartered in Germany, while the Reebok world headquarters remains located in Canton, Massachusetts, U.S.A. The Reebok-CCM Hockey offices are located in Saint-Laurent, Quebec, Canada and Stockholm, Sweden. Reebok EMEA (Europe, Middle East, Africa) has its regional office in Amsterdam, Netherlands. The company also has additional regional offices located in Panama City (Reebok Latin America), Shanghai (Reebok Shanghai International Commerce Centre), Singapore, Taikoo Shing, and Toronto. Reebok first entered the South Korean Market in 1987 and has since been making substantial revenue in South Korea. It is shown that it is the third most popular sports brand in South Korea. Through the M&A of Adidas International, Reebok is no longer listed as a corporation in South Korea.', 1522720800, 300, '50', 'Group', 'Advanced', 0),
(5, 'Hong Kong Football Cup Competition', 'Football Competition', '/CodeIgniter/images/cathaypacific.png', 'Cathay Pacific is the worlds tenth largest airline measured in terms of sales, and fourteenth largest measured in terms of market capitalisation.', 'Branding and publicity efforts have revolved primarily around the staff and passengers of Cathay Pacific. The airlines first campaign focusing on the passenger was \'Its the little things that move you\'. It was followed by an advertising campaign, \'Great Service. Great People. Great Fares.\' In 2011, Cathay Pacific rolled out \'People. They make an airline.\' The latest motto is \'Life Well Travelled\', introduced in 2015. It is also used for its subsidiary Dragonair and was accompanied by a supplementary website called \'Meet the Team\', which introduced some of the companys staff through profiles. The flash site revealed many behind-the-scenes stories, many of which contain inspiring facts about their career life.', 1522728000, 240, '70', 'Group', 'Advanced', 0),
(6, 'Tennis Cup', 'Tennis Competition', '/CodeIgniter/images/kfc.png', 'Joe Ledington of Kentucky, a nephew by marriage of Colonel Sanders, claimed to have found a copy of the original KFC fried chicken recipe on a handwritten piece of paper in an envelope in a scrapbook. In August 2016, Chicago Tribune staffers conducted a cooking test of this recipe and claimed after a few attempts that, with the addition of MSG flavor-enhancer, Accent, they produced fried chicken which tasted \'indistinguishable\' from the chicken they purchased at KFC.', 'In 1991, the KFC name was officially adopted, although it was already widely known by that initialism. Kyle Craig, president of KFC US, admitted the change was an attempt to distance the chain from the unhealthy connotations of \'fried\'. The early 1990s saw a number of successful major products launched throughout the chain, including spicy \'Hot Wings\' (launched in 1990), popcorn chicken (1992), and internationally, the \'Zinger\', a spicy chicken fillet burger (1993). By 1994, KFC had 5,149 outlets in the US, and 9,407 overall, with over 100,000 employees. In August 1997, PepsiCo spun off its restaurants division as a public company valued at US$4.5 billion (around US$6.5 billion in 2013). The new company was named Tricon Global Restaurants, and at the time had 30,000 outlets and annual sales of US$10 billion (around US$14 billion in 2013), making it second in the world only to McDonalds. Tricon was renamed Yum! Brands in May 2002.', 1522807200, 250, '60', 'Personal Training', 'Intermediate', 0),
(7, 'Sport For All Day', 'Training', '/CodeIgniter/images/mcdonald.png', 'The McDonalds headquarters complex, McDonalds Plaza, is located in Oak Brook, Illinois. It sits on the site of the former headquarters and stabling area of Paul Butler, the founder of Oak Brook. McDonalds moved into the Oak Brook facility from an office within the Chicago Loop in 1971.', 'McDonalds workers have on occasions decided to strike over pay, with most of the employees on strike seeking to be paid $15.00. When interviewed about the strikes occurring, former McDonalds CEO Ed Rensi stated: ‘Its cheaper to buy a $35,000 robotic arm than it is to hire an employee whos inefficient making $15 an hour bagging french fries’ with Rensi explaining that increasing employee wages could possibly take away from entry-level jobs. However, according to Easterbrook, increasing wages and benefits for workers saw a 6% increase in customer satisfaction when comparing 2015s first quarter data to the first quarter of 2016, with greater returns seen as a result.', 1530406800, 1000, '0', 'Personal Training', 'Let me try', 0),
(8, 'Funny Football', 'Football Training', '/CodeIgniter/images/newbalance.png', 'New Balance is about doing things right. They are about doing things they wanna do, and following those through. We saw the chance to do something really authentic in a youthful culture that they [New Balance] had not really had a presence in before. More than that, they saw an authentic culture that they wanted to be a part of.', 'During 2016, New Balance opposed the Trans Pacific Partnership and condemned the Obama administrations support for it, arguing that it would hurt their domestic shoe manufacturing (while Nike, which does not manufacture in the US, supported the TPP). Matt Lebretton, the companys Vice President of public affairs said in April 2016 ‘I would say that when Hillary Clinton, Bernie Sanders and Donald Trump all agree on something, then it has to be given a closer look; and they all agree that TPP is not the right policy.’ After Donald Trump won the 2016 U.S. presidential election, Lebretton told a reporter ‘The Obama administration turned a deaf ear to us and frankly, with President-elect Trump, we feel things are going to move in the right direction.’Some news outlets reported that an ad-hoc boycott campaign was created out of an interpretation of Lebrettons remarks as supportive of Trump. Owner and Chairman Davis donated almost $400,000 to the Trump Victory Committee in September 2016.', 1523066400, 100, '30', 'Personal Training', 'Beginner', 1),
(9, 'Rugby Promotion Day', 'Rugby Promotion', '/CodeIgniter/images/uniqlo.png', 'During the promotion date, let people know more about the rugby.', 'As the sport which is rugby not very wellknow in Hong Kong. And we do not want this type of sport disappear in Hong Kong. Therefore we want to held more event to let people to experience rugby.', 1523149200, 300, '50', 'Personal Training', 'Let me try', 0),
(10, 'Hong Kong Squash Competition', 'Squash Competition', '/CodeIgniter/images/gap.png', 'The Gap originally targeted the younger generation when it opened, with its name referring to the generation gap of the time. It originally sold everything that Levi Strauss & Co made in every style, size, and color, and organized the stock by size. The Gap was the first of many shops that carried only Levis. In 1973, Gap started making their own jeans as a way to differentiate themselves from department stores.', 'Donald and Doris Fisher, who had a difficult time finding jeans that fit, opened the first Gap store on Ocean Avenue in San Francisco on August 21, 1969, its merchandise consisted of Levis and LP records. They had raised US$63,000 to open the store, and reached US$2 million in sales in the second full year of operation. In 1970, Gap opened its second store in San Jose, California, its back room serves as the companys first replenishment warehouse. In 1971, Gap established its corporate headquarters in Burlingame, California with four employees. By 1973, the company had over 25 locations and had expanded into the East Coast market with a store in the Echelon Mall in Voorhees, New Jersey. In 1974, Gap began to sell private-label merchandise.', 1523073600, 300, '70', 'Personal Training', 'Intermediate', 0),
(11, 'Squash Promotion Day', 'Squash Promotion', '/CodeIgniter/images/bossini.png', 'Bossini markets casual wear apparel products including mens, ladies, youth and children wear.', 'In April 2015, a criminal gang kidnapped Queenie Rosita Law, granddaughter of late Bossini founder Law Ting-pong and heiress to the family fortune, and held her hostage in a cave for four days, until her father paid a ransom of HK$28 million, whereupon she was freed. Later, the vast majority of the money was recovered, and all of the nine men police believe to have been involved were captured and tried', 1523673000, 500, '25', 'Personal Training', 'Let me try', 0),
(12, 'Rugby Competition', 'Rugby Competition', '/CodeIgniter/images/muji.png', 'Muji started with 40 products during the 1980s, their products range from stationery, and clothing for men and women, to food items and major kitchen appliances and has even included an automobile. Its primary business includes Café Muji, Meal Muji, Muji Campsite, florist and home furnishing; the company has also engaged in architectural project such as the Muji houses.', 'As well as its designers, ordinarily Muji keeps its manufacturing sources private.One notable exception is collaboration with Thonet, the oldest German furniture maker. In 2008, Muji and Thonet announced their cooperation to produce two lines of minimalist furniture. The first was bentwood chairs designed by James Irvine in homage to the iconic No. 14 chair of Thonet. The second was steel tubular chairs and desks designed by Konstantin Grčić. Roland Ohnacker, managing director of Thonet, stated that the aim was \'to help 18 to 35 year-olds enter the Thonet brand world\'. From Spring 2009, these furniture are available at selected Muji stores.', 1523755800, 300, '70', 'Group', 'Advanced', 0),
(13, 'Happy Volleyball', 'Volleyball Training', '/CodeIgniter/images/samsung.png', 'In July 2016, Samsung unveiled its SamsungOne font, a typeface that hopes to give a consistent and universal visual identity to the wide range of Samsung products. SamsungOne was designed to be used across Samsung\'s diverse device portfolio, with a focus on legibility for everything from smaller devices like smartphones to larger connected TVs or refrigerators, as well as Samsung marketing and advertisements. The font family supports 400 different languages through over 25,000 characters.', 'Samsung Everland engages in an array of services closely associated with the day-to-day lives and business operations of its customers. Its business scope covers the three main sectors of Environment & Asset, Food Culture and Resort.Since its inception in 1963 and the launch of theme park ‘Everland’ in 1976, Samsung Everland has steadily built its presence across the markets of golf, building management, food and beverage, energy and environment. Through this process, Samsung Everland has managed to achieve its current market standing. As a corporation trusted by the local community and renowned globally as a pioneer in the infrastructure of life, Samsung Everland strives to help its customers lead fulfilling lives and achieve success in their business operations by building the infrastructure for every aspect of life including entertainment, culinary and business.', 1523757600, 100, '75', 'Personal Training', 'Beginner', 1),
(14, 'Tennis is Fun', 'Tennis Training', '/CodeIgniter/images/apple.png', 'Apples worldwide annual revenue totaled $229 billion for the 2017 fiscal year. The company enjoys a high level of brand loyalty and has been repeatedly ranked as the worlds most valuable brand. However, it receives significant criticism regarding the labor practices of its contractors and its environmental and business practices, including the origins of source materials.', 'The Macintosh initially sold well, but follow-up sales were not strong due to its high price and limited range of software titles. The machines fortunes changed with the introduction of the LaserWriter, the first PostScript laser printer to be sold at a reasonable price, and PageMaker, an early desktop publishing package. It has been suggested that the combination of these three products were responsible for the creation of the desktop publishing market. The Macintosh was particularly powerful in the desktop publishing market due to its advanced graphics capabilities, which had necessarily been built in to create the intuitive Macintosh GUI.', 1523845800, 200, '50', 'Personal Training', 'Let me try', 0),
(15, 'Volleyball Promotion Day', 'Volleyball Promotion', '/CodeIgniter/images/google.png', 'In March 1999, the company moved its offices to Palo Alto, California, which is home to several prominent Silicon Valley technology start-ups. The next year, Google began selling advertisements associated with search keywords against Page and Brins initial opposition toward an advertising-funded search engine. In order to maintain an uncluttered page design, advertisements were solely text-based.', 'There were concerns that Googles IPO would lead to changes in company culture. Reasons ranged from shareholder pressure for employee benefit reductions to the fact that many company executives would become instant paper millionaires. As a reply to this concern, co-founders Brin and Page promised in a report to potential investors that the IPO would not change the companys culture. In 2005, articles in The New York Times and other sources began suggesting that Google had lost its anti-corporate, no evil philosophy. In an effort to maintain the companys unique culture, Google designated a Chief Culture Officer, who also serves as the Director of Human Resources. The purpose of the Chief Culture Officer is to develop and maintain the culture and work on ways to keep true to the core values that the company was founded on: a flat organization with a collaborative environment. Google has also faced allegations of sexism and ageism from former employees. In 2013, a class action against several Silicon Valleycompanies, including Google, was filed for alleged ‘no cold call’ agreements which restrained the recruitment of high-tech employees.', 1523853000, 200, '50', 'Personal Training', 'Let me try', 0),
(16, 'Funny Handball', 'Handball Training', '/CodeIgniter/images/microsoft.png', 'Microsoft is an outspoken opponent of the cap on H1B visas, which allow companies in the U.S. to employ certain foreign workers. Bill Gates claims the cap on H1B visas makes it difficult to hire employees for the company, stating \'I would certainly get rid of the H1B cap\' in 2005. Critics of H1B visas argue that relaxing the limits would result in increased unemployment for U.S. citizens due to H1B workers working for lower salaries.', 'In 2012, Microsoft hired a political pollster named Mark Penn, whom the New York Times called ‘famous for bulldozing’ his political opponents as Executive Vice-President, Advertising and Strategy. Penn created a series of negative ads targeting one of Microsoft\'s chief competitors, Google. The ads, called ‘Scroogled’, attempt to make the case that Google is ‘screwing’ consumers with search results rigged to favor Google\'s paid advertisers, that Gmail violates the privacy of its users to place ad results related to the content of their emails and shopping results which favor Google products. Tech publications like TechCrunch have been highly critical of the ad campaign, while Google employees have embraced it.', 1523930400, 100, '50', 'Personal Training', 'Beginner', 1),
(17, 'Fencing Learning', 'Fencing Training', '/CodeIgniter/images/standardchartered.png', 'Standard Chartered has over 86,000 employees globally and has operations in 70 markets. The bank is divided into two divisions, plus Global Business Services: The Consumer Bank and the Wholesale Bank.', 'Standard Chartered Breeze is a mobile banking application for the iPhone & iPad that can also be used on the computer. It is largely similar to the online banking services offered by other banks, with the exception of its function to issue electronic bank cheques. Launched in the summer of 2010 and aggressively marketed, the reviews have been generally positive. In addition, it has attracted an uncommon amount of attention due to many innovative marketing strategies it used to promote its product, mostly focusing on social media. Standard Chartered Breeze organised a bloggers meet for bloggers to preview Breeze, and its Twitter campaign to give away a free iPad was extremely successful.Standard Chartered, along with the International Agency for the Prevention of Blindness, manages a charity called Seeing is Believing. The charity aims to eliminate preventable blindness in developing countries. Standard Chartered matches every dollar raised by the organization.', 1524018600, 50, '90', 'Group', 'Let me try', 1),
(18, 'Swimming is Fun', 'Swim Training', '/CodeIgniter/images/asus.png', 'Republic of Gamers is a brand used by Asus since 2006, encompassing a range of computer hardware, personal computers, peripherals, and accessories oriented primarily toward PC gaming. The line includes both desktops and high-spec laptops such as the Asus ROG Crosshair V Formula-Z Motherboard or the Asus ROG G751JY-DH71 Laptop.', 'AsusTek Computer Inc. is a Taiwanese multinational computer and phone hardware and electronics company headquartered in Beitou District, Taipei, Taiwan. Its products include desktops, laptops, netbooks, mobile phones, networking equipment, monitors, WIFI routers, projectors, motherboards, graphics cards, optical storage, multimedia products, peripherals, wearables, servers, workstations, and tablet PCs. The company is also an original equipment manufacturer(OEM). Asus is the worlds 4th-largest PC vendor by 2015 unit sales.Asus appears in BusinessWeeks ‘InfoTech 100’ and ‘Asias Top 10 IT Companies rankings, and it ranked first in the IT Hardware category of the 2008 Taiwan Top 10 Global Brands survey with a total brand value of $1.3 billion. Asus has a primary listing on the Taiwan Stock Exchange under the ticker code 2357 and a secondary listing on the London Stock Exchange under a ticker code ASKD.', 1524103200, 300, '25', 'Personal Training', 'Beginner', 0),
(19, 'Sport day', 'Sport of athletics', '/CodeIgniter/images/cityu.png', 'The Run Run Shaw Library was established in 1984. In 1989, the Library moved to its current location in Yeung Kin Man Academic Building on the university campus in Kowloon Tong and the following year it was renamed Run Run Shaw Library in recognition of a generous donation by Sir Run Run Shaw.', 'The Innovation Commons was set up after the introduction of CityUs new Discovery-enriched Curriculum (DEC) in 2012. The Innovation Commons, which is collaboratively established by the Knowledge Transfer Office, the Library, the Office of Education Development and Gateway Education, and the School of Law, is currently located at the Library. The facility is open to students and other campus users to exchange and develop their ideas.The Innovation Commons provides co-working spaces for individuals or start-ups to get their business off the ground. There are two workstations for patent search, two workstations for group discussion and idea exchange as well as a 70’ interactive eBoard Touch Screen panel for presentations. Free professional consultations with Patent Attorneys from Marks and Clerk are available to student innovators at the Innovation Commons.', 1524189600, 100, '60', 'Personal Training', 'Intermediate', 0),
(20, 'Ice Skating Promotion Day', 'Ice Skating Promotion', '/CodeIgniter/images/seiko.png', 'The calibers are considered high beat because normal mechanical movements beat six to eight times per second, and higher beat makes the watch more resistant to shock, thus achieving the high accuracy.In 2009, Seiko released the new 10 beat caliber 9S85, which is a completely new designed of the previous high beat caliber. The new caliber also met the Grand Seiko Standard, a chronometer certification that is more strict than the Chronometer Certificate in Switzerland.', 'In 1978, Seiko released the Twin Quartz watch to address the impact of temperature on the frequency of the quartz crystal oscillator, which put a limitation on the accuracy of quartz watches. Seiko put a second crystal in the watch that is linked with a processor which detects the change in temperature and signals the main oscillator to compensate. The result was a huge improvement in the watch’s accuracy from 5 seconds per month to 5 seconds per year. In 1988, Seiko combined automatic and electric watches, creating with Seiko Kinetic, a movement that is powered by the movements of the user, converting the energy to electricity for the quartz movement.', 1524277800, 100, '85', 'Personal Training', 'Let me try', 1);

-- --------------------------------------------------------

--
-- Table structure for table `session_organizer`
--

DROP TABLE IF EXISTS `session_organizer`;
CREATE TABLE `session_organizer` (
  `session_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `organizer_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session_organizer`
--

INSERT INTO `session_organizer` (`session_id`, `organizer_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(1, 11),
(11, 11),
(2, 12),
(12, 12),
(3, 13),
(13, 13),
(4, 14),
(13, 14),
(5, 15),
(13, 15),
(6, 16),
(13, 16),
(7, 17),
(13, 17),
(8, 18),
(18, 18),
(9, 19),
(19, 19),
(10, 20),
(20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `session_tag`
--

DROP TABLE IF EXISTS `session_tag`;
CREATE TABLE `session_tag` (
  `session_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `tag_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session_tag`
--

INSERT INTO `session_tag` (`session_id`, `tag_id`) VALUES
(1, 1),
(7, 1),
(2, 2),
(7, 2),
(3, 3),
(6, 3),
(7, 3),
(14, 3),
(4, 4),
(7, 4),
(16, 5),
(7, 6),
(13, 6),
(15, 6),
(20, 7),
(7, 8),
(18, 8),
(5, 9),
(8, 9),
(17, 10),
(9, 11),
(12, 11),
(7, 12),
(10, 12),
(11, 12),
(19, 13),
(1, 14),
(2, 14),
(3, 14),
(7, 14),
(9, 14),
(15, 14),
(19, 14);

-- --------------------------------------------------------

--
-- Table structure for table `session_trainer`
--

DROP TABLE IF EXISTS `session_trainer`;
CREATE TABLE `session_trainer` (
  `session_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `trainer_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session_trainer`
--

INSERT INTO `session_trainer` (`session_id`, `trainer_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(1, 11),
(11, 11),
(0, 12),
(12, 12),
(3, 13),
(13, 13),
(4, 14),
(13, 14),
(5, 15),
(13, 15),
(6, 16),
(13, 16),
(7, 17),
(13, 17),
(8, 18),
(18, 18),
(9, 19),
(19, 19),
(10, 20),
(20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `session_user`
--

DROP TABLE IF EXISTS `session_user`;
CREATE TABLE `session_user` (
  `session_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `booking_number` varchar(64) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session_user`
--

INSERT INTO `session_user` (`session_id`, `user_id`, `booking_number`) VALUES
(1, 1, 'bk00001'),
(2, 2, 'bk00002'),
(3, 3, 'bk00003'),
(4, 4, 'bk00004'),
(5, 5, 'bk00005'),
(6, 6, 'bk00006'),
(7, 7, 'bk00007'),
(8, 8, 'bk00008'),
(9, 9, 'bk00009'),
(10, 10, 'bk00010'),
(11, 11, 'bk00011'),
(12, 12, 'bk00012'),
(13, 13, 'bk00013'),
(14, 14, 'bk00014'),
(15, 15, 'bk00015'),
(16, 16, 'bk00016'),
(17, 17, 'bk00017'),
(18, 18, 'bk00018'),
(19, 19, 'bk00019'),
(20, 20, 'bk00020');

-- --------------------------------------------------------

--
-- Table structure for table `session_venue`
--

DROP TABLE IF EXISTS `session_venue`;
CREATE TABLE `session_venue` (
  `session_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `venue_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session_venue`
--

INSERT INTO `session_venue` (`session_id`, `venue_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `tag_id` int(10) UNSIGNED NOT NULL,
  `tag_name` varchar(64) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_name`) VALUES
(1, 'Basketball'),
(2, 'Badminton'),
(3, 'Tennis'),
(4, 'Table Tennis'),
(5, 'Handball'),
(6, 'Volleyball'),
(7, 'Ice Skating'),
(8, 'Swimming'),
(9, 'Football'),
(10, 'Fencing'),
(11, 'Rugby'),
(12, 'Squash'),
(13, 'Sport of athletics'),
(14, 'Family activity');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
CREATE TABLE `trainer` (
  `trainer_id` int(10) UNSIGNED NOT NULL,
  `trainer_name` varchar(64) NOT NULL DEFAULT '',
  `trainer_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `trainer_name`, `trainer_description`) VALUES
(1, 'King Siu', 'Basketball Hong Kong Team coach, helps Hong Kong get the third runner up in asian competition.'),
(2, 'Lin Dan', ' Badminton champion in the world.'),
(3, 'Danny Yan', ' Tennis champion in the world.'),
(4, 'Raymond Chan', ' Table Tennis champion in the world.'),
(5, 'Kelvin Lee', ' Best Football player in the world.'),
(6, 'Eugene Tam', ' Most valuable player in tennis in the world.'),
(7, 'Pater Lam', ' Hong Kong team coach in athletics.'),
(8, 'John Yuen', ' Hong Kong team coach in football.'),
(9, 'Sunny Kwok', ' Hong Kong Rugby team member. He have a lot of experience about the Rugby competition.'),
(10, 'Link Ng', ' Hong Kong Squash Team member.'),
(11, 'Andrea Leung', ' Most valuable player in squash in the world.'),
(12, 'Elsa Lai', ' Hong Kong Rugby team member.'),
(13, 'Heidi Wong', ' Hong Kong team trainner in Volleyball.'),
(14, 'Jay Chau', 'He have more than 20 years for teaching tennis. And also the most valuable player was taught by him,'),
(15, 'Alan Chan', ' Most valuable player in volleyball in the world.'),
(16, 'Oscar Lee', ' Hong Kong Handball team member.'),
(17, 'Jason Yeung', ' The champion in Olympic.'),
(18, 'Alex Fong', ' Hong Kong record keeper in Free Style.'),
(19, 'Tom Sham', 'Hong Kong 100m record keeper.And he was graduated in City University of Hong Kong.'),
(20, 'Scarlet Li', ' Ice skating champion in the world.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `password` varchar(128) NOT NULL DEFAULT '',
  `first_name` varchar(64) NOT NULL DEFAULT '',
  `last_name` varchar(64) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `mobile_number` varchar(32) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `first_name`, `last_name`, `email`, `mobile_number`) VALUES
(11, 'ccm00001', 'Chun Ming', 'Chan', 'ccm9633@ggmail.com', '52695147'),
(12, 'wsk123456', 'Siu Ka', 'Wong', 'wsk0411@ggmail.com', '54864174'),
(13, 'lky00987', 'Ka Yan', 'Lee', 'lky5569@ggmail.com', '59743610'),
(14, 'lsh19033', 'Siu Ho', 'Lau', 'lsh9033@ggmail.com', '64898785'),
(8, 'fky34567', 'Ka Yau', 'Fong', 'fky064@ggmail.com', '55879701'),
(9, 'fkm98765', 'Ka Ming', 'Fong', 'fkm8941@ggmail.com', '69602339'),
(10, 'ltf34569', 'Tai Fai', 'Lee', 'ltf4444@ggmail.com', '66869891'),
(15, 'ltc97810', 'Tsz Chun', 'Lau', 'ltc9781@ggmail.com', '96868328'),
(16, 'lkf08527', 'Ka Fai', 'Lee', 'lkf8527@ggmail.com', '56834824'),
(1, 'jojo0098chan', 'Tai Man', 'Chan', 'chm0098@ymail.com', '66259984'),
(2, 'wsm00401', 'Siu Ming', 'Wong', 'wsm0401@ggmail.com', '55238869'),
(3, 'asdf0012', 'Tai Sing', 'Cheung', 'cts@kmail.com', '94684641'),
(4, 'qwe12345', 'Siu Fai', 'Chan', 'csf001@ggmail.com', '55174200'),
(5, 'hjk01234', 'Ka Man', 'Kong', 'kkm1324@ggmail.com', '54699436'),
(6, 'xyz56789', 'Hoi Yee', 'Wong', 'whyisme@ggmail.com', '99142747'),
(7, 'ctf01234', 'Tai Fai', 'Chan', 'ctf666@ggmail.com', '90520491'),
(17, 'khk09962', 'Ho Ka', 'Kwok', 'khk9962@smail.com', '56428357'),
(18, 'kkt00565', 'Ka Ting', 'Kwok', 'kkt565@htmail.com', '55314186'),
(19, 'ckh08037', 'Ka Ho', 'Chan', 'ckh8037@ttmail.com', '53365386'),
(20, 'lht03323', 'Hoi Tung', 'Lee', 'lht3323@ymail.com', '98214829');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE `venue` (
  `venue_id` int(10) UNSIGNED NOT NULL,
  `venue_name` varchar(256) NOT NULL DEFAULT '',
  `city` varchar(64) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_name`, `city`) VALUES
(1, 'Chun Wah Road Sports Centre', 'Kowloon'),
(2, 'Hong Kong Coliseum', 'Kowloon'),
(3, 'Bowen Road Tennis Court', 'Hong Kong'),
(4, 'Kwun Chung Sports Centre', 'Kowloon'),
(5, 'Hiu Ming Street Playgroung', 'Kowloon'),
(6, 'Sin Fat Road Tennis Courts', 'Kowloon'),
(7, 'Hung Hom Municipal Services Building Sports Centre', 'Kowloon'),
(8, 'Hong Ning Road Recreation Ground', 'Kowloon'),
(9, 'Kwong Fuk Football Ground ', 'New Territories'),
(10, 'Tai Wo Sports Centre', 'New Territories'),
(11, 'Lung Sum Avenue Sports Centre', 'New Territories'),
(12, 'Kwong Fuk Football Ground ', 'New Territories'),
(13, 'Kowloon Bay Sports Centre', 'Kowloon'),
(14, 'Tai Po Sports Ground', 'New Territories'),
(15, 'Harbour Road Sports Centre', 'Hong Kong'),
(16, 'Yuen Wo Playground', 'New Territories'),
(17, 'Ho Man Tin Sports Centre', 'Kowloon'),
(18, 'Kennedy Town Swimming Pool', 'Hong Kong'),
(19, 'Hammer Hill Road Sports Ground', 'Kowloon'),
(20, 'Mega ICE', 'Kowloon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`organizer_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `session_organizer`
--
ALTER TABLE `session_organizer`
  ADD PRIMARY KEY (`organizer_id`,`session_id`);

--
-- Indexes for table `session_tag`
--
ALTER TABLE `session_tag`
  ADD PRIMARY KEY (`tag_id`,`session_id`);

--
-- Indexes for table `session_trainer`
--
ALTER TABLE `session_trainer`
  ADD PRIMARY KEY (`trainer_id`,`session_id`);

--
-- Indexes for table `session_user`
--
ALTER TABLE `session_user`
  ADD PRIMARY KEY (`user_id`,`session_id`);

--
-- Indexes for table `session_venue`
--
ALTER TABLE `session_venue`
  ADD PRIMARY KEY (`venue_id`,`session_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `organizer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
