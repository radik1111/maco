$( document ).ready(function() {
            $("a").attr("href", function(i, origValue){
              return origValue + "?eng=1"; 
            });
});