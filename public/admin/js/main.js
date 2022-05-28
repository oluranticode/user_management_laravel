    const modal = document.querySelector(".wrapper"),
        btn_pop = document.querySelector('.btn_pop'),
        close = document.querySelector('.close');
        // main = document.querySelector('.main')

        btn_pop.addEventListener('click', (e)=>{
            e.preventDefault();
            modal.style.display = 'block'
        })

        close.addEventListener('click', (e) => {
            e.preventDefault();
            modal.style.display = 'none'
        })

        // main.addEventListener('click', (e)=>{
        //     e.preventDefault();
        //     modal.style.display = 'none'
        // })