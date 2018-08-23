
var typer = new TypeIt('.introText', {
    speed: 150,
    autoStart: true
})
    .type('Welcome')
    .break()
    .type('to BK Sports Massage')
    .pause(5000)
    .options({speed: 10})
    .delete()
    .options({speed: 150})
    .type('We offer a wide range of services, like')
    .break()
    .type('Sports Massage, Deep-Tissue, Cupping Therapy')
    .break()
    .type('Swedish, Thai, Prenatal, Hot-Stone Massages')
    .pause(5000)
    .options({speed: 10})
    .delete()
    .options({speed: 150})
    .type('Body Slimming, Scrubs, Facials, Waxing, Sauna and many more...')
    .break()
    .pause(2500)
    .type('Book Us Now.')
    .break()
    .options({speed: 50})
    .type('Spa treatments at the comfort of your own home');

//scrollmagic animations
var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
    triggerElement: "#waw h1",
    triggerHook: "onEnter",
    reverse: false
})
    .setTween(TweenMax.from("#waw h1", 1, {x: 450, autoAlpha: 0.0, ease: Power1.easeIn}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: ".para",
    triggerHook: "onCenter",
    reverse: false
})
    .setTween(TweenMax.from(".para", 1, {y: -450, autoAlpha: 0.0, ease: Power1.easeIn}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#bgimage",
    triggerHook: "onEnter",
    offset:-200,
    duration: window.innerHeight * 0.5
})
    .setTween(TweenMax.to("#bgimage", 7, {rotation: 30}))
    .addTo(controller);