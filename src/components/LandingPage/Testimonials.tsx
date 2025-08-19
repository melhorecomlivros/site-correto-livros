import { Star, Quote } from "lucide-react"

const Testimonials = () => {
  const testimonials = [
    {
      name: "Ana Paula Santos",
      age: "Mãe de 2 filhos",
      rating: 5,
      text: "Em apenas 2 semanas aplicando as técnicas do ebook, minha filha de 9 anos voltou a brincar de boneca e parou de se preocupar tanto com sua aparência. Sou muito grata!",
      highlight: "Resultados em 2 semanas"
    },
    {
      name: "Carla Mendes",
      age: "Mãe de 3 filhos",
      rating: 5,
      text: "O que mais me impressionou foi como aprendi a conversar com meus filhos sobre temas difíceis. Agora eles me procuram quando veem algo estranho na internet.",
      highlight: "Comunicação transformada"
    },
    {
      name: "Juliana Costa",
      age: "Mãe de 1 filho",
      rating: 5,
      text: "Estava desesperada vendo meu filho de 8 anos repetir palavrões de músicas. Com as estratégias do ebook, consegui filtrar o conteúdo e ele voltou a ser uma criança normal.",
      highlight: "Problema resolvido"
    }
  ]

  return (
    <section id="testimonials" className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16 animate-fade-in">
          <h2 className="text-3xl md:text-4xl font-heading font-bold mb-6">
            Mães que Já{" "}
            <span className="text-accent">Protegeram Seus Filhos</span>
          </h2>
          
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Depoimentos reais de mães que aplicaram nossas estratégias 
            e viram resultados surpreendentes
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8 mb-12">
          {testimonials.map((testimonial, index) => (
            <div 
              key={index}
              className="bg-card rounded-xl p-6 shadow-medium border border-border hover:shadow-strong transition-all duration-300 animate-slide-up"
              style={{ animationDelay: `${index * 0.2}s` }}
            >
              {/* Header */}
              <div className="flex items-center justify-between mb-4">
                <div>
                  <h4 className="font-semibold text-lg">{testimonial.name}</h4>
                  <p className="text-sm text-muted-foreground">{testimonial.age}</p>
                </div>
                
                <div className="flex gap-1">
                  {[...Array(testimonial.rating)].map((_, i) => (
                    <Star key={i} className="h-4 w-4 fill-warning text-warning" />
                  ))}
                </div>
              </div>

              {/* Quote */}
              <div className="relative">
                <Quote className="h-8 w-8 text-accent/30 absolute -top-2 -left-2" />
                <p className="text-muted-foreground leading-relaxed pl-6">
                  {testimonial.text}
                </p>
              </div>

              {/* Highlight */}
              <div className="mt-4 p-3 bg-accent/10 rounded-lg">
                <p className="text-sm font-semibold text-accent text-center">
                  ✓ {testimonial.highlight}
                </p>
              </div>
            </div>
          ))}
        </div>

        {/* Social proof stats */}
        <div className="bg-gradient-to-r from-accent/5 via-primary/5 to-accent/5 rounded-2xl p-8 md:p-12 border border-accent/20">
          <div className="grid md:grid-cols-3 gap-8 text-center">
            <div className="space-y-2">
              <div className="text-3xl md:text-4xl font-bold text-accent">500+</div>
              <div className="text-muted-foreground">Famílias protegidas</div>
            </div>
            
            <div className="space-y-2">
              <div className="text-3xl md:text-4xl font-bold text-accent">98%</div>
              <div className="text-muted-foreground">Taxa de sucesso</div>
            </div>
            
            <div className="space-y-2">
              <div className="text-3xl md:text-4xl font-bold text-accent">15 dias</div>
              <div className="text-muted-foreground">Tempo médio de resultado</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Testimonials