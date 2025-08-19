import { Button } from "@/components/ui/button"
import { CheckCircle, Shield, Heart, Users, Book } from "lucide-react"
import ebookCover from "@/assets/infancia-blindada-cover.jpg"

const Solution = () => {
  const benefits = [
    {
      icon: Shield,
      title: "Estratégias de Proteção",
      description: "Técnicas práticas para filtrar conteúdos inadequados"
    },
    {
      icon: Heart,
      title: "Fortalecimento da Autoestima",
      description: "Métodos para construir uma autoimagem saudável"
    },
    {
      icon: Users,
      title: "Comunicação Efetiva",
      description: "Como conversar sobre temas difíceis de forma adequada"
    },
    {
      icon: Book,
      title: "Guia Passo a Passo",
      description: "Plano de ação claro e fácil de implementar"
    }
  ]

  const scrollToOffer = () => {
    const offerSection = document.getElementById('offer')
    offerSection?.scrollIntoView({ behavior: 'smooth' })
  }

  return (
    <section className="py-20 bg-secondary/20">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16 animate-fade-in">
          <div className="inline-flex items-center gap-3 bg-accent/10 text-accent px-6 py-3 rounded-full mb-6">
            <Shield className="h-5 w-5" />
            <span className="font-semibold">SOLUÇÃO COMPROVADA</span>
          </div>
          
          <h2 className="text-3xl md:text-4xl font-heading font-bold mb-6">
            Como Proteger Seus Filhos{" "}
            <span className="text-accent">de Forma Definitiva</span>
          </h2>
          
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            O único guia completo que você precisa para preservar a inocência 
            dos seus filhos na era digital
          </p>
        </div>

        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Ebook preview */}
          <div className="relative animate-slide-up">
            <div className="relative">
              <img 
                src={ebookCover} 
                alt="Capa do ebook Protegendo a Inocência Infantil" 
                className="w-full max-w-md mx-auto rounded-2xl shadow-strong"
              />
              
              {/* Floating elements */}
              <div className="absolute -top-4 -right-4 bg-accent text-accent-foreground px-4 py-2 rounded-full font-bold text-sm shadow-medium">
                Mais de 50 páginas
              </div>
              
              <div className="absolute -bottom-4 -left-4 bg-warning text-warning-foreground px-4 py-2 rounded-full font-bold text-sm shadow-medium">
                Guia Prático
              </div>
            </div>
          </div>

          {/* Benefits */}
          <div className="space-y-8">
            <div>
              <h3 className="text-2xl font-heading font-bold mb-6">
                O que você vai descobrir:
              </h3>
              
              <div className="space-y-4">
                {benefits.map((benefit, index) => (
                  <div 
                    key={index}
                    className="flex items-start gap-4 p-4 rounded-lg hover:bg-card/50 transition-colors animate-fade-in"
                    style={{ animationDelay: `${index * 0.1}s` }}
                  >
                    <div className="p-2 bg-accent/10 rounded-lg flex-shrink-0">
                      <benefit.icon className="h-5 w-5 text-accent" />
                    </div>
                    <div>
                      <h4 className="font-semibold mb-1">{benefit.title}</h4>
                      <p className="text-muted-foreground text-sm">{benefit.description}</p>
                    </div>
                  </div>
                ))}
              </div>
            </div>

            <div className="bg-accent/5 border border-accent/20 rounded-xl p-6">
              <h4 className="font-heading font-bold text-lg mb-4 flex items-center gap-2">
                <CheckCircle className="h-5 w-5 text-accent" />
                Resultados Garantidos
              </h4>
              
              <ul className="space-y-2 text-sm">
                <li className="flex items-center gap-2">
                  <CheckCircle className="h-4 w-4 text-accent" />
                  <span>Crianças mais seguras e protegidas</span>
                </li>
                <li className="flex items-center gap-2">
                  <CheckCircle className="h-4 w-4 text-accent" />
                  <span>Autoestima infantil fortalecida</span>
                </li>
                <li className="flex items-center gap-2">
                  <CheckCircle className="h-4 w-4 text-accent" />
                  <span>Comunicação familiar melhorada</span>
                </li>
                <li className="flex items-center gap-2">
                  <CheckCircle className="h-4 w-4 text-accent" />
                  <span>Paz de espírito para os pais</span>
                </li>
              </ul>
            </div>

            <div className="flex flex-col sm:flex-row gap-4">
              <Button 
                variant="cta" 
                size="xl"
                onClick={scrollToOffer}
                className="flex-1 font-heading"
              >
                Quero Proteger Meu Filho Agora
              </Button>
              
              <Button 
                variant="accent" 
                size="xl"
                onClick={() => document.getElementById('testimonials')?.scrollIntoView({ behavior: 'smooth' })}
              >
                Ver Depoimentos
              </Button>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Solution