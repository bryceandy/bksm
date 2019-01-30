
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
    offset: 100,
    reverse: false
})
    .setTween(TweenMax.from(".para", .5, {y: 250, autoAlpha: 0.0, ease: Power1.easeIn}))
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

//cursor

const cursor = {
    delay: 5,
    _x: 0,
    _y: 0,
    endX: (window.innerWidth / 2),
    endY: (window.innerHeight / 2),
    cursorVisible: true,
    cursorEnlarged: false,
    $dot: document.querySelector('.cursor-dot'),
    $outline: document.querySelector('.cursor-dot-outline'),

    init: function() {
        // Set up element sizes
        //this.dotSize = this.$dot.offsetWidth;
        //this.outlineSize = this.$outline.offsetWidth;

        this.setupEventListeners();
        this.animateDotOutline();
    },

    setupEventListeners: function() {
        const self = this;

        // Anchor hovering
        document.querySelectorAll('a').forEach( el => {
            el.addEventListener('mouseover', () => {
                self.cursorEnlarged = true;
                self.toggleCursorSize();
            });
            el.addEventListener('mouseout', () => {
                self.cursorEnlarged = false;
                self.toggleCursorSize();
            });
        });

        // Click events
        document.addEventListener('mousedown', () => {
            self.cursorEnlarged = true;
            self.toggleCursorSize();
        });
        document.addEventListener('mouseup', () => {
            self.cursorEnlarged = false;
            self.toggleCursorSize();
        });

        document.addEventListener('mousemove', e => {
            // Show the cursor
            self.cursorVisible = true;
            self.toggleCursorVisibility();

            // Position the dot
            self.endX = e.pageX;
            self.endY = e.pageY;
            self.$dot.style.top = self.endY + 'px';
            self.$dot.style.left = self.endX + 'px';
        });

        // Hide/show cursor
        document.addEventListener('mouseenter', () => {
            self.cursorVisible = true;
            self.toggleCursorVisibility();
            self.$dot.style.opacity = 1;
            self.$outline.style.opacity = 1;
        });

        document.addEventListener('mouseleave', () => {
            self.cursorVisible = true;
            self.toggleCursorVisibility();
            self.$dot.style.opacity = 0;
            self.$outline.style.opacity = 0;
        });
    },

    animateDotOutline: function() {
        var self = this;

        self._x += (self.endX - self._x) / self.delay;
        self._y += (self.endY - self._y) / self.delay;
        self.$outline.style.top = self._y + 'px';
        self.$outline.style.left = self._x + 'px';

        requestAnimationFrame(this.animateDotOutline.bind(self));
    },

    toggleCursorSize: function() {
        var self = this;

        if (self.cursorEnlarged) {
            self.$dot.style.transform = 'translate(-50%, -50%) scale(0.75)';
            self.$outline.style.transform = 'translate(-50%, -50%) scale(1.5)';
        } else {
            self.$dot.style.transform = 'translate(-50%, -50%) scale(1)';
            self.$outline.style.transform = 'translate(-50%, -50%) scale(1)';
        }
    },

    toggleCursorVisibility: function() {
        var self = this;

        if (self.cursorVisible) {
            self.$dot.style.opacity = 1;
            self.$outline.style.opacity = 1;
        } else {
            self.$dot.style.opacity = 0;
            self.$outline.style.opacity = 0;
        }
    }
};

cursor.init();

//end cursor
