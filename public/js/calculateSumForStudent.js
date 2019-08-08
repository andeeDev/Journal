
const SumArray = document.querySelectorAll('tr');
    for(let i = 1; i < SumArray.length; i++){
        console.log(SumArray[i].lastElementChild.firstElementChild.innerHTML);
        let sum = 0;
        for(let i = 1; i < SumArray[i].children.length - 1; i++){
            console.log(SumArray[i].children.length );
        }
        SumArray[i].lastElementChild.firstElementChild.innerHTML = `5`;
    }

    console.log(SumArray);