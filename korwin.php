<?php
function korwin () {
    $korwin1 = [ "Ja chcę powiedzieć jedną rzecz:", "Trzeba powiedzieć jasno:", "Jak powiedział wybitny krakowianin Stanisław Lem,", "Proszę mnie dobrze zrozumieć:", "Ja chciałem państwu przypomnieć, że", "Niech państwo nie mają złudzeń:", "Powiedzmy to wyraźnie:", "Mnie uczono (za komuny to było), że powinna być normalność. A", "Proszę państwa,", "Proszę mi uwierzyć,", "Proszę państwa! Przecież to jest rzeczą niewyobrażalną, że", "Szanowni państwo, ja się urodziłem w normalnych czasach, kiedy panowała normalność. A dzisiaj" ];
    $korwin2 = [ "przedstawiciele czerwonej hołoty", "ci wszyscy (tfu!) geje", "funkcjonariusze reżymowej telewizji", "tak zwani ekolodzy", "ci wszyscy (tfu!) demokraci", "agenci bezpieki", "feminazistki", "marksiści, leniniści i maoiści", "agenci Kiszczaka", "unijni biurokraci", "ci ekoterroryści", "socjaliści - wszystko jedno - zieloni, czerwoni czy niebiescy" ]; 
    $korwin3 = [ "zupełnie bezkarnie", "całkowicie bezczelnie", "o poglądach na lewo od komunizmu", "celowo i świadomie", "z premedytacją", "od czasów Okrągłego Stołu", "w ramach postępu", "na skutek umów w Magdalence i przy Okrągłym Stole", "w ramach walki z tak zwanym globalnym ociepleniem", "sponsorowani przez Amerykanów", "za państwa pieniądze" ]; 
    $korwin4 = [ "nawołują do podniesienia podatków", "próbują wyrzucić kierowców z miast", "próbują skłócić Polskę z Rosją", "głoszą brednie o globalnym ociepleniu", "zakazują posiadania broni", "nie dopuszczają prawicy do władzy", "uczą dzieci homoseksualizmu", "próbują nas uciszyć", "zatrudniają coraz więcej urzędników", "fałszują wybory" ]; 
    $korwin5 = [ "bo dzięki temu mogą kraść,", "bo dostają za to pieniądze,", "bo tak się uczy w państwowej szkole,", "bo bez tego (tfu!) demokracja nie może istnieć,", "bo głupich jest więcej niż mądrych,", "bo chcą stworzyć raj na ziemi,", "bo chcą niszczyć cywilizacje białego człowieka,", "ponieważ są socjalistami,", "żeby wprowadzić ustrój komunistyczny,", "aby pozbawić Polskę suwerenności," ]; 
    $korwin6 = [ "o czym się nie mówi", "i właśnie dlatego Europa umiera", "ale przyjdą muzułmanie i zrobią porządek", "tak samo zresztą jak za Hitlera", "proszę zobaczyć, co się dzieje na Zachodzie, jeśli mi państwo nie wierzą", "co lat temu sto nikomu nie przyszłoby nawet do głowy", "dlatego musimy zabić, kurwa, tych ludzi!", "i ja o tym mówię od trzydziestu pięciu lat", "dlatego Unię Europejską należy zniszczyć", "co w normalnym kraju nie byłoby możliwe", "dlatego w następnych wyoborach zdobędziemy co najmniej 20%" ]; 
    return $korwin1[array_rand($korwin1)]." ".
           $korwin2[array_rand($korwin2)]." ".
           $korwin3[array_rand($korwin3)]." ".
           $korwin4[array_rand($korwin4)]." ".
           $korwin5[array_rand($korwin5)]." ".
           $korwin6[array_rand($korwin6)];
}
echo korwin();