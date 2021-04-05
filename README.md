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

Här skriver du din redovisningstext för detta kursmoment.



\chapter{Enhetstestning}

Här skriver du din redovisningstext för detta kursmoment.



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
