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

    //log(greenLoader);

    const tbody = select('tbody');
    const inputs = selectAll('input');



    let greenLoader = select('#bm');
    console.log(greenLoader);
    let s = select('#animation');
    //select('#bm').style.visibility = 'hidden';
    console.log(s.style.visibility );
    console.log(getComputedStyle(s)['visibility']);
    whiteLoader = select('#animation');
    whiteLoader.classList.add('visibility-hidden');
    //console.log(inputs);
    greenLoader.classList.add('visibility-hidden');
    tbody.onchange = e => {

        //loaderToggler();
        //log(e);
        const obj = {};
        if(e.target.tagName === 'INPUT'){
            whiteLoader.classList.toggle('visibility-hidden');
            //greenLoader.classList.toggle('visibility-hidden');


            const dataUri  = e.target.dataset.uri.split('/');
            obj.name = e.target.name;
            obj.value = e.target.value;
            obj.point_id = dataUri[0];
            obj.tch_id = dataUri[1];
            check_pattern_of_datauri(e.target.dataset.uri);//

            const ajax = new XMLHttpRequest();
            ajax.dataType = 'json';
            //ajax.responseType = 'json';
            ajax.onload = () => {
                setTimeout(() => whiteLoader.classList.toggle('visibility-hidden'), 200);
                setTimeout(() => {
                    greenLoader.classList.toggle('visibility-hidden');
                    animation.goToAndPlay(2, true)
                }, 300 );
                setTimeout(() => {
                    greenLoader.classList.toggle('visibility-hidden');

                }, 2000 );
                //whiteLoader.classList.toggle('visibility-hidden');
                //animation.goToAndPlay(2, true);

                console.log(ajax.response);
            };
            /*ajax.onreadystatechange = () => {
                if(ajax.onreadystatechange === 4 && ajax.status === 200){
                    console.log(ajax);
                }
            };*/
            console.log(obj);


            ajax.open('POST', '/save');
            ajax.setRequestHeader('X-CSRF-TOKEN' , select('meta[name="csrf-token"]').content) ;
            //ajax.setRequestHeader('dataType', 'json');
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.contentType = "json";
                ajax.setRequestHeader('processData',  'false');
            //console.log(JSON.stringify(obj));
            ajax.send(JSON.stringify(obj));//
            //log();
           /* $.ajax({
                url : '/save',
                type : "post",
                async : true,
                data: {_token: select('meta[name="csrf-token"]')},
                success : function(data) {
                    console.log("data = ", data);

                }
            });*/

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
    let check_pattern_of_datauri = (str ) => {
        const f = /^\d+\/\d+$/;

        return f.test(str)  ;
    };

    /*let loaderToggler = () => {
       let loader =  select('#animation');
        if(loader.style.visibility === 'hidden'){
            loader.style.visibility = 'visible';
            return;
        }
        loader.style.visibility = 'hidden';
    }*/
}
get();
