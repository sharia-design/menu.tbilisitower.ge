const blur = document.querySelector('.blur')
const catTabs = document.querySelectorAll('.cat-tab')
const catList = document.querySelectorAll('.cat-list')
const catContainer = document.querySelector('.category-container')

const offMenu = document.querySelector('.off-menu')
const burger = document.querySelector('.burger')
const offMenuClose = document.querySelector('.off-menu-close')

catTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        catTabs.forEach(el => {
            el.classList.remove('active')
        });
        tab.classList.add('active')
        let catType = tab.getAttribute('data-cat')

        catList.forEach(catEl => {
            catEl.classList.add('none')
        });
        catList.forEach(cat => {
            document.querySelector(`.cat-${catType}`).classList.remove('none')
        });

    })
});


// ===== Modal Detail ===== //
const menuItems = document.querySelectorAll('.menu-item')
const detailModal = document.querySelector('.detail')
const detailModalClose = document.querySelector('.detail-close')


let detailName = document.querySelector('.detail-name')
let detailImg = document.querySelector('.detail-image') 
let detailDesc = document.querySelector('.detail-modal-desc')
let detailPrice = document.querySelector('.detail-price')
let detailAlcoRow = document.querySelector('.detail-alco-row')

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        blur.classList.remove('none')
        detailModal.classList.remove('hide', 'modal-drop')
        detailModal.classList.add('modal-up')

        let id = item.getAttribute('data-id')
        let itemType = item.getAttribute('data-menu')
        const url = `/api/${itemType}/detail/${id}`
        const token = document
        .querySelector("[name='_token']")
        .getAttribute('content')

        let locale = document.getElementsByTagName('html')[0].getAttribute('lang');

        if(itemType == 'food') {
            detailAlcoRow.classList.add('none') 
        } else {
            detailAlcoRow.classList.remove('none') 
        }
        
        let data = new FormData()
        data.append('id', id)
        data.append('lang', locale)
        
        fetch(url, {
            headers: {
                'X-CSRF-Token': token
            },
            credentials: 'same-origin',
            method: 'POST',
            body: data
        })
        .then(response => response.json())
        .then(item => {
            detailName.innerHTML = item[`name_${locale}`]
            detailImg.src = `/public/uploads/${itemType}/${item[`image`]}`
            detailDesc.innerHTML = item[`desc_${locale}`]
            detailPrice.innerHTML = item[`price`] + ' ₾'
            if(itemType == 'food') {
                detailAlcoRow.classList.add('none') 
            } else {
                let detailAlcoval = document.querySelector('.detail-alco-val')
                detailAlcoRow.classList.remove('none') 
                detailAlcoval.innerHTML = item['alco'] + '°'
            }
            
        });
    
    })
});

detailModalClose.addEventListener('click', () => {
    closeDetail()
    console.log(detailImg)
})

function closeDetail() {
    blur.classList.add('none')
    detailModal.classList.add('modal-drop', 'hide')
    detailModal.classList.remove('modal-up', 'modal-drop')
    detailImg.src = `https://placehold.jp/740x640.png`
}

function showMenu() {
    offMenu.classList.remove('hide')
    offMenu.classList.add('show')
    document.getElementById('main-page').classList.add('sm')
}

function closeMenu() {
    offMenu.classList.remove('show')
    offMenu.classList.add('hide')
    document.getElementById('main-page').classList.remove('sm')

}

burger.addEventListener('click', showMenu)
offMenuClose.addEventListener('click', closeMenu)



const lang = document.querySelector('.lang--switcher')
const langDrop = document.querySelector('.lang-drop')
const langCloseBtn = document.querySelector('.lang-drop__close')

function openLang() {
    blur.classList.remove('none')
    langDrop.classList.remove('hide')
    langDrop.classList.add('show')
}

function closeLang() {
    blur.classList.add('none')
    langDrop.classList.add('hide')
    langDrop.classList.remove('show')
}

lang.addEventListener('click', openLang)
langCloseBtn.addEventListener('click', closeLang)


blur.addEventListener('click', () => {
    blur.classList.add('none')
    closeDetail()
    closeLang()
})

// === Scroll === //
let mainHeader = document.querySelector(".header");
let secondHeader = document.querySelector(".sticky-head");
let previousScrollPosition = 0;

const isScrollingDown = () => {
    let goingDown = false;

    let scrollPosition = window.pageYOffset;

    if (scrollPosition > previousScrollPosition) {
        goingDown = true;
    }

    previousScrollPosition = scrollPosition;

    return goingDown;
};

const handleScroll = () => {
    if (isScrollingDown()) {
        mainHeader.classList.add("fix");
        secondHeader.classList.remove("fix");
    } else {
        mainHeader.classList.remove("fix");
        secondHeader.classList.add("fix");
    }

    if (previousScrollPosition < 100) {
        mainHeader.classList.remove('fix')
        secondHeader.classList.remove('fix')
    }
};

window.addEventListener("scroll", handleScroll);


// --- Reviews Load
const reviewItems = document.querySelectorAll('.review-pagi-item')

reviewItems.forEach(item => {
    item.addEventListener('click', () => {
        Array.from(reviewItems).forEach(el => el.classList.remove('active'))
        item.classList.add('active')

        const reviewAvatar = document.querySelector('.comment-profile-avatar')
        const reviewName = document.querySelector('.comment-profile-name')
        const reviewDate = document.querySelector('.comment-profile-time')
        const reviewMessage = document.querySelector('.comment-container')
        const reviewSource = document.querySelector('.comment-rating-source')
        const reviewStars = document.querySelector('.comment-stars')

        let id = item.getAttribute('data-id')
        const url = `/api/food/detail/${id}`
        const token = document
            .querySelector("[name='_token']")
            .getAttribute('content')

        let data = new FormData()
        data.append('id', id)

        fetch(url, {
            headers: {
                'X-CSRF-Token': token
            },
            credentials: 'same-origin',
            method: 'POST',
            body: data
        })
            .then(response => response.json())
            .then(item => {
                reviewAvatar.src = '../storage/avatars/' + item.avatar
                reviewName.innerHTML = item.name
                reviewDate.innerHTML = item.date
                reviewMessage.innerHTML = item.message
                reviewSource.innerHTML = item.source
                reviewStars.innerHTML = ''

                for (let f = 0; f < item.rate; f++) {
                    reviewStars.innerHTML += `<span class="comment-star comment-star-full"></span>`
                }
                for (let e = 0; e < 5 - item.rate; e++) {
                    reviewStars.innerHTML += `<span class="comment-star comment-star-empty"></span>`
                }
            })
    })
})