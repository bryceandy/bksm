
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
    .type('We offer a wide range of services, such as...')
    .break()
    .type('sports massage, deep tissue, cupping therapy')
    .break()
    .type('Swedesh, Thai, prenatal, hot stone massages')
    .pause(5000)
    .options({speed: 10})
    .delete()
    .options({speed: 150})
    .type('body slimming, scrubs, facials, waxing and many more...')
    .break()
    .type('Book Us Now.');