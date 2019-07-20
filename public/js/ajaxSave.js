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
