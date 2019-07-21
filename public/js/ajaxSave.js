/*
(function(window, document){

    const componentsMap = {};

    let init, select, setComponentsMap;

    select = (selector) => document.querySelector(selector);



    setComponentsMap = () => {
        componentsMap.submit = select();
    };

    init = () => {
        setComponentsMap();

    };


    return {
        init: init
    };


})(window, document).init();
*/

function get() {

    select = (selector) => document.querySelector(selector);
    selectAll = (selector) => document.querySelectorAll(selector);
    log = (string) => console.log(string);

    const tbody = select('tbody');
    const inputs = selectAll('input');

    console.log(tbody);
    console.log(inputs);
    tbody.onchange = e => {
        //log(e);
        if(e.target.tagName === 'INPUT'){
           // log(e.target.name + ' ' +  e.target.value + ' ' + e.target.dataset.uri);

        }
        e.target.tagName = () => {
            log(e.name + ' ' +  e.value + ' ' + e.dataset.uri);
        }
    };

    /*inputs.forEach(e => {
        //log();
        e.onchange = () => {
            log(e.name + ' ' +  e.value + ' ' + e.dataset.uri);
        }
    })*/
}
get();
