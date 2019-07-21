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
        const obj = {};
        if(e.target.tagName === 'INPUT'){
            log(e.target.name + ' ' +  e.target.value + ' ' + e.target.dataset.uri);
            const dataUri  = e.target.dataset.uri.split('/');
            obj.name = e.target.name;
            obj.value = e.target.value;
            obj.point_id = dataUri[0];
            obj.tch_id = dataUri[1];

            //log(obj);
        }
        //log(e.target);
        /*e.target.onchange = () => {
            log(e.target.name + ' ' +  e.target.value + ' I ' + e.target.dataset.uri);
        }*/
    };

    /*inputs.forEach(e => {
        //log();
        e.onchange = () => {
            log(e.name + ' ' +  e.value + ' ' + e.dataset.uri);
        }
    })*/
    let check_pattern_of_datauri = () => {

    }
}
get();
