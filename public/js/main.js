
var typer = new TypeIt('.introText', {
    speed: 150,
    autoStart: true
})
    .type('Welcome To')
    .break()
    .type('BK Sports Massage')
    .pause(5000)
    .options({speed: 10})
    .delete()
    .options({speed: 150})
    .type('We offer a wide range of services, such as...')
    .break()
    .type('sports massage, deep tissue, cupping therapy')
    .pause(5000)
    .options({speed: 10})
    .delete()
    .options({speed: 150})
    .type('hot stone, body slimming massage, and many others...')
    .break()
    .type('book us now.');