import { Button } from "@/components/ui/button"
import heroChild from "@/assets/hero-child.jpg"

const Hero = () => {
  const scrollToOffer = () => {
    const offerSection = document.getElementById('offer')
    offerSection?.scrollIntoView({ behavior: 'smooth' })
  }

  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Background gradient */}
      <div className="absolute inset-0 bg-gradient-to-br from-background via-background/95 to-secondary/20" />
      
      {/* Content */}
      <div className="relative z-10 container mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
        {/* Text Content */}
        <div className="text-center lg:text-left space-y-8 animate-fade-in">
          <div className="space-y-4">
            <h1 className="text-4xl md:text-5xl lg:text-6xl font-heading font-bold leading-tight">
              <span className="text-foreground">Nossos Filhos Estão</span>{" "}
              <span className="text-gradient-cta">Perdendo a Infância</span>
            </h1>
            <p className="text-xl md:text-2xl text-muted-foreground font-medium">
              E a culpa não é só da internet
            </p>
          </div>
          
          <p className="text-lg text-muted-foreground max-w-2xl">
            Descubra como proteger seus filhos da adultização precoce que está roubando 
            a inocência infantil através de músicas, redes sociais e influenciadores.
          </p>
          
          <div className="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
            <Button 
              variant="cta" 
              size="xl"
              onClick={scrollToOffer}
              className="font-heading"
            >
              Quero Proteger Meu Filho Agora
            </Button>
            <Button 
              variant="hero" 
              size="xl"
              onClick={() => document.getElementById('problem')?.scrollIntoView({ behavior: 'smooth' })}
            >
              Entender o Problema
            </Button>
          </div>
          
          <div className="flex items-center justify-center lg:justify-start gap-4 text-sm text-muted-foreground">
            <div className="flex items-center gap-2">
              <div className="w-2 h-2 bg-warning rounded-full animate-pulse" />
              <span>Oferta por tempo limitado</span>
            </div>
            <div className="flex items-center gap-2">
              <div className="w-2 h-2 bg-accent rounded-full" />
              <span>Estratégias comprovadas</span>
            </div>
          </div>
        </div>
        
        {/* Image */}
        <div className="relative animate-slide-up">
          <div className="relative rounded-2xl overflow-hidden shadow-strong">
            <img 
              src={heroChild} 
              alt="Criança pensativa segurando smartphone, representando os desafios da era digital" 
              className="w-full h-auto object-cover"
            />
            <div className="absolute inset-0 bg-gradient-to-t from-background/60 via-transparent to-transparent" />
          </div>
          
          {/* Floating stats */}
          <div className="absolute -bottom-6 -left-6 bg-card border border-border rounded-xl p-4 shadow-medium">
            <div className="text-2xl font-bold text-destructive">73%</div>
            <div className="text-sm text-muted-foreground">das crianças expostas</div>
          </div>
          
          <div className="absolute -top-6 -right-6 bg-card border border-border rounded-xl p-4 shadow-medium">
            <div className="text-2xl font-bold text-warning">8 anos</div>
            <div className="text-sm text-muted-foreground">idade média</div>
          </div>
        </div>
      </div>
      
      {/* Scroll indicator */}
      <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div className="w-6 h-10 border-2 border-muted-foreground rounded-full flex justify-center">
          <div className="w-1 h-3 bg-muted-foreground rounded-full mt-2 animate-pulse"></div>
        </div>
      </div>
    </section>
  )
}

export default Hero