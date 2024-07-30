const card = document.querySelectorAll('.card')

// J'ajoute un évènement pouyr detecter quand la souris bouge sur ma card pour ensuite modifier l'angle de rotation
card.forEach(el => {
    el.addEventListener('mousemove', e => {

        let elRect = el.getBoundingClientRect()

        let x = e.clientX - elRect.x
        let y = e.clientY - elRect.y

        let midCardWidth = elRect.width / 2
        let midCardHeight = elRect.height / 2

        let angleY = (x - midCardWidth) 
        let angleX = (midCardHeight - y) 

        el.children[0].style.transform = `rotateX(${angleX}deg) rotateY(${angleY}deg) scale(1.1)`

    })
    // Remet le logo a 0 quand la souris n'est plus dessus
    el.addEventListener('mouseleave', e => {
        el.children[0].style.transform = `rotateX(0deg) rotateY(0deg) scale(1)`
    })

})