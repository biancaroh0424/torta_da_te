function autocomplete(inp, arr) {

    var currentFocus;

    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;

        if (!val) { return false;}
        currentFocus = -1;

        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");

        this.parentNode.appendChild(a);

        for (i = 0; i < arr.length; i++) {

          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

            b = document.createElement("DIV");

            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);

            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

            b.addEventListener("click", function(e) {

                inp.value = this.getElementsByTagName("input")[0].value;

                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });

    inp.addEvevtListener('keydown',function(e){
        var x = document.getElementById(this.id + 'autocomplete-list');
        if (x) x = x.getElementsByTagName('div');
        if(e.keyCode == 40){
            currentFocus++;
            addActive(x);
        }else if(e.keyCode == 38){
            currentFocus--;
            addActive(x);
        }else if (e.keyCode == 13){
            e.preventDefault();
            if(currentFocus >-1){
                if(x) x[currentFocus].click();
            }
        }
    });
    function addActive(x){
        for(var i = 0; i < x.length; i++){
        }
    }
    function closeAllLists(elmnt){
        var x = document.getElementsByClassName("autocomplete-items");
        for(var i = 0; i < x.length; i++){
            if(elmn !=x[i] && elmn !=inp){
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    document.addEventListener("click",function (e){
        closeAllLists(e.target);
    });
}

var cakes = ["For Parents","For Children","For Kids","Wedding","Birthday","Anniversary","12 Servings","16 Servings","24 Servings","32 Servings","Vegiterian","Candle","Birthday Candle","Wedding Candle","Balloons","Cute Balloons","Valentine","Party","Fruit Cake","Cheese Cake","Chocolate Cake","Custard Cream"];

autocomplete(document.getElementById("searchNav"),cakes);