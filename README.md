[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Knucklefist01/mvc/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/Knucklefist01/mvc/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/Knucklefist01/mvc/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/Knucklefist01/mvc/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/Knucklefist01/mvc/badges/build.png?b=main)](https://scrutinizer-ci.com/g/Knucklefist01/mvc/build-status/main)
[![Build Status](https://travis-ci.org/Knucklefist01/mvc.svg?branch=main)]()
\documentclass[oneside]{book}
%\documentclass{article}
\usepackage[utf8]{inputenc}
\usepackage[swedish]{babel}
\usepackage{biblatex}
\usepackage{csquotes}
\addbibresource{references.bib}

\setlength{\parskip}{1em}

\usepackage{hyperref}
\hypersetup{
    colorlinks=true,
    linkcolor=blue,
    filecolor=magenta,      
    urlcolor=blue,
}
 

\begin{document}

\begin{titlepage}
    \begin{center}
        \vspace*{1cm}
 
        \Huge
        \textbf{Min Kursrapport}
 
        \vspace{0.5cm}
        \LARGE
        DV1610\\
        Objektorienterade webbteknologier\\
        (mvc)
 
        \vspace{0.5cm}
        \LARGE
        Förnamn Efternamn\\
        min-epost@some.where\\

        \vspace{0.5cm}
        \LARGE
        v1.0.0\\
        Mars 16, 2021
 
        \vfill
 
        \vspace{2cm}
        \Large
        Läsperiod 4\\
        Våren 2021

        \vspace{0.5cm}
        \Large
        Institutionen för datavetenskap (DIDA)\\
        Blekinge Tekniska Högskola (BTH)\\
        Sverige
 
    \end{center}
\end{titlepage}

\tableofcontents



\chapter{Objektorientering}

Jag har sedan tidigare jobbat lite med objektorientering från python kursen jag har en ganska hyfsad uppfattning om vad det innebär och hur man bör använda det. Dock har jag aldrig använt mig av objekt i PHP ännu.
Att skapa en klass är som att rita en mall, utifrån den mallen kan man sedan skapa instanser (kopior) av mallen. En klass innehåller ett antal variabler s.k. attribut, och funktioner s.k. metoder. Med hjälp av metoderna kan man hantera dem attribut som tillhör en viss instans av klassen utan att påverka dem andra instanserna.
När det kommer till kodbasen så tyckte jag att den verkade väldigt komplicerad. Jag har lite svårt för att förstå mig på namespaces och hur dem relaterar till mappar och filer. Samtidigt så blir det även ibland svårt att förstå skillnaden på vart en fil ligger på och vart den exekveras. Jag börjar väldigt långsamt förstå mig på allting men det var/är en väldigt brant start på kursmomentet.
När det kommer till själva funktionaliteten på spelet så är jag väldigt nöjd, allting fungerar precis som jag tänkte mig och upplägget blev bra. Dock var uppgiften väldigt svår, jag tyckte inte att vi fick en tydlig ingång på hur routern fungerade så när man väl skulle skicka POST-formulär och omdirigera info till andra filer så kändes det väldigt otydligt och krångligt. Jag skulle säga att min kod håller en god kvalitet, men inte mycket högre än så. Visst allting fungerar utmärkt men just nu så ligger det väldigt mycket kod i routern och jag fick svårt att flytta iväg kod därifrån till andra filer, detta på grund av det jag nämnde innan om lite otydlig vägledning.
Säkerhet är något som intresserar mig, främst för att jag inte vet så mycket om det. Jag kan lite grundläggande saker som att man bör hasha lösenord och sanera användar-inputs men jag vet att det finns grejer som går djupare än så och att det går mycket in i att se till att ens kod är säker. Säkerhet är även något som är väldigt viktigt speciellt om man börjar hantera lite mer känslig information om användare som t.ex. adresser och personnummer.
Min TIL för detta kursmoment är namespaces, än så länge så har jag ett väldigt svagt grepp på hur dem fungerar och vad man bör använda dem till och om jag är på rätt spår så kan jag se många möjligheter till att dela upp och organisera kod på ett väldigt snyggt och enkelt sätt.

\chapter{Controller}

Nyttan jag fick av att göra flödesdiagram och psuedokod innan jag började programmera är att jag kunde rita upp en bild på vad jag förväntade mig och sedan ta isär det till mindre delar som jag sedan kunde programmera. Jag använde mig därför av "top-down" när jag planerade min kod, t.ex. så löste jag ett sätt att kunna välja poäng innan jag skapade alla möjliga poäng som man ska ha möjligheten att välja. Kort sagt så skapade jag den generella funktionaliteten innan jag skapade alla scenarios då den kommer användas.
I objektorientering så kan klasser "ärva" av andra klasser, detta innebär att när en klass ärver så får den alla metoder och attribut från klassen den ärver ifrån. Detta gör det enkelt att bygga en typ av basklass som flera andra klasser sedan ärver av istället för att skriva samma funktion på flera ställen i koden. Detta gör man enkelt i PHP genom att skriva "class Klass1 extends Klass0". Komposition är när en klass inte direkt ärver av en klass utan istället lagrar en instans av en klass i ett eget attribut. Ett exempel på detta som jag använt tidigare är en klass jag döpte till DiceHand som innehöll flera attribut som i sin tur innehöll instanser av Dice-klasser. Ett interface specificerar vilka funktioner en klass måste implementera för att vara giltig. Skulle en klass sakna någon utav funktionerna i interfacet så får man ett felmeddelande. Traits är ett sätt att ärva specifika delar utav andra klasser och använda dem separat från dess ursprungsklass.
Jag är väldigt nöjd med mitt spel, jag tycker det ser bra ut och det fungerar precis som jag tänkte mig. Jag löste uppgiften genom att först rita upp layouten och sedan fylla den med knappar och bilder. När det var klart så gjorde jag en Yatzy-klass som tog mycket inspiration från min tidigare Game-klass. Jag implementerade sedan funktioner som att kasta tärningarna, spara vissa tärningar och kasta resten, och till sist möjligheten att skriva upp poäng. Det finns dock flera saker jag kan förbättra, layouten och stilen på spelet för för tillfället ganska stel och tråkig. Jag hade gärna lagt till lite animationer för att göra spelet mer intressant. För tillfället så finns inte heller möjligheten att fylla i alla fälten på spelet så det hade jag gärna också fixat om jag hade haft mer tid. Jag tycker att detta var en väldigt lagom uppgift. Man kunde dra mycket information från förra kursmomentet men samtidigt var det mycket nya grejer så att det inte bara blev exakt samma sak. Personligen så tycker jag att min kod håller en väldigt kod kvalitet, den är simpel, lätt att följa och enkel att förstå.
Jag gillar den strukturen som vi börjat använda med flera moduler och en separat controller, det blev lättare att kunna följa vägen som en request tar och vad det är som händer vilket gjorde det mycket lättare att felsöka eventuella problem.
Min TIL för detta kursmoment är klassers arv och hur man kan använda dem för att slimma ner sin kod och inte behöva upprepa saker på flera ställen. Främst när det kommer till alla dem olika klasserna som används i controllern.

\chapter{Enhetstestning}

Att skriva kod som testar annan kod är intressant men också lite konstigt. Man måste tänka två lager djupt för att se till att koden inte bara funkar för det den ska användas till men också är lätt att testa senare.
Jag lyckades ganska bra med kodtäckningen och slutade med 91,34\%. Det var lite svårt att testa config-mappen då jag inte förstår helt och hållet hur allting i den fungerar men jag lyckades lösa en delar av den ändå.
Vissa delar av min kod var väldigt lätta att testa medans andra var lite svårare. Exempelvis så var det väldigt lätt att testa alla delarna av spelen men själva controllerna som ska hantera inkommande POST-formulär för spelen var mycket svårare att testa. Trots detta så är jag nöjd med min kod och dess testbarhet.
Redan från början så tycker jag att min kod var ganska lätt att testa men jag ändrade lite på koden för att göra den ännu enklare att testa. Exempelvis så såg jag till att ha tydliga returns som var lätta att senare plocka upp utav dem olika testerna och jag hade delat in koden i mindre funktioner så man kan kunde kalla så att man kunde teste alla delar av programmet för sig.
I dem flesta fall så skulle jag säga att testbar kod är ren kod. Snygg är det inte helt säkert att den är då jag anser att snygg kod har mer med läsbarheten att göra över hur lätt den är att testa. Ren kod, å andra sidan, är kod som är lätt att följa, ger tydliga resultat och inte är allt för lång. Alla dem dragen hos koden har sin fördel senare när man ska testa den då man lättare kan isolera delar att testa och man vet vilka svar man bör få.
Min TIL för detta kursmomentet är enhetstestning. Det var något som jag kände till sedan innan men nu i detta kursmomentet så har jag fått öva mer på det och jag känner att jag fått ett stadigare grepp om hur man bör gå till väga när man ska testa sin egen kod och hur man redan från början kan tänka efter när man skriver sin kod så att den kommer vara lätt att testa senare.

\chapter{Ramverk}

Här skriver du din redovisningstext för detta kursmoment.



\chapter{Autentisering}

Här skriver du din redovisningstext för detta kursmoment.



\chapter{To be defined}

Här skriver du din redovisningstext för detta kursmoment.



\chapter{Projekt \& Examination}

Här skriver du din redovisningstext för detta avslutande kursmoment.

\section{Projektet}

Här skriver du din redovisningstext rörande projektet.

\section{Avslutningsvis}

Här skriver du de avslutande orden om kursen.



\newpage
\printbibliography

\end{document}
