<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             TRAVIANZ                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (TravianZ)                                 //
//                              - TravianZ = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//                                Adding tasks, constructions and artefact  by: Armando             //
//                                Modified , added , fixed , implementd  by: Shadow and ronix       //
//////////////////////////////////////////////////////////////////////////////////////////////////////
									//                         //
									//         SLOVENČINA     //
									//      Author: Vilk      //
									//     Adding: Vilk      //
									/////////////////////////////

//MAIN MENU
define("TRIBE1","Šlachta");
define("TRIBE2","Ľud");
define("TRIBE3","Zbojníci");
define("TRIBE4","Príroda");
define("TRIBE5","Maďari");
define("TRIBE6","Monštrá");

define("HOME","Domovská stránka");
define("INSTRUCT","Pokyny");
define("ADMIN_PANEL","Admin panel");
define("MASS_MESSAGE","Hromadná správa");
define("LOGOUT","Odhlásiť");
define("PROFIL","Profil");
define("SUPPORT","Podpora");
define("UPDATE_T_10","Aktualizovať 10 najlepších");
define("SYSTEM_MESSAGE","Systémová správa");
define("TRAVIAN_PLUS","Universe <b><span class=\"plus_g\">Plus</span></span></b>");
define("CONTACT","Kontaktujte nás!");
define("GAME_RULES","Pravidlá hry");

//MENU
define("REG","Registrovať");
define("FÓRUM","Fórum");
define("CHAT","Chat");
define("IMPRINT","Tlač");
define("MORE_LINKS","Viac odkazov");
define("TOUR","Prehliadka hry");


//ERRORS
define("USRNM_EMPTY","(Používateľské meno je prázdne)");
define("USRNM_TAKEN","(Názov sa už používa.)");
define("USRNM_SHORT","(min. ".USRNM_MIN_LENGTH." čísla)");
define("USRNM_CHAR","(Neplatné znaky)");
define("PW_EMPTY","(Heslo je prázdne)");
define("PW_SHORT","(min. ".PW_MIN_LENGTH." čísla)");
define("PW_INSECURE","(Heslo je nezabezpečené. Vyberte si bezpečnejšie.)");
define("EMAIL_EMPTY","(E-mail je prázdny)");
define("EMAIL_INVALID","(Neplatná e-mailová adresa)");
define("EMAIL_TAKEN","(E-mail sa už používa)");
define("TRIBE_EMPTY","<li>Vyberte kmeň.</li>");
define("AGREE_ERROR","<li>Pre registráciu musíte súhlasiť s pravidlami hry a všeobecnými podmienkami.</li>");
define("LOGIN_USR_EMPTY","Zadajte meno.");
define("LOGIN_PASS_EMPTY","Zadajte heslo.");
define("EMAIL_ERROR","E-mail sa nezhoduje s existujúcim");
define("PASS_MISMATCH","Heslá sa nezhodujú");
define("ALLI_OWNER","Pred odstránením určte vlastníka aliancie");
define("SIT_ERROR","Sitter je už nastavený alebo sa hráč nenašiel");
define("USR_NT_FOUND","Názov neexistuje.");
define("LOGIN_PW_ERROR","Heslo je nesprávne.");
define("WEL_TOPIC","Užitočné tipy a informácie ");
define("ATAG_EMPTY","Prázdna značka");
define("ANAME_EMPTY","Name prázdne");
define("ATAG_EXIST","Značka prijatá");
define("ANAME_EXIST","Názov prijatý");
define("ALREADY_ALLY_MEMBER","Už ste v aliancii");
define("ALLY_TOO_LOW", "Musíte mať veľvyslanectvo úrovne 3 alebo vyššej");
define("USER_NOT_IN_YOUR_ALLY","Tento používateľ nie je vo vašej aliancii!");
define("CANT_EDIT_YOUR_PERMISSIONS","Nemôžete upravovať svoje vlastné povolenia!");
define("CANT_EDIT_LEADER_PERMISSIONS","Povolenia vodcu Aliancie nie je možné upravovať!");
define("NO_PERMISSION", "Nemáte dostatok povolení!");
define("NAME_OR_DIPL_EMPTY", "Meno alebo diplomacia prázdne");
define("ALLY_DOESNT_EXISTS","Aliancia neexistuje");
define("CANNOT_INVITE_SAME_ALLY","Nemôžete pozvať svoju vlastnú alianciu");
define("WRONG_DIPLOMACY","Zlý výber");
define("INVITE_ALREADY_SENT","Buď ste už poslali pakt tejto aliancii, oni ju poslali tej vašej, alebo už s nimi máte pakt");
define("INVITE_SENT","Pozvánka bola odoslaná");
define("DECLARED_WAR_ON","vyhlásil vojnu");
define("OFFERED_NON_AGGRESION_PACT_TO","ponúkol pakt o neútočení");
define("OFFERED_CONFED_TO","ponúkol konfederáciu");
define("ALLY_TOO_MUCH_PACTS","Buď nemôžete ponúknuť viac paktov tohto druhu, alebo táto aliancia dosiahla limit pre tento druh patcov");
define("ALLY_PERMISSIONS_UPDATED","Povolenia aktualizované");
define("ALLY_FORUM_LINK_UPDATED", "Odkaz na fórum bol aktualizovaný");
define("NO_FORUMS_YET","Zatiaľ neexistujú žiadne fóra.");
define("ALLY_USER_KICKED"," bol vylúčený z aliancie");
define("NOT_OPENED_YET","Server sa ešte nespustil.");
define("REGISTER_CLOSED","Registr je zatvorený. Na tento server sa nemôžete zaregistrovať.");
define("NAME_EMPTY","Vložte meno");
define("NAME_NO_EXIST","Neexistuje žiadny používateľ s menom ");
define("ID_NO_EXIST","Neexistuje žiadny užívateľ s id ");
define("SAME_NAME","Nemôžete sa pozvať");
define("ALREADY_INVITED"," už pozvaný");
define("ALREADY_IN_ALLY"," je už v tejto aliancii");
define("ALREADY_IN_AN_ALLY"," je už v aliancii");
define("NAME_OR_TAG_CHANGED","Názov alebo štítok zmenený");
define("VAC_MODE_WRONG_DAYS","Vložili ste nesprávny počet dní");

//COPYRIGHT
define("TRAVIAN_COPYRIGHT","Universe kopirajt");

//BUILD.TPL
define("CUR_PROD","Aktuálna produkcia");
define("NEXT_PROD","Výroba na úrovni ");
define("CONSTRUCT_BUILD","Postaviť budovu");

//BUILDINGS
define("B1","Drevorubač");
define("B1_DESC","Drevorubač rúbe stromy, aby vyrobil rezivo. Čím ďalej drevorubač vytiahnete, tým viac reziva vyprodukuje.");
define("B2","Hlinená jama");
define("B2_DESC","Vyrába sa tu hlina. Zvýšením jeho úrovne zvýšite produkciu hliny.");
define("B3","Železná baňa");
define("B3_DESC","Baníci tu vyrábajú vzácne železo. Zvýšením úrovne bane zvýšite produkciu železa.");
define("B4","Obilie");
define("B4_DESC","Tu sa vyrába jedlo vašej populácie. Zvyšovaním úrovne farmy zvyšujete produkciu obilia.");

//DORF1
define("LUMBER","Drevo");
define("CLAY","Hlina");
define("IRON","Železo");
define("CROP","Obilie");
define("LEVEL","Level");
define("CROP_COM",CROP." consumption");
define("PER_HR","za hodinu");
define("PROD_HEADER","Výroba");
define("MULTI_V_HEADER","Dediny");
define("ANNOUNCEMENT","Oznámenie");
define("GO2MY_VILLAGE","Choď do mojej dediny");
define("VILLAGE_CENTER","Centrum dediny");
define("FINISH_GOLD","Dokončiť okamžite všetky stavebné a výskumné zákazky v tejto dedine za 2 zlaté?");
define("WAITING_LOOP","(čakacia slučka)");
define("CROP_NEGATIVE","Vaša produkcia obilia je negatívna, nikdy nedosiahnete množstvo požadovaných zdrojov.");
define("HRS","(hod.)");
define("DONE_AT","hotovo za");
define("CANCEL","zrušiť");
define("LOYALTY","Vernosť");
define("CALCULATED_IN","Vypočítané za");
define("SEVER_TIME","Čas servera:");
define("HI","HI");
define("P_IN","za");

//QUEST
define("Q_CONTINUE","Pokračovať ďalšou úlohou.");
define("Q_REWARD","Vaša odmena:");
define("Q_BUTN","dokončite úlohu");
define("Q0","Vitajte v ");
define("Q0_DESC","Vidím, že ste sa stali náčelníkom tejto malej dediny. Prvých pár dní budem vaším radcom a nikdy neopustím vašu (pravú) stranu.");
define("Q0_OPT1","K prvej úlohe.");
define("Q0_OPT2","Pozrite sa sami.");
define("Q0_OPT3","Nehrajte žiadne úlohy.");

define("Q1","Úloha 1: Drevorubač");
define("Q1_DESC","V okolí vašej dediny sú štyri zelené lesy. Na jednom z nich postavte drevorubača. Drevo je dôležitým zdrojom pre našu novú osadu.");
define("Q1_ORDER","Objednávka:<\/p>Zostrojte drevorubača.");
define("Q1_RESP","Áno, týmto spôsobom získate viac reziva. Trochu som pomohol a objednávku som okamžite dokončil.");
define("Q1_REWARD","Drevorubač okamžite dokončený.");

define("Q2","Úloha 2: Orez");
define("Q2_DESC","Teraz sú vaši poddaní hladní po celodennej práci. Rozšírte ornú pôdu, aby ste zlepšili zásobu poddaných. Vráťte sa sem, keď bude budova dokončená.");
define("Q2_ORDER","Poradie:<\/p>Rozšírte jednu ornú pôdu.");
define("Q2_RESP","Výborne. Teraz majú vaši poddaní opäť dosť jedla...");
define("Q2_REWARD","Vaša odmena:<\/p>1 deň Universe");

define("Q3","Úloha 3: Názov vašej dediny");
define("Q3_DESC","Kreatívny ako ste, môžete svojej dedine udeliť konečný názov.<br \/><br \/>Kliknite na 'profil' v ľavom menu a potom vyberte 'zmeniť profil'... ");
define("Q3_ORDER","Objednávka:<\/p>Zmeňte názov svojej dediny na niečo pekné.");
define("Q3_RESP","Wow, skvelé meno pre ich dedinu. Mohlo to byť meno mojej dediny!...");

define("Q4","Úloha 4: Iní hráči");
define("Q4_DESC","V ". SERVER_NAME ." hráte spolu s miliardami ďalších hráčov. Kliknite na 'štatistiky' v hornom menu, aby ste si vyhľadali svoje hodnotenie a zadajte ho sem.");
define("Q4_ORDER","Poradie:<\/p>Vyhľadajte svoju pozíciu v štatistike a zadajte ju sem.");
define("Q4_BUTN","dokončite úlohu");
define("Q4_RESP","Presne tak! To je vaša hodnosť.");

define("Q5","Úloha 5: 2 stavebné zákazky");
define("Q5_DESC","Postav železnú baňu a hlinu. Železa a hliny nemá človek nikdy dosť.");
define("Q5_ORDER","Poradie:<\/p><ul><li>Predĺžte jednu železnú baňu.<\/li><li>Predĺžte jednu hlinenú jamu.<\/li><\/ul>") ;
define("Q5_RESP","Ako ste si všimli, stavebné zákazky trvajú dosť dlho. Svet ".SERVER_NAME." sa bude ďalej točiť, aj keď budete offline. Aj o pár mesiacov budete môcť objaviť veľa nových vecí .<br \/><br \/>Najlepšie je občas skontrolovať svoju dedinu a dať vám nové úlohy, ktoré musíte urobiť.");

define("Q6","Úloha 6: Správy");
define("Q6_DESC","Pomocou systému správ môžete hovoriť s ostatnými hráčmi. Poslal som ti správu. Prečítajte si to a vráťte sa sem.<br \/><br \/>P.S. Nezabudnite: vľavo hlásenia, vpravo správy.");
define("Q6_ORDER","Objednávka:<\/p>Prečítajte si novú správu.");
define("Q6_RESP","Dostali ste to? Veľmi dobre.<br \/><br \/>Tu je nejaké zlato. So zlatom môžete robiť niekoľko vecí, napr. rozšíriť svoje v ponuke na ľavej strane.");
define("Q6_RESP1","-Zúčtujte alebo zvýšte produkciu zdrojov. Ak to chcete urobiť, kliknite na ");
define("Q6_RESP2","v ľavom menu.");
define("Q6_SUBJECT","Správa od správcu úloh");
define("Q6_MESSAGE","Máte byť informovaní, že u správcu úloh na vás čaká pekná odmena.<br /><br />Tip: Správa bola vygenerovaná automaticky. Odpoveď nie je potrebná.");

define("Q7","Úloha 7: Každý jeden!");
define("Q7_DESC","Teraz by sme mali trochu zvýšiť vašu produkciu surovín. Postavte ďalšieho drevorubača, hlinenú jamu, železnú baňu a ornú pôdu na úroveň 1.");
define("Q7_ORDER","Poradie:<\/p>Rozšírte ešte jednu z každej dlaždice zdroja na úroveň 1.");
define("Q7_RESP","Veľmi dobre, veľký rozvoj produkcie zdrojov.");

define("Q8","Úloha 8: Obrovská armáda!");
define("Q8_DESC","Teraz mám pre vás veľmi špeciálnu úlohu. Som hladný. Dajte mi 200 úrody!<br \/><br \/>Na oplátku sa pokúsim zorganizovať obrovskú armádu na ochranu vaša dedina.");
define("Q8_ORDER","Objednávka:<\/p>Pošlite 200 orezov správcovi úloh.");
define("Q8_BUTN","Odoslať orezanie");
define("Q8_NOCROP","No Enough Crop!");

define("Q9","Úloha 9: Všetko k 1.");
define("Q9_DESC","V Traviane je vždy čo robiť! Kým čakáte na príchod obrovskej armády, teraz by sme mali trochu zvýšiť vašu produkciu surovín. Rozšírte všetky svoje dlaždice zdrojov na úroveň 1.");
define("Q9_ORDER","Poradie:<\/p>Rozšírte všetky dlaždice zdrojov na úroveň 1.");
define("Q9_RESP","Výborne, vaša produkcia surovín len prosperuje.<br \/><br \/>Čoskoro môžeme začať s výstavbou budov v dedine.");

define("Q10","Úloha 10: Holubica mieru");
define("Q10_DESC","Prvé dni po registrácii ste chránení pred útokmi ostatných hráčov. Ak chcete zistiť, ako dlho táto ochrana vydrží, pridajte do svojho profilu kód <b>[#0]<\/b> ");
define("Q10_ORDER","Objednávka:<\/p>Napíšte kód <b>[#0]<\/b> do svojho profilu tak, že ho pridáte do jedného z dvoch polí popisu.");
define("Q10_RESP","Výborne! Teraz každý vidí, aký veľký bojovník svet oslovuje.");
define("Q10_REWARD","Vaša odmena:<\/p>2 dni Travian");

define("Q11","Úloha 11: Susedia!");
define("Q11_DESC","Okolo vás je veľa rôznych dedín. Jedna z nich je pomenovaná. ");
define("Q11_DESC1"," Kliknite na 'mapu' v hlavičkovom menu a vyhľadajte danú dedinu. Názvy dedín vašich susedov uvidíte, keď na ktorúkoľvek z nich umiestnite kurzor myši.");
define("Q11_ORDER","Poradie:</p>Vyhľadajte súradnice ");
define("Q11_ORDER1","a zadajte ich tu.");
define("Q11_RESP","Presne tak ");
define("Q11_RESP1"," Dedina! Toľko zdrojov, koľko sa dostanete do tejto dediny. No, skoro toľko ...");
define("Q11_BUTN","dokončite úlohu");

define("Q12","Úloha 12: Úkryt");
define("Q12_DESC","Je čas postaviť úkryt. Svet <?php echo SERVER_NAME; ?> je nebezpečný.<br \/><br \/>Mnoho hráčov žije kradnutím zdrojov iných hráčov. Postavte si štrbinu, aby ste skryli niektoré zo svojich zdrojov pred nepriateľmi.");
define("Q12_ORDER","Order:<\/p>Postavte úkryt");
define("Q12_RESP","Výborne, teraz je pre vašich podlých spoluhráčov oveľa ťažšie vyplieniť vašu dedinu.<br \/><br \/>Ak budú napadnutí, vaši dedinčania skryjú zdroje v úkryte sami.");

define("Q13","Úloha 13: Do dvoch.");
define("Q13_DESC","V <?php echo SERVER_NAME; ?> je vždy čo robiť! Rozšírte jedného drevorubača, jednu hlinenú jamu, jednu železnú baňu a jednu poľnohospodársku pôdu na úroveň 2 každý.");
define("Q13_ORDER","Poradie:<\/p>Rozšírte jednu z každej dlaždice zdroja na úroveň 2.");
define("Q13_RESP","Výborne, vaša dedina rastie a prosperuje!");

define("Q14","Úloha 14: Pokyny");
define("Q14_DESC","V herných pokynoch nájdete krátke informačné texty o rôznych budovách a typoch jednotiek.<br \/><br \/>Kliknutím na 'instructions' vľavo zistíte, koľko je dreva potrebné pre kasárne.");
define("Q14_ORDER","Order:<\/p>Zadajte, koľko stoja kasárne");
define("Q14_BUTN","dokončit úlohu");
define("Q14_RESP","Presne tak! Kasárne stoja 210 reziva.");

define("Q15","Úloha 15: Hlavná budova");
define("Q15_DESC","Vaši stavitelia potrebujú hlavnú budovu úrovne 3, aby mohli postaviť dôležité budovy ako trhovisko alebo kasárne.");
define("Q15_ORDER","Poradie:<\/p>Rozšírte svoju hlavnú budovu na úroveň 3.");
define("Q15_RESP","Výborne. Hlavná budova úrovne 3 je dokončená.<br><br>Vďaka tejto inovácii vaši majstri stavajú nielen viac typov budov, ale aj rýchlejšie.");

define("Q16","Úloha 16: Pokročilé!");
define("Q16_DESC","Znova si pozrite svoju pozíciu v štatistikách hráčov a vychutnajte si svoj pokrok.");
define("Q16_ORDER","Poradie:<\/p>Vyhľadajte svoju pozíciu v štatistike a zadajte ju sem.");
define("Q16_RESP","Výborne! To je vaša aktuálna hodnosť.");

define("Q17","Úloha 17: Zbrane alebo cesto");
define("Q17_DESC","Teraz sa musíte rozhodnúť: Buď obchodujte pokojne, alebo sa staňte obávaným bojovníkom.<br \/><br \/>Pre trhovisko potrebujete sýpku, pre kasárne potrebujete zhromaždisko ");
define("Q17_BUTN","Ekonomika");
define("Q17_BUTN1","Vojenské");

define("Q18","Úloha 18: Vojenské");
define("Q18_DESC","Odvážne rozhodnutie. Aby ste mohli vyslať jednotky, potrebujete zhromaždisko.<br \/><br \/>Zhromaždisko musí byť postavené na špecifickom stavenisku. ");
define("Q18_DESC1"," stavenisko.");
define("Q18_DESC2"," sa nachádza na pravej strane hlavnej budovy, mierne pod ňou. Samotné stavenisko je zakrivené.");
define("Q18_ORDER","Poradie:<\/p>Postavte zhromaždisko.");
define("Q18_RESP","Vaše zhromaždisko bolo postavené! Dobrý krok k svetovláde!");

define("Q19","Úloha 19: Kasárne");
define("Q19_DESC","Teraz máte hlavnú budovu úrovne 3 a zhromaždisko. To znamená, že všetky predpoklady na stavbu kasární sú splnené.<br><br>Kasárne môžete použiť na výcvik jednotiek na boj." );
define("Q19_ORDER","Poradie:<\/p>Postavte kasárne.");
define("Q19_RESP","Výborne... Zišli sa najlepší inštruktori z celej krajiny, aby vycvičili bojové schopnosti vašich mužov do najvyššej formy.");

define("Q20","Úloha 20: Trén.");
define("Q20_DESC","Teraz, keď máte kasárne, môžete začať trénovať jednotky. Trénujte dvoch ");
define("Q20_ORDER","Prosím trénujte 2");
define("Q20_RESP","Základ pre vašu slávnu armádu bol položený.<br \/><br \/>Pred odoslaním svojej armády na plienenie by ste sa mali poradiť s.");
define("Q20_RESP1","Bojový simulátor");
define("Q20_RESP2","aby ste videli, koľko vojakov potrebujete na úspešný boj s jednou krysou bez strát.");

define("Q21","Úloha 18: Hospodárnosť");
define("Q21_DESC","Obchod a ekonomika bola vaša voľba. Zlaté časy vás určite čakajú!");
define("Q21_ORDER","Poradie:<\/p>Postavte sýpku.");
define("Q21_RESP","Výborne! So sýpkou môžete uskladniť viac pšenice.");

define("Q22","Úloha 19: Sklad");
define("Q22_DESC","Netreba šetriť iba úrodu. Ak nie sú správne uskladnené, môžu vyjsť nazmar aj iné zdroje. Vybudujte sklad!");
define("Q22_ORDER","Poradie:<\/p>Postavte sklad.");
define("Q22_RESP",";Výborne, váš sklad je kompletný...&rdquo;<\/i><br \/>Teraz ste splnili všetky predpoklady potrebné na vytvorenie Marketplace.");

define("Q23","Úloha 20: Marketplace.");
define("Q23_DESC",";Vybudujte trhovisko, aby ste mohli obchodovať so svojimi kolegami.");
define("Q23_ORDER","Objednávka:<\/p>Vytvorte si prosím Marketplace.");
define("Q23_RESP",";Tržisko bolo dokončené. Teraz môžete vytvárať vlastné ponuky a prijímať zahraničné ponuky! Pri vytváraní vlastných ponúk by ste mali myslieť na to, aby ste ponúkli to, čo ostatní hráči najviac potrebujú, aby získali väčší zisk.") ;

define("Q24","Úloha 21: Všetko k 2.");
define("Q24_DESC","Teraz by sme mali trochu zvýšiť vašu produkciu surovín. Postavte ďalšieho drevorubača, hlinenú jamu, železnú baňu a ornú pôdu na úroveň 1.");
define("Q24_ORDER","Poradie:<\/p>Rozšírte všetky dlaždice zdrojov na úroveň 2.");
define("Q24_RESP","Blahoželáme! Vaša dedina rastie a prosperuje...");

define("Q28","Úloha 22: Aliancia.");
define("Q28_DESC","Tímová práca je v Traviane dôležitá. Hráči, ktorí spolupracujú, sa organizujú do aliancií. Získajte pozvánku od aliancie vo vašom regióne a pripojte sa k tejto aliancii. Prípadne si môžete založiť vlastnú alianciu. Ak to chcete urobiť, musíte potrebujete veľvyslanectvo úrovne 3.");
define("Q28_ORDER","Poradie:<\/p>Pripojte sa k aliancii alebo si ju založte sami.");
define("Q28_RESP","Je to dobré! Teraz ste v zväzku s názvom");
define("Q28_RESP1"," a ste členom ich aliancie s tým rýchlejšie budete postupovať...");

define("Q29","Úloha 23: Hlavná budova po úroveň 5");
define("Q29_DESC","Aby ste mohli postaviť palác alebo rezidenciu, budete potrebovať hlavnú budovu na úrovni 5.");
define("Q29_ORDER","Poradie:<\/p>Vylepšite svoju hlavnú budovu na úroveň 5.");
define("Q29_RESP","Hlavná budova je teraz na úrovni 5 a môžete si postaviť palác alebo rezidenciu...");

define("Q30","Úloha 24: Sýpka na úroveň 3.");
define("Q30_DESC","Aby ste nestratili úrodu, mali by ste upgradovať svoju sýpku.");
define("Q30_ORDER","Objednávka:<\/p>Inovujte svoju sýpku na úroveň 3.");
define("Q30_RESP","Sýpka je teraz na úrovni 3...");

define("Q31","Úloha 25: Sklad na úroveň 7");
define("Q31_DESC"," Aby ste sa uistili, že vaše zdroje nepretečú, mali by ste upgradovať svoj sklad.");
define("Q31_ORDER","Objednávka:<\/p>Inovujte svoj sklad na úroveň 7.");
define("Q31_RESP","Sklad prešiel na úroveň 7...");

define("Q32","Úloha 26: Všetci do piatich!");
define("Q32_DESC","Vždy budete potrebovať viac zdrojov. Dlaždice zdrojov sú dosť drahé, ale z dlhodobého hľadiska sa vždy vyplatia.");
define("Q32_ORDER","Poradie:<\/p>Vylepšite všetky dlaždice zdrojov na úroveň 5.");
define("Q32_RESP","Všetky zdroje sú na úrovni 5, veľmi dobré, vaša dedina rastie a prosperuje!");

define("Q33","Úloha 27: Palác alebo rezidencia?");
define("Q33_DESC","Na založenie novej dediny budete potrebovať osadníkov. Takých, ktorých si môžete vycvičiť v paláci alebo rezidencii.");
define("Q33_ORDER","Poradie:<\/p>Postavte palác alebo rezidenciu na úroveň 10.");
define("Q33_RESP","dosiahol úroveň 10, teraz môžete trénovať osadníkov a nájsť svoju druhú dedinu. Všimnite si kultúrne body...");

define("Q34","Úloha 28: 3 osadníci.");
define("Q34_DESC","Na založenie novej dediny budete potrebovať osadníkov. Môžu byť vyškolení buď v paláci alebo v rezidencii.");
define("Q34_ORDER","Poradie:<\/p>Vytrénujte 3 osadníkov.");
define("Q34_RESP","vyškolili sa 3 osadníci. Na založenie novej dediny potrebujete aspoň");
define("Q34_RESP1","kultúrne body...");

define("Q35","Úloha 29: Nová dedina.");
define("Q35_DESC","Na mape je veľa prázdnych dlaždíc. Nájdite si takú, ktorá vám vyhovuje, a nájdite novú dedinu");
define("Q35_ORDER","Poradie:<\/p>Našla sa nová dedina.");
define("Q35_RESP","Som na teba hrdý! Teraz máš dve dediny a máš všetky možnosti na vybudovanie mocnej ríše. Prajem ti veľa šťastia.");

define("Q36"," Úloha 30: Zostavte ");
define("Q36_DESC","Teraz, keď ste vycvičili pár vojakov, mali by ste postaviť ");
define("Q36_DESC1"," tiež. Zvyšuje obranu základne a vaši vojaci dostanú obranný bonus.");
define("Q36_ORDER","Poradie:<\/p>Postavte ");
define("Q36_RESP","O tom hovorím. A ");
define("Q36_RESP1"," Veľmi užitočné. Zvyšuje obranu jednotiek v dedine.");

define("Q37","Úlohy");
define("Q37_DESC","Všetky úlohy splnené!");

define("OPT3","Prehľad zdrojov");
define("T","Vaše dodávky zdrojov");
define("T1","Doručenie");
define("T2","Dodacia lehota");
define("T3","Stav");
define("T4","načítať");
define("T5","vyzdvihnuté");
define("T6","na počkanie");
define("T7","1 deň Universe");
define("T8","2 dni Universe");

//Quest 25
define("Q25_7","Úloha 7: Susedia!");
define("Q25_7_DESC","Okolo vás je veľa rôznych dedín. Jedna z nich je pomenovaná. ");
define("Q25_7_DESC1","Kliknite na 'Mapa' v hlavnom menu a vyhľadajte danú dedinu. Názvy dedín vašich susedov sa zobrazia, keď na ktorúkoľvek z nich umiestnite kurzor myši.");
define("Q25_7_ORDER","<\/p><b>Poradie:</b><br>Vyhľadajte súradnice ");
define("Q25_7_ORDER1","a zadajte ich tu.");
define("Q25_7_RESP","Presne tak, tam ");
define("Q25_7_RESP1"," Dedina! Toľko zdrojov, koľko dosiahnete do tejto dediny. No, skoro toľko ...");

define("Q25_8","Úloha 8: Obrovská armáda!");
define("Q25_8_DESC","Teraz mám pre vás veľmi špeciálnu úlohu. Som hladný. Dajte mi 200 úrody!<br \/><br \/>Na oplátku sa pokúsim zorganizovať obrovskú armádu na ochranu vaša dedina.");
define("Q25_8_ORDER","Objednávka:<\/p>Pošlite 200 obilia správcovi úloh.");
define("Q25_8_BUTN","Odoslať obilie");
define("Q25_8_NOCROP","Nedostatok Obilie!");

define("Q25_9","Úloha 9: Každý jeden!");
define("Q25_9_DESC","V " . SERVER_NAME . " je vždy čo robiť! Kým čakáte na svoju novú armádu,<br \/><br \/>rozšírte o jedného drevorubača, hlinenú jamu, železnú baňu a orná pôda na úroveň 1");
define("Q25_9_ORDER","Poradie:<\/p>Rozšírte ešte jednu z každej dlaždice zdroja na úroveň 1.");
define("Q25_9_RESP","Veľmi dobre, skvelý rozvoj produkcie zdrojov.");

define("Q25_10","Úloha 10: Už čoskoro!");
define("Q25_10_DESC","Teraz je čas na malú prestávku, kým nepríde obrovská armáda, ktorú som vám poslal.<br \/><br \/>Dovtedy môžete preskúmať mapu alebo rozšíriť niekoľko dlaždíc zdrojov.") ;
define("Q25_10_ORDER","Pokyn:<\/p>Počkajte, kým dorazí armáda správcu úloh");
define("Q25_10_RESP","Teraz dorazila obrovská armáda od správcu úloh, aby ochránila vašu dedinu");
define("Q25_10_REWARD","Vaša odmena:<\/p>2 dni viac Universu");

define("Q25_11","Úloha 11: Reporty");
define("Q25_11_DESC","Vždy, keď sa s vaším účtom stane niečo dôležité, dostanete hlásenie.<br \/><br \/>Zobrazíte ich kliknutím na ľavú polovicu 5. tlačidla (zľava doprava Prečítajte si správu a vráťte sa sem.");
define("Q25_11_ORDER","Poradie:<\/p>Prečítajte si svoj najnovší prehľad.");
define("Q25_11_RESP","Dostali ste to? Veľmi dobre. Tu je vaša odmena.");

define("Q25_12","Úloha 12: Všetko k 1.");
define("Q25_12_DESC","Teraz by sme mali trochu zvýšiť vašu produkciu zdrojov.");
define("Q25_12_ORDER","Poradie:<\/p>Rozšírte všetky dlaždice zdrojov na úroveň 1.");
define("Q25_12_RESP","Výborne, vaša produkcia zdrojov len prosperuje.<br \/><br \/>Čoskoro môžeme začať s výstavbou budov v dedine.");

define("Q25_13","Úloha 13: Holubica mieru");
define("Q25_13_DESC","Prvé dni po registrácii ste chránení pred útokmi ostatných hráčov. Ak chcete zistiť, ako dlho táto ochrana vydrží, pridajte do svojho profilu kód <b>[#0]<\/b> ");
define("Q25_13_ORDER","Objednávka:<\/p>Napíšte kód <b>[#0]<\/b> do svojho profilu tak, že ho pridáte do jedného z dvoch polí popisu.");
define("Q25_13_RESP","Výborne! Teraz každý vidí, aký veľký bojovník svet oslovuje.");

define("Q25_14","Úloha 14: Úkryt");
define("Q25_14_DESC","Je čas postaviť úkryt. Svet <b>" . SERVER_NAME. "</b> je nebezpečný.<br \/><br \/>Mnoho hráčov žije kradnutím zdrojov iných hráčov. Postavte si úkryt, aby ste skryli niektoré zo svojich zdrojov pred nepriateľmi.");
define("Q25_14_ORDER","Poradie:<\/p>Postavte úkryt.");
define("Q25_14_RESP","Výborne je pre vašich pod2 vašuch oveľa oveľa vyplieniť dedinu.<br \/><br \>Ak budú napadnutí, vaši dedinčania skryjú zdroje v Úkryte sami.");

define("Q25_15","Úloha 15: Do dvoch.");
define("Q25_15_DESC","V <b>" . SERVER_NAME. "</b> vždy je čo robiť! Rozšírte jedného drevorubača, jednu hlinenú jamu, jednu železnú baňu a jednu poľnohospodársku pôdu na úroveň 2 každý.");
define("Q25_15_ORDER","Poradie:<\/p>Rozšírte jednu z každej dlaždice zdroja na úroveň 2.");
define("Q25_15_RESP","Výborne, vaša dedina rastie a prosperuje!");

define("Q25_16","Úloha 16: Pokyny");
define("Q25_16_DESC","V návode na hru nájdete krátke informačné texty o rôznych budovách a typoch jednotiek.<br \/><br \/>Kliknite na 'Manuál' vľavo, aby ste zistili, koľko dreva je potrebné pre kasárne.");
define("Q25_16_ORDER","Order:<\/p>Zadajte, koľko stoja kasárne");
define("Q25_16_BUTN","dokončiť úlohu");
define("Q25_16_RESP","Presne tak! Kasárne stoja 210 dreva.");

define("Q25_17","Úloha 17: Hlavná budova");
define("Q25_17_DESC","Vaši stavitelia potrebujú hlavnú budovu úrovne 3, aby mohli postaviť dôležité budovy ako trhovisko alebo kasárne.");
define("Q25_17_ORDER","Poradie:<\/p>Rozšírte svoju hlavnú budovu na úroveň 3.");
define("Q25_17_RESP","Výborne. Hlavná budova 3. úrovne je dokončená.<br><br>Vďaka tejto inovácii môžu vaši majstri stavať viac typov budov a tiež rýchlejšie.");

define("Q25_18","Úloha 18: Pokročilé!");
define("Q25_18_DESC","Znova si pozrite svoju pozíciu v hráčskych štatistikách a vychutnajte si svoj pokrok.");
define("Q25_18_ORDER","Poradie:<\/p>Vyhľadajte svoju pozíciu v štatistike a zadajte ju sem.");
define("Q25_18_RESP","Výborne! To je vaša aktuálna hodnosť.");

define("Q25_19","Úloha 19: Zbrane alebo cesto");
define("Q25_19_DESC","Teraz sa musíte rozhodnúť: Buď obchodujte pokojne, alebo sa nestaňte obchodovaným bojovníkom.<br \/><br \/>Pre trhovisko potrebujete potrebné zhromaždisko, pre kasárne potrebujete zhromaždisko ");
define("Q25_19_BUTN","Ekonomické");
define("Q25_19_BUTN1","Vojenské");

define("Q25_20","Úloha 19: Ekonomika");
define("Q25_20_DESC","Obchod a ekonomika bola vaša voľba. Zlaté časy vás určite čakajú!");
define("Q25_20_ORDER","Poradie:<\/p>Postavte sýpku.");
define("Q25_20_RESP","Výborne! So sýpkou môžete uskladniť viac pšenice.");

define("Q25_21","Úloha 20: Sklad");
define("Q25_21_DESC","Nielen úroda sa musí šetriť. Ak nie sú správne uskladnené, môžu vyjsť nazmar aj iné zdroje. Vybudujte sklad!");
define("Q25_21_ORDER","Poradie:<\/p>Postavte sklad.");
define("Q25_21_RESP",";Výborne, váš sklad je kompletný...&rdquo;<\/i><br \/>Teraz ste splnili všetky predpoklady potrebné na vytvorenie Sklad-u.");

define("Q25_22","Úloha 21: Trhovisko.");
define("Q25_22_DESC",";Vybudujte trhovisko, aby ste mohli obchodovať so svojimi kolegami.");
define("Q25_22_ORDER","Objednávka:<\/p>Vytvorte prosím Marketplace.");
define("Q25_22_RESP","Trh bol dokončený. Teraz môžete vytvárať vlastné ponuky a prijímať zahraničné ponuky! Pri vytváraní vlastných ponúk by ste mali myslieť na to, aby ste ponúkli to, čo ostatní hráči najviac potrebujú, aby získali väčší zisk.");

define("Q25_23","Úloha 19: Vojenské");
define("Q25_23_DESC","Odvážne rozhodnutie. Aby ste mohli vyslať jednotky, potrebujete zhromaždisko.<br \/><br \/>Zhromaždisko musí byť postavené na špecifickom stavenisku. ");
define("Q25_23_DESC1"," stavenisko.");
define("Q25_23_DESC2"," sa nachádza na pravej strane hlavnej budovy, mierne pod ňou. Samotné stavenisko je zakrivené.");
define("Q25_23_ORDER","Poradie:<\/p>Postavte zhromaždisko.");
define("Q25_23_RESP","Vaše zhromaždisko bolo postavené! Dobrý krok k svetovláde!");

define("Q25_24","Úloha 20: Kasárne");
define("Q25_24_DESC","Teraz máte hlavnú budovu úrovne 3 a zhromaždisko. To znamená, že všetky predpoklady na stavbu kasární sú splnené.<br><br>Kasárne môžete použiť na výcvik jednotiek na boj." );
define("Q25_24_ORDER","Objednávka:<\/p>Postavte kasárne.");
define("Q25_24_RESP","Výborne... Zišli sa najlepší inštruktori z celej krajiny, aby vycvičili bojové schopnosti vašich mužov do najvyššej formy.");

define("Q25_25","Úloha 21: Tréning.");
define("Q25_25_DESC","Teraz, keď máte kasárne, môžete začať trénovať jednotky. Vycvičte dvoch ");
define("Q25_25_ORDER","Prosím trénujte 2");
define("Q25_25_RESP","Základ pre vašu slávnu armádu bol položený.<br \/><br \/>Pred odoslaním svojej armády na plienenie by ste sa mali poradiť s");
define("Q25_25_RESP1","Bojový simulátor");
define("Q25_25_RESP2","aby ste videli, koľko vojakov potrebujete na úspešný boj s jednou krysou bez strát.");

define("Q25_26","Úloha 22: Všetko do 2.");
define("Q25_26_DESC","Teraz je opäť čas rozšíriť základné kamene moci a bohatstva! Tentoraz úroveň 1 nestačí... chvíľu to potrvá, ale nakoniec to bude stáť za to. Rozšírte všetky svoje dlaždice zdrojov na úroveň 2!");
define("Q25_26_ORDER","Poradie:<\/p>Rozšírte všetky dlaždice zdrojov na úroveň 2.");
define("Q25_26_RESP","Blahoželáme! Vaša dedina rastie a prekvitá...");

define("Q25_27","Úloha 23: Priatelia.");
define("Q25_27_DESC","Pre jedného hráča je ťažké konkurovať útočníkom. Je pre vás výhodné, ak vás majú susedia radi.<br \/><br \/>Ešte lepšie je, ak hráte spolu s priateľmi. Vedeli ste, že <img src='img/x.gif' class='gold' alt='Gold' title='Gold'> môžete zarobiť pozývaním priateľov?");
define("Q25_27_ORDER","Order:<\/p>Koľko <img src='img/x.gif' class='gold' alt='Gold' title='Zlato'> zarobíte za pozvanie priateľa ?");
define("Q25_27_RESP","Správne! Dostanete 50 <img src='img/x.gif' class='gold' alt='Gold' title='Gold'> ak má váš pozvaný priateľ 2 dediny.");

define("Q25_28","Úloha 24: Vybudujte veľvyslanectvo.");
define("Q25_28_DESC","Svet Travianu je nebezpečný. Už ste si vybudovali úkryt, ktorý vás chráni pred útočníkmi.<br \/><br \/>Dobrá aliancia vám poskytne ešte lepšiu ochranu.");
define("Q25_28_ORDER","Objednávka:<\/p>Ak chcete prijímať pozvánky od aliancií, postavte si veľvyslanectvo.");
define("Q25_28_RESP","Áno! Môžete počkať na pozvanie od aliancie alebo si vytvoriť vlastnú, ak má ambasáda úroveň 3");

define("Q25_29","Úloha 25: Aliancia.");
define("Q25_29_DESC","Tímová práca je v Traviane dôležitá. Hráči, ktorí spolupracujú, sa organizujú do aliancií. Získajte pozvánku od aliancie vo vašom regióne a pripojte sa k tejto aliancii. Prípadne si môžete založiť vlastnú alianciu. Ak to chcete urobiť, musíte potrebujete veľvyslanectvo úrovne 3.");
define("Q25_29_ORDER","Poradie:<\/p>Pripojte sa k aliancii alebo si založte vlastnú alianciu.");
define("Q25_29_RESP","Výborne! Teraz ste v zväzku s názvom");
define("Q25_29_RESP1",", a ste členom ich aliancie.<br>Spoločnou prácou budete všetci napredovať rýchlejšie...");

define("Q25_30","Úlohy");
define("Q25_30_DESC","Všetky úlohy splnené!");


//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
define("U0","Hrdina");

//SLACHTA UNITS
define("U1","Legionár");
define("U2","Rytier");
define("U3","Vojak");
define("U4","Rytieri jazdci");
define("U5","Cisárovi jazdci");
define("U6","Caesarovi jazdci");
define("U7","Baranidlo");
define("U8","Ohnivý katapult");
define("U9","Senátor");
define("U10","Osadník");

//ZBOJNICI UNITS
define("U11","Clubswinger");
define("U12","Spearman");
define("U13","Axeman");
define("U14","Scout");
define("U15","Paladin");
define("U16","Teutonic Knight");
define("U17","Ram");
define("U18","Catapult");
define("U19","Chief");
define("U20","Settler");

//LUD UNITS
define("U21","Phalanx");
define("U22","Swordsman");
define("U23","Pathfinder");
define("U24","Theutates Thunder");
define("U25","Druidrider");
define("U26","Haeduan");
define("U27","Ram");
define("U28","Trebuchet");
define("U29","Chieftain");
define("U30","Osadník");
define("U99","Trap");

//NATURE UNITS
define("U31","Potkan");
define("U32","Pavúk");
define("U33","Had");
define("U34","Netopier");
define("U35","Divoká sviňa");
define("U36","Vlk");
define("U37","Medveď");
define("U38","Krokodíl");
define("U39","Tiger");
define("U40","Slon");

//NATARS UNITS
define("U41","Čípoš");
define("U42","Thorned Warrior");
define("U43","Guardsman");
define("U44","Birds Of Prey");
define("U45","Axerider");
define("U46","Maďarsky rytier");
define("U47","Vojnový slon");
define("U48","Vrhač kamenov");
define("U49","Atilla");
define("U50","Maďarský osadník");

//MONSTER UNITS
define("U51","Monster Peon");
define("U52","Monster Hunter");
define("U53","Monster Warrior");
define("U54","Ghost");
define("U55","Monster Steed");
define("U56","Monster War Steed");
define("U57","Monster Ram");
define("U58","Monster Catapult");
define("U59","Monster Chief");
define("U60","Monster Settler");

// RESOURCES
define("R1","Drevo");
define("R2","Hlina");
define("R3","Železo");
define("R4","Obilie");

//INDEX.php
define("LOGIN","Prihláste sa");
define("PLAYERS","Hráči");
define("MODERATOR","Moderátor");
define("ACTIVE","Aktívne");
define("ONLINE","Online");
define("TUTORIAL","Návod");
define("PLAYER_STATISTICS","Štatistiky hráčov");
define("TOTAL_PLAYERS","".PLAYERS." celkom");
define("ACTIVE_PLAYERS","Aktívni hráči");
define("ONLINE_PLAYERS","".PLAYERS." online");
define("MP_STRATEGY_GAME","".SERVER_NAME." - strategická hra pre viacerých hráčov");
define("WHAT_IS","".SERVER_NAME." je jednou z najpopulárnejších prehliadačových hier na svete. Ako hráč v ".SERVER_NAME.", vybudujete si vlastné impérium, naverbujete mocnú armádu a budete bojovať so svojimi spojencami o hegemóniu herného sveta.");
define("REGISTER_FOR_FREE","Zaregistrujte sa tu zadarmo!");
define("LATEST_GAME_WORLD","Najnovší herný svet");
define("LATEST_GAME_WORLD2","Zaregistrujte sa v najnovšom<br/>hernom svete a užite si<br/>výhody<br/>byť jedným z<br/>prvých hráčov.");
define("PLAY_NOW","Hraj ".SERVER_NAME." hneď");
define("LEARN_MORE","Zistite viac <br/>o ".SERVER_NAME."!");
define("LEARN_MORE2","Teraz s revolučným<br>serverovým systémom, úplne novou<br>grafikou <br>Tento svet je boží!");
define("COMUNITY","Komunita");
define("BECOME_COMUNITY","Staňte sa súčasťou našej komunity už teraz!");
define("BECOME_COMUNITY2","Staňte sa súčasťou jednej z<br>najväčších herných<br>komunít na<br>svete.");
define("NEWS","Novinky");
define("SCREENSHOTS","Snímky obrazovky");
define("FAQ","FAQ");
define("SPIELREGELN","Pravidlá");
define("AGB","Zmluvné podmienky");
define("LEARN1","Vylepšite svoje polia a bane, aby ste zvýšili produkciu surovín. Budete potrebovať zdroje na stavbu budov a výcvik vojakov.");
define("LEARN2","Postavte a rozšírte budovy vo svojej dedine. Budovy zlepšujú vašu celkovú infraštruktúru, zvyšujú produkciu surovín a umožňujú vám skúmať, cvičiť a vylepšovať svoje jednotky.");
define("LEARN3","Zobrazujte a interagujte so svojím okolím. Môžete si nájsť nových priateľov alebo nových nepriateľov, využívať blízke oázy a pozorovať, ako vaša ríša rastie a silnie.");
define("LEARN4","Sledujte svoje zlepšenie a úspechy a porovnajte sa s ostatnými hráčmi. Pozrite si Top 10 rebríčkov a bojujte o zisk týždennej medaily.");
define("LEARN5","Dostávajte podrobné správy o svojich dobrodružstvách, obchodoch a bitkách. Nezabudnite si pozrieť úplne nové správy o dianí vo vašom okolí.");
define("LEARN6","Vymieňajte si informácie a veďte diplomaciu s ostatnými hráčmi. Vždy pamätajte, že komunikácia je kľúčom k získavaniu nových priateľov a riešeniu starých konfliktov.");
define("LOGIN_TO","Prihláste sa do ". SERVER_NAME);
define("REGIN_TO","Zaregistrujte sa na ". SERVER_NAME);
define("P_ONLINE","Hráči online: ");
define("P_TOTAL","Hráčov celkom: ");
define("CHOOSE","Vyberte server.");
define("STARTED"," Server sa spustil pred ". round((time()-COMMENCE)/86400) ." dňami.");

//ANMELDEN.php
define("NICKNAME","Prezývka");
define("EMAIL","Email");
define("PASSWORD","Heslo");
define("ROMANS","Šlachta");
define("TEUTONS","Ľud");
define("GAULS","Zbojníci");
define("NW","Severozápad");
define("NE","Severovýchod");
define("SW","Juhozápad");
define("SE","Juhovýchod");
define("RANDOM","náhodný");
define("ACCEPT_RULES"," Súhlasím s pravidlami hry a všeobecnými obchodnými podmienkami.");
define("ONE_PER_SERVER","Každý hráč môže vlastniť iba JEDEN účet na server.");
define("BEFORE_REGISTER","Pred registráciou účtu by ste si mali prečítať <a href='../anleitung.php' target='_blank'>pokyny</a> , aby ste videli špecifické výhody a nevýhody týchto troch kmeňov.");
define("BUILDING_UPGRADING","Výstavba:");
define("HOURS","hod.");


//ATTACKS ETC.
define("TROOP_MOVEMENTS","Pohyby vojsk:");
define("ARRIVING_REINF_TROOPS","Prichádzajú posilňujúce jednotky");
define("ARRIVING_ATTACKING_TROOPS","Prichádzajú útočné jednotky");
define("ARRIVING_REINF_TROOPS_SHORT","Posil.");
define("OWN_ATTACKING_TROOPS","Vlastné útočné jednotky");
define("ATTACK","Útok");
define("OWN_REINFORCING_TROOPS","Vlastné posilňujúce jednotky");
define("TROOPS_DORF","Vojaci:");
define("NEWVILLAGE","Nová ded.");
define("FOUNDNEWVILLAGE","Založenie Novej dediny");
define("UNDERATTACK","Dedina je pod útokom");
define("OASISATTACK","Oáza je pod útokom");
define("OASISATTACKS","Oáza útok");
define("RETURNFROM","Návrat z");
define("REINFORCEMENTFOR","Posilnenie do");
define("ATTACK_ON","Útok na");
define("RAID_ON","Nájazd na");
define("SCOUTING","Skauting");
define("PRISONERS","Väzni");
define("PRISONERSIN","Väzni v");
define("PRISONERSFROM","Väzni z");
define("TROOPS","Vojská");
define("TROOPSFROM","Vojská");
define("BOUNTY","Odmena");
define("ARRIVAL","Príchod");
define("CATAPULT_TARGET","Cieľ(e) katapultu");
define("INCOMING_TROOPS","Prichádzajúce jednotky");
define("TROOPS_ON_THEIR_WAY","Vojaci na ceste");
define("OWN_TROOPS","Vlastné jednotky");
define("ON","na");
define("AT","o");
define("UPKEEP","Údržba");
define("SEND_BACK","Poslať späť");
define("TROOPS_IN_THE_VILLAGE","Vojaci v dedine");
define("TROOPS_IN_OTHER_VILLAGE","Vojaci v inej dedine");
define("TROOPS_IN_OASIS","Vojaci v oáze");
define("KILL","Zabiť");
define("FROM","Od");
define("SEND_TROOPS","Pošlite jednotky");
define("TASKMASTER","Správca úloh");
define("VILLAGE_OF_THE_ELDERS_TROOPS","dedina starších vojakov");

//SEND TROOP
define("REINFORCE","Posilnenie");
define("NORMALATTACK","Normálny útok");
define("RAID","Nájazd");
define("OR","alebo");
define("SENDTROOP","Pošlite jednotky");
define("TROOP","Vojská");
define("NOTROOP","žiadne jednotky");

//map
define("DETAIL","Podrobnosti");
define("ABANDVALLEY","Opustené údolie");
define("OCCUPIED","Obsadené");
define("UNOCCUPIED","Neobsadené");
define("UNOCCUOASIS","Neobsadená oáza");
define("OCCUOASIS","Okupovaná oáza");
define("THERENOINFO","Nie sú dostupné žiadne<br>informácie.");
define("LANDDIST","Rozdelenie pôdy");
define("TRIBE","Kmeň");
define("ALLIANCE","Aliancia");
define("POP","Populácia");
define("REPORT","Hlásenia");
define("OPTION","Možnosti");
define("CENTREMAP","Centrovať mapu");
define("FNEWVILLAGE","Našla sa nová dedina");
define("CULTUREPOINT","kultúrne body");
define("BUILDRALLY","postavte miesto zhromaždenia");
define("SETTLERSAVAIL","dostupní osadníci");
define("BEGINPRO","ochrana pre začiatočníkov");
define("SENDMERC","Odoslať obchodníka(ov)");
define("BAN","Hráč má zakázaný prístup");
define("BUILDMARKET","Vybudovať trhovisko");
define("PERHOUR","za hodinu");
define("BONUS","Bonus");
define("MAP","Mapa");
define("CROPFINDER","Crop Finder");
define("NORTH","Sever");
define("EAST","Východ");
define("SOUTH","Juh");
define("WEST","Západ");

//other
define("VILLAGE","Dedina");
define("OASIS","Oáza");
define("NO_OASIS", "Nevlastníte žiadne oázy.");
define("NO_VILLAGES", "Nie sú tam žiadne dediny.");
define("PLAYER","Hráč");

//LOGIN.php
define("COOKIES","Aby ste sa mohli prihlásiť, musíte mať povolené súbory cookie. Ak zdieľate tento počítač s inými ľuďmi, mali by ste sa po každej relácii v záujme vlastnej bezpečnosti odhlásiť.");
define("NAME","Meno");
define("PW_FORGOTTEN","Zabudli ste heslo?");
define("PW_REQUEST","Potom môžete požiadať o nové, ktorý vám bude zaslané na vašu e-mailovú adresu.");
define("PW_GENERATE","Vygenerujte nové heslo.");
define("EMAIL_NOT_VERIFIED","E-mail nie je overený!");
define("EMAIL_FOLLOW","Ak chcete aktivovať svoj účet, kliknite na tento odkaz.");
define("VERIFY_EMAIL","Overiť e-mail.");
define("SERVER_STARTS_IN","Server sa spustí o: ");
define("START_NOW","ZAČNITE TERAZ");


//404.php
define("NOTHING_HERE","Nič tu!");
define("WE_LOOKED","Hľadali sme už 404-krát, ale nič sme nenašli");

//TIME RELATED
define("CALCULATED","Vypočítané v");
define("SERVER_TIME","Čas servera:");

//MASSMESSAGE.php
define("MASS","Obsah správy");
define("MASS_SUBJECT","Predmet:");
define("MASS_COLOR","Farba správy:");
define("MASS_REQUIRED","Všetky polia sú povinné");
define("MASS_UNITS","Obrázky (jednotky):");
define("MASS_SHOWHIDE","Zobraziť/Skryť");
define("MASS_READ","Prečítajte si toto: po pridaní smajlíka musíte pridať vľavo alebo vpravo za číslo, inak obrázok nebude fungovať");
define("MASS_CONFIRM","Potvrdenie");
define("MASS_REALLY","Naozaj chcete poslať MassIGM?");
define("MASS_ABORT","Prerušujem práve teraz");
define("MASS_SENT","Hromadné IGM bolo odoslané");

//BUILDINGS
define("WOODCUTTER","Drevorubač");
define("CLAYPIT","Hlinená jama");
define("IRONMINE","Železná baňa");
define("CROPLAND","Úrodná Pôda");

define("PÍLA","Píla");
define("SAWMILL_DESC","Tu sa spracováva drevo dodané vašimi drevorubačmi. Na základe jeho úrovne môže vaša píla zvýšiť produkciu dreva až o 25 percent.");
define("CURRENT_WOOD_BONUS","Aktuálny bonus na drevo:");
define("WOOD_BONUS_LEVEL","Bonus z dreva na úrovni");
define("MAX_LEVEL","Budova je už na maximálnej úrovni");
define("PERCENT","Percent");

define("BRICKYARD","Tehelňa");
define("CURRENT_CLAY_BONUS","Aktuálny hlinený bonus:");
define("CLAY_BONUS_LEVEL","Hlinený bonus na úrovni");
define("BRICKYARD_DESC","Tu sa hlina spracováva na tehly. Na základe jej úrovne môže vaša tehelňa zvýšiť produkciu hliny až o 25 percent.");

define("IRONFOUNDRY","Zlieváreň železa");
define("CURRENT_IRON_BONUS","Aktuálny bonus za železo:");
define("IRON_BONUS_LEVEL","Železný bonus na úrovni");
define("IRONFOUNDRY_DESC","Taví sa tu železo. Na základe jeho úrovne môže vaša zlieváreň železa zvýšiť produkciu železa až o 25 percent.");

define("GRAINMILL","Mlyn na obilie");
define("CURRENT_CROP_BONUS","Aktuálny bonus za plodinu:");
define("CROP_BONUS_LEVEL","Bonus za úrodu na úrovni");
define("GRAINMILL_DESC","Tu sa vaše obilie melie na výrobu múky. Na základe jeho úrovne môže váš obilný mlyn zvýšiť produkciu plodín až o 25 percent.");

define("BAKERY","Pekáreň");
define("BAKERY_DESC","Tu sa múka vyrobená vo vašom mlyne používa na pečenie chleba. Okrem toho s mlynom na obilie môže nárast produkcie plodín dosiahnuť až 50 percent.");

define("WAREHOUSE","Sklad");
define("CURRENT_CAPACITY","Aktuálna kapacita:");
define("CAPACITY_LEVEL","Kapacita na úrovni");
define("RESOURCE_UNITS","Jednotky zdrojov");
define("WAREHOUSE_DESC","Suroviny drevo, hlina a železo sú uložené vo vašom sklade. Zvýšením jeho úrovne zvyšujete kapacitu svojho skladu.");

define("GRANARY","Sýpka");
define("CROP_UNITS","jednotky");
define("GRANARY_DESC","Úroda vyprodukovaná na vašich farmách je uložená v sýpke. Zvýšením úrovne zvyšujete kapacitu sýpky.");

define("BLACKSMITH","Kováč");
define("ACTION","Akcia");
define("UPGRADE","Upgrade");
define("UPGRADE_IN_PROGRESS","Aktualizácia<br>prebieha");
define("UPGRADE_BLACKSMITH","Upgrade<br>kováč");
define("UPGRADES_COMMENCE_BLACKSMITH","Aktualizácie môžu začať po dokončení kováčstva.");
define("MAXIMUM_LEVEL","Maximálna<br>úroveň");
define("EXPAND_WAREHOUSE","Rozbaliť<br>sklad");
define("EXPAND_GRANARY","Rozbaliť<br>sýpka");
define("ENOUGH_RESOURCES","Čas dostupných zdrojov");
define("CROP_NEGATIVE ","Produkcia plodín je negatívna, takže nikdy nedosiahnete požadované zdroje");
define("TOO_FEW_RESOURCES","Príliš málo<br>zdrojov");
define("UPGRADING","Upgrading");
define("DURATION","Trvanie");
define("COMPLETE","Complete");
define("BLACKSMITH_DESC","V kováčskych taviacich peciach sú vylepšené zbrane vašich bojovníkov. Zvýšením jej úrovne si môžete objednať výrobu ešte lepších zbraní.");

define("ARMOURY","Zbrojnica");
define("UPGRADE_ARMOURY","Vylepšenie<br>zbrojnice");
define("UPGRADES_COMMENCE_ARMOURY","Vylepšenia môžu začať, keď je dokončená zbrojnica.");
define("ARMOURY_DESC","V taviacich peciach zbrojnice je brnenie vašich bojovníkov vylepšené. Zvýšením jeho úrovne si môžete objednať výrobu ešte lepšieho brnenia.");

define("TOURNAMENTSQUARE","Turnajové námestie");
define("CURRENT_SPEED","Aktuálny rýchlostný bonus:");
define("SPEED_LEVEL","Rýchlostný bonus na úrovni");
define("TOURNAMENTSQUARE_DESC","Na turnajovom námestí môžu vaši vojaci trénovať svoju výdrž. Čím ďalej je budova modernizovaná, tým rýchlejšie sú vaše jednotky za minimálnou vzdialenosťou polí ".TS_THRESHOLD.".");

define("MAINBUILDING","Hlavná budova");
define("CURRENT_CONSTRUCTION_TIME","Aktuálny čas výstavby:");
define("CONSTRUCTION_TIME_LEVEL","Čas výstavby na úroven");
define("DEMOLITION_BUILDING","Búranie budovy:</h2><p>Ak už budovu nepotrebujete, môžete si objednať zbúranie budovy.</p>");
define("DEMOLOVAŤ","Zbúrať");
define("DEMOLITION_OF","Demolácia ");
define("MAINBUILDING_DESC","V hlavnej budove bývajú stavitelia obce. Čím vyššia je jeho úroveň, tým rýchlejšie vaši stavitelia dokončia stavbu nových budov.");

define("RALLYPOINT","Zhromaždisko");
define("RALLYPOINT_COMMENCE","Posun jednotiek sa zobrazí po dokončení ".RALLYPOINT."");
define("OVERVIEW","Prehľad");
define("REINFORCEMENT","Posilnenie");
define("EVASION_SETTINGS","nastavenia vyhýbania sa");
define("SEND_TROOPS_AWAY_MAX","Poslať jednotky preč maximálne");
define("TIMES","čas");
define("PER_EVASION","za únik");
define("RALLYPOINT_DESC","Tu sa stretávajú jednotky vašej dediny. Odtiaľto ich môžete poslať, aby dobyli, prepadli alebo posilnili iné dediny.");

define("MARKETPLACE","Trhovisko");
define("MERCHANT","Obchodníci");
define("OR_","alebo");
define("GO","ísť");
define("UNITS_OF_RESOURCE","jednotky zdroja");
define("MERCHANT_CARRY","Každý obchodník môže prevážať");
define("MERCHANT_COMING","Prichádzajú obchodníci");
define("TRANSPORT_FROM","Doprava z");
define("ARRIVAL_IN","Príchod o");
define("NO_COORDINATES_SELECTED","Nie sú vybraté žiadne súradnice");
define("CANNOT_SEND_RESOURCES","Nemôžete posielať zdroje do tej istej dediny");
define("BANNED_CANNOT_SEND_RESOURCES","Hráč má zakázaný prístup. Nemôžete mu posielať zdroje");
define("RESOURCES_NO_SELECTED","Zdroje nie sú vybraté");
define("ENTER_COORDINATES","Zadajte súradnice alebo názov dediny");
define("TOO_FEW_MERCHANTS","Príliš málo obchodníkov");
define("OWN_MERCHANTS_ONWAY","Vlastní obchodníci na ceste");
define("MERCHANTS_RETURNING","Obchodníci sa vracajú");
define("TRANSPORT_TO","Doprava do");
define("I_AN_SEARCHING","Hľadám");
define("I_AN_OFFERING","Ponúkam");
define("OFFERS_MARKETPLACE","Ponuky na trhovisku");
define("NO_AVAILABLE_OFFERS","Žiadne ponuky na trhovisku");
define("OFFERED_TO_ME","Ponúknuté<br>mne");
define("WANTED_TO_ME","Hľadám<br>odo mňa");
define("NOT_ENOUGH_MERCHANTS","Nedostatok obchodníka");
define("ACCEP_OFFER","Prijať ponuku");
define("NO_AVALIBLE_OFFERS","Na trhu nie sú dostupné žiadne ponuky");
define("HĽADÁVANIE","Hľadanie");
define("PONUKA","Ponuka");
define("MAX_TIME_TRANSPORT","max. čas prepravy");
define("OWN_ALLIANCE_ONLY","iba vlastná aliancia");
define("INVALID_OFFER","Neplatná ponuka");
define("INVALID_MERCHANTS_REPETITION","Neplatný počet opakovaní obchodníkov");
define("USER_ON_VACATION","Používateľ je v dovolenkovom režime");
define("NOT_ENOUGH_RESOURCES","Nie je dostatok zdrojov");
define("PONUKA","Ponuka");
define("HĽADAŤ","Hľadať");
define("OWN_OFFERS","Vlastné ponuky");

define("ALL","Všetko");
define("NPC_TRADE","NPC obchod");
define("SÚČET","Súčet");
define("ODPOČINOK","Odpočinok");
define("TRADE_RESOURCES","Obchodujte zdroje na (krok 2 z 2");
define("DISTRIBUTE_RESOURCES","Distribuujte zdroje v (krok 1 z 2)");
define("OF","of");
define("NPC_COMPLETED","NPC complete");
define("BACK_BUILDING","Späť do budovy");
define("YOU_CAN_NAT_NPC_WW","V dedine WW nemôžete používať obchod s NPC.");
define("NPC_TRADING","NPC obchodovanie");
define("SEND_RESOURCES","Odoslať zdroje");
define("KÚPIŤ","Kúpiť");
define("TRADE_ROUTES","Obchodné cesty");
define("DESCRIPTION","Popis");
define("TIME_LEFT","Zostávajúci čas");
define("START","Start");
define("NO_TRADE_ROUTES","Žiadne aktívne obchodné cesty");
define("TRADE_ROUTE_TO","Obchodná cesta do");
define("KONTROLOVANÉ","zaškrtnuté");
define("DNI","Dni");
define("EXTEND","Extend");
define("UPRAVIŤ","Upraviť");
define("EXTEND_TRADE_ROUTES","Predĺžte obchodnú cestu o <b>7</b> dní na");
define("CREATE_TRADE_ROUTES","Vytvoriť novú obchodnú cestu");
define("DORUČENIA","Dodávky");
define("START_TIME_TRADE","Čas začiatku");
define("CREATE_TRADE_ROUTE","Vytvoriť obchodnú cestu");
define("TARGET_DILLAGE","Cieľová dedina");
define("EDIT_TRADE_ROUTES","Upraviť obchodnú cestu");
define("TRADE_ROUTES_DESC","Obchodná cesta vám umožňuje nastaviť pre vášho obchodníka trasy, po ktorých bude chodiť každý deň v určitú hodinu. <br /><br /> Štandardne to platí <b>7</b> dní, ale môžete to predĺžiť o <b>7</b> dní za cenu");
define("NPC_TRADE_DESC","S obchodníkom NPC môžete distribuovať zdroje vo vašom sklade podľa vlastného uváženia. <br /><br /> Prvý riadok zobrazuje aktuálne zásoby. V druhom riadku si môžete vybrať inú distribúciu. Tretí riadok zobrazuje rozdiel medzi starou a novou zásobou.");
define("MARKETPLACE_DESC","Na trhovisku môžete obchodovať so zdrojmi s ostatnými hráčmi. Čím vyššia je jeho úroveň, tým viac zdrojov je možné prepravovať súčasne.");

define("EMBASSY","Veľvyslanectvo");
define("TAG","Tag");
define("TO_THE_ALLIANCE","do aliancie");
define("JOIN_ALLIANCE","pripoj sa k aliancii");
define("REFUSE","odmietnuť");
define("ACCEPT","prijať");
define("NO_INVITATIONS","Nie sú dostupné žiadne pozvánky.");
define("NO_CREATE_ALLIANCE","Banovaný hráč nemôže vytvoriť alianciu.");
define("FOUND_ALLIANCE","nájdená aliancia");
define("EMBASSY_DESC","Veľvyslanectvo je miestom pre diplomatov. Čím vyššia je jeho úroveň, tým viac možností kráľ získa.");

define("BARRACKS","Kasárne");
define("QUANTITY","Množstvo");
define("MAX","Max");
define("TRAINING","Výcvik");
define("FINISHED","Dokončené");
define("UNIT_FINISHED","Ďalšia jednotka bude dokončená v");
define("AVAILABLE","Dostupné");
define("TRAINING_COMMENCE_BARRACKS","Výcvik môže začať po dokončení kasární.");
define("BARRACKS_DESC","Všetci pešiaci sú cvičení v kasárňach. Čím vyššia je úroveň kasární, tým rýchlejšie sa cvičia jednotky.");

define("STABLE","Stajňa");
define("AVAILABLE_ACADEMY","Nie sú k dispozícii žiadne jednotky. Výskum na akadémii");
define("TRAINING_COMMENCE_STABLE","Tréning sa môže začať po dokončení stabilného.");
define("STABLE_DESC","Kavaléria môže byť trénovaná v stajni. Čím vyššia je jej úroveň, tým rýchlejšie sú vojaci vycvičení.");

define("WORKSHOP","Dielna");
define("TRAINING_COMMENCE_WORKSHOP","Tréning môže začať po skončení workshopu.");
define("WORKSHOP_DESC","Obliehacie motory ako katapulty a barany je možné postaviť v dielni. Čím vyššia je úroveň, tým rýchlejšie sa jednotky vyrábajú.");

define("ACADEMY","Akadémia");
define("RESEARCH_AVAILABLE","Nie sú dostupné žiadne prieskumy");
define("RESEARCH_COMMENCE_ACADEMY","Výskum môže začať po dokončení akadémie.");
define("RESEARCH","Výskum");
define("EXPAND_WAREHOUSE1","Rozbaliť sklad");
define("EXPAND_GRANARY1","Rozbalte sýpku");
define("RESEARCH_IN_PROGRESS","Výskum v<br>prebieha");
define("RESEARCHING","Výskum");
define("PREREQUISITES","Požiadavky");
define("SHOW_MORE","ukázať viac");
define("HIDE_MORE","skrývať viac");
define("ACADEMY_DESC","V akadémii možno skúmať nové typy jednotiek. Zvýšením jej úrovne si môžete objednať výskum lepších jednotiek.");

define("CRANNY","Úkryt");
define("CURRENT_HIDDEN_UNITS","Momentálne skryté jednotky na zdroj:");
define("HIDDEN_UNITS_LEVEL","Skryté jednotky na zdroj na úrovni");
define("UNITS","jednotky");
define("CRANNY_DESC","Úkryt sa používa na ukrytie niektorých vašich zdrojov, keď je dedina napadnutá. Tieto zdroje nemožno ukradnúť.");

define("TOWNHALL","Radnica");
define("CELEBRATIONS_COMMENCE_TOWNHALL","Celebrations can commence when the town hall is completed.");
define("GREAT_CELEBRATIONS","Great celebration");
define("CULTURE_POINTS","Culture points");
define("HOLD","hold");
define("CELEBRATIONS_IN_PROGRESS","Celebration<br />in progress");
define("CELEBRATIONS","Celebrations");
define("TOWNHALL_DESC","You can hold pompous celebrations in the Town Hall. Such a celebration increases your culture points. Building up your Town Hall to a higher level will decrease the length of the celebration.");

define("RESIDENCE","Rezidencia");
define("CAPITAL","Toto je váš kapitál");
define("RESIDENCE_TRAIN_DESC","In order to found a new village you need a level 10 or 20 residence and 3 settlers. In order to conquer a new village you need a level 10 or 20 residence and a senator, chief or chieftain.");
define("PRODUCTION_POINTS","Production of this village:");
define("PRODUCTION_ALL_POINTS","Production of all villages:");
define("POINTS_DAY","Culture points per day");
define("VILLAGES_PRODUCED","Your villages have produced");
define("POINTS_NEED","points in total. To found or conquer a new village you need");
define("POINTS","points");
define("INHABITANTS","Inhabitants");
define("COORDINATES","Coordinates");
define("EXPANSION","Expansion");
define("TRAIN","Výcvik");
define("DATE","Dátum");
define("CONQUERED_BY_VILLAGE","Villages founded or conquered by this village");
define("NONE_CONQUERED_BY_VILLAGE","No other village has been founded or conquered by this village yet.");
define("RESIDENCE_CULTURE_DESC","In order to extend your empire you need culture points. These culture points increase in the course of time and do so faster as your building levels increase.");
define("RESIDENCE_LOYALTY_DESC","By attacking with senators, chiefs or chieftains a village's loyalty can be brought down. If it reaches zero, the village joins the realm of the attacker. The loyalty of this village is currently at ");
define("RESIDENCE_DESC","Rezidencia je malý palác, v ktorom býva kráľ alebo kráľovná, keď navštívi dedinu. Sídlo chráni dedinu pred nepriateľmi, ktorí ju chcú dobyť.");

define("PALACE","Palác");
define("PALACE_CONSTRUCTION","Palác vo výstavbe");
define("PALACE_TRAIN_DESC","Na založenie novej dediny potrebujete palác úrovne 10, 15 alebo 20 a 3 osadníkov. Na dobytie novej dediny potrebujete palác úrovne 10, 15 alebo 20 a senátora, náčelníka alebo náčelník.");
define("CHANGE_CAPITAL","zmeniť kapitál");
define("SECURITY_CHANGE_CAPITAL","Ste si istý, že chcete zmeniť svoj kapitál?<br /><b>Nemôžete to vrátiť späť!</b><br />Z bezpečnostných dôvodov musíte zadať svoje heslo do potvrdiť:<br />");
define("PALACE_DESC","V paláci žije kráľ alebo kráľovná impéria. Vo vašej ríši môže súčasne existovať iba jeden palác. Ak chcete vyhlásiť dedinu za hlavné mesto, potrebujete palác.");

define("TREASURY","Pokladnica");
define("TREASURY_COMMENCE","Artifacts can be viewed when treasury is completed.");
define("ARTIFACTS_AREA","Artefacts in your area");
define("NO_ARTIFACTS_AREA","There are no artefacts in your area.");
define("OWN_ARTIFACTS","Own artefacts");
define("CONQUERED","Vybojované");
define("DISTANCE","Distance");
define("EFFECT","Účinok");
define("ACCOUNT","Účet");
define("SMALL_ARTIFACTS","Small artefacts");
define("LARGE_ARTIFACTS","Large artefacts");
define("NO_ARTIFACTS","There are no artefacts.");
define("ANY_ARTIFACTS","You do not own any artefacts.");
define("OWNER","Vlastník");
define("AREA_EFFECT","Area of effect");
define("VILLAGE_EFFECT","Village effect");
define("ACCOUNT_EFFECT","Account effect");
define("UNIQUE_EFFECT","Unique effect");
define("REQUIRED_LEVEL","Required level");
define("TIME_CONQUER","Time of conquer");
define("TIME_ACTIVATION","Time of activation");
define("NEXT_EFFECT"," Next effect");
define("FORMER_OWNER","Former owner(s)");
define("BUILDING_STRONGER","Building stronger with");
define("BUILDING_WEAKER","Building weaker with");
define("TROOPS_FASTER","Makes troops faster with");
define("TROOPS_SLOWEST","Makes troops slowest with");
define("SPIES_INCREASE","Spies increase ability with");
define("SPIES_DECRESE","Spies decrese ability with");
define("CONSUME_LESS","All troops consume less with");
define("CONSUME_HIGH","All troops consume high with");
define("TROOPS_MAKE_FASTER","Troops make faster with");
define("TROOPS_MAKE_SLOWEST","Troops make slowest with");
define("YOU_CONSTRUCT","You can construct ");
define("CRANNY_INCREASED","Cranny capacity is increased by");
define("CRANNY_DECRESE","Cranny capacity is decrese by");
define("WW_BUILDING_PLAN","You can build the Wonder of the World");
define("NO_WW","There are no Wonders of the World");
define("NO_PREVIOUS_OWNERS","There are no previous owners.");
define("TREASURY_DESC","The riches of your empire are kept in the treasury. The treasury has room for one treasure. After you have captured an artefact it takes 24 hours on a normal server or 12 hours on a thrice speed server to be effective.");

define("TRADEOFFICE","Obchodná kancelária");
define("CURRENT_MERCHANT","Current merchant load:");
define("MERCHANT_LEVEL","Merchant load at level");
define("TRADEOFFICE_DESC","In the trade office the merchants' carts get improved and equipped with powerful horses. The higher its level the more your merchants are able to carry.");

define("GREATBARRACKS","Great Barracks");
define("TRAINING_COMMENCE_GREATBARRACKS","Training can commence when great barracks is completed.");
define("GREATBARRACKS_DESC","Foot soldiers are trained in the great barracks. The higher the level of the barracks, the faster the troops are trained.");

define("GREATSTABLE","Great Stable");
define("TRAINING_COMMENCE_GREATSTABLE","Training can commence when great stable is completed.");
define("GREATSTABLE_DESC","Cavalry can be trained in the great stable. The higher its level the faster the troops are trained.");

define("CITYWALL","Mestský múr");
define("DEFENCE_NOW","Defence Bonus now:");
define("DEFENCE_LEVEL","Defence Bonus at level");
define("CITYWALL_DESC","Postavením mestského múru môžete ochrániť svoju dedinu pred barbarskými hordami svojich nepriateľov. Čím vyššia je úroveň steny, tým vyšší je bonus na obranu vašich síl.");

define("EARTHWALL","Hradba");
define("EARTHWALL_DESC","Postavením hradby môžete ochrániť svoju dedinu pred barbarskými hordami svojich nepriateľov. Čím vyššia je úroveň hradby, tým vyšší je bonus na obranu vašich síl.");

define("PALISADE","Palisáda");
define("PALISADE_DESC","Postavením Palisády môžete chrániť svoju dedinu pred barbarskými hordami svojich nepriateľov. Čím vyššia je úroveň steny, tým vyšší je bonus na obranu vašich síl.");

define("STONEMASON","Kamenárska chata");
define("CURRENT_STABILITY","Current stability bonus:");
define("STABILITY_LEVEL","Stability bonus at level");
define("STONEMASON_DESC","The stonemason's lodge is an expert at cutting stone. The further the building is extended the higher the stability of the village's buildings.");

define("BREWERY","Pivovar");
define("CURRENT_BONUS","Aktuálny bonus:");
define("BONUS_LEVEL","Bonus na úrovni");
define("BREWERY_DESC","V pivovare sa varí chutná medovina, ktorú neskôr vojaci čapujú počas osláv.");

define("TRAPPER","Lapač");
define("CURRENT_TRAPS","Opravte maximálny počet pascí na trénovanie:");
define("TRAPS_LEVEL","Maximálny počet pascí na trénovanie na úrovni");
define("TRAPS","Pasce");
define("TRAP","Pasca");
define("CURRENT_HAVE","Momentálne máte");
define("WHICH_OCCUPIED","z toho sú obsadené.");
define("TRAINING_COMMENCE_TRAPPER","Tréning môže začať, keď je trapper dokončený.");
define("TRAPPER_DESC","Lapač chráni vašu dedinu dobre skrytými pascami. To znamená, že neopatrní nepriatelia môžu byť uväznení a už nebudú môcť ubližovať vašej dedine.");

define("HEROSMANSION","Sídlo hrdinu");
define("HERO_READY","Hrdina bude pripravená o ");
define("NAME_CHANGED","Meno hrdinu bolo zmenené");
define("NOT_UNITS","Nedostupné jednotky");
define("NOT","Nie");
define("TRAIN_HERO","Train New Hero");
define("REVIVE","Oživte");
define("OASES","Oázy");
define("DELETE","Odstrániť");
define("RESOURCES","Zdroje");
define("OFFENCE","Útok");
define("DEFENCE","Obrana");
define("OFF_BONUS","Bonus útok");
define("DEF_BONUS","Bonus obrana");
define("REGENERATION","Regenerácia");
define("DAY","Deň");
define("EXPERIENCE","Skúsenosti");
define("YOU_CAN","Môžete ");
define("RESET","resetovať");
define("YOUR_POINT_UNTIL"," vaše body, kým nedosiahnete úroveň ");
define("OR_LOWER"," alebo nižšie!");
define("YOUR_HERO_HAS","Váš hrdina má ");
define("OF_HIT_POINTS","jeho životných bodov");
define("ERROR_NAME_SHORT","Chyba: názov je príliš krátky");
define("HEROSMANSION_DESC","V Hrdinovom sídle si môžete vycvičiť vlastného hrdinu a na úrovni 10, 15 a 20 môžete s Herom dobývať oázy v bezprostrednej blízkosti.");

define("GREATWAREHOUSE","Great Warehouse");
define("GREATWAREHOUSE_DESC","Wood, clay and iron are stored in the warehouse. The great warehouse offers you more space and keeps your goods drier and safer than the normal one.");

define("GREATGRANARY","Great Granary");
define("GREATGRANARY_DESC","Crop produced by your farms is stored in the granary. The great granary offers you more space and keeps your crops drier and safer than the normal one.");

define("WONDER","Wonder of the World");
define("WORLD_WONDER","World Wonder");
define("WONDER_DESC","The World Wonder (otherwise known as a Wonder of the World) is as wonderful as it sounds. This building is built in order to win the server. Each level of the World Wonder costs hundreds of thousands (even millions) of resources to build.");
define("WORLD_WONDER_CHANGE_NAME","You need to have World Wonder level 1 to be able to change its name");
define("WORLD_WONDER_NAME","World Wonder name");
define("WORLD_WONDER_NOTCHANGE_NAME","You can not change the name of the World Wonder after level 10");
define("WORLD_WONDER_NAME_CHANGED","Name changed");

define("HORSEDRINKING","Koňský žľab");
define("HORSEDRINKING_DESC","The horse drinking trough of the Romans decreases the training time of cavalry and the upkeep of these troops as well.");

define("GREATWORKSHOP","Great Workshop");
define("TRAINING_COMMENCE_GREATWORKSHOP","Training can commence when great workshop is completed.");
define("GREATWORKSHOP_DESC","Siege engines like catapults and rams can be built in the great workshop. The higher its level the faster the units are produced.");

define("BUILDING_MAX_LEVEL_UNDER","Building max level under construction");
define("BUILDING_BEING_DEMOLISHED","Building presently being demolished");
define("COSTS_UPGRADING_LEVEL","Cena</b> pre vylepšenie na úroveň");
define("WORKERS_ALREADY_WORK","Robotníci sú už v práci.");
define("CONSTRUCTING_MASTER_BUILDER","Constructing with master builder ");
define("COSTS","Náklady");
define("GOLD","Dukáty");
define("WORKERS_ALREADY_WORK_WAITING","Robotníci sú už v práci. (čakacia slučka)");
define("ENOUGH_FOOD_EXPAND_CROPLAND","Nedostatok jedla. Rozšírte ornú pôdu.");
define("UPGRADE_WAREHOUSE","Upgrade Warehouse");
define("UPGRADE_GRANARY","Upgrade Granary");
define("YOUR_CROP_NEGATIVE","Vaša produkcia plodín je negatívna, nikdy nezískate požadované zdroje.");
define("UPGRADE_LEVEL","Vylepšiť na úroveň ");
define("WAITING","(waiting loop)");
define("NEED_WWCONSTRUCTION_PLAN","Need WW construction plan");
define("NEED_MORE_WWCONSTRUCTION_PLAN","Need more WW construction plan");
define("CONSTRUCT_NEW_BUILDING","Postaviť novú budovu");
define("SHOWSOON_AVAILABLE_BUILDINGS","zobraziť čoskoro dostupné budovy");
define("HIDESOON_AVAILABLE_BUILDINGS","skryť čoskoro dostupné budovy");

//artefact
define("ARCHITECTS_DESC","All buildings in the area of effect are stronger. This means that you will need more catapults to damage buildings protected by this artifacts powers.");
define("ARCHITECTS_SMALL","The architects slight secret");
define("ARCHITECTS_SMALLVILLAGE","Diamond Chisel");
define("ARCHITECTS_LARGE","The architects great secret");
define("ARCHITECTS_LARGEVILLAGE","Giant Marble Hammer");
define("ARCHITECTS_UNIQUE","The architects unique secret");
define("ARCHITECTS_UNIQUEVILLAGE","Hemons Scrolls");
define("HASTE_DESC","All troops in the area of effect move faster.");
define("HASTE_SMALL","The slight titan boots");
define("HASTE_SMALLVILLAGE","Opal Horseshoe");
define("HASTE_LARGE","The great titan boots");
define("HASTE_LARGEVILLAGE","Golden Chariot");
define("HASTE_UNIQUE","The unique titan boots");
define("HASTE_UNIQUEVILLAGE","Pheidippides Sandals");
define("EYESIGHT_DESC","All spies (Scouts, Pathfinders, and Equites Legati) increase their spying ability. In addition, with all versions of this artifact you can see the incoming TYPE of troops but not how many there are.");
define("EYESIGHT_SMALL","The eagles slight eyes");
define("EYESIGHT_SMALLVILLAGE","Tale of a Rat");
define("EYESIGHT_LARGE","The eagles great eyes");
define("EYESIGHT_LARGEVILLAGE","Generals Letter");
define("EYESIGHT_UNIQUE","The eagles unique eyes");
define("EYESIGHT_UNIQUEVILLAGE","Diary of Sun Tzu");
define("DIET_DESC","All troops in the artifacts range consume less wheat, making it possible to maintain a larger army.");
define("DIET_SMALL","Slight diet control");
define("DIET_SMALLVILLAGE","Silver Platter");
define("DIET_LARGE","Great diet control");
define("DIET_LARGEVILLAGE","Sacred Hunting Bow");
define("DIET_UNIQUE","Unique diet control");
define("DIET_UNIQUEVILLAGE","King Arthurs Chalice");
define("ACADEMIC_DESC","Troops are built a certain percentage faster within the scope of the artifact.");
define("ACADEMIC_SMALL","The trainers slight talent");
define("ACADEMIC_SMALLVILLAGE","Scribed Soldiers Oath");
define("ACADEMIC_LARGE","The trainers great talent");
define("ACADEMIC_LARGEVILLAGE","Declaration of War");
define("ACADEMIC_UNIQUE","The trainers unique talent");
define("ACADEMIC_UNIQUEVILLAGE","Memoirs of Alexander the Great");
define("STORAGE_DESC","With this building plan you are able to build the Great Granary or Great Warehouse in the Village with the artifact, or the whole account depending on the artifact. As long as you posses that artifact you are able to build and enlarge those buildings.");
define("STORAGE_SMALL","Slight storage masterplan");
define("STORAGE_SMALLVILLAGE","Builders Sketch");
define("STORAGE_LARGE","Great storage masterplan");
define("STORAGE_LARGEVILLAGE","Babylonian Tablet");
define("CONFUSION_DESC","Cranny capacity is increased by a certain amount for each type of artifact. Catapults can only shoot random on villages within this artifacts power. Exceptions are the WW which can always be targeted and the treasure chamber which can always be targeted, except with the unique artifact. When aiming at a resource field only random resource fields can be hit, when aiming at a building only random buildings can be hit.");
define("CONFUSION_SMALL","Rivals slight confusion");
define("CONFUSION_SMALLVILLAGE","Map of the Hidden Caverns");
define("CONFUSION_LARGE","Rivals great confusion");
define("CONFUSION_LARGEVILLAGE","Bottomless Satchel");
define("CONFUSION_UNIQUE","Rivals unique confusion");
define("CONFUSION_UNIQUEVILLAGE","Trojan Horse");
define("FOOL_DESC","Every 24 hours it gets a random effect, bonus, or penalty (all are possible with the exception of great warehouse, great granary and WW building plans). They change effect AND scope every 24 hours. The unique artifact will always take positive bonuses.");
define("FOOL_SMALL","Artefact of the slight fool");
define("FOOL_SMALLVILLAGE","Pendant of Mischief");
define("FOOL_UNIQUE","Artefact of the unique fool");
define("FOOL_UNIQUEVILLAGE","Forbidden Manuscript");
define("WWVILLAGE","WW village");
define("ARTEFACT","<h1><b>Natars Artifacts</b></h1>

Whispering rumors echo through the villages, sharing legends told only by the best storytellers. It refers to NATARS, the most feared warrior of the TRAVIAN world. Their killing is the dream of any hero, the purpose of any fighter. No one knows how NATARS got to get such power, and their warriors so cruel. Determined to discover the source of the NATARS power, the fighters send a group of elite spies to spy them. I do not go through many hours and come back with fear in their eyes and balancing fantastic theories: it seems that the natural power comes from the mysterious objects they call artifacts that they stole from our ancestors. Try to steal the artefacts of her, and you can control their power.

<img src=\"img/x.gif\" class=\"ArtifactsAnnouncement\">

The time has come for claiming artifacts. Collaborate with your alliance and bring your worriors to get these wanted objects. However, NATARS will not give up without war to the artefacts ... nor your enemies. If you are successful in retrieving artifacts and you will be able to reject enemies, you will be able to collect the rewards. Your buildings will become incredibly strong and mightest, and the troops will be much faster and will consume less food. Capture the artifacts, bring glory over your empire and become new legends for your followers.

To steal one, the following things must happen:

1. You must attack the village (NO Raid!)
2. WIN the Attack
3. Destroy the treasury
4. An empty treasury level 10 for SMALL ARTIFACTS and level 20 for LARGE ARTIFACT must be in the village where that attack came from
5. Have a hero in an attack

If not, the next attack on that village, winning with a hero and empty treasury will take the artifact.

To build a WW, you must own a plan yourself (you = the WW village owner) from lvl 0 to 50, from 51 to 100 you need an additional plan in your alliance! Two plans in the WW village account would not work!

The construction plans are conquerable immediately when they appear to the server. 

There will be a countdown in game, showing the exact time of the release, 5 days prior to the launch. ");

//WW Village Release Message
define("WWVILLAGEMSG","<h1><b>Dediny divu sveta</b></h1>

Od prvých bitiek na múroch prekliatych dedín strašných Natarov uplynulo nespočetné množstvo dní, mnohé armády slobodných aj Natarskej ríše bojovali a zomreli pred múrmi mnohých pevností, z ktorých kedysi Natari ovládali celé stvorenie. . Teraz, keď sa usadil prach a usadil sa relatívny pokoj, armády začali počítať svoje straty a zbierať svojich mŕtvych, pach boja stále pretrvávajúci v nočnom vzduchu, zápach zabíjania, ktorý je nezabudnuteľný vo svojom rozsahu a brutalite. zakrpatené ešte inými. Najväčšie armády slobodných a hrôzostrašných Natarov sa chystali na ďalší obnovený útok na vytúžené bývalé pevnosti Natarskej ríše.
Čoskoro dorazili skauti a rozprávali o najúžasnejšom pohľade a mrazivej pripomienke, že na konci sveta, v hlavnom meste Natarov, bola spozorovaná hrozivá armáda nevyspytateľnej veľkosti, sila taká veľká a nezastaviteľná, že prach z ich pochodu by sa zadusil. preč všetko svetlo, sila tak brutálna a neľútostná, že by zničila všetku nádej. Slobodní ľudia vedeli, že teraz musia pretekať, pretekať s časom a nekonečnými hordami Natarského impéria, aby vzbudili Div sveta, aby nastolili mier vo svete a porazili natarskú hrozbu.
Ale postaviť taký veľký div by nebola ľahká úloha, človek by potreboval stavebné plány vytvorené v dávnej minulosti, plány tak tajomnej povahy, že ani tí najmúdrejší z mudrcov nepoznali ich obsah ani umiestnenie.
Desaťtisíce skautov sa túlali po celej existencii a márne hľadali tieto mystické plány, hľadali všade okrem obávaného hlavného mesta Natarov, no nemohli ich nájsť. Dnes sa však vracajú s dobrými správami, vracajú sa s odhalením umiestnení plánov, ukrytých armádami Natarov v tajných pevnostiach postavených tak, aby boli skryté pred očami človeka.
Teraz sa začína posledný úsek, keď sa najväčšie armády Slobodných ľudí a Natarov stretnú po celom svete o osud všetkého, čo leží pod nebom. Toto je vojna, ktorá sa bude ozývať naprieč eónmi, toto je vaša vojna a tu vyryjete svoje meno do histórie, tu sa stanete legendou.
<img src=\"img/x.gif\" class=\"WWVillagesAnnouncement\" title=\"".WWVILLAGE."\" alt=\"".WWVILLAGE."\">

Aby ste jednu dobyli, musia sa stať tieto veci:

1. Musíte zaútočiť na dedinu (NIE nájazd!)
2. VYHRAJ Útok
3. Zničte Bydlisko
4. Musíte znížiť lojalitu na 0 pomocou : SENÁTORI , Náčelník , Náčelník
5. Na dobytie dediny musíte mať dostatok kultúrnych bodov

Ak nie, ďalší útok na túto dedinu, výhra so SENÁTORMI, NÁČELNÍKOM, NÁČELNÍKOM a prázdnymi miestami v RESIDENCE/PALACE, obsadí dedinu.

Ak chcete postaviť WW, musíte vlastniť plán (vy = vlastník dediny WW) od lvl 0 do 50, od 51 do 100 potrebujete dodatočný plán vo vašej aliancii! Dva plány na účte dediny WW by nefungovali!

Stavebné plány sú dobyteľné okamžite, keď sa objavia na serveri. 

V hre bude odpočítavanie, ktoré ukazuje presný čas vydania, ".(5 / SPEED)." dní pred spustením. ");

//Building Plans
define("PLAN","Plán starovekej výstavby");
define("PLANVILLAGE","WW Stavebný plán");
define("PLAN_DESC","S týmto prastarým stavebným plánom budete môcť postaviť svetový zázrak na úroveň 50. Ak chcete stavať ďalej, vaša aliancia musí mať aspoň dva plány.");
define("PLAN_INFO","<h1><b>Plány výstavby divu sveta</b></h1>


Pred mnohými mesiacmi boli kmene Travianov prekvapené nepredvídaným návratom Natarov. Tento kmeň od nepamäti prevyšujúci všetko múdrosťou, silou a slávou sa chystal opäť znepokojiť slobodných. Vynaložili tak všetko svoje úsilie na prípravu poslednej vojny proti Natarom a ich porazenie navždy. Mnohí považovali za jediné riešenie takzvané „divy sveta“, skonštruované z mnohých legiend. Bolo povedané, že po dokončení to urobí každého neporaziteľným. Nakoniec sa z konštruktérov stali vládcovia a dobyvatelia všetkých známych Travianov.

Bolo však tiež povedané, že na výstavbu takejto budovy budú potrebné stavebné plány. Vďaka tomu architekti vymysleli rafinované plány, ako ich bezpečne uložiť. Po chvíli bolo možné v mnohých mestách a metropolách vidieť chrámové budovy - Treasure Chambers (Pokladnice).

Žiaľ, nikto – ani múdri a zbehlí – nevedeli, kde tieto stavebné plány nájsť. Čím viac sa ich ľudia snažili nájsť, tým viac sa zdalo, že sú tam len legendy.

Dnes však bude toto posledné tajomstvo odhalené. Deprivácie a snahy z minulosti nebudú márne, pretože dnes skauti niekoľkých kmeňov úspešne získali miesto, kde sa nachádzali stavebné plány. Dobre strážené Natarmi, ležia ukryté v niekoľkých oázach, ktoré možno nájsť po celom Traviane. Len tým najudatnejším hrdinom sa podarí takýto plán zabezpečiť a bezpečne doniesť domov, aby sa mohla začať stavba.

Nakoniec uvidíme, či slobodné kmene Travianov opäť dokážu prekabátiť Natarov a raz a navždy ich poraziť. Nebuďte však takí hlúpi, aby ste predpokladali, že Natari odídu bez boja!
<img src=\"img/x.gif\" class=\"WWBuildingPlansAnnouncement\" title=\"".PLAN."\" alt=\"".PLAN."\">

Ak chcete ukradnúť súbor stavebných plánov od Natarov, musia sa stať tieto veci:
- Musíte zaútočiť na dedinu (NIE nájazd!)
- Útok musíte VYHRAŤ
- Musíte ZNIČIŤ pokladnicu (Pokladnicu)
- Váš hrdina MUSÍ byť v tomto útoku, pretože je jediný, kto môže niesť Stavebné plány
- Prázdna Treasure Chamber (Pokladnica) úrovne 10 MUSÍ byť v dedine, odkiaľ tento útok prišiel.
POZNÁMKA: Ak počas útoku nie sú splnené vyššie uvedené kritériá, ďalší útok na dedinu, ktorá spĺňa vyššie uvedené kritériá, prevezme Stavebné plány.


Na vybudovanie pokladnice (pokladnice) budete potrebovať hlavnú budovu úrovne 10 a dedina NESMIE obsahovať div sveta.

Ak chcete postaviť div sveta, musíte sami vlastniť Stavebné plány (vy = Vlastník World Wonder Village) od úrovne 0 do 50 a potom od úrovne 51 do 100 budete potrebovať ďalšiu sadu stavebných plánov vo vašej aliancii! Dve sady stavebných plánov na účte World Wonder Village nebudú fungovať!");

//Admin setting - Admin/Templates/config.tpl & editServerSet.tpl
define("EDIT_BACK","Back");
define("SERV_CONFIG","Server Configuration");
define("SERV_SETT","Nastavenia servera");
define("EDIT_SERV_SETT","Upravte nastavenia servera");
define("SERV_VARIABLE","Variable");
define("SERV_VALUE","Value");
define("CONF_SERV_NAME","Server Name");
define("CONF_SERV_NAME_TOOLTIP","Name of the game server.");
define("CONF_SERV_STARTED","Server Started");
define("CONF_SERV_STARTED_TOOLTIP","Time when the game server was started. This parameter can not be changed on the installed game server.");
define("CONF_SERV_TIMEZONE","Server Timezone");
define("CONF_SERV_TIMEZONE_TOOLTIP","Timezone of the game server.");
define("CONF_SERV_LANG","Language");
define("CONF_SERV_LANG_TOOLTIP","The language that is used in the admin panel and for everyone on the game server by default.");
define("CONF_SERV_SERVSPEED","Server Speed");
define("CONF_SERV_SERVSPEED_TOOLTIP","The speed of the game server. The higher the speed of the game server, the faster all buildings are built, the studies and improvements in the smithies are carried out, the troops are quickly built and the productivity of all resources is increased.");
define("CONF_SERV_TROOPSPEED","Troop Speed");
define("CONF_SERV_TROOPSPEED_TOOLTIP","Speed of movement of troops on the game server. The higher this indicator, the faster the troops move across the map.");
define("CONF_SERV_EVASIONSPEED","Evasion Speed");
define("CONF_SERV_EVASIONSPEED_TOOLTIP","The evasion speed is the time that troops spend on the road to return home after evasion an attack.");
define("CONF_SERV_STORMULTIPLER","Storage Multipler");
define("CONF_SERV_STORMULTIPLER_TOOLTIP","A multiplier for the storage capacity warehouse and granary. The value 1 is equal to the capacity of 80,000 of each resource at the maximum level. If you set the value to 2, then the capacity at the maximum level will be 160,000 of each resource.<br><b>Note:</b> the amount of resources that will be generated by unoccupied oases for robbery depends on this value. The default is 800. If you set the value to 2, the maximum number for each resource being generated is 1600.");
define("CONF_SERV_TRADCAPACITY","Trader Capacity");
define("CONF_SERV_TRADCAPACITY_TOOLTIP","A multiplier for the capacity of resources that can be carried by one trader. The value of 1 equals 500 capacity for the Romans, 750 for the Gauls, 1000 for the Teutons. If you set the value to 2, then the capacity of the transferred resources will double accordingly, 1000, 1500, 2000.");
define("CONF_SERV_CRANCAPACITY","Cranny Capacity");
define("CONF_SERV_CRANCAPACITY_TOOLTIP","A multiplier for the capacity of resources in Cranny, which can be saved from robbery. The value of 1 is equal to 1000 for Romans and Teutons, 2000 for Gauls. If you set the value to 2, then the capacity of the Cranny will double to 2000 and 4000 respectively.");
define("CONF_SERV_TRAPCAPACITY","Trapper Capacity");
define("CONF_SERV_TRAPCAPACITY_TOOLTIP","A multiplier for the capacity of the trap of the Gauls, which can capture enemy soldiers even before attacking the village. The value of 1 is equal to the capacity of 400 at the 20 level of construction. If you set the value to 2, then the capacity will be 800.");
define("CONF_SERV_NATUNITSMULTIPLIER","Natars Units Multiplier");
define("CONF_SERV_NATUNITSMULTIPLIER_TOOLTIP","This parameter is responsible for the number of troops of Natars, on artifacts and WW villages.");
define("CONF_SERV_NATARS_SPAWN_TIME","Natars Spawn");
define("CONF_SERV_NATARS_SPAWN_TIME_TOOLTIP","After how long Natars and artifacts will spawn from the start date of the server, in days");
define("CONF_SERV_NATARS_WW_SPAWN_TIME","World Wonders Spawn");
define("CONF_SERV_NATARS_WW_SPAWN_TIME_TOOLTIP","After how long WW villages will spawn from the start date of the server, in days");
define("CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME","WW Building Plan Spawn");
define("CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME_TOOLTIP","After how long WW building plans will spawn from the start date of the server, in days");
define("CONF_SERV_MAPSIZE","Map Size");
define("CONF_SERV_MAPSIZE_TOOLTIP","The size of the map of the game world. Can not be changed on an already installed game server.");
define("CONF_SERV_VILLEXPSPEED","Village Expanding Speed");
define("CONF_SERV_VILLEXPSPEED_TOOLTIP","Speed, which affects the expansion of the empire. With a slow speed more culture points are needed to found new village, with a fast speed the required number of culture points is reduced.");
define("CONF_SERV_BEGINPROTECT","Beginners Protection");
define("CONF_SERV_BEGINPROTECT_TOOLTIP","Protection, which prohibits a certain time to attack the villages of new players.");
define("CONF_SERV_REGOPEN","Register Open");
define("CONF_SERV_REGOPEN_TOOLTIP","Allows to enable (True) or disable (False) the registration of players on the game server.");
define("CONF_SERV_ACTIVMAIL","Activation Mail");
define("CONF_SERV_ACTIVMAIL_TOOLTIP","If enabled (Yes), during registration it will be necessary to confirm email address. If disabled (No) does not require confirmation of e-mail.");
define("CONF_SERV_QUEST","Quest");
define("CONF_SERV_QUEST_TOOLTIP","Enable (Yes) or disable (No) the quest on the game server.");
define("CONF_SERV_QTYPE","Quest Type");
define("CONF_SERV_QTYPE_TOOLTIP","The quest type can be official which is a bit shorter, and extended which is longer.");
define("CONF_SERV_DLR","Demolish - Level required");
define("CONF_SERV_DLR_TOOLTIP","The required level of the main building, on which can carry out the demolition of buildings in the village.");
define("CONF_SERV_WWSTATS","World Wonder - Statistics");
define("CONF_SERV_WWSTATS_TOOLTIP","Enable (True) or disable (False) the display in the statistics of villages with a Wonder of the World.");
define("CONF_SERV_NTRTIME","Nature Troops Regeneration Time");
define("CONF_SERV_NTRTIME_TOOLTIP","Time through which the nature troops will be restored in oases.");
define("CONF_SERV_OASIS_WOOD_PROD_MULT","Oasis Wood Production Multiplier");
define("CONF_SERV_OASIS_WOOD_PROD_MULT_TOOLTIP","The base wood oasis production");
define("CONF_SERV_OASIS_CLAY_PROD_MULT","Oasis Clay Production Multiplier");
define("CONF_SERV_OASIS_CLAY_PROD_MULT_TOOLTIP","The base clay oasis production");
define("CONF_SERV_OASIS_IRON_PROD_MULT","Oasis Iron Production Multiplier");
define("CONF_SERV_OASIS_IRON_PROD_MULT_TOOLTIP","The base iron oasis production");
define("CONF_SERV_OASIS_CROP_PROD_MULT","Oasis Crop Production Multiplier");
define("CONF_SERV_OASIS_CROP_PROD_MULT_TOOLTIP","The base crop oasis production");
define("CONF_SERV_MEDALINTERVAL","Medal Interval");
define("CONF_SERV_MEDALINTERVAL_TOOLTIP","The time interval for issuing medals for the top players and alliances. If this parameter is changed on the installed server, the time interval changes after the subsequent issuance of the medals.");
define("CONF_SERV_TOURNTHRES","Tourn Threshold");
define("CONF_SERV_TOURNTHRES_TOOLTIP","The number of squares on the game map, after which Tournament Square will start working.");
define("CONF_SERV_GWORKSHOP","Great Workshop");
define("CONF_SERV_GWORKSHOP_TOOLTIP","Enable (True) or disable (False) the use of a Great Workshop in the game.");
define("CONF_SERV_NATARSTAT","Show Natars in Statistics");
define("CONF_SERV_NATARSTAT_TOOLTIP","Enable (True) or disable (False) the display of the Natars account in statistics.");
define("CONF_SERV_PEACESYST","Peace system");
define("CONF_SERV_PEACESYST_TOOLTIP","Enable or disable the Peace system. When the peace system is activated, players will be able to attack each other but instead of any actions in the reports there will be a congratulatory inscription. The troops will not die of hunger.");
define("CONF_SERV_GRAPHICPACK","Graphic Pack");
define("CONF_SERV_GRAPHICPACK_TOOLTIP","Enable (Yes) or disable (No) the ability to use the graphics package.");
define("CONF_SERV_ERRORREPORT","Error Reporting");
define("CONF_SERV_ERRORREPORT_TOOLTIP","Enable (Yes) or disable (No) the display of error reports on the game server.");

//Admin setting - Admin/Templates/config.tpl & editPlusSet.tpl
define("PLUS_CONFIGURATION","<b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> Configuration");
define("PLUS_SETT","<b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> Settings");
define("EDIT_PLUS_SETT","Edit <b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> Setting");
define("EDIT_PLUS_SETT1","Edit PLUS Setting");
define("CONF_PLUS_PAYPALEMAIL","<a href='https://www.paypal.com' target='_blank'>PayPal</a> E-Mail Address");
define("CONF_PLUS_PAYPALEMAIL_TOOLTIP","The E-Mail Address specified at registration on PayPal.<br><font color='red'><b>Must be Business or Premier account!</b></font>");
define("CONF_PLUS_CURRENCY","Payment Currency");
define("CONF_PLUS_CURRENCY_TOOLTIP","The currency to be used for payment.");
define("CONF_PLUS_PACKAGEGOLDA","Package \"A\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDA_TOOLTIP","The amount of gold issued for the payment of the package \"A\".");
define("CONF_PLUS_PACKAGEPRICEA","Package \"A\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEA_TOOLTIP","The amount necessary to pay the cost of package \"A\".");
define("CONF_PLUS_PACKAGEGOLDB","Package \"B\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDB_TOOLTIP","The amount of gold issued for the payment of the package \"B\".");
define("CONF_PLUS_PACKAGEPRICEB","Package \"B\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEB_TOOLTIP","The amount necessary to pay the cost of package \"B\".");
define("CONF_PLUS_PACKAGEGOLDC","Package \"C\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDC_TOOLTIP","The amount of gold issued for the payment of the package \"C\".");
define("CONF_PLUS_PACKAGEPRICEC","Package \"C\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEC_TOOLTIP","The amount necessary to pay the cost of package \"C\".");
define("CONF_PLUS_PACKAGEGOLDD","Package \"D\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDD_TOOLTIP","The amount of gold issued for the payment of the package \"D\".");
define("CONF_PLUS_PACKAGEPRICED","Package \"D\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICED_TOOLTIP","The amount necessary to pay the cost of package \"D\".");
define("CONF_PLUS_PACKAGEGOLDE","Package \"E\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDE_TOOLTIP","The amount of gold issued for the payment of the package \"E\".");
define("CONF_PLUS_PACKAGEPRICEE","Package \"E\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEE_TOOLTIP","The amount necessary to pay the cost of package \"E\".");
define("CONF_PLUS_ACCDURATION","<b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> account duration");
define("CONF_PLUS_ACCDURATION_TOOLTIP","The duration of the game function <b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> for the account at the time of activation by the player.");
define("CONF_PLUS_PRODUCTDURATION","+25% production duration");
define("CONF_PLUS_PRODUCTDURATION_TOOLTIP","The duration of the game function +25% production duration for the account at the time of activation by the player.");

//Admin setting - Admin/Templates/config.tpl & editLogSet.tpl
define("LOG_SETT","Log Settings");
define("EDIT_LOG_SETT","Edit Log Setting");
define("CONF_LOG_BUILD","Log Build");
define("CONF_LOG_BUILD_TOOLTIP","Enable (Yes) or disable (No) the display of logs for the construction of buildings in the village.");
define("CONF_LOG_TECHNOLOGY","Log Technology");
define("CONF_LOG_TECHNOLOGY_TOOLTIP","Enable (Yes) or disable (No) display logs to improve troops in Blacksmith and Armoury.");
define("CONF_LOG_LOGIN","Log Login");
define("CONF_LOG_LOGIN_TOOLTIP","Enable (Yes) or disable (No) the display logs players login the game.");
define("CONF_LOG_GOLD","Log Gold");
define("CONF_LOG_GOLD_TOOLTIP","Enable (Yes) or disable (No) the display of gold use logs in-game by players.");
define("CONF_LOG_ADMIN","Log Admin");
define("CONF_LOG_ADMIN_TOOLTIP","Enable (Yes) or disable (No) the display of logs for administrator actions in the control panel.");
define("CONF_LOG_WAR","Log War");
define("CONF_LOG_WAR_TOOLTIP","Enable (Yes) or disable (No) the display of logs attacks on players in the game.");
define("CONF_LOG_MARKET","Log Market");
define("CONF_LOG_MARKET_TOOLTIP","Enable (Yes) or disable (No) the display of the logs of the use of the market in the game by the players.");
define("CONF_LOG_ILLEGAL","Log Illegal");
define("CONF_LOG_ILLEGAL_TOOLTIP","Enable (Yes) or disable (No) the display of illegal logs. (I do not know exactly what it is)");

//Admin setting - Admin/Templates/config.tpl & editNewsboxSet.tpl
define("NEWSBOX_SETT","Newsbox Settings");
define("EDIT_NEWSBOX_SETT","Edit Newsbox Setting");
define("EDIT_NEWSBOX1","Newsbox 1");
define("EDIT_NEWSBOX1_TOOLTIP","Enable or disable the display of the Newsbox 1. Displayed on the authorization page and on the game pages.");
define("EDIT_NEWSBOX2","Newsbox 2");
define("EDIT_NEWSBOX2_TOOLTIP","Enable or disable the display of the Newsbox 2. Displayed on the authorization page and on the game pages.");
define("EDIT_NEWSBOX3","Newsbox 3");
define("EDIT_NEWSBOX3_TOOLTIP","Enable or disable the display of the Newsbox 3. Displayed on the authorization page and on the game pages.");

//Admin setting - Admin/Templates/config.tpl SQL Settings
define("SQL_SETTINGS","SQL Settings");
define("CONF_SQL_HOSTNAME","Hostname");
define("CONF_SQL_HOSTNAME_TOOLTIP","The name of the server where MySQL is started (by default is: localhost).");
define("CONF_SQL_PORT","Port");
define("CONF_SQL_PORT_TOOLTIP","MySQL port for remote connection. The standard port for connecting is: 3306.");
define("CONF_SQL_DBUSER","DB Username");
define("CONF_SQL_DBUSER_TOOLTIP","The user name to connect to the database.");
define("CONF_SQL_DBPASS","DB Password");
define("CONF_SQL_DBPASS_TOOLTIP","Password from the user to connect to the database.");
define("CONF_SQL_DBNAME","DB Name");
define("CONF_SQL_DBNAME_TOOLTIP","Name of the database to which you are connecting.");
define("CONF_SQL_TBPREFIX","Table Prefix");
define("CONF_SQL_TBPREFIX_TOOLTIP","The prefix used for the database tables.");
define("CONF_SQL_DBTYPE","DB Type");
define("CONF_SQL_DBTYPE_TOOLTIP","The type of database used.");

//Admin setting - Admin/Templates/config.tpl & editExtraSet.tpl
define("EXTRA_SETT","Extra Settings");
define("EDIT_EXTRA_SETT","Edit Extra Settings");
define("CONF_EXTRA_LIMITMAIL","Limit Mailbox");
define("CONF_EXTRA_LIMITMAIL_TOOLTIP","Enable (Yes) or disable (No) the mailbox limit.");
define("CONF_EXTRA_MAXMAIL","Max number of mails");
define("CONF_EXTRA_MAXMAIL_TOOLTIP","The maximum number of messages that can fit in the mailbox.");

//Admin setting - Admin/Templates/config.tpl & editAdminInfo.tpl
define("ADMIN_INFO","Admin Information");
define("EDIT_ADMIN_INFO","Edit Admin Information");
define("CONF_ADMIN_NAME","Admin Name");
define("CONF_ADMIN_NAME_TOOLTIP","Name for the administrator account.");
define("CONF_ADMIN_EMAIL","Admin E-Mail");
define("CONF_ADMIN_EMAIL_TOOLTIP","The email address for the administrator account.");
define("CONF_ADMIN_SHOWSTATS","Include Admin in Stats");
define("CONF_ADMIN_SHOWSTATS_TOOLTIP","Enable (True) or disable (False) the display of the administrator account in the general statistics of players.");
define("CONF_ADMIN_SUPPMESS","Include Support Messages");
define("CONF_ADMIN_SUPPMESS_TOOLTIP","Enable (True) or disable (False) the sending of messages to the mailbox of the administrator addressed to Support.");
define("CONF_ADMIN_RAIDATT","Allow Raided and Attacked");
define("CONF_ADMIN_RAIDATT_TOOLTIP","Enable (True) or disable (False) the ability to Raided and Attacked an administrator.");

/*
|--------------------------------------------------------------------------
|   Index
|--------------------------------------------------------------------------
*/

	   $lang['index'][0][1] = "Vitajte na " . SERVER_NAME . "";
	   $lang['index'][0][2] = "Manuál";
	   $lang['index'][0][3] = "Hrajte teraz zadarmo!";
	   $lang['index'][0][4] = "Čo je " . SERVER_NAME . "";
	   $lang['index'][0][5] = "" . SERVER_NAME . " je <b>prehliadačová hra</b> s pútavým starovekým svetom s tisíckami ďalších skutočných hráčov.</p><p>Hra je <strong>zadarmo</strong> a nevyžaduje žiadne <strong>sťahovanie</strong>.";
	   $lang['index'][0][6] = "Ak chcete hrať " . SERVER_NAME . ", kliknite sem ";
	   $lang['index'][0][7] = "Celkový počet hráčov";
	   $lang['index'][0][8] = "Aktívni hráči";
	   $lang['index'][0][9] = "Online hráči";
	   $lang['index'][0][10] = "O hre";
	   $lang['index'][0][11] = "Začnete ako náčelník malej dediny a vydáte sa na vzrušujúcu výpravu.";
	   $lang['index'][0][12] = "Vybudujte dediny, veďte vojny alebo vytvorte obchodné cesty so svojimi susedmi.";
	   $lang['index'][0][13] = "Hrajte s tisíckami ďalších skutočných hráčov a proti nim a dobyjte svet Universu.";
	   $lang['index'][0][14] = "Novinky";
	   $lang['index'][0][15] = "FAQ";
	   $lang['index'][0][16] = "Snímky obrazovky";
$lang['forum'] = "Fórum";
  $lang['register'] = "Registrovať";
  $lang['login'] = "Prihlásenie";
  $lang['screenshots']['title1']="Dedina";
  $lang['screenshots']['desc1']="Budova dediny";
 $lang['screenshots']['title2']="Zdroj";
 $lang['screenshots']['desc2']="Dedinským zdrojom je drevo, hlina, železo a úroda";
 $lang['screenshots']['title3']="Mapa";
 $lang['screenshots']['desc3']="Umiestnenie vašej dediny na mape";
 $lang['screenshots']['title4']="Budova stavby";
 $lang['screenshots']['desc4']="Ako postaviť budovu alebo úroveň zdrojov";
 $lang['screenshots']['title5']="Správa";
 $lang['screenshots']['desc5']="Vaša správa o útoku";
 $lang['screenshots']['title6']="Štatistiky";
 $lang['screenshots']['desc6']="Zobraziť hodnotenie v štatistikách";
 $lang['screenshots']['title7']="Zbrane alebo cesto";
 $lang['screenshots']['desc7']="Môžete si vybrať, či budete hrať za armádu alebo ekonomiku";


?>

