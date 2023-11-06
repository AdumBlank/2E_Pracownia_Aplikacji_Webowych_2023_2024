function licz(nr) {
    lmpp = 1000000; // 6 miejsc po przecinku
    x = eval(document.form1.x.value);
    y = eval(document.form1.y.value);
  
    if (nr=="+") wynik = x+y;
    if (nr=="-") wynik = x-y;
    if (nr=="*") wynik = x*y;
    if (nr=="/") wynik = x/y;
    if (nr=="^") wynik = Math.pow(x,y);
  
    document.form1.operacja.value=nr;
    document.form1.wynik.value=Math.round(wynik*lmpp)/lmpp;
  }