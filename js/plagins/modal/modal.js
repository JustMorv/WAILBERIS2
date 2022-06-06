const modalOptions = {
    modal: "modal",
    modal_active:"modal--active",
    modal_has_scroll:"modal--has-scroll ",
    modal_dialog_body:"modal__dialog-body",
    modal_open:"js-modal-open",
    modal_close:"js-modal-close",
}
document.addEventListener("click",(event)=>{
    // open
    if(event.target.closest(`.${modalOptions.modal_open}`)){
        event.preventDefault()
        const targetParse = event.target.parentNode;
    
        const prodImg = targetParse.querySelector(".product__img").src;
        const prodName = targetParse.querySelector(".product__name").innerHTML
        const prodPrice = targetParse.querySelector(".product__Price0nlyModal").innerHTML


        document.querySelector(".card__modal-img img").src = prodImg
        document.querySelector(".card__modal-title").innerHTML = prodName
        document.querySelector(".modal__dialog-header-content").innerHTML = prodName        
        document.querySelector(".modal__footer-price").innerHTML = prodPrice 
        document.querySelector(".modal__footer-price2").innerHTML = prodPrice
        

        document.querySelector("body").classList.add("lock")

        const target = event.target.closest(`.${modalOptions.modal_open}`)
        const modalId = target.getAttribute('href').replace("#",'');
        const modal = document.getElementById(modalId)

        modal.classList.add(modalOptions.modal_active)
    }
    if(event.target.closest(`.${modalOptions.modal_close}`)|| event.target.classList.contains(modalOptions.modal_active)){
        event.preventDefault()
        document.querySelector("body").classList.remove("lock")
        const modal = event.target.closest(`.${modalOptions.modal}`)
        modal.classList.remove(modalOptions.modal_active)
    }

})