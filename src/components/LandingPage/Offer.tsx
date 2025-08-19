import { Button } from "@/components/ui/button"
import { CheckCircle, Gift, Shield, CreditCard } from "lucide-react"
import Countdown from "./Countdown"

const Offer = () => {
  const bonuses = [
    {
      title: "Plano de 30 dias de proteção digital",
      description: "Lista prática para verificar a segurança dos dispositivos dos seus filhos",
      value: "R$ 26,90"
    },
    {
      title: "Guia Rápido de Controles Parentais",
      description: "Roteiros prontos para abordar temas sensíveis com crianças",
      value: "R$ 19,90"
    },
    {
      title: "Lista de Brincadeiras",
      description: "Como configurar controles parentais em todos os dispositivos",
      value: "R$ 9,90"
    }
  ]

  const handlePurchase = () => {
    window.open("https://pay.cakto.com.br/b86bbhu_526867", "_blank")
  }

  return (
    <section id="offer" className="py-20 bg-gradient-to-br from-secondary/30 via-background to-accent/5">
      <div className="container mx-auto px-4">
        <div className="max-w-4xl mx-auto">
          <div className="text-center mb-12 animate-fade-in">
            <h2 className="text-3xl md:text-4xl font-heading font-bold mb-6">
              <span className="text-destructive">Oferta Especial:</span> Proteja Seus Filhos{" "}
              <span className="text-accent">Hoje Mesmo</span>
            </h2>
            
            <p className="text-xl text-muted-foreground">
              Tudo que você precisa para preservar a inocência dos seus filhos na era digital
            </p>
          </div>

          <div className="bg-card rounded-2xl shadow-strong border border-border overflow-hidden">
            <div className="bg-gradient-accent text-accent-foreground p-6 text-center">
              <h3 className="text-2xl font-bold">PACOTE COMPLETO DE PROTEÇÃO INFANTIL</h3>
              <p className="text-accent-foreground/90 mt-2">Estratégias comprovadas para pais conscientes</p>
            </div>

            <div className="p-8">
              {/* Main product */}
              <div className="border-b border-border pb-6 mb-6">
                <div className="flex items-start gap-4">
                  <div className="p-3 bg-accent/10 rounded-lg">
                    <Shield className="h-6 w-6 text-accent" />
                  </div>
                  <div className="flex-1">
                    <h4 className="text-xl font-bold mb-2">Infância Blindada: O Guia Prático Antiadultização</h4>
                    <p className="text-muted-foreground mb-4">
                      Guia completo com mais de 50 páginas de estratégias práticas e comprovadas
                    </p>
                    <div className="flex items-center gap-4">
                      <span className="text-2xl font-bold text-accent">R$ 36,90</span>
                      <span className="text-muted-foreground line-through">R$ 97</span>
                      <span className="bg-destructive text-destructive-foreground px-3 py-1 rounded-full text-sm font-semibold">
                        52% OFF
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              {/* Bonuses */}
              <div className="mb-8">
                <div className="flex items-center gap-2 mb-6">
                  <Gift className="h-5 w-5 text-warning" />
                  <h4 className="text-lg font-bold">BÔNUS EXCLUSIVOS (por tempo limitado)</h4>
                </div>

                <div className="space-y-4">
                  {bonuses.map((bonus, index) => (
                    <div 
                      key={index}
                      className="flex items-start gap-4 p-4 bg-warning/5 border border-warning/20 rounded-lg"
                    >
                      <CheckCircle className="h-5 w-5 text-warning mt-1 flex-shrink-0" />
                      <div className="flex-1">
                        <div className="flex items-center justify-between mb-1">
                          <h5 className="font-semibold">{bonus.title}</h5>
                          <span className="text-warning font-bold">{bonus.value}</span>
                        </div>
                        <p className="text-sm text-muted-foreground">{bonus.description}</p>
                      </div>
                    </div>
                  ))}
                </div>
              </div>

              {/* Total value */}
              <div className="bg-accent/5 border border-accent/20 rounded-xl p-6 mb-8">
                <div className="text-center">
                  <p className="text-muted-foreground mb-2">Valor total se comprado separadamente:</p>
                  <div className="flex items-center justify-center gap-4 mb-4">
                    <span className="text-3xl font-bold line-through text-muted-foreground">R$ 153,60</span>
                    <span className="text-4xl font-bold text-accent">R$ 36,90</span>
                  </div>
                  <p className="text-accent font-semibold">Economia de R$ 116,70 hoje!</p>
                </div>
              </div>

              {/* Countdown */}
              <div className="mb-8">
                <Countdown />
              </div>

              {/* CTA Button */}
              <div className="text-center space-y-4">
                <Button 
                  variant="cta" 
                  size="xl"
                  onClick={handlePurchase}
                  className="w-full font-heading text-lg"
                >
                  <CreditCard className="h-5 w-5 mr-2" />
                  GARANTIR MINHA CÓPIA AGORA
                </Button>
                
                <p className="text-sm text-muted-foreground">
                  Pagamento 100% seguro • Acesso imediato • Garantia de 7 dias
                </p>
              </div>

              {/* Guarantee */}
              <div className="mt-8 p-6 bg-primary/5 border border-primary/20 rounded-xl text-center">
                <div className="flex items-center justify-center gap-2 mb-3">
                  <Shield className="h-5 w-5 text-primary" />
                  <span className="font-bold text-primary">GARANTIA INCONDICIONAL</span>
                </div>
                <p className="text-sm text-muted-foreground">
                  Se você não sentir diferença na forma como protege seu filho em 7 dias, 
                  devolvemos 100% do seu dinheiro. Sem perguntas, sem complicações.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Offer