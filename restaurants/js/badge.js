// !function(w,d){
function t(w,d){
    function insertAfter(newNode, referenceNode) {
        referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
    }

    function parseQuery ( query ) {
        var Params = new Object ();
        if ( ! query ) return Params; // return empty object
        var Pairs = query.split(/[;&]/);
        for ( var i = 0; i < Pairs.length; i++ ) {
        var KeyVal = Pairs[i].split('=');
        if ( ! KeyVal || KeyVal.length != 2 ) continue;
        var key = unescape( KeyVal[0] );
        var val = unescape( KeyVal[1] );
        val = val.replace(/\+/g, ' ');
        Params[key] = val;
        }
        return Params;
    }

    var  currentScript = document.currentScript;
    if(currentScript == null){
        currentScript = d.getElementById('testScript');
    }
    var ticId = "";
    var img = d.createElement('img');
    img.className = "nbcrs-badgetic-img";
    img.style.cssText = 'border: none;';
    
    img.src = 'data:image/png;base64,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' ;
    img.border = 0;

    var a=d.createElement('a');
    a.href='https://www.nbcrs.org/tic/info/' + ticId;
    a.className = "nbcrs-badgetic-href";
    a.setAttribute('target', '_blank');
    
    a.appendChild(img);

    insertAfter(a, currentScript);
    try {
        
    }
    catch(err) {
        console.log('Some error on code');
    }
    
}
t(window, document);