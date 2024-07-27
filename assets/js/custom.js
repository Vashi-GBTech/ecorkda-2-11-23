const governance_js = {
    membership_process : () => {
        let allCards = document.querySelectorAll('.drop-card')

        allCards.forEach(card => {
            card.clicked = false

            document.body.onclick = () => hideAll()

            card.querySelector('span').onclick = (e) => {
                e.stopPropagation()
                hideAll(card)

                card.clicked = !card.clicked
                if (card.clicked)  show(card)
                else hide(card)
            }
        });

        function show(card) {
            card.querySelector('span').querySelector('.icon').innerHTML = `<i class="fa-solid fa-minus"></i>`
            card.style.clipPath = 'polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%, 0% 0%)'
            card.querySelector('.drop').style.opacity = 1
        }

        function hide(card) {
            card.querySelector('span').querySelector('.icon').innerHTML = `<i class="fa-solid fa-plus"></i>`
            card.style.clipPath = 'polygon(0% 0%, 100% 0%, 100% 40px, 0% 40px, 0% 0%)'
            card.querySelector('.drop').style.opacity = 0
            card.clicked = false
        }

        function hideAll(card) {
            if (!card) allCards.forEach(c => {hide(c)})
            else allCards.forEach(c => {if (c != card)  hide(c)})
        }
    },
    
}
