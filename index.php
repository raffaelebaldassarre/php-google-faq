<!-- php-google-faq
Istruzioni:
Riscrivere questa pagina del sito google
https://policies.google.com/faq. 
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php 

    $faq = [

        [
            'question' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
            'answer' => "La recente <a href='http://curia.europa.eu/juris/document/document.jsf?text=&docid=152065&amppageIndex=0&doclang=it&mode=lst&dir=&occ=first&part=1&cid=276332'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.@

            Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.@
            
            Per presentare una richiesta di rimozione, compila questo <a href='https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637477933963866193-3989778489&hl=it&rd=1'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.@
            
            Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.@
            
            Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
        ],
        [
            'question' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
            'answer' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.@

            Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.@
            
            Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='https://www.google.com/safetycenter/'>Centro Google per la sicurezza online</a>.@
            
            <a href='https://privacy.google.com/'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
        ],
        [
            'question' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
            'answer' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='https://support.google.com/websearch/answer/9109?hl=it'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai <a href='https://support.google.com/legal/contact/lr_eudpa?product=websearch&hl=it'>clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='https://support.google.com/websearch/troubleshooter/3111061?hl=it'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>."
        ],
        [
            'question' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
            'answer' => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli <a href='https://policies.google.com/privacy/key-terms#toc-terms-http'>URL referrer</a>. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='https://support.google.com/websearch/answer/173733'>qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
        ]
    ];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet"> 
<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: 'Roboto', sans-serif;
}

header{
    border-bottom: 1px solid grey;
}

.flex{
    display: flex;
}

.logo{
    margin: 20px 0 10px 10px;;
}

.logo p{
    font-size : 1.2em;
    font-weight: 300;
    line-height: 1.5em;
    margin-left: 10px;
    color: grey;
}

.container{
    width: 55%;
    margin: auto;
}

.container h2{
    padding-top: 80px;
    font-weight: 400;
    line-height: 1.5em;
}

.container p{
    padding-top:20px;
    font-weight: 100;
    line-height: 1.5em;
}

ul{
    list-style: none;
}
li:first-child{
    margin-left:10px;
}

li{
    margin-right: 25px;
    padding-bottom: 5px;
    color:grey;
}

li:active, li.active{
    color:blue;
    cursor:pointer;
    border-bottom: 3px solid blue;
}

</style>
</head>
<body>

    <header>
    <nav>
        <div class="logo flex">
            <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="logo-google">
            <p>Privacy & termini</p>
        </div>
        <div class="link">
            <ul class="flex">
                <li>Introduzione</li>
                <li>Norme sulla privacy</li>
                <li>Termini di Servizio</li>
                <li>Tecnologie</li>
                <li class="active">Domande Frequenti</li>
            </ul>
        </div>
    </nav>
    </header>
    <main>   
        <div class="container">
            <?php 
            foreach ($faq as $value) { ?>
                <h2> <?php echo $value['question'] ?></h2>
                
                <?php
                    $answerExplode = explode('@', $value['answer']);
                    foreach ($answerExplode as $answer) { ?>
                        <p> <?php echo $answer ?></p>
                    <?php }
                ?>

            <?php } ?>
        </div>
    </main>

</body>
</html>