# API_Kobercova_DP3-1
- # Kas ir API?
API ir saīsījums, kas apzīmē Application Programming Interface jeb lietotājprogrammu saskarni. Tas ir veids, kā programmētāji var izmantot programmējamās sistēmas vai pakalpojumus, lai veiktu dažādas darbības vai saņemtu informāciju. API nosaka, kā dažādi datori un programmatūras komponenti var sazināties un sadarboties vienam ar otru. Tas var ietvert funkciju, datu struktūru vai protokolu komplektu, kas ļauj programmētājiem izmantot noteiktas funkcijas, izmantojot savu programmēšanas valodu vai platformu, nevis radīt visu no nulles. 

- # Kā deklarēt mainīgo PHP valodā?
Mainīgo PHP valodā var deklarēt, izmantojot dolāra zīmi ($) un vēlamo mainīgā nosaukumu.
- # Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
Laravel izmanto Model-View-Controller (MVC) arhitektūru, kas ir viena no visbiežāk izmantotajām un labi strukturētām pieejas veidlapām, lai veidotu tīmekļa lietojumprogrammas. 
Kad lietotājs veic pieprasījumu, tas tiek nosūtīts uz attiecīgo maršrutētāju, kas tad nosūta pieprasījumu uz attiecīgo kontrolieri. Kontrolieris tad sadarbina ar modeļiem, lai iegūtu vai saglabātu nepieciešamos datus, un pēc tam atgriež atbilstošu skatu lietotājam. 

- # Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM ir Object-Relational Mapping jeb objektu-reklašu attēlošana, kas ir tehnoloģija, kas ļauj programmētājiem strādāt ar datubāzes datiem, izmantojot objektu orientētu pieeju, nevis tiešu SQL valodas izmantošanu. 
# Daži iemesli, kādēļ izmantot ORM tīrā SQL vietā, ietver:
    1. Objektu orientēta pieeja: ORM ļauj darboties ar datubāzes ierakstiem kā ar objektiem, kas ir dabiski saprotami programmētājiem, kuri ir pieredzējuši ar objektu orientēto programmēšanu.
    2. Atvieglo attiecību pārvaldību: ORM automātiski izveido un uzturēs attiecības starp dažādiem datubāzes modeļiem, padarot datu manipulāciju un iegūšanu arvien vienkāršāku.
    3. Platformas neatkarība: ORM bieži vien nodrošina platformas neatkarību, kas ļauj izstrādātājiem pārnest aplikācijas starp dažādām datubāzēm, nemainot lietotāja koda loģiku.

- # Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra
- ![image](https://github.com/xdkanashi/API_Kobercova_DP3-1/assets/101179906/dd8650ab-224f-418f-91e7-f7df8a77680e)

use App\Models\User;

$lietotaji = User::where('reitings', '>', 4)->get();


