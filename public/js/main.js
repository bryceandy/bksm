
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
    .type('Book Us Now.');