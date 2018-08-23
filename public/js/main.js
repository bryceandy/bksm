
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

var tl = new TimelineMax();
tl.staggerFrom(".stagger li", 0.5, {opacity:0, cycle:{x:function(i){return i*40;}, ease:function(i){return Back.easeOut;}}}, 0.2);
tl.timeScale(0.5);

//scrollmagic animations
var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
    triggerElement: "#waw h1",
    triggerHook: "onEnter",
    offset: 150,
    reverse: false
})
    .setTween(TweenMax.from("#waw h1", 1, {x: 450, autoAlpha: 0.0, ease: Power1.easeIn}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: ".para",
    triggerHook: "onEnter",
    offset: 200,
    reverse: false
})
    .setTween(TweenMax.from(".para", .5, {y: 350, autoAlpha: 0.0, ease: Power1.easeIn}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#bgimg",
    triggerHook: "onEnter",
    offset:-200,
    duration: window.innerHeight * 0.5
})
    .setTween(TweenMax.to("#bgimg", 3, {rotation: 30}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: ".toggle2",
    triggerHook: "onCenter",
    reverse: false
})
    .setTween(tl)
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#client1",
    triggerHook: "onEnter",
    reverse: false
})
    .setTween(TweenMax.from("#client1", 1, {scale:0.7}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#client2",
    triggerHook: "onEnter",
    reverse: false
})
    .setTween(TweenMax.from("#client2", 1, {scale:0.7}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#client3",
    triggerHook: "onEnter",
    reverse: false
})
    .setTween(TweenMax.from("#client3", 1, {scale:0.7}))
    .addTo(controller);