import { AlertTriangle, TrendingDown, Users, Clock } from "lucide-react"
import { Button } from "@/components/ui/button"

const Urgency = () => {
  const scrollToOffer = () => {
    const offerSection = document.getElementById('offer')
    offerSection?.scrollIntoView({ behavior: 'smooth' })
  }

  return (
    <section className="py-20 bg-gradient-to-br from-destructive/5 via-accent/5 to-destructive/5">
      <div className="container mx-auto px-4">
        <div className="max-w-4xl mx-auto text-center">
          <div className="mb-12 animate-fade-in">
            <div className="inline-flex items-center gap-3 bg-destructive/10 text-destructive px-6 py-3 rounded-full mb-6">
              <AlertTriangle className="h-5 w-5 animate-pulse" />
              <span className="font-semibold">O QUE ACONTECE SE VOCÊ NÃO AGIR HOJE?</span>
            </div>
            
            <h2 className="text-3xl md:text-4xl font-heading font-bold mb-6">
              Cada Dia que Passa, Seus Filhos{" "}
              <span className="text-destructive">Ficam Mais Vulneráveis</span>
            </h2>
          </div>

          <div className="grid md:grid-cols-3 gap-8 mb-12">
            <div className="bg-card rounded-xl p-6 shadow-medium border border-destructive/20 animate-slide-up">
              <TrendingDown className="h-8 w-8 text-destructive mx-auto mb-4" />
              <h3 className="font-bold text-lg mb-3">Autoestima em Queda</h3>
              <p className="text-muted-foreground text-sm">
                A cada dia exposta a padrões inadequados, a autoestima do seu filho 
                diminui gradualmente
              </p>
            </div>

            <div className="bg-card rounded-xl p-6 shadow-medium border border-destructive/20 animate-slide-up" style={{ animationDelay: '0.2s' }}>
              <Users className="h-8 w-8 text-destructive mx-auto mb-4" />
              <h3 className="font-bold text-lg mb-3">Influência Negativa</h3>
              <p className="text-muted-foreground text-sm">
                Quanto mais tempo sem proteção, maior a influência de conteúdos 
                prejudiciais
              </p>
            </div>

            <div className="bg-card rounded-xl p-6 shadow-medium border border-destructive/20 animate-slide-up" style={{ animationDelay: '0.4s' }}>
              <Clock className="h-8 w-8 text-destructive mx-auto mb-4" />
              <h3 className="font-bold text-lg mb-3">Tempo Perdido</h3>
              <p className="text-muted-foreground text-sm">
                A infância perdida não volta. Cada momento é precioso e 
                irreversível
              </p>
            </div>
          </div>

          <div className="bg-gradient-to-r from-destructive/10 via-accent/10 to-destructive/10 rounded-2xl p-8 md:p-12 border border-destructive/20 mb-8">
            <h3 className="text-2xl md:text-3xl font-heading font-bold mb-6">
              A Pergunta que Você Precisa se Fazer:
            </h3>
            
            <div className="text-xl md:text-2xl text-destructive font-semibold mb-6 italic">
              "Que tipo de adulto meu filho se tornará se eu não protegê-lo agora?"
            </div>
            
            <p className="text-lg text-muted-foreground mb-8 max-w-3xl mx-auto">
              Estudos mostram que crianças expostas à adultização precoce têm 3x mais chances 
              de desenvolver ansiedade, depressão e problemas de relacionamento na vida adulta.
            </p>

            <div className="bg-card rounded-xl p-6 border border-border">
              <h4 className="font-bold text-lg mb-4 text-accent">Mas ainda há tempo de mudar isso!</h4>
              <p className="text-muted-foreground mb-6">
                Pais que implementaram nossas estratégias viram mudanças positivas em menos de 15 dias. 
                Seus filhos voltaram a ser crianças felizes, seguras e protegidas.
              </p>
              
              <Button 
                variant="cta" 
                size="xl"
                onClick={scrollToOffer}
                className="font-heading"
              >
                Sim, Quero Proteger Meu Filho Agora
              </Button>
            </div>
          </div>

          <div className="text-center">
            <p className="text-sm text-muted-foreground italic">
              "O maior arrependimento dos pais não é o que fizeram, mas o que deixaram de fazer 
              quando ainda era tempo."
            </p>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Urgency